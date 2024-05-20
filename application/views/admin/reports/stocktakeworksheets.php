<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
   <div class="content">
      <div class="row">
         
         
          
         <div class="col-md-12">
            <div class="panel_s">
               <div class="panel-body">
                   <h4 class="no-margin font-medium"><i class="fa fa-balance-scale" aria-hidden="true"></i>Stock Take Work Sheet</h4>
                   <hr />
                  
                  <div class="row">
                        
                        <div class="col-md-4" style="margin-bottom: 22px;display: none !important">
                             <label>Date From</label>
                             <input type="date" name="fromdate" class="form-control">
                        </div>
                        
                        <div class="col-md-4" style="margin-bottom: 22px;display: none !important">
                             <label>Date To</label>
                             <input type="date" name="todate" class="form-control">
                        </div>
                        
                        <div class="col-md-4" style="margin-bottom: 22px;display: none !important">
                             <label>Supplier</label>
                             <select class="form-control" name="vendor">
                                 <option value=""></option>
                                 <?php foreach(getAllVendor() as $vendors){  ?>
                                    <option value="<?php echo $vendors['userid'] ?>"><?php echo $vendors['company'] ?></option>
                                <?php  } ?>
                             </select>
                        </div>
                        
                        <div class="col-md-4" style="margin-bottom: 22px;display: none !important">
                             <label></label>
                             <input type="submit" name="submit" value="submit" class="btn btn-info">
                        </div>
                         <div id="printTable">
                             <style media=print>
            table,
            table th,
            table td {
                border: 1px solid;
                border-collapse: collapse;
                font-family: Arial;
                font-size:12px;
                text-align:center;
                padding:2px;
            }
             table td input{
                 border:0;
                 width:0%;
             }
            </style>
            
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="background: #282828;color: white;">Product</th>
                                    <th style="background: #282828;color: white;">Description</th>
                                    <th style="background: #282828;color: white;">SKU</th>
                                    <th style="background: #282828;color: white;">Feet</th>
                                    <th style="background: #282828;color: white;">Meter</th>
                                    <th style="background: #282828;color: white;">Qty in Hand</th>
                                    <th style="background: #282828;color: white;">Reorder Point</th>
                                    <th style="background: #282828;color: white;">Qty in PO</th>
                                    <th style="background: #282828;color: white;">Physical Count</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    foreach($items as $reports){
                                ?>
                                
                                <tr>
                                    <td><?php echo $reports->description ?></td>
                                    <td><?php echo $reports->long_description ?></td>
                                    <td><?php echo $reports->commodity_code ?></td>
                                    <td><?php echo $reports->Feet ?></td>
                                    <td><?php echo $reports->Meters ?></td>
                                    <td><?php echo number_format((getTotalPurchaseQuantity($reports->id) - getTotalReturnQuantity($reports->id)) - (getTotalInvoiceQuantity(str_replace(' ', '' ,$reports->sku_code)) - getTotalRefundQuantity(str_replace(' ', '' ,$reports->sku_code)))) ?></td>
                                    
                                    <td>0</td>
                                    <td>0</td>
                                    <td><input type="text" class="form-control" name="stocksheet"></td>
                                </tr>
                                
                                <?php
                                    
                                }
                                ?>
                            </tbody>
                        
                        </table>
                        </div>
                   <div class="btn-tr btn btn-default" id="print_here">
            Print
        </div>
                  </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php init_tail(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.min.js"></script>

<script>
//         function printDiv() 
// {

//   var divToPrint=document.getElementById('printTable');

//   var newWin=window.open('','Print-Window');

//   newWin.document.open();

//   newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

//   newWin.document.close();

//   setTimeout(function(){newWin.close();},10);

// }

//         jQuery('#print_here').on('click', function() {
//             printDiv();
//             console.log('printing the receipt');
//         });

 jQuery(function() {

  jQuery('#print_here').on('click', function() {

    jQuery('#printTable').print();

  });

})
        </script>
<?php $this->load->view('admin/reports/includes/sales_js'); ?>
</body>
        

</html>
