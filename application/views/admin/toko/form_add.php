<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">toko</a></div>
                <div class="breadcrumb-item">Form toko</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9">
                    <form method="POST" action="<?php echo site_url('toko/save'); ?>">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah toko</h4>
                            </div>
                            <div class="card-body">
                                <div class="from-group row">
                                    <!-- ============================================================================== -->
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID TOKO</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="idToko">
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID Konsumen</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select required name="idKonsumen" class="form-select form-control" id="inputEmail3">

                                            <?php
                                            foreach ($member as $row) {
                                                echo "<option value='" . $row->idKonsumen . "'>" . $row->idKonsumen . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Toko</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="namaToko">
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Logo</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="logo">
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="deskripsi">
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Status Aktif</label>
                                    <div class="col-sm-9 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="statusAktif" id="statusAktif" value="Y" checked>
                                            <label class="form-check-label" for="Y">
                                                Y Aktif
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="statusAktif" id="statusAktif" value="T">
                                            <label class="form-check-label" for="T">
                                                T Tidak
                                            </label>
                                        </div>
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