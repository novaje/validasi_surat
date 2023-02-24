<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari lampiran
$id_rekomSekolah    = $_POST['id_rekomSekolah'];
$inp_nama           = $_POST['inp_nama'];
$inp_tempat_lahir   = $_POST['inp_tempat_lahir'];
$inp_jk             = $_POST['inp_jk'];
$inp_no_reg         = $_POST['inp_no_reg'];
$inp_npa            = $_POST['inp_npa'];
$inp_lulusan        = $_POST['inp_lulusan'];
$inp_noIjazah       = $_POST['inp_noIjazah'];
$inp_alamat         = $_POST['inp_alamat'];
$inp_tlp            = $_POST['inp_tlp'];
$inp_permohonan     = $_POST['inp_permohonan'];
$inp_fakultas       = $_POST['inp_fakultas'];

            
//query insert data ke dalam database
$query = "INSERT INTO form_rekomsekolah (id_rekomSekolah,inp_nama,inp_tempat_lahir,inp_jk,inp_no_reg,inp_npa,inp_lulusan,inp_noIjazah,inp_alamat,inp_tlp,inp_permohonan,inp_fakultas) 
VALUES 
('$id_rekomSekolah','$inp_nama','$inp_tempat_lahir','$inp_jk','$inp_no_reg','$inp_npa','$inp_lulusan','$inp_noIjazah','$inp_alamat','$inp_tlp','$inp_permohonan','$inp_fakultas')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>