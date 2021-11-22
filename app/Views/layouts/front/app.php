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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <script>
        function removeFromCart(event, id) {
            swal.fire({
                title: 'Konfirmasi',
                text: 'Tambahkan ke keranjang?',
                icon: 'info',
                showCancelButton: true,
            }).then(result => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= site_url('cart/delete/') ?>" + id,
                        type: "POST",
                        success: function(data) {
                            swal.fire({
                                title: 'Berhasil',
                                text: 'Dihapus dari keranjang',
                                icon: 'success',
                            })

                            $(".cart_counter").html(data.cart_count)
                            $(".cart_items_list").html(data.data.map(item => {
                                return `
                                    <div class="cart_item">
                                        <div class="item_image">
                                            <img style="width: 75px; height: 75px; object-fit: cover;" src="<?= site_url() ?>writable/uploads/${item.product_photo_path}" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">
                                                ${item.name}
                                            </h4>
                                            <span class="item_price">
                                                Rp. ${item.price}
                                            </span>
                                            <button type="button" class="remove_btn" onclick="removeFromCart(event, ${item.id})"><i class="fal fa-times"></i></button>
                                        </div>
                                    </div>
                                `;
                            }))
                            $("#subtotal").html('Rp ' + data.data.map(item => {
                                return item.price
                            }).reduce((a, b) => parseInt(a) + parseInt(b)))
                        },
                        error: function(data) {
                            swal.fire({
                                title: 'Gagal',
                                text: 'Tidak dapat menghapus produk dari keranjang',
                                icon: 'error',
                            })
                        }
                    })
                } else {
                    swal.fire(
                        'Dibatalkan',
                        'Tidak dapat menghapus produk dari keranjang',
                        'error',
                    )
                }
            })
        }

        function addToCart(event, id) {
            swal.fire({
                title: 'Konfirmasi',
                text: 'Tambahkan ke keranjang?',
                icon: 'info',
                showCancelButton: true,
            }).then(result => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= site_url('cart') ?>",
                        type: "POST",
                        data: {
                            product_id: id,
                        },
                        success: function(data) {
                            swal.fire({
                                title: 'Berhasil',
                                text: 'Ditambahkan ke keranjang',
                                icon: 'success',
                            })

                            $(event.target).closest('button').hide()
                            $(".cart_counter").html(data.cart_count)
                            $(".cart_items_list").html(data.data.map(item => {
                                return `
                                    <div class="cart_item">
                                        <div class="item_image">
                                            <img style="width: 75px; height: 75px; object-fit: cover;" src="<?= site_url() ?>writable/uploads/${item.product_photo_path}" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h4 class="item_title">
                                                ${item.name}
                                            </h4>
                                            <span class="item_price">
                                                Rp. ${item.price}
                                            </span>
                                            <button type="button" class="remove_btn" onclick="removeFromCart(event, ${item.id})"><i class="fal fa-times"></i></button>
                                        </div>
                                    </div>
                                `;
                            }))
                            $("#subtotal").html('Rp ' + data.data.map(item => {
                                return item.price
                            }).reduce((a, b) => parseInt(a) + parseInt(b)))
                        },
                        error: function(data) {
                            swal.fire({
                                title: 'Gagal',
                                text: 'Tidak dapat ditambahkan ke keranjang',
                                icon: 'error',
                            })
                        }
                    })
                } else {
                    swal.fire(
                        'Dibatalkan',
                        'Produk tidak ditambahkan ke keranjang',
                        'error',
                    )
                }
            })
        }
    </script>
</body>
</html>