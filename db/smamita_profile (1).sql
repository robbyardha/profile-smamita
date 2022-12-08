-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 10:03 PM
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
(1, 'Tesss asldjh asdlija asldij asd xcxzczxc', ' Prestasi, Ekonomi, Ekonomi, Politik', '&lt;p&gt;&lt;s&gt;&lt;span style=&quot;font-size:9px&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://localhost/profile-smamita/assets/img_konten/1373841338.png&quot; style=&quot;height:800px; width:800px&quot; /&gt;&lt;/span&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas ex vitae mi vehicula condimentum. Cras cursus interdum dapibus. Vestibulum mi ipsum, vestibulum quis tortor eu, tincidunt aliquam libero. Vivamus nec ante quis augue pharetra rutrum. Ut at ultricies risus, eu vehicula nulla. Integer feugiat ex eget nibh facilisis tincidunt. Nunc faucibus malesuada efficitur. Vestibulum luctus tortor purus, id gravida arcu fringilla ut. Proin volutpat dapibus molestie. Aliquam ut justo justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sapien arcu, consequat at tincidunt pharetra, dignissim nec dolor. Aenean venenatis ligula vitae condimentum condimentum. Aenean dapibus elementum neque, a consequat libero interdum a. Mauris in sollicitudin velit. Praesent ultricies cursus lorem, id dictum tellus volutpat ac. Donec facilisis ullamcorper molestie. Duis molestie lorem neque, et vestibulum nulla varius eget. Morbi ac sapien fermentum dolor semper tempus. Mauris placerat sem vel nunc feugiat, non pharetra velit sagittis. Etiam a neque quis leo ornare ornare. Ut vel erat orci. Sed nec tempor mauris. Quisque iaculis ex sit amet mi dignissim scelerisque. Suspendisse laoreet finibus turpis sed commodo. Mauris lectus ligula, consequat eget ornare ac, dictum at leo. Donec ullamcorper nibh a pretium eleifend. Sed lobortis dapibus interdum. Nam consequat sodales eros eu tempor. Suspendisse volutpat enim sit amet ullamcorper ornare. Etiam feugiat purus purus, non sagittis nisi euismod vel. Curabitur rhoncus tristique leo eu finibus. Donec congue, sapien non tempus scelerisque, lectus augue tempor leo, sed convallis neque urna volutpat magna.&lt;/s&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;input checked=&quot;checked&quot; name=&quot;asdasda&quot; type=&quot;radio&quot; value=&quot;sdasd&quot; /&gt;asdad&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;input name=&quot;asdad&quot; required=&quot;required&quot; type=&quot;radio&quot; value=&quot;asd&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;blob:http://localhost/e4acc833-92dd-4c7d-81b6-d60461a83139&quot; style=&quot;width:2000px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;weqweqwe&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;blob:http://localhost/18e2cfa7-30fa-42a7-ae4f-5b09ad945ed3&quot; style=&quot;width:2000px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', '2022-12-09', '04:02:52', 'Robby Firmansyah Ardha', '1670532344_headline_news.png', 'tesss-asldjh-asdlija-asldij-asd-xcxzczxc', '2022-12-06 22:37:53', 'sess', '2022-12-09 04:02:52', 'Robby Firmansyah Ardha', 1),
(2, 'paket hemat adalah paket mantabbppu djiwaaa', ' Ekonomi', '&lt;p&gt;Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc bibendum at tellus sed pharetra. Etiam et purus quis ante condimentum condimentum non a orci. Cras ut magna vitae diam feugiat volutpat. Integer porta semper aliquam. Duis ut tortor nunc. Praesent ornare tincidunt interdum. Fusce pharetra neque quis ex faucibus egestas. Praesent sapien leo, sagittis vel dictum eget, ultrices ut magna. Cras dictum, enim sed maximus volutpat, ante enim lacinia massa, quis pharetra tortor justo vitae mauris. Praesent sapien dui, vestibulum vel elit ac, cursus faucibus magna. In dictum cursus mauris, sit amet venenatis augue mollis non. Maecenas erat augue, aliquet sed tellus at, tempor ultrices leo. Morbi eu mi posuere, commodo tortor sed, viverra felis.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aenean eleifend magna ut dui interdum pretium. Proin condimentum ante non enim suscipit, quis posuere felis lobortis. Nam commodo consequat odio pellentesque interdum. Nullam interdum elit non tincidunt ultrices. In fermentum lacus vitae felis finibus mattis. Cras tempor magna at tincidunt consequat. Fusce eu metus nec arcu egestas euismod. Suspendisse tempor, felis vitae blandit mattis, dolor nibh facilisis ante, sed convallis risus diam eget augue.&lt;/p&gt;\r\n\r\n&lt;p&gt;Generated 5 paragraphs, 422 words, 2888 bytes of&amp;nbsp;&lt;a href=&quot;https://www.lipsum.com/&quot;&gt;Lorem Ipsum&lt;/a&gt;&lt;/p&gt;\r\n', '2022-12-06', '23:41:34', 'Robby Firmansyah Ardha', '1670344894_headline_news.png', 'paket-hemat-adalah-paket-mantabbppu-djiwaaa', '2022-12-06 23:41:34', 'Robby Firmansyah Ardha', NULL, NULL, 1),
(4, 'Interdum et malesuada fames ac ante ipsum primis in faucibus. ', ' Humaniora, Prestasi, Ekonomi, Politik, Hiburan', '&lt;p&gt;&lt;strong&gt;Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;/strong&gt; Nunc bibendum at tellus sed pharetra. Etiam et purus quis ante condimentum condimentum non a orci. Cras ut magna vitae diam feugiat volutpat. Integer porta semper aliquam. Duis ut tortor nunc. Praesent ornare tincidunt interdum. Fusce pharetra neque quis ex faucibus egestas. Praesent sapien leo, sagittis vel dictum eget, ultrices ut magna. Cras dictum, enim sed maximus volutpat, ante enim lacinia massa, quis pharetra tortor justo vitae mauris. Praesent sapien dui, vestibulum vel elit ac, cursus faucibus magna. In dictum cursus mauris, sit amet venenatis augue mollis non. Maecenas erat augue, aliquet sed tellus at, tempor ultrices leo. Morbi eu mi posuere, commodo tortor sed, viverra felis.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aenean eleifend magna ut dui interdum pretium. Proin condimentum ante non enim suscipit, quis posuere felis lobortis. Nam commodo consequat odio pellentesque interdum. Nullam interdum elit non tincidunt ultrices. In fermentum lacus vitae felis finibus mattis. Cras tempor magna at tincidunt consequat. Fusce eu metus nec arcu egestas euismod. Suspendisse tempor, felis vitae blandit mattis, dolor nibh facilisis ante, sed convallis risus diam eget augue.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;gtx-trans&quot; style=&quot;position: absolute; left: 372px; top: -6px;&quot;&gt;\r\n&lt;div class=&quot;gtx-trans-icon&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;/div&gt;\r\n', '2022-12-07', '00:49:30', 'Robby Firmansyah Ardha', '1670348970_headline_news.png', 'interdum-et-malesuada-fames-ac-ante-ipsum-primis-in-faucibus', '2022-12-06 23:43:24', 'Robby Firmansyah Ardha', '2022-12-07 00:49:30', 'Robby Firmansyah Ardha', 1),
(5, 'lkdsjv;kds', ' Humaniora, Prestasi, Ekonomi, Politik, Hiburan', '&lt;p&gt;&lt;strong&gt;Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;/strong&gt; Nunc bibendum at tellus sed pharetra. Etiam et purus quis ante condimentum condimentum non a orci. Cras ut magna vitae diam feugiat volutpat. Integer porta semper aliquam. Duis ut tortor nunc. Praesent ornare tincidunt interdum. Fusce pharetra neque quis ex faucibus egestas. Praesent sapien leo, sagittis vel dictum eget, ultrices ut magna. Cras dictum, enim sed maximus volutpat, ante enim lacinia massa, quis pharetra tortor justo vitae mauris. Praesent sapien dui, vestibulum vel elit ac, cursus faucibus magna. In dictum cursus mauris, sit amet venenatis augue mollis non. Maecenas erat augue, aliquet sed tellus at, tempor ultrices leo. Morbi eu mi posuere, commodo tortor sed, viverra felis.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aenean eleifend magna ut dui interdum pretium. Proin condimentum ante non enim suscipit, quis posuere felis lobortis. Nam commodo consequat odio pellentesque interdum. Nullam interdum elit non tincidunt ultrices. In fermentum lacus vitae felis finibus mattis. Cras tempor magna at tincidunt consequat. Fusce eu metus nec arcu egestas euismod. Suspendisse tempor, felis vitae blandit mattis, dolor nibh facilisis ante, sed convallis risus diam eget augue.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;gtx-trans&quot; style=&quot;position: absolute; left: 372px; top: -6px;&quot;&gt;\r\n&lt;div class=&quot;gtx-trans-icon&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;/div&gt;\r\n', '2022-12-05', '00:49:30', 'Robby Firmansyah Ardha', '1670348970_headline_news.png', 'interdum-et-malesuada-fames-ac-ante-ipsum-primis-in-faucibus', '2022-12-06 23:43:24', 'Robby Firmansyah Ardha', '2022-12-07 00:49:30', 'Robby Firmansyah Ardha', 1),
(6, 'p[awodf-230i', ' Humaniora, Prestasi, Ekonomi, Politik, Hiburan', '&lt;p&gt;&lt;strong&gt;Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;/strong&gt; Nunc bibendum at tellus sed pharetra. Etiam et purus quis ante condimentum condimentum non a orci. Cras ut magna vitae diam feugiat volutpat. Integer porta semper aliquam. Duis ut tortor nunc. Praesent ornare tincidunt interdum. Fusce pharetra neque quis ex faucibus egestas. Praesent sapien leo, sagittis vel dictum eget, ultrices ut magna. Cras dictum, enim sed maximus volutpat, ante enim lacinia massa, quis pharetra tortor justo vitae mauris. Praesent sapien dui, vestibulum vel elit ac, cursus faucibus magna. In dictum cursus mauris, sit amet venenatis augue mollis non. Maecenas erat augue, aliquet sed tellus at, tempor ultrices leo. Morbi eu mi posuere, commodo tortor sed, viverra felis.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aenean eleifend magna ut dui interdum pretium. Proin condimentum ante non enim suscipit, quis posuere felis lobortis. Nam commodo consequat odio pellentesque interdum. Nullam interdum elit non tincidunt ultrices. In fermentum lacus vitae felis finibus mattis. Cras tempor magna at tincidunt consequat. Fusce eu metus nec arcu egestas euismod. Suspendisse tempor, felis vitae blandit mattis, dolor nibh facilisis ante, sed convallis risus diam eget augue.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;gtx-trans&quot; style=&quot;position: absolute; left: 372px; top: -6px;&quot;&gt;\r\n&lt;div class=&quot;gtx-trans-icon&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;/div&gt;\r\n', '2022-12-09', '00:49:30', 'Robby Firmansyah Ardha', '1670348970_headline_news.png', 'interdum-et-malesuada-fames-ac-ante-ipsum-primis-in-faucibus', '2022-12-06 23:43:24', 'Robby Firmansyah Ardha', '2022-12-07 00:49:30', 'Robby Firmansyah Ardha', 1),
(7, 'zxzcxzcxzc', ' Terbaru, Humaniora, Prestasi, Ekonomi, Politik, Hiburan', '&lt;p&gt;&lt;strong&gt;Interdum et malesuada fames ac ante ipsum primis in faucibus.&lt;/strong&gt; Nunc bibendum at tellus sed pharetra. Etiam et purus quis ante condimentum condimentum non a orci. Cras ut magna vitae diam feugiat volutpat. Integer porta semper aliquam. Duis ut tortor nunc. Praesent ornare tincidunt interdum. Fusce pharetra neque quis ex faucibus egestas. Praesent sapien leo, sagittis vel dictum eget, ultrices ut magna. Cras dictum, enim sed maximus volutpat, ante enim lacinia massa, quis pharetra tortor justo vitae mauris. Praesent sapien dui, vestibulum vel elit ac, cursus faucibus magna. In dictum cursus mauris, sit amet venenatis augue mollis non. Maecenas erat augue, aliquet sed tellus at, tempor ultrices leo. Morbi eu mi posuere, commodo tortor sed, viverra felis.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aenean eleifend magna ut dui interdum pretium. Proin condimentum ante non enim suscipit, quis posuere felis lobortis. Nam commodo consequat odio pellentesque interdum. Nullam interdum elit non tincidunt ultrices. In fermentum lacus vitae felis finibus mattis. Cras tempor magna at tincidunt consequat. Fusce eu metus nec arcu egestas euismod. Suspendisse tempor, felis vitae blandit mattis, dolor nibh facilisis ante, sed convallis risus diam eget augue.&lt;/p&gt;\r\n\r\n&lt;div id=&quot;gtx-trans&quot; style=&quot;position: absolute; left: 372px; top: -6px;&quot;&gt;\r\n&lt;div class=&quot;gtx-trans-icon&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;/div&gt;\r\n', '2022-12-06', '00:49:30', 'Robby Firmansyah Ardha', '1670348970_headline_news.png', 'interdum-et-malesuada-fames-ac-ante-ipsum-primis-in-faucibus', '2022-12-06 23:43:24', 'Robby Firmansyah Ardha', '2022-12-07 00:49:30', 'Robby Firmansyah Ardha', 1),
(8, 'Bersiap Menyambut Asesmen Nasional', ' Terbaru, Opini', '&lt;p&gt;&lt;strong&gt;Bersiap Menyambut Asesmen Nasional&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Pada September dan Oktober 2021 ini, Kementerian Pendidikan Kebudayaan Riset dan Teknologi (Kemendikbudristek) akan menyelenggarakan Asesmen Nasional yang merupakan evaluasi sistem pendidikan pada jenjang pendidikan dasar dan pendidikan menengah. Pertama kali disampaikan kepada publik pada 11 Desember 2019, Asesmen Nasional merupakan salah satu terobosan Mendikbudristek Nadiem Makarim yang berani menyudahi pelaksanaan Ujian Nasional dan menjadi bagian dari paket pertama kebijakan pembenahan pendidikan di Indonesia yang dikenal dengan Merdeka Belajar.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sebelum Asesmen Nasional, Indonesia telah memiliki dan melaksanakan sejumlah sistem penilaian, termasuk mengikuti penilaian yang dilaksanakan oleh lembaga internasional. Penilaian yang diselenggarakan oleh Kemendikbudristek meliputi Ujian Nasional Berbasis Komputer (UNBK), Ujian Sekolah Berstandar Nasional (USBN), dan Asesmen Kompetensi Siswa Indonesia (AKSI).&lt;/p&gt;\r\n\r\n&lt;p&gt;Sementara itu, siswa-siswa Indonesia juga mengikuti penilaian yang dilaksanakan oleh lembaga internasional seperti survei The Trends in International Mathematics and Science Study (TIMSS), The Progress in International Reading Literacy Study (PIRLS), dan Programme for International Student Assessment (PISA).&lt;/p&gt;\r\n\r\n&lt;p&gt;Dengan keberadaan sejumlah sistem penilaian tersebut, kehadiran Asesmen Nasional diharapkan dapat menambal kebutuhan yang belum diperoleh dari sistem yang ada tersebut. Berbeda dengan Ujian Nasional yang menjadi indikator keberhasilan siswa sebagai individu, Asesmen Nasional sebagai evaluasi sistem tidak memiliki konsekuensi pada siswa yang mengikuti asesmen. Asesmen Nasional tidak menghasilkan skor individu siswa, guru, maupun kepala sekolah.&lt;/p&gt;\r\n\r\n&lt;p&gt;Dalam Asesmen Nasional, evaluasi dilakukan terhadap hasil belajar siswa yang mendasar (literasi, numerasi, dan karakter) serta kualitas proses belajar-mengajar dan iklim satuan pendidikan yang mendukung pembelajaran. Informasi tersebut diperoleh dengan tiga instrumen utama, yaitu Asesmen Kompetensi Minimum (AKM), Survei Karakter, dan Survei Lingkungan Belajar.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sementara itu, belajar dari pengalaman Ujian Nasional yang berpengaruh pada citra sekolah dan pemerintah daerah sehingga berbagai cara dilakukan agar terlihat sukses dalam Ujian Nasional, maka pada Asesmen Nasional hasil asesmen akan ditampilkan dengan menghindari pemeringkatan dan pelabelan negatif terhadap sekolah dan daerah. Menurut Kemdikbudristek, hasil Asesmen Nasional hanya dapat dilihat oleh sekolah masing-masing serta Dinas Pendidikan (Kemdikbudristek, 2021).&lt;/p&gt;\r\n\r\n&lt;p&gt;Terdapat beberapa argumen mengapa Asesmen Nasional perlu dan penting untuk diselenggarakan. Pertama, dengan situasi pandemi Covid-19 yang memaksa proses belajar mengajar dilaksanakan dari rumah dalam kondisi darurat, telah memunculkan kekhawatiran tentang hilangnya kesempatan belajar (learning loss) bagi banyak siswa. Terdapat beberapa dampak negatif dari situasi pandemi Covid-19 terhadap siswa yang belajar dari rumah, misalnya menurunnya proses pembangunan karakter, munculnya tekanan psikososial, dan menurunnya motivasi siswa hingga siswa cepat bosan dan tidak mau belajar (Kusumastuti, 2021).&lt;/p&gt;\r\n\r\n&lt;p&gt;Sampai dengan saat ini belum tersedia data yang komprehensif tentang seberapa besar, pada siapa, di mana, dan mengapa learning loss terjadi. Asesmen Nasional perlu mengambil peran ini, dengan memetakan learning loss di seluruh Indonesia dan menjadi data awal (baseline) dalam rangka menentukan kebijakan atau intervensi pemerintah yang tepat sesuai permasalahan yang terjadi di lapangan.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kedua, selama ini sistem evaluasi pendidikan pada sekolah-sekolah banyak dikeluhkan oleh guru dan kepala sekolah karena membuat fokus untuk melakukan tugas mengajar menjadi terganggu oleh urusan administratif yang ribet misalnya borang penilaian yang terpisah-pisah, tumpang tindih, dan berulang (tidak efisien). Bahkan sampai Presiden Joko Widodo pun pernah mengeluhkan para guru dan kepala sekolah lebih sibuk mengurus SPj (Surat Pertanggungjawaban) dibanding mengajar. Kehadiran Asesmen Nasional diharapkan membawa perubahan terhadap model evaluasi pendidikan yang cenderung administratif tersebut dan benar-benar diarahkan untuk mendorong perbaikan kualitas pembelajaran.&lt;/p&gt;\r\n\r\n&lt;p&gt;Ketiga, untuk melakukan pembenahan yang menyeluruh atas permasalahan pendidikan, diperlukan pemetaan atas permasalahan yang ada di lapangan secara spesifik. Selama ini kebijakan yang sering digunakan dalam pembenahan di daerah-daerah di Indonesia cenderung menggunakan pendekatan &amp;quot;one size fits all&amp;quot; secara top down. Padahal tidak semua daerah memiliki karakter permasalahan yang sama sehingga perlu pendekatan yang lebih sesuai dengan kondisi yang dihadapi masing-masing daerah atau sekolah.&lt;/p&gt;\r\n\r\n&lt;p&gt;Dari Survei Lingkungan Belajar sebagai bagian Asesmen Nasional yang mengukur kualitas pembelajaran, iklim keamanan dan inklusivitas sekolah, refleksi guru, praktik pengajaran, dan latar belakang keluarga siswa, diharapkan diperoleh informasi yang berguna untuk melakukan diagnosis masalah dan perencanaan perbaikan pembelajaran oleh guru, kepala sekolah, dan dinas pendidikan. Hal ini diharapkan membantu sekolah dalam menyusun kebijakan untuk meningkatkan mutu pembelajaran sesuai dengan permasalahan yang dihadapi. (selengkapnya di https://news.detik.com/kolom/d-5716092/bersiap-menyambut-asesmen-nasional)&lt;/p&gt;\r\n\r\n&lt;p&gt;6. &amp;quot;Second Plan&amp;quot; Pendidikan Kita&lt;/p&gt;\r\n\r\n&lt;p&gt;Mulai melandainya kasus aktif Covid-19 memberikan secercah harapan bagi dunia pendidikan yang seperti mati suri dengan kebijakan on-off menyesuaikan situasi Covid-19. Situasi ini tentu menghadirkan euforia kembali ke sekolah dengan belajar tatap muka. Namun demikian, sembari menunggu habis masa &amp;quot;larangan&amp;quot; masuk sekolah selama masa PPKM ini, perlu kiranya kita bisa mempersiapkan segala sesuatunya, sembari mengelola agar euforia kembali ke sekolah tidak berlebihan.&lt;/p&gt;\r\n\r\n&lt;p&gt;Harus diakui, magnet keceriaan ketika bersekolah sedikit-banyak hilang ditelan pandemi. Kapan lagi kita dapat melihat senyum lepas anak-anak sekolah? Kita terbayang-bayang betapa bahagianya ketika keceriaan itu sudah kembali. Keceriaan saat melihat anak-anak berseragam sekolah, bersendau gurau dengan teman sekolahnya.&lt;/p&gt;\r\n\r\n&lt;p&gt;Di pinggir jalan, sambil meneguk minuman dingin khas jajanan anak sekolah, saling berkisah asyiknya belajar di kelas. Ataupun berkelindan kata merencanakan agenda bermain melepas penat mengerjakan soal. Begitu cair, meskipun sedikit canggung awalnya. Namun tak mengapa, untuk memulai sesuatu yang bakal indah ke depannya.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kita optimistis, raut kesukacitaan akan terlihat kembali dari wajah anak-anak. Keceriaan yang mungkin tampak berbeda ketimbang pada saat bermain bersama. Mungkin mereka yang ceria mengenakan seragam sekolah tadi adalah mereka pula yang kerap bermain bersama. Berbagi keceriaan di perpustakaan, di kantin, dan pojok-pojok sekolah, dengan tetap menjalankan protokol kesehatan saat belajar di era kebiasaan baru.&lt;/p&gt;\r\n\r\n&lt;p&gt;Namun, keceriaan itu bisa seketika pupus. Manakala, hasrat tinggi bersekolah tidak diimbangi dengan ketaatan, kedisiplinan dalam menerapkan protokol kesehatan. Setidaknya ini terlihat, masih banyak anak yang berkerumun, bahkan tidak memakai masker. Meskipun kasus harian di banua kita relatif aman, tetapi bukan berarti abai dengan &amp;quot;kewajiban&amp;quot; saat berada di sekolah maupun lingkungan sekolah.&lt;/p&gt;\r\n\r\n&lt;p&gt;Jangan sampai euforia belajar tatap muka di sekolah, menjadi mudarat khususnya bagi kesehatan dan keselamatan semua warga sekolah.&lt;/p&gt;\r\n\r\n&lt;p&gt;Adanya pandemi setidaknya juga mengajarkan kepada kita semua agar tidak hanya diam dan membuat kondisi pendidikan kita terpuruk. Banyak terobosan inovasi yang bisa kita coba terapkan agar kita tidak lagi kaget ketika menghadapi situasi serupa. Pertama, jangan sekadar mengandalkan belajar tatap muka.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pembelajaran tatap muka memang menjadi aset berharga pendidikan kita. Dengan belajar tatap muka, secara psikologis memberikan garansi bahwa anak sudah sekolah, dan guru sudah mengajar. Sederhananya, dengan belajar tatap muka, maka sudah gugur kewajiban bersekolahnya. Tentu bukan demikian; ada urgensi dari belajar tatap muka, yaitu memberikan pemahaman lebih mendalam tentang suatu pengetahuan ketimbang pada saat belajar online.&lt;/p&gt;\r\n\r\n&lt;p&gt;Kedua, jangan terus menyalahkan belajar online. Dalam suatu kegiatan supervisi mahasiswa bimbingan Praktik Pengalaman Lapangan (PPL), saya mengamati bahwa praktikan yang dilakukan dengan sistem online ternyata justru interaktif dan menarik.&lt;/p&gt;\r\n\r\n&lt;p&gt;Guru bisa menjelaskan dengan animasi menarik, siswa juga semangat belajar, menjawab soal, aktif menjawab. Dengan catatan, guru praktikan mengemas pembelajaran dengan baik. Membuat powerpoint yang eye-catching, terus berinteraksi dengan para siswanya, komunikasi dua arah, menulis dengan papan tulis digital, justru terlihat keren.&lt;/p&gt;\r\n\r\n&lt;p&gt;Memang, ada syarat dan ketentuan yang harus dipenuhi jika memang belajar sistem online dengan memanfaatkan berbagai platform digital, utamanya adalah sarana dan prasarana pendidikan yang merangkul seluruh siswa hingga ke daerah 3T.&lt;/p&gt;\r\n\r\n&lt;p&gt;Besarnya anggaran pendidikan 20% dari APBN di tiap tahunnya, tentu lambat laun bisa meng-cover pemenuhan fasilitas pendidikan, baik HP, internet, hingga ke daerah pelosok. Sehingga, semua anak bangsa bisa mengakses hakikat pendidikan abad ke-21, pendidikan era disrupsi, pendidikan di era 4.0 maupun 5.0. Jadi, ada-tidaknya pandemi, pembelajaran dengan sistem online ini adalah alternatif solusi di kala pembelajaran tatap muka masih nihil kontribusi.&lt;/p&gt;\r\n\r\n&lt;p&gt;Ketiga, belajar jangan lagi berorientasi pada nilai kognitif saja. Konsep merdeka belajar yang digaungkan Mendikbud sudah sangat cocok untuk memutus rantai lingkaran setan dari belajar sekadar mencari nilai, bukan kepahaman dan makna belajar yang dikaitkan dengan konteks nyata. Menghapus jiwa-jiwa yang gemar berorientasi pada prestasi dari segi kognitif dan intelektual semata. Mengeliminasi predikat juara kelas, ranking, dan semacamnya.&lt;/p&gt;\r\n\r\n&lt;p&gt;Apa artinya berkompetisi dan berlomba untuk meraih prestasi akademik itu tidak bagus? Tentu bagus. Masalahnya hanyalah pada substansi yang diujikan, substansi yang diujikan, masih berkutat pada bahan hafalan, belum pada bahan yang mengarahkan peserta didik alias siswa pada kebiasaan menganalisis, mengevaluasi, sekaligus mengkreasi.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;http://localhost/profile-smamita/assets/img_konten/1675469635.png&quot; style=&quot;height:250px; width:250px&quot; /&gt;&amp;nbsp;&lt;/p&gt;\r\n', '2022-12-09', '04:01:20', 'Robby Firmansyah Ardha', '1670533280_headline_news.png', 'bersiap-menyambut-asesmen-nasional', '2022-12-09 04:01:20', 'Robby Firmansyah Ardha', NULL, NULL, 1);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
