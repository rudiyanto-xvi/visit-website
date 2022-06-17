<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recover_password_v2 extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Recover Password V2 | Administrator";
        $this->load->view('admin/examples/recover_password_v2', $data);
    }
}
