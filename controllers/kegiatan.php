<?php

include '../config/koneksi.php';

// Ambil data dari form kegiatan
$divisi = $_POST['divisi'];
$pelaksanaan = date('Y-m-d H:i:s'); ;
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$kegiatan= $_POST['kegiatan'];

// Query untuk menyimpan data ke database
$sql = mysqli_query($koneksi, "INSERT INTO kegiatan ( divisi, pelaksanaan, mulai, selesai, kegiatan) VALUES ( '$divisi', '$pelaksanaan', '$mulai', '$selesai', '$kegiatan')");

header('Location: ../kegiatan.php');


?>
