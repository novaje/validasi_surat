<?php
include "koneksi/connection.php" ;

	if (isset($_POST['verifikasi'])){
		$appid = $_POST['appid'];
		$sql = "UPDATE form_surat_izin_ds SET status='1' WHERE id_surat = '$appid'";
		$run = mysqli_query($con,$sql);
		if($run == true){
			
			echo "<script> 
					alert('Verfikasi Berhasil');
					window.open('daftar_surat_sip_ds.php','_self');
				  </script>";
		}else{ 
			echo "<script> 
			alert('Failed To Approved');
			</script>";
		}
	}
?>