<?php
    include "../koneksi.php";
    $id_buku = $_POST['id_buku'];
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $id_penulis = $_POST['id_penulis'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_kategori = $_POST['id_kategori'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $sinopsis = $_POST['sinopsis'];

    $query = mysqli_query($koneksi, "INSERT INTO buku (id_buku, isbn, judul, id_penulis, id_penerbit, id_kategori, tahun_terbit, sinopsis) 
                                    VALUES ('$id_buku', '$isbn', '$judul', '$id_penulis', '$id_penerbit', '$id_kategori', '$tahun_terbit', '$sinopsis')");
    header('location:data_buku.php');
?>
