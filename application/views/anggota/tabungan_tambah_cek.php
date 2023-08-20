<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->

            <!-- /BREADCRUMB -->
            <span id="data"></span>
            <br><br><br><br>
            <form class="form-control" method="post" action="<?= base_url(); ?>anggota/tabungan_tambah_ajukan">
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
                                    <h3 style="text-align: center; font-weight: bold;"><u>PENAMBAHAN TABUNGAN</u></h3>
                                </div>
                            </div>
                            <br>
                            <input type="hidden" name="tahun_menabung" value="<?= $tahun_menabung; ?>">
                            <input type="hidden" name="bulan_menabung" value="<?= $bulan_menabung; ?>">
                            <table style="width: 100%; margin: auto;" border="0">
                                <tbody>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jumlah Menabung&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= number_format($input_jumlah_menabung); ?>
                                                        <input type="hidden" name="jumlah_menabung" value="<?= $input_jumlah_menabung; ?>">
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Sistem Tabungan&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= ($input_sistem_menabung); ?>
                                                        <input type="hidden" name="sistem_menabung" value="<?= $input_sistem_menabung; ?>">
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Tanggal Pengajuan&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?php
                                                        date_default_timezone_set('Asia/Jakarta');
                                                        $date_now = date('Y-m-d');
                                                        echo $date_now;
                                                        ?>
                                                        <input type="hidden" name="tanggal_pengajuan" value="<?= $date_now; ?>">
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Diajukan untuk Tabungan&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        Bulan
                                                        <?= $get_bulan['txt_pr_id_bulan'] . ' ' . $get_tahun['text_tahun']; ?>
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