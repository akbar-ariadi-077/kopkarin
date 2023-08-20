<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usaha extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('iduser')) {
            redirect('auth');
        }

        $this->load->model('M_Tahun');
        $this->load->model('M_Bulan');
        $this->load->model('M_Anggota');
        $this->load->model('M_Pinjaman');
        $this->load->model('M_Tabungan');
        $this->load->model('M_Pengajuan');
        $this->load->model('M_Master');
        $this->load->model('M_Auth');
    }

    // main function
    public function index()
    {
        $data['m_iduser'] = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));
        $data['a_simwa'] = $this->M_Anggota->get_simwa_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_simpok'] = $this->M_Anggota->get_simpok_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['s_tabungan'] = $this->M_Tabungan->get_tabungan_saldo_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_sisa_pinj'] = $this->M_Pinjaman->get_sisa_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_sisa_bara'] = $this->M_Pinjaman->get_sisa_pinjaman_barang_by_nik($data['m_iduser_ro']['id_anggota']);

        $this->load->view('usaha/header');
        $this->load->view('include/loader');
        $this->load->view('usaha/navbar', $data);
        $this->load->view('usaha/sidebar');
        $this->load->view('usaha/dashboard', $data);
        $this->load->view('usaha/footer');
    }
}