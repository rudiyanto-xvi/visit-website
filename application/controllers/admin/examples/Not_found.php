<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Not_found extends CI_Controller
{
    public function index()
    {
        $data['title'] = "404 | Administrator";
        $this->load->view('admin/examples/v_not-found', $data);
    }
}
