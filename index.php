<?php
include_once "header.php";
include_once "koneksi.php";

$count_peminjaman_query = mysqli_query($koneksi, "SELECT COUNT(*) AS total_peminjaman FROM peminjaman");
$count_peminjaman_data = mysqli_fetch_assoc($count_peminjaman_query);
$total_peminjaman = $count_peminjaman_data['total_peminjaman'];

$count_buku_query = mysqli_query($koneksi, "SELECT COUNT(*) AS total_buku FROM buku");
$count_buku_data = mysqli_fetch_assoc($count_buku_query);
$total_buku = $count_buku_data['total_buku'];

$count_siswa_query = mysqli_query($koneksi, "SELECT COUNT(*) AS total_siswa FROM siswa");
$count_siswa_data = mysqli_fetch_assoc($count_siswa_query);
$total_siswa = $count_siswa_data['total_siswa'];
?>

<!-- content -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="books.png" class="img-fluid" alt="Gambar Perpustakaan">
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center mb-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Peminjaman</h5>
                            <p class="card-text">Jumlah peminjaman buku: <?php echo $total_peminjaman; ?></p>
                            <a href="/perpustakaan/peminjaman/data_peminjaman.php" class="btn btn-primary">Peminjaman</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center align-items-center mb-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Data Buku</h5>
                            <p class="card-text">Jumlah buku: <?php echo $total_buku; ?></p>
                            <a href="/perpustakaan/buku/data_buku.php" class="btn btn-primary">Data Buku</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center align-items-center mb-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Data Siswa</h5>
                            <p class="card-text">Jumlah siswa: <?php echo $total_siswa; ?></p>
                            <a href="/perpustakaan/siswa/data_siswa.php" class="btn btn-primary">Data Siswa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content -->

<?php
include_once "footer.html";
?>