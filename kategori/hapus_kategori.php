<?php
include "../koneksi.php";

$id_kategori = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '$id_kategori'");

header('location:data_kategori.php');
?>