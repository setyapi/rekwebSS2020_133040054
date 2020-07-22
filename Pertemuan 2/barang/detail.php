<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Barang</h2>
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="/img/<?= $barang['gambar']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= $barang['nama']; ?></h5>
                            <p class="card-text"><b>Info :</b><?= $barang['deskripsi']; ?></p>
                            <p class="card-text"><b>Harga :</b><?= $barang['harga_barang']; ?></p>

                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <br><br>
                            <a href="/barang">Kembali Kedaftar barang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>