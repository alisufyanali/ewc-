<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>


<div id="wrapper">
	<div class="content">
		<div class="row">
		    
		    <div class="col-md-12">
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 Print Approval Product
		            </div>
		         
		      <div class="panel-body">
		          <div id="printTable">
		                    <style media="all">
		                    
       
                            </style>
		           <div class="slip">
            
            <div class="col-md-4" style="width: 40%;text-align: left;float:left">
			    <img src="http://localhost/ewc-/uploads/company/f86c57053ea4c32da3871c0ff57503b0.png" alt="EWC INTERIORS" style="width: 22%;text-align: left;">
			</div>
			
			<div class="col-md-8 text-right" style="width: 60%;text-align: right;float:right">
				<strogn style="font-weight: 900;">EWC INTERIORS</strogn><br>
                13-c, lane 11 Khayaban-e-Bukhari, D.H.A Phase 6 Bukhari<br>
                Commercial Area Phase 6 Defence Housing Authority,<br>
                Karachi, Karachi City, Sindh 75500<br>
                KARACHI SINDH<br>
                PK<br>
			</div>
			<table class="table">
				<tbody>
                    <tr class="project-overview">
                        <td colspan="2">
                            <div class="col-md-12">
								<p><h2 class="bold text-center">APPROVAL INVOICE</h2></p>
							    <p class="bold text-center"><span class="bold text-center">Client Name : <?php echo $details['client_name'] ?></span></p>
							</div>
                        </td>
                    </tr>
                </tbody>
            </table>    
            <div class="slip_mid">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;"><strong>S.No.</strong></th>
                            <th style="text-align: center;"><strong>Product</strong></th>
                            <th style="text-align: center;"><strong>Feet</strong></th>
                            <th style="text-align: center;"><strong>Meter</strong></th>
                            <th style="text-align: center;"><strong>SKU Code</strong></th>
                            <th style="text-align: center;"><strong>Description</strong></th>
                            <th style="text-align: center;"><strong>Tag Price</strong></th>
                            <th style="text-align: center;"><strong>Dis Price</strong></th>
                            <th style="text-align: center;"><strong>GST</strong></th>
                            <th style="text-align: center;"><strong>Total</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $sl = 0;
                        $total = 0;
                        $totals = 0;
                        $discount = 0;
                        $gstamount = 0;
                        foreach($alldetails as $detailed) {
                        $sl = $sl + 1;
                        $total = $total + $detailed['tagprice'];
                         $totals = $totals + $detailed['totalamount'];
                        $discount = $discount + $detailed['discountprice'];
                        $gstamount = $gstamount + $detailed['gstamount'];
                        ?>
                        
                        <tr>
                            <td style="text-align: center;"><?php echo $sl ?></td>
                            <td style="text-align: center;"><?php echo $detailed['code'] ?></td>
                            <td style="text-align: center;"><?php echo $detailed['size'] ?></td>
                            <td style="text-align: center;"><?php echo $detailed['meter'] ?></td>
                            <td style="text-align: center;"><?php echo $detailed['skucode'] ?></td>
                            <td style="text-align: center;"><?php echo $detailed['name'] ?></td>
                            <td style="text-align: center;"><?php echo $detailed['tagprice'] ?></td>
                            <td style="text-align: center;"><?php echo $detailed['discountprice'] ?></td>
                            
                            <td style="text-align: center;"><?php echo $detailed['gstamount'] ?></td>
                            <td style="text-align: center;"><?php echo $detailed['totalamount'] ?></td>
                            
                        </tr>
                       
                       <?php } ?> 
                    </tbody>
                    <tfoot>
                         <tr>
                            <th style="text-align: center;" colspan="6">Total</th>
                            <th style="text-align: center;"><?php echo $total ?></th>
                            <th style="text-align: center;"><?php echo $discount ?></th>
                             <th style="text-align: center;"><?php echo $gstamount ?></th>
                            <th style="text-align: center;"><?php echo $totals ?></th>
                        </tr>
                    </tfoot>
                </table>
                
            </div>
        </div>
		               </div>
        <div class="btn-tr btn btn-default" id="print_here" style="margin-top:8px;">
            Print 
        </div> 
		                
		      </div>
		            <div class="panel-footer">
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