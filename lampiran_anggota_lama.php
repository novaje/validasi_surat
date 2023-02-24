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
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <!-- <li class="nav-item">
                    <a href="index.php" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                  </p>
                </a> -->
                <?php if ($data_user['level']=="admin") {
                  ?>
                  <li class="nav-item">
          <a href="404.php" class="nav-link">
            <i class="fas fa-home"></i>
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
          <a href="index1.php" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>CETAK KARTU</p>
          </a>
        </li>



        <!-- AJUKAN PERMOHONAN -->
        <li class="nav-item">
          <a href="ajukan_permohonan.php" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>AJUKAN PERMOHONAN
            </p>
          </a>
        </li>
      <!-- END -->

      <!-- VALIDASI PENGAJUAN -->
      <li class="nav-item">
          <a href="" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>VALIDASI PENGAJUAN
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="daftar_rekom_anggotaBaru.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekom Anggota Baru/Ulang</p>
              </br>
              <center><p>Mutasi</p></center>
            </a>
          </li>

          <li class="nav-item">
            <a href="daftar_rekom_sip.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Rekomendasi SIP</p>
            </a>
            </li>
          
          <li class="nav-item">
            <a href="daftar_rekom_mutasi.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Rekomendasi Mutasi/Pindah Anggota</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="daftar_rekom_sekolah.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Rekomendasi Sekolah</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="daftar_rekom_keluarKota.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Rekomendasi Ket. Keluar Kota</p>
            </a>
          </li>
        </ul>
        <!-- END -->

        <!-- DAFTAR PENGAJUAN -->
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>DAFTAR PENGAJUAN
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="daftar_verif_anggota.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Anggota Baru/Ulang</p>
            </a>
          </li>
          
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="data_user.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekomendasi SIP</p>
            </a>
          </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="data_verif_anggota.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekomendasi Mutasi/Pindah Anggota</p>
            </a>
          </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="data_verif_anggota.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekomendasi Sekolah</p>
            </a>
          </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="data_verif_anggota.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekomendasi Ket. Keluar Kota</p>
            </a>
          </li>
          </ul>
        <!-- END -->

        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="fa fa-solid fa-list"></i>
            <p>MASTER DATA
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="data_user.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User</p>
            </a>
          </li>
          </ul>
      <li class="nav-item">
        <a href="logout.php" class="nav-link">
        <i class="fas fa-sign-out-alt"></i>
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
        <form action="simpan_lampiran_lama.php" method="POST" enctype="multipart/form-data">
          <div class="control-group after-add-more">
            <p>*Ukuran file 3MB*</p>
            <label>Nama Lengkap</label>
            <input type="text" name="inp_nama" class="form-control" value="<?php echo $_GET['inp_nama']; ?>" readonly>
            <input type="hidden" name="id_anggota" class="form-control" value="<?php echo $_GET['id']; ?>" readonly>
            <label>Form Permhononan</label>
            <input type="file" name="inp_permohonan" class="form-control" accept="application/pdf" required> </br>
            <label>Surat Mutasi (bagi dokter mutasian)</label>
            <input type="file" name="inp_mutasi" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy STR dokter asli (rangkap 1)</label>
            <input type="file" name="inp_str" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy Ijazah dokter legalisir asli yang diakui (rangkap 1)</label>
            <input type="file" name="inp_ijazah" class="form-control" accept="application/pdf" required> </br>
            <label>Fotocopy KTP/ surat keterangan domisili (rangkap 1)</label>
            <input type="file" name="inp_ktp" class="form-control" accept="application/pdf" required> </br>
            <label>KTA IDI Cab. Deli Serdang (bagi dokter perpanjang)</label>
            <input type="file" name="kta" class="form-control" accept="application/pdf" required> </br>
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
