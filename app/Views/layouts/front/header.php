<header class="header_section">
    <div class="content_wrap">
        <div class="container maxw_1560">
            <div class="row align-items-center">

                <div class="col-lg-2 col-md-6 col-6">
                    <div class="brand_logo">
                        <a class="brand_link" href="<?= site_url('/') ?>">
                            <img src="<?= base_url('assets-front/images/logo/logo_white_1x.png') ?>" srcset="<?= base_url('assets-front/images/logo/logo_white_2x.png') ?> 2x" alt="logo_not_found">
                        </a>
                    </div>
                </div>

                <div class="col-lg-10 col-md-6 col-6">
                    <nav class="main_menu navbar navbar-expand-lg">
                        <button class="mobile_menu_btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fal fa-bars"></i></span>
                        </button>
                        <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                            <ul class="main_menu_list ul_li">
                                <li class="">
                                    <a class="nav-link" href="<?= site_url('/') ?>" role="button">
                                        Home
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <ul class="header_btns_group ul_li_right">
                            <li>
                                <button type="button" class="cart_btn">
                                    <i class="fal fa-shopping-bag"></i>
                                    <small class="cart_counter">
                                    </small>
                                </button>
                            </li>
                            <li>
                                <a class="btn btn_primary text-uppercase" href="<?= site_url('/contact') ?>">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <div class="main_search_collapse collapse" id="main_search_collapse">
        <div class="main_search_form card">
            <div class="container maxw_1560">
                <form action="#">
                    <div class="form_item">
                        <input type="search" name="search" placeholder="Search here...">
                        <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>