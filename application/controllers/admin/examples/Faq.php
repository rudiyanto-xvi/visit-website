<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Faq | Administrator";
        $this->load->view('admin/examples/v_faq', $data);
    }
}
