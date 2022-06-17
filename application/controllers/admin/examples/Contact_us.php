<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Contact Us | Administrator";
        $this->load->view('admin/examples/v_contact-us', $data);
    }
}
