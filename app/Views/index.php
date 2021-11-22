<?= $this->extend('layouts/front/app'); ?>

<?= $this->section('content'); ?>
<section class="slider_section slider_dark" style="background-image: url(<?= base_url('assets-front/images/backgrounds/bg_01.png') ?>);">
    <div class="main_slider pb-0 wow fadeInUp" data-wow-delay=".1s">
        <div class="slider_item text-white" style="background-image: url(<?= base_url('assets-front/images/slider/img_01.png') ?>);">
            <div class="container">
                <div class="row justify-content-lg-start justify-content-md-center">
                    <div class="col-lg-6 col-md-8">
                        <h3 class="title_text text-white text-uppercase" data-animation="fadeInUp" data-delay=".2s">
                            Time to discover coffee house
                        </h3>
                        <p data-animation="fadeInUp" data-delay=".4s">
                            The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. given an opportunity to sample.
                        </p>
                        <!-- <ul class="btns_group ul_li" data-animation="fadeInUp" data-delay=".6s">
                            <li><a class="btn btn_primary text-uppercase" href="javascript:void(0)">Caffee Classic</a></li>
                            <li><a class="btn btn_border border_white text-uppercase" href="shop_details.html">Learn more</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="shape_image">
                <img src="<?= base_url('assets-front/images/slider/shape_01.png') ?>" alt="image_not_found">
            </div>
        </div>
    </div>
    <!-- <div class="carousel_nav">
        <button class="main_left_arrow" type="button"><i class="fal fa-arrow-up"></i></button>
        <button class="main_right_arrow" type="button"><i class="fal fa-arrow-down"></i></button>
    </div> -->
    <div class="slider_social_wrap">
        <div class="container maxw_1560">
            <div class="row align-items-center justify-content-lg-between">
                <!-- <div class="col-lg-6 col-md-4 order-last">
                    <a class="popup_video video_btn1 text-uppercase wow fadeInRight" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                        <span class="pulse"><i class="fas fa-play"></i></span>
                        <small>Play video</small>
                    </a>
                </div> -->
                <!-- <div class="col-lg-6 col-md-8">
                    <ul class="social_links social_text ul_li text-uppercase wow fadeInLeft">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i> facebook</a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i> twitter</a></li>
                        <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> youtube</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="feature_primary_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature_primary wow fadeInUp" data-wow-delay=".1s">
                    <div class="item_icon">
                        <span class="item_serial">1</span>
                        <img src="<?= base_url('assets-front/images/feature/icon_01.png') ?>" alt="icon_not_found">
                    </div>
                    <h3 class="item_title text-uppercase">awesomae aroma</h3>
                    <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature_primary wow fadeInUp" data-wow-delay=".2s">
                    <div class="item_icon">
                        <span class="item_serial">2</span>
                        <img src="<?= base_url('assets-front/images/feature/icon_02.png') ?>" alt="icon_not_found">
                    </div>
                    <h3 class="item_title text-uppercase">high quality</h3>
                    <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature_primary wow fadeInUp" data-wow-delay=".3s">
                    <div class="item_icon">
                        <span class="item_serial">3</span>
                        <img src="<?= base_url('assets-front/images/feature/icon_03.png') ?>" alt="icon_not_found">
                    </div>
                    <h3 class="item_title text-uppercase">pure grades</h3>
                    <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="feature_primary wow fadeInUp" data-wow-delay=".4s">
                    <div class="item_icon">
                        <span class="item_serial">4</span>
                        <img src="<?= base_url('assets-front/images/feature/icon_04.png') ?>" alt="icon_not_found">
                    </div>
                    <h3 class="item_title text-uppercase">proper roasting</h3>
                    <p class="mb-0">
                        The coffee is brewed by first roasting the green coffee beans
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section sec_ptb_120">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 col-md-6 order-last">
                <div class="about_image1 wow fadeInRight" data-wow-delay=".1s">
                    <img src="<?= base_url('assets-front/images/about/img_01.png') ?>" alt="image_not_found">
                    <div class="year_content_wrap text-uppercase" style="background-image: url(<?= base_url('assets-front/images/about/bg_01.png') ?>);">
                        <div class="content_wrap">
                            <span>27 <small>+ years of</small></span>
                            <strong>experience</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about_content">
                    <div class="section_title text-uppercase">
                        <h2 class="small_title"><i class="fas fa-coffee"></i> about us</h2>
                        <h3 class="big_title wow fadeInUp" data-wow-delay=".1s">
                            There is all about caffee classic coffee house
                        </h3>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".2s">
                        From a cultural standpoint, coffeehouses largely serve as centers of social interaction: the coffeehouse provides patrons with a place to congregate, talk, read, write, entertain one another, or pass the time,
                        whether individually or in small groups.
                    </p>
                    <ul class="about_info ul_li_block">
                        <li class="wow fadeInUp" data-wow-delay=".3s">
                            <h4 class="text-uppercase"><i class="far fa-square-full"></i> There is all about our caffee classic coffee shops</h4>
                            <p class="mb-0">
                                The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. Once the beans are roasted each participant is given an opportunity to sample
                            </p>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="text-uppercase"><i class="far fa-square-full"></i> This is followed by the grinding</h4>
                            <p class="mb-0">
                                The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. Once the beans are roasted each participant is given an opportunity to sample the aromatic smoke by wafting it towards them.
                            </p>
                        </li>
                    </ul>
                    <ul class="btns_group ul_li wow fadeInUp" data-wow-delay=".5s">
                        <!-- <li>
                            <a class="btn btn_primary text-uppercase" href="about.html">Learn more</a>
                        </li> -->
                        <li>
                            <div class="chip_item">
                                <div class="chip_thumbnail">
                                    <img src="<?= base_url('assets-front/images/meta/img_01.png') ?>" alt="image_not_found">
                                </div>
                                <div class="chip_content text-uppercase">
                                    <h5 class="chip_name">rasalina De Willamson</h5>
                                    <span class="chip_title">Founder & CO</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recipe_menu_section sec_ptb_120 bg_gray deco_wrap">
    <div class="container">
        <div class="section_title text-uppercase text-center">
            <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-coffee"></i> Our special Menu</h2>
            <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">
                Caffee Classic
            </h3>
        </div>

        <ul class="filters-button-group ul_li_center wow fadeInUp" data-wow-delay=".3s">
            <li><button class="button text-uppercase active" data-filter="*">all</button></li>
        </ul>

        <div class="recipe_item_grid grid wow fadeInUp" data-wow-delay=".4s">
            <div class="element-item coffee " data-category="coffee">
                <?php foreach($products as $product): ?>
                <div class="recipe_item mb-4">
                    <div class="content_col">
                        <a class="item_image" href="shop_details.html">
                            <img src="<?= site_url('writable/uploads/' . $product->product_photo_path) ?>" alt="image_not_found" width="100" height="100" style="object-fit: cover;">
                        </a>
                        <div class="item_content">
                            <h3 class="item_title text-uppercase">
                                <a href="shop_details.html">
                                    <?= $product->name ?>
                                </a>
                            </h3>
                            <p class="mb-0">
                                <?= mb_strimwidth($product->description, 0, 128, '...') ?>
                            </p>
                        </div>
                    </div>
                    <div class="content-col">
                        <div class="d-flex">
                            <?php if (!in_array($product->id, $products_in_cart)): ?>
                            <button class="btn btn_primary" style="padding: 1rem;" onclick="addToCart(event, <?= $product->id ?>)">
                                <i class="fal fa-shopping-bag"></i>
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="content_col" style="width: 350px;">
                        <strong class="item_price">
                            <sub>Rp</sub>
                            <?= number_format($product->price, 0, '.', '.') ?>
                        </strong>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="deco_item shape_1">
        <img src="<?= base_url('assets-front/images/menu/shape_01.png') ?>" alt="image_not_found">
    </div>
    <div class="deco_item shape_2">
        <img src="<?= base_url('assets-front/images/menu/shape_02.png') ?>" alt="image_not_found">
    </div>
</section>

<section class="offer_section">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="offer_video wow fadeIn" data-wow-delay=".1s">
                    <div class="overlay"></div>
                    <img src="<?= base_url('assets-front/images/offer/img_01.jpg') ?>" alt="image_not_found">
                    <!-- <a class="popup_video video_btn2" href="http://www.youtube.com/watch?v=0O2aH4XLbto"> -->
                    <a class="popup_video video_btn2" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                        <span class="pulse"><i class="fas fa-play"></i></span>
                        <small class="text-uppercase">Play Video</small>
                    </a>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="offer_area">
                    <div class="offer_image">
                        <img src="<?= base_url('assets-front/images/offer/img_02.png') ?>" alt="image_not_found">
                    </div>
                    <div class="offer_content">
                        <div class="section_title text-uppercase">
                            <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-coffee"></i> what we offer</h2>
                            <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">
                                divine aroma in every single cup
                            </h3>
                        </div>

                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            From a cultural standpoint, coffeehouses largely serve as centers of social interaction: the coffeehouse provides patrons with a place to congregate, talk, read, write, entertain one another, or pass the time, whether individually or in small groups.
                        </p>
                        <p class="mb-0 wow fadeInUp" data-wow-delay=".4s">
                            From a cultural standpoint, coffeehouses largely serve as centers of social interaction: the coffeehouse provides patrons with a place to congregate,
                        </p>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="offerinfo_col col-lg-4">
                        <div class="offer_info_item table_reservation_contact wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="offer_info_title text-uppercase">table Reservation. . . .<i class="fal fa-heart"></i></h3>
                            <ul class="ul_li_block">
                                <li>
                                    <div class="item_icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="item_content">
                                        <span>(62) 85155332844</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="item_icon"><i class="fas fa-envelope"></i></div>
                                    <div class="item_content">
                                        <span>yourlovelydev@gmail.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="item_icon"><i class="fas fa-fax"></i></div>
                                    <div class="item_content">
                                        <span>Cirebon Utara, 45151</span>
                                    </div>
                                </li>
                            </ul>
                            <a class="btn btn_secondary text-uppercase" href="mailto:yourlovelydev@gmail.com">Contact Us</a>
                        </div>
                    </div>

                    <div class="offerinfo_col col-lg-4">
                        <div class="offer_info_item opening_time text-uppercase text-white wow fadeInUp" data-wow-delay=".2s" style="background-image: url(<?= base_url('assets-front/images/offer/bg_01.png') ?>);">
                            <h3 class="offer_info_title text-white">Opening hours. . . . <i class="fal fa-clock"></i></h3>
                            <ul class="ul_li_block">
                                <li>
                                    Monday
                                    <span>9:00 - 18:00</span>
                                </li>
                                <li>
                                    tuesday
                                    <span>10:00 - 18:00</span>
                                </li>
                                <li>
                                    wednestday
                                    <span>11:00 - 18:00</span>
                                </li>
                                <li>
                                    Thusday
                                    <span>12:00 - 18:00</span>
                                </li>
                                <li>
                                    Friday
                                    <span>14:00 - 18:00</span>
                                </li>
                                <li>
                                    saterday
                                    <span>16:00 - 18:00</span>
                                </li>
                                <li>
                                    Sunday
                                    <span>closed</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="offerinfo_col col-lg-4">
                        <div class="offer_info_item friday_offer text-center wow fadeInUp" data-wow-delay=".3s">
                            <h3 class="offer_info_title text-uppercase">Friday Offer. . . . <i class="fal fa-gift"></i></h3>
                            <img src="<?= base_url('assets-front/images/offer/img_03.png') ?>" alt="image_not_found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial_section sec_ptb_120 deco_wrap" style="background-image: url(<?= base_url('assets-front/images/backgrounds/bg_02.png') ?>);">
    <div class="container">
        <div class="testimonial_slider wow fadeInUp" data-wow-delay=".2s">
            <div class="testimonial_item_1 slider_item">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="<?= base_url('assets-front/images/testimonial/img_01.png') ?>" alt="image_not_found">
                            <div class="quote_icon">
                                <img src="<?= base_url('assets-front/images/testimonial/icon_01.png') ?>" alt="image_not_found">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item_content">
                            <div class="section_title text-uppercase">
                                <h3 class="small_title"><i class="fas fa-coffee"></i> Client Testimonial</h3>
                                <h4 class="big_title">
                                    Our client say something about Caffee Classic
                                </h4>
                            </div>
                            <p>
                                Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatuey.
                            </p>
                            <div class="testimonial_admin text-uppercase">
                                <h5 class="admin_name">rasalina De Willamson</h5>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <span class="admin_title">Founder & CO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="deco_item thumbnail_1 wow fadeInUp" data-wow-delay=".1s">
        <img src="<?= base_url('assets-front/images/testimonial/thumbnail_01.png') ?>" alt="image_not_found">
    </div>
    <div class="deco_item thumbnail_2 wow fadeInUp" data-wow-delay=".2s">
        <img src="<?= base_url('assets-front/images/testimonial/thumbnail_02.png') ?>" alt="image_not_found">
    </div>
    <div class="deco_item thumbnail_3 wow fadeInUp" data-wow-delay=".3s">
        <img src="<?= base_url('assets-front/images/testimonial/thumbnail_03.png') ?>" alt="image_not_found">
    </div>
    <div class="deco_item thumbnail_4 wow fadeInUp" data-wow-delay=".4s">
        <img src="<?= base_url('assets-front/images/testimonial/thumbnail_04.png') ?>" alt="image_not_found">
    </div>
</section>
<?= $this->endSection(); ?>