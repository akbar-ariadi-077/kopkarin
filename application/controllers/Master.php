<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Master');
    }

    public function index()
    {
    }

    public function m_year()
    {
        $data['myear'] = $this->M_Master->get_all_year_active();

        $this->load->view('pengurus/header');
        $this->load->view('pengurus/loader');
        $this->load->view('pengurus/navbar');
        $this->load->view('pengurus/sidebar');
        $this->load->view('master/v_year', $data);
        $this->load->view('pengurus/footer');
    }

    public function m_year_new()
    {
        $this->form_validation->set_rules('yyyy', 'Tahun', 'required|trim');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Master->ins_new_year();
            // if ($insert) {
            $this->m_year();
            // } else {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
            // } else {
            //     echo "stay " . $insert;
            // }
        }
    }

    public function m_year_edit($id)
    {
        $this->form_validation->set_rules('yyyy', 'Tahun', 'required|trim');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Master->upd_year($id);
            $this->m_year();
        }
    }

    public function m_year_del($id)
    {
        $this->M_Master->del_year($id);
        $this->m_year();
    }


    public function m_month()
    {
        $data['m_month'] = $this->M_Master->get_all_bulan();

        $this->load->view('pengurus/header');
        $this->load->view('pengurus/loader');
        $this->load->view('pengurus/navbar');
        $this->load->view('pengurus/sidebar');
        $this->load->view('master/v_month', $data);
        $this->load->view('pengurus/footer');
    }



    public function m_paytod()
    {
        $data['mpaytod'] = $this->M_Master->get_all_paytod_active();

        $this->load->view('pengurus/header');
        $this->load->view('pengurus/loader');
        $this->load->view('pengurus/navbar');
        $this->load->view('pengurus/sidebar');
        $this->load->view('master/v_paytod', $data);
        $this->load->view('pengurus/footer');
    }

    public function m_paytod_new()
    {
        $this->form_validation->set_rules('npaytod', 'Metode Pembayaran', 'required|trim');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Master->ins_new_paytod();
            $this->m_paytod();
        }
    }

    public function m_paytod_edit($id)
    {
        $this->form_validation->set_rules('npaytod', 'Metode Pembayaran', 'required|trim');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Master->upd_paytod($id);
            $this->m_paytod();
        }
    }

    public function m_paytod_del($id)
    {
        $this->M_Master->del_paytod($id);
        $this->m_paytod();
    }



    public function m_bank()
    {
        $data['m_bank'] = $this->M_Master->get_all_bank_active();

        $this->load->view('pengurus/header');
        $this->load->view('pengurus/loader');
        $this->load->view('pengurus/navbar');
        $this->load->view('pengurus/sidebar');
        $this->load->view('master/v_bank', $data);
        $this->load->view('pengurus/footer');
    }

    public function m_bank_new()
    {
        $this->form_validation->set_rules('yyyy', 'Bank', 'required');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Master->ins_new_bank();
            // if ($insert) {
            $this->m_bank();
            // } else {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
            // } else {
            //     echo "stay " . $insert;
            // }
        }
    }

    public function m_bank_edit($id)
    {
        $this->form_validation->set_rules('yyyy', 'Bank', 'required');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Master->upd_bank($id);
            $this->m_bank();
        }
    }

    public function m_bank_del($id)
    {
        $this->M_Master->del_bank($id);
        $this->m_bank();
    }



    public function m_dept()
    {
        $data['m_dept'] = $this->M_Master->get_all_dept_active();

        $this->load->view('pengurus/header');
        $this->load->view('pengurus/loader');
        $this->load->view('pengurus/navbar');
        $this->load->view('pengurus/sidebar');
        $this->load->view('master/v_dept', $data);
        $this->load->view('pengurus/footer');
    }

    public function m_dept_new()
    {
        $this->form_validation->set_rules('yyyy', 'Department', 'required');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Master->ins_new_dept();
            // if ($insert) {
            $this->m_dept();
            // } else {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
            // } else {
            //     echo "stay " . $insert;
            // }
        }
    }

    public function m_dept_edit($id)
    {
        $this->form_validation->set_rules('yyyy', 'Department', 'required');

        if ($this->form_validation->run() == false) {
            // $this->session->set_flashdata('login-danger', 'Login <b>FAILED</b>!<br>Please check this message : ' . validation_errors());
        } else {
            $this->M_Master->upd_dept($id);
            $this->m_dept();
        }
    }

    public function m_dept_del($id)
    {
        $this->M_Master->del_dept($id);
        $this->m_dept();
    }
}