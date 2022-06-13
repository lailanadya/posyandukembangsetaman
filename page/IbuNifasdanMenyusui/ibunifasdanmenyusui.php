
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Ibu Nifas dan Menyusui</h3>
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
                    <th>No.Telp</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php

                      $koneksi = new mysqli("localhost","root", "", "DB_Posyandu");
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from TB_IbuNifas");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  
                  <td><?php echo $data['ID_Ibunifas'] ?></td>
                  <td><?php echo $data['Nama_Ibunifas'] ?></td>
                  <td><?php echo $data['Umur_Ibunifas'] ?></td>
                  <td><?php echo $data['ttl_ibunifas'] ?></td>
                  <td><?php echo $data['Alamat_Ibunifas'] ?></td>
                  <td><?php echo $data['NoTelp_Ibunifas'] ?></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['ID_Ibunifas']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" type="Submit" name="Hapus" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-lihat<?php echo $data['ID_Ibunifas']  ?>"> 
                      Lihat
                    </button></td>
                  </tr>
                   <!-- <form method="POST">

                    <div class="form-group">
                      <input type="hidden" class="form-control" name="ID_Ibunifas" value="
                      <?php echo $data['ID_Ibunifas'] ?>">
                    </div>

                    

                    </form>

                    </td>

                    <td>

                    
                  </td>

           </tr> -->


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
                $sql_edit    = $koneksi ->query("SELECT * from TB_IbuNifas where
                  ID_Ibunifas='$ID_Ibunifas'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
                           

            ?>

              <div class="form-group">
                  <input type="hidden" class="form-control" name="ID_Ibunifas" value="
                  <?php echo $data_edit['ID_Ibunifas'] ?>">
              </div>
                  
              <div class="form-group">
                  <label for="exampleInputEmail1">ID</label>
                  <input type="text" class="form-control" name="ID_Ibunifas" value="
                  <?php echo $data_edit['ID_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="Nama_Ibunifas" value="
                  <?php echo $data_edit['Nama_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="Umur_Ibunifas" value="
                  <?php echo $data_edit['Umur_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" name="ttl_ibunifas" value="
                  <?php echo $data_edit['ttl_ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="Alamat_Ibunifas" value="
                  <?php echo $data_edit['Alamat_Ibunifas'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="NoTelp_Ibunifas" value="
                  <?php echo $data_edit['NoTelp_Ibunifas'] ?>">
              </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>

            <?php } ?>


            </form>

            <?php

            if (isset($_POST['ubah'])) {
              $ID_Ibunifas_ubah = $_POST['ID_Ibunifas'];
              $Nama_Ibunifas = $_POST['Nama_Ibunifas'];

              $sql = $koneksi->query("update TB_IbuNifas set Nama_Ibunifas='
                $Nama_Ibunifas' where ID_Ibunifas='$ID_Ibunifas_ubah'");

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
                  <input type="text" class="form-control" name="ID_Ibunifas">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="Nama_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="Umur_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" name="ttl_ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="Alamat_Ibunifas">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="NoTelp_Ibunifas">
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

              $sql = $koneksi->query("insert into TB_IbuNifas(Nama_Ibunifas) values('$Nama_Ibunifas')");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Disimpan");
                        window.location.href="?page=IbuNifas";  


                      </script>
                <?php
              }

            }

            ?>



            <?php 

                if (isset($_POST['Hapus'])) {
                    $ID_Ibunifas_hapus = $_POST['ID_Ibunifas'];
                
                    $sql = $koneksi->query("delete from TB_IbuNifas where ID_Ibunifas = '$ID_Ibunifas_hapus'");


                    if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Dihapus");
                        window.location.href="?page=IbuNifas";  


                      </script>
                <?php
              }

                }

             ?>