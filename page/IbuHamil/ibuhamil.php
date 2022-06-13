
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Ibu Hamil</h3>
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
                            $sql = $koneksi->query("SELECT * from tbl_ibuhamil");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  
                  <td><?php echo $data['id_ibuhamil'] ?></td>
                  <td><?php echo $data['nama_ibu'] ?></td>
                  <td><?php echo $data['usia_ibu'] ?></td>
                  <td><?php echo $data['tgllahir_ibu'] ?></td>
                  <td><?php echo $data['alamat_ibu'] ?></td>
                  <td><?php echo $data['nohp_ibu'] ?></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['id_ibuhamil']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" type="Submit" name="Hapus" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-lihat<?php echo $data['id_ibuhamil']  ?>"> 
                      Lihat
                    </button></td>
                  </tr>
                   <!-- <form method="POST">

                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id_ibuhamil" value="
                      <?php echo $data['id_ibuhamil'] ?>">
                    </div>

                    

                    </form>

                    </td>

                    <td>

                    
                  </td>

           </tr> -->


          <div class="modal fade" id="modal-default<?php echo $data['id_ibuhamil']  ?>">
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

                $id_ibuhamil = $data['id_ibuhamil'];
                $sql_edit    = $koneksi ->query("SELECT * from tbl_ibuhamil where
                  id_ibuhamil='$id_ibuhamil'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
                           

            ?>

              <div class="form-group">
                  <input type="hidden" class="form-control" name="id_ibuhamil" value="
                  <?php echo $data_edit['id_ibuhamil'] ?>">
              </div>
                  
              <div class="form-group">
                  <label for="exampleInputEmail1">ID</label>
                  <input type="text" class="form-control" name="id_ibuhamil" value="
                  <?php echo $data_edit['id_ibuhamil'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_ibu" value="
                  <?php echo $data_edit['nama_ibu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="usia_ibu" value="
                  <?php echo $data_edit['usia_ibu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tgllahir_ibu" value="
                  <?php echo $data_edit['tgllahir_ibu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat_ibu" value="
                  <?php echo $data_edit['alamat_ibu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="nohp_ibu" value="
                  <?php echo $data_edit['nohp_ibu'] ?>">
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
              $id_ibuhamil_ubah = $_POST['id_ibuhamil'];
              $nama_ibu = $_POST['nama_ibu'];

              $sql = $koneksi->query("update tbl_ibuhamil set ='
                $nama_ibu' where id_ibuhamil='$id_ibuhamil_ubah'");

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
                  <input type="text" class="form-control" name="id_ibuhamil">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_ibu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="usia_ibu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tgllahir_ibu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat_ibu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="nohp_ibu">
              </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>

        <?php

            if (isset($_POST['Simpan'])) {
              $nama_ibu = $_POST['nama_ibu'];

              $sql = $koneksi->query("insert into tbl_ibuhamil(nama_ibu) values('$nama_ibu')");

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
                    $id_ibuhamil_hapus = $_POST['id_ibuhamil'];
                
                    $sql = $koneksi->query("delete from tbl_ibuhamil where id_ibuhamil = '$id_ibuhamil_hapus'");


                    if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Dihapus");
                        window.location.href="?page=ibuhamil";  


                      </script>
                <?php
              }

                }

             ?>