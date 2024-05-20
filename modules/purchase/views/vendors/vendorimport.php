<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="panel_s">
            
          <div class="panel-body">
              <div class="_buttons">
            <a href="<?php echo site_url(); ?>assets/uploads/sample_import_file.csv" class="btn btn-primary mright5 test pull-left display-block">Download sample</a> </div>
            <div class="clearfix mtop20"></div>
                  <div class="row col-md-12"><hr/></div>
            <?php echo form_open_multipart('admin/purchase/importTst');?>
    <table>
        <tr>
            <td> Choose your file: </td>
            <td>
                <input type="file" class="form-control" name="userfile" id="userfile"  align="center"/>
            </td>
            <td>
                <div class="col-lg-offset-3 col-lg-9">
                    <button type="submit" name="submit" class="btn btn-info">Save</button>
                </div>
            </td>
        </tr>
    </table> 
<?php echo form_close();?>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php init_tail(); ?>
<script src="<?php echo base_url('assets/plugins/jquery-validation/additional-methods.min.js'); ?>"></script>
<script>
 $(function(){
   appValidateForm($('#import_form'),{file_csv:{required:true,extension: "csv"},source:'required',status:'required'});
 });
</script>
</body>
</html>
