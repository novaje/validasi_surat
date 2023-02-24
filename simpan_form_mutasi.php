<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari lampiran
$id_anggota         = $_POST['id_anggota'];
$inp_nama           = $_POST['inp_nama'];
$inp_tempatLahir    = $_POST['inp_tempatLahir'];
$inp_jk             = $_POST['inp_jk'];
$inp_noReg          = $_POST['inp_noReg'];
$inp_npa            = $_POST['inp_npa'];
$inp_lulusan        = $_POST['inp_lulusan'];
$inp_noIjazah       = $_POST['inp_noIjazah'];
$inp_alamat         = $_POST['inp_alamat'];
$inp_tlp            = $_POST['inp_tlp'];
$inp_pindahStatus   = $_POST['inp_pindahStatus'];
$inp_lain           = $_POST['inp_lain'];
$inp_alasan_pindah  = $_POST['inp_alasan_pindah'];

            
//query insert data ke dalam database
$query = "INSERT INTO form_mutasi (id_anggota,inp_nama,inp_tempatLahir,inp_jk,inp_noReg,inp_npa,inp_lulusan,inp_noIjazah,inp_alamat,inp_tlp,inp_pindahStatus,inp_lain,inp_alasan_pindah) 
VALUES 
('$id_anggota','$inp_nama','$inp_tempatLahir','$inp_jk','$inp_noReg','$inp_npa','$inp_lulusan','$inp_noIjazah','$inp_alamat','$inp_tlp','$inp_pindahStatus','$inp_lain','$inp_alasan_pindah')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    echo '<script type ="text/JavaScript">';
    echo ' alert ("Data Berhasil Disimpan!")';
    echo '</script>';
 
    echo '<script type ="text/JavaScript">';  
    echo ' window.location.href="index.php?id='.$id_anggota.'"';  
    echo '</script>'; 
} else {
?>
<script type="text/javascript">

  alert ("Data Gagal Disimpan!");
</script>
<?php

}

?>