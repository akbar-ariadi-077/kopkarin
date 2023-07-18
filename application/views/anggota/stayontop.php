<div class="row layout-spacing ">
    <?php foreach ($m_iduser as $us): ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="text-center user-info">
                        <img src="<?= base_url(); ?>assets/src/assets/img/profile-3.jpeg" alt="avatar">
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
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>