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
    <title>DAFTAR REKOM ANGGOTA</title>
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
      <div class="card-body">
        <div class="row">
          <!-- <div class="col-12"> -->
          <div class="card-body" col="10">
            <table id="daftarrekom" class="table table-bordered table-hover">
            <i class="fa fa-list" aria-hidden="true"><i><u> List Rekomendasi Anggota Mutasi</u></i></i><br><br>
            <thead class="table-secondary">
                <tr>
                  <th scope="row" width="100px"><center>NAMA LENGKAP</center></th>
                  <th scope="row" width="100px"><center>DATA</center></th>
                  <th scope="row" width="70px"><center>STATUS</center></th>
                  <th scope="row" width="100px"><center>AKSI</center></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM lampiran_anggota_mutasi WHERE id_anggota_mutasi AND dibuat_oleh='".$data_user['id_admin']."'"));
                while($data=mysqli_fetch_array($ambildata)){
                  ?>
                  <tr>
                    <td><left><?=$data['inp_nama']?></left></td>
                    <td><center>
                      <?php
                      $query  = "SELECT * FROM form_anggota_mutasi WHERE id_anggota";
                      $run    = mysqli_query($con,$query);
                      ?>
                      <a href="formulir_mutasi.php?id_anggota=<?=$data['id_anggota']?>"><i class="fas fa-file-alt"></i> Formulir </a><br/><hr/>
                      <a href="detail_lampiran_mutasi.php?id_anggota=<?=$data['id_anggota']?>"><i class="fas fa-file-pdf"></i> Lampiran</button></a>
                      </center>
                      </td>

                    <td>
                      <center>
                      <?php
                      if ($data['status'] == 0) {
                        echo "<span class='badge badge-pill badge-warning'>Ditunda</span>";
                      }
                      else {
                        echo "<span class='badge badge-success rounded-pill d-inline'>Diterima</span>";
                      }
                      ?>
                      </center>
                      </td>
                      <td>
                      <center>
                        <form action="verif_anggotaBaru.php?id_anggota=<?php echo $data['id_anggota']; ?>" method="POST">
                          <input type="hidden" name="appid" value="<?php echo $data['id_anggota']; ?>">
                          <input type="submit" class="btn btn-sm btn-outline-success btn-rounded" data-mdb-ripple-color="dark" name="verifikasi" value="VERIFIKASI">
                        </form>
                      </center>
                    </td>
                    </tr>
                    <?php
                  };
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
