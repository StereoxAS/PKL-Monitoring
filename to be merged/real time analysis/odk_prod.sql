-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2016 pada 18.20
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odk_prod`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dummy_modul`
--

CREATE TABLE `dummy_modul` (
  `id` int(255) NOT NULL,
  `jawaban1` varchar(50) NOT NULL,
  `jawaban2` int(50) NOT NULL,
  `jawaban3` varchar(50) NOT NULL,
  `jawaban4` int(50) NOT NULL,
  `jawaban5` int(50) NOT NULL,
  `wilayah` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dummy_modul`
--

INSERT INTO `dummy_modul` (`id`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `wilayah`) VALUES
(1, 'a', 2, 'b', 3, 4, 1),
(2, 'a', 2, 'b', 3, 4, 2),
(3, 'a', 2, 'b', 3, 4, 3),
(4, 'a', 2, 'b', 3, 4, 4),
(5, 'b', 3, 'c', 4, 5, 5),
(6, 'b', 3, 'c', 4, 5, 6),
(7, 'b', 3, 'c', 4, 5, 7),
(8, 'd', 1, 'c', 3, 2, 1),
(9, 'b', 1, 'a', 2, 3, 2),
(10, 'a', 4, 'a', 3, 4, 3),
(11, 'b', 1, 'a', 3, 2, 4),
(12, 'b', 1, 'a', 3, 4, 5),
(13, 'a', 4, 'a', 1, 2, 6),
(14, 'b', 3, 'a', 4, 3, 7),
(15, 'c', 2, 'b', 3, 1, 1),
(16, 'b', 2, 'a', 1, 5, 2),
(17, 'b', 3, 'c', 2, 3, 3),
(18, 'c', 4, 'b', 2, 3, 4),
(19, 'b', 3, 'a', 2, 1, 5),
(20, 'a', 4, 'c', 1, 3, 6),
(21, 'c', 2, 'a', 4, 3, 7),
(22, 'b', 1, 'a', 4, 3, 1),
(23, 'c', 3, 'a', 1, 2, 2),
(24, 'a', 4, 'c', 1, 4, 3),
(25, 'b', 3, 'c', 1, 2, 4),
(26, 'b', 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dummy_modul2`
--

CREATE TABLE `dummy_modul2` (
  `id` int(255) NOT NULL,
  `jawaban1` int(2) NOT NULL,
  `jawaban2` int(2) NOT NULL,
  `jawaban3` int(2) NOT NULL,
  `wilayah` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dummy_modul2`
--

INSERT INTO `dummy_modul2` (`id`, `jawaban1`, `jawaban2`, `jawaban3`, `wilayah`) VALUES
(1, 1, 2, 3, 4),
(2, 4, 3, 2, 1),
(3, 3, 2, 1, 4),
(4, 2, 1, 4, 3),
(5, 4, 2, 3, 1),
(6, 3, 4, 2, 1),
(7, 2, 3, 1, 4),
(8, 3, 2, 4, 1),
(9, 4, 2, 1, 3),
(10, 2, 1, 3, 4),
(11, 2, 4, 1, 3),
(12, 3, 4, 1, 2),
(13, 2, 3, 1, 4),
(14, 4, 1, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dummy_modul`
--
ALTER TABLE `dummy_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummy_modul2`
--
ALTER TABLE `dummy_modul2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dummy_modul`
--
ALTER TABLE `dummy_modul`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `dummy_modul2`
--
ALTER TABLE `dummy_modul2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
