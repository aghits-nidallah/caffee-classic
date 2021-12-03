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
                <form action="<?= site_url('admin/checkout') ?>" method="get">
                    <div class="form-group">
                        <label>Filter Pesanan</label>
                        <div class="row">
                            <div class="d-flex align-items-center col-12 col-sm-6">
                                <input type="date" name="date_from" id="date_from" class="form-control" value="<?= $date_from ?>">
                                <span class="mx-2">s/d</span>
                                <input type="date" name="date_to" id="date_to" class="form-control" value="<?= $date_to ?>">
                                <div class="d-flex">
                                    <button type="submit" class="d-flex align-items-center btn btn-primary ml-2">
                                        <span>Cari</span>
                                        <i class="fas fa-search ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm datatable">
                        <thead>
                            <tr>
                                <th>ID Pesanan</th>
                                <th>Nama Pembeli</th>
                                <th>No. HP/WA</th>
                                <th>Alamat</th>
                                <th>Total Bayar</th>
                                <th>Tanggal Pemesanan</th>
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
                                        <?= \Carbon\Carbon::parse($checkout->created_at)->locale('id_ID')->isoFormat('DD MMMM YYYY, HH:mm:ss') ?>
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