<?php

class Teams_model extends CI_Model
{
    public function get_teams()
    {
        return $this->db->get_where('teams', ['is_active' => 1])->result_array();
    }

    public function tambah_teams()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = htmlspecialchars($this->input->post('nama'));
        $bagian = htmlspecialchars($this->input->post('bagian'));


        //Upload Image
        $foto = $_FILES['foto']['name'];
        $config['allowed_types'] = 'JPG|jpg|PNG|png|JPEG|jpeg';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($foto) {
            $config['upload_path']  = './assets/file_upload/teams/';
            $file_name_underscore = str_replace(' ', '_', $nama);
            $config['file_name']  = $file_name_underscore . "_TEAMS";
            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto')) {
                $foto_source = $this->upload->data();
                $filename = $_FILES['foto']['tmp_name'];
                $imgdata = exif_read_data($this->upload->upload_path . $this->upload->file_name, 'IFD0');
                list($width, $height) = getimagesize($filename);
                if ($width >= $height) {
                    $config['width'] = 800;
                } else {
                    $config['height'] = 400;
                }
                $config['master_dim'] = 'auto';

                $this->load->library('image_lib', $config);

                if (!$this->image_lib->resize()) {
                    echo "error";
                } else {

                    $this->image_lib->clear();
                    $config = array();

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/file_upload/teams/' . $foto_source['file_name'];


                    switch ($imgdata['Orientation']) {
                        case 3:
                            $config['rotation_angle'] = '180';
                            break;
                        case 6:
                            $config['rotation_angle'] = '270';
                            break;
                        case 8:
                            $config['rotation_angle'] = '90';
                            break;
                    }

                    $this->image_lib->initialize($config);
                    $this->image_lib->rotate();
                }
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '85%';
                $config['new_image'] = './assets/file_upload/teams/' . $foto_source['file_name'];
                $foto_new = $this->upload->data('file_name');
                $this->db->set('foto', $foto_new);
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
            redirect('teams_be/struktur');
        }

        $this->db->set('nama', $nama);
        $this->db->set('bagian', $bagian);

        $this->db->insert('teams');
    }

    public function ubah_teams()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $nama = htmlspecialchars($this->input->post('nama'));
        $bagian = htmlspecialchars($this->input->post('bagian'));


        //Upload Image
        $foto = $_FILES['foto']['name'];
        $config['allowed_types'] = 'JPG|jpg|PNG|png|JPEG|jpeg';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($foto) {
            $config['upload_path']  = './assets/file_upload/teams/';
            $file_name_underscore = str_replace(' ', '_', $nama);
            $config['file_name']  = $file_name_underscore . "_TEAMS_UPDATED";
            $this->upload->initialize($config);


            if ($this->upload->do_upload('foto')) {
                $foto_source = $this->upload->data();
                $filename = $_FILES['foto']['tmp_name'];
                $imgdata = exif_read_data($this->upload->upload_path . $this->upload->file_name, 'IFD0');
                list($width, $height) = getimagesize($filename);
                if ($width >= $height) {
                    $config['width'] = 800;
                } else {
                    $config['height'] = 400;
                }
                $config['master_dim'] = 'auto';

                $this->load->library('image_lib', $config);

                if (!$this->image_lib->resize()) {
                    echo "error";
                } else {

                    $this->image_lib->clear();
                    $config = array();

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/file_upload/teams/' . $foto_source['file_name'];


                    switch ($imgdata['Orientation']) {
                        case 3:
                            $config['rotation_angle'] = '180';
                            break;
                        case 6:
                            $config['rotation_angle'] = '270';
                            break;
                        case 8:
                            $config['rotation_angle'] = '90';
                            break;
                    }

                    $this->image_lib->initialize($config);
                    $this->image_lib->rotate();
                }
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '85%';
                $config['new_image'] = './assets/file_upload/teams/' . $foto_source['file_name'];
                $foto_new = $this->upload->data('file_name');
                $this->db->set('foto', $foto_new);
            } else {
                $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
                redirect('teams_be/struktur');
            }
        }

        $this->db->set('nama', $nama);
        $this->db->set('bagian', $bagian);
        $this->db->where('id', $id);
        $this->db->update('teams');
    }

    public function hapus_teams()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->set('is_active', 0);
        $this->db->where('id', $id);
        $this->db->update('teams');
    }
}
