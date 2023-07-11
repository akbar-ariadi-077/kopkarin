<?php

class M_Anggota extends CI_model
{
    public function get_all_anggota()
    {
        return $this->db->get_where('anggota')->result_array();
    }

    // public function get_all_anggota_active()
    // {
    //     return $this->db->get_where('anggota', ['status_anggota' => 1])->result_array();
    // }

    public function get_all_anggota_active()
    {
        $query = "SELECT a.*, d.nama_dept, b.nama_bank
                  FROM anggota a
                  JOIN department d ON a.dept_anggota = d.id_dept
                  JOIN bank b ON a.bank_anggota = b.id_bank
                  WHERE a.status_anggota = 1";
        return $this->db->query($query)->result_array();
        return $this->db->get_where('', ['status_anggota' => 1])->result_array();
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
        $query = "SELECT s.jenis_simpanan, s.jumlah_simpanan, t.text_tahun, b.txt_pr_id_bulan, a.payroll_anggota, a.nama_anggota
                    FROM simpok_simwa s
                    JOIN tahun t ON s.tahun_simpanan = t.id_tahun
                    JOIN bulan b ON s.bulan_simpanan = b.id_bulan
                    JOIN anggota a ON s.payroll_simpanan = a.id_anggota
                    WHERE s.status_data = 1";
        return $this->db->query($query)->result_array();
    }

    public function get_all_simpanan_active_anggota_only()
    {
        $query = "SELECT DISTINCT t.text_tahun, a.payroll_anggota, a.nama_anggota, SUM(s.jumlah_simpanan) AS jumlah_simpanan
                    FROM simpok_simwa s 
                    JOIN tahun t ON s.tahun_simpanan = t.id_tahun 
                    JOIN bulan b ON s.bulan_simpanan = b.id_bulan 
                    JOIN anggota a ON s.payroll_simpanan = a.id_anggota 
                    WHERE s.status_data = 1
                    GROUP BY t.text_tahun, a.payroll_anggota, a.nama_anggota";
        return $this->db->query($query)->result_array();
    }
}
