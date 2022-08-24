<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-7">
                <div class="card">
                    <img class="m-3" src="<?php echo base_url('assets/produk/' . $produk->foto); ?>" alt="">
                </div>
                <div class="card p-3">
                    <a href="<?= site_url('memberToko/detail/'); ?>" class="btn btn-success mb-3">Beli</a>
                    <a href="<?= site_url('memberToko/delete_produk/'); ?>" class="btn btn-primary">+ Keranjang</a>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="card p-4">
                    <div class="row">
                        <div class="col">
                            <h3><?= $produk->namaProduk; ?></h3>
                        </div>
                        <!-- Proses Menampilkan gambar tombol hati
                        jika id user kosong maka tidak tampil -->
                        <?php if (empty($id)) {  ?>

                        <?php } else { ?>
                            <div class="col">
                                <!-- Proses Pemilihan Tombol -->
                                <?php if (empty($produkfavoritA)) { ?>
                                    <!-- // Lost -->
                                    <a href="<?= site_url('home/inputFavorit/' . $produk->idProduk . "/" . $produk->idToko); ?>">
                                        <img class="float-right" id="favorit" src="<?php echo base_url('assets/asset2/heart_lost.png') ?>" alt="">
                                    </a>
                                <?php } else { ?>
                                    <!-- Solid -->
                                    <a href="<?= site_url('home/deleteFavorit/' . $produkfavoritA->idFavorit . "/"  . $produk->idProduk . "/" . $produk->idToko); ?>">
                                        <img class="float-right" id="favorit" src="<?php echo base_url('assets/asset2/heart_solid.png'); ?>" alt="">
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>

                    <h3 class="mt-3">Rp. <?= $produk->harga; ?></h3>
                    <hr class="mt-3">
                    <p> Detail : </p>
                    <P>Stok : <?= $produk->stok; ?></P>
                    <P>Berat : <?= $produk->berat; ?> g</P>
                    <p>Deskripsi : </p>
                    <pre> <?= $produk->deskripsiProduk; ?></pre>
                    <br>
                    <hr>
                </div>
                <div class="section-header">
                    <img width="90" src="<?php echo base_url('assets/logo/' . $namaToko->logo); ?>" alt="">
                    <h1 class="ml-4"> <?= $namaToko->namaToko; ?></h1>
                </div>
            </div>
        </div>
    </section>
</div>