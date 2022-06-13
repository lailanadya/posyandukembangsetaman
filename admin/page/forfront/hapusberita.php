<?php 
include '../koneksi.php';

$id_berita = $_GET['id_berita'];

mysqli_query($koneksi,"delete from tbl_berita where id_berita='$id_berita'");

header("location:../../?page=berita");
 ?>