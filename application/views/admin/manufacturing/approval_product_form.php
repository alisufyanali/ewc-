<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<style>
    .panel_s>.panel-heading {
    font-weight: 500;
    background: #282828;
    color: #ffb223;
}
</style>
<div id="wrapper">
	<div class="content">
		<div class="row">
		    
		    <div class="col-md-12">
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">Approval Product</div>
		            <?php 
		            	echo form_open_multipart('http://localhost/ewc-/admin/Misc/insert_approvalproduct/'.$details['uniqueid'],array('id'=>'insert_approvalproduct','class'=>'_transaction_form insert_approvalproduct'));
		            ?>
		      <div class="panel-body">
		                <div class="col-sm-6">
		                   <div class="form-group" app-field-wrapper="date">
		                       <label for="date" class="control-label"> <small class="req text-danger">* </small>Date</label>
		                       <input type="date" id="date" name="date" class="form-control" aria-invalid="false"  value="<?php echo $details['date'] ? $details['date'] : date('Y-m-d'); ?>">
		                   </div>
		                </div>
		                <div class="col-sm-6">
		                  
		                   <div class="form-group" app-field-wrapper="client_name">
		                       <label for="client_name" class="control-label">Client Name  
		                            <a href="#" data-toggle="modal" data-target="#customer_item_modal" style="margin-left: 17px;font-size: 20px;"><i class="fa fa-plus"></i></a>
		                       </label>
		                       <input type="hidden" id="uniqueid" name="uniqueid" class="form-control" aria-invalid="false"  value="<?php echo date('Ymdhis'); ?>">
		                       <input type="hidden" id="approveid" name="approveid" class="form-control" aria-invalid="false"  value="<?php echo $details['approveid'] ?>">
		                       
		                       <select class="form-control selectpicker" id="client_name" name="client_name" data-live-search="true">
		                        <option value="<?php echo $details['client_name'] ?>"><?php echo $details['client_name'] ?></option>
		                        <?php foreach($allclients as $product){ ?> 
		                          <option value="<?php echo $product['company'] ?>"><?php echo $product['company'] ?></option>
		                        <?php } ?> 
		                       </select>
		                    </div> 
		                </div>
		                
		                <div class="col-sm-12">
		                  
		                  <table class="table table-hover table-bordered">
		                      <thead>
		                          <tr>
		                              <th>Product</th>
		                              <th>Feet</th>
		                              <th>Meter</th>
		                              <th>SKU Code</th>
		                              <th>Description</th>
		                              <th>Tag Price</th>
		                              <th>Discounted Price</th>
		                              <th>GST Amount</th>
		                              <th>Amount</th>
		                              <th style="width: 103px !important;">Action</th>
		                          </tr>
		                      </thead>
		                      <tbody id="tocud">
		                          <?php
		                          // "
		                          if($alldetails) {
		                          foreach($alldetails as $detailed) { ?>
		                          <tr>
		                              <td>
		                                  <select class="form-control selectpicker" name="code[]" data-live-search="true" onchange="changefeet(1)" id="code_1"> 
		                                      <option value="<?php echo $detailed['code'] ?>"><?php echo $detailed['code'] ?></option>
		                                      <?php foreach($products as $product){ ?> 
		                                            <option value="<?php echo $product['sub_group_name'] ?> - <?php echo $product['categoryname'] ?> - <?php echo $product['description'] ?>" data-feet="<?php echo $product['Feet'] ?>" data-meter="<?php echo $product['Meters'] ?>"  data-long_description="<?php echo $product['long_description'] ?>" data-skucode="<?php echo $product['sku_code'] ?>" data-tagprice="<?php echo $product['rate'] ?>"><?php echo $product['sub_group_name'] ?> - <?php echo $product['categoryname'] ?> - <?php echo $product['description'] ?></option>
		                                      <?php } ?> 
		                                  </select>
		                              </td>
		                              <td><input name="size[]" type="text" class="form-control" value="<?php echo $detailed['size'] ?>" id="size_1"></td>
		                              <td><input name="meter[]" type="text" class="form-control" value="<?php echo $detailed['size'] ?>" id="meter_1" readonly=""></td>
		                              <td><input name="skucode[]" type="text" class="form-control" value="<?php echo $detailed['skucode'] ?>" id="skucode_1" readonly=""></td>
		                              <td><input name="name[]" type="text" class="form-control" value="<?php echo $detailed['name'] ?>" id="long_description_1"></td>
		                              <td><input name="tagprice[]" type="text" class="form-control" value="<?php echo $detailed['tagprice'] ?>" id="tagprice_1"></td>
		                              <td><input name="discountprice[]" type="text" class="form-control" value="<?php echo $detailed['discountprice'] ?>" id="discountprice_1"  onkeyup="calsyi(1)"></td>
		                              <td><input name="gstamount[]" type="text" class="form-control" value="<?php echo $detailed['gstamount'] ?>" id="gstamount_1"></td>
		                              <td><input name="totalamount[]" type="text" class="form-control" value="<?php echo $detailed['totalamount'] ?>" id="totalamount_1"></td>
		                              <td><a class="btn btn-info" onclick="addRow()">+</a><a class="btn btn-danger" onclick="deleteRow(1)">x</a></td>
		                          </tr>
		                          <?php } 
		                          }
		                          else{
		                          ?>
		                          
		                          <tr>
            		              <td>
            		                  <select class="form-control selectpicker" name="code[]" data-live-search="true"  onchange="changefeet(1)" id="code_1">
		                                      <option value="">Select Product</option>
		                                      <?php foreach($products as $product){ ?> 
		                                            <option value="<?php echo $product['sub_group_name'] ?> - <?php echo $product['categoryname'] ?> - <?php echo $product['description'] ?>" data-feet="<?php echo $product['Feet'] ?>" data-meter="<?php echo $product['Meters'] ?>"  data-long_description="<?php echo $product['long_description'] ?>" data-skucode="<?php echo $product['sku_code'] ?>" data-tagprice="<?php echo $product['rate'] ?>"><?php echo $product['sub_group_name'] ?> - <?php echo $product['categoryname'] ?> - <?php echo $product['description'] ?></option>
		                                      <?php } ?> 
		                                  </select>
            		              </td>
            		              <td><input name="size[]" type="text" class="form-control" id="size_1" readonly=""></td>
            		              <td><input name="meter[]" type="text" class="form-control" id="meter_1" readonly=""></td>
            		               <td><input name="skucode[]" type="text" class="form-control"  id="skucode_1" readonly=""></td>
		                          <td><input name="name[]" type="text" class="form-control" id="long_description_1"></td>
		                          <td><input name="tagprice[]" type="text" class="form-control" id="tagprice_1"></td>
		                          <td><input name="discountprice[]" type="text" class="form-control" id="discountprice_1"  onkeyup="calsyi(1)"></td>
		                          <td><input name="gstamount[]" type="text" class="form-control" value="<?php echo $detailed['gstamount'] ?>" id="gstamount_1"></td>
		                              <td><input name="totalamount[]" type="text" class="form-control" value="<?php echo $detailed['totalamount'] ?>" id="totalamount_1"></td>
            		              <td><a class="btn btn-info" onclick="addRow()">+</a>
            		              <a class="btn btn-danger" onclick="deleteRow(1)">x</a></td>
		                            </tr>
		                           <?php } ?> 
		                      </tbody>
		                  </table>
		                </div>
		                
		                
		      </div>
		            <div class="panel-footer">
		                <input type="submit" value="Submit" name="submit" class="btn btn-info">
		            </div>
		            	<?php echo form_close(); ?>
		        </div>
		   
		    </div>
		</div>
    </div>
</div>

<div class="modal fade" id="customer_item_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    <span class="add-title">Add Customer</span>
                </h4>
            </div>
            <?php echo form_open('admin/invoice_items/addcustomer',array('id'=>'customer_add_form')); ?>
            <?php echo form_hidden('itemid'); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-warning affect-warning hide">
                            <?php echo _l('changing_items_affect_warning'); ?>
                        </div>
                        <?php echo render_input('company','Name'); ?>
                        <?php echo render_input('vat','NTN'); ?>
                        <?php echo render_input('phonenumber','Phone Number'); ?>
                        <?php echo render_input('email','Email Address'); ?>
                        <?php echo render_input('address','Address'); ?>
                        <?php echo render_input('website','Website'); ?>
                        <div class="clearfix mbot15"></div>
                </div>
            </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
        <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
        <?php echo form_close(); ?>
    </div>
</div>
</div>
</div>
<script>
    function addRow(){
        var rowCount = $('#tocud tr').length;
        rowCount = rowCount + 1;
        var trs = `<tr id="myTableRow`+rowCount+`">
		              <td>
		              <select class="form-control selectpicker" name="code[]" data-live-search="true" onchange="changefeet(`+rowCount+`)" id="code_`+rowCount+`">
		                                      <option value="">Select Product</option>
		                                      <?php foreach($products as $product){ ?> 
		                                            <option value="<?php echo $product['sub_group_name'] ?> - <?php echo $product['categoryname'] ?> - <?php echo $product['description'] ?>" data-feet="<?php echo $product['Feet'] ?>" data-meter="<?php echo $product['Meters'] ?>" data-long_description="<?php echo $product['long_description'] ?>" data-skucode="<?php echo $product['sku_code'] ?>" data-tagprice="<?php echo $product['rate'] ?>"> <?php echo $product['sub_group_name'] ?> - <?php echo $product['categoryname'] ?> - <?php echo $product['description'] ?></option>
		                                      <?php } ?> 
		                                  </select>
		              </td>
		               <td><input name="size[]" type="text" class="form-control" id="size_`+rowCount+`" readonly=""></td>
            		   <td><input name="meter[]" type="text" class="form-control"  id="meter_`+rowCount+`" readonly=""></td>
		               <td><input name="skucode[]" type="text" class="form-control"  id="skucode_`+rowCount+`" readonly=""></td>
		               <td><input name="name[]" type="text" class="form-control" id="long_description_`+rowCount+`"></td>
		               <td><input name="tagprice[]" type="text" class="form-control" id="tagprice_`+rowCount+`"></td>
		               <td><input name="discountprice[]" type="text" class="form-control" id="discountprice_`+rowCount+`" onkeyup="calsyi(`+rowCount+`)"></td>
		               <td><input name="gstamount[]" type="text" class="form-control"  id="gstamount_`+rowCount+`"></td>
		               <td><input name="totalamount[]" type="text" class="form-control"  id="totalamount_`+rowCount+`"></td>
		               <td><a class="btn btn-info" onclick="addRow()">+</a><a class="btn btn-danger" onclick="deleteRow(`+rowCount+`)">x</a></td>
		          </tr>`;
        $('#tocud').append(trs);
        
        $('.selectpicker').selectpicker('refresh');
        
        
    }
    
    function changefeet(row){
        var feet = $( "#code_"+ row +" option:selected" ).data('feet');
        var meter = $( "#code_"+ row +" option:selected" ).data('meter');
        skucode  = $( "#code_"+ row +" option:selected" ).data('skucode');
        long_description = $( "#code_"+ row +" option:selected" ).data('long_description');
        tagprice = $( "#code_"+ row +" option:selected" ).data('tagprice');
        $('#size_'+row).val(feet);
        $('#meter_'+row).val(meter);
        $('#skucode_'+row).val(skucode);
        $('#long_description_'+row).val(long_description);
        $('#tagprice_'+row).val(tagprice);
    }
    
    
    function init_item_js() {
        validate_item_forms();
    }
    
    
    function calsyi(row){
        var discountprice = $('#discountprice_'+row).val();
        var gstamount = discountprice * 17 / 100;
        $('#gstamount_'+row).val(gstamount);
        $('#totalamount_'+row).val(parseInt(discountprice) + parseInt(gstamount));
    }
    
    function deleteRow(row){
        $('#myTableRow'+row).remove();
    }
    
    if(typeof(jQuery) != 'undefined'){
        init_item_js();
    } else {
     window.addEventListener('load', function () {
       var initItemsJsInterval = setInterval(function(){
            if(typeof(jQuery) != 'undefined') {
                init_item_js();
                clearInterval(initItemsJsInterval);
            }
         }, 1000);
     });
  }
    
    function manage_invoice_items(form) {
        var data = $(form).serialize();
        var url = form.action;
        $.post(url, data).done(function (response) {
            response = JSON.parse(response);
            if (response.success == true) {
                var item_select = $('#item_select');
                if ($("body").find('.accounting-template').length > 0) {
                    if (!item_select.hasClass('ajax-search')) {
                        var group = item_select.find('[data-group-id="' + response.item.group_id + '"]');
                        if (group.length == 0) {
                            var _option = '<optgroup label="' + (response.item.group_name == null ? '' : response.item.group_name) + '" data-group-id="' + response.item.group_id + '">' + _option + '</optgroup>';
                            if (item_select.find('[data-group-id="0"]').length == 0) {
                                item_select.find('option:first-child').after(_option);
                            } else {
                                item_select.find('[data-group-id="0"]').after(_option);
                            }
                        } else {
                            group.prepend('<option data-subtext="' + response.item.long_description + '" value="' + response.item.itemid + '">(' + accounting.formatNumber(response.item.rate) + ') ' + response.item.description + '</option>');
                        }
                    }
                    if (!item_select.hasClass('ajax-search')) {
                        item_select.selectpicker('refresh');
                    } else {
    
                        item_select.contents().filter(function () {
                            return !$(this).is('.newitem') && !$(this).is('.newitem-divider');
                        }).remove();
    
                        var clonedItemsAjaxSearchSelect = item_select.clone();
                        item_select.selectpicker('destroy').remove();
                        $("body").find('.items-select-wrapper').append(clonedItemsAjaxSearchSelect);
                        init_ajax_search('items', '#item_select.ajax-search', undefined, admin_url + 'items/search');
                    }
    
                    add_item_to_preview(response.item.itemid);
                } else {
                    // Is general items view
                    $('.table-invoice-items').DataTable().ajax.reload(null, false);
                }
                alert_float('success', response.message);
            }
            $('#sales_item_modal').modal('hide');
        }).fail(function (data) {
            alert_float('danger', data.responseText);
        });
        return false;
    }
    
    function validate_item_forms(){
        appValidateForm($('#customer_add_form'), {
            description: 'required',
            rate: {
                required: true,
            }
        }, manage_invoice_items);
    }
</script>
<?php init_tail(); ?>