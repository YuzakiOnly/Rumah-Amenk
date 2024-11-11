<?php
    $rootDir = $_SERVER['DOCUMENT_ROOT'].'/Katalog_Makanan_RumahAmenk/';
    $server = "localhost"; 
    $user = "root";
    $pass = '';
    $db  = "katalog_rumah_amenk";

    $koneksi  = mysqli_connect($server, $user, $pass, $db);

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL" . mysqli_connect_error();
        exit();
    }
?>