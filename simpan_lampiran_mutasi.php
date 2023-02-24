<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari lampiran
            
            $inp_nama               = $_POST['inp_nama'];
            $dibuat_oleh            = $_POST['dibuat_oleh'];

            $files = $_FILES;
            $inp_permohonan = $inp_nama."-".$files['inp_permohonan']['name'];
            $lokasi_permohonan = $files['inp_permohonan']['tmp_name'];
            move_uploaded_file($lokasi_permohonan, "berkas_anggota_mutasi/".$inp_permohonan); 
            // $inp_permohonan       = $_POST['inp_permohonan'];

            $inp_mutasi = $inp_nama."-".$files['inp_mutasi']['name'];
            $lokasi_mutasi = $files['inp_mutasi']['tmp_name'];
            move_uploaded_file($lokasi_mutasi, "berkas_anggota_mutasi/".$inp_mutasi);
            // $inp_mutasi           = $_POST['inp_mutasi'];

            $inp_str = $inp_nama."-".$files['inp_str']['name'];
            $lokasi_str = $files['inp_str']['tmp_name'];
            move_uploaded_file($lokasi_str, "berkas_anggota_mutasi/".$inp_str);
            // $inp_str              = $_POST['inp_str'];

            $inp_ijazah = $inp_nama."-".$files['inp_ijazah']['name'];
            $lokasi_ijazah = $files['inp_ijazah']['tmp_name'];
            move_uploaded_file($lokasi_ijazah, "berkas_anggota_mutasi/".$inp_ijazah);
            // $inp_ijazah           = $_POST['inp_ijazah'];

            $inp_ktp = $inp_nama."-".$files['inp_ktp']['name'];
            $lokasi_ktp  = $files['inp_ktp']['tmp_name'];
            move_uploaded_file($lokasi_ktp , "berkas_anggota_mutasi/".$inp_ktp);

            $kta = $inp_nama."-".$files['kta']['name'];
            $lokasi_kta  = $files['kta']['tmp_name'];
            move_uploaded_file($lokasi_kta , "berkas_anggota_mutasi/".$kta);

//query insert data ke dalam database
$query = "INSERT INTO lampiran_anggota_mutasi (inp_nama,inp_permohonan,inp_mutasi,inp_str,inp_ijazah,inp_ktp,kta,dibuat_oleh) 
VALUES 
('$inp_nama','$inp_permohonan','$inp_mutasi','$inp_str','$inp_ijazah','$inp_ktp','$kta','$dibuat_oleh')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
    echo '<script type ="text/JavaScript">';
    echo ' alert ("Data Berhasil Disimpan!")';
    echo '</script>';
 
    echo '<script type ="text/JavaScript">';  
    echo ' window.location.href="index.php"';  
    echo '</script>';  
  // header("location: detail2.php?inp_nama=".$inp_nama);
} else {
?>
<script type="text/javascript">

  alert ("Data Gagal Disimpan!");
</script>
<?php

}

?>