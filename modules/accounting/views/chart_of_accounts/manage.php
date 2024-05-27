<?php init_head();?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="panel_s">
                <div class="panel-body">
                    <h4 class="no-margin font-bold"><?php echo _l($title); ?></h4>
                    <hr />
                    <div>
                        <a href="#"
                            class="btn btn-info add-new-account mbot15 <?php if(!has_permission('accounting_chart_of_accounts', '', 'create')){echo 'hide';} ?>"><?php echo _l('add'); ?></a>
                        <a href="<?php echo admin_url('accounting/accounts_import'); ?>"
                            class="btn btn-success mbot15 <?php if(!has_permission('accounting_chart_of_accounts', '', 'create')){echo 'hide';} ?>"><?php echo _l('import_account'); ?></a>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <?php echo render_select('ft_account',$accounts,array('id','name', 'third_level'),'acc_account', '', array('multiple' => true, 'data-actions-box' => true), array(), '', '', false); ?>
                        </div>
                        <div class="col-md-3">
                            <?php echo render_input('ft_search','Search', null, 'text') ?>
                        </div>
                        <div class="col-md-3">
                            <div class="">

                                <p for="">&nbsp</p>
                                <button class="btn btn-success" id="filter_submit">Filter</button>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <a href="#" data-toggle="modal" data-target="#accounts_bulk_actions"
                        class="hide bulk-actions-btn table-btn"
                        data-table=".table-accounts"><?php echo _l('bulk_actions'); ?></a>
                    <table class="table table-accounts">
                        <thead>
                            <th><span class="hide"> - </span>
                                <div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all"
                                        data-to-table="accounts">
                                    <p></label>
                                </div>
                            </th>
                            <th><?php echo _l('name'); ?></th>
                            <th><?php echo _l('Code'); ?></th>

                            <th> 3rd Level</th>
                            <th> 2nd Level</th>
                            <th> 1st Level</th>

                            <th><?php echo _l('primary_balance'); ?></th>
                            <th><?php echo _l('bank_balance'); ?></th>
                            <th><?php echo _l('staff_dt_active'); ?></th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $arrAtt = array();
      $arrAtt['data-type']='currency';
?>




<div class="modal fade" id="account-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Chart of Accounts</h4>
            </div>
            <?php echo form_open_multipart(admin_url('accounting/account'),array('id'=>'account-form'));?>
            <div class="modal-body">

                <?php echo render_input('name','name'); ?>

                <div class="form-group">
                    <label class="bold" for="parent_account"><small class="req text-danger">* </small> Parent
                        Account</label>
                    <select class="selectpicker" name="parent_account" required id="parent_account" data-width="100%">
                        <option value=""></option>
                        <?php 
                            if (isset($accounts)) {
                                foreach ($accounts as $key => $value) {
                                    $HeadCode = $value['HeadCode'] ; 
                                    $name = $value['name'] ; 
                                    echo '<option value="'.$HeadCode.'" >'.$name.' </option>' ; 
                                }
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group hide child_account_div">
                    <label class="bold" for="child_accounts"><small class="req text-danger">* </small> Child
                        Account</label>
                    <select class="selectpicker" name="child_accounts" required id="child_accounts" data-width="100%">
                        <option value=""></option>
                        <?php 
                            if (isset($child_accounts)) {
                                foreach ($child_accounts as $key => $value) {
                                    $HeadCode = $value['HeadCode'] ; 
                                    $PHeadCode = $value['PHeadCode'] ; 
                                    $name = $value['name'] ; 
                                    echo '<option value="'.$HeadCode.'" data-value="'.$PHeadCode.'" >'.$name.' </option>' ; 
                                }
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group hide sub_child_account_div">
                    <label class="bold" for="sub_child_accounts">Sub Child Account</label>
                    <select class="selectpicker" name="sub_child_accounts" id="sub_child_accounts" data-width="100%">
                        <option value=""></option>
                        <?php 
                            if (isset($sub_child_accounts)) {
                                foreach ($sub_child_accounts as $key => $value) {
                                    $HeadCode = $value['HeadCode'] ; 
                                    $PHeadCode = $value['PHeadCode'] ; 
                                    $name = $value['name'] ; 
                                    echo '<option value="'.$HeadCode.'" data-value="'.$PHeadCode.'" >'.$name.' </option>' ; 
                                }
                            }
                        ?>
                    </select>
                </div>



                <br>

                <div class="row">
                    <div class="col-md-6">
                        <?php echo render_input('balance','balance','','text', $arrAtt); ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo render_date_input('balance_as_of','as_of'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p class="bold">Currency</p>
                        <select class="selectpicker" name="currency" data-width="100%">
                            <option value="PKR">PKR</option>
                            <option value="$">$</option>
                            <option value="€">€</option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <p class="bold"><?php echo _l('dt_expense_description'); ?></p>
                        <?php echo render_textarea('description','','',array(),array(),'','tinymce'); ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <button type="submit" class="btn btn-info btn-submit"><?php echo _l('submit'); ?></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>





<div class="modal fade" id="edit-account-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Chart of Accounts</h4>
            </div>
            <?php echo form_open_multipart(admin_url('accounting/account'),array('id'=>'update-account-form'));?>
            <?php echo form_hidden('id'); ?>
            <?php echo form_hidden('update_balance'); ?>
            <div class="modal-body">

                <?php echo render_input('edit_name','name'); ?>

                <div class="form-group">
                    <label class="bold" for="edit_parent_account"><small class="req text-danger">* </small> Parent
                        Account</label>
                    <select class="selectpicker"  name="edit_parent_account" required id="edit_parent_account"
                        data-width="100%">
                        <option value=""></option>
                        <?php 
                            if (isset($accounts)) {
                                foreach ($accounts as $key => $value) {
                                    $HeadCode = $value['HeadCode'] ; 
                                    $name = $value['name'] ; 
                                    echo '<option value="'.$HeadCode.'" >'.$name.' </option>' ; 
                                }
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group edit_child_account_div">
                    <label class="bold" for="edit_child_accounts"><small class="req text-danger">* </small> Child
                        Account</label>
                    <select class="selectpicker"  name="edit_child_accounts" required id="edit_child_accounts"
                        data-width="100%">
                        <option value=""></option>
                        <?php 
                            if (isset($child_accounts)) {
                                foreach ($child_accounts as $key => $value) {
                                    $HeadCode = $value['HeadCode'] ; 
                                    $PHeadCode = $value['PHeadCode'] ; 
                                    $name = $value['name'] ; 
                                    echo '<option value="'.$HeadCode.'" data-value="'.$PHeadCode.'" >'.$name.' </option>' ; 
                                }
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group hide edit_sub_child_account_div">
                    <label class="bold" for="edit_sub_child_accounts">Sub Child Account</label>
                    <select class="selectpicker" name="edit_sub_child_accounts" id="edit_sub_child_accounts"
                        data-width="100%">
                        <option value=""></option>
                        <?php 
                            if (isset($sub_child_accounts)) {
                                foreach ($sub_child_accounts as $key => $value) {
                                    $HeadCode = $value['HeadCode'] ; 
                                    $PHeadCode = $value['PHeadCode'] ; 
                                    $name = $value['name'] ; 
                                    echo '<option value="'.$HeadCode.'" data-value="'.$PHeadCode.'" >'.$name.' </option>' ; 
                                }
                            }
                        ?>
                    </select>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <?php echo render_input('edit_balance','balance','','text', $arrAtt); ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo render_date_input('edit_balance_as_of','as_of'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p class="bold">Currency</p>
                        <select class="selectpicker edit_currency" name="edit_currency" data-width="100%">
                            <option value="PKR">PKR</option>
                            <option value="$">$</option>
                            <option value="€">€</option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <p class="bold"><?php echo _l('dt_expense_description'); ?></p>
                        <?php echo render_textarea('edit_description','','',array(),array(),'','tinymce'); ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <button type="submit" class="btn btn-info btn-submit"><?php echo _l('submit'); ?></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>







<div class="modal fade bulk_actions" id="accounts_bulk_actions" tabindex="-1" role="dialog"
    data-table=".table-accounts">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo _l('bulk_actions'); ?></h4>
            </div>
            <div class="modal-body">
                <?php if(has_permission('accounting_chart_of_accounts','','edit')){ ?>
                <div class="checkbox checkbox-info">
                    <input type="checkbox" name="mass_activate" id="mass_activate">
                    <label for="mass_activate"><?php echo _l('mass_activate'); ?></label>
                </div>
                <?php } ?>
                <?php if(has_permission('accounting_chart_of_accounts','','edit')){ ?>
                <div class="checkbox checkbox-info">
                    <input type="checkbox" name="mass_deactivate" id="mass_deactivate">
                    <label for="mass_deactivate"><?php echo _l('mass_deactivate'); ?></label>
                </div>
                <?php } ?>
                <?php if(has_permission('accounting_chart_of_accounts','','detele')){ ?>
                <div class="checkbox checkbox-danger">
                    <input type="checkbox" name="mass_delete" id="mass_delete">
                    <label for="mass_delete"><?php echo _l('mass_delete'); ?></label>
                </div>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <a href="#" class="btn btn-info"
                    onclick="bulk_action(this); return false;"><?php echo _l('confirm'); ?></a>
            </div>
        </div>
    </div>
</div>



<?php init_tail(); ?>
</body>

</html>
<?php require 'modules/accounting/assets/js/chart_of_accounts/manage_js.php'; ?>