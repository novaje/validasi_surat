<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SURAT KET SEKOLAH</title>
  <link rel="shortcut icon" href="logo_rs.png" />
  </head>
</html>

<?php
    //ambil id
    $id_surat=$_GET['id_surat'];

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
    $query  = "SELECT * FROM surat_ket_sekolah WHERE id_surat ='$id_surat'";
    //hasil
    $hasil  = $con->query($query);

    //uraikan
    $row = $hasil->fetch_assoc();
?>
<style type="text/css">
    body {
        font-family: arial;
        background-color: #ccc;
    }
    .rangkasurat {
        width: 800px;
        margin: -30 auto;
        background-color: #fff;
        height: 1000px;
        padding: 30px;
    }
    table {
        border-bottom: 10px solid # 0;
        padding: 2px;
    }
    .tengah {
        text-align: center;
        line-height: 1px;
    }
  </style >
          <div class="rangkasurat">
              <table width="100%">
                  <tr>
                      <td>
                          <img src="../admin/img/logo_idi2.png" width="90px"></td>
                          <td class="tengah">
                          <h1>IKATAN DOKTER INDONESIA</h1>
                              <h3>(THE INDONESIAN MEDICAL ASSOCIATION)</h3>
                              <h1>PENGURUS CABANG DELI SERDANG</h1><br><br><br>
                              <p><b>Jalan Karya Asih Nomor 4 Komplek Perkantoran Pemerintahan Deli Serdang</b></p>
                              <b>Hp/Wa. 08537349165 Email : idideliserdang22@gmail.com</b></p>
                          </td>
                      </tr>
                  </div>
                </table>
                <hr>
                    <?php
                        $ambildata  = (mysqli_query($con,"SELECT * FROM surat_ket_sekolah WHERE id_surat ='$id_surat'"));
                        while($data=mysqli_fetch_array($ambildata)){
                    ?>
                    <h3><center><u>SURAT REKOMENDASI SEKOLAH</u><br>
                    No. <td><?=$data['inp_surat1']?>/ <td><?=$data['inp_surat2']?>/ Sekrs/IDI-DS/ <td><?=$data['inp_bulan']?>/ <td><?=$data['inp_tahun']?>
                    </center></h3>
                    
                    <br>
                    <table class="table table-striped" id="table-1">
                        <p style="text-align:justify">Yang bertanda tangan dibawah ini :</p>
                        <p>Pengurus Ikatan Dokter Indonesia (IDI) Cabang Deli Serdang dan Atas Dasar AD/ ART menerangkan bahwa :</p>
                    <tr>
                      <td> Nama Lengkap</td> 
                      <td> : </td>
                      <td><?=$data['inp_nama']?></td>
                      <br>
                    </tr>
                    
                    <tr>
                      <td> Tempat/ Tanggal Lahir</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_ttl']?></td>
                    </tr>

                      <tr>
                      <td> Reg. IDI Deli Serdang</td> 
                      <td> : </td>
                      <td><?=$data['no_reg']?></td>
                    </tr>

                    <tr>
                      <td> Lulusan/ Tahun</td> 
                      <td> : </td>
                      <td><?=$data['inp_lulusan']?></td>
                    </tr>

                    <tr>
                      <td> No. Ijazah</td> 
                      <td> : </td>
                      <td><?=$data['inp_ijazah']?></td>
                    </tr>

                    <tr>
                      <td> No. STR</td> 
                      <td> : </td>
                      <td><?=$data['inp_str']?></td>
                    </tr>

                    <tr>
                      <td> Jabatan</td> 
                      <td> : </td>
                      <td><?=$data['inp_jabatan']?></td>
                    </tr>

                    <tr>
                      <td> Alamat</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat']?></td>
                    </tr> 
              </thead>
            <?php
        };
          ?>
                  </table>

                  <?php
                        $ambildata  = (mysqli_query($con,"SELECT * FROM surat_ket_sekolah WHERE id_surat ='$id_surat'"));
                        while($data=mysqli_fetch_array($ambildata)){
                    ?>

                  <p style="text-align:justify">Adalah tercatat sebagai Anggota IDI Cabang Deli Serdang terhitung dari <?=$data['inp_terhitung_tgl']?></p>
                  sampai saat ini telah melaksanakan ketentuan yang tercantum dalam AD/ ART IDI dan Belum Pernah Melakukan Sanksi Organisasi dan Malpraktik Kedokteran.<br>
                  <p style="text-align:justify">Untuk itu kepada yang bersangkutan diberikan Rekomendasi untuk mengikuti Seleksi Program Pendidikan Dokter Spesialis (PPDS) <b><?=$data['inp_pendidikan_dokter']?><b>
                di <?=$data['inp_fakultas']?> </p> <br>
               
                <p>Lubuk Pakam, <?=$data['inp_keluar_surat']?> <br>Ketua Umum Terpilih <br>
                <img src="ttd_ketua/dr. Hanip Fahri.png" class="img-circle elevation-2" alt="User Image" width="80" height="80">
                <br>
                <?=$data['inp_ketua']?><br>
                NPA IDI. <?=$data['inp_npa_ketua']?></p>
                <br><br>
                <p>Tembusan</p>
                <ul>
                    <li>Arsip IDI</li>
                </ul>
                <?php
                    };
                ?>
              </div>
          </div>
      </div>
  </section>
</div>
<script>
  $(document).ready(function () {
    $('#daftarbuku').DataTable();
});
</script>