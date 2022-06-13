<?php 
include '../koneksi.php';

$ID_KB = $_GET['ID_KB'];

mysqli_query($koneksi,"delete from tb_keluargaberencana where ID_KB='$ID_KB'");

header("location:../../?page=keluargaberencana");
 ?>