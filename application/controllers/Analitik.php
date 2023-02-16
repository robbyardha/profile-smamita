<?php

class Analitik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Prestasi_model');
        $this->load->model('Ekstrakurikuler_model');
        $this->load->model('Analitik_model');

        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {
        // var_dump($this->session->userdata());
        // die;
        $data['title'] = "Analisis Website";
        $data['prestasi'] = $this->Prestasi_model->get_prestasi();
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_ekstrakurikuler();
        // $data['analitik'] = $this->Analitik_model->get_analitik_traffic();
        $data['analitik'] = analyze();
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/analitik/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }
}
