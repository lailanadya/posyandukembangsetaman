
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Foto Slideshow</h3>
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
                    <th>File Name</th>
                    <th>File Foto</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php

                            include 'page/koneksi.php';
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from tbl_slide");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama_slide'] ?></td>
                  <td><?php echo $data['foto_slide'] ?></td>
                  <td style="text-align: center;"><img src="gambar/<?php echo $data['foto_slide']; ?>" style="width: 120px;"></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['id_slide']  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                  <a href="page/forfront/hapusslide.php?id_slide=<?php echo $data['id_slide'];  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </a>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lihat<?php echo $data['id_slide']  ?>"> <i class="fa fa-eye nav-icon"></i>
                      Lihat
                    </button></td>
                  </tr>

      <!-- update data -->
      <div class="modal fade" id="modal-default<?php echo $data['id_slide']  ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <form method="POST" enctype="multipart/form-data">
            
            <?php 

                $id_slide = $data['id_slide'];
                $sql_edit    = $koneksi ->query("SELECT * from tbl_slide where
                  id_slide='$id_slide'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
                           

            ?>

              <div class="form-group">
                  <input type="hidden" class="form-control" name="id_slide" value="<?php echo $data_edit['id_slide'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_slide" value="<?php echo $data_edit['nama_slide'] ?>">
              </div>

               <div class="form-group">
                  <label for="exampleInputEmail1">File Foto</label>
                  <input type="file" class="form-control" name="foto_slide">
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
              $id = $_POST['id_slide'];
              $nama_slide = $_POST['nama_slide'];
              $foto_slide = $_FILES['foto_slide']['name'];

            if($foto_slide != "") {
                $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
                $x = explode('.', $foto_slide); //memisahkan nama file dengan ekstensi yang diupload
                $ekstensi = strtolower(end($x));
                $file_tmp = $_FILES['foto_slide']['tmp_name'];
                $nama_gambar_baru = $foto_slide; //menggabungkan angka acak dengan nama file sebenarnya
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                              move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                                  
                                // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                               $query  = "UPDATE tbl_slide SET nama_slide = '$nama_slide', foto_slide = '$nama_gambar_baru'";
                                $query .= "WHERE id_slide = '$id'";
                                $result = mysqli_query($koneksi, $query);
                                // periska query apakah ada error
                                if(!$result){
                                    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                         " - ".mysqli_error($koneksi));
                                } else {
                                  //tampil alert dan akan redirect ke halaman index.php
                                  //silahkan ganti index.php sesuai halaman yang akan dituju
                                  echo "<script>alert('Data berhasil diubah.');window.location='?page=slidechange';</script>";
                                }
                          } else {     
                           //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                              echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='?page=slidechange';</script>";
                          }
                } else {
                  // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                  $query  = "UPDATE tbl_slide SET nama_slide = '$nama_slide'";
                  $query .= "WHERE id_slide = '$id'";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                         " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='?page=slidechange';</script>";
                  }
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
      <div class="modal fade" id="modal-lihat<?php echo $data['id_slide']  ?>">
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

                $id_slide      = $data['id_slide'];
                $sql_edit     = $koneksi ->query("SELECT * from tbl_slide where id_slide='$id_slide'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
            ?>
            
            <div class="lihatmod">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8">
                    <p>Nama : <?php echo $data_edit['nama_slide'] ?></p>
                    <p>File Name : <?php echo $data_edit['foto_slide'] ?></p>
                    <img src="gambar/<?php echo $data['foto_slide']; ?>" style="width: 400px;">
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
              
            <form method="POST" enctype="multipart/form-data">
            
              <div class="form-group">
                  <input type="hidden" class="form-control" name="id_slide">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_slide">
              </div>

               <div class="form-group">
                  <label for="exampleInputEmail1">File Foto</label>
                  <input type="file" class="form-control" name="foto_slide">
              </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>



        <?php

            if (isset($_POST['Simpan'])) {
              $nama_slide = $_POST['nama_slide'];
              $foto_slide = $_FILES['foto_slide']['name'];

            //cek dulu jika ada gambar produk jalankan coding ini
            if($foto_slide != "") {
              $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
              $x = explode('.', $foto_slide); //memisahkan nama file dengan ekstensi yang diupload
              $ekstensi = strtolower(end($x));
              $file_tmp = $_FILES['foto_slide']['tmp_name'];   
              $angka_acak     = rand(1,999);
              $nama_gambar_baru = $angka_acak.'-'.$foto_slide; //menggabungkan angka acak dengan nama file sebenarnya
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                            move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                              // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                              $query = "INSERT INTO tbl_slide (nama_slide, foto_slide) VALUES ('$nama_slide','$nama_gambar_baru')";
                              $result = mysqli_query($koneksi, $query);
                              // periska query apakah ada error
                              if(!$result){
                                  die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                              } else {
                                //tampil alert dan akan redirect ke halaman index.php
                                //silahkan ganti index.php sesuai halaman yang akan dituju
                                echo "<script>alert('Data berhasil ditambah.');window.location='?page=slidechange';</script>";
                              }

                        } else {     
                         //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='?page=slidechange';</script>";
                        }
            } else {
               $query = "INSERT INTO tbl_slide (nama_slide, foto_slide) VALUES ('$nama_slide', null)";
                              $result = mysqli_query($koneksi, $query);
                              // periska query apakah ada error
                              if(!$result){
                                  die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                              } else {
                                //tampil alert dan akan redirect ke halaman index.php
                                //silahkan ganti index.php sesuai halaman yang akan dituju
                                echo "<script>alert('Data berhasil ditambah.');window.location='?page=slidechange';</script>";
                              }
            }

            }

            ?>
