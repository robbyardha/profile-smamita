<?php

class Kesiswaan_model extends CI_Model
{
    public function get_kesiswaan_profile()
    {
        return $this->db->get_where('kesiswaan', ['is_active' => 1])->row_array();
    }

    public function get_kesiswaan_struktur()
    {
        return $this->db->get_where('kesiswaan_struktur', ['is_active' => 1])->result_array();
    }

    public function isi_profile()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama_kesiswaan = htmlspecialchars($this->input->post('nama_kesiswaan'));
        $deskripsi_kesiswaan = htmlspecialchars($this->input->post('deskripsi_kesiswaan'));


        //Upload Image
        $program_kerja = $_FILES['program_kerja']['name'];
        $config['allowed_types'] = 'PPT|ppt|pptx|PPTX|pdf|PDF';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($program_kerja) {
            $config['upload_path']  = './assets/file_upload/kesiswaan/profile/';
            $file_name_underscore = str_replace(' ', '_', $nama_kesiswaan);
            $config['file_name']  = $file_name_underscore . "_PROKER";
            $this->upload->initialize($config);
            if ($this->upload->do_upload('program_kerja')) {
                $program_kerja_new = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Program Kerja');
            redirect('kesiswaan_be/index');
        }

        $this->db->set('nama_kesiswaan', $nama_kesiswaan);
        $this->db->set('deskripsi_kesiswaan', $deskripsi_kesiswaan);
        $this->db->set('program_kerja', $program_kerja_new);
        $this->db->insert('kesiswaan');
    }

    public function ubah_profile()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $nama_kesiswaan = htmlspecialchars($this->input->post('nama_kesiswaan'));
        $deskripsi_kesiswaan = htmlspecialchars($this->input->post('deskripsi_kesiswaan'));


        //Upload Image
        $program_kerja = $_FILES['program_kerja']['name'];
        $config['allowed_types'] = 'PPT|ppt|pptx|PPTX|pdf|PDF';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($program_kerja) {
            $config['upload_path']  = './assets/file_upload/kesiswaan/profile/';
            $file_name_underscore = str_replace(' ', '_', $nama_kesiswaan);
            $config['file_name']  = $file_name_underscore . "_PROKER_UPDATED";
            $this->upload->initialize($config);
            if ($this->upload->do_upload('program_kerja')) {
                $program_kerja_new = $this->upload->data('file_name');
                $this->db->set('program_kerja', $program_kerja_new);
            } else {
                $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Program Kerja');
                redirect('kesiswaan_be/index');
            }
        }

        $this->db->set('nama_kesiswaan', $nama_kesiswaan);
        $this->db->set('deskripsi_kesiswaan', $deskripsi_kesiswaan);
        $this->db->where('id', $id);
        $this->db->update('kesiswaan');
    }

    public function tambah_struktur()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = htmlspecialchars($this->input->post('nama'));
        $divisi = htmlspecialchars($this->input->post('divisi'));


        //Upload Image
        $foto = $_FILES['foto']['name'];
        $config['allowed_types'] = 'JPG|jpg|PNG|png|JPEG|jpeg';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($foto) {
            $config['upload_path']  = './assets/file_upload/kesiswaan/struktur/';
            $file_name_underscore = str_replace(' ', '_', $nama);
            $config['file_name']  = $file_name_underscore . "_STRUKTUR";

            $this->upload->initialize($config);

            // if (!empty($_FILES['filefoto']['name'])) {
            // } else {
            //     $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
            //     redirect('kurikulum_be/struktur');
            // }

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
                    $config['source_image'] = './assets/file_upload/kesiswaan/struktur/' . $foto_source['file_name'];


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

                // $config['image_library'] = 'gd2';

                // $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '85%';
                // $config['width'] = 600;
                // $config['height'] = 400;
                // $config['orientation'] = 'portrait';
                // $config['rotation_angle'] = '270';
                // $config['rotation_angle']='180';
                // $config['rotation_angle']='90';
                // $config['master_dim'] = 'auto';
                // $config['master_dim'] = 'height';
                $config['new_image'] = './assets/file_upload/kesiswaan/struktur/' . $foto_source['file_name'];
                // $this->load->library('image_lib', $config);
                // $this->image_lib->resize();
                // $foto_resized = $foto_source['file_name'];
                $foto_new = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
            redirect('kesiswaan_be/struktur');
        }

        $this->db->set('nama', $nama);
        $this->db->set('divisi', $divisi);
        $this->db->set('foto', $foto_new);
        $this->db->insert('kesiswaan_struktur');
    }

    public function ubah_struktur()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $nama = htmlspecialchars($this->input->post('nama'));
        $divisi = htmlspecialchars($this->input->post('divisi'));


        //Upload Image
        $foto = $_FILES['foto']['name'];
        $config['allowed_types'] = 'JPG|jpg|PNG|png|JPEG|jpeg';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($foto) {
            $config['upload_path']  = './assets/file_upload/kesiswaan/struktur/';
            $file_name_underscore = str_replace(' ', '_', $nama);
            $config['file_name']  = $file_name_underscore . "_STRUKTUR_UPDATED";
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
                    $config['source_image'] = './assets/file_upload/kesiswaan/struktur/' . $foto_source['file_name'];


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
                $config['new_image'] = './assets/file_upload/kesiswaan/struktur/' . $foto_source['file_name'];
                $foto_new = $this->upload->data('file_name');
                $this->db->set('foto', $foto_new);
            } else {
                $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
                redirect('kesiswaan_be/struktur');
            }


            // if ($this->upload->do_upload('foto')) {
            //     $foto_new = $this->upload->data('file_name');
            //     $this->db->set('foto', $foto_new);
            // } else {
            //     $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
            //     redirect('kurikulum_be/struktur');
            // }
        }

        $this->db->set('nama', $nama);
        $this->db->set('divisi', $divisi);
        $this->db->where('id', $id);
        $this->db->update('kesiswaan_struktur');
    }

    public function hapus_struktur()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->set('is_active', 0);
        $this->db->where('id', $id);
        $this->db->update('kesiswaan_struktur');
    }
}
