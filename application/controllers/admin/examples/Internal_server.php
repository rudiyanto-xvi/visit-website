<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Internal_server extends CI_Controller
{
    public function index()
    {
        $data['title'] = "500 | Administrator";
        $this->load->view('admin/examples/v_internal_server', $data);
    }
}
