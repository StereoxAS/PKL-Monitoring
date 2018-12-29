-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 26, 2018 at 11:27 AM
-- Server version: 10.1.37-MariaDB-cll-lve
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `famobile_pkl57_kortimpcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `nim` varchar(7) DEFAULT NULL COMMENT 'nim mahasiswa',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

CREATE TABLE `error` (
  `unique_id_instance` varchar(50) NOT NULL,
  `xpath` varchar(100) NOT NULL,
  `nxpath` varchar(100) NOT NULL,
  `form_id` varchar(100) NOT NULL,
  `xml` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `error`
--

INSERT INTO `error` (`unique_id_instance`, `xpath`, `nxpath`, `form_id`, `xml`) VALUES
('100', '100', '100', '100', '100\r\n'),
('2', '3', '4', '5', '4');

-- --------------------------------------------------------

--
-- Table structure for table `log_kuesioner_final`
--

CREATE TABLE `log_kuesioner_final` (
  `unique_id_instance` tinyint(4) NOT NULL,
  `nim` tinyint(4) NOT NULL,
  `kortim` tinyint(4) NOT NULL,
  `form_id` tinyint(4) NOT NULL,
  `UploadName` tinyint(4) NOT NULL,
  `time` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `unique_id_instance` varchar(50) NOT NULL,
  `nim` varchar(7) NOT NULL,
  `kortim` varchar(7) NOT NULL,
  `status_isian` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `form_id` varchar(100) NOT NULL,
  `_id` int(11) NOT NULL,
  `UploadName` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`unique_id_instance`, `nim`, `kortim`, `status_isian`, `status`, `form_id`, `_id`, `UploadName`, `time`) VALUES
('uuid:f61c2f7c-111c-41f7-8663-1b623a587e22', '15.0001', '15.0000', 'Clear', 'Terkirim', 'coba1', 1, 'Nama Dummy', '2018-01-09 15:12:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
