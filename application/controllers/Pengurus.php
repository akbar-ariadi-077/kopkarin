<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengurus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('iduser')) {
            redirect('auth');
        }

        $this->load->model('M_Pengurus');
        $this->load->model('M_Tahun');
        $this->load->model('M_Bulan');
        $this->load->model('M_Anggota');
        $this->load->model('M_Pinjaman');
        $this->load->model('M_Tabungan');
        $this->load->model('M_Pengajuan');
        $this->load->model('M_Master');
    }

    public function index()
    {
        $data['m_iduser'] = $this->M_Pengurus->get_pengurus_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Pengurus->get_pengurus_by_id_row($this->session->userdata('iduser'));

        $this->load->view('pengurus/header');
        $this->load->view('pengurus/loader');
        $this->load->view('pengurus/navbar', $data);
        $this->load->view('pengurus/sidebar');
        $this->load->view('pengurus/dashboard', $data);
        $this->load->view('pengurus/footer');
    }

    public function m_anggota()
    {
        $data['m_anggota'] = $this->M_Anggota->get_all_anggota_active();
        $data['all_dept'] = $this->M_Master->get_all_dept_active();
        $data['all_bank'] = $this->M_Master->get_all_bank_active();

        $this->load->view('pengurus/header');
        $this->load->view('pengurus/loader');
        $this->load->view('pengurus/navbar');
        $this->load->view('pengurus/sidebar');
        $this->load->view('pengurus/anggota_list', $data);
        $this->load->view('pengurus/footer');
    }

    public function m_anggota_new()
    {
        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required|trim');

        if (!$this->form_validation->run() == false) {
            $this->M_Anggota->ins_new_anggota();
            $this->m_anggota();
        }
    }

    public function m_anggota_edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required|trim');

        if (!$this->form_validation->run() == false) {
            $this->M_Anggota->upd_anggota($id);
            $this->m_anggota();
        }
    }

    public function m_anggota_del($id)
    {
        $this->M_Anggota->del_anggota($id);
        $this->m_anggota();
    }



    public function simwapok()
    {
        $data['m_anggota'] = $this->M_Anggota->get_all_anggota_active();
        $data['all_dept'] = $this->M_Master->get_all_dept_active();
        $data['all_bank'] = $this->M_Master->get_all_bank_active();
        $data['all_bulan'] = $this->M_Master->get_all_bulan();
        $data['all_sidi'] = $this->M_Anggota->get_all_simpanan_active_anggota_only();
        $data['all_simp'] = $this->M_Anggota->get_all_simpanan_active();

        $this->load->view('pengurus/header');
        $this->load->view('pengurus/loader');
        $this->load->view('pengurus/navbar');
        $this->load->view('pengurus/sidebar');
        $this->load->view('pengurus/simwapok', $data);
        $this->load->view('pengurus/footer');
    }
}