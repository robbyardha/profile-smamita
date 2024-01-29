<?php

class Prestasi_be extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Prestasi_model');
        $this->load->model('Ekstrakurikuler_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = "Prestasi Siswa";
        $data['prestasi'] = $this->Prestasi_model->get_prestasi();
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_ekstrakurikuler();
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/kesiswaan_be/prestasi', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_siswa',
            'Nama Siswa',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas ',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'nama_prestasi',
            'Nama Prestasi',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'tingkat_prestasi',
            'Tingkat Prestasi',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'tahun_prestasi',
            'Tahun Prestasi',
            'required|max_length[10]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 10 Karakter'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('prestasi_be');
        } else {
            $this->Prestasi_model->tambah_prestasi();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('prestasi_be');
        }
    }

    public function ubah()
    {
        $this->form_validation->set_rules(
            'nama_siswa',
            'Nama Siswa',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas ',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'nama_prestasi',
            'Nama Prestasi',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'tingkat_prestasi',
            'Tingkat Prestasi',
            'required|max_length[100]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 100 Karakter'
            ]
        );
        $this->form_validation->set_rules(
            'tahun_prestasi',
            'Tahun Prestasi',
            'required|max_length[10]',
            [
                'required' => '%s is required!',
                'max_length' => '%s max 10 Karakter'
            ]
        );


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('prestasi_be');
        } else {
            $this->Prestasi_model->ubah_prestasi();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('prestasi_be');
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
            redirect('prestasi_be');
        } else {
            $this->Prestasi_model->hapus_prestasi();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('prestasi_be');
        }
    }
}
