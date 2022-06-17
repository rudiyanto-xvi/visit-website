<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fixed_sidebar extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Fixed Sidebar | Administrator";
        $this->load->view('admin/layout/v_fixed_sidebar', $data);
    }
}
