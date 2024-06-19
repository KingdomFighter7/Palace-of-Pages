<?php
include "../header.php";

$id_buku = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id_buku'");
$data = mysqli_fetch_array($query);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit();
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Edit Data Buku
                </div>
                <div class="card-body">
                    <form action="update_buku.php" method="POST">
                        <div class="form-group mb-2">
                            <label for="">ISBN</label>
                            <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
                            <input type="text" class="form-control" placeholder="ISBN" name="isbn" value="<?php echo $data['isbn']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Judul</label>
                            <input type="text" class="form-control" placeholder="Judul" name="judul" value="<?php echo $data['judul']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ID Penulis</label>
                            <input type="text" class="form-control" placeholder="ID Penulis" name="id_penulis" value="<?php echo $data['id_penulis']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ID Penerbit</label>
                            <input type="text" class="form-control" placeholder="ID Penerbit" name="id_penerbit" value="<?php echo $data['id_penerbit']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">ID Kategori</label>
                            <input type="text" class="form-control" placeholder="ID Kategori" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Tahun Terbit</label>
                            <input type="text" class="form-control" placeholder="Tahun Terbit" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Sinopsis</label>
                            <textarea class="form-control" placeholder="Sinopsis" name="sinopsis"><?php echo $data['sinopsis']; ?></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "../footer.html";
?>
