<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajement Kota</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Kota</a></div>
                <div class="breadcrumb-item">Main</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Kota</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Kota</h4> <a href="<?php echo site_url('kota/add'); ?>" class="btn btn-primary">Tambah Kota</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Kota</th>
                                        <th>Nama Kota</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php $i = 1; ?>
                                    <?php foreach ($kota as $item) { ?>

                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $item->idKota; ?></td>
                                            <td><?= $item->namaKota; ?></td>
                                            <td><a href="<?= site_url('kota/getid/' . $item->idKota); ?>" class="btn btn-warning">edit</a>
                                                <a href="<?= site_url('kota/delkota/' . $item->idKota); ?>" class="btn btn-danger">hapus</a>
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