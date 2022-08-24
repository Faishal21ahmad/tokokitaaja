<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="mr-3">
                <i class="fas fa-arrow-left"></i>
            </div>
            <h1> <?= $namaToko->namaToko; ?></h1>
        </div>

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
                        <div class="col">
                            <?php if ($produkfavoritA == TRUE) { ?>
                                <a href="<?= site_url('Memberpanel/deleteFavorit/' . $produkfavoritA->idFavorit . "/"  . $produk->idProduk . "/" . $produk->idToko); ?>">
                                    <img class="float-right" id="favorit" src="<?php echo base_url('assets/asset2/heart_solid.png'); ?>" alt="">

                                </a>
                            <?php } else { ?>
                                <a href="<?= site_url('Memberpanel/inputFavorit/' . $produk->idProduk . "/" . $produk->idToko); ?>">
                                    <img class="float-right" id="favorit" src="<?php echo base_url('assets/asset2/heart_lost.png') ?>" alt="">
                                </a>
                            <?php } ?>
                        </div>
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
            </div>
        </div>
    </section>
</div>

<script>

</script>