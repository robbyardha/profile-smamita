<?php

class Teams_be extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Teams_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = "Teams";
        $data['teams'] = $this->Teams_model->get_teams();
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/teams_be/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }


    public function tambah_teams()
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
            'bagian',
            'Bagian',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('teams_be');
        } else {
            $this->Teams_model->tambah_teams();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('teams_be');
        }
    }
    public function ubah_teams()
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
            'bagian',
            'Bagian',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('teams_be');
        } else {
            $this->Teams_model->ubah_teams();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('teams_be');
        }
    }

    public function hapus_teams()
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
            redirect('teams_be');
        } else {
            $this->Teams_model->hapus_teams();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('teams_be');
        }
    }
}
