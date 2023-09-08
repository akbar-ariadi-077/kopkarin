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
                            <form class="form-control" method="post" action="<?= base_url(); ?>anggota/pengajuan_cek#data">
                                <tbody>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Sisa Pinjaman&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= (isset($sisa_pinjaman)) ? number_format($sisa_pinjaman) : '0'; ?>
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jumlah Pinjaman&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <select class="form-control form-control-sm" name="jumlah_pinjaman" required onchange="pinjaman_lainnya(this.value)">
                                                <option value="">Pilih <b>Jumlah Pinjaman</b></option>
                                                <?php foreach ($m_pinjaman as $m) : ?>
                                                    <option value="<?= $m['id']; ?>"><?= number_format($m['int_pinjaman']); ?></option>
                                                <?php endforeach; ?>
                                                <option value="Lainnya">Lainnya</b></option>
                                            </select>
                                            <div id="pinjaman_lainnya"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jangka Waktu (Bulan)&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <select class="form-control form-control-sm" name="jangka_waktu" required>
                                                <option value="">Pilih <b>Jangka Waktu</b></option>
                                                <?php foreach ($m_jangka as $j) : ?>
                                                    <option value="<?= $j['id']; ?>"><?= number_format($j['int_jangka']); ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="100%" align="center" colspan="2">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="100%" align="center" colspan="2">
                                            <button class="btn btn-light-info mb-2 me-4"><b>Cek</b></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </form>
                        </table>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->