<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mailbox extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Mailbox | Administrator";
        $this->load->view('admin/mailbox/v_mailbox', $data);
    }
}
