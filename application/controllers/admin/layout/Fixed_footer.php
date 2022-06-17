<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fixed_footer extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Fixed Footer | Administrator";
        $this->load->view('admin/layout/v_fixed_footer', $data);
    }
}
