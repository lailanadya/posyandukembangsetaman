<?php 
include '../koneksi.php';

$ID_Ibunifas = $_GET['ID_Ibunifas'];

mysqli_query($koneksi,"delete from tb_ibunifas where ID_Ibunifas='$ID_Ibunifas'");

header("location:../../?page=ibunifasdanmenyusui");
 ?>