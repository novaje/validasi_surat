<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FORMULIR</title>
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

//include koneksi database
include('koneksi/connection.php');

//get data dari lampiran
            
            $inp_nama              = $_POST['inp_nama'];
            $inp_ttl               = $_POST['inp_ttl'];
            $inp_alamat            = $_POST['inp_alamat'];
            $inp_noIjazah          = $_POST['inp_noIjazah'];
            $inp_no_str            = $_POST['inp_no_str'];
            $inp_instansi          = $_POST['inp_instansi'];
            $inp_no_npa            = $_POST['inp_no_npa'];
            $inp_no_regis          = $_POST['inp_no_regis'];
            $ketua_umum            = $_POST['ketua_umum'];
            $inp_npa_ketua         = $_POST['inp_npa_ketua'];

//query insert data ke dalam database
$query = "INSERT INTO surat_mutasi (inp_nama,inp_ttl,inp_alamat,inp_noIjazah,inp_no_str,inp_instansi,inp_no_npa,inp_no_regis,ketua_umum,inp_npa_ketua) 
VALUES 
('$inp_nama','$inp_ttl','$inp_alamat','$inp_noIjazah','$inp_no_str','$inp_instansi','$inp_no_npa','$inp_no_regis','$ketua_umum','$inp_npa_ketua')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    
    echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Berhasil!</strong> Data Anda Berhasil Disimpan.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
    echo '<meta http-equiv="refresh" content="3;url=index.php">';
}


?>

</body>
</html>