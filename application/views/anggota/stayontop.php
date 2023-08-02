<div class="row layout-spacing ">
    <?php foreach ($m_iduser as $us): ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="text-center user-info">
                        <img src="<?= base_url(); ?>assets/src/assets/img/profile-35.JPG" alt="avatar" width="90"
                            height="90">
                        <p class="">
                            <?= $us['payroll_anggota']; ?> /
                            <?= $us['nama_anggota']; ?> /
                            <?= $us['nama_dept']; ?>
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="">
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
                                        <h6>Total Simpanan Wajib&nbsp;&nbsp;</h6>
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
                            </tbody>
                        </table>
                        </p>
                    </div>
                    <br><br>
                    <div class="row text-center">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <a href="<?= base_url(); ?>anggota">
                                <img src="<?= base_url(); ?>assets/src/assets/img/dashboard.png" alt="avatar" width="90"
                                    height="90">
                                <p class=""><b>Dashboard</b></p>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <a href="<?= base_url(); ?>anggota/pinjaman#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/pinjaman.png" alt="avatar" width="90"
                                    height="90">
                                <p class=""><b>Pinjaman</b></p>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <a href="<?= base_url(); ?>anggota/tabungan#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/tabungan.png" alt="avatar" width="90"
                                    height="90">
                                <p class=""><b>Tabungan</b></p>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <a href="<?= base_url(); ?>anggota/barang#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/barang.png" alt="avatar" width="90"
                                    height="90">
                                <p class=""><b>Barang</b></p>
                            </a>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>