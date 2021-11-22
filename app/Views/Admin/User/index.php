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
                        List User
                    </div>
                    <a href="<?= site_url('admin/user/new') ?>" class="btn btn-primary btn-sm">
                        <span>Tambah</span>
                        <i class="fas fa-plus ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered datatable">
                        <thead>
                            <tr>
                                <th>ID User</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user): ?>
                                <tr>
                                    <td>
                                        <?= $user->id ?>
                                    </td>
                                    <td>
                                        <?= $user->name ?>
                                    </td>
                                    <td>
                                        <?= $user->username ?>
                                    </td>
                                    <td>
                                        <?= $user->email ?>
                                    </td>
                                    <td>
                                        <a href="<?= site_url('admin/user/edit/' . $user->id) ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="<?= site_url('admin/user/delete/' . $user->id) ?>" method="post" class="d-inline">
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