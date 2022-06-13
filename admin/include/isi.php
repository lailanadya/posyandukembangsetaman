<?php

		$page = @$_GET['page']; 
		if ($page=="datapasien") {
			include "page/datapasien/datapasien.php" ;
		}

		if ($page=="rincian") {
			include "page/akun/rincian.php" ;
		}
		if ($page=="edit") {
			include "page/akun/edit.php" ;
		}

		if ($page=="ibunifasdanmenyusui") {
			include "page/IbuNifasdanMenyusui/ibunifasdanmenyusui.php" ;
		}

		if ($page=="ibuhamil") {
			include "page/IbuHamil/ibuhamil.php" ;
		}

		if ($page=="keluargaberencana") {
			include "page/KeluargaBerencana/keluargaberencana.php" ;
		}

		if ($page=="imunisasi") {
			include "page/Imunisasi/imunisasi.php" ;
		}


		if ($page=="lansia") {
			include "page/Lansia/lansia.php" ;
		}

		if ($page=="slidechange") {
			include "page/forfront/slidechange.php" ;
		}

		if ($page=="kader") {
			include "page/forfront/kader.php" ;
		}

		if ($page=="dokumentasi") {
			include "page/forfront/dokumentasi.php" ;
		}

		if ($page=="berita") {
			include "page/forfront/berita.php" ;
		}

		if ($page=="aktivasi") {
			include "page/forfront/aktivasi.php" ;
		}

?>

