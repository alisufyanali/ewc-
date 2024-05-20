<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
   <div class="content">
      <div class="row">
         
         
          
         <div class="col-md-12">
            <div class="panel_s">
               <div class="panel-body">
                   <h4 class="no-margin font-medium"><i class="fa fa-balance-scale" aria-hidden="true"></i>Purchase Report Category Wise</h4>
                   <hr />
                  
                  <div class="row">
                        
                        <div class="col-md-4" style="margin-bottom: 22px;">
                             <label>Date From</label>
                             <input type="date" name="fromdate" class="form-control">
                        </div>
                        
                        <div class="col-md-4" style="margin-bottom: 22px;">
                             <label>Date To</label>
                             <input type="date" name="todate" class="form-control">
                        </div>
                        
                        <div class="col-md-4" style="margin-bottom: 22px;">
                             <label>Supplier</label>
                             <select class="form-control" name="vendor">
                                 <option value=""></option>
                                 <?php foreach(getAllVendor() as $vendors){  ?>
                                    <option value="<?php echo $vendors['userid'] ?>"><?php echo $vendors['company'] ?></option>
                                <?php  } ?>
                             </select>
                        </div>
                        
                        <div class="col-md-4" style="margin-bottom: 22px;">
                             <label></label>
                             <input type="submit" name="submit" value="submit" class="btn btn-info">
                        </div>
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="background: #282828;color: white;">Date</th>
                                    <th style="background: #282828;color: white;">Transaction Type</th>
                                    <th style="background: #282828;color: white;">Product / Services</th>
                                    <th style="background: #282828;color: white;">Feet</th>
                                    <th style="background: #282828;color: white;">Meter</th>
                                    <th style="background: #282828;color: white;">Qty</th>
                                    <th style="background: #282828;color: white;">Rate</th>
                                    <th style="background: #282828;color: white;">Amount</th>
                                    <th style="background: #282828;color: white;">Supplier</th>
                                    <th style="background: #282828;color: white;">SKU</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    foreach($purchase_reports as $reports){
                                        if($reports->SKU != ""){   
                                ?>
                                
                                <tr>
                                    <td><?php echo $reports->date_add ?></td>
                                    <td>Bill</td>
                                    <td><?php echo $reports->LongDescription ?></td>
                                    <td><?php echo $reports->feet ?></td>
                                    <td><?php echo $reports->meter ?></td>
                                    <td><?php echo '1' ?></td>
                                    <td><?php echo $reports->total_goods_money ?></td>
                                    <td><?php echo $reports->total_goods_money ?></td>
                                    <td><?php echo $reports->supplier_name ?></td>
                                    <td><?php echo $reports->SKU ?></td>
                                </tr>
                                
                                <?php
                                    } 
                                }
                                ?>
                            </tbody>
                        
                        </table>
                   
                  </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php init_tail(); ?>
<?php $this->load->view('admin/reports/includes/sales_js'); ?>
</body>
</html>
