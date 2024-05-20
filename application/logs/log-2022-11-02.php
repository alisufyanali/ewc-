<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-02 15:07:34 --> Query error: Unknown column 'hash' in 'field list' - Invalid query: SELECT
        tblgoods_receipt.goods_receipt_code as invoice_id,
        tblgoods_receipt.id as id,
        hash,
        tblgoods_receipt.date_add as date,
        tblgoods_receipt.date_add as duedate,
        concat(tblgoods_receipt.date_add, ' ', RIGHT(tblgoods_receipt.date_add,LOCATE(' ',tblgoods_receipt.date_add) - 3)) as tmp_date,
        tblgoods_receipt.date_add as duedate,
        tblgoods_receipt.total_money as invoice_amount
        FROM tblgoods_receipt WHERE supplier_code =11 AND (date_add BETWEEN "2022-01-01" AND "2022-12-31")
            AND status != 6
            AND status != 5
            ORDER By order_date DESC
ERROR - 2022-11-02 15:07:35 --> Query error: Unknown column 'hash' in 'field list' - Invalid query: SELECT
        tblgoods_receipt.goods_receipt_code as invoice_id,
        tblgoods_receipt.id as id,
        hash,
        tblgoods_receipt.date_add as date,
        tblgoods_receipt.date_add as duedate,
        concat(tblgoods_receipt.date_add, ' ', RIGHT(tblgoods_receipt.date_add,LOCATE(' ',tblgoods_receipt.date_add) - 3)) as tmp_date,
        tblgoods_receipt.date_add as duedate,
        tblgoods_receipt.total_money as invoice_amount
        FROM tblgoods_receipt WHERE supplier_code =11 AND (date_add BETWEEN "2021-01-01" AND "2021-12-31")
            AND status != 6
            AND status != 5
            ORDER By order_date DESC
ERROR - 2022-11-02 15:08:50 --> Severity: Notice --> Undefined variable: invoices /home/ewchomes/public_html/application/models/Statement_model.php 320
ERROR - 2022-11-02 15:08:50 --> Severity: Warning --> array_merge(): Expected parameter 1 to be an array, null given /home/ewchomes/public_html/application/models/Statement_model.php 320
ERROR - 2022-11-02 15:08:50 --> Severity: Warning --> usort() expects parameter 1 to be array, null given /home/ewchomes/public_html/application/models/Statement_model.php 326
ERROR - 2022-11-02 15:08:50 --> Query error: Unknown column 'date_add' in 'where clause' - Invalid query: SELECT
        SUM(tblpur_orders.total) as invoiced_amount
        FROM tblpur_orders
        WHERE vendor = 11
        AND (date_add BETWEEN "2022-01-01" AND "2022-12-31") AND status != 6 AND status != 5
ERROR - 2022-11-02 15:09:34 --> Severity: Notice --> Undefined variable: invoices /home/ewchomes/public_html/application/models/Statement_model.php 320
ERROR - 2022-11-02 15:09:34 --> Severity: Warning --> array_merge(): Expected parameter 1 to be an array, null given /home/ewchomes/public_html/application/models/Statement_model.php 320
ERROR - 2022-11-02 15:09:34 --> Severity: Warning --> usort() expects parameter 1 to be array, null given /home/ewchomes/public_html/application/models/Statement_model.php 326
ERROR - 2022-11-02 15:09:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/views/admin/clients/groups/vendor_statement.php 56
ERROR - 2022-11-02 15:11:09 --> Severity: Notice --> Undefined variable: invoices /home/ewchomes/public_html/application/models/Statement_model.php 319
ERROR - 2022-11-02 15:11:09 --> Severity: Warning --> array_merge(): Expected parameter 1 to be an array, null given /home/ewchomes/public_html/application/models/Statement_model.php 319
ERROR - 2022-11-02 15:11:09 --> Severity: Warning --> usort() expects parameter 1 to be array, null given /home/ewchomes/public_html/application/models/Statement_model.php 325
ERROR - 2022-11-02 15:11:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/views/admin/clients/groups/vendor_statement.php 56
ERROR - 2022-11-02 15:11:14 --> Severity: Notice --> Undefined variable: invoices /home/ewchomes/public_html/application/models/Statement_model.php 319
ERROR - 2022-11-02 15:11:14 --> Severity: Warning --> array_merge(): Expected parameter 1 to be an array, null given /home/ewchomes/public_html/application/models/Statement_model.php 319
ERROR - 2022-11-02 15:11:14 --> Severity: Warning --> usort() expects parameter 1 to be array, null given /home/ewchomes/public_html/application/models/Statement_model.php 325
ERROR - 2022-11-02 15:11:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/views/admin/clients/groups/vendor_statement.php 56
ERROR - 2022-11-02 15:17:22 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-02 15:17:22 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-02 15:17:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2022-11-02 15:17:22 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-11-02 15:17:22 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-11-02 15:17:22 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-11-02 15:17:22 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-11-02 15:17:22 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-11-02 15:17:22 --> Query error: Unknown column 'discount' in 'field list' - Invalid query: INSERT INTO `tblgoods_return` (`id`, `date_c`, `date_add`, `pr_order_id`, `supplier_code`, `supplier_name`, `currency`, `rconversion`, `buyer_id`, `project`, `type`, `department`, `requester`, `deliver_name`, `invoice_no`, `feet`, `meter`, `SKU`, `LongDescription`, `discount`, `total_goods_money`, `value_of_inventory`, `total_tax_money`, `total_money`, `description`, `warehouse_id`, `expiry_date`, `approval`, `goods_receipt_code`, `addedfrom`) VALUES ('', '2022-11-02', '2022-11-02', '', '11', 'MAAZ KHALID', '$', '1', '', '', '', '', '', '', '', '108', '10.04', 'AFC121', 'hand knotted carpet ', '0', 200, 200, 6, 206, '', '18', '2022-11-02', 1, 'PUR38', '1')
ERROR - 2022-11-02 15:17:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/system/core/Common.php 573
ERROR - 2022-11-02 06:17:23 --> 404 Page Not Found: /index
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-02 15:19:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined index: date_manufacture /home/ewchomes/public_html/modules/warehouse/models/Warehouse_model.php 1451
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined index: expiry_date /home/ewchomes/public_html/modules/warehouse/models/Warehouse_model.php 1457
ERROR - 2022-11-02 15:19:08 --> Severity: Notice --> Undefined variable: results /home/ewchomes/public_html/modules/warehouse/models/Warehouse_model.php 1499
ERROR - 2022-11-02 15:19:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/system/helpers/url_helper.php 564
