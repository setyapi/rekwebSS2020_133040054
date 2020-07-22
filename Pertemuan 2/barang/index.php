<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Barang Elektronik</h1>
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach ($barang as $b) : ?>
                    <div class="col mb-3">
                        <div class="card">
                            <img src="/img/<?= $b['gambar']; ?>" class="pic" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $b['label']; ?></h5>
                                <a href="/barang/<?= $b['nama']; ?>" class="btn btn-success">Info</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>