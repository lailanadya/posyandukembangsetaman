
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Ibu Nifas dan Menyusui</h3>
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
                    <th>Usia</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No.Telp</th>
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
                            $sql = $koneksi->query("SELECT * from TB_IbuNifas");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['Nama_Ibunifas'] ?></td>
                  <td><?php $lahir    =new DateTime($data['ttl_ibunifas']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun";
                    ?></td>
                  <td><?php echo tgl_indo(date('Y-m-d', strtotime($data['ttl_ibunifas']))); ?></td>
                  <td><?php echo $data['Alamat_Ibunifas'] ?></td>
                  <td><?php echo $data['NoTelp_Ibunifas'] ?></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['ID_Ibunifas']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                    <a href="page/IbuNifasdanMenyusui/hapus.php?ID_Ibunifas=<?php echo $data['ID_Ibunifas'];  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </a>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lihat<?php echo $data['ID_Ibunifas']  ?>"> <i class="fa fa-eye nav-icon"></i>
                      Lihat
                    </button></td>
                  </tr>

      <!-- update data -->
      <div class="modal fade" id="modal-default<?php echo $data['ID_Ibunifas']  ?>">
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

                $ID_Ibunifas = $data['ID_Ibunifas'];
                $sql_edit    = $koneksi ->query("SELECT * from tb_ibunifas where
                  ID_Ibunifas='$ID_Ibunifas'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
                           

            ?>

              <div class="form-group">
                  <input type="hidden" class="form-control" name="ID_Ibunifas" value="<?php echo $data_edit['ID_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="Nama_Ibunifas" value="<?php echo $data_edit['Nama_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="ttl_ibunifas" value="<?php echo $data_edit['ttl_ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" name="Alamat_Ibunifas"><?php echo $data_edit['Alamat_Ibunifas'] ?></textarea>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="NoTelp_Ibunifas" value="<?php echo $data_edit['NoTelp_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" name="BB_Ibunifas" value="<?php echo $data_edit['BB_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" name="TB_Ibunifas" value="<?php echo $data_edit['TB_Ibunifas'] ?>"> 
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Persalinan</label>
                  <input type="date" class="form-control" name="Tglpersalinan_Ibunifas" value="<?php echo $data_edit['Tglpersalinan_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Waktu Ibu Nifas</label>
                  <input type="text" class="form-control" name="Waktu_Ibunifas" value="<?php echo $data_edit['Waktu_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tensi Darah</label>
                  <input type="text" class="form-control" name="Tensi_Ibunifas" value="<?php echo $data_edit['Tensi_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Gizi Ibu</label>
                  <input type="text" class="form-control" name="Gizi_Ibunifas" value="<?php echo $data_edit['Gizi_Ibunifas'] ?>">
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
              $ID_Ibunifas_ubah = $_POST['ID_Ibunifas'];
              $Nama_Ibunifas = $_POST['Nama_Ibunifas'];
              $ttl_ibunifas = $_POST['ttl_ibunifas'];
              $Alamat_Ibunifas = $_POST['Alamat_Ibunifas'];
              $NoTelp_Ibunifas = $_POST['NoTelp_Ibunifas'];
              $BB_Ibunifas = $_POST['BB_Ibunifas'];
              $TB_Ibunifas = $_POST['TB_Ibunifas'];
              $Tglpersalinan_Ibunifas = $_POST['Tglpersalinan_Ibunifas'];
              $Waktu_Ibunifas = $_POST['Waktu_Ibunifas'];
              $Tensi_Ibunifas = $_POST['Tensi_Ibunifas'];
              $Gizi_Ibunifas = $_POST['Gizi_Ibunifas'];


              $sql = $koneksi->query("update tb_ibunifas set Nama_Ibunifas='$Nama_Ibunifas', ttl_ibunifas='$ttl_ibunifas', Alamat_Ibunifas='$Alamat_Ibunifas', NoTelp_Ibunifas='$NoTelp_Ibunifas', BB_Ibunifas='$BB_Ibunifas', TB_Ibunifas='$TB_Ibunifas', Tglpersalinan_Ibunifas='$Tglpersalinan_Ibunifas', Waktu_Ibunifas='$Waktu_Ibunifas', Tensi_Ibunifas='$Tensi_Ibunifas', Gizi_Ibunifas='$Gizi_Ibunifas' where ID_Ibunifas='$ID_Ibunifas_ubah'");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Diubah");
                        window.location.href="?page=ibunifasdanmenyusui";  


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
      <div class="modal fade" id="modal-lihat<?php echo $data['ID_Ibunifas']  ?>">
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

                $ID_Ibunifas = $data['ID_Ibunifas'];
                $sql_edit    = $koneksi ->query("SELECT * from tb_ibunifas where
                  ID_Ibunifas='$ID_Ibunifas'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
            ?>
            
            <div class="lihatmod">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8">
                    <p>Nama         : <?php echo $data_edit['Nama_Ibunifas'] ?></p>
                    <p>Umur         : <?php $lahir    =new DateTime($data_edit['ttl_ibunifas']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun";
                    ?></p>
                    <p>Tanggal Lahir: <?php echo tgl_indo(date('Y-m-d', strtotime($data_edit['ttl_ibunifas']))); ?></p>
                    <p>Alamat       : <?php echo $data_edit['Alamat_Ibunifas'] ?></p>
                    <p>Nomor Telepon: <?php echo $data_edit['NoTelp_Ibunifas'] ?></p>
                    <p>Berat Badan  : <?php echo $data_edit['BB_Ibunifas'] ?></p>
                    <p>Tinggi Badan : <?php echo $data_edit['TB_Ibunifas'] ?></p>
                    <p>Tanggal Persalinan: <?php echo $data_edit['Tglpersalinan_Ibunifas'] ?></p>
                    <p>Waktu Ibu Nifas: <?php echo $data_edit['Waktu_Ibunifas'] ?></p>
                    <p>Tensi Darah: <?php echo $data_edit['Tensi_Ibunifas'] ?></p>
                    <p>Gizi Ibu: <?php echo $data_edit['Gizi_Ibunifas'] ?></p>
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
                  <input type="hidden" class="form-control" name="ID_Ibunifas">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="Nama_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="ttl_ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" >
                  <textarea class="form-control" name="Alamat_Ibunifas"></textarea>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="NoTelp_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" name="BB_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" name="TB_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Persalinan</label>
                  <input type="date" class="form-control" name="Tglpersalinan_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Waktu Ibu Nifas</label>
                  <input type="text" class="form-control" name="Waktu_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tensi Darah</label>
                  <input type="text" class="form-control" name="Tensi_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Gizi Ibu</label>
                  <input type="text" class="form-control" name="Gizi_Ibunifas">
              </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>



        <?php

            if (isset($_POST['Simpan'])) {
              $Nama_Ibunifas = $_POST['Nama_Ibunifas'];
              $ttl_ibunifas = $_POST['ttl_ibunifas'];
              $Alamat_Ibunifas = $_POST['Alamat_Ibunifas'];
              $NoTelp_Ibunifas = $_POST['NoTelp_Ibunifas'];
              $BB_Ibunifas = $_POST['BB_Ibunifas'];
              $TB_Ibunifas = $_POST['TB_Ibunifas'];
              $Tglpersalinan_Ibunifas = $_POST['Tglpersalinan_Ibunifas'];
              $Waktu_Ibunifas = $_POST['Waktu_Ibunifas'];
              $Tensi_Ibunifas = $_POST['Tensi_Ibunifas'];
              $Gizi_Ibunifas = $_POST['Gizi_Ibunifas'];

              $sql = $koneksi->query("insert into tb_ibunifas(Nama_Ibunifas,ttl_ibunifas,Alamat_Ibunifas,NoTelp_Ibunifas, BB_Ibunifas,TB_Ibunifas,Tglpersalinan_Ibunifas,Waktu_Ibunifas, Tensi_Ibunifas,Gizi_Ibunifas) values('$Nama_Ibunifas','$ttl_ibunifas','$Alamat_Ibunifas','$NoTelp_Ibunifas', '$BB_Ibunifas','$TB_Ibunifas','$Tglpersalinan_Ibunifas','$Waktu_Ibunifas', '$Tensi_Ibunifas','$Gizi_Ibunifas')");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Disimpan");
                        window.location.href="?page=ibunifasdanmenyusui";  


                      </script>
                <?php
              }

            }

            ?>
