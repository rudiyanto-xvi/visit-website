<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editors extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Editors | Administrator";
        $this->load->view('admin/forms/v_editors', $data);
    }
}
