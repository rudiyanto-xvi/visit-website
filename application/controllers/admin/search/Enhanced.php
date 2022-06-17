<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enhanced extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Enhanced | Administrator";
        $this->load->view('admin/search/v_enhanced', $data);
    }
}
