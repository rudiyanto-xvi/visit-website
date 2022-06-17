<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard2 extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard 2 | Administrator";
        $this->load->view('admin/dashboard/v_dashboard2', $data);
    }
}
