<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Barang Elektronik</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Keyword" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/barang/create" class="btn btn-primary mt-3">Tambah Data Barang</a>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="row row-cols-1 row-cols-md-3">
                <?php $i = 1 + (6 * ($currentPage - 1)); ?>
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
            <?= $pager->links('barang_elektronik', 'barang_pagination'); ?>
        </div>
    </div>
    <?= $this->endSection(); ?>