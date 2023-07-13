<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Auth');
    }

    public function index()
    {
        $this->load->view('auth/signin');
    }

    public function login()
    {
        $this->form_validation->set_rules('usern', 'Username', 'required|trim');
        $this->form_validation->set_rules('passw', 'Password', 'required|trim');

        $usern = $this->input->post('usern');
        $passw = $this->input->post('passw');

        $user = $this->M_Auth->get_user_by_usern($usern);
        if ($user) {
            if ($user['status'] == 1) {
                if ($passw == $user['passw']) {
                    $data = [
                        'username' => $user['usern'],
                        'role' => $user['role'],
                        'iduser' => $user['id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role'] == 'Administrator') {
                        redirect('admin');
                    } else if ($user['role'] == 'Pengurus') {
                        redirect('pengurus');
                    } else if ($user['role'] == 'Anggota') {
                        redirect('anggota');
                    } else {
                        $this->index();
                    }
                } else {
                    $this->session->set_flashdata('login-gagal', 'Login <b>GAGAL</b>!<br>Password tidak sesuai!<br>' . validation_errors());
                }
            } else {
                $this->session->set_flashdata('login-gagal', 'Login <b>GAGAL</b>!<br>User tidak aktif!<br>' . validation_errors());
            }
        } else {
            $this->session->set_flashdata('login-gagal', 'Login <b>GAGAL</b>!<br>Username tidak ditemukan!<br>' . validation_errors());
        }
        $this->index();
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('iduser');

        $this->session->set_flashdata('logout-success', 'Anda telah <b>LOGOUT</b>!');
        $this->index();
    }
}