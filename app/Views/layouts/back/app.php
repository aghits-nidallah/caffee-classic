<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets-back/plugins/fontawesome-free/css/all.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets-back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets-back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets-back/plugins/jqvmap/jqvmap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets-back/css/adminlte.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets-back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets-back/plugins/daterangepicker/daterangepicker.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets-back/plugins/summernote/summernote-bs4.min.css') ?>" />
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
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
            </section>
        </div>

        <?= $this->include('layouts/back/control-sidebar') ?>
    </div>

    <script src="<?= base_url('assets-back/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="<?= base_url('assets-back/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/sparklines/sparkline.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/moment/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/daterangepicker/daterangepicker.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/summernote/summernote-bs4.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
    <script src="<?= base_url('assets-back/js/adminlte.js') ?>"></script>
    <script src="<?= base_url('assets-back/js/demo.js') ?>"></script>
    <script src="<?= base_url('assets-back/js/pages/dashboard.js') ?>"></script>
</body>

</html>