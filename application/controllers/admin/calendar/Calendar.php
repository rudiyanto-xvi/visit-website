<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calendar extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Calendar | Administrator";
        $this->load->view('admin/calendar/v_calendar', $data);
    }
}
