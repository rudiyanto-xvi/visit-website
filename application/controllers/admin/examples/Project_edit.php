<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_edit extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Project Edit | Administrator";
        $this->load->view('admin/examples/v_project-edit', $data);
    }
}
