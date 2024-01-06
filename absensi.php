<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Our Jurnal</title>

    <link href="assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

            <a href="index.php" class="logo d-flex align-items-center">
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

    <!-- ======= Hero Section ======= -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

                <div class="container p-5" data-aos="fade-up">

                    <header class="section-header mt-3 mb-5">
                        <h3>Absensi</h3>
                        <p>Absensi Kehadiran</p>
                        
                    </header>
                    <a class="btn btn-outline-primary mb-3" href="forms/formAbsensi.html">Absen <i class="fa-solid fa-file-import"></i></a>
                    <table class="table table-hover">
                        <?php
                         include 'config/koneksi.php';
                         $query = mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY id DESc");
                        ?>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Kehadiran</th>
                                <th>Keterangan</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $no=0;
                            while($item=mysqli_fetch_array($query)){
                        $no++
                        ?>
                            <tr>
                                <th><?= $no?></th>
                                <td><?= $item['tanggal']?></td>
                                <td><?= $item['kehadiran']?></td>
                                <td><?= $item['keterangan']?></td>
                                <td>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#myModal"  onclick="ubah('<?= $item['id'] ?>')" ><i
                                            class="btn btn-outline-primary fa-solid fa-pen-to-square"></i></a>

                                    <a href="controllers/deleteAbsensi.php?id=<?= $item['id'] ?>"><i class="btn btn-outline-danger fa-solid fa-circle-xmark ms-3"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                </div>
                
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Modal body..
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function ubah(a) {

                let url = 'forms/formUbahAbsensi.php';
                $.post(url, {
                id: a
             }, function(data) {
                 $('.modal-title').html('Keterangan');
                 $('.modal-body').html(data);

            });
          }
        </script>


        </section><!-- End About Section -->

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