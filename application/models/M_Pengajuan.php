<?php

class M_Pengajuan extends CI_model
{
    public function get_all_pengajuan()
    {
        return $this->db->get_where('pengajuan')->result_array();
    }

    public function get_pengajuan_by_nik($payroll)
    {
        $query = $this->db->select('p.jumlah_pinjaman, p.bunga_pinjaman, p.bunga_pinjaman_persen, b.txt_pr_id_bulan, t.text_tahun, p.jangka_waktu, p.status_pinjaman, p.alasan_pinjaman, p.angsuran_pokok, p.angsuran_ke')
            ->from('pengajuan p')
            ->join('bulan b', 'p.bulan_pengajuan = b.id_bulan')
            ->join('tahun t', 'p.tahun_pengajuan = t.id_tahun')
            ->where('p.payroll_anggota', $payroll)
            ->get();
        return $query->row_array();
    }

    public function ins_new_pengajuan($payroll)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'payroll_anggota' => $payroll,
            'tahun_pengajuan' => $this->input->post('tahun_pengajuan', true),
            'bulan_pengajuan' => $this->input->post('bulan_pengajuan', true),
            'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman', true),
            'angsuran_pokok' => $this->input->post('angsuran_pokok', true),
            'bunga_pinjaman_persen' => $this->input->post('bunga_pinjaman_persen', true),
            'bunga_pinjaman' => $this->input->post('bunga_pinjaman', true),
            'jangka_waktu' => $this->input->post('jangka_waktu', true),
            'angsuran_ke' => 0,
            'status_pinjaman' => 'Diajukan',
            'alasan_pinjaman' => '',
            'input_date_time' => $now,
            'update_date_time' => $now
        ];
        $this->db->insert('pengajuan', $data_yyyy);
    }

    public function upd_new_pengajuan($payroll)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'tahun_pengajuan' => $this->input->post('tahun_pengajuan', true),
            'bulan_pengajuan' => $this->input->post('bulan_pengajuan', true),
            'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman', true),
            'angsuran_pokok' => $this->input->post('angsuran_pokok', true),
            'bunga_pinjaman_persen' => $this->input->post('bunga_pinjaman_persen', true),
            'bunga_pinjaman' => $this->input->post('bunga_pinjaman', true),
            'jangka_waktu' => $this->input->post('jangka_waktu', true),
            'angsuran_ke' => 0,
            'status_pinjaman' => 'Diajukan',
            'alasan_pinjaman' => '',
            'update_date_time' => $now
        ];

        $this->db->where('payroll_anggota', $payroll);
        $this->db->update('pengajuan', $data_yyyy);
    }
}