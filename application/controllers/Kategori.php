<?php

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Role_model');
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
        $data['title'] = "Kategori";
        $data['role'] = $this->Role_model->get_role();
        $data['kategori'] = $this->Kategori_model->get_kategori();
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/kategori/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('kategori');
        } else {
            $this->Kategori_model->tambah();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('kategori');
        }
    }

    public function ubah()
    {
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('kategori');
        } else {
            $this->Kategori_model->ubah();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('kategori');
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
            redirect('kategori');
        } else {
            $this->Kategori_model->hapus();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('kategori');
        }
    }
}