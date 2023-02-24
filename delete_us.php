<?php
    //ambil id
    $id_admin= $_GET['id_admin'];

    //variabel koneksi
    $host   = 'localhost';
    $user   = 'root';
    $pass   = '';
    $dbname = 'web_idi';

    //koneksi
    $con = mysqli_connect($host,$user,$pass,$dbname);

    //cek db
    if ($con->connect_error) {
        die("Connection Failed: " . $con->connect_error);
    }

    //query
    $query  = "DELETE FROM admin_idi WHERE id_admin='$id_admin'";
    //hasil
    $hasil  = $con->query($query);

    echo    "<p><b> Data Berhasil dihapus</b> </p>";
    echo    "<meta http-equiv=refresh content=2;URL='data_user.php'>";
?>