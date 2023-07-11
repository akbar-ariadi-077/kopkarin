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
                                    <th>Year</th>
                                    <th>Month</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                    <th class="no-content">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $z = 0; ?>
                                <?php foreach ($transaction as $y) : ?>
                                    <tr>
                                        <?php $z += 1; ?>
                                        <td><?= $z; ?></td>
                                        <td><?= $y['year']; ?></td>
                                        <td><?= $y['month']; ?></td>
                                        <td><?= $y['category']; ?></td>
                                        <td><?= $y['sub_category']; ?></td>
                                        <td><?= $y['qty']; ?></td>
                                        <td><?= $y['price']; ?></td>
                                        <td><?= $y['amount']; ?></td>
                                        <td><?= $y['payment_method']; ?></td>
                                        <td><?= $y['remark']; ?></td>
                                        <td>
                                            <span class="badge badge-light-<?= ($y['status'] == 1) ? 'success' : 'danger' ?> mb-2 me-4">
                                                <b><?= ($y['status'] == 1) ? 'Active' : 'Inactive'; ?></b>
                                            </span>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                            </svg>
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