<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Save</title>
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
    $inp_nama             = $_POST['inp_nama'];
    $id_integritas        = $_POST['id_integritas'];
    $dibuat_oleh          = $_POST['dibuat_oleh'];

    $files = $_FILES;
    $inp_form_permohonan  = $inp_nama."-".$files['inp_form_permohonan']['name'];
    $lokasi_permohonan    = $files['inp_form_permohonan']['tmp_name'];
    move_uploaded_file($lokasi_permohonan, "berkas_sekolah/".$inp_form_permohonan);
    
    $inp_pasFoto          = $inp_nama."-".$files['inp_pasFoto']['name'];
    $lokasifoto           = $files['inp_pasFoto']['tmp_name'];                       
    move_uploaded_file($lokasifoto, "berkas_sekolah/".$inp_pasFoto);
    
    $inp_ktp              = $inp_nama."-".$files['inp_ktp']['name'];
    $lokasi_ktp           = $files['inp_ktp']['tmp_name'];
    move_uploaded_file($lokasi_ktp, "berkas_sekolah/".$inp_ktp);
    
    $inp_kta_deliSerdang  = $inp_nama."-".$files['inp_kta_deliSerdang']['name'];
    $lokasi_kta           = $files['inp_kta_deliSerdang']['tmp_name'];
    move_uploaded_file($lokasi_kta, "berkas_sekolah/".$inp_kta_deliSerdang);
    
    $inp_kta_pusat        = $inp_nama."-".$files['inp_kta_pusat']['name'];
    $lokasi_kta           = $files['inp_kta_pusat']['tmp_name'];
    move_uploaded_file($lokasi_kta, "berkas_sekolah/".$inp_kta_pusat);
    
    $inp_ijazah           = $inp_nama."-".$files['inp_ijazah']['name'];
    $lokasi_ijazah        = $files['inp_ijazah']['tmp_name'];
    move_uploaded_file($lokasi_ijazah, "berkas_sekolah/".$inp_ijazah);
    
    $inp_str              = $inp_nama."-".$files['inp_str']['name'];
    $lokasi_str           = $files['inp_str']['tmp_name'];
    move_uploaded_file($lokasi_str, "berkas_sekolah/".$inp_str);


//query insert data ke dalam database
$query = "INSERT INTO lampiran_rekomsekolah (inp_nama,inp_form_permohonan,inp_pasFoto,inp_ktp,inp_kta_deliSerdang,inp_kta_pusat,inp_ijazah,inp_str,id_integritas,dibuat_oleh) 
VALUES 
('$inp_nama','$inp_form_permohonan','$inp_pasFoto','$inp_ktp','$inp_kta_deliSerdang','$inp_kta_pusat','$inp_ijazah','$inp_str','$id_integritas','$dibuat_oleh')";


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