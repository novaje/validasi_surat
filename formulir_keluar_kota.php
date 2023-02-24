<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FORMULIR KELUAR KOTA</title>
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
    $query  = "SELECT * FROM form_luarkota WHERE id_luarKota='$id_luarKota'";
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
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_luarkota WHERE id_luarKota='$id_luarKota'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                    <h3><center>FORMULIR KELUAR KOTA</center></h3>
                    <br>
                    <table class="table table-striped" id="table-1">
                    <tr>
                      <td> Nama Lengkap</td> 
                      <td> : </td>
                      <td><?=$data['inp_nama']?></td>
                      <br>
                    </tr>
                    
                    <tr>
                      <td> Tempat/ Tgl.Lahir</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_tempat_lahir']?></td>
                    </tr>

                    <tr>
                      <td> Jenis Kelamin</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_jk']?></td>
                    </tr>

                    <tr>
                      <td> No. Reg. IDI Cabang</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_noReg']?></td>
                    </tr>

                      <tr>
                      <td> NPA. IDI</td> 
                      <td> : </td>
                      <td><?=$data['inp_npa']?></td>
                    </tr>

                    <tr>
                      <td> Lulusan (FK)/ Tahun</td> 
                      <td> : </td>
                      <td><?=$data['inp_lulusan']?></td>
                    </tr>

                    <tr>
                      <td> No. Ijazah</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_ijazah']?></td>
                    </tr>

                    <tr>
                      <td> Alamat Rumah</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamatRumah']?></td>
                    </tr>

                    <tr>
                      <td> No. Telpon/HP</td> 
                      <td> : </td>
                      <td><?=$data['inp_tlp']?></td>
                    </tr>

                    <tr>
                      <td> Mengajukan permohonan kepada Ketua/Pengurus IDI Cabang Deli Serdang <br> untuk memberikan surat pengantar kepada saya untuk memperoleh rekomendasi dari IDI Cabang </td><br> 
                      <td> : </td>
                      <td><?=$data['inp_ajukan_permohonan']?></td>
                    </tr>

                    <tr>
                      <td> sebagai salah satu syarat untuk mengajukan permohonan surat izin Praktik Dokter di</td> 
                      <td> : </td> 
                    </tr>

                    <tr>
                      <td> Nama Sarana Pelayanan Kesehatan</td> 
                      <td> : </td>
                      <td><?=$data['inp_namaSarana']?></td> 
                    </tr>

                    <tr>
                      <td> Alamat</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamatSarana']?></td>
                    </tr>

                    <tr>
                      <td> Adapun praktik saya di Wilayah Deli Serdang antara lain </td> 
                      <td> : </td>
                    </tr>

                    <tr>
                      <td> Nama Sarana Pelayanan Kesehatan</td> 
                     <td> : </td>
                      <td><?=$data['inp_saranaKesehatan']?></td>
                    </tr>

                    <tr>
                      <td> Alamat</td>
                      <td> : </td>
                      <td><?=$data['inp_alamatKesehatan']?></td>
                    </tr>
              </thead>
            <?php
        };
          ?>
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