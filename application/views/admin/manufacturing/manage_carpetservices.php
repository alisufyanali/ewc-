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
                        <a href="http://localhost/ewc/admin/misc/carpetservices" class="btn btn-info pull-left display-block">NEW CARPET SERVICES</a>
                        
      </div>
   </div>
		
		<div class="panel_s mbot10">
        <div class="panel-body _buttons">
        <?php 
		 	echo form_open_multipart('http://localhost/ewc/admin/Misc/manage_carpetservices',array('id'=>'manage_carpetservices','class'=>'manage_carpetservices'));
		?> 
        <div class="col-sm-4">
           <label>Client From Date</label>
           <input type="date" name="fromdate" class="form-control">
         </div>
                       
                       <div class="col-sm-4">
                           <label>Client To Date</label>
                           <input type="date" name="todate" class="form-control">
                       </div>
                       
                       <div class="col-sm-4">
           <label>Handover From Date</label>
           <input type="date" name="handoverdate" class="form-control">
         </div>
                       
                       <div class="col-sm-4">
                           <label>Handover To Date</label>
                           <input type="date" name="handoverdatetodate" class="form-control">
                       </div>  
                       
                        <div class="col-sm-4">
                           <input type="submit" name="submit" class="btn btn-info" style="margin-top: 25px;">
                       </div>
                       
                       <?php echo form_close(); ?>
                        
      </div>
   </div>
		        
		        
		        
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">CARPET SERVICES</div>
		            <div class="panel-body">
		                <table class="table dataTable dataTables">
		                    <thead>
		                        <tr>
		                            <th>Date</th>
		                            <th>Client Name</th>
    		                        <th>Phone</th>
    		                        <th>Required</th> 
    		                        <th>Estimate</th>
    		                        <th>PCs</th>
    		                        <th>Meter</th>
    		                        <th>Feet</th>
    		                        <th>Remarks</th>
    		                        <th>Type</th>
    		                        <th>Handover</th>
    		                        <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <?php foreach($carpetservices as $totalcarpetservices){ ?>
		                        <tr>
		                            <td><?php echo $totalcarpetservices['date'] ?></td>
		                            <td><?php echo $totalcarpetservices['client_name'] ?></td>
		                            <td><?php echo $totalcarpetservices['phone'] ?></td>
    		                        <td><?php echo $totalcarpetservices['Required'] ?></td>
    		                        <td><?php echo $totalcarpetservices['ESTIMATE'] ?></td> 
    		                        <td><?php echo $totalcarpetservices['PCs'] ?></td>
    		                        <td><?php echo $totalcarpetservices['MTR'] ?></td>
    		                        <td><?php echo $totalcarpetservices['FT'] ?></td>
    		                        <td><?php echo $totalcarpetservices['REMARKS'] ?></td>
    		                        <td><?php echo $totalcarpetservices['Type'] ?></td>
    		                              <td><?php echo $totalcarpetservices['handovertovendor'] ?></td>
    		                        <td>
    		                            <a href="http://localhost/ewc/admin/misc/delete_carpetsevices/<?php echo $totalcarpetservices['carpetid'] ?>" class="btn btn-info">DELETE</a>
    		                            <a href="http://localhost/ewc/admin/misc/carpetservices/<?php echo $totalcarpetservices['carpetid'] ?>" class="btn btn-info">EDIT</a>
    		                            <a href="http://localhost/ewc/admin/misc/print_carpetservices/<?php echo $totalcarpetservices['carpetid'] ?>" class="btn btn-warning">PRINT</a>
    		                        </td>
		                        </tr>
		                         <?php } ?>
		                    </tbody>
		                    
		                    <tfoot>
		                       <tr>
		                            <th>Date</th>
		                            <th>Client Name</th>
    		                        <th>Phone</th>
    		                        <th>Required</th> 
    		                        <th>Estimate</th>
    		                        <th>PCs</th>
    		                        <th>Meter</th>
    		                        <th>Feet</th>
    		                        <th>Remarks</th>
    		                        <th>Type</th>
    		                        <th>Handover</th>
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