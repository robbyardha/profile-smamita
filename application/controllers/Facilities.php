<?php

class Facilities extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = "Facilities";
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
