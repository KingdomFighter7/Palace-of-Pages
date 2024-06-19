<?php
include "../header.php";

$id_kategori = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori = '$id_kategori'");
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
                    Edit Data Kategori
                </div>
                <div class="card-body">
                    <form action="update_kategori.php" method="POST">
                        <div class="form-group mb-2">
                            <label for="">Nama Kategori</label>
                            <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
                            <input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>">
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