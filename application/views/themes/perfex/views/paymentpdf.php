<?php

defined('BASEPATH') or exit('No direct script access allowed'); 

$dimensions = $pdf->getPageDimensions(); 

// Get Y position for the separation
$y = $pdf->getY(); 

// Background Image
$pdf->Image('https://ewchomes.com/uploads/output-onlinepngtools.png', 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0); 


$company_info = '<div style="color:#424242; ">
<img src="https://ewchomes.com/uploads/company/f86c57053ea4c32da3871c0ff57503b0.png" class="img-responsive" alt="EWC INTERIORS" style="height: 115px; ">'; 
$company_info .= format_organization_info(); 
$company_info .= '</div>'; 

// Bill to
$client_details = format_customer_info($payment->invoice_data, 'payment', 'billing'); 

$left_info  = $swap == '1' ? $client_details : $company_info; 
$right_info = $swap == '1' ? $company_info : $client_details; 

pdf_multi_row($left_info, $right_info, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']); 


// Header
$headerhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">
<tr style="margin-bottom:20px">
    <td> </td>
    <td colspan="2" style="background-color: #000 ;  color:#fff;  font-size: 24px;  text-align: center; " > PAYMENT VOUCHER </td>
    <td> </td>
</tr>
<tr>
    <th style="width:20%; "><b> Voucher No :</b></th>
    <th style="width:45%;  text-align: left; ">PV-24-05-000141</th>
    <th style="width:20%;  text-align:right"><b> Mode of Payment :</b> </th>
    <th style="width:15%;  text-align: left; ">Cash</th>
</tr>
<tr>
    <th style="width:20%; "><b> Voucher Type :</b></th>
    <th style="width:45%;  text-align: left; ">General</th>
    <th style="width:20%;  text-align:right"><b> Location :</b> </th>
    <th style="width:15%;  text-align: left; "> </th>
</tr>

<tr>
    <th style="width:20%; "><b> Project Name :</b></th>
    <th style="width:45%;  text-align: left; ">H/O MASOOMIA ESTATE & BUILDERS</th>
    <th style="width:20%;  text-align:right"><b> Date :</b> </th>
    <th style="width:15%;  text-align: left; ">30-May-2024</th>
</tr>
'; 
$headerhtml .= '</table>'; 
$pdf->writeHTML($headerhtml, true, false, false, false, ''); 



// Header
$typehtml = '<table width="100%" style="margin-top: 20px"  cellspacing="0" cellpadding="5" border="0">
<tr>
    <td width="40%"> </td>
    <td width="20%" > <div style="border: 3px solid #000 ;  color:#000 ;  border-radius: 10px ;  font-size: 18px;  text-align: center; " > OFFICE COPY  </div>  </td>
    <td width="40%"> </td>
</tr>
'; 
$typehtml .= '</table>'; 
$pdf->writeHTML($typehtml, true, false, false, false, ''); 



// Header
$tblhtml = '<h5>Payment Details (DR)</h5>

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

$tblhtml .= '<tr>'; 
$tblhtml .= '<td style="font-size:14px; "> 1</td>'; 
$tblhtml .= '<td style="font-size:14px; "> 12.4.22 HEAD OFFICE EXPENSE </td>'; 
$tblhtml .= '<td style="font-size:14px; ">Paid to Jaffar for Villa 89 his month Cook payment </td>'; 
$tblhtml .= '<td style="text-align:right; font-size:14px; " >2,200.00 </td>'; 
$tblhtml .= '</tr>'; 
$tblhtml .= '</tbody>'; 

$tblhtml .= '<tfoot>'; 
$tblhtml .= '<tr  style="color:#fff; " bgcolor="#000">'; 
$tblhtml .= '<td  style="text-align:right; " colspan="3" > Total</td>'; 
$tblhtml .= '<td  style="text-align:right" >2,200.00 </td>'; 
$tblhtml .= '</tr>'; 
$tblhtml .= '</tfoot>'; 

$tblhtml .= '</table>'; 
$pdf->writeHTML($tblhtml, true, false, false, false, ''); 


// Header
$tblhtml_2 = '<h5>Payment Details (CR)</h5>

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
$tblhtml_2 .= '<td style="font-size:14px; "> 12.4.22 HEAD OFFICE EXPENSE </td>'; 
$tblhtml_2 .= '<td style="font-size:14px; text-align:right; ">Jaffar</td>'; 
$tblhtml_2 .= '<td style="font-size:14px; text-align:right; ">Cash</td>'; 
$tblhtml_2 .= '<td style="text-align:right; font-size:14px; " >2,200.00 </td>'; 
$tblhtml_2 .= '</tr>'; 
$tblhtml_2 .= '</tbody>'; 

$tblhtml_2 .= '<tfoot>'; 
$tblhtml_2 .= '<tr  style="color:#fff; " bgcolor="#000">'; 
$tblhtml_2 .= '<td  style="text-align:right; " colspan="4" > Total</td>'; 
$tblhtml_2 .= '<td  style="text-align:right" >2,200.00 </td>'; 
$tblhtml_2 .= '</tr>'; 
$tblhtml_2 .= '</tfoot>'; 

$tblhtml_2 .= '</table>'; 
$pdf->writeHTML($tblhtml_2, true, false, false, false, ''); 




// amount
$amounthtml = '
<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">
<thead>
<tr>
    <th width="30%"><b>Amount </b> </th>
    <th width="70%">: 2,200.00</th>
</tr>
<tr>
    <th width="30%"><b>Amount In Words</b></th>
    <th width="70%">: TWO THOUSAND TWO HUNDRED PKR only </th>
</tr>

<tr>
    <th width="30%"><b>Issued By </b></th>
    <th width="70%">: Muhammad Ali  </th>
</tr>

<thead>
<tbody>
';  

$amounthtml .= '<tr >'; 
$amounthtml .= '<td rowspan="4" colspan="2" > <div style="height:200px; border:1px solid #000 ;"> </div> </td>'; 
$amounthtml .= '</tr>';
$amounthtml .= '</tbody>'; 

$amounthtml .= '</table>'; 
$pdf->writeHTML($amounthtml, true, false, false, false, ''); 



$pdf->AddPage(); // Add a new page



// Header
$headerhtml = '<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">
<tr style="margin-bottom:20px">
    <td> </td>
    <td colspan="2" style="background-color: #000 ;  color:#fff;  font-size: 24px;  text-align: center; " > PAYMENT VOUCHER </td>
    <td> </td>
</tr>
<tr>
    <th style="width:20%; "><b> Voucher No :</b></th>
    <th style="width:45%;  text-align: left; ">PV-24-05-000141</th>
    <th style="width:20%;  text-align:right"><b> Mode of Payment :</b> </th>
    <th style="width:15%;  text-align: left; ">Cash</th>
</tr>
<tr>
    <th style="width:20%; "><b> Voucher Type :</b></th>
    <th style="width:45%;  text-align: left; ">General</th>
    <th style="width:20%;  text-align:right"><b> Location :</b> </th>
    <th style="width:15%;  text-align: left; "> </th>
</tr>

<tr>
    <th style="width:20%; "><b> Project Name :</b></th>
    <th style="width:45%;  text-align: left; ">H/O MASOOMIA ESTATE & BUILDERS</th>
    <th style="width:20%;  text-align:right"><b> Date :</b> </th>
    <th style="width:15%;  text-align: left; ">30-May-2024</th>
</tr>
'; 
$headerhtml .= '</table>'; 
$pdf->writeHTML($headerhtml, true, false, false, false, ''); 



// Header
$typehtml = '<table width="100%" style="margin-top: 20px"  cellspacing="0" cellpadding="5" border="0">
<tr>
    <td width="40%"> </td>
    <td width="20%" > <div style="border: 3px solid #000 ;  color:#000 ;  border-radius: 10px ;  font-size: 18px;  text-align: center; " > CLIENT COPY   </div>  </td>
    <td width="40%"> </td>
</tr>
'; 
$typehtml .= '</table>'; 
$pdf->writeHTML($typehtml, true, false, false, false, ''); 



// Header
$tblhtml = '<h5>Payment Details (DR)</h5>

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

$tblhtml .= '<tr>'; 
$tblhtml .= '<td style="font-size:14px; "> 1</td>'; 
$tblhtml .= '<td style="font-size:14px; "> 12.4.22 HEAD OFFICE EXPENSE </td>'; 
$tblhtml .= '<td style="font-size:14px; ">Paid to Jaffar for Villa 89 his month Cook payment </td>'; 
$tblhtml .= '<td style="text-align:right; font-size:14px; " >2,200.00 </td>'; 
$tblhtml .= '</tr>'; 
$tblhtml .= '</tbody>'; 

$tblhtml .= '<tfoot>'; 
$tblhtml .= '<tr  style="color:#fff; " bgcolor="#000">'; 
$tblhtml .= '<td  style="text-align:right; " colspan="3" > Total</td>'; 
$tblhtml .= '<td  style="text-align:right" >2,200.00 </td>'; 
$tblhtml .= '</tr>'; 
$tblhtml .= '</tfoot>'; 

$tblhtml .= '</table>'; 
$pdf->writeHTML($tblhtml, true, false, false, false, ''); 


// Header
$tblhtml_2 = '<h5>Payment Details (CR)</h5>

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
$tblhtml_2 .= '<td style="font-size:14px; "> 12.4.22 HEAD OFFICE EXPENSE </td>'; 
$tblhtml_2 .= '<td style="font-size:14px; text-align:right; ">Jaffar</td>'; 
$tblhtml_2 .= '<td style="font-size:14px; text-align:right; ">Cash</td>'; 
$tblhtml_2 .= '<td style="text-align:right; font-size:14px; " >2,200.00 </td>'; 
$tblhtml_2 .= '</tr>'; 
$tblhtml_2 .= '</tbody>'; 

$tblhtml_2 .= '<tfoot>'; 
$tblhtml_2 .= '<tr  style="color:#fff; " bgcolor="#000">'; 
$tblhtml_2 .= '<td  style="text-align:right; " colspan="4" > Total</td>'; 
$tblhtml_2 .= '<td  style="text-align:right" >2,200.00 </td>'; 
$tblhtml_2 .= '</tr>'; 
$tblhtml_2 .= '</tfoot>'; 

$tblhtml_2 .= '</table>'; 
$pdf->writeHTML($tblhtml_2, true, false, false, false, ''); 




// amount
$amounthtml = '
<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="5" border="0">
<thead>
<tr>
    <th width="30%"><b>Amount </b> </th>
    <th width="70%">: 2,200.00</th>
</tr>
<tr>
    <th width="30%"><b>Amount In Words</b></th>
    <th width="70%">: TWO THOUSAND TWO HUNDRED PKR only </th>
</tr>

<tr>
    <th width="30%"><b>Issued By </b></th>
    <th width="70%">: Muhammad Ali  </th>
</tr>

<thead>
<tbody>
';  

$amounthtml .= '<tr >'; 
$amounthtml .= '<td rowspan="4" colspan="2" > <div style="height:200px; border:1px solid #000 ;"> </div> </td>'; 
$amounthtml .= '</tr>';
$amounthtml .= '</tbody>'; 

$amounthtml .= '</table>'; 
$pdf->writeHTML($amounthtml, true, false, false, false, ''); 