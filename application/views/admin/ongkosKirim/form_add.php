<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Ongkir</a></div>
                <div class="breadcrumb-item">Form edit</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9">
                    <form method="POST" action="<?php echo site_url('ongkosKirim/save'); ?>">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Ongkir</h4>
                            </div>
                            <div class="card-body">
                                <div class="from-group row">
                                    <!-- ============================================================================== -->
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kurir</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select required name="idKurir" class="form-select form-control" id="inputEmail3">

                                            <?php
                                            foreach ($kurir as $row) {
                                                echo "<option value='" . $row->idKurir . "'>" . $row->namaKurir . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Asal</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select required name="idKotaAsal" class="form-select form-control" id="inputEmail3">

                                            <?php
                                            foreach ($kota as $row) {
                                                echo "<option value='" . $row->idKota . "'>" . $row->namaKota . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select required name="idKotaTujuan" class="form-select form-control" id="inputEmail3">

                                            <?php
                                            foreach ($kota as $row) {
                                                echo "<option value='" . $row->idKota . "'>" . $row->namaKota . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Biaya</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="Biaya">

                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>