<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FORMULIR PERMOHONAN SIP</title>
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
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_rekom_sip WHERE id_lampiran_sip='$id_lampiran_sip'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                    <h3><center>FORMULIR PERMOHONAN SIP</center></h3>
                    
                    <br>
                    <table class="table table-striped" id="table-1">
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
                      <td> Jenis Kelamin</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_jk']?></td>
                    </tr>

                    <tr>
                      <td> Dokter</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_dokter']?></td>
                    </tr>

                      <tr>
                      <td> Lulusan</td> 
                      <td> : </td>
                      <td><?=$data['inp_lulusan']?></td>
                    </tr>

                    <tr>
                      <td> No. STR</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_str']?></td>
                    </tr>

                    <tr>
                      <td> Tempat Bekerja/ Instansi</td> 
                      <td> : </td>
                      <td><?=$data['inp_tempatKerja']?></td>
                    </tr>

                    <tr>
                      <td> Alamat Rumah (RT,RW,Kelurahan,Kecamatan,Kabupaten)</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat']?></td>
                    </tr>

                    <tr>
                      <td> No. Tlp/HP</td> 
                      <td> : </td>
                      <td><?=$data['inp_tlp']?></td>
                    </tr>

                    <tr>
                      <td> Anggota IDI Cabang</td> 
                      <td> : </td>
                      <td><?=$data['inp_anggota']?></td>
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