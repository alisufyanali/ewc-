<div id="accordion">
    <div class="card">
        <table class="tree">
            <tbody>
                <tr>
                    <td colspan="4">
                        <h3 class="text-center no-margin-top-20 no-margin-left-24">
                            <?php echo get_option('companyname'); ?></h3>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <h4 class="text-center no-margin-top-20 no-margin-left-24"><?php echo _l('trial_balance'); ?>
                        </h4>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p class="text-center no-margin-top-20 no-margin-left-24">
                            <?php echo _d($data_report['from_date']) .' - '. _d($data_report['to_date']); ?> s</p>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr class="tr_header">
                    <td class="text-bold" colspan="4" ><?php echo _l('acc_account'); ?></td>
                    <td class="th_total text-bold"><?php echo _l('debit'); ?></td>
                    <td class="th_total text-bold"><?php echo _l('credit'); ?></td>
                </tr>

                <?php
                
                  $row_index = 0;
                  $parent_index = 0;
                  $total_credit = 0;
                  $total_debit = 0;
 
                //   echo '<pre>';
                //   print_r($data_report['data']);

                if(isset($data_report['account_level_1'])){
                 
                    foreach ($data_report['account_level_1'] as $key => $level_1) {
                        echo '<tr bgcolor="#a5a5a5">';
                        echo '<td>'.$level_1["HeadCode"].' - '.$level_1["name"].'</td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '</tr> ';
                    
                    
                    //  ======================================================================== 
                        
                        if(isset($data_report['account_level_2'])){
                            foreach ($data_report['account_level_2'] as $key => $level_2) {
                                if($level_2['PHeadCode']  == $level_1['HeadCode'] ){
                                    echo '<tr  bgcolor="#eee">';
                                    echo '<td></td>';
                                    echo '<td >'.$level_2["HeadCode"].' - '.$level_2["name"].'</td>';
                                    echo '<td></td>';
                                    echo '<td></td>';
                                    echo '<td></td>';
                                    echo '<td></td>';
                                    echo '</tr> ';

                              //  ======================================================================== 
                                    if(isset($data_report['account_level_3'])){
                                        foreach ($data_report['account_level_3'] as $key => $level_3) {
                                            if($level_3['PHeadCode']  == $level_2['HeadCode'] ){
                                                echo '<tr bgcolor="#eefff">';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '<td>'.$level_3["HeadCode"].' - '.$level_3["name"].'</td>';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '</tr> ';

                                             //  ======================================================================== 
                                                if(isset($data_report['account_level_4'])){
                                                    foreach ($data_report['account_level_4'] as $key => $level_4) {
                                                        if($level_4['PHeadCode']  == $level_3['HeadCode'] ){
                                                            echo '<tr>';
                                                            echo '<td></td>';
                                                            echo '<td></td>';
                                                            echo '<td></td>';
                                                            echo '<td>'.$level_4["HeadCode"].' - '.$level_4["name"].'</td>';
                                                            echo '<td></td>';
                                                            echo '<td></td>';
                                                            echo '</tr> ';
                                                        }
                                                    }
                                                }
                                             //  ======================================================================== 
                                            }
                                        }
                                    }
                                }
                             //  ======================================================================== 
                            }
                        }

                    //  ======================================================================== 

                    }
                }
              ?>

                <tr class="treegrid-total-<?php echo html_entity_decode($row_index); ?> treegrid-parent-10000 tr_total">
                    <td class="parent" colspan="3" ><?php echo _l('total'); ?></td>
                    <td class="total_amount"><?php echo app_format_money($total_debit, $currency->name); ?> </td>
                    <td class="total_amount"><?php echo app_format_money($total_credit, $currency->name); ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>