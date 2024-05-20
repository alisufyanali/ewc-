<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<style>
		.new_ses {
			margin-top: 15px;
		}
		
		.new_ses .panel_s {
			margin-bottom: 0;
		}
		
		.new_ses #tabs {
			border-radius: 4px;
			background: #fff;
			border: 0;
			padding: 0;
		}
		
		#tabs ul {
			background: none;
			border: 0;
			padding: 0;
			border-radius: 0;
		}
		
		#tabs ul li {
			border-radius: 0;
			border: 0;
			margin: 0;
			margin-right: -15px;
			background: transparent;
			z-index: 1;
		}
		
		.ui-tabs .ui-tabs-nav li.ui-tabs-active a {
			z-index: 3 !important;
			border-bottom-color: #3d3d3d !important;
			opacity: 1 !important;
		}
		
		.ui-tabs .ui-tabs-nav li.ui-tabs-active {
			z-index: 9;
		}
		
		#tabs ul li a {
			padding: 0 40px;
			height: 0;
			line-height: 30px;
			text-transform: uppercase;
			text-decoration: none;
			color: #fff;
			border-right: 30px solid transparent;
			border-bottom: 30px solid #3D3D3D;
			border-bottom-color: #777\9;
			opacity: .3;
			filter: alpha(opacity=30);
			font-weight: 500;
		}
		
		#tabs ul li a:focus {
			outline: 0;
		}
		
		.ui-tabs .ui-tabs-panel {
			overflow: hidden;
		}
		
		.chart_details {
			margin-top: 10px;
		}
		
		.det_name,
		.det_bal,
		.det_per {
			float: left;
			width: 60%;
		}
		
		.det_bal {
			width: 39%;
			text-align: right;
		}
		
		.det_per {
			width: 10%;
			text-align: center;
		}
		
		#tabs .chart_details ul li {
			overflow: hidden;
			border-bottom: 1px solid #ccc;
			padding: 8px 0px;
		}
		
		.chart_details b,
		.chart_details strong {
			font-weight: 700;
		}
		
		#tabs .chart_details ul li:first-child {
			border-top: 1px solid #ccc;
		}
		
		#tabs .chart_details ul li:last-child {
			background: #ccccccc6;
			padding: 8px 4px;
		}
		
		.small-box {
			padding: 5px 10px;
			padding-bottom: 25px;
		}
		
		.small-box p {
			margin: 0px auto;
		    font-size: 14px !important;
		}
		
		.row_cpu .col-12 .info-box {
			min-height: 60px;
		}
		
		.info-box .info-box-icon {
			width: 49px;
		}
		
.row_cpu .info-box-number {
    font-size: 14px;
    line-height: 20px;
    color: #0093ab;
    font-weight: 500;
    margin: 0px 0px;
}

.small-box {
    padding: 10px 0px;
}

        .column {
            float: left;
            width: 25%;
            padding: 2px;
            height: auto; /* Should be removed. Only for demonstration */

        }
#content h2, #content h3, #content p {
    margin: 0 0 15px 0;
}
.box .box-header.with-border {
    /*background: transparent !important;*/
}
.box .box-header.with-border h3 {
    margin-bottom: 0px !important;
    /*color: #1a1a1a;*/
}
.box .box-footer {
    padding-top: 10px !important;
}
.small-box h3, .small-box p {
    font-size: 15px !important;
    margin-left: 38px !important;
    font-weight: normal !important;
    margin-bottom: 0px !important;
}

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
}

.box-input {
    max-width: 200px
}

.box.box-danger {
    border-top-color: #dd4b39;
}

.bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
    background-color: #dd4b39 !important;
}

.box-header>.fa, .box-header>.glyphicon, .box-header>.ion, .box-header .box-title {
    font-size: 15px;
    color: #fff;
}

.box-header.with-border {
    background: #dd4b39;
}

.products-list>.item {
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    padding: 10px 0;
    background: #fff;
}

.product-list-in-box>.item {
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    border-bottom: 1px solid #f4f4f4;
}

.product-list-in-box>.item:last-child {
    border-bottom: none;
}

.product-list-in-box>.item  a {
    color: #3c8dbc;
}

.product-list-in-box>.item .text-red {
    color: #dd4b39 !important;
}

.products-list .item a i {
    margin-right: 5px;
}

.bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
    background-color: #00c0ef !important;
}

.product-list-in-box>.item {
    
}
.box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}

#content h3 {
    margin: 0 0 15px 0;
        font-size: 20px;
}

.small-box .icon>i.fa, .small-box .icon>i.fab, .small-box .icon>i.fad, .small-box .icon>i.fal, .small-box .icon>i.far, .small-box .icon>i.fas, .small-box .icon>i.ion {
    font-size: 49px;
    top: 13px;
}
		</style>
<div id="wrapper">
    <div class="screen-options-area"></div>
    <div class="screen-options-btn">
        <?php echo _l('dashboard_options'); ?>
    </div>
    <div class="content">

	<div class="row">
					<div class="col-lg-3 col-6">
						<div class="small-box bg-info">
                            <img src="https://erp60.com/themes/premium/images/arrow_down.png" height="33px" width="23px" style="margin-top: 8px;margin-left:9px;float: left;">
							<div class="inner">
								<h3>RS <?php echo current_month_recovery() ?></h3>
								<p>Current Month Recovery</p>
							</div>
							<div class="icon"> <i class="fa fa-shopping-bag"></i> </div>  </div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="small-box bg-success">
						    <img src="https://erp60.com/themes/premium/images/arrow_down.png" height="33px" width="23px" style="margin-top: 8px;margin-left:9px;float: left;">
							<div class="inner">
								<h3>RS <?php echo current_month_cashbalance() ?></h3>
								<p>Cash Balance</p>
							</div>
							<div class="icon"> <i class="fa fa-bar-chart"></i> </div>  </div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="small-box bg-warning">
						    <img src="https://erp60.com/themes/premium/images/arrow_down.png" height="33px" width="23px" style="margin-top: 8px;margin-left:9px;float: left;">
							<div class="inner">
								<h3>RS <?php echo current_month_sales() - current_month_recovery()  ?></h3>
								<p>Total Receivable</p>
							</div>
							<div class="icon"> <i class="fa fa-users"></i> </div>  </div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="small-box bg-danger">
						    <img src="https://erp60.com/themes/premium/images/arrow_down.png" height="33px" width="23px" style="margin-top: 8px;margin-left:9px;float: left;">
							<div class="inner">
								<h3>RS <?php echo current_month_purchaseorder() ?></h3>
								<p>Total Purchase</p>
							</div>
							<div class="icon"> <i class="fa fa-home"></i> </div>  </div>
					</div>
				</div>
				<div class="row row_cpu">
					<div class="col-12 col-sm-6 col-md-2">
						<div class="info-box"> <span class="info-box-icon bg-info elevation-1"><i class="fa fa-line-chart"></i></span>
							<div class="info-box-content"> <span class="info-box-text">Today's Sale</span> <span class="info-box-number">RS <?php echo get_total_sales() ?><small></small></span> </div>
						</div>
					</div>
					
					<div class="col-12 col-sm-6 col-md-2">
						<div class="info-box mb-3"> <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-refresh"></i></span>
							<div class="info-box-content"> <span class="info-box-text">Today's Recovery</span> <span class="info-box-number">RS <?php echo get_total_recovery() ?></span> </div>
						</div>
					</div>
					
					<div class="col-12 col-sm-6 col-md-2">
						<div class="info-box mb-3"> <span class="info-box-icon bg-success elevation-1"><i class="fa fa-bar-chart"></i></span>
							<div class="info-box-content"> <span class="info-box-text">Today's Sale Order</span> <span class="info-box-number">RS <?php echo get_total_salesorder() ?></span> </div>
						</div>
					</div>
					
					<div class="col-12 col-sm-6 col-md-2">
						<div class="info-box mb-3"> <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-shopping-cart"></i></span>
							<div class="info-box-content"> <span class="info-box-text">Today's PO</span> <span class="info-box-number">RS <?php echo get_total_purchaseorder() ?></span> </div>
						</div>
					</div>
					
					<div class="col-12 col-sm-6 col-md-2">
						<div class="info-box mb-3"> <span class="info-box-icon bg-success elevation-1"><i class="fa fa-calculator" ></i></span>
							<div class="info-box-content"> <span class="info-box-text">Vendor Payment's</span> <span class="info-box-number">RS <?php echo get_total_vendorpayments() ?></span> </div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-2">
						<div class="info-box mb-3"> <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-exchange"></i></span>
							<div class="info-box-content"> <span class="info-box-text">Sale's Return</span> <span class="info-box-number">RS <?php echo get_total_salesreturn() ?></span> </div>
						</div>
					</div>
				</div>
				<div class="row">
               <div class="">
                  <div class="col-lg-3">
                     <div class="box box-danger">
                        <div class="box-header with-border bg-red">
                           <h3 class="box-title">Sales Alerts</h3>
                        </div>
                        <div class="box-body">
                           <ul class="products-list product-list-in-box">
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/proposals" target="_blank"><i class="icon fa fa-warning"> </i> <span style="font-size: 12px;color: #000000">SO's waiting approval</span><span class="pull-right text-red">0</span></a> 
                              </li>
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/warehouse/manage_delivery" target="_blank"><i class="icon fa fa-truck"> </i> <span style="font-size: 12px;color: #000000"> Pending Sales Deliveries</span><span class="pull-right text-red">0</span></a> 
                              </li>
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/warehouse/manage_delivery" target="_blank"><i class="icon fa fa-clone"> </i> <span style="font-size: 12px;color: #000000">Not Invoiced Deliveries </span><span class="pull-right text-red">0</span></a> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="box box-danger">
                        <div class="box-header with-border bg-red">
                           <h3 class="box-title">Purchase Alerts</h3>
                        </div>
                        <div class="box-body">
                           <ul class="products-list product-list-in-box">
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/purchase/purchase_order" target="_blank"><i class="icon fa fa-hourglass-3"> </i> <span style="font-size: 12px;color: #000000">PO's waiting approval</span><span class="pull-right text-red">0</span></a> 
                              </li>
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/warehouse/manage_purchase" target="_blank"><i class="icon fa fa-truck"> </i> <span style="font-size: 12px;color: #000000">Outstanding GRNs</span><span class="pull-right text-red">0</span></a> 
                              </li>
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/purchase/purchase_order" target="_blank"><i class="icon fa fa-user"> </i> <span style="font-size: 12px;color: #000000">Pending Supplier Bills </span><span class="pull-right text-red">0</span></a> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="box box-danger">
                        <div class="box-header with-border bg-red">
                           <h3 class="box-title">General Ledger Alerts</h3>
                        </div>
                        <div class="box-body">
                           <ul class="products-list product-list-in-box">
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/accounting/transaction?group=sales" target="_blank"><i class="icon fa fa-copy"> </i> <span style="font-size: 12px;color: #000000">Vouchers waiting approval (Sales) </span><span class="pull-right text-red"></span></a> 
                              </li>
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/accounting/transaction?group=expenses" target="_blank"><i class="icon fa fa-copy"> </i> <span style="font-size: 12px;color: #000000">Vouchers waiting approval (Expense) </span><span class="pull-right text-red"></span></a> 
                              </li>
                              
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/accounting/transaction?group=banking" target="_blank"><i class="icon fa fa-copy"> </i> <span style="font-size: 12px;color: #000000">Vouchers waiting approval (Banking) </span><span class="pull-right text-red"></span></a> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="box box-primary ">
                        <div class="box-header with-border bg-aqua">
                           <h3 class="box-title"> KPI's</h3>
                        </div>
                        <div class="box-body">
                           <ul class="products-list product-list-in-box">
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/purchase/purchase_order" ><span style="font-size: 12px;color: #000000">Purchase And Payment</span></a> 
                              </li>
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/lead_manager"><span style="font-size: 12px;color: #000000">Sales Funnel (Lead's)</span></a> 
                              </li>
                              <li class="item">
                                 <a href="https://yaaftpos.com/EWC_NEW/admin/invoices"><span style="font-size: 12px;color: #000000">Sales and Recovery</span></a> 
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
				
				<div class="row">
               
               <div class="col-md-12 new_ses" id="content">
								<div id="tabs">
									<ul>
										<li><a href="#tabs-1">Balances</a></li>
										<li><a href="#tabs-2">Sales</a></li>
										<li><a href="#tabs-3">Profitability</a></li>
										<li><a href="#tabs-4">Cost Center</a></li>
										<!--<li><a href="#tabs-5">Budget</a></li>-->
									</ul>
									<div id="tabs-1">
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Customer Balance</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
													</li>
													<?php
													
													$customerListBalance = customerListBalance();
													$totalbalance = 0;
													foreach($customerListBalance as $customers){
													    
													    $totalbalance = $totalbalance + $customers['balance'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['company'].'</div>
														    <div class="det_bal">'.$customers['balance'].'</div>
														    
													    </li>';
													}
													
													?>
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance; ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Supplier Payable</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
													</li>
													
													<?php
													
													$SupplierListPayables = SupplierListPayables();
													$totalbalance = 0;
													foreach($SupplierListPayables as $customers){
													    
													    $totalbalance = $totalbalance + $customers['balance'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['company'].'</div>
														    <div class="det_bal">'.$customers['balance'].'</div>
														    
													    </li>';
													}
													
													?>
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance; ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top Ten Customers</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>No Of Orders</strong></div>
													</li>
													<?php
													
													$totalbalance = 0;
													foreach($customerListBalance as $customers){
													    
													    $totalbalance = $totalbalance + $customers['totalorders'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['company'].'</div>
														    <div class="det_bal">'.$customers['totalorders'].'</div>
														    
													    </li>';
													}
													
													?>
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance; ?></div>
													</li>
												
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Bank Balances</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
													</li>
												    <?php
													
													$getTotalAccountBalances = getTotalAccountBalances();
													$totalbalance = 0;
													foreach($getTotalAccountBalances as $customers){
													    
													    $totalbalance = $totalbalance + $customers['TotalDebit'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['name'].'</div>
														    <div class="det_bal">'.$customers['TotalDebit'].'</div>
														    
													    </li>';
													}
													
													?>
													
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance ?></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="tabs-2">
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top ten Unpaid Invoices </h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart5" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
													</li>
													
													 <?php
													
													$toptenunpaidinvoices = toptenunpaidinvoices();
													$totalbalance = 0;
													foreach($toptenunpaidinvoices as $customers){
													    
													    $totalbalance = $totalbalance + $customers['totalunpaid'];
													    
													    echo '<li>
														    <div class="det_name">INV-'.$customers['number'].'</div>
														    <div class="det_bal">'.$customers['totalunpaid'].'</div>
														    
													    </li>';
													}
													
													?>
													
													
													
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top Ten Sales Person By Sale</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart6" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
													</li>
													
													 <?php
													
													$toptensalesagentinvoices = toptensalesagentinvoices();
													$totalbalance = 0;
													foreach($toptensalesagentinvoices as $customers){
													    
													    $totalbalance = $totalbalance + $customers['total'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['firstname'].' '.$customers['lastname'].'</div>
														    <div class="det_bal">'.$customers['total'].'</div>
														    
													    </li>';
													}
													
													?>
												
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top Ten Sales Person By Count</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart7" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Count</strong></div>
													</li>
													
													
														 <?php
													
													$toptensalesagentcount = toptensalesagentcount();
													$totalbalance = 0;
													foreach($toptensalesagentcount as $customers){
													    
													    $totalbalance = $totalbalance + $customers['total'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['firstname'].' '.$customers['lastname'].'</div>
														    <div class="det_bal">'.$customers['total'].'</div>
														    
													    </li>';
													}
													
													?>
												
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top Ten Paid Invoices</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart8" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
													</li>
													 <?php
													
													$toptenpaidinvoices = toptenpaidinvoices();
													$totalbalance = 0;
													foreach($toptenpaidinvoices as $customers){
													    
													    $totalbalance = $totalbalance + $customers['totalunpaid'];
													    
													    echo '<li>
														    <div class="det_name">INV-'.$customers['number'].'</div>
														    <div class="det_bal">'.$customers['totalunpaid'].'</div>
														    
													    </li>';
													}
													
													?>
													<li>
														<div class="det_name">Total</div>
															<div class="det_bal"><?php echo $totalbalance ?></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="tabs-3">
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top Ten Customers</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart9" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
													</li>
													<?php
													
													$totalbalance = 0;
													foreach($customerListBalance as $customers){
													    
													    $totalbalance = $totalbalance + $customers['totalorders'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['company'].'</div>
														    <div class="det_bal">'.$customers['totalorders'].'</div>
														    
													    </li>';
													}
													
													?>
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance; ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top Ten Vendors</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart10" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
													</li>
													<?php
													
													$totalbalance = 0;
													foreach($SupplierListPayables as $customers){
													    
													    $totalbalance = $totalbalance + $customers['totalorders'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['company'].'</div>
														    <div class="det_bal">'.$customers['totalorders'].'</div>
														    
													    </li>';
													}
													
													?>
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance; ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top Ten Items Profitable</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart11" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Count</strong></div>
													</li>
													<?php
													
													$totalbalance = 0;
													$itemsListBalance = str_replace("'", "" , itemsListBalance());
											
													foreach($itemsListBalance as $customers){
													    
													    $totalbalance = $totalbalance + $customers['totalquantities'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['description'].'</div>
														    <div class="det_bal">'.$customers['totalquantities'].'</div>
														    
													    </li>';
													}
													
													?>
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance; ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3" style="display: none !important">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Donut Chart</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart12" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
												<!-- /.card-body -->
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Balance</strong></div>
														<div class="det_per"><strong>%</strong></div>
													</li>
													<li>
														<div class="det_name">Name</div>
														<div class="det_bal">Balance</div>
														<div class="det_per">%</div>
													</li>
													<li>
														<div class="det_name">Name</div>
														<div class="det_bal">Balance</div>
														<div class="det_per">%</div>
													</li>
													<li>
														<div class="det_name">Name</div>
														<div class="det_bal">Balance</div>
														<div class="det_per">%</div>
													</li>
													<li>
														<div class="det_name">Name</div>
														<div class="det_bal">Balance</div>
														<div class="det_per">%</div>
													</li>
													<li>
														<div class="det_name">Name</div>
														<div class="det_bal">Balance</div>
														<div class="det_per">%</div>
													</li>
													<li>
														<div class="det_name">Name</div>
														<div class="det_bal">Balance</div>
														<div class="det_per">%</div>
													</li>
													<li>
														<div class="det_name">Name</div>
														<div class="det_bal">Balance</div>
														<div class="det_per">%</div>
													</li>
													<li>
														<div class="det_name">Name</div>
														<div class="det_bal">Balance</div>
														<div class="det_per">%</div>
													</li>
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal">456789321</div>
														<div class="det_per">Rs</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div id="tabs-4">
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top 10 Cost Centres</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart13" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
											</div>
											<div class="chart_details">
												<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Count</strong></div>
													</li>
													 <?php
													
													$toptensalesagentcount = toptensalesagentcount();
													$totalbalance = 0;
													foreach($toptensalesagentcount as $customers){
													    
													    $totalbalance = $totalbalance + $customers['total'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['firstname'].' '.$customers['lastname'].'</div>
														    <div class="det_bal">'.$customers['total'].'</div>
														    
													    </li>';
													}
													
													?>
												
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance; ?></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card card-danger">
												<div class="card-header">
													<h3 class="card-title">Top 10 Sold Items</h3>
													<div class="card-tools" style="display:none">
														<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>
														<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>
													</div>
												</div>
												<div class="card-body">
													<canvas id="donutChart14" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
											</div>
											<div class="chart_details">
													<ul>
													<li>
														<div class="det_name"><strong>Name</strong></div>
														<div class="det_bal"><strong>Count</strong></div>
													</li>
													<?php
													
													$totalbalance = 0;
													$itemsListBalance = str_replace("'", "" , itemsListBalance());
											
													foreach($itemsListBalance as $customers){
													    
													    $totalbalance = $totalbalance + $customers['totalquantities'];
													    
													    echo '<li>
														    <div class="det_name">'.$customers['description'].'</div>
														    <div class="det_bal">'.$customers['totalquantities'].'</div>
														    
													    </li>';
													}
													
													?>
													<li>
														<div class="det_name">Total</div>
														<div class="det_bal"><?php echo $totalbalance; ?></div>
													</li>
												</ul>
											</div>
										</div>
										<!--<div class="col-md-3">-->
										<!--	<div class="card card-danger">-->
										<!--		<div class="card-header">-->
										<!--			<h3 class="card-title">Donut Chart</h3>-->
										<!--			<div class="card-tools" style="display:none">-->
										<!--				<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>-->
										<!--				<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>-->
										<!--			</div>-->
										<!--		</div>-->
										<!--		<div class="card-body">-->
										<!--			<canvas id="donutChart15" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>-->
										<!--		</div>-->
										<!--		 /.card-body -->
										<!--	</div>-->
										<!--	<div class="chart_details">-->
										<!--		<ul>-->
										<!--			<li>-->
										<!--				<div class="det_name"><strong>Name</strong></div>-->
										<!--				<div class="det_bal"><strong>Balance</strong></div>-->
										<!--				<div class="det_per"><strong>%</strong></div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Total</div>-->
										<!--				<div class="det_bal">456789321</div>-->
										<!--				<div class="det_per">Rs</div>-->
										<!--			</li>-->
										<!--		</ul>-->
										<!--	</div>-->
										<!--</div>-->
										<!--<div class="col-md-3">-->
										<!--	<div class="card card-danger">-->
										<!--		<div class="card-header">-->
										<!--			<h3 class="card-title">Donut Chart</h3>-->
										<!--			<div class="card-tools" style="display:none">-->
										<!--				<button type="button" class="btn btn-tool" data-card-widget="collapse"> <i class="fas fa-minus"></i> </button>-->
										<!--				<button type="button" class="btn btn-tool" data-card-widget="remove"> <i class="fas fa-times"></i> </button>-->
										<!--			</div>-->
										<!--		</div>-->
										<!--		<div class="card-body">-->
										<!--			<canvas id="donutChart16" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>-->
										<!--		</div>-->
										<!--		 /.card-body -->
										<!--	</div>-->
										<!--	<div class="chart_details">-->
										<!--		<ul>-->
										<!--			<li>-->
										<!--				<div class="det_name"><strong>Name</strong></div>-->
										<!--				<div class="det_bal"><strong>Balance</strong></div>-->
										<!--				<div class="det_per"><strong>%</strong></div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Name</div>-->
										<!--				<div class="det_bal">Balance</div>-->
										<!--				<div class="det_per">%</div>-->
										<!--			</li>-->
										<!--			<li>-->
										<!--				<div class="det_name">Total</div>-->
										<!--				<div class="det_bal">456789321</div>-->
										<!--				<div class="det_per">Rs</div>-->
										<!--			</li>-->
										<!--		</ul>-->
										<!--	</div>-->
										<!--</div>-->
									</div>
									<div id="tabs-5">
									










<!--<div class="col-md-6  col-sm-12 col-xs-12"><div class="box box-success"> -->
<!--                <div class="box-header with-border">-->
<!--                  <h3 class="box-title">Fiscal Year wise Budget</h3>-->
                  <!--<div class="box-tools pull-right">-->
                  <!--  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                   
                  <!--</div>-->
<!--                </div><!-- /.box-header -->
                
              
<!--                <div class="box-footer no-padding">-->
<!--                  <ul class="nav nav-pills nav-stacked">-->
<!--<div class="row" style="margin-left: 20px; font-weight: bold;">-->
<!--    <div class="column">-->
<!--        <p>COST CENTRE</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--        <p>ACTUAL</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--        <p>BUDGET</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--        <p>VARIANCE</p>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row" style="margin-left: 20px;">-->
<!--    <div class="column">-->
<!--        <p>Women Rights</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--        <p>0</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--        <p>2,222</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--       <p>2,222</p>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row" style="margin-left: 20px; font-weight: bold;">-->
<!--    <div class="column">-->
<!--        <p>TOTAL</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--        <p>0</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--        <p>2,222</p>-->
<!--    </div>-->
<!--    <div class="column">-->
<!--       <p>2,222</p>-->
<!--    </div>-->
<!--</div> </ul>-->
<!--                </div><!-- /.footer -->
<!--              </div><!-- /.box --></div>



























									</div>
								</div>
							</div>
            
            
        <div class="row">

            <?php $this->load->view('admin/includes/alerts'); ?>

            <?php hooks()->do_action( 'before_start_render_dashboard_content' ); ?>

            <div class="clearfix"></div>
            <div class="col-md-12 mtop10" data-container="top-12">
                <?php render_dashboard_widgets('top-12'); ?>
            </div>
            <?php hooks()->do_action('after_dashboard_top_container'); ?>
            <div class="col-md-6" data-container="middle-left-6">
                <?php render_dashboard_widgets('middle-left-6'); ?>
            </div>
            <div class="col-md-6" data-container="middle-right-6">
                <?php render_dashboard_widgets('middle-right-6'); ?>
            </div>


            <?php hooks()->do_action('after_dashboard_half_container'); ?>
            <div class="col-md-8" data-container="left-8">
                <div class="panel_s">
                    <div class="panel-body">
                        <h2 class="pan-title">Shortcuts</h2>
                        <div class="short_in">
                            <a href="https://yaaftpos.com/EWC_NEW/admin/clients">
                                <img src="https://yaaftpos.com/EWC_NEW/assets/images/add-user.png" alt="" />
                                <h3>Add Customer</h3>
                            </a>
                        </div>
                        <div class="short_in">
                            <a href="https://yaaftpos.com/EWC_NEW/admin/estimates">
                                <img src="https://yaaftpos.com/EWC_NEW/assets/images/income.png" alt="" />
                                <h3>Add Estimate</h3>
                            </a>
                        </div>
                        <div class="short_in">
                            <a href="https://yaaftpos.com/EWC_NEW/admin/invoices">
                                <img src="https://yaaftpos.com/EWC_NEW/assets/images/invoice.png" alt="" />
                                <h3>Add Invoice</h3>
                            </a>
                        </div>
                        <div class="short_in">
                            <a href="https://yaaftpos.com/EWC_NEW/admin/payments">
                                <img src="https://yaaftpos.com/EWC_NEW/assets/images/hand.png" alt="" />
                                <h3>Receive Payment</h3>
                            </a>
                        </div>
                        <div class="short_in">
                            <a href="https://yaaftpos.com/EWC_NEW/admin/invoices/invoice">
                                <img src="https://yaaftpos.com/EWC_NEW/assets/images/email.png" alt="" />
                                <h3>Add Bill</h3>
                            </a>
                        </div>
                        <div class="short_in">
                            <a href="https://yaaftpos.com/EWC_NEW/admin/invoices#37">
                                <img src="https://yaaftpos.com/EWC_NEW/assets/images/bill.png" alt="" />
                                <h3>Pay Bill</h3>
                            </a>
                        </div>
                        <div class="short_in">
                            <a href="https://yaaftpos.com/EWC_NEW/admin/timesheets/timekeeping">
                                <img src="https://yaaftpos.com/EWC_NEW/assets/images/back-in-time.png" alt="" />
                                <h3>Track Time</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-container="right-4">
                <div class="panel_s">
                    <div class="panel-body">
                        <h2 class="pan-title">Bank Accounts</h2>
                        <div class="bank_list">
                            <ul class="banks_list">
                                <li>
                                    <h6>Cash and Cash</h6>
                                    <p class="left_sec">In Quick Books</p>
                                    <p class="left_sec right-text">PRs0</p>
                                </li>
                                <li>
                                    <h6>Cash and Cash</h6>
                                    <p class="left_sec">In Quick Books</p>
                                    <p class="left_sec right-text">PRs0</p>
                                </li>
                                <li>
                                    <h6>Cash and Cash</h6>
                                    <p class="left_sec">In Quick Books</p>
                                    <p class="left_sec right-text">PRs0</p>
                                </li>
                                <li>
                                    <h6>Cash and Cash</h6>
                                    <p class="left_sec">In Quick Books</p>
                                    <p class="left_sec right-text">PRs0</p>
                                </li>
                                <li>
                                    <h6>Cash and Cash</h6>
                                    <p class="left_sec">In Quick Books</p>
                                    <p class="left_sec right-text">PRs0</p>
                                </li>
                                <li>
                                    <h6>Cash and Cash</h6>
                                    <p class="left_sec">In Quick Books</p>
                                    <p class="left_sec right-text">PRs0</p>
                                </li>
                                <li>
                                    <h6>Cash and Cash</h6>
                                    <p class="left_sec">In Quick Books</p>
                                    <p class="left_sec right-text">PRs0</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8" data-container="left-8">
                <?php render_dashboard_widgets('left-8'); ?>
            </div>
            <div class="col-md-4" data-container="right-4">
                <?php render_dashboard_widgets('right-4'); ?>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4" data-container="bottom-left-4">
                <?php render_dashboard_widgets('bottom-left-4'); ?>
            </div>
            <div class="col-md-4" data-container="bottom-middle-4">
                <?php render_dashboard_widgets('bottom-middle-4'); ?>
            </div>
            <div class="col-md-4" data-container="bottom-right-4">
                <?php render_dashboard_widgets('bottom-right-4'); ?>
            </div>

            <?php hooks()->do_action('after_dashboard'); ?>
        </div>
        
    </div>
</div>
<script>
    app.calendarIDs = '<?php echo json_encode($google_ids_calendars); ?>';
</script>
<?php init_tail(); ?>
<?php $this->load->view('admin/utilities/calendar_template'); ?>
<?php $this->load->view('admin/dashboard/dashboard_js'); ?>
<script>
    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Digital Goods',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [28, 48, 40, 19, 86, 27, 90]
            }, {
                label: 'Electronics',
                backgroundColor: 'rgba(210, 214, 222, 1)',
                borderColor: 'rgba(210, 214, 222, 1)',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [65, 59, 80, 81, 56, 55, 40]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, areaChartOptions)
        var lineChartData = $.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var donutOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = $.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>
<script>
					/** AREA CHART **/
	var ctx9 = document.getElementById('chartArea1');
	var gradient1 = ctx3.createLinearGradient(0, 350, 0, 0);
	gradient1.addColorStop(0, 'rgba(247, 85, 122,0)');
	gradient1.addColorStop(1, 'rgba(247, 85, 122,.5)');
	var gradient2 = ctx3.createLinearGradient(0, 280, 0, 0);
	gradient2.addColorStop(0, 'rgba(0,123,255,0)');
	gradient2.addColorStop(1, 'rgba(0,123,255,.3)');
	new Chart(ctx9, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			datasets: [{
				data: [12, 15, 18, 40, 35, 38, 32, 20, 25, 15, 25, 30],
				borderColor: '#f7557a',
				borderWidth: 1,
				backgroundColor: gradient1
			}, {
				data: [10, 20, 25, 55, 50, 45, 35, 37, 45, 35, 55, 40],
				borderColor: '#007bff',
				borderWidth: 1,
				backgroundColor: gradient2
			}]
		},
		options: {
			maintainAspectRatio: false,
			legend: {
				display: false,
				labels: {
					display: false
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontSize: 10,
						max: 80,
						fontColor: "rgb(171, 167, 167,0.9)",
					},
					gridLines: {
						display: true,
						color: 'rgba(171, 167, 167,0.2)',
						drawBorder: false
					},
				}],
				xAxes: [{
					ticks: {
						beginAtZero: true,
						fontSize: 11,
						fontColor: "rgb(171, 167, 167,0.9)",
					},
					gridLines: {
						display: true,
						color: 'rgba(171, 167, 167,0.2)',
						drawBorder: false
					},
				}]
			}
		}
	});
					</script>
					<script>
					$(function() {
						$("#tabs").tabs();
					});
					
						$(function() {
						var donutChartCanvas = $('#donutChart1').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($customerListBalance as $customers){ echo "'".$customers['company']."',";} ?>],
							datasets: [{
								data: [<?php foreach($customerListBalance as $customers){ echo "'".$customers['balance']."',";} ?>],
								backgroundColor: ['#06b711', '#06a8b7', '#061fb7', '#b70683', '#b70606', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
					})
					
					$(function() {
						var donutChartCanvas = $('#donutChart2').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($SupplierListPayables as $customers){ echo '"'.$customers['company'].'",';} ?>],
							datasets: [{
								data: [<?php foreach($SupplierListPayables as $customers){ echo "'".$customers['balance']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart3').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($customerListBalance as $customers){ echo "'".$customers['company']."',";} ?>],
							datasets: [{
								data: [<?php foreach($customerListBalance as $customers){ echo "'".$customers['totalorders']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart4').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($getTotalAccountBalances as $customers){ echo "'".$customers['name']."',";} ?> ],
							datasets: [{
								data: [<?php foreach($getTotalAccountBalances as $customers){ echo "'".$customers['TotalDebit']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below. 
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart5').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($toptenunpaidinvoices as $customers){ echo "'INV-".$customers['number']."',";} ?> ],
							datasets: [{
								data: [<?php foreach($toptenunpaidinvoices as $customers){ echo "'".$customers['totalunpaid']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below. 
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart6').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($toptensalesagentinvoices as $customers){ echo "'".$customers['firstname']." ".$customers['lastname']."',";} ?> ],
							datasets: [{
								data: [<?php foreach($toptensalesagentinvoices as $customers){ echo "'".$customers['total']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below. toptensalesagentcount
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart7').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($toptensalesagentcount as $customers){ echo "'".$customers['firstname']." ".$customers['lastname']."',";} ?>],
							datasets: [{
								data: [<?php foreach($toptensalesagentcount as $customers){ echo "'".$customers['total']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart8').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($toptenpaidinvoices as $customers){ echo "'INV-".$customers['number']."',";} ?>],
							datasets: [{
								data: [<?php foreach($toptenpaidinvoices as $customers){ echo "'".$customers['totalunpaid']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart9').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($customerListBalance as $customers){ echo "'".$customers['company']."',";} ?>],
							datasets: [{
								data: [<?php foreach($customerListBalance as $customers){ echo "'".$customers['totalorders']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart10').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($SupplierListPayables as $customers){ echo "'".$customers['company']."',";} ?>],
							datasets: [{
								data: [<?php foreach($SupplierListPayables as $customers){ echo "'".$customers['totalorders']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below. $itemsListBalance
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart11').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($itemsListBalance as $customers){ echo "'".$customers['description']."',";} ?>],
							datasets: [{
								data: [<?php foreach($itemsListBalance as $customers){ echo "'".$customers['totalquantities']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart12').get(0).getContext('2d')
						var donutData = {
							labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator', ],
							datasets: [{
								data: [700, 500, 400, 600, 300, 100],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart13').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($toptensalesagentcount as $customers){ echo "'".$customers['firstname']." ".$customers['lastname']."',";} ?>],
							datasets: [{
								data: [<?php foreach($toptensalesagentcount as $customers){ echo "'".$customers['total']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart14').get(0).getContext('2d')
						var donutData = {
							labels: [<?php foreach($itemsListBalance as $customers){ echo "'".$customers['description']."',";} ?>],
							datasets: [{
								data: [<?php foreach($itemsListBalance as $customers){ echo "'".$customers['totalquantities']."',";} ?>],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart15').get(0).getContext('2d')
						var donutData = {
							labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator', ],
							datasets: [{
								data: [700, 500, 400, 600, 300, 100],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart16').get(0).getContext('2d')
						var donutData = {
							labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator', ],
							datasets: [{
								data: [700, 500, 400, 600, 300, 100],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart17').get(0).getContext('2d')
						var donutData = {
							labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator', ],
							datasets: [{
								data: [700, 500, 400, 600, 300, 100],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart18').get(0).getContext('2d')
						var donutData = {
							labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator', ],
							datasets: [{
								data: [700, 500, 400, 600, 300, 100],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart19').get(0).getContext('2d')
						var donutData = {
							labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator', ],
							datasets: [{
								data: [700, 500, 400, 600, 300, 100],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
						var donutChartCanvas = $('#donutChart20').get(0).getContext('2d')
						var donutData = {
							labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator', ],
							datasets: [{
								data: [700, 500, 400, 600, 300, 100],
								backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
							}]
						}
						var donutOptions = {
								maintainAspectRatio: false,
								responsive: true,
								legend: {
									display: false
								}
							}
							//Create pie or douhnut chart
							// You can switch between pie and douhnut using the method below.
						new Chart(donutChartCanvas, {
							type: 'doughnut',
							data: donutData,
							options: donutOptions
						})
					})
					</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
    $('.all1').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
        slideBy: 1,
        dots:false,
        mousewheel: false,
        responsiveClass: true,
        // responsive: {
        //     0: {
        //         items: 1,
        //         nav: true
        //     },
        //     200: {
        //         items: 1,
        //         nav: false

        //     },
        //     300: {
        //         items: 1,
        //         nav: false

        //     },
        //     400: {
        //         items: 2,
        //         nav: false,
        //         dots: false,

        //     },
        //     700: {
        //         items: 4,
        //         nav: false
        //     },
        //     900: {
        //         items: 4,
        //         nav: false

        //     },
        //     1000: {
        //         items: 4,
        //     }
        // }

    });

});

// $(".col1_btn_left").click(function() {
//     var owl = $(".all1");
//     owl.trigger('next.owl.carousel');
// });
// $(".col1_btn_right").click(function() {
//     var owl = $(".all1");
//     owl.trigger('prev.owl.carousel');
// });
</script>
</body>

</html>