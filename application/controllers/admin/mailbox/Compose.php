<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Compose extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Compose | Administrator";
        $this->load->view('admin/mailbox/v_compose', $data);
    }
}
