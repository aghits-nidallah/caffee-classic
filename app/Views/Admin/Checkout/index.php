<?= $this->extend('layouts/back/app') ?>

<?= $this->section('page_title') ?>
    Daftar Pesanan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <span>
                        Daftar Pesanan
                    </span>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm datatable">
                        <thead>
                            <tr>
                                <th>ID Pesanan</th>
                                <th>Nama Pembeli</th>
                                <th>No. HP/WA</th>
                                <th>Alamat</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($checkouts as $checkout): ?>
                                <tr>
                                    <td width="100">
                                        <?= $checkout->id ?>
                                    </td>
                                    <td>
                                        <?= $checkout->buyer_name ?>
                                    </td>
                                    <td>
                                        <?= $checkout->buyer_phone_number ?>
                                    </td>
                                    <td>
                                        <?= $checkout->buyer_address ?>
                                    </td>
                                    <td>
                                        Rp <?= number_format($checkout->total, 0, '.', '.') ?>
                                    </td>
                                    <td>
                                        <?php if ($checkout->is_sent): ?>
                                            <div class="badge badge-success">Dikirim</div>
                                        <?php else: ?>
                                            <div class="badge badge-danger">Belum dikirim</div>
                                        <?php endif; ?>
                                    </td>
                                    <td width="150">
                                        <a href="<?= site_url('admin/checkout/' . $checkout->id) ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="<?= site_url('admin/checkout/delete/' . $checkout->id) ?>" method="post" class="d-inline">
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeletion(event)">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>