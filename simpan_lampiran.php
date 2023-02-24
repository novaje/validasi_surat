<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari lampiran
            $inp_nama           = $_POST['inp_nama'];
            $dibuat_oleh        = $_POST['dibuat_oleh'];

            $files              = $_FILES;
            $inp_permohonan     = $inp_nama."-".$files['inp_permohonan']['name'];
            $lokasi_permohonan  = $files['inp_permohonan']['tmp_name'];
            move_uploaded_file($lokasi_permohonan, "berkas/".$inp_permohonan);
            // $inp_permohonan       = $_POST['inp_permohonan'];

            $inp_str            = $inp_nama."-".$files['inp_str']['name'];
            $lokasi_str         = $files['inp_str']['tmp_name'];
            move_uploaded_file($lokasi_str, "berkas/".$inp_str);
            // $inp_str              = $_POST['inp_str'];

            $inp_ijazah         = $inp_nama."-".$files['inp_ijazah']['name'];
            $lokasi_ijazah      = $files['inp_ijazah']['tmp_name'];
            move_uploaded_file($lokasi_ijazah, "berkas/".$inp_ijazah);
            // $inp_ijazah           = $_POST['inp_ijazah'];

            $inp_ktp            = $inp_nama."-".$files['inp_ktp']['name'];
            $lokasi_ktp         = $files['inp_ktp']['tmp_name'];
            move_uploaded_file($lokasi_ktp , "berkas/".$inp_ktp);

            $pas_foto           = $inp_nama."-".$files['pas_foto']['name'];
            $lokasi_foto        = $files['pas_foto']['tmp_name'];
            move_uploaded_file($lokasi_foto , "berkas/".$pas_foto);
     

//query insert data ke dalam database
$query = "INSERT INTO lampiran_form_anggota (inp_nama,inp_permohonan,inp_str,inp_ijazah,inp_ktp,pas_foto,dibuat_oleh) 
VALUES 
('$inp_nama','$inp_permohonan','$inp_str','$inp_ijazah','$inp_ktp','$pas_foto','$dibuat_oleh')";


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {
              echo '<script type ="text/JavaScript">';
              echo ' alert ("Data Berhasil Disimpan!")';
              echo '</script>';
           
              echo '<script type ="text/JavaScript">';  
              echo ' window.location.href="index.php?"';  
              echo '</script>';  

} else {
?>
     <script type="text/javascript">

            alert ("Data Gagal Disimpan!");
        </script>
        <?php

}

?>