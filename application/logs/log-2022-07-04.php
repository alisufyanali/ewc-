<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-04 14:13:51 --> Query error: Unknown column 'wh_quantity_received' in 'field list' - Invalid query: select item_code as commodity_code, tblitems.description, tblitems.unit_id, unit_price, quantity as quantities, tblpur_order_detail.tax as tax, into_money, (tblpur_order_detail.total-tblpur_order_detail.into_money) as tax_money, total as goods_money, wh_quantity_received, tax_rate, tax_value, tblpur_order_detail.id as id from tblpur_order_detail
		left join tblitems on tblpur_order_detail.item_code =  tblitems.id
		left join tbltaxes on tbltaxes.id = tblpur_order_detail.tax where tblpur_order_detail.pur_order = 1
ERROR - 2022-07-04 14:13:51 --> Query error: Unknown column 'tblpur_orders.project' in 'field list' - Invalid query: SELECT *, tblpur_orders.project, tblpur_orders.type, tblpur_orders.department, tblpur_request.requester FROM tblpur_vendor
		left join tblpur_orders on tblpur_vendor.userid = tblpur_orders.vendor
		left join tblpur_request on tblpur_orders.pur_request = tblpur_request.id
		where tblpur_orders.id = 1
ERROR - 2022-07-04 14:19:30 --> Could not find the language line "Manage deliveries"
ERROR - 2022-07-04 14:19:30 --> Could not find the language line "send_received_note"
ERROR - 2022-07-04 14:19:30 --> Severity: Notice --> Undefined variable: vendors /home/yaaftpos/public_html/Industronic/modules/warehouse/views/manage_goods_receipt/manage_purchase.php 84
ERROR - 2022-07-04 14:19:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/Industronic/modules/warehouse/views/manage_goods_receipt/manage_purchase.php 84
ERROR - 2022-07-04 14:19:33 --> Could not find the language line "Goods receipt"
ERROR - 2022-07-04 14:19:33 --> Could not find the language line "capex"
ERROR - 2022-07-04 14:19:33 --> Could not find the language line "opex"
ERROR - 2022-07-04 14:19:45 --> Query error: Unknown column 'tblpur_orders.project' in 'field list' - Invalid query: SELECT *, tblpur_orders.project, tblpur_orders.type, tblpur_orders.department, tblpur_request.requester FROM tblpur_vendor
		left join tblpur_orders on tblpur_vendor.userid = tblpur_orders.vendor
		left join tblpur_request on tblpur_orders.pur_request = tblpur_request.id
		where tblpur_orders.id = 1
ERROR - 2022-07-04 14:19:45 --> Query error: Unknown column 'wh_quantity_received' in 'field list' - Invalid query: select item_code as commodity_code, tblitems.description, tblitems.unit_id, unit_price, quantity as quantities, tblpur_order_detail.tax as tax, into_money, (tblpur_order_detail.total-tblpur_order_detail.into_money) as tax_money, total as goods_money, wh_quantity_received, tax_rate, tax_value, tblpur_order_detail.id as id from tblpur_order_detail
		left join tblitems on tblpur_order_detail.item_code =  tblitems.id
		left join tbltaxes on tbltaxes.id = tblpur_order_detail.tax where tblpur_order_detail.pur_order = 1
ERROR - 2022-07-04 14:19:53 --> Query error: Unknown column 'wh_quantity_received' in 'field list' - Invalid query: select item_code as commodity_code, tblitems.description, tblitems.unit_id, unit_price, quantity as quantities, tblpur_order_detail.tax as tax, into_money, (tblpur_order_detail.total-tblpur_order_detail.into_money) as tax_money, total as goods_money, wh_quantity_received, tax_rate, tax_value, tblpur_order_detail.id as id from tblpur_order_detail
		left join tblitems on tblpur_order_detail.item_code =  tblitems.id
		left join tbltaxes on tbltaxes.id = tblpur_order_detail.tax where tblpur_order_detail.pur_order = 1
ERROR - 2022-07-04 14:20:00 --> Query error: Unknown column 'tblpur_orders.project' in 'field list' - Invalid query: SELECT *, tblpur_orders.project, tblpur_orders.type, tblpur_orders.department, tblpur_request.requester FROM tblpur_vendor
		left join tblpur_orders on tblpur_vendor.userid = tblpur_orders.vendor
		left join tblpur_request on tblpur_orders.pur_request = tblpur_request.id
		where tblpur_orders.id = 1
ERROR - 2022-07-04 14:21:54 --> Query error: Unknown column 'tblpur_orders.type' in 'field list' - Invalid query: SELECT *, tblpur_orders.type, tblpur_orders.department, tblpur_request.requester FROM tblpur_vendor
		left join tblpur_orders on tblpur_vendor.userid = tblpur_orders.vendor
		left join tblpur_request on tblpur_orders.pur_request = tblpur_request.id
		where tblpur_orders.id = 1
ERROR - 2022-07-04 14:23:46 --> Query error: Unknown column 'tblpur_orders.department' in 'field list' - Invalid query: SELECT *, tblpur_orders.department, tblpur_request.requester FROM tblpur_vendor
		left join tblpur_orders on tblpur_vendor.userid = tblpur_orders.vendor
		left join tblpur_request on tblpur_orders.pur_request = tblpur_request.id
		where tblpur_orders.id = 1
ERROR - 2022-07-04 14:24:13 --> Query error: Unknown column 'tblpur_orders.pur_request' in 'on clause' - Invalid query: SELECT *, tblpur_request.requester FROM tblpur_vendor
		left join tblpur_orders on tblpur_vendor.userid = tblpur_orders.vendor
		left join tblpur_request on tblpur_orders.pur_request = tblpur_request.id
		where tblpur_orders.id = 1
ERROR - 2022-07-04 14:33:01 --> Query error: Unknown column 'tax_rate' in 'field list' - Invalid query: select item_code as commodity_code, tblitems.description, tblitems.unit_id, unit_price, quantity as quantities, tblpur_order_detail.tax as tax, into_money, (tblpur_order_detail.total-tblpur_order_detail.into_money) as tax_money, total as goods_money, tax_rate, tax_value, tblpur_order_detail.id as id from tblpur_order_detail
		left join tblitems on tblpur_order_detail.item_code =  tblitems.id
		left join tbltaxes on tbltaxes.id = tblpur_order_detail.tax where tblpur_order_detail.pur_order = 1
ERROR - 2022-07-04 14:33:15 --> Query error: Unknown column 'tax_value' in 'field list' - Invalid query: select item_code as commodity_code, tblitems.description, tblitems.unit_id, unit_price, quantity as quantities, tblpur_order_detail.tax as tax, into_money, (tblpur_order_detail.total-tblpur_order_detail.into_money) as tax_money, total as goods_money,  tax_value, tblpur_order_detail.id as id from tblpur_order_detail
		left join tblitems on tblpur_order_detail.item_code =  tblitems.id
		left join tbltaxes on tbltaxes.id = tblpur_order_detail.tax where tblpur_order_detail.pur_order = 1
ERROR - 2022-07-04 14:34:07 --> Severity: Notice --> Undefined index: wh_quantity_received /home/yaaftpos/public_html/Industronic/modules/warehouse/models/Warehouse_model.php 1400
ERROR - 2022-07-04 14:34:07 --> Severity: Notice --> Undefined index: wh_quantity_received /home/yaaftpos/public_html/Industronic/modules/warehouse/models/Warehouse_model.php 1410
ERROR - 2022-07-04 14:34:07 --> Severity: Notice --> Undefined index: tax_rate /home/yaaftpos/public_html/Industronic/modules/warehouse/models/Warehouse_model.php 1413
ERROR - 2022-07-04 14:34:07 --> Severity: Notice --> Undefined index: tax_value /home/yaaftpos/public_html/Industronic/modules/warehouse/models/Warehouse_model.php 1413
ERROR - 2022-07-04 14:34:07 --> Severity: Notice --> Undefined index: wh_quantity_received /home/yaaftpos/public_html/Industronic/modules/warehouse/models/Warehouse_model.php 1415
ERROR - 2022-07-04 14:34:07 --> Severity: Notice --> Undefined index: wh_quantity_received /home/yaaftpos/public_html/Industronic/modules/warehouse/models/Warehouse_model.php 1417
ERROR - 2022-07-04 14:34:07 --> Severity: Notice --> Undefined index: wh_quantity_received /home/yaaftpos/public_html/Industronic/modules/warehouse/models/Warehouse_model.php 1418
