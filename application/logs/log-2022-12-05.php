<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-12-05 12:12:07 --> Query error: Column 'group_id' in field list is ambiguous - Invalid query: SELECT `rate_currency_1`, `tblitems`.`id` as `itemid`, `rate`, `tblitems`.*, `t1`.`taxrate` as `taxrate`, `t1`.`id` as `taxid`, `t1`.`name` as `taxname`, `t2`.`taxrate` as `taxrate_2`, `t2`.`id` as `taxid_2`, `t2`.`name` as `taxname_2`, CONCAT(commodity_code, "_", description) as code_description, `long_description`, `group_id`, `tblitems_groups`.`name` as `group_name`, `unit`, `tblware_unit_type`.`unit_name` as `unit_name`, `purchase_price`, `unit_id`, `guarantee`
FROM `tblitems`
LEFT JOIN `tbltaxes` `t1` ON `t1`.`id` = `tblitems`.`tax`
LEFT JOIN `tbltaxes` `t2` ON `t2`.`id` = `tblitems`.`tax2`
LEFT JOIN `tblitems_groups` ON `tblitems_groups`.`id` = `tblitems`.`group_id`
LEFT JOIN `tblwh_sub_group` ON `tblwh_sub_group`.`id` = `tblitems`.`sub_group`
LEFT JOIN `tblware_unit_type` ON `tblware_unit_type`.`unit_type_id` = `tblitems`.`unit_id`
WHERE `tblitems`.`id` = '7'
ORDER BY `description` ASC
