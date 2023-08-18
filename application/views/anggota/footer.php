<!--  BEGIN FOOTER  -->
<div class="footer-wrapper mt-0">
    <div class="footer-section f-section-1">
        <p class="">Copyright © <span class="dynamic-year">2023</span> <a target="_blank"
                href="https://ausquad.com/">AUsquad</a>, All rights reserved.</p>
    </div>
    <div class="footer-section f-section-2">
        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-heart">
                <path
                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                </path>
            </svg></p>
    </div>
</div>
<!--  END CONTENT AREA  -->
</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="<?= base_url(); ?>assets/src/plugins/src/global/vendors.min.js"></script>
<script src="<?= base_url(); ?>assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>assets/layouts/horizontal-light-menu/app.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/waves/waves.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/highlight/highlight.pack.js"></script>
<!-- END GLOBAL MANDATORY STYLES -->

<!--  BEGIN CUSTOM SCRIPT FILE  -->
<script src="<?= base_url(); ?>assets/src/plugins/src/filepond/filepond.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
<script src="<?= base_url(); ?>assets/src/assets/js/custom.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/notification/snackbar/snackbar.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
<script src="<?= base_url(); ?>assets/src/assets/js/users/account-settings.js"></script>
<!--  END CUSTOM SCRIPTS FILE  -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="<?= base_url(); ?>assets/src/assets/js/scrollspyNav.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/src/font-icons/feather/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script src="<?= base_url(); ?>assets/src/plugins/src/table/datatable/datatables.js"></script>
<script src="<?= base_url(); ?>assets/src/datatable/jquery-3.7.0.js"></script>
<script src="<?= base_url(); ?>assets/src/datatable/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/src/datatable/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/src/datatable/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/src/datatable/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/src/datatable/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/src/datatable/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/src/datatable/buttons.print.min.js"></script>
<script>
    $('#zero-config').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Halaman _PAGE_ dari _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Cari...",
            "sLengthMenu": "Baris :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [5, 7, 10, 12, 20, 24, 36, 48, 50],
        "pageLength": 12
        // ,
        // "dom": 'Bfrtip',
        // "buttons": [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ]
    });
</script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

</html>