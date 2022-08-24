<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajement Ongkir</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Ongkir</a></div>
                <div class="breadcrumb-item">Main</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Ongkir</h2>
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Ongkir</h4> <a href="<?php echo site_url('ongkosKirim/add'); ?>" class="btn btn-primary">Tambah Ongkir</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Ongkos</th>
                                        <th>kurir</th>
                                        <th>Kota Asal</th>
                                        <th>Kota Tujuan</th>
                                        <th>Biaya</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php $i = 1; ?>
                                    <?php foreach ($ongkosKirim as $item) { ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $item->idBiayaKirim; ?></td>
                                            <td><?= $item->namaKurir; ?></td>
                                            <td><?= $item->namaKotaAsal; ?></td>
                                            <td><?= $item->namaKotaTujuan; ?></td>
                                            <td><?= $item->biaya; ?></td>
                                            <td><a href="<?= site_url('ongkosKirim/getid/' . $item->idBiayaKirim); ?>" class="btn btn-warning">edit</a>
                                                <a href="<?= site_url('ongkosKirim/delong/' . $item->idBiayaKirim); ?>" class="btn btn-danger">hapus</a>
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