<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Receipt_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('invoices_model');
    }

    /**
     * Get payment by ID
     * @param  mixed $id payment id
     * @return object
     */
    public function get($id)
    {
        $this->db->select('*');
        $this->db->where( 'tblacc_account_history.id', $id);
        $payment = $this->db->get( 'tblacc_account_history')->row();
        return $payment;
    } 

    public function get_accounts($where= []){
        $this->db->where($where);
        $this->db->where('active', 1);
        $this->db->order_by('account_type_id,account_detail_type_id', 'desc');
        $accounts = $this->db->get(db_prefix() . 'acc_accounts')->result_array();
        return $accounts;
    }
}