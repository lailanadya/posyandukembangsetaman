<?php

		// $koneksi = new mysqli("localhost","root", "", "db_posyandu");

		$koneksi = mysqli_connect("localhost","root", "", "db_posyandu");
		
		function uniq_email($value){
		 global $koneksi;
		 $query= "SELECT * FROM tbl_akun WHERE email='$value'";
		 if($result = mysqli_query($koneksi,$query)){
		  if(mysqli_num_rows($result)==0 ) return true;
		  else return false;
		 }
		}

		function insert($query){
		 global $koneksi;
		 mysqli_query($koneksi,$query);
		 echo mysqli_error($koneksi);
		 return mysqli_affected_rows($koneksi);
		}


?>