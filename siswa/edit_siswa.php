<?php
include "../header.php";

$nisn = $_GET['nisn'];
$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn = '$nisn'");
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
                    Edit Data Siswa
                </div>
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <form action="update_siswa.php" method="POST">
                                    <div class="form-group mb-2">
                                        <label for="nisn">NISN</label>
                                        <input type="text" class="form-control" name="nisn" value="<?php echo $data['nisn']; ?>">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="nama_siswa">Nama Siswa</label>
                                        <input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="laki-laki" <?php echo ($data['jenis_kelamin'] == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                            <option value="perempuan" <?php echo ($data['jenis_kelamin'] == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </form>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "../footer.html";
?>
