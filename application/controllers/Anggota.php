<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Auth');
        $this->load->model('M_Anggota');
        $this->load->model('M_Pinjaman');
        $this->load->model('M_Pengajuan');
        $this->load->model('M_Master');
    }

    public function index()
    {
        $data['m_iduser'] = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));
        $data['a_simwa'] = $this->M_Anggota->get_simwa_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_simpok'] = $this->M_Anggota->get_simpok_by_anggota($data['m_iduser_ro']['id_anggota']);

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/dashboard', $data);
        $this->load->view('anggota/footer');
    }

    public function pinjaman()
    {
        $data['m_iduser'] = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));
        $data['a_simwa'] = $this->M_Anggota->get_simwa_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_simpok'] = $this->M_Anggota->get_simpok_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_pinjaman'] = $this->M_Pinjaman->get_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_by_nik($data['m_iduser_ro']['id_anggota']);

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/pinjaman', $data);
        $this->load->view('anggota/footer');

    }

    public function m_anggota()
    {
        $data['m_anggota'] = $this->M_Anggota->get_all_anggota_active();
        $data['all_dept'] = $this->M_Master->get_all_dept_active();
        $data['all_bank'] = $this->M_Master->get_all_bank_active();

        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('anggota/anggota_list', $data);
        $this->load->view('include/footer');
    }

    public function m_anggota_new()
    {
        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required|trim');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Anggota->ins_new_anggota();
            // if ($insert) {
            $this->m_anggota();
            // } else {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
            // } else {
            //     echo "stay " . $insert;
            // }
        }
    }

    public function m_anggota_edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required|trim');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
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

        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('anggota/simwapok', $data);
        $this->load->view('include/footer');
    }
}