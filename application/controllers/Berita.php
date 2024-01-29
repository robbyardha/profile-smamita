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
            $this->session->set_flashdata('message_error', 'Data Gagal Di Hapus');
            redirect('berita');
        } else {
            $this->Berita_model->hapus();
            $this->session->set_flashdata('message', 'Data Berhasil dihapus');
            redirect('berita');
        }
    }

    public function ck_editor_uploadimg()
    {
        if (isset($_FILES['upload']['name'])) {
            $file = $_FILES['upload']['tmp_name'];
            $file_name = $_FILES['upload']['name'];
            $file_name_array = explode(".", $file_name);
            $extension = end($file_name_array);
            $new_image_name = rand() . '.' . $extension;
            $allowed_extension = array("jpg", "jpeg", "png", "PNG", "JPEG", "JPG");
            if (in_array($extension, $allowed_extension)) {
                move_uploaded_file($file, './assets/img_konten/' . $new_image_name);
                $function_number = $_GET['CKEditorFuncNum'];
                $url = base_url() . 'assets/img_konten/' . $new_image_name;
                $message = '';
                echo "<script>window.parent.CKEDITOR.tools.callFunction('$function_number','$url','$message')</script>";
            }
        }
    }
}
