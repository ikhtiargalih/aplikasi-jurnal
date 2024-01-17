<?php 
include '../config/koneksi.php';

$id = $_GET['id_absensi'];

$sql = mysqli_query($koneksi, "DELETE FROM `absensi` WHERE id_absensi='$id'");

header('Location: ../absensi.php');
?>