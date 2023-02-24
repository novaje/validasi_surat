<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SURAT KET PINDAH</title>
  <link rel="shortcut icon" href="logo_rs.png" />
  </head>
</html>

<?php
    //ambil id
    $id_surat_mutasi=$_GET['id_surat_mutasi'];

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
    $query  = "SELECT * FROM surat_mutasi WHERE id_surat_mutasi='$id_surat_mutasi'";
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
        height: 998px;
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
                $ambildata  = (mysqli_query($con,"SELECT * FROM surat_mutasi WHERE id_surat_mutasi='$id_surat_mutasi'"));
                while($data=mysqli_fetch_array($ambildata)){
                ?>
                    <h3><center><u>SURAT KETERANGAN PINDAH ANGGOTA IDI</u><br>
                    No. / / Sekrs/IDI-DS/XI/
                    </center></h3>
                    
                    <br>
                    <table class="table table-striped" id="table-1">
                        <p style="text-align:justify">Yang bertanda tangan dibawah ini menerangkan bahwa berhubung karena tugasnya, maka Anggota yang Namanya tersebut dibawah ini akan Pindah Status Keanggotaan <i>(Mutasi)</i> dan mendaftarkan diri sebagai Anggota IDI Cabang </p>
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
                      <td><?=$data['inp_alamat']?></td>
                    </tr>

                    <tr>
                      <td> No. Ijazah</td> 
                      <td> : </td>
                      <td><?=$data['inp_noIjazah']?></td>
                    </tr>

                    <tr>
                      <td> No. STR Terbaru</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_str']?></td>
                    </tr>

                    <tr>
                      <td> Instansi Bekerja</td> 
                      <td> : </td>
                      <td><?=$data['inp_instansi']?></td>
                    </tr>

                    <tr>
                      <td> No. Pokok Anggota (NPA/ IDI)</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_npa']?></td>
                    </tr>

                    <tr>
                      <td> No. Registasi Cab. Deli Serdang</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_regis']?></td>
                    </tr> 
              </thead>
            <?php
        };
          ?>
                  </table>
                  <p style="text-align:justify">Selama menjadi Anggota IDI Cabang Deli Serdang, sejawat diatas telah memenuhi kewajibannya dengan baik :<br>
                <ul>
                    <li>Telah Melunasi Iuran Anggota</li>
                    <li>Telah Melaksanakan Semua Kewajiban Organisasi dengan baik</li>
                    <li>Sedang/ Tidak Sedang*) Menjalani Sangsi Organisasi IDI</li>
                    <li>Tidak Pernah Melakukan Malpraktik di Wilayah Deli Serdang</li>
                </ul><br>
                Demikianlah Surat Keterangan <i><u>Mutasi</u></i> ini diperbuat untuk dapat dipergunakan seperlunya di IDI Cabang tempat tujuan tersebut.
                </p><br>
                <p>Lubuk Pakam,    20 <br><b>Ketua Umum Terpilih <br><img src="ttd_ketua/dr. Hanip Fahri.png" class="img-circle elevation-2" alt="User Image" width="80" height="80">
                <br>dr. Hanip Fahri, MM.M.Ked(KJ),Sp.KJ <br>
                  Npa. 67732</b></p>
                <br><p>Tembusan</p>
                <ul>
                    <li>IDI Cabang</li>
                    <li>Pertinggal</li>
                </ul>
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