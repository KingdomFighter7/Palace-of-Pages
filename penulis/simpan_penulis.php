<?php
include "../koneksi.php";

$nama_penulis = $_POST['nama_penulis'];
$query = mysqli_query($koneksi, "INSERT INTO penulis (nama_penulis) VALUES ('$nama_penulis')");

header('location:data_penulis.php');
?>
