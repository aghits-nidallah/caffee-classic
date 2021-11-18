<?= $this->extend('layouts/back/app') ?>

<?= $this->section('page_title') ?>
    Tambah Produk
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="<?= site_url('Product') ?>">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                    <span>
                        Edit Produk
                    </span>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= site_url('Product/' . $product->id) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="product_photo" class="col-3 col-form-label">Foto Produk (tidak diubah)</label>
                        <div class="col-9">
                            <input type="file" name="product_photo" id="product_photo" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-3 col-form-label">Nama Produk</label>
                        <div class="col-9">
                            <input type="text" name="name" id="name" class="form-control" value="<?= $product->name ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-form-label">Harga Produk</label>
                        <div class="col-9 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp
                                </span>
                            </div>
                            <input type="number" name="price" id="price" class="form-control" value="<?= $product->price ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stock" class="col-3 col-form-label">Stock Produk</label>
                        <div class="col-9">
                            <input type="number" name="stock" id="stock" class="form-control" value="<?= $product->stock ?>" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-3 col-form-label">Deskripsi Produk</label>
                        <div class="col-9">
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"><?= $product->description ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex col-12 justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-upload mr-2"></i>
                                Perbarui
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>