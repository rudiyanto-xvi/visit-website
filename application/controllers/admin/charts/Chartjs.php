<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chartjs extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Chart JS | Administrator";
        $this->load->view('admin/charts/v_chartjs', $data);
    }
}
