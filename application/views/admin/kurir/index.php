<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajement Kurir</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Kurir</a></div>
                <div class="breadcrumb-item">Main</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Kurir</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Kurir</h4> <a href="<?php echo site_url('kurir/add'); ?>" class="btn btn-primary">Tambah Kurir</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Kurir</th>
                                        <th>Nama Kurir</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php $i = 1; ?>
                                    <?php foreach ($kurir as $item) { ?>

                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $item->idKurir; ?></td>
                                            <td><?= $item->namaKurir; ?></td>
                                            <td><a href="<?= site_url('kurir/getid/' . $item->idKurir); ?>" class="btn btn-warning">edit</a>
                                                <a href="<?= site_url('kurir/delKurir/' . $item->idKurir); ?>" class="btn btn-danger">hapus</a>
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