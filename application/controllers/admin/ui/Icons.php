<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Icons extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Icons | Administrator";
        $this->load->view('admin/ui/v_icons', $data);
    }
}
