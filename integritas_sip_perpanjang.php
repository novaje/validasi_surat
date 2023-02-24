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
    <title>FAKTA INTEGRITAS</title>
    <link rel="shortcut icon" href="./img/logo_idi2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
/* Custom style to set icon size */
.alert i[class^="bi-"]{
  font-size: 1.5em;
  line-height: 1;
}
</style>
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
        <div class="container">
		<div class="row">
			<!-- Main content -->
            <section class="content">
      <div class="container-fluid">
        
        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline item -->
              <div>
                <div class="timeline-item">
                  <h3 class="timeline-header"><a href="#">FAKTA INTEGRITAS</a></h3>

                  <div class="timeline-body" style="text-align:justify">
                  Adalah benar merupakan pribadi/pimpinan dari lembaga/institusi/perusahaan tersebut diatas yang untuk selanjutnya bertindak untuk dan atas nama pribadi/lembaga/institusi/perusahaan sebagai pemohon izin.
                    Dalam rangka mewujudkan pelayanan prima pada DPMPPTSP Kabupaten Deli Serdang, saya menyatakan bersedia untuk : <br>
                    1. Tidak menjanjikan dan atau memberikan dan atau akan memberikan kepada petugas/pegawai/pejabat DPMPPTSP Kabupaten Deli Serdang, segala bentuk pemberian/gratifikasi atas layanan jasa yang dimohonkan kepada DPMPPTSP Kabupaten Deli Serdang;<br>
                    2. Tidak mempergunakan jasa calo, kecuali biro jasa yang berbadan hukum dalam hal pengurusan perizinan;<br>
                    3. Tidak melakukan segala bentuk pembayaran tidak sah kepada petugas/pegawai/pejabat DPMPPTSP Kabupaten Deli Serdang dalam pengurusan perizinan, kecuali diatur dalam perda No. 6 Tahun 2011 tentang Perizinan Tertentu dan peraturan perundang-undangan;<br>
                    4. Mematuhi Standar Operasional Prosedur (SOP) yang berlaku dalam pengurusan perizinan;<br>
                    5. Menyatakan bahwa segala data, dokumen, informasi, keterangan atas pengajuan permohonan yang saya serahkan adalah benar dan tidak dalam status sengketa dengan pihak lain. Apabila ternyata tidak sesuai atau tidak benar, maka produk hukum yang diterbitkan berdasarkan permohonan ini adalah tidak sah dengan sendirinya dan bersedia bertanggung jawab sesuai hukum yang berlaku tanpa melibatkan petugas/pegawai/pejabat DPMPPTSP Kabupaten Deli Serdang;<br>
                    6. Menyatakan dengan sebenarnya bahwa saya belum pernah bermohon diterbitkan izin yang sejenis di atas alamat yang dimohonkan;<br>
                    7. Apabila terbukti adanya pelanggaran terhadap Pakta Integritas ini, saya atas nama pribadi/lembaga/institusi/perusahaan bersedia untuk diproses berdasarkan peraturan perundang-undangan yang berlaku.<br>


                Pakta Integritas ini dibuat ditandatangani tanpa adanya paksaan dari pihak lain, untuk dapat dipergunakan sebagaimana mestinya.<br>
                  </div>

                  <form role="form" action="simpan_integritas_perpanjang.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                    <div class="form-group">
                        <label for="nomor">No. NPA IDI</label>
                        <input type="text" name="no_npa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="inp_nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Status</label>
                        <input type="text" name="status" class="form-control" value="PERPANJANG SIP" readonly>
                    </div>
                    <div class="form-group">
                      <label for="nama">Jenis Keanggotaan</label>
                      <select class="form-control" name="jenis_keanggotaan">
                        <option>---</option>
                        <option>Anggota</option>
                        <option>Non Anggota</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Bukti Pembayaran Iuran IDI</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="bukti_iuran" class="form-control" accept="application/pdf">
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button class="btn btn-success" type="submit">Submit</button>
                </div>
              </form>
                </div>
              </div>
              <!-- END timeline item -->
              <div>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
          </div>
        </div>
      </section>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
		$('#test').on('change', function () {
		          var url = $(this).val(); // mendapatkan nilai value
		          if (url) { // reques URL
		              window.location = url; // pindah ke halaman yang dituju
		          }
		          return false;
		    });		 
	</script>
  </body>
  </html>
<?php } ?>
