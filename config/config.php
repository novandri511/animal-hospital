<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

$con = mysqli_connect('localhost', 'root', '', 'rumah_sakit_hewan');
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
}

// kebutuhan base_url adalah jika ingin diupload ke hosting tidak ada (../) di setiap halaman
function base_url($url = null)
{
    $base_url = "http://localhost/animal-hospital";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}
