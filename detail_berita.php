
<?php
    //ambil_id
    $id_berita=$_GET['id_berita'];

    //variabel koneksi
    include 'koneksi/connection.php';

    //cek db
    if ($con->connect_error) {
        die("Connection Failed: " . $con->connect_error);
    }

    //query
    $query  = "SELECT * FROM berita_web WHERE id_berita ='$id_berita'";
    //hasil
    $hasil  = $con->query($query);
    //uraikan
    $row = $hasil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>IDI - CABANG DELI SERDANG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com"></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="../assets/img/logo_idi.png">
        <h1>IKATAN DOKTER INDONESIA<p>Cabang Deli Serdang</p></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../index.php #tentang">Tentang</a></li>
          <li><a href="../index.php #berita">Berita</a></li>
          <li><a href="../index.php #galeri">Galeri</a></li>
          <li class="dropdown"><a href="#"><span>Pelayanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
          <li><a href="../rekomendasi_sip.php">Rekomendasi SIP</a></li>
          <li><a href="../anggotabaru.php">Registrasi Anggota Baru/Ulang</a></li>
          <li><a href="./pelayanan/ket_sekolah.php">Syarat Keterangan Sekolah</a></li>
          <li><a href="./pelayanan/ket_keluar_kota.php">Syarat Keterangan Keluar Kota</a></li>
          <li><a href="./pelayanan/ket_mutasi.php">Syarat Keterangan Mutasi</a></li>
        </ul>
      </li>
          <li><a href="login.php">Login</a></li>
    </ul>
  </li>
</ul>
</nav><!-- .navbar -->
</div>
</header>
<!-- End Header -->
<br><br><br><br>
    <div class="container" data-aos="fade-up">
      <div class="section-header">
      <?php
            $ambildata  = (mysqli_query($con,"SELECT * FROM berita_web WHERE id_berita='$id_berita'"));
            while($data=mysqli_fetch_array($ambildata)){
            ?>
            <h2><?php echo $data['judul_berita'] ?></h2>
            <?php echo $data['judul_berita'] ?>
            <p style="text-align:justify"><?php echo $data['isi_berita'] ?></p>
            </div>
          </div>
          <?php } 
                ?>
      </div>
</div>
</div>
</div>
</div>
<br><br><br><br>
<!-- ======= Footer ======= --> 
<footer id="footer" class="footer">
  <div class="container">
    <div class="row gy-2">
      <div class="col-lg-5 col-md-10 footer-info">
        <a href="index.php" class="logo d-flex align-items-center">
<img src="../assets/img/logo_idi.png">
<span>Sekretariat IDI-Deli Serdang</span></a>
  <p>Jl. Lintas Sumatra/ Jl. Medan - Lubuk Pakam/ Jl. Medan - Pematang Siantar/ Jl. Medan - Tebing Tinggi/ Jl. Raya Medan/ Jl. Tj. Morawa.</p></br>
  <a href="https://www.google.com/maps/place/Kantor+IDI+Cab+Deli+Serdang/@3.5415368,98.801156,13z/am=t/data=!4m19!1m13!4m12!1m4!2m2!1d98.803205!2d3.529186!4e1!1m6!1m2!1s0x303149b5e6e29c5f:0x971c4b926868337!2sGVW9%2BG38+Kantor+IDI+Cab+Deli+Serdang,+Perbarakan,+Pagar+Merbau,+Deli+Serdang+Regency,+North+Sumatra+20515!2m2!1d98.867708!2d3.5462848!3m4!1s0x303149b5e6e29c5f:0x971c4b926868337!8m2!3d3.5462848!4d98.867708?hl=en-GB" class="lokasi"><i class="bi bi-geo-alt-fill"></i>Lokasi Kami</a>
  <div class="social-links d-flex mt-4">
  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
</div>
</div>
    <div class="col-lg-2 col-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>
    </div>
    <div class="col-lg-2 col-2">           
    <h4>Contact Us</h4>
      <!-- <p> A108 Adam Street <br> New York, NY 535022<br> United States <br><br>-->
      <strong>Phone:</strong><br>+62 852-7060-2462<br>
      <strong>Email:</strong><br></p>
    </div>
</div>
    <div class="container mt-4"><div class="copyright">&copy; Copyright<strong>
      <span>IT Development</span></strong>. All Rights Reserved</div>
      <div class="credits"><!-- All the links in the footer should remain intact. --><!-- You can delete the links only if you purchased the pro version. --><!-- Licensing information: https://bootstrapmade.com/license/ --><!--Purchase the pro version with working PHP/AJAX contact form:https://bootstrapmade.com/impact-bootstrap-business-website-template/ --><!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
    </div>
    </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js">
  </script><script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script></body></html>
