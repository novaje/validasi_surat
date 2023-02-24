<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perpustakaan</title>
  <link rel="shortcut icon" href="logo_rs.png" />
  <a href="daftar_buku.php"> <input type="button" class="btn btn-primary btn-sm" value='Kembali'></a>
  </head>
</html>

<?php
    //ambil id
    // $kode_buku = $_GET['kode_buku'];

    // echo $id_perpustakaan;

    //variabel koneksi
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'web_idi';

    //koneksi
    $con = mysqli_connect($host,$user,$pass,$dbname);

    //cek db
    if ($con->connect_error) {
        die("Connection Failed: " . $con->connect_error);
    }

    //query
    $query  = "SELECT * FROM form_anggota_baru";
    //hasil
    $hasil  = $con->query($query);

    //uraikan tb_perpust
    $row = $hasil->fetch_assoc();
?>

                <!-- <div class="col-12"> -->
                  <!-- <div class="card-body" col="10">
                <table border = "1" id="daftarbuku" class="table table-bordered table-hover">
                  <thead>
                    <tr> -->
        <tr>
        <td style="padding:0px">
          <span style="font-weight:bold">
            DATA</i>
          </span>
        </td>
      </tr>
      <table class="tableForm" border="0" style="border-collapse:collapse;width:100%;text-align:left;vertical-align:top;padding:10px">
      <tr>
      <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_anggota_baru"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
        

        <td> Nama / <i>Name</i> </td>
        <td> : </td>
        <td><center><?=$data['inp_nama']?></center></td>
      </tr>
      <tr>
        <td> Umur / <i>Age</i> </td>
        <td> : </td>
        <!-- <td class="borderData"> <?= $Loadmcu['umur'] ?>  </td> -->
        <tbody>
              <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_anggota_baru"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
            <tr>
                <td><center><?=$data['kode_buku']?></center></td>
                <td><center><?=$data['nama_buku']?></center></td>
                <td><center><?=$data['keterangan']?></center></td>
                <td><center><?=$data['file']?></center></td>
            </tr>
            <?php
        };
          ?>
        </tbody>
      </tr>
              </thead>
              <tbody>
              <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_anggota_baru"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
            <tr>
                <td><center><?=$data['kode_buku']?></center></td>
                <td><center><?=$data['nama_buku']?></center></td>
                <td><center><?=$data['keterangan']?></center></td>
                <td><center><?=$data['file']?></center></td>
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
  <!--  -->
<script>
  $(document).ready(function () {
    $('#daftarbuku').DataTable();
});
</script>