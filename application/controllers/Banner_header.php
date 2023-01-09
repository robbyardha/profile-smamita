<?php

class Banner_header extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Role_model');
        $this->load->model('Kategori_model');
        $this->load->model('Berita_model');
        $this->load->model('Banner_model');

        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {
        // var_dump($this->session->userdata());
        // die;
        $data['title'] = "Banner";
        $data['banner'] = $this->Banner_model->get_banner_header();
        // var_dump($data['join_buku_new']);
        // var_dump($data['join_buku']);
        // die;
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/banner/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_banner',
            'Nama Banner',
            'required',
            [
                'required' => "Nama Banner Wajib diisi"
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('banner_header');
        } else {
            $this->Banner_model->tambah();
            $this->session->set_flashdata('message', 'Data Banner berhasil ditambah');
            redirect('banner_header');
        }
    }

    public function ubah()
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('banner_header');
        } else {
            $this->Banner_model->ubah();
            $this->session->set_flashdata('message', 'Data Banner berhasil diubah');
            redirect('banner_header');
        }
    }

    public function hapus()
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('banner_header');
        } else {
            $this->Banner_model->hapus();
            $this->session->set_flashdata('message', 'Data Banner berhasil diubah');
            redirect('banner_header');
        }
    }
}
