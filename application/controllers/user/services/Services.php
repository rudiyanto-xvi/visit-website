<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Services";
        $this->load->view('user/services/v_services', $data);
    }
}
