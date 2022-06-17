<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_password extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Forgot password | Administrator";
        $this->load->view('admin/examples/v_forgot_password', $data);
    }
}
