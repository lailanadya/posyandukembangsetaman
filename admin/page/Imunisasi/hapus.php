<?php 
include '../koneksi.php';

$id_anak = $_GET['id_anak'];

mysqli_query($koneksi,"delete from tbl_anak where id_anak='$id_anak'");

header("location:../../?page=imunisasi");
 ?>