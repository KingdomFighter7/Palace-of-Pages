<?php
include "../koneksi.php";

$id_peminjaman = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'");
$data = mysqli_fetch_array($query);

if ($data) {
    $delete_query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'");
    if ($delete_query) {
        echo "Data peminjaman berhasil dihapus.";
    } else {
        echo "Gagal menghapus data peminjaman.";
    }
} else {
    echo "Data peminjaman tidak ditemukan.";
}

header("Location: data_peminjaman.php");
?>