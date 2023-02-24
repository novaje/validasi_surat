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
    <title>FORM PERNYATAAN</title>
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
        <center><h3>SURAT PERNYATAAN<h3></center>
        </div> </br>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="simpan_form_Nonasn.php" method="POST">
          <div class="control-group after-add-more">
            <label>Nama Lengkap</label>
            <input type="text" name="inp_nama" class="form-control" value="<?php echo $_GET['inp_nama']; ?>" readonly>
            <input type="hidden" name="id_lampiran_sip" class="form-control" value="<?php echo $_GET['id']; ?>" readonly>
            <label>Tempat/ Tanggal Lahir</label>
            <input type="text" name="inp_tempat_lahir" class="form-control">
            <label>No. Register IDI Cabang</label>
            <input type="text" name="inp_no_regis" class="form-control">
            <label>NPA. IDI</label>
            <input type="text" name="inp_idi" class="form-control">
            <label>No. STR</label>
            <input type="text" name="inp_str" class="form-control">
            <label>Alamat Rumah</label>
            <input type="text" name="inp_alamat" class="form-control">
            <label>Telp HP</label>
            <input type="text" name="inp_tlp" class="form-control">
            <label>Alumni Fakultas Kedokteran (FK)</label>
            <input type="text" name="inp_alumni" class="form-control">
            <label>No. Ijazah</label>
            <input type="text" name="inp_ijazah" class="form-control">
            <label>1. Nama Sarana Pelayanan Kesehatan</label>
            <input type="text" name="sarana_kesehatan" class="form-control">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
            <label>2. Nama Sarana Pelayanan Kesehatan</label>
            <input type="text" name="sarana_kesehatan_2" class="form-control">
            <label>Alamat</label>
            <input type="text" name="alamat_2" class="form-control">
            <label>3. Nama Sarana Pelayanan Kesehatan</label>
            <input type="text" name="sarana_kesehatan_3" class="form-control">
            <label>Alamat</label>
            <input type="text" name="alamat_3" class="form-control">
              <hr>
            </div>
          </div>
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