<?php

class Berita_model extends CI_Model
{
    public function get_berita()
    {
        return $this->db->get_where('berita', ['is_active' => 1])->result_array();
    }

    public function get_berita_id($id)
    {
        if ($id == NULL) {
            return $this->db->get_where('berita', ['is_active' => 1])->result_array();
        } else {
            return $this->db->get_where('berita', ['id' => $id, 'is_active' => 1])->row_array();
        }
    }

    public function count_berita_active()
    {
        return $this->db->get_where('berita', ['is_active' => 1])->num_rows();
    }

    public function join_buku_penerbit_pencetak()
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('penerbit', 'penerbit.id = buku.penerbit_id');
        $this->db->join('pencetak', 'pencetak.id = buku.pencetak_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function join_buku_penerbit_pencetak_new()
    {
        $this->db->select('buku.id AS buku_id_asli, buku.judul, buku.penulis, buku.jumlah_halaman, buku.isbn, buku.edisi, buku.penerbit_id, buku.tanggal_terbit, buku.pencetak_id, buku.tanggal_cetak, buku.kategori, buku.sinopsis, buku.cover_illustrator_by, buku.cover_img, buku.is_active AS buku_active, buku.created_date, buku.update_date, penerbit.id as penerbit_id_asli, penerbit.nama_penerbit, penerbit.alamat_penerbit, penerbit.provinsi_penerbit, penerbit.kota_penerbit, penerbit.kode_pos_penerbit, penerbit.email_penerbit, penerbit.no_tlp_penerbit, penerbit.website_penerbit, penerbit.is_active AS penerbit_active, penerbit.created_date AS penerbit_created_dat, pencetak.id AS pencetak_id_asli, pencetak.nama_pencetak, pencetak.email_pencetak, pencetak.no_tlp_pencetak, pencetak.alamat_pencetak, pencetak.is_active AS pencetak_active, pencetak.created_date AS pencetak_created_date');
        $this->db->from('buku');
        $this->db->join('penerbit', 'penerbit.id = buku.penerbit_id');
        $this->db->join('pencetak', 'pencetak.id = buku.pencetak_id');
        $this->db->where('buku.is_active', 1);
        $query = $this->db->get();
        return $query->result_array();
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
        $this->db->set('image_berita', $image_berita_new);
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
