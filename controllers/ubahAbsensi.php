<?php
include '../config/koneksi.php';

// Ambil data dari table absensi
$id = $_POST['id_absensi'];
$tanggal = date('Y-m-d H:i:s');
$kehadiran= $_POST['kehadiran'];
$keterangan = $_POST['keterangan'];

// Query untuk menyimpan data ke database
$sql = mysqli_query($koneksi, "UPDATE `absensi` SET `tanggal`='$tanggal',`kehadiran`='$kehadiran',`keterangan`='$keterangan' WHERE id_absensi='$id'");

header('Location: ../absensi.php');
?> 