<?php

defined('BASEPATH') or exit('No direct script access allowed');

include_once(__DIR__ . '/App_pdf.php');

class Receipt_pdf extends App_pdf
{
    protected $receipt;

    public function __construct($receipt, $tag = '')
    {
        $GLOBALS['receipt_pdf'] = $receipt;

        $this->load_language($receipt->invoice_data->clientid);

        parent::__construct();

        if (!class_exists('Invoices_model', false)) {
            $this->ci->load->model('invoices_model');
        }

        $this->receipt = $receipt;
        $this->tag     = $tag;

        $this->SetTitle(_l('Receipt') . ' #' . $this->receipt->VNo);
    }

    public function prepare()
    {
        $amountDue = ($this->receipt->invoice_data->status != Invoices_model::STATUS_PAID && $this->receipt->invoice_data->status != Invoices_model::STATUS_CANCELLED ? true : false);

        $this->set_view_vars([
            'receipt'   => $this->receipt,
            'amountDue' => $amountDue,
        ]);

        return $this->build();
    }

    protected function type()
    {
        return 'receipt';
    }

    protected function file_path()
    {
        $customPath = APPPATH . 'views/themes/' . active_clients_theme() . '/views/my_receiptpdf.php';
        $actualPath = APPPATH . 'views/themes/' . active_clients_theme() . '/views/receiptpdf.php';

        if (file_exists($customPath)) {
            $actualPath = $customPath;
        }

        return $actualPath;
    }
}
