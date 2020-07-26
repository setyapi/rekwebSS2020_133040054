<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">

            <h2 class="my-3">Tambah Data Barang</h2>
            <form action="/barang/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" id="kategori" name="kategori" value="<?= old('kategori'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('kategori'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kode_barang')) ? 'is-invalid' : ''; ?>" id="kode_barang" name="kode_barang" value="<?= old('kode_barang'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('kode_barang'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="brand_barang" class="col-sm-2 col-form-label">Brand Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('brand_barang')) ? 'is-invalid' : ''; ?>" id="brand_barang" name="brand_barang" value="<?= old('brand_barang'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('brand_barang'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="label" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('label')) ? 'is-invalid' : ''; ?>" id="label" name="label" value="<?= old('label'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('label'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('deskripsi'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_barang" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('harga_barang')) ? 'is-invalid' : ''; ?>" id="harga_barang" name="harga_barang" value="<?= old('harga_barang'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('harga_barang'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Input Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>