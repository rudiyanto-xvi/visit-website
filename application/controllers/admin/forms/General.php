<?php
defined('BASEPATH') or exit('No direct script access allowed');

class General extends CI_Controller
{
    public function index()
    {
        $data['title'] = "General | Administrator";
        $this->load->view('admin/forms/v_general', $data);
    }
}
