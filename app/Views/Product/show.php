<?= $this->extend('layouts/front/app') ?>

<?= $this->section('content') ?>

<?= $this->include('layouts/front/breadcrumb', [
    'title' => $product->name,
]) ?>
<section class="details_section shop_details sec_ptb_120 bg_default_gray">
    <div class="container">

        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-lg-6 col-md-7">
                <div class="details_image_wrap wow fadeInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="details_image_carousel slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 436px; transform: translate3d(0px, 0px, 0px);">
                                <div class="slider_item slick-slide slick-cloned" data-slick-index="1" id="" aria-hidden="true" tabindex="-1" style="width: 436px;">
                                    <img src="<?= site_url('writable/uploads/' . $product->product_photo_path) ?>" alt="image_not_found">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="details_image_carousel_nav slick-initialized slick-slider slick-vertical">
                        <div class="slick-list draggable" style="height: 540px;">
                            <div class="slick-track" style="opacity: 1; height: 436px; transform: translate3d(0px, 0px, 0px);">
                                <div class="slider_item slick-slide slick-cloned" data-slick-index="1" id="" aria-hidden="true" tabindex="-1" style="width: 95px;">
                                    <img src="<?= site_url('writable/uploads/' . $product->product_photo_path) ?>" alt="image_not_found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-7">
                <div class="details_content wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="details_flex_title">
                        <h2 class="details_title text-uppercase"><?= $product->name ?></h2>
                    </div>
                    <p>
                        <?= $product->description ?>
                    </p>
                    <div class="details_price">
                        <strong class="price_text">
                            Rp<?= number_format($product->price, 0, '.', '.') ?>
                        </strong>
                        <?php if ($product->stock > 0): ?>
                            <span class="in_stuck"><i class="fal fa-check"></i> Tersedia</span>
                        <?php endif; ?>
                    </div>
                    <ul class="btns_group ul_li">
                        <li>
                            <div class="quantity_input quantity_boxed">
                                <h4 class="quantity_title text-uppercase">Jumlah</h4>
                                <form action="#" onsubmit="return event.preventDefault()">
                                    <button type="button" class="input_number_decrement">–</button>
                                    <input class="input_number" type="text" value="1" min="1" max="<?= $product->stock ?>">
                                    <button type="button" class="input_number_increment">+</button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn_secondary text-uppercase" href="javascript:void(0)">
                                Tambahkan ke keranjang
                            </a>
                        </li>
                    </ul>
                    <div class="details_share_links">
                        <h4 class="list_title"><i class="fas fa-share mr-1"></i> Bagikan</h4>
                        <ul class="social_links social_icons ul_li">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>