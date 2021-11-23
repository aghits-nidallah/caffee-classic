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
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('scripts') ?>
<script>
    jQuery(function() {
        let storage = window.localStorage;
        let cart = storage.getItem('carts');
        let productsInCart = JSON.parse(cart);
        countCheckoutTotal(productsInCart);

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