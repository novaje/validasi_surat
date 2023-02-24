
<?php
include './koneksi/connection.php';

if(!isset($_SESSION['username'])) {
  header ("Location: login.php");
}
?>

<?php
$username = $_SESSION['username'];
$query_user = mysqli_query($con,"SELECT * FROM admin_idi WHERE username='$username'");
$data_user = mysqli_fetch_assoc($query_user);
?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="img/logo_idi2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">IDI-DELI SERDANG</span>
    </a>

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/logo_user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Website</li>
          <li class="nav-item has-treeview menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="404.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tentang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="berita_web.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="galeri.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="bakti_sosial.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bakti Sosial
              </p>
            </a>
          </li>
          <li class="nav-header">Admin</li>
          <li class="nav-item">
            <a href="format_permohonan.php" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Format Permohonan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="webinar.php" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Webinar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="panduan_rekomendasi.php" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Panduan Rekomendasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="notifikasi.php" class="nav-link">
            <i class="nav-icon fa fa-solid fa-bell"></i>
              <p>
                Notifikasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="peserta_idi.php" class="nav-link">
            <i class="nav-icon fas fa-user-md"></i>
              <p>
                Daftar Anggota IDI
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kontak_person.php" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
              <p>
                Kontak Person
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ajukan_permohonan.php" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Ajukan Permohonan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Validasi Permohonan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="validasi_rekom_anggota.php" class="nav-link">
                  <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Rekom Anggota Baru/Mutasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="status_rekomendasi.php" class="nav-link">
                  <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Rekom SIP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_rekom_sekolah.php" class="nav-link">
                  <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Rekom Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_rekom_keluarKota.php" class="nav-link">
                  <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Rekom Ket Keluar Kota</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Form Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="form_ket_etika.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Form Keterangan Etika</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_surat_mutasi.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Form Ket.Pindah Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_ket_luarKota.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Form Ket.Keluar Kota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_ket_sekolah.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Form Ket.Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_sip_ds.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Form SIP Cab.DS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_sip_medan.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Form SIP Cab.Medan</p>
                </a>
              </li>
            </ul>
          </li>
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
                <a href="daftar_surat_etika.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Keterangan Etika</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_surat_sekolah.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Ket.Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_surat_luarKota.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Ket.Keluar Kota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_surat_mutasi.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Ket.Pindah Anggota</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_surat_sip_ds.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Rekom SIP DS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="daftar_surat_sip_medan.php" class="nav-link">
                <i class="fas fa-dot-circle nav-icon"></i>
                  <p>Surat Rekom SIP Medan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Master Data</li>
          <li class="nav-item">
            <a href="data_user.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log-out
              </p>
            </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
<!-- /.sidebar -->
</aside>