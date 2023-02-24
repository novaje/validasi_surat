<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari lampiran
$id_luarKota            = $_POST['id_luarKota'];
$inp_nama               = $_POST['inp_nama'];
$inp_tempat_lahir       = $_POST['inp_tempat_lahir'];
$inp_jk                 = $_POST['inp_jk'];
$inp_noReg              = $_POST['inp_noReg'];
$inp_npa                = $_POST['inp_npa'];
$inp_lulusan            = $_POST['inp_lulusan'];
$inp_no_ijazah          = $_POST['inp_no_ijazah'];
$inp_alamatRumah        = $_POST['inp_alamatRumah'];
$inp_tlp                = $_POST['inp_tlp'];
$inp_namaSarana         = $_POST['inp_namaSarana'];
$inp_alamatSarana       = $_POST['inp_alamatSarana'];
$inp_saranaKesehatan    = $_POST['inp_saranaKesehatan'];
$inp_alamatKesehatan    = $_POST['inp_alamatKesehatan'];
$inp_ajukan_permohonan  = $_POST['inp_ajukan_permohonan'];

            
//query insert data ke dalam database
$query = "INSERT INTO form_luarkota (id_luarKota,inp_nama,inp_tempat_lahir,inp_jk,inp_noReg,inp_npa,inp_lulusan,inp_no_ijazah,inp_alamatRumah,inp_tlp,inp_namaSarana,inp_alamatSarana,inp_saranaKesehatan,inp_alamatKesehatan,inp_ajukan_permohonan) 
VALUES 
('$id_luarKota','$inp_nama','$inp_tempat_lahir','$inp_jk','$inp_noReg','$inp_npa','$inp_lulusan','$inp_no_ijazah','$inp_alamatRumah','$inp_tlp','$inp_namaSarana','$inp_alamatSarana','$inp_saranaKesehatan','$inp_alamatKesehatan','$inp_ajukan_permohonan')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

    //redirect ke halaman index.php
    $ambil_id  = (mysqli_query($con,"SELECT * FROM form_luarkota WHERE inp_nama='$inp_nama'"));
    while($data=mysqli_fetch_array($ambil_id)){
    $id_luarKota = $data['id_luarKota'];
    header("location: form_pernyataan_luarKota.php?inp_nama=".$inp_nama."&inp_nama=".$inp_nama);
    }
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>