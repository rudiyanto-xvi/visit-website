<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Data | Administrator";
        $this->load->view('admin/tables/v_data', $data);
    }
}
