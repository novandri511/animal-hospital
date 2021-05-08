<?php include_once('header.php'); ?>

<div class="col-lg-12">
    <h1>Ini Dashboard Dokter</h1>
    <p>Selamat datang <?= $_SESSION['dokter']; ?> di sistem informasi rumah sakit hewan</p>

    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
</div>

<?php include_once('footer.php'); ?>