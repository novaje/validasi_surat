<?php
include "koneksi/connection.php" ;

	if (isset($_POST['verifikasi'])){
		$appid = $_POST['appid'];
		$sql = "UPDATE surat_ket_luarkota SET status='2' WHERE id_surat = '$appid'";
		$run = mysqli_query($con,$sql);
		if($run == true){
			
			echo "<script> 
					alert('Surat Berhasil Ditolak!');
					window.open('daftar_surat_luarKota.php','_self');
				  </script>";
		}else{ 
			echo "<script> 
			alert('Failed To Approved');
			</script>";
		}
	}
?>
