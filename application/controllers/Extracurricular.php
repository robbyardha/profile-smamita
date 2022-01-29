<?php

class Extracurricular extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = "Extracurricular";
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
