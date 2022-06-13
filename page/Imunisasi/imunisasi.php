
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Imunisasi</h3>
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
                    <th>Nama Ortu</th>
                    <th>Usia</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php

                      $koneksi = new mysqli("localhost","root", "", "DB_Posyandu");
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from tbl_anak");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  
                  <td><?php echo $data['id_anak'] ?></td>
                  <td><?php echo $data['nama_anak'] ?></td>
                  <td><?php echo $data['nama_ortu'] ?></td>
                  <td><?php echo $data['usia_anak'] ?></td>
                  <td><?php echo $data['tgl_lahir'] ?></td>
                  <td><?php echo $data['alamat_anak'] ?></td>
                  <td><?php echo $data['nohp_ortu'] ?></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['id_anak']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" type="Submit" name="Hapus" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-lihat<?php echo $data['id_anak']  ?>">
                      Lihat
                    </button></td>
                  </tr>
                  
                   <!-- <form method="POST">

                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id_anak" value="
                      <?php echo $data['id_anak'] ?>">
                    </div>

                    

                    </form>

                    </td>

                    <td>

                    
                  </td>

           </tr> -->


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
                  <input type="hidden" class="form-control" name="id_anak" value="
                  <?php echo $data_edit['id_anak'] ?>">
              </div>
              
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_anak" value="
                  <?php echo $data_edit['nama_anak'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama Orang Tua</label>
                  <input type="text" class="form-control" name="nama_ortu" value="
                  <?php echo $data_edit['nama_ortu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="usia_anak" value="
                  <?php echo $data_edit['usia_anak'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tgl_lahir" value="
                  <?php echo $data_edit['tgl_lahir'] ?>">

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat_anak" value="
                  <?php echo $data_edit['alamat_anak'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="nohp_ortu" value="
                  <?php echo $data_edit['nohp_ortu'] ?>">
              </div>
              
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>

            <?php } ?>


            </form>

            <?php

            if (isset($_POST['ubah'])) {
              $id_anak_ubah = $_POST['id_anak'];
              $nama_anak = $_POST['nama_anak'];

              $sql = $koneksi->query("update tbl_anak set nama_anak='
                $nama_anak' where id_anak='$id_anak_ubah'");

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
                  <input type="text" class="form-control" name="id_anak">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_anak">
              </div>

               <div class="form-group">
                  <label for="exampleInputEmail1">Nama Orang Tua</label>
                  <input type="text" class="form-control" name="nama_ortu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="usia_anak">
              </div>                

              <div class="form-group">
                  <label for="exampleInputEmail1">Tempat, Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tgl_lahir">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat_anak">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="nohp_ortu">
              </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>



        <?php

            if (isset($_POST['Simpan'])) {
              $nama_anak = $_POST['nama_anak'];

              $sql = $koneksi->query("insert into tbl_anak(nama_anak) values('$nama_anak')");

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
                    $id_anak_hapus = $_POST['id_anak'];
                
                    $sql = $koneksi->query("delete from tbl_anak where id_anak = '$id_anak_hapus'");


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