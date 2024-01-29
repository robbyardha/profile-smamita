<?php

class Extracurricular extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ekstrakurikuler_model');
    }
    public function index()
    {
        $data['title'] = "Extracurricular";
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_ekstrakurikuler();



        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('extracurricular/index', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
