<?php
class Sarpras_model extends CI_Model
{
    public function get_sarpras_profile()
    {
        return $this->db->get_where('sarpras', ['is_active' => 1])->row_array();
    }

    public function get_sarpras_struktur()
    {
        return $this->db->get_where('sarpras_struktur', ['is_active' => 1])->result_array();
    }

    public function get_sarpras_fasilitas()
    {
        return $this->db->get_where('sarpras_fasilitas', ['is_active' => 1])->result_array();
    }


    public function isi_profile()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama_sarpras = htmlspecialchars($this->input->post('nama_sarpras'));
        $deskripsi_sarpras = htmlspecialchars($this->input->post('deskripsi_sarpras'));


        //Upload Image
        $program_kerja = $_FILES['program_kerja']['name'];
        $config['allowed_types'] = 'PPT|ppt|pptx|PPTX|pdf|PDF';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($program_kerja) {
            $config['upload_path']  = './assets/file_upload/sarpras/profile/';
            $file_name_underscore = str_replace(' ', '_', $nama_sarpras);
            $config['file_name']  = $file_name_underscore . "_PROKER";
            $this->upload->initialize($config);
            if ($this->upload->do_upload('program_kerja')) {
                $program_kerja_new = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Program Kerja');
            redirect('sarpras_be/index');
        }

        $this->db->set('nama_sarpras', $nama_sarpras);
        $this->db->set('deskripsi_sarpras', $deskripsi_sarpras);
        $this->db->set('program_kerja', $program_kerja_new);
        $this->db->insert('sarpras');
    }

    public function ubah_profile()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $nama_sarpras = htmlspecialchars($this->input->post('nama_sarpras'));
        $deskripsi_sarpras = htmlspecialchars($this->input->post('deskripsi_sarpras'));

        //Upload Image
        $program_kerja = $_FILES['program_kerja']['name'];
        $config['allowed_types'] = 'PPT|ppt|pptx|PPTX|pdf|PDF';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($program_kerja) {
            $config['upload_path']  = './assets/file_upload/sarpras/profile/';
            $file_name_underscore = str_replace(' ', '_', $nama_sarpras);
            $config['file_name']  = $file_name_underscore . "_PROKER_UPDATED";
            $this->upload->initialize($config);
            if ($this->upload->do_upload('program_kerja')) {
                $program_kerja_new = $this->upload->data('file_name');
                $this->db->set('program_kerja', $program_kerja_new);
            } else {
                $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Program Kerja');
                redirect('sarpras_be/index');
            }
        }

        $this->db->set('nama_sarpras', $nama_sarpras);
        $this->db->set('deskripsi_sarpras', $deskripsi_sarpras);
        $this->db->where('id', $id);
        $this->db->update('sarpras');
    }


    //
    // -----------------STRUKTUR-------------------------------------------------------------------------------- 
    // 

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
            $config['upload_path']  = './assets/file_upload/sarpras/struktur/';
            $file_name_underscore = str_replace(' ', '_', $nama);
            $config['file_name']  = $file_name_underscore . "_STRUKTUR";

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
                    $config['source_image'] = './assets/file_upload/sarpras/struktur/' . $foto_source['file_name'];


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

                $config['new_image'] = './assets/file_upload/sarpras/struktur/' . $foto_source['file_name'];
                $foto_new = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
            redirect('sarpras_be/struktur');
        }

        $this->db->set('nama', $nama);
        $this->db->set('divisi', $divisi);
        $this->db->set('foto', $foto_new);
        $this->db->insert('sarpras_struktur');
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
            $config['upload_path']  = './assets/file_upload/sarpras/struktur/';
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
                    $config['source_image'] = './assets/file_upload/sarpras/struktur/' . $foto_source['file_name'];


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
                $config['new_image'] = './assets/file_upload/sarpras/struktur/' . $foto_source['file_name'];
                $foto_new = $this->upload->data('file_name');
                $this->db->set('foto', $foto_new);
            } else {
                $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
                redirect('sarpras_be/struktur');
            }
        }

        $this->db->set('nama', $nama);
        $this->db->set('divisi', $divisi);
        $this->db->where('id', $id);
        $this->db->update('sarpras_struktur');
    }

    public function hapus_struktur()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->set('is_active', 0);
        $this->db->where('id', $id);
        $this->db->update('sarpras_struktur');
    }


    //-----------FASILITAS---------------------------------------------------------------------------------


    public function tambah_fasilitas()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = htmlspecialchars($this->input->post('nama'));

        //Upload Image
        $foto = $_FILES['foto']['name'];
        $config['allowed_types'] = 'JPG|jpg|PNG|png|JPEG|jpeg';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($foto) {
            $config['upload_path']  = './assets/file_upload/sarpras/fasilitas/';
            $file_name_underscore = str_replace(' ', '_', $nama);
            $config['file_name']  = $file_name_underscore . "_FASILITAS";

            $this->upload->initialize($config);
            if ($this->upload->do_upload('foto')) {
                $foto_source = $this->upload->data();
                $filename = $_FILES['foto']['tmp_name'];
                $imgdata = exif_read_data($this->upload->upload_path . $this->upload->file_name, 'IFD0');
                list($width, $height) = getimagesize($filename);
                if ($width >= $height) {
                    $config['width'] = 800;
                } else {
                    $config['height'] = 800;
                }
                $config['master_dim'] = 'auto';

                $this->load->library('image_lib', $config);

                if (!$this->image_lib->resize()) {
                    echo "error";
                } else {

                    $this->image_lib->clear();
                    $config = array();

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/file_upload/sarpras/fasilitas/' . $foto_source['file_name'];


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

                $config['new_image'] = './assets/file_upload/sarpras/fasilitas/' . $foto_source['file_name'];
                $foto_new = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
            redirect('sarpras_be/fasilitas');
        }

        $this->db->set('nama', $nama);
        $this->db->set('foto', $foto_new);
        $this->db->insert('sarpras_fasilitas');
    }

    public function ubah_fasilitas()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $nama = htmlspecialchars($this->input->post('nama'));


        //Upload Image
        $foto = $_FILES['foto']['name'];
        $config['allowed_types'] = 'JPG|jpg|PNG|png|JPEG|jpeg';
        $config['max_size']  = 13000;
        $this->load->library('upload', $config);


        if ($foto) {
            $config['upload_path']  = './assets/file_upload/sarpras/fasilitas/';
            $file_name_underscore = str_replace(' ', '_', $nama);
            $config['file_name']  = $file_name_underscore . "_FASILITAS_UPDATED";
            $this->upload->initialize($config);


            if ($this->upload->do_upload('foto')) {
                $foto_source = $this->upload->data();
                $filename = $_FILES['foto']['tmp_name'];
                $imgdata = exif_read_data($this->upload->upload_path . $this->upload->file_name, 'IFD0');
                list($width, $height) = getimagesize($filename);
                if ($width >= $height) {
                    $config['width'] = 800;
                } else {
                    $config['height'] = 800;
                }
                $config['master_dim'] = 'auto';

                $this->load->library('image_lib', $config);

                if (!$this->image_lib->resize()) {
                    echo "error";
                } else {

                    $this->image_lib->clear();
                    $config = array();

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/file_upload/sarpras/fasilitas/' . $foto_source['file_name'];


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
                $config['new_image'] = './assets/file_upload/sarpras/fasilitas/' . $foto_source['file_name'];
                $foto_new = $this->upload->data('file_name');
                $this->db->set('foto', $foto_new);
            } else {
                $this->session->set_flashdata('message_error', 'Kamu Belum Memilih File Foto');
                redirect('sarpras_be/fasilitas');
            }
        }

        $this->db->set('nama', $nama);
        $this->db->where('id', $id);
        $this->db->update('sarpras_fasilitas');
    }

    public function hapus_fasilitas()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->set('is_active', 0);
        $this->db->where('id', $id);
        $this->db->update('sarpras_fasilitas');
    }
}
