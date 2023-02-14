<?php

class Sarpras_be extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Role_model');
        $this->load->model('Kurikulum_model');
        $this->load->model('Kesiswaan_model');
        $this->load->model('Sarpras_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {
        // var_dump($this->session->userdata());
        // die;
        $data['title'] = "Sarpras";
        $data['role'] = $this->Role_model->get_role();
        $data['sarpras_profile'] = $this->Sarpras_model->get_sarpras_profile();
        // var_dump($data['kurikulum_profile']);
        // die;
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/sarpras_be/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function isi_profile()
    {
        $this->form_validation->set_rules(
            'nama_sarpras',
            'Nama',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'deskripsi_sarpras',
            'Deskripsi',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('sarpras_be');
        } else {
            $this->Sarpras_model->isi_profile();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('sarpras_be');
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
            'nama_sarpras',
            'Nama',
            'required',
            [
                'required' => '%s is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'deskripsi_sarpras',
            'Deskripsi',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('sarpras_be');
        } else {
            $this->Sarpras_model->ubah_profile();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('sarpras_be');
        }
    }

    public function struktur()
    {
        // var_dump($this->session->userdata());
        // die;
        $data['title'] = "Sarpras Struktur";
        $data['role'] = $this->Role_model->get_role();
        $data['kurikulum_profile'] = $this->Kurikulum_model->get_kurikulum_profile();
        $data['kurikulum_struktur'] = $this->Kurikulum_model->get_kurikulum_struktur();
        $data['kesiswaan_struktur'] = $this->Kesiswaan_model->get_kesiswaan_struktur();
        $data['sarpras_struktur'] = $this->Sarpras_model->get_sarpras_struktur();
        // var_dump($data['kurikulum_profile']);
        // die;
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/sarpras_be/struktur', $data);
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
            redirect('sarpras_be/struktur');
        } else {
            $this->Sarpras_model->tambah_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('sarpras_be/struktur');
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
            redirect('sarpras_be/struktur');
        } else {
            $this->Sarpras_model->ubah_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('sarpras_be/struktur');
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
            redirect('sarpras_be/struktur');
        } else {
            $this->Sarpras_model->hapus_struktur();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('sarpras_be/struktur');
        }
    }


    // -----------FASILITAS------------------------

    public function fasilitas()
    {
        $data['title'] = "Sarpras Fasilitas";
        $data['role'] = $this->Role_model->get_role();
        $data['kurikulum_profile'] = $this->Kurikulum_model->get_kurikulum_profile();
        $data['kurikulum_struktur'] = $this->Kurikulum_model->get_kurikulum_struktur();
        $data['kesiswaan_struktur'] = $this->Kesiswaan_model->get_kesiswaan_struktur();
        $data['sarpras_struktur'] = $this->Sarpras_model->get_sarpras_struktur();
        $data['sarpras_fasilitas'] = $this->Sarpras_model->get_sarpras_fasilitas();
        // var_dump($data['kurikulum_profile']);
        // die;
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/sarpras_be/fasilitas', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah_fasilitas()
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
            redirect('sarpras_be/fasilitas');
        } else {
            $this->Sarpras_model->tambah_fasilitas();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('sarpras_be/fasilitas');
        }
    }
    public function ubah_fasilitas()
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
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Silahkan lengkapi data');
            redirect('sarpras_be/fasilitas');
        } else {
            $this->Sarpras_model->ubah_fasilitas();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('sarpras_be/fasilitas');
        }
    }

    public function hapus_fasilitas()
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
            redirect('sarpras_be/fasilitas');
        } else {
            $this->Sarpras_model->hapus_fasilitas();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('sarpras_be/fasilitas');
        }
    }
}
