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

    public function tambah()
    {
        $data = [
            'type' => htmlspecialchars($this->input->post('type')),
            'desc' => htmlspecialchars($this->input->post('desc')),
        ];
        $this->db->insert('role', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $type = htmlspecialchars($this->input->post('type'));
        $desc = htmlspecialchars($this->input->post('desc'));

        $this->db->set('type', $type);
        $this->db->set('desc', $desc);
        $this->db->where('id', $id);
        $this->db->update('role');
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));

        $this->db->where('id', $id);
        $this->db->delete('role');
    }
}
