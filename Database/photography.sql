-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 07:49 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) NOT NULL,
  `admin_email` varchar(1100) NOT NULL,
  `admin_password` varchar(2000) NOT NULL,
  `admin_name` varchar(1100) NOT NULL,
  `admin_phone` bigint(50) NOT NULL,
  `admin_photo` varchar(5000) NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `admin_view` tinyint(1) NOT NULL,
  `admin_create` tinyint(1) NOT NULL,
  `admin_edit` tinyint(1) NOT NULL,
  `admin_del` tinyint(1) NOT NULL,
  `admin_special` tinyint(1) NOT NULL,
  `photographer_info_view` tinyint(1) NOT NULL,
  `photographer_info_edit` tinyint(1) NOT NULL,
  `works_view` tinyint(1) NOT NULL,
  `works_create` tinyint(1) NOT NULL,
  `works_edit` tinyint(1) NOT NULL,
  `works_del` tinyint(1) NOT NULL,
  `gallery_view` tinyint(1) NOT NULL,
  `gallery_create` tinyint(1) NOT NULL,
  `gallery_del` tinyint(1) NOT NULL,
  `video_gallery_view` tinyint(1) NOT NULL,
  `video_gallery_create` tinyint(1) NOT NULL,
  `video_gallery_edit` tinyint(1) NOT NULL,
  `video_gallery_del` tinyint(1) NOT NULL,
  `home_image_view` tinyint(1) NOT NULL,
  `home_image_edit` tinyint(1) NOT NULL,
  `team_view` tinyint(1) NOT NULL,
  `team_create` tinyint(1) NOT NULL,
  `team_edit` tinyint(1) NOT NULL,
  `team_del` tinyint(1) NOT NULL,
  `category_view` tinyint(1) NOT NULL,
  `category_create` tinyint(1) NOT NULL,
  `category_edit` tinyint(1) NOT NULL,
  `category_del` tinyint(1) NOT NULL,
  `admin_delete` tinyint(1) NOT NULL,
  `admin_added_date` varchar(50) NOT NULL,
  `admin_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_req` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `admin_photo`, `admin_status`, `admin_view`, `admin_create`, `admin_edit`, `admin_del`, `admin_special`, `photographer_info_view`, `photographer_info_edit`, `works_view`, `works_create`, `works_edit`, `works_del`, `gallery_view`, `gallery_create`, `gallery_del`, `video_gallery_view`, `video_gallery_create`, `video_gallery_edit`, `video_gallery_del`, `home_image_view`, `home_image_edit`, `team_view`, `team_create`, `team_edit`, `team_del`, `category_view`, `category_create`, `category_edit`, `category_del`, `admin_delete`, `admin_added_date`, `admin_updated_date`, `admin_req`) VALUES
(6, 'admin@admin.com', '$2y$10$IUHcsSNbUjp1W.9wG76dZ.YI.wXYIhOWzgwf.hun/0Xp2gGgiUjWC', 'Photography', 12345678, '2022-07-02_1656784207.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '18-11-2021 11:13:30 pm', '2022-07-07 16:30:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(2, 'WEDDING'),
(3, 'BIRTHDY'),
(4, 'HOUSEWARMING');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` bigint(20) NOT NULL,
  `gallery_name` varchar(1000) NOT NULL,
  `gallery_group` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_images`
--

CREATE TABLE `home_images` (
  `home_images_id` int(11) NOT NULL,
  `home_ss_image_1` varchar(100) NOT NULL,
  `home_ss_image_1_name` varchar(100) NOT NULL,
  `home_ss_image_2` varchar(100) NOT NULL,
  `home_ss_image_2_name` varchar(100) NOT NULL,
  `home_ss_image_3` varchar(100) NOT NULL,
  `home_ss_image_3_name` varchar(100) NOT NULL,
  `home_ss_image_4` varchar(100) NOT NULL,
  `home_ss_image_4_name` varchar(100) NOT NULL,
  `welcome_side_image1` varchar(100) NOT NULL,
  `welcome_side_image1_name` varchar(100) NOT NULL,
  `welcome_side_image2` varchar(100) NOT NULL,
  `welcome_side_image2_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_images`
--

INSERT INTO `home_images` (`home_images_id`, `home_ss_image_1`, `home_ss_image_1_name`, `home_ss_image_2`, `home_ss_image_2_name`, `home_ss_image_3`, `home_ss_image_3_name`, `home_ss_image_4`, `home_ss_image_4_name`, `welcome_side_image1`, `welcome_side_image1_name`, `welcome_side_image2`, `welcome_side_image2_name`) VALUES
(1, '2022-07-05_1657049623.jpg', 'Wedding Photography', '2022-07-03_1656833900.jpg', 'Wedding Photography', '', '', '', '', '2022-07-03_1656833913.png', 'sdrfdtfygh', '2022-07-05_1657050404.jpg', 'Wedding Photography');

-- --------------------------------------------------------

--
-- Table structure for table `photographer_info`
--

CREATE TABLE `photographer_info` (
  `photographer_info_id` int(11) NOT NULL,
  `photographer_info_name` varchar(250) NOT NULL,
  `photographer_info_logo` varchar(50) NOT NULL,
  `photographer_info_phone` varchar(40) NOT NULL,
  `photographer_info_email` varchar(200) NOT NULL,
  `photographer_info_address` varchar(1000) NOT NULL,
  `photographer_info_address_map` varchar(2000) NOT NULL,
  `photographer_info_social_media1_type` varchar(100) NOT NULL,
  `photographer_info_social_media1` varchar(1000) NOT NULL,
  `photographer_info_social_media2_type` varchar(100) NOT NULL,
  `photographer_info_social_media2` varchar(1000) NOT NULL,
  `photographer_info_social_media3_type` varchar(100) NOT NULL,
  `photographer_info_social_media3` varchar(1000) NOT NULL,
  `photographer_info_welcome_p1` varchar(5000) NOT NULL,
  `photographer_info_welcome_p2` varchar(2000) NOT NULL,
  `photographer_info_about` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer_info`
--

INSERT INTO `photographer_info` (`photographer_info_id`, `photographer_info_name`, `photographer_info_logo`, `photographer_info_phone`, `photographer_info_email`, `photographer_info_address`, `photographer_info_address_map`, `photographer_info_social_media1_type`, `photographer_info_social_media1`, `photographer_info_social_media2_type`, `photographer_info_social_media2`, `photographer_info_social_media3_type`, `photographer_info_social_media3`, `photographer_info_welcome_p1`, `photographer_info_welcome_p2`, `photographer_info_about`) VALUES
(1, 'Deepak', '', '12345678', 'admin@admin.com', 'qwertyu sfdg  dgffgvc', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2186049.3841735567!2d76.72795149217205!3d17.564437991285107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1657120982409!5m2!1sen!2sin', 'facebook', 'sdfgghghj', 'instagram', '', '', '', 'where reality is captured and treasured through the eyes of lenses. We make life roll over reels every time you look back. Moments pass with time but our pictures, videos will always urge you to go back and revisit them allowing you to clear up the dust left by time on the book of your memories. ', 'As Memories are like wine â€“ the more you preserve them, the more toast it adds to life.', 'I love what I do! Photography is my passion and I make that shine in my work. I try to stay away from the typical and I always on the hunt for new ideas, techniques, and interesting people! I constantly trying to feed my passion for travelling and getting inked. Whether you\'re looking for a simple portrait or need help with a project, I would love to work with you.');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `team_photo` varchar(100) NOT NULL,
  `team_profession` varchar(100) NOT NULL,
  `team_social_media1` varchar(25) NOT NULL,
  `team_social_media1_link` varchar(500) NOT NULL,
  `team_social_media2` varchar(25) NOT NULL,
  `team_social_media2_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `video_gallery_id` bigint(20) NOT NULL,
  `video_gallery_link` varchar(100) NOT NULL,
  `video_gallery_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `works_id` bigint(20) NOT NULL,
  `works_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`works_id`, `works_name`) VALUES
(2, 'Candid Photo & Video'),
(3, 'Wedding Photography'),
(4, 'Cinematography'),
(5, 'Corporate Events'),
(6, 'Pre Wedding & Post Wedding Shoot'),
(7, 'Comercial Photo & Video'),
(8, 'Out door Photo & Videography'),
(9, 'Photo Lamination'),
(10, 'Photo Framing'),
(11, 'Digital Album'),
(12, 'Video Editing'),
(13, 'Short Film Shoot & Editing'),
(14, 'Mug prints & Gift items'),
(15, 'Calender With Photo'),
(16, 'Mobile Photo Printing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `photographer_info`
--
ALTER TABLE `photographer_info`
  ADD PRIMARY KEY (`photographer_info_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`video_gallery_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`works_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `photographer_info`
--
ALTER TABLE `photographer_info`
  MODIFY `photographer_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `video_gallery_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `works_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
