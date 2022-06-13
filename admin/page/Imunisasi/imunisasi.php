
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Imunisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="mb-3">
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-tambah"> <i class="fa fa-plus nav-icon"></i>
                      Tambah Data
                    </button>
              </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Ortu</th>
                    <th>Usia</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php
                            function tgl_indo($tanggal){
                              $bulan = array (
                                1 =>   'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                              );
                              $pecahkan = explode('-', $tanggal);
                              
                              // variabel pecahkan 0 = tanggal
                              // variabel pecahkan 1 = bulan
                              // variabel pecahkan 2 = tahun
                             
                              return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                            }
                            include 'page/koneksi.php';
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from tbl_anak");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama_anak'] ?></td>
                  <td><?php echo $data['nama_ortu'] ?></td>
                  <td><?php $lahir    =new DateTime($data['tgl_lahir']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun";
                    ?></td>
                  <td><?php echo tgl_indo(date('Y-m-d', strtotime($data['tgl_lahir']))); ?></td>
                  <td><?php echo $data['alamat_anak'] ?></td>
                  <td><?php echo $data['nohp_ortu'] ?></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['id_anak']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <a href="page/Imunisasi/hapus.php?id_anak=<?php echo $data['id_anak'];  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </a>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lihat<?php echo $data['id_anak']  ?>"> <i class="fa fa-eye nav-icon"></i>
                      Lihat
                    </button></td>
                  </tr>

      <!-- update data -->
      <div class="modal fade" id="modal-default<?php echo $data['id_anak']  ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <form method="POST">
            
            <?php 

                $id_anak = $data['id_anak'];
                $sql_edit    = $koneksi ->query("SELECT * from tbl_anak where
                  id_anak='$id_anak'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
                           

            ?>

              <div class="form-group">
                  <input type="hidden" class="form-control" name="id_anak" value="<?php echo $data_edit['id_anak'] ?>">
              </div>
              
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_anak" value="<?php echo $data_edit['nama_anak'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Anak ke -</label>
                  <input type="text" class="form-control" name="anak_ke" value="<?php echo $data_edit['anak_ke'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                  <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($data_edit['jenis_kelamin']=="Laki-laki") echo "checked";?>> Laki-laki<br>
                  <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($data_edit['jenis_kelamin']=="Perempuan")  echo "checked";?>> Perempuan<br>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data_edit['tgl_lahir'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" name="berat_badan" value="<?php echo $data_edit['berat_badan'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" name="tb_anak" value="<?php echo $data_edit['tb_anak'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" name="alamat_anak"><?php echo $data_edit['alamat_anak'] ?></textarea>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama Orang Tua</label>
                  <input type="text" class="form-control" name="nama_ortu" value="<?php echo $data_edit['nama_ortu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="nohp_ortu" value="<?php echo $data_edit['nohp_ortu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Gizi Anak</label>
                  <input type="text" class="form-control" name="gizi_anak" value="<?php echo $data_edit['gizi_anak'] ?>">
              </div>
              
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>

            <?php } ?>


            </form>
            </div>
            <?php

            if (isset($_POST['ubah'])) {
              $id_anak_ubah = $_POST['id_anak'];
              $nama_anak = $_POST['nama_anak'];
              $anak_ke = $_POST['anak_ke'];
              $jenis_kelamin = $_POST['jenis_kelamin'];
              $tgl_lahir = $_POST['tgl_lahir'];
              $berat_badan = $_POST['berat_badan'];
              $tb_anak = $_POST['tb_anak'];
              $alamat_anak = $_POST['alamat_anak'];
              $nama_ortu = $_POST['nama_ortu'];
              $nohp_ortu = $_POST['nohp_ortu'];
              $gizi_anak = $_POST['gizi_anak'];

              $sql = $koneksi->query("update tbl_anak set nama_anak='$nama_anak', anak_ke='$anak_ke', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir', berat_badan='$berat_badan', tb_anak='$tb_anak', alamat_anak='$alamat_anak', nama_ortu='$nama_ortu', nohp_ortu='$nohp_ortu', gizi_anak='$gizi_anak' where id_anak='$id_anak_ubah'");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Diubah");
                        window.location.href="?page=imunisasi";  


                      </script>
                <?php
              }

            }

            ?>


          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- tutup update data -->

      <!-- Lihat Data -->
      <div class="modal fade" id="modal-lihat<?php echo $data['id_anak']  ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lihat Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <?php 

                $id_anak      = $data['id_anak'];
                $sql_edit     = $koneksi ->query("SELECT * from tbl_anak where id_anak='$id_anak'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
            ?>
            
            <div class="lihatmod">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8">
                    <p>Nama anak    : <?php echo $data_edit['nama_anak'] ?></p>
                    <p>Anak Ke -    : <?php echo $data_edit['anak_ke'] ?></p>
                    <p>Jenis Kelamin: <?php echo $data_edit['jenis_kelamin'] ?></p>
                    <p>Umur : <?php $lahir    =new DateTime($data_edit['tgl_lahir']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun";
                    ?></p>
                    <p>Tanggal Lahir: <?php echo tgl_indo(date('Y-m-d', strtotime($data_edit['tgl_lahir']))); ?></p>
                    <p>Berat Badan  : <?php echo $data_edit['berat_badan'] ?></p>
                    <p>Tinggi Badan : <?php echo $data_edit['tb_anak'] ?></p>
                    <p>Alamat       : <?php echo $data_edit['alamat_anak'] ?></p>
                    <p>Nama Orang tua: <?php echo $data_edit['nama_ortu'] ?></p>
                    <p>Nomor hp Ortu: <?php echo $data_edit['nohp_ortu'] ?></p>
                    <p>Gizi Anak    : <?php echo $data_edit['gizi_anak'] ?></p>
                  </div>
                  <div class="col-sm-4"></div>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </div>
    <!-- Tutup lihat data -->
                  <?php } ?>

                  </tbody>

                  </table>

                  </div>

                  </div>

                  </div>



          <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <form method="POST">
            
              <div class="form-group">
                  <input type="hidden" class="form-control" name="id_anak">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_anak">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Anak ke -</label>
                  <input type="text" class="form-control" name="anak_ke">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" name="berat_badan">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" name="tb_anak">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" name="alamat_anak"></textarea>
              </div>

               <div class="form-group">
                  <label for="exampleInputEmail1">Nama Orang Tua</label>
                  <input type="text" class="form-control" name="nama_ortu">
              </div>              

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon Orang Tua</label>
                  <input type="text" class="form-control" name="nohp_ortu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Gizi Anak</label>
                  <input type="text" class="form-control" name="gizi_anak">
              </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>



        <?php

            if (isset($_POST['Simpan'])) {
              $nama_anak = $_POST['nama_anak'];
              $anak_ke = $_POST['anak_ke'];
              $jenis_kelamin = $_POST['jenis_kelamin'];
              $tgl_lahir = $_POST['tgl_lahir'];
              $berat_badan = $_POST['berat_badan'];
              $tb_anak = $_POST['tb_anak'];
              $alamat_anak = $_POST['alamat_anak'];
              $nama_ortu = $_POST['nama_ortu'];
              $nohp_ortu = $_POST['nohp_ortu'];
              $gizi_anak = $_POST['gizi_anak'];

              

              $sql = $koneksi->query("insert into tbl_anak(nama_anak,anak_ke,jenis_kelamin,tgl_lahir,berat_badan, tb_anak,alamat_anak,nama_ortu,nohp_ortu,gizi_anak) values('$nama_anak','$anak_ke','$jenis_kelamin','$tgl_lahir','$berat_badan','$tb_anak','$alamat_anak','$nama_ortu','$nohp_ortu','$gizi_anak')");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Disimpan");
                        window.location.href="?page=imunisasi";  

                      </script>
                <?php
              }

            }

            ?>
