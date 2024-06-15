<div id="accordion">
    <div class="card">
        <table class="tree">
            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <img src="<?php echo get_option('custom_pdf_logo_image_url'); ?>" style="width:10rem" alt=""
                            srcset="">
                    </td>
                    <td></td>
                    <td>
                        <h3 class="text-center no-margin-top-20 no-margin-left-24">
                            <?php echo get_option('companyname'); ?>
                        </h3>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <h4 class="text-center no-margin-top-20 no-margin-left-24"><?php echo _l('general_ledger'); ?>
                        </h4>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="text-center no-margin-top-20 no-margin-left-24">
                        From :<?php echo  _d($data_report['to_date']); ?></p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="text-center no-margin-top-20 no-margin-left-24">
                            <strong class="" > <?php echo $data_report['HeadCode'] .' - '. $data_report['HeadName']; ?> </strong>
                        </p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="text-center no-margin-top-20 no-margin-left-24">
                        To : <?php echo _d($data_report['to_date']); ?></p>
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
                $TotalCredit=0;
                $TotalDebit=0;
                $CurBalance = 0;

                if(isset($data_report['data'])){
                    // echo '<pre>';
                    // print_r($data_report['data']);
                    echo '<tr class="tr_header">';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td class="text-right">Balance B/F </td>';
                    if($data_report["pre_balance"] < 0 ){
                        echo '<td class="text-right">('.abs($data_report["pre_balance"]).')</td>';
                    }else{
                        echo '<td class="text-right">'.$data_report["pre_balance"].'</td>';
                    }
                    echo '</tr> ';

                    $i =0;
                    
                    $CurBalance =  $data_report['pre_balance']  ; 

                    foreach ($data_report['data'] as $key => $value) {
                        $i++;
                        echo '<tr>';
                        echo '<td>'.$i .'</td>';
                        echo '<td>' .$value["date"].'</td>';

                        $url = $value["VNo"];
                        $pattern_pv = '/^PV.*/';
                        $pattern_rv = '/^RV.*/';
                        $pattern_jv = '/^JV.*/';
                        $pattern_inv = '/^INV.*/';
                        $pattern_pur = '/^PUR.*/';
                        
                        // Check if $url matches the pattern for PV
                        if (preg_match($pattern_pv, $url)) {
                            echo '<td> <a target="_blank" href="'.admin_url("accounting/new_payment_entry/". $value["rel_id"]).'" >' .$value["VNo"].' </a></td>';
                        } elseif (preg_match($pattern_rv, $url)) {
                            echo '<td> <a target="_blank" href="'.admin_url("accounting/new_received_entry/". $value["rel_id"]).'" >' .$value["VNo"].' </a></td>';
                        } elseif (preg_match($pattern_jv, $url)) {
                            echo '<td> <a target="_blank" href="'.admin_url("accounting/new_journal_entry/". $value["rel_id"]).'" >' .$value["VNo"].' </a></td>';
                        }  
                        elseif (preg_match($pattern_inv, $url)) {
                            echo '<td> <a target="_blank" href="'.admin_url("invoices/invoice/". $value["rel_id"]).'" >' .$value["VNo"].' </a></td>';
                        }  
                        elseif (preg_match($pattern_pur, $url)) {
                            echo '<td> <a target="_blank" href="'.admin_url("warehouse/manage_goods_receipt/". $value["rel_id"]).'" >' .$value["VNo"].' </a></td>';
                        }  
                        else {
                            echo '<td>' .$value["VNo"].'</td>';
                        }
                        

                        echo '<td>' .$value["description"].'</td>';
                        echo '<td class="text-right">' .number_format($value["debit"] ,2).'</td>';
                        echo '<td class="text-right">' .number_format($value["credit"] ,2).'</td>';
                       
                        $TotalDebit += $value["debit"];
                        $TotalCredit += $value["credit"];
 
                        $CurBalance += $value["debit"];
                        $CurBalance -= $value["credit"];
                        
                        if($CurBalance < 0 ){
                            echo '<td class="text-right">(' .number_format(abs($CurBalance) ,2).')</td>';
                        }else{
                            echo '<td class="text-right">' .number_format($CurBalance ,2).'</td>';
                        }
                        echo '</tr> ';
                    }
                }
                ?>
            </tbody>

            <tfoot>
                <?php
                  echo '<tr class="tr_header">';
                  echo '<td></td>';
                  echo '<td></td>';
                  echo '<td></td>';
                  echo '<td></td>';
                  echo '<td class="text-right text-bold">' .number_format($TotalDebit ,2).'</td>';
                  echo '<td class="text-right text-bold">' .number_format($TotalCredit ,2).'</td>';
                  if($CurBalance < 0){
                    echo '<td class="text-right">(' .number_format(abs($CurBalance) ,2).')</td>';
                    }else{
                        echo '<td class="text-right">' .number_format($CurBalance ,2).'</td>';
                    }
                  echo '</tr> ';
                ?>
            </tfoot>
        </table>
    </div>
</div>