<div class="row layout-spacing ">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
        <div class="user-profile">
            <div class="widget-content widget-content-area">
                <div class="text-center user-info">
                    <a href="<?= base_url(); ?>usaha/profile/<?= $this->session->userdata('iduser'); ?>#data">
                        <img src="<?= base_url(); ?>assets/src/assets/img/pp/usaha/<?= $pass_lama_db['photo_profile']; ?>" alt="avatar" width="90" height="90">
                        <p class="">
                            <?= $customer_nam; ?>
                        </p>
                    </a>
                </div>
                <br><br>
                <div class="row text-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <a href="<?= base_url(); ?>usaha">
                            <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/dashboard_3r.png" alt="Dashboard" width="90" height="140">
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <a href="<?= base_url(); ?>usaha/cek_transaksi">
                            <img src="<?= base_url(); ?>assets/src/assets/img/kopkarin/cek_transaksi_3r.png" alt="Cek Transaksi" width="90" height="140">
                        </a>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</div>