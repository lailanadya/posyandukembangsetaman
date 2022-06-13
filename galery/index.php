<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Kelurahan Hambalang - Beranda</title>
  </head>
  <body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-light list" href="Halaman/struktur.php">Struktur Organisasi</a></li>
            <li><a class="dropdown-item text-light list" href="Halaman/visimisi.php">Visi & Misi</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-light" href="Halaman/datawarga.php">Data Warga</a></li>
            <li><a class="dropdown-item text-light" href="Halaman/potensi.php">Potensi Daerah</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Halaman/kontak.php">Kontak</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- end navbar -->

<!-- get started -->
<div class="row align-items-md-stretch">
  <div class="h-100 p-5 text-white bg-dark">
    <div class="icon brand p-1 d-flex">
      <div class="logo">
        <img src="image/logo-kabupaten.png" alt="" width="55" heigth="60">
      </div>
      <div class="detail">
        <h2 class="d-inline"> Kelurahan Hambalang</h2><br>
        <h5>Kec. Citeureup Kab. Bogor</h5>
      </div>
    </div>
  <br>
  <p>Selamat Datang di website Kelurahan/Desa Hambalang, Sistem Informasi ini memuat segala hal yang ada di wilayah hambalang mulai dari data administratif hingga dokumentasi wilayah. Mari pelajari lebih lanjut tentang hambalang dengan klik tombol dibawah.</p>
  <a href="https://id.wikipedia.org/wiki/Hambalang,_Citeureup,_Bogor" target="https://id.wikipedia.org/wiki/Hambalang,_Citeureup,_Bogor"><button class="btn btn-outline-success text-light" type="button">Pelajari</button></a>
  </div>
</div>

<div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" class="bc-home">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page"></li>
  </ol>
</nav>
</div>
<!-- end get started -->

<!-- Map & Masukan -->
<section class="section pb-5">
<div class="row">
  <!--Grid column-->
  <div class="col-lg-5 mb-4">
    <!--Form-->
    <div class="card">
      <!--Form Header-->
      <div class="card-header bg-success text-light">
        <h3>Masukan & Saran:</h3>
        <p>Masukan dan saran anda sangat berarti bagi perkembangan wilayah hambalang.</p>
      </div>
      <!--Form Body-->
      <div class="card-body">
        <div class="md-form">
          <label for="form-name" class="text-success">>Nama</label>
          <input type="text" id="form-name" class="form-control">
        </div>

        <div class="md-form">
          <label for="form-email" class="text-success">>Email</label>
          <input type="text" id="form-email" class="form-control">
        </div>

        <div class="md-form">
          <label for="form-Subject" class="text-success">>Subject</label>
          <input type="text" id="form-Subject" class="form-control">
        </div>

        <div class="md-form">
          <label for="form-text" class="text-success">>Masukan / Saran</label>
          <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
        </div>

        <div class="text-center mt-4">
          <button class="btn btn-outline-success"> Kirim </button>
        </div>

      </div>

    </div>
    <!--End Form-->

  </div>
  <!--Grid column-->
  <div class="col-lg-7">
    <!--Google map-->
    <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 513px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44845.49404535122!2d106.87834699929711!3d-6.544510957024421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c74c9236f29d%3A0x3927e2b3c909f3ed!2sHambalang%2C%20Citeureup%2C%20Bogor%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1627523557819!5m2!1sen!2sid" width="600" height="700" style="border:0;" allowfullscreen loading="lazy"></iframe>
    </div>
  </div>
  <!--Grid column-->
</div>
</section>
<!-- end Map & Masukan -->

<!-- content -->
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Berita Terkini</h1>
    <hr class="my-4">
    <div class="row mb-5 mx-auto justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow" style="width: 18rem;">
          <img class="card-img-top" src="image/taman-fathan1.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="https://travel.kompas.com/read/2021/05/24/180600227/harga-tiket-dan-jam-buka-taman-fathan-hambalang-bogor-2021?page=all" target="https://travel.kompas.com/read/2021/05/24/180600227/harga-tiket-dan-jam-buka-taman-fathan-hambalang-bogor-2021?page=all" class="text-decoration-none text-success"><h5 class="card-title">Harga tiket dan jam buka Taman Fathan Hambalang Bogor di tahun 2021</h5></a>
            
            <p class="card-text">Hari libur memang menjadi saat yang pas untuk berwisata dengan catatan tetap menerapkan protokol kesehatan karena masih pandemi Covid-19.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow" style="width: 18rem;">
          <img class="card-img-top" src="image/berita1.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="https://bogor.suara.com/read/2021/07/15/171203/kabar-simpang-siur-dampak-setelah-di-vaksin-bikin-warga-bogor-tolak-vaksinasi?page=all" target="https://bogor.suara.com/read/2021/07/15/171203/kabar-simpang-siur-dampak-setelah-di-vaksin-bikin-warga-bogor-tolak-vaksinasi?page=all" class="text-decoration-none text-success"><h5 class="card-title">Kabar Simpang Siur Dampak Setelah di Vaksin Bikin Warga Bogor Tolak Vaksinasi</h5></a>
            <p class="card-text"> Warga Bogor tolak vaksinasi Covid-19, hal itu disebabkan informasi simpang siur dampak setelah di vaksin. Padahal, saat ini pemerintah tengah gencar melakukan vaksinasi untuk masyarakat.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow" style="width: 18rem;">
          <img class="card-img-top" src="image/berita2.jpg" alt="Card image cap">
          <div class="card-body">
            <a href=https://www.metropolitan.id/2021/05/pemdes-hambalang-kembangkan-potensi-desa-buka-resto-coffee-129-sebagai-wisata-kuliner/" target="https://www.metropolitan.id/2021/05/pemdes-hambalang-kembangkan-potensi-desa-buka-resto-coffee-129-sebagai-wisata-kuliner/" class="text-decoration-none text-success"><h5 class="card-title">Pemdes Hambalang Kembangkan Potensi Desa, Buka Resto & Coffee 129 sebagai Wisata Kuliner</h5></a>
            <p class="card-text">KEPALA Desa Hambalang Wawang Sudarwan menga­takan, Resto & Coffee 129 itu salah satu potensi wisata yang nantinya dikelola Badan Usaha Milik Desa (BUMDes). Kemarin, restoran itu resmi dibuka untuk umum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end content -->
<!-- footer -->
<br>
<footer class="bd-footer py-5 mt-5 bg-dark text-light ">
  <div class="container">
    
    <h4><img src="image/logo-kabupaten.png" alt="" width="20" heigth="30" style="margin:10px;">Kelurahan Hambalang</h4>
    <br>
    <i>Kelurahan Hambalang Copyright 2021 - Kelompok 1 PPW</i>
  </div>
</footer>
<!-- end footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>