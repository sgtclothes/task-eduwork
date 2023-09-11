-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Sep 2023 pada 09.15
-- Versi server: 5.7.33
-- Versi PHP: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduwork_laravue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Prof. gusta', 'fdurgan@yahoo.com', '082198857', '901 Garnet Mission Suite 336South Elna, MI 64515', '2023-08-11 17:35:34', '2023-08-25 22:56:22'),
(4, 'Ibrahim Kemmer', 'tristian53@baumbach.com', '082182646715', '937 Kiley Roads\nEast Orlofort, MN 20656-8834', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(5, 'Theresa Stanton', 'kertzmann.kylee@hotmail.com', '082192093417', '5616 Marcelina Underpass Apt. 212\nBabyland, ID 75583-3505', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(6, 'Janelle Beahan IV', 'viola95@conroy.net', '082145475973', '522 Ulices Cove Apt. 252\nEdenton, AK 02114', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(7, 'Monte Little V', 'blick.ezra@dicki.com', '082113137055', '5111 Kiera Lane\nO\'Connermouth, SD 52588-8709', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(8, 'Mr. Holden Kilback I', 'macejkovic.aurelia@hotmail.com', '082135944672', '66406 Stokes Summit Suite 050\nFeesthaven, DC 37751', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(9, 'Kayli Feeney', 'erdman.maymie@gmail.com', '082184688456', '22955 Yasmin Locks Apt. 747\nNorth Daytonfurt, RI 19354', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(10, 'Elisabeth Corwin', 'ebeer@yahoo.com', '082180057332', '9805 Franco Creek Apt. 318\nHavenfurt, NC 67234', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(11, 'Jettie Streich', 'anderson.julien@yahoo.com', '082142385887', '22418 Jany Square\nKovacekchester, AL 33445', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(12, 'Veronica Waelchi', 'era.boyer@yahoo.com', '08212823048', '5075 Hagenes Alley\nKossville, AZ 60343', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(13, 'Ms. Jenifer Keeling', 'qgleason@hotmail.com', '082155756008', '76766 Gleason Dam\nMullertown, OK 85435-8077', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(14, 'Prof. Kian Hoeger', 'filomena79@hirthe.com', '082146439791', '5983 Hegmann Key Suite 952\nNorth Saigefort, MI 83116', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(15, 'Freddy Grady', 'carolanne98@parker.info', '082133047542', '8336 Malika River Apt. 561\nEast Nadia, NH 64403-7593', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(16, 'Dario Rau', 'ryan.karlie@gmail.com', '082176317119', '493 Alphonso Coves Suite 858\nNew Nickolasland, NH 53038-8852', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(17, 'Prof. Hallie Rolfson I', 'paucek.olaf@yahoo.com', '082126591207', '329 Josiane Throughway Apt. 598\nNorth Arlo, WA 13885', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(18, 'Sydni Nader', 'doyle.eleonore@kreiger.com', '08217027945', '820 Adams Well\nWest Dawnside, CT 44865-4247', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(19, 'Madisyn Schuppe', 'allene.bernhard@yahoo.com', '08216181462', '4071 Watsica Pass\nLake Austinbury, NY 02150-4853', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(20, 'Karen Douglas', 'verona67@hotmail.com', '082121427325', '110 Conn Lodge\nReillystad, VA 78745-2324', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(21, 'Dr. Hayden Conroy V', 'melyna18@koss.biz', '082142015510', '80758 Mariah Vista\nEast Keenanville, ID 17843', '2023-08-11 17:35:34', '2023-08-11 17:35:34'),
(22, 'Prof. Emmett McGlynn IV', 'grice@okon.com', '082182710897', '5919 Schaden Mill\nPort Benjaminland, WI 05331', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(23, 'Victoria Heaney II', 'bette50@yahoo.com', '082116230235', '360 Williamson Loop Apt. 247\nEast Florence, NH 71069-4275', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(24, 'Mr. Jeff Davis PhD', 'daniel.jamaal@hotmail.com', '082165390013', '467 Celestino Parkways\nCassinmouth, GA 05420', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(25, 'Shanelle Koss', 'lleuschke@dietrich.com', '08215493221', '9671 Colt Walk Apt. 756\nEast Violet, AL 96172', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(26, 'Maeve Trantow', 'eokuneva@rowe.com', '082127511839', '2077 Velva Field\nWilfredside, OK 26886', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(27, 'Shyanne Hegmann', 'osauer@hotmail.com', '082137672089', '298 Wuckert Center Suite 657\nKuhnton, NH 99506-8611', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(28, 'Eino Ryan', 'qcartwright@yahoo.com', '08217880057', '2795 Jaskolski Corners Suite 566\nGleichnerport, DC 93019-4547', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(29, 'Nickolas Feeney', 'joanne.langworth@gmail.com', '082195609017', '69432 Yolanda Throughway Apt. 106\nChanellebury, WA 99400', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(30, 'Blanca Kreiger', 'jacobi.merritt@gmail.com', '082155441167', '5978 Champlin Gardens Apt. 147\nNorth Brandon, FL 68553-0499', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(31, 'Dr. Dejuan Kirlin II', 'crona.mabelle@boyle.org', '08211127452', '16091 Carolanne Park Suite 157\nKlockoport, RI 51542-9020', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(32, 'Mr. Madison Gibson', 'gilda45@gmail.com', '082158274477', '696 Gabriella Alley Suite 765\nEdythbury, GA 31962-6578', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(33, 'Orion Rodriguez', 'leilani13@mante.info', '082117486418', '8220 Eddie Springs Suite 344\nNew Nickolasborough, NY 03935-9696', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(34, 'Watson Conroy', 'bauch.samanta@treutel.com', '082154152958', '506 Fay Lock Apt. 034\nShaniyabury, CT 44672', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(35, 'Lila Muller', 'thalia82@dach.com', '082163394546', '6634 Wisozk Bridge\nNew Kurtis, IN 34582', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(36, 'Dr. Alec Rowe II', 'walsh.kelli@hotmail.com', '082135987449', '251 Gleason Run\nKlockofurt, RI 01274', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(37, 'Ms. Rafaela Beer', 'ehermiston@collier.org', '082110741214', '503 Melvina Prairie\nLake Brandynbury, DC 65579-2300', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(38, 'Mrs. Lura Little', 'mortimer.reinger@grady.com', '082166831256', '786 Hamill Stream\nRunolfsdottirhaven, WY 63545-9373', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(39, 'Elsa Volkman', 'tabitha.paucek@daniel.net', '082112716976', '83812 Leffler Village\nNorth Itzelburgh, NV 91688-0493', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(40, 'Prof. Bernhard Dibbert', 'medhurst.harold@mclaughlin.net', '082145097850', '55907 Thelma Village Apt. 039\nGildahaven, UT 65598-8112', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(41, 'Kamryn Oberbrunner', 'rowan27@goyette.com', '082118060266', '69269 Huel Mount Apt. 249\nEmilhaven, MO 23219-3959', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(42, 'Sophia Cassin', 'graham.orie@hotmail.com', '082197255100', '3202 Mortimer Garden\nBettyland, MT 08907-8346', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(45, 'wes', 'wes@gmai.com', '21312', 'Tulungagung,bandung', '2023-08-22 17:59:09', '2023-08-22 17:59:09'),
(46, 'asd', 'asd@saf', '234124', 'Tulungagung,bandung', '2023-08-22 18:34:54', '2023-08-22 18:34:54'),
(47, 'moth', 'moth@gmail.com', '2314122', 'Tulungagung,bandung', '2023-08-22 19:00:33', '2023-08-22 19:00:33'),
(48, 'leo', 'leo@gmail.com', '412414', 'Tulungagung,bandung', '2023-08-22 19:05:03', '2023-08-22 19:05:03'),
(49, 'qwe', 'qwe@qf', '123412412', 'Tulungagung,bandung', '2023-08-22 19:05:47', '2023-08-22 19:05:47'),
(50, 'hello', 'hello@mail.com', '14124', 'Tulungagung,bandung', '2023-08-22 19:06:12', '2023-08-22 19:06:12'),
(51, 'clear', 'clear@gmail.com', '12312421', 'Tulungagung,bandung', '2023-08-22 19:12:17', '2023-08-22 19:12:17'),
(52, 'lock1', 'lock@mail.com', '213124', 'Tulungagung,bandung', '2023-08-22 21:20:09', '2023-08-22 21:20:49'),
(53, 'lock', 'lock@mail.com', '213124', 'Tulungagung,bandung', '2023-08-22 21:20:13', '2023-08-22 21:20:13'),
(54, 'we', 'we@mail.co', '213', 'teaf', '2023-08-23 02:12:39', '2023-08-23 02:12:39'),
(55, 'wira1', 'sdafa@fa', '1241241', 'Tulungagung', '2023-08-23 02:13:38', '2023-08-23 02:13:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isbn` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `publisher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `catalog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `year`, `publisher_id`, `author_id`, `catalog_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(23, 274188905, 'Alexane Gislason', 2022, 20, 7, 5, 15, 17458, '2023-08-27 00:18:12', '2023-08-27 00:18:12'),
(24, 29016264, 'Abel Konopelski', 2022, 16, 15, 4, 18, 18849, '2023-08-27 00:18:12', '2023-08-27 00:18:12'),
(25, 282785804, 'Alejandrin Berge', 2023, 14, 3, 4, 14, 17717, '2023-08-27 00:18:12', '2023-08-27 00:18:12'),
(26, 858180090, 'Alyce Pfeffer DDS', 2023, 13, 16, 5, 18, 11607, '2023-08-27 00:18:12', '2023-08-27 00:18:12'),
(28, 464014822, 'Alisha Schuppe', 2022, 14, 3, 2, 19, 19886, '2023-08-27 00:21:14', '2023-08-27 00:21:14'),
(29, 393063213, 'Alisha Stark', 2023, 10, 20, 1, 16, 17705, '2023-08-27 00:21:14', '2023-08-27 00:21:14'),
(30, 723979148, 'Trever Weissnat', 2022, 9, 20, 3, 15, 19283, '2023-08-27 00:21:14', '2023-08-27 00:21:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Adult book', '2023-08-11 17:51:49', '2023-08-19 16:56:42'),
(2, 'Child book', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(3, 'Study book', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(4, 'religion book', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(5, 'health book', '2023-08-11 17:51:49', '2023-08-11 17:51:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `name`, `gender`, `phone_number`, `address`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Mr. Deonte Torp DVM', 'P', '082188429659', '3828 Connor Neck Apt. 767\nKshlerinmouth, MS 04003', 'dschneider@hammes.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(3, 'Barton Greenfelder', 'P', '082125967935', '3201 Green Track Suite 934\nNew Alf, KY 96566-9742', 'ned76@yost.info', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(4, 'Watson Goodwin', 'L', '08217174601', '707 Price Station\nPort Shaniya, OK 57046-9035', 'pearlie73@gmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(5, 'Dr. Giovanna Kohler', 'L', '082171374921', '9387 Feeney Causeway Apt. 130\nBlicktown, WV 00325-2383', 'mitchell.buckridge@gmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(6, 'Hipolito Sawayn', 'L', '082139733852', '9038 Bradly Circle Apt. 968\nWest Jasmin, NM 98606-4959', 'oankunding@gmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(7, 'Devon Johns V', 'L', '082170724984', '757 Lakin Turnpike\nWest Hank, AZ 92645', 'bleffler@lubowitz.org', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(8, 'Rocky Russel', 'L', '082161167136', '6815 Hayes Place\nKuhicborough, AR 86304-1922', 'vhuel@keeling.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(9, 'Miss Genesis Dickens', 'P', '082140807651', '184 Keagan Islands Apt. 757\nNorth Cademouth, NJ 23980', 'zsmith@hickle.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(11, 'Ms. Delphia Kuphal V', 'P', '082193946343', '8985 Berge Trafficway\nNew Haileetown, IN 67882-0975', 'blick.marc@gmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(12, 'Mya Cronin IV', 'P', '082168554539', '68953 Dietrich Hills Apt. 175\nNew Adeline, RI 51355-6050', 'lola27@hotmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(13, 'Margot Franecki', 'P', '08211109378', '12376 Abbigail Knolls\nDarenton, TN 85832', 'gbeahan@gmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(14, 'Mrs. Marian Gerhold', 'L', '082199644666', '459 Kamryn Loaf\nNataliemouth, CT 92063-3486', 'wisoky.theresa@lesch.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(15, 'Danielle Hilpert', 'P', '082187396860', '57381 Grimes Summit\nGoyettestad, IA 70830-5337', 'runolfsdottir.odell@yahoo.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(16, 'Cierra Muller III', 'L', '082189748928', '2656 Nathan Springs\nLolitaburgh, WA 99428-1390', 'sallie70@hotmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(17, 'Oren Nader DVM', 'P', '082141157795', '1725 Lenore Island\nWest Rico, VA 53445', 'jovani72@stark.org', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(18, 'Heaven Dickinson IV', 'L', '082161933684', '1770 Stark Brooks Apt. 692\nSouth Mozellside, NY 76773-9343', 'xryan@koelpin.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(19, 'Lila Gleichner', 'P', '082179290414', '3779 Hoyt Corner Suite 507\nLake Grayce, GA 80593', 'ikassulke@gmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(20, 'Rebeka Prohaska', 'L', '082174420179', '6847 Jones Mountain\nSpencertown, MA 18699-1608', 'xavier63@gmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08'),
(21, 'Rene Turner', 'L', '082157726871', '977 Reichert Crescent\nWest Ryanland, VA 62928', 'yhodkiewicz@hotmail.com', '2023-08-11 18:09:08', '2023-08-11 18:09:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2013_08_11_234014_create_members_table', 1),
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2023_08_11_234002_create_publishers_table', 1),
(38, '2023_08_11_234003_create_authors_table', 1),
(39, '2023_08_11_234004_create_catalogs_table', 1),
(40, '2023_08_11_234011_create_books_table', 1),
(41, '2023_08_11_234012_create_transactions_table', 1),
(42, '2023_08_11_234013_create_transaction_details_table', 1),
(44, '2023_09_04_034852_add_statusto_transaction', 2),
(46, '2023_09_08_035328_add_qty_to_transaction_detail', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Ralph Lang1', 'gerlach.presley@walsh.org', '085195985204', '357 Renner LodgeGavinville, IN 43101-5242', '2023-08-11 17:51:49', '2023-08-23 02:23:17'),
(2, 'Mr. Lucio Murazik', 'zemlak.imani@hotmail.com', '085131618530', '547 Kovacek Turnpike\nSouth Rusty, CO 96812', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(3, 'Prof. Priscilla Schmeler III', 'clint.osinski@yahoo.com', '085167323758', '400 Sabina Lakes Suite 080\nTalonmouth, CA 53969-1927', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(4, 'Miss Tess Schimmel', 'grover.doyle@schmeler.com', '085186530081', '53776 Sanford Lake Apt. 315\nEast Jamaal, IA 71735', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(5, 'Miss Meagan Dooley', 'mohr.gaylord@gmail.com', '085166108226', '57564 Beatty Tunnel Apt. 953\nLarsonberg, AK 84357-9033', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(6, 'Genoveva Legros', 'ellie.rutherford@hotmail.com', '085181437592', '84802 Adrienne Fords Suite 743\nJoaquinhaven, CT 91522-6150', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(7, 'Arianna Strosin', 'fcorkery@lockman.org', '08516897151', '4188 Ortiz Pines\nMaggioport, AZ 72076-1680', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(8, 'Ms. Nyasia Homenick I', 'roslyn.beer@yahoo.com', '085183814870', '96411 Selina View Apt. 338\nStarkborough, IL 90020', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(9, 'Maxine Grady', 'kabbott@yahoo.com', '085168672662', '3598 Bernardo Place Suite 359\nSebastianhaven, VA 25314', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(10, 'Toney Franecki', 'bbogan@botsford.com', '085156387957', '7197 Mills Vista Apt. 228\nWest Chelseyhaven, PA 88574-2876', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(11, 'Mr. Daron Prohaska III', 'kuhic.donnie@turner.net', '08513973376', '3145 Glover Crescent\nMarqueston, FL 10044', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(12, 'Miss Abbigail Bauch', 'shawn.hagenes@yahoo.com', '085198253630', '7284 Renee Mews\nSouth Jayne, AL 25928-0866', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(13, 'Cassidy Rowe', 'hayley30@schuppe.com', '085143276497', '248 Ziemann Dam\nEast Abbeytown, ND 65758-5287', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(14, 'Chaz Stehr', 'cswift@hotmail.com', '085115484287', '33178 Wisoky Drive Apt. 057\nDickensmouth, LA 55605-3178', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(15, 'Damon Heaney', 'ritchie.mylene@gmail.com', '085144234530', '29701 Riley Freeway\nDaynaland, ID 24438', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(16, 'Bill Prosacco', 'andres.torp@hotmail.com', '085122108258', '9328 Sim Via\nEast Gladyce, NE 41274-2768', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(17, 'Mr. Alf Streich V', 'enid23@yahoo.com', '085113455165', '21017 Catherine Pass\nPaucekburgh, MA 92789', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(18, 'Eli Kihn', 'theresia.bartell@nader.com', '085132066499', '430 Florence Terrace\nNew Jenniferville, GA 56943-4534', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(19, 'Hailie Wolff', 'moore.hailie@kirlin.com', '085169698413', '822 Paul Plains\nQuinnmouth, WI 24179-4284', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(20, 'Carlie Bernhard', 'leo.gutmann@gmail.com', '085189319791', '45833 Walter Run\nNorth Jailyn, CO 96054', '2023-08-11 17:51:49', '2023-08-11 17:51:49'),
(21, 'wiratama', 'wira@gmail.com', '123214', 'Tulungagung,bandung', '2023-08-23 00:17:10', '2023-08-23 00:17:10'),
(22, 'wiratama', '12@asf', '123214', 'Tulungagung,bandung', '2023-08-23 00:19:21', '2023-08-23 00:19:21'),
(23, 'tes1', 'sad@fas', '213', '123', '2023-08-23 02:23:39', '2023-08-23 02:23:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `member_id`, `status`, `date_start`, `date_end`, `created_at`, `updated_at`) VALUES
(28, 12, 1, '2023-09-08', '2023-09-15', '2023-09-08 05:05:01', '2023-09-10 02:56:59'),
(29, 7, 1, '2023-09-09', '2023-09-16', '2023-09-08 17:10:29', '2023-09-09 21:16:17'),
(30, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:37:45', '2023-09-11 00:37:45'),
(31, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:46:30', '2023-09-11 00:46:30'),
(32, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:47:12', '2023-09-11 00:47:12'),
(33, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:48:26', '2023-09-11 00:48:26'),
(34, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:53:10', '2023-09-11 00:53:10'),
(35, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:54:42', '2023-09-11 00:54:42'),
(36, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:54:49', '2023-09-11 00:54:49'),
(37, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:55:00', '2023-09-11 00:55:00'),
(38, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:55:10', '2023-09-11 00:55:10'),
(39, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:55:21', '2023-09-11 00:55:21'),
(40, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:55:42', '2023-09-11 00:55:42'),
(41, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:56:17', '2023-09-11 00:56:17'),
(42, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:56:27', '2023-09-11 00:56:27'),
(43, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:56:37', '2023-09-11 00:56:37'),
(44, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:56:48', '2023-09-11 00:56:48'),
(45, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:56:56', '2023-09-11 00:56:56'),
(46, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:57:16', '2023-09-11 00:57:16'),
(47, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:57:41', '2023-09-11 00:57:41'),
(48, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:57:53', '2023-09-11 00:57:53'),
(49, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:58:26', '2023-09-11 00:58:26'),
(50, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:58:37', '2023-09-11 00:58:37'),
(51, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 00:58:43', '2023-09-11 00:58:43'),
(52, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 01:07:23', '2023-09-11 01:07:23'),
(53, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 01:07:39', '2023-09-11 01:07:39'),
(54, 8, 1, '2023-09-11', '2023-09-18', '2023-09-11 01:12:31', '2023-09-11 01:12:31'),
(55, 6, 1, '2023-09-11', '2023-09-18', '2023-09-11 02:08:38', '2023-09-11 02:08:38'),
(56, 6, 1, '2023-09-11', '2023-09-18', '2023-09-11 02:08:59', '2023-09-11 02:08:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `book_id`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(4, 28, 25, 1, NULL, NULL, NULL),
(17, 29, 24, 1, NULL, NULL, NULL),
(19, 29, 29, 1, NULL, NULL, NULL),
(23, 28, 28, 1, NULL, NULL, NULL),
(24, 28, 25, 1, NULL, NULL, NULL),
(25, 29, 24, 1, NULL, NULL, NULL),
(26, 29, 24, 1, NULL, NULL, NULL),
(27, 29, 29, 1, NULL, NULL, NULL),
(29, 28, 25, 1, NULL, NULL, NULL),
(30, 28, 25, 1, NULL, NULL, NULL),
(31, 28, 25, 1, NULL, NULL, NULL),
(32, 28, 25, 1, NULL, '2023-09-09 20:58:27', '2023-09-09 20:58:27'),
(33, 28, 25, 1, NULL, '2023-09-09 20:58:27', '2023-09-09 20:58:27'),
(34, 28, 25, 1, NULL, '2023-09-09 20:58:27', '2023-09-09 20:58:27'),
(35, 29, 24, 1, NULL, '2023-09-09 21:16:17', '2023-09-09 21:16:17'),
(36, 29, 29, 1, NULL, '2023-09-09 21:16:17', '2023-09-09 21:16:17'),
(37, 29, 24, 1, NULL, '2023-09-09 21:16:17', '2023-09-09 21:16:17'),
(38, 29, 24, 1, NULL, '2023-09-09 21:16:17', '2023-09-09 21:16:17'),
(39, 29, 29, 1, NULL, '2023-09-09 21:16:17', '2023-09-09 21:16:17'),
(40, 28, 25, 1, NULL, '2023-09-10 02:56:59', '2023-09-10 02:56:59'),
(41, 30, 23, 1, NULL, NULL, NULL),
(42, 31, 23, 1, NULL, NULL, NULL),
(43, 32, 23, 1, NULL, NULL, NULL),
(44, 33, 23, 1, NULL, NULL, NULL),
(45, 52, 23, 1, NULL, NULL, NULL),
(46, 53, 23, 1, NULL, NULL, NULL),
(47, 54, 23, 1, NULL, NULL, NULL),
(48, 55, 23, 1, NULL, NULL, NULL),
(49, 56, 23, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `member_id`, `created_at`, `updated_at`) VALUES
(1, 'wira', 'wira@gmail.com', NULL, '$2y$10$deEDr37vnthXhv44MARY2ew/k01Ti6WbqM34E6CMCLQH0FYvtNar.', NULL, NULL, '2023-08-13 17:57:04', '2023-08-13 17:57:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_catalog_id_foreign` (`catalog_id`);

--
-- Indeks untuk tabel `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
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
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_member_id_foreign` (`member_id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_book_id_foreign` (`book_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_member_id_foreign` (`member_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `catalogs` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
