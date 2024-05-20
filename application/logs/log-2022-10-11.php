<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-10-11 16:04:04 --> Query error: Unknown column 'group_name' in 'where clause' - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS 1, `tblitems`.`id` AS `tblitems.id`, description, sku_code, tblitems_groups.name as group_name, tblwh_sub_group.sub_group_name as sub_group_name, long_description, Width, Breadth, Meters, Feet, commodity_barcode, rate, purchase_price ,tblitems.id,tblitems.description,tblitems.unit_id,tblitems.commodity_code,tblitems.commodity_barcode,tblitems.commodity_type,tblitems.warehouse_id,tblitems.origin,tblitems.color_id,tblitems.style_id,tblitems.model_id,tblitems.size_id,tblitems.rate,tblitems.tax,tblitems.group_id,tblitems.long_description,tblitems.sku_code,tblitems.sku_name,tblitems.sub_group,tblitems.color,tblitems.guarantee,tblitems.profif_ratio,tblitems.without_checking_warehouse,tblitems.parent_id,tblitems.tax2,tblitems.can_be_sold,tblitems.can_be_purchased,tblitems.can_be_manufacturing,tblitems.can_be_inventory
    FROM tblitems
    LEFT JOIN tbltaxes t1 ON t1.id = tblitems.tax LEFT JOIN tbltaxes t2 ON t2.id = tblitems.tax2 LEFT JOIN tblitems_groups ON tblitems_groups.id = tblitems.group_id LEFT JOIN tblwh_sub_group ON tblwh_sub_group.id = tblitems.sub_group
    
    WHERE  (tblitems.parent_id is null OR  tblitems.parent_id = 0 OR  tblitems.parent_id = ""  )   AND (group_name = "CARPETS" or group_name = "SUPER FINE_SC")
    
    ORDER BY tblitems.id DESC
    LIMIT 0, 25
    
ERROR - 2022-10-11 16:04:52 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 16:04:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 16:04:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 16:04:52 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 16:04:52 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 16:04:52 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 16:04:52 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 16:04:52 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 16:04:52 --> Could not find the language line "Commodity List"
ERROR - 2022-10-11 07:04:55 --> 404 Page Not Found: /index
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: Height /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/table_commodity_list.php 229
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 16:04:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 16:04:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 16:04:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 16:04:56 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 16:04:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2022-10-11 16:04:57 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 16:04:57 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 16:04:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 16:04:57 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 16:04:57 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 16:04:57 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 16:04:57 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 16:04:57 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 16:04:57 --> Could not find the language line "Commodity List"
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:01:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined index: date_manufacture /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1250
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined index: expiry_date /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1256
ERROR - 2022-10-11 18:01:40 --> Severity: Notice --> Undefined variable: results /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1298
ERROR - 2022-10-11 18:01:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND commodity_id = 38 group by warehouse_id, commodity_id' at line 1 - Invalid query: SELECT warehouse_id, commodity_id, sum(inventory_number) as inventory_number from tblinventory_manage where warehouse_id =  AND commodity_id = 38 group by warehouse_id, commodity_id
ERROR - 2022-10-11 18:01:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/system/core/Common.php 573
ERROR - 2022-10-11 18:02:25 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:02:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:02:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:02:25 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:02:25 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:02:25 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:02:25 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:02:25 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:02:25 --> Could not find the language line "Manage deliveries"
ERROR - 2022-10-11 18:02:25 --> Could not find the language line "send_received_note"
ERROR - 2022-10-11 18:02:25 --> Severity: Notice --> Undefined variable: vendors /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/manage_goods_receipt/manage_purchase.php 84
ERROR - 2022-10-11 18:02:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/manage_goods_receipt/manage_purchase.php 84
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:02:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:02:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:02:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:02:28 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:02:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2022-10-11 18:02:30 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:02:30 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:02:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:02:30 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:02:30 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:02:30 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:02:30 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:02:30 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:02:30 --> Could not find the language line "Manage deliveries"
ERROR - 2022-10-11 18:02:30 --> Could not find the language line "send_received_note"
ERROR - 2022-10-11 18:02:30 --> Severity: Notice --> Undefined variable: vendors /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/manage_goods_receipt/manage_purchase.php 84
ERROR - 2022-10-11 18:02:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/views/manage_goods_receipt/manage_purchase.php 84
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:03:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined index: date_manufacture /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1250
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined index: expiry_date /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1256
ERROR - 2022-10-11 18:03:05 --> Severity: Notice --> Undefined variable: results /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1298
ERROR - 2022-10-11 18:03:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND commodity_id = 38 group by warehouse_id, commodity_id' at line 1 - Invalid query: SELECT warehouse_id, commodity_id, sum(inventory_number) as inventory_number from tblinventory_manage where warehouse_id =  AND commodity_id = 38 group by warehouse_id, commodity_id
ERROR - 2022-10-11 18:03:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/system/core/Common.php 573
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:03:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined index: date_manufacture /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1250
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined index: expiry_date /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1256
ERROR - 2022-10-11 18:03:42 --> Severity: Notice --> Undefined variable: results /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1298
ERROR - 2022-10-11 18:03:42 --> Query error: Column 'warehouse_id' cannot be null - Invalid query: INSERT INTO `tblgoods_transaction_detail` (`goods_receipt_id`, `purchase_price`, `expiry_date`, `lot_number`, `goods_id`, `old_quantity`, `commodity_id`, `quantity`, `date_add`, `warehouse_id`, `note`, `status`) VALUES ('19', '500000.00', NULL, NULL, '22', NULL, '38', '1', '2022-10-11 18:03:42', NULL, '', 1)
ERROR - 2022-10-11 18:03:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/system/core/Common.php 573
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:06:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined index: date_manufacture /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1250
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined index: expiry_date /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1256
ERROR - 2022-10-11 18:06:22 --> Severity: Notice --> Undefined variable: results /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1298
ERROR - 2022-10-11 18:06:22 --> Query error: Column 'warehouse_id' cannot be null - Invalid query: INSERT INTO `tblinventory_manage` (`warehouse_id`, `commodity_id`, `inventory_number`, `date_manufacture`, `expiry_date`, `lot_number`) VALUES (NULL, '38', '1', NULL, NULL, NULL)
ERROR - 2022-10-11 18:06:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/system/core/Common.php 573
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined index: support /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-10-11 18:06:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/yaaftpos/public_html/EWC_NEW/application/services/utilities/Arr.php 114
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined index: slug /home/yaaftpos/public_html/EWC_NEW/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined index: date_manufacture /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1250
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined index: expiry_date /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1256
ERROR - 2022-10-11 18:06:49 --> Severity: Notice --> Undefined variable: results /home/yaaftpos/public_html/EWC_NEW/modules/warehouse/models/Warehouse_model.php 1298
ERROR - 2022-10-11 18:06:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/yaaftpos/public_html/EWC_NEW/system/core/Exceptions.php:271) /home/yaaftpos/public_html/EWC_NEW/system/helpers/url_helper.php 564
