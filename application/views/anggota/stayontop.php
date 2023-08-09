<div class="row layout-spacing ">
    <?php foreach ($m_iduser as $us): ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="text-center user-info">
                        <a
                            href="<?= base_url(); ?>anggota/profile<?= ($this->session->userdata('role') == 'Anggota' ? '/anggota/' . $this->session->userdata('idanggota') : ($this->session->userdata('role') == 'Pengurus' ? '/pengurus/' . $this->session->userdata('idpengurus') : '/')); ?>">
                            <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/profile-38.png" alt="avatar"
                                width="90" height="90">
                            <p class="">
                                <?= $us['payroll_anggota']; ?> /
                                <?= $us['nama_anggota']; ?> /
                                <?= $us['nama_dept']; ?>
                            </p>
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="">
                            <button type="button" class="btn btn-light-success mb-2 me-4 btn-lg" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">CEK SALDO</button>
                            <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Cek Saldo Anggota -
                                            <?= $us['nama_anggota']; ?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table style="width: 100%; margin: auto;" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="50%" align="right">
                                                        <h6>Simpanan Pokok&nbsp;&nbsp;</h6>
                                                    </td>
                                                    <td width="50%" align="left">
                                                        <h4>
                                                            <span class="badge badge-light-dark">
                                                                <b>
                                                                    <?= number_format($a_simpok['simpanan_pokok']); ?>
                                                                </b>
                                                            </span>
                                                        </h4>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="50%" align="right">
                                                        <h6>Simpanan Wajib&nbsp;&nbsp;</h6>
                                                    </td>
                                                    <td width="50%" align="left">
                                                        <h5>
                                                            <span class="badge badge-light-dark">
                                                                <b>
                                                                    <?= number_format($a_simwa['simpanan_wajib']); ?>
                                                                </b>
                                                            </span>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="50%" align="right">
                                                        <h6>Tabungan&nbsp;&nbsp;</h6>
                                                    </td>
                                                    <td width="50%" align="left">
                                                        <h5>
                                                            <span class="badge badge-light-dark">
                                                                <b>
                                                                    <?php foreach ($s_tabungan as $y): ?>
                                                                        <?= (isset($y['jumlah_tabungan'])) ? number_format($y['jumlah_tabungan']) : '0'; ?>
                                                                    <?php endforeach; ?>
                                                                </b>
                                                            </span>
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                    <!-- <div class="text-center">
                        <p class="">
                        <table style="width: 100%; margin: auto;" border="0">
                            <tbody>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>SimPok&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= number_format($a_simpok['simpanan_pokok']); ?>
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>SimpWajib&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h5>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= number_format($a_simwa['simpanan_wajib']); ?>
                                                </b>
                                            </span>
                                        </h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Tabungan&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h5>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?php foreach ($s_tabungan as $y): ?>
                                                        <?= (isset($y['jumlah_tabungan'])) ? number_format($y['jumlah_tabungan']) : '0'; ?>
                                                    <?php endforeach; ?>
                                                </b>
                                            </span>
                                        </h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div> -->
                    <br><br>
                    <div class="row text-center">
                        <div class="col-xl-1 col-lg-0 col-md-0 col-sm-6 col-6">&nbsp;</div>
                        <div class="col-xl-1 col-lg-0 col-md-0 col-sm-6 col-6">&nbsp;</div>
                        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="<?= base_url(); ?>anggota">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/dashboard_3r.png" alt="Dashboard"
                                    width="90" height="140">
                                <!-- <p class=""><b>Dashboard</b></p> -->
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="<?= base_url(); ?>anggota/tabungan#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/tabungan_3r.png"
                                    alt="Data Tabungan" width="90" height="140">
                                <!-- <p class=""><b>Data<br>Tabungan</b></p> -->
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="<?= base_url(); ?>anggota/tabungan_tambah#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/tabungan_tambah_3r.png"
                                    alt="Tambah Tabungan" width="90" height="140">
                                <!-- <p class=""><b>Tambah<br>Tabungan</b></p> -->
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="<?= base_url(); ?>anggota/tabungan_ambil#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/tabungan_ambil_3r.png"
                                    alt="Ambil Tabungan" width="90" height="140">
                                <!-- <p class=""><b>Ambil<br>Tabungan</b></p> -->
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="<?= base_url(); ?>anggota/pengajuan#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/pengajuan_pinjaman_3r.png"
                                    alt="Pengajuan Pinjaman" width="90" height="140">
                                <!-- <p class=""><b>Pengajuan<br>Pinjaman</b></p> -->
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="<?= base_url(); ?>anggota/pinjaman#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/pinjaman_3r.png"
                                    alt="Data Pinjaman" width="90" height="140">
                                <!-- <p class=""><b>Data<br>Pinjaman</b></p> -->
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="<?= base_url(); ?>anggota/pengajuan/barang#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/pinjaman_barang_3r.png"
                                    alt="Pengajuan Pinjaman Barang" width="90" height="140">
                                <!-- <p class=""><b>Pengajuan<br>Pinjaman<br>Barange</b></p> -->
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-3 col-md-3 col-sm-6 col-6">
                            <a href="<?= base_url(); ?>anggota/barang#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/barang_3r.png"
                                    alt="Data Pinjaman Barang" width="90" height="140">
                                <!-- <p class=""><b>Data<br>Pinjaman<br>Barang</b></p> -->
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-0 col-md-0 col-sm-6 col-6">&nbsp;</div>
                        <div class="col-xl-1 col-lg-0 col-md-0 col-sm-6 col-6">&nbsp;</div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>