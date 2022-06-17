<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_password_v2 extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Forgot password v2 | Administrator";
        $this->load->view('admin/examples/v_forgot_password_v2', $data);
    }
}
