<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Timeline extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Timeline | Administrator";
        $this->load->view('admin/ui/v_timeline', $data);
    }
}
