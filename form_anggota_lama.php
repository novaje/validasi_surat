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
    <title>FORMULIR PENDAFTARAN</title>
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
        <center><h3>FORMULIR PENDAFTARAN<h3></center>
        <center><p>KARTU ANGGOTA BARU/ DAFTAR ULANG/ MUTASI/ REKOMENDASI<p></center>
        </div> </br>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="simpan_anggota_lama.php" method="POST">
          <div class="control-group after-add-more">
            <label>Nama Lengkap</label>
            <input type="text" name="inp_nama" style="width:1000px;" class="form-control" value="<?php echo $_GET['inp_nama']; ?>" readonly>
            <input type="hidden" name="id_integritas" class="form-control" value="<?php echo $_GET['id']; ?>" readonly>
            <label>Warga Negara</label>
            <input type="text" name="inp_warga_negara" class="form-control" style="width:1000px;">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="inp_jk" style="width:1000px;">
                <option>---</option>
                <option>Pria</option>
                <option>Wanita</option>
              </select>
            <label>Agama</label>
            <select class="form-control" name="inp_agama" style="width:1000px;">
                <option>---</option>
                <option>Islam</option>
                <option>Budha</option>
                <option>Kristen</option>
                <option>Kongwuchu</option>
              </select>
            <label>No. HP</label>
            <input type="text" name="inp_hp" class="form-control" style="width:1000px;">
            <label>Email</label>
            <input type="text" name="email" class="form-control" style="width:1000px;">
            <label>Tempat/ Tanggal Lahir</label>
            <input type="text" name="inp_tempat_lahir" class="form-control" style="width:1000px;">
            <label>Alamat Rumah (Kota/Kab)</label>
            <input type="text" name="inp_alamat" class="form-control" style="width:1000px;">
            <label>Alamat Praktek Utama (Kota/Kab)</label>
            <input type="text" name="inp_alamat_praktek" class="form-control" style="width:1000px;">
            <label>Alamat Kantor (Kota/Kab)</label>
            <input type="text" name="inp_alamat_kantor" class="form-control" style="width:1000px;">
            <label>Jabatan Dikantor</label>
            <input type="text" name="inp_jabatan" class="form-control" style="width:1000px;">
            <label>Guru Besar/ Prof</label>
            <select class="form-control" name="inp_guru_besar" style="width:1000px;">
                <option>---</option>
                <option>Ya</option>
                <option>Tidak</option>
            </select>
            <label>Gelar Akademik Tertinggi</label>
            <select class="form-control" name="inp_gelar" style="width:1000px;">
                <option>---</option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
            </select>
            <label>Ijazah D.U di FK. UNIV</label>
            <input type="text" name="inp_ijazah_du" class="form-control" style="width:1000px;">
            <input type="text" name="tgl_du" class="form-control" placeholder="Tgl/bln/thn" style="width:1000px;">
            <label>Ijazah Sp/S2 di FK. UNIV</label>
            <input type="text" name="inp_ijazah_s2" class="form-control" style="width:1000px;">
            <input type="text" name="tgl_sp_s2" class="form-control" placeholder="Tgl/bln/thn" style="width:1000px;">
            <label>Spesialis</label>
            <input type="text" name="inp_spesialis" class="form-control" style="width:1000px;">
            <label>Spesialis Konsultan</label>
            <select class="form-control" name="inp_konsultan" style="width:1000px;">
                <option>---</option>
                <option>Ya</option>
                <option>Tidak</option>
            </select>
            <label>Ijazah Doktor di UNIV</label>
            <input type="text" name="inp_ijazah_dokter" class="form-control" style="width:1000px;">
            <input type="text" name="tgl_dokter" class="form-control" placeholder="Tgl/bln/thn" style="width:1000px;">
            <label>Nama Suami/Istri</label>
            <input type="text" name="inp_suami_istri" class="form-control" style="width:1000px;">
            <label>Sudah Pernah Menjadi Anggota/ Mutasi dari IDI Cabang</label>
            <input type="text" name="inp_mutasi" class="form-control" style="width:1000px;">
            <input type="text" name="inp_tahun_mutasi" class="form-control" placeholder="Tahun Mutasi" style="width:1000px;">
            <label>NPA IDI Pusat</label>
            <input type="text" name="inp_npa" class="form-control" style="width:1000px;">
            <label>No. KTA/ATM</label>
            <input type="text" name="inp_kta" class="form-control" style="width:1000px;">
            <br>
            <button class="btn btn-success" type="submit" name="">Next</button>
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
