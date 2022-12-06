<?php

class Kategori_model extends CI_Model
{
    public function get_kategori()
    {
        return $this->db->get_where('kategori', ['is_active' => 1])->result_array();
    }

    public function count_kategori()
    {
        return $this->db->get_where('kategori', ['is_active' => 1])->num_rows();
    }

    public function get_role_id($id)
    {
        if ($id == NULL) {
            return $this->db->get_where('kategori', ['is_active' => 1])->result_array();
        } else {
            return $this->db->get_where('kategori', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
        $data = [
            'kategori' => htmlspecialchars($this->input->post('kategori')),
            'is_active' => 1,
        ];
        $this->db->insert('kategori', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $kategori = htmlspecialchars($this->input->post('kategori'));

        $this->db->set('kategori', $kategori);
        $this->db->where('id', $id);
        $this->db->update('kategori');
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->set('is_active', 0);
        $this->db->where('id', $id);
        $this->db->update('kategori');
    }
}
