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
    <title>HOME</title>
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
      <div class="card-header">
        <div class="row">
          <div class="col-12">
          </div>
        </div>
      </div>
      <div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
    <div class="col-md-10">
    <h3><u>PROFIL</u></h3>
  <?php $ambildata = (mysqli_query($con, "SELECT * FROM home"));
  $data=$ambildata->fetch_assoc() ?>
  <div class="row">
    <div class="col-md-6">
    <form action="" method="POST">
        <div class="form-group">
        <label >Nama Website</label>
        <input type="text" name="nm_web" style="width:400px;" class="form-control" value="<?php echo $data['nm_web']?>">
        <label>Email Website</label>
        <input type="text" name="email_web" style="width:400px;" class="form-control" value="<?php echo $data['email_web']?>">
        <label>Telepon Website</label>
        <input type="text" name="tlp_web" style="width:400px;" class="form-control" value="<?php echo $data['tlp_web']?>">
        <label>Alamat Website</label>
        <input type="text" name="alamat_web" style="width:400px;" class="form-control" value="<?php echo $data['alamat_web']?>">
        <input type="submit" class="btn btn-dark m-1" name="submit" value="Save Now!"><br></button><hr>
    </div>
    </form>
    <?php 
          if(isset($_POST['submit'])){
              $nm_web       = $_POST['nm_web'];
              $email_web    = $_POST['email_web'];
              $tlp_web      = $_POST['tlp_web'];
              $alamat_web   = $_POST['alamat_web'];

             //query insert data ke dalam database
            $query = "UPDATE home SET nm_web='$nm_web',email_web='$email_web',tlp_web='$tlp_web',alamat_web='$alamat_web'";

              if($con->query($query)) {
                  
                echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                        <i class="bi-check-circle-fill"></i>
                        <strong class="mx-2">Berhasil!</strong> Data Anda Berhasil Disimpan.
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
                echo '<meta http-equiv="refresh" content="1;url=home.php">';
              }
            }
              ?>
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
