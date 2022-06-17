<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recover_password extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Recover Password | Administrator";
        $this->load->view('admin/examples/recover_password', $data);
    }
}
