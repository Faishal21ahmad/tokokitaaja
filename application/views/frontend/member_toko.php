<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="mr-3">
                <i class="fas fa-arrow-left"></i>
            </div>
            <h1>Menu Utama Dashboard Member</h1>
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
                            <li class="nav-item"><a href="<?= site_url('memberpanel/favoritlist'); ?>" class="nav-link">Favorit</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Ubah Profil</a></li>
                            <li class="nav-item"><a href="<?= site_url('memberpanel/logout'); ?>" class="nav-link">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="section-header">
                    <a href="<?= site_url('memberpanel/create_toko'); ?>">
                        <button class="btn btn-primary">Membuat Toko</button>
                    </a>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Toko</h4>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Toko</th>
                                    <th scope="col">Deskripasi</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($toko as $item) { ?>
                                    <tr>
                                        <th scope="row"><?= $item['namaToko']; ?></th>
                                        <td><?= $item['deskripsi']; ?></td>
                                        <td>
                                            <img src="<?php echo base_url('assets/logo/' . $item['logo']); ?>" alt="" width="75">

                                        </td>
                                        <td><?php $st = $item['statusAktif']; ?>
                                            <?php if ($st == 'Y') { ?>
                                                <a href="#" class="btn btn-success rounded-pill">Active</a>
                                            <?php } else {  ?>
                                                <a href="#" class="btn btn-danger rounded-pill">NoActive</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="<?= site_url('memberToko/main/' . $item['idToko']); ?>">
                                                <button class="btn btn-primary">Detail</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
</div>