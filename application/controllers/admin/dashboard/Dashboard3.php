<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard3 extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard 3 | Administrator";
        $this->load->view('admin/dashboard/v_dashboard3', $data);
    }
}
