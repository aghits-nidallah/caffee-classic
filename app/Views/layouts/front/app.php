<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Caffee Classic</title>
    <link rel="shortcut icon" href="<?= base_url('assets-front/images/logo/favourite_icon.png') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-front/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-front/css/fontawesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-front/css/animate.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-front/css/slick.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-front/css/slick-theme.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-front/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-front/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-front/css/style.css'); ?>">
</head>
<body>
    <div class="body_wrap">
        <div id="preloader"></div>
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
                <i class="far fa-arrow-up"></i>
            </a>
        </div>

        <?= $this->include('layouts/front/header'); ?>
        <main>
            <?= $this->include('layouts/front/cart'); ?>
            <?= $this->renderSection('content') ?>
        </main>
        <?= $this->include('layouts/front/footer') ?>
    </div>

    <script src="<?= base_url('assets-front/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/slick.min.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/gmaps.min.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/jquery-ui.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/mCustomScrollbar.js') ?>"></script>
    <script src="<?= base_url('assets-front/js/main.js') ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6"></script>
</body>
</html>