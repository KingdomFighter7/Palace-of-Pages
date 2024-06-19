<?php
include "../header.php";

$id_penulis = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM penulis WHERE id_penulis = '$id_penulis'");
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
                    Edit Data Penulis
                </div>
                <div class="card-body">
                    <form action="update_penulis.php" method="POST">
                        <div class="form-group mb-2">
                            <label for="">Nama Penulis</label>
                            <input type="hidden" name="id_penulis" value="<?php echo $data['id_penulis']; ?>">
                            <input type="text" class="form-control" placeholder="Nama Penulis" name="nama_penulis" value="<?php echo $data['nama_penulis']; ?>">
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
