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

    public function get_sisa_pinjaman_by_nik($payroll)
    {
        $query = $this->db->select('p.jumlah_pinjaman - SUM(a.angsuran_pokok) AS sisa_pinjaman')
            ->from('angsuran a')
            ->join('pengajuan p', 'a.id_pengajuan = p.id')
            ->where('a.payroll_anggota', $payroll)
            ->where('a.status_pinjaman', 'Belum Lunas')
            ->get();
        return $query->result_array();
    }





    // PINJAMAN BARANG
    public function get_all_pinjaman_barang()
    {
        return $this->db->get_where('pinjaman_barang')->result_array();
    }

    public function get_pinjaman_barang_by_nik($payroll)
    {
        $query = $this->db->select('p.angsuran_ke, b.txt_pr_id_bulan, t.text_tahun, p.angsuran_pokok, p.angsuran_bunga, p.nama_barang')
            ->from('pinjaman_barang p')
            ->join('bulan b', 'p.bulan_pinjaman = b.id_bulan')
            ->join('tahun t', 'p.tahun_pinjaman = t.id_tahun')
            ->where('p.payroll_anggota', $payroll)
            ->get();
        return $query->result_array();
    }

    public function get_sisa_pinjaman_barang_by_nik($payroll)
    {
        $query = $this->db->select('p.jumlah_pinjaman - SUM(a.angsuran_pokok) AS sisa_pinjaman')
            ->from('pinjaman_barang a')
            ->join('pengajuan_barang p', 'a.id_pengajuan = p.id')
            ->where('a.payroll_anggota', $payroll)
            ->where('a.status_pinjaman', 'Belum Lunas')
            ->get();
        return $query->result_array();
    }
}