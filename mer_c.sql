-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2025 pada 23.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mer_c`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `category_article_id` bigint(20) UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `views` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `image`, `short_description`, `content`, `author`, `category_article_id`, `published_at`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Tips & Trik Merawat Mercedes-Benz Boxer agar Tetap Prima', 'tips-trik-merawat-mercedes-benz-boxer-agar-tetap-prima', 'articles/01K4ES3G1TJ0RS6GAET80SR7YC.webp', 'Mercedes-Benz Boxer dikenal sebagai salah satu varian legendaris yang mengusung kenyamanan dan daya tahan khas mobil Jerman', '<p>Mercedes-Benz Boxer dikenal sebagai salah satu varian legendaris yang mengusung kenyamanan dan daya tahan khas mobil Jerman. Meski usianya kini sudah tidak muda lagi, banyak penggemar yang tetap setia merawatnya karena nilai historis dan performa yang masih bisa diandalkan. Agar Mercedes-Benz Boxer Anda tetap prima di jalanan, berikut beberapa tips dan trik yang bisa dilakukan:</p><h3>1. <strong>Perhatikan Oli Mesin dan Transmisi</strong></h3><p>Oli adalah darah bagi mesin. Gantilah oli mesin dan oli transmisi secara rutin sesuai jadwal. Gunakan oli berkualitas dengan spesifikasi yang direkomendasikan untuk mobil klasik Mercedes-Benz. Jangan lupa untuk selalu memeriksa kondisi filter oli.</p><h3>2. <strong>Rawat Sistem Pendingin</strong></h3><p>Mesin Boxer cenderung bekerja dengan suhu yang stabil, namun radiator dan sistem pendingin tetap wajib diperhatikan. Pastikan air radiator menggunakan coolant, bukan air biasa, dan lakukan pengecekan selang serta thermostat agar tidak ada kebocoran.</p><h3>3. <strong>Suspensi dan Kaki-Kaki</strong></h3><p>Kenyamanan Mercedes-Benz Boxer sangat bergantung pada suspensinya. Periksa kondisi bushing, ball joint, dan shockbreaker. Jika ada bunyi \"gluduk\" atau rasa tidak stabil saat berkendara, segera lakukan pengecekan.</p><h3>4. <strong>Listrik dan Kelistrikan</strong></h3><p>Komponen listrik sering kali menjadi tantangan di mobil klasik. Pastikan alternator, aki, dan sistem pengapian bekerja dengan baik. Bersihkan konektor dari karat dan lakukan pengecekan rutin pada sekring.</p><h3>5. <strong>Gunakan Suku Cadang Orisinil atau OEM</strong></h3><p>Meskipun banyak suku cadang aftermarket beredar, sebaiknya gunakan suku cadang orisinil atau OEM untuk menjaga performa dan keaslian mobil. Hal ini juga menjaga nilai koleksi dari Mercedes-Benz Boxer Anda.</p><h3>6. <strong>Perawatan Interior dan Eksterior</strong></h3><p>Selain mesin, tampilan juga penting. Gunakan wax atau coating untuk menjaga cat tetap mengilap. Untuk interior, rawat jok kulit dengan leather conditioner agar tidak pecah-pecah dan tetap nyaman digunakan.</p><h3>7. <strong>Rutin Dipanaskan dan Dijalankan</strong></h3><p>Mobil klasik seperti Boxer sebaiknya tidak hanya disimpan di garasi. Panaskan mesin secara rutin, dan ajak sesekali berjalan di jalanan agar semua komponen bergerak normal serta mencegah kerusakan akibat diam terlalu lama.</p><h2>Kesimpulan</h2><p>Mercedes-Benz Boxer adalah kendaraan klasik yang penuh nilai sejarah dan kenyamanan berkendara. Dengan perawatan rutin dan pemakaian yang tepat, mobil ini akan tetap tangguh dan layak jalan meski usianya bertambah. Bagi para pecinta Mercedes-Benz, merawat Boxer bukan sekadar menjaga kendaraan, tetapi juga melestarikan warisan otomotif Jerman yang melegenda. 🚘✨</p>', 'admin', 1, '2025-09-05 17:00:00', 1, '2025-09-05 22:48:35', '2025-09-05 23:37:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('mbci-chapter-bandung-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:1;', 1757137732),
('mbci-chapter-bandung-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1757137732;', 1757137732),
('mbci-chapter-bandung-cache-livewire-rate-limiter:056fc329aaaa757d31db450f525da23fde4d1b36', 'i:1;', 1757136640),
('mbci-chapter-bandung-cache-livewire-rate-limiter:056fc329aaaa757d31db450f525da23fde4d1b36:timer', 'i:1757136640;', 1757136640),
('mbci-chapter-bandung-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1757136762),
('mbci-chapter-bandung-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1757136762;', 1757136762);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_articles`
--

CREATE TABLE `category_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_articles`
--

INSERT INTO `category_articles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tips & Trick', 'tips-trick', '2025-09-05 22:43:29', '2025-09-05 22:43:29');

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
-- Struktur dari tabel `jobs`
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
-- Struktur dari tabel `job_batches`
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_06_045012_create_category_articles_table', 2),
(5, '2025_09_06_045119_create_articles_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('nSip05vmwOYxWpIuzHWXwTk4sjeY7pKsgkaBBwZL', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMkhyUlFyWXp0dklGaW5mSVk4VDlkZFJIeGtDZ21EZ3VFbzhvN3NrMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nL3RpcHMtdHJpay1tZXJhd2F0LW1lcmNlZGVzLWJlbnotYm94ZXItYWdhci10ZXRhcC1wcmltYT9xPXRpcHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkLlFMc24zTFZGT04zMC8wSFJZSmRyZVFGWDJYZnhBNUlucVV5Z0oyNDJwWllyaDN6UXlXbVMiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fXM6MTY6InZpZXdlZF9hcnRpY2xlXzEiO086MjU6IklsbHVtaW5hdGVcU3VwcG9ydFxDYXJib24iOjM6e3M6NDoiZGF0ZSI7czoyNjoiMjAyNS0wOS0wNiAwNjozNzo0Ni40ODI5NzMiO3M6MTM6InRpbWV6b25lX3R5cGUiO2k6MztzOjg6InRpbWV6b25lIjtzOjM6IlVUQyI7fX0=', 1757141253),
('Z42Od8xDkTNHUy5CowRnl4xdUbLPkuLdGOXN7gZQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieFVRVTFDam5XZWNNaUNRNU5oc3BDVEg3REUxZmpSbWt1b3NZUTl0TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fX0=', 1757135356);

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
(1, 'Admin', 'admin@example.com', NULL, '$2y$12$qau.Bw2gjja8N1bUMAPK2upnT/wjlt2MfSlqxCUQBNnMsGm7PVrPG', NULL, '2025-09-05 22:02:53', '2025-09-05 22:02:53'),
(2, 'Admin', 'admin@w124mbcibandungchapter.com', NULL, '$2y$12$.QLsn3LVFON30/0HRYJdreQFX2XfxA5InqUygJ242pZYrh3zQyWmS', NULL, '2025-09-05 22:06:02', '2025-09-05 22:06:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_category_article_id_foreign` (`category_article_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_articles_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_article_id_foreign` FOREIGN KEY (`category_article_id`) REFERENCES `category_articles` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
