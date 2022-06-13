<?php 
include '../koneksi.php';

$id_dokumentasi = $_GET['id_dokumentasi'];

mysqli_query($koneksi,"delete from tbl_dokumentasi where id_dokumentasi='$id_dokumentasi'");

header("location:../../?page=dokumentasi");
 ?>