<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<div id="wrapper">
	<div class="content">
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 Add Manufacturing Order
		            </div>
		            <?php 
		            	echo form_open('https://yaaftpos.com/Industronic/admin/Misc/insert_manufacturingorders',array('id'=>'insert_routing','class'=>'_transaction_form insert_manufacturingorders'));
		            ?>
		            <div class="panel-body">
		                <style>
		                    .o_not_full.oe_button_box {
                                position: relative;
                                display: block;
                                margin-bottom: -2;
                                margin-top: -12px;
                                margin-left: -16px;
                                margin-right: -16px;
                                text-align: right;
                            }
                            button.btn.oe_stat_button {
                                width: 20.5%;
                            }
                            button.btn.oe_stat_button {
                                color: #4c4c4c;
                                height: 44px;
                                padding: 0 6px 0 0 !important;
                                text-align: left;
                                white-space: nowrap;
                                background-color: transparent;
                                opacity: 0.8;
                                border-radius: 0px;
                                margin-bottom: 0;
                            }
                            span.o_stat_value, span.o_stat_text {
                                text-transform: none;
                                color: #f1673c;
                            }
                            span.o_stat_value {
                                display: block;
                                max-width: 100%;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                vertical-align: top;
                            }
                            span.o_stat_value {
                                font-weight: 700;
                                color: #f1673c;
                                line-height: 1.2;
                            }
                            span.o_stat_value, span.o_stat_text {
                                text-transform: none;
                                color: #f1673c;
                            }
                            span.o_stat_text {
                                line-height: 1.2;
                            }
                            
                            .o_field_widget.o_stat_info {
                                display: inline-block;
                                vertical-align: middle;
                                font-weight: 500;
                                padding-right: 6px;
                                line-height: 1.3;
                                font-size: 16px;
                            }
                            
                            .o_field_widget.o_stat_info {
    display: inline-block;
    vertical-align: middle;
    font-weight: 500;
    padding-right: 6px;
    line-height: 1.3;
    font-size: 16px;
}

                            span.o_stat_value, span.o_stat_text {
                                text-transform: none;
                                color: #f1673c;
                            }
                            
                            .hr-color {
    margin-top: 10px;
    border-bottom: 0.5px solid;
    color: #d8341b;
}
                            
                            span.o_stat_value {
                                display: block;
                                max-width: 100%;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                vertical-align: top;
                            }
                            span.o_stat_value {
                                font-weight: 700;
                                color: #f1673c;
                                line-height: 1.2;
                            }
                            
		                </style>
		                <div class="row mb-5">
							<div class="col-md-8">
								<h4 class="no-margin" style="font-size: 20.6px;font-weight: 700;color: #0e3f3f;">Add Manufacturing Order 
							</h4></div>
							<div class="col-md-4">
                            </div>
						</div>
		                
		                <hr class="hr-color">
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="product">
		                        <label for="product" class="control-label"> <small class="req text-danger">* </small>Finish Product</label>
		                        <select data-live-search="true" id="finish_product" name="finish_product" class="form-control selectpicker">
		                        <?php 
		                            foreach($products as $product){
		                                echo '<option value="'.$product['id'].'">'.$product['commodity_code'].'</option>';
		                            }
		                        ?>
		                        </select>
		                    </div>
		                
		                </div>
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="Deadline">
		                        <label for="Deadline" class="control-label"> <small class="req text-danger">* </small>Deadline</label>
		                       <div class="input-group date"><input type="text" id="Deadline" name="Deadline" class="form-control datetimepicker" value="" autocomplete="off" aria-invalid="false"><div class="input-group-addon">
    <i class="fa fa-calendar calendar-icon"></i>
		                    </div>
		                </div>
		                 </div>
		                 </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="Plan_From">
		                        <label for="Plan_From" class="control-label"> <small class="req text-danger">* </small>Plan from</label>
		                       <div class="input-group date"><input type="text" id="date_plan_from" name="date_plan_from" class="form-control datetimepicker" value="" autocomplete="off" aria-invalid="false"><div class="input-group-addon">
    <i class="fa fa-calendar calendar-icon"></i>
</div></div>
		                    </div>
		                </div>
		                
		                 <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="Quantity">
		                        <label for="Quantity" class="control-label"> <small class="req text-danger">* </small>Quantity</label>
		                        <input type="text" id="Quantity" name="Quantity" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="Responsible_for_person">
		                        <label for="Responsible_for_person" class="control-label"> <small class="req text-danger">* </small>Responsible</label>
		                        <select data-live-search="true" id="Responsible_for_person" name="Responsible_for_person"  class="form-control selectpicker">
    		                        <?php 
    		                            foreach($staff as $staffs){
    		                                echo '<option value="'.$staffs['staffid'].'">'.$staffs['firstname'].' '.$staffs['lastname'].'</option>';
    		                            }
    		                        ?>
		                           </select>
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="unit_id">
		                        <label for="unit_id" class="control-label"> <small class="req text-danger">* </small>Unit Of Measures</label>
		                        <select data-live-search="true" id="unit_id" name="unit_id" class="form-control selectpicker">
		                            <option value="PCs">PCs</option>
		                            <option value="Box">Box</option>
		                            <option value="Packets">Packets</option>
		                            <option value="Meters">Meters</option>
		                            <option value="Inches">Inches</option>
		                            <option value="Centimeters">Centimeters</option>
		                        </select>
		                        
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="bom">
		                        <label for="bom" class="control-label"> <small class="req text-danger">* </small>Bills Of Material</label>
		                          <select data-live-search="true" id="bom" name="bom"  class="form-control selectpicker">
    		                        <?php 
    		                            foreach($bom as $boms){
    		                                echo '<option value="'.$boms['bomid'].'">'.$boms['code'].'</option>';
    		                            }
    		                        ?>
		                           </select>
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="referencecode">
		                        <label for="referencecode" class="control-label"> <small class="req text-danger">* </small>Reference Code</label>
		                        <input type="text" id="referencecode" name="referencecode" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="routing">
		                        <label for="routing" class="control-label"> <small class="req text-danger">* </small>Routing</label>
		                         <select data-live-search="true" id="routing" name="routing" class="form-control selectpicker">
		                        <?php 
		                            foreach($routing as $routings){
		                                echo '<option value="'.$routings['routing_id'].'">'.$routings['routing_name'].'</option>';
		                            }
		                        ?>
		                        </select>
		                    </div>
		                </div>
		                
		               <div class="clearfix"></div>
									<h5 class="h5-color">Consumption Information</h5>
									<hr class="hr-color">
                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Consumption</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="consumped">
                                    <tr>
                                        <td>
                                             <select data-live-search="true" id="product" name="product[]" class="form-control selectpicker">
		                        <?php 
		                            foreach($products as $product){
		                                echo '<option value="'.$product['id'].'">'.$product['commodity_code'].'</option>';
		                            }
		                        ?>
		                        </select></td>
                                        <td><input type="text" name="consumption[]" class="form-control"></td>
                                        <td><a class="btn btn-info" onclick="addConsumption()">+</a></td>
                                    </tr>
                                </tbody>
                                 <tfoot>
                                    <tr>
                                        <th>Product</th>
                                        <th>Consumption</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        
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

<script>
    function addConsumption(){
        var newrow = ` <tr>
                             <td>
                                             <select id="product" name="product[]" class="form-control">
		                        <?php 
		                            foreach($products as $product){
		                                echo '<option value="'.$product['id'].'">'.$product['commodity_code'].'</option>';
		                            }
		                        ?>
		                        </select></td>
                            <td><input type="text" name="consumption[]" class="form-control"></td>
                            <td><a class="btn btn-danger" name="button" onclick="addDeduction()">-</a></td>
                       </tr>`;
                       
        $('#consumped').append(newrow);               
    }
    
    function addDeduction(){
         $(this).remove();
    }
</script>

<?php init_tail(); ?>