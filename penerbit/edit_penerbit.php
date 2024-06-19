<?php
include "../header.php";

$id_penerbit = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM penerbit WHERE id_penerbit = '$id_penerbit'");
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
                    Edit Data Penerbit
                </div>
                <div class="card-body">
                    <form action="update_penerbit.php" method="POST">
                        <div class="form-group mb-2">
                            <label for="">Nama Penerbit</label>
                            <input type="hidden" name="id_penerbit" value="<?php echo $data['id_penerbit']; ?>">
                            <input type="text" class="form-control" placeholder="Nama Penerbit" name="nama_penerbit" value="<?php echo $data['nama_penerbit']; ?>">
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
