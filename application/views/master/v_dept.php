<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <b>
                        <button type="button" class="btn btn-info mb-2 me-4" data-bs-toggle="modal" data-bs-target="#inputFormModal">
                            <i data-feather="file"></i> &nbsp; <span class="btn-text-inner">Input Data Baru</span>
                        </button>
                    </b>

                    <!-- Input Modal -->
                    <div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form method="post" action="<?= base_url() . 'index.php/master/m_dept_new'; ?>" class="mt-0">
                                    <div class="modal-header" id="inputFormModalLabel">
                                        <h5 class="modal-title">Input Data <b>Department</b> Baru</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="tag"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Nama Department" aria-label="nama" name="yyyy" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="cancel" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area br-8">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Depatment</th>
                                    <th>Status</th>
                                    <th class="no-content">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $z = 0; ?>
                                <?php foreach ($m_dept as $y) : ?>
                                    <tr>
                                        <?php $z += 1; ?>
                                        <td><?= $z; ?></td>
                                        <td><?= $y['nama_dept']; ?></td>
                                        <td>
                                            <span class="badge badge-light-<?= ($y['status_dept'] == 1) ? 'success' : 'danger' ?> mb-2 me-4">
                                                <b><?= ($y['status_dept'] == 1) ? 'Active' : 'Inactive'; ?></b>
                                            </span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-light-info mb-2 me-4 btn-rounded" data-bs-toggle="modal" data-bs-target="#updateFormModal<?= $y['id_dept']; ?>">
                                                <i data-feather="edit"></i>
                                            </button>

                                            <!-- Update Modal -->
                                            <div class="modal fade inputForm-modal" id="updateFormModal<?= $y['id_dept']; ?>" tabindex="-1" role="dialog" aria-labelledby="updateFormModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form method="post" action="<?= base_url() . 'index.php/master/m_dept_edit/' . $y['id_dept']; ?>" class="mt-0">
                                                            <div class="modal-header" id="updateFormModalLabel">
                                                                <h5 class="modal-title">Update Data <b>BANK</b></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">
                                                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="tag"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" value="<?= $y['nama_dept']; ?>" aria-label="nama" name="yyyy" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="cancel" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="<?= base_url() . 'index.php/master/m_dept_del/' . $y['id_dept']; ?>">
                                                <button type="button" class="btn btn-light-danger mb-2 me-4 btn-rounded">
                                                    <i data-feather="x-circle"></i>
                                                </button>
                                            </a>
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