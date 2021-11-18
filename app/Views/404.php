<?= $this->extend('layouts/front/app') ?>

<?= $this->section('content') ?>

<?= $this->include('layouts/front/breadcrumb', [
    'title' => '404: Halaman tidak ditemukan',
]) ?>

<?= $this->endSection() ?>