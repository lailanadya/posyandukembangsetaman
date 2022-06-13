
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Lansia</h3>
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
                    <th>Alamat</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php
                            include 'page/koneksi.php';
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from tb_lansia");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama_lansia'] ?></td>
                  <td><?php echo $data['usia_lansia'] ?> Tahun</td>
                  <td><?php echo $data['alamat_lansia'] ?></td>
                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['id_lansia']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <a href="page/Lansia/hapus.php?id_lansia=<?php echo $data['id_lansia'];  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </a>
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-lihat<?php echo $data['id_lansia']  ?>"> 
                      Lihat
                    </button></td>
                  </tr>

      <!-- update data -->
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
                  <input type="hidden" class="form-control" name="id_lansia" value="<?php echo $data_edit['id_lansia'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_lansia" value="<?php echo $data_edit['nama_lansia'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia</label>
                  <input type="text" class="form-control" name="usia_lansia" value="<?php echo $data_edit['usia_lansia'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat_lansia" value="<?php echo $data_edit['alamat_lansia'] ?>">
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
              $id_lansia_ubah = $_POST['id_lansia'];
              $nama_lansia = $_POST['nama_lansia'];
              $usia_lansia = $_POST['usia_lansia'];
              $alamat_lansia = $_POST['alamat_lansia'];

              $sql = $koneksi->query("update tb_lansia set nama_lansia='$nama_lansia', usia_lansia='$usia_lansia', alamat_lansia='$alamat_lansia' where id_lansia='$id_lansia_ubah'");

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
      <!-- tutup update data -->

      <!-- Lihat Data -->
      <div class="modal fade" id="modal-lihat<?php echo $data['id_lansia']  ?>">
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

                $id_lansia      = $data['id_lansia'];
                $sql_edit     = $koneksi ->query("SELECT * from tb_lansia where id_lansia='$id_lansia'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
            ?>
            
            <div class="lihatmod">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8">
                    <p>Nama         : <?php echo $data_edit['nama_lansia'] ?></p>
                    <p>Usia         : <?php echo $data_edit['usia_lansia'] ?> Tahun</p>
                    <p>Alamat       : <?php echo $data_edit['alamat_lansia'] ?></p>
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
                  <input type="hidden" class="form-control" name="id_lansia">
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

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>
            </div>


        <?php

            if (isset($_POST['Simpan'])) {
              $nama_lansia = $_POST['nama_lansia'];
              $usia_lansia = $_POST['usia_lansia'];
              $alamat_lansia = $_POST['alamat_lansia'];

              $sql = $koneksi->query("insert into tb_lansia(nama_lansia,usia_lansia,alamat_lansia) values('$nama_lansia','$usia_lansia','$alamat_lansia')");

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

