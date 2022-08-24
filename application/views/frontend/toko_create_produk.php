<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="mr-3">
                <i class="fas fa-arrow-left"></i>
            </div>
            <h1>Menu Utama Dashboard Toko <?= $namaToko->namaToko; ?></h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu Toko</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item"><a href="<?= site_url('memberToko/main/' . $namaToko->idToko); ?>" class="nav-link">Beranda</a></li>
                            <li class="nav-item"><a href="<?= site_url('memberToko/produk/' . $namaToko->idToko); ?>" class="nav-link active">Produk</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Pesanan</a></li>
                            <li class="nav-item"><a href="<?= site_url('#'); ?>" class="nav-link">Laporan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <?php echo form_open_multipart('memberToko/insert_produk/' . $idToko,); ?>
                <!-- <?= var_dump($idToko); ?> -->
                <div class="card">
                    <div class="card-header">
                        <h4>Form Membuat Produk Baru</h4>
                    </div>
                    <div class="card-body">
                        <p>General Setting such as, site title, side description, address an so on</p>
                        <div class="form-group row">
                            <label for="Kategori" class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-6">
                                <select name="idKat" class="form-select form-control">
                                    <?php foreach ($kategori as $k) : ?>
                                        <option class="form-control" value="<?= $k->idkat; ?>"> <?= $k->namakat; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <a href="<?= site_url('MemberToko/add_kategori/' .  $idToko); ?>" class="btn btn-success">Tambah Kategori</a>
                        </div>

                        <div class="form-group row">
                            <label for="namaProduk" class="col-sm-3 col-form-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="namaProduk" class="form-control" id="namaProduk" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row align-items-center">
                            <label class="form-control-label col-sm-3 text-md-left">Foto Produk</label>
                            <div class="col-sm-6 col-md-9">
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="foto">
                                    <label class="custom-file-label">Choose File</label>
                                </div>
                                <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-sm-3 col-form-label">Harga Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="harga" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-sm-3 col-form-label">Stok Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" class="form-control" id="stok" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="berat" class="col-sm-3 col-form-label">Berat Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="berat" class="form-control" id="berat" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsiProduk" class="col-sm-3 col-form-label">deskripsi</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" id="inputPassword3" placeholder=""> -->
                                <textarea class="form-control" name="deskripsiProduk" id="deskripsiProduk"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary mr-1">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </section>
</div>