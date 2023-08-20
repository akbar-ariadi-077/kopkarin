<?php

class M_Bulan extends CI_model
{
    public function get_all_bulan()
    {
        return $this->db->get_where('bulan')->result_array();
    }

    public function get_all_bulan_active()
    {
        return $this->db->get_where('bulan', ['status_bulan' => 1])->result_array();
    }

    public function get_bulan_by_int($int)
    {
        return $this->db->get_where('bulan', ['int2_bulan' => $int])->row_array();
    }

    public function get_bulan_by_id($id)
    {
        return $this->db->get_where('bulan', ['id_bulan' => $id])->row_array();
    }
}