<?php

class Prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prestasi_model');
    }
    public function index()
    {
        $data['title'] = "Information - Prestasi";
        $data['prestasi'] = $this->Prestasi_model->get_prestasi();


        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('prestasi/index', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
