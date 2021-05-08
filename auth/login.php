<?php
require_once "../config/config.php";

// untuk membatasi akses jika sudah login atau belum
if (isset($_SESSION['user'])) {
    echo "<script> window.location='" . base_url('dashboard') . "';</script>";
} else {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

        <title>Login - Rumah Sakit Hewan</title>
    </head>

    <body>

        <div id="wrapper">
            <div class="container">
                <div id="formlogin" style="margin-top: 200px; ">

                    <?php
                    if (isset($_POST['login'])) {
                        $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                        // pakai sha1 karena menggunakan enkripsi sha1 di sql
                        $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                        $sql_login = mysqli_query($con, "SELECT * FROM db_admin WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));
                        $logindokter = mysqli_query($con, "SELECT * FROM db_dokter WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));

                        // checking loginnya 
                        if (mysqli_num_rows($sql_login) > 0) {
                            $_SESSION['user'] = $user;
                            echo "<script>window.location='" . base_url() . "';</script>";
                        } else if (mysqli_num_rows($logindokter) > 0) {
                            $_SESSION['dokter'] = $user;
                            echo "<script>window.location='" . base_url() . "';</script>";
                        } else { ?>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Login gagal!</strong> Username / password salah
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <form action="" method="post" class="navbar-form">
                        <div class="input-group d-flex flex-row">

                            <div class="mr-3">
                                <input type="text" name="user" class="form-control" placeholder="username" required autofocus>

                            </div>
                            <div class="mr-3">
                                <input type="text" name="pass" class="form-control" placeholder="password" required>

                            </div>

                            <div class="">
                                <input type="submit" name="login" class="btn btn-primary" value="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->

        <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    </body>

    </html>

<?php
}
?>