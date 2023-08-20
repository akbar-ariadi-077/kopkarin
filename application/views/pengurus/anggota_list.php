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
                                <form method="post" action="<?= base_url() . 'index.php/anggota/m_anggota_new'; ?>" class="mt-0">
                                    <div class="modal-header" id="inputFormModalLabel">
                                        <h5 class="modal-title">Input Data <b>ANGGOTA</b> Baru</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
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
                                                <input type="text" class="form-control" placeholder="Masukkan nama lengkap anggota" aria-label="nama" name="nama" required>
                                            </div>
                                            <!-- <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="book-open"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Masukkan nomor keanggotaan" aria-label="nomor" name="nomor" required>
                                            </div> -->
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="book-open"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Masukkan ID Payroll / Nomor Keanggotaan" aria-label="payroll" name="payroll" required>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="home"></i>
                                                </span>
                                                <select class="form-select" id="dept" name="dept" required>
                                                    <option selected disabled>-- Pilih Department --</option>
                                                    <?php foreach ($all_dept as $section): ?>
                                                        <option value="<?= $section['id_dept']; ?>"><?= $section['nama_dept']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="upload-cloud"></i>
                                                </span>
                                                <input type="number" class="form-control" placeholder="Masukkan jumlah Simpanan Pokok anggota" aria-label="simpok" name="simpok" required>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="shopping-cart"></i>
                                                </span>
                                                <input type="number" class="form-control" placeholder="Masukkan jumlah Simpanan Wajib anggota" aria-label="simwa" name="simwa" required>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="book"></i>
                                                </span>
                                                <select class="form-select" id="bank" name="bank" required>
                                                    <option selected disabled>-- Pilih Bank --</option>
                                                    <?php foreach ($all_bank as $section): ?>
                                                        <option value="<?= $section['id_bank']; ?>"><?= $section['nama_bank']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="database"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening anggota" aria-label="rekening" name="rekening">
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i data-feather="map-pin"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Masukkan Cabang Bank anggota" aria-label="cabang" name="cabang">
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
                                    <th>Nama Anggota</th>
                                    <th>Nomor Anggota</th>
                                    <th>Department</th>
                                    <th>Simpok</th>
                                    <th>Simpwa</th>
                                    <th>Bank</th>
                                    <th>Nomor Rekening</th>
                                    <th>Cabang Bank</th>
                                    <th>Status</th>
                                    <th class="no-content">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $z = 0; ?>
                                <?php foreach ($m_anggota as $y): ?>
                                    <tr>
                                        <?php $z += 1; ?>
                                        <td>
                                            <?= $z; ?>
                                        </td>
                                        <td>
                                            <?= $y['nama_anggota']; ?>
                                        </td>
                                        <td>
                                            <?= $y['payroll_anggota']; ?>
                                        </td>
                                        <td>
                                            <?= $y['nama_dept']; ?>
                                        </td>
                                        <td align="right">
                                            <?= number_format($y['simpok_anggota']); ?>
                                        </td>
                                        <td align="right">
                                            <?= number_format($y['simwa_anggota']); ?>
                                        </td>
                                        <td>
                                            <?= $y['nama_bank']; ?>
                                        </td>
                                        <td>
                                            <?= $y['rekening_anggota']; ?>
                                        </td>
                                        <td>
                                            <?= $y['cabang_bank']; ?>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-<?= ($y['status_anggota'] == 1) ? 'success' : 'danger' ?> mb-2 me-4">
                                                <b>
                                                    <?= ($y['status_anggota'] == 1) ? 'Active' : 'Inactive'; ?>
                                                </b>
                                            </span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-light-info mb-2 me-4 btn-rounded" data-bs-toggle="modal" data-bs-target="#updateFormModal<?= $y['id_anggota']; ?>">
                                                <i data-feather="edit"></i>
                                            </button>

                                            <!-- Update Modal -->
                                            <div class="modal fade inputForm-modal" id="updateFormModal<?= $y['id_anggota']; ?>" tabindex="-1" role="dialog" aria-labelledby="updateFormModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form method="post" action="<?= base_url() . 'index.php/anggota/m_anggota_edit/' . $y['id_anggota']; ?>" class="mt-0">
                                                            <div class="modal-header" id="updateFormModalLabel">
                                                                <h5 class="modal-title">Update Data <b>ANGGOTA</b></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">
                                                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
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
                                                                        <input type="text" class="form-control" placeholder="Masukkan nama lengkap anggota" aria-label="nama" name="nama"
                                                                            value="<?= $y['nama_anggota']; ?>">
                                                                    </div>
                                                                    <!-- <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="book-open"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Masukkan nomor keanggotaan" aria-label="nomor" name="nomor" value="<?= $y['nomor_anggota']; ?>">
                                                                    </div> -->
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="book-open"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Masukkan ID Payroll" aria-label="payroll" name="payroll"
                                                                            value="<?= $y['payroll_anggota']; ?>">
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="home"></i>
                                                                        </span>
                                                                        <select class="form-select" id="dept" name="dept" required>
                                                                            <option selected disabled>-- Pilih Department --</option>
                                                                            <?php foreach ($all_dept as $section): ?>
                                                                                <?php if ($section['id_dept'] == $y['dept_anggota']): ?>
                                                                                    <option value="<?= $section['id_dept']; ?>" selected><?= $section['nama_dept']; ?></option>
                                                                                <?php else: ?>
                                                                                    <option value="<?= $section['id_dept']; ?>"><?= $section['nama_dept']; ?></option>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                        <!-- <input type="text" class="form-control" placeholder="Masukkan nama department anggota" aria-label="dept" name="dept" value="<?= $y['dept_anggota']; ?>"> -->
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="upload-cloud"></i>
                                                                        </span>
                                                                        <input type="number" class="form-control" placeholder="Masukkan jumlah Simpanan Pokok anggota" aria-label="simpok" name="simpok"
                                                                            value="<?= $y['simpok_anggota']; ?>">
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="shopping-cart"></i>
                                                                        </span>
                                                                        <input type="number" class="form-control" placeholder="Masukkan jumlah Simpanan Wajib anggota" aria-label="simwa" name="simwa"
                                                                            value="<?= $y['simwa_anggota']; ?>">
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="book"></i>
                                                                        </span>
                                                                        <select class="form-select" id="bank" name="bank" required>
                                                                            <option selected disabled>-- Pilih Bank --</option>
                                                                            <?php foreach ($all_bank as $section): ?>
                                                                                <?php if ($section['id_bank'] == $y['bank_anggota']): ?>
                                                                                    <option value="<?= $section['id_bank']; ?>" selected><?= $section['nama_bank']; ?></option>
                                                                                <?php else: ?>
                                                                                    <option value="<?= $section['id_bank']; ?>"><?= $section['nama_bank']; ?></option>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                        <!-- <input type="text" class="form-control" placeholder="Masukkan nama Bank anggota" aria-label="bank" name="bank" value="<?= $y['bank_anggota']; ?>"> -->
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="database"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening anggota" aria-label="rekening" name="rekening"
                                                                            value="<?= $y['rekening_anggota']; ?>">
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="map-pin"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Masukkan Cabang Bank anggota" aria-label="cabang" name="cabang"
                                                                            value="<?= $y['cabang_bank']; ?>">
                                                                    </div>
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">
                                                                            <i data-feather="user-check"></i>
                                                                        </span>
                                                                        <select class="form-select" id="status" name="status">
                                                                            <option selected disabled>-- Status Anggota --</option>
                                                                            <?php if ($y['status_anggota'] == 1): ?>
                                                                                <option value="0">Tidak Aktif</option>
                                                                                <option value="1" selected>Aktif</option>
                                                                            <?php else: ?>
                                                                                <option value="0" selected>Tidak Aktif</option>
                                                                                <option value="1">Aktif</option>
                                                                            <?php endif; ?>
                                                                        </select>
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

                                            <a href="<?= base_url() . 'index.php/anggota/m_anggota_del/' . $y['id_anggota']; ?>">
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