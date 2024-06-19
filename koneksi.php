<?php
try {
    $koneksi = new mysqli("localhost", "root", "", "perpustakaan");

    if ($koneksi->connect_error) {
        throw new Exception("Koneksi gagal: " . $koneksi->connect_error);
    }

} catch (Exception $e) {
    echo $e->getMessage();
}
?>