-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 08:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hfh`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_desc` text DEFAULT NULL,
  `category_name` text DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img_path` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  `status` varchar(255) DEFAULT 'Active',
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `modified_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_desc`, `category_name`, `created_date`, `img_path`, `parent_id`, `status`, `modified_by`, `modified_date`, `created_by`) VALUES
(1, 'Craft Clusters', 'Craft Clusters', '2023-03-03 12:26:36', NULL, 0, 'Active', 0, NULL, 0),
(2, 'Design Challenge', 'Design Challenge', '2023-03-03 12:26:36', NULL, 0, 'Active', 0, NULL, 0),
(3, 'Master Classes', 'Master Classes', '2023-03-03 12:26:36', NULL, 0, 'Active', 0, NULL, 0),
(4, 'Webinars', 'Webinars', '2023-03-03 12:26:36', NULL, 0, 'Active', 0, NULL, 0),
(5, 'HandmadeKatha', 'HandmadeKatha', '2023-03-03 12:26:36', NULL, 0, 'Active', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `img_path` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` int(11) NOT NULL DEFAULT 0,
  `modified_date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`id`, `name`, `description`, `parent_id`, `img_path`, `created_by`, `created_datetime`, `modified_by`, `modified_date`) VALUES
(1, 'Student (Design Schools/ Undergraduate)- Rs. 500 (One-time payment, till you are a student)', 'Student (Design Schools/ Undergraduate)- Rs. 500 (One-time payment, till you are a student)', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:04'),
(2, 'Artisan- Rs. 1000 p.a.', 'Artisan- Rs. 1000 p.a.', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:13'),
(3, 'Small Artisan Group- Rs. 2000 p.a.', 'Small Artisan Group- Rs. 2000 p.a.', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(4, 'Professional- Rs. 2000 p.a.', 'Professional- Rs. 2000 p.a.', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(5, 'Designer- Rs. 2000 p.a.', 'Designer- Rs. 2000 p.a.', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(6, 'Individual- Rs. 2000 p.a.', 'Individual- Rs. 2000 p.a.', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(7, 'Organization (Brands) - Earnings up to 25 lakhs annual turnover- Rs. 5000 p.a.', 'Organization (Brands) - Earnings up to 25 lakhs annual turnover- Rs. 5000 p.a.', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(8, 'Organisation (Brands) - Earnings from 50 lakhs to 3 Cr annual turnover- Rs. 20000 p.a.', 'Organisation (Brands) - Earnings from 50 lakhs to 3 Cr annual turnover- Rs. 20000 p.a.', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(9, 'Organisation (Brands) - Earnings above 3 Cr + annual turnover Rs. 30000 p.a.', 'Organisation (Brands) - Earnings above 3 Cr + annual turnover Rs. 30000 p.a.', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(10, 'Design Schools - Rs. 5000 p.a', 'Design Schools - Rs. 5000 p.a', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(11, 'Colleges - Rs. 5000 p.a', 'Colleges - Rs. 5000 p.a', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(12, 'Educational Institution - Rs. 5000 p.a', 'Educational Institution - Rs. 5000 p.a', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:18'),
(13, 'NGO - Rs. 5000 p.a', 'NGO - Rs. 5000 p.a', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:04'),
(14, 'Foundation - Rs. 5000 p.a', 'Foundation - Rs. 5000 p.a', 0, NULL, 1, '2023-02-22 11:52:04', 0, '2023-02-22 12:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_desc` varchar(255) DEFAULT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Active',
  `event_city` varchar(500) DEFAULT NULL,
  `event_state` varchar(500) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_desc`, `event_name`, `category_id`, `img_path`, `status`, `event_city`, `event_state`, `created_date`) VALUES
(21, 'desccc asd', 'Event 123', 1, 'YGRtfdkx-Screenshot_20221110_125241.png', 'Active', NULL, NULL, '2023-02-27 09:49:30'),
(22, 'desccc fdsf', 'Event fsfsdfsdf', 1, 'YGRtfdkx-Screenshot_20221110_125241.png', 'Active', NULL, NULL, '2023-02-27 09:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `hibernate_sequence`
--

CREATE TABLE `hibernate_sequence` (
  `next_val` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hibernate_sequence`
--

INSERT INTO `hibernate_sequence` (`next_val`) VALUES
(34);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `quick_links`
--

CREATE TABLE `quick_links` (
  `id` int(11) NOT NULL,
  `description` longblob DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Active',
  `sub_title` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img_path` varchar(255) DEFAULT NULL,
  `display_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quick_links`
--

INSERT INTO `quick_links` (`id`, `description`, `status`, `sub_title`, `title`, `created_date`, `img_path`, `display_description`) VALUES
(1, 0x3c703e2641636972633b26233136303b3c2f703e0d0a0d0a3c703e48616e6420666f722048616e646d6164652028484648292069732061206e6574776f726b206f66206172746973616e732c2064657369676e6572732c204e474f7320616e6420637261667420706174726f6e732077686f2063616d6520746f67657468657220746f20636f6c6c6563746976656c7920726573706f6e6420746f20746865206861766f6320637265617465642062792074686520323032302070616e64656d69632e204f726967696e6174696e672066726f6d2061206465657020636f6e6365726e20666f722074686520737572766976616c206f662074686520637261667420616e642068616e646d61646520696e6475737472792c2048464820696e697469616c6c792066756e6374696f6e656420617320616e20696e666f726d616c20736f6369616c206d6564696120706c6174666f726d2e20546865206e6574776f726b20736f6f6e2070726f76656420746f206265206f6620696d6d656e73652076616c756520616e642072656c6576616e63652e2049742067656e65726174656420627573696e6573732c20656e61626c65642073686172696e67206f66206b6e6f776c656467652c20657870657269656e63652c20616e642061626f766520616c6c20626563616d65206120736f756e64696e6720626f61726420746f20726573706f6e6420746f2074686520756e707265636564656e746564206368616c6c656e6765732063726561746564206279207468652070616e64656d69632e205468652076696272616e637920616e6420656e746875736961736d206c656420746f20746865206465636973696f6e20746f20666f726d616c697365207468697320706c6174666f726d2e3c2f703e0d0a0d0a3c703e2641636972633b26233136303b3c2f703e0d0a0d0a3c703e48464820466f756e646174696f6e207761732072656769737465726564206f6e2031737420446563656d626572203230323020756e6465722053656374696f6e203820283129206f662074686520436f6d70616e696573204163742c20323031332e204d656e746f72736869702c20436f6c6c65637469766520416374696f6e2c204b6e6f776c656467652053686172696e6720616e6420566f6c756e74656572696e67206172652066756e64616d656e74616c20746f2074686520776f726b206f66204846482e3c2f703e0d0a0d0a3c703e2641636972633b26233136303b3c2f703e0d0a0d0a3c68323e566973696f6e3c2f68323e0d0a0d0a3c703e2641636972633b26233136303b3c2f703e0d0a0d0a3c703e546f2072652d696d6167696e652074686520496e6469616e2048616e646d61646520696e64757374727920617320612076696272616e742c20636f6e74656d706f7261727920696e6475737472792074686174206973206d65616e696e6766756c20666f7220746f64617920616e6420746f6d6f72726f772e3c2f703e0d0a0d0a3c703e2641636972633b26233136303b3c2f703e0d0a0d0a3c68323e4d697373696f6e3c2f68323e0d0a0d0a3c703e2641636972633b26233136303b3c2f703e0d0a0d0a3c703e546f20656e657267697365207468652068616e646d61646520696e647573747279207468726f756768206b6e6f776c656467652073686172696e672c2064657369676e20696e6e6f766174696f6e20616e64206275696c64696e6720656666656374697665206c696e6b6167657320696e207468652065636f73797374656d2e3c2f703e0d0a0d0a3c703e2641636972633b26233136303b3c2f703e0d0a0d0a3c68323e48464820266e646173683b2056616c7565732026616d703b2042656c696566733c2f68323e0d0a0d0a3c703e2641636972633b26233136303b3c2f703e0d0a0d0a3c756c3e0d0a093c6c693e0d0a093c68333e4172746973616e73206172652074686520636f72653c2f68333e0d0a0d0a093c703e546865726520776f756c64206265206e6f2048616e646d61646520696e64757374727920776974686f7574206172746973616e732e204f757220696e697469617469766573206d75737420726573756c7420696e20746865697220696e637265617365642077656c6c6265696e673b206e6f74206f6e6c79206c6976656c69686f6f64732c2062757420726573706563742c206b6e6f776c65646765207472616e736665722c20616e6420656e68616e636564206361706162696c69746965732e3c2f703e0d0a093c2f6c693e0d0a093c6272202f3e0d0a093c6c693e0d0a093c68333e4661697220427573696e657373205072616374696365733c2f68333e0d0a0d0a093c703e57652077696c6c20737570706f7274206661697220616e64206574686963616c20627573696e6573732070726163746963657320616e6420696e63726561736564207472757374206265747765656e206d656d62657273206f66207468652065636f2d73797374656d2e3c2f703e0d0a093c2f6c693e0d0a093c6272202f3e0d0a093c6c693e0d0a093c68333e466f637573206f6e20496e6e6f766174696f6e3c2f68333e0d0a0d0a093c703e496e6e6f766174696f6e206174206d756c7469706c65206c6576656c7320266e646173683b2064657369676e2c2070726f64756374696f6e2070726f636573732c20737570706c7920636861696e2c206d61726b6574206c696e6b6167657320616e6420757365206f6620746563686e6f6c6f677920697320657373656e7469616c20746f206d616b652074686520696e6475737472792076696272616e7420616e64206d65616e696e6766756c20666f7220746f6d6f72726f772e3c2f703e0d0a093c2f6c693e0d0a093c6272202f3e0d0a093c6c693e0d0a093c68333e4f70656e20746f206368616e67653c2f68333e0d0a0d0a093c703e57652063616e6e6f74207375636365656420696620776520776f726b20696e2073696c6f73206f722061726520696e73756c61722061626f7574206368616e67652e2045786368616e6765206f6620696465617320616e64206c6561726e696e67732c206372656174696e6720636f6e6e65637473207769746820627573696e65737320616e6420746563686e6f6c6f67792c20756e6465727374616e64696e67206d61726b65747320616e6420636f6e73756d6572732c2076656e747572652066756e64696e672065746320697320657373656e7469616c20666f72206865616c7468792067726f777468206f662074686520696e6475737472792e3c2f703e0d0a093c2f6c693e0d0a3c2f756c3e0d0a, 'Active', 'Hand for Handmade (HFH)', 'Hand for Handmade (HFH)', '2023-03-02 03:50:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `idsample` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`idsample`, `name`, `parentid`) VALUES
(1, 'Ankit', 2),
(2, 'HP', 0),
(3, 'Amit', 2),
(4, 'Nipesh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `slider_desc` varchar(255) DEFAULT NULL,
  `slider_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Active',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img_path`, `slider_desc`, `slider_name`, `status`, `created_date`) VALUES
(31, '5KGsBmCx-Screenshot_20221110_123940.png', 'desc tesdt', 'slider1 ', 'Active', '2022-12-30 12:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `designation` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT 0,
  `status` varchar(255) DEFAULT 'Active',
  `twitter_link` varchar(255) DEFAULT NULL,
  `user_desc` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_date`, `designation`, `facebook_link`, `img_path`, `linkedin_link`, `parent_id`, `status`, `twitter_link`, `user_desc`, `user_name`, `website`, `user_type`) VALUES
(28, '2023-02-27 03:56:15', 'desc', 'www.fb.com', '3O4dBJU9-Screenshot_20221110_124119.png', 'www.fb.com', 0, 'Active', 'www.fb.com', 'A development professional with deep roots in design, has essayed multiple roles in her stellar 19-year-long career. The alumna of National Institute of Design, an academician and the founder of Beeja, a project that holds the distinction of being both, a', 'Meghna ', 'www.we.com', '3'),
(33, '2022-12-30 07:01:25', 'desc', 'www.fb.com', '4xf4W8yP-Screenshot_20221110_125241.png', 'www.fb.com', 0, 'Active', 'www.fb.com', 'dds', 'Ankit', 'www.we.com', '1'),
(34, '2022-12-30 07:01:25', 'desc', 'www.fb.com', '4xf4W8yP-Screenshot_20221110_125241.png', 'www.fb.com', 0, 'Active', 'www.fb.com', 'dds', 'Ankit', 'www.we.com', '3'),
(35, '2023-02-27 03:56:15', 'desc', 'www.fb.com', '3O4dBJU9-Screenshot_20221110_124119.png', 'www.fb.com', 0, 'Active', 'www.fb.com', 'A development professional with deep roots in design, has essayed multiple roles in her stellar 19-year-long career. The alumna of National Institute of Design, an academician and the founder of Beeja, a project that holds the distinction of being both, a', 'Meghna ', 'www.we.com', '2'),
(36, '2023-02-27 04:22:15', 'desc', 'www.fb.com', '3O4dBJU9-Screenshot_20221110_124119.png', 'www.fb.com', 0, 'Active', 'www.fb.com', 'A development professional with deep roots in design, has essayed multiple roles in her stellar 19-year-long career. The alumna of National Institute of Design, an academician and the founder of Beeja, a project that holds the distinction of being both, a', 'Meghna ', 'www.we.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `anniversary` date NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'default.png',
  `uotp` int(11) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'active',
  `loginstatus` int(11) NOT NULL COMMENT '0 -> inactive , 1 -> active',
  `gender` varchar(10) NOT NULL,
  `pan_card_number` varchar(200) NOT NULL DEFAULT '',
  `pan_card_attachment` varchar(500) NOT NULL DEFAULT '',
  `city` varchar(500) NOT NULL DEFAULT '0',
  `landmark` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '0',
  `pincode` varchar(10) NOT NULL DEFAULT '',
  `membership_reason` text NOT NULL,
  `membership_work` text NOT NULL,
  `facebook_link` text DEFAULT NULL,
  `linkedin_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `google_plus_link` text DEFAULT NULL,
  `about_self` text DEFAULT NULL,
  `deviceid` varchar(255) NOT NULL,
  `android_device_token` text NOT NULL,
  `ios_device_token` text NOT NULL,
  `web_device_token` text NOT NULL,
  `webDeviceId` varchar(255) NOT NULL COMMENT 'web device id when login user ',
  `is2FA` int(11) NOT NULL COMMENT '0-false, 1-true',
  `webAccess` longtext NOT NULL,
  `mobileAccess` longtext NOT NULL,
  `agent_id` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `modified_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `name`, `email`, `mobile`, `username`, `password`, `dob`, `anniversary`, `image`, `uotp`, `status`, `loginstatus`, `gender`, `pan_card_number`, `pan_card_attachment`, `city`, `landmark`, `state`, `pincode`, `membership_reason`, `membership_work`, `facebook_link`, `linkedin_link`, `twitter_link`, `google_plus_link`, `about_self`, `deviceid`, `android_device_token`, `ios_device_token`, `web_device_token`, `webDeviceId`, `is2FA`, `webAccess`, `mobileAccess`, `agent_id`, `category_id`, `created_by`, `modified_by`, `created_datetime`, `modified_datetime`) VALUES
(2, 'Vaishnavi', 'Jasirarfat3@gmail.com', '9149545438', 'Vaishnavi', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'BDJPG2028B', '', '', '', 'Jammu & Kashmir', '', '', 'I work for a fashion boutique called ek\'dor, where we make customised clothing for individuals and also dye clothes using natural ingredients like pomegranate, marigold among other things.', NULL, NULL, NULL, NULL, 'We hunar crafts r the manufacturer of kashmiri hand embroidered, handwoven products like stoles,shawls,muflers etc having artisan base of around 50,both men and women.', '', '', '', '', '1d4cef09524489588f544ed4f3d72144', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Sunetra Lahiri', 'elemental.omega21@gmail.com', '9748763154', 'Sunetra Lahiri', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AAVPL9147K', '', '', '', 'West Bengal', '', '', 'I\'m from kutchi khatri community where we are doing work on ajrakh craft generation by generation. I\'m engineer by profession after completing of my study I join our craft and I\'m connected with our ajrakh craft from four years as a full time', NULL, NULL, NULL, NULL, 'I m a Nift alumini. Since last two years I have stopped making collections & channeled my creativity into working art that fuses textile, embroidery & conceptual ideas. I wish to explore the boundaries of creativity & promote my artisans who have been working with me for 18 years. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Ambika Magotra', 'Ambikamagotra@rediffmail.com', '9871553570', 'Ambika Magotra', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ADUPM5763H', '', '', '', 'New Delhi', '', '', 'I am desgner with 48 years of experience in handloom sector', NULL, NULL, NULL, NULL, 'I am a design graduate from NID, have been into academics from last 2 decades. I run a creative studio LaQeeronline, where I collaborate witj artisans to contemporize Indian crafts.', '', '', '', '', '', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Himalayan Blooms/ Pratibha Krishnaiah', 'himalayanblooms@gmail.com', '9980531844', 'Himalayan Blooms/ Pratibha Krishnaiah', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AABTH8690N', '', '', '', 'Uttrakhand', '', '', 'Handloom lover abs collector', NULL, NULL, NULL, NULL, 'Himalayan Blooms is a non-profit social enterprise that helps inculcate financial independence among the women in rural areas around Champawat in Uttarakhand, India. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Eklavya foundation/ Niyati Kukadia', 'tokarsustainabledesigns@gmail.com', '9429631738', 'Eklavya foundation/ Niyati Kukadia', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAATE0715C', '', '', '', 'Gujarat', '', '', 'I am the founder of CreCo (Creators\' Collective). CreCo ( CreCo.in) aims to help take independent creators and small businesses online and help elevate their brand.', NULL, NULL, NULL, NULL, 'Eklavya Foundation is a social sector organisation committed to achieve social justice, equity and human dignity for the marginalised and historically disadvantaged sections of Indian society. The foundation since its inception in 1990 is striving for constructive social intervention and engagement within the framework of civil, political and cultural rights of these people. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Designs by Maulshree', 'maulshreeonline@gmail.com', '8650922573', 'Designs by Maulshree', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ANKPG7891G', '', '', '', 'Uttrakhand', '', '', 'My name is Shivani Sharma and I have a jewellery brand based out of Assam where I am currently working with local artisans of Barpeta Assam. My pieces are made on pure silver and is Handmade from scarth. In Kharikajai we are trying to promote the Handmade craftsmanship of Assam in the global market and also encourage the Craftsmanship.', NULL, NULL, NULL, NULL, '1. To pass on the legacy of Indian crafts and traditions to the next generation of artisans through design skill development programs, traditional handicraft reviving initiatives and development of product ranges which are ecofriendly and reflect the richness of ancient times. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Shivani Sharma/\nTwo Trees Tale', 'twotreestale@gmail.com', '7304854836', 'Shivani Sharma/\nTwo Trees Tale', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAHCT3949D', '', '', '', 'Maharashtra', '', '', 'Hi, I?m Sachii Tripathii, the founder of ?Terracotta by Sachii?, a brand focused on traditional heritage potteries of India! I am a Ceramics & Glass Design post Graduate from the National Institute of Design Ahmedabad, and have been working with terracotta for the past 15 years! \nLook in the form for detailed answer', NULL, NULL, NULL, NULL, 'Hi, We as \'Two Trees Tale\', conceptualise, design and develop artistic products. Concept being that every product/design/consignment sold will result in planting two trees????...Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Majid Khatri', 'majidkhatri2010@gmail.com', '6356298242', 'Majid Khatri', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'AQRPK5456F', '', '', '', 'Gujarat', '', '', 'I Tariq Ahmad Mir ,Handicapped with 90% disability but cnt give up and got the training of sozni embroidery. My father is a master artisan and i i am committed to Revive my traditional craft .So i started an individual group of artisans namely Special Hands of kashmir. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'I am artisan of Traditional Ajrakh handblock print. Traditionally, Ajrakh is the name of a resist hand block printing and natural dyeing technique on cloth. Traditional \'Ajrakh\' involves around 16 stages of dyeing and resist printing using natural dyes and mordants. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Sanjay Guhathakurta', 'projectrangamaati@gmail.com', '8902152405', 'Sanjay Guhathakurta', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'AAZFP4743N', '', '', '', 'West Bengal', '', '', 'I am an Applied Art student from J J School of Arts( Mumbai). I paint abstracts and procure artworks for interior projects. All creative projects interest me and started making handmade soaps during the lockdown. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'Project rangamaati is a Grassroot initiative working with Artisans of Bengal to Empower them break free from Exploitation & Poverty by enabling them to achieve financial independence through Sales of their handicrafts and hand-loom products.', '', '', '', '', '', 0, '', '', '', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Milind Mane', 'manemilind@yahoo.com', '9137097769', 'Milind Mane', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'Abopm5654P', '', '', '', 'Maharashtra', '', '', 'Miharu was inspired by magnificent Indian crafts of Dokra and Baluchari. It started as a small home-hustle, driven by my passion for designing, working with two local artisans and a handful of products, and has grown to work with two clusters and multiple weavers. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'I work for a fashion boutique called ek\'dor, where we make customised clothing for individuals and also dye clothes using natural ingredients like pomegranate, marigold among other things.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Saad Khatri', 'khatrisaad1@gmail.com', '9724610552', 'Saad Khatri', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'DUGPK7182E', '', '', '', 'Gujarat', '', '', 'EthniiChic, a bespoke art studio for classic hand-painted and hand crafted designs that honour traditional arts, is inspired by the ancient art-forms of pastoral India. Our designs mirror our Culture through motifs, patterns, colours and sulptures from our rich heritage.', NULL, NULL, NULL, NULL, 'I\'m from kutchi khatri community where we are doing work on ajrakh craft generation by generation. I\'m engineer by profession after completing of my study I join our craft and I\'m connected with our ajrakh craft from four years as a full time', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Pavithra Muddaya', 'vimorhandloomfoundation@gmail.com', '9480317054', 'Pavithra Muddaya', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ACKPM4163C', '', '', '', 'Karnataka', '', '', 'Asama works with rural artisans of Assam to make beautiful home decor from natural fiber. All our products are handmade with simple tools and natural material. They are 100% eco-friendly and promote sustainable livelihood to rural women.', NULL, NULL, NULL, NULL, 'I am desgner with 48 years of experience in handloom sector', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Vasantha Kollu', 'vasantha.kollu@gmail.com', '61433976703', 'Vasantha Kollu', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', '', '', '', '', 'Australia', '', '', 'PROJECT 1000 , a non-profit social enterprise engaged in manufacture of home and lifestyle products made by rural women with the aim of Enhancing their social and economical status. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'Handloom lover abs collector', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Varun Parikh', 'Varun@creco.in', '8128388677', 'Varun Parikh', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'Ammpp8495j', '', '', '', 'Gujarat', '', '', 'I am deepely interested in craft based livelihoods, sustainable living, reuse and recycle. I love to travel and write.', NULL, NULL, NULL, NULL, 'I am the founder of CreCo (Creators\' Collective). CreCo ( CreCo.in) aims to help take independent creators and small businesses online and help elevate their brand.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Shivani Sharma', 'kkharikajai@gmail.com', '9101037850', 'Shivani Sharma', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'IRRPS0244A', '', '', '', 'Assam', '', '', 'Akshi Oil is a Mumbai based brand whose founder Amishi Kothari has studied and worked in flavours, fragrances and perfumery. Akshi provides essential oil fragrances unheard of in the oil market .. strawberry , passion fruit, chocolate and more to appeal to all ages for hair and skin protection. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'My name is Shivani Sharma and I have a jewellery brand based out of Assam where I am currently working with local artisans of Barpeta Assam. My pieces are made on pure silver and is Handmade from scarth. In Kharikajai we are trying to promote the Handmade craftsmanship of Assam in the global market and also encourage the Craftsmanship.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Sachii Tripathii', 'terracottabysachii@gmail.com', '9999319678', 'Sachii Tripathii', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AGBPT0541J', '', '', '', 'New Delhi', '', '', 'I am a designer,having family business of hand embroidery.we work on all types of garments like sarees,blouses,kurta,lehenga,gowns,etc,and recently I have started designing hand beaded jewellery and women accessories like necklace,chokers,earings,rings,etc we work for retail as well as wholesale.', NULL, NULL, NULL, NULL, 'Hi, I?m Sachii Tripathii, the founder of ?Terracotta by Sachii?, a brand focused on traditional heritage potteries of India! I am a Ceramics & Glass Design post Graduate from the National Institute of Design Ahmedabad, and have been working with terracotta for the past 15 years! \nLook in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Tariq Ahmed/ Special Hands of Kashmir', 'specialhandskashmir@gmail.com', '7006546430', 'Tariq Ahmed/ Special Hands of Kashmir', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Other', 'EHHPM6062A', '', '', '', 'Jammu & Kashmir', '', '', '?Wedesi ? is an humble initiative to promote artisans making Handmade , Homemade & Handcrafted products from India.\nEvery product listed here are handpicked from most passionate artisans and curators thats eco-friendly ,sustainable and affordable too . Let?s come together to make a difference in their lives through ours', NULL, NULL, NULL, NULL, 'I Tariq Ahmad Mir ,Handicapped with 90% disability but cnt give up and got the training of sozni embroidery. My father is a master artisan and i i am committed to Revive my traditional craft .So i started an individual group of artisans namely Special Hands of kashmir. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Nazifa Hararwala', 'nazifanawaz@gmail.com', '9821046693', 'Nazifa Hararwala', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AATPH1018A', '', '', '', 'Maharashtra', '', '', 'Have emailed already', NULL, NULL, NULL, NULL, 'I am an Applied Art student from J J School of Arts( Mumbai). I paint abstracts and procure artworks for interior projects. All creative projects interest me and started making handmade soaps during the lockdown. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Miharu (Proprietorship)- Parul Bajoria', 'bengalcraftmart@gmail.com', '9748466555', 'Miharu (Proprietorship)- Parul Bajoria', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ADVPB1861C', '', '', '', 'West Bengal', '', '', 'I work with Anant National University. My work basically involves documentation and compliance with Government pertaining to University', NULL, NULL, NULL, NULL, 'Miharu was inspired by magnificent Indian crafts of Dokra and Baluchari. It started as a small home-hustle, driven by my passion for designing, working with two local artisans and a handful of products, and has grown to work with two clusters and multiple weavers. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Roshni P- EthniiChic', 'ethnichic2014@gmail.com', '9900238882', 'Roshni P- EthniiChic', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AQEPP5811G', '', '', '', 'Karnataka', '', '', 'I have been part of a NGO, The Crafts Council of India,(CCI),since 1999. CCI works for the Handicraft and Handloom Sector.', NULL, NULL, NULL, NULL, 'EthniiChic, a bespoke art studio for classic hand-painted and hand crafted designs that honour traditional arts, is inspired by the ancient art-forms of pastoral India. Our designs mirror our Culture through motifs, patterns, colours and sulptures from our rich heritage.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Asama Enterprise LLP- Richika Agarwalla', 'asama.enterprise@gmail.com', '9435130314', 'Asama Enterprise LLP- Richika Agarwalla', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'ABRFA9961G', '', '', '', 'Assam', '', '', 'HFH core committee member', NULL, NULL, NULL, NULL, 'Asama works with rural artisans of Assam to make beautiful home decor from natural fiber. All our products are handmade with simple tools and natural material. They are 100% eco-friendly and promote sustainable livelihood to rural women.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Ritu Saraf - Project 1000', 'ritu.saraf@technocraftgroup.com', '9821166292', 'Ritu Saraf - Project 1000', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AACTS1084J', '', '', '', 'Maharashtra', '', '', 'I?m a multi-disciplinary artist who loves working with lines, forms, colours and textures. At present I am engaging with folk arts from across the world ? with a special focus on India. \nLook in the form for detailed answer', NULL, NULL, NULL, NULL, 'PROJECT 1000 , a non-profit social enterprise engaged in manufacture of home and lifestyle products made by rural women with the aim of Enhancing their social and economical status. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Anuradha Pati', 'anuradhapati@gmail.com', '8374357777', 'Anuradha Pati', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ADTPP2725M', '', '', '', 'Karnataka', '', '', '', NULL, NULL, NULL, NULL, 'I am deepely interested in craft based livelihoods, sustainable living, reuse and recycle. I love to travel and write.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Amishi Kothari / Akshi Naturals', 'akshinaturals@gmail.com', '9029025137', 'Amishi Kothari / Akshi Naturals', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AAHPK0079J', '', '', '', 'Maharashtra', '', '', 'Worked as a senior consultant for 5 years at a retail store, Starmark, an Emami grp, venture.At present working as an Art Consultant, with an art gallery in the name of Masters Collection Art Gallery.', NULL, NULL, NULL, NULL, 'Akshi Oil is a Mumbai based brand whose founder Amishi Kothari has studied and worked in flavours, fragrances and perfumery. Akshi provides essential oil fragrances unheard of in the oil market .. strawberry , passion fruit, chocolate and more to appeal to all ages for hair and skin protection. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Imran Sahikh', 'meher.emb@gmail.com', '9967305735', 'Imran Sahikh', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'CGNPS0575F', '', '', '', 'Maharashtra', '', '', 'Will share later', NULL, NULL, NULL, NULL, 'I am a designer,having family business of hand embroidery.we work on all types of garments like sarees,blouses,kurta,lehenga,gowns,etc,and recently I have started designing hand beaded jewellery and women accessories like necklace,chokers,earings,rings,etc we work for retail as well as wholesale.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Thara Jaria Toronto', '', '+1 (416) 705-3385', 'Thara Jaria Toronto', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', '', '', '', '', 'Toronto', '', '', 'I am a journalist and content consultant with over 25 years of experience. I have worked in several media organisations. At the moment I am a columnist with Money Control and edit Travelgram, a digital publication on travel, hospitality, food and drink. Look in the form for detailed answer', NULL, NULL, NULL, NULL, '?Wedesi ? is an humble initiative to promote artisans making Handmade , Homemade & Handcrafted products from India.\nEvery product listed here are handpicked from most passionate artisans and curators thats eco-friendly ,sustainable and affordable too . Let?s come together to make a difference in their lives through ours', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Darpana Athale', 'darpana@sarvasva.com', '9371199441', 'Darpana Athale', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AHSPA4763H', '', '', '', 'Goa', '', '', 'I am very passionate about Indian weaves and handicrafts and my aim is to introduce people to our beautiful handicrafts and weaves and make them proud of our heritage. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'Have emailed already', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Ravinderkaur Kundi', 'guravin@gmail.com', '9974339797', 'Ravinderkaur Kundi', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ASDPK9704G', '', '', '', 'Gujarat', '', '', 'iam a design professional working in the sphere of handwoven textiles. iam also a entrepreneur in the process of establishing a label in contemporary womenswear, home decor and accessories. i like to work with weaves in Jamdani, natural dyed cotton & silk and kala cotton fabrics. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'I work with Anant National University. My work basically involves documentation and compliance with Government pertaining to University', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'RAJESHWARI ENDAPALLI', 'secretary.cci@gmail.com', '9443946789', 'RAJESHWARI ENDAPALLI', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AAEPR6885J', '', '', '', 'Tamil Nadu', '', '', 'I\'m a writer and editor. I edited The Taj Magazine, a travel and lifestyle magazine on India, for over 20 years. I subsequently authored and self-published a coffeetable book titled \'Indigenius Artists - India\'. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'I have been part of a NGO, The Crafts Council of India,(CCI),since 1999. CCI works for the Handicraft and Handloom Sector.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Sudakshina Banerjee', 'sudakshina@coppre.in', '9822534198', 'Sudakshina Banerjee', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ALHPS2574B', '', '', '', 'Maharashtra', '', '', 'I myself is a textile designer from Assam. I have been working as a cluster designer DC (Handloom), DC(Handicraft), NGOs and associations. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'HFH core committee member', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Bandana Agarwal / Bandiworks', 'bandana.agarwal@gmail.com', '8130888444', 'Bandana Agarwal / Bandiworks', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AACPA1073D', '', '', '', 'Uttar Pradesh', '', '', 'DITI, in Sanskrit means idea and imagination. The brand started with a simple practice of creating handmade wearable art pieces. Exploring different mediums, like leftover fabric, wooden pieces, jute and stones collected from travels. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'I?m a multi-disciplinary artist who loves working with lines, forms, colours and textures. At present I am engaging with folk arts from across the world ? with a special focus on India. \nLook in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Ashish Ahuja', 'ashishahuja401@hotmail.com', '9819261194', 'Ashish Ahuja', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'AGBPA1820B', '', '', '', 'Maharashtra', '', '', 'I am currently the Chairperson of The Crafts Council of India Chennai.I have been working iin the crafts sector as a volunteer since 1980.and in various capacities in CCI.Look in the form for detailed answer', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Sonal Desai', 'sonal.desai68@gmail.com', '9830337473', 'Sonal Desai', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ADPPD66983C', '', '', '', 'West Bengal', '', '', 'YU, which is sanskrit for ?the ray of light?. Since our birth we are in the process of expansion. Little bit more knowledge, little bit more happiness, little bit more life. Hence most probably, Brihadaranyaka Upanishad coined the concept- AHAM- BRAHASMI. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'Worked as a senior consultant for 5 years at a retail store, Starmark, an Emami grp, venture.At present working as an Art Consultant, with an art gallery in the name of Masters Collection Art Gallery.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Sundeep Kumar', 'sundeepji@gmail.com', '9810017641', 'Sundeep Kumar', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'AAAPK0853B', '', '', '', 'New Delhi', '', '', 'I am an alumnus of the National Institute of Design and has experience of about 3 decades working for sustainable development of Handicrafts, Handlooms & MSME sectors through Design. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'Will share later', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Deepali Nandwani', 'deepali.nandwani@gmail.com', '9820135202', 'Deepali Nandwani', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ABUPN5835F', '', '', '', 'Maharashtra', '', '', 'I\'m a Textile Designer with 15 years of experience in home furnishings and garments. I have been running a customized clothing business for the last 13 year. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'I am a journalist and content consultant with over 25 years of experience. I have worked in several media organisations. At the moment I am a columnist with Money Control and edit Travelgram, a digital publication on travel, hospitality, food and drink. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Alpana Saraf', 'alpana235@gmail.com', '9820510881', 'Alpana Saraf', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AIOPS9612C', '', '', '', 'Maharashtra', '', '', 'KADAM is an organisation for developing the rural communities. Our vision is to tackle the roots and not the symptoms of poverty in rural areas leading to unskilled youth migration to urban cities. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'I am very passionate about Indian weaves and handicrafts and my aim is to introduce people to our beautiful handicrafts and weaves and make them proud of our heritage. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Vindhya Chidipothu', 'chidipothuvindhya@gmail.com', '9063582567', 'Vindhya Chidipothu', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'afbpc1024l', '', '', '', 'Andhra Pradesh', '', '', 'I am a designer working on hand block print and hand dyeing fabric looking forward to add women based setup where we can together move ahead with the hand embroidery as well. Having a goal in my mind to work together on garments ,I am also intending to set up a unit where we can make other products apart from garments.', NULL, NULL, NULL, NULL, 'iam a design professional working in the sphere of handwoven textiles. iam also a entrepreneur in the process of establishing a label in contemporary womenswear, home decor and accessories. i like to work with weaves in Jamdani, natural dyed cotton & silk and kala cotton fabrics. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Sunita Nair', 'nairsunita4@gmail.com', '9820019137', 'Sunita Nair', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ADCPN1514B', '', '', '', 'Maharashtra', '', '', 'working in the development sector for the past 21 years in education and livelihoods.', NULL, NULL, NULL, NULL, 'I\'m a writer and editor. I edited The Taj Magazine, a travel and lifestyle magazine on India, for over 20 years. I subsequently authored and self-published a coffeetable book titled \'Indigenius Artists - India\'. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Sheikh Moidun Nilufar', 'sheikh.nilufar0@gmail.com', '7002463711', 'Sheikh Moidun Nilufar', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AHUPN5706B', '', '', '', 'Assam', '', '', 'I?m primarily a Metal Enamel Artist. Traditionally in india, this art form is known as Meenakari kaam. (Fusing glass on metal at 750- 800 degrees) Under the brand name EBA , I?ve been making contemporary enamel art for mainly wall decor and home decor products. I also use stained glass mosaic and resin in my work to complement with enamel art. I?ve been looking to add more traditional art forms in my work, collaborate with artisans and designers.', NULL, NULL, NULL, NULL, 'I myself is a textile designer from Assam. I have been working as a cluster designer DC (Handloom), DC(Handicraft), NGOs and associations. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'DITI MISTRY', 'diti.mistry@gmail.com', '9871708516', 'DITI MISTRY', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'CFJPM6842N', '', '', '', 'New Delhi', '', '', 'Am a design profession as well as a technical faculty in the field of fashion, with a passion and love for handmade, handcrafted products.', NULL, NULL, NULL, NULL, 'DITI, in Sanskrit means idea and imagination. The brand started with a simple practice of creating handmade wearable art pieces. Exploring different mediums, like leftover fabric, wooden pieces, jute and stones collected from travels. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Gita Ram', 'gitaram700@gmail.com', '9176614103', 'Gita Ram', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ACUPG1484G', '', '', '', 'Tamil Nadu', '', '', 'I am tectile artist. I have been making tapestry using yarn, metal and clay. These tapestries tell stories of people and their lived places, of pull and push. My work explores tension in coexistence between old and new communities.', NULL, NULL, NULL, NULL, 'I am currently the Chairperson of The Crafts Council of India Chennai.I have been working iin the crafts sector as a volunteer since 1980.and in various capacities in CCI.Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Lalita', 'anuradha@syu.co.in', '7592864739', 'Lalita', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'BLHPS4211A', '', '', '', 'Orrisa', '', '', 'Gurbanji\' is the brainchild of Divya Prasanna, a professionally trained Architect who has worked for more than a decade as an Architect & Designer. Then, choosing to focus on the narrative of handmade products. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'YU, which is sanskrit for ?the ray of light?. Since our birth we are in the process of expansion. Little bit more knowledge, little bit more happiness, little bit more life. Hence most probably, Brihadaranyaka Upanishad coined the concept- AHAM- BRAHASMI. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Bindoo Ranjan', 'bindooranjan7@gmail.com', '9810164342', 'Bindoo Ranjan', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AGCPR0296F', '', '', '', 'New Delhi', '', '', 'The India Craft Project (TICP) co-creates products and experiences with traditional artisans across crafts, pan India. We are a fledgling start up and are working towards widening the scope of Indian Crafts and come at the intersection of DESIGN | SERVICES | EXPERIENCES.', NULL, NULL, NULL, NULL, 'I am an alumnus of the National Institute of Design and has experience of about 3 decades working for sustainable development of Handicrafts, Handlooms & MSME sectors through Design. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Bhagyashree Kamat', 'shreenift@gmail.com', '9449023555', 'Bhagyashree Kamat', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AMAPP8358A', '', '', '', 'Karnataka', '', '', 'Hi! I am Kavya, a recent Finance graduate. I am registering to be a HFH member because I have been following you all since the initial days of the pandemic, and I feel like you guys are doing a great job! I want to contribute too, to give artisans a better life. I have always been drawn towards the artisanal work of India. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'I\'m a Textile Designer with 15 years of experience in home furnishings and garments. I have been running a customized clothing business for the last 13 year. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Payal Nath- KADAM HAT', 'info@kadamindia.org', '9804141584', 'Payal Nath- KADAM HAT', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAAAK7998N\n/ 9331215060- mobile', '', '', '', 'West Bengal', '', '', 'I design and produce handcrafted jewellery was doing solely export based from Delhi to the US,Australia and France.Since 2012 closed that company came back and still making jewellery .', NULL, NULL, NULL, NULL, 'KADAM is an organisation for developing the rural communities. Our vision is to tackle the roots and not the symptoms of poverty in rural areas leading to unskilled youth migration to urban cities. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Swati Davariya', 'swatidavariya@gmail.com', '7874255488', 'Swati Davariya', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'Aehpg3550j', '', '', '', 'Gujarat', '', '', 'About ketki India : Art and craft is the oldest way humans have been expressing themselves. Blue pottery is widely recognised as a traditional craft of Jaipur. It is the only pottery style in the world which does not use clay in it?s ingredients. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'I am a designer working on hand block print and hand dyeing fabric looking forward to add women based setup where we can together move ahead with the hand embroidery as well. Having a goal in my mind to work together on garments ,I am also intending to set up a unit where we can make other products apart from garments.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Shyamla Nath', 'snathdesigns@gmail.com', '9820087989', 'Shyamla Nath', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ADAPN3286E', '', '', '', 'Maharashtra', '', '', 'I work as a freelance e-commerce resource. My previous jobs have been in Fabindia, Ambara and other retail spaces. My main interest lies in handicrafts and handlooms and I want to commit myself to helping that sector survive.', NULL, NULL, NULL, NULL, 'working in the development sector for the past 21 years in education and livelihoods.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'EBA | enamels by Aditi Sheth', 'enamelsbyaditi@gmail.com', '9833027894', 'EBA | enamels by Aditi Sheth', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AAIPS1506M', '', '', '', 'Maharashtra', '', '', 'Have had a deep interest in the visual and performing arts for the past 40 years and have also been involved in the handloom and handicraft sectors through my work at Ambara', NULL, NULL, NULL, NULL, 'I?m primarily a Metal Enamel Artist. Traditionally in india, this art form is known as Meenakari kaam. (Fusing glass on metal at 750- 800 degrees) Under the brand name EBA , I?ve been making contemporary enamel art for mainly wall decor and home decor products. I also use stained glass mosaic and resin in my work to complement with enamel art. I?ve been looking to add more traditional art forms in my work, collaborate with artisans and designers.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Fakhera Jadliwala', 'fasif91@gmail.com', '9820696559', 'Fakhera Jadliwala', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AAVP J 2552R', '', '', '', 'Maharashtra', '', '', 'I live and work as a Dutch artist and textile designer in Gujarat, India. Living between two cultures has become the starting point of my work. I combine the design and production of limited edition textiles - in collaboration with Indian craftspeople ? with research and writing. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'Am a design profession as well as a technical faculty in the field of fashion, with a passion and love for handmade, handcrafted products.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Sadhvi Jawa', 'sadhvijawa@gmail.com', '9986802735', 'Sadhvi Jawa', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ARWPJ7345J', '', '', '', 'Karnataka', '', '', 'Chandrashekhar Bheda prolific textiles and handicrafts product designer and artist has in the last 32 years been discovering new possibilities for the textiles and handcraft industry. Alumnus of India\'s premier design and art schools, the National Institute of Design (AEP 1988), Ahmedabad, the Sir J.J. School of Arts, Bombay (1982), and a stint at NIFT Delhi 1989; Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'I am tectile artist. I have been making tapestry using yarn, metal and clay. These tapestries tell stories of people and their lived places, of pull and push. My work explores tension in coexistence between old and new communities.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Gurbanji/ Divya Kumar', 'gurbanjidesigns@gmail.com', '8971027182', 'Gurbanji/ Divya Kumar', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AOXPK5261L', '', '', '', 'Karnataka', '', '', 'Master weaver working on handloom, training villagers to generate employment through handloom', NULL, NULL, NULL, NULL, 'Gurbanji\' is the brainchild of Divya Prasanna, a professionally trained Architect who has worked for more than a decade as an Architect & Designer. Then, choosing to focus on the narrative of handmade products. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Saumya Pankaj\nThe India Craft Project', 'theindiacraftproject@gmail.com', '7042547430', 'Saumya Pankaj\nThe India Craft Project', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AARCA4019M', '', '', '', 'Uttar Pradesh', '', '', 'same as what you have for website.', NULL, NULL, NULL, NULL, 'The India Craft Project (TICP) co-creates products and experiences with traditional artisans across crafts, pan India. We are a fledgling start up and are working towards widening the scope of Indian Crafts and come at the intersection of DESIGN | SERVICES | EXPERIENCES.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Kavya Nallapati', 'kavyanallapati.97@gmail.com', '8008464384', 'Kavya Nallapati', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AYDPN6952B', '', '', '', 'Telangana', '', '', '', NULL, NULL, NULL, NULL, 'Hi! I am Kavya, a recent Finance graduate. I am registering to be a HFH member because I have been following you all since the initial days of the pandemic, and I feel like you guys are doing a great job! I want to contribute too, to give artisans a better life. I have always been drawn towards the artisanal work of India. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Narola Shilu Ao', 'narolasao@gmail.com', '8575432644', 'Narola Shilu Ao', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'BYZPA9691K', '', '', '', 'Nagaland', '', '', 'DSS is a 38 year old organisation dedicated to develop ment of women and children in both farm and off farm sector. It has been promoting women led craft clusters in Odisha.', NULL, NULL, NULL, NULL, 'I design and produce handcrafted jewellery was doing solely export based from Delhi to the US,Australia and France.Since 2012 closed that company came back and still making jewellery .', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'KETKI INDIA / Sonali', 'sonalify@gmail.com', '8890499678', 'KETKI INDIA / Sonali', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ARXPA0132B', '', '', '', 'Rajasthan', '', '', 'I am a fashion and textile designer, curator and revivalist, working as custodian, consultant and volunteer in various institutions and foundations involved in revival and promotion of Indian crafts, textiles and art. In 2019, I conceptualised and curated ?Santati?, a multi disciplinary art exhibition commemorating 150 years of Mahatma Gandhi.', NULL, NULL, NULL, NULL, 'About ketki India : Art and craft is the oldest way humans have been expressing themselves. Blue pottery is widely recognised as a traditional craft of Jaipur. It is the only pottery style in the world which does not use clay in it?s ingredients. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Ria Patel', 'patel.ria@gmail.com', '9845734910', 'Ria Patel', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AEXPP0342M', '', '', '', 'Karnataka', '', '', 'I am a Madhubani (Mithila) Artist I am based in Bangalore. I also conduct online classes.', NULL, NULL, NULL, NULL, 'I work as a freelance e-commerce resource. My previous jobs have been in Fabindia, Ambara and other retail spaces. My main interest lies in handicrafts and handlooms and I want to commit myself to helping that sector survive.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Jaya Mani', 'jaya.mani60@gmail.com', '9845031387', 'Jaya Mani', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AAKPM9584F', '', '', '', 'Karnataka', '', '', 'We work with Ikat weavers of Odisha to create a range of Stoles, Scarves, Sarees, Jewellery and Free-Size Clothing. Our products are perfect as unique handwoven gift items for special Occasions. We also take bulk orders for the gifting market.', NULL, NULL, NULL, NULL, 'Have had a deep interest in the visual and performing arts for the past 40 years and have also been involved in the handloom and handicraft sectors through my work at Ambara', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Studio Bhatt \nEline', 'elinegroeneweg@gmail.com', '9805077589', 'Studio Bhatt \nEline', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ADFPE2990P', '', '', '', 'Gujarat', '', '', 'Somaiya Kala Vidya, a division of K.J. Somaiya Gujarat Trust based in Adipur, is an institution of education for traditional artisans of Kutch.Its mission is to preserve and promote traditional arts; its strengths are deep understanding of culture and arts, Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'I live and work as a Dutch artist and textile designer in Gujarat, India. Living between two cultures has become the starting point of my work. I combine the design and production of limited edition textiles - in collaboration with Indian craftspeople ? with research and writing. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Chandrashekhar Bheda', 'chandrashekharbheda@gmail.com', '9810780702', 'Chandrashekhar Bheda', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'AAGPB8082K', '', '', '', 'Uttar Pradesh', '', '', 'Hi, I\'m an undergraduate student from IFT, MSU. I have always been keen in being a part of activities which help uplift human life and society such as creating awareness about the inescapable affects of smoking through visual graphics. In high school, Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'Chandrashekhar Bheda prolific textiles and handicrafts product designer and artist has in the last 32 years been discovering new possibilities for the textiles and handcraft industry. Alumnus of India\'s premier design and art schools, the National Institute of Design (AEP 1988), Ahmedabad, the Sir J.J. School of Arts, Bombay (1982), and a stint at NIFT Delhi 1989; Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Gyan vidya hastshilp/ Hastkaar by Bhartesh Vaibhav', 'bharatjain931@gmail.com', '9928610076', 'Gyan vidya hastshilp/ Hastkaar by Bhartesh Vaibhav', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'AOLPJ5602G', '', '', '', 'Rajasthan', '', '', 'I\'m a Lifestyle Accessory Designer, studied at NIFT & NID. Passionate about crafts and visual documentation.', NULL, NULL, NULL, NULL, 'Master weaver working on handloom, training villagers to generate employment through handloom', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Project Beeja', 'meghnaajit@gmail.com', '9818212177', 'Project Beeja', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'ABPQA6994J', '', '', '', 'Uttar Pradesh', '', '', 'TrulyTribal strives to preserve and propapate the true Indian art and craftsmanship by bridging the gap between the consumers and the artists. We aim to strengthen the foundation of the Indian tribal art. Our endeavour is to provide customers hand crafted products which help, support and encourage the vast and diverse craftsmanship of India.', NULL, NULL, NULL, NULL, 'same as what you have for website.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Meghna Ajit', 'meghnaajit@gmail.com', '9818212177', 'Meghna Ajit', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'Same as Meghna Ajit', '', '', '', 'Uttar Pradesh', '', '', 'Totum Crafts is an organisation that works with underprivileged women in Pune to produce handmade bags at home as they are housebound got social or cultural reasons and are unable to join the workforce. Their primary roles are as caters for the young , the old or the disabled.', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Darbar Sahitya Sansada- Kedar Chaudhury', 'darbar4@rediffmail.com', '9861022440', 'Darbar Sahitya Sansada- Kedar Chaudhury', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'AAATD1860H', '', '', '', 'Orrisa', '', '', 'I belong to the Muslim Khatri community. My father is National award winning Rogan Artist. For many centuries, my family was practicing this craft for embellishing textiles for use by local communities around us in Nirona region of Kutch. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'DSS is a 38 year old organisation dedicated to develop ment of women and children in both farm and off farm sector. It has been promoting women led craft clusters in Odisha.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `user_master` (`id`, `name`, `email`, `mobile`, `username`, `password`, `dob`, `anniversary`, `image`, `uotp`, `status`, `loginstatus`, `gender`, `pan_card_number`, `pan_card_attachment`, `city`, `landmark`, `state`, `pincode`, `membership_reason`, `membership_work`, `facebook_link`, `linkedin_link`, `twitter_link`, `google_plus_link`, `about_self`, `deviceid`, `android_device_token`, `ios_device_token`, `web_device_token`, `webDeviceId`, `is2FA`, `webAccess`, `mobileAccess`, `agent_id`, `category_id`, `created_by`, `modified_by`, `created_datetime`, `modified_datetime`) VALUES
(70, 'Lavina Baldota', 'lavinabaldota@yahoo.co.in', '9980552689', 'Lavina Baldota', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AEUPB16493', '', '', '', 'Karnataka', '', '', 'Okhai offers handcrafted apparel and lifestyle products created by rural artisans from across India. These artisans are gifted with the talent and traditional skills to craft exquisite designs in styles that are unique to their culture and heritage.', NULL, NULL, NULL, NULL, 'I am a fashion and textile designer, curator and revivalist, working as custodian, consultant and volunteer in various institutions and foundations involved in revival and promotion of Indian crafts, textiles and art. In 2019, I conceptualised and curated ?Santati?, a multi disciplinary art exhibition commemorating 150 years of Mahatma Gandhi.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Vidushini Prasad', 'vidushini@gmail.com', '9611569498', 'Vidushini Prasad', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'BLAPP07740Q', '', '', '', 'Karnataka', '', '', 'After 12th class one of my teacher recommended me to join the ( Chinar 9 jawan club Baramulla).I have been keen on learning fashion designing and start my own business.After 6 months traning,Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'I am a Madhubani (Mithila) Artist I am based in Bangalore. I also conduct online classes.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'NEELI TITLEE- Manisha Chawda', 'manisha@neelititlee.com', '9538128522', 'NEELI TITLEE- Manisha Chawda', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AIOPC0797J', '', '', '', 'Gujarat', '', '', 'TRINJAN is the symbol of caring and sharing in Punjabi community. Under this umbrella, women used to spin, weave, knit, sing, celebrate, appreciate and create different kinds of artistic products. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'We work with Ikat weavers of Odisha to create a range of Stoles, Scarves, Sarees, Jewellery and Free-Size Clothing. Our products are perfect as unique handwoven gift items for special Occasions. We also take bulk orders for the gifting market.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Somaiya Kala Vidya', 'kalavidya@somaiya.edu', '80763 12793', 'Somaiya Kala Vidya', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAATK2133Q', '', '', '', 'Gujarat', '', '', 'Commitment to Kashmir (CtoK), a Registered Trust was started in 2011; inspired by the Late LC Jain, former Member Planning Commission, activist, economist, Gandhian, founder of the craft marketing movement. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'Somaiya Kala Vidya, a division of K.J. Somaiya Gujarat Trust based in Adipur, is an institution of education for traditional artisans of Kutch.Its mission is to preserve and promote traditional arts; its strengths are deep understanding of culture and arts, Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Zainab A. Nadvi', 'zainab.nadvi@gmail.com', '9711598830', 'Zainab A. Nadvi', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'CBXPN2624K', '', '', '', 'Gujarat', '', '', 'CIBART is promoting bamboo livelihoods and to work with rural communities to reduce poverty, enhance livelihood security and improve the quality of life by using bamboo, through technology applications and skills building', NULL, NULL, NULL, NULL, 'Hi, I\'m an undergraduate student from IFT, MSU. I have always been keen in being a part of activities which help uplift human life and society such as creating awareness about the inescapable affects of smoking through visual graphics. In high school, Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Swati Basanwal', 'swatibasanwal@gmail.com', '9986755387', 'Swati Basanwal', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AUVPB1502H', '', '', '', 'West Bengal', '', '', 'Our mission is to create conscious sustainable fashion where we are taking care of our environmental cost and not passing it on to the future. For us, design is creative, problem-solving. Any problem, be it post-tsunami trauma, farmer suicides, garbage littering, weavers losing their job, Upasana looks at social issues as a space to exercise for change.', NULL, NULL, NULL, NULL, 'I\'m a Lifestyle Accessory Designer, studied at NIFT & NID. Passionate about crafts and visual documentation.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Truly Tribal- Shweta Menon', 'trulytribal.in@gmail.com', '9511909951', 'Truly Tribal- Shweta Menon', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'ABGPM4074K', '', '', '', 'Maharashtra', '', '', 'Artisans Sustainable Development Foundation', NULL, NULL, NULL, NULL, 'TrulyTribal strives to preserve and propapate the true Indian art and craftsmanship by bridging the gap between the consumers and the artists. We aim to strengthen the foundation of the Indian tribal art. Our endeavour is to provide customers hand crafted products which help, support and encourage the vast and diverse craftsmanship of India.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Totum Crafts/ Jyotsna Shahane', 'totumbags@gmail.com', '9923063567', 'Totum Crafts/ Jyotsna Shahane', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', '27AARPR5549J1ZU', '', '', '', 'Maharashtra', '', '', 'I am an Assistant Professor at SMRK-BK-AK Mahila Mahavidyalaya, Nashik from Textile Science and Apparel Design department. I have done masters from Mumbai University in 2005 and cleared my SET in 2009 and NET in 2011', NULL, NULL, NULL, NULL, 'Totum Crafts is an organisation that works with underprivileged women in Pune to produce handmade bags at home as they are housebound got social or cultural reasons and are unable to join the workforce. Their primary roles are as caters for the young , the old or the disabled.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'M Jabbar Khatri', 'mjkhatri65@gmail.com', '9662550599', 'M Jabbar Khatri', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'EKPPK2832D', '', '', '', 'Gujarat', '', '', 'I am a multi product designer looking for collaboration to take my designs to market. I have always been very passionate about contemprorizing Indian handicrafts and have some radical designs n approach. The world is waiting for India n more importantly India is waiting', NULL, NULL, NULL, NULL, 'I belong to the Muslim Khatri community. My father is National award winning Rogan Artist. For many centuries, my family was practicing this craft for embellishing textiles for use by local communities around us in Nirona region of Kutch. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Okhai Centre for Empowerment- Falguni', 'falguni@okhai.org', '9909481994', 'Okhai Centre for Empowerment- Falguni', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAATO2147A', '', '', '', 'Gujarat', '', '', 'Tisser means ?to weave?. As a community, Tisser India is weaving the legacy of loom and craft industry with the hands of women in rural clusters as they sustain their livelihoods. Look in the form for detailed answer', NULL, NULL, NULL, NULL, 'Okhai offers handcrafted apparel and lifestyle products created by rural artisans from across India. These artisans are gifted with the talent and traditional skills to craft exquisite designs in styles that are unique to their culture and heritage.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Shafiya Designer Boutique', 'shafiyaramzan71@gmail.com', '7006236590', 'Shafiya Designer Boutique', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'EDZPR2852F', '', '', '', 'Jammu & Kashmir', '', '', 'Prosperity - From The Mother?s house presents handcrafted Terracotta & Blue Pottery products from the villages of India. We aspire to bridge the gap between traditional artisans & craft lovers, to cover the distance between remote villages of India and international craft destinations, Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'After 12th class one of my teacher recommended me to join the ( Chinar 9 jawan club Baramulla).I have been keen on learning fashion designing and start my own business.After 6 months traning,Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Rupsi Garg', 'rupsigarg@khetivirasatmission.org', '7087107166', 'Rupsi Garg', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'BHQPG3664N', '', '', '', 'Punjab', '', '', 'Resham Dor was born out of our passion to preserve , promote and value the rich traditions and heritage of handloom with the focus to empower artisans. We believe that the future of creative economy lies in the sustainable practices laid by our indigenous communities. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'TRINJAN is the symbol of caring and sharing in Punjabi community. Under this umbrella, women used to spin, weave, knit, sing, celebrate, appreciate and create different kinds of artistic products. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Commitment to Kashmir (CtoK)- Shruti Mittal', 'ctok.delhi@gmail.com', '9810603139', 'Commitment to Kashmir (CtoK)- Shruti Mittal', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AABTC3344C', '', '', '', 'New Delhi', '', '', 'I\'m phd student. Also, working in SEWA federation. My phd topic is related to digital marketing.', NULL, NULL, NULL, NULL, 'Commitment to Kashmir (CtoK), a Registered Trust was started in 2011; inspired by the Late LC Jain, former Member Planning Commission, activist, economist, Gandhian, founder of the craft marketing movement. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Centre for Indian Bamboo Resource and Technology- K Rathna', 'rathna.cibart@gmail.com', '8800947095', 'Centre for Indian Bamboo Resource and Technology- K Rathna', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AACCC0501F', '', '', '', 'Uttar Pradesh', '', '', 'I am Amra Arora from kutch I am learning the textile designing in NIFT. And also I am artisan of bandhej craft!', NULL, NULL, NULL, NULL, 'CIBART is promoting bamboo livelihoods and to work with rural communities to reduce poverty, enhance livelihood security and improve the quality of life by using bamboo, through technology applications and skills building', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Upasana Design Studio, Auroville', 'marketing@upasana.in', '9442982957', 'Upasana Design Studio, Auroville', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAATA0037B', '', '', '', 'Tamil Nadu', '', '', 'It is a small organization consisting of 6 artisans engaged in Lambani Embroidery from Telangana District. The products are traditional as of now. I started working with these artisans as a part of my Ph.D work. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'Our mission is to create conscious sustainable fashion where we are taking care of our environmental cost and not passing it on to the future. For us, design is creative, problem-solving. Any problem, be it post-tsunami trauma, farmer suicides, garbage littering, weavers losing their job, Upasana looks at social issues as a space to exercise for change.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Artisans Sustainable Development Foundation / Radhi Parek', 'radhi.parekh@artisanscentre.com', '9820879442', 'Artisans Sustainable Development Foundation / Radhi Parek', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAPCA7609H', '', '', '', 'Maharashtra', '', '', 'Baaya Design is a pioneer in the interior styling and bespoke decor segment for residential, hospitality, and corporate interior segment. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, 'Artisans Sustainable Development Foundation', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Trupti Ashish Dhoka', 'truptidhoka.smrk@gmail.com', '8000260247', 'Trupti Ashish Dhoka', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'APYPB8327C', '', '', '', 'Maharashtra', '', '', 'Khana weaves is a guledagudda khana /khun fabric & ilkal saree weaves.during first covid wave we come together to help each other. Currently as an enterprise to revive authentic khana, ilkal sarees and its traditional skill set to provide more livelihoods we are working.', NULL, NULL, NULL, NULL, 'I am an Assistant Professor at SMRK-BK-AK Mahila Mahavidyalaya, Nashik from Textile Science and Apparel Design department. I have done masters from Mumbai University in 2005 and cleared my SET in 2009 and NET in 2011', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Sanjay Garg', 'sanjay@sagalifestyle.net', '99789 89565', 'Sanjay Garg', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'DBFPG7498H', '', '', '', 'Gujarat', '', '', 'Designer', NULL, NULL, NULL, NULL, 'I am a multi product designer looking for collaboration to take my designs to market. I have always been very passionate about contemprorizing Indian handicrafts and have some radical designs n approach. The world is waiting for India n more importantly India is waiting', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Tisser Rural Handicraft Pvt Ltd', 'contact@tisserindia.com', '9082483515', 'Tisser Rural Handicraft Pvt Ltd', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAFCT5273Q', '', '', '', 'Maharashtra', '', '', 'I am working as assistant professor in parul University, vadodara persuing my PhD. From MSU Baroda. My topic is traditional woven textile of Madhya Pradesh. in', NULL, NULL, NULL, NULL, 'Tisser means ?to weave?. As a community, Tisser India is weaving the legacy of loom and craft industry with the hands of women in rural clusters as they sustain their livelihoods. Look in the form for detailed answer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Prosperity- Rinkal Bagadia', 'prosperitymirra@gmail.com', '9638136369', 'Prosperity- Rinkal Bagadia', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AODPB6402J', '', '', '', 'Gujarat', '', '', '', NULL, NULL, NULL, NULL, 'Prosperity - From The Mother?s house presents handcrafted Terracotta & Blue Pottery products from the villages of India. We aspire to bridge the gap between traditional artisans & craft lovers, to cover the distance between remote villages of India and international craft destinations, Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Resham Dor/ Lakshmi Malhotra', 'reshamdor2020@gmail.com', '9873723212', 'Resham Dor/ Lakshmi Malhotra', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AFWPM3347M', '', '', '', 'Karnataka', '', '', '', NULL, NULL, NULL, NULL, 'Resham Dor was born out of our passion to preserve , promote and value the rich traditions and heritage of handloom with the focus to empower artisans. We believe that the future of creative economy lies in the sustainable practices laid by our indigenous communities. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Aarushee Agnihotri', 'agnihotriaarushee93@gmail.com', '8758107132', 'Aarushee Agnihotri', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'APAPA9892J', '', '', '', 'Gujarat', '', '', '', NULL, NULL, NULL, NULL, 'I\'m phd student. Also, working in SEWA federation. My phd topic is related to digital marketing.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Amra Arora', 'aroraamra909@gmail.com', '8320637973', 'Amra Arora', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'I don?t have pan number', '', '', '', 'Gujarat', '', '', '', NULL, NULL, NULL, NULL, 'I am Amra Arora from kutch I am learning the textile designing in NIFT. And also I am artisan of bandhej craft!', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Taankaa- beena.santosh', 'beena.santosh@yahoo.in', '7567953126', 'Taankaa- beena.santosh', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Other', 'BFZPS3581P', '', '', '', 'Gujarat', '', '', '', NULL, NULL, NULL, NULL, 'It is a small organization consisting of 6 artisans engaged in Lambani Embroidery from Telangana District. The products are traditional as of now. I started working with these artisans as a part of my Ph.D work. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Baaya Design', 'info@baayadesign.com', '8928420056', 'Baaya Design', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAJFB8377N', '', '', '', 'Maharashtra', '', '', '', NULL, NULL, NULL, NULL, 'Baaya Design is a pioneer in the interior styling and bespoke decor segment for residential, hospitality, and corporate interior segment. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'khana weaves', 'khanaweaves@gmail.com', '8277719242', 'khana weaves', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'BMPA4082K', '', '', '', 'Karnataka', '', '', '', NULL, NULL, NULL, NULL, 'Khana weaves is a guledagudda khana /khun fabric & ilkal saree weaves.during first covid wave we come together to help each other. Currently as an enterprise to revive authentic khana, ilkal sarees and its traditional skill set to provide more livelihoods we are working.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Sudeshna Mitra', 'sudeshnamitra1678@gmail.com', '8017001004', 'Sudeshna Mitra', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AKHPM9832B', '', '', '', 'West Bengal', '', '', '', NULL, NULL, NULL, NULL, 'Designer', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Swati sohoni', 'sohoniswati@gmail.com', '7600801232', 'Swati sohoni', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'DOKPS0848B', '', '', '', 'Gujarat', '', '', 'Physics H graduate from Delhi University with PG dipl in data management & certificate in footwear design . Worked with 40 international designers to make shoe designs', NULL, NULL, NULL, NULL, 'I am working as assistant professor in parul University, vadodara persuing my PhD. From MSU Baroda. My topic is traditional woven textile of Madhya Pradesh. in', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Padma Venkatesh Bhamidipati', '', '7259228330', 'Padma Venkatesh Bhamidipati', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AFIPB5752K', '', '', '', 'Karnataka', '', '', 'I am a textile enthusiast and enjoy creativity with a curosity to learn the ancient and traditional textiles. I am working hard to bring the best skill of my artist friends by trying to create some of the best original ancient textiles.', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Chirashree Thakker', '', '9825007432', 'Chirashree Thakker', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ACKPT6170G', '', '', '', 'Gujarat', '', '', 'Hi I am Mohammad Saqib I belong to a family where leheriya craft is being practiced by my anscestors since more than 150 years, I am the 5th generation to continue this Now we make a brand which name is Rangrez creation . Look in the form for detailed answer.', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'The kishkinda Trust', 'Ms. Shama', '9480546362', 'The kishkinda Trust', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAATT4934C', '', '', '', 'Karnataka', '', '', 'I have worked with Sap labs Bangalore for 17 years , last role of a product manager . I would now like to contribute to community upliftment and livelihoods, specifically in the handloom / handicraft community. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Parna Chakraborty', '', '8638205616', 'Parna Chakraborty', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AGYPC5863H', '', '', '', 'Assam', '', '', 'I am an ardent promoter of handmade products and artisan-driven work. Inclined towards environmentally friendly ventures and Revival of traditional crafts. I am a development sector professional. Currently working outside India.', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Suresh Kumar', '', '91493 74205', 'Suresh Kumar', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'IBGPK9715R', '', '', '', 'Uttar Pradesh', '', '', 'Srujna is a non profit organisation works for Livelihood Opportunities to women in need.', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'PRIYANKA KAKRA VUTTS', '', '90044 61970', 'PRIYANKA KAKRA VUTTS', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AOEPK2099H', '', '', '', 'New Delhi', '', '', 'Ruaab SEWA represents a unique model of handloom and handicraft production that is owned and managed by women producers, which ensures an ethical and transparent supply chain. Look in the form for detailed answer.', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'RAVIKIRAN. A', '', '9901714631', 'RAVIKIRAN. A', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'AWUPR2415A', '', '', '', 'Karnataka', '', '', 'Advanced Nature as name suggests , we are making revolutionary advancement to the nature.', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Aarti Uniyal', '', '9920480288', 'Aarti Uniyal', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AFLPN1420M', '', '', '', 'Maharashtra', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Payal Nath', 'payalnat@gmail.com', '9331215060', 'Payal Nath', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'ABRPN4482N', '', '', '', 'Karnataka', '', '', '', NULL, NULL, NULL, NULL, 'Physics H graduate from Delhi University with PG dipl in data management & certificate in footwear design . Worked with 40 international designers to make shoe designs', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Sriyasmita Mishra', 'sriyasmita.mishra@gmail.com', '9710001112', 'Sriyasmita Mishra', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'BXQPS9899P', '', '', '', 'Tamil Nadu', '', '', '', NULL, NULL, NULL, NULL, 'I am a textile enthusiast and enjoy creativity with a curosity to learn the ancient and traditional textiles. I am working hard to bring the best skill of my artist friends by trying to create some of the best original ancient textiles.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Rangrez creation', 'saqib0557@gmail.com', '9680049562', 'Rangrez creation', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Male', 'LYUPS3818M', '', '', '', 'Rajasthan', '', '', '', NULL, NULL, NULL, NULL, 'Hi I am Mohammad Saqib I belong to a family where leheriya craft is being practiced by my anscestors since more than 150 years, I am the 5th generation to continue this Now we make a brand which name is Rangrez creation . Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Richa Maheshwari', 'richa3081@gmail.com', '9845306020', 'Richa Maheshwari', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AGUPA1509L', '', '', '', 'Karnataka', '', '', '', NULL, NULL, NULL, NULL, 'I have worked with Sap labs Bangalore for 17 years , last role of a product manager . I would now like to contribute to community upliftment and livelihoods, specifically in the handloom / handicraft community. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Beena K', 'beensr69@yahoo.com', '9.19E+11', 'Beena K', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Female', 'AKDPK9028K', '', '', '', 'Kerala', '', '', '', NULL, NULL, NULL, NULL, 'I am an ardent promoter of handmade products and artisan-driven work. Inclined towards environmentally friendly ventures and Revival of traditional crafts. I am a development sector professional. Currently working outside India.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Srujna Charitable Trust', 'program@srujna.org', '9545392212', 'Srujna Charitable Trust', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAMTS6639P', '', '', '', 'Maharashtra', '', '', '', NULL, NULL, NULL, NULL, 'Srujna is a non profit organisation works for Livelihood Opportunities to women in need.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'SEWA Ruaab', 'tamanna.ruaab@sewabharat.org', '8102066857', 'SEWA Ruaab', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'FLFPB2754H', '', '', '', 'New Delhi', '', '', '', NULL, NULL, NULL, NULL, 'Ruaab SEWA represents a unique model of handloom and handicraft production that is owned and managed by women producers, which ensures an ethical and transparent supply chain. Look in the form for detailed answer.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Advanced Nature Pvt. Ltd', 'info@advancednature.com', '8208121590', 'Advanced Nature Pvt. Ltd', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, 'Organizati', 'AAVCA8910F', '', '', '', 'Maharashtra', '', '', '', NULL, NULL, NULL, NULL, 'Advanced Nature as name suggests , we are making revolutionary advancement to the nature.', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Sudha', '', '', 'Sudha', 'Password@123', '0000-00-00', '0000-00-00', 'default.png', 0, 'active', 0, '', '', '', '', '', 'Andhra Pradesh', '', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT 'Active',
  `type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `status`, `type_name`) VALUES
(1, 'Active', 'Mentor'),
(2, 'Active', 'Team'),
(3, 'Active', 'Executive Council'),
(4, 'Active', 'Founder And Directors');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_links`
--
ALTER TABLE `quick_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`idsample`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `idsample` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
