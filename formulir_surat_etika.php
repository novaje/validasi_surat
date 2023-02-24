
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
    $id_surat_etika=$_GET['id_surat_etika'];

    //variabel koneksi
    include 'koneksi/connection.php';

    //cek db
    if ($con->connect_error) {
        die("Connection Failed: " . $con->connect_error);
    }

    //query
    $query  = "SELECT * FROM surat_ket_etika WHERE id_surat_etika='$id_surat_etika'";
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
        height: 900px;
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
                              <h2>MAJELIS KEHORMATAN ETIK KEDOKTERAN</h2>
                              <h2>(MKEK) IDI CABANG DELI SERDANG</h2>
                              <hr>
                          </td>
                      </tr>
                  </div>
                  
              </table>

                    <?php
                      $ambildata  = (mysqli_query($con,"SELECT * FROM surat_ket_etika WHERE id_surat_etika='$id_surat_etika'"));
                      while($data=mysqli_fetch_array($ambildata)){
                    ?>
                    <h3><center><u>KETERANGAN KELAIKAN ETIKA</u><br>
                    No: <?=$data['inp_surat1']?>/<?=$data['inp_surat2']?>/Komtap Etika/IDI-DS/<?=$data['inp_tahun']?>
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
                      <td> NPA IDI</td> 
                      <td> : </td>
                      <td><?=$data['inp_npa']?></td>
                    </tr>

                    <tr>
                      <td> No. Register IDI Cabang</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_reg']?></td>
                    </tr>

                    <tr>
                      <td> No. STR</td> 
                      <td> : </td>
                      <td><?=$data['inp_str']?></td>
                    </tr>

                    <tr>
                      <td> No. Telp/ Hp</td> 
                      <td> : </td>
                      <td><?=$data['inp_no_tlp']?></td>
                    </tr>

                    <tr>
                      <td> Alamat Praktek</td> 
                      <td> : </td>
                      <td><?=$data['inp_alamat']?></td>
                    </tr>
              </thead>
            <?php
        };
          ?>
                  </table>

                  <?php
                    $ambildata  = (mysqli_query($con,"SELECT * FROM surat_ket_etika WHERE id_surat_etika='$id_surat_etika'"));
                    while($data=mysqli_fetch_array($ambildata)){
                  ?>
                  <p style="text-align:justify">Pada saat ini secara etis sejawat tersebut laik untuk menjalankan praktik sebagai dokter.<br>
                  <p style="text-align:justify">Demikian keterangan kelaikan ini kami buat secermat mungkin dan akan ditinjau ulang bila diperlukan.
                    Keterangan ini berlaku sampai tanggal <?=$data['tgl_keterangan']?></p><br>

                    <p>Lubuk Pakam, <?=$data['tgl_surat']?> <br><b>Pengurus MKEK IDI Cabang Deli Serdang</b></p> <br><br><br>
                <p><b><h4>( <u><?=$data['inp_nama']?></u> ) <b><br>NPA. IDI: <?=$data['inp_npa']?></p></h4> <br><br>
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