<?php

class M_Pengurus extends CI_model
{
    public function get_all_pengurus()
    {
        return $this->db->get_where('pengurus')->result_array();
    }

    public function get_all_pengurus_active()
    {
        $query = $this->db->select('p.*')
            ->from('pengurus p')
            ->where('p.status_anggota', 1)
            ->get();
        return $query->result_array();
    }

    public function get_pengurus_by_id_res($id)
    {
        $query = $this->db->select('p.*, j.*')
            ->from('pengurus p')
            ->join('jabatan_pengurus j', 'p.jabatan_pengurus = j.id_jabatan')
            ->join('user u', 'p.id_pengurus = u.id_pengurus')
            ->where('u.id', $id)
            ->get();
        return $query->result_array();
    }

    public function get_pengurus_by_id_row($id)
    {
        $query = $this->db->select('p.*, j.*')
            ->from('pengurus p')
            ->join('jabatan_pengurus j', 'p.jabatan_pengurus = j.id_jabatan')
            ->join('user u', 'p.id_pengurus = u.id_pengurus')
            ->where('u.id', $id)
            ->get();
        return $query->row_array();
    }
}