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
    <title>TAMBAH DATA</title>
    <link rel="shortcut icon" href="./img/logo_idi2.png">
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      <div class="container-fluid">
      <a href="webinar.php" class="btn btn-warning mb-3">
        <svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1">
          <path fill="#000000" d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M18,11H10L13.5,7.5L12.08,6.08L6.16,12L12.08,17.92L13.5,16.5L10,13H18V11Z" />
        </svg> Back To Data
      </a>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="upload_sertifikat">Upload Sertifikat</label>
                <input type="file" name="upload_sertifikat" class="form-control" id="" style="width:800px;" required autofocus>
		    </div>
            <div class="form-group">
                <label for="peserta_webinar">Nama Peserta</label>
                <input type="text" name="peserta_webinar" class="form-control" id="" style="width:800px;" required autofocus>
		    </div>
		    <div class="form-group">
                <label for="inp_tgl">Tanggal Kegiatan</label>
                <input type="date" name="inp_tgl" class="form-control" id="" style="width:800px;" required autofocus>
		    </div>
            <div class="form-group">
                <label for="no_skp">No SKP</label>
                <input type="text" name="no_skp" class="form-control" id="" style="width:800px;" required autofocus>
		    </div>
            <div class="form-group">
                <label for="inp_kegiatan">Nama Kegiatan</label>
                <input type="text" name="inp_kegiatan" class="form-control" id="" style="width:800px;" required autofocus>
		    </div>
            <div class="form-group">
                <label for="ketentuan_skp">Ketentuan SKP</label>
                <input type="text" name="ketentuan_skp" class="form-control" id="" style="width:800px;" required autofocus>
		    </div>
            <div class="form-group">
                <label for="jumlah_skp">Jumlah SKP</label>
                <input type="text" name="jumlah_skp" class="form-control" id="" style="width:800px;" required autofocus>
		    </div>
        <input type="submit" class="btn btn-dark m-1" name="save" value="Save Now!">
        </form>
        <?php 
          if(isset($_POST['save'])){
              $peserta_webinar  = $_POST['peserta_webinar'];
              $inp_tgl          = $_POST['inp_tgl'];
              $inp_kegiatan     = $_POST['inp_kegiatan'];
              $ketentuan_skp    = $_POST['ketentuan_skp'];
              $jumlah_skp       = $_POST['jumlah_skp'];
              $no_skp           = $_POST['no_skp'];

              $files           = $_FILES;
              $upload_sertifikat   = $files['upload_sertifikat']['name'];
              $lokasi_brosur   = $files['upload_sertifikat']['tmp_name'];
              move_uploaded_file($lokasi_brosur, "brosur_webinar/".$upload_sertifikat);

             //query insert data ke dalam database
            $query = "INSERT INTO webinar (peserta_webinar,inp_tgl,inp_kegiatan,ketentuan_skp,upload_sertifikat,jumlah_skp,no_skp) 
            VALUES
            ('$peserta_webinar','$inp_tgl','$inp_kegiatan','$ketentuan_skp','$upload_sertifikat','$jumlah_skp','$no_skp')";

              if($con->query($query)) {
                  
                echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                        <i class="bi-check-circle-fill"></i>
                        <strong class="mx-2">Berhasil!</strong> Data Anda Berhasil Disimpan.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
                echo '<meta http-equiv="refresh" content="1;url=webinar.php">';
              }
            }

              ?>
      </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- <?php } ?> -->
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