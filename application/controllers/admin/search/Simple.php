<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simple extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Simple | Administrator";
        $this->load->view('admin/search/v_simple', $data);
    }
}
