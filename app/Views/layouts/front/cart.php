<div class="sidebar-menu-wrapper">
    <div class="cart_sidebar">
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
        <h2 class="heading_title text-uppercase">Cart Items - <span class="cart_counter"></span></h2>

        <div class="cart_items_list">
        </div>

        <div class="total_price text-uppercase">
            <span>Sub Total:</span>
            <span id="subtotal"></span>
        </div>
        <ul class="btns_group ul_li">
            <li><a href="<?= site_url('checkout') ?>" class="btn btn_border border_black text-uppercase">Checkout</a></li>
        </ul>
    </div>
    <div class="cart_sidebar_overlay"></div>
</div>