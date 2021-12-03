<?= $this->extend('layouts/back/app'); ?>

<?= $this->section('page_title') ?>
List User
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="card-title">
                        Pengaturan Website
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered datatable">
                        <thead>
                            <tr>
                                <th>Nama Pengaturan</th>
                                <th>Isi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($settings as $setting): ?>
                                <tr>
                                    <td>
                                        <?= $setting->setting_name ?>
                                    </td>
                                    <td>
                                        <?= $setting->setting_value ?>
                                    </td>
                                    <td>
                                        <a href="<?= site_url('admin/websiteSettings/edit/' . $setting->id) ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
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