<?php 
include '../koneksi.php';

$id_kader = $_GET['id_kader'];

mysqli_query($koneksi,"delete from tbl_kader where id_kader='$id_kader'");

header("location:../../?page=kader");
 ?>