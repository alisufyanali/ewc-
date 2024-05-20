<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div id="items-report" class="hide">
  <?php if($mysqlVersion && strpos($mysqlVersion->version,'5.6') !== FALSE && $sqlMode && strpos($sqlMode->mode,'ONLY_FULL_GROUP_BY') !== FALSE){ ?>
    <div class="alert alert-danger">
      Sales Report may not work properly because ONLY_FULL_GROUP_BY is enabled, consult with your hosting provider to disable ONLY_FULL_GROUP_BY in sql_mode configuration. In case the items report is working properly you can just ignore this message.
    </div>
  <?php } ?>
  <p class="mbot20 text-info"><?php echo _l('item_report_paid_invoices_notice'); ?></p>
  <?php if(count($invoices_sale_agents) > 0 ) { ?>
    <div class="row">
     <div class="col-md-4">
      <div class="form-group">
       <label for="sale_agent_items"><?php echo _l('sale_agent_string'); ?></label>
       <select name="sale_agent_items" class="selectpicker" multiple data-width="100%" data-none-selected-text="<?php echo _l('invoice_status_report_all'); ?>">
        <?php foreach($invoices_sale_agents as $agent){ ?>
          <option value="<?php echo $agent['sale_agent']; ?>"><?php echo get_staff_full_name($agent['sale_agent']); ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
</div>
<?php } ?>


    <h2 style="text-align: center;">EWC Interiors</h2>
    <h2 style="text-align: center;font-size: 22px;margin: 0;">Sales by Product/Service Summary</h2>

<table class="table table-items-report">
  <thead>
    <tr>
      <th>Products</th>
      <th>Feet</th>
      <th>Meters</th>
      <th>SKU Code</th>
      <th>Description</th>
      <th><?php echo _l('quantity_sold'); ?></th>
      <th>Tag Price</th>
      <th><?php echo _l('avg_price'); ?></th>
      <th>Discount</th>
      <th>Sale Amount</th>
      <th>COS</th>
      <th>GROSS Margin</th>
      <th>GROSS %</th>
      <th>Supplier Name</th>
      <th>Supplier Payment</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
  <tfoot>
    <tr>
      <td></td>
      <td class="qty"></td>
      <td class="amount"></td>
      <td></td>
    </tr>
  </tfoot>
</table>



    <h2 style="text-align: center;">EWC Interiors</h2>
    <h2 style="text-align: center;font-size: 22px;margin: 0;">SUPPLIER WISE DETAIL</h2>

<table class="table table-items-report-summary">
  <thead>
    <tr>
      <th>Supplier</th>
      <th>T MTR</th>
      <th>T FT</th>
      <th>Ranking No</th>
      <th>Tag Price</th>
      <th>Disc</th>
      <th>Sales Price</th>
      <th>Cost Price</th>
      <th>Gross Margin</th>
      <th>Gross %</th>
      <th>Payment to Supplier</th>
      <th>Purchases</th>
    </tr>
  </thead>
  <tbody>
       
  </tbody>
 <tfoot>
    <tr>
      <td></td>
      <td class="amounts"></td>
      <td class="qtys"></td>
      <td class="ranking"></td>
      <td class="rate"></td>
      <td class="discount"></td>
      <td class="rate"></td>
      <td class="purchaseprice"></td>
      <td class="grossmargin"></td>
      <td class="percentagemargin"></td>
      <td class="purchaseprice"></td>
      <td></td>
    </tr>
  </tfoot>
</table>
</div>
