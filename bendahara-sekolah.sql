-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 13.13
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bendahara-sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `bulan` date NOT NULL,
  `tahun` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `sumber`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Sumbangan', '2023-03-07', '2023-03-16', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_08_050108_create_siswas_table', 1),
(6, '2023_03_09_074343_create_tingkat2s_table', 1),
(7, '2023_03_09_081437_create_tingkat3s_table', 1),
(8, '2023_03_11_051700_create_pemasukans_table', 1),
(9, '2023_03_13_032115_create_laporans_table', 1),
(10, '2023_03_28_072802_create_rpls_table', 2),
(11, '2023_03_28_134257_create_rpls_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `tanggal`, `nominal`, `sumber`, `created_at`, `updated_at`) VALUES
(1, '2023-03-08', '5.000.000', 'sumbangan', '2023-03-12 23:56:50', '2023-03-12 23:56:50'),
(3, '2023-03-13', '5.000.000', 'sumbangan', '2023-03-15 02:55:02', '2023-03-15 02:55:02'),
(4, '2023-03-07', '1.000.000', 'sumbangan', '2023-03-15 19:37:35', '2023-03-15 19:37:35'),
(5, '2023-03-17', '5.000.000', 'sumbangan', '2023-03-15 21:45:34', '2023-03-15 21:45:34'),
(6, '2023-03-08', '5.000.000', 'sumbangan', '2023-03-22 22:21:06', '2023-03-22 22:21:06'),
(7, '2023-03-23', '3000000', 'sumbangan', '2023-03-29 07:09:33', '2023-03-29 07:09:33'),
(8, '2023-03-16', '5.000000', 'sumbangan', '2023-03-29 17:00:08', '2023-03-29 17:00:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpl`
--

CREATE TABLE `rpl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sumbangan` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `sisa_sumbangan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rpl`
--

INSERT INTO `rpl` (`id`, `tanggal`, `nama`, `sumbangan`, `pembayaran`, `sisa_sumbangan`, `created_at`, `updated_at`) VALUES
(23, '2023-03-08', 'MELIANA SRI RAHAYU', '500', '200', '300', '2023-03-29 07:37:06', '2023-03-29 07:37:06'),
(24, '2023-03-28', 'zahra', '500', '200', '300', '2023-03-29 07:37:15', '2023-03-29 07:37:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `sumbangan` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `sisa_sumbangan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `tanggal`, `nama`, `jurusan`, `sumbangan`, `pembayaran`, `sisa_sumbangan`, `created_at`, `updated_at`) VALUES
(32, '2023-03-30', 'zahra', 'RPL', '2000000', '1500000', '500000', '2023-03-29 06:57:23', '2023-03-29 19:18:46'),
(33, '2023-03-17', 'nenden', 'RPL', '2000000', '300000', '1700000', '2023-03-29 07:01:16', '2023-05-08 03:17:42'),
(40, '2023-03-30', 'zahra', 'RPL', '2000000', '2000000', '0', '2023-05-03 21:03:32', '2023-05-03 21:03:32'),
(41, '2023-03-30', 'zahra', 'RPL', '2000000', '2000000', '0', '2023-05-08 03:06:20', '2023-05-08 03:06:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat2`
--

CREATE TABLE `tingkat2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tunggakan` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `sisa_tunggakan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tingkat2`
--

INSERT INTO `tingkat2` (`id`, `tanggal`, `nama`, `jurusan`, `tunggakan`, `pembayaran`, `sisa_tunggakan`, `created_at`, `updated_at`) VALUES
(1, '2023-03-09', 'wawaaaaa', 'RPL', '2000000', '1000000', '1000000', '2023-03-13 21:11:51', '2023-03-28 22:04:41'),
(8, '2023-03-08', 'fbrgbv', 'RPL', '500', '200', '300', '2023-03-29 05:55:35', '2023-03-29 05:55:35'),
(9, '2023-03-09', 'wawaaaaaa', 'RPL', '2000000', '1000000', '1000000', '2023-03-29 05:57:33', '2023-03-29 05:57:33'),
(10, '2023-03-08', 'wawaaaaaa', 'RPL', '2000000', '1000000', '1000000', '2023-03-29 06:41:57', '2023-03-29 18:33:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat3`
--

CREATE TABLE `tingkat3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tunggakan` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `sisa_tunggakan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tingkat3`
--

INSERT INTO `tingkat3` (`id`, `tanggal`, `nama`, `jurusan`, `tunggakan`, `pembayaran`, `sisa_tunggakan`, `created_at`, `updated_at`) VALUES
(1, '2023-03-15', 'sasa', 'ULW', '500', '200', '300', '2023-03-13 21:29:42', '2023-03-13 21:29:42'),
(2, '2023-03-06', 'silaaa', 'ULW', '500', '500', '300', '2023-03-16 17:40:31', '2023-03-28 20:04:41'),
(3, '2023-03-25', 'juliani', 'RPL', '500', '200', '300', '2023-03-24 20:57:30', '2023-03-24 20:57:30'),
(7, '2023-03-22', 'zahra', 'RPL', '500', '200', '300', '2023-03-29 05:56:50', '2023-03-29 05:56:50'),
(8, '2023-03-17', 'zahraa', 'RPL', '500', '200', '300', '2023-03-29 06:42:32', '2023-03-29 06:42:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$fkqGPui34eK3PrpIfjPwlOLlVt3k4Eybwhe0GSAhe6lKsuPfIw8ze', 'jzhKviV8vLajkBwuYIu3BbCk0cVR8HDzwiH1yQ62nKcYf7WT3Vz2smRTa6r3', '2023-03-13 00:21:35', '2023-03-13 00:21:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rpl`
--
ALTER TABLE `rpl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tingkat2`
--
ALTER TABLE `tingkat2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tingkat3`
--
ALTER TABLE `tingkat3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rpl`
--
ALTER TABLE `rpl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tingkat2`
--
ALTER TABLE `tingkat2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tingkat3`
--
ALTER TABLE `tingkat3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
