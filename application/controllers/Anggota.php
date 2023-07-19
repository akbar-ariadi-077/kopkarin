<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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

    public function tabungan()
    {
        $data['m_iduser'] = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));
        $data['a_simwa'] = $this->M_Anggota->get_simwa_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_simpok'] = $this->M_Anggota->get_simpok_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_tabungan'] = $this->M_Tabungan->get_tabungan_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_by_nik($data['m_iduser_ro']['id_anggota']);

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/tabungan', $data);
        $this->load->view('anggota/footer');
    }

    public function pengajuan()
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

        if (isset($data['a_pengajuan'])) {
            if ($data['a_pengajuan']['status_pinjaman'] == 'Belum Lunas') {
                $data['sisa_pinjaman'] = $data['a_pengajuan']['jumlah_pinjaman'] - ($data['a_pengajuan']['angsuran_pokok'] * $data['a_pengajuan']['angsuran_ke']);
            } else {
                $data['sisa_pinjaman'] = 0;
            }
            $this->load->view('anggota/pengajuan_ajukan', $data);
        } else {
            $data['sisa_pinjaman'] = 0;
            $this->load->view('anggota/pengajuan', $data);
        }

        $this->load->view('anggota/footer');
    }

    public function pengajuan_cek()
    {
        $data['m_iduser'] = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));
        $data['a_simwa'] = $this->M_Anggota->get_simwa_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_simpok'] = $this->M_Anggota->get_simpok_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_pinjaman'] = $this->M_Pinjaman->get_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_by_nik($data['m_iduser_ro']['id_anggota']);

        if (isset($data['a_pengajuan'])) {
            if ($data['a_pengajuan']['status_pinjaman'] == 'Belum Lunas') {
                $data['sisa_pinjaman'] = $data['a_pengajuan']['jumlah_pinjaman'] - ($data['a_pengajuan']['angsuran_pokok'] * $data['a_pengajuan']['angsuran_ke']);
                $sisa_angsuran = $data['a_pengajuan']['jangka_waktu'] - $data['a_pengajuan']['angsuran_ke'];
            } else {
                $data['sisa_pinjaman'] = 0;
            }
        } else {
            $data['sisa_pinjaman'] = 0;
        }

        $data['input_jumlah_pinjaman'] = $this->input->post('jumlah_pinjaman', true);
        $data['input_jangka_waktu'] = $this->input->post('jangka_waktu', true);
        $data['bunga'] = 9;
        $data['bunga_per_tahun'] = $this->input->post('jumlah_pinjaman', true) * (9 / 100);
        $data['angsuran_pokok_per_bulan'] = $this->input->post('jumlah_pinjaman', true) / $this->input->post('jangka_waktu', true);
        $data['angsuran_bunga_per_bulan'] = $data['bunga_per_tahun'] / $this->input->post('jangka_waktu', true);
        $data['bayar_per_bulan'] = $data['angsuran_pokok_per_bulan'] + $data['angsuran_bunga_per_bulan'];
        $data['sisa_pinjaman_lama'] = $data['sisa_pinjaman'];
        if ($sisa_angsuran > 3) {
            $data['sisa_bunga_lama'] = ($data['a_pengajuan']['bunga_pinjaman'] / $data['a_pengajuan']['jangka_waktu']) * 2;
        } else if ($sisa_angsuran <= 3) {
            $data['sisa_bunga_lama'] = ($data['a_pengajuan']['bunga_pinjaman'] / $data['a_pengajuan']['jangka_waktu']) * 1;
        } else {
            $data['sisa_bunga_lama'] = 0;
        }
        $data['total_didapat'] = $data['input_jumlah_pinjaman'] - $data['sisa_pinjaman_lama'] - $data['sisa_bunga_lama'];

        date_default_timezone_set('Asia/Jakarta');
        $today_year = date('Y');
        $today_month = date('m');
        $data['tahun'] = $this->M_Tahun->get_tahun_by_int($today_year);
        $data['bulan'] = $this->M_Bulan->get_bulan_by_int($today_month);
        $data['tahun_pengajuan'] = $data['tahun']['id_tahun'];
        $data['bulan_pengajuan'] = $data['bulan']['id_bulan'];

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/pengajuan_cek', $data);
        $this->load->view('anggota/footer');
    }

    public function pengajuan_ajukan()
    {
        $data['m_iduser'] = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));
        $data['a_simwa'] = $this->M_Anggota->get_simwa_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_simpok'] = $this->M_Anggota->get_simpok_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_pinjaman'] = $this->M_Pinjaman->get_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_by_nik($data['m_iduser_ro']['id_anggota']);

        if (isset($data['a_pengajuan'])) {
            $this->M_Pengajuan->upd_new_pengajuan($data['m_iduser_ro']['id_anggota']);
        } else {
            $this->M_Pengajuan->ins_new_pengajuan($data['m_iduser_ro']['id_anggota']);
        }

        $this->pengajuan();
    }

    public function pengajuan_topup()
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

        if (isset($data['a_pengajuan'])) {
            if ($data['a_pengajuan']['status_pinjaman'] == 'Belum Lunas') {
                $data['sisa_pinjaman'] = $data['a_pengajuan']['jumlah_pinjaman'] - ($data['a_pengajuan']['angsuran_pokok'] * $data['a_pengajuan']['angsuran_ke']);
            }
            $this->load->view('anggota/pengajuan', $data);
        }

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
}