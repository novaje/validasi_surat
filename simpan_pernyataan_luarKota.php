<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari lampiran
$id_luarKota        = $_POST['id_luarKota'];
$inp_nama           = $_POST['inp_nama'];
$inp_tempat_lahir   = $_POST['inp_tempat_lahir'];
$inp_npa            = $_POST['inp_npa'];
$inp_no_register    = $_POST['inp_no_register'];
$inp_str            = $_POST['inp_str'];
$inp_alamat         = $_POST['inp_alamat'];
$inp_tlp            = $_POST['inp_tlp'];
$inp_alumni         = $_POST['inp_alumni'];
$inp_no_ijazah      = $_POST['inp_no_ijazah'];
$inp_sarana         = $_POST['inp_sarana'];
$inp_alamatSarana   = $_POST['inp_alamatSarana'];

           
//query insert data ke dalam database
$query = "INSERT INTO form_pernyataan_luarkota (id_luarKota,inp_nama,inp_tempat_lahir,inp_npa,inp_no_register,inp_str,inp_alamat,inp_tlp,inp_alumni,inp_no_ijazah,inp_sarana,inp_alamatSarana) 
VALUES 
('$id_luarKota','$inp_nama','$inp_tempat_lahir','$inp_npa','$inp_no_register','$inp_str','$inp_alamat','$inp_tlp','$inp_alumni','$inp_no_ijazah','$inp_sarana','$inp_alamatSarana')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

    //redirect ke halaman index.php
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>