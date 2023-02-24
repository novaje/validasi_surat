<?php

//include koneksi database
include('koneksi/connection.php');

//get data dari lampiran
    $inp_nama             = $_POST['inp_nama'];
    $no_npa               = $_POST['no_npa'];
    $alamat               = $_POST['alamat'];
    $jenis_keanggotaan    = $_POST['jenis_keanggotaan'];

    $files = $_FILES;
    $bukti_iuran           = $inp_nama."-".$files['bukti_iuran']['name'];
    $lokasi_bukti_iuran    = $files['bukti_iuran']['tmp_name'];
    move_uploaded_file($lokasi_bukti_iuran, "bukti_iuran/".$bukti_iuran);

    $surat_pindah           = $inp_nama."-".$files['surat_pindah']['name'];
    $lokasi_surat    = $files['surat_pindah']['tmp_name'];
    move_uploaded_file($lokasi_surat, "bukti_iuran/".$surat_pindah);

//query insert data ke dalam database
$query = "INSERT INTO integritas_anggota (inp_nama,no_npa,bukti_iuran,alamat,jenis_keanggotaan,surat_pindah) 
VALUES
('$inp_nama','$no_npa','$bukti_iuran','$alamat','$jenis_keanggotaan','$surat_pindah')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($con->query($query)) {

    //redirect ke halaman index.php 
     $ambil_id = (mysqli_query($con,"SELECT * FROM integritas_anggota WHERE inp_nama='$inp_nama'"));
    while($data=mysqli_fetch_array($ambil_id)){
    $id_integritas = $data['id_integritas'];
    header("location: lampiran_anggota_mutasi.php?id=".$id_integritas."&inp_nama=".$inp_nama);
}

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>