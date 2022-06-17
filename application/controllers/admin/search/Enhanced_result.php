<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enhanced_result extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Enhanced Result | Administrator";
        $this->load->view('admin/search/v_enhanced-results', $data);
    }
}
