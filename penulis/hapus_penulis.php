<?php
include "../koneksi.php";

$id_penulis = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM penulis WHERE id_penulis = '$id_penulis'");

header('location:data_penulis.php');
?>
