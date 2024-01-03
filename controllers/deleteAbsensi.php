<?php 
include '../config/koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM `absensi` WHERE id='$id'");

header('Location: ../absensi.php');
?>