
 <?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email   =mysqli_real_escape_string($conn,htmlspecialchars(trim($_POST['email'])));
$password   =mysqli_real_escape_string($conn,htmlspecialchars(trim($_POST['password'])));
$pass=sha1($password);
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from tbl_akun where email='$email' and password='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
  $_SESSION['email'] = $email;
  $_SESSION['status'] = "login";
  header("location:index.html");
}else{
  header("location:masuk.php?pesan=gagal");
}
?>