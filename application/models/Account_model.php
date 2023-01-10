<?php

class Account_model extends CI_Model

{
    public function get_account()
    {
        return $this->db->get_where('akun', ['is_active' => 1])->result_array();
    }

    public function get_account_id($id)
    {
        if ($id == NULL) {
            return $this->db->get_where('akun', ['is_active' => 1])->result_array();
        } else {
            return $this->db->get_where('akun', ['id' => $id, 'is_active' => 1])->row_array();
        }
    }

    public function tambah()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'nama' => strtoupper(htmlspecialchars($this->input->post('nama'))),
            'username' => htmlspecialchars($this->input->post('username')),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => htmlspecialchars($this->input->post('role_id')),
            'is_active' => 1,
            'created_date' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('akun', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $nama = strtoupper(htmlspecialchars($this->input->post('nama')));
        $username = htmlspecialchars($this->input->post('username'));
        $email = htmlspecialchars($this->input->post('email'));
        $role_id = htmlspecialchars($this->input->post('role_id'));
        $this->db->set('nama', $nama);
        $this->db->set('username', $username);
        $this->db->set('email', $email);
        $this->db->set('role_id', $role_id);
        $this->db->where('id', $id);
        $this->db->update('akun');
    }

    public function update_password()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $this->db->set('password', $password);
        $this->db->where('id', $id);
        $this->db->update('akun');
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->set('is_active', 0);
        $this->db->where('id', $id);
        $this->db->update('akun');
    }

    public function import()
    {
        // $this->db->empty_table('tb_absen');
        date_default_timezone_set('Asia/Jakarta');
        $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        if (isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
            $arr_file = explode('.', $_FILES['upload_file']['name']);
            $extension = end($arr_file);
            if ('csv' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            $data = [];
            for ($i = 1; $i < count($sheetData); $i++) {
                $dataBuffer = [
                    // 'id' => $sheetData[$i][0],
                    'kode' => $sheetData[$i][1],
                    'card_number' => $sheetData[$i][2],
                    'password' => password_hash($sheetData[$i][3], PASSWORD_DEFAULT),
                    'nama' => strtoupper($sheetData[$i][4]),
                    'role_id' => $sheetData[$i][5],
                    'is_active' => 1,
                    'created_date' => date('Y-m-d H:i:s'),

                ];
                array_push($data, $dataBuffer);
            }
            $this->db->insert_batch('akun', $data);
            $this->session->set_flashdata('message', 'Data Berhasil diimport');
            redirect('access/account');
        }
    }
}
