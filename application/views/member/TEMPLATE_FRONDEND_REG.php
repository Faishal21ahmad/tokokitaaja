<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="http://localhost/tokokita/assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/tokokita/assets/admin/assets/css/components.css">
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="http://localhost/tokokita/index.php" class="navbar-brand sidebar-gone-hide">Tokokita</a>
                <div class="navbar-nav">
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                </div>
                <div class="nav-collapse">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="#" class="nav-link">Tentang Tokokita</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Cara Belanja</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Hubungi Kami</a></li>
                    </ul>
                </div>
                <form class="form-inline ml-auto">
                    <ul class="navbar-nav">
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <select data-width="150" class="form-control">
                            <option class="form-control">Baju Laki-laki</option>
                            <option class="form-control">Celana Cowok</option>
                            <option class="form-control">Baju Cewek</option>
                        </select>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="300">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li><a href="http://localhost/tokokita/index.php/member/keranjang"><i class="far fa-bell"></i></a>

                    </li>

                </ul>
                <a href="http://localhost/tokokita/index.php/home/login" class="btn btn-outline-light">Masuk</a>
                &nbsp; &nbsp; &nbsp;
                <a href="http://localhost/tokokita/index.php/home/register" class="btn btn-outline-light">Daftar</a>


            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><span>Baju Laki-laki</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><span>Celana Cowok</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><span>Baju Cewek</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row">
                        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">


                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Register</h4>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="http://localhost/tokokita/index.php/home/act_reg">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="first_name">Nama Lengkap</label>
                                                <input id="first_name" type="text" class="form-control" name="nama" autofocus>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="last_name">Email</label>
                                                <input id="last_name" type="email" class="form-control" name="email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Username</label>
                                            <input id="email" type="text" class="form-control" name="username">
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
                                                <input id="password2" type="password" class="form-control" name="password_confirm">
                                            </div>
                                        </div>

                                        <div class="form-divider">
                                            Your Home
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="email">Alamat</label>
                                                <input id="email" type="text" class="form-control" name="alamat">
                                                <div class="invalid-feedback">
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Kota</label>
                                                <select class="form-control selectric" name="kota">
                                                    <option value="2">Magelang</option>
                                                    <option value="3">Jogja</option>
                                                    <option value="5">Klaten</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>No Telpon</label>
                                                <input type="text" class="form-control" name="no_telpon">
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

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="http://localhost/tokokita/assets/admin/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="http://localhost/tokokita/assets/admin/assets/js/scripts.js"></script>
    <script src="http://localhost/tokokita/assets/admin/assets/js/custom.js"></script>
</body>

</html>