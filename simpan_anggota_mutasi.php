<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari form anggota baru
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

//query insert data ke dalam database
$query = "INSERT INTO form_anggota_mutasi (inp_nama,inp_warga_negara,inp_agama,inp_tempat_lahir,inp_alamat,inp_alamat_praktek,inp_jabatan,inp_guru_besar,inp_gelar,tgl_du,inp_ijazah_s2,tgl_sp_s2,inp_ijazah_dokter,tgl_dokter,inp_suami_istri,inp_tahun_mutasi,inp_npa,inp_kta,inp_jk,inp_hp,email,inp_ijazah_du,inp_spesialis,inp_konsultan,inp_mutasi,inp_alamat_kantor) 
VALUES 
('$inp_nama','$inp_warga_negara','$inp_agama','$inp_tempat_lahir','$inp_alamat','$inp_alamat_praktek','$inp_jabatan','$inp_guru_besar','$inp_gelar','$tgl_du','$inp_ijazah_s2','$tgl_sp_s2','$inp_ijazah_dokter','$tgl_dokter','$inp_suami_istri','$inp_tahun_mutasi','$inp_npa','$inp_kta','$inp_jk','$inp_hp','$email','$inp_ijazah_du','$inp_spesialis','$inp_konsultan','$inp_mutasi','$inp_alamat_kantor')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    echo '<script type ="text/JavaScript">';
    echo ' alert ("Data Berhasil Disimpan!")';
    echo '</script>';
 
    echo '<script type ="text/JavaScript">';  
    echo ' window.location.href="index.php"';  
    echo '</script>'; 
} else {
?>
<script type="text/javascript">

  alert ("Data Gagal Disimpan!");
</script>
<?php

}

?>