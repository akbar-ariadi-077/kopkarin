<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <?php include "stayontop.php"; ?>

            <!-- BREADCRUMB -->

            <!-- /BREADCRUMB -->
            <span id="data"></span>
            <br><br><br><br>
            <form class="form-control" method="post" action="<?= base_url(); ?>anggota/pengajuan_ajukan">
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
                            <input type="hidden" name="tahun_pengajuan" value="<?= $tahun_pengajuan; ?>">
                            <input type="hidden" name="bulan_pengajuan" value="<?= $bulan_pengajuan; ?>">
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
                                                        <?= number_format($jumlah_pinjaman['int_pinjaman']); ?>
                                                        <input type="hidden" name="jumlah_pinjaman"
                                                            value="<?= $jumlah_pinjaman['int_pinjaman']; ?>">
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
                                                        <?= number_format($jangka_waktu['int_jangka']); ?>x
                                                        <input type="hidden" name="jangka_waktu"
                                                            value="<?= $jangka_waktu['int_jangka']; ?>">
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Bunga&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($bunga, 1); ?> %
                                                        <input type="hidden" name="bunga_pinjaman_persen"
                                                            value="<?= $bunga; ?>">
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
                                                        <?= number_format($bunga_per_tahun); ?>
                                                        <input type="hidden" name="bunga_pinjaman"
                                                            value="<?= $bunga_per_tahun; ?>">
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
                                                        <?= number_format($angsuran_pokok_per_bulan); ?>
                                                        <input type="hidden" name="angsuran_pokok"
                                                            value="<?= $angsuran_pokok_per_bulan; ?>">
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
                                                        <?= number_format($angsuran_bunga_per_bulan); ?>
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="100%" colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6><b>Bayar per Bulan</b>&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($bayar_per_bulan); ?>
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

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8">
                            <br><br>
                            <table style="width: 100%; margin: auto;" border="0">
                                <tbody>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jumlah Pinjaman Baru&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($jumlah_pinjaman['int_pinjaman']); ?>
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Sisa Pinjaman Lama&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($sisa_pinjaman_lama); ?>
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Sisa Bunga Lama&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($sisa_bunga_lama); ?>
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Total yang didapat&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($total_didapat); ?>
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Diajukan &nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?php
                                                        date_default_timezone_set('Asia/Jakarta');
                                                        $now = date('d-M-Y');
                                                        $no2 = date('H:i:s');
                                                        ?>
                                                        <?= $now . ' pukul ' . $no2; ?>
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
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success mb-2 me-4 btn-lg"><b>A J U K A N</b></button>
                    </div>
                </div>
            </form>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->