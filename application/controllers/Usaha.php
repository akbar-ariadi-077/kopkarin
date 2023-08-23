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

        $this->load->model('M_Auth');
        $this->load->model('M_Usaha');

        $this->load->model('M_Tahun');
        $this->load->model('M_Bulan');
        $this->load->model('M_Pinjaman');
        $this->load->model('M_Tabungan');
        $this->load->model('M_Pengajuan');
        $this->load->model('M_Master');
    }

    // main function
    public function index()
    {
        $data['customer_row'] = $this->M_Usaha->get_customer_by_id_row($this->session->userdata('idcustomer'));
        $data['customer_res'] = $this->M_Usaha->get_customer_by_id_res($this->session->userdata('idcustomer'));
        $data['customer_nam'] = $data['customer_row']['nama_customer'];
        $data['pass_lama_db'] = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $this->load->view('usaha/header');
        $this->load->view('include/loader');
        $this->load->view('usaha/navbar', $data);
        $this->load->view('usaha/sidebar');
        $this->load->view('usaha/dashboard', $data);
        $this->load->view('usaha/footer');
    }

    public function cek_transaksi($uid)
    {
        $data['customer_row'] = $this->M_Usaha->get_customer_by_id_row($this->session->userdata('idcustomer'));
        $data['customer_res'] = $this->M_Usaha->get_customer_by_id_res($this->session->userdata('idcustomer'));
        $data['customer_nam'] = $data['customer_row']['nama_customer'];
        $data['pass_lama_db'] = $this->M_Auth->get_user_by_id($uid);
        $data['transaksi'] = $this->M_Usaha->get_usaha_transaksi_by_customer($this->session->userdata('idcustomer'));

        $this->load->view('usaha/header');
        $this->load->view('include/loader');
        $this->load->view('usaha/navbar', $data);
        $this->load->view('usaha/sidebar');
        $this->load->view('usaha/transaksi', $data);
        $this->load->view('usaha/footer');
    }



    public function profile($uid)
    {
        $data['customer_row'] = $this->M_Usaha->get_customer_by_id_row($this->session->userdata('idcustomer'));
        $data['customer_res'] = $this->M_Usaha->get_customer_by_id_res($this->session->userdata('idcustomer'));
        $data['customer_nam'] = $data['customer_row']['nama_customer'];
        $data['pass_lama_db'] = $this->M_Auth->get_user_by_id($uid);

        $this->load->view('usaha/header');
        $this->load->view('include/loader');
        $this->load->view('usaha/navbar', $data);
        $this->load->view('usaha/sidebar');
        $this->load->view('usaha/profile', $data);
        $this->load->view('usaha/footer');
    }

    public function pass_c($uid)
    {
        $data['pass_lama_db'] = $this->M_Auth->get_user_by_id($uid);

        $this->form_validation->set_rules('password_lama', 'Password saat ini', 'required');
        $this->form_validation->set_rules('password_baru1', 'Password baru', 'required');
        $this->form_validation->set_rules('password_baru2', 'Password baru', 'required');

        if (!$this->form_validation->run() == false) {
            if ($data['pass_lama_db']['passw'] !== $this->input->post('password_lama', true)) {
                $this->session->set_flashdata('password-lama-salah', 'Password saat ini <b>TIDAK SESUAI</b>!<br>Silahkan memasukkan password saat ini dengan benar!<br>' . validation_errors());
            } else {
                if ($this->input->post('password_baru1', true) !== $this->input->post('password_baru2', true)) {
                    $this->session->set_flashdata('password-baru-salah', 'Password baru <b>TIDAK SAMA</b>!<br>Silahkan memasukkan password baru yang sama pada 2 isian yang tersedia!<br>' . validation_errors());
                } else {
                    $this->M_Auth->change_password($uid);
                    $this->session->set_flashdata('ubah-password-berhasil', 'Password <b>BERHASIL DIUBAH</b>!');
                }
            }
        }

        $this->profile($uid);
    }

    public function pp_c($uid)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d_H:i:s');

        $file_name = $this->session->userdata('iduser') . '_' . $this->session->userdata('username') . '_' . $now . '.' . pathinfo($_FILES['foto_profil']['name'], PATHINFO_EXTENSION);
        $config['upload_path'] = FCPATH . 'assets/src/assets/img/pp/usaha/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['file_name'] = $file_name;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        $config['remove_spaces'] = FALSE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_profil')) {
            $this->M_Usaha->update_pp_customer($this->session->userdata('iduser'), $file_name);
            $this->session->set_flashdata('ubah-pp-berhasil', 'Foto profil <b>BERHASIL</b> diganti!');
        } else {
            $this->session->set_flashdata('ubah-pp-gagal', $this->upload->display_errors());
        }

        $this->profile($uid);
    }
}