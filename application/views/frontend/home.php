<div class="main-content">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>Carousel</h4>
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators3" data-slide-to="6"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/member/assets/img/1.png'); ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/member/assets/img/2.png'); ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/member/assets/img/3.png'); ?>" alt="Third slide">
                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/member/assets/img/4.png'); ?>" alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/member/assets/img/5.png'); ?>" alt="Fifth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/member/assets/img/6.png'); ?>" alt="Sixth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('assets/member/assets/img/7.png'); ?>" alt="Seventh slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Produk Terbaru -->
        <div class="section-body">
            <h2 class="section-title">Produk Terbaru</h2>
            <p class="section-lead">
                4 Produk Terbaru
            </p>
            <div class="row">
                <!-- <?php echo var_dump($produkterbaru); ?> -->
                <?php foreach ($produkterbaru as $item) { ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <article class="article rounded">
                            <div class="article-header rounded-top">
                                <div class="article-image" data-background="<?php echo base_url('assets/produk/' . $item->foto); ?>"></div>

                                <div class="article-title" id="produkbaru">
                                    <h2><a href="#produkbaru"><?= $item->namaProduk; ?></a></h2>
                                </div>
                            </div>
                            <div class="bg-success rounded-bottom">
                                <p class="text-light ml-3"> 4 Produk Terbaru</p>
                            </div>
                            <div class="article-details rounded">
                                <?php $kalimat = substr($item->deskripsiProduk, 0, 50); ?>
                                <p><?= $kalimat; ?> ...</p>

                                <div class="article-cta">
                                    <a href="<?= site_url('home/depro/' . $item->idProduk . "/" . $item->idToko); ?>" class="btn btn-primary">Detail</a>
                                    <!-- <a href="#" class="btn btn-primary">Detail</a> -->
                                    <a href="#" class="btn btn-success">Beli</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Produk Terfavorit -->
        <div class="section-body ">
            <h2 class="section-title">Produk Terfavorit</h2>
            <p class="section-lead">
                Produk
            </p>
            <div class="row">
                <?php foreach ($produkfavorit as $item) { ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <article class="article">

                            <div class="article-header rounded-top">
                                <div class="article-image" data-background="<?php echo base_url('assets/produk/' . $item->foto); ?>"></div>

                                <div class="article-title" id="produkbaru">
                                    <h2><a href="#produkbaru"><?= $item->namaProduk; ?></a></h2>
                                </div>
                            </div>
                            <div class="bg-danger rounded-bottom">
                                <p class="text-light ml-3">Top 4 Produk Terfavorit</p>
                            </div>
                            <div class="article-details rounded">
                                <?php $kalimat = substr($item->deskripsiProduk, 0, 50); ?>
                                <p><?= $kalimat; ?> ...</p>

                                <div class="article-cta">
                                    <a href="<?= site_url('home/depro/' . $item->idProduk . "/" . $item->idToko); ?>" class="btn btn-primary">Detail</a>
                                    <!-- <a href="#" class="btn btn-primary">Detail</a> -->
                                    <a href="#" class="btn btn-success">Beli</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div>


        <!-- Seluruh Produk -->
        <div class="section-body">
            <h2 class="section-title">Produk</h2>
            <p class="section-lead">
                Produk
            </p>
            <div class="row">
                <!-- <?php echo var_dump($produkterbaru); ?>
                    <?php echo var_dump($produk); ?>
                    <?php echo var_dump($username); ?>
                    <?php echo var_dump($id); ?>
                    <?php echo var_dump($kategori); ?> -->
                <?php foreach ($produk as $item) { ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <article class="article">
                            <div class="article-header rounded-top">
                                <div class="article-image" data-background="<?php echo base_url('assets/produk/' . $item->foto); ?>"></div>

                                <div class="article-title" id="produkbaru">
                                    <h2><a href="#produkbaru"><?= $item->namaProduk; ?></a></h2>
                                </div>
                            </div>
                            <div class="article-details rounded">
                                <?php $kalimat = substr($item->deskripsiProduk, 0, 50); ?>
                                <p><?= $kalimat; ?> ...</p>

                                <div class="article-cta">
                                    <a href="<?= site_url('home/depro/' . $item->idProduk . "/" . $item->idToko); ?>" class="btn btn-primary">Detail</a>
                                    <!-- <a href="#" class="btn btn-primary">Detail</a> -->
                                    <a href="#" class="btn btn-success">Beli</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

</div>