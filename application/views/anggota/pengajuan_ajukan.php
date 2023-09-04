<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->

            <!-- /BREADCRUMB -->
            <span id="data"></span>
            <br>
            <button class="btn btn-dark" onclick="history.back()">
                <i data-feather="arrow-left"></i>
                <span class="btn-text-inner">Kembali</span>
            </button>
            <br>
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <br><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h3 style="text-align: center; font-weight: bold;"><u>PENGAJUAN PINJAMAN</u></h3>
                            </div>
                        </div>
                        <br>
                        <table style="width: 100%; margin: auto;" border="0">
                            <tbody>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Jumlah Pinjaman&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= number_format($a_pengajuan['jumlah_pinjaman']); ?>
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Jangka Waktu&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= number_format($a_pengajuan['jangka_waktu']); ?> kali
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Bunga per Tahun&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= number_format($a_pengajuan['bunga_pinjaman']); ?>
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Angsuran Pokok per Bulan&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= number_format($a_pengajuan['angsuran_pokok']); ?>
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Angsuran Bunga per Bulan&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= number_format($a_pengajuan['bunga_pinjaman'] / $a_pengajuan['jangka_waktu']); ?>
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6><b>Bayar per Bulan</b>&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= number_format($a_pengajuan['angsuran_pokok'] + ($a_pengajuan['bunga_pinjaman'] / $a_pengajuan['jangka_waktu'])); ?>
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6><b>Status Pengajuan</b>&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span
                                                class="badge badge-light-<?= ($a_pengajuan['status_pinjaman'] == 'Diajukan' ? 'warning' : ($a_pengajuan['status_pinjaman'] == 'Belum Lunas' ? 'danger' : ($a_pengajuan['status_pinjaman'] == 'Disetujui' ? 'success' : 'dark'))); ?>">
                                                <b>
                                                    <?= $a_pengajuan['status_pinjaman']; ?>
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br />
                    </div>
                </div>
            </div>
            <?php if ($a_pengajuan['status_pinjaman'] == 'Belum Lunas'): ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <a href="<?= base_url(); ?>anggota/pengajuan_topup#data" class="btn btn-danger mb-2 me-4 btn-lg">
                            <b>TOP UP SALDO PINJAMAN</b>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->