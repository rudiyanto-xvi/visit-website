<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Widgets extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Widgets | Administrator";
        $this->load->view('admin/widgets/v_widgets', $data);
    }
}
