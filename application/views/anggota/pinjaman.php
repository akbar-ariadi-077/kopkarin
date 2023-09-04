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
                                <h3 style="text-align: center; font-weight: bold;"><u>DATA PINJAMAN</u></h3>
                            </div>
                        </div>
                        <br>
                        <?php if (isset($a_pengajuan['jumlah_pinjaman'])): ?>
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
                                            <h6>Bunga&nbsp;&nbsp;</h6>
                                        </td>
                                        <td width="50%" align="left">
                                            <h5>
                                                <span class="badge badge-light-dark">
                                                    <b>
                                                        <?= (isset($a_pengajuan['bunga_pinjaman_persen'])) ? number_format($a_pengajuan['bunga_pinjaman_persen'], 1) : '0'; ?> %
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
                                    <tr>
                                        <td width="100%" colspan="2" align="center">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <?php if ($a_pengajuan['status_pinjaman'] == 'Dilunasi') : ?>
                                            <td width="50%" align="right">
                                                <h6>Status Pinjaman&nbsp;&nbsp;</h6>
                                            </td>
                                            <td width="50%" align="left">
                                                <h5>
                                                    <span class="badge badge-light-warning">
                                                        <b>
                                                            PENGAJUAN PELUNASAN
                                                        </b>
                                                    </span>
                                                </h5>
                                            </td>
                                        <?php else: ?>
                                            <td width="100%" colspan="2" align="center">
                                                <button class="btn btn-primary mb-2 me-4 btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#modalPelunasan">P E L U N A S A N</button>

                                                <div class="modal fade" id="modalPelunasan" tabindex="-1" role="dialog" aria-labelledby="modalPelunasanTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <?php 
                                                                    foreach ($m_iduser as $us):
                                                                        $nama = $us['nama_anggota'];
                                                                    endforeach; 
                                                                ?>
                                                                <h5 class="modal-title" id="modalPelunasanTitle">Pelunasan Pinjaman - <?= $nama; ?></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table style="width: 100%; margin: auto;" border="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="50%" align="right">
                                                                                <h6>Sisa Pinjaman&nbsp;&nbsp;</h6>
                                                                            </td>
                                                                            <td width="50%" align="left">
                                                                                <h4>
                                                                                    <span class="badge badge-light-dark">
                                                                                        <b>
                                                                                            <?php foreach ($a_sisa_pinj as $y): ?>
                                                                                                <?= (isset($y['sisa_pinjaman'])) ? number_format($y['sisa_pinjaman']) : '0'; ?>
                                                                                            <?php endforeach; ?>
                                                                                        </b>
                                                                                    </span>
                                                                                </h4>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="50%" align="right">
                                                                                <h6>Sisa Bunga Pinjaman&nbsp;&nbsp;</h6>
                                                                            </td>
                                                                            <td width="50%" align="left">
                                                                                <h5>
                                                                                    <span class="badge badge-light-dark">
                                                                                        <b>
                                                                                            <?= (isset($sisa_bunga_lama)) ? number_format($sisa_bunga_lama) : '0'; ?>
                                                                                        </b>
                                                                                    </span>
                                                                                </h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="50%" align="right">
                                                                                <h6>Sisa Angsuran&nbsp;&nbsp;</h6>
                                                                            </td>
                                                                            <td width="50%" align="left">
                                                                                <h5>
                                                                                    <span class="badge badge-light-dark">
                                                                                        <b>
                                                                                            <?= (isset($sisa_angsuran_lama)) ? number_format($sisa_angsuran_lama) : '0'; ?>x Angsuran
                                                                                        </b>
                                                                                    </span>
                                                                                </h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="50%" align="right">
                                                                                <h6>Total Pelunasan&nbsp;&nbsp;</h6>
                                                                            </td>
                                                                            <td width="50%" align="left">
                                                                                <h5>
                                                                                    <span class="badge badge-light-dark">
                                                                                        <b>
                                                                                            <?php foreach ($a_sisa_pinj as $y): ?>
                                                                                                <?= ((isset($y['sisa_pinjaman'])) && (isset($sisa_bunga_lama))) ? number_format($y['sisa_pinjaman'] + $sisa_bunga_lama) : '0'; ?>
                                                                                            <?php endforeach; ?>
                                                                                        </b>
                                                                                    </span>
                                                                                </h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td width="50%" align="right">
                                                                                <h6>Pelunasan Diajukan&nbsp;&nbsp;</h6>
                                                                            </td>
                                                                            <td width="50%" align="left">
                                                                                <h5>
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
                                                                                </h5>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>TUTUP</button>
                                                                <button type="button" class="btn btn-primary">L U N A S I</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                </tbody>
                            </table>
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
                        <?php else: ?>
                            <table style="width: 100%; margin: auto;" border="0">
                                <tbody>
                                    <tr>
                                        <td width="100%" align="center">
                                            <h2>
                                                <span class="badge badge-success"">
                                                    <b>
                                                        ANDA TIDAK MEMILIKI PINJAMAN :)
                                                    </b>
                                                </span>
                                            </h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br><br>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->