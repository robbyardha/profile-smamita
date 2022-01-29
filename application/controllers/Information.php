<?php

class Information extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function teams()
    {
        $data['title'] = "Information - Team";
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
    public function kesiswaan()
    {
        $data['title'] = "Information - Kesiswaan";
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
    public function kurikulum()
    {
        $data['title'] = "Information - Kurikulum";
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
    public function gallery()
    {
        $data['title'] = "Information - Gallery";
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
    public function announcement()
    {
        $data['title'] = "Information - Announcement";
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
