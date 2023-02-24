
<?php
include './koneksi/connection.php';
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="img/logo_idi2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">IDI-DELI SERDANG</span>
    </a>

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/logo_user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">dr. Asri Ludin Tambunan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Management Surat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <?php 
                $data_surat = mysqli_query($con,"SELECT * FROM surat_ket_etika WHERE status='0'");
                $jumlah_pending = mysqli_num_rows($data_surat);
                ?>
                <a href="daftar_surat_etika.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Keterangan Etika</p>
                  <span class="badge badge-info right"><?php echo $jumlah_pending; ?></span>
                </a>
              </li>
              <?php 
                $data_surat = mysqli_query($con,"SELECT * FROM surat_ket_sekolah WHERE status='0'");
                $jumlah_pending = mysqli_num_rows($data_surat);
                ?>
              <li class="nav-item">
                <a href="daftar_surat_sekolah.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Ket.Sekolah</p>
                  <span class="badge badge-info right"><?php echo $jumlah_pending; ?></span>
                </a>
              </li>
              <?php 
                $data_surat = mysqli_query($con,"SELECT * FROM surat_ket_luarkota WHERE status='0'");
                $jumlah_pending = mysqli_num_rows($data_surat);
                ?>
              <li class="nav-item">
                <a href="daftar_surat_luarKota.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Ket.Keluar Kota</p>
                  <span class="badge badge-info right"><?php echo $jumlah_pending; ?></span>
                </a>
              </li>
              <?php 
                $data_surat = mysqli_query($con,"SELECT * FROM surat_mutasi WHERE status='0'");
                $jumlah_pending = mysqli_num_rows($data_surat);
                ?>
              <li class="nav-item">
                <a href="daftar_surat_mutasi.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Ket.Pindah Anggota</p>
                  <span class="badge badge-info right"><?php echo $jumlah_pending; ?></span>
                </a>
              </li>
              <?php 
                $data_surat = mysqli_query($con,"SELECT * FROM form_surat_izin_ds WHERE status='0'");
                $jumlah_pending = mysqli_num_rows($data_surat);
                ?>
              <li class="nav-item">
                <a href="daftar_surat_sip_ds.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Rekom SIP DS</p>
                  <span class="badge badge-info right"><?php echo $jumlah_pending; ?></span>
                </a>
              </li>
              <?php
                $data_surat = mysqli_query($con,"SELECT * FROM form_surat_izin_medan WHERE status='0'");
                $jumlah_pending = mysqli_num_rows($data_surat);
                ?>
              <li class="nav-item">
                <a href="daftar_surat_sip_medan.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Rekom SIP Medan</p>
                  <span class="badge badge-info right"><?php echo $jumlah_pending; ?></span>
                </a>
              </li>
              
            </ul>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
<!-- /.sidebar -->
</aside>