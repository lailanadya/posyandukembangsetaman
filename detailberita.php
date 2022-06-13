<?php 
  include 'admin/page/koneksi.php';

//   $slider = mysqli_query($koneksi,"SELECT * FROM tbl_slide ORDER BY id_slide DESC");
$link = $_SERVER['PHP_SELF'];
$getid = substr($link,-1);


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <?php $sql = $koneksi->query("SELECT * from tbl_berita where id_berita = $getid");
    while ($data=$sql->fetch_assoc()) {
    // echo $data['isi_berita'] ;die;
    ?>
            <p  class="text-decoration-none text-success"><h5 class="card-title"><?php echo $data['judul_berita'] ?></h5></p>

        <!-- <p><?= $data['judul_berita'];?></p> -->
        <p><?= $data['isi_berita'];?></p>

<?php } ?>

</body>
 </html>