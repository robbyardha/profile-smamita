<?php

class Information extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Teams_model');
        $this->load->model('Kurikulum_model');
        $this->load->model('Kesiswaan_model');
        $this->load->model('Humas_model');
        $this->load->model('Sarpras_model');
        $this->load->model('Ismuba_model');
    }
    public function teams()
    {
        $data['title'] = "Information - Team";
        $data['get_team_all'] = $this->Teams_model->get_teams();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
    public function kurikulum()
    {
        $data['title'] = "Information - Kurikulum";
        $this->load->view('layout/header', $data);
        $data['get_profile'] = $this->Kurikulum_model->get_kurikulum_profile();
        $data['get_struktur'] = $this->Kurikulum_model->get_kurikulum_struktur();
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/kurikulum', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }

    public function kesiswaan()
    {
        $data['title'] = "Information - Kesiswaan";
        $data['get_profile'] = $this->Kesiswaan_model->get_kesiswaan_profile();
        $data['get_struktur'] = $this->Kesiswaan_model->get_kesiswaan_struktur();
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/kesiswaan', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }

    public function humas()
    {
        $data['title'] = "Information - Humas";
        $data['get_profile'] = $this->Humas_model->get_humas_profile();
        $data['get_struktur'] = $this->Humas_model->get_humas_struktur();
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/humas', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }

    public function sarpras()
    {
        $data['title'] = "Information - Sarpras";
        $data['get_profile'] = $this->Sarpras_model->get_sarpras_profile();
        $data['get_struktur'] = $this->Sarpras_model->get_sarpras_struktur();
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/sarpras', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }

    public function ismuba()
    {
        $data['title'] = "Information - Ismuba";
        $data['get_profile'] = $this->Ismuba_model->get_ismuba_profile();
        $data['get_struktur'] = $this->Ismuba_model->get_ismuba_struktur();
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/ismuba', $data);
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
        $this->load->view('information/announcement', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
