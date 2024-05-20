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
                        <a href="http://localhost/ewc/admin/misc/approval_product_form" class="btn btn-info pull-left display-block">NEW APPROVAL PRODUCTS</a>
                        
      </div>
   </div>
   
             <div class="panel_s mbot10">
         <div class="panel-body _buttons">
              <?php 
		            	echo form_open_multipart('http://localhost/ewc/admin/Misc/manage_approved_products',array('id'=>'insert_approvalproduct','class'=>'_transaction_form insert_approvalproduct'));
		            ?>
                    <div class="col-sm-2">
                          <label>From Date</label>
                          <input type="date" name="fromdate" class="form-control">
                    </div>
                      
                    <div class="col-sm-2">
                          <label>To Date</label>
                          <input type="date" name="todate" class="form-control">
                    </div>
                      
                    <div class="col-sm-2">
                          <label>SKU CODE</label>
                          <input type="text" name="skucode" class="form-control">
                    </div>
                      
                      
                    <div class="col-sm-2">
                          <label>PRODUCT</label>
                          <select class="form-control selectpicker" name="code" data-live-search="true"  id="code_1">
		                      <option value="<?php echo $detailed['code'] ?>"><?php echo $detailed['code'] ?></option>
		                        <?php foreach($AllProducts as $product){ ?> 
		                          <option value="<?php echo $product['description'] ?> - <?php echo $product['commodity_code'] ?>" ><?php echo $product['description'] ?> - <?php echo $product['commodity_code'] ?></option>
		                        <?php } ?> 
		                </select>
		            </div>
		            
		            <div class="col-sm-2">
                          <label>SUB CATEGORIES</label>
                          <select class="form-control selectpicker" name="subcategories" data-live-search="true"  id="subcategories_1">
		                        <?php foreach($subcategories as $product){ ?> 
		                          <option value="<?php echo $product['id'] ?>"><?php echo $product['sub_group_name'] ?></option>
		                        <?php } ?> 
		                </select>
		            </div>
                      
                    <div class="col-sm-2">
                        
                          <input type="submit" name="submit" value="submit" class="btn  btn-info" style="margin-top: 27px;">  
                    </div>
                    
                     <?php echo form_close(); ?>
                        
      </div>
   </div>
   
                
		        
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">APPROVAL PRODUCTS</div>
		            <div class="panel-body">
		                <table class="table dataTable dataTables">
		                    <thead>
		                        <tr>
		                            <th>Date</th>
		                            <th>Ref</th>
    		                        <th>Client</th>
    		                        <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <?php foreach($ApprovedProducts as $totalcarpetservices){ ?>
		                        <tr>
		                            <td><?php echo $totalcarpetservices['date'] ?></td>
		                            <td><?php echo $totalcarpetservices['uniqueid'] ?></td>
		                            <td><?php echo $totalcarpetservices['client_name'] ?></td>
    		                        <td>
    		                            <a href="http://localhost/ewc/admin/misc/delete_approvalproduct/<?php echo $totalcarpetservices['uniqueid'] ?>" class="btn btn-info">DELETE</a>
    		                            <a href="http://localhost/ewc/admin/misc/approval_product_form/<?php echo $totalcarpetservices['uniqueid'] ?>" class="btn btn-info">EDIT</a>
    		                            <a href="http://localhost/ewc/admin/misc/print_approval_product_form/<?php echo $totalcarpetservices['uniqueid'] ?>" class="btn btn-warning">PRINT</a>
    		                        </td>
		                        </tr>
		                         <?php } ?>
		                    </tbody>
		                    
		                    <tfoot>
		                       	<tr>
		                            <th>Date</th>
		                            <th>Ref</th>
    		                        <th>Client</th>
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