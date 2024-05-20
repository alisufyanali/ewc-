<div class="modal fade z-index-none" id="HoldModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo html_entity_decode($title); ?></h4>
			</div>
			<?php echo form_open(admin_url('warehouse/insert_hold_stock'), array('id' => 'add_hold_stock', 'autocomplete'=>'off')); ?>
			<div class="modal-body">
				
				<div class="row">
					<div class="col-md-12">
						<h5 class="add_opening_stock">Hold Reason</h5>
						<input type="hidden" name="productid" value="<?php echo $itemid ?>">
					    <textarea class="form-control" name="holdreason" required=""></textarea>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default close_btn" data-dismiss="modal"><?php echo _l('close'); ?></button>
				<input type="submit" name="submit" value="submit" class="btn btn-info pull-right mright10 display-block">
		
			</div>

		</div>

		<?php echo form_close(); ?>
	</div>
</div>
</div>