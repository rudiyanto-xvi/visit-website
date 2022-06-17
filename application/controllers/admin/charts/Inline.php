<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inline extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Flot | Administrator";
        $this->load->view('admin/charts/v_inline', $data);
    }
}
