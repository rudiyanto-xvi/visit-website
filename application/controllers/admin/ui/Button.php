<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Button extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Button | Administrator";
        $this->load->view('admin/ui/v_buttons', $data);
    }
}
