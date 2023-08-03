<div class="row layout-spacing ">
    <?php foreach ($m_iduser as $us): ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="text-center user-info">
                        <img src="<?= base_url(); ?>assets/src/assets/img/profile-38.PNG" alt="avatar" width="90"
                            height="90">
                        <p class="">
                            <?= $us['nama_pengurus']; ?> /
                            <?= $us['nama_jabatan']; ?>
                        </p>
                    </div>
                    <br><br>
                    <div class="row text-center">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                            <a href="<?= base_url(); ?>anggota">
                                <img src="<?= base_url(); ?>assets/src/assets/img/dashboard_gb.PNG" alt="avatar" width="90"
                                    height="90">
                                <p class=""><b>Dashboard</b></p>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                            <a href="<?= base_url(); ?>anggota/pinjaman#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/pinjaman_gb.PNG" alt="avatar" width="90"
                                    height="90">
                                <p class=""><b>Pinjaman</b></p>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                            <a href="<?= base_url(); ?>anggota/tabungan#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/tabungan_gb.PNG" alt="avatar" width="90"
                                    height="90">
                                <p class=""><b>Tabungan</b></p>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                            <a href="<?= base_url(); ?>anggota/barang#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/barang_gb.PNG" alt="avatar" width="90"
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