-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 08:14 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybook_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_i_follow`
--

CREATE TABLE `content_i_follow` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `contentid` bigint(20) NOT NULL,
  `content_type` varchar(10) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_i_follow`
--

INSERT INTO `content_i_follow` (`id`, `userid`, `contentid`, `content_type`, `disabled`, `date`) VALUES
(2, 45780258653, 80037172373257309, 'post', 0, '2021-01-25 09:30:19'),
(3, 204306973626090829, 80037172373257309, 'post', 0, '2021-01-25 09:37:50'),
(4, 204306973626090829, 80037172373257309, 'post', 0, '2021-01-25 10:02:12'),
(5, 204306973626090829, 1770298928112, 'post', 0, '2021-01-30 10:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `likes` text NOT NULL,
  `contentid` bigint(20) NOT NULL,
  `following` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `type`, `likes`, `contentid`, `following`) VALUES
(1, 'user', '[{\"userid\":\"43452924198233985\",\"date\":\"2021-01-14 13:41:33\"},{\"userid\":\"45780258653\",\"date\":\"2021-01-25 09:18:17\"}]', 204306973626090829, '[{\"userid\":\"43452924198233985\",\"date\":\"2021-01-19 23:47:38\"}]'),
(2, 'user', '[{\"userid\":\"204306973626090829\",\"date\":\"2021-01-19 23:47:38\"},{\"userid\":\"45780258653\",\"date\":\"2021-01-25 09:18:25\"}]', 43452924198233985, '[{\"userid\":\"204306973626090829\",\"date\":\"2021-01-14 13:41:33\"}]'),
(3, 'post', '[{\"userid\":\"43452924198233985\",\"date\":\"2021-01-14 17:33:32\"}]', 850055142927, ''),
(4, 'post', '[{\"userid\":\"43452924198233985\",\"date\":\"2021-01-19 22:49:51\"},{\"userid\":\"204306973626090829\",\"date\":\"2021-01-19 23:32:17\"}]', 43109449895, ''),
(5, 'post', '[{\"userid\":\"43452924198233985\",\"date\":\"2021-01-19 00:01:26\"}]', 762319448360468565, ''),
(6, 'post', '[{\"userid\":\"204306973626090829\",\"date\":\"2021-01-19 23:17:45\"}]', 2714, ''),
(7, 'post', '[{\"userid\":\"204306973626090829\",\"date\":\"2021-01-19 23:32:00\"}]', 805836070763966993, ''),
(8, 'post', '[{\"userid\":\"43452924198233985\",\"date\":\"2021-01-20 00:01:59\"}]', 4747, ''),
(9, 'post', '[{\"userid\":\"43452924198233985\",\"date\":\"2021-01-22 00:25:46\"}]', 5783740831, ''),
(10, 'user', '', 45780258653, '[{\"userid\":\"204306973626090829\",\"date\":\"2021-01-25 09:18:17\"},{\"userid\":\"43452924198233985\",\"date\":\"2021-01-25 09:18:26\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `activity` varchar(10) NOT NULL,
  `contentid` bigint(20) NOT NULL,
  `content_owner` bigint(20) NOT NULL,
  `content_type` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `userid`, `activity`, `contentid`, `content_owner`, `content_type`, `date`) VALUES
(1, 43452924198233985, 'like', 43109449895, 204306973626090829, 'post', '2021-01-19 00:05:47'),
(2, 43452924198233985, 'like', 43109449895, 204306973626090829, 'post', '2021-01-19 22:49:50'),
(3, 43452924198233985, 'like', 43109449895, 204306973626090829, 'post', '2021-01-19 22:49:51'),
(4, 204306973626090829, 'like', 2714, 204306973626090829, 'post', '2021-01-19 23:17:45'),
(5, 204306973626090829, 'like', 805836070763966993, 43452924198233985, 'post', '2021-01-19 23:32:01'),
(6, 204306973626090829, 'like', 43109449895, 204306973626090829, 'post', '2021-01-19 23:32:17'),
(12, 204306973626090829, 'follow', 43452924198233985, 43452924198233985, 'profile', '2021-01-19 23:47:38'),
(13, 43452924198233985, 'like', 4747, 43452924198233985, 'post', '2021-01-20 00:01:59'),
(14, 43452924198233985, 'like', 5783740831, 204306973626090829, 'comment', '2021-01-22 00:25:47'),
(15, 45780258653, 'follow', 204306973626090829, 204306973626090829, 'profile', '2021-01-25 09:18:17'),
(16, 45780258653, 'follow', 43452924198233985, 43452924198233985, 'profile', '2021-01-25 09:18:26'),
(17, 204306973626090829, 'comment', 80037172373257309, 43452924198233985, 'post', '2021-01-25 09:37:51'),
(18, 204306973626090829, 'comment', 80037172373257309, 43452924198233985, 'post', '2021-01-25 10:02:12'),
(19, 43452924198233985, 'tag', 1770298928112, 204306973626090829, 'post', '2021-01-30 10:38:56'),
(20, 204306973626090829, 'comment', 1770298928112, 43452924198233985, 'post', '2021-01-30 10:46:07'),
(21, 204306973626090829, 'tag', 854556, 43452924198233985, 'comment', '2021-01-30 10:46:08'),
(22, 43452924198233985, 'tag', 1770298928112, 204306973626090829, 'post', '2021-01-30 11:10:24'),
(23, 43452924198233985, 'tag', 1770298928112, 204306973626090829, 'post', '2021-01-30 11:10:55'),
(24, 43452924198233985, 'tag', 1770298928112, 45780258653, 'post', '2021-01-30 11:16:11'),
(25, 43452924198233985, 'tag', 1770298928112, 45780258653, 'post', '2021-01-30 11:16:45'),
(26, 212208, 'tag', 33503, 212208, 'post', '2021-01-30 11:38:59'),
(27, 43452924198233985, 'tag', 2206778395, 212208, 'post', '2021-01-30 11:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `notification_seen`
--

CREATE TABLE `notification_seen` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `notification_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_seen`
--

INSERT INTO `notification_seen` (`id`, `userid`, `notification_id`) VALUES
(1, 204306973626090829, 14),
(6, 204306973626090829, 2),
(8, 45780258653, 17),
(9, 204306973626090829, 19),
(10, 43452924198233985, 20),
(11, 43452924198233985, 21),
(12, 45780258653, 25);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `postid` bigint(20) NOT NULL,
  `post` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `has_image` tinyint(1) NOT NULL,
  `is_profile_image` tinyint(1) NOT NULL,
  `is_cover_image` tinyint(1) NOT NULL,
  `parent` bigint(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` bigint(20) NOT NULL,
  `likes` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `tags` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postid`, `post`, `image`, `has_image`, `is_profile_image`, `is_cover_image`, `parent`, `date`, `userid`, `likes`, `comments`, `tags`) VALUES
(1, 4747, 'hey hey there', '', 0, 0, 0, 0, '2021-01-12 21:04:52', 43452924198233985, 2, 1, ''),


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `profile_image` varchar(500) NOT NULL,
  `cover_image` varchar(500) NOT NULL,
  `date` year(4) NOT NULL,
  `online` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `url_address` varchar(100) NOT NULL,
  `likes` int(11) NOT NULL,
  `about` text NOT NULL,
  `tag_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `first_name`, `last_name`, `gender`, `profile_image`, `cover_image`, `date`, `online`, `email`, `password`, `url_address`, `likes`, `about`, `tag_name`) VALUES


--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_i_follow`
--
ALTER TABLE `content_i_follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `contentid` (`contentid`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `contentid` (`contentid`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `contentid` (`contentid`),
  ADD KEY `content_owner` (`content_owner`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `notification_seen`
--
ALTER TABLE `notification_seen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `notification_id` (`notification_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postid` (`postid`),
  ADD KEY `date` (`date`),
  ADD KEY `parent` (`parent`),
  ADD KEY `userid` (`userid`),
  ADD KEY `likes` (`likes`),
  ADD KEY `comments` (`comments`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `date` (`date`),
  ADD KEY `online` (`online`),
  ADD KEY `email` (`email`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `likes` (`likes`),
  ADD KEY `tag_name` (`tag_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_i_follow`
--
ALTER TABLE `content_i_follow`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notification_seen`
--
ALTER TABLE `notification_seen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
