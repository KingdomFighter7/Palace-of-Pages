<?php
include "../koneksi.php";

$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$query = mysqli_query($koneksi, "UPDATE siswa SET nama_siswa = '$nama_siswa', jenis_kelamin = '$jenis_kelamin', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir' WHERE nisn = '$nisn'");

header('location:data_siswa.php');
?>
