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
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 Carpet Services
		            </div>
		            <?php 
		            	echo form_open_multipart('http://localhost/ewc-/admin/Misc/insert_carpetservices',array('id'=>'insert_carpetservices','class'=>'_transaction_form insert_carpetservices'));
		            ?>
		            <div class="panel-body">
		                <div class="col-sm-6">
		                   <div class="form-group" app-field-wrapper="date">
		                       <label for="date" class="control-label"> <small class="req text-danger">* </small>Client Date</label>
		                       <input type="date" id="date" name="date" class="form-control" aria-invalid="false"  value="<?php echo $details['date'] ?>">
		                   </div>
		                   
		                   <div class="form-group" app-field-wrapper="client_name">
		                       <label for="client_name" class="control-label">Client Name</label>
		                       <input type="hidden" id="carpetid" name="carpetid" class="form-control" aria-invalid="false"  value="<?php echo $details['carpetid'] ?>">
		                       <input type="text" id="client_name" name="client_name" class="form-control" aria-invalid="false"  value="<?php echo $details['client_name'] ?>">
		                   </div> 
		                   
		                   <div class="form-group" app-field-wrapper="phone">
		                       <label for="phone" class="control-label">Phone </label>
		                       <input type="text" id="phone" name="phone" class="form-control"  aria-invalid="false" value="<?php echo $details['phone'] ?>">
		                  </div>
		                   
		                   <div class="form-group" app-field-wrapper="Required">
		                       <label for="Required" class="control-label">Required Services </label>
		                       <input type="text" id="Required" name="Required" class="form-control" aria-invalid="false" value="<?php echo $details['Required'] ?>">
		                   </div> 
		                   
		                   <div class="form-group" app-field-wrapper="ESTIMATE">
		                       <label for="ESTIMATE" class="control-label">ESTIMATE CHARGES </label>
		                       <input type="text" id="ESTIMATE" name="ESTIMATE" class="form-control" aria-invalid="false" value="<?php echo $details['ESTIMATE'] ?>">
		                   </div> 
		                   
		                   <div class="form-group" app-field-wrapper="PCs">
		                       <label for="PCs" class="control-label">NO. OF PIECES </label>
		                       <input type="text" id="PCs" name="PCs" class="form-control"  aria-invalid="false" value="<?php echo $details['PCs'] ?>">
		                   </div>
		                   
		                   <div class="form-group" app-field-wrapper="MTR">
		                       <label for="MTR" class="control-label"> 
		                        <small class="req text-danger">* </small>SIZE IN MTR
		                       </label>
		                       <input type="text" id="MTR" name="MTR" class="form-control" aria-invalid="false"  value="<?php echo $details['MTR'] ?>">
		                  </div>
		                  
		                  <div class="form-group" app-field-wrapper="FT">
		                       <label for="FT" class="control-label"> 
		                        <small class="req text-danger">* </small>SIZE IN FT
		                       </label>
		                       <input type="text" id="FT" name="FT" class="form-control" aria-invalid="false"  value="<?php echo $details['FT'] ?>">
		                  </div>
		                  
		                  <div class="form-group" app-field-wrapper="REMARKS">
		                       <label for="REMARKS" class="control-label"> 
		                        <small class="req text-danger">* </small>REMARKS 
		                       </label>
		                       <input type="text" id="REMARKS" name="REMARKS" class="form-control" aria-invalid="false"  value="<?php echo $details['REMARKS'] ?>">
		                  </div>
		                  
		                  
		                    <div class="form-group" app-field-wrapper="handovertovendor">
		                       <label for="handovertovendor" class="control-label"> <small class="req text-danger">* </small>Handover to Vendor</label>
		                       <input type="date" id="handovertovendor" name="handovertovendor" class="form-control" aria-invalid="false"  value="<?php echo $details['handovertovendor'] ?>">
		                   </div>
		                  
		           
		                </div>
		                
		                
		                <div class="col-sm-6">
		                  
		                  
		                  
		                  
		                  <div class="form-group" app-field-wrapper="CHOBI">
		                       <label for="CHOBI" class="control-label"> 
		                             CHOBI
		                       </label>
		                       <input type="checkbox" id="Type" name="Type[]" class="form-control" aria-invalid="false"  value="CHOBI"> 
		                  </div>
		                  
		                  
		                  <div class="form-group" app-field-wrapper="MODERN">
		                       <label for="MODERN" class="control-label"> 
		                             MODERN
		                       </label>
		                       <input type="checkbox" id="Type" name="Type[]" class="form-control" aria-invalid="false"  value="MODERN"> 
		                  </div>
		                  
		                  <div class="form-group" app-field-wrapper="KILLIM">
		                       <label for="KILLIM" class="control-label"> 
		                             KILLIM
		                       </label>
		                       <input type="checkbox" id="Type" name="Type[]" class="form-control" aria-invalid="false"  value="KILLIM"> 
		                  </div>
		                  
		                  <div class="form-group" app-field-wrapper="PERSIAN">
		                       <label for="PERSIAN" class="control-label"> 
		                             PERSIAN
		                       </label>
		                       <input type="checkbox" id="Type" name="Type[]" class="form-control" aria-invalid="false"  value="PERSIAN"> 
		                  </div>
		                  
		                  
		                  <div class="form-group" app-field-wrapper="OTHER">
		                       <label for="OTHER" class="control-label"> 
		                             OTHER
		                       </label>
		                       <input type="text" id="Type" name="Type[]" class="form-control"> 
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