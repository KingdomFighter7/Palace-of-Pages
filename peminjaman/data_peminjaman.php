<?php
include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Data Peminjaman
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="tambah_peminjaman.php" class="btn btn-primary">Tambah Data</a>
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
                                    <th>NISN</th>
                                    <th>ID Buku</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Jatuh Tempo</th>
                                    <th>Status</th>
                                    <th>Denda</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php
                                if (isset($_GET['cari'])) {
                                    $keyword = $_GET['keyword'];
                                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE nisn LIKE '%$keyword%' OR id_buku LIKE '%$keyword%'");
                                } else {
                                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                                }
                                $no = 1;
                                while ($ambil_data = mysqli_fetch_array($query)) {
                                    // Calculate fine
                                    $today = new DateTime();
                                    $dueDate = new DateTime($ambil_data['tanggal_jatuh_tempo']);
                                    $fine = 0;
                                    if ($today > $dueDate) {
                                        $interval = $today->diff($dueDate);
                                        $daysLate = $interval->days;
                                        $fine = $daysLate * 10000;
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $ambil_data['nisn']; ?></td>
                                        <td><?php echo $ambil_data['id_buku']; ?></td>
                                        <td><?php echo $ambil_data['tanggal_peminjaman']; ?></td>
                                        <td><?php echo $ambil_data['tanggal_jatuh_tempo']; ?></td>
                                        <td><?php echo $ambil_data['status_pinjam']; ?></td>
                                        <td><?php echo "Rp " . number_format($fine, 0, ',', '.'); ?></td>
                                        <td>
                                            <?php if ($ambil_data['status_pinjam'] == 'dipinjam') : ?>
                                                <a href="pengembalian.php?id=<?php echo $ambil_data['id_peminjaman']; ?>" class="btn btn-success">Kembalikan</a>
                                            <?php endif; ?>
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
