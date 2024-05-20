<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-29 19:08:47 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-29 19:08:47 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2022-11-29 19:08:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2022-11-29 19:08:47 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2022-11-29 19:08:47 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2022-11-29 19:08:47 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2022-11-29 19:08:47 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2022-11-29 19:08:47 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2022-11-29 19:21:53 --> Query error: Column 'group_id' in field list is ambiguous - Invalid query: SELECT `rate_currency_1`, `tblitems`.`id` as `itemid`, `rate`, `tblitems`.*, `t1`.`taxrate` as `taxrate`, `t1`.`id` as `taxid`, `t1`.`name` as `taxname`, `t2`.`taxrate` as `taxrate_2`, `t2`.`id` as `taxid_2`, `t2`.`name` as `taxname_2`, `description`, `sku_code`, `long_description`, `group_id`, `tblitems_groups`.`name` as `group_name`, `unit`
FROM `tblitems`
LEFT JOIN `tbltaxes` `t1` ON `t1`.`id` = `tblitems`.`tax`
LEFT JOIN `tbltaxes` `t2` ON `t2`.`id` = `tblitems`.`tax2`
LEFT JOIN `tblitems_groups` ON `tblitems_groups`.`id` = `tblitems`.`group_id`
LEFT JOIN `tblwh_sub_group` ON `tblwh_sub_group`.`id` = `tblitems`.`sub_group`
WHERE `tblitems`.`id` = '3'
ORDER BY `description` ASC
