  
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Keluarga Berencana</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="mb-3">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-tambah"> <i class="fa fa-plus nav-icon"></i>
                      Tambah Data
                    </button>
          </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
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
                            $sql = $koneksi->query("SELECT * from tb_keluargaberencana");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['Nama_PKB'] ?></td>
                  <td><?php $lahir    =new DateTime($data['TTL_PKB']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun";
                    ?></td>
                  <td><?php echo tgl_indo(date('Y-m-d', strtotime($data['TTL_PKB']))); ?></td>
                  <td><?php echo $data['Alamat_PKB'] ?></td>
                  <td><?php echo $data['NoTelp_PKB'] ?></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal"data-target="#modal-default<?php echo $data['ID_KB']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <a href="page/KeluargaBerencana/hapus.php?ID_KB=<?php echo $data['ID_KB'];  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </a>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lihat<?php echo $data['ID_KB']  ?>"><i class="fa fa-eye nav-icon"></i>
                      Lihat
                    </button></td>
                  </tr>

      <!-- update data -->
      <div class="modal fade" id="modal-default<?php echo $data['ID_KB']  ?>">
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

                $ID_KB = $data['ID_KB'];
                $sql_edit    = $koneksi ->query("SELECT * from TB_KeluargaBerencana where
                  ID_KB='$ID_KB'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
                           

            ?>

              <div class="form-group">
                  <input type="hidden" class="form-control" name="ID_KB" value="<?php echo $data_edit['ID_KB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="Nama_PKB" value="<?php echo $data_edit['Nama_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="TTL_PKB" value="<?php echo $data_edit['TTL_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" name="Alamat_PKB"><?php echo $data_edit['Alamat_PKB'] ?></textarea>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="NoTelp_PKB" value="<?php echo $data_edit['NoTelp_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" name="BB_PKB" value="<?php echo $data_edit['BB_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" name="TB_PKB" value="<?php echo $data_edit['TB_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tensi Darah</label>
                  <input type="text" class="form-control" name="Tensi_PKB" value="<?php echo $data_edit['Tensi_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Suntik</label>
                  <input type="date" class="form-control" name="TglSuntik_PKB" value="<?php echo $data_edit['TglSuntik_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kembali</label>
                  <input type="date" class="form-control" name="TglKembali_PKB" value="<?php echo $data_edit['TglKembali_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <textarea class="form-control" name="Keterangan"><?php echo $data_edit['Keterangan'] ?></textarea>
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
              $ID_KB_ubah = $_POST['ID_KB'];
              $Nama_PKB = $_POST['Nama_PKB'];
              $TTL_PKB = $_POST['TTL_PKB'];
              $Alamat_PKB = $_POST['Alamat_PKB'];
              $NoTelp_PKB = $_POST['NoTelp_PKB'];
              $BB_PKB = $_POST['BB_PKB'];
              $TB_PKB = $_POST['TB_PKB'];
              $Tensi_PKB = $_POST['Tensi_PKB'];
              $TglSuntik_PKB = $_POST['TglSuntik_PKB'];
              $TglKembali_PKB = $_POST['TglKembali_PKB'];
              $Keterangan = $_POST['Keterangan'];

              $sql = $koneksi->query("update TB_KeluargaBerencana set Nama_PKB='$Nama_PKB', TTL_PKB='$TTL_PKB', Alamat_PKB='$Alamat_PKB', NoTelp_PKB='$NoTelp_PKB', BB_PKB='$BB_PKB', TB_PKB='$TB_PKB', Tensi_PKB='$Tensi_PKB', TglSuntik_PKB='$TglSuntik_PKB', TglKembali_PKB='$TglKembali_PKB', Keterangan='$Keterangan' where ID_KB='$ID_KB_ubah'");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Diubah");
                        window.location.href="?page=keluargaberencana";  


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
      <div class="modal fade" id="modal-lihat<?php echo $data['ID_KB']  ?>">
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

                $ID_KB = $data['ID_KB'];
                $sql_edit    = $koneksi ->query("SELECT * from tb_keluargaberencana where
                  ID_KB='$ID_KB'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
            ?>
            
            <div class="lihatmod">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8">
                    <p>Nama         : <?php echo $data_edit['Nama_PKB'] ?></p>
                    <p>Umur         : <?php $lahir    =new DateTime($data_edit['TTL_PKB']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun";
                    ?></p>
                    <p>Tanggal Lahir: <?php echo tgl_indo(date('Y-m-d', strtotime($data_edit['TTL_PKB']))); ?></p>
                    <p>Alamat       : <?php echo $data_edit['Alamat_PKB'] ?></p>
                    <p>Nomor Telepon: <?php echo $data_edit['NoTelp_PKB'] ?></p>
                    <p>Berat Badan  : <?php echo $data_edit['BB_PKB'] ?></p>
                    <p>Tinggi Badan : <?php echo $data_edit['TB_PKB'] ?></p>
                    <p>Tensi Darah: <?php echo $data_edit['Tensi_PKB'] ?></p>
                    <p>Tanggal Suntik: <?php echo $data_edit['TglSuntik_PKB'] ?></p>
                    <p>Tanggal Kembali: <?php echo $data_edit['TglKembali_PKB'] ?></p>
                    <p>Keterangan: <?php echo $data_edit['Keterangan'] ?></p>
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
                  <input type="hidden" class="form-control" name="ID_KB">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="Nama_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="TTL_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" name="Alamat_PKB"></textarea>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="NoTelp_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" name="BB_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" name="TB_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tensi Darah</label>
                  <input type="text" class="form-control" name="Tensi_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Suntik</label>
                  <input type="date" class="form-control" name="TglSuntik_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kembali</label>
                  <input type="date" class="form-control" name="TglKembali_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <textarea class="form-control" name="Keterangan"></textarea>
              </div>


            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>



        <?php

            if (isset($_POST['Simpan'])) {
              $Nama_PKB = $_POST['Nama_PKB'];
              $TTL_PKB = $_POST['TTL_PKB'];
              $Alamat_PKB = $_POST['Alamat_PKB'];
              $NoTelp_PKB = $_POST['NoTelp_PKB'];
              $BB_PKB = $_POST['BB_PKB'];
              $TB_PKB = $_POST['TB_PKB'];
              $Tensi_PKB = $_POST['Tensi_PKB'];
              $TglSuntik_PKB = $_POST['TglSuntik_PKB'];
              $TglKembali_PKB = $_POST['TglKembali_PKB'];
              $Keterangan = $_POST['Keterangan'];

              $sql = $koneksi->query("insert into tb_keluargaberencana(Nama_PKB,TTL_PKB,Alamat_PKB,NoTelp_PKB, BB_PKB,TB_PKB,Tensi_PKB,TglSuntik_PKB, TglKembali_PKB,Keterangan) values('$Nama_PKB','$TTL_PKB','$Alamat_PKB','$NoTelp_PKB', '$BB_PKB','$TB_PKB','$Tensi_PKB','$TglSuntik_PKB', '$TglKembali_PKB','$Keterangan')");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Disimpan");
                        window.location.href="?page=keluargaberencana";  


                      </script>
                <?php
              }

            }

            ?>



            <?php 

                if (isset($_POST['Hapus'])) {
                    $ID_KB_hapus = $_POST['ID_KB'];
                
                    $sql = $koneksi->query("delete from TB_KeluargaBerencana where ID_KB = '$ID_KB_hapus'");


                    if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Dihapus");
                        window.location.href="?page=keluargaberencana";  


                      </script>
                <?php
              }

                }

             ?>