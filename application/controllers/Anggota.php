<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
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
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));
        $data['a_simwa']     = $this->M_Anggota->get_simwa_by_anggota($data['m_iduser_ro']['id_anggota']);
        $data['a_simpok']    = $this->M_Anggota->get_simpok_by_anggota($data['m_iduser_ro']['id_anggota']);

        $data['s_tabungan']  = $this->M_Tabungan->get_tabungan_saldo_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['a_totajubar'] = $this->M_Pengajuan->get_total_ajuan_barang_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['a_sisa_pinj'] = $this->M_Pinjaman->get_sisa_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_totpinjba'] = $this->M_Pinjaman->get_total_pinjaman_barang_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_sisa_bara'] = $data['a_totajubar']['jumlah_pinjaman'] - $data['a_totpinjba']['angsuran_pokok'];

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/dashboard', $data);
        $this->load->view('anggota/footer');
    }



    // get data terbaru simpanan wajib dan simpanan pokok
    public function simwapok()
    {
        $data['user_data'] = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['all_dept']  = $this->M_Master->get_all_dept_active();
        $data['all_bank']  = $this->M_Master->get_all_bank_active();
        $data['all_bulan'] = $this->M_Master->get_all_bulan();

        $data['m_anggota'] = $this->M_Anggota->get_all_anggota_active();
        $data['all_sidi']  = $this->M_Anggota->get_all_simpanan_active_anggota_only();
        $data['all_simp']  = $this->M_Anggota->get_all_simpanan_active();

        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('anggota/simwapok', $data);
        $this->load->view('include/footer');
    }



    // kumpulan function data pinjaman dan pengajuan non barang
    public function pinjaman()
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_pinjaman']  = $this->M_Pinjaman->get_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_sisa_pinj'] = $this->M_Pinjaman->get_sisa_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['m_pinjaman']  = $this->M_Master->get_all_jumlah_pinjaman_active();
        $data['m_jangka']    = $this->M_Master->get_all_jangka_waktu_active();

        $sisa_angsuran = 0;
        if (isset($data['a_pengajuan'])) {
            if ($data['a_pengajuan']['status_pinjaman'] == 'Belum Lunas') {
                $sisa_angsuran = $data['a_pengajuan']['jangka_waktu'] - $data['a_pengajuan']['angsuran_ke'];
            } else {
                $sisa_angsuran = 0;
            }
        } else {
            $sisa_angsuran = 0;
        }

        if ($sisa_angsuran > 3) {
            $data['sisa_bunga_lama'] = ($data['a_pengajuan']['bunga_pinjaman'] / $data['a_pengajuan']['jangka_waktu']) * 2;
        } else if (($sisa_angsuran > 0) && ($sisa_angsuran <= 3)) {
            $data['sisa_bunga_lama'] = ($data['a_pengajuan']['bunga_pinjaman'] / $data['a_pengajuan']['jangka_waktu']) * 1;
        } else {
            $data['sisa_bunga_lama'] = 0;
        }
        $data['sisa_angsuran_lama'] = $sisa_angsuran;

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/pinjaman', $data);
        $this->load->view('anggota/footer');
    }

    public function pinla()
    {
        $this->load->view('anggota/pinjaman_lainnya');
    }

    public function jenpen()
    {
        $this->load->view('anggota/jenis_pengajuan');
    }

    public function pengajuan($param = NULL)
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_barang_by_nik($data['m_iduser_ro']['id_anggota']);

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');

        if ($param == 'barang') {
            if (isset($data['a_pengajuan'])) {
                if ($data['a_pengajuan']['status_pinjaman'] == 'Belum Lunas') {
                    $data['sisa_pinjaman'] = $data['a_pengajuan']['jumlah_pinjaman'] - ($data['a_pengajuan']['angsuran_pokok'] * $data['a_pengajuan']['angsuran_ke']);
                } else {
                    $data['sisa_pinjaman'] = 0;
                }
                $this->load->view('anggota/pengajuan_ajukan_barang', $data);
            } else {
                $data['sisa_pinjaman'] = 0;
                $this->load->view('anggota/pengajuan_barang', $data);
            }

            $this->load->view('anggota/footer');
        } else {
            $data['m_pinjaman']  = $this->M_Master->get_all_jumlah_pinjaman_active();
            $data['m_jangka']    = $this->M_Master->get_all_jangka_waktu_active();

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
    }

    public function pengajuan_cek()
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_pinjaman']  = $this->M_Pinjaman->get_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_sisa_pinj'] = $this->M_Pinjaman->get_sisa_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_by_nik($data['m_iduser_ro']['id_anggota']);

        $sisa_angsuran = 0;
        if (isset($data['a_pengajuan'])) {
            if ($data['a_pengajuan']['status_pinjaman'] == 'Belum Lunas') {
                $data['sisa_pinjaman'] = $data['a_pengajuan']['jumlah_pinjaman'] - ($data['a_pengajuan']['angsuran_pokok'] * $data['a_pengajuan']['angsuran_ke']);
                $sisa_angsuran = $data['a_pengajuan']['jangka_waktu'] - $data['a_pengajuan']['angsuran_ke'];
            } else {
                $data['sisa_pinjaman'] = 0;
                $sisa_angsuran = 0;
            }
        } else {
            $data['sisa_pinjaman'] = 0;
            $sisa_angsuran = 0;
        }

        if ($this->input->post('jumlah_pinjaman', true) == 'Lainnya') {
            $data['input_jumlah_pinjaman']  = intval(str_replace(".", "", $this->input->post('jumlah_pinjaman_lainnya', true)));
            $data_jumlah_pinjaman           = $data['input_jumlah_pinjaman'];
            echo "jumlah pinjaman = " . $this->input->post('jumlah_pinjaman', true) . "<br>Pinjaman lainnya = " . str_replace(".", "", $this->input->post('jumlah_pinjaman_lainnya', true));
        } else {
            $data['input_jumlah_pinjaman']  = $this->input->post('jumlah_pinjaman', true);
            $data['jumlah_pinjaman']        = $this->M_Master->get_jumlah_pinjaman_by_id($data['input_jumlah_pinjaman']);
            $data_jumlah_pinjaman           = $data['jumlah_pinjaman']['int_pinjaman'];
            echo $data_jumlah_pinjaman;
        }

        $data['input_jangka_waktu']         = $this->input->post('jangka_waktu', true);
        $data['jangka_waktu']               = $this->M_Master->get_jangka_waktu_by_id($this->input->post('jangka_waktu', true));

        $data['bunga']                      = 0.75 * $data['jangka_waktu']['int_jangka'];
        $data['bunga_per_bulan']            = 0.75;
        $data['bunga_per_tahun']            = $data_jumlah_pinjaman * ((0.75 * $data['jangka_waktu']['int_jangka']) / 100);

        $data['angsuran_pokok_per_bulan']   = $data_jumlah_pinjaman / $data['jangka_waktu']['int_jangka'];
        $data['angsuran_bunga_per_bulan']   = $data['bunga_per_tahun'] / $data['jangka_waktu']['int_jangka'];

        $data['bayar_per_bulan']            = $data['angsuran_pokok_per_bulan'] + $data['angsuran_bunga_per_bulan'];
        $data['sisa_pinjaman_lama']         = $data['sisa_pinjaman'];

        if ($sisa_angsuran > 3) {
            $data['sisa_bunga_lama'] = ($data['a_pengajuan']['bunga_pinjaman'] / $data['a_pengajuan']['jangka_waktu']) * 2;
        } else if (($sisa_angsuran > 0) && ($sisa_angsuran <= 3)) {
            $data['sisa_bunga_lama'] = ($data['a_pengajuan']['bunga_pinjaman'] / $data['a_pengajuan']['jangka_waktu']) * 1;
        } else {
            $data['sisa_bunga_lama'] = 0;
        }

        $data['total_didapat']      = $data_jumlah_pinjaman - $data['sisa_pinjaman_lama'] - $data['sisa_bunga_lama'];
        if (isset($data['a_pengajuan'])) {
            $data['sisa_angsuran_lama'] = $data['a_pengajuan']['jangka_waktu'] - $data['a_pengajuan']['angsuran_ke'];
        } else {
            $data['sisa_angsuran_lama'] = 0;
        }

        date_default_timezone_set('Asia/Jakarta');
        $today_year = date('Y');
        $today_month = date('m');
        $data['tahun']           = $this->M_Tahun->get_tahun_by_int($today_year);
        $data['bulan']           = $this->M_Bulan->get_bulan_by_int($today_month);
        $data['tahun_pengajuan'] = $data['tahun']['id_tahun'];
        $data['bulan_pengajuan'] = $data['bulan']['id_bulan'];

        // $this->load->view('anggota/header');
        // $this->load->view('include/loader');
        // $this->load->view('anggota/navbar', $data);
        // $this->load->view('anggota/sidebar');
        // $this->load->view('anggota/pengajuan_cek', $data);
        // $this->load->view('anggota/footer');
    }

    public function pengajuan_ajukan()
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

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
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_pinjaman']  = $this->M_Pinjaman->get_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_sisa_pinj'] = $this->M_Pinjaman->get_sisa_pinjaman_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['m_pinjaman']  = $this->M_Master->get_all_jumlah_pinjaman_active();
        $data['m_jangka']    = $this->M_Master->get_all_jangka_waktu_active();

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



    // kumpulan function data pinjaman dan pengajuan barang
    public function barang()
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_pinjaman']  = $this->M_Pinjaman->get_pinjaman_barang_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_totpinjba'] = $this->M_Pinjaman->get_total_pinjaman_barang_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_barang_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_sisabara']  = $this->M_Pengajuan->get_pengajuan_barang_by_nik_outst($data['m_iduser_ro']['id_anggota']);
        $data['a_totajubar'] = $this->M_Pengajuan->get_total_ajuan_barang_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['a_sisa_bara'] = $data['a_totajubar']['jumlah_pinjaman'] - $data['a_totpinjba']['angsuran_pokok'];

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/barang', $data);
        $this->load->view('anggota/footer');
    }

    public function pengajuan_cek_barang()
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_barang_by_nik($data['m_iduser_ro']['id_anggota']);

        $sisa_angsuran = 0;
        if (isset($data['a_pengajuan'])) {
            if ($data['a_pengajuan']['status_pinjaman'] == 'Belum Lunas') {
                $data['sisa_pinjaman'] = $data['a_pengajuan']['jumlah_pinjaman'] - ($data['a_pengajuan']['angsuran_pokok'] * $data['a_pengajuan']['angsuran_ke']);
                $sisa_angsuran = $data['a_pengajuan']['jangka_waktu'] - $data['a_pengajuan']['angsuran_ke'];
            } else {
                $data['sisa_pinjaman'] = 0;
                $sisa_angsuran = 0;
            }
        } else {
            $data['sisa_pinjaman'] = 0;
            $sisa_angsuran = 0;
        }

        $data['input_nama_barang']        = $this->input->post('nama_barang', true);
        $data['input_jumlah_pinjaman']    = $this->input->post('jumlah_pinjaman', true);
        $data['input_jangka_waktu']       = $this->input->post('jangka_waktu', true);
        $data['bunga']                    = 0.75;
        $data['bunga_per_tahun']          = $this->input->post('jumlah_pinjaman', true) * ($data['bunga'] / 100);
        $data['angsuran_pokok_per_bulan'] = $this->input->post('jumlah_pinjaman', true) / $this->input->post('jangka_waktu', true);
        $data['angsuran_bunga_per_bulan'] = $data['bunga_per_tahun'] / $this->input->post('jangka_waktu', true);
        $data['bayar_per_bulan']          = $data['angsuran_pokok_per_bulan'] + $data['angsuran_bunga_per_bulan'];
        $data['sisa_pinjaman_lama']       = $data['sisa_pinjaman'];

        if ($sisa_angsuran > 3) {
            $data['sisa_bunga_lama'] = ($data['a_pengajuan']['bunga_pinjaman'] / $data['a_pengajuan']['jangka_waktu']) * 2;
        } else if (($sisa_angsuran > 0) && ($sisa_angsuran <= 3)) {
            $data['sisa_bunga_lama'] = ($data['a_pengajuan']['bunga_pinjaman'] / $data['a_pengajuan']['jangka_waktu']) * 1;
        } else {
            $data['sisa_bunga_lama'] = 0;
        }
        $data['total_didapat'] = $data['input_jumlah_pinjaman'] + $data['sisa_pinjaman_lama'] + $data['sisa_bunga_lama'] + $data['bunga_per_tahun'];

        date_default_timezone_set('Asia/Jakarta');
        $today_year                 = date('Y');
        $today_month                = date('m');
        $data['tahun']              = $this->M_Tahun->get_tahun_by_int($today_year);
        $data['bulan']              = $this->M_Bulan->get_bulan_by_int($today_month);
        $data['tahun_pengajuan']    = $data['tahun']['id_tahun'];
        $data['bulan_pengajuan']    = $data['bulan']['id_bulan'];

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/pengajuan_cek_barang', $data);
        $this->load->view('anggota/footer');
    }

    public function pengajuan_ajukan_barang()
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $this->M_Pengajuan->ins_new_pengajuan_barang($data['m_iduser_ro']['id_anggota']);

        $this->pengajuan('barang');
    }

    public function pengajuan_barang_baru()
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_pengajuan'] = $this->M_Pengajuan->get_pengajuan_barang_by_nik($data['m_iduser_ro']['id_anggota']);

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');

        if (isset($data['a_pengajuan'])) {
            if ($data['a_pengajuan']['status_pinjaman'] == 'Belum Lunas') {
                $data['sisa_pinjaman'] = $data['a_pengajuan']['jumlah_pinjaman'] - ($data['a_pengajuan']['angsuran_pokok'] * $data['a_pengajuan']['angsuran_ke']);
            }
            $this->load->view('anggota/pengajuan_barang', $data);
        }

        $this->load->view('anggota/footer');
    }



    // kumpulan function master anggota / profile
    public function m_anggota()
    {
        $data['m_anggota'] = $this->M_Anggota->get_all_anggota_active();

        $data['all_dept']  = $this->M_Master->get_all_dept_active();
        $data['all_bank']  = $this->M_Master->get_all_bank_active();

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



    // kumpulan function data tabungan
    public function tabungan()
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_tabungan']  = $this->M_Tabungan->get_tabungan_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['s_tabungan']  = $this->M_Tabungan->get_tabungan_saldo_by_nik($data['m_iduser_ro']['id_anggota']);

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/tabungan', $data);
        $this->load->view('anggota/footer');
    }

    public function tabungan_kelola()
    {
        $data['user_data']      = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']       = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro']    = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_tabungan']     = $this->M_Tabungan->get_tabungan_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['s_tabungan']     = $this->M_Tabungan->get_tabungan_saldo_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['aju_tabungan']   = $this->M_Tabungan->get_tabungan_kelola_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['m_tahun']        = $this->M_Tahun->get_all_tahun();
        $data['m_bulan']        = $this->M_Bulan->get_all_bulan();

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/tabungan_kelola', $data);
        $this->load->view('anggota/footer');
    }

    public function tabungan_kelola_cek()
    {
        $data['user_data']              = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']               = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro']            = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['a_tabungan']             = $this->M_Tabungan->get_tabungan_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['s_tabungan']             = $this->M_Tabungan->get_tabungan_saldo_by_nik($data['m_iduser_ro']['id_anggota']);
        $data['a_sisa_tabungan']        = $this->M_Tabungan->get_tabungan_saldo_by_nik($data['m_iduser_ro']['id_anggota']);

        $data['bulan_menabung']         = $this->input->post('bulan_menabung', true);
        $data['tahun_menabung']         = $this->input->post('tahun_menabung', true);
        $data['input_jumlah_menabung']  = $this->input->post('jumlah_menabung', true);
        $data['input_sistem_menabung']  = $this->input->post('sistem_menabung', true);
        $data['input_jenis_pengajuan']  = $this->input->post('jenis_pengajuan', true);

        $data['get_bulan']              = $this->M_Bulan->get_bulan_by_id($this->input->post('bulan_menabung', true));
        $data['get_tahun']              = $this->M_Tahun->get_tahun_by_id($this->input->post('tahun_menabung', true));

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/tabungan_kelola_cek', $data);
        $this->load->view('anggota/footer');
    }

    public function tabungan_kelola_ajukan()
    {
        $data['user_data']              = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']               = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro']            = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $data['bulan_menabung']         = $this->input->post('bulan_menabung', true);
        $data['tahun_menabung']         = $this->input->post('tahun_menabung', true);
        $data['input_jumlah_menabung']  = $this->input->post('jumlah_menabung', true);
        $data['input_sistem_menabung']  = $this->input->post('sistem_menabung', true);
        $data['input_jenis_pengajuan']  = $this->input->post('jenis_pengajuan', true);

        $data['get_bulan']              = $this->M_Bulan->get_bulan_by_id($this->input->post('bulan_menabung', true));
        $data['get_tahun']              = $this->M_Tahun->get_tahun_by_id($this->input->post('tahun_menabung', true));

        $this->M_Tabungan->ins_tambah_tabungan($data['m_iduser_ro']['id_anggota']);

        $this->tabungan_kelola();
    }



    // profile management
    public function profile($uid)
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['all_dept']    = $this->M_Master->get_all_dept_active();
        $data['all_bank']    = $this->M_Master->get_all_bank_active();

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $this->load->view('anggota/header');
        $this->load->view('include/loader');
        $this->load->view('anggota/navbar', $data);
        $this->load->view('anggota/sidebar');
        $this->load->view('anggota/profile', $data);
        $this->load->view('anggota/footer');
    }

    public function pass_c($uid)
    {
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        $this->form_validation->set_rules('password_lama', 'Password saat ini', 'required');
        $this->form_validation->set_rules('password_baru1', 'Password baru', 'required');
        $this->form_validation->set_rules('password_baru2', 'Password baru', 'required');

        if (!$this->form_validation->run() == false) {
            if ($data['user_data']['passw'] !== $this->input->post('password_lama', true)) {
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
        $data['user_data']   = $this->M_Auth->get_user_by_id($this->session->userdata('iduser'));

        $data['m_iduser']    = $this->M_Anggota->get_anggota_by_id_res($this->session->userdata('iduser'));
        $data['m_iduser_ro'] = $this->M_Anggota->get_anggota_by_id_row($this->session->userdata('iduser'));

        // $file_name = pathinfo($_FILES['foto_profil']['name'], PATHINFO_FILENAME) . '.' . pathinfo($_FILES['foto_profil']['name'], PATHINFO_EXTENSION);
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d_H:i:s');

        $file_name = $this->session->userdata('iduser') . '_' . $this->session->userdata('username') . '_' . $now . '.' . pathinfo($_FILES['foto_profil']['name'], PATHINFO_EXTENSION);
        $config['upload_path'] = FCPATH . 'assets/src/assets/img/pp/anggota/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['file_name'] = $file_name;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        $config['remove_spaces'] = FALSE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_profil')) {
            $this->M_Anggota->update_pp_anggota($this->session->userdata('iduser'), $file_name);
            $this->session->set_flashdata('ubah-pp-berhasil', 'Foto profil <b>BERHASIL</b> diganti!');
        } else {
            $this->session->set_flashdata('ubah-pp-gagal', $this->upload->display_errors());
        }

        $this->profile($uid);
    }
}
