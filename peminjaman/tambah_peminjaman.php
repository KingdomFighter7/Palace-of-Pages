<?php
include "../header.php";

$siswaQuery = mysqli_query($koneksi, "SELECT nisn, nama_siswa FROM siswa");
$bukuQuery = mysqli_query($koneksi, "SELECT id_buku, judul FROM buku");
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Tambah Peminjaman
                </div>
                <div class="card-body">
                    <form action="simpan_peminjaman.php" method="POST">
                        <div class="form-group mb-2">
                            <label for="nisn">NISN Siswa</label>
                            <select name="nisn" class="form-control">
                                <?php while($siswa = mysqli_fetch_array($siswaQuery)) { ?>
                                    <option value="<?php echo $siswa['nisn']; ?>"><?php echo $siswa['nama_siswa']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="id_buku">Judul Buku</label>
                            <select name="id_buku" class="form-control">
                                <?php while($buku = mysqli_fetch_array($bukuQuery)) { ?>
                                    <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" name="tanggal_peminjaman" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tanggal_jatuh_tempo">Tanggal Jatuh Tempo</label>
                            <input type="date" class="form-control" name="tanggal_jatuh_tempo" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "../footer.html";
?>