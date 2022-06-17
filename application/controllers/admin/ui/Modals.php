<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modals extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Modals | Administrator";
        $this->load->view('admin/ui/v_modals', $data);
    }
}
