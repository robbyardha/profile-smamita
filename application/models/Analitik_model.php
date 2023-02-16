<?php

class Analitik_model extends CI_Model
{
    public function get_analitik_traffic()
    {
        return $this->db->get('analytics')->result_array();
    }
}
