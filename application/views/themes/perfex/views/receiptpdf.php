<?php

defined('BASEPATH') or exit('No direct script access allowed'); 



if(isset($receipt->pdf_for) && ($receipt->pdf_for == 'both'  || $receipt->pdf_for == 'office') ){

    $dimensions = $pdf->getPageDimensions();

    $info_right_column = '';
    $info_left_column  = '';

    // Header
    $info_right_column = '<br><table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0" style=" margin:0">
    <tr>
        <th style="width:60%; text-align:right"><b> Voucher No :</b></th>
        <th style="width:40%; text-align: right; ">'.$receipt->VNo.'</th>
    </tr>
    <tr>
        <th style="width:60%; text-align:right"><b> Mode of Payment :</b> </th>
        <th style="width:40%; text-align: right; ">'.$receipt->mode_of_payment.'</th>
    </tr> 
    <tr> 
        <th style="width:60%; text-align:right"><b> Date :</b> </th>
        <th style="width:40%; text-align: right; ">'.date( 'd-M-Y' ,strtotime($receipt->payment_date)).'</th>
    </tr>
    '; 
    $info_right_column .= '</table>'; 

    // Add logo
    $info_left_column .= pdf_logo_url();
    // Write top left logo and right column info/text
    pdf_multi_row($info_left_column, $info_right_column, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']);



    $organization_info = '<div style="color:#424242;">';
    $organization_info .= format_organization_info();
    $organization_info .= '</div>';
    $right_info = "";
    pdf_multi_row($organization_info, $right_info, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']);


    // Header
    $headerhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0" style=" margin:0">
    <tr>
        <td> </td>
        <td colspan="2" style="background-color: #000 ;  color:#fff;  font-size: 24px;  text-align: center; " > RECEIPT VOUCHER </td>
        <td> </td>
    </tr>   
    <tr>
        <td width="40%"> </td>
        <td width="20%" > <div style="border: 3px solid #000 ;  color:#000 ;  border-radius: 10px ;  font-size: 18px;  text-align: center; " > OFFICE COPY  </div>  </td>
        <td width="40%"> </td>
    </tr>
    '; 
    $headerhtml .= '</table>'; 
    $pdf->writeHTML($headerhtml, true, false, false, false, ''); 

    // Header
    $tblhtml = '<h5>Receipt Details (DR)</h5>
    <table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="10" border="0">
    <thead>
    <tr height="30" style="color:#fff; " bgcolor="#000">
        <th width="10%; ">S. No.</th>
        <th style="text-align:center" width="30%; ">Head Of Accounts.</th>
        <th style="text-align:center" width="40%; ">Particulars</th>
        <th style="text-align:right" width="20%; ">Amount (PKR) </th> 
    </tr>
    <thead>
    <tbody>
    '; 

    $total_debit = 0;
    foreach ($receipt->details as $key => $detail ) {
        # code...
        $key++;  
        $total_debit += $detail["debit"] ;
        $tblhtml .= '<tr>'; 
        $tblhtml .= '<td style="font-size:14px; ">'. $key .'</td>'; 
        $tblhtml .= '<td style="font-size:14px; "> '.$detail["acc_no"].' - '.$detail["HeadName"].' </td>'; 
        $tblhtml .= '<td style="font-size:14px; ">'.$detail["description"].' </td>'; 
        $tblhtml .= '<td style="text-align:right; font-size:14px; " >'.number_format($detail["debit"] ,2 ).'  </td>'; 
        $tblhtml .= '</tr>'; 
        $tblhtml .= '</tbody>'; 
    }

    $tblhtml .= '<tfoot>'; 
    $tblhtml .= '<tr  style="color:#fff; " bgcolor="#000">'; 
    $tblhtml .= '<td  style="text-align:right; " colspan="3" > Total</td>'; 
    $tblhtml .= '<td  style="text-align:right" >'.number_format($total_debit, 2).'</td>'; 
    $tblhtml .= '</tr>'; 
    $tblhtml .= '</tfoot>'; 

    $tblhtml .= '</table>'; 
    $pdf->writeHTML($tblhtml, true, false, false, false, ''); 


    // Header
    $tblhtml_2 = '<h5>Receipt Details (CR)</h5>

    <table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="10" border="0">
    <thead>
    <tr style="color:#fff; " bgcolor="#000">
        <th width="10%; ">S. No.</th>
        <th style="text-align:center;" width="30%; ">Head Of Accounts.</th>
        <th style="text-align:center; text-align:right; " width="20%; ">Payee Name</th>
        <th style="text-align:center; text-align:right; " width="20%; ">Payee Mode</th>
        <th style="text-align:right;" width="20%; ">Amount (PKR) </th> 
    </tr>
    <thead>
    <tbody>
    '; 

    $tblhtml_2 .= '<tr>'; 
    $tblhtml_2 .= '<td style="font-size:14px; "> 1</td>'; 
    $tblhtml_2 .= '<td style="font-size:14px; "> '.$receipt->modes_accounts.' - '.$receipt->HeadName.' </td>'; 
    $tblhtml_2 .= '<td style="font-size:14px; text-align:right; ">'.$receipt->payee_name.'</td>'; 
    $tblhtml_2 .= '<td style="font-size:14px; text-align:right; ">'.$receipt->mode_of_payment.'</td>'; 
    $tblhtml_2 .= '<td style="text-align:right; font-size:14px; " >'.number_format($receipt->amount ,2).' </td>'; 
    $tblhtml_2 .= '</tr>'; 
    $tblhtml_2 .= '</tbody>'; 

    $tblhtml_2 .= '<tfoot>'; 
    $tblhtml_2 .= '<tr  style="color:#fff; " bgcolor="#000">'; 
    $tblhtml_2 .= '<td  style="text-align:right; " colspan="4" > Total</td>'; 
    $tblhtml_2 .= '<td  style="text-align:right" >'.number_format($receipt->amount ,2).'  </td>'; 
    $tblhtml_2 .= '</tr>'; 
    $tblhtml_2 .= '</tfoot>'; 

    $tblhtml_2 .= '</table>'; 
    $pdf->writeHTML($tblhtml_2, true, false, false, false, ''); 




    $amount = $receipt->amount;
    $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    $words = $formatter->format($amount);

    // amount
    $amounthtml = '
    <table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">
    <thead>
    <tr>
        <th width="30%"><b>Amount </b> </th>
        <th width="70%">: '.$amount.'</th>
    </tr>
    <tr>
        <th width="30%"><b>Amount In Words</b></th>
        <th width="70%">: '.ucfirst($words).'</th>
    </tr>

    <tr>
        <th width="30%"><b>Issued By </b></th>
        <th width="70%">: '.get_staff_full_name($receipt->addedfrom).'  </th>
    </tr>

    <thead>
    <tbody>
    ';  

    $amounthtml .= '</tbody>'; 

    $amounthtml .= '</table>'; 
    $pdf->writeHTML($amounthtml, true, false, false, false, ''); 




    // Header
    $headerhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0" style=" margin:0">
    <tr>
        <td colspan="4"  style="height:80px; border:1px solid #000 ;">  &nbsp; </td>
    </tr>
    <tr>
        <td style="text-align:center"> _____________ </td>
        <td style="text-align:center"> _____________ </td>
        <td style="text-align:center"> _____________ </td>
        <td style="text-align:center"> _____________ </td>
    </tr>   
    <tr>
        <td style="text-align:center">Issued By </td>
        <td style="text-align:center"> Checked By </td>
        <td style="text-align:center"> Approved By </td>
        <td style="text-align:center"> Received By </td>
    </tr>
    '; 
    $headerhtml .= '</table>'; 
    $pdf->writeHTML($headerhtml, true, false, false, false, ''); 

}















if(isset($receipt->pdf_for) && ($receipt->pdf_for == 'both' ) ){

    $pdf->AddPage(); // Add a new page

}

if(isset($receipt->pdf_for) && ($receipt->pdf_for == 'both'  || $receipt->pdf_for == 'client') ){

    $dimensions = $pdf->getPageDimensions();

    $info_right_column = '';
    $info_left_column  = '';


    // Header
    $info_right_column = '<br><table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0" style=" margin:0">
    <tr>
        <th style="width:60%; text-align:right"><b> Voucher No :</b></th>
        <th style="width:40%; text-align: right; ">'.$receipt->VNo.'</th>
    </tr>
    <tr>
        <th style="width:60%; text-align:right"><b> Mode of Payment :</b> </th>
        <th style="width:40%; text-align: right; ">'.$receipt->mode_of_payment.'</th>
    </tr> 
    <tr> 
        <th style="width:60%; text-align:right"><b> Date :</b> </th>
        <th style="width:40%; text-align: right; ">'.date( 'd-M-Y' ,strtotime($receipt->payment_date)).'</th>
    </tr>
    '; 
    $info_right_column .= '</table>'; 

    // Add logo
    $info_left_column .= pdf_logo_url();
    // Write top left logo and right column info/text
    pdf_multi_row($info_left_column, $info_right_column, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']);



    $organization_info = '<div style="color:#424242;">';
    $organization_info .= format_organization_info();
    $organization_info .= '</div>';
    $right_info = "";
    pdf_multi_row($organization_info, $right_info, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']);


    // Header
    $headerhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0" style=" margin:0">
    <tr>
        <td> </td>
        <td colspan="2" style="background-color: #000 ;  color:#fff;  font-size: 24px;  text-align: center; " > RECEIPT VOUCHER </td>
        <td> </td>
    </tr>   
    <tr>
        <td width="40%"> </td>
        <td width="20%" > <div style="border: 3px solid #000 ;  color:#000 ;  border-radius: 10px ;  font-size: 18px;  text-align: center; " > CLIENT COPY  </div>  </td>
        <td width="40%"> </td>
    </tr>
    '; 
    $headerhtml .= '</table>'; 
    $pdf->writeHTML($headerhtml, true, false, false, false, ''); 

    // Header
    $tblhtml = '<h5>Receipt Details (DR)</h5>
    <table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="10" border="0">
    <thead>
    <tr height="30" style="color:#fff; " bgcolor="#000">
        <th width="10%; ">S. No.</th>
        <th style="text-align:center" width="30%; ">Head Of Accounts.</th>
        <th style="text-align:center" width="40%; ">Particulars</th>
        <th style="text-align:right" width="20%; ">Amount (PKR) </th> 
    </tr>
    <thead>
    <tbody>
    '; 

    $total_debit = 0;
    foreach ($receipt->details as $key => $detail ) {
        # code...
        $key++;  
        $total_debit += $detail["debit"] ;
        $tblhtml .= '<tr>'; 
        $tblhtml .= '<td style="font-size:14px; ">'. $key .'</td>'; 
        $tblhtml .= '<td style="font-size:14px; "> '.$detail["acc_no"].' - '.$detail["HeadName"].' </td>'; 
        $tblhtml .= '<td style="font-size:14px; ">'.$detail["description"].' </td>'; 
        $tblhtml .= '<td style="text-align:right; font-size:14px; " >'.number_format($detail["debit"] ,2 ).'  </td>'; 
        $tblhtml .= '</tr>'; 
        $tblhtml .= '</tbody>'; 
    }

    $tblhtml .= '<tfoot>'; 
    $tblhtml .= '<tr  style="color:#fff; " bgcolor="#000">'; 
    $tblhtml .= '<td  style="text-align:right; " colspan="3" > Total</td>'; 
    $tblhtml .= '<td  style="text-align:right" >'.number_format($total_debit, 2).'</td>'; 
    $tblhtml .= '</tr>'; 
    $tblhtml .= '</tfoot>'; 

    $tblhtml .= '</table>'; 
    $pdf->writeHTML($tblhtml, true, false, false, false, ''); 





    




    $amount = $receipt->amount;
    $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    $words = $formatter->format($amount);

    // amount
    $amounthtml = '
    <table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">
    <thead>
    <tr>
        <th width="30%"><b>Amount </b> </th>
        <th width="70%">: '.$amount.'</th>
    </tr>
    <tr>
        <th width="30%"><b>Amount In Words</b></th>
        <th width="70%">: '.ucfirst($words).'</th>
    </tr>

    <tr>
        <th width="30%"><b>Issued By </b></th>
        <th width="70%">: '.get_staff_full_name($receipt->addedfrom).'  </th>
    </tr>

    <thead>
    <tbody>
    ';  

    $amounthtml .= '</tbody>'; 

    $amounthtml .= '</table>'; 
    $pdf->writeHTML($amounthtml, true, false, false, false, ''); 




    // Header
    $headerhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0" style=" margin:0">
    <tr>
        <td colspan="4"  style="height:80px; border:1px solid #000 ;">  &nbsp; </td>
    </tr>
    <tr>
        <td style="text-align:center"> _____________ </td>
        <td style="text-align:center"> _____________ </td>
        <td style="text-align:center"> _____________ </td>
        <td style="text-align:center"> _____________ </td>
    </tr>   
    <tr>
        <td style="text-align:center">Issued By </td>
        <td style="text-align:center"> Checked By </td>
        <td style="text-align:center"> Approved By </td>
        <td style="text-align:center"> Received By </td>
    </tr>
    '; 
    $headerhtml .= '</table>'; 
    $pdf->writeHTML($headerhtml, true, false, false, false, ''); 

}
