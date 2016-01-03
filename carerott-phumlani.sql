-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2015 at 08:30 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.14

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carerott`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `campaign_url` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `name`, `campaign_url`, `user_id`) VALUES
(1, 'Test Campaign', 'test url', 23),
(2, 'Test Campaign', 'test url s', 23),
(3, 'Test Campaign', 'test url s', 22);

-- --------------------------------------------------------

--
-- Table structure for table `field_of_study`
--

CREATE TABLE `field_of_study` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field_of_study`
--

INSERT INTO `field_of_study` (`id`, `name`) VALUES
(1, 'Acoounting'),
(2, 'Engineering'),
(3, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `friend_status_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `friend_status_id`, `student_id`, `mentor_id`) VALUES
(2, 1, 1, 5),
(3, 1, 4, 5),
(8, 1, 7, 13),
(9, 1, 9, 14),
(10, 1, 10, 15),
(11, 1, 9, 16),
(12, 1, 10, 13),
(13, 1, 10, 12),
(14, 1, 10, 14),
(15, 1, 7, 16),
(16, 1, 10, 16),
(17, 1, 10, 18),
(18, 1, 10, 20),
(19, 1, 10, 22),
(20, 1, 22, 7);

-- --------------------------------------------------------

--
-- Table structure for table `friend_status`
--

CREATE TABLE `friend_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_status`
--

INSERT INTO `friend_status` (`id`, `name`) VALUES
(1, 'pending'),
(2, 'approved'),
(3, 'declined');

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`id`, `name`) VALUES
(1, 'UCT'),
(2, 'UWC'),
(3, 'WITS'),
(4, 'Phumlani');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `student_topic_status_id` varchar(255) NOT NULL,
  `mentor_topic_status_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `student_topic_status_id`, `mentor_topic_status_id`) VALUES
(1, 'Understanding field of study', '0', '0'),
(2, 'Understanding entry requirements', '0', '0'),
(3, 'Understanding application forms', '0', '0'),
(4, 'Understanding  financial aid', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `topics_status`
--

CREATE TABLE `topics_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics_status`
--

INSERT INTO `topics_status` (`id`, `name`) VALUES
(1, 'Not Started'),
(2, 'Started'),
(3, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_types_id` int(11) NOT NULL,
  `institutions_id` int(11) NOT NULL,
  `field_of_study_id` int(11) NOT NULL,
  `auth_id` tinyint(1) NOT NULL DEFAULT '0',
  `role` varchar(55) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_types_id`, `institutions_id`, `field_of_study_id`, `auth_id`, `role`, `created`, `modified`) VALUES
(7, 'mary', 'jane@gmail.com', '3456', 2, 1, 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'sammy', 'sammy@hotmail.com', '4567', 2, 1, 2, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'sipho', 'sipho@hotmail.com', '1234', 2, 1, 3, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'luvo', 'test@test.com', 'test', 2, 1, 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'bantu', 'bantumthi@gmail.com', '5678', 2, 1, 2, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Amnda', 'amanda@gmail.com', '3333', 1, 1, 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Shane', 'shane@webmail.com', '2222', 1, 1, 2, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Nceba', 'nceba@hotmail.com', '5555', 1, 2, 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Zimkita', 'zimkita@webmail.com', '6666', 1, 3, 2, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Siwe', 'siwe@hotmail.com', '4444', 1, 2, 3, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'njos', 'slkjk@d.kd', 'hallo', 2, 1, 2, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'pip momota', 'ha@ll.o', 'hallo', 1, 3, 3, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Test', 'test@test.com', 'test123', 1, 1, 2, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Makabongwe Mpambani', 'pmpambani@carerott.com', 'pumelela', 1, 3, 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'ludz', 'ludz@test.test', 'ludz', 2, 1, 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Qiqa', 'qiqa@gmail.com', '123', 1, 2, 2, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Phumlani', 'phumlani.nyati@gmail.com', 'admin123', 3, 1, 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`) VALUES
(1, 'Varsity Student'),
(2, 'High Scholar'),
(3, 'Company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `field_of_study`
--
ALTER TABLE `field_of_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friends_friend_status` (`friend_status_id`);

--
-- Indexes for table `friend_status`
--
ALTER TABLE `friend_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_status`
--
ALTER TABLE `topics_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_field_of_study` (`field_of_study_id`),
  ADD KEY `users_institutions` (`institutions_id`),
  ADD KEY `users_user_types` (`user_types_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `field_of_study`
--
ALTER TABLE `field_of_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `friend_status`
--
ALTER TABLE `friend_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `institutions`
--
ALTER TABLE `institutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `topics_status`
--
ALTER TABLE `topics_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_friend_status` FOREIGN KEY (`friend_status_id`) REFERENCES `friend_status` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_field_of_study` FOREIGN KEY (`field_of_study_id`) REFERENCES `field_of_study` (`id`),
  ADD CONSTRAINT `users_institutions` FOREIGN KEY (`institutions_id`) REFERENCES `institutions` (`id`),
  ADD CONSTRAINT `users_user_types` FOREIGN KEY (`user_types_id`) REFERENCES `user_types` (`id`);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
