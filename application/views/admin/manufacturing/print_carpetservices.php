<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>


<div id="wrapper">
	<div class="content">
		<div class="row">
		    
		    <div class="col-md-12">
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 Print Carpet Services
		            </div>
		          
		            <div class="panel-body">
		                <div id="printTable">
		                    <style media="all">
		                    *{
		                        font-family: Arial;
		                    }
       .slip {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0px auto;
        }

        .slip_head {
            border-top: 2px solid #000;
            border-bottom: 2px solid #000;
        }

        .slip_end {
            margin-bottom: 50px;
        }

        .slip_top {
            width: 100%;
        }

        .slip_top h2 {
            text-align: center;
        }

        .top-main {
            position: relative;
            margin: 10px auto 0;
            font-size: 14px;
            line-height: 20px;
        }

        .top-in {
            width: 100%;
            display: block;
            margin: 15px auto 0;
        }

        .top-in h4 {
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .top-in h4 span {
            border-bottom: 1px solid #000;
            margin-left: 10px;
        }

        .slip_mid {
            margin-top: 30px;
            overflow: hidden;
        }

        table {
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }

        table td,
        table th {
            height: 25px;
        }

        .slip_top img {
            width: 100%;
            max-width: 180px;
            margin: 0 auto;
            display: block;
        }

        .mid_left,
        .mid_right {
            width: 50%;
            float: left;
            margin: 0 auto;
        }
    </style>
		                 <div class="slip">
            <div class="slip_top">
                <img src="https://yaaftpos.com/EWC_NEW/uploads/company/f86c57053ea4c32da3871c0ff57503b0.png" alt="">
                <div class="slip_head">
                    <h2>CARPET SERVICES RECEIPT</h2>
                </div>
                <div class="top-main">
                    <div class="top-in">
                        <h4>Date: <span><?php echo $details['date'] ?></span></h4>
                    </div>
                    <div class="top-in">
                        <h4>Customer Name:<span><?php echo $details['client_name'] ?></span></h4>
                    </div>
                    <div class="top-in">
                        <h4>CONTACT NO:<span><?php echo $details['phone'] ?></span></h4>
                    </div>
                    <div class="top-in">
                        <h4>REQUIRED SERVICES:<span style="border: none;"><?php echo $details['Required'] ?></span></h4>
                    </div>
                    <div class="top-in">
                        <h4>ESTIMATE CHARGES :<span>Rs. <?php echo $details['ESTIMATE'] ?>/-</span></h4>
                    </div>
                </div>
            </div>
            <div class="slip_mid">
                <h3 style="text-align: center;margin-bottom: 20px;">DESCRIPTION</h3>
                <div class="mid_left">
                    <div class="top-in">
                        <h4>NO. OF PIECES: <span> <?php echo $details['PCs'] ?> </span></h4>
                    </div>
                    <div class="top-in">
                        <h4>SIZE IN MTR:<span> <?php echo $details['MTR'] ?>  </span></h4>
                    </div>
                    <div class="top-in">
                        <h4>SIZE IN FT:<span> <?php echo $details['FT'] ?> </span></h4>
                    </div>
                    <div class="top-in" style="width: 100%;">
                        <h4>Remarks:
                            <span style="display:block;margin:0;border: 1px solid #000;height:50px;width: 80%;">  <?php echo $details['REMARKS'] ?> </span>
                        </h4>
                    </div>
                </div>
                <div class="mid_right">
                    <div class="top-in" style="width: 100%;">
                        <h4><?php echo $details['Type'] ?>
                           
                        </h4>
                    </div>
                   
                    <div class="top-in" style="width: 100%;">
                        <h4>Signature:
                            <span style="display:inline-block;height:30px;width: 50%;vertical-align: middle;"></span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="slip_end">
                <div class="top-main">
                    <p style="font-weight: 900;font-size: 17px;">* FOR WASHING MIN 10 DAYS / WEEK TIME IS REQUIRED FOR DELIVERY.</p>
                    <p style="font-weight: 900;font-size: 17px;">* RENTAL CHARGES ARE ON A DAILY BASIS.</p>
                    <p style="font-weight: 900;font-size: 17px;">* REPAIRING CARPETS DELIVERY DEPENDING ON THE NATURE OF FIXING
                        (RAFU) WORK REQUIRED.</p>
                </div>

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