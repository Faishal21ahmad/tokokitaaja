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
                <div class="section-header">
                    <a href="<?= site_url('memberToko/create_produk/' . $namaToko->idToko); ?>">
                        <button class="btn btn-primary">Tambah Produk Baru</button>
                    </a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Produk</h4>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($produk as $item) { ?>
                                    <tr>
                                        <td><?= $item['idProduk']; ?></td>
                                        <th scope="row"><?= $item['namaProduk']; ?></th>
                                        <td><?= $item['harga']; ?></td>
                                        <td><?= $item['stok']; ?></td>
                                        <td>
                                            <a href="<?= site_url('memberToko/detail/' . $item['idProduk'] . "/" . $namaToko->idToko); ?>" class="btn btn-primary">Detail</a>
                                            <a href="<?= site_url('memberToko/delete_produk/' . $item['idProduk'] . "/" . $namaToko->idToko); ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>