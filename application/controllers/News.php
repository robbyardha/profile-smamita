<?php

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }
    public function index()
    {
        $data['title'] = "News - SMAM1TA";
        $data['berita'] = $this->Berita_model->get_berita();
        // var_dump($data['berita']);
        // die;
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('news_fe/index', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
    public function detail($slug_berita)
    {
        $data['title'] = "Detail News - SMAM1TA";
        $data['berita_slug'] = $this->Berita_model->get_berita_slug($slug_berita);
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('news_fe/detail', $data);
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
        $this->load->view('information/gallery', $data);
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
