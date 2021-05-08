<?php
require_once "../config/config.php";
require "../assets/libs/vendor/autoload.php";

// use Ramsey\Uuid\Uuid;
// use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if (isset($_POST['add'])) {

    // $uuid = Uuid::uuid4()->toString();
    $sku = trim(mysqli_real_escape_string($con, $_POST['sku']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $harga = mysqli_real_escape_string($con, $_POST['harga']);
    $harga = intval($harga);
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    mysqli_query($con, "INSERT INTO db_obat (id_obat, nama_obat, harga_obat, keterangan) VALUES ('$sku', '$nama', '$harga', '$ket')") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {

    $sku = trim(mysqli_real_escape_string($con, $_POST['sku']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $harga = mysqli_real_escape_string($con, $_POST['harga']);
    $harga = intval($harga);
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    mysqli_query($con, "UPDATE db_obat SET id_obat = '$sku', nama_obat = '$nama', harga_obat = '$harga', keterangan = '$ket' WHERE id_obat = '$sku'") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
