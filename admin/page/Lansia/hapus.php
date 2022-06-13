<?php 
include '../koneksi.php';

$id_lansia = $_GET['id_lansia'];

mysqli_query($koneksi,"delete from tb_lansia where id_lansia='$id_lansia'");

header("location:../../?page=lansia");
 ?>