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
                <div class="section-body">

                    <div class="row">
                        <div class="col-7 col-md-8 col-lg-9">
                            <!-- <?= var_dump($namaToko->idToko); ?> -->
                            <form method="POST" action="<?php echo site_url('MemberToko/adE/' . $namaToko->idToko); ?>">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Form Tambah Kategori</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="from-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kategori</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="inputEmail3" name="namaKategori" placeholder="Nama Kategori">
                                                <?= form_error('namaKategori', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>