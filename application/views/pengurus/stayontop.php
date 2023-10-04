<div class="row layout-spacing ">
    <?php foreach ($m_iduser as $us) : ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="text-center user-info">
                        <img src="<?= base_url(); ?>assets/src/assets/img/pp/pengurus/<?= (isset($user_data['photo_profile']) ? $user_data['photo_profile'] : 'profile-39.PNG'); ?>" alt="avatar" width="90" height="90">
                        <p class="">
                            <?= $us['nama_pengurus']; ?> /
                            <?= $us['nama_jabatan']; ?>
                        </p>
                    </div>
                    <br><br>
                    <div class="row text-center">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                            <a href="<?= base_url(); ?>pengurus">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/dashboard_3r.png" alt="Dashboard" width="90" height="140">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                            <a href="<?= base_url(); ?>pengurus/pinjaman#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/pinjaman_3r.png" alt="Data Pinjaman" width="90" height="140">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                            <a href="<?= base_url(); ?>pengurus/tabungan#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/tabungan_3r.png" alt="Data Tabungan" width="90" height="140">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                            <a href="<?= base_url(); ?>pengurus/barang#data">
                                <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/barang_3r.png" alt="Data Pinjaman Barang" width="90" height="140">
                            </a>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>