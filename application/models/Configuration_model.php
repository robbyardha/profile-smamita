<?php

class Configuration_model extends CI_Model
{
    public function get_config()
    {
        return $this->db->get('configuration')->row_array();
    }


    public function update_data()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'name' => htmlspecialchars($this->input->post('name')),
            'company' => htmlspecialchars($this->input->post('company')),
            'about' => htmlspecialchars($this->input->post('about')),
            'phone_number' => htmlspecialchars($this->input->post('phone_number')),
            'email' => htmlspecialchars($this->input->post('email')),
            'tagline' => htmlspecialchars($this->input->post('tagline')),
        ];
        $this->db->where('id', $id);
        $this->db->update('configuration', $data);
    }

    public function update_logo()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $logo = $_FILES['logo']['name'];

        if ($logo) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']  = 3500;
            $config['upload_path']  = './assets/backend/img/logo_company/';
            $config['file_name']  =  time() . "_logo_updated";
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                // $data = $this->upload->data();
                // $image = $data['file_name'];
                $new_logo = $this->upload->data('file_name');
                $this->db->set('logo', $new_logo);
            } else {
                echo $this->upload->display_errors();
                $this->session->set_flashdata('message_error', 'Can`t Uploaded Because You not selected Image Cover Book');
                redirect('configuration');
            }
        }

        $this->db->where('id', $id);
        $this->db->update('configuration');
    }

    // public function tambah()
    // {
    //     $data = [
    //         'type' => htmlspecialchars($this->input->post('type')),
    //         'desc' => htmlspecialchars($this->input->post('desc')),
    //     ];
    //     $this->db->insert('role', $data);
    // }


    public function get_direktur()
    {
        return $this->db->get('konfigurasi_direktur')->row_array();
    }

    public function update_data_direktur()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $nama_direktur = htmlspecialchars($this->input->post('nama_direktur'));
        $kata_pengantar = htmlspecialchars($this->input->post('kata_pengantar'));

        $this->db->set('nama_direktur', $nama_direktur);
        $this->db->set('kata_pengantar', $kata_pengantar);
        $this->db->where('id', $id);
        $this->db->update('konfigurasi_direktur');
    }

    public function update_foto_direktur()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $foto_direktur = $_FILES['foto_direktur']['name'];

        if ($foto_direktur) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png|JPG|JPEG|PNG';
            $config['max_size']  = 8000;
            $config['upload_path']  = './assets/backend/img/foto_direktur/';
            $config['file_name']  =  time() . "_foto_updated";
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_direktur')) {
                // $data = $this->upload->data();
                // $image = $data['file_name'];
                $foto_direktur_new = $this->upload->data('file_name');
                $this->db->set('img_direktur', $foto_direktur_new);
            } else {
                echo $this->upload->display_errors();
                $this->session->set_flashdata('message_error', 'Can`t Uploaded Because You not selected Image Foto Direktur');
                redirect('configuration');
            }
        }

        $this->db->where('id', $id);
        $this->db->update('konfigurasi_direktur');
    }
}
