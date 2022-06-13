
 <?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';
 
// menangkap data yang dikirim dari form
$email   =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['email'])));
$password   =mysqli_real_escape_string($koneksi,htmlspecialchars(trim($_POST['password'])));
$pass=sha1($password);
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tbl_akun where email='$email' and password='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){

	$dataa = mysqli_fetch_assoc($data);

	// cek jika user login sebagai admin
	if($dataa['tipe']=="admin" && $dataa['aktivasi']==1){
 
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['tipe'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../../index.php");
 
	// cek jika user login sebagai pegawai
	}else if($dataa['tipe']=="kader" && $dataa['aktivasi']==1){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['tipe'] = "kader";
		// alihkan ke halaman dashboard pegawai
		header("location:../../index.php");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		header("location:masuk.php?pesan=gagal");
	}	
}else{
	header("location:masuk.php?pesan=gagal");
}
?>