<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajement kategori</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Kategori</a></div>
                <div class="breadcrumb-item">Main</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Kategori</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Kategori</h4> <a href="<?php echo site_url('kategori/add'); ?>" class="btn btn-primary">Tambah Kategori</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Kategori</th>
                                        <th>Nama Kategori</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php $i = 1; ?>
                                    <?php foreach ($kategori as $item) { ?>

                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $item->idkat; ?></td>
                                            <td><?= $item->namakat; ?></td>
                                            <td><a href="<?= site_url('kategori/getid/' . $item->idkat); ?>" class="btn btn-warning">edit</a>
                                                <a href="<?= site_url('kategori/delkat/' . $item->idkat); ?>" onclick="return confirm('Apakah data ini akan dihapus?')" class=" btn btn-danger">hapus</a>
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