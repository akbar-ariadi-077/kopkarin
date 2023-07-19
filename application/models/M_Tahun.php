<?php

class M_Tahun extends CI_model
{
    public function get_all_tahun()
    {
        return $this->db->get_where('tahun')->result_array();
    }

    public function get_all_tahun_active()
    {
        return $this->db->get_where('tahun', ['status_tahun' => 1])->result_array();
    }

    public function get_tahun_by_int($int)
    {
        return $this->db->get_where('tahun', ['int_tahun' => $int])->row_array();
    }

    public function get_tahun_by_id($id)
    {
        return $this->db->get_where('tahun', ['id_tahun' => $id])->row_array();
    }

    public function ins_new_year()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'int_tahun' => $this->input->post('yyyy', true),
            'text_tahun' => $this->input->post('yyyy', true),
            'status_tahun' => 1,
            'cdt' => $now
        ];
        $this->db->insert('tahun', $data_yyyy);
    }

    public function upd_year($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'int_tahun' => $this->input->post('yyyy', true),
            'text_tahun' => $this->input->post('yyyy', true),
            'status_tahun' => 1,
            'cdt' => $now
        ];

        $this->db->where('id_tahun', $id);
        $this->db->update('tahun', $data_yyyy);
    }

    public function del_year($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'status_tahun' => 0,
            'cdt' => $now
        ];

        $this->db->where('id_tahun', $id);
        $this->db->update('tahun', $data_yyyy);
    }
}