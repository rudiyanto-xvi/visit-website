<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fixed_sidebar_custom extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Fixed Sidebar Custom | Administrator";
        $this->load->view('admin/layout/v_fixed_sidebar_custom', $data);
    }
}
