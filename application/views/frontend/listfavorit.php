<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="mr-3">
                <i class="fas fa-arrow-left"></i>
            </div>
            <h1>Favorit List</h1>
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
                            <li class="nav-item"><a href="<?= site_url('memberpanel/toko'); ?>" class="nav-link">Toko</a></li>
                            <li class="nav-item"><a href="<?= site_url('memberpanel/favoritlist'); ?>" class="nav-link active">Favorit</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Ubah Profil</a></li>
                            <li class="nav-item"><a href="<?= site_url('memberpanel/logout'); ?>" class="nav-link">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row">
                    <?php foreach ($list as $item) { ?>
                        <div class="col-9 col-sm-6 col-md-6 col-lg-4">
                            <article class="article">
                                <div class="article-header">
                                    <div class="article-image" data-background="<?php echo base_url('assets/produk/' . $item->foto); ?>"></div>
                                    <div class="article-title" id="produkbaru">
                                        <h2><a href="#produkbaru"><?= $item->namaProduk; ?></a></h2>
                                    </div>
                                </div>
                                <div class="article-details">
                                    <?php $kalimat = substr($item->deskripsiProduk, 0, 50); ?>
                                    <p><?= $kalimat; ?> ...</p>
                                    <div class="article-cta">
                                        <a href="<?= site_url('memberToko/detail/' . $item->idProduk . "/" . $item->idToko); ?>" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>