<section class="breadcrumb_section text-uppercase" style="background-image: url(<?= base_url('assets-front/images/breadcrumb/breadcrumb_bg_01.jpg'); ?>);">
    <div class="container">
        <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">
            <?= $this->renderVars['options']['title']; ?>
        </h1>
        <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
            <li>
                <a href="index_1.html">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li>
                <?= $this->renderVars['options']['title']; ?>
            </li>
        </ul>
    </div>
    <div class="breadcrumb_icon_wrap">
        <div class="container">
            <div class="breadcrumb_icon wow fadeInUp" data-wow-delay=".3s">
                <img src="<?= base_url('assets-front/images/feature/icon_01.png') ?>" alt="icon_not_found">
                <span class="bg_shape"></span>
            </div>
        </div>
    </div>
</section>
