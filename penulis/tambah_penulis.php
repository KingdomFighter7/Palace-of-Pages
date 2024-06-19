<?php
    include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;" >
            <div class="card">
                <div class="card-header">
                Tambah Data Penulis
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="simpan_penulis.php" method="POST">
                                <div class="form-group mb-2">
                                    <label for="">Nama Penulis</label>
                                    <input type="text" class="form-control" placeholder="Nama Penulis" name="nama_penulis">
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
