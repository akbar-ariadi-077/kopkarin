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
                                <h3 style="text-align: center; font-weight: bold;"><u>TAMBAH TABUNGAN</u></h3>
                            </div>
                        </div>
                        <br>
                        <table style="width: 100%; margin: auto;" border="0">
                            <form class="form-control" method="post"
                                action="<?= base_url(); ?>anggota/tabungan_tambah_cek#data">
                                <tbody>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Sisa Tabungan&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h4>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?php
                                                        $saldo = 0;
                                                        foreach ($a_tabungan as $y):
                                                            $saldo = $saldo + ($y['tabungan_anggota'] + $y['tabungan_anggota_diambil']);
                                                        endforeach;
                                                        ?>
                                                        <?= (isset($saldo)) ? number_format($saldo) : '0'; ?>
                                                    </b>
                                                </span>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">&nbsp;</td>
                                    </tr>
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    $ynow = date('Y');
                                    $mnow = date('m');
                                    ?>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Tahun Menabung&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <select class="form-control form-control-sm" name="tahun_menabung" required>
                                                <option value="">Pilih <b>Tahun Menabung</b></option>
                                                <?php foreach ($m_tahun as $mt): ?>
                                                    <?php if ($mt['int_tahun'] == $ynow): ?>
                                                        <option value="<?= $mt['id_tahun'] ?>" selected><?= $mt['text_tahun']; ?></option>
                                                    <?php else: ?>
                                                        <option value="<?= $mt['id_tahun'] ?>"><?= $mt['text_tahun']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Bulan Menabung&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <select class="form-control form-control-sm" name="bulan_menabung" required>
                                                <option value="">Pilih <b>Bulan Menabung</b></option>
                                                <?php foreach ($m_bulan as $mb): ?>
                                                    <?php if ($mb['int2_bulan'] == $mnow): ?>
                                                        <option value="<?= $mb['id_bulan'] ?>" selected><?= $mb['txt_pr_id_bulan']; ?></option>
                                                    <?php else: ?>
                                                        <option value="<?= $mb['id_bulan'] ?>"><?= $mb['txt_pr_id_bulan']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="right">
                                            <h6>Jumlah Menabung&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <input class="form-control form-control-sm" type="number"
                                                name="jumlah_menabung" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">&nbsp;</td>
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