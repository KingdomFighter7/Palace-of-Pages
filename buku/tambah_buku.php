<?php
    include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;" >
            <div class="card">
                <div class="card-header">
                Tambah Data Buku
                </div>
                <div class="card-body">
                    <div class="row">
                        <div  class="col">
                            <form action="simpan_buku.php" method="POST">
                                <div class="form-group mb-2">
                                    <label for="">ID Buku</label>
                                    <input type="text" class="form-control" placeholder="ID Buku" name="id_buku">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">ISBN</label>
                                    <input type="text" class="form-control" placeholder="ISBN" name="isbn">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control" placeholder="Judul" name="judul">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">ID Penulis</label>
                                    <input type="text" class="form-control" placeholder="ID Penulis" name="id_penulis">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">ID Penerbit</label>
                                    <input type="text" class="form-control" placeholder="ID Penerbit" name="id_penerbit">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">ID Kategori</label>
                                    <input type="text" class="form-control" placeholder="ID Kategori" name="id_kategori">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Tahun Terbit</label>
                                    <input type="text" class="form-control" placeholder="Tahun Terbit" name="tahun_terbit">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Sinopsis</label>
                                    <textarea class="form-control" placeholder="Sinopsis" name="sinopsis"></textarea>
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

<?php
    include "../footer.html";
?>
