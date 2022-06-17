<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fixed_topnav extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Fixed Topnav | Administrator";
        $this->load->view('admin/layout/v_fixed_topnav', $data);
    }
}
