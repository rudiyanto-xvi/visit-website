<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Gallery | Administrator";
        $this->load->view('admin/gallery/v_gallery', $data);
    }
}
