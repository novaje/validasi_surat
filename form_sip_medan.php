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
    <title>FORM REKOMENDASI IZIN</title>
    <link rel="shortcut icon" href="img/logo_idi2.png">
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
    <div class="panel-heading">
        <center><h3>SURAT KETERANGAN REKOMENDASI IZIN PRAKTEK<h3></center>
        </div> </br>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="simpan_form_sip_medan.php" method="POST">
          <div class="control-group after-add-more">
            <label>Nama Lengkap</label>
            <input type="text" name="inp_nama" class="form-control" style="width:1000px;">
            <label>Tempat/ Tgl Lahir</label>
            <input type="text" name="inp_ttl" class="form-control" style="width:1000px;">
            <label>Alamat</label>
            <input type="text" name="inp_alamat" class="form-control" style="width:1000px;">
            <label>No. Ijazah</label>
            <input type="text" name="inp_no_ijazah" class="form-control" style="width:1000px;">
            <label>No. STR Terbaru</label>
            <input type="text" name="inp_str" class="form-control" style="width:1000px;">
            <label>Instansi Bekerja</label>
            <input type="text" name="inp_instansi" class="form-control" style="width:1000px;">
            <label>No. Pokok Anggota (NPA IDI)</label>
            <input type="text" name="inp_no_pokok" class="form-control" style="width:1000px;">
            <label>No. Registasi Cab.Deli Serdang</label>
            <input type="text" name="inp_no_regis" class="form-control" style="width:1000px;">
            <label>Cabang</label>
            <input type="text" name="inp_cabang" value="Medan" readonly class="form-control" style="width:1000px;">
            <label>Nomor Surat 1</label>
            <input type="text" name="inp_surat1" class="form-control" style="width:1000px;">
            <label>Nomor Surat 2</label>
            <input type="text" name="inp_surat2" class="form-control" style="width:1000px;">
            <label>Bulan Surat</label>
            <input type="text" name="inp_bulan" class="form-control" style="width:1000px;">
            <label>Tahun Surat</label>
            <input type="text" name="inp_tahun" class="form-control" style="width:1000px;">.
            <label>Alamat Ke-II</label>
            <input type="text" name="inp_alamat_1" class="form-control" style="width:1000px;">
            <label>Tanggal/ Bulan/ Tahun di keluarkan Surat</label>
            <input type="text" name="inp_tgl_real" class="form-control" style="width:1000px;">
            <!-- <label>Nama Ketua Umum</label> -->
            <input type="hidden" name="inp_ketua" value="dr. Hanip Fahri, MM.M.Ked(KJ),Sp.KJ" class="form-control" style="width:1000px;">
            <!-- <label>NPA IDI Ketua</label> -->
            <input type="hidden" name="inp_npa_ketua" value="67732" class="form-control" style="width:1000px;">
            <br>
            <button class="btn btn-success" type="submit" name="">SUBMIT</button>
            <hr>
          </div>
        </form>
        </div>
    </div>
  </div>
</div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
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
