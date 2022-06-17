<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_add extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Project Add | Administrator";
        $this->load->view('admin/examples/v_project-add', $data);
    }
}
