<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Invoice | Administrator";
        $this->load->view('admin/examples/v_invoice', $data);
    }
}
