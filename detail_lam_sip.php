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
    $id_lampiran_sip=$_GET['id_lampiran_sip'];

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
    $query  = "SELECT * FROM lampiran_sip WHERE id_lampiran_sip='$id_lampiran_sip'";
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
          <h3 style="text-align:center">DETAIL REKOMENDASI SIP</h3>
            <table border="1" id="daftarbuku" class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th rowspan="3"><center>Nama Lengkap</center></th>
                  <th colspan="15"><center>Data Upload</center></th>
                </tr>
                
                <tr>
                  <th><center>Permohonan Rekomendasi SIP</center></th>
                  <th><center>Surat Pernyataan Tempat Praktik</center></th>
                  <th><center>Pas Foto 3x4</center></th>
                  <th><center>Fotocopy KTP</center></th>
                  <th><center>Fotocopy KTA IDI & KTA IDI</center></th>
                  <th><center>Fotocopy Ijazah</center></th>
                  <th><center>Surat Pencabutan STR</center></th>
                  <th><center>Surat Keterangan</center></th>
                  <th><center>Biaya Administrasi</center></th>
                </tr>
                
              </thead>
              <tbody>
                <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM lampiran_sip WHERE id_lampiran_sip='$id_lampiran_sip'"));
                while($data=mysqli_fetch_array($ambildata)){
                  ?> 
                  <tr>
                    <td><center><?=$data['inp_nama']?></center></td>
                    <td><center><a href="berkas_sip/<?php echo $data['surat_rekomendasi']; ?>"><?php echo $data['surat_rekomendasi']; ?></td>
                    <td><left><a href="berkas_sip/<?php echo $data['surat_tempat_praktik']; ?>"><?php echo $data['surat_tempat_praktik']; ?></left></td>
                    <td><left><a href="berkas_sip/<?php echo $data['pas_foto']; ?>"><?php echo $data['pas_foto']; ?></left></td>
                    <td><left><a href="berkas_sip/<?php echo $data['fc_ktp']; ?>"><?php echo $data['fc_ktp']; ?></left></td>
                    <td><left><a href="berkas_sip/<?php echo $data['fc_kta']; ?>"><?php echo $data['fc_kta']; ?></left></td>
                    <td><left><a href="berkas_sip/<?php echo $data['fc_ijazah']; ?>"><?php echo $data['fc_ijazah']; ?></left></td>
                    <td><left><a href="berkas_sip/<?php echo $data['fc_pencabutan_str']; ?>"><?php echo $data['fc_pencabutan_str']; ?></left></td>
                    <td><left><a href="berkas_sip/<?php echo $data['keterangan_tempatPraktik']; ?>"><?php echo $data['keterangan_tempatPraktik']; ?></left></td>
                    <td><left><a href="berkas_sip/<?php echo $data['biaya_administrasi']; ?>"><?php echo $data['biaya_administrasi']; ?></left></td>
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