<?php

		$page = @$_GET['page']; 
		if ($page=="datapasien") {
			include "page/datapasien/datapasien.php" ;
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
?>

