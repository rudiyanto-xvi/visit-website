<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Advanced extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Advanced | Administrator";
        $this->load->view('admin/forms/v_advanced', $data);
    }
}
