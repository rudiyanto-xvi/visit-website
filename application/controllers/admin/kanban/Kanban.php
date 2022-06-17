<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kanban extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Kanban | Administrator";
        $this->load->view('admin/kanban/v_kanban', $data);
    }
}
