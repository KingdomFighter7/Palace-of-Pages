<?php
include "../koneksi.php";

$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$query = mysqli_query($koneksi, "INSERT INTO siswa (nisn, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir) VALUES ('$nisn', '$nama_siswa', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir')");

header('location:data_siswa.php');