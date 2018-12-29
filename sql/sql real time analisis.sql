-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 05:54 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odk_aggregate`
--

-- --------------------------------------------------------

--
-- Table structure for table `dummy_kuesioner_kor_core`
--

CREATE TABLE `dummy_kuesioner_kor_core` (
  `id` int(2) NOT NULL,
  `var1` varchar(255) NOT NULL,
  `var2` decimal(2,0) NOT NULL,
  `var3` enum('aa','bb','cc','dd') NOT NULL,
  `var4` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy_kuesioner_kor_core`
--

INSERT INTO `dummy_kuesioner_kor_core` (`id`, `var1`, `var2`, `var3`, `var4`) VALUES
(1, 'puas', '10', 'bb', 0),
(2, 'tidak puas', '5', 'aa', 0),
(3, 'puas', '10', 'bb', 0),
(4, 'tidak puas', '5', 'aa', 0),
(5, 'puas', '15', 'bb', 0),
(6, 'tidak puas', '65', 'cc', 0),
(7, 'puas', '10', 'bb', 0),
(8, 'tidak puas', '25', 'aa', 0),
(9, 'puas', '15', 'bb', 0),
(10, 'tidak puas', '61', 'cc', 0),
(11, 'puas', '12', 'bb', 0),
(12, 'tidak puas', '50', 'aa', 0),
(13, 'puas', '14', 'bb', 0),
(14, 'tidak puas', '63', 'cc', 0),
(15, 'puas', '10', 'cc', 0),
(16, 'tidak puas', '5', 'cc', 0),
(17, 'puas', '15', 'bb', 0),
(18, 'tidak puas', '65', 'cc', 0),
(19, 'puas', '10', 'bb', 0),
(20, 'tidak puas', '10', 'dd', 0),
(21, 'puas', '19', 'dd', 0),
(22, 'tidak puas', '61', 'cc', 0),
(23, 'puas', '10', 'bb', 0),
(24, 'tidak puas', '5', 'dd', 0),
(25, 'puas', '18', 'bb', 0),
(26, 'tidak puas', '65', 'dd', 0),
(27, 'puas', '10', 'bb', 0),
(28, 'tidak puas', '5', 'aa', 0),
(29, 'puas', '15', 'bb', 0),
(30, 'tidak puas', '65', 'cc', 0),
(31, 'puas', '10', 'bb', 0),
(32, 'tidak puas', '25', 'aa', 0),
(33, 'puas', '15', 'bb', 0),
(34, 'tidak puas', '61', 'cc', 0),
(35, 'puas', '12', 'bb', 0),
(36, 'tidak puas', '50', 'aa', 0),
(37, 'puas', '14', 'bb', 0),
(38, 'tidak puas', '63', 'cc', 0),
(39, 'puas', '10', 'cc', 0),
(40, 'tidak puas', '5', 'cc', 0),
(41, 'puas', '15', 'bb', 0),
(42, 'tidak puas', '65', 'cc', 0),
(43, 'puas', '10', 'bb', 0),
(44, 'tidak puas', '10', 'dd', 0),
(45, 'puas', '19', 'dd', 0),
(46, 'tidak puas', '61', 'cc', 0),
(47, 'puas', '10', 'bb', 0),
(48, 'tidak puas', '5', 'dd', 0),
(49, 'puas', '18', 'bb', 0),
(50, 'tidak puas', '65', 'dd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dummy_list_modul`
--

CREATE TABLE `dummy_list_modul` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `kuesioner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy_list_modul`
--

INSERT INTO `dummy_list_modul` (`id`, `nama`, `tema`, `kuesioner`) VALUES
(1, 'KOR', 'Tema KOR', 'kuesioner_kor'),
(2, 'Sosial 1', 'Tema Modul Sosial 1', 'kuesioner_sosial1'),
(3, 'Sosial 2', 'Tema Modul Sosial 2', 'kuesioner_sosial2');

-- --------------------------------------------------------

--
-- Table structure for table `dummy_list_variabel`
--

CREATE TABLE `dummy_list_variabel` (
  `id` varchar(255) NOT NULL,
  `modul` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy_list_variabel`
--

INSERT INTO `dummy_list_variabel` (`id`, `modul`, `nama`) VALUES
('var1', 1, 'var1 modul1'),
('var2', 1, 'var2 modul1'),
('var3', 1, 'var3 modul1'),
('var1', 2, 'var1 modul2'),
('var2', 2, 'var2 modul2'),
('var1', 3, 'var1 modul3'),
('var2', 3, 'var2 modul3'),
('var3', 3, 'var3 modul3'),
('var4', 3, 'var3 modul4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dummy_kuesioner_kor_core`
--
ALTER TABLE `dummy_kuesioner_kor_core`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummy_list_modul`
--
ALTER TABLE `dummy_list_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummy_list_variabel`
--
ALTER TABLE `dummy_list_variabel`
  ADD PRIMARY KEY (`modul`,`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dummy_kuesioner_kor_core`
--
ALTER TABLE `dummy_kuesioner_kor_core`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `dummy_list_modul`
--
ALTER TABLE `dummy_list_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
