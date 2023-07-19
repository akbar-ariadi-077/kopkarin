<?php

class M_Tabungan extends CI_model
{
    public function get_all_tabungan()
    {
        return $this->db->get_where('tabungan')->result_array();
    }

    public function get_tabungan_by_nik($payroll)
    {
        $query = "  SELECT b.txt_pr_id_bulan, t.text_tahun, p.tanggal_tabungan, a.payroll_anggota,
                    SUM(CASE
                        WHEN jenis_tabungan = 'Add' THEN 1 * jumlah_tabungan
                        ELSE 0
                    END) AS tabungan_anggota,
                    SUM(CASE
                        WHEN jenis_tabungan = 'Withdraw' THEN -1 * jumlah_tabungan
                        ELSE 0
                    END) AS tabungan_anggota_diambil
                    FROM tabungan p
                    JOIN bulan b ON p.bulan_tabungan = b.id_bulan
                    JOIN tahun t ON p.tahun_tabungan = t.id_tahun
                    JOIN anggota a ON p.payroll_anggota = a.id_anggota
                    JOIN metode_bayar m ON p.metode_bayar = m.id_paytod
                    WHERE p.payroll_anggota = $payroll
                    GROUP BY b.txt_pr_id_bulan, t.text_tahun, a.payroll_anggota
                    ORDER BY p.tahun_tabungan, p.bulan_tabungan;
                 ";
        return $this->db->query($query)->result_array();
    }
}