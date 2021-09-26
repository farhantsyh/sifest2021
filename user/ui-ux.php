<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX | SI FEST 2021</title>

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
                                <h3>UI/UX</h3>
                                <p class="text-subtitle text-muted">Konfirmasi Pembayaran & Verifikasi Peserta</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">UI/UX</li>
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
                                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#memberOne" aria-expanded="false" aria-controls="memberOne">Anggota 1 (Individu)</a>
                                                            </h5>
                                                            <div id="memberOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="member1">Nama Lengkap</label>
                                                                        <input type="text" id="member1"
                                                                            class="form-control mb-2" name="member1"
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
                                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#memberTwo" aria-expanded="false" aria-controls="memberTwo">Anggota 2 (Opsional)</a>
                                                            </h5>
                                                            <div id="memberTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="member2">Nama Lengkap</label>
                                                                        <input type="text" id="member2"
                                                                            class="form-control mb-2" name="member2"
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
                                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#memberThree" aria-expanded="false" aria-controls="memberThree">Anggota 3 (Opsional)</a>
                                                            </h5>
                                                            <div id="memberThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                              <div class="accordion-body">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="member3">Nama Lengkap</label>
                                                                        <input type="text" id="member3"
                                                                            class="form-control mb-2" name="member3"
                                                                            placeholder="Nama Lengkap" required>
                                                                        
                                                                        <label for="ktm3">KTM/KPM/Kartu Pelajar</label>
                                                                        <input type="file" id="ktm3" class="form-control" name="ktm3" required>
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