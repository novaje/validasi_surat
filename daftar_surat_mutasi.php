<?php
include 'koneksi/connection.php';
include 'include/java.php';
include 'include/sidebar.php';
?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <title>DAFTAR REKOM ANGGOTA BARU</title>
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
          <h3 style="text-align:center">DAFTAR SURAT KETERANGAN PINDAH ANGGOTA IDI</h3>
            <table id="daftarrekom" class="table table-sm table-bordered table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="row" width="100px"><center>NAMA LENGKAP</center></th>
                  <th scope="row" width="50px"><center>DATA SURAT</center></th>
                  <th scope="row" width="50px"><center>STATUS</center></th>
                  <th scope="row" width="80px"><center>VALIDASI SURAT</center></th>
                  <th scope="row" width="20px"><center>TAMBAH KET</center></th>
                  <th scope="row" width="20px"><center>KETERANGAN</center></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM surat_mutasi WHERE id_surat_mutasi"));
                while($data=mysqli_fetch_array($ambildata)){
                  ?>
                  <tr>
                    <td><center><?=$data['inp_nama']?></center></td>
                    <td><center>
                      <?php
                      $query  = "SELECT * FROM surat_mutasi WHERE id_surat_mutasi";
                      $run    = mysqli_query($con,$query);
                      ?>
                      <a href="formulir_surat_mutasi.php?id_surat_mutasi=<?=$data['id_surat_mutasi']?>"><i class="fas fa-file-alt"></i> View</button></a>
                      </center>
                      </td>
                      <td>
                      <center>
                        <?php

                          if ($data['status'] == 0) {
                            
                            echo "<span class='badge badge-warning'>Ditunda</span>";
                          }
                          
                          else if
                            ($data['status']== 1) {
                            
                            echo "<span class='badge badge-success'>Diverifikasi</span>";
                          }
                          else {
                            echo "<span class='badge badge badge-danger'>Ditolak</span>";
                          }
                          
                        ?>
                      </center>
                      </td>
                      <td>
                      <center>
                        <form action="verif_surat_mutasi.php?id_surat_mutasi=<?php echo $data['id_surat_mutasi']; ?>" method="POST">
                          <input type="hidden" name="appid" value="<?php echo $data['id_surat_mutasi']; ?>">
                          <input type="submit" class="btn btn-sm btn btn-success" data-mdb-ripple-color="dark" name="verifikasi" value="VERIF">
                        </form><hr>
                        <form action="tolak_surat_mutasi.php?id_surat_mutasi=<?php echo $data['id_surat_mutasi']; ?>" method="POST">
                          <input type="hidden" name="appid" value="<?php echo $data['id_surat_mutasi']; ?>">
                          <input type="submit" class="btn btn-sm btn btn-danger" data-mdb-ripple-color="dark" name="verifikasi" value="DITOLAK">
                        </form> 
                      </center>
                      </td>
                      <td>
                        <center>
                          <a href="keterangan_surat_mutasi.php?id_surat_mutasi=<?=$data['id_surat_mutasi']?>"><button class="btn btn-sm btn-info">Tambah Keterangan</button></a>
                        </center>
                      </td>
                      <td><left><?=$data['ket_tolak_surat']?></left></td>
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
