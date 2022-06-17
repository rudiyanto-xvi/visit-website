<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Read_mail extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Read Mail | Administrator";
        $this->load->view('admin/mailbox/v_read-mail', $data);
    }
}
