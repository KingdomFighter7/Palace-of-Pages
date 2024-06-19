<?php
include "../koneksi.php";

$nisn = $_GET['nisn'];

$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn = '$nisn'");

header('location:data_siswa.php');
?>
