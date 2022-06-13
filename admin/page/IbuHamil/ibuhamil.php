
<div class="col-12">

<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Data Ibu Hamil</h3>
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
                      // $koneksi = new mysqli("localhost","root", "", "DB_Posyandu");
                          include 'page/koneksi.php';
                            $no = 1;
                            $sql = $koneksi->query("SELECT * from tbl_ibuhamil");
                            while ($data=$sql->fetch_assoc()) {
                           # code...
                  

                  ?>

                   <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama_ibu'] ?></td>
                  <td><?php $lahir    =new DateTime($data['tgllahir_ibu']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun";
                    ?>
                  </td>
                  <td><?php echo tgl_indo(date('Y-m-d', strtotime($data['tgllahir_ibu']))); ?></td>
                  <td><?php echo $data['alamat_ibu'] ?></td>
                  <td><?php echo $data['nohp_ibu'] ?></td>

                  <td><button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-default<?php echo $data['id_ibuhamil'];  ?>"> <i class="far fa-edit nav-icon"></i>
                      Ubah
                    </button>
                    <a href="page/IbuHamil/hapus.php?id_ibuhamil=<?php echo $data['id_ibuhamil'];  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger"> <i class="fa fa-trash nav-icon"></i>
                      Hapus
                    </a>
                    <button type="button" class="btn btn-info" data-toggle="modal" 
                    data-target="#modal-lihat<?php echo $data['id_ibuhamil']  ?>"><i class="fa fa-eye nav-icon"></i> 
                      Lihat
                    </button></td>
                  </tr>

      <!-- update data -->
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
                  <input type="hidden" class="form-control" name="id_ibuhamil" value="<?php echo $data_edit['id_ibuhamil'] ?>">
              </div>
                 
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_ibu" value="<?php echo $data_edit['nama_ibu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgllahir_ibu" value="<?php echo $data_edit['tgllahir_ibu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" name="alamat_ibu" ><?php echo $data_edit['alamat_ibu'] ?></textarea>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="nohp_ibu" value="<?php echo $data_edit['nohp_ibu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" name="berat_badan" value="<?php echo $data_edit['berat_badan'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" name="tinggi_badan" value="<?php echo $data_edit['tinggi_badan'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia Kandungan</label>
                  <input type="text" class="form-control" name="usia_kandungan" value="<?php echo $data_edit['usia_kandungan'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tensi Darah</label>
                  <input type="text" class="form-control" name="tensi_darah" value="<?php echo $data_edit['tensi_darah'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Gizi Ibu</label>
                  <input type="text" class="form-control" name="gizi_ibu" value="<?php echo $data_edit['gizi_ibu'] ?>">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Obat / Vitamin</label>
                  <input type="text" class="form-control" name="obat_vitamin" value="<?php echo $data_edit['obat_vitamin'] ?>">
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
              $id_ibuhamil_ubah = $_POST['id_ibuhamil'];
              $nama_ibu = $_POST['nama_ibu'];
              $tgllahir_ibu = $_POST['tgllahir_ibu'];
              $alamat_ibu = $_POST['alamat_ibu'];
              $nohp_ibu = $_POST['nohp_ibu'];
              $berat_badan = $_POST['berat_badan'];
              $tinggi_badan = $_POST['tinggi_badan'];
              $usia_kandungan = $_POST['usia_kandungan'];
              $tensi_darah = $_POST['tensi_darah'];
              $gizi_ibu = $_POST['gizi_ibu'];
              $obat_vitamin = $_POST['obat_vitamin'];

              $sql = $koneksi->query("update tbl_ibuhamil set nama_ibu='$nama_ibu',tgllahir_ibu='$tgllahir_ibu',alamat_ibu='$alamat_ibu',nohp_ibu='$nohp_ibu', berat_badan='$berat_badan',tinggi_badan='$tinggi_badan',usia_kandungan='$usia_kandungan',tensi_darah='$tensi_darah', gizi_ibu='$gizi_ibu',obat_vitamin='$obat_vitamin' where id_ibuhamil='$id_ibuhamil_ubah' ");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Diubah");
                        window.location.href="?page=ibuhamil";  


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
      <div class="modal fade" id="modal-lihat<?php echo $data['id_ibuhamil']  ?>">
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

                $id_ibuhamil = $data['id_ibuhamil'];
                $sql_edit    = $koneksi ->query("SELECT * from tbl_ibuhamil where
                  id_ibuhamil='$id_ibuhamil'");
                            while ($data_edit=$sql_edit->fetch_assoc()) {
            ?>
            
            <div class="lihatmod">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <p>Nama         : <?php echo $data_edit['nama_ibu'] ?></p>
                    <p>Usia         : <?php $lahir    =new DateTime($data_edit['tgllahir_ibu']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun";
                    ?>
                    </p>
                    <p>Tanggal Lahir: <?php echo tgl_indo(date('Y-m-d', strtotime($data_edit['tgllahir_ibu']))); ?></p>
                    <p>Alamat       : <?php echo $data_edit['alamat_ibu'] ?></p>
                    <p>Nomor Telepon: <?php echo $data_edit['nohp_ibu'] ?></p>
                    <p>Berat Badan: <?php echo $data_edit['berat_badan'] ?></p>
                    <p>Tinggi Badan       : <?php echo $data_edit['tinggi_badan'] ?></p>
                    <p>Usia Kandungan: <?php echo $data_edit['usia_kandungan'] ?></p>
                    <p>Tensi Darah: <?php echo $data_edit['tensi_darah'] ?></p>
                    <p>Gizi Ibu       : <?php echo $data_edit['gizi_ibu'] ?></p>
                    <p>Obat atau vitamin: <?php echo $data_edit['obat_vitamin'] ?></p>
                  </div>
                  <div class="col-sm-6"></div>
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
                  <input type="text" class="form-control" name="id_ibuhamil" hidden="">
              </div>  

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama_ibu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgllahir_ibu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea class="form-control" name="alamat_ibu"></textarea>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input type="text" class="form-control" name="nohp_ibu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Berat Badan</label>
                  <input type="text" class="form-control" name="berat_badan">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tinggi Badan</label>
                  <input type="text" class="form-control" name="tinggi_badan">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Usia Kandungan</label>
                  <input type="text" class="form-control" name="usia_kandungan">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Tensi Darah</label>
                  <input type="text" class="form-control" name="tensi_darah">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Gizi Ibu</label>
                  <input type="text" class="form-control" name="gizi_ibu">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Obat / Vitamin</label>
                  <input type="text" class="form-control" name="obat_vitamin">
              </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Simpan" class="btn btn-primary">Simpan Data</button>
            </div>

            </form>

            </div>
               </div>

                  </div>

                  </div>
        <?php

            if (isset($_POST['Simpan'])) {
              $nama_ibu = $_POST['nama_ibu'];
              $tgllahir_ibu = $_POST['tgllahir_ibu'];
              $alamat_ibu = $_POST['alamat_ibu'];
              $nohp_ibu = $_POST['nohp_ibu'];
              $berat_badan = $_POST['berat_badan'];
              $tinggi_badan = $_POST['tinggi_badan'];
              $usia_kandungan = $_POST['usia_kandungan'];
              $tensi_darah = $_POST['tensi_darah'];
              $gizi_ibu = $_POST['gizi_ibu'];
              $obat_vitamin = $_POST['obat_vitamin'];


              $sql = $koneksi->query("insert into tbl_ibuhamil(nama_ibu, tgllahir_ibu, alamat_ibu, nohp_ibu, berat_badan, tinggi_badan, usia_kandungan, tensi_darah, gizi_ibu, obat_vitamin) values('$nama_ibu','$tgllahir_ibu','$alamat_ibu','$nohp_ibu', '$berat_badan','$tinggi_badan','$usia_kandungan','$tensi_darah','$gizi_ibu', '$obat_vitamin')");

              if ($sql) {
                ?>
                      <script>
                        alert("Data Berhasil Disimpan");
                        window.location.href="?page=ibuhamil";  


                      </script>
                <?php
              }

            }

            ?>