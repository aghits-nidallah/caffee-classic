<?= $this->extend('layouts/back/app'); ?>

<?= $this->section('page_title') ?>
Edit User
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="<?= site_url('admin/user') ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-arrow-left mr-2"></i>
                        <span>Kembali</span>
                    </a>
                    <div class="card-title">
                        Edit User
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/user/update/' . $user->id) ?>" method="post">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= $user->name ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $user->username ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="(Opsional)" value="<?= $user->email ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="(Tidak berubah)" />
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="(Tidak berubah)" />
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