<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_v2 extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Register V2 | Administrator";
        $this->load->view('admin/examples/v_register_v2', $data);
    }
}
