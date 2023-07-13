<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Anggota');
        $this->load->model('M_Master');
    }

    public function index()
    {
        $this->m_anggota();
    }

    public function m_anggota()
    {
        $data['m_anggota'] = $this->M_Anggota->get_all_anggota_active();
        $data['all_dept'] = $this->M_Master->get_all_dept_active();
        $data['all_bank'] = $this->M_Master->get_all_bank_active();

        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('include/navbar');
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
        $data['all_dept']  = $this->M_Master->get_all_dept_active();
        $data['all_bank']  = $this->M_Master->get_all_bank_active();
        $data['all_bulan'] = $this->M_Master->get_all_bulan();
        $data['all_sidi']  = $this->M_Anggota->get_all_simpanan_active_anggota_only();
        $data['all_simp']  = $this->M_Anggota->get_all_simpanan_active();

        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('anggota/simwapok', $data);
        $this->load->view('include/footer');
    }
}
