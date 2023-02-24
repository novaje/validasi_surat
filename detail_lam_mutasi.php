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
    //ambil id
    $id_mutasi=$_GET['id_mutasi'];

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
    $query  = "SELECT * FROM lampiran_mutasi WHERE id_mutasi='$id_mutasi'";
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
          <h3 style="text-align:center">DETAIL REKOMENDASI MUTASI</h3>
            <table border="1" id="daftarbuku" class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="3"><center>Nama Lengkap</center></th>
                  <th colspan="15"><center>Data Upload</center></th>
                </tr>
                
                <tr>
                  <th><center>Formulir Permohonan Mutasi</center></th>
                  <th><center>Pas Foto 3x4</center></th>
                  <th><center>Fotocopy KTP</center></th>
                  <th><center>Fotocopy KTA IDI Deli Serdang</center></th>
                  <th><center>Fotocopy KTA IDI</center></th>
                  <th><center>Fotocopy Ijazah</center></th>
                  <th><center>Fotocopy STR</center></th>

                  <th rowspan="3"><center>Aksi</center></th>
                </tr>
                
              </thead>
              <tbody>
                <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM lampiran_mutasi WHERE id_mutasi='$id_mutasi'"));
                while($data=mysqli_fetch_array($ambildata)){
                  ?> 
                  <tr>
                    <td><center><?=$data['inp_nama']?></center></td>
                    <td><center><a href="berkas_pindah_anggota/<?php echo $data['inp_formulir']; ?>"><?php echo $data['inp_formulir']; ?></td>
                    <td><left><a href="berkas_pindah_anggota/<?php echo $data['inp_pas_foto']; ?>"><?php echo $data['inp_pas_foto']; ?></left></td>
                    <td><left><a href="berkas_pindah_anggota/<?php echo $data['inp_ktp']; ?>"><?php echo $data['inp_ktp']; ?></left></td>
                    <td><left><a href="berkas_pindah_anggota/<?php echo $data['inp_kta_deli_serdang']; ?>"><?php echo $data['inp_kta_deli_serdang']; ?></left></td>
                    <td><left><a href="berkas_pindah_anggota/<?php echo $data['inp_pusat']; ?>"><?php echo $data['inp_pusat']; ?></left></td>
                    <td><left><a href="berkas_pindah_anggota/<?php echo $data['inp_ijazah']; ?>"><?php echo $data['inp_ijazah']; ?></left></td>
                    <td><left><a href="berkas_pindah_anggota/<?php echo $data['inp_str']; ?>"><?php echo $data['inp_str']; ?></left></td>
                    
                    <td><center>
                      <?php
                      $query  = "SELECT * FROM lampiran_mutasi WHERE id_mutasi='$id_mutasi'";
                      $run    = mysqli_query($con,$query);
                      ?>
                      <a href="verif.php?id_mutasi=<?=$data['id_mutasi']?>"><button type="button" class="btn btn-success">VERIFIKASI</button></a>
                      </center>
                      </td>
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