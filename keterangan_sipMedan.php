<?php
include 'koneksi/connection.php';
include 'include/java.php';
include 'include/sidebar.php';

?>

<?php $id_surat=$_GET['id_surat'];?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ket SIP Medan </title>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <?php
        $ambildata  = (mysqli_query($con,"SELECT * FROM form_surat_izin_medan WHERE id_surat='$id_surat'"));
        while($data=mysqli_fetch_array($ambildata)){
    ?>   
          <h3 class="card-title"><u>Surat Pernyataan SIP Ini di tolak</u> <br>
            Nama Dokter : <td><left><?=$data['inp_nama']?></left></td>
          </h3>
          <?php
            };
        ?>
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
                        <textarea name="ket_tolak_surat" value="" class="form-control" rows="8" style="width:500px;" style="height:200px;" placeholder="..."></textarea>
                      </div>
                      <button type="submit" name="save" value="save" class="btn btn-sm btn-primary">SAVE</a>
                    </div>
                  </div>
                </form>

                <?php
                if(isset($_POST['save'])) {
                    $ket_tolak_surat = $_POST['ket_tolak_surat'];
                    $q = "UPDATE form_surat_izin_medan ket_tolak_surat SET ket_tolak_surat='$ket_tolak_surat' WHERE id_surat='$id_surat'";
                    $result = mysqli_query($con, $q);

                    echo '<script type ="text/JavaScript">';
                    echo ' alert ("Keterangan Tolak Surat Berhasil Disimpan!")';
                    echo '</script>';
                    
                    echo '<script type ="text/JavaScript">';  
                    echo ' window.location.href="daftar_surat_sip_medan.php?id='.$id_surat.'"';  
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