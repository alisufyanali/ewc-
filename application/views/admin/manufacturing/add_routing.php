<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<div id="wrapper">
	<div class="content">
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 Add Routing
		            </div>
		            <?php 
		            	echo form_open('https://yaaftpos.com/Industronic/admin/Misc/insert_routing',array('id'=>'insert_routing','class'=>'_transaction_form insert_routing'));
		            ?>
		            <div class="panel-body">
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="routing_code">
		                        <label for="routing_code" class="control-label"> <small class="req text-danger">* </small>Routing Code</label>
		                        <input type="text" id="routing_code" name="routing_code" class="form-control" value="Route_<?php echo rand('0000','9999') ?>" aria-invalid="false">
		                    </div>
		                
		                </div>
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="routing_name">
		                        <label for="routing_name" class="control-label"> <small class="req text-danger">* </small>Routing Name</label>
		                        <input type="text" id="routing_name" name="routing_name" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                <div class="col-sm-12">
		                    <div class="form-group" app-field-wrapper="routing_name">
		                        <label for="routing_name" class="control-label"> <small class="req text-danger">* </small>Routing Description</label>
		                        <textarea class="mce-tinymce mce-container mce-panel form-control" name="routing_desc" style="height: 241px;"></textarea>
		                    </div>
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

<?php init_tail(); ?>