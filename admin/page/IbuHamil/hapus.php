<?php 
include '../koneksi.php';

$id_ibuhamil = $_GET['id_ibuhamil'];

mysqli_query($koneksi,"delete from tbl_ibuhamil where id_ibuhamil='$id_ibuhamil'");

header("location:../../?page=ibuhamil");
 ?>