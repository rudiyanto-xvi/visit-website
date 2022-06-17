<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simple_result extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Simple Result | Administrator";
        $this->load->view('admin/search/v_simple-results', $data);
    }
}
