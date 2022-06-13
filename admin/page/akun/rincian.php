
            <div class="modal-body">
    
            <?php 
                include 'page/koneksi.php';
                $email = $_SESSION['email']; // mengambil username dari session yang login

                $sql_edit    = $koneksi ->query("SELECT * from tbl_akun where email='$email'");
                            while ($data=$sql_edit->fetch_assoc()) {
                

            ?>

            <p>Nama : <?php echo $data['nama_depan'];?> <?php echo $data['nama_belakang'] ?></p>
            <p>Email : <?php echo $data['email'] ?></p>
            <p>No Telepon : <?php echo $data['no_telp'] ?></p>
            <p>Password : <?php echo $data['password']?></p>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default<?php echo $data['id']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
            </button>
            </div>

      <!-- update data -->
      <div class="modal fade" id="modal-default<?php echo $data['id']  ?>">
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

                $id = $data['id'];
                $sql_edit    = $koneksi ->query("SELECT * from tbl_akun where
                  id='$id'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
                           

            ?>

              <div class="form-group">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $data_edit['id'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama Depan</label>
                  <input type="text" class="form-control" name="nama_depan" value="<?php echo $data_edit['nama_depan'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama Belakang</label>
                  <input type="text" class="form-control" name="nama_belakang" value="<?php echo $data_edit['nama_belakang'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $data_edit['email'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Telepon</label>
                  <input type="text" class="form-control" name="no_telp" value="<?php echo $data_edit['no_telp'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="text" class="form-control" name="password">
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
              $id_akun_ubah = $_POST['id'];
              $nama_depan = $_POST['nama_depan'];
              $nama_belakang = $_POST['nama_belakang'];
              $email = $_POST['email'];
              $no_telp = $_POST['no_telp'];
              $password = $_POST['password'];
              $pwd=sha1($password);

              $sql = $koneksi->query("UPDATE tbl_akun SET nama_depan = '$nama_depan', nama_belakang = '$nama_belakang', email = '$email', no_telp = '$no_telp', password='$pwd' WHERE id='$id'");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Diubah");
                        window.location.href="?page=rincian";  


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

            <?php } ?>

      