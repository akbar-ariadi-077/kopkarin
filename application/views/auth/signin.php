<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login Anggota Kopkar PT. Sorini | PT. Sorini Gempol </title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/src/assets/img/favicon.ico" />
    <link href="<?= base_url(); ?>/assets/layouts/horizontal-light-menu/css/light/loader.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url(); ?>/assets/layouts/horizontal-light-menu/css/dark/loader.css" rel="stylesheet"
        type="text/css" />
    <script src="../layouts/horizontal-light-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/layouts/horizontal-light-menu/css/light/plugins.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url(); ?>/assets/src/assets/css/light/authentication/auth-boxed.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url(); ?>/assets/layouts/horizontal-light-menu/css/dark/plugins.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url(); ?>/assets/src/assets/css/dark/authentication/auth-boxed.css" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
</head>

<body class="form">
    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <form class="form-control" method="post" action="<?= base_url(); ?>auth/login">
                                    <div class="col-md-12 mb-3">
                                        <h2>Login</h2>
                                        <?php if ($this->session->flashdata('login-gagal')): ?>
                                            <p class="form-label alert alert-danger alert-dismissable fade show"
                                                style="text-align: center;">
                                                <?= $this->session->flashdata('login-gagal'); ?>
                                            </p>
                                        <?php elseif ($this->session->flashdata('logout-success')): ?>
                                            <p class="form-label alert alert-success alert-dismissable fade show"
                                                style="text-align: center;">
                                                <?= $this->session->flashdata('logout-success'); ?>
                                            </p>
                                        <?php else: ?>
                                            <p>Masukkan username dan password</p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control" name="usern" id="usern">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="passw" id="myInput">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input type="checkbox" class="form-check-input me-3"
                                                    onclick="myFunction()">
                                                <label class="form-check-label" for="form-check-default">
                                                    Lihat Password
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button class="btn btn-secondary w-100">LOGIN</button>
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
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url(); ?>/assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>