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
		                 Traveling/Transport Gate Pass
		            </div>
		            <?php 
		            	echo form_open_multipart('http://localhost/ewc/admin/Misc/insert_gatepass',array('id'=>'insert_gatepass','class'=>'_transaction_form insert_gatepass'));
		            ?>
		            <div class="panel-body">
		                <div class="col-sm-6">
		                   <div class="form-group" app-field-wrapper="date">
		                       <label for="date" class="control-label"> <small class="req text-danger">* </small>Date</label>
		                       <input type="date" id="date" name="date" class="form-control" aria-invalid="false"  value="<?php echo $details['date'] ?>">
		                   </div>
		                   
		                   <div class="form-group" app-field-wrapper="client_name">
		                       <label for="client_name" class="control-label">Client Name</label>
		                       <input type="hidden" id="gatepassid" name="gatepassid" class="form-control" aria-invalid="false"  value="<?php echo $details['gatepassid'] ?>">
		                       <input type="text" id="client_name" name="client_name" class="form-control" aria-invalid="false"  value="<?php echo $details['client_name'] ?>">
		                   </div> 
		                   
		                   <div class="form-group" app-field-wrapper="Address">
		                       <label for="Address" class="control-label">Address </label>
		                       <input type="text" id="Address" name="Address" class="form-control" aria-invalid="false" value="<?php echo $details['Address'] ?>">
		                   </div> 
		                   
		                   <div class="form-group" app-field-wrapper="Duration">
		                       <label for="Duration" class="control-label">Duration </label>
		                       <input type="text" id="Duration" name="Duration" class="form-control" aria-invalid="false" value="<?php echo $details['Duration'] ?>">
		                   </div> 
		                   
		                   <div class="form-group" app-field-wrapper="Signature">
		                       <label for="Signature" class="control-label">Sales Person / Manager / Authority Persons </label>
		                       <input type="text" id="Signature" name="Signature" class="form-control"  aria-invalid="false" value="<?php echo $details['Signature'] ?>">
		                   </div>
		                   
		                   <div class="form-group" app-field-wrapper="phone">
		                       <label for="phone" class="control-label">Phone </label>
		                       <input type="text" id="phone" name="phone" class="form-control"  aria-invalid="false" value="<?php echo $details['phone'] ?>">
		                  </div>
		                  
		                  
		                   <div class="form-group" app-field-wrapper="PCsSending">
		                       <label for="PCsSending" class="control-label"> 
		                        <small class="req text-danger">* </small>Before Sending Total Pcs: 
		                       </label>
		                       <input type="text" id="PCsSending" name="PCsSending" class="form-control" aria-invalid="false"  value="<?php echo $details['PCsSending'] ?>">
		                  </div>
		                  
		                  <div class="form-group" app-field-wrapper="Manager" style="display: none !important">
		                       <label for="Manager" class="control-label"> 
		                        <small class="req text-danger">* </small>Manager 
		                       </label>
		                       <input type="text" id="Manager" name="Manager" class="form-control" aria-invalid="false"  value="<?php echo $details['Manager'] ?>">
		                  </div>
		                  
		                  
		                  <div class="form-group" app-field-wrapper="Driver">
		                       <label for="Driver" class="control-label"> 
		                        <small class="req text-danger">* </small>Departure Driver
		                       </label>
		                       <input type="text" id="Driver" name="Driver" class="form-control" aria-invalid="false"  value="<?php echo $details['Driver'] ?>">
		                  </div>
		                  
		                </div>
		                
		                
		                <div class="col-sm-6">
		                  
		                  
		                  
		                  
		                  <div class="form-group" app-field-wrapper="Appointment">
		                       <label for="Appointment" class="control-label"> 
		                        <small class="req text-danger">* </small>After Appointment Total pcs 
		                       </label>
		                       <input type="text" id="Appointment" name="Appointment" class="form-control" aria-invalid="false"  value="<?php echo $details['Appointment'] ?>">
		                  </div>
		                  
		                  
		                  <div class="form-group" app-field-wrapper="TimeOut">
		                       <label for="TimeOut" class="control-label"> 
		                        <small class="req text-danger">* </small>Time Out
		                       </label>
		                       <input type="time" id="TimeOut" name="TimeOut" class="form-control" aria-invalid="false"  value="<?php echo $details['TimeOut'] ?>">
		                  </div>
		                  
		                  
		                  <div class="form-group" app-field-wrapper="Timein">
		                       <label for="Timein" class="control-label"> 
		                        <small class="req text-danger">* </small>Time in
		                       </label>
		                       <input type="time" id="Timein" name="Timein" class="form-control" aria-invalid="false"  value="<?php echo $details['Timein'] ?>">
		                  </div>
		                  
		                  <div class="form-group" app-field-wrapper="ClientKept">
		                       <label for="ClientKept" class="control-label"> 
		                        <small class="req text-danger">* </small>Client kept Total PCs
		                       </label>
		                       <input type="text" id="ClientKept" name="ClientKept" class="form-control" aria-invalid="false"  value="<?php echo $details['ClientKept'] ?>">
		                  </div>
		                   
		                  <div class="form-group" app-field-wrapper="Received">
		                       <label for="Received" class="control-label"> 
		                        <small class="req text-danger">* </small>Received Person
		                       </label>
		                       <input type="text" id="Received" name="Received" class="form-control" aria-invalid="false"  value="<?php echo $details['Received'] ?>">
		                  </div>
		                  
		                  <div class="form-group" app-field-wrapper="RecDriver">
		                       <label for="RecDriver" class="control-label"> 
		                        <small class="req text-danger">* </small>Destination / Recieved Driver
		                       </label>
		                       <input type="text" id="RecDriver" name="RecDriver" class="form-control" aria-invalid="false"  value="<?php echo $details['RecDriver'] ?>">
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