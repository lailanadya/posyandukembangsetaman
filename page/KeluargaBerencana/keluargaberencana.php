
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Keluarga Berencana</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="mb-3">
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-tambah"> <i class="far fa-plus nav-icon"></i>
                      Tambah Data
                    </button>
          </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Usia</th>                    
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php

                            include '../koneksi.php';
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from TB_KeluargaBerencana");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  
                  <td><?php echo $data['ID_KB'] ?></td>
                  <td><?php echo $data['Nama_PKB'] ?></td>
                  <td><?php echo $data['Umur_PKB'] ?></td>
                  <td><?php echo $data['TTL_PKB'] ?></td>
                  <td><?php echo $data['Alamat_PKB'] ?></td>
                  <td><?php echo $data['NoTelp_PKB'] ?></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['ID_KB']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" type="Submit" name="Hapus" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-lihat<?php echo $data['ID_KB']  ?>">
                      Lihat
                    </button></td>
                  </tr>
                   <!-- <form method="POST">

                    <div class="form-group">
                      <input type="hidden" class="form-control" name="ID_KB" value="
                      <?php echo $data['ID_KB'] ?>">
                    </div>

                    

                    </form>

                    </td>

                    <td>

                    
                  </td>

           </tr> -->


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
                  <input type="hidden" class="form-control" name="ID_KB" value="
                  <?php echo $data_edit['ID_KB'] ?>">
              </div>
               
              <div class="form-group">
                  <label for="exampleInputEmail1">ID</label>
                  <input type="text" class="form-control" name="ID_KB" value="
                  <?php echo $data_edit['ID_KB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="Nama_PKB" value="
                  <?php echo $data_edit['Nama_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="Umur_PKB" value="
                  <?php echo $data_edit['Umur_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" name="TTL_PKB" value="
                  <?php echo $data_edit['TTL_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="Alamat_PKB" value="
                  <?php echo $data_edit['Alamat_PKB'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="NoTelp_PKB" value="
                  <?php echo $data_edit['NoTelp_PKB'] ?>">
              </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>

            <?php } ?>


            </form>

            <?php

            if (isset($_POST['ubah'])) {
              $ID_KB_ubah = $_POST['ID_KB'];
              $Nama_PKB = $_POST['Nama_PKB'];

              $sql = $koneksi->query("update TB_KeluargaBerencana set Nama_PKB='
                $Nama_PKB' where ID_KB='$ID_KB_ubah'");

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
                  <label for="exampleInputEmail1">ID Pasien</label>
                  <input type="text" class="form-control" name="ID_KB">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="Nama_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="Umur_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" name="TTL_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="Alamat_PKB">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="NoTelp_PKB">
              </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>



        <?php

            if (isset($_POST['Simpan'])) {
              $Nama_PKB = $_POST['Nama_PKB'];

              $sql = $koneksi->query("insert into TB_KeluargaBerencana(Nama_PKB) values('$Nama_PKB')");

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