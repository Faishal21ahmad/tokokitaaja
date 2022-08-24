<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajement Member</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Member</a></div>
                <div class="breadcrumb-item">Main</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Data Member</h2>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Member</h4> <a href="<?php echo site_url('member/add'); ?>" class="btn btn-primary">Tambah Member</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>NO</th>
                                        <th>IDKonsumen</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Email</th>
                                        <th>No Telpon</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php $i = 1; ?>
                                    <?php foreach ($member as $item) { ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $item->idKonsumen; ?></td>
                                            <td><?= $item->username; ?></td>
                                            <td><?= $item->password; ?></td>
                                            <td><?= $item->namaKonsumen; ?></td>
                                            <td><?= $item->alamat; ?></td>
                                            <td><?= $item->namaKota; ?></td>
                                            <td><?= $item->email; ?></td>
                                            <td><?= $item->tlpn; ?></td>
                                            <td><?= $item->statusAktif; ?></td>
                                            <td><a href="<?= site_url('member/getid/' . $item->idKonsumen); ?>" class="btn btn-warning">edit</a>
                                                <a href="<?= site_url('member/del/' . $item->idKonsumen); ?>" class="btn btn-danger">hapus</a>
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