<?php

class Ismuba_be extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Role_model');
        $this->load->model('Kurikulum_model');
        $this->load->model('Kesiswaan_model');
        $this->load->model('Sarpras_model');
        $this->load->model('Ismuba_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = "Ismuba";
        $data['role'] = $this->Role_model->get_role();
        $data['sarpras_profile'] = $this->Sarpras_model->get_sarpras_profile();
        $data['ismuba_profile'] = $this->Ismuba_model->get_ismuba_profile();

        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/ismuba_be/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function isi_profile()
    {
        $this->form_validation->set_rules(
            'nama_ismuba',
            'Nama',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'deskripsi_ismuba',
            'Deskripsi',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('ismuba_be');
        } else {
            $this->Ismuba_model->isi_profile();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('ismuba_be');
        }
    }

    public function ubah_profile()
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );
        $this->form_validation->set_rules(
            'nama_ismuba',
            'Nama',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'deskripsi_ismuba',
            'Deskripsi',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('ismuba_be');
        } else {
            $this->Ismuba_model->ubah_profile();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('ismuba_be');
        }
    }

    public function struktur()
    {

        $data['title'] = "Humas Struktur";
        $data['ismuba_struktur'] = $this->Ismuba_model->get_ismuba_struktur();

        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/ismuba_be/struktur', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah_struktur()
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
        $this->form_validation->set_rules(
            'divisi',
            'Divisi',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('ismuba_be/struktur');
        } else {
            $this->Ismuba_model->tambah_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('ismuba_be/struktur');
        }
    }
    public function ubah_struktur()
    {

        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'divisi',
            'Divisi',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('ismuba_be/struktur');
        } else {
            $this->Ismuba_model->ubah_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('ismuba_be/struktur');
        }
    }

    public function hapus_struktur()
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
            redirect('ismuba_be/struktur');
        } else {
            $this->Ismuba_model->hapus_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('ismuba_be/struktur');
        }
    }
}
