<?php include 'include/java.php'; ?>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DETAIL LAMPIRAN</title>
  <link rel="shortcut icon" href="logo_rs.png" />

  </head>
</html>

<?php
    // ambil id
    $id_lampiran=$_GET['id_lampiran'];

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
    $query  = "SELECT * FROM lampiran_form_anggota WHERE id_lampiran='$id_lampiran'";
    //hasil
    $hasil  = $con->query($query);

    //uraikan tb_perpust
    $row = $hasil->fetch_assoc();
?>
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
          <h3 style="text-align:center">DETAIL REKOMENDASI ANGGOTA BARU</h3>
            <table border="1" id="daftarbuku" class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="2"><center>Nama Lengkap</center></th>
                  <th colspan="10"><center>Data Upload</center></th>
                </tr>
                
                <tr>
                  <th><center>Form Permhononan</center></th>
                  <th><center>Fotocopy STR</center></th>
                  <th><center>Fotocopy Ijazah</center></th>
                  <th><center>Fotocopy KTP/ surat keterangan domisili</center></th>
                </tr>
                
              </thead>
              <tbody>
                <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM lampiran_form_anggota WHERE id_lampiran='$id_lampiran'"));
                while($data=mysqli_fetch_array($ambildata)){
                  ?> 
                  <tr>
                    <td><center><?=$data['inp_nama']?></center></td>
                    <td><center><a href="berkas/<?php echo $data['inp_permohonan']; ?>"><?php echo $data['inp_permohonan']; ?></td>
                    <td><left><a href="berkas/<?php echo $data['inp_str']; ?>"><?php echo $data['inp_str']; ?></left></td>
                    <td><left><a href="berkas/<?php echo $data['inp_ijazah']; ?>"><?php echo $data['inp_ijazah']; ?></left></td>
                    <td><left><a href="berkas/<?php echo $data['inp_ktp']; ?>"><?php echo $data['inp_ktp']; ?></left></td>
                    </tr>
                    <?php
                  };
                  ?>
                </tbody>
              </table>
            </div>
          </div>
      </section>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>

  </body>
  </html>