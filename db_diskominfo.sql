-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 07:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diskominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `hari`, `tgl`, `waktu`, `lokasi`, `kegiatan`, `user_id`) VALUES
(9, 'Senin', '2022-04-18', '09:00:00', 'Diskominfo', '<p>Kunjungan Kerja Setwan Kabupaten Bogor</p>', 8),
(10, 'Senin', '2022-04-25', '09:00:00', 'Diskominfo', '<p>Kunjungan Studi Referensi Diskominfo Kabupaten Bogor</p>', 8),
(11, 'Kamis', '2022-05-12', '15:00:00', 'Diskominfo', '<p>Kunjungan Kerja Kardin Kota Bogor</p>', 8),
(12, 'Selasa', '2022-05-31', '09:00:00', 'Alun-Alun Kota Bogor', '<p>Acara Peringatan Hari Tanpa Tembakau Sedunia</p>', 8),
(13, 'Selasa', '2022-05-31', '13:00:00', 'Diskominfo', '<p>Kunjungan Kerja DPRD Kota Tangerang Selatan</p>', 8);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `judul`, `tgl`, `cover`, `user_id`) VALUES
(5, 'Sosialisasi', '2024-01-01', '2024-04-16sosialisasi-warnet-sehat.jpg', 8),
(6, 'Rapat', '2024-01-01', '2024-04-16rapat-menara.jpg', 8),
(7, 'Kunjungan Kerja', '2024-01-01', '2024-04-16kunjungan-ke-kota-denpasar-bali.jpg', 8),
(8, 'Kegiatan', '2024-01-01', '2024-04-16kegiatan.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(85) NOT NULL,
  `kategori` enum('0','1') NOT NULL,
  `file` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `judul`, `kategori`, `file`, `link`, `status`) VALUES
(2, 'Survey Kepuasan Masyarakat', '1', '2024-04-17Survey Kepuasan Masyarakat.jpg', 'skm.kotabogor.go.id/survey/aplikasi-sibadra', '0');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) NOT NULL,
  `judul` varchar(85) NOT NULL,
  `kategori_berita_id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `status` enum('0','1') NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `kategori_berita_id`, `isi`, `gambar`, `tgl`, `status`, `user_id`) VALUES
(27, 'Diskominfo Kota Bogor Gelar Rapat Pertemuan untuk Pengelolaan Situs PPID', 10, '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Dinas Komunikasi dan Informatika (Diskominfo) Kota Bogor dalam upaya meningkatkan kualitas pelayanan publik dengan menggelar pertemuan rapat yang berfokus pada pengelolaan situs web Pelayanan Informasi dan Dokumentasi Publik (PPID).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Rapat yang berlangsung pada Senin (29/01) pukul 13.00 WIB tersebut dhadiri oleh Pranata Hubungan Masyarakat, Windy Octaviani, begitu juga jajaran staff Diskominfo lainnya. Ditengah upaya untuk meningkatkan kualitas pelayanan, permasalahan dan kendala yang dihadapi situs web Pelayanan Informasi dan Dokumentasi Publik (PPID) juga menjadi fokus utama pembahasan.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Untuk mengatasi tingkat aksesibilitas yang belum optimal dan pembaruan informasi yang tidak teratur, perhatian khusus juga diberikan pada kesulitan dalam tampilan laman admin yang membuat sulit memperbarui konten. Diskominfo menyoroti penyederhanaan antarmuka admin untuk memastikan pengelolaan konten lebih efisien.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2024-04-18bps-gelar-desk-kota-bogor-dalam-angka-bersama-diskominfo-kota-bogor.jpg', '2024-01-29', '1', 2),
(28, 'BPS Gelar Desk Kota Bogor dalam Angka bersama Diskominfo Kota Bogor', 10, '<p style=\"text-align: justify;\">Dalam rangka penyusunan Publikasi Kota Bogor dalam Angka Tahun 2024 yang akan dirilis pada tanggal 8 Februari 2024 oleh Badan Pusat Statistik (BPS) Kota Bogor. BPS Kota Bogor menggelar Desk Kota dalam Angka bersama Dinas Komunikasi dan Informatika (Diskominfo). Kota Bogor sebagai wali data pada Selasa (30/01) di Paseban Sri Baduga Balaikota Bogor.</p>\r\n<p style=\"text-align: justify;\">Acara dibuka oleh Kepala Diskominfo Kota Bogor, Rahmat Hidayat dan Kepala BPS Kota Bogor Daryanto. Acara tersebut dihadiri oleh seluruh perwakilan perangkat daerah di lingkungan Pemerintah Kota Bogor. Hadir pula perwakilan dari BPN Kota Bogor, Porles Kota Bogor. LP kelas IIa Bogor, Pengadilan Negeri Kota Bogor.</p>\r\n<p style=\"text-align: justify;\">Diskominfo Kota Bogor telah mengembangkan portal data yang dapat dimanfaatkan seluruh perangkat daerah.</p>\r\n<p style=\"text-align: justify;\">\"Jika Portal data ini sudah berjalan optimal, maka pertemuan seperti ini bukan lagi yang utama karena semua data sudah tersedia di Portal Data\", jelas Daryanto.</p>\r\n<p style=\"text-align: justify;\">Daryanto juga memaparkan bahwa data yang mudah disampaikan akan dipublis oleh BPS. Tetapi data yang diterima terkadang kurang sinkron dan berasal dari beberapa sumber sehingga perlu diketatkan lagi mana data yang akan dipakai.</p>\r\n<p style=\"text-align: justify;\">Pertumbuhan penduduk menjadi poin pertama yang mendapat sorotan. Data menunjukan adanya peningkatan yang signifikan, dan dalam FGD ini, para peserta membahas dampak urbanisasi, migrasi serta langkah-langkah pemerintah dalam menanggapi perubahan ini.</p>\r\n<p style=\"text-align: justify;\">Aspek ekonomi dan pembangunan tak luput dari perbincangan. Diskusi melibatkan data pertumbuhan ekonomi dan proyek-proyek pembangunan terkini. Para peserta juga menyoroti upaya pemerintah dalam menanggulangi pengangguran dan menciptakan peluang kerja.</p>\r\n<p style=\"text-align: justify;\">Infrastruktur kota menjadi fokus ketiga, dengan pembahasan tentang status proyek-proyek utama dan tantangan yang dihadapi, seperti kemacetan dan pemeriharaan jalan. Jaringan transportasis dan konektivitas kota juga menjadi bagian integral dari diskusi ini.</p>\r\n<p style=\"text-align: justify;\">Pendidikan, sebagai pondasi masa depan, juga dibahas dengan memperhatikan data kualitas pendidikan dan upaya pemerintah dalam meningkatkan mutu pembelajaran. Jumlah sekolah dan universitas serta inovasi program pendidikan menjadi bahasan utama.</p>\r\n<p style=\"text-align: justify;\">Isu kesehatan masyarakat dan lingkungan hidup juga mendapat perhatian serius. Data mengenai status kesehatan masyarakat, akses ke pelayanan kesehatan, serta program-program lingkungan menjadi bagian integral dari FGD ini.</p>', '2024-04-18bps-gelar-desk-kota-bogor-dalam-angka-bersama-diskominfo-kota-bogor.jpg', '2024-01-31', '1', 1),
(29, 'Terima Kedatangan Tim Red Sparks', 11, '<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Menteri Pemuda dan Olahraga Republik Indonesia (Menpora RI) Dito Ariotedjo, menerima kedatangan perwakilan tim Red Sparks yakni Kepala Pelatih Ko Hee-jin serta perwakilan empat pemain Han Song-yi, Yeum Hye-seon, Park Eun-jin, Park Hye-min dan Megawati Hangestri Pertiwi di Ruang Kerjanya lantai 10 Kantor Kemenpora, Senayan, Jakarta, Rabu (17/4) siang.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">\"Selamat datang Red Sparks di Kemenpora, kami sangat senang akhirnya tim voli Red Sparks hadir di Indonesia dan juga membawa pulang Megawati \'Megatron\' Hangestri Pertiwi yang sudah bergabung dengan Jakarta BIN,\" kata Menpora Dito didampingi Deputi Peningkatan Prestasi Olahraga Surono dan Plt Direktur LPDUK Kemenpora Ferdinand Tangkudung.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Dalam suasana hangat ini, Menpora Dito juga berharap selama berada di Jakarta untuk melakoni Fun Volley Ball dengan Indonesia All-Star, 20 April mendatang, Red Sparks bisa menikmati suasana di Jakarta dan sekitarnya.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">\"Kami harap selama disini tim Red Sparks senang, apalagi menginapnya di Hotel Mulia yang merupakan hotel terbaik di Jakarta, gymnya, kolam renangnya dan makannya juga enak[1]enak,\" tutur Menpora Dito.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Menurut Menpora Dito, tim yang berbasis di Daejeon, Korea Selatan ini akan menambah cinta masyarakat voli tanah air. Ia berharap olahraga dan industri bola voli Indonesia akan semakin maju.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">\"Jadi, kehadiran Red Sparks ini menambah rasa cinta masyarakat voli dan masyarakat Indonesia kepada Korsel. Saya yakin ini akan berdampak baik. Karena ada Megawati dan semoga voli Indonesia semakin semangat lagi,\" tambahnya.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">\"Terima kasih untuk Red Sparks yang sudah membuat dampak yang besar dan jadinya voli Indonesia makin hebat lagi dan semoga timnas voli putri semakin baik,\" imbuh Menpora Dito. Pelatih Kepala Red Sparks Hee Jin Ko, menyampaikan terima kasih atas sambutan hangat Menpora Dito dan jajarannya. Ia berharap kedepan olahraga dan industri bola voli Indonesia akan semakin maju.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">\"Terima kasih telah mengundang kami ke Indonesia serta sambutan hangat ini. Semoga dari kesempatan ini voli Indonesia akan semakin berkembang dan semoga voli nanti (Fun Volley Ball) ramai dan menarik,\" kata Hee Jin.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Turut hadir, Staf Khusus Percepatan Inovasi Pemuda dan Olahraga Hasintya Saraswati, Staf Khusus Hukum dan Kepatuhan Tata Kelola Alvin Saptamandra serta Dewan Pengawas LPDUK Ferry Kono.</p>', '2024-04-18Terima Kedatangan Tim Red Sparks, Menpora Dito Harap Berdampak Besar untuk Voli Indonesia.jpeg', '2024-04-17', '1', 2),
(30, 'Baca Mudikpedia agar Mudik Ceria dan Penuh Makna', 11, '<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Kementerian Komunikasi dan Informatika memberikan kemudahan kepada masyarakat yang ingin mudik dengan berbagai informasi dan panduan melalui buku elektronik Mudikpedia. Ragam informasi selama periode Lebaran 2024 tersebut dapat diakses pada tautan&nbsp;<a style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; cursor: pointer; text-decoration: none; color: rgb(37, 40, 42);\" href=\"https://s.id/mudikpedia\" data-uw-rm-brl=\"PR\" data-uw-original-href=\"https://s.id/mudikpedia\">https://s.id/mudikpedia</a>.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">&ldquo;Buku elektronik ini melanjutkan kerja tim komunikasi publik yang sudah dilakukan tahun-tahun sebelumnya. Hal ini untuk memberikan panduan kepada masyarakat yang akan mudik. Semua informasi yang dibutuhkan telah dirangkum dalam&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">booklet&nbsp;</em>ini. Semoga informasi yang disampaikan dapat diterima dengan baik oleh para pembaca,&rdquo; ujar Direktur Jenderal Informasi dan Komunikasi Publik, Usman Kansong, Kamis (27/3/2024) di Jakarta.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Panduan dan informasi di buku elektronikini semakin penting karena diprediksi jumlah pemudik yang melonjak pada 2024 dibanding tahun-tahun sebelumnya. Kementerian Perhubungan menyatakan pergerakan masyarakat selama periode lebaran Idulfitri 2024 bisa mencapai 193,6 juta orang.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">&ldquo;Tentu pemudik perlu mendapat informasi saat akan melakukan perjalanan. Penjelasan dalam buku elektronik ini lengkap sehingga mereka bisa menentukan, misalnya kapan dan melalui jalur mana saat akan mudik. Masyarakat bisa memantau lokasi-lokasi yang berpotensi terjadi kepadatan,&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">rest area</em>, pom bensin terdekat, rumah makan, posko kesehatan,&rdquo; katanya.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Mudikpedia hadir dengan konsep&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">living document</em>&nbsp;di mana kontennya akan terus di-<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">update</em>. Tersedia juga pantauan lalu lintas secara langsung melalui CCTV di beberapa lokasi seperti Bandung, Jawa Timur, jalan tol PBJT PU, dan Pelabuhan Tanjung Priok.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Ada juga informasi dan cara pandaftaran mudik gratis, pemesanan tiket kereta api dan kapal feri. Yang tak kalah penting adalah informasi tarif tol, prakiraan cuaca dari Badan Meteorologi, Klimatologi dan Geofisika (BMKG), Posko THR 2024, hingga penukaran uang lebaran oleh Bank Indonesia (BI).</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">&ldquo;Buku ini bisa juga jadi teman bacaan selama perjalanan, karena di dalamnya juga ada informasi terkait latar belakang, sejarah dan berbagai hal menarik tentang tradisi mudik di Indonesia,&rdquo; kata Usman sembari menambahkan bahwa pemudik yang menggunakan kendaraan listrik pun akan terbantu karena informasi keberadaan Stasiun Pengisian Kendaraan Listrik Umum (SPKLU) juga disajikan.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Mudikpedia diharapkan bermanfaat dan membantu masyarakat dalam merencanakan mudik yang aman dan nyaman baik melalui darat, laut, maupun udara.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-size-adjust: none; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;\">Begitu pula bagi mereka yang hendak mudik menggunakan angkutan umum. Buku elektronik ini mengulas secara detail berbagai informasi misalnya kelaikan bus yang akan ditumpangi. Informasi ini tentunya penting bagi pemudik karena terkait keselamatan selama perjalanan. (TR/Elvira).</p>', '2024-04-18foto Pa Usman.jpg', '2024-03-27', '1', 2);
INSERT INTO `beritas` (`id`, `judul`, `kategori_berita_id`, `isi`, `gambar`, `tgl`, `status`, `user_id`) VALUES
(31, 'Ancam Ketahanan Pangan dan Air, BMKG Ajak Kolaborasi Hadapi Perubahan Iklim', 11, '<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Kepala Badan Meteorologi, Klimatologi, dan Geofisika Dwikorita Karnawati mendorong seluruh pemangku kepentingan untuk berkolaborasi dan mengambil langkah konkret dalam mengatasi dampak perubahan iklim. Menurutnya, perubahan iklim harus mendapat perhatian serius karena mengancam keberlangsungan kehidupan umat manusia.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">&ldquo;Persoalan ini (perubahan iklim-red) tidak dapat diselesaikan hanya melalui pertemuan, seminar, dan&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">meeting</em>. Terpenting, dari pertemuan itu dihasilkan aksi konkrit dan memiliki dampak besar terhadap upaya pencegahan dampak perubahan iklim,&rdquo; ungkap Dwikorita Karnawati dalam peringatan Hari Meteorologi Dunia ke-74 di Jakarta, Sabtu (23/3/2024).</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Sebagai informasi,&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">World Meteorological Organization&nbsp;</em>(WMO) mengambil tema &ldquo;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">At</em><em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">The Frontline of Climate Action</em>&rdquo; pada peringatan Hari Meteorologi Dunia ke-74 tahun 2024. Tema tersebut dapat dimaknai untuk semua insan&mdash;tanpa terkecuali&mdash;menuju ke garis terdepan dalam melakukan aksi perubahan iklim.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Dwikorita menyebut perubahan iklim mencakup berbagai aspek, termasuk peningkatan suhu global, perubahan pola curah hujan, kenaikan permukaan air laut, serta dampaknya terhadap lingkungan dan manusia. Contoh nyata kenaikan suhu akibat perubahan iklim yaitu mencairnya gletser atau lapisan es tropis di Puncak Jaya, Papua. Luas tutupan salju abadi di ketinggian 4.884 MDPL itu menyusut hingga 98 persen, dari 19,3 kilometer persegi di tahun 1850 menjadi hanya 0,23 kilometer persegi di April 2022.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Perubahan iklim saat ini, lanjut Dwikorita, telah mendekati batas yang disepakati bersama pada Perjanjian Paris COP21 pada 12 Desember 2015. Saat itu<strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: bold; text-size-adjust: none; color: rgb(0, 0, 0);\">,&nbsp;</strong>seluruh dunia bersepakat harus membatasi kenaikan suhu rata-rata global di angka 1,5 &deg;C pada 2030. Namun faktanya, saat ini kenaikan suhu melaju lebih cepat dan sudah mencapai kenaikan 1,45&deg;C di atas suhu rata-rata di masa pra-industri.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Dwikorita mengungkapkan, dalam mengatasi laju perubahan iklim terdapat dua aksi yang dapat dilakukan yaitu mitigasi dan adaptasi. Mitigasi berarti setiap pihak harus mengurangi penyebab daripada pemasanan global dan perubahan iklim. Sementara adaptasi ialah proses penyesuaian terhadap dampak yang ditimbulkan dari perubahan iklim.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">&ldquo;Jadi aksi iklim harus berorientasi mengintegrasikan antara tindakan mitigasi dan tindakan adaptasi,&rdquo; ujarnya. Adapun dalam melakukan aksi mitigasi, terdapat terdapat lima sektor fokus aksi penurunan emisi gas rumah kaca dalam&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">Nationally Determined Contribution&nbsp;</em>(NDC). Yaitu, sektor kehutanan, pertanian, energi, industri, dan limbah. Sementara terdapat delapan fokus adaptasi yaitu ketahanan pangan, ketahanan ekosistem, ketahanan air, kemandirian energi, kesehatan, pemukiman perkotaan dan pedesaan, pesisir dan pulau kecil, dan peningkatan kapasitas para pemangku kepentingan dan masyarakat.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\"><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: bold; text-size-adjust: none; color: rgb(0, 0, 0);\">Pentingnya</strong><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: bold; text-size-adjust: none; color: rgb(0, 0, 0);\">Ketahanan</strong><strong style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; font-weight: bold; text-size-adjust: none; color: rgb(0, 0, 0);\">Air</strong></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Dalam kesempatan tersebut, Dwikorita juga menegaskan pentingnya menjaga ketahanan air. Menurutnya, jika ketahanan air melemah maka akan berdampak serius pada banyak hal diantaranya ketahanan pangan dan ketahanan energi Indonesia. Apabila terus berlanjut, maka akan memicu terjadinya konflik yang berimplikasi terhadap stabilitas ekonomi, politik, dan keamanan.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">&ldquo;Jumlah penduduk terus meningkat sehingga di waktu bersamaan kebutuhan air juga ikut meningkat. Apabila ini (air-red) tidak dikelola dengan baik maka dampak buruknya akan sangat serius,&rdquo; tuturnya.<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">&nbsp;</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Dwikorita menyebut, berdasarkan data yang dirilis Bappenas, perubahan iklim berpotensi menurunkan produksi padi Indonesia sebesar 1,13 juta ton-1,89 juta ton. Lahan pertanian seluas 2.256 hektar sawah pun terancam kekeringan. Di sisi lain, kondisi ketahanan pangan Indonesia, yang dilihat dari tingkat konsumsi pangan rumah tangga, juga membutuhkan perhatian. Angka prevalensi ketidakcukupan konsumsi pangan&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">Prevalence of Undernourishment&nbsp;</em>(PoU) pada 2022 meningkat menjadi 10,21 persen dari 8,49 persen pada 2021.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Apabila situasi ini tidak mendapatkan perhatian serius, tambah dia, maka ramalan&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">The</em><em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">Food and Agriculture Organization&nbsp;</em>(FAO) atau Badan Pangan dan Pertanian Dunia mengenai krisis pangan global dan bencana kelaparan di tahun 2050 dapat menjadi kenyataan.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Dwikorita menerangkan, BMKG mencatat secara keseluruhan, tahun 2016 merupakan tahun terpanas di Indonesia dengan nilai anomali sebesar 0.8 &deg;C relatif terhadap periode klimatologi 1981 hingga 2020. Tahun 2020 sendiri menempati urutan kedua tahun terpanas dengan nilai anomali sebesar 0.7 &deg;C, dengan tahun 2019 berada di peringkat ketiga dengan nilai anomali sebesar 0.6 &deg;C.<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">&nbsp;</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">Sementara itu, Deputi Bidang Klimatologi BMKG, Ardhasena Sopaheluwakan mengatakan bahwa WMO mencatat bahwa tahun 2023 menjadi tahun dengan pernuh rekor temperatur. Diantaranya adalah sepanjang Juni-Agustus menjadi 3 bulan terpanas sepanjang sejarah serta gelombang panas (<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">heatwave</em>) terjadi di banyak tempat secara bersamaan.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">&ldquo;Perubahan iklim memberikan tekanan tambahan pada sumber daya air yang sudah semakin langka dan menghasilkan apa yang dikenal sebagai&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">water</em><em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">hotspot</em>,&rdquo; imbuhnya. Melihat berbagai persoalan tersebut, Ardhasena berharap isu dampak perubahan iklim dapat semakin mengemuka dan menjadi perhatian serius seluruh masyarakat dan&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">stakeholder</em>terkait. Menurutnya, perubahan iklim dan semakin parahnya fenomena anomali iklim menuntut transformasi pengendalian dampak yang relevan dan radikal. Selain terus membangun dan meningkatkan kesadaran publik akan dampak perubahan iklim, BMKG juga terus melakukan pengembangan dan pembangunan sistem peringatan dini multibahaya yang efektif.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px -15px; padding: 1em 0px; border: 0px; outline: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-weight: 400; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: \'Open Sans\', sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51) !important; position: relative; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"font-size: 12pt;\">&ldquo;Kami berharap para pemangku kebijakan dari level pusat hingga daerah terus meningkatkan kewaspadaan dan menerapkan&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: none; outline: 0px; text-size-adjust: none;\">early warning system&nbsp;</em>yang berbasis ilmu pengetahuan dan teknologi mutakhir. Dengan demikian, ancaman bencana dapat diminimalisir dan diantisipasi semaksimal mungkin,&rdquo; pungkasnya. (*)</span></p>', '2024-04-18Gambar 1.jpg', '2024-03-23', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumens`
--

CREATE TABLE `dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_doc` varchar(50) NOT NULL,
  `link` varchar(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumens`
--

INSERT INTO `dokumens` (`id`, `nama_doc`, `link`, `file`, `keterangan`) VALUES
(2, 'Tupoksi Jabatan', 'tupoksi.com', '2024-04-17tupoksi-jabatan-struktural-dan-fungsional-tahun-2020.pdf', 'Tupoksi Jabatan'),
(3, 'Booklet Smart City Kota Bogor 2018', 'booklet.com', '2024-04-17Booklet-Smart-City-Kota-Bogor-2018.pdf', 'Booklet Smart City Kota Bogor 2018'),
(4, 'Booklet Smart City Kota Bogor 2019', 'booklet.com', '2024-04-17Booklet-Smart-City-Kota-Bogor-2019.pdf', 'Booklet Smart City Kota Bogor 2019'),
(5, 'Booklet Smart City Kota Bogor 2020', 'booklet.com', '2024-04-17Booklet-Smart-City-Kota-Bogor-2020.pdf', 'Booklet Smart City Kota Bogor 2020'),
(6, 'Booklet Smart City Kota Bogor 2021', 'booklet.com', '2024-04-17Booklet-Smart-City-Kota-Bogor-2021.pdf', 'Booklet Smart City Kota Bogor 2021'),
(7, 'LKPJ AMJ 2014-3018', 'example.com', '2024-04-17LKPJ-AMJ-2014-2018.pdf', 'LKPJ AMJ 2014-3018');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `pertanyaan`, `jawaban`) VALUES
(2, 'Apa nama website resmi kota bogor?', 'http://kotabogor.go.id/'),
(3, 'Bagaimana saya ingin melaporkan permasalahan pembangunan dan pelayanan publik lingkungan kota bogor?', 'Anda bisa mengunjungi Website http://aspirasi.kotabogor.go.id/ untuk mengadukan aspirasi anda ke Pemerintah Kota Bogor dan Anda dapat membuka di website http://kotabogor.go.id/ lalu klik aspirasi warga'),
(4, 'Pengumuman apa saja yang terdapat di website kota bogor?', 'Info terkini seputar layanan masyarakat, kesehatan, program dll. Di kota bogor'),
(5, 'Bagaimana saya ingin melihat informasi tentang wisata yang ada di kota bogor?', 'Anda dapat mengunjungi website http://direktori.kotabogor.go.id/, atau kunjungi website kota bogor lalu klik pariwisata'),
(6, 'Mengenai apa saja berita di kota bogor?', 'Mengenai informasi perkembangan kota bogor'),
(7, 'Ada berapa perangkat daerah di kota bogor?', 'Ada 36 Perangkat daerah di kota bogor'),
(8, 'Bagaimana saya ingin melihat Informasi terkini di seputar kota bogor?', 'Anda dapat mengunjungi website kota bogor, dan terdapat menu seputar kota bogor, anda dapat melihat informasi mengenai sejarah kota bogor,lambang kota bogor,letak geografis, Data demografi, peta kota bogor, dan bogor tempo dulu.'),
(9, 'Bagaimana saya ingin melihat peraturan daerah kota bogor?', 'Anda dapat mengunjungi website http://jdih.kotabogor.go.id/, atau klik banner sistem informasi hukum pada menu pengumuman website kota bogor'),
(10, 'Kegiatan apa saja yang dilakukan pemerintah kota bogor?', 'Anda dapat melihatnya di website http://kotabogor.go.id/ dan terdapat menu agenda'),
(11, 'Komponen apa saja yang terdapat pada smart city?', 'Smart mobility, smart environment, smart living, smart economy, smart people, smart goverment.');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_fotos`
--

CREATE TABLE `galeri_fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_fotos`
--

INSERT INTO `galeri_fotos` (`id`, `album_id`, `judul`, `foto`, `keterangan`) VALUES
(2, 7, 'Foto Bersama Komisi A DPRD Kota Depok', '2024-04-16Foto Bersama Komisi A DPRD Kota Depok.jpg', 'Foto Bersama Komisi A DPRD Kota Depok'),
(3, 7, 'Kunjungan Komisi III DPRD Kabupaten Bogor', '2024-04-16Kunjungan Komisi III DPRD Kabupaten Bogor.jpg', 'Kunjungan Komisi III DPRD Kabupaten Bogor'),
(4, 7, 'konten digital terkait pelaku usaha tourism oleh Kadin Kota Bogor', '2024-04-16konten digital terkait pelaku usaha tourism oleh Kadin Kota Bogor.png', 'konten digital terkait pelaku usaha tourism oleh Kadin Kota Bogor'),
(5, 7, 'Sesi foto bersama DPRD Kabupaten Rokan Hulu', '2024-04-17Sesi foto bersama DPRD Kabupaten Rokan Hulu.png', 'Sesi foto bersama DPRD Kabupaten Rokan Hulu'),
(6, 7, 'Kunjungan ke kota Denpasar Bali', '2024-04-17kunjungan-ke-kota-denpasar-bali.jpg', 'Kunjungan ke kota Denpasar Bali'),
(8, 7, 'Kunjungan dan evaluasi Survey Jabar Digital', '2024-04-17Kunjungan dan evaluasi Survey Jabar Digital.png', 'Kunjungan dan evaluasi Survey Jabar Digital'),
(9, 5, 'Sosialisasi dan Pendampingan Penerbitan Tanda Tangan elektronik di BPBD Kota Bogor', '2024-04-17Sosialisasi dan Pendampingan Penerbitan Tanda Tangan elektronik di BPBD Kota Bogor.jpg', 'Sosialisasi dan Pendampingan Penerbitan Tanda Tangan elektronik di BPBD Kota Bogor'),
(10, 5, 'Sosialisasi Pengawasan dan Pengendalian Menara Telekomunikasi', '2024-04-17Sosialisasi Pengawasan dan Pengendalian Menara Telekomunikasi.jpg', 'Sosialisasi Pengawasan dan Pengendalian Menara Telekomunikasi'),
(11, 6, 'Rapat membahas design landing page, menata ulang design dan klasifikasi menu', '2024-04-17rapat membahas design landing page, menata ulang design dan klasifikasi menu.png', 'rapat membahas design landing page, menata ulang design dan klasifikasi menu'),
(12, 6, 'Rapat membahas tentang pengembangan website Diskominfo Kota Bogor', '2024-04-17rapat membahas tentang pengembangan website Diskominfo Kota Bogor.png', 'rapat membahas tentang pengembangan website Diskominfo Kota Bogor'),
(13, 6, 'Rapat Koordinasi Penyediaan Informasi Publik Berbasis Website', '2024-04-17Rapat Koordinasi Penyediaan Informasi Publik Berbasis Website.jpg', 'Rapat Koordinasi Penyediaan Informasi Publik Berbasis Website'),
(14, 6, 'Rapat Menara', '2024-04-17rapat-menara.jpg', 'Rapat Menara');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_videos`
--

CREATE TABLE `galeri_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `embed` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_videos`
--

INSERT INTO `galeri_videos` (`id`, `judul`, `cover`, `embed`, `keterangan`) VALUES
(2, 'INSTRUKSI WALI KOTA BOGOR KEPADA ASN', '2024-04-17INSTRUKSI WALI KOTA BOGOR KEPADA ASN.png', 'https://www.youtube.com/watch?v=UQXEjjytYkw', 'INSTRUKSI WALI KOTA BOGOR KEPADA ASN'),
(3, 'Sistem Informasi Berbagi Aduan dan Saran (SiBadra)', '2024-04-17Sistem Informasi Berbagi Aduan dan Saran (SiBadra).png', 'https://www.youtube.com/watch?v=5pxgQHtj-mY', 'Sistem Informasi Berbagi Aduan dan Saran (SiBadra)'),
(4, 'Tata Naskah Dinas (TND)', '2024-04-17Tata Naskah Dinas (TND).png', 'https://www.youtube.com/watch?v=K38cw0Tg0U4', 'Tata Naskah Dinas (TND)'),
(5, 'Bogor Single Window (BSW)', '2024-04-17Bogor Single Window (BSW).png', 'https://www.youtube.com/watch?v=W2w3kSnpyNo', 'Bogor Single Window (BSW)');

-- --------------------------------------------------------

--
-- Table structure for table `hal_statis`
--

CREATE TABLE `hal_statis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori_hal_statis_id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `status` enum('0','1') NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hal_statis`
--

INSERT INTO `hal_statis` (`id`, `judul`, `kategori_hal_statis_id`, `isi`, `file`, `tgl`, `status`, `user_id`) VALUES
(4, 'Struktur Organisasi', 7, '<p>Struktur Organisasi Dinas Komunikasi dan Informatika Kota Bogor</p>', '2024-04-17organigram2024diskominfo.jpg', '2024-04-01', '0', 8),
(5, 'Sambutan Kepala Diskominfo', 9, '<p><span style=\"font-size: 18pt;\"><strong>Sambutan Kepala Diskominfo Kota Bogor</strong></span></p>\r\n<pre class=\"a-b-r-La\" style=\"user-select: text; display: block; font-family: \'Courier New\', Courier, monospace, arial, sans-serif; margin: 0px; white-space: pre-wrap; overflow-wrap: break-word; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"> &lt;p&gt;Masyarakat menuntut pelayanan publik yang memenuhi kepentingan masyarakat luas dimanapun ia berada, dapat diandalkan dan terpercaya serta mudah dijangkau secara interaktif. Masyarakat menginginkan agar aspirasi mereka didengar, dengan demikian pemerintah harus memfasilitasi partisipasi dan dialog publik di dalam perumusan kebijakan negara. Kedua tuntutan tersebut sangat berkaitan dengan akses informasi. Akses informasi juga merupakan media bagi transparansi dan akuntabilitas untuk publik. Oleh karenanya pemerintah harus membuat kebijakan dan menyediakan fasilitas berupa infrastruktur dan prosedur sehingga dapat memberikan informasi kepada publik baik untuk perorangan maupun kelompok.&lt;/p&gt;\r\n\r\n        &lt;p&gt;Selain memberikan informasi tentang kinerja mereka, pemerintah juga perlu mencari informasi dari sektor swasta dan masyarakat sipil dalam merumuskan kebijakan dan meningkatkan pelayanan. Melalui konsultasi, pemerintah dapat menjadi lebih responsif terhadap kebutuhan warganya. Namun, pendirikan saluran untuk komunikasi dan partisipasi, pemerintah juga dapat membuka diri untuk kritik. Oleh karena itu, semua pemangku kepentingan dalam proses pemerintahan harus realistis dan sabar dalam bergerak ke arah kemitraan yang bisa diterapkan.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pemerintah harus memastikan bahwa informasi dikelola dengan sangat baik. Records data harus dilakukan, baik yang berbasis kertas atau elektronik. Basis elektronik merupakan dasar-dasar manajemen informasi yang baik. Namun demikian, khususnya di banyak negara-negara berkembang, sistem pencatatan (record) sangat lemah dan banyak yang rusak. Kondisi ini sangat sulit membuat masyarakat atau publik dapat memonitor kinerja dan mengakses informasi yang mereka butuhkan.&lt;/p&gt;\r\n\r\n&lt;p&gt;Munculnya TIK (Teknologi Informasi dan Komunikasi) telah memberikan kesempatan yang luas kepada publik untuk memperoleh informasi yang dibuthkan berkenaan dengan apa yang dilakukan pemerintah dalam hal pembangunan dan telah membuat manajemen informasi yang lebih baik. Sistem komputerisasi telah membantu pemerintah mengelola informasi sehingga lebih mudah dikelola dan diakses oleh masyarakat sesuai dengan porsinya masing-masing.&lt;/p&gt;\r\n\r\n&lt;p&gt;Untuk menuju good governance serta mempercepat penyelenggaraan otonomi daerah, pemanfaatan teknologi informasi dan komunikasi pada setiap penyelenggaraan pemerintahan, merupakan kebutuhan yang mutlak, dalam rangka mendukung pertukaran data dan informasi serta penyaluran berita secara cepat, tepat, dan akurat. Dalam OEDC e-book disebutkan bahwa good governance mempunyai delapan karakteristik utama dalam memimpin pemerintahan yaitu : Participation, Transparency, Effectiveness and efficiency, Responsiveness, Accountability, Equity and inclusiveness, Rule of Law.&lt;/p&gt;\r\n\r\n&lt;p&gt;Salah satu cara mengimplementasikan karakteristik good governance tersebut adalah dengan menerapkan E-Government. E-Government dapat dijadikan sebagai model baru dalam gaya kepemimpinan, cara baru pengambilan keputusan, cara baru dalam akses pendidikan, cara baru dalam pengambilan kebijakan dan investasi, sarana baru dalam menerima keluhan masyarakat, cara baru dalam akuntabilitas ke publik, dan cara baru dalam mengelola pengiriman dan pelayanan semua informasi pemerintah ke publik. Dengan cara ini rasa kepercayaan publik ke pemerintah akan benar-benar terwujud, karena yang sangat diharapkan oleh publik adalah transparansi dan pelayanan yang baik dari pemerintah.&lt;/p&gt;</pre>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2024-04-17KadisKominfo.jpg', '2022-01-03', '0', 8),
(6, 'Visi dan Misi', 8, '<p><span style=\"font-size: 18pt;\"><strong>Visi dan Misi Diskominfo Kota Bogor</strong></span></p>\r\n<p><span style=\"font-size: 12pt;\"><strong>Visi:</strong></span></p>\r\n<p><span style=\"font-size: 12pt;\">\"Mewujudkan Kota Bogor sebagai Kota Ramah Keluarga\"<br></span></p>\r\n<p><strong><span style=\"font-size: 12pt;\">Misi:</span></strong></p>\r\n<ol>\r\n<li><span style=\"font-size: 12pt;\">Mewujudkan Kota yang Sehat;</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mewujudkan Kota yang Cerdas;</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mewujudkan Kota yang Sejahtera.</span></li>\r\n</ol>', '2024-04-17logo-atas.png', '2020-05-01', '0', 8);

-- --------------------------------------------------------

--
-- Table structure for table `header_slides`
--

CREATE TABLE `header_slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(85) NOT NULL,
  `file` varchar(255) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_slides`
--

INSERT INTO `header_slides` (`id`, `judul`, `file`, `keterangan`, `status`) VALUES
(2, 'Booklet Smart City Kota Bogor 2019', '2024-04-17Booklet Smart City Kota Bogor 2019.jpeg', 'Booklet Smart City Kota Bogor 2019', '0'),
(3, 'Booklet Smart City Kota Bogor 2020', '2024-04-17Booklet Smart City Kota Bogor 2020.jpeg', 'Booklet Smart City Kota Bogor 2020', '0'),
(4, 'Profile Dinas Komunikasi dan Informatika Kota Bogor', '2024-04-17profile.jpeg', 'Profile Dinas Komunikasi dan Informatika Kota Bogor', '0');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_beritas`
--

CREATE TABLE `kategori_beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_beritas`
--

INSERT INTO `kategori_beritas` (`id`, `kategori`, `keterangan`) VALUES
(10, 'Berita', 'Berita Diskominfo'),
(11, 'Artikel', 'Artikel Diskominfo');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_hal_statis`
--

CREATE TABLE `kategori_hal_statis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_hal_statis`
--

INSERT INTO `kategori_hal_statis` (`id`, `kategori`, `keterangan`) VALUES
(6, 'Tupoksi', 'Tupoksi'),
(7, 'Struktur Organisasi', 'Struktur Organisasi'),
(8, 'Visi dan Misi', 'Visi dan Misi Diskominfo'),
(9, 'Sambutan', 'Sambutan Kepala Diskominfo');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_02_090026_create_agendas_table', 1),
(5, '2024_04_02_115519_create_albums_table', 1),
(6, '2024_04_02_115720_create_kategori_beritas_table', 1),
(7, '2024_04_02_115841_create_kategori_hal_statis_table', 1),
(8, '2024_04_02_120019_create_banners_table', 1),
(9, '2024_04_02_120820_create_beritas_table', 1),
(10, '2024_04_02_121359_create_dokumens_table', 1),
(11, '2024_04_02_121706_create_faqs_table', 1),
(12, '2024_04_02_121806_create_galeri_fotos_table', 1),
(13, '2024_04_02_122014_create_galeri_videos_table', 1),
(14, '2024_04_02_122407_create_hal_statis_table', 1),
(15, '2024_04_02_122826_create_header_slides_table', 1),
(16, '2024_04_02_123006_create_visitors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('epYpCLqK1JmJgQNYiz8DJyrDJWgL9OGskOBlCgAB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaTh1cWNHUkNucHZzb0FLSVhIbnJlcjhTejJLQmd0a0tLQnlpdW1QRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToiYWxlcnQiO2E6MDp7fX0=', 1713460723);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('operator','superadmin') NOT NULL DEFAULT 'operator',
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `username`, `password`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Operator', 'operator@gmail.com', NULL, 'Operator', '$2y$12$i2UnUB1DrR6u4GlhQ5m1KuFLkgNnEMhA.H4XoAF6corqMMT4/I9pK', 'operator', '2024-04-1860111.jpg', NULL, '2024-04-04 05:38:29', '2024-04-18 04:53:10'),
(8, 'Super Admin', 'superadmin@gmail.com', NULL, 'Super Admin', '$2y$12$qHn3269fZ4NE6wXpU4nmbeAGFL3aeKGgxFd1PjMww/Vq1QgfhkHbC', 'superadmin', '2024-04-1660111.jpg', NULL, '2024-04-15 07:32:06', '2024-04-15 20:21:55'),
(14, 'Salsabilla Maharani', 'sabila@gmail.com', NULL, 'Salsabilla Maharani', '$2y$12$qIB7BtuCEvP5zbx7dEfEWuM4mdUqxq3yASi1dReSgbu/C1FfaCuWy', 'superadmin', '2024-04-1820230124_150338.jpg', NULL, '2024-04-18 09:56:20', '2024-04-18 10:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `total_visit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agendas_user_id_index` (`user_id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_user_id_index` (`user_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_user_id_foreign` (`user_id`),
  ADD KEY `berita_kategori_berita_id_foreign` (`kategori_berita_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `dokumens`
--
ALTER TABLE `dokumens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeri_fotos_album_id_index` (`album_id`);

--
-- Indexes for table `galeri_videos`
--
ALTER TABLE `galeri_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hal_statis`
--
ALTER TABLE `hal_statis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hal_statis_kategori_hal_statis_id_index` (`kategori_hal_statis_id`),
  ADD KEY `hal_statis_user_id_index` (`user_id`);

--
-- Indexes for table `header_slides`
--
ALTER TABLE `header_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_beritas`
--
ALTER TABLE `kategori_beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_hal_statis`
--
ALTER TABLE `kategori_hal_statis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `dokumens`
--
ALTER TABLE `dokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `galeri_videos`
--
ALTER TABLE `galeri_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hal_statis`
--
ALTER TABLE `hal_statis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `header_slides`
--
ALTER TABLE `header_slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_beritas`
--
ALTER TABLE `kategori_beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori_hal_statis`
--
ALTER TABLE `kategori_hal_statis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agendas`
--
ALTER TABLE `agendas`
  ADD CONSTRAINT `agendas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galeri_fotos`
--
ALTER TABLE `galeri_fotos`
  ADD CONSTRAINT `galeri_fotos_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

--
-- Constraints for table `hal_statis`
--
ALTER TABLE `hal_statis`
  ADD CONSTRAINT `hal_statis_kategori_hal_statis_id_foreign` FOREIGN KEY (`kategori_hal_statis_id`) REFERENCES `kategori_hal_statis` (`id`),
  ADD CONSTRAINT `hal_statis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
