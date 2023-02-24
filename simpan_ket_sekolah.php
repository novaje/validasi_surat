<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SAVE</title>
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
            
            $inp_nama               = $_POST['inp_nama'];
            $inp_ttl                = $_POST['inp_ttl'];
            $no_reg                 = $_POST['no_reg'];
            $inp_lulusan            = $_POST['inp_lulusan'];
            $inp_ijazah             = $_POST['inp_ijazah'];
            $inp_str                = $_POST['inp_str'];
            $inp_jabatan            = $_POST['inp_jabatan'];
            $inp_alamat             = $_POST['inp_alamat'];
            $inp_terhitung_tgl      = $_POST['inp_terhitung_tgl'];
            $inp_pendidikan_dokter  = $_POST['inp_pendidikan_dokter'];
            $inp_fakultas           = $_POST['inp_fakultas'];
            $inp_surat1             = $_POST['inp_surat1'];
            $inp_surat2             = $_POST['inp_surat2'];
            $inp_bulan              = $_POST['inp_bulan'];
            $inp_tahun              = $_POST['inp_tahun'];
            $inp_keluar_surat       = $_POST['inp_keluar_surat'];
            $inp_ketua              = $_POST['inp_ketua'];
            $inp_npa_ketua          = $_POST['inp_npa_ketua'];

//query insert data ke dalam database
$query = "INSERT INTO surat_ket_sekolah (inp_nama,inp_ttl,no_reg,inp_lulusan,inp_ijazah,inp_str,inp_jabatan,inp_alamat,inp_terhitung_tgl,inp_pendidikan_dokter,inp_fakultas,inp_surat1,inp_surat2,inp_bulan,inp_tahun,inp_keluar_surat,inp_ketua,inp_npa_ketua) 
VALUES 
('$inp_nama','$inp_ttl','$no_reg','$inp_lulusan','$inp_ijazah','$inp_str','$inp_jabatan','$inp_alamat','$inp_terhitung_tgl','$inp_pendidikan_dokter','$inp_fakultas','$inp_surat1','$inp_surat2','$inp_bulan','$inp_tahun','$inp_keluar_surat','$inp_ketua','$inp_npa_ketua')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak

if($con->query($query)) {
    
    echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Berhasil!</strong> Data Anda Disimpan.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
    echo '<meta http-equiv="refresh" content="2;url=index.php">';
}


?>

</body>
</html>