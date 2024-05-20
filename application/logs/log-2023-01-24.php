<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-01-24 12:14:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total),0) - (
            (
            SELECT COALESCE(SUM(tblpur_order...' at line 2 - Invalid query: 
            SELECT (
            COALESCE(SUM(tblgoods_receipt.total_money as total),0) - (
            (
            SELECT COALESCE(SUM(tblpur_order_payment.amount),0)
            FROM tblpur_order_payment
            JOIN tblgoods_receipt ON tblgoods_receipt.id = tblpur_order_payment.pur_order
            WHERE tblpur_order_payment.date < "2023-01-01"
            AND tblgoods_receipt.supplier_code=3
            ) + (
                SELECT COALESCE(SUM(tblcreditnotes.total),0)
                FROM tblcreditnotes
                WHERE tblcreditnotes.date < "2023-01-01"
                AND tblcreditnotes.clientid=3
            ) - (
                SELECT COALESCE(SUM(tblcreditnote_refunds.amount),0)
                FROM tblcreditnote_refunds
                WHERE tblcreditnote_refunds.refunded_on < "2023-01-01"
                AND tblcreditnote_refunds.credit_note_id IN (SELECT id FROM tblcreditnotes WHERE clientid=3)
            )
        )
            )
            as beginning_balance FROM tblgoods_receipt
            WHERE date_add < "2023-01-01"
            AND supplier_code = 3
ERROR - 2023-01-24 12:14:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total),0) - (
            (
            SELECT COALESCE(SUM(tblpur_order...' at line 2 - Invalid query: 
            SELECT (
            COALESCE(SUM(tblgoods_receipt.total_money as total),0) - (
            (
            SELECT COALESCE(SUM(tblpur_order_payment.amount),0)
            FROM tblpur_order_payment
            JOIN tblgoods_receipt ON tblgoods_receipt.id = tblpur_order_payment.pur_order
            WHERE tblpur_order_payment.date < "2022-01-01"
            AND tblgoods_receipt.supplier_code=3
            ) + (
                SELECT COALESCE(SUM(tblcreditnotes.total),0)
                FROM tblcreditnotes
                WHERE tblcreditnotes.date < "2022-01-01"
                AND tblcreditnotes.clientid=3
            ) - (
                SELECT COALESCE(SUM(tblcreditnote_refunds.amount),0)
                FROM tblcreditnote_refunds
                WHERE tblcreditnote_refunds.refunded_on < "2022-01-01"
                AND tblcreditnote_refunds.credit_note_id IN (SELECT id FROM tblcreditnotes WHERE clientid=3)
            )
        )
            )
            as beginning_balance FROM tblgoods_receipt
            WHERE date_add < "2022-01-01"
            AND supplier_code = 3
ERROR - 2023-01-24 12:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total),0) - (
            (
            SELECT COALESCE(SUM(tblpur_order...' at line 2 - Invalid query: 
            SELECT (
            COALESCE(SUM(tblgoods_receipt.total_money as total),0) - (
            (
            SELECT COALESCE(SUM(tblpur_order_payment.amount),0)
            FROM tblpur_order_payment
            JOIN tblgoods_receipt ON tblgoods_receipt.id = tblpur_order_payment.pur_order
            WHERE tblpur_order_payment.date < "2023-01-01"
            AND tblgoods_receipt.supplier_code=3
            ) + (
                SELECT COALESCE(SUM(tblcreditnotes.total),0)
                FROM tblcreditnotes
                WHERE tblcreditnotes.date < "2023-01-01"
                AND tblcreditnotes.clientid=3
            ) - (
                SELECT COALESCE(SUM(tblcreditnote_refunds.amount),0)
                FROM tblcreditnote_refunds
                WHERE tblcreditnote_refunds.refunded_on < "2023-01-01"
                AND tblcreditnote_refunds.credit_note_id IN (SELECT id FROM tblcreditnotes WHERE clientid=3)
            )
        )
            )
            as beginning_balance FROM tblgoods_receipt
            WHERE date_add < "2023-01-01"
            AND supplier_code = 3
ERROR - 2023-01-24 12:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '0) - (
            (
            SELECT COALESCE(SUM(tblpur_order_payment.a...' at line 2 - Invalid query: 
            SELECT (
            COALESCE(SUM(tblgoods_receipt.total_money,0) - (
            (
            SELECT COALESCE(SUM(tblpur_order_payment.amount),0)
            FROM tblpur_order_payment
            JOIN tblgoods_receipt ON tblgoods_receipt.id = tblpur_order_payment.pur_order
            WHERE tblpur_order_payment.date < "2023-01-01"
            AND tblgoods_receipt.supplier_code=3
            ) + (
                SELECT COALESCE(SUM(tblcreditnotes.total),0)
                FROM tblcreditnotes
                WHERE tblcreditnotes.date < "2023-01-01"
                AND tblcreditnotes.clientid=3
            ) - (
                SELECT COALESCE(SUM(tblcreditnote_refunds.amount),0)
                FROM tblcreditnote_refunds
                WHERE tblcreditnote_refunds.refunded_on < "2023-01-01"
                AND tblcreditnote_refunds.credit_note_id IN (SELECT id FROM tblcreditnotes WHERE clientid=3)
            )
        )
            )
            as beginning_balance FROM tblgoods_receipt
            WHERE date_add < "2023-01-01"
            AND supplier_code = 3
ERROR - 2023-01-24 12:17:05 --> Severity: Notice --> Undefined index: refund_credit_note_id /home/ewchomes/public_html/application/views/admin/clients/groups/vendor_statement.php 75
ERROR - 2023-01-24 12:19:25 --> Severity: error --> Exception: Object of class CI_DB_mysqli_result could not be converted to string /home/ewchomes/public_html/application/models/Statement_model.php 360
ERROR - 2023-01-24 12:19:42 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:42 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:42 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:42 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:42 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:42 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:44 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 02:19:45 --> 404 Page Not Found: /index
ERROR - 2023-01-24 12:19:48 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:48 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:48 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:48 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:48 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:48 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:48 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:49 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:19:51 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:52 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:19:56 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:19:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:19:59 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:19:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:19:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:19:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:19:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:19:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:19:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:00 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:12 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:12 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:12 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:12 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:12 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:12 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:12 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:14 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:27 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:27 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:27 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:27 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:27 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:27 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:28 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:39 --> Severity: error --> Exception: Object of class CI_DB_mysqli_result could not be converted to string /home/ewchomes/public_html/application/models/Statement_model.php 360
ERROR - 2023-01-24 12:20:43 --> Severity: error --> Exception: Object of class CI_DB_mysqli_result could not be converted to string /home/ewchomes/public_html/application/models/Statement_model.php 360
ERROR - 2023-01-24 12:20:53 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:53 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:53 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:53 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:53 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:53 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:53 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:58 --> Could not find the language line "Products List"
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_code /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:58 --> Severity: Notice --> Undefined index: warehouse_name /home/ewchomes/public_html/application/helpers/fields_helper.php 343
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined offset: 15 /home/ewchomes/public_html/application/helpers/datatables_helper.php 167
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined offset: 16 /home/ewchomes/public_html/application/helpers/datatables_helper.php 167
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:20:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:20:59 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:20:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:21:04 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:04 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:21:04 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:21:04 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:21:04 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:21:04 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:21:04 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:21:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:21:05 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:21:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:21:17 --> Severity: error --> Exception: Object of class CI_DB_mysqli_result could not be converted to string /home/ewchomes/public_html/application/models/Statement_model.php 360
ERROR - 2023-01-24 12:21:51 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:21:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:21:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:21:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:21:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:21:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:21:55 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:55 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:21:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:21:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:21:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:21:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:21:55 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 02:21:55 --> 404 Page Not Found: /index
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:21:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:21:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:21:56 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:21:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:22:03 --> Query error: Unknown column 'goods_receipt.date_add' in 'where clause' - Invalid query: SELECT
        SUM(tblgoods_receipt.total_money) as invoiced_amount
        FROM tblgoods_receipt
        WHERE supplier_code = 3 AND (goods_receipt.date_add BETWEEN "2022-12-01" AND "2022-12-31") 
ERROR - 2023-01-24 12:22:09 --> Query error: Unknown column 'goods_receipt.date_add' in 'where clause' - Invalid query: SELECT
        SUM(tblgoods_receipt.total_money) as invoiced_amount
        FROM tblgoods_receipt
        WHERE supplier_code = 3 AND (goods_receipt.date_add BETWEEN "2023-01-01" AND "2023-12-31") 
ERROR - 2023-01-24 12:22:46 --> Severity: Notice --> Undefined index: refund_credit_note_id /home/ewchomes/public_html/application/views/admin/clients/groups/vendor_statement.php 75
ERROR - 2023-01-24 12:22:46 --> Severity: Notice --> Undefined index: refund_credit_note_id /home/ewchomes/public_html/application/views/admin/clients/groups/vendor_statement.php 75
ERROR - 2023-01-24 12:22:48 --> Severity: Notice --> Undefined index: refund_credit_note_id /home/ewchomes/public_html/application/views/admin/clients/groups/vendor_statement.php 75
ERROR - 2023-01-24 12:22:50 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:22:50 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:22:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:22:50 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:22:50 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:22:50 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:22:50 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:22:50 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:22:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:22:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: support /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Trying to access array offset on value of type null /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 107
ERROR - 2023-01-24 12:22:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/ewchomes/public_html/application/services/utilities/Arr.php 114
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 116
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 117
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 30
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 31
ERROR - 2023-01-24 12:22:51 --> Severity: Notice --> Undefined index: slug /home/ewchomes/public_html/modules/menu_setup/helpers/menu_setup_helper.php 32
ERROR - 2023-01-24 12:22:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/ewchomes/public_html/system/core/Exceptions.php:271) /home/ewchomes/public_html/modules/prchat/controllers/Prchat_Controller.php 465
