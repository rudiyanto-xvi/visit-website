<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validation extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Validation | Administrator";
        $this->load->view('admin/forms/v_validation', $data);
    }
}
