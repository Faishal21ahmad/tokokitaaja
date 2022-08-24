<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap</a></div>
                <div class="breadcrumb-item">Form edit</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9">
                    <form method="POST" action="<?php echo site_url('toko/edit'); ?>">
                        <input type="hidden" name="id" value="<?php echo $toko->idToko; ?>">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Kategori</h4>
                            </div>
                            <div class="card-body">
                                <div class="from-group row">
                                    <!-- ============================================================================== -->
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID TOKO</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="Biaya" value="<?= $toko->idToko; ?>">
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID Konsumen</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select class="form-select form-control" id="inputGroupSelect02" name="idKonsumen">
                                            <?php foreach ($member as $k) { ?>
                                                <option value="<?= $k->idKonsumen; ?>" <?php if ($k->idKonsumen == $toko->idKonsumen) echo 'selected'; ?>><?= $k->idKonsumen; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Toko</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="Biaya" value="<?= $toko->namaToko; ?>">
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID TOKO</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="Biaya" value="<?= $toko->logo; ?>">
                                    </div>

                                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">ID TOKO</label>
                                    <div class="col-sm-9 mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="500" cols="500"><?= $toko->deskripsi; ?></textarea>
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