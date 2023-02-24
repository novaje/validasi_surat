<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Alerts with Icons</title>
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
            
            $inp_nama           = $_POST['inp_nama'];
            $inp_ttl            = $_POST['inp_ttl'];
            $inp_npa            = $_POST['inp_npa'];
            $inp_no_reg         = $_POST['inp_no_reg'];
            $inp_str            = $_POST['inp_str'];
            $inp_no_tlp         = $_POST['inp_no_tlp'];
            $inp_alamat         = $_POST['inp_alamat'];
            $tgl_surat          = $_POST['tgl_surat'];
            $inp_surat1         = $_POST['inp_surat1'];
            $inp_surat2         = $_POST['inp_surat2'];
            $inp_tahun          = $_POST['inp_tahun'];

//query insert data ke dalam database
$query = "INSERT INTO surat_ket_etika (inp_nama,inp_ttl,inp_npa,inp_no_reg,inp_str,inp_no_tlp,inp_alamat,tgl_surat,inp_surat1,inp_surat2,inp_tahun) 
VALUES 
('$inp_nama','$inp_ttl','$inp_npa','$inp_no_reg','$inp_str','$inp_no_tlp','$inp_alamat','$tgl_surat','$inp_surat1','$inp_surat2','$inp_tahun')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak

if($con->query($query)) {
    
    echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Data Anda Disimpan!</strong> Silahkan Hubungi Admin Untuk Langkah Permohonan Selanjutnya.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
    echo '<meta http-equiv="refresh" content="4;url=index.php">';
}


?>

</body>
</html>