<?php

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Role_model');
        $this->load->model('Kategori_model');
        $this->load->model('Berita_model');

        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {
        // var_dump($this->session->userdata());
        // die;
        $data['title'] = "Berita";
        $data['berita'] = $this->Berita_model->get_berita();
        // var_dump($data['join_buku_new']);
        // var_dump($data['join_buku']);
        // die;
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/berita/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'headline',
            'Headline',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        // $this->form_validation->set_rules(
        //     'kategori',
        //     'Kategori',
        //     'required',
        //     [
        //         'required' => '%s is required!',
        //     ]
        // );
        $this->form_validation->set_rules(
            'konten',
            'Konten',
            'required',
            [
                'required' => '%s is required!',
            ]
        );



        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Berita Tambah";
            $data['role'] = $this->Role_model->get_role();
            $data['kategori'] = $this->Kategori_model->get_kategori();
            // $data['genre'] = GENRE_DATA;
            // var_dump($data['kategori']);
            // var_dump($data['genre']['genre'][0]);
            // die;
            $this->load->view('backend/layout/header', $data);
            $this->load->view('backend/layout/sidebar', $data);
            $this->load->view('backend/layout/navbar', $data);
            $this->load->view('backend/content/berita/tambah', $data);
            $this->load->view('backend/layout/footer', $data);
        } else {
            $this->Berita_model->tambah();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('berita');
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules(
            'headline',
            'Headline',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        // $this->form_validation->set_rules(
        //     'kategori',
        //     'Kategori',
        //     'required',
        //     [
        //         'required' => '%s is required!',
        //     ]
        // );
        $this->form_validation->set_rules(
            'konten',
            'Konten',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Berita Ubah";
            $data['role'] = $this->Role_model->get_role();
            $data['kategori'] = $this->Kategori_model->get_kategori();
            $data['berita_id'] = $this->Berita_model->get_berita_id($id);
            // $data['genre'] = GENRE_DATA;
            // var_dump($data['buku_id']);
            // die;
            $this->load->view('backend/layout/header', $data);
            $this->load->view('backend/layout/sidebar', $data);
            $this->load->view('backend/layout/navbar', $data);
            $this->load->view('backend/content/berita/ubah', $data);
            $this->load->view('backend/layout/footer', $data);
        } else {
            $this->Berita_model->ubah();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('berita');
        }
    }
    public function detail($id)
    {

        $data['title'] = "Berita Ubah";
        $data['role'] = $this->Role_model->get_role();
        $data['kategori'] = $this->Kategori_model->get_kategori();
        $data['berita_id'] = $this->Berita_model->get_berita_id($id);
        // $data['genre'] = GENRE_DATA;
        // var_dump($data['buku_id']);
        // die;
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/berita/detail', $data);
        $this->load->view('backend/layout/footer', $data);
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
            redirect('film');
        } else {
            $this->Film_model->hapus();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('film');
        }
    }
}
