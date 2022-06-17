<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Boxed extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Boxed | Administrator";
        $this->load->view('admin/layout/v_boxed', $data);
    }
}
