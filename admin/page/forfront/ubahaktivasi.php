<?php 
include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"UPDATE tbl_akun SET aktivasi = 1  where id='$id'");

header("location:../../?page=aktivasi");
 ?>