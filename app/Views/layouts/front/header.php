<header class="header_section">
    <div class="content_wrap">
        <div class="container maxw_1560">
            <div class="row align-items-center">

                <div class="col-lg-2 col-md-6 col-6">
                    <div class="brand_logo">
                        <a class="brand_link" href="index_1.html">
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
                                <li class="active dropdown">
                                    <a class="nav-link" href="#" id="home_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Home
                                    </a>
                                    <ul class="submenu dropdown-menu" aria-labelledby="home_submenu">
                                        <li><a href="index_1.html">Home V.1</a></li>
                                        <li><a href="index_2.html">Home V.2</a></li>
                                        <li><a href="index_3.html">Home V.3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="about_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                    <ul class="submenu dropdown-menu" aria-labelledby="about_submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="about_2.html">About Me</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="portfolio_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        shop
                                    </a>
                                    <ul class="submenu dropdown-menu" aria-labelledby="portfolio_submenu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop_details.html">Shop Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="services_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="submenu dropdown-menu" aria-labelledby="services_submenu">
                                        <li><a href="menu.html">Recipe Menu</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li class="dropdown">
                                            <a href="#" id="checkout_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Checkout</a>
                                            <ul class="submenu dropdown-menu" aria-labelledby="checkout_submenu">
                                                <li><a href="checkout.html">Checkout Step 1</a></li>
                                                <li><a href="checkout_step2.html">Checkout Step 2</a></li>
                                                <li><a href="checkout_step3.html">Checkout Step 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">F.A.Q.</a></li>
                                        <li><a href="reserve_table.html">Reserve Table</a></li>
                                        <li><a href="reservation_form.html">Reservation Form</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="experience_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Blog
                                    </a>
                                    <ul class="submenu dropdown-menu" aria-labelledby="experience_submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="contact.html">Contact us</a>
                                </li>
                            </ul>
                        </div>

                        <ul class="header_btns_group ul_li_right">
                            <li>
                                <button type="button" class="main_search_btn" data-bs-toggle="collapse" data-bs-target="#main_search_collapse" aria-expanded="false" aria-controls="main_search_collapse">
                                    <i class="fal fa-search"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="cart_btn">
                                    <i class="fal fa-shopping-bag"></i>
                                    <small class="cart_counter">2</small>
                                </button>
                            </li>
                            <li>
                                <a class="btn btn_primary text-uppercase" href="contact.html">Contact Us</a>
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