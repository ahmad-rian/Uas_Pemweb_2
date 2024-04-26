<?php

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman About';
        $this->load->view('template/header', $data);
        $this->load->view('template/footer');
        $this->load->view('about/index');
    }
}
