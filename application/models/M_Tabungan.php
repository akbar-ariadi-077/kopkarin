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

    public function get_tabungan_saldo_by_nik($payroll)
    {
        $query = "  SELECT 
                        SUM(CASE
                            WHEN jenis_tabungan = 'Add' THEN 1 * jumlah_tabungan
                            WHEN jenis_tabungan = 'Withdraw' THEN -1 * jumlah_tabungan
                            ELSE 0
                            END) AS jumlah_tabungan
                    FROM tabungan
                    WHERE payroll_anggota = $payroll;
                 ";
        return $this->db->query($query)->result_array();
    }

    public function get_tambah_tabungan_by_nik($payroll)
    {
        return $this->db->get_where('tabungan_tambah', ['status_pengajuan' => 'Diajukan', 'id_anggota' => $payroll])->result_array();
    }

    public function ins_tambah_tabungan($payroll)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'id_anggota' => $payroll,
            'id_tahun' => $this->input->post('tahun_menabung', true),
            'id_bulan' => $this->input->post('bulan_menabung', true),
            'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan', true),
            'jumlah_menabung' => $this->input->post('jumlah_menabung', true),
            'sistem_pemotongan' => $this->input->post('sistem_menabung', true),
            'status_pengajuan' => 'Diajukan',
            'cdt' => $now
        ];
        $this->db->insert('tabungan_tambah', $data_yyyy);
    }

    // public function upd_tambah_tabungan($payroll)
    // {
    //     date_default_timezone_set('Asia/Jakarta');
    //     $now = date('Y-m-d H:i:s');

    //     $data_yyyy = [
    //         'id_anggota' => $payroll,
    //         'id_tahun' => $this->input->post('tahun_pengajuan', true),
    //         'id_bulan' => $this->input->post('bulan_pengajuan', true),
    //         'tanggal_menabung' => $this->input->post('jumlah_pinjaman', true),
    //         'jumlah_menabung' => $this->input->post('jumlah_pinjaman', true),
    //         'status_pengajuan' => 'Diajukan',
    //         'cdt' => $now
    //     ];

    //     $this->db->where('payroll_anggota', $payroll);
    //     $this->db->update('tabungan', $data_yyyy);
    // }
}