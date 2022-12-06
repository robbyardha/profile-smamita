<?php

class Role_model extends CI_Model
{
    public function get_role()
    {
        return $this->db->get('role')->result_array();
    }

    public function get_role_id($id)
    {
        if ($id == NULL) {
            return $this->db->get('role')->result_array();
        } else {
            return $this->db->get_where('role', ['id' => $id])->row_array();
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
