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
                    
                        <table class="table table-bordered" style="table-layout: fixed;">
                            <thead>
                                
                                <tr>
                                    <th style="background: #282828;color: white;">Products</th>
                                    <th style="background: #282828;color: white;">Suppliers</th>
                                    <th style="width: 85%;background: #282828;color: white;" colspan="24">Month</th>
                                </tr>
                                
                                <tr>
                                    <th style="background: #282828;color: white;"></th>
                                    <th style="background: #282828;color: white;"></th>
                                    <th style="background: #282828;color: white;" colspan="2">JAN</th>
                                    <th style="background: #282828;color: white;" colspan="2">FEB</th>
                                    <th style="background: #282828;color: white;" colspan="2">MAR</th>
                                    <th style="background: #282828;color: white;" colspan="2">APR</th>
                                    <th style="background: #282828;color: white;" colspan="2">MAY</th>
                                    <th style="background: #282828;color: white;" colspan="2">JUN</th>
                                    <th style="background: #282828;color: white;" colspan="2">JUL</th>
                                    <th style="background: #282828;color: white;" colspan="2">AUG</th>
                                    <th style="background: #282828;color: white;" colspan="2">SEP</th>
                                    <th style="background: #282828;color: white;" colspan="2">OCT</th>
                                    <th style="background: #282828;color: white;" colspan="2">NOV</th>
                                    <th style="background: #282828;color: white;" colspan="2">DEC</th>
                                </tr>
                                
                                <tr>
                                    <th style="background: #282828;color: white;font-size: 10px;"></th>
                                    <th style="background: #282828;color: white;font-size: 10px;"></th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">MTR</th>
                                    <th style="background: #282828;color: white;font-size: 10px;">AMT</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                
                                <?php 
                                
                                foreach(getAllItems() as $allitems){
                                    if(getVendorname($allitems['commodity_type']) != ""){
                                ?>
                                
                                <tr>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo $allitems['commodity_code'] ?> - <?php echo $allitems['description'] ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getVendorname($allitems['commodity_type']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(1,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(1,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(2,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(2,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(3,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(3,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(4,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(4,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(5,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(5,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(6,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(6,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(7,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(7,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(8,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(8,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(9,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(9,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(10,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(10,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(11,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(11,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthmeter(12,$allitems['sku_code']) ?></td>
                                    <td style="font-size: 10px;font-weight: 600;"><?php echo getItemByMonthquantity(12,$allitems['sku_code']) ?></td>
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
