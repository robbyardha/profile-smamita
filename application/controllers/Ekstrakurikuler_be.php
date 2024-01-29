<?php

class Ekstrakurikuler_be extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Ekstrakurikuler_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = "Ekstrakurikuler";
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_ekstrakurikuler();

        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/kesiswaan_be/ekstrakurikuler', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('ekstrakurikuler_be');
        } else {
            $this->Ekstrakurikuler_model->tambah_ekstra();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('ekstrakurikuler_be');
        }
    }

    public function ubah()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('ekstrakurikuler_be');
        } else {
            $this->Ekstrakurikuler_model->ubah_ekstra();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('ekstrakurikuler_be');
        }
    }

    public function hapus()
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('ekstrakurikuler_be');
        } else {
            $this->Ekstrakurikuler_model->hapus_ekstra();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('ekstrakurikuler_be');
        }
    }
}
