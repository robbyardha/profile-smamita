<?php

class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Role_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = "Role";
        $data['role'] = $this->Role_model->get_role();
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/role/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'type',
            'Type',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'desc',
            'Deskripsi',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('role');
        } else {
            $this->Role_model->tambah();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('role');
        }
    }

    public function ubah()
    {
        $this->form_validation->set_rules(
            'type',
            'Type',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'desc',
            'Deskripsi',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('role');
        } else {
            $this->Role_model->ubah();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('role');
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
            redirect('role');
        } else {
            $this->Role_model->hapus();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('role');
        }
    }
}
