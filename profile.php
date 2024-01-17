<?php
// $id= $_POST['id_pdf'];
include 'config/koneksi.php';
$query= mysqli_query($koneksi, "SELECT * FROM pdf ORDER BY id_pdf DESC" )
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FlexStart Bootstrap Template - Index</title>

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
                    <li><a class="nav-link scrollto active" href="index.php">Home <i class="fa-solid fa-house"></i></a>
                    </li>
                    <li><a class="nav-link scrollto" href="absensi.php">Absensi <i
                                class="fa-solid fa-user-check"></i></a></li>
                    <li><a class="nav-link scrollto" href="kegiatan.php">Kegiatan <i
                                class="fa-solid fa-user-clock"></i></a></li>
                    <li><a class="nav-link scrollto" href="profile.php">Profile <i class="fa-solid fa-user"></i></a>
                    </li>
                    <li><a class="nav-link scrollto" href="#">Logout<i
                                class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container">

                <header class="section-header mt-5 mb-5">
                    <h2>Profile</h2>
                    <p>Profile User</p>
                </header>
                <div class="d-flex justify-content-center">
                    <?php
                    while($item=mysqli_fetch_array($query)){
                ?>
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4><form action="pdf.php?id=<?= $item['id_pdf'] ?>" method="POST">
                                <button><?= $item['nama']?></button>
                            
                               </form></h4>
                                <span><?= $item['keahlian']?></span>
                                <p>“Saya adalah Siswa SMk WIKRAMA BOGOR jurusan Programan Parangkat Lunak Dan Gim .</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>

        </section><!-- End Team Section -->

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