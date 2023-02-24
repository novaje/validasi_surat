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
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UPLOAD SIP</title>
    <link rel="shortcut icon" href="./img/logo_idi2.png">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
/* Custom style to set icon size */
.alert i[class^="bi-"]{
  font-size: 1.5em;
  line-height: 1;
}
</style>
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
      <div class="card-header">
        <div class="row">
          <div class="col-12">
          </div>
        </div>
      </div>

      <div class="container">
  <div class="panel panel-default">
    <div class="panel-heading"> <center><h3>REKOMENDASI SURAT IZIN PRAKTIK (SIP)<h3></center>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
         <form action="simpan_upload_perubahan.php" method="POST" enctype="multipart/form-data">
          <div class="control-group after-add-more">
            <p>*Ukuran file 3MB (PDf) *</p>
            <label>Nama Lengkap</label>
            <input type="text" name="inp_nama" class="form-control" value="<?php echo $_GET['inp_nama']; ?>" required readonly>
            <input type="hidden" name="id_integritas" class="form-control" value="<?php echo $_GET['id']; ?>" readonly>
            <label>Permohonan Rekomendasi SIP</label>
            <input type="file" name="surat_rekomendasi" class="form-control" accept="application/pdf" required> </br>
            <label>Surat Pernyataan Tempat Praktik</label>
            <input type="file" name="surat_tempat_praktik" class="form-control" accept="application/pdf" required> </br>
            <label>Pas Foto 3x4</label>
            <input type="file" name="pas_foto" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy KTP</label>
            <input type="file" name="fc_ktp" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy KTA IDI & KTA IDI Pusat bagi yang sudah ada</label>
            <input type="file" name="fc_kta" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy Ijazah Dokter Umum/ Ijazah Dokter Spesialis</label>
            <input type="file" name="fc_ijazah" class="form-control" accept="application/pdf"> </br>
            <label>Salinan STR Asli</label>
            <input type="file" name="fc_str" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy Surat Izin Praktik (SIP) yang sudah di Miliki</label>
            <input type="file" name="fc_surat_izin" class="form-control" accept="application/pdf" required> </br>
            <label>Bagi yang sudah pernah mencabut SIP di DPMPTSP Deli Serdang maka untuk Permohonan Izin Praktik berikutnya harus melampirkan FC Surat Pencabutan STR yang dikeluarkan oleh DPMPTSP Deli Serdang</label>
            <input type="file" name="fc_pencabutan_str" class="form-control" accept="application/pdf"> </br>
            <label>Surat Keterangan dari Tempat Praktik/Instansi (RS/Klinik)</label>
            <input type="file" name="keterangan_tempatPraktik" class="form-control" accept="application/pdf"> </br>
            <label>Biaya Administrasi Rekomendasi Dokter Umum/Spesialis</label>
            <input type="file" name="biaya_administrasi" class="form-control" accept="application/pdf"> </br>
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