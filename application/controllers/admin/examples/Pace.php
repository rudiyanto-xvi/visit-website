<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pace extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Pace | Administrator";
        $this->load->view('admin/examples/v_pace', $data);
    }
}
