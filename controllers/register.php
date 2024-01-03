<?php

include '../config/koneksi.php';

// Ambil data dari form registrasi
$email = $_POST['email'];
$nama = $_POST['nama'];
$keahlian = $_POST['keahlian'];
$tempat = $_POST['tempat'];
$tahun = $_POST['tahunPelajaran'];
$jabatan = $_POST['jabatan'];
$pembimbing = $_POST['pembimbing'];

// Query untuk menyimpan data ke database
$sql = mysqli_query($koneksi, "INSERT INTO pdf ( email, nama, keahlian, tempat, tahunPelajaran, jabatan, pembimbing) VALUES ( '$email', '$nama', '$keahlian', '$tempat', '$tahun', '$jabatan', '$pembimbing')");

header('Location: ../login/username.html');


?>
