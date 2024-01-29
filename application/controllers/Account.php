<?php

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Account_model');
    }

    public function index()
    {
        $data['title'] = "Account";
        $data['akun'] = $this->Account_model->get_account();
        $this->load->view('backend/layout/header', $data);
        $this->load->view('backend/layout/sidebar', $data);
        $this->load->view('backend/layout/navbar', $data);
        $this->load->view('backend/content/account/index', $data);
        $this->load->view('backend/layout/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Name is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            [
                'required' => 'Name is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            [
                'required' => 'Name is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[passwordconfirm]',
            [
                'required' => 'Password is required!',
                'min_length' => 'Password minimum 6 characters',
                'matches' => 'Password not same'
            ]
        );
        $this->form_validation->set_rules(
            'passwordconfirm',
            'Password Confirmation',
            'required|trim|min_length[5]|matches[password]',
            [
                'required' => 'Password Confirmation is required!',
                'min_length' => 'Password minimum 6 characters',
                'matches' => 'Password not same'
            ]
        );

        $this->form_validation->set_rules(
            'role_id',
            'Role ID',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Account";
            $data['akun'] = $this->Account_model->get_account();
            $this->load->view('backend/layout/header', $data);
            $this->load->view('backend/layout/sidebar', $data);
            $this->load->view('backend/layout/navbar', $data);
            $this->load->view('backend/content/account/tambah', $data);
            $this->load->view('backend/layout/footer', $data);
        } else {
            $this->Account_model->tambah();
            $this->session->set_flashdata('message', 'Data Berhasil ditambah');
            redirect('account');
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Name is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            [
                'required' => 'Name is Required!'
            ]
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            [
                'required' => 'Name is Required!'
            ]
        );


        $this->form_validation->set_rules(
            'role_id',
            'Role ID',
            'required',
            [
                'required' => '%s is required!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Account Ubah";
            $data['akun'] = $this->Account_model->get_account();
            $data['akun_id'] = $this->Account_model->get_account_id($id);
            $this->load->view('backend/layout/header', $data);
            $this->load->view('backend/layout/sidebar', $data);
            $this->load->view('backend/layout/navbar', $data);
            $this->load->view('backend/content/account/ubah', $data);
            $this->load->view('backend/layout/footer', $data);
        } else {
            $this->Account_model->ubah();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('account');
        }
    }

    public function ubah_pass($id)
    {
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[passwordconfirm]',
            [
                'required' => 'Password is required!',
                'min_length' => 'Password minimum 6 characters',
                'matches' => 'Password not same'
            ]
        );
        $this->form_validation->set_rules(
            'passwordconfirm',
            'Password Confirmation',
            'required|trim|min_length[5]|matches[password]',
            [
                'required' => 'Password Confirmation is required!',
                'min_length' => 'Password minimum 6 characters',
                'matches' => 'Password not same'
            ]
        );


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Account Ubah Password";
            $data['akun'] = $this->Account_model->get_account();
            $data['akun_id'] = $this->Account_model->get_account_id($id);
            $this->load->view('backend/layout/header', $data);
            $this->load->view('backend/layout/sidebar', $data);
            $this->load->view('backend/layout/navbar', $data);
            $this->load->view('backend/content/account/ubah_password', $data);
            $this->load->view('backend/layout/footer', $data);
        } else {
            $this->Account_model->update_password();
            $this->session->set_flashdata('message', 'Data Berhasil diubah');
            redirect('account');
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
            redirect('account');
        } else {
            $this->Account_model->hapus();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('account');
        }
    }

    public function download_xls_account()
    {
        $this->load->helper('download');
        force_download('assets/file_upload/format_akun.xlsx', NULL);
    }

    public function import()
    {
        $this->form_validation->set_rules(
            'token',
            'Token',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Account Import";
            $data['akun'] = $this->Account_model->get_account();
            $this->load->view('backend/layout/header', $data);
            $this->load->view('backend/layout/sidebar', $data);
            $this->load->view('backend/layout/navbar', $data);
            $this->load->view('backend/content/account/import', $data);
            $this->load->view('backend/layout/footer', $data);
        } else {
            $this->load->helper('form');
            $this->Account_model->import();
        }
    }
}
