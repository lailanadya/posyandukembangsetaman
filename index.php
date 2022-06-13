<?php 
  include 'admin/page/koneksi.php';

  $slider = mysqli_query($koneksi,"SELECT * FROM tbl_slide ORDER BY id_slide DESC");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Posyandu Kembang Setaman</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v2.1.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Senin - Sabtu, 08:00 - 16:00 WIB
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Hubungi 0852 1765 8527
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Informasi</a></li>
          <li><a href="#doctors">Tim Kader</a></li>
          <li><a href="#gallery">Dokumentasi</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="drop-down"><a href="#">Deep Drop Down</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
          <li><a href="#contact">Kontak</a></li>
          <li><a href="admin/page/login/masuk.php">Login</a></li> 
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators">
        <?php 
            $no = 0;
          for($no;$no<0;$no++){
        ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $no ?>" class="<?php if($no == 0){echo 'active';}else{echo 'notactive';}?>"></li>
        <?php 
          }
        ?>
      </ol>
        
      <div class="carousel-inner" role="listbox">
        <?php 
          $no = 0;
          while($row = mysqli_fetch_array($slider)){
        ?>
        <!-- Slide 1 -->
        <div class="carousel-item <?php if($no == 0){echo 'active';}else{echo 'notactive';}?>" style="background-image: url('admin/gambar/<?php echo $row['foto_slide']; ?>')">
          <div class="container">
            <h2>Selamat Datang di <span>Posyandu Kembang Setaman</span></h2>
            <p>Sebagai media untuk memperkenalkan profil Posyandu dan layanan kesehatan</p>
            <a href="#about" class="btn-get-started scrollto">Baca Selengkapnya</a>
          </div>
        </div>
        <?php 
          $no++;}
        ?>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Sebelumnya</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Selanjutnya</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4 class="title"><a href="">Bayi</a></h4>
              <p class="description">Bayi yang datang usia 0-59 bulan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-drug"></i></div>
              <h4 class="title"><a href="">Anak Balita</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-thermometer-alt"></i></div>
              <h4 class="title"><a href="">lbu hamil, ibu nifas dan ibu menyusui</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-dna-alt-1"></i></div>
              <h4 class="title"><a href="">Kesehatan Pada Lansia</a></h4>
              <p class="description"></p>
            </div>
          </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Tentang Kami ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
          <p>Posyandu merupakan salah satu bentuk Upaya Kesehatan 
            Bersumber Daya Masyarakat (UKBM) yang dikelola dan 
            diselenggarakan dari, oleh, untuk dan bersama masyarakat dalam penyelenggaraan pembangunan kesehatan, guna 
            memberdayakan masyarakat dan memberikan kemudahan 
            kepada masyarakat dalam memperoleh pelayanan kesehatan 
            dasar  untuk mempercepat  penurunan  angka  kematian  ibu  dan 
            bayi.</p>
        </div>

        <div class="row">
          <div class="col-lg-5" data-aos="fade-right">
            <img src="assets/img/about.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Tujuan Posyandu</h3>
            <ul>
              <li><i class="icofont-check-circled"></i> Menurunkan angka kematian bayi (AKB), angka kematian ibu (ibu hamil), melahirkan dan nifas.</li>
              <li><i class="icofont-check-circled"></i> Membudayakan NKBS.</li>
              <li><i class="icofont-check-circled"></i> Meningkatkan peran serta masyarakat untuk mengembangkan kegiatan kesehatan dan KB serta kegiatan lainnya yang menunjang untuk tercapainya masyarakat sehat sejahtera.</li>
              <li><i class="icofont-check-circled"></i> Berfungsi sebagai wahana gerakan reproduksi keluarga sejahtera, gerakan ketahanan keluarga dan gerakan ekonomi keluarga sejahtera.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Informasi ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Informasi</h2>
         <p align="center">Pelaksanaan Posyandu dikenal dengan nama Sistem 5 Meja, dimana kegiatan di masing-masing meja mempunyai kekhususan sendiri-sendiri. 
           <br> Sistem 5 meja tersebut tidak berarti bahwa Posyandu harus memiliki 5 buah meja untuk pelaksanaannya,   
           <br> tetapi kegiatan Posyandu harus mencakup 5 pokok kegiatan : </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-heart-beat"></i></div>
            <h4 class="title"><a href="">MEJA 1</a></h4>
            <p class="description">PENDAFTARAN DAN PENYULUHAN</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="icofont-drug"></i></div>
            <h4 class="title"><a href="">MEJA 2</a></h4>
            <p class="description">PELAYANAN BAYI DAN BALITA. PELAYANAN IBU HAMIL,IBU MENYUSUI,PUS</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="icofont-dna-alt-2"></i></div>
            <h4 class="title"><a href="">MEJA 3</a></h4>
            <p class="description">PENGISIAN KMS</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="icofont-heartbeat"></i></div>
            <h4 class="title"><a href="">MEJA 4</a></h4>
            <p class="description">PENYULUHAN PERORANGAN PADA IBU HAMIL, MENYUSUI, PUS. PELAYANAN ORALIT, VITAMIN A DOSIS TINGGI,
              PEMBERIAN TABLET BESI</p>
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="icofont-disabled"></i></div>
            <h4 class="title"><a href="">MEJA 5</a></h4>
            <p class="description">PELAYANAN KIA (PEMERIKSAAN IBU HAMIL, PEMBERIAN IMUNISASI), PELAYANAN KB, PELAYANAN PENGOBATAN.</p>
          </div>
        </div>

      </div>
    </section><!-- End Informasi -->


    <!-- ======= Tim Kader ======= -->
    <section id="doctors" class="doctors">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tim Kader</h2>
          <p>Berikut Anggota Kader Posyandu Kembang Setaman RW 14</p>
        </div>

        <div class="row">
          <?php

            $no = 1;
            $sql = $koneksi->query("SELECT * from tbl_kader");
            while ($data=$sql->fetch_assoc()) {

          ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="admin/gambar/<?php echo $data['foto_kader']; ?>" class="img-fluid">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $data['nama_kader'] ?></h4>
                <span><?php echo $data['jabatan_kader'] ?></span>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dokumentasi</h2>
          <p></p>
        </div>
        
        <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
          <?php
            $sql = $koneksi->query("SELECT * from tbl_dokumentasi");
            while ($data=$sql->fetch_assoc()) {
          ?>
          <a href="admin/gambar/<?php echo $data['foto_dokumentasi']; ?>" class="venobox" data-gall="gallery-carousel"><img src="admin/gambar/<?php echo $data['foto_dokumentasi']; ?>" alt=""></a>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Pertanyaan yang sering di Ajukan ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pertanyaan yang Sering Diajukan</h2>
          <p>Berikut adalah pertanyaan yang sering diajukan oleh para pasien di posyandu.</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Apa arti N pada Balok SKDN? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                N = Balita yang ditimbang 2 bulan berturut-turut naik berat badannya sesuai dengan standar KBM
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Apa yang disebut MP-ASI? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                MP-ASI adalah makanan atau minuman yang mengandung gizi diberikan pada bayi pertama kali pada usia 6 bulan guna memenuhi kebutuhan gizi selain Asi.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Di meja keberapakah dilakukan kegiatan pencatatan di posyandu <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Meja 3 (Tiga)
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Kapan Posyandu didirikan? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Posyandu didirikan sejak tahun 2010
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Siapa yang bisa mengunjungi posyandu? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Ibu hamil, Ibu Menyusui, dll
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->


    <!-- Awal Berita -->
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Berita Terkini</h1>
    <hr class="my-4">
    <div class="row mb-5 mx-auto justify-content-center">
      <?php
        $sql = $koneksi->query("SELECT * from tbl_berita");
        while ($data=$sql->fetch_assoc()) {
      ?>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow" style="width: 20rem;">
          <img class="card-img-top" src="admin/gambar/<?php echo $data['foto_berita']; ?>" alt="Card image cap">
          <div class="card-body">
            <a href="detailberita.php/<?php echo $data['id_berita'] ?>"  class="text-decoration-none text-success"><h5 class="card-title"><?php echo $data['judul_berita'] ?></h5></a>
            <p class="card-text"><?php echo substr( $data['isi_berita'],0,300)?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
    <!-- Akhir Berita -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak kami</h2>
        </div>

      </div>

      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.862397774031!2d106.77711691477077!3d-6.5390555952703435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzInMjAuNiJTIDEwNsKwNDYnNDUuNSJF!5e0!3m2!1sid!2sid!4v1632885123900!5m2!1sid!2sid" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="container">

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class=".col-md-8 .col-md-4">
            <div class="footer-info">
              <h3>Alamat</h3>
              <p  >
                Jl. Kencana Raya Blok C. 12 No.4, RT.01/RW.15, Cibadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16166
                <br><strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#index.php">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Informasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Dokumentasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak</a></li>
            </ul>
          </div>

      
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Posyandu</span></strong>Kembang Setaman
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>