-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 01:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mi7_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `name`, `by`, `slug`, `date`, `short_description`, `description`, `status`, `meta_description`, `keywords`, `meta_title`, `created_at`, `updated_at`) VALUES
(10, 'lZ6SVaA0Va0BcueesV01FBFglAoFFd0bfYMCvQ6O.jpg', 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', 'Mi7', 'what-is-rentalcover-and-how-does-it-work-', '2022-09-29', 'Still if you found yourself in any confusion then get in touch with 1937 car rentals, they will provide you excellent services and highly maintained cars for your trip.', '<p>But I must explain to you how all this mistaken idea of denouncing \r\npleasure and praising pain was born and I will give you a complete \r\naccount of the system, and expound the actual teachings of the great \r\nexplorer of the truth, the master-builder of human happiness. No one \r\nrejects, dislikes, or avoids pleasure itself, because it is pleasure, \r\nbut because those who do not know how to pursue pleasure rationally \r\nencounter consequences that are extremely painful.\r\n\r\n                                            Nor again is there anyone \r\nwho loves or pursues or desires to obtain pain of itself, because it is \r\npain, but because occasionally circumstances occur in which toil and \r\npain can procure him some great pleasure. To take a trivial example, \r\nwhich of us ever undertakes laborious physical exercise, except to \r\nobtain some advantage from it? But who has any right to find fault with a\r\n man who chooses to enjoy a pleasure that has no annoying \r\nconsequences.On the other hand, we denounce with righteous indignation \r\nand dislike men who are so beguiled and demoralized by the charms of \r\npleasure of the moment, so blinded by desire, that they cannot foresee \r\nthe pain and trouble that are bound to ensue; and equal blame belongs to\r\n those who fail in their duty through weakness of will, which is the \r\nsame as saying through shrinking from toil and pain. These cases are \r\nperfectly simple and easy to distinguish. In a free hour, when our power\r\n of choice is untrammeled and when nothing prevents our being able to do\r\n what we like best, every pleasure is to be welcomed and every pain \r\navoided.</p>', 1, 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', '2022-09-29 02:44:36', '2022-09-29 02:44:36'),
(11, 'xhM5OMszSy0SD9cv5P3gjoYgATUAEJr5ntLBJRdd.jpg', 'Important guide on most famous luxury car rental', 'Mi7', 'important-guide-on-most-famous-luxury-car-rental', '2022-09-29', 'We are delighted to provide you with well-maintained vehicles in order to fulfil your long-held dreams. We, 1937 car rentals, stand out for class and sensible taste.', '<p>But I must explain to you how all this mistaken idea of denouncing \r\npleasure and praising pain was born and I will give you a complete \r\naccount of the system, and expound the actual teachings of the great \r\nexplorer of the truth, the master-builder of human happiness. No one \r\nrejects, dislikes, or avoids pleasure itself, because it is pleasure, \r\nbut because those who do not know how to pursue pleasure rationally \r\nencounter consequences that are extremely painful.\r\n\r\n                                            Nor again is there anyone \r\nwho loves or pursues or desires to obtain pain of itself, because it is \r\npain, but because occasionally circumstances occur in which toil and \r\npain can procure him some great pleasure. To take a trivial example, \r\nwhich of us ever undertakes laborious physical exercise, except to \r\nobtain some advantage from it? But who has any right to find fault with a\r\n man who chooses to enjoy a pleasure that has no annoying \r\nconsequences.On the other hand, we denounce with righteous indignation \r\nand dislike men who are so beguiled and demoralized by the charms of \r\npleasure of the moment, so blinded by desire, that they cannot foresee \r\nthe pain and trouble that are bound to ensue; and equal blame belongs to\r\n those who fail in their duty through weakness of will, which is the \r\nsame as saying through shrinking from toil and pain. These cases are \r\nperfectly simple and easy to distinguish. In a free hour, when our power\r\n of choice is untrammeled and when nothing prevents our being able to do\r\n what we like best, every pleasure is to be welcomed and every pain \r\navoided.</p>', 1, 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', '2022-09-29 02:45:17', '2022-09-29 02:46:23'),
(12, 'vNKpHXs5kwoEkmzn6rhlrYuwmfLfePuUe6k0dkut.jpg', 'Why you should rent a car?', 'Mi7', 'why-you-should-rent-a-car-', '2022-09-29', 'If you\'ve never rented a car before, this one\'s for you — we\'re going to tell you just what you\'re missing out on! Check out these 4 great advantages of renting…', '<p>But I must explain to you how all this mistaken idea of denouncing \r\npleasure and praising pain was born and I will give you a complete \r\naccount of the system, and expound the actual teachings of the great \r\nexplorer of the truth, the master-builder of human happiness. No one \r\nrejects, dislikes, or avoids pleasure itself, because it is pleasure, \r\nbut because those who do not know how to pursue pleasure rationally \r\nencounter consequences that are extremely painful.\r\n\r\n                                            Nor again is there anyone \r\nwho loves or pursues or desires to obtain pain of itself, because it is \r\npain, but because occasionally circumstances occur in which toil and \r\npain can procure him some great pleasure. To take a trivial example, \r\nwhich of us ever undertakes laborious physical exercise, except to \r\nobtain some advantage from it? But who has any right to find fault with a\r\n man who chooses to enjoy a pleasure that has no annoying \r\nconsequences.On the other hand, we denounce with righteous indignation \r\nand dislike men who are so beguiled and demoralized by the charms of \r\npleasure of the moment, so blinded by desire, that they cannot foresee \r\nthe pain and trouble that are bound to ensue; and equal blame belongs to\r\n those who fail in their duty through weakness of will, which is the \r\nsame as saying through shrinking from toil and pain. These cases are \r\nperfectly simple and easy to distinguish. In a free hour, when our power\r\n of choice is untrammeled and when nothing prevents our being able to do\r\n what we like best, every pleasure is to be welcomed and every pain \r\navoided.</p><p></p>', 1, 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', 'WHAT IS RENTALCOVER AND HOW DOES IT WORK?', '2022-09-29 02:45:45', '2022-09-29 02:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `no_of_days` int(11) NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `vehicle_id`, `start_date`, `end_date`, `start_time`, `end_time`, `car_name`, `no_of_days`, `total_amount`, `first_name`, `last_name`, `email`, `contact_no`, `created_at`, `updated_at`) VALUES
(55, 71, '2022-09-12', '2022-09-13', '02:19:00', '02:19:00', 'Audi A6', 2, 1400, 'Huzaifa', 'Khan', NULL, '02123131', '2022-09-12 03:26:21', '2022-09-12 03:26:21'),
(56, 71, '2022-09-12', '2022-09-13', '02:19:00', '02:19:00', 'Audi A6', 2, 1400, 'Test', 'Test', NULL, '02123131', '2022-09-12 03:26:42', '2022-09-12 03:26:42'),
(57, 71, '2022-09-12', '2022-09-13', '02:19:00', '02:19:00', 'Audi A6', 2, 1400, 'Test', 'Test', 'test@test.com', '02123131', '2022-09-12 03:27:27', '2022-09-12 03:27:27'),
(58, 71, '2022-09-12', '2022-09-13', '02:19:00', '02:19:00', 'Audi A6', 2, 1400, 'Test', 'Test', NULL, '02123131', '2022-09-12 03:27:50', '2022-09-12 03:27:50'),
(59, 71, '2022-09-12', '2022-09-13', '02:19:00', '02:19:00', 'Audi A6', 2, 1400, 'Test', 'Test', 'test@test.com', '02123131', '2022-09-12 03:28:06', '2022-09-12 03:28:06'),
(60, 74, '2022-09-13', '2022-09-15', '01:59:00', '01:59:00', 'Audi A6', 3, 765, 'Huzaifa', 'Khan', 'test@test.com', '02123131', '2022-09-13 03:09:19', '2022-09-13 03:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `meta_title` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `color_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `logo`, `name`, `slug`, `status`, `meta_title`, `keywords`, `meta_description`, `created_at`, `updated_at`, `color_logo`) VALUES
(31, 'fpcPOdcbcFbziOgqwAvDlOQPWHu4J3scjgLio0BI.png', 'Audi', 'audi', 1, 'Audi', 'Audi', 'Audi', '2022-09-10 01:49:21', '2022-09-10 02:37:15', 'nFGbowzAKmfWc8Hwlsm8CeOQ89iZj1GZb9LtdCSU.png'),
(32, 'T7pEd5LZn1aNIMuj3iIFAva9dUHHnffR2Pf2rTSG.png', 'BMW', 'bmw', 1, 'BMW', 'BMW', 'BMW', '2022-09-10 01:53:32', '2022-09-10 02:37:07', 'TUt8qHvzgLOWa6T51w6MabrOnpqPoXxyKZC1ipQB.png'),
(33, '8K7Qf3JrtybmtsJuhAVrIiLrd9181B8s5vk5lBge.png', 'Lamborghani', 'lamborghani', 1, 'Lamborghani', 'Lamborghani', 'Lamborghani', '2022-09-10 02:36:49', '2022-09-13 07:55:09', 'QPRQDO9t6qfkI1ahcMr0MGq26RNlf5HwA7u5RClG.png'),
(34, '47U1UkxbVijURawE3AJyGov0kXeFdjcj4eg6xa8a.png', 'Mercedes', 'mercedes', 1, 'Mercedes', 'Mercedes', 'Mercedes', '2022-09-12 05:26:05', '2022-09-29 05:52:45', 'nezyZdytbY7rKo8lygUDoDNohEHfIEkABTS05MCV.png'),
(35, 'lDJ4cBjjy4zvrQB23EJPzxrFBK9xxRLzBnWsVsFv.png', 'Range Rover', 'range-rover', 1, 'Range Rover', 'Range Rover', 'Range Rover', '2022-09-12 05:27:14', '2022-09-29 05:52:12', 'OJalgZvIFvqm6jbQq5R3OPA8uoUVoYTvEdso5CcB.png'),
(36, 'T1wYfp26IraTAzulcM0oSCP0iwctgSEgqCRI2USX.png', 'Bentley', 'bentley', 1, 'Bentley', 'Bentley', 'Bentley', '2022-09-15 01:16:09', '2022-09-29 05:52:56', 'FAwCbIzrstR0X0PcBsmkZJZs1KX9y0p9C7lSKuLE.png'),
(37, 'q9PMkqDatECh2UGB8TE0yDcFmoEr53EyADQq35NP.png', 'Mustang', 'mustang', 1, 'Mustang', 'Mustang', 'Mustang', '2022-09-15 01:17:48', '2022-09-29 05:53:02', 'XeUoNjsOEXGmiq31YPVN6QsocikVAwTq8Zyz39wr.png'),
(38, 'uUjTQcWJe1ApNSFDhpqdX0KNfInJO2QoxR402OnN.png', 'Cadillac', 'cadillac', 1, 'Cadillac', 'Cadillac', 'Cadillac', '2022-09-15 01:18:22', '2022-09-29 05:53:12', 'bBWLSF3ca1tGebeCNKDz5YxRurLLRKbdn0g2QmDf.png'),
(39, 'SahUfEeVoVeAYKLkmi5NwJIp8iI2A7e492hrAWFe.png', 'Chevrolet', 'chevrolet', 1, 'Chevrolet', 'Chevrolet', 'Chevrolet', '2022-09-15 01:19:01', '2022-09-29 05:54:52', '92OUzzwj0h1OZdrwVswZPZpVSHhwUtOzwIIAugkk.png'),
(40, 'sPpwTU7sSbhPoSZRYWA39SX1S0y9Mr4SpxsB7KDG.png', 'Corvette G', 'corvette-g', 1, 'Corvette G', 'Corvette G', 'Corvette G', '2022-09-15 01:19:32', '2022-09-29 05:53:20', 'Qwbj4nU09F1W5OrDY2RMUT2fyiyH9cUjBxDQ7F2J.png'),
(41, 'JrJcd8LrU3tbSG0a2kHjWn0GbxnAQkkTh8nxIakF.png', 'Jaguar', 'jaguar', 1, 'Jaguar', 'Jaguar', 'Jaguar', '2022-09-15 01:20:19', '2022-09-29 05:53:33', 'apTFnayhgdfpwDjQ9N0ZnopceHagoYmQVrbmceh9.png'),
(42, 'pAoLm4ApCnEHOyHS3fhsZZBzzj368b6cDMujWt6x.png', 'Maserati', 'maserati', 1, 'Maserati', 'Maserati', 'Maserati', '2022-09-15 01:22:49', '2022-09-29 05:53:43', 'tH7tgGiIAXTxT9mljFZW32uzsfyJeMtnGysMvxUb.png'),
(43, 'J1Q4CPou6dqyjV3tVurTDiIMuSiSbJYw1feBCX7X.png', 'Mclaren', 'mclaren', 1, 'Mclaren', 'Mclaren', 'Mclaren', '2022-09-15 01:23:20', '2022-09-29 03:11:19', 'tXJaniCK0gF17V88Uc3EmbhbzIkIxYJC4tqFpLdv.png'),
(44, 'eQsfv4Fj1zN0dos9ji5auJQMSDtGJ3SYSABhWm2I.png', 'Nissan', 'nissan', 1, 'Nissan', 'Nissan', 'Nissan', '2022-09-15 01:23:42', '2022-09-29 05:54:04', 'CfWmnzTQPibMveGUuUeVYpHz89zS0kUoCZKQMSJQ.png'),
(45, 'hykOyFofhhLe8bRKHpU58BFuveZeRPwpB0hU7uvI.png', 'Porsche', 'porsche', 1, 'Porsche', 'Porsche', 'Porsche', '2022-09-15 01:24:24', '2022-09-29 05:54:14', 'XQN1QlSeEg6cMiCuZgGeyCnDNKMQKlKfIdEzXi47.png'),
(46, 'TyBCQhsX5opmQB87xpkZeJM2P0XinURjRYTxyg19.png', 'Rolls Royce', 'rolls-royce', 1, 'Rolls Royce', 'Rolls Royce', 'Rolls Royce', '2022-09-15 01:24:55', '2022-09-29 05:54:25', '7TpB1xE8PwS932KxQ5oupyGggbECLM9nI6UYsf2o.png'),
(47, 'aYz0rzlfi1EeXfiWyF4mIV4Q4IThjZVwJDeBQ9Pm.png', 'Ferrari', 'ferrari', 1, 'Ferrari', 'Ferrari', 'Ferrari', '2022-09-15 02:10:45', '2022-09-29 05:54:33', 'i4hlV5Huq9squftapFbv1GQ11weVYsT03JAbiISo.png');

-- --------------------------------------------------------

--
-- Table structure for table `brands_home`
--

CREATE TABLE `brands_home` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_one` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_three` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(7, 'Huzaifa', 'mrhuzaifa29@gmail.com', '0341245612', 'sadsdaasd', '2022-09-13 02:40:20', '2022-09-13 02:40:20'),
(8, 'Huzaifa', 'mrhuzaifa29@gmail.com', '0341245612', 'sadsdaasd', '2022-09-13 02:40:46', '2022-09-13 02:40:46'),
(9, 'Huzaifa', 'mrhuzaifa29@gmail.com', '0341245612', 'sadsdaasd', '2022-09-13 02:43:06', '2022-09-13 02:43:06'),
(10, 'Huzaifa', 'mrhuzaifa29@gmail.com', '0341245612', 'sadsdaasd', '2022-09-13 02:43:20', '2022-09-13 02:43:20'),
(11, 'Huzaifa', 'mrhuzaifa29@gmail.com', '0341245612', 'sadsdaasd', '2022-09-13 02:43:26', '2022-09-13 02:43:26'),
(12, 'Huzaifa', 'mrhuzaifa29@gmail.com', '0341245612', 'sadsdaasd', '2022-09-13 02:43:53', '2022-09-13 02:43:53'),
(13, 'Huzaifa', 'mrhuzaifa29@gmail.com', '0341245612', 'sadsdaasd', '2022-09-13 02:44:18', '2022-09-13 02:44:18'),
(14, 'Huzaifa', 'mrhuzaifa29@gmail.com', '0341245612', 'sadsdaasd', '2022-09-13 02:44:58', '2022-09-13 02:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `route` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `meta_title`, `keywords`, `meta_description`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 'Home | MI7', 'Home', 'Home | MI7', 'home', 1, '2022-04-07 05:27:16', '2022-09-10 07:37:19'),
(2, 'About Us', 'about_us', 'About Us | MI7', 'About Us', 'About Us | MI7', 'about_us', 1, '2022-04-07 05:36:53', '2022-09-10 07:37:28'),
(3, 'Our Services', 'our-services', 'Our Services | MI7', 'Our Services', 'Our Services | MI7', 'service', 1, '2022-04-07 05:49:25', '2022-09-10 07:37:38'),
(4, 'Blog', 'blogs', 'Blog | MI7', 'Blog', 'Blog | MI7', 'blogs', 1, '2022-04-07 05:49:25', '2022-09-10 07:37:47'),
(5, 'Contact Us', 'contact-us', 'Contact Us | MI7', 'Contact Us', 'Contact Us | MI7', 'contact_us', 1, '2022-04-07 05:50:29', '2022-09-10 07:37:56'),
(6, 'All Vehicles', 'all-vehicles', 'All Vehicles | MI7', 'All Vehicles', 'All Vehicles | MI7', 'all_vehicles', 1, '2022-04-12 10:32:19', '2022-09-10 07:38:05'),
(7, 'Faqs', 'faqs', 'Faqs | Mi7', 'Faqs | Mi7', 'Faqs | Mi7', 'faqs', 1, '2022-09-29 11:01:06', '2022-09-29 11:01:06'),
(8, 'Terms And Condition', 'termsandcondition', 'Terms And Condition | MI7', 'Terms And Condition | MI7', 'Terms And Condition | MI7', 'termsandcondition', 1, '2022-09-29 11:01:06', '2022-09-29 11:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Elite Business Setup', '2021-10-26 05:41:38', '2021-10-26 05:41:38'),
(2, 'site_logo_header', 'ljL5DSlOFQJgoyIX0Yav8lniWelwSzWyaHVXzIZX.png', '2021-10-26 05:42:17', '2022-09-10 06:40:57'),
(3, 'site_email', 'info@mi7.ae', '2021-10-26 09:25:48', '2022-09-10 02:12:02'),
(4, 'contact_no', '+971 55 606 5005', '2021-10-26 09:27:05', '2022-09-10 02:12:02'),
(5, 'address', '2604 Churchill Tower, Business Bay, Dubai', '2021-10-26 09:54:18', '2022-09-10 02:12:03'),
(6, 'timings', 'Saturday to Thursday / 9:00 AM to 6:00 PM', '2021-10-26 09:54:18', '2021-11-16 17:54:28'),
(7, 'social_twitter', '#', '2021-10-26 09:54:18', '2022-04-12 00:50:08'),
(8, 'social_facebook', 'https://www.facebook.com/mi7cars/', '2021-10-26 09:54:18', '2022-09-10 02:12:03'),
(9, 'social_linkedin', '#', '2021-10-26 09:54:18', '2022-04-12 00:50:08'),
(10, 'social_pinterest', '#', '2021-10-26 09:54:18', '2022-04-12 00:50:08'),
(11, 'footer_about', 'Mi7 is a car rental company with a network of over 15 associated cars rental offices, showrooms and a wide variety of other services. We together with our partners manager over 120 new, luxuriously equipped cars.', '2021-10-26 09:54:18', '2022-09-10 02:12:03'),
(12, 'google_location', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.662920545975!2d55.258541434887704!3d25.180857199999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f691734dcb8e3%3A0x6fcb61d5d7faa66b!2sChurchill%20Executive%20Tower!5e0!3m2!1sen!2s!4v1662469630446!5m2!1sen!2s', '2021-10-26 10:29:05', '2022-09-13 02:46:09'),
(13, 'header_image', 'EeZf7wLxKLVtx8hc8b3mlR9n72F7jmrNbpHf7WqQ.svg', '2021-10-27 09:24:03', '2022-04-07 00:39:50'),
(14, 'social_instagram', 'https://www.instagram.com/mi7cars/', '2021-10-26 09:54:18', '2022-09-10 02:12:03'),
(15, 'site_logo_footer', 'PbPAO579DeJSg60hsv39vu4Y0rtwCMCOjArUGdd4.png', '2021-10-26 05:42:17', '2022-09-10 06:40:57'),
(16, 'whatsapp_display', '+971 55 606 5005', '2022-08-12 05:59:59', '2022-09-10 02:12:03'),
(17, 'whatsapp_link', '+971556065005', '2022-08-12 05:59:59', '2022-09-10 02:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `model_year` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `brand_id`, `featured_image`, `name`, `price`, `slug`, `description`, `is_featured`, `status`, `created_at`, `updated_at`, `model_year`, `location`, `car_type`) VALUES
(75, 33, 'yT61bRPyJU2moJbT2OvJ4WUXc3Zjguqc6KxCSR0M.png', 'Lamborghini Urus Blue', 4500, 'lamborghini-urus-blue', '<p>Lamborghini Urus Blue Car Description</p>', 1, 1, '2022-09-29 02:53:30', '2022-09-29 03:12:43', '2022', 'UAE', 'Luxury'),
(76, 34, 'WK7cz1MEEShuXdtqDGafj7xuSJZxB7xMuU44sB3p.png', 'Mercedes G63', 2700, 'mercedes-g63', '<p>Mercedes G63 Car Description</p>', 1, 1, '2022-09-29 03:01:53', '2022-09-29 03:12:44', '2022', 'UAE', 'SUV'),
(77, 34, 'ehEUes6MtG3eVFt6l2wIHeVCUIvDIjxrSVERKUto.png', 'Mercedes G63 White', 2500, 'mercedes-g63-white', '<p>Mercedes G63 White Car Description</p>', 1, 1, '2022-09-29 05:18:53', '2022-09-29 05:28:23', '2022', 'UAE', 'SUV'),
(78, 32, 'vHfDwZYRgaxyZHRPKGIk7ggCCJ0nkrvw6L2UnVl3.png', 'BMW X6 Blue', 800, 'bmw-x6-blue', '<p>BMW X6 Blue Car Description</p>', 1, 1, '2022-09-29 05:22:15', '2022-09-29 05:28:24', '2022', 'UAE', 'Luxury'),
(79, 34, 'gLxDh2nSKOL743Sdr4utB9NAU5DWOMwwc3uwg0pz.png', 'Mercedes E Class', 2500, 'mercedes-e-class', '<p>Mercedes E Class Car Description</p>', 1, 1, '2022-09-29 05:24:55', '2022-09-29 05:28:25', '2021', 'UAE', 'Luxury'),
(80, 44, 'GArBg2uoQr94k8JayKlSeJvFDe6h93fn63DKuPE5.png', 'Nissan Patrol Platinum', 700, 'nissan-patrol-platinum', '<p>Nissan Patrol Platinum Car Description</p>', 1, 1, '2022-09-29 05:27:58', '2022-09-29 05:28:25', '2021', 'UAE', 'SUV'),
(81, 31, 'zXDPQWHVe8H1ARhXMBnhyJhRFhv934qGIzKV3X4u.png', 'Audi A6 Black', 700, 'audi-a6-black', '<p>Audi A6 Black Car Description</p>', 0, 1, '2022-09-29 05:32:02', '2022-09-29 05:32:02', '2022', 'UAE', 'Luxury'),
(82, 31, 'hxWR0ezAPjHuHmipb75SnmRa0tZPzoi2O21nVT31.png', 'Audi A6 White', 700, 'audi-a6-white', '<p>Audi A6 White Car Description</p>', 0, 1, '2022-09-29 05:34:23', '2022-09-29 05:34:23', '2022', 'UAE', 'Luxury'),
(83, 32, 'zDpElwlBNAwxo0TRZnBcLEMBigwTxOQfN1HR2UOl.png', 'BMW X6 Grey', 800, 'bmw-x6-grey', '<p>BMW X6 Grey Car Description</p>', 0, 1, '2022-09-29 05:37:04', '2022-09-29 05:37:04', '2022', 'UAE', 'Luxury'),
(84, 35, 'HaBdr6chhzCPve6xzghLEm2eXiTJIOzBkymDIQHq.png', 'Range Rover SVR', 1900, 'range-rover-svr', '<p>Range Rover SVR Car Description</p>', 0, 1, '2022-09-29 05:39:43', '2022-09-29 05:39:43', '2022', 'UAE', 'SUV'),
(85, 35, 'v74q30CttIEeqDQFpcBC8ka6NHaaATsfN2AR5Z5Z.png', 'Range Rover Velar', 1200, 'range-rover-velar', '<p>Range Rover Velar Car Description</p>', 0, 1, '2022-09-29 05:42:56', '2022-09-29 05:42:56', '2022', 'UAE', 'SUV'),
(86, 33, 'yNzEQJ8mp0G6VeDFIYwnVMvow8leNTvbvOJC0b9p.png', 'Lamborghini Urus Red', 4500, 'lamborghini-urus-red', '<p>Lamborghini Urus Red Car Description</p>', 0, 1, '2022-09-29 05:45:34', '2022-09-29 05:45:34', '2022', 'UAE', 'Luxury'),
(87, 34, '69EIhwjjb3md4hXIAfga62JL4pfQohRgssCqcjgP.png', 'Mercedes C Class', 2500, 'mercedes-c-class', '<p>Mercedes C Class Car Description</p>', 0, 1, '2022-09-29 05:48:20', '2022-09-29 05:48:20', '2022', 'UAE', 'Luxury'),
(88, 34, 'ckIF69kXxvk9phZ55OA4lPvs0zAP9ayFh1Vo4tyG.png', 'Mercedes GLE', 2500, 'mercedes-gle', '<p>Mercedes GLE Car Description</p>', 0, 1, '2022-09-29 05:50:55', '2022-09-29 05:50:55', '2022', 'UAE', 'Luxury');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_features`
--

CREATE TABLE `vehicle_features` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_features`
--

INSERT INTO `vehicle_features` (`id`, `vehicle_id`, `name`, `value`, `is_featured`, `created_at`, `updated_at`) VALUES
(1317, 75, 'Engine', 'V8', 1, '2022-09-29 02:53:30', '2022-09-29 05:50:56'),
(1318, 75, 'Seats', '4', 1, '2022-09-29 02:53:30', '2022-09-29 05:50:57'),
(1319, 75, 'Doors', '4', 1, '2022-09-29 02:53:30', '2022-09-29 05:50:57'),
(1320, 75, 'Luggage', '1', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1321, 75, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1322, 75, 'Cruise Control', 'Yes', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1323, 75, 'Bluetooth', 'Yes', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1324, 75, 'Automatic', 'Yes', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1325, 75, 'Parking Sensor', 'Yes', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1326, 75, 'Navigation', 'Yes', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1327, 75, 'Full Insurance', 'Yes', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1328, 75, 'Security Type', 'Card Only', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1329, 75, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1330, 75, 'Free Cancellation', 'Yes', 0, '2022-09-29 02:53:30', '2022-09-29 02:53:30'),
(1331, 75, '24/7 Customer Service', 'Yes', 0, '2022-09-29 02:53:31', '2022-09-29 02:53:31'),
(1332, 75, 'Mileage Daily', 'KM250', 0, '2022-09-29 02:53:31', '2022-09-29 02:53:31'),
(1333, 75, 'Price', '4500', 0, '2022-09-29 02:53:31', '2022-09-29 02:53:31'),
(1334, 75, 'Deposit', '5000', 1, '2022-09-29 02:53:31', '2022-09-29 05:50:57'),
(1335, 76, 'Engine', 'V8', 1, '2022-09-29 03:01:53', '2022-09-29 05:50:56'),
(1336, 76, 'Seats', '5', 1, '2022-09-29 03:01:53', '2022-09-29 05:50:57'),
(1337, 76, 'Doors', '4', 1, '2022-09-29 03:01:53', '2022-09-29 05:50:57'),
(1338, 76, 'Luggage', '1', 0, '2022-09-29 03:01:53', '2022-09-29 03:01:53'),
(1339, 76, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 03:01:53', '2022-09-29 03:01:53'),
(1340, 76, 'Cruise Control', 'Yes', 0, '2022-09-29 03:01:53', '2022-09-29 03:01:53'),
(1341, 76, 'Bluetooth', 'Yes', 0, '2022-09-29 03:01:53', '2022-09-29 03:01:53'),
(1342, 76, 'Automatic', 'Yes', 0, '2022-09-29 03:01:53', '2022-09-29 03:01:53'),
(1343, 76, 'Parking Sensor', 'Yes', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1344, 76, 'Navigation', 'Yes', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1345, 76, 'Full Insurance', 'Yes', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1346, 76, 'Security Type', 'Card Only', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1347, 76, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1348, 76, 'Free Cancellation', 'Yes', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1349, 76, '24/7 Customer Service', 'Yes', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1350, 76, 'Mileage Daily', 'KM250', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1351, 76, 'Price', '2700', 0, '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(1352, 76, 'Deposit', '4000', 1, '2022-09-29 03:01:54', '2022-09-29 05:50:57'),
(1353, 77, 'Engine', 'V8', 1, '2022-09-29 05:18:54', '2022-09-29 05:50:56'),
(1354, 77, 'Seats', '5', 1, '2022-09-29 05:18:54', '2022-09-29 05:50:57'),
(1355, 77, 'Doors', '4', 1, '2022-09-29 05:18:54', '2022-09-29 05:50:57'),
(1356, 77, 'Luggage', '1', 0, '2022-09-29 05:18:54', '2022-09-29 05:18:54'),
(1357, 77, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:18:54', '2022-09-29 05:18:54'),
(1358, 77, 'Cruise Control', 'Yes', 0, '2022-09-29 05:18:54', '2022-09-29 05:18:54'),
(1359, 77, 'Bluetooth', 'Yes', 0, '2022-09-29 05:18:54', '2022-09-29 05:18:54'),
(1360, 77, 'Automatic', 'Yes', 0, '2022-09-29 05:18:54', '2022-09-29 05:18:54'),
(1361, 77, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:18:54', '2022-09-29 05:18:54'),
(1362, 77, 'Navigation', 'Yes', 0, '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(1363, 77, 'Full Insurance', 'Yes', 0, '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(1364, 77, 'Security Type', 'Card Only', 0, '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(1365, 77, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(1366, 77, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(1367, 77, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(1368, 77, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(1369, 77, 'Price', '2500', 0, '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(1370, 77, 'Deposit', '3500', 1, '2022-09-29 05:18:55', '2022-09-29 05:50:57'),
(1371, 78, 'Engine', 'V6', 1, '2022-09-29 05:22:15', '2022-09-29 05:50:56'),
(1372, 78, 'Seats', '5', 1, '2022-09-29 05:22:15', '2022-09-29 05:50:57'),
(1373, 78, 'Doors', '4', 1, '2022-09-29 05:22:15', '2022-09-29 05:50:57'),
(1374, 78, 'Luggage', '1', 0, '2022-09-29 05:22:15', '2022-09-29 05:22:15'),
(1375, 78, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:22:15', '2022-09-29 05:22:15'),
(1376, 78, 'Cruise Control', 'Yes', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1377, 78, 'Bluetooth', 'Yes', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1378, 78, 'Automatic', 'Yes', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1379, 78, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1380, 78, 'Navigation', 'Yes', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1381, 78, 'Full Insurance', 'Yes', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1382, 78, 'Security Type', 'Card Only', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1383, 78, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1384, 78, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1385, 78, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1386, 78, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1387, 78, 'Price', '800', 0, '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(1388, 78, 'Deposit', '3000', 1, '2022-09-29 05:22:16', '2022-09-29 05:50:57'),
(1389, 79, 'Engine', 'V6', 1, '2022-09-29 05:24:55', '2022-09-29 05:50:56'),
(1390, 79, 'Seats', '5', 1, '2022-09-29 05:24:55', '2022-09-29 05:50:57'),
(1391, 79, 'Doors', '4', 1, '2022-09-29 05:24:55', '2022-09-29 05:50:57'),
(1392, 79, 'Luggage', '1', 0, '2022-09-29 05:24:55', '2022-09-29 05:24:55'),
(1393, 79, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:24:55', '2022-09-29 05:24:55'),
(1394, 79, 'Cruise Control', 'Yes', 0, '2022-09-29 05:24:56', '2022-09-29 05:24:56'),
(1395, 79, 'Bluetooth', 'Yes', 0, '2022-09-29 05:24:56', '2022-09-29 05:24:56'),
(1396, 79, 'Automatic', 'Yes', 0, '2022-09-29 05:24:56', '2022-09-29 05:24:56'),
(1397, 79, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:24:56', '2022-09-29 05:24:56'),
(1398, 79, 'Navigation', 'Yes', 0, '2022-09-29 05:24:56', '2022-09-29 05:24:56'),
(1399, 79, 'Full Insurance', 'Yes', 0, '2022-09-29 05:24:56', '2022-09-29 05:24:56'),
(1400, 79, 'Security Type', 'Card Only', 0, '2022-09-29 05:24:56', '2022-09-29 05:24:56'),
(1401, 79, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:24:57', '2022-09-29 05:24:57'),
(1402, 79, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:24:57', '2022-09-29 05:24:57'),
(1403, 79, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:24:57', '2022-09-29 05:24:57'),
(1404, 79, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:24:57', '2022-09-29 05:24:57'),
(1405, 79, 'Price', '2500', 0, '2022-09-29 05:24:57', '2022-09-29 05:24:57'),
(1406, 79, 'Deposit', '3000', 1, '2022-09-29 05:24:57', '2022-09-29 05:50:57'),
(1407, 80, 'Engine', 'V8', 1, '2022-09-29 05:27:58', '2022-09-29 05:50:56'),
(1408, 80, 'Seats', '7', 1, '2022-09-29 05:27:58', '2022-09-29 05:50:57'),
(1409, 80, 'Doors', '4', 1, '2022-09-29 05:27:58', '2022-09-29 05:50:57'),
(1410, 80, 'Luggage', '1', 0, '2022-09-29 05:27:58', '2022-09-29 05:27:58'),
(1411, 80, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:27:58', '2022-09-29 05:27:58'),
(1412, 80, 'Cruise Control', 'Yes', 0, '2022-09-29 05:27:58', '2022-09-29 05:27:58'),
(1413, 80, 'Bluetooth', 'Yes', 0, '2022-09-29 05:27:58', '2022-09-29 05:27:58'),
(1414, 80, 'Automatic', 'Yes', 0, '2022-09-29 05:27:58', '2022-09-29 05:27:58'),
(1415, 80, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:27:58', '2022-09-29 05:27:58'),
(1416, 80, 'Navigation', 'Yes', 0, '2022-09-29 05:27:58', '2022-09-29 05:27:58'),
(1417, 80, 'Full Insurance', 'Yes', 0, '2022-09-29 05:27:58', '2022-09-29 05:27:58'),
(1418, 80, 'Security Type', 'Card Only', 0, '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(1419, 80, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(1420, 80, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(1421, 80, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(1422, 80, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(1423, 80, 'Price', '700', 0, '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(1424, 80, 'Deposit', '2500', 1, '2022-09-29 05:27:59', '2022-09-29 05:50:57'),
(1425, 81, 'Engine', 'V4', 1, '2022-09-29 05:32:02', '2022-09-29 05:50:56'),
(1426, 81, 'Seats', '5', 1, '2022-09-29 05:32:02', '2022-09-29 05:50:57'),
(1427, 81, 'Doors', '4', 1, '2022-09-29 05:32:02', '2022-09-29 05:50:57'),
(1428, 81, 'Luggage', '1', 0, '2022-09-29 05:32:02', '2022-09-29 05:32:02'),
(1429, 81, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:32:02', '2022-09-29 05:32:02'),
(1430, 81, 'Cruise Control', 'Yes', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1431, 81, 'Bluetooth', 'Yes', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1432, 81, 'Automatic', 'Yes', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1433, 81, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1434, 81, 'Navigation', 'Yes', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1435, 81, 'Full Insurance', 'Yes', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1436, 81, 'Security Type', 'Card Only', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1437, 81, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1438, 81, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1439, 81, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1440, 81, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1441, 81, 'Price', '700', 0, '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(1442, 81, 'Deposit', '2500', 1, '2022-09-29 05:32:03', '2022-09-29 05:50:57'),
(1443, 82, 'Engine', 'V4', 1, '2022-09-29 05:34:23', '2022-09-29 05:50:56'),
(1444, 82, 'Seats', '5', 1, '2022-09-29 05:34:23', '2022-09-29 05:50:57'),
(1445, 82, 'Doors', '4', 1, '2022-09-29 05:34:23', '2022-09-29 05:50:57'),
(1446, 82, 'Luggage', '1', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1447, 82, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1448, 82, 'Cruise Control', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1449, 82, 'Bluetooth', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1450, 82, 'Automatic', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1451, 82, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1452, 82, 'Navigation', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1453, 82, 'Full Insurance', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1454, 82, 'Security Type', 'Card Only', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1455, 82, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1456, 82, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1457, 82, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1458, 82, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1459, 82, 'Price', '700', 0, '2022-09-29 05:34:23', '2022-09-29 05:34:23'),
(1460, 82, 'Deposit', '2500', 1, '2022-09-29 05:34:24', '2022-09-29 05:50:57'),
(1461, 83, 'Engine', 'V6', 1, '2022-09-29 05:37:04', '2022-09-29 05:50:56'),
(1462, 83, 'Seats', '5', 1, '2022-09-29 05:37:04', '2022-09-29 05:50:57'),
(1463, 83, 'Doors', '4', 1, '2022-09-29 05:37:04', '2022-09-29 05:50:57'),
(1464, 83, 'Luggage', '1', 0, '2022-09-29 05:37:04', '2022-09-29 05:37:04'),
(1465, 83, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:37:04', '2022-09-29 05:37:04'),
(1466, 83, 'Cruise Control', 'Yes', 0, '2022-09-29 05:37:04', '2022-09-29 05:37:04'),
(1467, 83, 'Bluetooth', 'Yes', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1468, 83, 'Automatic', 'Yes', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1469, 83, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1470, 83, 'Navigation', 'Yes', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1471, 83, 'Full Insurance', 'Yes', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1472, 83, 'Security Type', 'Card Only', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1473, 83, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1474, 83, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1475, 83, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1476, 83, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1477, 83, 'Price', '800', 0, '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(1478, 83, 'Deposit', '3000', 1, '2022-09-29 05:37:05', '2022-09-29 05:50:57'),
(1479, 84, 'Engine', 'V8', 1, '2022-09-29 05:39:43', '2022-09-29 05:50:56'),
(1480, 84, 'Seats', '4', 1, '2022-09-29 05:39:43', '2022-09-29 05:50:57'),
(1481, 84, 'Doors', '4', 1, '2022-09-29 05:39:43', '2022-09-29 05:50:57'),
(1482, 84, 'Luggage', '1', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1483, 84, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1484, 84, 'Cruise Control', 'Yes', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1485, 84, 'Bluetooth', 'Yes', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1486, 84, 'Automatic', 'Yes', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1487, 84, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1488, 84, 'Navigation', 'Yes', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1489, 84, 'Full Insurance', 'Yes', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1490, 84, 'Security Type', 'Card Only', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1491, 84, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1492, 84, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:39:43', '2022-09-29 05:39:43'),
(1493, 84, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:39:44', '2022-09-29 05:39:44'),
(1494, 84, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:39:44', '2022-09-29 05:39:44'),
(1495, 84, 'Price', '1900', 0, '2022-09-29 05:39:44', '2022-09-29 05:39:44'),
(1496, 84, 'Deposit', '4000', 1, '2022-09-29 05:39:44', '2022-09-29 05:50:57'),
(1497, 85, 'Engine', 'V4', 1, '2022-09-29 05:42:56', '2022-09-29 05:50:56'),
(1498, 85, 'Seats', '5', 1, '2022-09-29 05:42:56', '2022-09-29 05:50:57'),
(1499, 85, 'Doors', '4', 1, '2022-09-29 05:42:57', '2022-09-29 05:50:57'),
(1500, 85, 'Luggage', '1', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1501, 85, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1502, 85, 'Cruise Control', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1503, 85, 'Bluetooth', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1504, 85, 'Automatic', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1505, 85, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1506, 85, 'Navigation', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1507, 85, 'Full Insurance', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1508, 85, 'Security Type', 'Card Only', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1509, 85, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1510, 85, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1511, 85, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1512, 85, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1513, 85, 'Price', '1200', 0, '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(1514, 85, 'Deposit', '3000', 1, '2022-09-29 05:42:57', '2022-09-29 05:50:57'),
(1515, 86, 'Engine', 'V8', 1, '2022-09-29 05:45:34', '2022-09-29 05:50:56'),
(1516, 86, 'Seats', '4', 1, '2022-09-29 05:45:34', '2022-09-29 05:50:57'),
(1517, 86, 'Doors', '4', 1, '2022-09-29 05:45:34', '2022-09-29 05:50:57'),
(1518, 86, 'Luggage', '1', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1519, 86, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1520, 86, 'Cruise Control', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1521, 86, 'Bluetooth', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1522, 86, 'Automatic', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1523, 86, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1524, 86, 'Navigation', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1525, 86, 'Full Insurance', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1526, 86, 'Security Type', 'Card Only', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1527, 86, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1528, 86, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1529, 86, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1530, 86, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1531, 86, 'Price', '4500', 0, '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(1532, 86, 'Deposit', '5000', 1, '2022-09-29 05:45:34', '2022-09-29 05:50:57'),
(1533, 87, 'Engine', 'V4', 1, '2022-09-29 05:48:21', '2022-09-29 05:50:56'),
(1534, 87, 'Seats', '5', 1, '2022-09-29 05:48:21', '2022-09-29 05:50:57'),
(1535, 87, 'Doors', '4', 1, '2022-09-29 05:48:21', '2022-09-29 05:50:57'),
(1536, 87, 'Luggage', '1', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1537, 87, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1538, 87, 'Cruise Control', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1539, 87, 'Bluetooth', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1540, 87, 'Automatic', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1541, 87, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1542, 87, 'Navigation', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1543, 87, 'Full Insurance', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1544, 87, 'Security Type', 'Card Only', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1545, 87, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1546, 87, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1547, 87, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1548, 87, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:48:21', '2022-09-29 05:48:21'),
(1549, 87, 'Price', '2500', 0, '2022-09-29 05:48:22', '2022-09-29 05:48:22'),
(1550, 87, 'Deposit', '3000', 1, '2022-09-29 05:48:22', '2022-09-29 05:50:57'),
(1551, 88, 'Engine', 'V8', 1, '2022-09-29 05:50:55', '2022-09-29 05:50:56'),
(1552, 88, 'Seats', '5', 1, '2022-09-29 05:50:55', '2022-09-29 05:50:57'),
(1553, 88, 'Doors', '4', 1, '2022-09-29 05:50:55', '2022-09-29 05:50:57'),
(1554, 88, 'Luggage', '1', 0, '2022-09-29 05:50:55', '2022-09-29 05:50:55'),
(1555, 88, 'Free Pickup-Drop Off', 'Yes', 0, '2022-09-29 05:50:55', '2022-09-29 05:50:55'),
(1556, 88, 'Cruise Control', 'Yes', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1557, 88, 'Bluetooth', 'Yes', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1558, 88, 'Automatic', 'Yes', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1559, 88, 'Parking Sensor', 'Yes', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1560, 88, 'Navigation', 'Yes', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1561, 88, 'Full Insurance', 'Yes', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1562, 88, 'Security Type', 'Card Only', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1563, 88, 'Payment Type', 'Credit Card & Cash', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1564, 88, 'Free Cancellation', 'Yes', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1565, 88, '24/7 Customer Service', 'Yes', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1566, 88, 'Mileage Daily', 'KM250', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1567, 88, 'Price', '2500', 0, '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(1568, 88, 'Deposit', '3000', 1, '2022-09-29 05:50:56', '2022-09-29 05:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_gallery_images`
--

CREATE TABLE `vehicle_gallery_images` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_gallery_images`
--

INSERT INTO `vehicle_gallery_images` (`id`, `vehicle_id`, `image`, `created_at`, `updated_at`) VALUES
(295, 75, 'y3KHFWUsUFcB1iafGfSap1BWUxntiZs8TGRRP5Ky.jpg', '2022-09-29 02:53:31', '2022-09-29 02:53:31'),
(296, 75, 'J9Q9kFDQaXtUR2MCNelZ0YxlTxtJPlnKlZlf7Qpz.jpg', '2022-09-29 02:53:31', '2022-09-29 02:53:31'),
(297, 76, 'PgOEXxPGek3xsHeCGBO0d766kq8deoBjblQHZLBR.jpg', '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(298, 76, 'mJEQby3ziZwGX7Yd5pZSWwJBrs9NJd6GTu1XGzWj.jpg', '2022-09-29 03:01:54', '2022-09-29 03:01:54'),
(299, 76, 'HaJg3vokUzQN2cXoVZxHXP4ngsXRtonuVC8q0e1p.jpg', '2022-09-29 03:01:55', '2022-09-29 03:01:55'),
(300, 77, '3mCM4ZDrvQedCIwPe32viNRNPJfCDDzXYXxE5Sy6.jpg', '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(301, 77, 'FxC8YiJEfwXTmsy9KilQCMJDrqhewKjOBeKLfudZ.jpg', '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(302, 77, 'tQjd1KIdIoIe4ZGZ0MqpQl44BOnOxLqLOEfUxkXD.jpg', '2022-09-29 05:18:55', '2022-09-29 05:18:55'),
(303, 78, 'fGcQyE8atIJHCB9o7tyrqq3bl3K8cc4XAyiofEJV.png', '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(304, 78, 'LoYEkihu1cRd8xY1pL6Tpd5NaPKyPJsfVOfvukJm.png', '2022-09-29 05:22:16', '2022-09-29 05:22:16'),
(305, 79, '6LEe9NKhe1YtiwfiSi1lQJJEScjIde1n9UDR0Wkv.jpg', '2022-09-29 05:24:57', '2022-09-29 05:24:57'),
(306, 79, '0MjzTdU1kD1xoS9IGYsvA8HMlafxI4bBPtqtmzjf.jpg', '2022-09-29 05:24:57', '2022-09-29 05:24:57'),
(307, 79, 'b3V6jKu3cuhFA8o1IeRXa12JTGss9yFICZzAASC1.jpg', '2022-09-29 05:24:57', '2022-09-29 05:24:57'),
(308, 80, 'xQ1sbkTZN8HvFQk3kWO919V0KTZ0QROuLi5kZaDp.jpg', '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(309, 80, 'KutNrpnLRBF552mxCOUCyZKR20fjgfd1gb71myhg.jpg', '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(310, 80, 'MO2YnmwR9ejjqe7yodmKvAdfjqsRLCNCppwPFbdt.jpg', '2022-09-29 05:27:59', '2022-09-29 05:27:59'),
(311, 81, 'cg1LHW9OVp0hNeXzAAItsl5MzvEHFDS3Zaua1UTd.jpg', '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(312, 81, '9ME5OGSH9I1vPWqaEMjaiflSeF4HfHUFogy6ImdU.jpg', '2022-09-29 05:32:03', '2022-09-29 05:32:03'),
(313, 82, '2SpBc7uSwc2dVG0e7fZx8dNk1qNsDsMK88cHDRxD.jpg', '2022-09-29 05:34:24', '2022-09-29 05:34:24'),
(314, 82, 'zCcCeQ3CzZWmwzJTi4JL18OP5TJ9rLuJ6yfTDz5F.jpg', '2022-09-29 05:34:24', '2022-09-29 05:34:24'),
(315, 82, 'CKu7Ga8Tea9kBL3O3lFUjbM7p4rti6kgh6HcQbD9.jpg', '2022-09-29 05:34:24', '2022-09-29 05:34:24'),
(316, 83, 'YtNQjoA2P5XqjeY1qCG8WTxG0ViDZHMJch7fSxdi.jpg', '2022-09-29 05:37:05', '2022-09-29 05:37:05'),
(317, 83, 'xE8FdsVPtR4WiF2jSU3j7s7SRWe6P3qdY5rhR4kv.jpg', '2022-09-29 05:37:06', '2022-09-29 05:37:06'),
(318, 83, '18509xgH5aUq1KxT7es2eos3w66gkMmfjAA0kvE1.jpg', '2022-09-29 05:37:06', '2022-09-29 05:37:06'),
(319, 84, '50p68dojXsnypSLy1G23UJbBh3xr4IvM3uXONYeO.jpg', '2022-09-29 05:39:44', '2022-09-29 05:39:44'),
(320, 84, 'dP1UlXRmw7mIOSuxg7ZRampMlVUE6yjOvJfhNU6f.jpg', '2022-09-29 05:39:44', '2022-09-29 05:39:44'),
(321, 84, 'YdwRtOsUFyb2hxkuTrdWlWv3HZRztSPkp821uRCn.jpg', '2022-09-29 05:39:44', '2022-09-29 05:39:44'),
(322, 85, '6a51nfTtOTZtaqwx5MBXHQoLQ1P9Hak46h08GXwm.jpg', '2022-09-29 05:42:57', '2022-09-29 05:42:57'),
(323, 85, '8MOL4OhQdNBomk3kzmp9G6U6ka6x8YgPGds9bNAY.jpg', '2022-09-29 05:42:58', '2022-09-29 05:42:58'),
(324, 85, 'M2IIGONCLmCv61om2LcUHZKdauCqOqPGBkHybiGQ.jpg', '2022-09-29 05:42:58', '2022-09-29 05:42:58'),
(325, 86, '2l6GykjE254A74rYqTOWQ8qUPnr6xOLWbxoNpBLK.jpg', '2022-09-29 05:45:34', '2022-09-29 05:45:34'),
(326, 86, 'a5kP0IDBYigeN0R3lSLNKMozvyFlxCo1GDoQpjHB.jpg', '2022-09-29 05:45:35', '2022-09-29 05:45:35'),
(327, 86, 'QdyCzmmmSVL26q0WD3cdUnSahdeq7hu1awxg4kIA.jpg', '2022-09-29 05:45:35', '2022-09-29 05:45:35'),
(328, 87, 'vcyAzbL7sXh1GP00w8cX7GFOnwiF4wQMZ2CflfcZ.jpg', '2022-09-29 05:48:22', '2022-09-29 05:48:22'),
(329, 87, 'HPjDY3mBoHJUBClF1N6Moiduv7g4pwynWYVUi2V0.jpg', '2022-09-29 05:48:22', '2022-09-29 05:48:22'),
(330, 87, 'z4qENovWlKFYztaSoZjwzp2xRzypHvvKfnOw2TQ2.jpg', '2022-09-29 05:48:22', '2022-09-29 05:48:22'),
(331, 88, 'znzUon3a7AjkTKefT7Hjtz6W7YeFDPMi19OP9H6n.jpg', '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(332, 88, 'UoeT1LClpgDphKXs55wtI17csihQlzGgql6z3Bl8.jpg', '2022-09-29 05:50:56', '2022-09-29 05:50:56'),
(333, 88, 'kaoTKfkMhuKo3KMC2S7Bu4nIjOBD36hK7yi1NOYJ.jpg', '2022-09-29 05:50:56', '2022-09-29 05:50:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands_home`
--
ALTER TABLE `brands_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_gallery_images`
--
ALTER TABLE `vehicle_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `brands_home`
--
ALTER TABLE `brands_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1569;

--
-- AUTO_INCREMENT for table `vehicle_gallery_images`
--
ALTER TABLE `vehicle_gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
