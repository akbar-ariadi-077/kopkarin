<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <?php include "stayontop.php"; ?>

            <!-- BREADCRUMB -->

            <!-- /BREADCRUMB -->
            <span id="data"></span>
            <br><br><br><br>
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <br><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h3 style="text-align: center; font-weight: bold;"><u>PENGAJUAN PINJAMAN BARANG</u></h3>
                            </div>
                        </div>
                        <br>
                        <table style="width: 100%; margin: auto;" border="0">
                            <form class="form-control" method="post"
                                action="<?= base_url(); ?>anggota/pengajuan_cek_barang#data">
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
                                            <h6>Nama Barang&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <input id="t-text" type="text" name="nama_barang"
                                                placeholder="Masukkan nama barang..."
                                                class="form-control form-control-sm" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jumlah Pinjaman&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <select class="form-control form-control-sm" name="jumlah_pinjaman"
                                                required>
                                                <option value="">Pilih <b>Jumlah Pinjaman</b></option>
                                                <?php
                                                $max_pinjaman = 30000000;
                                                for ($x = 1000000; $x <= $max_pinjaman; $x += 1000000) {
                                                    ?>
                                                    <option value="<?= $x; ?>"><?= number_format($x); ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jangka Waktu&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <select class="form-control form-control-sm" name="jangka_waktu" required>
                                                <option value="">Pilih <b>Jangka Waktu</b></option>
                                                <?php
                                                $max_jangka = 48;
                                                for ($x = 1; $x <= $max_jangka; $x++) {
                                                    ?>
                                                    <option value="<?= $x; ?>"><?= $x; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
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