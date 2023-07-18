<?php

class M_Pinjaman extends CI_model
{
    public function get_all_pinjaman()
    {
        return $this->db->get_where('angsuran')->result_array();
    }

    public function get_pinjaman_by_nik($payroll)
    {
        $query = $this->db->select('p.angsuran_ke, b.txt_pr_id_bulan, t.text_tahun, p.angsuran_pokok, p.angsuran_bunga')
            ->from('angsuran p')
            ->join('bulan b', 'p.bulan_angsuran = b.id_bulan')
            ->join('tahun t', 'p.tahun_angsuran = t.id_tahun')
            ->where('p.payroll_anggota', $payroll)
            ->get();
        return $query->result_array();
    }
}