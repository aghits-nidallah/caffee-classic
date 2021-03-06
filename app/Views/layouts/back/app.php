<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/fontawesome-free/css/all.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets-back/css/adminlte.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/daterangepicker/daterangepicker.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/summernote/summernote-bs4.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets-back/plugins/select2/css/select2.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?= $this->include('layouts/back/preloader') ?>
        <?= $this->include('layouts/back/header') ?>
        <?= $this->include('layouts/back/sidebar') ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <?= $this->renderSection('page_title') ?>
                            </h1>
                        </div>
                    </div>

                    <!-- Validation error -->
                    <?php if (session('validation_errors')): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <?php foreach(session('validation_errors') as $error): ?>
                                <p>
                                    <?= $error ?>
                                </p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Global error -->
                    <?php if (session('error')): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <?= session('error') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Success alert -->
                    <?php if (session('success')): ?>
                        <div class="alert alert-success alert-dismissible">
                            <?= session('success') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
            </section>
        </div>

        <?php
            // $this->include('layouts/back/control-sidebar')
        ?>
    </div>

    <script src="<?= base_url('/assets-back/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('/assets-back/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/jszip/jszip.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/pdfmake/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/pdfmake/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/select2/js/select2.min.js') ?>"></script>
    <script>
        jQuery(function() {
            $(".datatable").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#DataTables_Table_0_wrapper .col-md-6:eq(0)');

            $(".select2").select2();
        })

        $.widget.bridge('uibutton', $.ui.button)

        function confirmDeletion(event) {
            swal.fire({
                title: 'Hapus data',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
            }).then(result => {
                if (result.isConfirmed) {
                    swal.fire(
                        'Dikonfirmasi',
                        'Data akan dihapus.',
                        'info',
                    );

                    $(event.target).closest('form').submit();
                } else {
                    swal.fire(
                        'Dibatalkan',
                        'Data batal dihapus, data Anda aman.',
                        'info',
                    );
                }
            })
        }
    </script>
    <script src="<?= base_url('/assets-back/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/sparklines/sparkline.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/moment/moment.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/daterangepicker/daterangepicker.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/summernote/summernote-bs4.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
    <script src="<?= base_url('/assets-back/js/adminlte.js') ?>"></script>

    <!-- Admin LTE base template with CI4 made by Aghits Nidallah -->
    <!-- CI4 is licensed under MIT License (see /LICENSE for more info) -->
    <!-- Admin LTE is licensed under MIT License, its respective plugins are belongs to their own License -->
</body>

</html>