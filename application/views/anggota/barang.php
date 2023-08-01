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
                                <h3 style="text-align: center; font-weight: bold;"><u>DATA PINJAMAN BARANG</u></h3>
                            </div>
                        </div>
                        <br>
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
                                                    <?= (isset($a_pengajuan['nama_barang'])) ? $a_pengajuan['nama_barang'] : '-'; ?>
                                                </b>
                                            </span>
                                        </h4>
                                    </td>
                                </tr>
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
                                                    <?= (isset($a_pengajuan['jangka_waktu'])) ? number_format($a_pengajuan['jangka_waktu']) : '0'; ?>
                                                    kali
                                                </b>
                                            </span>
                                        </h5>
                                    </td>
                                </tr>
                                <?php
                                /*
                                <tr>
                                 <td width="50%" align="right">
                                     <h6>Bunga&nbsp;&nbsp;</h6>
                                 </td>
                                 <td width="50%" align="left">
                                     <h5>
                                         <span class="badge badge-light-dark">
                                             <b>
                                                 <?= (isset($a_pengajuan['bunga_pinjaman_persen'])) ? number_format($a_pengajuan['bunga_pinjaman_persen'], 1) : '0'; ?>
                                                 %
                                             </b>
                                         </span>
                                     </h5>
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
                                */
                                ?>
                            </tbody>
                        </table>
                        <br />
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Angs Ke</th>
                                    <th>Bulan</th>
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
                                            <?= $y['txt_pr_id_bulan'] . ' ' . $y['text_tahun']; ?>
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