<?php
include "../header.php";

function getDataBuku($koneksi, $keyword = null) {
    try {
        if ($keyword) {
            $stmt = $koneksi->prepare("SELECT buku.*, penulis.nama_penulis, penerbit.nama_penerbit, kategori.nama_kategori FROM buku
                                       JOIN penulis ON buku.id_penulis = penulis.id_penulis
                                       JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
                                       JOIN kategori ON buku.id_kategori = kategori.id_kategori
                                       WHERE buku.judul LIKE ?");
            if (!$stmt) {
                throw new Exception("Prepare statement error: " . $koneksi->error);
            }
            $keyword = "%$keyword%";
            $stmt->bind_param("s", $keyword);
        } else {
            $stmt = $koneksi->prepare("SELECT buku.*, penulis.nama_penulis, penerbit.nama_penerbit, kategori.nama_kategori FROM buku
                                       JOIN penulis ON buku.id_penulis = penulis.id_penulis
                                       JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
                                       JOIN kategori ON buku.id_kategori = kategori.id_kategori");
            if (!$stmt) {
                throw new Exception("Prepare statement error: " . $koneksi->error);
            }
        }
        
        $stmt->execute();
        if ($stmt->error) {
            throw new Exception("Execute error: " . $stmt->error);
        }

        return $stmt->get_result();
    } catch (Exception $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
        return false; // Atau sesuaikan dengan penanganan kesalahan yang diperlukan
    }
}

$keyword = isset($_GET['cari']) ? $_GET['keyword'] : null;
$result = getDataBuku($koneksi, $keyword);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Data Buku
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="tambah_buku.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="col">
                            <form class="d-flex justify-content-end" method="GET">
                                <input type="text" class="form-control" name="keyword" placeholder="Cari buku...">
                                <input type="submit" class="btn btn-primary ms-2" name="cari" value="Cari">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Buku</th>
                                        <th>ISBN</th>
                                        <th>Judul</th>
                                        <th>Nama Penulis</th>
                                        <th>Nama Penerbit</th>
                                        <th>Nama Kategori</th>
                                        <th>Tahun Terbit</th>
                                        <th>Sinopsis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    if ($result) {
                                        while ($ambil_data = $result->fetch_assoc()) {
                                            $idBuku = htmlspecialchars($ambil_data['id_buku']);
                                            $sinopsisId = "sinopsis-".$idBuku;
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $idBuku; ?></td>
                                        <td><?php echo htmlspecialchars($ambil_data['isbn']); ?></td>
                                        <td><?php echo htmlspecialchars($ambil_data['judul']); ?></td>
                                        <td><?php echo htmlspecialchars($ambil_data['nama_penulis']); ?></td>
                                        <td><?php echo htmlspecialchars($ambil_data['nama_penerbit']); ?></td>
                                        <td><?php echo htmlspecialchars($ambil_data['nama_kategori']); ?></td>
                                        <td><?php echo htmlspecialchars($ambil_data['tahun_terbit']); ?></td>
                                        <td>
                                            <a class="sinopsis_more" data-bs-toggle="collapse" href="#<?php echo $sinopsisId; ?>" role="button" aria-expanded="false" aria-controls="<?php echo $sinopsisId; ?>">
                                                Lihat Sinopsis
                                            </a>
                                            <div class="collapse mt-2" id="<?php echo $sinopsisId; ?>">
                                                <div class="card card-body">
                                                    <?php echo nl2br(htmlspecialchars($ambil_data['sinopsis'])); ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="edit_buku.php?id=<?php echo $idBuku; ?>" class="btn btn-warning">Edit</a>
                                            <a href="hapus_buku.php?id=<?php echo $idBuku; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='10'>Data tidak ditemukan.</td></tr>";
                                    }
                                    ?>
                                </tbody>
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