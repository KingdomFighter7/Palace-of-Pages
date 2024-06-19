<?php
include "../koneksi.php";

$id_penulis = $_POST['id_penulis'];
$nama_penulis = $_POST['nama_penulis'];

$query = mysqli_query($koneksi, "UPDATE penulis SET nama_penulis = '$nama_penulis' WHERE id_penulis = '$id_penulis'");

header('location:data_penulis.php');
?>
