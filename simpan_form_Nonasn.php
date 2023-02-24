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
$inp_nama            = $_POST['inp_nama'];
$id_lampiran_sip     = $_POST['id_lampiran_sip'];
$inp_tempat_lahir    = $_POST['inp_tempat_lahir'];
$inp_no_regis        = $_POST['inp_no_regis'];
$inp_idi             = $_POST['inp_idi'];
$inp_str             = $_POST['inp_str'];
$inp_alamat          = $_POST['inp_alamat'];
$inp_tlp             = $_POST['inp_tlp'];
$inp_alumni          = $_POST['inp_alumni'];
$inp_ijazah          = $_POST['inp_ijazah'];
$sarana_kesehatan    = $_POST['sarana_kesehatan'];
$alamat              = $_POST['alamat'];
$sarana_kesehatan_2  = $_POST['sarana_kesehatan_2'];
$alamat_2            = $_POST['alamat_2'];
$sarana_kesehatan_3  = $_POST['sarana_kesehatan_3'];
$alamat_3            = $_POST['alamat_3'];

//query insert data ke dalam database
$query = "INSERT INTO form_nonasn_ (inp_nama,id_lampiran_sip,inp_tempat_lahir,inp_no_regis,inp_idi,inp_str,inp_alamat,inp_tlp,inp_alumni,inp_ijazah,sarana_kesehatan,alamat,sarana_kesehatan_2,alamat_2,sarana_kesehatan_3,alamat_3) 
VALUES 
('$inp_nama','$id_lampiran_sip','$inp_tempat_lahir','$inp_no_regis','$inp_idi','$inp_str','$inp_alamat','$inp_tlp','$inp_alumni','$inp_ijazah','$sarana_kesehatan','$alamat','$sarana_kesehatan_2','$alamat_2','$sarana_kesehatan_3','$alamat_3')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    
    echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Berhasil!</strong> Data Anda Berhasil Disimpan.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
    echo '<meta http-equiv="refresh" content="1;url=index.php">';
}


?>
</body>
</html>