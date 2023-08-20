<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->

            <!-- /BREADCRUMB -->
            <span id="data"></span>
            <br><br><br><br>
            <form class="form-control" method="post" action="<?= base_url(); ?>anggota/pengajuan_ajukan_barang">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <button class="btn btn-dark" onclick="history.back()">
                            <i data-feather="arrow-left"></i>
                            <span class="btn-text-inner">Kembali</span>
                        </button>
                        <div class="widget-content widget-content-area br-8">
                            <br><br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h3 style="text-align: center; font-weight: bold;">
                                        <u>PENGAJUAN PINJAMAN BARANG</u>
                                    </h3>
                                </div>
                            </div>
                            <br>
                            <input type="hidden" name="tahun_pengajuan" value="<?= $tahun_pengajuan; ?>">
                            <input type="hidden" name="bulan_pengajuan" value="<?= $bulan_pengajuan; ?>">
                            <table style="width: 100%; margin: auto;" border="0">
                                <tbody>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Nama Barang&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= $input_nama_barang; ?>
                                                        <input type="hidden" name="nama_barang" value="<?= $input_nama_barang; ?>">
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jumlah Pinjaman&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($input_jumlah_pinjaman); ?>
                                                        <input type="hidden" name="jumlah_pinjaman" value="<?= $input_jumlah_pinjaman; ?>">
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
                                                        <?= number_format($input_jangka_waktu); ?>
                                                        <input type="hidden" name="jangka_waktu" value="<?= $input_jangka_waktu; ?>">
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
                                                        <?= number_format($bunga, 2); ?> %
                                                        <input type="hidden" name="bunga_pinjaman_persen" value="<?= $bunga; ?>">
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Total Bunga Selama Angsuran&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($bunga_per_tahun); ?>
                                                        <input type="hidden" name="bunga_pinjaman" value="<?= $bunga_per_tahun; ?>">
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
                                                        <input type="hidden" name="angsuran_pokok" value="<?= $angsuran_pokok_per_bulan; ?>">
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
                                                        <?= number_format($input_jumlah_pinjaman); ?>
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jumlah Bunga Baru&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($bunga_per_tahun); ?>
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
                                            <h6>Total Pinjaman Barang&nbsp;&nbsp;</h6>
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