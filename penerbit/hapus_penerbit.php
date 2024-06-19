<?php
include "../koneksi.php";

$id_penerbit = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM penerbit WHERE id_penerbit = '$id_penerbit'");

header('location:data_penerbit.php');
?>
