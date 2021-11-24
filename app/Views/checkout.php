<?= $this->extend('layouts/front/app'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layouts/front/breadcrumb', [
    'title' => 'Checkout',
]) ?>

<div class="section">
    <div class="container py-4 my-4">
        <table class="table table-bordered table-hover my-4">
            <thead>
                <tr>
                    <th>
                        Produk
                    </th>
                    <th>
                        Harga
                    </th>
                    <th>
                        Kuantitas
                    </th>
                    <th>
                        Subtotal
                    </th>
                </tr>
            </thead>
            <tbody class="cart-body">

            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">
                        Total
                    </th>
                    <th class="total" style="text-align: right;">

                    </th>
                </tr>
            </tfoot>
        </table>
        <form action="<?= site_url('checkout') ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="checkout_detail" />
            <input type="hidden" name="total" />
            <div class="form-group row justify-content-end mt-4">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <label for="name">Nama Anda</label>
                    <input type="text" name="name" id="name" class="form-control mt-2" value="<?= old('name') ?>" required />
                </div>
            </div>
            <div class="form-group row justify-content-end mt-4">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <label for="phone_number">No. HP/WA</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control mt-2" value="<?= old('phone_number') ?>" required />
                </div>
            </div>
            <div class="form-group row justify-content-end mt-4">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <label for="address">Alamat Anda</label>
                    <textarea name="address" id="address" cols="30" rows="4" class="form-control mt-2" required><?= old('address') ?></textarea>
                </div>
            </div>
            <div class="form-group row justify-content-end mt-4">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <label for="payment_proof">Bukti Pembayaran</label>
                    <input type="file" name="payment_proof" id="payment_proof" class="form-control mt-2" required />
                </div>
            </div>
            <div class="form-group row justify-content-end mt-4">
                <div class="col-xs-12 col-sm-6 col-md-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn_primary">
                        Checkout
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
<?php if (session('success')): ?>
<script>
    let storage = window.localStorage;
    storage.setItem('carts', JSON.stringify([]));
</script>
<?php endif; ?>

<script>
    jQuery(function() {
        let storage = window.localStorage;
        let cart = storage.getItem('carts');
        let productsInCart = JSON.parse(cart);
        countCheckoutTotal(productsInCart);

        $("input[name='checkout_detail']").val(cart);

        $('.cart-body').html(productsInCart.map(product => {
            return `
                <tr id="productRow${product.id}">
                    <td>
                        <div class="d-flex align-items-start">
                            <img style="width: 75px; height: 75px; object-fit: cover; border-radius: 4px;" src="<?= site_url("") ?>writable/uploads/${product.product_photo_path}" />
                            <div style="margin-left: 1em;">
                                <h6 class="h6">
                                    ${product.name}
                                </h6>
                                <p>
                                    Stok: ${product.stock}
                                </p>
                            </div>
                            <div>
                                <button style="padding: 0.35rem; margin-left: 1em;" class="btn btn_primary" onclick="removeFromCart(event, ${product.id})">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td>
                        Rp ${idrFormatter.format(product.price)}
                    </td>
                    <td>
                        <input type="number" name="quantity" id="quantity" class="form-control" min="1" max="${product.stock}" value="${product.quantity ?? 1}" onchange="changeCheckoutQuantity(event, ${product.id})"  />
                    </td>
                    <td id="subtotal-${product.id}" style="text-align: right;">
                        Rp ${idrFormatter.format(product.price * (product.quantity ?? 1))}
                    </td>
                </tr>
            `;
        }));
    });
</script>
<?= $this->endSection() ?>