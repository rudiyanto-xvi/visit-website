<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jsgrid extends CI_Controller
{
    public function index()
    {
        $data['title'] = "JSGrid | Administrator";
        $this->load->view('admin/tables/v_jsgrid', $data);
    }
}
