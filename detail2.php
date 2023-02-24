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
    $id_anggota=$_GET['id'];

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

    //uraikan tb_perpust
    $row = $hasil->fetch_assoc();
?>


                <!-- <div class="col-12"> -->
                  <!-- <div class="card-body" col="10">
                <table border = "1" id="daftarbuku" class="table table-bordered table-hover">
                  <thead>
                    <tr> -->
                </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                    <table border="1" style="border-collapse:collapse;width:100%;text-align:center;vertical-align:center;">
                    <tr>
                        <td>
                        <span style="font-weight:bold">
                        </span>
                        </td>
                    </tr>
                    </table>
                    <h3><center>FORMULIR PENDAFTARAN</center></h3>
                    <p><center><b>KARTU ANGGOTA BARU/ DAFTAR ULANG/ MUTASI</b></center></p><br>
                    <p>Dengan hormat,</p>
                    <p style="text-align:justify">Bersama ini saya mengajukan permohonan <b>( mendaftar baru/ daftar ulang/ NPA )</b> sebagai anggota IDI dan saya bersedia mentaati AD/ART dan ketentuan-ketentuan organisasi IDI.</p>
                    <p style="text-align:justify">Adapun data-data mengenai diri saya sbb :</p>
                    <br>
                     <table class="table table-striped" id="table-1">
                    <?php
                $ambildata  = (mysqli_query($con,"SELECT * FROM form_anggota_baru WHERE id_anggota='$id_anggota'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                <tr>
                      <td> Nama Lengkap</td> 
                      <td> : </td>
                      <td><?=$data['inp_nama']?></td>
                    </tr>
                <tr>
                      <td> Warga Negara</td>  
                      <td> : </td>
                      <td><?=$data['inp_warga_negara']?></td>
                    </tr>
                    <tr>
                      <td> Jenis Kelamin</td> 
                      <td> : </td>
                      <td><?=$data['inp_jk']?></td>
                    </tr>
                    <tr>
                      <td> Agama</td>  
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
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                       <td> Jabatan Dikantor</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat_kantor']?></td>
                    </tr>
                    
                    <tr>
                      <td> Guru Besar/ Prof</td> 
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                      <td> Gelar Akademik Tertinggi</td>
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                      <td> Gelar Akademik Tertinggi</td>
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                     <td> Ijazah D.U di FK. UNIV</td> 
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                     <td> Ijazah Sp/S2 di <b>FK. UNIV</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                     <td> Spesialis</td> 
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                     <td> Ijazah Doktor di <b>UNIV</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                       <td> Nama Suami/ Istri</td>  
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                     <td> Sudah Pernah Menjadi Anggota/ Mutasi dari IDI Cabang</td>
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                    <tr>
                       <td> NPA IDI Pusat</td>   
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>

                    <tr>
                       <td> No. KTA/ ATM</td>   
                      <td> : </td>
                      <td><?=$data['inp_agama']?></td>
                    </tr>
                    
                     <!-- <td> No. KTA/ ATM</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_warga_negara']?></td></br></br>
                      <td> Jenis Kelamin</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_jk']?></td></br></br>
                      <td> Agama</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_agama']?></td></br></br>
                      <td> Tempat/ Tanggal Lahir</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_tempat_lahir']?></td></br></br>
                      <td> Alamat Rumah (Kota/Kab)</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> No HP</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_hp']?></td></br></br>
                      <td> Alamat Kantor (Kota/Kab)</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Jabatan Dikantor</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Guru Besar/ Prof</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Gelar Akademik Tertinggi</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Gelar Akademik Tertinggi</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Ijazah D.U di FK. UNIV</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td> &ensp; &ensp; &ensp; &ensp; Tgl/bln/thn :
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Ijazah Sp/S2 di <b>FK. UNIV</b></td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td> &ensp; &ensp; &ensp; &ensp; Tgl/bln/thn :
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Spesialis</td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td> &ensp; &ensp; &ensp; &ensp; Spesialis Konsultan :
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Ijazah Doktor di <b>UNIV</b></td> 
                      <span style="padding-left:500px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td> &ensp; &ensp; &ensp; &ensp; Tgl/bln/thn :
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Nama Suami/ Istri</td> 
                      <span style="padding-left:140px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> Sudah Pernah Menjadi Anggota/ Mutasi dari IDI Cabang</td> 
                      <span style="padding-left:140px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td> &ensp; &ensp; &ensp; &ensp; Tahun Mutasi :
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> NPA IDI Pusat</td> 
                      <span style="padding-left:140px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                      <td> No. KTA/ ATM</td> 
                      <span style="padding-left:140px;"><td> : </td></span>
                      <td class="borderData" style="width:50%;text-align:left;vertical-align:top;"><?=$data['inp_alamat']?></td></br></br>
                    </tr> -->
              
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