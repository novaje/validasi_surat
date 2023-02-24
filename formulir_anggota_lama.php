<?php
include './koneksi/connection.php';
session_start();

if(!isset($_SESSION['username'])) {
  header ("Location: login.php");
}
?>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FORMULIR PENDAFTARAN</title>
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
    $query  = "SELECT * FROM form_anggota_baru WHERE id_anggota='$id_anggota'";
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
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_anggota_lama WHERE id_anggota='$id_anggota'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                    <h3><center>FORMULIR PENDAFTARAN</center></h3>
                    <p><center><b>KARTU ANGGOTA BARU/ DAFTAR ULANG/ MUTASI</b></center></p><br>
                    <p>Dengan hormat,</p>
                    <p style="text-align:justify">Bersama ini saya mengajukan permohonan <b>( mendaftar baru/ daftar ulang/ NPA )</b> sebagai anggota IDI dan saya bersedia mentaati AD/ART dan ketentuan-ketentuan organisasi IDI.</p>
                    <p style="text-align:justify">Adapun data-data mengenai diri saya sbb :</p>
                    <br>
                    <table class="table table-striped" id="table-1">
                    <tr>
                      <td> Nama Lengkap</td> 
                      <td> : </td>
                      <td><?=$data['inp_nama']?></td>
                      <br>
                    </tr>
                    
                    <tr>
                      <td> Warga Negara</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_warga_negara']?></td>
                    </tr>

                    <tr>
                      <td> Jenis Kelamin</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_jk']?></td>
                    </tr>

                    <tr>
                      <td> Agama</i></td> 
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>

                      <tr>
                      <td> Tempat/ Tanggal Lahir</td> 
                      <td> : </td>
                      <td><?=$data['inp_tempat_lahir']?></td>
                    </tr>

                    <tr>
                      <td> Alamat Rumah (Kota/Kab)</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat']?></td>
                    </tr>

                    <tr>
                      <td> No HP</td> 
                      <td> : </td>
                      <td><?=$data['inp_hp']?></td>
                    </tr>

                    <tr>
                      <td> Alamat Kantor (Kota/Kab)</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat_kantor']?></td>
                    </tr>

                    <tr>
                      <td> Jabatan Dikantor</td> 
                      <td> : </td>
                      <td><?=$data['inp_jabatan']?></td>
                    </tr>

                    <tr>
                      <td> Guru Besar/ Prof</td> 
                      <td> : </td>
                      <td><?=$data['inp_guru_besar']?></td>
                    </tr>

                    <tr>
                      <td> Gelar Akademik Tertinggi</td> 
                      <td> : </td>
                      <td><?=$data['inp_gelar']?></td>
                    </tr>

                    <tr>
                      <td> Ijazah D.U di FK. UNIV</td> 
                      <td> : </td>
                      <td><?=$data['inp_ijazah_du']?>&ensp; Tgl/bln/thn :</td> 
                      <td><?=$data['tgl_du']?></td>
                    </tr>

                    <tr>
                      <td> Ijazah Sp/S2 di <b>FK. UNIV</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_ijazah_s2']?>&ensp; Tgl/bln/thn :</td> 
                      <td><?=$data['tgl_sp_s2']?></td>
                    </tr>

                    <tr>
                      <td> Spesialis</td> 
                      <td> : </td>
                      <td><?=$data['inp_spesialis']?>&ensp; Spesialis Konsultan :</td>
                      <td><?=$data['inp_konsultan']?></td>
                    </tr>

                    <tr>
                      <td> Ijazah Doktor di <b>UNIV</b></td> 
                     <td> : </td>
                      <td><?=$data['inp_ijazah_dokter']?>&ensp; Tgl/bln/thn :</td> 
                      <td><?=$data['tgl_dokter']?></td>
                    </tr>

                    <tr>
                      <td> Nama Suami/ Istri</td>
                      <td> : </td>
                      <td><?=$data['inp_suami_istri']?></td>
                    </tr>

                    <tr>
                      <td> Sudah Pernah Menjadi Anggota/ Mutasi dari IDI Cabang</td> 
                      <td> : </td>
                      <td><?=$data['inp_mutasi']?>&ensp; Tahun Mutasi :</td> 
                      <td><?=$data['inp_tahun_mutasi']?></td>
                    </tr>

                    <tr>
                      <td> NPA IDI Pusat</td> 
                      <td> : </td></span>
                      <td><?=$data['inp_npa']?></td>
                    </tr>

                    <tr>
                      <td> No. KTA/ ATM</td> 
                      <td> : </td>
                      <td><?=$data['inp_kta']?></td>
                    </tr>
                    
              </thead>
            <?php
        };
          ?>
                  </table>
                  <br><br><br><br><br><br>
                  <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_anggota_lama WHERE id_anggota='$id_anggota'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                <div style="width:800px;float:right">
                  Hormat Saya<br><br>
                  <p><td>( <?=$data['inp_nama']?> )</td></p>
                </div>
                <div style="clear:both"></div>
              </div>

                  <?php } ?>
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