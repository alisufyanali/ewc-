<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>


<div id="wrapper">
	<div class="content">
		<div class="row">
		    
		    <div class="col-md-12">
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 Print Gatepass
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
            font-weight: normal;
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

        .top-in_new {
            display: inline-block;
            width: 49%;
            vertical-align: middle;
        }

        .top_sec {
            padding: 8px;
            background: #cccccc7a;
            margin-bottom: 25px;
            border: 1px solid #000;
        }
</style>
		                    
		                    
		                    <div class="slip">
            <div class="slip_top">
                <img src="https://yaaftpos.com/EWC_NEW/uploads/company/f86c57053ea4c32da3871c0ff57503b0.png" alt="">

                <div class="top-main">
                    <div class="top_sec">
                        <h2>Traveling / Transport Gate Pass</h2>

                        <div class="top-in">
                            <h4>Date: <span><?php echo date('d/m/Y') ?></span></h4>
                        </div>
                    </div>
                    <div class="top_sec">
                        <div class="top-in top-in_new" style="margin-top: 0;">
                            <h4>Client Name:<span><?php echo $details['client_name'] ?></span></h4>
                        </div>
                        <div class="top-in top-in_new" style="margin-top: 0;">
                            <h4>Phone:<span><?php echo $details['phone'] ?></span></h4>
                        </div>
                        <div class="top-in">
                            <h4>Address:<span style=" display: inline-block;width: 89%;vertical-align: top;"><?php echo $details['Address'] ?></span></h4>
                        </div>
                        <div class="top-in top-in_new">
                            <h4>Duration:<span><?php echo $details['Duration'] ?></span></h4>
                        </div>
                        <div class="top-in top-in_new">
                            <h4>Signature:
                                <span style="display:inline-block;width: 73%;"></span>
                            </h4>
                        </div>
                    </div>
                    <div class="top_sec">
                        <div class="top-in" style="margin-top: 0;">
                            <h4>Before Sending Total Pcs:<span><?php echo $details['PCsSending'] ?></span></h4>
                        </div>
                        <div class="top-in">
                            <h4>Driver:<span><?php echo $details['Driver'] ?></span></h4>
                        </div>
                        <div class="top-in">
                            <h4>Manager:<span><?php echo $details['Signature'] ?></span></h4>
                        </div>
                    </div>
                    <div class="top_sec" style="margin-bottom: 0;">
                        <div class="top-in" style="margin-top: 0;">
                            <h4>After Appointment Total pcs :<span><?php echo $details['Appointment'] ?></span></h4>
                        </div>
                        <div class="top-in">
                            <h4>Time Out:<span><?php echo $details['TimeOut'] ?></span></h4>
                        </div>
                        <div class="top-in">
                            <h4>Time In:<span><?php echo $details['Timein'] ?></span></h4>
                        </div>
                        <div class="top-in">
                            <h4>Client kept Total pcs:<span><?php echo $details['ClientKept'] ?></span></h4>
                        </div>
                        <div class="top-in">
                            <h4>Received Person:<span><?php echo $details['Received'] ?></span></h4>
                        </div>
                        <div class="top-in">
                            <h4>Driver:<span><?php echo $details['RecDriver'] ?></span></h4>
                        </div>
                    </div>
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