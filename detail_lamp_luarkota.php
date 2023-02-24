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
    $id_luarKota=$_GET['id_luarKota'];

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
    $query  = "SELECT * FROM lampiran_luarkota WHERE id_luarKota='$id_luarKota'";
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
          <h3 style="text-align:center">DETAIL REKOMENDASI KELUAR KOTA</h3>
            <table border="1" id="daftarbuku" class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="3"><center>Nama Lengkap</center></th>
                  <th colspan="15"><center>Data Upload</center></th>
                </tr>
                
                <tr>
                  <th><center>Formulir Pernyataan Praktik</center></th>
                  <th><center>Pas Foto 3x4</center></th>
                  <th><center>Fotocopy KTP</center></th>
                  <th><center>Fotocopy KTA IDI Deli Serdang</center></th>
                  <th><center>Fotocopy KTA IDI Pusat (NPA)</center></th>
                  <th><center>Fotocopy Ijazah</center></th>
                  <th><center>Fotocopy STR</center></th>
                  <th><center>Surat Persetujuan</center></th>
                  <th><center>Surat Keterangan dari Perhimpunan</center></th>
                  <th><center>Surat Keterangan dari Instansi</center></th>
                  <th><center>Fotocopy Surat Izin Praktik</center></th>
                </tr>
                
              </thead>
              <tbody>
                <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM lampiran_luarkota WHERE id_luarKota='$id_luarKota'"));
                while($data=mysqli_fetch_array($ambildata)){
                  ?> 
                  <tr>
                    <td><center><?=$data['inp_nama']?></center></td>
                    <td><center><a href="berkas_luar_kota/<?php echo $data['inp_formulirPernyataan']; ?>"><?php echo $data['inp_formulirPernyataan']; ?></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['pas_foto']; ?>"><?php echo $data['pas_foto']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_ktp']; ?>"><?php echo $data['inp_ktp']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_kta_deliSerdang']; ?>"><?php echo $data['inp_kta_deliSerdang']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_kta_pusat']; ?>"><?php echo $data['inp_kta_pusat']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_ijazah']; ?>"><?php echo $data['inp_ijazah']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_str']; ?>"><?php echo $data['inp_str']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_suratPersetujuan']; ?>"><?php echo $data['inp_suratPersetujuan']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_keteranganPerhimpunan']; ?>"><?php echo $data['inp_keteranganPerhimpunan']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_ketaranganInstansi']; ?>"><?php echo $data['inp_ketaranganInstansi']; ?></left></td>
                    <td><left><a href="berkas_luar_kota/<?php echo $data['inp_sip']; ?>"><?php echo $data['inp_sip']; ?></left></td>
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