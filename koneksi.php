<?php
// isi nama host, username mysql, dan password mysql anda
//$host = mysqli_connect("localhost","root","");
// $database = 'login';
$host="localhost";
$username="root";
$pass="";
$db_name="db_posyandu";

// isikan dengan nama database yang akan di hubungkan
//$db = mysqli_select_db($host, $database);
 
//if($db){
//	echo "koneksi database berhasil.";
//}else{
//	echo "koneksi database gagal.";
//}

$conn = mysqli_connect($host,$username,$pass,$db_name);
if (mysqli_connect_errno())
{
	echo "<script language='javascript'>alert('Gagal Koneksi Database MySql !!')</script>";	
}else
{
	echo "<script language='javascript'>alert('Koneksi Database MySql Berhasil !!')</script>";
}

function uniq_email($value){
 global $conn;
 $query= "SELECT * FROM tbl_akun WHERE email='$value'";
 if($result = mysqli_query($conn,$query)){
  if(mysqli_num_rows($result)==0 ) return true;
  else return false;
 }
}

function insert($query){
 global $conn;
 mysqli_query($conn,$query);
 echo mysqli_error($conn);
 return mysqli_affected_rows($conn);
}

// function read($value){
//  global $conn;
//  $rows=[];
//  $result = mysqli_query($conn,$value);
//  if(mysqli_num_rows($result) > 0) {
//   while ($row = mysqli_fetch_row($result)) {
//    $rows[] = $row;  
//   }  
//  }
//  return $rows;
//  mysqli_close($conn);
// }

// function cek_email($value){
//  global $conn;
//  $query= "SELECT * FROM tbl_akun WHERE email='$value'";
//  if($result = mysqli_query($conn,$query)){
//   if(mysqli_num_rows($result)!= 0 ) return true;
//   else return false;
//  } 
// }
?>
