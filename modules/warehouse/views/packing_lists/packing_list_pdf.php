<?php

defined('BASEPATH') or exit('No direct script access allowed');

$dimensions = $pdf->getPageDimensions();

$info_right_column = '';
$info_left_column  = '';

$info_right_column .= '<span style="font-weight:bold;font-size:27px;">' . _l('wh_packing_list') . '</span><br />';
$info_right_column .= '<b style="color:#4e4e4e;"># ' . $packing_list_number . '</b>';


// Add logo
$info_left_column .= pdf_logo_url();

// Write top left logo and right column info/text
pdf_multi_row($info_left_column, $info_right_column, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']);

$pdf->ln(10);

$organization_info = '<div style="color:#424242;">';

$organization_info .= format_organization_info();

$organization_info .= '</div>';

// Bill to
$invoice_info = '<b>' . _l('invoice_bill_to') . ':</b>';
$invoice_info .= '<div style="color:#424242;">';
$invoice_info .= format_customer_info($packing_list, 'invoice', 'billing');
$invoice_info .= '</div>';

// ship to to
$invoice_info .= '<br /><b>' . _l('ship_to') . ':</b>';
$invoice_info .= '<div style="color:#424242;">';
$invoice_info .= format_customer_info($packing_list, 'invoice', 'shipping');
$invoice_info .= '</div>';

$invoice_info .= '<br />' . _l('packing_date') . ' ' . _d($packing_list->datecreated) . '<br />';



$left_info  = $swap == '1' ? $invoice_info : $organization_info;
$right_info = $swap == '1' ? $organization_info : $invoice_info;

pdf_multi_row($left_info, $right_info, $pdf, ($dimensions['wk'] / 2) - $dimensions['lm']);

// The Table
$pdf->Ln(hooks()->apply_filters('pdf_info_and_table_separator', 6));

// The items table
// $items = get_items_table_data($invoice, 'invoice', 'pdf');

$table_font_size = 'font-size:12px;';
$items = '';
$items .='<table class="table invoice-items-table items table-main-invoice-edit has-calculations no-mtop">
<thead>';
$items .= '<tr height="30" bgcolor="' . get_option('pdf_table_heading_color') . '" style="color:' . get_option('pdf_table_heading_text_color') . '; ">';
$items.='<th width="5%"  >#</th>
<th width="15%" align="left" style="font-size:12px;" >'. _l('commodity_code').'</th>
<th width="10%" align="right" style="font-size:12px;">FEET</th>
<th width="12%" align="right" style="font-size:12px;">METER</th>
<th width="15%" align="right" style="font-size:12px;">SKU CODE</th>
<th width="15%" align="right" style="font-size:12px;">DESCRIPTION</th>
<th width="10%" align="right" style="font-size:12px;" class="qty">'. _l('quantity').'</th>
</tr>
</thead>
<tbody class="tbody-main" style="'.$table_font_size.'">';

// render item table start
foreach ($packing_list->packing_list_detail as $key => $packing_list_detail) {
	$itemHTML = '';

			// Open table row
	$itemHTML .= '<tr style="'.$table_font_size.'">';

			// Table data number
	$itemHTML .= '<td align="center" width="5%">' . ($key+1) . '</td>';

	$itemHTML .= '<td class="description" align="left;" width="20%">';

			/**
			 * Item description
			 */
			if (!empty($packing_list_detail['commodity_name'])) {
				$itemHTML .= '<span style="font-size:10px;"><strong>'
				. $packing_list_detail['commodity_name']
				. '</strong></span>';


			}

			$itemHTML .= '</td>';

			/**
			 * Item quantity
			 */
			$itemHTML .= '<td align="right" width="10%">' . get_commodity_name($packing_list_detail['commodity_code'])->Feet;
			$itemHTML .= '</td>';

			$itemHTML .= '<td align="right" width="10%">' . get_commodity_name($packing_list_detail['commodity_code'])->Meters;
			$itemHTML .= '</td>';
			
				$itemHTML .= '<td align="right" width="10%">' . get_commodity_name($packing_list_detail['commodity_code'])->sku_code;
			$itemHTML .= '</td>';
			
				$itemHTML .= '<td align="right" width="10%">' . get_commodity_name($packing_list_detail['commodity_code'])->long_description;
			$itemHTML .= '</td>';
			
				$itemHTML .= '<td align="right" width="10%">' . floatVal($packing_list_detail['quantity']);
			$itemHTML .= '</td>';
			
			
			// Close table row
			$itemHTML .= '</tr>';

			$items .= $itemHTML;

		}
// render item table end

$items.= '</tbody>
</table>';

		$tblhtml = $items;
		$pdf->writeHTML($tblhtml, true, false, false, false, '');

		$pdf->Ln(8);

	
		$pdf->writeHTML($tbltotal, true, false, false, false, '');

		if (!empty($packing_list->client_note)) {
			$pdf->Ln(4);
			$pdf->SetFont($font_name, 'B', $font_size);
			$pdf->Cell(0, 0, _l('client_note'), 0, 1, 'L', 0, '', 0);
			$pdf->SetFont($font_name, '', $font_size);
			$pdf->Ln(2);
			$pdf->writeHTMLCell('', '', '', '', $packing_list->client_note, 0, 1, false, true, 'L', true);
		}

