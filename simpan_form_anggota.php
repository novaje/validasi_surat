<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari form anggota baru
            $id_integritas          = $_POST['id_integritas '];
            $inp_nama               = $_POST['inp_nama'];
            $inp_warga_negara       = $_POST['inp_warga_negara'];
            $inp_agama              = $_POST['inp_agama'];
            $inp_tempat_lahir       = $_POST['inp_tempat_lahir'];
            $inp_alamat             = $_POST['inp_alamat'];
            $inp_alamat_praktek     = $_POST['inp_alamat_praktek'];
            $inp_jabatan            = $_POST['inp_jabatan'];
            $inp_guru_besar         = $_POST['inp_guru_besar'];
            $inp_gelar              = $_POST['inp_gelar'];
            $inp_ijazah_du          = $_POST['inp_ijazah_du'];
            $tgl_du                 = $_POST['tgl_du'];
            $inp_ijazah_s2          = $_POST['inp_ijazah_s2'];
            $tgl_sp_s2              = $_POST['tgl_sp_s2'];
            $inp_ijazah_dokter      = $_POST['inp_ijazah_dokter'];
            $tgl_dokter             = $_POST['tgl_dokter'];
            $inp_suami_istri        = $_POST['inp_suami_istri'];
            $inp_tahun_mutasi       = $_POST['inp_tahun_mutasi'];
            $inp_npa                = $_POST['inp_npa'];
            $inp_kta                = $_POST['inp_kta'];
            $inp_jk                 = $_POST['inp_jk'];
            $inp_hp                 = $_POST['inp_hp'];
            $email                  = $_POST['email'];
            $inp_spesialis          = $_POST['inp_spesialis'];
            $inp_konsultan          = $_POST['inp_konsultan'];
            $inp_mutasi             = $_POST['inp_mutasi'];
            $inp_alamat_kantor      = $_POST['inp_alamat_kantor'];

            $files            = $_FILES;
            $inp_foto         = $inp_nama."-".$files['inp_foto']['name'];
            $lokasi_inp_foto  = $files['inp_foto']['tmp_name'];
            move_uploaded_file($lokasi_inp_foto, "images/".$inp_foto);

//query insert data ke dalam database
$query = "INSERT INTO form_anggota_baru (id_integritas,inp_nama,inp_warga_negara,inp_agama,inp_tempat_lahir,inp_alamat,inp_alamat_praktek,inp_jabatan,inp_guru_besar,inp_gelar,tgl_du,inp_ijazah_s2,tgl_sp_s2,inp_ijazah_dokter,tgl_dokter,inp_suami_istri,inp_tahun_mutasi,inp_npa,inp_kta,inp_jk,inp_hp,email,inp_ijazah_du,inp_spesialis,inp_konsultan,inp_mutasi,inp_alamat_kantor,inp_foto) 
VALUES 
('$id_integritas','$inp_nama','$inp_warga_negara','$inp_agama','$inp_tempat_lahir','$inp_alamat','$inp_alamat_praktek','$inp_jabatan','$inp_guru_besar','$inp_gelar','$tgl_du','$inp_ijazah_s2','$tgl_sp_s2','$inp_ijazah_dokter','$tgl_dokter','$inp_suami_istri','$inp_tahun_mutasi','$inp_npa','$inp_kta','$inp_jk','$inp_hp','$email','$inp_ijazah_du','$inp_spesialis','$inp_konsultan','$inp_mutasi','$inp_alamat_kantor','$inp_foto')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

    //redirect ke halaman index.php 
     $ambil_idanggota  = (mysqli_query($con,"SELECT * FROM form_anggota_baru WHERE email='$email' AND inp_nama='$inp_nama'"));
    while($data=mysqli_fetch_array($ambil_idanggota)){
    $id_anggota = $data['id_anggota'];
    header("location: lampiran_form_anggota.php?id=".$id_anggota."&inp_nama=".$inp_nama);
}

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>