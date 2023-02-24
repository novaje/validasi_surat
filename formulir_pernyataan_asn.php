<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SURAT PERNYATAAN</title>
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
    $query  = "SELECT * FROM form_asn WHERE id_lampiran_sip='$id_lampiran_sip'";
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
                          <td class="tengah">
                          <h1>SURAT PERNYATAAN</h1>
                          </td>
                      </tr>
                  </div>
                </table>
                <hr>
                    <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_asn WHERE id_lampiran_sip='$id_lampiran_sip'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                    <table class="table table-striped" id="table-1">
                      <p></p>
                    <tr>
                      <td> Nama Lengkap</td> 
                      <td> : </td>
                      <td><?=$data['inp_nama']?></td>
                      <br>
                    </tr>
                    
                    <tr>
                      <td> Tempat/ Tanggal Lahir</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_tempat_lahir']?></td>
                    </tr>

                    <tr>
                      <td> No. Register IDI Cabang</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_no_regis']?></td>
                    </tr>

                    <tr>
                      <td> NPA. IDI</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_idi']?></td>
                    </tr>

                      <tr>
                      <td> No. STR</td> 
                      <td> : </td>
                      <td><?=$data['inp_str']?></td>
                    </tr>

                    <tr>
                      <td> Alamat Rumah</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat']?></td>
                    </tr>

                    <tr>
                      <td> Telp/ HP</td> 
                      <td> : </td>
                      <td><?=$data['inp_tlp']?></td>
                    </tr>

                    <tr>
                      <td> Alumni Fakultas Kedokteran ( FK )</td> 
                      <td> : </td>
                      <td><?=$data['inp_alumni']?></td>
                    </tr>

                    <tr>
                      <td> No. Ijazah</td> 
                      <td> : </td>
                      <td><?=$data['inp_ijazah']?></td>
                    </tr>
              </thead>
            <?php
          };
            ?>
                  </table>
                  <p style="text-align:justify">Menyatakan dengan sebenarnya bahwa saya tidak melakukan Praktik Kedokteran lebih dari 3 (tiga) tempat 
                  berdasarkan Undang-Undang Praktik No.29 Tahun 2004 dan PERMENKES No.2052/MENKES/PER/X/2011.</p>
                  <p style="text-align:justify">Adapun tempat praktik saya antara lain yaitu : </p>
                  <?php
                  $ambildata  = (mysqli_query($con,"SELECT * FROM form_asn WHERE id_lampiran_sip='$id_lampiran_sip'"));
                  while($data=mysqli_fetch_array($ambildata)){
                  ?>
                    <table class="table table-striped" id="table-1">
                    <tr>
                      <td>1. Nama Sarana Pelayanan Kesehatan</td> 
                      <td> : </td>
                      <td><?=$data['sarana_kesehatan']?></td>
                    </tr>
                    <tr>
                      <td> &nbsp&nbsp&nbsp Alamat</td> 
                      <td> : </td>
                      <td><?=$data['alamat']?></td>
                    </tr>
                    <tr>
                      <td>2. Nama Sarana Pelayanan Kesehatan</td> 
                      <td> : </td>
                      <td><?=$data['sarana_kesehatan_2']?></td>
                    </tr>
                    <tr>
                      <td> &nbsp&nbsp&nbsp Alamat</td> 
                      <td> : </td>
                      <td><?=$data['alamat_2']?></td>
                    </tr>
                    <tr>
                      <td>3. Nama Sarana Pelayanan Kesehatan</td> 
                      <td> : </td>
                      <td><?=$data['sarana_kesehatan_3']?></td>
                      <br>
                    </tr>
                    <tr>
                      <td> &nbsp&nbsp&nbsp Alamat</td> 
                      <td> : </td>
                      <td><?=$data['alamat_3']?></td>
                    </tr>
                    </thead>
            <?php
              };
            ?>
                  </table>
                  <p>Bila saya melanggar ketentuan tersebut di atas, saya bersedia menaggung konsekuensi Hukum dikemudian hari.</p>
                  <p>Demikian surat pernyataan ini saya buat dengan sebenarnya.</p>
                  <br><br><br><br><br>
                  <?php
                  $ambildata  = (mysqli_query($con,"SELECT * FROM form_asn WHERE id_lampiran_sip='$id_lampiran_sip'"));
                  while($data=mysqli_fetch_array($ambildata)){
                  ?>
                  <p style="text-align:right">Hormat Saya:<br><br><br><br>
                  <td><?=$data['inp_nama']?></td></p>
              <?php
                };
              ?>
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