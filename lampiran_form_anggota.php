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
    <title>LAMPIRAN PENDAFTARAN</title>
    <link rel="shortcut icon" href="./img/logo_idi2.png">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
            <!-- Main Sidebar Container -->
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
      <div class="card-header">
        <div class="row">
          <div class="col-12">
          </div>
        </div>
      </div>

      <div class="container">
  <div class="panel panel-default">
    <div class="panel-heading"> <center><h3>LAMPIRAN<h3></center>
        <center><p>KARTU ANGGOTA BARU/ DAFTAR ULANG/ MUTASI/ REKOMENDASI<p></center> 
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="simpan_lampiran.php" method="POST" enctype="multipart/form-data">
          <div class="control-group after-add-more">
            <p>*Ukuran file 3MB*</p>
            <label>Nama Lengkap</label>
            <input type="text" name="inp_nama" class="form-control" value="<?php echo $_GET['inp_nama']; ?>" readonly>
            <input type="hidden" name="id_anggota" class="form-control" value="<?php echo $_GET['id']; ?>" readonly>
            <input type="hidden" name="dibuat_oleh" value="<?php echo $data_user['id_admin'] ?>" class="form-control">
            <label>Pas Foto 3x4</label>
            <input type="file" name="pas_foto" class="form-control" accept="application/pdf" required> </br>
            <label>Form Permhononan</label>
            <input type="file" name="inp_permohonan" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy STR dokter asli (rangkap 1)</label>
            <input type="file" name="inp_str" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy Ijazah dokter legalisir asli yang diakui (rangkap 1)</label>
            <input type="file" name="inp_ijazah" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy KTP/ surat keterangan domisili (rangkap 1)</label>
            <input type="file" name="inp_ktp" class="form-control" accept="application/pdf" required> </br>
            <br>
            <hr>
          </div>
          <button class="btn btn-success" type="submit">Submit</button>
        </form>
        </div>
    </div>
  </div>
</div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
  </body>
  </html>
<?php } ?>
