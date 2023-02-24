<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SURAT KET ETIKA</title>
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
    $query  = "SELECT * FROM surat_ket_luarkota WHERE id_surat='$id_surat'";
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
        height: 950px;
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
                        $ambildata  = (mysqli_query($con,"SELECT * FROM surat_ket_luarkota WHERE id_surat='$id_surat'"));
                        while($data=mysqli_fetch_array($ambildata)){
                    ?>
                    <h3><center><u>SURAT KETERANGAN</u><br>
                    No. <?=$data['inp_no_surat1']?>/<?=$data['inp_no_surat2']?>/Sekrs/IDI-DS/<?=$data['inp_bulan']?>/<?=$data['inp_tahun']?>
                    </center></h3>
                    
                    <br>
                    <table class="table table-striped" id="table-1">
                        <p style="text-align:justify">Setelah memperhatikan daftar isian rekomendasi sejawat dan pernyataan diri yang bersangkutan, Majelis 
                            Kehormatan Etik Kedokteran (MKEK) IDI Cabang Deli Serdang berkesimpulan bahwa Teman Sejawat : </p>
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
                      <td> Alamat</td> 
                      <td> : </td>
                      <td><?=$data['Alamat']?></td>
                    </tr>

                    <tr>
                      <td> No. Ijazah</td> 
                      <td> : </td>
                      <td><?=$data['inp_ijazah']?></td>
                    </tr>

                    <tr>
                      <td> No. STR Terbaru</td> 
                      <td> : </td>
                      <td><?=$data['inp_str']?></td>
                    </tr>
                    <tr>
                      <td> Adalah benar Anggota IDI Cabang Deli Serdang,</td> 
                    </tr>
                    <tr>
                      <td> Dengan No. Registrasi</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_regis']?></td>
                    </tr>

                    <tr>
                      <td> NPA IDI</td> 
                      <td> : </td>
                      <td><?=$data['inp_npa']?></td>
                    </tr>

                    <tr>
                      <td> Pekerjaan</td> 
                      <td> : </td>
                      <td><?=$data['inp_pekerjaan']?></td>
                    </tr>

                    <tr>
                      <td> Instansi Bekerja</td> 
                      <td> : </td>
                      <td><?=$data['inp_instansi']?></td>
                    </tr>
              </thead>
            <?php
        };
          ?>
                  </table>
                  <?php
                    $ambildata  = (mysqli_query($con,"SELECT * FROM surat_ket_luarkota WHERE id_surat='$id_surat'"));
                    while($data=mysqli_fetch_array($ambildata)){
                    ?>
                  <p style="text-align:justify">Yang akan melakukan Praktik dokter Umum yang ke-II Di <?=$data['inp_tujuan']?>.<br>
                  <p style="text-align:justify">Disamping itu menurut data kami, dokter tersebut :</p>
                  <ul>
                    <li>Telah Melunasi Iuran Anggota <b><u><?=$data['inp_tgl_iuran']?></u></b></li>
                    <li>Telah Melaksanakan Semua Kewajiban Organisasi dengan baik</li>
                    <li>Tidak Sedang Menjalani Sangsi Organisasi dengan Baik</li>
                    <li>Tidak Pernah Melakukan Malpraktik di Wilayah Deli Serdang</li>
                </ul>
                <p>Demikianlah Surat Keterangan ini diperbuat sebagai lampiran dalam mengurus Rekomendasi Surat Izin Pratik (SIP) di Cabang tempat tujuan tersebut.</p>

                    <p>Lubuk Pakam, <?=$data['inp_tgl_real']?> <br><b>Ketua Umum Terpilih</b></p> <br><br><br>
                <p><b><h4><?=$data['inp_ketua']?><b><br>NPA. IDI: <?=$data['inp_npa_ketua']?></p></h4> <br><br>
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