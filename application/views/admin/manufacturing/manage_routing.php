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
		                 Manage Routing
		            </div>
		            <div class="panel-body">
		                <table class="table dataTable">
		                    <thead>
		                        <tr>
		                            <th>Routing Name</th>
		                            <th>Routing Description</th>
    		                        <th>Routing Code</th>
    		                        <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <?php foreach($routing as $routes){ ?>
		                        <tr>
		                            <td><?php echo $routes['routing_name'] ?></td>
    		                        <td><?php echo $routes['routing_description'] ?></td>
    		                        <td><?php echo $routes['routing_code'] ?></td> 
    		                        <td>
    		                            <a href="<?php echo $routes['routing_id'] ?>" class="btn btn-info">DELETE</a>
    		                            <a href="<?php echo $routes['routing_id'] ?>" class="btn btn-info">EDIT</a>
    		                        </td>
		                        </tr>
		                         <?php } ?>
		                    </tbody>
		                    
		                    <tfoot>
		                        <tr>
		                             <th>Routing Name</th>
		                            <th>Routing Description</th>
    		                        <th>Routing Code</th>
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