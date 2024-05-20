<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<style>
    table.dataTable tfoot>tr>th {
    color: #4e75ad;
    background: #f6f8fa;
    vertical-align: middle;
    border-bottom: 1px solid;
    border-color: #ebf5ff!important;
    font-size: 13px;
    padding-top: 9px;
    padding-bottom: 8px;
}
</style>


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
		        
		        
		        <div class="panel_s mbot10">
         <div class="panel-body _buttons">
                        <a href="http://localhost/ewc/admin/misc/bom" class="btn btn-info pull-left display-block">
               New Gatepass            </a>
                        
      </div>
   </div>
            
            
        <div class="panel_s mbot10">
            <div class="panel-body _buttons">
            <?php 
		    	echo form_open_multipart('http://localhost/ewc/admin/Misc/manage_bom',array('id'=>'manage_bom','class'=>'manage_bom'));
		    ?> 
            <div class="col-sm-4">
               <label>From Date</label>
               <input type="date" name="fromdate" class="form-control">
            </div>
            <div class="col-sm-4">
               <label>To Date</label>
               <input type="date" name="todate" class="form-control">
            </div>
            <div class="col-sm-4">
               <input type="submit" name="submit" class="btn btn-info" style="margin-top: 25px;">
            </div>
            <?php echo form_close(); ?>
            </div>
        </div>
   
		        
		        <div class="panel_s">
		             <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 GATEPASSES
		            </div>
		            <div class="panel-body">
		                <table class="table dataTables">
		                    <thead>
		                        <tr>
		                            <th>Client Name</th>
		                            <th>Date</th>
		                            <th>Address</th>
    		                        <th>Signature</th>
    		                        <th>Duration</th> 
    		                        <th>PCs Sending</th>
    		                        <th>Driver</th>
    		                        <th>Appointment</th>
    		                        <th>Time In - Out</th>
    		                        <th>Client Kept</th>
    		                        <th>Received</th>
    		                        <th>Received Driver</th>
    		                       
    		                        <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <?php foreach($bom as $totalbom){ ?>
		                        <tr>
		                            <td><?php echo $totalbom['client_name'] ?></td>
		                            <td><?php echo $totalbom['date'] ?></td>
		                            <td><?php echo $totalbom['Address'] ?></td>
    		                        <td><?php echo $totalbom['Signature'] ?></td>
    		                        <td><?php echo $totalbom['Duration'] ?></td> 
    		                        <td><?php echo $totalbom['PCsSending'] ?></td>
    		                        <td><?php echo $totalbom['Driver'] ?></td>
    		                        <td><?php echo $totalbom['Appointment'] ?></td>
    		                        <td><?php echo $totalbom['TimeOut'] ?> - <?php echo $totalbom['Timein'] ?></td>
    		                        <td><?php echo $totalbom['ClientKept'] ?></td>
    		                        <td><?php echo $totalbom['Received'] ?></td>
    		                        <td><?php echo $totalbom['RecDriver'] ?></td>
    		                  
    		                        <td>
    		                            <a href="http://localhost/ewc/admin/misc/delete_bom/<?php echo $totalbom['gatepassid'] ?>" class="btn btn-danger">DELETE</a>
    		                            <a href="http://localhost/ewc/admin/misc/bom/<?php echo $totalbom['gatepassid'] ?>" class="btn btn-info">EDIT</a>
    		                             <a href="http://localhost/ewc/admin/misc/print_gatepass/<?php echo $totalbom['gatepassid'] ?>" class="btn btn-Warning">Print</a>
    		                        </td>
		                        </tr>
		                         <?php } ?>
		                    </tbody>
		                    
		                    <tfoot>
		                        <tr>
		                            <th>Client Name</th>
		                            <th>Date</th>
		                            <th>Address</th>
    		                        <th>Signature</th>
    		                        <th>Duration</th> 
    		                        <th>PCs Sending</th>
    		                        <th>Driver</th>
    		                        <th>Appointment</th>
    		                        <th>Time In - Out</th>
    		                        <th>Client Kept</th>
    		                        <th>Received</th>
    		                        <th>Received Driver</th>
    		                        <th>Action</th>
		                        </tr>
		                    </tfoot>
		                </table>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	</div>

<?php init_tail(); ?>

<script>
    $(document).ready( function () {
    $('.dataTables').DataTable({
         processing: false,
        serverSide: false,
        deferLoading: 57,
        });
        
    $("#DataTables_Table_0_wrapper").removeClass("table-loading");    
    });
    
     
</script>
