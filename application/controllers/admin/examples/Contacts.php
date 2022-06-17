<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contacts extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Contacts | Administrator";
        $this->load->view('admin/examples/v_contacts', $data);
    }
}
