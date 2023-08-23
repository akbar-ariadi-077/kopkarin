<?php

class M_Usaha extends CI_model
{
    public function get_all_customer()
    {
        return $this->db->get_where('usaha_customer')->result_array();
    }

    public function get_all_customer_active()
    {
        return $this->db->get_where('usaha_customer', ['status' => 1])->result_array();
    }

    public function get_customer_by_id_row($id)
    {
        return $this->db->get_where('usaha_customer', ['id_customer' => $id])->row_array();
    }

    public function get_customer_by_id_res($id)
    {
        return $this->db->get_where('usaha_customer', ['id_customer' => $id])->result_array();
    }

    public function update_pp_customer($idu, $file_name)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_docu = [
            'photo_profile' => $file_name,
            'photo_size' => $_FILES['foto_profil']['size'],
            'cdt' => $now
        ];
        $this->db->where('id', $idu);
        $this->db->update('user', $data_docu);
    }





    public function get_usaha_transaksi_by_customer($id)
    {
        $query = ("SELECT tanggal_transaksi, quantity_transaksi, harga_satuan, jumlah, keterangan_transaksi, jenis_transaksi FROM usaha_transaksi WHERE id_usaha_customer = $id AND status_transaksi = 1");
        return $this->db->query($query)->result_array();
    }





    public function get_anggota_by_id_row($id)
    {
        $query = $this->db->select('a.*, d.nama_dept, b.nama_bank, d.id_dept')
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
                    (SUM(CASE
                        WHEN jenis_transaksi = 'Add' THEN 1 * jumlah_simpanan
                        ELSE 0
                    END) + 
                    SUM(CASE
                        WHEN jenis_transaksi = 'Withdraw' THEN -1 * jumlah_simpanan
                        ELSE 0
                    END)) AS simpanan_wajib
                    FROM simpok_simwa
                    WHERE jenis_simpanan = 'Simpanan Wajib' AND payroll_simpanan = $payroll;
                 ";
        return $this->db->query($query)->row_array();
    }

    public function get_simpok_by_anggota($payroll)
    {
        $query = "SELECT 
                    (SUM(CASE
                        WHEN jenis_transaksi = 'Add' THEN 1 * jumlah_simpanan
                        ELSE 0
                    END) + 
                    SUM(CASE
                        WHEN jenis_transaksi = 'Withdraw' THEN -1 * jumlah_simpanan
                        ELSE 0
                    END)) AS simpanan_pokok
                    FROM simpok_simwa
                    WHERE jenis_simpanan = 'Simpanan Pokok' AND payroll_simpanan = $payroll;
                 ";
        return $this->db->query($query)->row_array();
    }
}