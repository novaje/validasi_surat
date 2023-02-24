<?php
include 'koneksi/connection.php';
session_start();
include 'include/java.php';
include 'menu.php';

?>
<?php
$username = $_SESSION['username'];
$query_user = mysqli_query($con,"SELECT * FROM admin_idi WHERE username='$username'");
$data_user = mysqli_fetch_assoc($query_user);
if ($data_user['level']!="admin" && $data_user['level']!="tamu") {
  echo '<meta http-equiv="refresh" content="0;url=404.php">';
} else {
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DAFTAR REKOM SIP</title>
    <link rel="shortcut icon" href="./img/logo_idi2.png">
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Right navbar links -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link">Home</a>
            <!-- <a href="logout.php">Logout</a> -->
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.navbar -->
        <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb float-sm-right font-weight-light">
                        <ul class="breadcrumb-item">
                            <a href="dashboard">
                                <i class="fas fa-home"></i>
                            </a>
                        </ul>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      <div class="card-body">
      <div class="container mt-5">

            <h4>UPDATE NOTIFIKASI <span class="badge badge-secondary"></span></h4>
            <hr>
            <form action="" method="POST">
            <div class="form-group">
            <label for="inp_pengurusan">Jenis Pengurusan</label>
                <select type="text" class="form-control" name="inp_pengurusan" id="inp_pengurusan" style="width:750px;">
                    <option>--Pilih--</option>
                    <option>Rekomendasi Anggota Baru</option>
                    <option>Rekomendasi Anggota Lama</option>
                    <option>Rekomendasi Anggota Mutasi</option>
                    <option>Rekomendasi SIP</option>
                    <option>Rekomendasi Keluar Kota</option>
                    <option>Rekomendasi Sekolah</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="pesan">Pesan</label><br>
                  <textarea name="pesan" id="" cols="100" rows="4"></textarea>
                </div>
                <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM peserta_idi WHERE id_peserta"));
                while($data=mysqli_fetch_array($ambildata)){
                  ?>
                <div class="form-group">
                  <label for="kirim_pesan">Kirim Pesan</label>
                    <select type="text" class="form-control" name="kirim_pesan" id="kirim_pesan" style="width:750px;">
                        <option value="">--Pilih User--</option>
                        <option value="<?php echo $data['inp_nama'] ?>"><?php echo $data['inp_nama'] ?></option>
                    </select>
                </div>
                <?php
                  };
                  ?>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input name="tanggal" type="date" class="form-control" id="tanggal" autocomplete="off" style="width:750px;">
                </div>
                <input type="submit" name="submit" value="SAVE !" class="btn btn-success">
              </form>
              <?php 
                if (isset($_POST['submit'])) { 
                if(isset($_POST['pesan']) and isset($_POST['kirim_pesan']) and isset($_POST['tanggal']) and isset($_POST['inp_pengurusan'])) {
                    $pesan          = $_POST['pesan']; 
                    $kirim_pesan    = $_POST['kirim_pesan'];
                    $tanggal        = $_POST['tanggal'];
                    $inp_pengurusan = $_POST['inp_pengurusan']; 
                    $query = "INSERT INTO notifikasi (pesan,kirim_pesan,tanggal,inp_pengurusan) VALUES ('$pesan','$kirim_pesan','$tanggal','$inp_pengurusan')";
                    if($con-> query($query)) {
                        echo '* save new notification success';
                    } else {
                        echo 'error save data';
                    }
                } else {
                    echo '* completed the parameter above';
                }
            } 
	        ?>

    <h4>Notifications List:</h4>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
                <th>Tanggal</th>
                <th>Nama Pengurus Rekomendasi</th>
                <th>Jenis Pengurusan</th>
				<th>Pesan</th>
                <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $a =1; 
			 $ambildata  = (mysqli_query($con,"SELECT * FROM notifikasi WHERE id_notif"));
             while($data=mysqli_fetch_array($ambildata)){
			?>
			<tr>
				<td><?php echo $a ?></td>
        <td><?=$data['tanggal']?></left></td>
				<td><?=$data['kirim_pesan']?></left></td>
        <td><?=$data['inp_pengurusan']?></left></td>
        <td><?=$data['pesan']?></left></td>
        <td></td>
			</tr>
			<?php $a++; }; ?>
		</tbody>
	</table>
        </div>
      </section>
    </div>
    </div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
<script>
    $(document).ready(function () {
      $('#daftarrekom').DataTable();
    });
    </script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
  </body>
  </html>
<?php } ?>
