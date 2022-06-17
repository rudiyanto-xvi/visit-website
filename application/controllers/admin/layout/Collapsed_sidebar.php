<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Collapsed_sidebar extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Collapsed Sidebar | Administrator";
        $this->load->view('admin/layout/v_collapsed_sidebar', $data);
    }
}
