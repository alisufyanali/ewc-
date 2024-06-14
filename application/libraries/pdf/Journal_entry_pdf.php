<?php

defined('BASEPATH') or exit('No direct script access allowed');

include_once(__DIR__ . '/App_pdf.php');

class Journal_entry_pdf extends App_pdf
{
    protected $journal_entry;

    public function __construct($journal_entry, $tag = '')
    {
        $GLOBALS['journal_entry_pdf'] = $journal_entry;

        $this->load_language($journal_entry->invoice_data->clientid);

        parent::__construct();

        if (!class_exists('Invoices_model', false)) {
            $this->ci->load->model('invoices_model');
        }

        $this->journal_entry = $journal_entry;
        $this->tag     = $tag;

        $this->SetTitle(_l('journal_entry') . ' #' . $this->journal_entry->VNo);
    }

    public function prepare()
    {
        $amountDue = ($this->journal_entry->invoice_data->status != Invoices_model::STATUS_PAID && $this->journal_entry->invoice_data->status != Invoices_model::STATUS_CANCELLED ? true : false);

        $this->set_view_vars([
            'journal_entry'   => $this->journal_entry,
            'amountDue' => $amountDue,
        ]);

        return $this->build();
    }

    protected function type()
    {
        return 'journal_entry';
    }

    protected function file_path()
    {
        $customPath = APPPATH . 'views/themes/' . active_clients_theme() . '/views/my_journal_entrypdf.php';
        $actualPath = APPPATH . 'views/themes/' . active_clients_theme() . '/views/journal_entrypdf.php';

        if (file_exists($customPath)) {
            $actualPath = $customPath;
        }

        return $actualPath;
    }
}
