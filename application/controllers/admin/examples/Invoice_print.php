<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_print extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Invoice Print | Administrator";
        $this->load->view('admin/examples/v_invoice_print', $data);
    }
}
