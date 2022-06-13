
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Foto Slideshow</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="mb-3">
                    
                </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Kondisi</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php

                            include 'page/koneksi.php';
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from tbl_akun WHERE tipe = 'kader'");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama_depan']; $data['nama_belakang'] ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td><?php echo $data['no_telp'] ?></td>
                  <td><?php 
                  if($data['aktivasi']!=1){
                    echo "Non-aktif";
                  }else{
                    echo "Aktif";
                  } ?></td>

                  <td>
                    <a href="page/forfront/ubahaktivasi.php?id=<?php echo $data['id'];  ?>" onclick="return confirm('Apakah anda yakin ingin mengaktifkan akun ini ?')" class="btn btn-primary"> <i class="fa fa-toggle-on nav-icon"></i>
                      Aktifkan
                    </a>
                    <a href="page/forfront/nonaktivasi.php?id=<?php echo $data['id'];  ?>" onclick="return confirm('Apakah anda yakin ingin non-aktifkan akun ini ?')" class="btn btn-secondary"> <i class="fa fa-toggle-off nav-icon"></i>
                      Non-Aktifkan
                    </a>
                    <a href="page/forfront/hapusaktivasi.php?id=<?php echo $data['id'];  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus akun ini ?')" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </a></td>
                  </tr>

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
                  <input type="hidden" class="form-control" name="id_kader">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_kader">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan_kader">
              </div>

               <div class="form-group">
                  <label for="exampleInputEmail1">File Foto</label>
                  <input type="file" class="form-control" name="foto_kader">
              </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>



        <?php

            if (isset($_POST['Simpan'])) {
              $nama_kader = $_POST['nama_kader'];
              $jabatan_kader = $_POST['jabatan_kader'];
              $foto_kader = $_FILES['foto_kader']['name'];

            //cek dulu jika ada gambar produk jalankan coding ini
            if($foto_kader != "") {
              $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
              $x = explode('.', $foto_kader); //memisahkan nama file dengan ekstensi yang diupload
              $ekstensi = strtolower(end($x));
              $file_tmp = $_FILES['foto_kader']['tmp_name'];   
              $angka_acak     = rand(1,999);
              $nama_gambar_baru = $angka_acak.'-'.$foto_kader; //menggabungkan angka acak dengan nama file sebenarnya
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                            move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                              // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                              $query = "INSERT INTO tbl_kader (nama_kader, jabatan_kader, foto_kader) VALUES ('$nama_kader', '$jabatan_kader','$nama_gambar_baru')";
                              $result = mysqli_query($koneksi, $query);
                              // periska query apakah ada error
                              if(!$result){
                                  die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                              } else {
                                //tampil alert dan akan redirect ke halaman index.php
                                //silahkan ganti index.php sesuai halaman yang akan dituju
                                echo "<script>alert('Data berhasil ditambah.');window.location='?page=kader';</script>";
                              }

                        } else {     
                         //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='?page=kader';</script>";
                        }
            } else {
               $query = "INSERT INTO tbl_kader (nama_kader, jabatan_kader, foto_kader) VALUES ('$nama_kader', '$jabatan_kader, null)";
                              $result = mysqli_query($koneksi, $query);
                              // periska query apakah ada error
                              if(!$result){
                                  die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                              } else {
                                //tampil alert dan akan redirect ke halaman index.php
                                //silahkan ganti index.php sesuai halaman yang akan dituju
                                echo "<script>alert('Data berhasil ditambah.');window.location='?page=kader';</script>";
                              }
            }

            }

            ?>
