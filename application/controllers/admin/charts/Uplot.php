<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uplot extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Uplot | Administrator";
        $this->load->view('admin/charts/v_uplot', $data);
    }
}
