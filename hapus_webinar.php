<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hapus Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    /* Custom style to set icon size */
.alert i[class^="bi-"]{
  font-size: 1.5em;
  line-height: 1;
}
</style>
</head>
<body>
<?php
    //ambil id
    $delete_id= $_GET['id_webinar'];

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
    $query  = "DELETE FROM webinar WHERE id_webinar='$delete_id'";
    //hasil
    $hasil  = $con->query($query);

    echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
             <i class="bi-check-circle-fill"></i>
             <strong class="mx-2">Berhasil!</strong> Data Berhasil Dihapus.
             <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
         </div>';
         echo '<meta http-equiv="refresh" content="2;url=webinar.php">';
?>