<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() . 'index.php/anggota/m_anggota'; ?>"> Anggota </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Simp. Wajib & Pokok </li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Anggota</th>
                                    <th>Nomor Anggota</th>
                                    <!-- <th>Department</th> -->
                                    <th>Tahun</th>
                                    <?php foreach ($all_bulan as $y) : ?>
                                        <th><?= $y['txt_pr_id_bulan']; ?></th>
                                    <?php endforeach; ?>
                                    <!-- <th>Total</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $z = 0; ?>
                                <?php foreach ($all_sidi as $x) : ?>
                                    <tr>
                                        <?php $z += 1; ?>
                                        <td><?= $z; ?></td>
                                        <td><?= $x['nama_anggota']; ?></td>
                                        <td><?= $x['payroll_anggota']; ?></td>
                                        <!-- <td>&nbsp;</td> -->
                                        <td><?= $x['text_tahun']; ?></td>
                                        <?php foreach ($all_simp as $v) : ?>
                                            <?php if ($v['payroll_anggota'] == $x['payroll_anggota']) : ?>
                                                <td align="right"><?= number_format($v['jumlah_simpanan']); ?></td>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <!-- <td align="right"><?= number_format($x['jumlah_simpanan']); ?></td> -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>