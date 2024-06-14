<?php

defined('BASEPATH') or exit('No direct script access allowed'); 


 

    $dimensions = $pdf->getPageDimensions();

    $info_right_column = '';
    $info_left_column  = '';

    // Header
    $info_right_column = '<br><table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0" style=" margin:0">
    <tr>
        <th style="width:60%; text-align:right"><b> Voucher No :</b></th>
        <th style="width:40%; text-align: right; ">'.$journal_entry->VNo.'</th>
    </tr>
    <tr> 
        <th style="width:60%; text-align:right"><b> Date :</b> </th>
        <th style="width:40%; text-align: right; ">'.date( 'd-M-Y' ,strtotime($journal_entry->journal_date)).'</th>
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
        <td colspan="2" style="background-color: #000 ;  color:#fff;  font-size: 24px;  text-align: center; " > JOURNAL VOUCHER </td>
        <td> </td>
    </tr>   
    '; 
    $headerhtml .= '</table>'; 
    $pdf->writeHTML($headerhtml, true, false, false, false, ''); 

    // Header
    $tblhtml = '
    <table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="10" border="0">
    <thead>
    <tr height="30" style="color:#fff; " bgcolor="#000">
        <th width="10%; ">S. No.</th>
        <th style="text-align:center" width="30%; "> A/C Code</th>
        <th style="text-align:center" width="30%; ">Particulars</th>
        <th style="text-align:right" width="15%; ">Debit (PKR) </th> 
        <th style="text-align:right" width="15%; ">Credit (PKR) </th> 
    </tr>
    <thead>
    <tbody>
    '; 

    $total_debit = 0;
    $total_credit = 0;
    foreach ($journal_entry->details as $key => $detail ) {
        # code...
        $key++;  
        $total_debit += $detail["debit"] ;
        $total_credit += $detail["credit"] ;
        $tblhtml .= '<tr>'; 
        $tblhtml .= '<td style="font-size:14px; ">'. $key .'</td>'; 
        $tblhtml .= '<td style="font-size:14px; "> '.$detail["acc_no"].' - '.$detail["HeadName"].' </td>'; 
        $tblhtml .= '<td style="font-size:14px; ">'.$detail["description"].' </td>'; 
        $tblhtml .= '<td style="text-align:right; font-size:14px; " >'.number_format($detail["debit"] ,2 ).'  </td>'; 
        $tblhtml .= '<td style="text-align:right; font-size:14px; " >'.number_format($detail["credit"] ,2 ).'  </td>'; 
        $tblhtml .= '</tr>'; 
        $tblhtml .= '</tbody>'; 
    }

    $tblhtml .= '<tfoot>'; 
    $tblhtml .= '<tr  style="color:#fff; " bgcolor="#000">'; 
    $tblhtml .= '<td  style="text-align:right; " colspan="3" > Total</td>'; 
    $tblhtml .= '<td  style="text-align:right" >'.number_format($total_debit, 2).'</td>'; 
    $tblhtml .= '<td  style="text-align:right" >'.number_format($total_credit, 2).'</td>'; 
    $tblhtml .= '</tr>'; 
    $tblhtml .= '</tfoot>'; 

    $tblhtml .= '</table>'; 
    $pdf->writeHTML($tblhtml, true, false, false, false, ''); 




    // Header
    $headerhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0" style=" margin:0">
    <tr>
        <td colspan="2"  style="height:80px; border:1px solid #000 ;">  &nbsp; </td>
    </tr>
    <tr>
        <td style="text-align:center"> __________________________ </td>
        <td style="text-align:center"> __________________________ </td>
    </tr>   
    <tr>
        <td style="text-align:center">Prepared by  </td>
        <td style="text-align:center"> Authorised Signature  </td>
    </tr>
    '; 
    $headerhtml .= '</table>'; 
    $pdf->writeHTML($headerhtml, true, false, false, false, ''); 
 