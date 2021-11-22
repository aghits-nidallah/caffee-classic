<div class="sidebar-menu-wrapper">
    <div class="cart_sidebar">
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
        <h2 class="heading_title text-uppercase">Cart Items - <span class="cart_counter"><?= $cart_count ?></span></h2>

        <div class="cart_items_list">
            <?php foreach($cart_display as $cart): ?>
            <div class="cart_item">
                <div class="item_image">
                    <img style="width: 75px; height: 75px; object-fit: cover;" src="<?= site_url('writable/uploads/' . $cart->product_photo_path) ?>" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        <?= $cart->name ?>
                    </h4>
                    <span class="item_price">
                        Rp. <?= $cart->price ?>
                    </span>
                    <button type="button" class="remove_btn" onclick="removeFromCart(event, <?= $cart->id ?>)"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="total_price text-uppercase">
            <span>Sub Total:</span>
            <span id="subtotal">
                Rp <?= number_format(array_sum(array_map(function($cart) { return $cart->price; }, $cart_display)), 0, '.', '.') ?>
            </span>
        </div>
        <!-- <ul class="btns_group ul_li">
            <li><a href="checkout.html" class="btn btn_border border_black text-uppercase">Checkout</a></li>
        </ul> -->
    </div>
    <div class="cart_sidebar_overlay"></div>
</div>