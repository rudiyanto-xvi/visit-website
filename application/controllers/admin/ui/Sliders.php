<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sliders extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Sliders | Administrator";
        $this->load->view('admin/ui/v_sliders', $data);
    }
}
