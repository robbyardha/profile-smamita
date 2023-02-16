-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 05:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
  `role_id` int(11) NOT NULL COMMENT '1 = Super Admin, 2=Humas, 3=Kurikulum, 4=Kesiswaan, 5=Sarpras, 6=Ismuba, 7=Jurnalis',
  `is_active` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `email`, `password`, `role_id`, `is_active`, `created_date`) VALUES
(1, 'ROBBY FIRMANSYAH ARDHA', 'robbyfa', 'robby@ardhacodes.com', '$2y$10$CiMZtDlpAZvOk2rDqXRzzuaqiOtv1932yy4a2L6e0j1uOIPwRzvJa', 1, 1, '2023-02-16 10:46:43'),
(2, 'HUMAS', 'humas', 'humas@smam1ta.sch.id', '$2y$10$DCyA7sORrHJ88AZh5XijKu8FvK2Zx.S5/xzoVzUv4rEdE5A1ML0I.', 2, 1, '2023-02-16 10:47:23'),
(3, 'KURIKULUM', 'kurikulum', 'kurikulum@smam1ta.sch.id', '$2y$10$3aPv7vtXZiJEEthSXEwPBe7ozCE34gRaFFP9ksIjJ6Wq/m7WmX/Va', 3, 1, '2023-02-16 10:47:59'),
(4, 'KESISWAAN', 'kesiswaan', 'kesiswaan@smam1ta.sch.id', '$2y$10$wPi9PxAFJG5WwHcilmzkI.ZDlk8JcTIIS2cB5YvpvvyTQbqRxKa9y', 4, 1, '2023-02-16 10:48:26'),
(5, 'SARPRAS', 'sarpras', 'sarpras@smam1ta.sch.id', '$2y$10$WsloKfcE7iBITPXJundUge9GZoohQKK8iglTp74oYOhnaURIobuM2', 5, 1, '2023-02-16 10:48:54'),
(6, 'ISMUBA', 'ismuba', 'ismuba@smam1ta.sch.id', '$2y$10$RuaJXVroNnPrUNPSj1ASiOgi0Vx00/TfBxYoR8uA34mZxU4SkDXR2', 6, 1, '2023-02-16 10:49:13'),
(7, 'Administrator', 'administrator', 'administrator@smam1ta.sch.id', '$2y$10$mFuPhsS3L.2cfOp7HoIDUekcZWwmmu6vXJeCZY1xmYwg/yAQvqNQW', 1, 1, '2023-02-16 10:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `id` bigint(20) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `country` varchar(155) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `operating_system` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `browser_version` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `page_url`, `tanggal`, `waktu`, `ip_address`, `country`, `country_code`, `operating_system`, `browser`, `browser_version`, `created_date`) VALUES
(1, 'https://localhost/simanis-dev/dashboard', '2022-12-31', '11:14:30', '::1', 'LOCALHOST', 'LOCALHOST', ' Win64', 'Safari', '537.36', '2022-12-31 04:14:30'),
(2, 'https://localhost/simanis-dev/dashboard', '2022-12-31', '11:14:39', '::1', 'LOCALHOST', 'LOCALHOST', ' Win64', 'Safari', '537.36', '2022-12-31 04:14:39'),
(3, 'https://100.99.99.254/simanis-dev/dashboard', '2022-12-31', '11:14:47', '100.99.96.1', 'LOCALHOST', 'LOCALHOST', ' Android 12', 'Safari', '537.36', '2022-12-31 04:14:47'),
(4, 'https://100.99.99.254/simanis-dev/dashboard', '2022-01-01', '11:14:47', '100.99.96.1', 'LOCALHOST', 'LOCALHOST', ' Android 12', 'Safari', '537.36', '2022-12-31 04:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `nama_banner` varchar(200) NOT NULL,
  `img_banner` varchar(255) NOT NULL COMMENT '250px x 970px',
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `humas`
--

CREATE TABLE `humas` (
  `id` int(11) NOT NULL,
  `nama_humas` varchar(155) NOT NULL,
  `deskripsi_humas` text NOT NULL,
  `program_kerja` varchar(155) NOT NULL COMMENT 'berupa file pdf dan ppt',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `humas`
--

INSERT INTO `humas` (`id`, `nama_humas`, `deskripsi_humas`, `program_kerja`, `is_active`, `created_date`) VALUES
(1, 'Humas', 'ganti deskripsi', 'Humas_PROKER_UPDATED.pdf', 1, '2023-02-14 02:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `humas_struktur`
--

CREATE TABLE `humas_struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `divisi` varchar(155) NOT NULL,
  `foto` varchar(155) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ismuba`
--

CREATE TABLE `ismuba` (
  `id` int(11) NOT NULL,
  `nama_ismuba` varchar(155) NOT NULL,
  `deskripsi_ismuba` text NOT NULL,
  `program_kerja` varchar(155) NOT NULL COMMENT 'berupa file pdf dan ppt',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ismuba`
--

INSERT INTO `ismuba` (`id`, `nama_ismuba`, `deskripsi_ismuba`, `program_kerja`, `is_active`, `created_date`) VALUES
(1, 'Ismuba', 'ganti ismuba gaisssss', 'Ismuba_PROKER_UPDATED.pdf', 1, '2023-02-14 02:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `ismuba_struktur`
--

CREATE TABLE `ismuba_struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `divisi` varchar(155) NOT NULL,
  `foto` varchar(155) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `kesiswaan`
--

CREATE TABLE `kesiswaan` (
  `id` int(11) NOT NULL,
  `nama_kesiswaan` varchar(155) NOT NULL,
  `deskripsi_kesiswaan` text NOT NULL,
  `program_kerja` varchar(155) NOT NULL COMMENT 'berupa file pdf dan ppt',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesiswaan`
--

INSERT INTO `kesiswaan` (`id`, `nama_kesiswaan`, `deskripsi_kesiswaan`, `program_kerja`, `is_active`, `created_date`) VALUES
(1, 'Kesiswaan', 'yohoooo', 'Kesiswaan_PROKER_UPDATED.pdf', 1, '2023-02-13 07:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `kesiswaan_struktur`
--

CREATE TABLE `kesiswaan_struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `divisi` varchar(155) NOT NULL,
  `foto` varchar(155) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi_direktur`
--

CREATE TABLE `konfigurasi_direktur` (
  `id` int(11) NOT NULL,
  `nama_direktur` varchar(255) NOT NULL,
  `kata_pengantar` longtext NOT NULL,
  `img_direktur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi_direktur`
--

INSERT INTO `konfigurasi_direktur` (`id`, `nama_direktur`, `kata_pengantar`, `img_direktur`) VALUES
(1, 'Edwin Yogi Laayrananta, M.I.Kom.', '“Assalammu\'alaikum Wr.Wb Alhamdullilah, setelah perjalanan panjang yang begitu sulit. Kini SMA Muhammadiyah 1 Taman pelan tapi pasti dapat menyelesaikan misi dari visi yang telah dicanangkan. Berbagai pembenahan dan peningkatan kualitas pelayanan akademik maupun non akademik ditunjang dengan tenaga pendidik yang profesional, serta sarana dan prasarana telah dilakukan. Namun tidak hanya berhenti disitu, SMA Muhammadiyah 1 Taman akan meningkatkan berbagai program serta memfasilitasi siswa untuk terus berprestasi dan mengeksplorasi bakatnya. Semoga langkah ini menjadi gerbang dalam meraih kesuksesan bersama dimasa mendatang, aamiin insyaAllah Wassalammu\'alaikum Wr.Wb”', '1673421663_foto_updated.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(11) NOT NULL,
  `nama_kurikulum` varchar(155) NOT NULL,
  `deskripsi_kurikulum` text NOT NULL,
  `program_kerja` varchar(155) NOT NULL COMMENT 'berupa file pdf dan ppt',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `nama_kurikulum`, `deskripsi_kurikulum`, `program_kerja`, `is_active`, `created_date`) VALUES
(1, 'Kurikulum', 'Ini Adalah Kurikulum', 'Kurikulum_PROKER_UPDATED3.pdf', 1, '2023-02-13 07:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_struktur`
--

CREATE TABLE `kurikulum_struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `divisi` varchar(155) NOT NULL,
  `foto` varchar(155) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(155) NOT NULL,
  `kelas` varchar(155) NOT NULL,
  `nama_prestasi` varchar(100) NOT NULL,
  `tingkat_prestasi` varchar(100) NOT NULL,
  `tahun_prestasi` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `nama_siswa`, `kelas`, `nama_prestasi`, `tingkat_prestasi`, `tahun_prestasi`, `foto`, `is_active`, `created_date`) VALUES
(1, 'haiyayaalksa asidja asldas', 'Sed rerum earum eaqu', 'Iste vitae sunt atq', 'nasionalll', '7', 'Iste_vitae_sunt_atq_PRESTASI_UPDATED.jpg', 1, '2023-02-14 09:23:11');

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

-- --------------------------------------------------------

--
-- Table structure for table `sarpras`
--

CREATE TABLE `sarpras` (
  `id` int(11) NOT NULL,
  `nama_sarpras` varchar(155) NOT NULL,
  `deskripsi_sarpras` text NOT NULL,
  `program_kerja` varchar(155) NOT NULL COMMENT 'berupa file pdf dan ppt',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarpras`
--

INSERT INTO `sarpras` (`id`, `nama_sarpras`, `deskripsi_sarpras`, `program_kerja`, `is_active`, `created_date`) VALUES
(1, 'Sarpras', 'ganti belakang', 'Sarpras_PROKER_UPDATED.pdf', 1, '2023-02-14 00:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `sarpras_fasilitas`
--

CREATE TABLE `sarpras_fasilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `foto` varchar(185) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarpras_fasilitas`
--

INSERT INTO `sarpras_fasilitas` (`id`, `nama`, `foto`, `is_active`, `created_date`) VALUES
(1, 'ganti fasilitias', 'ganti_fasilitias_FASILITAS_UPDATED.png', 1, '2023-02-14 01:12:46'),
(2, 'ruang uks', 'ruang_uks_FASILITAS.jpeg', 1, '2023-02-14 02:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `sarpras_struktur`
--

CREATE TABLE `sarpras_struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `divisi` varchar(155) NOT NULL,
  `foto` varchar(155) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `bagian` varchar(155) NOT NULL COMMENT 'bagian/guru',
  `foto` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `nama`, `bagian`, `foto`, `is_active`, `created_date`) VALUES
(1, 'ROBBY FIRMANSYAH ARDHA', 'Kepala IT', 'ROBBY_FIRMANSYAH_ARDHA_TEAMS.jpg', 1, '2023-02-14 03:23:20'),
(2, 'sugondo', 'yadks', 'sugondo_TEAMS_UPDATED.png', 1, '2023-02-14 03:23:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
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
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humas`
--
ALTER TABLE `humas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humas_struktur`
--
ALTER TABLE `humas_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ismuba`
--
ALTER TABLE `ismuba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ismuba_struktur`
--
ALTER TABLE `ismuba_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesiswaan`
--
ALTER TABLE `kesiswaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesiswaan_struktur`
--
ALTER TABLE `kesiswaan_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi_direktur`
--
ALTER TABLE `konfigurasi_direktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum_struktur`
--
ALTER TABLE `kurikulum_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarpras`
--
ALTER TABLE `sarpras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarpras_fasilitas`
--
ALTER TABLE `sarpras_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarpras_struktur`
--
ALTER TABLE `sarpras_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `humas`
--
ALTER TABLE `humas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `humas_struktur`
--
ALTER TABLE `humas_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ismuba`
--
ALTER TABLE `ismuba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ismuba_struktur`
--
ALTER TABLE `ismuba_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kesiswaan`
--
ALTER TABLE `kesiswaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kesiswaan_struktur`
--
ALTER TABLE `kesiswaan_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfigurasi_direktur`
--
ALTER TABLE `konfigurasi_direktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurikulum_struktur`
--
ALTER TABLE `kurikulum_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sarpras`
--
ALTER TABLE `sarpras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarpras_fasilitas`
--
ALTER TABLE `sarpras_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sarpras_struktur`
--
ALTER TABLE `sarpras_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
