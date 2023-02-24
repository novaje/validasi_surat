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
    <title>Permohonan Rekomendasi Sekolah</title>
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
      <div class="card-header">
        <div class="row">
          <div class="col-12">
          </div>
        </div>
      </div>
      <div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
        <center><h3>PERMOHONAN REKOMENDASI SEKOLAH<h3></center>
        </div> </br>
       <!-- <p>Dengan hormat, </br>
       Bersama ini saya mengajukan permohonan <b>(mendaftar baru/ daftar ualng/ NPA)</b> sebagai anggota IDI dan saya bersedia mentaati AD/ART dan ketentuan-ketentuan organisasi IDI.</p>
       <p>Adapun data-data mengenai diri saya sbb : </p> -->
    <div class="panel-body">
      
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="simpan_form_sekolah.php" method="POST">
          <div class="control-group after-add-more">
            <label>Nama Lengkap</label>
            <input type="text" name="inp_nama" class="form-control" value="<?php echo $_GET['inp_nama']; ?>" readonly>
            <input type="hidden" name="id_rekomSekolah" class="form-control" value=" <?php echo $_GET['id_rekomSekolah']; ?>">
            <label>Tempat/ Tgl.Lahir</label>
            <input type="text" name="inp_tempat_lahir" class="form-control">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="inp_jk">
                <option>---</option>
                <option>Pria</option>
                <option>Wanita</option>
              </select>
            <label>No. Reg. IDI Cab. Deli Serdang</label>
            <input type="text" name="inp_no_reg" class="form-control">
            <label>NPA.IDI</label>
            <input type="text" name="inp_npa" class="form-control">
            <label>Lulusan (FK)/ Tahun</label>
            <input type="text" name="inp_lulusan" class="form-control">
            <label>No. Ijazah</label>
            <input type="text" name="inp_noIjazah" class="form-control">
            <label>Alamat Rumah</label>
            <input type="text" name="inp_alamat" class="form-control">
            <label>No. Tlp</label>
            <input type="text" name="inp_tlp" class="form-control">
            <label>Dengan ini mengajukan Permohonan Rekomendasi mengikuti Program Pendidikan Dokter Spesialis (PPDS-S-2) :</label>
            <input type="text" name="inp_permohonan" class="form-control">
            <label>Fakultas Kedokteran</label>
            <input type="text" name="inp_fakultas" class="form-control">
            <br>
            <hr>
            <button class="btn btn-success" type="submit" name="">SUBMIT</button>
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