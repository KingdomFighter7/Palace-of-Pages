<?php
    include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;" >
            <div class="card">
                <div class="card-header">
                    Data Penerbit
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="tambah_penerbit.php" class="btn btn-primary">Tambah Data</a>
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
                                    <th>ID Penerbit</th>
                                    <th>Nama Penerbit</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php
                                    include "../koneksi.php";
                                    if (isset($_GET['cari'])) {
                                        $keyword = $_GET['keyword'];
                                        $query = mysqli_query($koneksi, "SELECT * FROM penerbit WHERE nama_penerbit LIKE '%$keyword%'");
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM penerbit");
                                    }
                                    $no = 1;
                                    while ($ambil_data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $ambil_data['id_penerbit']; ?></td>
                                    <td><?php echo $ambil_data['nama_penerbit']; ?></td>
                                    <td>
                                        <a href="edit_penerbit.php?id=<?php echo $ambil_data['id_penerbit']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="hapus_penerbit.php?id=<?php echo $ambil_data['id_penerbit']; ?>" class="btn btn-danger">Hapus</a>
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
