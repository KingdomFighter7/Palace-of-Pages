<?php
include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Tambah Data Siswa
                </div>
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <form action="simpan_siswa.php" method="POST">
                                    <div class="form-group mb-2">
                                        <label for="nisn">NISN</label>
                                        <input type="text" class="form-control" placeholder="NISN" name="nisn">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="nama_siswa">Nama Siswa</label>
                                        <input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir">
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                </form>
                            </div>
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
