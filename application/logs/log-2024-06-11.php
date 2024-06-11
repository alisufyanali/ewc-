<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-11 14:22:43 --> Could not find the language line "num_word_PKR"
ERROR - 2024-06-11 14:22:43 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ewchomes.tblacc_account_history.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *
FROM `tblacc_account_history`
WHERE `inv_id` = '16'
GROUP BY `inv_id`
ERROR - 2024-06-11 14:39:15 --> Could not find the language line "num_word_PKR"
ERROR - 2024-06-11 14:39:15 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\laragon\www\ewc-\application\views\themes\perfex\views\invoicehtml.php 282
ERROR - 2024-06-11 14:41:17 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ewchomes.tblacc_account_history.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *
FROM `tblacc_account_history`
WHERE `inv_id` = '16'
GROUP BY `VNo`
ERROR - 2024-06-11 14:42:33 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'ewchomes.tblacc_account_history.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *
FROM `tblacc_account_history`
WHERE `inv_id` = '16'
GROUP BY `rel_id`
ERROR - 2024-06-11 14:43:59 --> Could not find the language line "num_word_PKR"
ERROR - 2024-06-11 14:43:59 --> Severity: Notice --> Undefined property: stdClass::$paymentid C:\laragon\www\ewc-\application\views\themes\perfex\views\invoicehtml.php 284
ERROR - 2024-06-11 14:43:59 --> Severity: Notice --> Undefined property: stdClass::$amount C:\laragon\www\ewc-\application\views\themes\perfex\views\invoicehtml.php 293
ERROR - 2024-06-11 14:43:59 --> Severity: Notice --> Undefined variable: total_receiveds C:\laragon\www\ewc-\application\views\themes\perfex\views\invoicehtml.php 311
ERROR - 2024-06-11 09:54:16 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) C:\laragon\www\ewc-\application\helpers\general_helper.php 1295
ERROR - 2024-06-11 14:54:29 --> Could not find the language line "num_word_PKR"
ERROR - 2024-06-11 14:54:29 --> Severity: Notice --> Undefined property: stdClass::$paymentid C:\laragon\www\ewc-\application\views\themes\perfex\views\invoicehtml.php 284
ERROR - 2024-06-11 14:54:29 --> Severity: Notice --> Undefined variable: id C:\laragon\www\ewc-\application\helpers\general_helper.php 1295
ERROR - 2024-06-11 14:54:29 --> Severity: Notice --> Undefined variable: total_receiveds C:\laragon\www\ewc-\application\views\themes\perfex\views\invoicehtml.php 309
ERROR - 2024-06-11 14:55:25 --> Could not find the language line "num_word_PKR"
ERROR - 2024-06-11 14:55:25 --> Severity: Notice --> Undefined property: stdClass::$paymentid C:\laragon\www\ewc-\application\views\themes\perfex\views\invoicehtml.php 283
ERROR - 2024-06-11 14:55:25 --> Query error: Table 'ewchomes.tblacc_account_historys' doesn't exist - Invalid query: SELECT `tblacc_accounts`.`name` as `HeadName`
FROM `tblacc_account_historys`
LEFT JOIN `tblacc_accounts` ON `tblacc_accounts`.`id` = `tblacc_account_history`.`account`
WHERE `VNo` = 'RV-11'
AND `rel_type` = 'received_exit'
ERROR - 2024-06-11 15:25:27 --> Severity: Notice --> Undefined variable: CI C:\laragon\www\ewc-\application\models\Invoices_model.php 135
ERROR - 2024-06-11 15:25:27 --> Severity: Notice --> Trying to get property 'db' of non-object C:\laragon\www\ewc-\application\models\Invoices_model.php 135
ERROR - 2024-06-11 15:25:27 --> Severity: error --> Exception: Call to a member function select() on null C:\laragon\www\ewc-\application\models\Invoices_model.php 135
