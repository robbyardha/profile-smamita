<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kategori_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {
        // var_dump($this->session->userdata());
        // die;

        // --------------------------EXAMPLE TO MODIFICATION FILE
        // $file = './assets/test/test.txt';
        // $open = file_get_contents($file);
        // $open .= "Yowmannnn" . "\n \n \n";
        // file_put_contents($file, $open);
        // die;

        $data['title'] = "Dashboard";
        $data['count_kategori'] = $this->Kategori_model->count_kategori();
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/dashboard/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }
}
