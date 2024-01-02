<?php

include '../config/koneksi.php';

// Ambil data dari form registrasi
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$nama = $_POST['nama'];
$keahlian = $_POST['keahlian'];
$tp = $_POST['tp'];
$pkl = $_POST['pkl'];
$napem = $_POST['napem'];
$jabatan = $_POST['jabatan'];

// Query untuk menyimpan data ke database
$sql = mysqli_query($koneksi, "INSERT INTO users (username, password, email, nama, keahlian, tp, pkl, napem, jabatan) VALUES ('$username', '$password', '$email', '$nama', '$keahlian', '$tp', '$pkl', '$napem', '$jabatan')");

header('Location: ../login/login_admin.html');


?>
