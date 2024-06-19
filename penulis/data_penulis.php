<?php
    include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;" >
            <div class="card">
                <div class="card-header">
                    Data Penulis
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="tambah_penulis.php" class="btn btn-primary">Tambah Data</a>
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
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>ID Penulis</th>
                                    <th>Nama Penulis</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php
                                    include "../koneksi.php";
                                    if (isset($_GET['cari'])) {
                                        $keyword = $_GET['keyword'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM penulis WHERE nama_penulis LIKE '%$keyword%'");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM penulis");
                                    }
                                    $no = 1;
                                    while ($ambil_data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $ambil_data['id_penulis']; ?></td>
                                    <td><?php echo $ambil_data['nama_penulis']; ?></td>
                                    <td>
                                        <a href="edit_penulis.php?id=<?php echo $ambil_data['id_penulis']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="hapus_penulis.php?id=<?php echo $ambil_data['id_penulis']; ?>" class="btn btn-danger">Hapus</a>
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

<?php
    include "../footer.html";
?>
