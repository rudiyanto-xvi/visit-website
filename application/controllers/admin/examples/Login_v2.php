<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_v2 extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Login V2 | Administrator";
        $this->load->view('admin/examples/v_login_v2', $data);
    }
}
