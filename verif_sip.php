<?php
include "koneksi/connection.php" ;

	if (isset($_POST['verifikasi'])){
		$appid = $_POST['appid'];
		$sql = "UPDATE lampiran_sip SET status='1' WHERE id_lampiran_sip = '$appid'";
		$run = mysqli_query($con,$sql);
		if($run == true){
			
			echo "<script> 
					alert('Verfikasi Berhasil');
					window.open('daftar_sip_baru.php','_self');
				  </script>";
		}else{ 
			echo "<script> 
			alert('Failed To Approved');
			</script>";
		}
	}
?>