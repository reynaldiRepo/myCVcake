-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 10:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `kemampuan`
--

CREATE TABLE `kemampuan` (
  `id` int(11) NOT NULL,
  `ket` text NOT NULL,
  `rate` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kemampuan`
--

INSERT INTO `kemampuan` (`id`, `ket`, `rate`, `id_user`) VALUES
(18, 'Python', 5, 3),
(19, 'PHP', 5, 3),
(20, 'Java', 4, 3),
(21, 'Javascript', 3, 3),
(22, 'C#', 4, 3),
(23, 'c++', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mydetail`
--

CREATE TABLE `mydetail` (
  `id` int(11) NOT NULL,
  `ket` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mydetail`
--

INSERT INTO `mydetail` (`id`, `ket`, `id_user`) VALUES
(1, '<p>I am a man who really likes technology and especially computers, and Coding is the way I enjoy this, all things that connect to programming, logical thinking and of course doing coding I will really - really love its. in other word you can call me &quot;PROGRAMMER&quot;.</p>\r\n\r\n<p>I SWEAR TO YOU</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE `objective` (
  `id` int(11) NOT NULL,
  `ket` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objective`
--

INSERT INTO `objective` (`id`, `ket`, `id_user`) VALUES
(1, 'I will solve all your problems in my way with my mind and my hands. just give me a glass of coffee, with the caffeine miracle all problem will be solved.\r\nBring all your problems to me, me and a glass of cofee will works for you', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `ket` text NOT NULL,
  `tahun_in` char(30) NOT NULL,
  `tahun_out` char(30) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `ket`, `tahun_in`, `tahun_out`, `id_user`) VALUES
(6, 'SDN 2 Randuagung Gresik', '2007', '2007', 3),
(7, 'SMPN 1 GRESIK', '2011', '2015', 3),
(8, 'SMAN 1 Manyar', '2015', '2017', 3),
(9, 'University of Trunojoyo Madura', '2017', 'Ongoing', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `ket` text NOT NULL,
  `tahun_in` char(30) NOT NULL,
  `tahun_out` char(30) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `ket`, `tahun_in`, `tahun_out`, `id_user`) VALUES
(13, 'Member of UKMFT ITC', '2017', '2019', 3),
(14, 'Member of Organization Warga Lab', '2017', 'Ongoing', 3),
(15, 'Staff of Practice Assisten Informatika Trunojoyo', '2018', 'Ongoing', 3),
(16, 'Gameloft Campus Internship', '2020', 'Ongoing', 3);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `ket` text NOT NULL,
  `link` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `ket`, `link`, `id_user`) VALUES
(5, 'Sispengma UTM', 'information system for dormitory Universitas Trunojoyo Madura', 'https://github.com/reynaldiRepo/sispengma-utm', 3),
(6, 'TrunojoyoPy', 'Web Blogs for learn Python Programing (http://trunojoyopython/strukturdata)', 'https://github.com/reynaldiRepo/TrunojoyoPy', 3),
(7, 'Catch That Fish', 'Kinect Game with educational Theme for improve ', 'https://github.com/reynaldiRepo/CatchFish_Kinect_Game', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usernmae` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tagline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usernmae`, `password`, `realname`, `photo`, `tagline`) VALUES
(3, 'reynaldCV', '$2y$10$HJd69dBJKUq2POqABawWZ.t3YICJdIKMmTJovvUAhZvXi6QAZqwdy', 'REYNALDI', '2.jpg', 'A man who Falling in Love with Tech');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_ibfk` (`id_user`);

--
-- Indexes for table `mydetail`
--
ALTER TABLE `mydetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_ibfk2` (`id_user`);

--
-- Indexes for table `objective`
--
ALTER TABLE `objective`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_ibfk3` (`id_user`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_ibfk4` (`id_user`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_ibfk5` (`id_user`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_ibfk6` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usernmae` (`usernmae`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kemampuan`
--
ALTER TABLE `kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mydetail`
--
ALTER TABLE `mydetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `objective`
--
ALTER TABLE `objective`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD CONSTRAINT `id_user_ibfk` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mydetail`
--
ALTER TABLE `mydetail`
  ADD CONSTRAINT `id_user_ibfk2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `objective`
--
ALTER TABLE `objective`
  ADD CONSTRAINT `id_user_ibfk3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `id_user_ibfk4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `id_user_ibfk5` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `id_user_ibfk6` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
