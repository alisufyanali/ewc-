<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<div id="wrapper">
	<div class="content">
		<div class="row">
		    <div class="col-md-12">
		        <div class="panel_s">
		            <div class="panel-heading" style="text-align: center;font-size: 18.4px;">
		                 Add Work Center
		            </div>
		            <?php 
		            	echo form_open('https://yaaftpos.com/Industronic/admin/Misc/insert_workingcenter',array('id'=>'insert_routing','class'=>'_transaction_form insert_routing'));
		            ?>
		            <div class="panel-body">
		                <style>
		                    .o_not_full.oe_button_box {
                                position: relative;
                                display: block;
                                margin-bottom: -2;
                                margin-top: -12px;
                                margin-left: -16px;
                                margin-right: -16px;
                                text-align: right;
                            }
                            button.btn.oe_stat_button {
                                width: 20.5%;
                            }
                            button.btn.oe_stat_button {
                                color: #4c4c4c;
                                height: 44px;
                                padding: 0 6px 0 0 !important;
                                text-align: left;
                                white-space: nowrap;
                                background-color: transparent;
                                opacity: 0.8;
                                border-radius: 0px;
                                margin-bottom: 0;
                            }
                            span.o_stat_value, span.o_stat_text {
                                text-transform: none;
                                color: #f1673c;
                            }
                            span.o_stat_value {
                                display: block;
                                max-width: 100%;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                vertical-align: top;
                            }
                            span.o_stat_value {
                                font-weight: 700;
                                color: #f1673c;
                                line-height: 1.2;
                            }
                            span.o_stat_value, span.o_stat_text {
                                text-transform: none;
                                color: #f1673c;
                            }
                            span.o_stat_text {
                                line-height: 1.2;
                            }
                            
                            .o_field_widget.o_stat_info {
                                display: inline-block;
                                vertical-align: middle;
                                font-weight: 500;
                                padding-right: 6px;
                                line-height: 1.3;
                                font-size: 16px;
                            }
                            
                            .o_field_widget.o_stat_info {
    display: inline-block;
    vertical-align: middle;
    font-weight: 500;
    padding-right: 6px;
    line-height: 1.3;
    font-size: 16px;
}

                            span.o_stat_value, span.o_stat_text {
                                text-transform: none;
                                color: #f1673c;
                            }
                            
                            .hr-color {
    margin-top: 10px;
    border-bottom: 0.5px solid;
    color: #d8341b;
}
                            
                            span.o_stat_value {
                                display: block;
                                max-width: 100%;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                vertical-align: top;
                            }
                            span.o_stat_value {
                                font-weight: 700;
                                color: #f1673c;
                                line-height: 1.2;
                            }
                            
		                </style>
		                <div class="row mb-5">
							<div class="col-md-4">
								<h4 class="no-margin" style="font-size: 31px;font-weight: 700;color: #0e3f3f;">Add Work Center 
							</h4></div>
							<div class="col-md-8">

								<div class="o_not_full oe_button_box"><button type="button" name="240" class="btn oe_stat_button"><i class="fa fa-fw o_button_icon fa-pie-chart" style="font-size: 32px;vertical-align: middle;color: #dc542a;"></i><div class="o_field_widget o_stat_info"><span class="o_stat_value"><div name="oee" class="o_field_widget o_stat_info o_readonly_modifier" data-original-title="" title="">
									<span class="o_stat_value">0.00</span>
									<span class="o_stat_text"></span>
								</div>%</span><span class="o_stat_text">OEE</span></div></button><button type="button" name="241" class="btn oe_stat_button"><i class="fa fa-fw o_button_icon fa-bar-chart" style="font-size: 32px;vertical-align: middle;color: #dc542a;"></i><div class="o_field_widget o_stat_info"><span class="o_stat_value"><div name="blocked_time" class="o_field_widget o_stat_info o_readonly_modifier" data-original-title="" title="">
									<span class="o_stat_value">0.00</span>
									<span class="o_stat_text"></span>
								</div> Hours</span><span class="o_stat_text">Lost</span></div></button><button type="button" name="237" class="btn oe_stat_button" context="{'search_default_workcenter_id': id}"><i class="fa fa-fw o_button_icon fa-bar-chart" style="font-size: 32px;vertical-align: middle;color: #dc542a;"></i><div class="o_field_widget o_stat_info"><span class="o_stat_value"><div name="workcenter_load" class="o_field_widget o_stat_info o_readonly_modifier">
									<span class="o_stat_value">0.00</span>
									<span class="o_stat_text"></span>
								</div> Minutes</span><span class="o_stat_text">Load</span></div></button><button type="button" name="243" class="btn oe_stat_button" context="{'search_default_workcenter_id': id, 'search_default_thisyear': True}"><i class="fa fa-fw o_button_icon fa-bar-chart" style="font-size: 32px;vertical-align: middle;color: #dc542a;"></i><div class="o_field_widget o_stat_info"><span class="o_stat_value"><div name="performance" class="o_field_widget o_stat_info o_readonly_modifier" data-original-title="" title="">
									<span class="o_stat_value">0</span>
									<span class="o_stat_text"></span>
								</div>%</span><span class="o_stat_text">Performance</span></div></button>
							</div>
								
							</div>
						</div>
		                
		                <hr class="hr-color">
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="working_center">
		                        <label for="working_center" class="control-label"> <small class="req text-danger">* </small>Work Center Name</label>
		                        <input type="text" id="working_center" name="working_center" class="form-control" value="" aria-invalid="false">
		                    </div>
		                
		                </div>
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="working_hours">
		                        <label for="working_hours" class="control-label"> <small class="req text-danger">* </small>Working Hours</label>
		                        <input type="text" id="working_hours" name="working_hours" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="Code">
		                        <label for="Code" class="control-label"> <small class="req text-danger">* </small>Code</label>
		                        <input type="text" id="Code" name="Code" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		               <div class="clearfix"></div>
									<h5 class="h5-color">Production Information</h5>
									<hr class="hr-color">
                        
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="time_efficiency">
		                        <label for="time_efficiency" class="control-label"> <small class="req text-danger">* </small>Time Efficiency (%)</label>
		                        <input type="text" id="time_efficiency" name="time_efficiency" class="form-control" value="" aria-invalid="false">
		                    </div>
		                
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="cost_per_hour">
		                        <label for="cost_per_hour" class="control-label"> <small class="req text-danger">* </small>Cost per hour</label>
		                        <input type="text" id="cost_per_hour" name="cost_per_hour" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="capacity">
		                        <label for="capacity" class="control-label"> <small class="req text-danger">* </small>Capacity</label>
		                        <input type="text" id="capacity" name="capacity" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="oee_target">
		                        <label for="oee_target" class="control-label"> <small class="req text-danger">* </small>OEE Target (%)</label>
		                        <input type="text" id="oee_target" name="oee_target" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="time_start">
		                        <label for="time_start" class="control-label"> <small class="req text-danger">* </small>Time before prod (m)</label>
		                        <input type="text" id="time_start" name="time_start" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		                <div class="col-sm-6">
		                    <div class="form-group" app-field-wrapper="time_stop">
		                        <label for="time_stop" class="control-label"> <small class="req text-danger">* </small>Time after prod</label>
		                        <input type="text" id="time_stop" name="time_stop" class="form-control" value="" aria-invalid="false">
		                    </div>
		                </div>
		                
		                
		                <div class="col-sm-12">
		                    <div class="form-group" app-field-wrapper="description">
		                        <label for="description" class="control-label"> <small class="req text-danger">* </small>Description</label>
		                        <textarea class="mce-tinymce mce-container mce-panel form-control" name="description" style="height: 241px;"></textarea>
		                    </div>
		                </div>
		            </div>
		            <div class="panel-footer">
		                <input type="submit" value="Submit" name="submit" class="btn btn-info">
		            </div>
		            	<?php echo form_close(); ?>
		        </div>
		   
		    </div>
		</div>
    </div>
</div>

<?php init_tail(); ?>