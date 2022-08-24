<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="mr-3">
                <i class="fas fa-arrow-left"></i>
            </div>
            <h1>Menu Utama Dashboard Member</h1>
            <!-- <?= var_dump($id) ?>
            <?= var_dump($status) ?> -->
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Menu Member</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item"><a href="<?= site_url('memberpanel'); ?>" class="nav-link">Beranda</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Transaksi</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Riwayat Transaksi</a></li>
                            <li class="nav-item"><a href="<?= site_url('memberpanel/toko'); ?>" class="nav-link active">Toko</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Ubah Profil</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <?php echo form_open_multipart('memberpanel/insert_toko') ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Form Membuat Toko Baru</h4>
                    </div>
                    <div class="card-body">
                        <p>General Setting such as, site title, side description, address an so on</p>
                        <div class="form-group row">
                            <label for="namaToko" class="col-sm-3 col-form-label">Nama Toko</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_toko" class="form-control" id="site-title" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripasi</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="deskripsi" id="site-description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="form-control-label col-sm-3 text-md-left">Logo Toko</label>
                            <div class="col-sm-6 col-md-9">
                                <div class="custom-file">
                                    <input type="file" name="logo" class="custom-file-input" id="site-logo">
                                    <label class="custom-file-label">Choose File</label>
                                </div>
                                <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
    </section>
</div>