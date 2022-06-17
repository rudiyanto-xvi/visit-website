<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Register | Administrator";
        $this->load->view('admin/examples/v_register', $data);
    }
}
