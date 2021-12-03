<?php
    $settings = new \App\Models\WebsiteSetting();
    $data = [
        'footer_description' => $settings->where('setting_name', 'footer_description')->first(),
        'jam_buka' => [
            'senin' => $settings->where('setting_name', 'jam_buka_senin')->first(),
            'selasa' => $settings->where('setting_name', 'jam_buka_selasa')->first(),
            'rabu' => $settings->where('setting_name', 'jam_buka_rabu')->first(),
            'kamis' => $settings->where('setting_name', 'jam_buka_kamis')->first(),
            'jumat' => $settings->where('setting_name', 'jam_buka_jumat')->first(),
            'sabtu' => $settings->where('setting_name', 'jam_buka_sabtu')->first(),
            'minggu' => $settings->where('setting_name', 'jam_buka_minggu')->first(),
        ],
        'alamat' => $settings->where('setting_name', 'alamat')->first(),
        'no_hp' => $settings->where('setting_name', 'no_hp')->first(),
        'facebook' => $settings->where("setting_name", 'facebook')->first(),
        'instagram' => $settings->where("setting_name", 'instagram')->first(),
        'twitter' => $settings->where("setting_name", 'twitter')->first(),
        'youtube' => $settings->where("setting_name", 'youtube')->first(),
    ];
?>
<footer class="footer_section text-white deco_wrap" style="background-image: url(<?= base_url('assets-front/images/backgrounds/bg_05.png') ?>);">
    <div class="overlay"></div>
    <div class="footer_widget_area">
        <div class="container">

            <div class="row justify-content-lg-between">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer_widget footer_about wow fadeInUp" data-wow-delay=".1s">
                        <div class="brand_logo">
                            <a class="brand_link" href="<?= site_url('/') ?>">
                                <img src="<?= base_url('assets-front/images/logo/logo_white_1x.png') ?>" srcset="assets/images/logo/logo_white_2x.png 2x" alt="logo_not_found">
                            </a>
                        </div>

                        <p>
                            <?= $data['footer_description']->setting_value ?>
                        </p>

                        <ul class="social_links social_icons ul_li">
                            <li><a href="<?= $data['facebook']->setting_value ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= $data['twitter']->setting_value ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= $data['instagram']->setting_value ?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?= $data['youtube']->setting_value ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer_widget footer_contact wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="footer_widget_title text-uppercase">Contact us</h3>
                        <p>
                            Cafe D’villa Classic
                        </p>
                        <ul class="ul_li_block">
                            <li style="line-height: 1.5;"><strong class="text-uppercase">Adress:</strong> <?= $data['alamat']->setting_value ?></li>
                            <li style="line-height: 1.5;"><strong class="text-uppercase">Phone:</strong> <?= $data['no_hp']->setting_value ?></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer_widget footer_opening_time wow fadeInUp" data-wow-delay=".3s">
                        <h3 class="footer_widget_title text-uppercase">Jam Buka</h3>
                        <ul class="ul_li_block">
                            <li>
                                Senin
                                <span><?= $data['jam_buka']['senin']->setting_value ?></span>
                            </li>
                            <li>
                                Selasa
                                <span><?= $data['jam_buka']['selasa']->setting_value ?></span>
                            </li>
                            <li>
                                Rabu
                                <span><?= $data['jam_buka']['rabu']->setting_value ?></span>
                            </li>
                            <li>
                                Kamis
                                <span><?= $data['jam_buka']['kamis']->setting_value ?></span>
                            </li>
                            <li>
                                Jum'at
                                <span><?= $data['jam_buka']['jumat']->setting_value ?></span>
                            </li>
                            <li>
                                Sabtu
                                <span><?= $data['jam_buka']['sabtu']->setting_value ?></span>
                            </li>
                            <li>
                                Minggu
                                <span><?= $data['jam_buka']['minggu']->setting_value ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer_bottom text-center">
            <p class="copyright_text mb-0 wow fadeInUp" data-wow-delay=".2s">Copyright@ 2021 Design by <a class="btn_text" href="https://themeforest.net/user/xpressrow"><span>Xpressrow</span></a>. Developed by <a href="https://github.com/aghits-nidallah" class="btn_text"><span>Aghits Nidallah</span></a>.</p>
        </div>
    </div>
</footer>