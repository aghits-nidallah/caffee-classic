<?= $this->extend('layouts/back/app'); ?>

<?= $this->section('page_title') ?>
Edit Pengaturan
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="<?= site_url('admin/websiteSettings') ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-arrow-left mr-2"></i>
                        <span>Kembali</span>
                    </a>
                    <div class="card-title">
                        Edit Pengaturan
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/websiteSettings/update/' . $setting->id) ?>" method="post">
                    <div class="form-group">
                        <label for="setting_name">Nama Pengaturan</label>
                        <input type="text" name="setting_name" id="setting_name" class="form-control" value="<?= $setting->setting_name ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label for="setting_value">Isi Pengaturan</label>
                        <textarea name="setting_value" id="setting_value" cols="30" rows="5" class="form-control"><?= $setting->setting_value ?></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <span>
                                Perbarui
                            </span>
                            <i class="fas fa-upload ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>