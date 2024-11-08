-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 05:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_11_05_131558_create_products_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `description`, `price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(1, 'URD-9145', 'upatedet qui aut', 'update Sunt recusandae doloribus quos libero', 11.00, 11, 'products/z4HwkIYWqVUWDAsKaz9kwiViyzLDwmbEDvGhDIrV.jpg', '2024-11-05 07:41:23', '2024-11-08 09:54:14'),
(3, 'PRD-4364', 'est possimus eligendi', 'Qui cupiditate inventore asperiores.', 235.87, 63, 'https://via.placeholder.com/640x480.png/00dd77?text=products+dolorum', '2024-11-05 07:41:23', '2024-11-05 07:41:23'),
(4, 'PRD-9076', 'consequatur ipsam sit', 'Error repellat enim commodi occaecati maiores.', 484.00, 87, 'https://via.placeholder.com/640x480.png/00ff33?text=products+quas', '2024-11-05 07:41:23', '2024-11-08 09:52:31'),
(5, 'PRD-7773', 'ipsam et vel', 'Est impedit velit harum explicabo quia tenetur.', 198.63, 70, 'https://via.placeholder.com/640x480.png/00ccee?text=products+recusandae', '2024-11-05 07:41:23', '2024-11-08 09:51:15'),
(7, 'PRD-2353', 'mollitia quam quis', 'Dolor dolores iure et magnam quia qui.', 454.97, 94, 'https://via.placeholder.com/640x480.png/0066dd?text=products+molestiae', '2024-11-05 07:41:23', '2024-11-05 07:41:23'),
(8, 'PRD-4423', 'neque sed distinctio', 'Harum at veritatis aperiam iste.', 74.65, 65, 'https://via.placeholder.com/640x480.png/00ccee?text=products+non', '2024-11-05 07:41:23', '2024-11-05 07:41:23'),
(9, 'PRD-4150', 'ut doloremque voluptatem', 'Placeat rem quod aut voluptas qui quia.', 472.02, 10, 'https://via.placeholder.com/640x480.png/00bbcc?text=products+magni', '2024-11-05 07:41:23', '2024-11-05 07:41:23'),
(10, 'PRD-5684', 'culpa eaque doloribus', 'Modi et rerum in ut.', 127.86, 42, 'https://via.placeholder.com/640x480.png/0044ff?text=products+non', '2024-11-05 07:41:23', '2024-11-05 07:41:23'),
(13, 'PRO-159', 'New Product', NULL, 51.00, 51, 'products/4E6JVlSBbQeXJ2mDJdQsYhNcElymoPGIsboZ90Ba.jpg', '2024-11-07 08:38:04', '2024-11-07 08:44:44'),
(14, 'PRO-150', 'New Product New', 'New Product New New Product New New Product New New Product New New Product New New Product New', 15.00, 1, 'products/UXZxLmw0zJlPTFkkW4pXWVtwBXzZ3zOENlEEcRGF.jpg', '2024-11-07 08:55:00', '2024-11-07 08:55:00'),
(15, 'PRO-140', 'New Product', 'New Product	New Product	New Product	New Product', 15.00, 15, 'products/k66SvXDktPNeA3l36N96QMeLnqe1el74o2kapzGy.jpg', '2024-11-07 09:00:15', '2024-11-07 09:00:15'),
(16, 'Byc-410', 'Bicycle', 'Bicycle Bicycle Bicycle Bicycle', 0.00, 0, 'products/DKLDCAHpKE0uGHWJISTuUWpFQDeMrTreW1l5Ssaz.jpg', '2024-11-08 08:44:58', '2024-11-08 08:44:58'),
(17, 'Byc-411', 'Bicycle', 'Bicycle Bicycle Bicycle Bicycle', 12.00, 12, 'products/MfBzjdRcLucu9j0u6eY0KhKoekOePd5Ahc9yRG3K.jpg', '2024-11-08 09:24:47', '2024-11-08 09:24:47'),
(18, 'MOTO-24P', 'Moto G24 Power', 'Motorola Moto G24 Power Price in Bangladesh', 15000.00, 10, 'products/TgealttjKIerOAEfD0LjN5WVeIGUb7qgzGL7EAo8.jpg', '2024-11-08 09:28:20', '2024-11-08 09:28:20'),
(19, 'PEN-128', 'Pen Drive', 'Pen Drive Pen Drive Pen Drive Pen Drive', 599.00, 50, 'products/cc2kba74Z9Qh8HP6j6QJwLJBEYmR3pB55AM5zlLu.jpg', '2024-11-08 09:36:22', '2024-11-08 10:13:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_id_unique` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
