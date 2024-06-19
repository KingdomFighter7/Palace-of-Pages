<?php
  include "koneksi.php";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/perpustakaan/styles.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Palace of Pages</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/perpustakaan/index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Data Master
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/perpustakaan/buku/data_buku.php">Buku</a></li>
              <li><a class="dropdown-item" href="/perpustakaan/penulis/data_penulis.php">Penulis</a></li>
              <li><a class="dropdown-item" href="/perpustakaan/penerbit/data_penerbit.php">Penerbit</a></li>
              <li><a class="dropdown-item" href="/perpustakaan/kategori/data_kategori.php">Kategori</a></li>
              <li><a class="dropdown-item" href="/perpustakaan/siswa/data_siswa.php">Siswa</a></li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/perpustakaan/peminjaman/data_peminjaman.php">Peminjaman</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- navbar -->