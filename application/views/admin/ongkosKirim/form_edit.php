<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap</a></div>
                <div class="breadcrumb-item">Form</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9">
                    <form method="POST" action="<?php echo site_url('ongkosKirim/edit'); ?>">
                        <input type="hidden" name="id" value="<?php echo $ongkosKirim->idBiayaKirim; ?>">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Kategori</h4>
                            </div>
                            <div class="card-body">
                                <div class="from-group row">
                                    <!-- ============================================================================== -->
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kurir</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select class="form-select form-control" id="inputGroupSelect02" name="idKurir">
                                            <?php foreach ($kurir as $k) { ?>
                                                <option value="<?= $k->idKurir; ?>" <?php if ($k->namaKurir == $ongkosKirim->namaKurir) echo 'selected'; ?>><?= $k->namaKurir; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label" name="idKurir">Kota Asal</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select class="form-select form-control" id="inputGroupSelect02" name="idKotaAsal">
                                            <?php foreach ($kota as $k) { ?>
                                                <option value="<?= $k->idKota; ?>" <?php if ($k->namaKota == $ongkosKirim->namaKotaAsal) echo 'selected'; ?>><?= $k->namaKota; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select class="form-select form-control" id="inputGroupSelect02" name="idKotaTujuan">
                                            <?php foreach ($kota as $k) { ?>
                                                <option value="<?= $k->idKota; ?>" <?php if ($k->namaKota == $ongkosKirim->namaKotaTujuan) echo 'selected'; ?>><?= $k->namaKota; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Biaya</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="Biaya" value="<?= $ongkosKirim->biaya; ?>">
                                    </div>

                                </div>
                            </div>
                            <div class=" card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>