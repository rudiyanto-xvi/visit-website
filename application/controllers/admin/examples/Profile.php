<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Profile | Administrator";
        $this->load->view('admin/examples/v_profile', $data);
    }
}
