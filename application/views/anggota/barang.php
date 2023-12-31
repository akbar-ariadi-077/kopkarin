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
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <br><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h3 style="text-align: center; font-weight: bold;"><u>DATA PINJAMAN BARANG</u></h3>
                            </div>
                        </div>
                    <?php /*
                        <br>
                    
                        <table style="width: 100%; margin: auto;" border="0">
                            <tbody>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Bulan Pinjam&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= (isset($a_pengajuan['txt_pr_id_bulan']) && isset($a_pengajuan['text_tahun'])) ? $a_pengajuan['txt_pr_id_bulan'] . ' ' . $a_pengajuan['text_tahun'] : '-'; ?>
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
                                        <h5>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= (isset($a_pengajuan['jumlah_pinjaman'])) ? number_format($a_pengajuan['jumlah_pinjaman']) : '0'; ?>
                                                </b>
                                            </span>
                                        </h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Jangka Waktu&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h5>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= (isset($a_pengajuan['jangka_waktu'])) ? number_format($a_pengajuan['jangka_waktu']) : '0'; ?> kali
                                                </b>
                                            </span>
                                        </h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Sisa Pinjaman&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h5>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?php foreach ($a_sisa_bara as $y): ?>
                                                        <?= (isset($y['sisa_pinjaman'])) ? number_format($y['sisa_pinjaman']) : '0'; ?>
                                                    <?php endforeach; ?>
                                                </b>
                                            </span>
                                        </h5>
                                    </td>
                                </tr>
                                <?php
                                /*
                                <tr>
                                    <td width="50%" align="right">
                                        <h6>Nama Barang&nbsp;&nbsp;</h6>
                                    </td>
                                    <td width="50%" align="left">
                                        <h4>
                                            <span class="badge badge-light-dark">
                                                <b>
                                                    <?= (isset($a_pengajuan['nama_barang'])) ? $a_pengajuan['nama_barang'] : '-'; ?>
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
                                <h5>
                                <span class="badge badge-light-dark">
                                             <b>
                                                 <?= (isset($a_pengajuan['bunga_pinjaman'])) ? number_format($a_pengajuan['bunga_pinjaman']) : '0'; ?>
                                             </b>
                                         </span>
                                     </h5>
                                 </td>
                                </tr>
                                *
                                ?>
                            </tbody>
                        </table>
                        */ ?>
                        <br /><br />
                        
                        <?php foreach ($a_sisabara as $z) : ?>
                            <div class="row" style="margin: 5px;">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card bg-light-warning">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $z['nama_barang'] . ' (' . $z['txt_pr_id_bulan'] . ' ' . $z['text_tahun'] . ')'; ?></h5>
                                            <p class="mb-0" style="text-align: right;">
                                                Angsuran ke <?= $z['angsuran_ke']; ?> dari <?= $z['jangka_waktu']; ?><br>
                                                Total Pinjaman = <?= number_format($z['jumlah_pinjaman']); ?><br>
                                                Angsuran Pokok per Bulan = <?= number_format($z['angsuran_pokok']); ?><br>
                                                Bunga per Bulan = <?= number_format($z['bunga_pinjaman']); ?><br>
                                                Total Bayar per Bulan = <?= number_format($z['angsuran_pokok'] + $z['bunga_pinjaman']); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <br>
                        <br />
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Angs Ke</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>Nama Barang</th>
                                    <th>Angs Pokok</th>
                                    <th>Angs Bunga</th>
                                    <th>Total</th>
                                    <th>Sisa Pinjaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $z = 0;
                                $saldo = ((isset($a_pengajuan['jumlah_pinjaman'])) ? $a_pengajuan['jumlah_pinjaman'] : 0);
                                foreach ($a_pinjaman as $y):
                                    $saldo = $saldo - $y['angsuran_pokok'];
                                    ?>
                                    <tr>
                                        <?php //$z += 1; 
                                            ?>
                                        <!-- <td>
                                            <?php //= $z; 
                                                ?>
                                        </td> -->
                                        <td>
                                            <?= $y['angsuran_ke']; ?>
                                        </td>
                                        <td align="left">
                                            <?= $y['txt_pr_id_bulan']; ?>
                                        </td>
                                        <td align="left">
                                            <?= $y['text_tahun']; ?>
                                        </td>
                                        <td align="left">
                                            <?= $y['nama_barang']; ?>
                                        </td>
                                        <td align="right">
                                            <?= number_format($y['angsuran_pokok']); ?>
                                        </td>
                                        <td align="right">
                                            <?= number_format($y['angsuran_bunga']); ?>
                                        </td>
                                        <td align="right">
                                            <?= number_format($y['angsuran_pokok'] + $y['angsuran_bunga']); ?>
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