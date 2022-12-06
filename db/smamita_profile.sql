-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 07:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smamita_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `username` varchar(155) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `email`, `password`, `role_id`, `is_active`, `created_date`) VALUES
(1, 'Robby Firmansyah Ardha', 'robbyss', 'robby@ardhacodes.com', '$2y$10$.kyR1XANAjWdnIC9nGuYGewVD69SATC5YwqkswrBFuFj4y.MaxGli', 1, 1, '2022-12-06 22:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) NOT NULL,
  `headline` mediumtext NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `konten` longtext NOT NULL,
  `tanggal_publikasi` date NOT NULL,
  `jam_publikasi` time NOT NULL,
  `penulis` varchar(155) NOT NULL,
  `image_berita` varchar(255) NOT NULL,
  `slug_berita` mediumtext NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(155) NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(155) DEFAULT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `headline`, `kategori`, `konten`, `tanggal_publikasi`, `jam_publikasi`, `penulis`, `image_berita`, `slug_berita`, `created_date`, `created_by`, `updated_date`, `updated_by`, `is_active`) VALUES
(1, 'Tesss', ' Prestasi, Ekonomi, Ekonomi, Politik', '&lt;p&gt;&lt;s&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas ex vitae mi vehicula condimentum. Cras cursus interdum dapibus. Vestibulum mi ipsum, vestibulum quis tortor eu, tincidunt aliquam libero. Vivamus nec ante quis augue pharetra rutrum. Ut at ultricies risus, eu vehicula nulla. Integer feugiat ex eget nibh facilisis tincidunt. Nunc faucibus malesuada efficitur. Vestibulum luctus tortor purus, id gravida arcu fringilla ut. Proin volutpat dapibus molestie. Aliquam ut justo justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sapien arcu, consequat at tincidunt pharetra, dignissim nec dolor. Aenean venenatis ligula vitae condimentum condimentum. Aenean dapibus elementum neque, a consequat libero interdum a. Mauris in sollicitudin velit. Praesent ultricies cursus lorem, id dictum tellus volutpat ac. Donec facilisis ullamcorper molestie. Duis molestie lorem neque, et vestibulum nulla varius eget. Morbi ac sapien fermentum dolor semper tempus. Mauris placerat sem vel nunc feugiat, non pharetra velit sagittis. Etiam a neque quis leo ornare ornare. Ut vel erat orci. Sed nec tempor mauris. Quisque iaculis ex sit amet mi dignissim scelerisque. Suspendisse laoreet finibus turpis sed commodo. Mauris lectus ligula, consequat eget ornare ac, dictum at leo. Donec ullamcorper nibh a pretium eleifend. Sed lobortis dapibus interdum. Nam consequat sodales eros eu tempor. Suspendisse volutpat enim sit amet ullamcorper ornare. Etiam feugiat purus purus, non sagittis nisi euismod vel. Curabitur rhoncus tristique leo eu finibus. Donec congue, sapien non tempus scelerisque, lectus augue tempor leo, sed convallis neque urna volutpat magna.&lt;/s&gt;&lt;/p&gt;\r\n', '2022-12-07', '00:50:05', 'Robby Firmansyah Ardha', '1670349005_headline_news.png', 'tesss', '2022-12-06 22:37:53', 'sess', '2022-12-07 00:50:05', 'Robby Firmansyah Ardha', 1),
(2, 'paket hemat adalah paket mantabbppu djiwaaa', ' Ekonomi', '&lt;p&gt;Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc bibendum at tellus sed pharetra. Etiam et purus quis ante condimentum condimentum non a orci. Cras ut magna vitae diam feugiat volutpat. Integer porta semper aliquam. Duis ut tortor nunc. Praesent ornare tincidunt interdum. Fusce pharetra neque quis ex faucibus egestas. Praesent sapien leo, sagittis vel dictum eget, ultrices ut magna. Cras dictum, enim sed maximus volutpat, ante enim lacinia massa, quis pharetra tortor justo vitae mauris. Praesent sapien dui, vestibulum vel elit ac, cursus faucibus magna. In dictum cursus mauris, sit amet venenatis augue mollis non. Maecenas erat augue, aliquet sed tellus at, tempor ultrices leo. Morbi eu mi posuere, commodo tortor sed, viverra felis.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aenean eleifend magna ut dui interdum pretium. Proin condimentum ante non enim suscipit, quis posuere felis lobortis. Nam commodo consequat odio pellentesque interdum. Nullam interdum elit non tincidunt ultrices. In fermentum lacus vitae felis finibus mattis. Cras tempor magna at tincidunt consequat. Fusce eu metus nec arcu egestas euismod. Suspendisse tempor, felis vitae blandit mattis, dolor nibh facilisis ante, sed convallis risus diam eget augue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Generated 5 paragraphs, 422 words, 2888 bytes of&amp;nbsp;&lt;a href=&quot;https://www.lipsum.com/&quot;&gt;Lorem Ipsum&lt;/a&gt;&lt;/p&gt;\r\n', '2022-12-06', '23:41:34', 'Robby Firmansyah Ardha', '1670344894_headline_news.png', 'paket-hemat-adalah-paket-mantabbppu-djiwaaa', '2022-12-06 23:41:34', 'Robby Firmansyah Ardha', NULL, NULL, 1),
(4, 'Interdum et malesuada fames ac ante ipsum primis in faucibus. ', ' Humaniora, Prestasi, Ekonomi, Politik, Hiburan', '&lt;p&gt;&lt;strong&gt;Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;/strong&gt; Nunc bibendum at tellus sed pharetra. Etiam et purus quis ante condimentum condimentum non a orci. Cras ut magna vitae diam feugiat volutpat. Integer porta semper aliquam. Duis ut tortor nunc. Praesent ornare tincidunt interdum. Fusce pharetra neque quis ex faucibus egestas. Praesent sapien leo, sagittis vel dictum eget, ultrices ut magna. Cras dictum, enim sed maximus volutpat, ante enim lacinia massa, quis pharetra tortor justo vitae mauris. Praesent sapien dui, vestibulum vel elit ac, cursus faucibus magna. In dictum cursus mauris, sit amet venenatis augue mollis non. Maecenas erat augue, aliquet sed tellus at, tempor ultrices leo. Morbi eu mi posuere, commodo tortor sed, viverra felis.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aenean eleifend magna ut dui interdum pretium. Proin condimentum ante non enim suscipit, quis posuere felis lobortis. Nam commodo consequat odio pellentesque interdum. Nullam interdum elit non tincidunt ultrices. In fermentum lacus vitae felis finibus mattis. Cras tempor magna at tincidunt consequat. Fusce eu metus nec arcu egestas euismod. Suspendisse tempor, felis vitae blandit mattis, dolor nibh facilisis ante, sed convallis risus diam eget augue.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;gtx-trans&quot; style=&quot;position: absolute; left: 372px; top: -6px;&quot;&gt;\r\n&lt;div class=&quot;gtx-trans-icon&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;/div&gt;\r\n', '2022-12-07', '00:49:30', 'Robby Firmansyah Ardha', '1670348970_headline_news.png', 'interdum-et-malesuada-fames-ac-ante-ipsum-primis-in-faucibus', '2022-12-06 23:43:24', 'Robby Firmansyah Ardha', '2022-12-07 00:49:30', 'Robby Firmansyah Ardha', 1);

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `company` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tagline` varchar(200) NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `name`, `logo`, `company`, `about`, `phone_number`, `email`, `tagline`, `last_update`) VALUES
(1, 'SMA Muhammadiyah 1 Taman', '1670339301_logo_updated.png', 'SMA Muhammadiyah 1 Taman', 'SMAMITA Sidoarjo telah mengalami perjalanan panjang, berdiri pada tahun 1984, SMAMITA telah melalui berbagai rintangan baik yang sifatnya mikro maupun makro. Dengan berbekal disiplin serta pengembangan dan peningkatan mutu pendidikan, menjadikan masuyarakat Sidoarjo semakin percaya kepada SMAMITA..kepercayaan ini berkembang terus sehingga SMAMITA mulai mendapatkan peserta didik melebihi pagu (kuota) yang disiapkan. Pada usianya yang sudah cukup dewasa ini SMAMITA terus melakukan pembenahan dan pengembangan serta pembaharuan (developmend reform) di berbagai bidang, baik sarana prasarana, kurikulum pendidikan dan pembelajaran, sember daya pelaksana maupun kultur yang dikembangkan sekolah. Berbagai langkah riil yang dilakukan dmaksudkan untuk menjadikan SMAMITA sekolah yang bonafit (the excellent school) yang membangun tradisi keilmuan dan spiritualitas keislaman sehingga dapat mengantarkan civitas sekolah menjadi manusia yang sholeh dalam prilaku dan unggul dalam mutu dengan keimanan dan ketaqwaan yang kokoh, wawasan keilmuan yang modern serta kecakapan hidup (life skill) dan akhlaqul karimah yang menghiasi prilaku kesehariannya. Upaya pengembangan dan pembaharuan (development and reform) yang dilakukan SMAMITA tidak hanya berdampak pada semakin meningkatnya kepercayaan masyarakat untuk menyekolahkan putra – putrinya di SMAMITA tapi juga berimbas pada terangkatnya status akreditasi sekolah secara kelembagaan dengan “Akreditasi A”. Dengan status akreditsi A itu semakin memposisikan SMAMITA pada jajaran sekolah – sekolah modern di lingkungankabupaten Sidoarjo. Pada tahun pelajaran 2017 / 2018 ini menerapkan kurikulum 2013 dengan menawarkan 2 (dua) program peminatan yang bersifat intrakurikuler yaitu (1) peminatan Matematika dan Ilmu Alam (MIPA (2) peminatan ilmu sosial (IPS). Selain itu juga tersedia puluhan program peminatan yang bersifat ekstrakurikuler yang diklasifikasikan dalam kelompok KeIslaman, kesenian, keolahragaan, ilm pengetahuan dan tehnologi, kepanduan dan sosial.', '031-7881550', 'sma.muhammadiyah1taman@gmail.com', 'The Excellent School', '2022-11-20 06:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(155) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `is_active`) VALUES
(1, 'Humaniora', 1),
(2, 'Prestasi', 1),
(3, 'Ekonomi', 1),
(4, 'Politik', 1),
(5, 'Hiburan', 1),
(6, 'Terbaru', 1),
(7, 'Lifestyle', 1),
(8, 'Technology', 1),
(9, 'Enterprenur', 1),
(10, 'Opini', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `type`, `desc`) VALUES
(1, 'super_admin', 'memiliki akses pada semua menu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
