-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 05:06 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` char(14) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Jody Veum', 'azieme@hotmail.com', '082142938037', '5010 Osinski Orchard\nAnkundingport, AZ 31500-6755', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(2, 'Janie Weimann V', 'polly.stokes@hotmail.com', '08216056400', '22407 Cameron Fords\nWest Alessia, ND 43045', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(3, 'Maynard Sauer', 'myron07@hotmail.com', '08211051333', '287 Everett Mall Suite 336\nPort Eldred, GA 05493', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(4, 'Ms. Lola Becker III', 'asa.wilkinson@hotmail.com', '082185859723', '3843 Jana Neck\nStacyberg, IA 52814-8227', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(5, 'Harold Hodkiewicz', 'avis.harris@hotmail.com', '082182148704', '214 Champlin Extensions\nProhaskaland, NV 20080-0402', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(6, 'Fritz Johnson MD', 'dbrekke@murray.org', '082191898079', '9981 Ondricka Station Suite 019\nBorerland, CA 68153', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(7, 'Arlene Olson', 'hill.whitney@collins.com', '082146259477', '386 Senger Park\nHowellbury, SC 92128', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(8, 'Janick Gottlieb', 'eva28@hotmail.com', '082177060732', '2552 Malika Harbors\nSouth Stephanybury, AZ 74230', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(9, 'Jennifer Paucek DDS', 'jluettgen@west.com', '082111122221', '56239 Helena Alley Suite 218\nEast Kathlyn, MD 56235-8176', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(10, 'Kelton Schmidt Sr.', 'ostracke@hotmail.com', '08214751159', '9741 Corwin Overpass Suite 323\nEast Alainaborough, VA 26117', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(11, 'Brady Hagenes I', 'dsenger@hettinger.com', '082193297638', '1397 Winifred Flat\nJaunitatown, VT 73676', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(12, 'Kirk Toy', 'anastacio.crist@gmail.com', '082129616110', '32829 Daugherty Island\nEmmittland, KY 78732', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(13, 'Marge Corkery', 'dmedhurst@wunsch.com', '082118577430', '226 Haley Overpass\nKeshawnchester, IL 16486-9900', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(14, 'Royal Okuneva', 'hugh.mitchell@yahoo.com', '082193262081', '320 Garnett Shoal Apt. 058\nWest Jordane, KY 71220-3704', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(15, 'Frederic McClure Sr.', 'lroberts@hudson.com', '082113070995', '8374 Kuphal Courts Apt. 908\nBernitahaven, WI 25429', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(16, 'Ms. Duane Dietrich DVM', 'bartell.orville@considine.com', '082142468863', '177 Schmeler Cove\nO\'Keefebury, MO 21655', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(17, 'Victoria Streich', 'hegmann.rene@hotmail.com', '082181187704', '227 Eduardo Coves\nAndreannefort, DE 97802-2392', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(18, 'Dr. Cornell Feil DVM', 'qpowlowski@hotmail.com', '082157634120', '2384 Annamae Bypass Suite 452\nKeshawnport, CO 47169-6995', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(19, 'Dr. Brayan Trantow I', 'hettie.harber@yahoo.com', '082190827436', '6726 Arvilla Estates\nUlicesfort, IN 31213-5367', '2024-02-03 08:24:30', '2024-02-03 08:24:30'),
(20, 'Ms. Susana Tillman', 'chesley18@gmail.com', '082179866587', '847 Conroy Forges Apt. 392\nLake Clemens, WI 05995-0844', '2024-02-03 08:24:30', '2024-02-03 08:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isbn` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `year` int(11) NOT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `catalog_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `year`, `publisher_id`, `author_id`, `catalog_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(3, 533249025, 'Dr. Nicolas Graham', 2021, 5, 16, 10, 18, 12489, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(4, 705806449, 'Arlene Schowalter', 2014, 15, 3, 5, 10, 19862, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(5, 970049776, 'Olga Heaney', 2021, 9, 4, 10, 17, 15481, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(6, 298588482, 'Tre Gislason', 2015, 5, 6, 9, 13, 18665, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(7, 105269777, 'Ciara Renner', 2015, 9, 16, 5, 11, 13548, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(8, 274289568, 'Valentin Homenick', 2017, 10, 16, 11, 14, 12642, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(9, 257505118, 'Mr. Matteo Mohr', 2020, 3, 18, 11, 18, 15253, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(10, 727487897, 'Elna Kessler', 2012, 2, 5, 8, 10, 17194, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(11, 665539461, 'Zack Morissette', 2016, 7, 14, 11, 18, 11404, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(12, 206013130, 'Dr. Idell Schuppe', 2021, 15, 11, 9, 10, 13824, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(13, 999991760, 'Cullen Moore IV', 2021, 15, 19, 9, 11, 17468, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(14, 147934849, 'Dr. Vern Schaden', 2016, 2, 14, 11, 10, 16049, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(15, 578093139, 'Rosa Beahan', 2017, 14, 12, 6, 12, 15646, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(16, 630897713, 'Dovie Kemmer', 2012, 19, 17, 6, 13, 11683, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(17, 815609376, 'Beth Lang PhD', 2020, 17, 6, 9, 13, 10881, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(18, 299528724, 'Dr. Sean Reinger', 2021, 16, 5, 5, 12, 10459, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(19, 490441275, 'Colton Pollich', 2014, 8, 17, 7, 18, 14208, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(20, 348803188, 'Miss Carolanne Quigley MD', 2017, 14, 17, 5, 18, 13201, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(21, 412470070, 'Raphaelle Borer', 2010, 6, 14, 10, 14, 16990, '2024-02-03 09:05:12', '2024-02-03 09:05:12'),
(22, 494408610, 'Clementine Hills', 2020, 14, 3, 6, 11, 12432, '2024-02-03 09:05:12', '2024-02-03 09:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'Education Book', '2024-02-03 08:36:15', '2024-02-03 08:36:15'),
(6, 'Medical Book', '2024-02-03 08:36:15', '2024-02-03 08:36:15'),
(7, 'Cooking Book', '2024-02-03 08:36:15', '2024-02-03 08:36:15'),
(8, 'Technology Book', '2024-02-03 08:36:15', '2024-02-03 08:36:15'),
(9, 'Comic Book', '2024-02-03 08:36:15', '2024-02-03 08:36:15'),
(10, 'Religius Book', '2024-02-03 08:36:15', '2024-02-03 08:36:15'),
(11, 'Children Book', '2024-02-03 08:36:15', '2024-02-03 08:36:15');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `gender` char(1) NOT NULL,
  `phone_number` char(15) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2012_02_02_174006_create_members_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2024_02_02_174435_create_publishers_table', 1),
(6, '2024_02_02_174458_create_authors_table', 1),
(7, '2024_02_02_174516_create_catalogs_table', 1),
(8, '2024_02_02_174535_create_books_table', 1),
(9, '2024_02_02_174655_create_transactions_table', 1),
(10, '2024_02_02_174717_create_transaction_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` char(14) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Darrel Gerlach', 'csporer@rath.biz', '082166171135', '779 Tristian Viaduct Suite 684\nNikolausberg, DC 67426', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(2, 'Adam Hudson', 'sienna93@yahoo.com', '082198953177', '3221 Cielo Manors\nDomenicotown, CA 14225-0119', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(3, 'Verlie Leuschke', 'doyle.leola@gmail.com', '082176633402', '297 Earnest Harbor Suite 046\nWest Consueloport, MO 30314-8361', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(4, 'Georgiana Fisher', 'martine.larkin@hotmail.com', '082196510754', '6196 Welch Court Apt. 589\nWest Hadley, NE 52336-4734', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(5, 'Zechariah Schoen', 'kovacek.linda@yahoo.com', '082180765885', '2995 Daisha Centers\nEast Hunterville, AR 26851-0094', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(6, 'Ms. Thalia Brakus', 'gthompson@mante.info', '082118989021', '391 Iva Locks Apt. 838\nNew Neva, MT 88347-3189', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(7, 'Prof. Alf Muller III', 'hillary.robel@yahoo.com', '082195131231', '47218 Xavier Harbors Apt. 106\nBeertown, SC 75492', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(8, 'Myriam Kunze', 'rachael75@labadie.com', '082121338268', '77283 Maymie Hill\nSouth Cleveland, CO 73121', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(9, 'Dr. Mallie Parisian DVM', 'corkery.alia@mueller.com', '082147709286', '8398 Jamison Coves\nEast Jan, IL 74892-3511', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(10, 'Jade Zieme MD', 'jaydon.weber@gmail.com', '082110410168', '52465 Camille Plains Apt. 359\nAlanbury, NE 52826-5619', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(11, 'Gregg Bednar DDS', 'emuller@yahoo.com', '082191875195', '632 Vaughn Avenue\nDoylefort, WA 68504-2147', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(12, 'Enid Schoen', 'lavonne.dietrich@koelpin.org', '082141667487', '12012 Stehr Centers\nWest Fredland, MN 25633-3773', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(13, 'Dr. Terrance Stiedemann', 'rosalind.zemlak@wiegand.com', '082157911905', '5470 Cronin Groves\nMurlview, PA 32262-6486', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(14, 'Jessie Mann', 'ullrich.josue@gmail.com', '082192261289', '74297 Nicolas Station\nJadeburgh, RI 17571-3373', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(15, 'Mrs. Myrtle Medhurst Jr.', 'efrain22@yahoo.com', '082125764581', '5536 Monahan Square Apt. 883\nWest Demarcusstad, AZ 97140-7138', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(16, 'Lavon Adams', 'ioreilly@yahoo.com', '082114833395', '3952 Effertz Village Apt. 427\nEast Alverta, SC 20669', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(17, 'Ms. Catharine Rau II', 'maritza.medhurst@gmail.com', '082121768012', '649 Audreanne Meadow Suite 816\nSouth Milo, RI 57227-8161', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(18, 'Broderick Schmidt III', 'walker.kaela@hotmail.com', '082171631368', '38471 Bradtke Burgs Apt. 114\nLake Tyshawnchester, PA 55273-1327', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(19, 'Ms. Otha Schuster', 'lucious60@hotmail.com', '082144414472', '193 Glennie Trail Apt. 635\nSouth Robbie, CO 06421-5345', '2024-02-03 08:24:21', '2024-02-03 08:24:21'),
(20, 'Adam Prosacco', 'swill@yahoo.com', '082132703044', '71799 Schmitt Park\nJackieborough, WY 67135', '2024-02-03 08:24:21', '2024-02-03 08:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `data_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
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
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_catalog_id_foreign` (`catalog_id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_member_id_foreign` (`member_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_book_id_foreign` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_member_id_foreign` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `catalogs` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
