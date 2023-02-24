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
    $inp_nama               = $_POST['inp_nama'];
    $id_integritas          = $_POST['id_integritas'];

    $files = $_FILES;
    $surat_rekomendasi     = $inp_nama."-".$files['surat_rekomendasi']['name'];
    $lokasi_rekomendasi    = $files['surat_rekomendasi']['tmp_name'];
    move_uploaded_file($lokasi_rekomendasi, "berkas_sip/".$surat_rekomendasi);

    $surat_tempat_praktik  = $inp_nama."-".$files['surat_tempat_praktik']['name'];
    $lokasi_praktik        = $files['surat_tempat_praktik']['tmp_name'];
    move_uploaded_file($lokasi_praktik, "berkas_sip/".$surat_tempat_praktik);

    $pas_foto              = $inp_nama."-".$files['pas_foto']['name'];
    $lokasi_pasFoto        = $files['pas_foto']['tmp_name'];
    move_uploaded_file($lokasi_pasFoto, "berkas_sip/".$pas_foto);

    $fc_ktp                = $inp_nama."-".$files['fc_ktp']['name'];
    $lokasi_ktp            = $files['fc_ktp']['tmp_name'];
    move_uploaded_file($lokasi_ktp, "berkas_sip/".$fc_ktp);

    $fc_kta                = $inp_nama."-".$files['fc_kta']['name'];
    $lokasi_kta            = $files['fc_kta']['tmp_name'];
    move_uploaded_file($lokasi_kta, "berkas_sip/".$fc_kta);

    $fc_ijazah             = $inp_nama."-".$files['fc_ijazah']['name'];
    $lokasi_ijazah         = $files['fc_ijazah']['tmp_name'];
    move_uploaded_file($lokasi_ijazah, "berkas_sip/".$fc_ijazah);

    $fc_pencabutan_str     = $inp_nama."-".$files['fc_pencabutan_str']['name'];
    $lokasi_str            = $files['fc_pencabutan_str']['tmp_name'];
    move_uploaded_file($lokasi_str, "berkas_sip/".$fc_pencabutan_str);

    $keterangan_tempatPraktik = $inp_nama."-".$files['keterangan_tempatPraktik']['name'];
    $lokasi_ket               = $files['keterangan_tempatPraktik']['tmp_name'];
    move_uploaded_file($lokasi_ket, "berkas_sip/".$keterangan_tempatPraktik);

    $biaya_administrasi    = $inp_nama."-".$files['biaya_administrasi']['name'];
    $lokasi_biaya          = $files['biaya_administrasi']['tmp_name'];
    move_uploaded_file($lokasi_biaya, "berkas_sip/".$biaya_administrasi);


//query insert data ke dalam database
$query = "INSERT INTO lampiran_sip (id_integritas,inp_nama,surat_rekomendasi,surat_tempat_praktik,pas_foto,fc_ktp,fc_kta,fc_ijazah,fc_pencabutan_str,keterangan_tempatPraktik,biaya_administrasi) 
VALUES
('$id_integritas','$inp_nama','$surat_rekomendasi','$surat_tempat_praktik','$pas_foto','$fc_ktp','$fc_kta','$fc_ijazah','$fc_pencabutan_str','$keterangan_tempatPraktik','$biaya_administrasi')";

if($con->query($query)) {
    
    echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Berhasil!</strong> Data Anda Berhasil Disimpan.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
    echo '<meta http-equiv="refresh" content="2;url=index.php">';
}


?>

</body>
</html>