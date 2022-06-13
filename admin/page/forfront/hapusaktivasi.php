<?php 
include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbl_akun where id='$id'");

header("location:../../?page=aktivasi");
 ?>