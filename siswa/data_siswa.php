<?php
    include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Data Siswa
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="tambah_siswa.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="col">
                            <form class="d-flex justify-content-end" method="GET">
                                <input type="text" class="form-control" name="keyword">
                                <input type="submit" class="btn btn-primary ms-2" name="cari" value="Cari">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th>No</th>
                                                <th>NISN</th>
                                                <th>Nama Siswa</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php
                                                if (isset($_GET['cari'])) {
                                                    $keyword = $_GET['keyword'];
                                                    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama_siswa LIKE '%$keyword%'");
                                                } else {
                                                    $query = mysqli_query($koneksi, "SELECT * FROM siswa");
                                                }
                                                $no = 1;
                                                while ($ambil_data = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $ambil_data['nisn']; ?></td>
                                                <td><?php echo $ambil_data['nama_siswa']; ?></td>
                                                <td><?php echo $ambil_data['jenis_kelamin']; ?></td>
                                                <td><?php echo $ambil_data['tempat_lahir']; ?></td>
                                                <td><?php echo $ambil_data['tanggal_lahir']; ?></td>
                                                <td>
                                                    <a href="edit_siswa.php?nisn=<?php echo $ambil_data['nisn']; ?>" class="btn btn-warning">Edit</a>
                                                    <a href="hapus_siswa.php?nisn=<?php echo $ambil_data['nisn']; ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "../footer.html";
?>
