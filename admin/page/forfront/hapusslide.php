<?php 
include '../koneksi.php';

$id_slide = $_GET['id_slide'];

mysqli_query($koneksi,"delete from tbl_slide where id_slide='$id_slide'");

header("location:../../?page=slidechange");
 ?>