<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Configuration_model');
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $data['title'] = "SMA Muhammadiyah 1 Taman - Profile";
        $data['kepsek'] = "Drs.Zainal Arif Fakhrudi, M.M.";
        $data['config_direktur'] = $this->Configuration_model->get_direktur();
        $data['konfigurasi_profile'] = $this->Configuration_model->get_config();
        $data['visi_misi'] = $this->Configuration_model->get_visi_misi();
        $data['berita'] = $this->Berita_model->get_berita_limit_tiga();


        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
