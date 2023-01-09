<?php

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('Kategori_model');
        $this->load->model('Banner_model');
    }
    public function index()
    {
        $data['title'] = "News - SMAM1TA";
        $data['berita'] = $this->Berita_model->get_berita();
        $keyword = $this->input->get('keyword');
        $kategori_get = $this->input->get('kategori');
        $data['search_berita'] = $this->Berita_model->search_berita($keyword);
        $data['search_berita_by_kategori'] = $this->Berita_model->search_berita_by_kategori($kategori_get);
        // var_dump($data['search_berita_by_kategori']);
        // die;

        $data['kategori'] = $this->Kategori_model->get_kategori();
        $data['recent_news'] = $this->Berita_model->sort_berita_date();
        $data['banner_showlist'] = $this->Banner_model->get_banner_header();
        // var_dump($data['recent_news']);
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
        $data['berita'] = $this->Berita_model->get_berita();
        $keyword = $this->input->get('keyword');
        $kategori_get = $this->input->get('kategori');
        $data['search_berita'] = $this->Berita_model->search_berita($keyword);
        $data['search_berita_by_kategori'] = $this->Berita_model->search_berita_by_kategori($kategori_get);
        // var_dump($data['search_berita_by_kategori']);
        // die;

        $data['kategori'] = $this->Kategori_model->get_kategori();
        $data['recent_news'] = $this->Berita_model->sort_berita_date();
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
