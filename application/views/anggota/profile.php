<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <?php include "stayontop.php"; ?>

            <div class="account-settings-container layout-top-spacing">
                <div class="account-content">
                    <div class="tab-content" id="animateLineContent-4">
                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                            aria-labelledby="animated-underline-home-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info">
                                        <div class="info">
                                            <h6 class="">General Information</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="profile-image  mt-4 pe-md-4">
                                                                <div class="img-uploader-content">
                                                                    <input type="file" class="filepond" name="filepond"
                                                                        accept="image/png, image/jpeg, image/gif" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Nama Lengkap</label>
                                                                            <input type="text" class="form-control mb-3"
                                                                                id="fullName" placeholder="Full Name"
                                                                                value="<?= $us['nama_anggota']; ?>"
                                                                                disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="profession">Payroll
                                                                                Anggota</label>
                                                                            <input type="text" class="form-control mb-3"
                                                                                id="profession" placeholder="Designer"
                                                                                value="<?= $us['payroll_anggota']; ?>"
                                                                                disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="country">Department</label>
                                                                            <select class="form-select mb-3" id="dept"
                                                                                name="dept" id="country">
                                                                                <option selected disabled>-- Pilih
                                                                                    Department --</option>
                                                                                <?php foreach ($all_dept as $section): ?>
                                                                                    <?php if ($section['id_dept'] == $y['dept_anggota']): ?>
                                                                                        <option
                                                                                            value="<?= $section['id_dept']; ?>"
                                                                                            selected><?= $section['nama_dept']; ?></option>
                                                                                    <?php else: ?>
                                                                                        <option
                                                                                            value="<?= $section['id_dept']; ?>">
                                                                                            <?= $section['nama_dept']; ?>
                                                                                        </option>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="address">Nama Bank</label>
                                                                            <input type="text" class="form-control mb-3"
                                                                                id="address" placeholder="Address"
                                                                                value="New York">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="location">Cabang Bank</label>
                                                                            <input type="text" class="form-control mb-3"
                                                                                id="location" placeholder="Location">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="location">Nomor Rekening</label>
                                                                            <input type="text" class="form-control mb-3"
                                                                                id="location" placeholder="Location">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-1">
                                                                        <div class="form-group text-end">
                                                                            <button
                                                                                class="btn btn-secondary">Save</button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->