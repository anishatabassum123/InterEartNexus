-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2024 at 11:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inter_earth_nexus`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE `continents` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Asia', 'AS', NULL, NULL),
(2, 'Africa', 'AF', NULL, NULL),
(3, 'North America', 'NA', NULL, NULL),
(4, 'South America', 'SA', NULL, NULL),
(5, 'Antarctica', 'AN', NULL, NULL),
(6, 'Europe', 'EU', NULL, NULL),
(7, 'Australia', 'AU', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `continent_factors`
--

CREATE TABLE `continent_factors` (
  `id` bigint UNSIGNED NOT NULL,
  `continent_id` bigint UNSIGNED NOT NULL,
  `factor_id` bigint UNSIGNED NOT NULL,
  `descriptions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `continent_factors`
--

INSERT INTO `continent_factors` (`id`, `continent_id`, `factor_id`, `descriptions`, `title`, `image`, `video_url`, `created_at`, `updated_at`) VALUES
(2, 2, 7, NULL, 'ererb', '9c5d06ec-ed8b-4763-9a0b-01eaa1c51e73.jpg', 'https://www.youtube.com/watch?v=71nXXguKfQ8', '2024-09-24 10:20:33', '2024-09-24 11:05:16'),
(3, 3, 7, NULL, 'wenrtm,', 'images/1727197989.jpg', 'https://www.youtube.com/watch?v=71nXXguKfQ8', '2024-09-24 11:11:23', '2024-09-24 11:13:09'),
(4, 6, 10, NULL, 'vdrdvbtrnut', 'images/1727239754.jpg', 'https://www.youtube.com/watch?v=71nXXguKfQ8', '2024-09-24 22:49:14', '2024-09-24 22:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `continent_id` bigint UNSIGNED NOT NULL,
  `name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `continent_id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'Afghanistan', 'AF', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(2, 1, 'Armenia', 'AM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(3, 1, 'Azerbaijan', 'AZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(4, 1, 'Bahrain', 'BH', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(5, 1, 'Bangladesh', 'BD', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(6, 1, 'Bhutan', 'BT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(7, 1, 'Brunei', 'BN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(8, 1, 'Cambodia', 'KH', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(9, 1, 'China', 'CN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(10, 1, 'Cyprus', 'CY', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(11, 1, 'Georgia', 'GE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(12, 1, 'India', 'IN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(13, 1, 'Indonesia', 'ID', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(14, 1, 'Iran', 'IR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(15, 1, 'Iraq', 'IQ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(16, 1, 'Israel', 'IL', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(17, 1, 'Japan', 'JP', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(18, 1, 'Jordan', 'JO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(19, 1, 'Kazakhstan', 'KZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(20, 1, 'Kuwait', 'KW', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(21, 1, 'Kyrgyzstan', 'KG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(22, 1, 'Laos', 'LA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(23, 1, 'Lebanon', 'LB', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(24, 1, 'Malaysia', 'MY', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(25, 1, 'Maldives', 'MV', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(26, 1, 'Mongolia', 'MN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(27, 1, 'Myanmar', 'MM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(28, 1, 'Nepal', 'NP', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(29, 1, 'North Korea', 'KP', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(30, 1, 'Oman', 'OM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(31, 1, 'Pakistan', 'PK', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(32, 1, 'Palestine', 'PS', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(33, 1, 'Philippines', 'PH', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(34, 1, 'Qatar', 'QA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(35, 1, 'Saudi Arabia', 'SA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(36, 1, 'Singapore', 'SG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(37, 1, 'South Korea', 'KR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(38, 1, 'Sri Lanka', 'LK', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(39, 1, 'Syria', 'SY', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(40, 1, 'Tajikistan', 'TJ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(41, 1, 'Thailand', 'TH', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(42, 1, 'Timor-Leste', 'TL', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(43, 1, 'Turkey', 'TR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(44, 1, 'Turkmenistan', 'TM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(45, 1, 'United Arab Emirates', 'AE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(46, 1, 'Uzbekistan', 'UZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(47, 1, 'Vietnam', 'VN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(48, 1, 'Yemen', 'YE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(49, 2, 'Algeria', 'DZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(50, 2, 'Angola', 'AO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(51, 2, 'Benin', 'BJ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(52, 2, 'Botswana', 'BW', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(53, 2, 'Burkina Faso', 'BF', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(54, 2, 'Burundi', 'BI', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(55, 2, 'Cabo Verde', 'CV', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(56, 2, 'Cameroon', 'CM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(57, 2, 'Central African Republic', 'CF', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(58, 2, 'Chad', 'TD', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(59, 2, 'Comoros', 'KM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(60, 2, 'Congo (Congo-Brazzaville)', 'CG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(61, 2, 'Congo (Congo-Kinshasa)', 'CD', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(62, 2, 'Djibouti', 'DJ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(63, 2, 'Egypt', 'EG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(64, 2, 'Equatorial Guinea', 'GQ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(65, 2, 'Eritrea', 'ER', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(66, 2, 'Eswatini', 'SZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(67, 2, 'Ethiopia', 'ET', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(68, 2, 'Gabon', 'GA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(69, 2, 'Gambia', 'GM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(70, 2, 'Ghana', 'GH', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(71, 2, 'Guinea', 'GN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(72, 2, 'Guinea-Bissau', 'GW', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(73, 2, 'Ivory Coast', 'CI', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(74, 2, 'Kenya', 'KE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(75, 2, 'Lesotho', 'LS', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(76, 2, 'Liberia', 'LR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(77, 2, 'Libya', 'LY', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(78, 2, 'Madagascar', 'MG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(79, 2, 'Malawi', 'MW', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(80, 2, 'Mali', 'ML', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(81, 2, 'Mauritania', 'MR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(82, 2, 'Mauritius', 'MU', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(83, 2, 'Morocco', 'MA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(84, 2, 'Mozambique', 'MZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(85, 2, 'Namibia', 'NA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(86, 2, 'Niger', 'NE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(87, 2, 'Nigeria', 'NG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(88, 2, 'Rwanda', 'RW', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(89, 2, 'São Tomé and Príncipe', 'ST', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(90, 2, 'Senegal', 'SN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(91, 2, 'Seychelles', 'SC', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(92, 2, 'Sierra Leone', 'SL', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(93, 2, 'Somalia', 'SO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(94, 2, 'South Africa', 'ZA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(95, 2, 'South Sudan', 'SS', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(96, 2, 'Sudan', 'SD', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(97, 2, 'Tanzania', 'TZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(98, 2, 'Togo', 'TG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(99, 2, 'Tunisia', 'TN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(100, 2, 'Uganda', 'UG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(101, 2, 'Zambia', 'ZM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(102, 2, 'Zimbabwe', 'ZW', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(103, 3, 'Antigua and Barbuda', 'AG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(104, 3, 'Bahamas', 'BS', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(105, 3, 'Barbados', 'BB', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(106, 3, 'Belize', 'BZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(107, 3, 'Canada', 'CA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(108, 3, 'Costa Rica', 'CR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(109, 3, 'Cuba', 'CU', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(110, 3, 'Dominica', 'DM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(111, 3, 'Dominican Republic', 'DO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(112, 3, 'El Salvador', 'SV', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(113, 3, 'Grenada', 'GD', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(114, 3, 'Guatemala', 'GT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(115, 3, 'Haiti', 'HT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(116, 3, 'Honduras', 'HN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(117, 3, 'Jamaica', 'JM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(118, 3, 'Mexico', 'MX', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(119, 3, 'Nicaragua', 'NI', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(120, 3, 'Panama', 'PA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(121, 3, 'Saint Kitts and Nevis', 'KN', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(122, 3, 'Saint Lucia', 'LC', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(123, 3, 'Saint Vincent and the Grenadines', 'VC', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(124, 3, 'Trinidad and Tobago', 'TT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(125, 3, 'United States', 'US', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(126, 4, 'Argentina', 'AR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(127, 4, 'Bolivia', 'BO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(128, 4, 'Brazil', 'BR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(129, 4, 'Chile', 'CL', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(130, 4, 'Colombia', 'CO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(131, 4, 'Ecuador', 'EC', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(132, 4, 'Guyana', 'GY', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(133, 4, 'Paraguay', 'PY', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(134, 4, 'Peru', 'PE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(135, 4, 'Suriname', 'SR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(136, 4, 'Uruguay', 'UY', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(137, 4, 'Venezuela', 'VE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(138, 6, 'Albania', 'AL', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(139, 6, 'Andorra', 'AD', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(140, 6, 'Austria', 'AT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(141, 6, 'Belarus', 'BY', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(142, 6, 'Belgium', 'BE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(143, 6, 'Bosnia and Herzegovina', 'BA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(144, 6, 'Bulgaria', 'BG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(145, 6, 'Croatia', 'HR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(146, 6, 'Czech Republic', 'CZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(147, 6, 'Denmark', 'DK', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(148, 6, 'Estonia', 'EE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(149, 6, 'Finland', 'FI', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(150, 6, 'France', 'FR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(151, 6, 'Germany', 'DE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(152, 6, 'Greece', 'GR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(153, 6, 'Hungary', 'HU', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(154, 6, 'Iceland', 'IS', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(155, 6, 'Ireland', 'IE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(156, 6, 'Italy', 'IT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(157, 6, 'Latvia', 'LV', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(158, 6, 'Lithuania', 'LT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(159, 6, 'Luxembourg', 'LU', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(160, 6, 'Malta', 'MT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(161, 6, 'Moldova', 'MD', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(162, 6, 'Monaco', 'MC', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(163, 6, 'Montenegro', 'ME', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(164, 6, 'Netherlands', 'NL', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(165, 6, 'North Macedonia', 'MK', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(166, 6, 'Norway', 'NO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(167, 6, 'Poland', 'PL', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(168, 6, 'Portugal', 'PT', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(169, 6, 'Romania', 'RO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(170, 6, 'Russia', 'RU', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(171, 6, 'San Marino', 'SM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(172, 6, 'Serbia', 'RS', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(173, 6, 'Slovakia', 'SK', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(174, 6, 'Slovenia', 'SI', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(175, 6, 'Spain', 'ES', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(176, 6, 'Sweden', 'SE', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(177, 6, 'Switzerland', 'CH', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(178, 6, 'Ukraine', 'UA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(179, 6, 'United Kingdom', 'GB', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(180, 6, 'Vatican City', 'VA', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(181, 7, 'Australia', 'AU', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(182, 7, 'Fiji', 'FJ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(183, 7, 'Kiribati', 'KI', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(184, 7, 'Marshall Islands', 'MH', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(185, 7, 'Micronesia', 'FM', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(186, 7, 'Nauru', 'NR', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(187, 7, 'New Zealand', 'NZ', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(188, 7, 'Palau', 'PW', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(189, 7, 'Papua New Guinea', 'PG', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(190, 7, 'Samoa', 'WS', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(191, 7, 'Solomon Islands', 'SB', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(192, 7, 'Tonga', 'TO', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(193, 7, 'Tuvalu', 'TV', '2024-09-24 10:15:35', '2024-09-24 10:15:35'),
(194, 7, 'Vanuatu', 'VU', '2024-09-24 10:15:35', '2024-09-24 10:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `earth_factor`
--

CREATE TABLE `earth_factor` (
  `id` bigint UNSIGNED NOT NULL,
  `continent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rain_assumption` text COLLATE utf8mb4_unicode_ci,
  `rain_assumption_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_soility` text COLLATE utf8mb4_unicode_ci,
  `land_soility_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forest_assumption` text COLLATE utf8mb4_unicode_ci,
  `forest_assumption_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperature` text COLLATE utf8mb4_unicode_ci,
  `temperature_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perception` text COLLATE utf8mb4_unicode_ci,
  `perception_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `humidity` text COLLATE utf8mb4_unicode_ci,
  `humidity_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warning_alerts` text COLLATE utf8mb4_unicode_ci,
  `warning_alerts_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wind` text COLLATE utf8mb4_unicode_ci,
  `wind_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_quality` text COLLATE utf8mb4_unicode_ci,
  `air_quality_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `climate_change_note` text COLLATE utf8mb4_unicode_ci,
  `climate_change_note_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co2_assumption` text COLLATE utf8mb4_unicode_ci,
  `co2_assumption_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE `factors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factors`
--

INSERT INTO `factors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Rain assumption', 'rain_assumption', NULL, NULL),
(2, 'Land soility', 'land_soility', NULL, NULL),
(3, 'Forest assumption', 'forest_assumption', NULL, NULL),
(4, 'Temperature', 'temperature', NULL, NULL),
(5, 'Perception', 'perception', NULL, NULL),
(6, 'Humidity', 'humidity', NULL, NULL),
(7, 'Warning alerts', 'warning_alerts', NULL, NULL),
(8, 'Wind', 'wind', NULL, NULL),
(9, 'Air quality', 'air_quality', NULL, NULL),
(10, 'Climate change note', 'climate_change_note', NULL, NULL),
(11, 'Co2 assumption', 'co2_assumption', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_17_173022_create_countries_table', 1),
(5, '2024_09_19_115504_create_earth_factor_table', 1),
(6, '2024_09_19_140633_create_continents_table', 1),
(7, '2024_09_24_110936_create_factors_table', 1),
(8, '2024_09_24_111020_create_continent_factors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PlYT0HluqOVcjjbK1997E6bCtnQf3C8tp3sfykFn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUFqTzJZQ2kydXJiMGgwd3JncDFQYVZUMmdXZ1hXVHRQalZDS2tvcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9pbnRlci1lYXJ0aC1uZXh1cy50ZXN0L2NvbnRpbmVudC9FVSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727263605);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Visitor',
  `active` tinyint NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `nationality`, `school`, `class`, `role`, `active`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rockey Ahmed', 'Bangladeshi', 'Koladi', '10', 'Visitor', 1, 'rockeycse@gmail.com', NULL, '$2y$12$/Uu3DFFzlqQJuqMohoc7HeIUqnehs30.IM9d3BPiEoCiAwVTnr/I6', NULL, '2024-09-24 21:48:17', '2024-09-24 21:52:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `continents_code_unique` (`code`);

--
-- Indexes for table `continent_factors`
--
ALTER TABLE `continent_factors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `continent_factors_continent_id_foreign` (`continent_id`),
  ADD KEY `continent_factors_factor_id_foreign` (`factor_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earth_factor`
--
ALTER TABLE `earth_factor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factors`
--
ALTER TABLE `factors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `continents`
--
ALTER TABLE `continents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `continent_factors`
--
ALTER TABLE `continent_factors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `earth_factor`
--
ALTER TABLE `earth_factor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factors`
--
ALTER TABLE `factors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `continent_factors`
--
ALTER TABLE `continent_factors`
  ADD CONSTRAINT `continent_factors_continent_id_foreign` FOREIGN KEY (`continent_id`) REFERENCES `continents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `continent_factors_factor_id_foreign` FOREIGN KEY (`factor_id`) REFERENCES `factors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
