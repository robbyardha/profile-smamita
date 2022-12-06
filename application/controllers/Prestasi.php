<?php

class Prestasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Information - Prestasi";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('prestasi/index', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
