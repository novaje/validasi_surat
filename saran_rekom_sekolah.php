<?php
include 'koneksi/connection.php';
session_start();
include 'include/java.php';
?>
<?php
$username = $_SESSION['username'];
$query_user = mysqli_query($con,"SELECT * FROM admin_idi WHERE username='$username'");
$data_user = mysqli_fetch_assoc($query_user);
if ($data_user['level']!="admin" && $data_user['level']!="tamu") {
  echo '<meta http-equiv="refresh" content="0;url=404.php">';
} else {
  ?>
<?php $id_rekomSekolah=$_GET['id_rekomSekolah']; ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DETAIL REKOMENDASI SEKOLAH</title>
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
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <a href="index.php" class="brand-link">
                <img src="./img/logo_idi2.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">IDI - DELI SERDANG</span>
              </a>

              <!-- Sidebar -->
              <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                  </div>
                  <div class="info">
                    <a href="#" class="d-block"></a>
                  </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if ($data_user['level']=="admin") {
                  ?>
                  <li class="nav-item">
          <a href="404.php" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>HOME<span class="right badge badge-danger"></span></p>
          </a>
        </li>
        <li class="nav-item">
          <a href="404.php" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>TENTANG<span class="right badge badge-danger"></span></p>
          </a>
        </li>

        <li class="nav-item">
          <a href="404.php" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>BERITA<span class="right badge badge-danger"></span></p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="404.php" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>GALERI</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="404.php" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>PELAYANAN</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="404.php" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>KEGIATAN</p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>AJUKAN PERMOHONAN
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="form_anggota.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Form Anggota Baru/Ulang</p>
              </br>
              <center><p>Mutasi</p></center>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="upload_sip.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Form Rekomendasi SIP</p>
              </a>
            </li>
          
          <li class="nav-item">
            <a href="upload_pindahAnggota.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Form Mutasi/Pindah Anggota</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="upload_rekom_sekolah.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Form Rekomendasi Sekolah</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="upload_ket_keluarKota.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Form Ket. Keluar Kota</p>
            </a>
          </li>
        </li>
      </ul>
      
      <li class="nav-item">
        <a href="logout.php" class="nav-link">
          <i class="fa fa-power-off" aria-hidden="true"></i>
          <p>LOGOUT</p>
        </a>
      </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DETAIL SARAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Saran</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <textarea name="saran" value="" class="form-control" rows="8" placeholder="..."></textarea>
                      </div>
                      <button type="submit" name="save" value="save" class="btn btn-sm btn-primary">SAVE</a>
                    </div>
                  </div>
                </form>

                <?php
                if(isset($_POST['save'])) {
                    $saran = $_POST['saran'];
                    $q = "UPDATE form_rekomsekolah saran SET saran='$saran' WHERE id_rekomSekolah='$id_rekomSekolah'";
                    $result = mysqli_query($con, $q);

                    echo '<script type ="text/JavaScript">';
                    echo ' alert ("Saran Berhasil Disimpan!")';
                    echo '</script>';
                    
                    echo '<script type ="text/JavaScript">';  
                    echo ' window.location.href="daftar_rekom_sekolah.php?id='.$id_rekomSekolah.'"';  
                    echo '</script>';   
                  }
                ?>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
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
