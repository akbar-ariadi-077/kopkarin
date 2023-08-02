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
                    <!-- <br>
                    <div class="text-center user-info m-0 avatar avatar-xl">
                        <a href="<?= base_url(); ?>anggota"
                            aria-expanded="<?= ($this->uri->segment(2) == '') ? 'true' : 'false'; ?>"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-columns">
                                    <path
                                        d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                                    </path>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <br> -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>