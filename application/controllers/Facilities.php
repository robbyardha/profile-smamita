<?php

class Facilities extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sarpras_model');
    }
    public function index()
    {
        $data['title'] = "Facilities";
        $data['sarpras_fasilitas'] = $this->Sarpras_model->get_sarpras_fasilitas();
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('facilities/index', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
