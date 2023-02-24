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
$id_lampiran_sip       = $_POST['id_lampiran_sip'];
$inp_tempat_lahir      = $_POST['inp_tempat_lahir'];
$inp_jk                = $_POST['inp_jk'];
$inp_dokter            = $_POST['inp_dokter'];
$inp_lulusan           = $_POST['inp_lulusan'];
$inp_no_str            = $_POST['inp_no_str'];
$inp_tempatKerja       = $_POST['inp_tempatKerja'];
$inp_alamat            = $_POST['inp_alamat'];
$inp_tlp               = $_POST['inp_tlp'];
$inp_anggota           = $_POST['inp_anggota'];
$inp_npa               = $_POST['inp_npa'];
$sarana_kesehatan      = $_POST['sarana_kesehatan'];
$alamat                = $_POST['alamat'];
$tlp                   = $_POST['tlp'];
$kecamatan             = $_POST['kecamatan'];
$kabupaten             = $_POST['kabupaten'];
$sarana_kesehatan_2    = $_POST['sarana_kesehatan_2'];
$alamat_2              = $_POST['alamat_2'];
$tlp_2                 = $_POST['tlp_2'];
$kecamatan_2           = $_POST['kecamatan_2'];
$kabupaten_2           = $_POST['kabupaten_2'];

            
//query insert data ke dalam database
$query = "INSERT INTO form_rekom_sip 
(inp_nama,id_lampiran_sip,inp_tempat_lahir,inp_jk,inp_dokter,inp_lulusan,inp_no_str,inp_tempatKerja,inp_alamat,inp_tlp,inp_anggota,inp_npa,sarana_kesehatan,alamat,tlp,kecamatan,kabupaten,sarana_kesehatan_2,alamat_2,tlp_2,kecamatan_2,kabupaten_2) 
VALUES
('$inp_nama','$id_lampiran_sip','$inp_tempat_lahir','$inp_jk','$inp_dokter','$inp_lulusan','$inp_no_str','$inp_tempatKerja','$inp_alamat','$inp_tlp','$inp_anggota','$inp_npa','$sarana_kesehatan','$alamat','$tlp','$kecamatan','$kabupaten','$sarana_kesehatan_2','$alamat_2','$tlp_2','$kecamatan_2','$kabupaten_2')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

  //redirect ke halaman index.php
   $ambil_id  = (mysqli_query($con,"SELECT * FROM form_rekom_sip WHERE inp_nama='$inp_nama'"));
  while($data=mysqli_fetch_array($ambil_id)){
  $id_lampiran_sip = $data['id_lampiran_sip'];
  header("location: form_pernyataan_Nonasn.php?id=".$id_lampiran_sip."&inp_nama=".$inp_nama);
}

} else {

  //pesan error gagal insert data
  echo "Data Gagal Disimpan!";

}

?>
</body>
</html>
