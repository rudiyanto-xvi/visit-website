<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lockscreen extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Lockscreen | Administrator";
        $this->load->view('admin/examples/v_lockscreen', $data);
    }
}
