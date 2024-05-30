<?php init_head();?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="panel_s">
                <div class="panel-body">
                    <?php $arrAtt = array();
                $arrAtt['data-type']='currency';
                ?>
                    <?php echo form_open_multipart($this->uri->uri_string(),array('id'=>'payment-entry-form','autocomplete'=>'off')); ?>
                    <h4 class="no-margin font-bold"><?php echo _l($title); ?></h4>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">
                            <?php $value = (isset($payment_entry) ? _d($payment_entry->payment_date) : _d(date('Y-m-d'))); ?>
                            <?php echo render_date_input('payment_date','payment_date',$value); ?>
                        </div>
                        <div class="col-md-6">
                            <?php $value = (isset($payment_entry) ? $payment_entry->VNo : $voucher_no); ?>
                            <?php echo render_input('VNo','Voucher No',$value,'text' ,[ "readonly" =>"readonly" ]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?php $value = (isset($payment_entry) ? $payment_entry->payee_name : null); ?>
                            <?php echo render_input('payee_name','Payee Name',$value,'text'); ?>
                        </div>

                        <div class="col-md-6">
                            <?php $value = (isset($payment_entry) ? $payment_entry->Reference_no : null); ?>
                            <?php echo render_input('reference_no','Reference No',$value,'text'); ?>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-select">
                                <label class="bold">mode Of Payment</label>
                                <select class="selectpicker mode_of_payment" name="mode_of_payment" data-width="100%">
                                    <option value=""></option>
                                    <option value="Cash">Cash</option>
                                    <option value="Bank">Bank</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="bold" for="modes_accounts">Accounts</label>
                            <select class="selectpicker" name="modes_accounts" id="modes_accounts" data-width="100%">
                                <option value=""></option>
                                <?php 
                                    if (isset($modes_accounts)) {
                                        foreach ($modes_accounts as $key => $value) {
                                            $HeadCode = $value['HeadCode'] ; 
                                            $PHeadCode = $value['PHeadCode'] ; 
                                            $name = $value['name'] ; 
                                            echo '<option value="'.$HeadCode.'" data-value="'.$PHeadCode.'" >'.$name .' - ' .$HeadCode .' </option>' ; 
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div id="payment_entry_container"></div>
                    <div class="col-md-8 col-md-offset-4">
                        <table class="table text-right">
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="text-right bold"><?php echo _l('amount'); ?></td>
                                </tr>
                                <tr>
                                    <td><span class="bold"><?php echo _l('invoice_total'); ?> :</span>
                                    </td>
                                    <td class="total_debit">
                                        <?php $value = (isset($payment_entry) ? $payment_entry->amount : 0); ?>
                                        <?php echo app_format_money($value, $currency->name); ?>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php echo form_hidden('payment_entry'); ?>
                    <?php echo form_hidden('amount'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="bold"><?php echo _l('dt_expense_description'); ?></p>
                            <?php $value = (isset($payment_entry) ? $payment_entry->description : ''); ?>
                            <?php echo render_textarea('description','',$value,array(),array(),'','tinymce'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-footer">
                                <button type="button"
                                    class="btn btn-info payment-entry-form-submiter"><?php echo _l('submit'); ?></button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
</body>

</html>
<?php require 'modules/accounting/assets/js/payment_entry/payment_entry_js.php';?>