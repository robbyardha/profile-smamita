<?php

class Configuration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Role_model');
        $this->load->model('Configuration_model');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('akun_error', 'Maaf Kamu Belum login. Login untuk mengakses fitur');
            redirect('auth');
        }
    }

    public function index()
    {
        // var_dump($this->session->userdata());
        // die;
        $data['title'] = "Configuration Apps";
        $data['config_app'] = $this->Configuration_model->get_config();
        $data['direktur'] = $this->Configuration_model->get_direktur();
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/configuration/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function update_logo()
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
            [
                'required' => '%s harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Lengkapi data untuk merubah');
            redirect('configuration');
        } else {
            $this->Configuration_model->update_logo();
            $this->session->set_flashdata('message', 'Logo Berhasil Diubah');
            redirect('configuration');
        }
    }

    public function update_data()
    {
        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required',
            [
                'required' => '%s harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'company',
            'Company',
            'required',
            [
                'required' => '%s harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'about',
            'About',
            'required',
            [
                'required' => '%s harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'phone_number',
            'No. Tlp',
            'required',
            [
                'required' => '%s harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            [
                'required' => '%s harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tagline',
            'Tagline',
            'required',
            [
                'required' => '%s harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Lengkapi data untuk merubah');
            redirect('configuration');
        } else {
            $this->Configuration_model->update_data();
            $this->session->set_flashdata('message', 'Data Berhasil Diubah');
            redirect('configuration');
        }
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

    public function update_data_direktur()
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
            redirect('configuration');
        } else {
            $this->Configuration_model->update_data_direktur();
            $this->session->set_flashdata('message', 'Data Berhasil diupdate');
            redirect('configuration');
        }
    }

    public function update_foto_direktur()
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
            [
                'required' => '%s harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Lengkapi data untuk merubah');
            redirect('configuration');
        } else {
            $this->Configuration_model->update_foto_direktur();
            $this->session->set_flashdata('message', 'Foto Direktur Berhasil Diubah');
            redirect('configuration');
        }
    }
}
