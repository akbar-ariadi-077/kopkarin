<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <span id="data"></span>
            <br>
            <button class="btn btn-dark" onclick="history.back()">
                <i data-feather="arrow-left"></i>
                <span class="btn-text-inner">Kembali</span>
            </button>
            <br>
            <?php foreach ($m_iduser as $us) : ?>
                <div class="account-settings-container layout-top-spacing">
                    <div class="account-content">
                        <div class="tab-content" id="animateLineContent-4">
                            <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                                        <div class="user-profile">
                                            <div class="widget-content widget-content-area">
                                                <div class="text-center user-info">
                                                    <div class="profile-image mt-4 pe-md-4">
                                                        <div class="img-uploader-content">
                                                            <img src="<?= base_url(); ?>assets/src/assets/img/pp/anggota/<?= (isset($user_data['photo_profile']) ? $user_data['photo_profile'] : 'profile-38.png'); ?>" width="90" height="90" alt="<?= $this->session->userdata('username'); ?>" />
                                                        </div>
                                                    </div>
                                                    <p class="">
                                                        <?= $us['nama_anggota']; ?>
                                                    </p>
                                                </div>
                                                <div class="text-center">
                                                    <?php if ($this->session->flashdata('ubah-pp-berhasil')) : ?>
                                                        <p class="form-label alert alert-success alert-dismissable fade show" style="text-align: center;">
                                                            <?= $this->session->flashdata('ubah-pp-berhasil'); ?>
                                                        </p>
                                                    <?php elseif ($this->session->flashdata('ubah-pp-gagal')) : ?>
                                                        <p class="form-label alert alert-danger alert-dismissable fade show" style="text-align: center;">
                                                            <?= $this->session->flashdata('ubah-pp-gagal'); ?>
                                                        </p>
                                                    <?php elseif ($this->session->flashdata('ubah-password-berhasil')) : ?>
                                                        <p class="form-label alert alert-success alert-dismissable fade show" style="text-align: center;">
                                                            <?= $this->session->flashdata('ubah-password-berhasil'); ?>
                                                        </p>
                                                    <?php elseif ($this->session->flashdata('password-lama-salah')) : ?>
                                                        <p class="form-label alert alert-danger alert-dismissable fade show" style="text-align: center;">
                                                            <?= $this->session->flashdata('password-lama-salah'); ?>
                                                        </p>
                                                    <?php elseif ($this->session->flashdata('password-baru-salah')) : ?>
                                                        <p class="form-label alert alert-danger alert-dismissable fade show" style="text-align: center;">
                                                            <?= $this->session->flashdata('password-baru-salah'); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                    <button type="button" class="btn btn-info mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#modalUbahFotoProfile">Ubah Foto Profil</button>
                                                    <button type="button" class="btn btn-secondary mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#modalUbahPassword">Ubah Password</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modalUbahFotoProfile" tabindex="-1" role="dialog" aria-labelledby="modalUbahFotoProfileTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form method="post" action="<?= base_url() . 'anggota/pp_c/' . $this->session->userdata('iduser'); ?>#data" class="mt-0" enctype="multipart/form-data">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalUbahFotoProfileTitle">Ubah Foto Profil</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h4 class="modal-heading mb-4 mt-2"><b>HARUS MENGGUNAKAN FOTO ASLI</b></h4>
                                                                        <h6 class="modal-heading mb-4 mt-2"><b>Foto maksimal berukuran 1 MB</b></h6>
                                                                        <div class="form-group">
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text">
                                                                                    <i data-feather="user"></i>
                                                                                </span>
                                                                                <input class="form-control file-upload-input" type="file" id="formFile" name="foto_profil" accept="image/png, image/jpeg, image/gif" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary">Ubah Foto Profil</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="modalUbahPassword" tabindex="-1" role="dialog" aria-labelledby="modalUbahPasswordTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form method="post" action="<?= base_url() . 'anggota/pass_c/' . $this->session->userdata('iduser'); ?>#data" class="mt-0">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalUbahPasswordTitle">Ubah Password</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
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
                                                                                <input type="password" class="form-control" placeholder="Password saat ini" aria-label="password" name="password_lama" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text">
                                                                                    <i data-feather="edit"></i>
                                                                                </span>
                                                                                <input type="password" class="form-control" placeholder="Password baru" aria-label="password" name="password_baru1" required>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <span class="input-group-text">
                                                                                    <i data-feather="edit"></i>
                                                                                </span>
                                                                                <input type="password" class="form-control" placeholder="Masukkan lagi Password baru" aria-label="password" name="password_baru2" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="cancel" class="btn btn-light-dark" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="user-info-list">
                                                    <div class="">
                                                        <ul class="contacts-block list-unstyled">
                                                            <li class="contacts-block__item">
                                                                <i data-feather="book-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <?= $us['payroll_anggota']; ?>
                                                            </li>
                                                            <li class="contacts-block__item">
                                                                <i data-feather="home"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <?= $us['nama_dept']; ?>
                                                            </li>
                                                            <li class="contacts-block__item">
                                                                <i data-feather="book"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <?= $us['nama_bank']; ?>
                                                                <?= (($us['cabang_bank'] <> '') ? ' Cabang' . $us['cabang_bank'] : ''); ?>
                                                            </li>
                                                            <li class="contacts-block__item">
                                                                <i data-feather="database"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <?= $us['rekening_anggota']; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->