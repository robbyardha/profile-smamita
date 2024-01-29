<?php


class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('Kategori_model');
        $this->load->model('Banner_model');
    }


    public function index()
    {
        $data['title'] = "News - SMAM1TA";
        $config['base_url'] = base_url('/news/index');
        $config['total_rows'] = $this->Berita_model->total_All_News();
        $config['per_page'] = 8;
        $config['num_links'] = 2;

        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';


        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);


        $data['mulai'] = $this->uri->segment(3);
        $data['berita'] = $this->Berita_model->get_berita_pagination($config['per_page'], $data['mulai']);

        $keyword = $this->input->get('keyword');
        $kategori_get = $this->input->get('kategori');
        $data['active_kategori'] = $kategori_get;
        $data['search_berita'] = $this->Berita_model->search_berita($keyword);
        $data['search_berita_by_kategori'] = $this->Berita_model->search_berita_by_kategori($kategori_get);
        $data['kategori'] = $this->Kategori_model->get_kategori();
        $data['recent_news'] = $this->Berita_model->sort_berita_date();
        $data['banner_showlist'] = $this->Banner_model->get_banner_header();


        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('news_fe/index', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }


    public function detail($slug_berita)
    {

        $this->load->library('Simple_html_dom');



        $data['title'] = "Detail News - SMAM1TA";
        $data['berita_slug'] = $this->Berita_model->get_berita_slug($slug_berita);

        // $gambar = $data['berita_slug']['konten'];

        // $dom = new Simple_html_dom();
        // $dom->load($gambar);


        // $img_elements = $dom->find('img');

        // var_dump($img_elements);

        // if (!empty($img_elements)) {
        //     $src_value = $img_elements[0]->src;
        // } else {
        //     $src_value =  'Tidak ada elemen <img> dalam teks HTML.';
        // }

        // var_dump($src_value);
        // die;

        $data['title_url'] = $data['berita_slug']['headline'];
        $data['url_img'] = base_url('assets/backend/img/berita_images/') . $data['berita_slug']['image_berita'];
        $data['url_web'] = base_url('news/detail/') . $slug_berita;

        $data['berita'] = $this->Berita_model->get_berita();
        $keyword = $this->input->get('keyword');
        $kategori_get = $this->input->get('kategori');
        $data['search_berita'] = $this->Berita_model->search_berita($keyword);
        $data['search_berita_by_kategori'] = $this->Berita_model->search_berita_by_kategori($kategori_get);
        $data['kategori'] = $this->Kategori_model->get_kategori();
        $data['recent_news'] = $this->Berita_model->sort_berita_date();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('news_fe/detail', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }




    public function kurikulum()
    {
        $data['title'] = "Information - Kurikulum";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }


    public function gallery()
    {
        $data['title'] = "Information - Gallery";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/gallery', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }

    public function announcement()
    {
        $data['title'] = "Information - Announcement";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbardetail', $data);
        $this->load->view('information/teams', $data);
        $this->load->view('layout/footname', $data);
        $this->load->view('layout/footer', $data);
    }
}
