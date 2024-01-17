<?php
include '../config/koneksi.php';

// Ambil data dari table absensi
$id = $_POST['id_kegiatan'];
$divisi =$_POST['divisi'];
$pelaksanaan = date('Y-m-d H:i:s');
$mulai= $_POST['mulai'];
$selesai = $_POST['selesai'];
$kegiatan = $_POST['kegiatan'];

// Query untuk menyimpan data ke database
$query = mysqli_query($koneksi, "UPDATE `kegiatan` SET `divisi`='$divisi',`pelaksanaan`='$pelaksanaan',`mulai`='$mulai',`selesai`='$selesai',`kegiatan`='$kegiatan' WHERE `id_kegiatan`='$id'");

header('Location: ../kegiatan.php');
?>