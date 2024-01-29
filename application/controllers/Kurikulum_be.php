<?php

class Kurikulum_be extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Role_model');
        $this->load->model('Kurikulum_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = "Kurikulum";
        $data['role'] = $this->Role_model->get_role();
        $data['kurikulum_profile'] = $this->Kurikulum_model->get_kurikulum_profile();

        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/kurikulum_be/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function isi_profile()
    {
        $this->form_validation->set_rules(
            'nama_kurikulum',
            'Nama',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'deskripsi_kurikulum',
            'Deskripsi',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('kurikulum_be');
        } else {
            $this->Kurikulum_model->isi_profile();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('kurikulum_be');
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
            'nama_kurikulum',
            'Nama',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'deskripsi_kurikulum',
            'Deskripsi',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('kurikulum_be');
        } else {
            $this->Kurikulum_model->ubah_profile();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('kurikulum_be');
        }
    }

    public function struktur()
    {

        $data['title'] = "Kurikulum Struktur";
        $data['role'] = $this->Role_model->get_role();
        $data['kurikulum_profile'] = $this->Kurikulum_model->get_kurikulum_profile();
        $data['kurikulum_struktur'] = $this->Kurikulum_model->get_kurikulum_struktur();

        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/kurikulum_be/struktur', $data);
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
            redirect('kurikulum_be/struktur');
        } else {
            $this->Kurikulum_model->tambah_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('kurikulum_be/struktur');
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
            redirect('kurikulum_be/struktur');
        } else {
            $this->Kurikulum_model->ubah_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('kurikulum_be/struktur');
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
            redirect('kurikulum_be/struktur');
        } else {
            $this->Kurikulum_model->hapus_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('kurikulum_be/struktur');
        }
    }
}
