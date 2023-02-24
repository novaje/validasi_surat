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
    <title>BERITA</title>
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
        <div class="row">
          <div class="col-12">
        <?php 
            $query = "SELECT * FROM berita_web ORDER BY id_berita";
            $result = mysqli_query($con, $query);
        ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <a href="tambah_berita.php" class="btn btn-primary mb-2">
        <svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1 m">
            <path fill="#fff" d="M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
        </svg> Tambah Berita
        </a>
    <div class="card card-solid">
    <div class="box_table">
      <table class="table table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Tanggal Berita</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th width="20%">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while($data = mysqli_fetch_array($result)) : ?>
          <tr>
              <td><?= $no ?></td>
              <td><?=$data['tanggal_berita']?></td>
              <td><?=$data['judul_berita']?></td>
              <td><?=$data['isi_berita']?></td>
              <td>
					<a href="hapus_berita.php?id_berita=<?=$data['id_berita'] ?>" class="btn btn-danger m1">
					<svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1">
					    <path fill="#fff" d="M20.37,8.91L19.37,10.64L7.24,3.64L8.24,1.91L11.28,3.66L12.64,3.29L16.97,5.79L17.34,7.16L20.37,8.91M6,19V7H11.07L18,11V19A2,2 0 0,1 16,21H8A2,2 0 0,1 6,19Z" />
					</svg> Delete</a>
				</td>
          </tr>

          <?php $no++ ?>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm To Delete Data</h5>
      </div>
      <div class="modal-body">
        <p>Are you sure ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a type="button" class="btn btn-danger" id="deleteButtonModal">Delete Now!</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function alertDelete(idn) {
	$('#deleteButtonModal').attr('href', '<?= $WEB_CONFIG['base_url'] ?>index.php?page=delete&id='+idn);
	$('#deleteModal').modal('show');
}
</script>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
<!-- <div class="col-12"> -->

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
