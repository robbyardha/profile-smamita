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
            'judul',
            'Judul',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        // $this->form_validation->set_rules(
        //     'genre',
        //     'Genre',
        //     'required',
        //     [
        //         'required' => '%s is required!',
        //     ]
        // );
        $this->form_validation->set_rules(
            'tahun_rilis',
            'Tahun Rilis',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'sutradara',
            'Sutradara',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'rating',
            'Rating',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'jenis',
            'Jenis',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'based_on',
            'Based On',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'sinopsis',
            'Sinopsis',
            'required',
            [
                'required' => '%s is required!',
            ]
        );


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Film Tambah";
            $data['role'] = $this->Role_model->get_role();
            $data['penerbit'] = $this->Penerbit_model->get_penerbit();
            $data['pencetak'] = $this->Pencetak_model->get_pencetak();
            $data['kategori'] = $this->Kategori_model->get_kategori();
            $data['join_buku'] = $this->Buku_model->join_buku_penerbit_pencetak();
            // $data['genre'] = GENRE_DATA;
            // var_dump($data['genre']);
            // var_dump($data['genre']['genre'][0]);
            // die;
            $this->load->view('backend/layout/header', $data);
            $this->load->view('backend/layout/sidebar', $data);
            $this->load->view('backend/layout/navbar', $data);
            $this->load->view('backend/content/film/tambah', $data);
            $this->load->view('backend/layout/footer', $data);
        } else {
            $this->Film_model->tambah();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('film');
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        // $this->form_validation->set_rules(
        //     'genre',
        //     'Genre',
        //     'required',
        //     [
        //         'required' => '%s is required!',
        //     ]
        // );
        $this->form_validation->set_rules(
            'tahun_rilis',
            'Tahun Rilis',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'sutradara',
            'Sutradara',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'rating',
            'Rating',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'jenis',
            'Jenis',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'based_on',
            'Based On',
            'required',
            [
                'required' => '%s is required!',
            ]
        );
        $this->form_validation->set_rules(
            'sinopsis',
            'Sinopsis',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Film Ubah";
            $data['role'] = $this->Role_model->get_role();
            $data['penerbit'] = $this->Penerbit_model->get_penerbit();
            $data['pencetak'] = $this->Pencetak_model->get_pencetak();
            $data['kategori'] = $this->Kategori_model->get_kategori();
            $data['buku_id'] = $this->Buku_model->get_buku_id($id);
            $data['film_id'] = $this->Film_model->get_film_id($id);
            // $data['genre'] = GENRE_DATA;
            // var_dump($data['buku_id']);
            // die;
            $this->load->view('backend/layout/header', $data);
            $this->load->view('backend/layout/sidebar', $data);
            $this->load->view('backend/layout/navbar', $data);
            $this->load->view('backend/content/film/ubah', $data);
            $this->load->view('backend/layout/footer', $data);
        } else {
            $this->Film_model->ubah();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('film');
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
            redirect('film');
        } else {
            $this->Film_model->hapus();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('film');
        }
    }
}
