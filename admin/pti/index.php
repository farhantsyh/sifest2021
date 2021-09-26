<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin PTI SIFEST 2021</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../assets/vendor/iconly/bold.css">

    <link rel="stylesheet" href="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">

            <? include 'includes/header.php'; ?>

            <!-- main -->
            <div class="content-wrapper container">
                <div class="page-heading">
                    <h3>Welcome, Admin PTI</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="row">

                                <div class="col-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="stats-icon purple">
                                                        <i class="iconly-boldUser1"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="text-muted">Total User</h6>
                                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="stats-icon red">
                                                        <i class="iconly-boldDanger"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="text-muted">Lupa Password</h6>
                                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldShield-Done"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="text-muted">Total Peserta Lomba</h6>
                                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="stats-icon blue">
                                                        <i class="iconly-boldTicket-Star"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="text-muted">Total Peserta Seminar</h6>
                                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <? include 'includes/footer.php'; ?>

        </div>
    </div>

    <script src="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/vendor/apexcharts/apexcharts.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>

    <script src="../../assets/js/pages/horizontal-layout.js"></script>
</body>

</html>