<?php
include "../koneksi.php";

try {
    $id_buku = $_POST['id_buku'];
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $id_penulis = $_POST['id_penulis'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_kategori = $_POST['id_kategori'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $sinopsis = $_POST['sinopsis'];

    $query = "UPDATE buku SET isbn = '$isbn', judul = '$judul', id_penulis = '$id_penulis', 
              id_penerbit = '$id_penerbit', id_kategori = '$id_kategori', tahun_terbit = '$tahun_terbit', 
              sinopsis = '$sinopsis' WHERE id_buku = '$id_buku'";

    if (mysqli_query($koneksi, $query)) {
        header('Location: data_buku.php');
        exit();
    } else {
        throw new Exception("Gagal menyimpan data buku: " . mysqli_error($koneksi));
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>