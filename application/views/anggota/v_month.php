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
                                    <th>Up Text EN</th>
                                    <th>Pr Text EN</th>
                                    <th>Up Text ID</th>
                                    <th>Pr Text ID</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $z = 0; ?>
                                <?php foreach ($mmonth as $y) : ?>
                                    <tr>
                                        <?php $z += 1; ?>
                                        <td><?= $z; ?></td>
                                        <td><?= $y['month_number']; ?></td>
                                        <td><?= $y['month_num_text']; ?></td>
                                        <td><?= $y['month_text_en_up']; ?></td>
                                        <td><?= $y['month_text_en_pr']; ?></td>
                                        <td><?= $y['month_text_id_up']; ?></td>
                                        <td><?= $y['month_text_id_pr']; ?></td>
                                        <td>
                                            <span class="badge badge-light-<?= ($y['status'] == 1) ? 'success' : 'danger' ?> mb-2 me-4">
                                                <b><?= ($y['status'] == 1) ? 'Active' : 'Inactive'; ?></b>
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