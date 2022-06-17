<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blank extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Blank | Administrator";
        $this->load->view('admin/examples/v_blank', $data);
    }
}
