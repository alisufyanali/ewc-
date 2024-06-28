<style>
    td{
        padding:0.5rem;
    }
</style>

<?php

function general_led_report_prebalance_new($cmbCode,$dtpFromDate){

    $CI = &get_instance();

    $CI->db->select('sum(tblacc_account_history.Debit) as predebit , sum(tblacc_account_history.Credit) as precredit');
    $CI->db->from('tblacc_account_history');
    $CI->db->where('date < ',$dtpFromDate);
    $CI->db->where('tblacc_account_history.acc_no',$cmbCode);
    $query = $CI->db->get()->row();

    return $balance = $query->predebit - $query->precredit;
}

?>

<div id="accordion">
    <div class="card">
        <table class="tree">
            <tbody>
                <tr>
                    <td></td>
                    <td colspan="4">
                        <h3 class="text-center no-margin-top-20 no-margin-left-24">
                            <?php echo get_option('companyname'); ?></h3>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4">
                        <h4 class="text-center no-margin-top-20 no-margin-left-24"><?php echo _l('trial_balance'); ?>
                        </h4>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4">
                        <p class="text-center no-margin-top-20 no-margin-left-24">
                            <?php echo _d($data_report['from_date']) .' - '. _d($data_report['to_date']); ?> </p>
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
                                                echo '<tr bgcolor="aliceblue">';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '<td>'.$level_3["HeadCode"].' - '.$level_3["name"].'</td>';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '</tr> ';

                                                $debit_total = 0;
                                                $credit_total = 0;
                                             //  ======================================================================== 
                                                if(isset($data_report['account_level_4'])){
                                                    foreach ($data_report['account_level_4'] as $key => $level_4) {
                                                        if($level_4['PHeadCode']  == $level_3['HeadCode'] ){
                                                        
                                                            $from_date = $data_report['from_date'];
                                                            $to_date = $data_report['to_date'];
                                                           if(isset($from_date) && isset($to_date)){
                                                                $sql="SELECT SUM(tblacc_account_history.debit) AS Debit, SUM(tblacc_account_history.credit) AS Credit
                                                                FROM tblacc_account_history WHERE  acc_no = ". $level_4["HeadCode"] . ' and date >= "' .$from_date . '" and date <= "' .$to_date . '"' ;
                                                           }else{
                                                                $sql="SELECT SUM(tblacc_account_history.debit) AS Debit, SUM(tblacc_account_history.credit) AS Credit
                                                                FROM tblacc_account_history WHERE  acc_no = ". $level_4["HeadCode"];
                                                           }
                                                            
                                                            $q1=$this->db->query($sql);
                                                            $oResultTrial = $q1->row();

                                                            echo '<tr>';
                                                            echo '<td></td>';
                                                            echo '<td></td>';
                                                            echo '<td></td>';
                                                            echo '<td><a href="'.admin_url("accounting/rp_general_ledger?code=" .$level_4["HeadCode"] ).'" target="_blank" >'.$level_4["HeadCode"].' - '.$level_4["name"].'</a> </td>';

                                                            
                                                            $total       = $oResultTrial->Debit - $oResultTrial->Credit;
                                                            $acc_balance =  general_led_report_accbalance($level_4["HeadCode"]);
                                                            $pre_balance =  general_led_report_prebalance_new($level_4["HeadCode"],$from_date);
                                                            $pre_balance = $acc_balance + $pre_balance ;
                                                            
                                                            $total_balance = $total + $pre_balance ;
                                                            
                                                            if($total_balance > 0){
                                                               $debit_total += $total_balance;
                                                                echo '<td style="text-align:right">'.$total_balance.'</td>';
                                                                echo '<td style="text-align:right">0.00</td>';
                                                            }else{
                                                               $credit_total += $total_balance;
                                                                echo '<td style="text-align:right">0.00</td>';
                                                                echo '<td style="text-align:right">('.number_format(abs($total_balance),2).')</td>';
                                                            }

                                                            echo '</tr> ';
                                                        }
                                                    }
                                                }

                                                
                                                echo '<tr style="background-color:#000 ; color: #fff">';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '<td></td>';
                                                echo '<td style="text-align:right">Sub Total</td>';
                                                echo '<td style="text-align:right">'.number_format($debit_total, 2).' </td>';
                                                if($credit_total > 0){
                                                    echo '<td style="text-align:right">'.number_format($credit_total, 2).'</td>';
                                                }else{
                                                    echo '<td style="text-align:right">('.number_format(abs($credit_total), 2).')</td>';
                                                }
                                                echo '</tr> ';

                                                $total_debit += $debit_total;
                                                $total_credit += $credit_total;
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
                    <td class="parent " colspan="3" > </td>
                    <td class="parent " style="text-align:end" ><?php echo _l('total'); ?></td>
                    <td class="total_amount"><?php echo app_format_money($total_debit, $currency->name); ?> </td>
                    <td class="total_amount">
                        <?php 
                        if($credit_total > 0){
                            echo app_format_money($total_credit, $currency->name); 
                        }else{
                            echo '( '.app_format_money($total_credit, $currency->name) .' )'; 
                        } 
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>