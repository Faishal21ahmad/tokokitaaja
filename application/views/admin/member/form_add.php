<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Member</a></div>
                <div class="breadcrumb-item">Form Add</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form</h2>
            <div class="row">
                <div class="col-13 col-md-11 col-lg-10">
                    <form method="POST" action="<?php echo site_url('member/save'); ?>">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Add Member</h4>
                            </div>
                            <div class="card-body">
                                <div class="from-group row">
                                    <!-- ============================================================================== -->
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Username">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="password" placeholder="Password">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Konsumen</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="namaKonsumen" placeholder="Nama Konsumen">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="alamat" placeholder="Alamat">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kota</label>
                                    <div class="input-group col-sm-9 mb-3">
                                        <select required name="namaKota" class="form-select form-control" id="inputEmail3" name="idKota">
                                            <?php
                                            foreach ($kota as $row) {
                                                echo "<option value='" . $row->idKota . "'>" . $row->namaKota . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="_____@gmail.com">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Telephone</label>
                                    <div class="col-sm-9 mb-3">
                                        <input type="text" class="form-control" id="inputEmail3" name="tlpn" placeholder="08___">
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