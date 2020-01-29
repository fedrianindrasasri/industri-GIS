-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 01:17 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industri`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_industri`
--

CREATE TABLE `tb_industri` (
  `No` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `x` varchar(255) NOT NULL,
  `y` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_industri`
--

INSERT INTO `tb_industri` (`No`, `nama`, `alamat`, `x`, `y`, `foto`, `updated_at`, `created_at`) VALUES
(8, 'Coatheshire', 'Jl. Lintas Sumatra, Sri Meranti, Kec. Rumbai, Kota Pekanbaru, Riau 28261', '0.561892', '101.398216', 'https://i.ibb.co/d5cwyLM/coatshire.png', '2020-01-07 14:50:46', '0000-00-00 00:00:00'),
(9, 'PT. Primanusa Globalindo', 'Jl. Riau Ujung No.349, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', '0.534824', '101.407219', 'https://primanusa.com/wp-content/uploads/2018/11/png-office.jpg', '2020-01-07 14:51:56', '0000-00-00 00:00:00'),
(10, 'PT. Aspindo Kedaton Motor', 'Jalan Riau Ujung No.88 A-E, Tampan, Payung Sekaki, Tampan, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28291', '0.535135', '101.412064', 'https://i.ibb.co/9Gb8yj2/aspirando-kedaton.png', '2020-01-07 14:53:37', '0000-00-00 00:00:00'),
(11, 'PT. Aneka Karya Tangguh', 'Jl. Siak 2 No.18 A-B, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28159', '0.534147', '101.40361', 'https://1.bp.blogspot.com/-Ki9oxWMBzzs/XKMNL7FnyGI/AAAAAAAAEV4/DaPA23emE7MToC444DXI1L69TXyvUa83QCLcBGAs/w1200-h630-p-k-no-nu/PT.%2BANEKA%2BKARYA%2BTANGGUH.JPG', '2020-01-07 14:54:19', '0000-00-00 00:00:00'),
(12, 'Nissan Datsun SM. Amin', 'Jl. SM Amin, Labuh Baru Bar., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', '0.502133', '101.394425', 'http://radarriaunet.com/assets/berita/original/26597341010-foto_1.jpg', '2020-01-07 14:55:54', '0000-00-00 00:00:00'),
(13, 'Indah Kargo', 'Jl. SM Amin, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292', '0.493766', '101.394099', 'https://i.ibb.co/tP4vrdP/indah-kargo.png', '2020-01-07 14:57:48', '0000-00-00 00:00:00'),
(14, 'PT. Rapi Pekanbaru', 'Jl. SM Amin No.16, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292', '0.490471', '101.394547', 'https://i.ibb.co/5vNWF1R/rapi.png', '2020-01-07 15:00:08', '0000-00-00 00:00:00'),
(15, 'PT. ALS', 'Jl. SM Amin, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293', '0.490334', '101.394467', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(16, 'PT. Alinasar', 'Jl. SM Amin, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293', '0.490337', '101.394424', 'https://i.ibb.co/WPqPxVB/PT-Alinasar.jpg', '2020-01-04 18:16:05', '0000-00-00 00:00:00'),
(17, 'PT. Sujati Sinar Sempurna', 'Jl. Siak 2 No.Jalan Siak 2, Palas, Kec. Rumbai, Kota Pekanbaru, Riau 28266', '0.5694548', '101.3970337', 'https://i.ibb.co/3WHtght/PT-Sujati-Sinar-Sempurna.jpg', '2020-01-04 18:13:23', '0000-00-00 00:00:00'),
(18, 'PT. Lutvindo Wijaya Perkasa', 'Jalan Mr. SM. Amin, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292', '0.4887057', '101.3958073', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(19, 'PT. PSS', 'No.96 a-b, Gang Sentosa, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292', '0.4887057', '101.3958073', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(20, 'PT Gunung Mas Raya', 'Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', '0.4879153', '101.3979373', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(21, 'PT. Green Planet Indonesia', 'Jl. Budisari, Umban Sari, Kec. Rumbai, Kota Pekanbaru, Riau 28266', '0.5671843', '101.4281202', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(22, 'PT. Sumberdaya Sewatama', 'Jl. Riau No.147, Kp. Baru, Kec. Senapelan, Kota Pekanbaru, Riau 28155', '0.5351895', '101.4316392', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(23, 'Contromatic Prima Mandiri. PT', 'JL Kulim, Komplek Pelangi Blok B/3, Pekanbaru, 28292, Kampung Baru, Senapelan, Pekanbaru City, Riau 28155', '0.536584', '101.432519', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(24, 'PT. Salim Ivomas Pratama', 'Jalan Riau Ujung, Gg. Wirakarya, Tampan, Air Hitam, Payung Sekaki, Pekanbaru City, Riau 28291', '0.534583', '101.418082', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(25, 'PT. Mitra Motor Semesta', 'Jl. Sekolah No.55, Limbungan Baru, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28266', '0.5601714', '101.4379266', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(26, 'Bina Dinamika Raga. PT', 'l. Diponegoro Komplek Taman Diponegoro Residence No.B-5, Suka Mulia, Kec. Sail, Kota Pekanbaru, Riau', '0.5217545', '101.4521685', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(27, 'PT. Nindya Karya (Persero)', 'L. OK. Jamil, Blok A1 & A2, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau', '0.5820452', '101.4230781', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(28, 'Contromatic Prima Mandiri. PT', 'JL Kulim, Komplek Pelangi Blok B/3, Pekanbaru, 28292, Kampung Baru, Senapelan, Pekanbaru City, Riau', '0.536584', '101.432519', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(29, 'PT Astajaya Nirwighnata', 'Jl. Riau Ujung No.47, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau', '0.5349535', '101.4221549', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(30, 'PT. Konsul Perdana', 'Jl. Setia Budi', '0.5359817', '101.4552809', 'https://i.ibb.co/HG3mWm8/PT-Konsul.jpg', '2020-01-04 18:14:30', '0000-00-00 00:00:00'),
(31, 'PT. Cakra Karimun Sejahtera', 'Jl. Kuantan Regensi', '0.5330234', '101.4684693', 'https://i.ibb.co/DbVynjW/PT-Cakra-Karimun.png', '2020-01-04 18:15:28', '0000-00-00 00:00:00'),
(32, 'PT Pelangi Mandiri Wisata', 'Jl. Setia Budi No. 211', '0.5356974', '101.454039', 'https://i.ibb.co/vLBgRKp/PT-Pelangi.png', '2020-01-04 18:14:12', '0000-00-00 00:00:00'),
(33, 'PT.  Indo Truck Utama', 'Jl. Yos Sudarso, Umban Sari, Kec. Rumbai, Kota Pekanbaru, Riau', '0.5632702', '101.4315353', 'https://i.ibb.co/6s3QkBS/PT-Indotruck.jpg', '2020-01-04 18:14:52', '0000-00-00 00:00:00'),
(34, 'PT . Cahaya Hati Wisata Religi', 'Jl. Jati 3', '0.5025262', '101.4567722', 'https://i.ibb.co/z6w1pqs/PT-Cahaya-Hati.jpg', '2020-01-04 18:15:50', '0000-00-00 00:00:00'),
(35, 'PT. Salim Ivomas Pratama', 'Jalan Riau Ujung, Gg. Wirakarya, Tampan, Air Hitam, Payung Sekaki, Pekanbaru City, Riau 28291', '0.5345833', '101.4180833', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(36, 'PT.Servitama Internusa', 'Simpang Baru, Tampan, Pekanbaru City, Riau 28292', '0.4879153', '101.3979373', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(37, 'PO.Handoyo Pekanbaru Riau', 'Jl. SM Amin, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293', '0.4970435', '101.3962504', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(38, 'PT. VERBERT ALUMINDO PROFIL', 'Jalan Riau Ujung No.199 A-B, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', '0.5362814', '101.4104106', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(39, 'Kimia Unggul Riau Tirta', 'Jl. Arifin Ahmad No.59, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28289', '0.476111', '101.4204123', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(40, 'Centrindo Palmax. PT', 'Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124', '0.4761109', '101.3941474', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(41, 'PT. Riau Abdi Sentosa', 'Jl. Riau Ujung, Tampan, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', '0.5362814', '101.4104106', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(42, 'Kitani PT', 'Gg. Depik No.1b, Tengkerang Tengah, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124', '0.4762824', '101.3941474', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(43, 'PT. Rawlindo Power Solusi', 'Komp. Hokky Garden, Gg. Karya Maju No.77 Kel, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', '0.5358568', '101.4124414', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(44, 'Halim Tirta Lestari PT', 'Jl. Harapan Raya No.312, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', '0.4954568', '101.4908087', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(45, 'PT CSBS', 'JL Sentosa Ujung No.70 RT 34, Kulim, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28282', '0.5052894', '101.4694101', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(46, 'Diamond Cold Storage. PT', 'Jl. Harapan Raya No.282, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', '0.4955856', '101.4880621', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(47, 'Global Dimensi Mandiri. PT', 'JL. Kapau Sari, Perum Kapau Sari Permai Blok A5, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', '0.4804424', '101.496098', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(48, 'PT.Sari Bumi Raya', 'Jl. Naras Raya, Sail, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', '0.5003544', '101.4981204', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(49, 'Puri Green Resources. PT', 'Perkantoran Grand Sudirman, Jl. Datuk Setiamaharaja, Blok-D6, Tengkerang Labuai, Pekanbaru, Kota Pekanbaru, Riau 28125', '0.4744237', '101.474061', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(50, 'PT. Salim Ivomas Pratama', 'Jalan Riau Ujung, Gg. Wirakarya, Tampan, Air Hitam, Payung Sekaki, Pekanbaru City, Riau 28291', '0.5358568', '101.4124414', '', '2019-12-28 11:42:42', '0000-00-00 00:00:00'),
(54, 'PT. Tirta Sumber Mekarsari', 'Sri Meranti, Rumbai, Pekanbaru City, Riau 28265', '0.580588', '101.397533', 'q', '2020-01-07 14:44:11', '2020-01-07 14:43:39'),
(55, 'PT. Gaya Makmur Traktor', 'Jl. Siak 2 No.189, Palas, Kec. Rumbai, Kota Pekanbaru, Riau 28266', '0.566379', '101.397634', 'a', '2020-01-07 14:46:54', '2020-01-07 14:46:54'),
(56, 'Probesco', 'Sri Meranti, Rumbai, Pekanbaru City, Riau 28266', '0.5694', '101.397754', 'aaa', '2020-01-07 14:47:23', '2020-01-07 14:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_industri`
--
ALTER TABLE `tb_industri`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_industri`
--
ALTER TABLE `tb_industri`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
