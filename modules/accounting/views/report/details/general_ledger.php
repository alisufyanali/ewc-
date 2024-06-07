<div id="accordion">
    <div class="card">
        <table class="tree">
            <tbody>
                <tr>
                    <td colspan="7">
                        <h3 class="text-center no-margin-top-20 no-margin-left-24">
                            <?php echo get_option('companyname'); ?></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="7">
                        <h4 class="text-center no-margin-top-20 no-margin-left-24"><?php echo _l('general_ledger'); ?>
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td colspan="7">
                        <p class="text-center no-margin-top-20 no-margin-left-24">
                            <?php echo _d($data_report['from_date']) .' - '. _d($data_report['to_date']); ?></p>
                    </td>
                </tr>
              
                <tr class="tr_header">
                    <td class="text-bold"><?php echo _l('no'); ?></td>
                    <td class="text-bold"> Voucher Date</td>
                    <td class="text-bold"> Voucher No</td>
                    <td class="text-bold"><?php echo _l('description'); ?></td>
                    <td class="total_amount text-bold"><?php echo _l('debit'); ?></td>
                    <td class="total_amount text-bold"><?php echo _l('credit'); ?></td>
                    <td class="total_amount text-bold"><?php echo _l('balance'); ?></td>
                </tr> 


                <?php               

                // $data = $this->accounting_model->get_html_general_ledger($data_report['data']['accounts_receivable'], ['html' => '', 'row_index' => $row_index + 1, 'total_amount' => 0, 'total_py_amount' => 0], $parent_index, $currency);
                // $row_index = $data['row_index'];
                // echo html_entity_decode($data['html']);
                // $total += $data['total_amount'];

                if(isset($data_report['data'])){
                    $i =0;
                    foreach ($data_report['data'] as $key => $value) {
                        $i++;
                        echo '<tr>';
                        echo '<td>'.$i .'</td>';
                        echo '<td>' .$value["date"].'</td>';
                        echo '<td>' .$value["VNo"].'</td>';
                        echo '<td>' .$value["description"].'</td>';
                        echo '<td class="text-right">' .$value["debit"].'</td>';
                        echo '<td class="text-right">' .$value["credit"].'</td>';
                        echo '<td class="text-right">' .$value["description"].'</td>';
                        echo '</tr> ';
                    }
                }

                ?>

                   
            </tbody>
        </table>
    </div>
</div>