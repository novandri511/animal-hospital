<?php
include_once('../layout/header.php');
?>

<h4>
    <small>Edit Data Obat</small>


</h4>
<div class="my-5">
    <a href="data.php" class="btn btn-warning btn-xs"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>

</div>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <?php
        $id = @$_GET['id'];
        $sql_obat = mysqli_query($con, "SELECT * FROM db_obat WHERE id_obat = '$id'") or die(mysqli_error($con));
        $data =  mysqli_fetch_array($sql_obat);
        ?>

        <form action="proses.php" method="post">
            <div class="form-group">
                <label for="nama">Nama Obat</label>
                <input type="text" name="nama" id="nama" value="<?= $data['nama_obat'] ?>" class="form-control" required autofocus>
            </div>

            <div class="form-group">
                <label for="nama">SKU Obat</label>
                <input type="text" name="sku" id="sku" value="<?= $data['id_obat'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga Obat</label>
                <input type="number" name="harga" id="harga" value="<?= $data['harga_obat'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ket">Keterangan</label>
                <textarea name="ket" id="ket" class="form-control" required><?= $data['keterangan'] ?></textarea>
            </div>
            <div class="form-group pull-right">
                <input type="submit" name="edit" value="Simpan" class="btn btn-success">
            </div>
        </form>
    </div>
</div>

<?php
include_once('../layout/footer.php');
?>