<?php
require_once "../config/config.php";
unset($_SESSION['user']);
unset($_SESSION['dokter']);
echo "<script> window.location='" . base_url('auth/login.php') . "'; </script>";
