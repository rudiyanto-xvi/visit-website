<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Top_nav extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Top Nav | Administrator";
        $this->load->view('admin/layout/v_top_nav', $data);
    }
}
