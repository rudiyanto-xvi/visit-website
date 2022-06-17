<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Top_nav_sidebar extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Top Nav Sidebar | Administrator";
        $this->load->view('admin/layout/v_top_nav_sidebar', $data);
    }
}
