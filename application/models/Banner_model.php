<?php

class Banner_model extends CI_Model
{
    public function get_banner_header()
    {
        return $this->db->get_where('banner', ['is_active' => 1])->result_array();
    }

    public function tambah()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');
        $nama_banner = htmlspecialchars($this->input->post('nama_banner'));

        $img_banner = $_FILES['img_banner']['name'];

        if ($img_banner) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png|JPEG|JPG|PNG';
            $config['max_size']  = 4048;
            $config['upload_path']  = './assets/backend/img/banner_header';
            $config['file_name']  =  time() . "_banner_header";
            // $config['file_name']  =  $isbn . "_Book_cover";
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('img_banner')) {
                $img_banner_new = $this->upload->data('file_name');
                // $foto_leader_new = $this->upload->data('file_name');
                $this->db->set('img_banner', $img_banner_new);
            } else {
                echo $this->upload->display_errors();
                $this->session->set_flashdata('message_error', 'Can`t Uploaded Because You not selected Image ');
                redirect('banner_header');
            }
        } else {
            $this->session->set_flashdata('message_error', 'Can`t Uploaded Because You not selected Image Banner');
            redirect('banner_header');
        }
        $this->db->set('nama_banner', $nama_banner);
        $this->db->insert('banner');
    }


    public function ubah()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');
        $id = htmlspecialchars($this->input->post('id'));
        $nama_banner = htmlspecialchars($this->input->post('nama_banner'));

        $img_banner = $_FILES['img_banner']['name'];
        if ($img_banner) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png|JPEG|JPG|PNG';
            $config['max_size']  = 4048;
            $config['upload_path']  = './assets/backend/img/banner_header';
            $config['file_name']  =  time() . "_banner_header_updated";
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img_banner')) {
                // $data = $this->upload->data();
                // $image = $data['file_name'];
                $img_banner_new = $this->upload->data('file_name');
                $this->db->set('img_banner', $img_banner_new);
            } else {
                echo $this->upload->display_errors();
                $this->session->set_flashdata('message_error', 'Can`t Uploaded Because You not selected Image Banner');
                redirect('banner_header');
            }
        }

        $this->db->set('nama_banner', $nama_banner);

        $this->db->where('id', $id);
        $this->db->update('banner');

        // var_dump($this->db->last_query());
        // die;
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->where('id', $id);
        $this->db->set('is_active', 0);
        $this->db->update('banner');
    }
}
