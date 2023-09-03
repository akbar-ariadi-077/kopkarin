<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->

            <!-- /BREADCRUMB -->
            <span id="data"></span>
            <br><br><br><br>
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <button class="btn btn-dark" onclick="history.back()">
                        <i data-feather="arrow-left"></i>
                        <span class="btn-text-inner">Kembali</span>
                    </button>
                    <br>
                    <div class="widget-content widget-content-area br-8">
                        <br><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h3 style="text-align: center; font-weight: bold;"><u>DATA TRANSAKSI</u></h3>
                            </div>
                        </div>
                        <br>
                        <table id="zero-config" class="table dt-table-hover display compact" style="width:100%">
                            <thead>
                                <!--<tr>-->
                                <!--    <th rowspan="2" align="center">No.</th>-->
                                <!--    <th colspan="2" align="center">DP</th>-->
                                <!--    <th colspan="4" align="center">Sales</th>-->
                                <!--    <th rowspan="2" align="center">Kurang/Lebih</th>-->
                                <!--    <th rowspan="2" align="center">Keterangan</th>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                <!--    <th>Tanggal</th>-->
                                <!--    <th>Jumlah</th>-->
                                <!--    <th>Tanggal</th>-->
                                <!--    <th>Volume</th>-->
                                <!--    <th>Price</th>-->
                                <!--    <th>Jumlah</th>-->
                                <!--</tr>-->
                                <tr>
                                    <th  style="text-align: center;">No.</th>
                                    <th colspan="2" style="text-align: center;">DP</th>
                                    <th colspan="4" style="text-align: center;">Sales</th>
                                    <th style="text-align: center;">Kurang/Lebih</th>
                                    <th style="text-align: center;">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $z = 0; $total = 0; $total_all = 0; ?>
                                <?php foreach ($transaksi as $y): ?>
                                    <?= ($y['jenis_transaksi'] == 'DP Masuk') ? $total += $y['jumlah'] : $total -= $y['jumlah']; ?>
                                    <tr>
                                        <td>
                                            <?= $z += 1; ?>
                                        </td>
                                        <td>
                                            <?= ($y['jenis_transaksi'] == 'DP Masuk') ? $y['tanggal_transaksi'] : '&nbsp;'; ?>
                                        </td>
                                        <td align="right">
                                            <?= ($y['jenis_transaksi'] == 'DP Masuk') ? number_format($y['jumlah']) : '&nbsp;'; ?>
                                        </td>
                                        <td>
                                            <?= ($y['jenis_transaksi'] == 'Penjualan') ? $y['tanggal_transaksi'] : '&nbsp;'; ?>
                                        </td>
                                        <td align="right">
                                        <?= ($y['jenis_transaksi'] == 'Penjualan') ? number_format($y['quantity_transaksi'],2) : '&nbsp;'; ?>
                                        </td>
                                        <td align="right">
                                        <?= ($y['jenis_transaksi'] == 'Penjualan') ? number_format($y['harga_satuan'],2) : '&nbsp;'; ?>
                                        </td>
                                        <td align="right">
                                        <?= ($y['jenis_transaksi'] == 'Penjualan') ? number_format($y['jumlah']) : '&nbsp;'; ?>
                                        </td>
                                        <td align="right">
                                            <?php $total_all += $total; $totall = $total_all; ?>
                                            <!--<?= number_format($total_all); ?>-->
                                            <?= ($totall < 0) ? '('.number_format(abs($totall)).')' : number_format($totall); ?>
                                        </td>
                                        <td>
                                            <?= $y['keterangan_transaksi']; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <br>
                        <div class="col-lg-12 col-md-12">
                            <h3 style="text-align: center; font-weight: bold;"><u><?= $customer_nam; ?></u></h3>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->