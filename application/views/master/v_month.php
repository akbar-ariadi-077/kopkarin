<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Number (1 dig)</th>
                                    <th>Number (2 dig)</th>
                                    <th>Up Text ID</th>
                                    <th>Pr Text ID</th>
                                    <th>Up Text EN</th>
                                    <th>Pr Text EN</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $z = 0; ?>
                                <?php foreach ($m_month as $y) : ?>
                                    <tr>
                                        <?php $z += 1; ?>
                                        <td><?= $z; ?></td>
                                        <td><?= $y['int1_bulan']; ?></td>
                                        <td><?= $y['int2_bulan']; ?></td>
                                        <td><?= $y['txt_up_id_bulan']; ?></td>
                                        <td><?= $y['txt_pr_id_bulan']; ?></td>
                                        <td><?= $y['txt_up_en_bulan']; ?></td>
                                        <td><?= $y['txt_pr_en_bulan']; ?></td>
                                        <td>
                                            <span class="badge badge-light-<?= ($y['status_bulan'] == 1) ? 'success' : 'danger' ?> mb-2 me-4">
                                                <b><?= ($y['status_bulan'] == 1) ? 'Active' : 'Inactive'; ?></b>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>