<div class="main-content">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-8 offset-xl-2">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="<?php echo site_url('home/actreg'); ?>">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="first_name">Nama Lengkap</label>
                                        <input id="inputEmail3" type="text" class="form-control" name="namaKonsumen" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="email">Email</label>
                                        <input id="inputEmail3" type="text" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="inputEmail3" type="text" class="form-control" name="username">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password_confirm" type="password" class="form-control" name="password_confirm">
                                    </div>
                                </div>

                                <div class="form-divider">
                                    Alamat
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Rumah</label>
                                    <input id="inputEmail3" type="text" class="form-control" name="alamat">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Kota</label>
                                        <select required class="form-select form-control" id="inputEmail3" name="idKota">
                                            <?php
                                            foreach ($kota as $row) {
                                                echo "<option value='" . $row->idKota . "'>" . $row->namaKota . "</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Nomor Hp</label>
                                        <input type="text" class="form-control" name="tlpn" id="inputEmail3">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                </div>

                                <div class="col-sm-9 mb-3 d-none">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="statusAktif" id="statusAktif" value="Y" checked>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>