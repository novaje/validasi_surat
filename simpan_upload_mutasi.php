<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari upload mutasi

    $inp_nama              = $_POST['inp_nama'];

    $files = $_FILES;
    $inp_formulir          = $inp_nama."-".$files['inp_formulir']['name'];
    $lokasi_formulir       = $files['inp_formulir']['tmp_name'];
    move_uploaded_file($lokasi_formulir, "berkas_pindah_anggota/".$inp_formulir);

    $inp_pas_foto          = $inp_nama."-".$files['inp_pas_foto']['name'];
    $lokasi_foto           = $files['inp_pas_foto']['tmp_name'];
    move_uploaded_file($lokasi_foto,"berkas_pindah_anggota/".$inp_pas_foto);     

    $inp_ktp                = $inp_nama."-".$files['inp_ktp']['name'];
    $lokasi_ktp             = $files['inp_ktp']['tmp_name'];
    move_uploaded_file($lokasi_ktp, "berkas_pindah_anggota/".$inp_ktp);

    $inp_kta_deli_serdang   = $inp_nama."-".$files['inp_kta_deli_serdang']['name'];
    $lokasi_kta             = $files['$inp_kta_deli_serdang']['tmp_name'];
    move_uploaded_file($lokasi_kta, "berkas_pindah_anggota/".$inp_kta_deli_serdang);

    $inp_pusat              = $inp_nama."-".$files['inp_pusat']['name'];
    $lokasi_inp             = $files['$inp_pusat']['tmp_name'];
    move_uploaded_file($lokasi_inp, "berkas_pindah_anggota/".$inp_pusat);

    $inp_ijazah             = $inp_nama."-".$files['inp_ijazah']['name'];
    $lokasi_ijazah          = $files['$inp_ijazah']['tmp_name'];
    move_uploaded_file($lokasi_ijazah, "berkas_pindah_anggota/".$inp_ijazah);

    $inp_str                = $inp_nama."-".$files['inp_str']['name'];
    $lokasi_str             = $files['$inp_str']['tmp_name'];
    move_uploaded_file($lokasi_str, "berkas_pindah_anggota/".$inp_str);

            
//query insert data ke dalam database
$query = "INSERT INTO lampiran_mutasi (inp_nama,inp_formulir,inp_pas_foto,inp_ktp,inp_kta_deli_serdang,inp_pusat,inp_ijazah,inp_str) 
VALUES 
('$inp_nama','$inp_formulir','$inp_pas_foto','$inp_ktp','$inp_kta_deli_serdang','$inp_pusat','$inp_ijazah','$inp_str')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

    //redirect ke halaman index.php 
    $ambil_nama = mysqli_query($con, "SELECT * FROM lampiran_mutasi WHERE inp_nama='$inp_nama'");
    foreach ($ambil_nama as $data) {
        $id_mutasi = $data['id_mutasi'];
        header("location: form_mutasi.php?inp_nama=".$inp_nama."&id_mutasi=".$id_mutasi);
        
    }

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>