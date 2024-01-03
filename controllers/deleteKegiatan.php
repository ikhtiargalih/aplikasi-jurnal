<?php 
include '../config/koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM `kegiatan` WHERE id='$id'");

header('Location: ../kegiatan.php');
?>