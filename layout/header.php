<?php
require_once "../config/config.php";
require "../assets/libs/vendor/autoload.php";


if (!isset($_SESSION['user'])) {
    echo "<script> window.location='" . base_url('auth/login.php') . "';</script>";
} ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <!-- manual css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/simple-sidebar.css') ?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Selamat datang di Rumah Sakit Hewan</title>
</head>

<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <span class="text-primary"> <b>Rumah Sakit Hewan</b> </span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard'); ?>">Dashboard</a>
                </li>
                <li>
                    <a href="#">Data Dokter</a>
                </li>
                <li>
                    <a href="#">Data Paramedis</a>
                </li>
                <li>
                    <a href="#">Data Grooming</a>
                </li>
                <li>
                    <a href="#">Data Pet Hotel</a>
                </li>
                <li>
                    <a href="#">Data Pet Shop</a>
                </li>
                <li>
                    <a href="#">Data Rawat Inap</a>
                </li>
                <li>
                    <a href="<?= base_url('obat/data.php') ?>">Data Obat</a>
                </li>
                <li>
                    <a href="#">Data Hewan</a>
                </li>

                <li>
                    <a href="<?= base_url('auth/logout.php'); ?>"> <span class="text-danger">Logout</span> </a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">

                <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
                <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>