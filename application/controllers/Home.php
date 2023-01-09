<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Configuration_model');
    }

    public function index()
    {
        $data['title'] = "SMA Muhammadiyah 1 Taman - Profile";
        $data['kepsek'] = "Drs.Zainal Arif Fakhrudi, M.M.";
        $data['config_direktur'] = $this->Configuration_model->get_direktur();
        $this->load->view('layout/header', $data);
        // $this->load->view('layout/prebuilt', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
