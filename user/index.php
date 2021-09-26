<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SI FEST 2021</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/iconly/bold.css">

    <link rel="stylesheet" href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">

            <? include 'includes/header.php'; ?>

            <!-- main -->
            <div class="content-wrapper container">
                <div class="page-heading">
                    <h3>Welcome, John Duck</h3>
                </div>
                <div class="card">
                    <div class="card-body" style="padding: 2% 2.6%;"> 
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl bg-primary">
                                <img src="../assets/img/logo.png" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">John Duck</h5>
                                <h6 class="text-muted mb-2">Universitas Sriwijaya</h6>
                            </div>
                            <div class="name border-start border-2 px-4 py-2" style="margin: 0 2.5%;">
                                <h6 class="text-muted mb-2"><i class="bi bi-envelope"></i> ex@gmail.com</h6>
                                <h6 class="text-muted mb-0"><i class="bi bi-whatsapp"></i> 6281992384686</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="row">
                                <!-- line1 -->
                                <div class="col-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body px-3 pt-4 pb-3">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldTick-Square"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">Lomba Terverifikasi</h6>
                                                    <h6 class="font-extrabold mb-0">0</h6>
                                                    <h6 class="text-muted font-semibold">dari <b>7</b> lomba yang diikuti</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body px-3 pt-4" style="padding-bottom: 31.39px;">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon red">
                                                        <i class="iconly-boldPaper-Download"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">Guidebook Lomba</h6>
                                                    <a href="#" class="btn btn-danger btn-sm">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body px-3 pt-4" style="padding-bottom: 41.57px;"> <!-- style="padding-bottom: 28.38px;" style="padding-bottom: 41.57px;"--> 
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon blue">
                                                        <i class="iconly-boldTicket-Star"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">Webinar (Coming Soon)</h6>
                                                    <div> <!-- class="pb-0" style="display: inline-flex;" -->                 
                                                        <h6 class="font-extrabold mb-0 me-2">Terdaftar <i class="bi bi-check-circle"></i></h6>
                                                        <!-- <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#webinar">Join Grup</a> -->
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- line2 -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body px-5 pt-4 pb-2" style="text-align: center;">
                                            <h3>LOMBA</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body px-3 pt-4" style="padding-bottom: 14px;">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon purple">
                                                        <i class="iconly-boldDocument"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">Artikel</h6>
                                                    <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#artikel">Daftar Artikel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body px-3 pt-4" style="padding-bottom: 14px;">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon blue">
                                                        <i class="iconly-boldImage"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">Poster</h6>
                                                    <a href="#" class="btn btn-outline-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#poster">Daftar Poster</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body px-3 pt-4" style="padding-bottom: 14px;">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldHeart"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">UI/UX</h6>
                                                    <a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#ui-ux">Daftar UI/UX</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- line3 -->
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body px-5 pt-3 pb-1" style="text-align: center;">
                                            <h4>E-Sport</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-md-4">
                                    <div class="card mt-0">
                                        <div class="card-body px-3 pt-4" style="padding-bottom: 14px;">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon blue">
                                                        <i class="iconly-boldGame"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">Mobile Legends</h6>
                                                    <a href="#" class="btn btn-outline-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#ml">Daftar ML</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body px-3 pt-4" style="padding-bottom: 14px;">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon purple">
                                                        <i class="iconly-boldGame"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">PUBG Mobile</h6>
                                                    <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#pubgm">Daftar PUBGM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4 col-md-4">
                                    <div class="card">
                                        <div class="card-body px-3 pt-4" style="padding-bottom: 14px;">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="stats-icon red">
                                                        <i class="iconly-boldGame"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="text-muted">Valorant</h6>
                                                    <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#valorant">Daftar Valorant</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Basic Modal -->
                                <!-- Info Webinar -->
                                <div class="modal fade text-left" id="webinar" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Info Webinar</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                dragée pastry.
                                                Carrot cake
                                                chocolate tootsie roll chocolate bar candy canes biscuit.</p>
                                                <p>No. Tiket Anda : 0000</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <span class="d-sm-block">Close</span>
                                                </button>
                                                <a href="#" target="_blank"><button type="button" class="btn btn-primary ml-1">
                                                    Join Grup &raquo;
                                                </button></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Daftar Artikel -->
                                <div class="modal fade text-left" id="artikel" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Daftar Artikel</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="#" method="post">
                                                <div class="modal-body">
                                                    <p>Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                    dragée pastry.
                                                    Carrot cake
                                                    chocolate tootsie roll chocolate bar candy canes biscuit.</p>
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-artikel" required>
                                                            <label for="cb-artikel">Saya yakin ingin mendaftar lomba Artikel SI FEST 2021</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <span class="d-sm-block">Cancel</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1" name="submit">
                                                        Daftar &raquo;
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Daftar Poster -->
                                <div class="modal fade text-left" id="poster" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Daftar Poster</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="#" method="post">
                                                <div class="modal-body">
                                                    <p>Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                    dragée pastry.
                                                    Carrot cake
                                                    chocolate tootsie roll chocolate bar candy canes biscuit.</p>
                                                    <label>Username Instagram: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="tanpa '@', contoh: sifest.unsri"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-validate" required>
                                                            <label for="cb-validate">Saya telah mengisi data dengan benar</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-poster" required>
                                                            <label for="cb-poster">Saya yakin ingin mendaftar lomba Poster Design SI FEST 2021</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <span class="d-sm-block">Cancel</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1" name="submit">
                                                        Daftar &raquo;
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Daftar UI/UX -->
                                <div class="modal fade text-left" id="ui-ux" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Daftar UI/UX</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="#" method="post">
                                                <div class="modal-body">
                                                    <p>Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                    dragée pastry.
                                                    Carrot cake
                                                    chocolate tootsie roll chocolate bar candy canes biscuit.</p>
                                                    <label>Nama Tim: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder=""
                                                            class="form-control" required>
                                                            <p>Isi dengan tanda strip (-) jika individu</p>
                                                    </div>
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-validate" required>
                                                            <label for="cb-validate">Saya telah mengisi data dengan benar</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-ui-ux" required>
                                                            <label for="cb-ui-ux">Saya yakin ingin mendaftar lomba UI/UX Design SI FEST 2021</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <span class="d-sm-block">Cancel</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1" name="submit">
                                                        Daftar &raquo;
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Daftar ML -->
                                <div class="modal fade text-left" id="ml" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Daftar ML</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="#" method="post">
                                                <div class="modal-body">
                                                    <p>Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                    dragée pastry.
                                                    Carrot cake
                                                    chocolate tootsie roll chocolate bar candy canes biscuit.</p>
                                                    <label>Nama Tim: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder=""
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-validate" required>
                                                            <label for="cb-validate">Saya telah mengisi data dengan benar</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-ml" required>
                                                            <label for="cb-ml">Saya yakin ingin mendaftar lomba E-Sport ML SI FEST 2021</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <span class="d-sm-block">Cancel</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1" name="submit">
                                                        Daftar &raquo;
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Daftar PUBGM -->
                                <div class="modal fade text-left" id="pubgm" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Daftar PUBG Mobile</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="#" method="post">
                                                <div class="modal-body">
                                                    <p>Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                    dragée pastry.
                                                    Carrot cake
                                                    chocolate tootsie roll chocolate bar candy canes biscuit.</p>
                                                    <label>Nama Tim: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder=""
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-validate" required>
                                                            <label for="cb-validate">Saya telah mengisi data dengan benar</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-pubgm" required>
                                                            <label for="cb-pubgm">Saya yakin ingin mendaftar lomba E-Sport PUBGM SI FEST 2021</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <span class="d-sm-block">Cancel</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1" name="submit">
                                                        Daftar &raquo;
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Daftar Valorant -->
                                <div class="modal fade text-left" id="valorant" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Daftar Valorant</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="#" method="post">
                                                <div class="modal-body">
                                                    <p>Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                    dragée pastry.
                                                    Carrot cake
                                                    chocolate tootsie roll chocolate bar candy canes biscuit.</p>
                                                    <label>Nama Tim: </label>
                                                    <div class="form-group">
                                                        <input type="text" placeholder=""
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-validate" required>
                                                            <label for="cb-validate">Saya telah mengisi data dengan benar</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" id="cb-valorant" required>
                                                            <label for="cb-valorant">Saya yakin ingin mendaftar lomba E-Sport Valorant SI FEST 2021</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <span class="d-sm-block">Cancel</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1" name="submit">
                                                        Daftar &raquo;
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- End Basic Modal -->

                            </div>
                        </div>

                    </section>
                </div>
            </div>

            <? include 'includes/footer.php'; ?>

        </div>
    </div>

    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/apexcharts/apexcharts.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>

    <script src="../assets/js/pages/horizontal-layout.js"></script>
</body>

</html>