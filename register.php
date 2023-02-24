<?php
include 'koneksi/connection.php';

error_reporting(0);

session_start();
if(isset($_SESSION['username'])) {
  header("login.php");
}

if (isset($_POST['submit'])) {
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = md5($_POST['password']);
    $cpassword  = md5($_POST['cpassword']);
    $level      = $_POST['level'];
    $no_ktp     = $_POST['no_ktp'];
    $no_npm     = $_POST['no_npm'];
    $createBy   = $_POST['createBy'];

    if ($password == $cpassword) {
      $sql1     = "SELECT * FROM admin_idi WHERE email='$email'";
      $result1  = mysqli_query($con, $sql1);
      if (!$result1->num_rows > 0) {
        $sql    = "INSERT INTO admin_idi (username, email, password, level,no_ktp,no_npm,createBy)
                VALUES ('$username', '$email', '$password','$level','$no_ktp','$no_npm','$createBy')";
        $result = mysqli_query($con, $sql);
      if ($result) {
        echo "<script>alert('Wow! Anda Berhasil Registrasi!.')</script>";
        $username = "";
        $email    = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";

      } else {
          echo "<script>alert('Wooopps! .')</script>";
        }
      } else {
          echo "<script>alert('Wooopps!!!! .')</script>";
        }
    } else {
      echo "<script>alert('Wooopps! Password Anda Salah.')</script>";
      }
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Registrasi - IDI Deli Serdang</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../../vendors/feather/feather.css">
        <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="csss/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/logo_rs.png"/>
    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-10 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="img/logo_idi.png" alt="logo">
                                </div>
                                <h4>REGISTRASI - IDI</h4>
                                <h6 class="font-weight-light">Deli Serdang</h6>
                                <form action="" method="POST" class="pt-3">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            name="username"
                                            placeholder="Username"
                                            value="<?php echo $username; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="email"
                                            class="form-control form-control-lg"
                                            name="email"
                                            placeholder="Email"
                                            value="<?php echo $email; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="hidden"
                                            class="form-control form-control-lg"
                                            name="password"
                                            placeholder="Password"
                                            value="deliserdang">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="hidden"
                                            class="form-control form-control-lg"
                                            name="cpassword"
                                            placeholder="Confirm Password"
                                            value="deliserdang">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            name="no_npm"
                                            placeholder="No NPM"
                                            value="<?php echo $no_npm; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control form-control-lg"
                                            name="no_ktp"
                                            placeholder="No KTP/SIM/KITAS"
                                            value="<?php echo $no_ktp; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="hidden"
                                            class="form-control form-control-lg"
                                            name="createBy"
                                            placeholder="createBy"
                                            value="<?php echo $_SESSION['username'] ?>">
                                    </div>
                                    <div class="form-group">
                                       <select type hidden class="form-control" name="level" id="level">
                                        <option value="">--PILIH AKSES--</option>
                                        <option value="admin" <?php if($level== "admin"){ echo 'selected'; } ?>>Admin</option>
                                        <option value="tamu" <?php if($level== "tamu"){ echo 'selected'; } ?>>Tamu</option>
                                    </select>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input type="checkbox" class="form-check-input">
                                                I agree to all Terms & Conditions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button
                                            name="submit"
                                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                            Registrasi
                                        </button>
                                    </div>
                                    <!-- <div class="mt-3"> <a class="btn btn-block btn-primary btn-lg
                                    font-weight-medium auth-form-btn" href="login.php">SIGN UP</a> </div> -->
                                    <div class="text-center mt-4 font-weight-light">
                                        Already have an account?
                                        <a href="login.php" class="text-primary">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../js/off-canvas.js"></script>
        <script src="../../js/hoverable-collapse.js"></script>
        <script src="../../js/template.js"></script>
        <script src="../../js/settings.js"></script>
        <script src="../../js/todolist.js"></script>
        <!-- endinject -->
    </body>

</html>
