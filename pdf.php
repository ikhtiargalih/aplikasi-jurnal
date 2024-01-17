<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Our Jurnal</title>

    <link href="assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- link cdn jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>Our Jurnal</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Home <i class="fa-solid fa-house"></i></a></li>
                    <li><a class="nav-link scrollto" href="absensi.php">Absensi <i class="fa-solid fa-user-check"></i></a></li>
                    <li><a class="nav-link scrollto" href="kegiatan.php">Kegiatan <i class="fa-solid fa-user-clock"></i></a></li>
                    <li><a class="nav-link scrollto" href="profile.php">Profile <i class="fa-solid fa-user"></i></a></li>
                    <li><a class="nav-link scrollto" href="#">Logout<i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container p-5" data-aos="fade-up">
                <?php
                 require_once 'config/koneksi.php';
                 $sql= mysqli_query($koneksi, "SELECT * FROM pdf ORDER BY id_pdf ASC");
                 ?> 
                <header class="section-header mt-3 mb-5">
                    <h2>Kegiatan</h2>
                    <p>Laporan Kegiatan Harian</p>
                </header>
                <div class="cotainer">
                    <div class="row">
                    <?php                                                                                                                                                                                                                                                                                                                                                                           
                            while($item=mysqli_fetch_array($sql)){
                        ?>
                        <div class="col-6">
                            <p>Nama               :<?=$item['nama']?></p>
                            <p>Kepetensi Keahlian :<?=$item['keahlian']?></p>
                            <p>Tahun Pelajaran    :<?=$item['tahunPelajaran']?></p>
                        </div>
                        <div class="col-6">
                            <p>Tempat PKL         :<?=$item['tempat']?></p>
                            <p>Nama Pembimbing    :<?=$item['pembimbing']?></p>
                            <p>Jabatan            :<?=$item['jabatan']?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Divisi / <br> Departemen</th>
                                <th>Hari/Tgl<br> Pelaksanaan</th>
                                <th>Mulai<br> Pukul</th>
                                <th>Selesai<br> Pukul</th>
                                <th>Kegiatan yang <br> Dilakukan</th>
                                <th>Catatan<br>Pembebimbing</th>
                                <th>Paraf<br>Pembimbing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td> 
                                <td></td>
                                <td></td>
                                <td>
                                </td>
                            </tr>
                        </tbody>
                    </table>

            </div>

        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>