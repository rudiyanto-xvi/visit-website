<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Legacy_user_menu extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Legacy User Menu | Administrator";
        $this->load->view('admin/examples/v_legacy_user_menu', $data);
    }
}
