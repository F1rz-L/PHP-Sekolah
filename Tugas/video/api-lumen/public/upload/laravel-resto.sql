-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 01:29 PM
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
-- Database: `laravel-resto`
--

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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `idkategori` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`idkategori`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Makanan', '2024-02-28 08:42:20', '2024-02-28 08:42:20'),
(2, 'Minuman', '2024-02-28 08:42:34', '2024-02-28 08:42:34'),
(5, 'Gorengan', '2024-03-02 02:25:34', '2024-03-02 02:25:34'),
(6, 'Jajan', '2024-03-02 02:25:39', '2024-03-02 02:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `idmenu` bigint(20) UNSIGNED NOT NULL,
  `idkategori` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`idmenu`, `idkategori`, `menu`, `gambar`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bakso', 'bakso.jpg', 'Bakso tanpa tepung? ...', 10000.00, NULL, NULL),
(2, 1, 'Soto', 'soto.jpg', 'Soto tanpa kuah? ...', 10000.00, NULL, NULL),
(3, 2, 'Es Teh Anget', 'esteh.jpg', 'Es Teh Manis Anget Tawar', 5000.00, NULL, NULL),
(4, 2, 'Es Jeruk', 'esjeruk.jpg', 'Es Jeruk.', 5000.00, NULL, NULL),
(7, 1, 'AAA', 'AH(Y).jpg', 'ewqe', 2817.00, '2024-03-02 09:12:45', '2024-03-02 19:29:11');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_28_130557_create_pelanggans_table', 2),
(6, '2024_02_28_130628_create_orders_table', 2),
(7, '2024_02_28_130644_create_order_details_table', 2),
(8, '2024_02_28_130700_create_menus_table', 2),
(9, '2024_02_28_130706_create_kategoris_table', 2),
(10, '2024_03_01_084523_add_level_to_users', 3),
(11, '2024_03_01_084547_add_status_to_orders', 3),
(12, '2024_03_01_084628_add_active_to_pelanggans', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idorder` varchar(255) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tglorder` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `bayar` double(8,2) NOT NULL,
  `kembali` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idorder`, `idpelanggan`, `tglorder`, `total`, `bayar`, `kembali`, `created_at`, `updated_at`, `status`) VALUES
('20240301080321', 2, '2024-03-01', 20000.00, 30000.00, 10000.00, '2024-03-01 01:41:21', '2024-03-02 21:34:31', 1),
('20240303020312', 2, '2024-03-03', 40000.00, 0.00, 0.00, '2024-03-02 19:55:12', '2024-03-02 19:55:12', 0),
('20240303020352', 2, '2024-03-03', 50000.00, 0.00, 0.00, '2024-03-02 19:59:52', '2024-03-02 19:59:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `idorderdetail` int(10) UNSIGNED NOT NULL,
  `idorder` varchar(255) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargajual` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`idorderdetail`, `idorder`, `idmenu`, `jumlah`, `hargajual`, `created_at`, `updated_at`) VALUES
(3, '20240301080321', 3, 4, 5000.00, '2024-03-01 01:41:21', '2024-03-01 01:41:21'),
(4, '20240303020312', 1, 1, 10000.00, '2024-03-02 19:55:12', '2024-03-02 19:55:12'),
(5, '20240303020312', 2, 3, 10000.00, '2024-03-02 19:55:12', '2024-03-02 19:55:12'),
(6, '20240303020352', 3, 10, 5000.00, '2024-03-02 19:59:52', '2024-03-02 19:59:52');

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
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `idpelanggan` int(10) UNSIGNED NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `jeniskelamin` enum('P','L') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`idpelanggan`, `pelanggan`, `jeniskelamin`, `alamat`, `telp`, `email`, `password`, `created_at`, `updated_at`, `aktif`) VALUES
(1, 'Indita', 'P', 'Barungu', '8000000', 'inditanusaputri2817@gmail.com', '$2y$12$TzCS9H.l0PG5.N50fAIlJuBxWPW4ykBvWpuUBjpYkZsqU/tnFltcK', '2024-02-29 04:54:39', '2024-02-29 04:54:39', 1),
(2, 'Syamfiraas', 'L', 'Bangah', '085157712463', 'syamfiraas48@gmail.com', '$2y$12$YPS4gcytC5YsSbJPFPZ0rOjoYnyXVWKmsRGPlnQ1ydr6WRsP8wAdu', '2024-02-29 05:41:23', '2024-02-29 05:41:23', 1),
(17, 'Ani', 'P', 'dsad', '23113', '08e@anjay.com', '$2y$12$K8rvS/xOaABdI5QDoCbVqOMXX3KkDvr0u/2L5Jf0WObTR/IkQVCe2', '2024-02-29 05:09:22', '2024-03-03 01:26:23', 0),
(20, 'Anjay', 'P', 'Sid', '21312', '0813456abcde@anjay.com', '$2y$12$OXe6bMvWSWf8GZcsRIYcTeYq8rPE7nrnK35Dr4byncf5gs3bzGX5S', '2024-02-29 05:43:12', '2024-03-03 01:26:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$ADJYCh.EcjSh78uPbWIhoO5ZNuhbJfFRziPiZIdyS6K9d9ba9Q4y.', NULL, '2024-03-01 02:03:42', '2024-03-01 02:03:42', 'admin'),
(2, 'kasir', 'kasir@gmail.com', NULL, '$2y$12$aAJtyUNGBmV8yNP8tpgHbuhIcUAnyuNEbFqrggmJCCI3mjLgssTCq', NULL, '2024-03-01 02:03:42', '2024-03-01 02:03:42', 'kasir'),
(3, 'manager', 'manager@gmail.com', NULL, '$2y$12$m9./y1dZyVEbe0NqzBmOfejcw/ag/LdCL6zVAsZADYSpGu5AzS0hK', NULL, '2024-03-01 02:03:42', '2024-03-01 02:03:42', 'manager'),
(4, 'Firz', 'syamfiraas48@gmail.com', NULL, '$2y$12$OLujps6u60R6zztzC6PA6uKrTVzqJGnoKJgEHAA8FZSCave4bgK7O', NULL, '2024-03-03 01:49:02', '2024-03-03 01:49:02', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idorder`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`idorderdetail`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `idkategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `idmenu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `idorderdetail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `idpelanggan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
