<?php

class M_Anggota extends CI_model
{
    public function get_all_anggota()
    {
        return $this->db->get_where('anggota')->result_array();
    }

    public function get_all_anggota_active()
    {
        $query = $this->db->select('a.*, d.nama_dept, b.nama_bank')
            ->from('anggota a')
            ->join('department d', 'a.dept_anggota = d.id_dept')
            ->join('bank b', 'a.bank_anggota = b.id_bank')
            ->where('a.status_anggota', 1)
            ->get();
        return $query->result_array();
    }

    public function get_anggota_by_id_res($id)
    {
        $query = $this->db->select('a.*, d.nama_dept, b.nama_bank')
            ->from('anggota a')
            ->join('department d', 'a.dept_anggota = d.id_dept')
            ->join('bank b', 'a.bank_anggota = b.id_bank')
            ->join('user u', 'a.id_anggota = u.id_anggota')
            ->where('u.id', $id)
            ->get();
        return $query->result_array();
    }

    public function get_anggota_by_id_row($id)
    {
        $query = $this->db->select('a.*, d.nama_dept, b.nama_bank')
            ->from('anggota a')
            ->join('department d', 'a.dept_anggota = d.id_dept')
            ->join('bank b', 'a.bank_anggota = b.id_bank')
            ->join('user u', 'a.id_anggota = u.id_anggota')
            ->where('u.id', $id)
            ->get();
        return $query->row_array();
    }

    public function ins_new_anggota()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'nama_anggota' => $this->input->post('nama', true),
            // 'nomor_anggota' => $this->input->post('nomor', true),
            'nomor_anggota' => '0',
            'payroll_anggota' => $this->input->post('payroll', true),
            'dept_anggota' => $this->input->post('dept', true),
            'simpok_anggota' => $this->input->post('simpok', true),
            'simwa_anggota' => $this->input->post('simwa', true),
            'bank_anggota' => $this->input->post('bank', true),
            'rekening_anggota' => $this->input->post('rekening', true),
            'cabang_bank' => $this->input->post('cabang', true),
            'status_anggota' => 1,
            'cdt' => $now
        ];
        $this->db->insert('anggota', $data_yyyy);
    }

    public function upd_anggota($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'nama_anggota' => $this->input->post('nama', true),
            // 'nomor_anggota' => $this->input->post('nomor', true),
            'nomor_anggota' => '0',
            'payroll_anggota' => $this->input->post('payroll', true),
            'dept_anggota' => $this->input->post('dept', true),
            'simpok_anggota' => $this->input->post('simpok', true),
            'simwa_anggota' => $this->input->post('simwa', true),
            'bank_anggota' => $this->input->post('bank', true),
            'rekening_anggota' => $this->input->post('rekening', true),
            'cabang_bank' => $this->input->post('cabang', true),
            'status_anggota' => $this->input->post('status', true),
            'cdt' => $now
        ];

        $this->db->where('id_anggota', $id);
        $this->db->update('anggota', $data_yyyy);
    }

    public function del_anggota($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'status_anggota' => 0,
            'cdt' => $now
        ];

        $this->db->where('id_anggota', $id);
        $this->db->update('anggota', $data_yyyy);
    }



    public function get_all_simpanan_active()
    {
        $query = $this->db->select('s.jenis_simpanan, s.jumlah_simpanan, t.text_tahun, b.txt_pr_id_bulan, a.payroll_anggota, a.nama_anggota')
            ->from('simpok_simwa s')
            ->join('tahun t', 's.tahun_simpanan = t.id_tahun')
            ->join('bulan b', 's.bulan_simpanan = b.id_bulan')
            ->join('anggota a', 's.payroll_simpanan = a.id_anggota')
            ->where('s.status_data', 1)
            ->get();
        return $query->result_array();
    }

    public function get_all_simpanan_active_anggota_only()
    {
        $query = $this->db->select('t.text_tahun, a.payroll_anggota, a.nama_anggota, SUM(s.jumlah_simpanan) AS jumlah_simpanan')
            ->distinct()
            ->from('simpok_simwa s')
            ->join('tahun t', 's.tahun_simpanan = t.id_tahun')
            ->join('bulan b', 's.bulan_simpanan = b.id_bulan')
            ->join('anggota a', 's.payroll_simpanan = a.id_anggota')
            ->where('s.status_data', 1)
            ->group_by(array('t.text_tahun', 'a.payroll_anggota', 'a.nama_anggota'))
            ->get();
        return $query->result_array();
    }

    public function get_simwa_by_anggota($payroll)
    {
        $query = "SELECT 
                    CASE
                        WHEN jenis_transaksi = 'Add' 		THEN  SUM(jumlah_simpanan)
                        WHEN jenis_transaksi = 'Withdraw' 	THEN -SUM(jumlah_simpanan)
                        ELSE 0
                    END AS simpanan_wajib
                    FROM simpok_simwa
                    WHERE jenis_simpanan = 'Simpanan Wajib' AND payroll_simpanan = $payroll;
                 ";
        return $this->db->query($query)->row_array();
    }

    public function get_simpok_by_anggota($payroll)
    {
        $query = "SELECT 
                    CASE
                        WHEN jenis_transaksi = 'Add' 		THEN  SUM(jumlah_simpanan)
                        WHEN jenis_transaksi = 'Withdraw' 	THEN -SUM(jumlah_simpanan)
                        ELSE 0
                    END AS simpanan_pokok
                    FROM simpok_simwa
                    WHERE jenis_simpanan = 'Simpanan Pokok' AND payroll_simpanan = $payroll;
                 ";
        return $this->db->query($query)->row_array();
    }

    // SELECT 
// CASE
// 	WHEN jenis_simpanan = 'Simpanan Wajib' THEN
//     	CASE
//             WHEN jenis_transaksi = 'Add' THEN SUM(jumlah_simpanan)
//             WHEN jenis_transaksi = 'Withdraw' THEN -SUM(jumlah_simpanan)
//             ELSE 0
// 		END
// 	WHEN jenis_simpanan = 'Simpanan Pokok' THEN
//     	CASE
//             WHEN jenis_transaksi = 'Add' THEN SUM(jumlah_simpanan)
//             WHEN jenis_transaksi = 'Withdraw' THEN -SUM(jumlah_simpanan)
//             ELSE 0
// 		END
// 	ELSE 0
// END AS simpanan
// FROM simpok_simwa
// WHERE payroll_simpanan = 1;
}