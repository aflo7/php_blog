-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 05, 2022 at 01:38 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs3140database`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cID` int(10) UNSIGNED NOT NULL,
  `cpID` int(10) UNSIGNED NOT NULL,
  `ccomment` varchar(255) NOT NULL,
  `cauthor` varchar(30) NOT NULL,
  `cauthemail` varchar(30) NOT NULL,
  `cdateposted` datetime NOT NULL,
  `capproved` char(1) NOT NULL DEFAULT '0',
  `cusername` varchar(15) DEFAULT NULL,
  `crevdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cID`, `cpID`, `ccomment`, `cauthor`, `cauthemail`, `cdateposted`, `capproved`, `cusername`, `crevdate`) VALUES
(11, 7, 'I enjoyed read the post!', 'aflo7', 'jchao@gmail.com', '2021-01-27 13:11:03', '0', 'admin', '2021-01-27 13:11:03'),
(12, 8, 'I agree php is great. loved the post!', 'aflo7', 'andres@gmail.com', '2021-01-27 13:11:03', '0', 'admin', '2021-01-27 13:11:03'),
(13, 8, 'I hate php.', 'bob11', 'andres@gmail.com', '2021-01-27 13:11:03', '0', 'bob66', '2021-01-27 13:11:03'),
(14, 9, 'who cares??', 'Andres Flores', 'andres@gmail.com', '2021-01-27 13:11:03', '0', 'aflo', '2021-01-27 13:11:03'),
(15, 9, 'I hate space!.', 'Andres Flores', 'andres@gmail.com', '2021-01-27 13:11:03', '0', 'aflo', '2021-01-27 13:11:03'),
(16, 9, 'I like space.', 'Andres Flores', 'andres@gmail.com', '2021-01-27 13:11:03', '0', 'aflo', '2021-01-27 13:11:03'),
(17, 10, 'lorem ipsum, lorem ipsum', 'Andres Flores', 'andres@gmail.com', '2021-01-27 13:11:03', '0', 'aflo', '2020-02-21 13:11:03'),
(18, 10, 'lorem ipsum!!!!, ipsum, hahaha, lorem ipsum', 'Joe Chao', 'jchao@gmail.com', '2020-02-23 13:11:03', '0', 'aflo', '2020-02-21 13:11:03'),
(19, 10, 'lorem ipsum!!!!, ipsum, hahaha, lorem ipsum', 'Joe Chao', 'jchao@gmail.com', '2020-02-23 13:11:03', '0', 'aflo', '2020-02-21 13:11:03'),
(20, 10, 'I agree, everyone stay safe.', 'Billy Kalina', 'jchao@gmail.com', '2020-02-23 13:11:03', '0', 'bkal123', '2020-02-21 13:11:03'),
(21, 11, 'I want 100 million.', 'Jake Red', 'jred@gmail.com', '2022-12-25 13:11:03', '0', 'jake_red', '2022-12-25 13:11:03'),
(22, 11, 'I also want 100 million.', 'Jill Red', 'jillred@gmail.com', '2022-12-25 13:11:03', '0', 'jill_red', '2022-12-25 13:11:03'),
(23, 11, 'I also want 100 million.', 'Steve Red', 'steve@gmail.com', '2022-12-25 13:11:03', '0', 'steve_red', '2022-12-25 13:11:03'),
(24, 11, 'I also want 100 million.', 'Steve Red', 'jred@gmail.com', '2022-12-25 13:11:03', '0', 'steve_red', '2022-12-25 13:11:03'),
(25, 11, 'I also want 100 million.', 'Graham Red', 'graham@gmail.com', '2022-12-25 13:11:03', '0', 'graham_red', '2022-12-25 13:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pID` int(10) UNSIGNED NOT NULL,
  `pheading` varchar(50) NOT NULL,
  `pcontent` longtext NOT NULL,
  `pallowcomment` char(1) NOT NULL DEFAULT '1',
  `pyear` varchar(4) NOT NULL DEFAULT '2021',
  `pmonth` varchar(2) NOT NULL DEFAULT '01',
  `pday` varchar(2) NOT NULL DEFAULT '01',
  `pdateposted` datetime NOT NULL,
  `pauthor` varchar(30) NOT NULL DEFAULT 'Default Name',
  `pusername` varchar(15) DEFAULT NULL,
  `prevdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pID`, `pheading`, `pcontent`, `pallowcomment`, `pyear`, `pmonth`, `pday`, `pdateposted`, `pauthor`, `pusername`, `prevdate`) VALUES
(6, 'First Blog Post', '<p>First blog entry. This is fun.</p><p>Second paragraph of first blog post... This is fun.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '1', '2018', '01', '01', '2021-01-27 13:11:03', 'Andres Flores', 'admin', '2021-01-27 13:11:03'),
(7, 'Tech news for the week', '<p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>last para. dumy sentences. lorem ipsum.</p>', '1', '2017', '01', '01', '2021-01-27 13:11:03', 'Joe Chao', 'jchao', '2021-01-27 13:11:03'),
(8, 'PHP is cool', '<p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2017', '01', '01', '2020-01-27 13:11:03', 'Joe Chao', 'jchao', '2021-01-27 13:11:03'),
(9, 'James Webb Telescope finds a second Earth.', '<p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1', '2014', '01', '01', '2020-01-27 13:11:03', 'Neil Degrasse Tyson', 'neild', '2021-01-27 13:11:03'),
(10, 'COVID-19 Warning', '<p>There has been a rapid increase in covid cases. Please stay indoors for the next 3 months. Keep your family safe..</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '1', '2014', '01', '01', '2020-01-27 13:11:03', 'Fauci Doctor', 'fauc99', '2020-02-20 13:11:03'),
(11, 'How to get 100 million dollars.', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '1', '2014', '01', '01', '2022-12-25 13:11:03', 'Joe Rogan', 'jrepodcast', '2022-12-25 13:11:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cID`);
ALTER TABLE `comments` ADD FULLTEXT KEY `ccomment` (`ccomment`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pID`);
ALTER TABLE `posts` ADD FULLTEXT KEY `pheading` (`pheading`);
ALTER TABLE `posts` ADD FULLTEXT KEY `pcontent` (`pcontent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
