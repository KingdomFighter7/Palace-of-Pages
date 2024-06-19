<?php
include "../koneksi.php";

$id_penerbit = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];

$query = mysqli_query($koneksi, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit' WHERE id_penerbit = '$id_penerbit'");

header('location:data_penerbit.php');
?>
