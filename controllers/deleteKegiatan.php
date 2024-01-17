<?php 
include '../config/koneksi.php';

$id = $_GET['id_kegiatan'];

$sql = mysqli_query($koneksi, "DELETE FROM `kegiatan` WHERE id_kegiatan='$id'");

header('Location: ../kegiatan.php');
?>