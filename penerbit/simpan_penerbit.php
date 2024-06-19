<?php
include "../koneksi.php";

$nama_penerbit = $_POST['nama_penerbit'];
$query = mysqli_query($koneksi, "INSERT INTO penerbit (nama_penerbit) VALUES ('$nama_penerbit')");

header('location:data_penerbit.php');
?>
