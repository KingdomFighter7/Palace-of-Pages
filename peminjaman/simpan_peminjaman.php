<?php
include "../koneksi.php";

try {
    $nisn = $_POST['nisn'];
    $id_buku = $_POST['id_buku'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_jatuh_tempo = $_POST['tanggal_jatuh_tempo'];
    $status_pinjam = 'dipinjam';

    $query = $koneksi->prepare("INSERT INTO peminjaman (nisn, id_buku, tanggal_peminjaman, tanggal_jatuh_tempo, status_pinjam) VALUES (?, ?, ?, ?, ?)");
    $query->bind_param("sssss", $nisn, $id_buku, $tanggal_peminjaman, $tanggal_jatuh_tempo, $status_pinjam);

    if ($query->execute()) {
        header('Location: data_peminjaman.php');
    } else {
        throw new Exception("Gagal menyimpan data peminjaman: " . $query->error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>