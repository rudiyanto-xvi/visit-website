<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Language_menu extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Language Menu | Administrator";
        $this->load->view('admin/examples/v_language_menu', $data);
    }
}
