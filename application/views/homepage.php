<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Homepage | Kopkar PT. Sorini | PT. Sorini Gempol </title>
    <link href="<?= base_url(); ?>assets/layouts/horizontal-light-menu/css/light/loader.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url(); ?>assets/layouts/horizontal-light-menu/css/dark/loader.css" rel="stylesheet"
        type="text/css" />
    <script src="<?= base_url(); ?>assets/layouts/horizontal-light-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/layouts/horizontal-light-menu/css/light/plugins.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url(); ?>assets/src/assets/css/light/pages/error/style-maintanence.css" rel="stylesheet"
        type="text/css" />

    <link href="<?= base_url(); ?>assets/layouts/horizontal-light-menu/css/dark/plugins.css" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url(); ?>assets/src/assets/css/dark/pages/error/style-maintanence.css" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <style>
        body.dark .theme-logo.dark-element {
            display: inline-block;
        }

        .theme-logo.dark-element {
            display: none;
        }

        body.dark .theme-logo.light-element {
            display: none;
        }

        .theme-logo.light-element {
            display: inline-block;
        }
    </style>

</head>

<body class="maintanence text-center">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <div class="container-fluid maintanence-content">
        <div class="">
            <div class="maintanence-hero-img">
                <a href="./index.html">
                    <img alt="logo" src="<?= base_url(); ?>assets/src/assets/img/kopkarin/koperasi-indonesia-2.png"
                        class="dark-element theme-logo" style="width: 200px; height: 200px;">
                    <img alt="logo" src="<?= base_url(); ?>assets/src/assets/img/kopkarin/koperasi-indonesia-2.png"
                        class="light-element theme-logo" style="width: 200px; height: 200px;">
                </a>
            </div>
            <h1 class="error-title">Koperasi Karyawan</h1>
            <p class="error-text">PT. SORINI AGRO ASIA CORPORINDO</p>
            <a href="<?= base_url(); ?>auth" class="btn btn-dark mt-4">MASUK</a>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url(); ?>assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>