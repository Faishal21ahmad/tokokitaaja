<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajement Toko</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Toko</a></div>

            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Toko</h2>
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Toko</h4> <a href="<?php echo site_url('toko/add'); ?>" class="btn btn-primary">Tambah Toko</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Toko</th>
                                        <th>ID Konsumen</th>
                                        <th>Nama Toko</th>
                                        <th>Logo</th>
                                        <th>Deskripsi</th>
                                        <th>Status Aktive</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php $i = 1; ?>
                                    <?php foreach ($toko as $item) { ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $item->idToko; ?></td>
                                            <td><?= $item->idKonsumen; ?></td>
                                            <td><?= $item->namaToko; ?></td>
                                            <td><?= $item->logo; ?></td>
                                            <td><?= substr($item->deskripsi, 0, 40);  ?></td>
                                            <td><?= $item->statusAktif; ?></td>
                                            <td><a href="<?= site_url('toko/getid/' . $item->idToko); ?>" class="btn btn-warning">edit</a>
                                                <a href="<?= site_url('toko/del/' . $item->idToko); ?>" class="btn btn-danger">hapus</a>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>