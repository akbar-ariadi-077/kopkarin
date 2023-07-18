<?php

class M_Pengajuan extends CI_model
{
    public function get_all_pengajuan()
    {
        return $this->db->get_where('pengajuan')->result_array();
    }

    public function get_pengajuan_by_nik($payroll)
    {
        $query = $this->db->select('p.jumlah_pinjaman, p.bunga_pinjaman, p.bunga_pinjaman_persen, b.txt_pr_id_bulan, t.text_tahun, p.jangka_waktu, p.status_pinjaman, p.alasan_pinjaman')
            ->from('pengajuan p')
            ->join('bulan b', 'p.bulan_pengajuan = b.id_bulan')
            ->join('tahun t', 'p.tahun_pengajuan = t.id_tahun')
            ->where('p.payroll_anggota', $payroll)
            ->get();
        return $query->row_array();
    }
}