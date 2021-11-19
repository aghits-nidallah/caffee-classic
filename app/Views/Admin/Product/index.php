<?= $this->extend('layouts/back/app') ?>

<?= $this->section('page_title') ?>
    Product
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <span>
                        Daftar Produk
                    </span>
                    <a href="<?= site_url('Product/new') ?>" class="btn btn-primary btn-sm">
                        Tambah Produk
                        <i class="fas fa-plus ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th>ID Produk</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($products as $product): ?>
                                <tr>
                                    <td width="100">
                                        <?= $product->id ?>
                                    </td>
                                    <td>
                                        <img src="<?= site_url('writable/uploads/' . $product->product_photo_path) ?>" class="rounded" style="width: 2.5rem; height: 2.5rem; object-fit: cover;" />
                                    </td>
                                    <td>
                                        <?= $product->name ?>
                                    </td>
                                    <td>
                                        <?= $product->description ?>
                                    </td>
                                    <td>
                                        <?= $product->stock ?>
                                    </td>
                                    <td width="150">
                                        <a href="<?= site_url('Product/' . $product->id) ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="<?= site_url('Product/' . $product->id . '/edit') ?>" class="btn btn-success btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="<?= site_url('Product/' . $product->id . '/delete') ?>" method="post" class="d-inline-block">
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

                <div class="d-flex justify-content-end">
                    <div class="btn-group">
                        <?= $pager->links() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    function confirmDeletion(event) {
        Swal.fire({
            title: 'Hapus data',
            text: 'Apakah Anda yakin ingin menghapus data ini?',
            icon: 'warning',
            showCancelButton: true,
        }).then(result => {
            if (result.isConfirmed) {
                $(event.target).parents('form').submit();
            } else {
                Swal.fire(
                    'Dibatalkan',
                    'Data Anda aman.',
                    'info',
                );
            }
        });
    }
</script>
<?= $this->endSection() ?>