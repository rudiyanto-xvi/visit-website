<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Projects extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Projects | Administrator";
        $this->load->view('admin/examples/v_projects', $data);
    }
}
