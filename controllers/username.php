<?php

include '../config/koneksi.php';

// Ambil data dari form registrasi
$username = $_POST['username'];
$password = md5($_POST['password']);

// Query untuk menyimpan data ke database
$sql = mysqli_query($koneksi, "INSERT INTO user (username, password ) VALUES ('$username', '$password')");

header('Location: ../login/login_admin.html');


?>
