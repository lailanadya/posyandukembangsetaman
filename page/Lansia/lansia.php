
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Lansia</h3>
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
                    <th>Alamat</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php

                      $koneksi = new mysqli("localhost","root", "", "DB_Posyandu");
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from tb_lansia");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  
                  <td><?php echo $data['id_lansia'] ?></td>
                  <td><?php echo $data['nama_lansia'] ?></td>
                  <td><?php echo $data['usia_lansia'] ?></td>
                  <td><?php echo $data['alamat_lansia'] ?></td>
                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['id_lansia']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" type="Submit" name="Hapus" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-lihat<?php echo $data['id_lansia']  ?>"> 
                      Lihat
                    </button></td>
                  </tr>
                   <!-- <form method="POST">

                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id_lansia" value="
                      <?php echo $data['id_lansia'] ?>">
                    </div>

                    

                    </form>

                    </td>

                    <td>

                    
                  </td>

           </tr> -->


          <div class="modal fade" id="modal-default<?php echo $data['id_lansia']  ?>">
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

                $id_lansia = $data['id_lansia'];
                $sql_edit    = $koneksi ->query("SELECT * from tb_lansia where
                  id_lansia='$id_lansia'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
                           

            ?>

              <div class="form-group">
                  <input type="hidden" class="form-control" name="id_lansia" value="
                  <?php echo $data_edit['id_lansia'] ?>">
              </div>
                  
              <div class="form-group">
                  <label for="exampleInputEmail1">ID</label>
                  <input type="text" class="form-control" name="id_lansia" value="
                  <?php echo $data_edit['id_lansia'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_lansia" value="
                  <?php echo $data_edit['nama_lansia'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="usia_lansia" value="
                  <?php echo $data_edit['usia_lansia'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat_lansia" value="
                  <?php echo $data_edit['alamat_lansia'] ?>">
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
              $id_lansia_ubah = $_POST['id_lansia'];
              $nama_lansia = $_POST['nama_lansia'];

              $sql = $koneksi->query("update tb_lansia set nama_lansia='
                $nama_lansia' where id_lansia='$id_lansia_ubah'");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Diubah");
                        window.location.href="?page=lansia";  


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
                  <label for="exampleInputEmail1">No</label>
                  <input type="text" class="form-control" name="no_lansia">
              </div>
                  
              <div class="form-group">
                  <label for="exampleInputEmail1">ID Pasien</label>
                  <input type="text" class="form-control" name="id_lansia">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_lansia">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="usia_lansia">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat_lansia">
              </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>



        <?php

            if (isset($_POST['Simpan'])) {
              $nama_lansia = $_POST['nama_lansia'];

              $sql = $koneksi->query("insert into tb_lansia(nama_lansia) values('$nama_lansia')");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Disimpan");
                        window.location.href="?page=lansia";  


                      </script>
                <?php
              }

            }

            ?>



            <?php 

                if (isset($_POST['Hapus'])) {
                    $id_lansia_hapus = $_POST['id_lansia'];
                
                    $sql = $koneksi->query("delete from tb_lansia where id_lansia = '$id_lansia_hapus'");


                    if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Dihapus");
                        window.location.href="?page=lansia";  


                      </script>
                <?php
              }

                }

             ?>