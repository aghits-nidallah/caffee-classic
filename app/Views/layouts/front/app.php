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
        function initiateProductListState()
        {
            let storage = window.localStorage;
            let carts = localStorage.getItem('carts');

            let productIds = JSON.parse(carts).map(cart => {
                return cart;
            });

            setCartCounter();
            setCartSubtotal();
            setProductsToCartList();

            $(productIds).each(productId => {
                $("button").filter(`[data-product-id="${productIds[productId].id}"]`).hide();
            })
        }

        function setProductToLocalStorage(product)
        {
            let parsedProduct = JSON.parse(product);
            let storage = window.localStorage;
            let carts = localStorage.getItem('carts');

            if (carts == null) {
                data = [parsedProduct];
            } else {
                data = JSON.parse(carts);
                data.push(parsedProduct);
            }

            localStorage.setItem('carts', JSON.stringify(data));
        }

        function removeProductFromLocalStorage(id)
        {
            let storage = window.localStorage;
            let productsInCart = JSON.parse(storage.getItem('carts'));

            let filteredProducts = productsInCart.filter(product => {
                if (product.id != id) {
                    return product;
                }
            })

            $("button").filter(`[data-product-id="${id}"]`).show();

            localStorage.setItem('carts', JSON.stringify(filteredProducts));
        }

        function setProductsToCartList()
        {
            let storage = window.localStorage;
            let productsInCart = JSON.parse(storage.getItem('carts'));

            $(".cart_items_list").html(productsInCart.map(product => {
                return `
                    <div class="cart_item">
                        <div class="item_image">
                            <img style="width: 75px; height: 75px; object-fit: cover;" src="<?= site_url() ?>writable/uploads/${product.product_photo_path}" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">
                                ${product.name}
                            </h4>
                            <span class="item_price">
                                Rp. ${product.price}
                            </span>
                            <button type="button" class="remove_btn" onclick="removeFromCart(event, ${product.id})"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                `;
            }));
        }

        function setCartCounter()
        {
            let storage = window.localStorage;
            let productsInCart = JSON.parse(storage.getItem('carts'));

            $(".cart_counter").html(productsInCart.length)
        }

        function setCartSubtotal()
        {
            let storage = window.localStorage;
            let productsInCart = JSON.parse(storage.getItem('carts'));

            $("#subtotal").html('Rp ' + productsInCart.map(item => {
                return item.price
            }).reduce((a, b) => parseInt(a) + parseInt(b)))
        }

        function removeFromCart(event, id) {
            swal.fire({
                title: 'Konfirmasi',
                text: 'Hapus produk dari keranjang?',
                icon: 'info',
                showCancelButton: true,
            }).then(result => {
                if (result.isConfirmed) {
                    removeProductFromLocalStorage(id);
                    setProductsToCartList();
                    setCartCounter();
                    setCartSubtotal();

                    swal.fire(
                        'Berhasil',
                        'Berhasil menghapus produk dari keranjang',
                        'success',
                    );
                }
            })
        }

        function addToCart(event, product) {
            swal.fire({
                title: 'Konfirmasi',
                text: 'Tambahkan ke keranjang?',
                icon: 'info',
                showCancelButton: true,
            }).then(result => {
                if (result.isConfirmed) {
                    setProductToLocalStorage(product);
                    setProductsToCartList();
                    setCartCounter();
                    setCartSubtotal();

                    $(event.target).closest('button').hide()

                    swal.fire(
                        'Berhasil',
                        'Berhasil menambahkan produk ke keranjang',
                        'success',
                    );
                }
            })
        }

        initiateProductListState();
    </script>
</body>
</html>