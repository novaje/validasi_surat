<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FORMULIR REKOM SEKOLAH</title>
  <link rel="shortcut icon" href="logo_rs.png" />
  </head>
</html>

<?php
    //ambil id
    $id_rekomSekolah=$_GET['id_rekomSekolah'];

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
    $query  = "SELECT * FROM form_rekomsekolah WHERE id_rekomSekolah='$id_rekomSekolah'";
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
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_rekomsekolah WHERE id_rekomSekolah='$id_rekomSekolah'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                    <h3><center>FORMULIR REKOMENDASI SEKOLAH</center></h3>
                    <p>Dengan hormat,</p>
                    <p style="text-align:justify">Bersama ini saya mengajukan permohonan <b>( mendaftar baru/ daftar ulang/ NPA )</b> sebagai anggota IDI dan saya bersedia mentaati AD/ART dan ketentuan-ketentuan organisasi IDI.</p>
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
                      <td> No. Reg. IDI Cab. Deli Serdang</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_reg']?></td>
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
                      <td> No. Telephone</td> 
                      <td> : </td>
                      <td><?=$data['inp_tlp']?></td>
                    </tr>

                    <tr>
                      <td> Dengan ini mengajukan Permohonan Rekomendasi mengikuti Program Pendidikan Dokter Spesialis (PPDS-S-2)</td> 
                      <td> : </td>
                      <td><?=$data['inp_permohonan']?></td>
                    </tr>

                    <tr>
                      <td> Fakultas Kedokteran</td> 
                      <td> : </td>
                      <td><?=$data['inp_fakultas']?></td> 
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