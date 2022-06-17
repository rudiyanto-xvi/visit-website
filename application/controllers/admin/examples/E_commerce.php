<?php
defined('BASEPATH') or exit('No direct script access allowed');

class E_commerce extends CI_Controller
{
    public function index()
    {
        $data['title'] = "E-commerce | Administrator";
        $this->load->view('admin/examples/v_e-commerce', $data);
    }
}
