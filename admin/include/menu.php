<?php
$page = @$_GET['page'];


if ($page == "datapasien") {
  $DataPasienaktif ='active';
}

if ($page == "TambahDataPasien") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $Tambahdatapasienaktif ='active';
}

if ($page == "ibuhamil") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $IbuHamilaktif ='active';
}

if ($page == "ibunifasdanmenyusui") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $IbuNifasdanMenyusuiaktif ='active';
}

if ($page == "keluargaberencana") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $KeluargaBerencanaaktif ='active';
}

if ($page == "imunisasi") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $Imunisasiaktif ='active';
}

if ($page == "lansia") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $Lansiaaktif ='active';
}

if ($page == "slidechange") {
  $slideaktif ='active';
}

if ($page == "kader") {
  $kaderaktif ='active';
}

if ($page == "dokumentasi") {
  $dokumentasiaktif ='active';
}

if ($page == "berita") {
  $beritaaktif ='active';
}

if ($page == "aktivasi") {
  $aktivasiaktif ='active';
}

?>


<a href="index3.html" class="brand-link" style="background-color: #ba68c8">
<img src="../assets/img/logo2.png" style=" width:100%; height: 40px;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #ba68c8">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="?page=rincian" class="d-block"><?php echo $_SESSION['email']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview <?php echo $Tambahdatapasienaktif1 ?>">
            <a href="#" class="nav-link <?php echo $Tambahdatapasienaktif2 ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tambah Data Pasien
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=ibuhamil" class="nav-link <?php echo $IbuHamilaktif; ?>">
                  <p class="text-center text-light">Ibu Hamil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=ibunifasdanmenyusui" class="nav-link <?php echo $IbuNifasdanMenyusuiaktif; ?>">
                  <p class="text-light">Ibu Nifas dan Menyusui</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=keluargaberencana" class="nav-link <?php echo $KeluargaBerencanaaktif; ?>">
                  <p class="text-light">Keluarga Berencana</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=imunisasi" class="nav-link <?php echo $Imunisasiaktif; ?>">
                  <p class="text-light">Imunisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=lansia" class="nav-link <?php echo $Lansiaaktif; ?>">
                  <p class="text-light">Lansia</p>
                </a>
              </li>
            </ul>
          </li> 
          <?php if($_SESSION['tipe']!="kader"){ ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?page=slidechange" class="nav-link <?php echo $slideaktif; ?>"><i class="nav-icon fas fa-stream"></i>Foto Slideshow</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?page=kader" class="nav-link <?php echo $kaderaktif; ?>"><i class="nav-icon fa fa-address-card"></i>Kader</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?page=dokumentasi" class="nav-link <?php echo $dokumentasiaktif; ?>"><i class="nav-icon fa fa-camera"></i>Dokumentasi</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?page=berita" class="nav-link <?php echo $beritaaktif; ?>"><i class="nav-icon fa fa-newspaper"></i>Berita</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?page=aktivasi" class="nav-link <?php echo $aktivasiaktif; ?>"><i class="nav-icon fa fa-users"></i>Aktivasi akun</a>
      </li>
    <?php } ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="page/login/logout.php" class="nav-link" onclick="return confirm('Apakah anda yakin ingin keluar?')"><i class="nav-icon fa fa-sign-out-alt"></i>Keluar</a>
      </li>
      <!-- /.sidebar-menu -->
    </div>