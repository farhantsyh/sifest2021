<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant | SI FEST 2021</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/toastify/toastify.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet">

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
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Valorant</h3>
                                <p class="text-subtitle text-muted">Konfirmasi Pembayaran & Verifikasi Peserta</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Valorant</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Basic Vertical form layout section start -->
                    <section id="basic-vertical-layouts">
                        <div class="row match-height">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Status Pendaftaran Lomba: Data belum dikirim </h4>
                                            <form class="form form-vertical">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <h4 class="card-title">Konfirmasi Pembayaran</h4>
                                                        <div class="col-12 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label for="bukti">Upload bukti pembayaran</label>
                                                                <input type="file" id="bukti" class="form-control" name="bukti" required>
                                                            </div>
                                                        </div>

                                                        <h4 class="card-title">Verifikasi Peserta</h4>
                                                        <!-- <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="nama-tim">Nama Tim</label>
                                                                <input type="text" id="nama-tim"
                                                                    class="form-control" name="nama-tim"
                                                                    placeholder="(ini nama tim)" required>
                                                            </div>
                                                        </div> -->

                                                        <div class="accordion" id="accordionExample">
                                                          <div class="accordion-item">
                                                            <h5 class="accordion-header" id="headingOne">
                                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#playerOne" aria-expanded="false" aria-controls="playerOne">Player 1</a>
                                                            </h5>
                                                            <div id="playerOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="player1">Nama Lengkap</label>
                                                                        <input type="text" id="player1"
                                                                            class="form-control mb-2" name="player1"
                                                                            placeholder="Nama Lengkap" required>
                                                                        
                                                                        <label for="ktm1">KTM/KPM/Kartu Pelajar</label>
                                                                        <input type="file" id="ktm1" class="form-control" name="ktm1" required>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="accordion-item">
                                                            <h5 class="accordion-header" id="headingTwo">
                                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#playerTwo" aria-expanded="false" aria-controls="playerTwo">Player 2</a>
                                                            </h5>
                                                            <div id="playerTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="player2">Nama Lengkap</label>
                                                                        <input type="text" id="player2"
                                                                            class="form-control mb-2" name="player2"
                                                                            placeholder="Nama Lengkap" required>
                                                                        
                                                                        <label for="ktm2">KTM/KPM/Kartu Pelajar</label>
                                                                        <input type="file" id="ktm2" class="form-control" name="ktm2" required>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="accordion-item">
                                                            <h5 class="accordion-header" id="headingThree">
                                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#playerThree" aria-expanded="false" aria-controls="playerThree">Player 3</a>
                                                            </h5>
                                                            <div id="playerThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="player3">Nama Lengkap</label>
                                                                        <input type="text" id="player3"
                                                                            class="form-control mb-2" name="player3"
                                                                            placeholder="Nama Lengkap" required>
                                                                        
                                                                        <label for="ktm3">KTM/KPM/Kartu Pelajar</label>
                                                                        <input type="file" id="ktm3" class="form-control" name="ktm3" required>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="accordion-item">
                                                            <h5 class="accordion-header" id="headingFour">
                                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#playerFour" aria-expanded="false" aria-controls="playerFour">Player 4</a>
                                                            </h5>
                                                            <div id="playerFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="player4">Nama Lengkap</label>
                                                                        <input type="text" id="player4"
                                                                            class="form-control mb-2" name="player4"
                                                                            placeholder="Nama Lengkap" required>
                                                                        
                                                                        <label for="ktm4">KTM/KPM/Kartu Pelajar</label>
                                                                        <input type="file" id="ktm4" class="form-control" name="ktm4" required>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="accordion-item">
                                                            <h5 class="accordion-header" id="headingFive">
                                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#playerFive" aria-expanded="false" aria-controls="playerFive">Player 5</a>
                                                            </h5>
                                                            <div id="playerFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="player5">Nama Lengkap</label>
                                                                        <input type="text" id="player5"
                                                                            class="form-control mb-2" name="player5"
                                                                            placeholder="Nama Lengkap" required>
                                                                        
                                                                        <label for="ktm5">KTM/KPM/Kartu Pelajar</label>
                                                                        <input type="file" id="ktm5" class="form-control" name="ktm5" required>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                        </div>

                                                        <div class="col-12 col-md-12 mt-3">
                                                            <div class='form-check'>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox1"
                                                                        class='form-check-input' required>
                                                                    <label for="checkbox1">Saya telah mengisi data dengan benar</label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox2"
                                                                        class='form-check-input' required>
                                                                    <label for="checkbox2">Kirim data di atas, admin akan mengecek apakah data valid atau tidak. Jika tampilan website tidak berubah dalam 1x24 jam, maka data tidak valid dan mohon untuk mengirim data yang valid</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end col-md-12">
                                                            <button type="reset"
                                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                            <button type="submit"
                                                                class="btn btn-primary me-1 mb-1">Kirim &raquo;</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Basic Vertical form layout section end -->

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