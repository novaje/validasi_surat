<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FORMULIR MUTASI</title>
  <link rel="shortcut icon" href="logo_rs.png" />
  </head>
</html>

<?php
    //ambil id
    $id_anggota=$_GET['id_anggota'];

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
    $query  = "SELECT * FROM form_mutasi WHERE id_anggota='$id_anggota'";
    //hasil
    $hasil  = $con->query($query);

    //uraikan tb_perpust
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
                  </div>
                </table>
                    <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_mutasi WHERE id_anggota='$id_anggota'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                    <p><b>Perihal : Permohonan Pindah (Mutasi) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      Lubuk Pakam,<br>Keanggotaan IDI</b></p>
                    <p>Kepada Yth,</p>
                    <p>&nbsp Pengurus IDI Cab. Deli Serdang</p>
                    <p>Di -</p>
                    <p>&nbsp&nbsp Tempat.</p>
                    <p style="text-align:justify"><b>Saya yang bertanda tangan dibawah ini :</b></p>
                    <table class="table table-striped" id="table-1">
                    <tr>
                      <td> Nama Lengkap</td> 
                      <td> : </td>
                      <td><?=$data['inp_nama']?></td>
                    </tr>
                    
                    <tr>
                      <td> Tempat/ Tgl Lahir</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_tempatLahir']?></td>
                    </tr>

                    <tr>
                      <td> Jenis Kelamin</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_jk']?></td>
                    </tr>

                    <tr>
                      <td> No.Reg. IDI Cabang</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_noReg']?></td>
                    </tr>

                      <tr>
                      <td> NPA.IDI</td> 
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
                      <td><?=$data['inp_noIjazah']?></td>
                    </tr>

                    <tr>
                      <td> Alamat Rumah</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat']?></td>
                    </tr>

                    <tr>
                      <td> No. TLP</td> 
                      <td> : </td>
                      <td><?=$data['inp_tlp']?></td>
                    </tr>

                    <!-- <tr>
                      <td> Dengan ini mengajukan permohonan untuk pindah status <br>ke anggotaan IDI ke IDI Cabang </td> 
                      <td> : </td>
                      <td><?=$data['inp_pindahStatus']?></td>
                    </tr>

                    <tr>
                      <td> Adapun alasan kepindahan saya adalah</td> 
                      <td> : </td>
                      <td><?=$data['inp_alasan_pindah']?></td>
                    </tr>
                     -->
              </thead>
            <?php
        };
          ?>
                  </table>
                  <?php
                    $ambildata  = (mysqli_query($con,"SELECT * FROM form_mutasi WHERE id_anggota='$id_anggota'"));
                    while($data=mysqli_fetch_array($ambildata)){
                  ?>
                  Dengan ini mengajukan permohonan untuk pindah status ke anggotaan IDI ke IDI Cabang : <br>
                  <b><center><?=$data['inp_pindahStatus']?></b></center>

                  <p>Adapun alasan kepindahan saya adalah :
                  <?=$data['inp_alasan_pindah']?></p>
                  <p>Demikianlah surat permohonan ini saya sampaikan, atas perhatiannya diucapkan terima kasih.</p>

                  <p style="text-align:right">Hormat Saya,<br>Pemohon</p><br><br>
                  <p style="text-align:right"><?=$data['inp_nama']?></p>
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