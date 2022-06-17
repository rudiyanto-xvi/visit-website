<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_detail extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Project Detail | Administrator";
        $this->load->view('admin/examples/v_project-detail', $data);
    }
}
