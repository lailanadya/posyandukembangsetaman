-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 11:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `aktivasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `nama_depan`, `nama_belakang`, `email`, `no_telp`, `password`, `tipe`, `aktivasi`) VALUES
(1, 'admin', 'pusat', 'admin@gmail.com', '089744563172', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 1),
(2, 'jamess', 'brown', 'james@gmail.com', '089767827364', '357cce699b30754b4b4a057a5d283932a0d86274', 'kader', 1),
(3, 'john', 'lenong', 'john@gmail.com', '089281928377', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', 'kader', 1),
(4, 'tuang', 'air', 'tuang@gmai.com', '08921321313', 'd2876284131139cd7e35e3c71f10fd3ce1ec8646', 'kader', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anak`
--

CREATE TABLE `tbl_anak` (
  `id_anak` int(20) NOT NULL,
  `nama_anak` varchar(25) NOT NULL,
  `usia_anak` varchar(15) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `tb_anak` varchar(10) NOT NULL,
  `alamat_anak` text NOT NULL,
  `nama_ortu` varchar(20) NOT NULL,
  `nohp_ortu` varchar(15) NOT NULL,
  `gizi_anak` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anak`
--

INSERT INTO `tbl_anak` (`id_anak`, `nama_anak`, `usia_anak`, `anak_ke`, `jenis_kelamin`, `tgl_lahir`, `berat_badan`, `tb_anak`, `alamat_anak`, `nama_ortu`, `nohp_ortu`, `gizi_anak`, `created_at`, `update_at`) VALUES
(5, 'brandon', '3', '', '', '2019-07-11', '', '', 'Cibeuteng', 'tobih', '089233819283', '', NULL, NULL),
(6, 'Raiden', '', '3', 'L', '2014-03-13', '42', '141', 'Cilacap', 'Udin', '089233819283', 'Baik', NULL, NULL),
(7, 'brandon', '', '3', 'Laki-laki', '2016-06-01', '32', '110', 'Cibeuteng', 'tobih', '089233819283', 'Baik', NULL, NULL),
(8, 'Ereni', '', '1', 'P', '2013-02-20', '37', '132', 'Ciragon', 'Ojak', '089233819283', 'Baik', NULL, NULL),
(9, 'Jeremi', '', '2', 'on', '2014-02-13', '32', '132', 'Cilacap', 'Train', '089233819283', 'Baik', NULL, NULL),
(10, 'brandon', '', '3', 'Laki-laki', '2016-06-15', '42', '132', 'Cilacap', 'Udin', '089233819283', 'Baik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `isi_berita` varchar(255) NOT NULL,
  `link_berita` varchar(255) NOT NULL,
  `foto_berita` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `isi_berita`, `link_berita`, `foto_berita`) VALUES
(1, 'Peran Integrasi Posyandu untuk Tingkatkan Layanan ', 'Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi Abdul Halim Iskandar memaparkan sesuai dengan amanat Undang-undang Nomor 6 Tahun 2014 tentang Desa, tujuan pembangunan desa ada empat.', 'https://news.detik.com/berita/d-5679541/peran-integrasi-posyandu-untuk-tingkatkan-layanan-praktis-warga-desa?_ga=2.109676037.1023555226.1634087452-1092724151.1631554327', '650-mendes-hadiri-peringatan-hari-kebangkitan-teknologi-nasional-2021-1_169.jpeg'),
(3, 'Hari Anak Nasional, PKS Dorong Posyandu Kembali Di', 'Ketua Bidang Perempuan dan Ketahanan Keluarga (BPKK) DPP Partai Keadilan Sejahtera (PKS) Kurniasih Mufidayati mengatakan Hari Anak Nasional harus jadi refleksi menyeluruh guna menyelesaikan berbagai persoalan anak Indonesia.', 'https://www.liputan6.com/news/read/4613692/hari-anak-nasional-pks-dorong-posyandu-kembali-diaktifkan-tekan-kasus-covid-19', '005178100_1625296784-20210703-anak-anak-di-vaksin-massal-GBK-IMAM-6.jpg'),
(4, 'Pandemi COVID-19 Menerpa, Imunisasi Anak Harus Dil', 'Ed Selama pandemi COVID-19, layanan imunisasi di puskesmas dan posyandu mengalami kendala. Keraguan orangtua untuk membawa anaknya ke fasilitas kesehatan karena takut tertular virus SARS-CoV-2 jadi alasannya. ', 'https://www.liputan6.com/health/read/4539903/pandemi-covid-19-menerpa-imunisasi-anak-harus-dilengkapi', '42-038631000_1607930308-20201214-Vaksin-Campak-Pentablo-dan-Polio-penyuluhan-anak-anak-DWI-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumentasi`
--

CREATE TABLE `tbl_dokumentasi` (
  `id_dokumentasi` int(11) NOT NULL,
  `nama_dokumentasi` varchar(50) NOT NULL,
  `foto_dokumentasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokumentasi`
--

INSERT INTO `tbl_dokumentasi` (`id_dokumentasi`, `nama_dokumentasi`, `foto_dokumentasi`) VALUES
(2, '-', '342-gallery-1.jpeg'),
(3, '-', 'gallery-2.jpeg'),
(4, '-', 'gallery-3.jpeg'),
(5, '-', '174-gallery-4.jpeg'),
(6, '-', '478-gallery-5.jpeg'),
(7, '-', '816-gallery-6.jpeg'),
(8, '-', '206-gallery-7.jpeg'),
(9, '-', '66-gallery-8.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ibuhamil`
--

CREATE TABLE `tbl_ibuhamil` (
  `id_ibuhamil` int(20) NOT NULL,
  `nama_ibu` varchar(15) NOT NULL,
  `usia_ibu` varchar(11) NOT NULL,
  `tgllahir_ibu` date NOT NULL,
  `alamat_ibu` text NOT NULL,
  `nohp_ibu` varchar(16) NOT NULL,
  `berat_badan` varchar(5) NOT NULL,
  `tinggi_badan` varchar(5) NOT NULL,
  `usia_kandungan` varchar(15) NOT NULL,
  `tensi_darah` varchar(15) NOT NULL,
  `gizi_ibu` varchar(25) NOT NULL,
  `obat_vitamin` varchar(50) NOT NULL,
  `created_at` bigint(20) DEFAULT NULL,
  `update_at` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ibuhamil`
--

INSERT INTO `tbl_ibuhamil` (`id_ibuhamil`, `nama_ibu`, `usia_ibu`, `tgllahir_ibu`, `alamat_ibu`, `nohp_ibu`, `berat_badan`, `tinggi_badan`, `usia_kandungan`, `tensi_darah`, `gizi_ibu`, `obat_vitamin`, `created_at`, `update_at`) VALUES
(5, 'awdwadwa', '21', '1998-07-10', 'jakarta', '09822131822', '76', '168', '4 bulan', '90/120', 'Baik', 'asdqwdqfqfwq', NULL, NULL),
(6, 'sari', '26', '1995-07-24', 'bogor barat', '089976453456', '', '', '', '', '', '', NULL, NULL),
(7, 'Mother', '', '1993-08-11', 'Cilacap', '09822131822', '76', '169', '5 bulan', '90/120', 'Baik', 'hqiwdhqiowdhq', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kader`
--

CREATE TABLE `tbl_kader` (
  `id_kader` int(11) NOT NULL,
  `nama_kader` varchar(50) NOT NULL,
  `jabatan_kader` varchar(50) NOT NULL,
  `foto_kader` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kader`
--

INSERT INTO `tbl_kader` (`id_kader`, `nama_kader`, `jabatan_kader`, `foto_kader`) VALUES
(2, 'Wirdawati', 'Ketua Posyandu', '131-kader1.jpeg'),
(7, 'Heni Purwanti', 'Ketua Kader RT 01', '99-kader2.jpeg'),
(8, 'William Anderson', 'Cardiology', '562-kader3.jpeg'),
(9, 'Amanda Jepson', 'Neurosurgeon', '283-kader4.jpeg'),
(10, 'Sarah Jhonson', 'Anesthesiologist', '616-kader5.jpeg'),
(11, 'Sarah Jhonson', 'Anesthesiologist', '35-kader6.jpeg'),
(12, 'Sarah Jhonson', 'Anesthesiologist', '710-kader7.jpeg'),
(13, 'Sarah Jhonson', 'Anesthesiologist', '357-kader8.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `id_slide` int(11) NOT NULL,
  `nama_slide` varchar(150) NOT NULL,
  `foto_slide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`id_slide`, `nama_slide`, `foto_slide`) VALUES
(2, 'Foto hiya hiya', 'WhatsApp Image 2021-09-25 at 15.39.44.jpeg'),
(4, 'Foto hiya', '982-WhatsApp Image 2021-09-25 at 15.40.14.jpeg'),
(5, 'Foto hiya', 'WhatsApp Image 2021-09-25 at 15.39.44(2).jpeg'),
(6, 'Foto hiy', 'WhatsApp Image 2021-09-25 at 15.39.42.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibunifas`
--

CREATE TABLE `tb_ibunifas` (
  `ID_Ibunifas` int(11) NOT NULL,
  `Nama_Ibunifas` varchar(20) NOT NULL,
  `Umur_Ibunifas` int(11) NOT NULL,
  `ttl_ibunifas` date NOT NULL,
  `Alamat_Ibunifas` text NOT NULL,
  `NoTelp_Ibunifas` varchar(15) NOT NULL,
  `BB_Ibunifas` varchar(10) NOT NULL,
  `TB_Ibunifas` varchar(10) NOT NULL,
  `Tglpersalinan_Ibunifas` date NOT NULL,
  `Waktu_Ibunifas` varchar(11) NOT NULL,
  `Tensi_Ibunifas` varchar(11) NOT NULL,
  `Gizi_Ibunifas` text NOT NULL,
  `Carapersalinan_Ibunifas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ibunifas`
--

INSERT INTO `tb_ibunifas` (`ID_Ibunifas`, `Nama_Ibunifas`, `Umur_Ibunifas`, `ttl_ibunifas`, `Alamat_Ibunifas`, `NoTelp_Ibunifas`, `BB_Ibunifas`, `TB_Ibunifas`, `Tglpersalinan_Ibunifas`, `Waktu_Ibunifas`, `Tensi_Ibunifas`, `Gizi_Ibunifas`, `Carapersalinan_Ibunifas`) VALUES
(1, 'soream', 24, '1992-06-09', 'Jakarta', '089276738813', '68', '162', '2021-10-21', '6 minggu', '90/120', 'Baik', ''),
(3, 'saut', 23, '1996-03-05', 'surabaya', '08927622342', '68', '162', '2021-10-14', '6 minggu', '90/120', 'Baik', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluargaberencana`
--

CREATE TABLE `tb_keluargaberencana` (
  `ID_KB` int(11) NOT NULL,
  `Nama_PKB` varchar(20) NOT NULL,
  `Umur_PKB` int(11) NOT NULL,
  `TTL_PKB` date NOT NULL,
  `Alamat_PKB` text NOT NULL,
  `NoTelp_PKB` varchar(16) NOT NULL,
  `BB_PKB` varchar(20) NOT NULL,
  `TB_PKB` varchar(20) NOT NULL,
  `Tensi_PKB` varchar(20) NOT NULL,
  `TglSuntik_PKB` date NOT NULL,
  `TglKembali_PKB` date NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keluargaberencana`
--

INSERT INTO `tb_keluargaberencana` (`ID_KB`, `Nama_PKB`, `Umur_PKB`, `TTL_PKB`, `Alamat_PKB`, `NoTelp_PKB`, `BB_PKB`, `TB_PKB`, `Tensi_PKB`, `TglSuntik_PKB`, `TglKembali_PKB`, `Keterangan`) VALUES
(2, 'salsa', 0, '1999-02-12', 'jakarta', '089123213124', '67', '157', '90/110', '2021-06-10', '2021-08-27', 'sdqwdqqw');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lansia`
--

CREATE TABLE `tb_lansia` (
  `id_lansia` int(11) NOT NULL,
  `nama_lansia` varchar(25) NOT NULL,
  `usia_lansia` int(11) NOT NULL,
  `alamat_lansia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lansia`
--

INSERT INTO `tb_lansia` (`id_lansia`, `nama_lansia`, `usia_lansia`, `alamat_lansia`) VALUES
(2, 'iyah', 56, 'bogor'),
(3, 'komii', 55, 'ciampea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_anak`
--
ALTER TABLE `tbl_anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_dokumentasi`
--
ALTER TABLE `tbl_dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indexes for table `tbl_ibuhamil`
--
ALTER TABLE `tbl_ibuhamil`
  ADD PRIMARY KEY (`id_ibuhamil`);

--
-- Indexes for table `tbl_kader`
--
ALTER TABLE `tbl_kader`
  ADD PRIMARY KEY (`id_kader`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tb_ibunifas`
--
ALTER TABLE `tb_ibunifas`
  ADD PRIMARY KEY (`ID_Ibunifas`);

--
-- Indexes for table `tb_keluargaberencana`
--
ALTER TABLE `tb_keluargaberencana`
  ADD PRIMARY KEY (`ID_KB`);

--
-- Indexes for table `tb_lansia`
--
ALTER TABLE `tb_lansia`
  ADD PRIMARY KEY (`id_lansia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_anak`
--
ALTER TABLE `tbl_anak`
  MODIFY `id_anak` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_dokumentasi`
--
ALTER TABLE `tbl_dokumentasi`
  MODIFY `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_ibuhamil`
--
ALTER TABLE `tbl_ibuhamil`
  MODIFY `id_ibuhamil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kader`
--
ALTER TABLE `tbl_kader`
  MODIFY `id_kader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_ibunifas`
--
ALTER TABLE `tb_ibunifas`
  MODIFY `ID_Ibunifas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_keluargaberencana`
--
ALTER TABLE `tb_keluargaberencana`
  MODIFY `ID_KB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_lansia`
--
ALTER TABLE `tb_lansia`
  MODIFY `id_lansia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
