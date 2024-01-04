<?php

use Symfony\Component\Yaml\Dumper;

class Visi_Misi extends CI_Controller
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
        $data['title'] = "Visi Dan Misi";
        $data['visi_misi'] = $this->Configuration_model->get_visi_misi();


        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/visi_dan_misi/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function update_data()
    {
        $this->form_validation->set_rules(
            'visi',
            'Visi',
            'required',
            [
                'required' => '%s harus di isi'
            ]
        );

        $this->form_validation->set_rules(
            'misi',
            'Misi',
            'required',
            [
                'required' => '%s harus di isi'
            ]
        );

        $this->form_validation->set_rules(
            'summary',
            'Summary',
            'required',
            [
                'required' => '%s harus di isi'
            ]
        );

        if ($this->form_validation->run() == TRUE) {

            $this->Configuration_model->update_data_visi_misi();
            $this->session->set_flashdata('message', 'Data Berhasil Di Ubah');
            redirect('visi_misi');
        } else {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Lengkapi data untuk merubah');
            redirect('visi_misi');
        }
    }

    public function update_logo_visi_dan_misi()
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
            [
                'required' => '%s harus di isi'
            ]
        );


        if ($this->form_validation->run() == TRUE) {
            $this->Configuration_model->update_foto_visi_misi();
            $this->session->set_flashdata('message', 'Foto Visi Misi Berhasil Di Ubah');
            redirect('visi_misi');
        } else {
            $this->session->set_flashdata('message_error', 'Terdapat data yang kosong. Lengkapi data untuk merubah');
            redirect('visi_misi');
        }
    }
}
