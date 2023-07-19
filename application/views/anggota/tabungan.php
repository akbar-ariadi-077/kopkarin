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
                                <h3 style="text-align: center; font-weight: bold;"><u>DATA SIMPANAN SUKARELA
                                        (TABUNGAN)</u></h3>
                            </div>
                        </div>
                        <br>
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bulan</th>
                                    <th>Jumlah</th>
                                    <th>Diambil</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $z = 0;
                                $saldo = 0;
                                foreach ($a_tabungan as $y):
                                    $saldo = $saldo + ($y['tabungan_anggota'] + $y['tabungan_anggota_diambil']);
                                    ?>
                                    <tr>
                                        <?php $z += 1; ?>
                                        <td>
                                            <?= $z; ?>
                                        </td>
                                        <td align="left">
                                            <?= $y['txt_pr_id_bulan'] . ' ' . $y['text_tahun']; ?>
                                        </td>
                                        <td align="right">
                                            <?= number_format($y['tabungan_anggota']); ?>
                                        </td>
                                        <td align="right">
                                            <?= number_format($y['tabungan_anggota_diambil']); ?>
                                        </td>
                                        <td align="right">
                                            <?= number_format($saldo); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->