<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-24 16:59:55 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-11-24 16:59:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-11-24 16:59:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-11-24 16:59:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-11-24 16:59:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-11-24 16:59:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-11-24 16:59:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-11-24 16:59:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-11-24 16:59:55 --> Query error: Unknown column 'tblclients.company' in 'field list' - Invalid query: SELECT `tblpur_vendor`.`userid`, `tblpur_vendor`.`company`, `tblpur_vendor`.`vat`, `tblpur_vendor`.`phonenumber`, `tblpur_vendor`.`country`, `tblpur_vendor`.`city`, `tblpur_vendor`.`zip`, `tblpur_vendor`.`state`, `tblpur_vendor`.`address`, `tblpur_vendor`.`website`, `tblpur_vendor`.`datecreated`, `tblpur_vendor`.`active`, `tblpur_vendor`.`leadid`, `tblpur_vendor`.`billing_street`, `tblpur_vendor`.`billing_city`, `tblpur_vendor`.`billing_state`, `tblpur_vendor`.`billing_zip`, `tblpur_vendor`.`billing_country`, `tblpur_vendor`.`shipping_street`, `tblpur_vendor`.`shipping_city`, `tblpur_vendor`.`shipping_state`, `tblpur_vendor`.`shipping_zip`, `tblpur_vendor`.`shipping_country`, `tblpur_vendor`.`longitude`, `tblpur_vendor`.`latitude`, `tblpur_vendor`.`default_language`, `tblpur_vendor`.`default_currency`, `tblpur_vendor`.`show_primary_contact`, `tblpur_vendor`.`stripe_id`, `tblpur_vendor`.`registration_confirmed`, `tblpur_vendor`.`addedfrom`, CASE tblclients.company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE tblclients.company END as company
FROM `tblpur_vendor`
LEFT JOIN `tblcountries` ON `tblcountries`.`country_id` = `tblpur_vendor`.`country`
LEFT JOIN `tblcontacts` ON `tblcontacts`.`userid` = `tblpur_vendor`.`userid`
WHERE `tblpur_vendor`.`userid` = '5'
ERROR - 2023-11-24 16:59:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/system/core/Common.php 573
ERROR - 2023-11-24 17:02:32 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-11-24 17:02:32 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-11-24 17:02:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-11-24 17:02:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-11-24 17:02:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-11-24 17:02:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-11-24 17:02:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-11-24 17:02:32 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-11-24 17:02:32 --> Query error: Unknown column 'tblclients.company' in 'field list' - Invalid query: SELECT `tblpur_vendor`.`userid`, `tblpur_vendor`.`company`, `tblpur_vendor`.`vat`, `tblpur_vendor`.`phonenumber`, `tblpur_vendor`.`country`, `tblpur_vendor`.`city`, `tblpur_vendor`.`zip`, `tblpur_vendor`.`state`, `tblpur_vendor`.`address`, `tblpur_vendor`.`website`, `tblpur_vendor`.`datecreated`, `tblpur_vendor`.`active`, `tblpur_vendor`.`leadid`, `tblpur_vendor`.`billing_street`, `tblpur_vendor`.`billing_city`, `tblpur_vendor`.`billing_state`, `tblpur_vendor`.`billing_zip`, `tblpur_vendor`.`billing_country`, `tblpur_vendor`.`shipping_street`, `tblpur_vendor`.`shipping_city`, `tblpur_vendor`.`shipping_state`, `tblpur_vendor`.`shipping_zip`, `tblpur_vendor`.`shipping_country`, `tblpur_vendor`.`longitude`, `tblpur_vendor`.`latitude`, `tblpur_vendor`.`default_language`, `tblpur_vendor`.`default_currency`, `tblpur_vendor`.`show_primary_contact`, `tblpur_vendor`.`stripe_id`, `tblpur_vendor`.`registration_confirmed`, `tblpur_vendor`.`addedfrom`, CASE tblclients.company WHEN ' ' THEN (SELECT CONCAT(firstname, ' ', lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE tblclients.company END as company
FROM `tblpur_vendor`
LEFT JOIN `tblcountries` ON `tblcountries`.`country_id` = `tblpur_vendor`.`country`
LEFT JOIN `tblcontacts` ON `tblcontacts`.`userid` = `tblpur_vendor`.`userid`
ORDER BY `company` ASC
ERROR - 2023-11-24 17:02:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/system/core/Common.php 573
ERROR - 2023-11-24 17:03:54 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-11-24 17:03:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-11-24 17:03:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-11-24 17:03:54 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-11-24 17:03:54 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-11-24 17:03:54 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-11-24 17:03:54 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-11-24 17:03:54 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
