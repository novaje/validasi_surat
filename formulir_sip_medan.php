<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SURAT KET SIP DS</title>
  <link rel="shortcut icon" href="logo_rs.png" />
  </head>
</html>

<?php
    //ambil id
    $id_surat=$_GET['id_surat'];

    //variabel koneksi
    include 'koneksi/connection.php';

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
        height: 1100px;
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
                          <img src="../admin/img/logo_idi2.png" width="120px"></td>
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
                        $ambildata  = (mysqli_query($con,"SELECT * FROM form_surat_izin_medan WHERE id_surat ='$id_surat'"));
                        while($data=mysqli_fetch_array($ambildata)){
                    ?>
                    <h3><center><u>REKOMENDASI IZIN PRAKTEK</u><br>
                    No. <td><?=$data['inp_surat1']?>/ <td><?=$data['inp_surat2']?>/IDI-DS/ <td><?=$data['inp_bulan']?>/ <td><?=$data['inp_tahun']?>
                    </center></h3>
                    
                    <br>
                    <table class="table table-striped" id="table-1">
                        <p style="text-align:justify">Berdasarkan SK Permenkes <b>No. 2052/Menkes/Per/2011</b> Tentang Izin Praktik Dokter/ Dokter Gigi dan Pelaksanaan
                        Praktik Kedokteran. Pengurus Ikatan Dokter Indonesia (IDI) Cabang Deli Serdang, dengan ini menerangkan bahwa :</p>
                    <tr>
                      <td><b>Nama Lengkap</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_nama']?></td>
                      <br>
                    </tr>
                    
                    <tr>
                      <td><b>Tempat/ Tanggal Lahir</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_ttl']?></td>
                    </tr>

                      <tr>
                      <td><b>Alamat</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat']?></td>
                    </tr>

                    <tr>
                      <td><b>No. Ijazah</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_no_ijazah']?></td>
                    </tr>

                    <tr>
                      <td><b>No. STR Terbaru</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_str']?></td>
                    </tr>

                    <tr>
                      <td><b>Instansi Bekerja</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_instansi']?></td>
                    </tr>

                    <tr>
                      <td><b>No. Pokok Anggota (NPA IDI)</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_no_pokok']?></td>
                    </tr>

                    <tr>
                      <td><b>No. Registrasi Cab. Deli Serdang</b></td> 
                      <td> : </td>
                      <td><?=$data['inp_no_regis']?></td>
                    </tr> 
              </thead>
            <?php
        };
          ?>
                  </table>

                  <?php
                        $ambildata  = (mysqli_query($con,"SELECT * FROM form_surat_izin_medan WHERE id_surat ='$id_surat'"));
                        while($data=mysqli_fetch_array($ambildata)){
                    ?>

                  <p style="text-align:justify">Adalah benar Anggota Ikatan Dokter Indonesia (IDI) Cabang <b><u><?=$data['inp_cabang']?></u></b> dan telah memenuhi kewajiban
                sebagai Anggota IDI sebagaimana yang tercantum dalam AD/ ART IDI. Dan menurut pertimbangan kami telah memenuhi ketentuan untuk mendapatkan Rekomendasi
                dari IDI Cabang Deli Serdang sebagai kelengkapan Permohonan Surat Izin Praktik Dokter Umum yang Ke II dengan Alamat :</p> <br>
               <b><p style="text-align:center"><?=$data['inp_alamat_1']?></p></b><br>
               
                <p>Lubuk Pakam, <?=$data['inp_tgl_real']?> <br><b>Ketua Umum Terpilih</b> <br>
                <img src="ttd_ketua/dr. Hanip Fahri.png" class="img-circle elevation-2" alt="User Image" width="80" height="80"><br>
                <b><?=$data['inp_ketua']?><br>
                NPA IDI. <?=$data['inp_npa_ketua']?></b></p>
                <br><br>
                <p>Tembusan</p>
                <ul>
                    <li>Dinas Perizinan Terpadu Satu Pintu (PTSP) Kab. Deli Serdang</li>
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