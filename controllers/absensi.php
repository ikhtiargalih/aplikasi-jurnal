<?php

include '../config/koneksi.php';

// Ambil data dari form registrasi
$tanggal = date('Y-m-d H:i:s');
$kehadiran= $_POST['kehadiran'];
$keterangan = $_POST['keterangan'];

// Query untuk menyimpan data ke database
$sql = mysqli_query($koneksi, "INSERT INTO absensi ( tanggal, kehadiran, keterangan) VALUES ( '$tanggal', '$kehadiran', '$keterangan')");

header('Location: ../absensi.php');  
?>