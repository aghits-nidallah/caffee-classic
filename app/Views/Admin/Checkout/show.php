<?= $this->extend('layouts/back/app') ?>

<?= $this->section('page_title') ?>
    Detail Pesanan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12 col-sm-6 col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="<?= site_url('admin/checkout') ?>">
                        <i class="fas fa-arrow-left mr-2"></i>
                        <span>
                            Kembali
                        </span>
                    </a>
                    <span>
                        Detail Pesanan
                    </span>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga Jual</th>
                            <th>Kuantitas</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($checkout_detail as $checkout_d): ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-start">
                                        <img
                                            src="<?= site_url('writable/uploads/' . $checkout_d->product_photo_path) ?>"
                                            class="rounded"
                                            style="width: 3rem; height: 3rem; object-fit: cover;"
                                        />
                                        <span style="margin-left: 0.5em;">
                                            <?= $checkout_d->name ?>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <span>Rp</span>
                                        <?= number_format($checkout_d->sold_price, 0, '.', '.') ?>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <?= $checkout_d->quantity ?>
                                </td>
                                <td class="text-right">
                                    <div class="d-flex justify-content-between">
                                        <span>Rp</span>
                                        <?= number_format($checkout_d->subtotal, 0, '.', '.') ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" class="text-right">
                                Total
                            </th>
                            <th class="text-right">
                                <div class="d-flex justify-content-between">
                                    <span>Rp</span>
                                    <?= number_format($checkout->total, 0, '.', '.') ?>
                                </div>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                Info Pembeli
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <label>Status</label>
                    <div>
                        <?php if ($checkout->is_sent): ?>
                            <div class="badge badge-success">Dikirim</div>
                        <?php else: ?>
                            <div class="badge badge-danger">Belum dikirim</div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-4">
                    <label>Nama Pembeli</label>
                    <p>
                        <?= $checkout->buyer_name ?>
                    </p>
                </div>
                <div class="mb-4">
                    <label>No HP/WA</label>
                    <p>
                        <?= $checkout->buyer_phone_number ?>
                    </p>
                </div>
                <div class="mb-4">
                    <label>Alamat</label>
                    <p>
                        <?= $checkout->buyer_address ?>
                    </p>
                </div>
                <div class="mb-4">
                    <label>Bukti Pembayaran</label>
                    <a target="_blank" href="<?= site_url('writable/uploads/' . $checkout->payment_proof_file) ?>">
                        <img
                            src="<?= site_url('writable/uploads/' . $checkout->payment_proof_file) ?>"
                            class="rounded"
                            style="width: 100%; object-fit: contain;"
                        />
                    </a>
                </div>
                <?php if ($checkout->is_sent == NULL): ?>
                <div>
                    <form action="<?= site_url('admin/checkout/update/' . $checkout->id) ?>" method="post">
                        <div class="form-group">
                            <label for="courier">Kurir Pengiriman</label>
                            <input type="text" name="courier" id="courier" class="form form-control" value="<?= old('courier') ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="tracking_id">ID Tracking</label>
                            <input type="text" name="tracking_id" id="tracking_id" class="form form-control" value="<?= old('tracking_id') ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="notes">Catatan</label>
                            <textarea name="notes" id="notes" cols="30" rows="4" class="form-control"><?= old('notes') ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Konfirmasi
                        </button>
                    </form>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>