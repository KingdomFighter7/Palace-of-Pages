<?php
    include "../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;" >
            <div class="card">
                <div class="card-header">
                Tambah Data Penerbit
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="simpan_penerbit.php" method="POST">
                                <div class="form-group mb-2">
                                    <label for="">Nama Penerbit</label>
                                    <input type="text" class="form-control" placeholder="Nama Penerbit" name="nama_penerbit">
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
