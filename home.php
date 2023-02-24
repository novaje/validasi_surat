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
      <div class="card card-primary card-outline">
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
    <div class="col-md-10">
    <h4>Profil</h4>
  <?php $ambildata = (mysqli_query($con, "SELECT * FROM home"));
  $data=$ambildata->fetch_assoc() ?>
  <div class="row">
    <div class="col-md-6">
      <table class="table">
        <tr>
          <th>Nama Website </th>
          <th>:</th>
          <th><?php echo $data['nm_web'] ?></th>
        </tr>
        <tr>
          <th>Email Website </th>
          <th>:</th>
          <th><?php echo $data['email_web'] ?></th>
        </tr>
        <tr>
          <th>Telepon Website </th>
          <th>:</th>
          <th><?php echo $data['tlp_web'] ?></th>
        </tr>
        <tr>
          <th>Alamat Website </th>
          <th>:</th>
          <th><?php echo $data['alamat_web'] ?></th>
        </tr>
      </table>
    </div>
    </div>
      <a href="ubah_profile.php" class="btn btn-info btn-lg" type="submit" name=""><i class="fas fa-pen-square"></i></a><br></button><hr>
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
