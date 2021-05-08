<?php
include_once('../header.php');
?>

<h4>
    <small>Data Obat</small>


</h4>
<div class="my-5">
    <a href="data.php" class="btn btn-warning btn-xs"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>

</div>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form action="proses.php" method="post">
            <div class="form-group">
                <label for="nama">Nama Obat</label>
                <input type="text" name="nama" id="nama" class="form-control" required autofocus>
            </div>

            <div class="form-group">
                <label for="nama">SKU Obat</label>
                <input type="text" name="sku" id="sku" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga Obat</label>
                <input type="number" name="harga" id="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ket">Keterangan</label>
                <textarea name="ket" id="ket" class="form-control" required></textarea>
            </div>
            <div class="form-group pull-right">
                <input type="submit" name="add" value="Simpan" class="btn btn-success">
            </div>
        </form>
    </div>
</div>

<?php
include_once('../footer.php');
?>