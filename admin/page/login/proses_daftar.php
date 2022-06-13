<?php 
include "../koneksi.php";
if(isset($_POST['submit'])){
$namadepan =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['namadepan'])));
$namabelakang =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['namabelakang'])));
$email =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['email'])));
$telp =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['telp'])));
$password  =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['password'])));
$password1 =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['password1'])));
$tipe =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['tipe'])));
$pwd='';
if($password != $password1){
 echo "password tidak cocok";
}
if (!uniq_email($email)) {
 echo "Email Sudah Terdaftar";
}else{
 $pwd=sha1($password);
 $result = insert("INSERT INTO tbl_akun (nama_depan,nama_belakang,email,no_telp,password,tipe)  VALUES('$namadepan','$namabelakang','$email','$telp','$pwd', '$tipe')");
  if($result == 1){
   header("Location:masuk.php");
  }
}
}
 ?>