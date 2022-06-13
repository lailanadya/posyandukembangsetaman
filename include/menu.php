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

if ($page == "IbuHamil") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $IbuHamilaktif ='active';
}

if ($page == "ibunifasdanmenyusui") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $IbuNifasdanMenyusuiaktif ='active';
}

if ($page == "KeluargaBerencana") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $KeluargaBerencanaaktif ='active';
}

if ($page == "Imunisasi") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $Imunisasiaktif ='active';
}

if ($page == "lansia") {
  $Tambahdatapasienaktif1 ='menu-open';
  $Tambahdatapasienaktif2 ='active';
  $Lansiaaktif ='active';
}

?>


<a href="index3.html" class="brand-link" style="background-color: #ba68c8">
      <img src="dist/img/LogoPosyandu.png"
           style="opacity: .8 width:40px; height: 40px; font-style: bold">
      <span class="brand-text font-weight-light">Posyandu Kembang Setaman</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #ba68c8">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Kader RT 1</a>
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
                  <p class="text-center">Ibu Hamil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=ibunifasdanmenyusui" class="nav-link <?php echo $IbuNifasdanMenyusuiaktif; ?>">
                  <p>Ibu Nifas dan Menyusui</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=keluargaberencana" class="nav-link <?php echo $KeluargaBerencanaaktif; ?>">
                  <p>Keluarga Berencana</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=imunisasi" class="nav-link <?php echo $Imunisasiaktif; ?>">
                  <p>Imunisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=lansia" class="nav-link <?php echo $Lansiaaktif; ?>">
                  <p>Lansia</p>
                </a>
              </li>
            </ul>
          </li>
      <!-- /.sidebar-menu -->
    </div>