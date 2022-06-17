<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Iframe extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Iframe | Administrator";
        $this->load->view('admin/iframe/v_iframe', $data);
    }
}
