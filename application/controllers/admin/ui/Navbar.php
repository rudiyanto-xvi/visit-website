<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navbar extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Navbar | Administrator";
        $this->load->view('admin/ui/v_navbar', $data);
    }
}
