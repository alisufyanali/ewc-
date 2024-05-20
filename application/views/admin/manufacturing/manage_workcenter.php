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

    <div id="wrapper">
	<div class="content">
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel_s">
		             <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 Manage Work Center
		            </div>
		            <div class="panel-body">
		                <table class="table dataTable">
		                    <thead>
		                        <tr>
		                            <th>Work Center Name</th>
		                            <th>Working Hours</th>
    		                        <th>Code</th>
    		                        <th>Time Efficiency</th>
    		                        <th>Cost per hour</th>
    		                        <th>Capacity</th>
    		                        <th>OEE Target (%)</th>
    		                        <th>Time Before</th>
    		                        <th>Time After</th>
    		                        <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <?php foreach($workcenter as $routes){ ?>
		                        <tr>
		                            <td><?php echo $routes['tbl_workcentername'] ?></td>
    		                        <td><?php echo $routes['tbl_workcenterhour'] ?></td>
    		                        <td><?php echo $routes['tbl_workcentercode'] ?></td> 
    		                        <td><?php echo $routes['tbl_workcentertime'] ?></td> 
    		                        <td><?php echo $routes['tbl_workcentercost'] ?></td> 
    		                        <td><?php echo $routes['tbl_workcentercapacity'] ?></td> 
    		                        <td><?php echo $routes['tbl_workcenteroeetarget'] ?></td> 
    		                        <td><?php echo $routes['tbl_workcenterprodm'] ?></td> 
    		                        <td><?php echo $routes['tbl_workcenterprodafter'] ?></td> 
    		                        <td>
    		                            <a href="<?php echo $routes['tbl_workcenterid'] ?>" class="btn btn-info">DELETE</a>
    		                            <a href="<?php echo $routes['tbl_workcenterid'] ?>" class="btn btn-info">EDIT</a>
    		                        </td>
		                        </tr>
		                         <?php } ?>
		                    </tbody>
		                    
		                    <tfoot>
		                        <tr>
		                            <th>Work Center Name</th>
		                            <th>Working Hours</th>
    		                        <th>Code</th>
    		                        <th>Time Efficiency</th>
    		                        <th>Cost per hour</th>
    		                        <th>Capacity</th>
    		                        <th>OEE Target (%)</th>
    		                        <th>Time Before</th>
    		                        <th>Time After</th>
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