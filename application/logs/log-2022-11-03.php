<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-03 17:24:14 --> Query error: Column 'description' in field list is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS description as description, long_description as long_description, tblitemable.sku_code as sku_code, tblitemable.feet as feet, tblitemable.meter as meter, ((tblitemable.qty)) as quantity_sold, rate as rate, (rate*qty) as avg_price, `tblitemable`.`discount` AS `tblitemable.discount` 
    FROM tblitemable
    JOIN tblinvoices ON tblinvoices.id = tblitemable.rel_id JOIN tblitems ON tblitems.sku_code = tblitemable.sku_code
    
    WHERE  rel_type="invoice" AND (date BETWEEN "2022-10-01" AND "2022-10-31") AND currency=3
    
    ORDER BY description ASC
    LIMIT 0, 25
    
ERROR - 2022-11-03 17:24:14 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:24:14 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:24:14 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:24:14 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:24:14 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:24:14 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:24:14 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:24:52 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:24:52 --> Severity: Notice --> Trying to get property 'purchase_price' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 209
ERROR - 2022-11-03 17:24:52 --> Severity: Notice --> Trying to get property 'purchase_price' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 209
ERROR - 2022-11-03 17:24:52 --> Severity: Notice --> Trying to get property 'purchase_price' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 209
ERROR - 2022-11-03 17:24:52 --> Severity: Notice --> Trying to get property 'commodity_type' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 215
ERROR - 2022-11-03 17:24:52 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:24:52 --> Severity: Notice --> Trying to get property 'purchase_price' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 209
ERROR - 2022-11-03 17:24:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(rate*qty) as avg_price, `tblitemable`.`discount` AS `tblitemable.discount` ...' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblitemable.description as description, tblitemable.long_description as long_description, tblitemable.sku_code as sku_code, tblitemable.feet as feet, tblitemable.meter as meter, ((tblitemable.qty)) as quantity_sold, tblitemable.rate as rate, tblitemable.(rate*qty) as avg_price, `tblitemable`.`discount` AS `tblitemable.discount` 
    FROM tblitemable
    JOIN tblinvoices ON tblinvoices.id = tblitemable.rel_id JOIN tblitems ON tblitems.sku_code = tblitemable.sku_code
    
    WHERE  rel_type="invoice" AND (date BETWEEN "2022-11-01" AND "2022-11-30") AND currency=3
    
    ORDER BY tblitemable.description ASC
    LIMIT 0, 25
    
ERROR - 2022-11-03 17:25:56 --> Query error: Column 'rate' in field list is ambiguous - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblitemable.description as description, tblitemable.long_description as long_description, tblitemable.sku_code as sku_code, tblitemable.feet as feet, tblitemable.meter as meter, ((tblitemable.qty)) as quantity_sold, tblitemable.rate as rate, (rate*qty) as avg_price, `tblitemable`.`discount` AS `tblitemable.discount` 
    FROM tblitemable
    JOIN tblinvoices ON tblinvoices.id = tblitemable.rel_id JOIN tblitems ON tblitems.sku_code = tblitemable.sku_code
    
    WHERE  rel_type="invoice" AND (date BETWEEN "2022-10-01" AND "2022-10-31") AND currency=3
    
    ORDER BY tblitemable.description ASC
    LIMIT 0, 25
    
ERROR - 2022-11-03 17:25:56 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:25:56 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:25:56 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:25:56 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:25:56 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:25:56 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:25:56 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'purchase_price' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 209
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'purchase_price' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 209
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'purchase_price' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 209
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'commodity_type' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 215
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'purchase_price' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 209
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 826
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 826
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 826
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 826
ERROR - 2022-11-03 17:27:04 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 826
ERROR - 2022-11-03 17:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY SUM(tblitemable.meter) ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS SUM(tblitemable.meter) as tmtr, tblitemable.description as description, tblitemable.long_description as long_description, tblitemable.sku_code as sku_code, tblitemable.feet as feet, tblitemable.meter as meter, ((tblitemable.qty)) as quantity_sold, tblitemable.rate as rate, (tblitemable.rate * tblitemable.qty) as avg_price, `tblitemable`.`discount` AS `tblitemable.discount` 
    FROM tblitemable
    JOIN tblinvoices ON tblinvoices.id = tblitemable.rel_id JOIN tblitems ON tblitems.sku_code = tblitemable.sku_code
    
    WHERE  rel_type="invoice" AND (date BETWEEN "2022-10-01" AND "2022-10-31") AND currency=3 GROUP BY commodity_type ORDER BY tmtr
    
    ORDER BY SUM(tblitemable.meter) ASC
    LIMIT 0, 25
    
ERROR - 2022-11-03 17:31:51 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:31:51 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:31:51 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:31:51 --> Severity: Notice --> Trying to get property 'company' of non-object /home/ewchomes/public_html/application/helpers/general_helper.php 216
ERROR - 2022-11-03 17:31:51 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:31:51 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:31:51 --> Severity: Notice --> Undefined index: discount /home/ewchomes/public_html/application/controllers/admin/Reports.php 727
ERROR - 2022-11-03 17:32:29 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-03 17:32:29 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-03 17:32:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2022-11-03 17:32:29 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-11-03 17:32:29 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-11-03 17:32:29 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-11-03 17:32:29 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-11-03 17:32:29 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-03 17:32:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-11-03 17:32:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-03 17:32:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-11-03 17:32:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-11-03 17:32:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
