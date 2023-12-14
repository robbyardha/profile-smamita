<?php

class Berita_model extends CI_Model
{
    public function get_berita()
    {
        $this->db->order_by('tanggal_publikasi', "DESC");
        return $this->db->get_where('berita', ['is_active' => 1])->result_array();
    }

    public function get_berita_pagination($batas, $mulai)
    {
        $this->db->order_by('tanggal_publikasi', "DESC");
        $this->db->where('is_active', 1);
        $query = $this->db->get('berita', $batas, $mulai);

        return $query->result_array();
    }

    public function total_All_News()
    {
        return $this->db->get('berita')->num_rows();
    }

    public function get_berita_id($id)
    {
        if ($id == NULL) {
            return $this->db->get_where('berita', ['is_active' => 1])->result_array();
        } else {
            return $this->db->get_where('berita', ['id' => $id, 'is_active' => 1])->row_array();
        }
    }

    public function get_berita_slug($slug_berita)
    {
        return $this->db->get_where('berita', ['slug_berita' => $slug_berita, 'is_active' => 1])->row_array();
    }

    public function search_berita($keyword)
    {
        if (!$keyword) {
            return $this->db->get_where('berita', ['is_active' => 1])->result_array();
        }
        $this->db->like('headline', $keyword);
        $this->db->or_like('konten', $keyword);
        $this->db->where('is_active', 1);
        $query = $this->db->get('berita');
        return $query->result_array();
    }
    public function search_berita_by_kategori($kategori)
    {
        if (!$kategori) {
            return $this->db->get_where('berita', ['is_active' => 1])->result_array();
        }
        $this->db->like('kategori', $kategori);
        $this->db->where('is_active', 1);
        $query = $this->db->get('berita');
        return $query->result_array();
    }

    public function sort_berita_date()
    {
        $this->db->order_by('tanggal_publikasi', "DESC");
        $this->db->limit(5);
        $this->db->where('is_active', 1);
        $query = $this->db->get('berita');
        return $query->result_array();
    }

    public function count_berita_active()
    {
        return $this->db->get_where('berita', ['is_active' => 1])->num_rows();
    }


    public function tambah()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');
        $headline = htmlspecialchars($this->input->post('headline'));
        $konten = htmlspecialchars($this->input->post('konten'));
        $tanggal_publikasi = date('Y-m-d');
        $jam_publikasi = date('H:i:s');
        $penulis = $this->session->userdata('nama');
        $created_date = date('Y-m-d H:i:s');
        $created_by = $this->session->userdata('nama');

        $is_active = 1;
        $image_berita = $_FILES['image_berita']['name'];

        if ($image_berita) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']  = 2048;
            $config['upload_path']  = './assets/backend/img/berita_images';
            $config['file_name']  =  time() . "_headline_news";
            // $config['file_name']  =  $isbn . "_Book_cover";
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image_berita')) {
                $image_berita_new = $this->upload->data('file_name');
                // $foto_leader_new = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
                $this->session->set_flashdata('message_error', 'Can`t Uploaded Because You not selected Image Cover Book');
                redirect('berita');
            }
        } else {
            $this->session->set_flashdata('message_error', 'Can`t Uploaded Because You not selected Image Cover Book');
            redirect('berita');
        }

        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($headline)));
        $slug_headline = url_title($headline, 'dash', true);

        $kategori = $this->input->post('kategori');
        // var_dump($kategori);
        // die;

        $new_str = "";
        for ($i = 0; $i < sizeof($kategori); $i++) {
            $new = $kategori[$i];
            // var_dump($new);
            // $str = implode(", ", $new);
            $new_str .= ", $new";
            // var_dump($new_str);
            // $this->db->set('genre', $new);
        }
        $new_str = substr($new_str, 1);
        $this->db->set('kategori', $new_str);
        // var_dump($new_str);

        // die;

        // $slug = url_title(convert_accented_characters($judul), 'dash', true));
        // $slug = url_title($judul, 'dash', true);


        $this->db->set('headline', $headline);
        $this->db->set('konten', $konten);
        $this->db->set('tanggal_publikasi', $tanggal_publikasi);
        $this->db->set('jam_publikasi', $jam_publikasi);
        $this->db->set('penulis', $penulis);
        $this->db->set('image_berita', $image_berita_new);
        $this->db->set('slug_berita', $slug_headline);
        $this->db->set('created_date', $created_date);
        $this->db->set('created_by', $created_by);

        $this->db->set('is_active', $is_active);
        $this->db->insert('berita');
        // var_dump($this->db->last_query());
        // die;
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');
        $headline = htmlspecialchars($this->input->post('headline'));
        $konten = htmlspecialchars($this->input->post('konten'));
        $tanggal_publikasi = date('Y-m-d');
        $jam_publikasi = date('H:i:s');
        $penulis = $this->session->userdata('nama');
        $updated_date = date('Y-m-d H:i:s');
        $updated_by = $this->session->userdata('nama');

        $is_active = 1;
        $image_berita = $_FILES['image_berita']['name'];

        $kategori = $this->input->post('kategori');

        if ($image_berita) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']  = 2048;
            $config['upload_path']  = './assets/backend/img/berita_images';
            $config['file_name']  =  time() . "_headline_news";
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image_berita')) {
                // $data = $this->upload->data();
                // $image = $data['file_name'];
                $image_berita_new = $this->upload->data('file_name');
                $this->db->set('image_berita', $image_berita_new);
            } else {
                echo $this->upload->display_errors();
                $this->session->set_flashdata('message_error', 'Can`t Uploaded Because You not selected Image Cover Book');
                redirect('berita');
            }
        }

        $new_str = "";
        for ($i = 0; $i < sizeof($kategori); $i++) {
            $new = $kategori[$i];
            $new_str .= ", $new";
        }
        $new_str = substr($new_str, 1);
        $this->db->set('kategori', $new_str);

        $slug_headline_update = url_title($headline, 'dash', true);

        $this->db->set('headline', $headline);
        $this->db->set('konten', $konten);
        $this->db->set('tanggal_publikasi', $tanggal_publikasi);
        $this->db->set('jam_publikasi', $jam_publikasi);
        $this->db->set('penulis', $penulis);
        $this->db->set('slug_berita', $slug_headline_update);

        $this->db->set('updated_date', $updated_date);
        $this->db->set('updated_by', $updated_by);

        $this->db->set('is_active', $is_active);
        $this->db->where('id', $id);
        $this->db->update('berita');

        // var_dump($this->db->last_query());
        // die;
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->set('is_active', 0);
        $this->db->where('id', $id);
        $this->db->update('berita');
        // var_dump($this->db->last_query());
        // die;
    }
}
