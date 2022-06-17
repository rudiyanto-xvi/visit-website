<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ribbons extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Ribbons | Administrator";
        $this->load->view('admin/ui/v_ribbons', $data);
    }
}
