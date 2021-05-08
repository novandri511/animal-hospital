<?php
require_once "config/config.php";

// untuk membatasi akses jika sudah login atau belum
if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url('dashboard') . "';</script>";
} elseif (isset($_SESSION['dokter'])) {
    echo "<script>window.location='" . base_url('dashboardDokter') . "';</script>";
} else {
    echo "<script>window.location='" . base_url('auth/login.php') . "';</script>";
}
