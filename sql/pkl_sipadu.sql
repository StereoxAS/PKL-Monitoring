-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 03:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_sipadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_absensirapat`
--

CREATE TABLE `sipadu_absensirapat` (
  `id_rapat` int(8) NOT NULL,
  `id_peserta` varchar(18) NOT NULL,
  `waktu_kedatangan` datetime DEFAULT NULL,
  `is_wajib` enum('0','1') NOT NULL,
  `presentase_presensi` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_absensirapat`
--

INSERT INTO `sipadu_absensirapat` (`id_rapat`, `id_peserta`, `waktu_kedatangan`, `is_wajib`, `presentase_presensi`) VALUES
(33, '14.8434', NULL, '0', 0),
(33, '14.8448', NULL, '0', 0),
(34, '14.8127', NULL, '0', 0),
(34, '14.8116', NULL, '0', 0),
(34, '14.8106', NULL, '0', 0),
(34, '14.8103', NULL, '0', 0),
(34, '14.8067', NULL, '0', 0),
(34, '14.8048', NULL, '0', 0),
(34, '14.8041', NULL, '0', 0),
(34, '14.8017', NULL, '0', 0),
(34, '14.7978', NULL, '0', 0),
(34, '14.7942', NULL, '0', 0),
(34, '14.7941', NULL, '0', 0),
(34, '14.8148', NULL, '0', 0),
(34, '14.8219', NULL, '0', 0),
(34, '14.8232', NULL, '0', 0),
(34, '14.8284', NULL, '0', 0),
(34, '14.8318', NULL, '0', 0),
(34, '14.8322', NULL, '0', 0),
(34, '14.8338', NULL, '0', 0),
(34, '14.8434', NULL, '0', 0),
(34, '14.8448', NULL, '0', 0),
(35, '14.8127', NULL, '0', 0),
(35, '14.8116', NULL, '0', 0),
(35, '14.8106', NULL, '0', 0),
(35, '14.8103', NULL, '0', 0),
(35, '14.8067', NULL, '0', 0),
(35, '14.8048', NULL, '0', 0),
(35, '14.8041', NULL, '0', 0),
(35, '14.7991', NULL, '0', 0),
(35, '14.7978', NULL, '0', 0),
(35, '14.7942', NULL, '0', 0),
(35, '14.7941', NULL, '0', 0),
(35, '14.8148', NULL, '0', 0),
(35, '14.8219', NULL, '0', 0),
(35, '14.8232', NULL, '0', 0),
(35, '14.8284', NULL, '0', 0),
(35, '14.8318', NULL, '0', 0),
(35, '14.8338', NULL, '0', 0),
(35, '14.8356', NULL, '0', 0),
(35, '14.8368', NULL, '0', 0),
(35, '14.8434', NULL, '0', 0),
(36, '14.8106', NULL, '0', 0),
(36, '14.7978', NULL, '0', 0),
(36, '14.8284', NULL, '0', 0),
(36, '14.8356', NULL, '0', 0),
(36, '14.8368', NULL, '0', 0),
(36, '14.8434', NULL, '0', 0),
(37, '14.8106', NULL, '0', 0),
(37, '14.7978', NULL, '0', 0),
(37, '14.8219', NULL, '0', 0),
(37, '14.8284', NULL, '0', 0),
(37, '14.8356', NULL, '0', 0),
(37, '14.8368', NULL, '0', 0),
(37, '14.8434', NULL, '0', 0),
(38, '14.8106', NULL, '0', 0),
(38, '14.7978', NULL, '0', 0),
(38, '14.7942', NULL, '0', 0),
(38, '14.8204', NULL, '0', 0),
(38, '14.8219', NULL, '0', 0),
(38, '14.8232', NULL, '0', 0),
(38, '14.8284', NULL, '0', 0),
(38, '14.8356', NULL, '0', 0),
(38, '14.8368', NULL, '0', 0),
(38, '14.8434', NULL, '0', 0),
(40, '14.8112', NULL, '1', 0),
(39, '14.8427', NULL, '0', 0),
(39, '14.8379', NULL, '0', 0),
(39, '14.8348', NULL, '0', 0),
(39, '14.8271', NULL, '0', 0),
(39, '14.8260', NULL, '0', 0),
(39, '14.8221', NULL, '0', 0),
(39, '14.8171', NULL, '0', 0),
(39, '14.8169', NULL, '0', 0),
(39, '14.8124', NULL, '0', 0),
(39, '14.8114', NULL, '0', 0),
(39, '14.8058', NULL, '0', 0),
(39, '14.8032', NULL, '0', 0),
(39, '14.8015', NULL, '0', 0),
(39, '13.7685', NULL, '0', 0),
(39, '13.7466', NULL, '0', 0),
(40, '14.8091', NULL, '1', 0),
(40, '14.8030', NULL, '1', 0),
(40, '14.8029', NULL, '1', 0),
(40, '14.8027', NULL, '1', 0),
(40, '14.8018', NULL, '1', 0),
(40, '14.7992', NULL, '1', 0),
(40, '14.7985', NULL, '1', 0),
(40, '14.7981', NULL, '1', 0),
(40, '14.7980', NULL, '1', 0),
(40, '14.7975', NULL, '1', 0),
(40, '14.7970', NULL, '1', 0),
(40, '14.7951', NULL, '1', 0),
(40, '14.7950', NULL, '1', 0),
(40, '13.7849', NULL, '1', 0),
(40, '13.7555', NULL, '1', 0),
(40, '14.8138', NULL, '1', 0),
(40, '14.8161', NULL, '1', 0),
(40, '14.8167', NULL, '1', 0),
(40, '14.8173', NULL, '1', 0),
(40, '14.8222', NULL, '1', 0),
(40, '14.8249', NULL, '1', 0),
(40, '14.8250', NULL, '1', 0),
(40, '14.8258', NULL, '1', 0),
(40, '14.8282', NULL, '1', 0),
(40, '14.8302', NULL, '1', 0),
(40, '14.8328', NULL, '1', 0),
(40, '14.8334', NULL, '1', 0),
(40, '14.8345', NULL, '1', 0),
(40, '14.8351', NULL, '1', 0),
(40, '14.8360', NULL, '1', 0),
(40, '14.8372', NULL, '1', 0),
(40, '14.8393', NULL, '1', 0),
(40, '14.8421', NULL, '1', 0),
(40, '14.8429', NULL, '1', 0),
(40, '14.8430', NULL, '1', 0),
(40, '14.8438', NULL, '1', 0),
(41, '14.8120', NULL, '0', 0),
(41, '14.8108', NULL, '0', 0),
(41, '14.8078', NULL, '0', 0),
(41, '14.8076', NULL, '0', 0),
(41, '14.8072', NULL, '0', 0),
(41, '14.8038', NULL, '0', 0),
(41, '14.8014', NULL, '0', 0),
(41, '14.7997', NULL, '0', 0),
(41, '14.7989', NULL, '0', 0),
(41, '14.7988', NULL, '0', 0),
(41, '14.7937', NULL, '0', 0),
(41, '14.7935', NULL, '0', 0),
(41, '13.7730', NULL, '0', 0),
(41, '13.7676', NULL, '0', 0),
(41, '13.7519', NULL, '0', 0),
(41, '14.8137', NULL, '0', 0),
(41, '14.8146', NULL, '0', 0),
(41, '14.8155', NULL, '0', 0),
(41, '14.8159', NULL, '0', 0),
(41, '14.8165', NULL, '0', 0),
(41, '14.8186', NULL, '0', 0),
(41, '14.8187', NULL, '0', 0),
(41, '14.8206', NULL, '0', 0),
(41, '14.8207', NULL, '0', 0),
(41, '14.8225', NULL, '0', 0),
(41, '14.8229', NULL, '0', 0),
(41, '14.8236', NULL, '0', 0),
(41, '14.8247', NULL, '0', 0),
(41, '14.8253', NULL, '0', 0),
(41, '14.8291', NULL, '0', 0),
(41, '14.8293', NULL, '0', 0),
(41, '14.8296', NULL, '0', 0),
(33, '14.8403', NULL, '0', 0),
(33, '14.8368', NULL, '0', 0),
(33, '14.8356', NULL, '0', 0),
(32, '14.8434', NULL, '0', 0),
(32, '14.8368', NULL, '0', 0),
(32, '14.8356', NULL, '0', 0),
(31, '14.8106', NULL, '0', 0),
(31, '14.8103', NULL, '0', 0),
(31, '14.8067', NULL, '0', 0),
(31, '14.8048', NULL, '0', 0),
(31, '14.7978', NULL, '0', 0),
(31, '14.7941', NULL, '0', 0),
(32, '14.8116', NULL, '0', 0),
(32, '14.8103', NULL, '0', 0),
(32, '14.8067', NULL, '0', 0),
(32, '14.8048', NULL, '0', 0),
(32, '14.8041', NULL, '0', 0),
(32, '14.8017', NULL, '0', 0),
(32, '14.7991', NULL, '0', 0),
(32, '14.7942', NULL, '0', 0),
(32, '14.8219', NULL, '0', 0),
(32, '14.8318', NULL, '0', 0),
(32, '14.8322', NULL, '0', 0),
(33, '14.8338', NULL, '0', 0),
(31, '14.8116', NULL, '0', 0),
(31, '14.8127', NULL, '0', 0),
(31, '14.8148', NULL, '0', 0),
(31, '14.8232', NULL, '0', 0),
(31, '14.8284', NULL, '0', 0),
(31, '14.8338', NULL, '0', 0),
(31, '14.8356', NULL, '0', 0),
(31, '14.8368', NULL, '0', 0),
(31, '14.8434', NULL, '0', 0),
(33, '14.8127', NULL, '0', 0),
(33, '14.8103', NULL, '0', 0),
(33, '14.8067', NULL, '0', 0),
(33, '14.8048', NULL, '0', 0),
(33, '14.7978', NULL, '0', 0),
(33, '14.7955', NULL, '0', 0),
(33, '14.7941', NULL, '0', 0),
(33, '14.8148', NULL, '0', 0),
(33, '14.8191', NULL, '0', 0),
(33, '14.8232', NULL, '0', 0),
(30, '14.8403', NULL, '0', 0),
(30, '14.8318', NULL, '0', 0),
(30, '14.8219', NULL, '0', 0),
(30, '14.8200', NULL, '0', 0),
(30, '14.7942', NULL, '0', 0),
(30, '14.7978', NULL, '0', 0),
(30, '14.8067', NULL, '0', 0),
(30, '14.8116', NULL, '0', 0),
(30, '14.8127', NULL, '0', 0),
(30, '14.8356', NULL, '0', 0),
(30, '14.8434', NULL, '0', 0),
(30, '14.8041', NULL, '0', 0),
(30, '14.8017', NULL, '0', 0),
(30, '14.7991', NULL, '0', 0),
(29, '14.8448', NULL, '0', 0),
(29, '14.8434', NULL, '0', 0),
(29, '14.8383', NULL, '0', 0),
(29, '14.8382', NULL, '0', 0),
(29, '14.8335', NULL, '0', 0),
(29, '14.8322', NULL, '0', 0),
(29, '14.8319', NULL, '0', 0),
(29, '14.8291', NULL, '0', 0),
(29, '14.8275', NULL, '0', 0),
(29, '14.8219', NULL, '0', 0),
(29, '14.8206', NULL, '0', 0),
(29, '14.8204', NULL, '0', 0),
(29, '13.7519', NULL, '0', 0),
(29, '14.7942', NULL, '0', 0),
(29, '14.7991', NULL, '0', 0),
(29, '14.8014', NULL, '0', 0),
(29, '14.8017', NULL, '0', 0),
(29, '14.8041', NULL, '0', 0),
(29, '14.8048', NULL, '0', 0),
(29, '14.8067', NULL, '0', 0),
(29, '14.8103', NULL, '0', 0),
(29, '14.8116', NULL, '0', 0),
(28, '14.8434', NULL, '0', 0),
(28, '14.8403', NULL, '0', 0),
(28, '14.8355', NULL, '0', 0),
(28, '14.8322', NULL, '0', 0),
(28, '14.8318', NULL, '0', 0),
(28, '14.8275', NULL, '0', 0),
(28, '14.8219', NULL, '0', 0),
(28, '14.8204', NULL, '0', 0),
(28, '14.8200', NULL, '0', 0),
(28, '14.7938', NULL, '0', 0),
(28, '14.7942', NULL, '0', 0),
(28, '14.7973', NULL, '0', 0),
(28, '14.7991', NULL, '0', 0),
(28, '14.8017', NULL, '0', 0),
(28, '14.8041', NULL, '0', 0),
(28, '14.8067', NULL, '0', 0),
(28, '14.8116', NULL, '0', 0),
(28, '14.8127', NULL, '0', 0),
(27, '14.8443', '2017-01-04 16:30:00', '1', 100),
(27, '14.8437', '2017-01-04 16:30:00', '1', 100),
(27, '14.8392', '2017-01-04 16:30:00', '1', 100),
(27, '14.8228', '2017-01-04 16:30:00', '1', 100),
(27, '14.8204', '2017-01-04 16:30:00', '1', 100),
(27, '14.8178', '2017-01-04 16:30:00', '1', 100),
(27, '14.7958', '2017-01-04 16:30:00', '1', 100),
(27, '14.7960', '2017-01-04 16:30:00', '1', 100),
(27, '14.7967', '2017-01-04 16:30:00', '1', 100),
(27, '14.8096', '2017-01-04 16:30:00', '1', 100),
(27, '14.8115', '2017-01-04 16:30:00', '1', 100),
(27, '14.9999', '2017-01-04 16:30:00', '1', 100),
(26, '14.8418', NULL, '1', 0),
(26, '14.8403', NULL, '1', 0),
(26, '14.8288', NULL, '1', 0),
(26, '14.8200', NULL, '1', 0),
(26, '14.8195', NULL, '1', 0),
(26, '14.8191', NULL, '1', 0),
(26, '14.8176', NULL, '1', 0),
(26, '14.8160', NULL, '1', 0),
(26, '14.7938', NULL, '1', 0),
(26, '14.7947', NULL, '1', 0),
(26, '14.7955', NULL, '1', 0),
(26, '14.8066', NULL, '1', 0),
(25, '14.8427', NULL, '1', 0),
(25, '14.8425', NULL, '1', 0),
(25, '14.8423', NULL, '1', 0),
(25, '14.8419', NULL, '1', 0),
(25, '14.8408', NULL, '1', 0),
(25, '14.8400', NULL, '1', 0),
(25, '14.8389', NULL, '1', 0),
(25, '14.8379', NULL, '1', 0),
(25, '14.8378', NULL, '1', 0),
(25, '14.8365', NULL, '1', 0),
(25, '14.8353', NULL, '1', 0),
(25, '14.8348', NULL, '1', 0),
(25, '14.8346', NULL, '1', 0),
(25, '14.8342', NULL, '1', 0),
(25, '14.8325', NULL, '1', 0),
(25, '14.8310', NULL, '1', 0),
(25, '14.8301', NULL, '1', 0),
(25, '14.8294', NULL, '1', 0),
(25, '14.8287', NULL, '1', 0),
(25, '14.8278', NULL, '1', 0),
(25, '14.8271', NULL, '1', 0),
(25, '14.8264', NULL, '1', 0),
(25, '14.8261', NULL, '1', 0),
(25, '14.8260', NULL, '1', 0),
(25, '14.8259', NULL, '1', 0),
(25, '14.8252', NULL, '1', 0),
(25, '14.8246', NULL, '1', 0),
(25, '14.8243', NULL, '1', 0),
(25, '14.8221', NULL, '1', 0),
(25, '14.8214', NULL, '1', 0),
(25, '14.8203', NULL, '1', 0),
(25, '14.8199', NULL, '1', 0),
(25, '14.8189', NULL, '1', 0),
(25, '14.8171', NULL, '1', 0),
(25, '14.8169', NULL, '1', 0),
(25, '14.8150', NULL, '1', 0),
(25, '14.8147', NULL, '1', 0),
(25, '14.8139', NULL, '1', 0),
(25, '14.8126', NULL, '1', 0),
(25, '14.8124', NULL, '1', 0),
(25, '14.8114', NULL, '1', 0),
(25, '14.8102', NULL, '1', 0),
(25, '14.8094', NULL, '1', 0),
(25, '14.8058', NULL, '1', 0),
(25, '14.8055', NULL, '1', 0),
(25, '14.8049', NULL, '1', 0),
(25, '14.8043', NULL, '1', 0),
(25, '14.8037', NULL, '1', 0),
(25, '14.8032', NULL, '1', 0),
(25, '14.8020', NULL, '1', 0),
(25, '14.8015', NULL, '1', 0),
(25, '14.8008', NULL, '1', 0),
(25, '14.8007', NULL, '1', 0),
(25, '14.7987', NULL, '1', 0),
(25, '14.7977', NULL, '1', 0),
(25, '14.7948', NULL, '1', 0),
(25, '14.7944', NULL, '1', 0),
(25, '14.7936', NULL, '1', 0),
(25, '13.7901', NULL, '1', 0),
(25, '13.7685', NULL, '1', 0),
(25, '13.7641', NULL, '1', 0),
(25, '13.7466', NULL, '1', 0),
(41, '14.8319', NULL, '0', 0),
(41, '14.8335', NULL, '0', 0),
(41, '14.8349', NULL, '0', 0),
(41, '14.8357', NULL, '0', 0),
(41, '14.8362', NULL, '0', 0),
(41, '14.8369', NULL, '0', 0),
(41, '14.8370', NULL, '0', 0),
(41, '14.8371', NULL, '0', 0),
(41, '14.8374', NULL, '0', 0),
(41, '14.8375', NULL, '0', 0),
(41, '14.8404', NULL, '0', 0),
(41, '14.8409', NULL, '0', 0),
(41, '14.8444', NULL, '0', 0),
(41, '14.8446', NULL, '0', 0),
(42, '14.8132', NULL, '1', 0),
(42, '14.8123', NULL, '1', 0),
(42, '14.8120', NULL, '1', 0),
(42, '14.8119', NULL, '1', 0),
(42, '14.8101', NULL, '1', 0),
(42, '14.8099', NULL, '1', 0),
(42, '14.8086', NULL, '1', 0),
(42, '14.8082', NULL, '1', 0),
(42, '14.8075', NULL, '1', 0),
(42, '14.8039', NULL, '1', 0),
(42, '14.8035', NULL, '1', 0),
(42, '14.8011', NULL, '1', 0),
(42, '14.7989', NULL, '1', 0),
(42, '14.7979', NULL, '1', 0),
(42, '14.7973', NULL, '1', 0),
(42, '14.7965', NULL, '1', 0),
(42, '14.7957', NULL, '1', 0),
(42, '14.7940', NULL, '1', 0),
(42, '13.7480', NULL, '1', 0),
(42, '14.8144', NULL, '1', 0),
(42, '14.8162', NULL, '1', 0),
(42, '14.8184', NULL, '1', 0),
(42, '14.8192', NULL, '1', 0),
(42, '14.8206', NULL, '1', 0),
(42, '14.8218', NULL, '1', 0),
(42, '14.8223', NULL, '1', 0),
(42, '14.8256', NULL, '1', 0),
(42, '14.8275', NULL, '1', 0),
(42, '14.8289', NULL, '1', 0),
(42, '14.8308', NULL, '1', 0),
(42, '14.8312', NULL, '1', 0),
(42, '14.8323', NULL, '1', 0),
(42, '14.8349', NULL, '1', 0),
(42, '14.8382', NULL, '1', 0),
(42, '14.8383', NULL, '1', 0),
(42, '14.8397', NULL, '1', 0),
(42, '14.8406', NULL, '1', 0),
(42, '14.8411', NULL, '1', 0),
(42, '14.8412', NULL, '1', 0),
(42, '14.8444', NULL, '1', 0),
(42, '14.8450', NULL, '1', 0),
(43, '14.8119', NULL, '1', 0),
(43, '14.7979', NULL, '1', 0),
(43, '14.8144', NULL, '1', 0),
(43, '14.8184', NULL, '1', 0),
(43, '14.8192', NULL, '1', 0),
(43, '14.8218', NULL, '1', 0),
(43, '14.8256', NULL, '1', 0),
(43, '14.8275', NULL, '1', 0),
(43, '14.8323', NULL, '1', 0),
(43, '14.8349', NULL, '1', 0),
(43, '14.8411', NULL, '1', 0),
(44, '14.8119', NULL, '1', 0),
(44, '14.8011', NULL, '1', 0),
(44, '13.7730', NULL, '1', 0),
(44, '14.8162', NULL, '1', 0),
(44, '14.8189', NULL, '1', 0),
(44, '14.8206', NULL, '1', 0),
(44, '14.8256', NULL, '1', 0),
(44, '14.8278', NULL, '1', 0),
(44, '14.8293', NULL, '1', 0),
(44, '14.8308', NULL, '1', 0),
(44, '14.8312', NULL, '1', 0),
(44, '14.8349', NULL, '1', 0),
(44, '14.8382', NULL, '1', 0),
(44, '14.8387', NULL, '1', 0),
(44, '14.8446', NULL, '1', 0),
(45, '14.8120', NULL, '1', 0),
(45, '14.8119', NULL, '1', 0),
(45, '14.7989', NULL, '1', 0),
(45, '14.7960', NULL, '1', 0),
(45, '14.8162', NULL, '1', 0),
(45, '14.8206', NULL, '1', 0),
(45, '14.8256', NULL, '1', 0),
(45, '14.8308', NULL, '1', 0),
(45, '14.8349', NULL, '1', 0),
(46, '14.8119', NULL, '1', 0),
(46, '14.7986', NULL, '1', 0),
(46, '14.7979', NULL, '1', 0),
(46, '14.8144', NULL, '1', 0),
(46, '14.8184', NULL, '1', 0),
(46, '14.8192', NULL, '1', 0),
(46, '14.8218', NULL, '1', 0),
(46, '14.8275', NULL, '1', 0),
(46, '14.8308', NULL, '1', 0),
(46, '14.8323', NULL, '1', 0),
(47, '14.8120', NULL, '1', 0),
(47, '14.8108', NULL, '1', 0),
(47, '14.8078', NULL, '1', 0),
(47, '14.8076', NULL, '1', 0),
(47, '14.8072', NULL, '1', 0),
(47, '14.8038', NULL, '1', 0),
(47, '14.8014', NULL, '1', 0),
(47, '14.7997', NULL, '1', 0),
(47, '14.7989', NULL, '1', 0),
(47, '14.7988', NULL, '1', 0),
(47, '14.7937', NULL, '1', 0),
(47, '14.7935', NULL, '1', 0),
(47, '13.7730', NULL, '1', 0),
(47, '13.7676', NULL, '1', 0),
(47, '13.7633', NULL, '1', 0),
(47, '13.7519', NULL, '1', 0),
(47, '14.8137', NULL, '1', 0),
(47, '14.8146', NULL, '1', 0),
(47, '14.8159', NULL, '1', 0),
(47, '14.8165', NULL, '1', 0),
(47, '14.8186', NULL, '1', 0),
(47, '14.8187', NULL, '1', 0),
(47, '14.8206', NULL, '1', 0),
(47, '14.8207', NULL, '1', 0),
(47, '14.8225', NULL, '1', 0),
(47, '14.8229', NULL, '1', 0),
(47, '14.8236', NULL, '1', 0),
(47, '14.8247', NULL, '1', 0),
(47, '14.8253', NULL, '1', 0),
(47, '14.8291', NULL, '1', 0),
(47, '14.8293', NULL, '1', 0),
(47, '14.8296', NULL, '1', 0),
(47, '14.8335', NULL, '1', 0),
(47, '14.8349', NULL, '1', 0),
(47, '14.8357', NULL, '1', 0),
(47, '14.8362', NULL, '1', 0),
(47, '14.8369', NULL, '1', 0),
(47, '14.8370', NULL, '1', 0),
(47, '14.8371', NULL, '1', 0),
(47, '14.8374', NULL, '1', 0),
(47, '14.8375', NULL, '1', 0),
(47, '14.8404', NULL, '1', 0),
(47, '14.8409', NULL, '1', 0),
(47, '14.8444', NULL, '1', 0),
(47, '14.8446', NULL, '1', 0),
(48, '14.8078', NULL, '1', 0),
(48, '14.8072', NULL, '1', 0),
(48, '14.7997', NULL, '1', 0),
(48, '14.7988', NULL, '1', 0),
(48, '14.7935', NULL, '1', 0),
(48, '13.7730', NULL, '1', 0),
(48, '13.7519', NULL, '1', 0),
(48, '14.8137', NULL, '1', 0),
(48, '14.8146', NULL, '1', 0),
(48, '14.8155', NULL, '1', 0),
(48, '14.8159', NULL, '1', 0),
(48, '14.8165', NULL, '1', 0),
(48, '14.8186', NULL, '1', 0),
(48, '14.8207', NULL, '1', 0),
(48, '14.8225', NULL, '1', 0),
(48, '14.8236', NULL, '1', 0),
(48, '14.8247', NULL, '1', 0),
(48, '14.8291', NULL, '1', 0),
(48, '14.8293', NULL, '1', 0),
(48, '14.8296', NULL, '1', 0),
(48, '14.8335', NULL, '1', 0),
(48, '14.8357', NULL, '1', 0),
(48, '14.8369', NULL, '1', 0),
(48, '14.8370', NULL, '1', 0),
(48, '14.8371', NULL, '1', 0),
(48, '14.8375', NULL, '1', 0),
(48, '14.8404', NULL, '1', 0),
(48, '14.8409', NULL, '1', 0),
(49, '14.8120', NULL, '1', 0),
(49, '14.8119', NULL, '1', 0),
(49, '14.7989', NULL, '1', 0),
(49, '14.8162', NULL, '1', 0),
(49, '14.8206', NULL, '1', 0),
(49, '14.8256', NULL, '1', 0),
(49, '14.8308', NULL, '1', 0),
(49, '14.8349', NULL, '1', 0),
(50, '14.8120', NULL, '1', 0),
(50, '14.8119', NULL, '1', 0),
(50, '14.7989', NULL, '1', 0),
(50, '14.8162', NULL, '1', 0),
(50, '14.8189', NULL, '1', 0),
(50, '14.8206', NULL, '1', 0),
(50, '14.8256', NULL, '1', 0),
(50, '14.8308', NULL, '1', 0),
(50, '14.8349', NULL, '1', 0),
(51, '14.8120', NULL, '1', 0),
(51, '14.8119', NULL, '1', 0),
(51, '14.8113', NULL, '1', 0),
(51, '14.8106', NULL, '1', 0),
(51, '14.8093', NULL, '1', 0),
(51, '14.8086', NULL, '1', 0),
(51, '14.8011', NULL, '1', 0),
(51, '14.7989', NULL, '1', 0),
(51, '14.7967', NULL, '1', 0),
(51, '14.7960', NULL, '1', 0),
(51, '14.8162', NULL, '1', 0),
(51, '14.8184', NULL, '1', 0),
(51, '14.8206', NULL, '1', 0),
(51, '14.8222', NULL, '1', 0),
(51, '14.8256', NULL, '1', 0),
(51, '14.8289', NULL, '1', 0),
(51, '14.8308', NULL, '1', 0),
(51, '14.8349', NULL, '1', 0),
(51, '14.8373', NULL, '1', 0),
(51, '14.8434', NULL, '1', 0),
(52, '14.8120', NULL, '1', 0),
(52, '14.8119', NULL, '1', 0),
(52, '14.7989', NULL, '1', 0),
(52, '14.8162', NULL, '1', 0),
(52, '14.8206', NULL, '1', 0),
(52, '14.8256', NULL, '1', 0),
(52, '14.8308', NULL, '1', 0),
(52, '14.8349', NULL, '1', 0),
(53, '14.8134', NULL, '1', 0),
(53, '14.8132', NULL, '1', 0),
(53, '14.8123', NULL, '1', 0),
(53, '14.8108', NULL, '1', 0),
(53, '14.8101', NULL, '1', 0),
(53, '14.8099', NULL, '1', 0),
(53, '14.8086', NULL, '1', 0),
(53, '14.8082', NULL, '1', 0),
(53, '14.8078', NULL, '1', 0),
(53, '14.8076', NULL, '1', 0),
(53, '14.8075', NULL, '1', 0),
(53, '14.8072', NULL, '1', 0),
(53, '14.8039', NULL, '1', 0),
(53, '14.8038', NULL, '1', 0),
(53, '14.8035', NULL, '1', 0),
(53, '14.8014', NULL, '1', 0),
(53, '14.8011', NULL, '1', 0),
(53, '14.8000', NULL, '1', 0),
(53, '14.7979', NULL, '1', 0),
(53, '14.7973', NULL, '1', 0),
(53, '14.7965', NULL, '1', 0),
(53, '14.7957', NULL, '1', 0),
(53, '14.7940', NULL, '1', 0),
(53, '14.7937', NULL, '1', 0),
(53, '14.7935', NULL, '1', 0),
(53, '13.7730', NULL, '1', 0),
(53, '13.7676', NULL, '1', 0),
(53, '13.7519', NULL, '1', 0),
(53, '13.7480', NULL, '1', 0),
(53, '14.8137', NULL, '1', 0),
(53, '14.8144', NULL, '1', 0),
(53, '14.8155', NULL, '1', 0),
(53, '14.8159', NULL, '1', 0),
(53, '14.8162', NULL, '1', 0),
(53, '14.8165', NULL, '1', 0),
(53, '14.8184', NULL, '1', 0),
(53, '14.8186', NULL, '1', 0),
(53, '14.8187', NULL, '1', 0),
(53, '14.8192', NULL, '1', 0),
(53, '14.8206', NULL, '1', 0),
(53, '14.8207', NULL, '1', 0),
(53, '14.8218', NULL, '1', 0),
(53, '14.8223', NULL, '1', 0),
(53, '14.8225', NULL, '1', 0),
(53, '14.8229', NULL, '1', 0),
(53, '14.8236', NULL, '1', 0),
(53, '14.8247', NULL, '1', 0),
(53, '14.8256', NULL, '1', 0),
(53, '14.8275', NULL, '1', 0),
(53, '14.8289', NULL, '1', 0),
(53, '14.8293', NULL, '1', 0),
(53, '14.8296', NULL, '1', 0),
(53, '14.8308', NULL, '1', 0),
(53, '14.8312', NULL, '1', 0),
(53, '14.8319', NULL, '1', 0),
(53, '14.8323', NULL, '1', 0),
(53, '14.8335', NULL, '1', 0),
(53, '14.8349', NULL, '1', 0),
(53, '14.8357', NULL, '1', 0),
(53, '14.8362', NULL, '1', 0),
(53, '14.8369', NULL, '1', 0),
(53, '14.8371', NULL, '1', 0),
(53, '14.8374', NULL, '1', 0),
(53, '14.8382', NULL, '1', 0),
(53, '14.8383', NULL, '1', 0),
(53, '14.8397', NULL, '1', 0),
(53, '14.8404', NULL, '1', 0),
(53, '14.8406', NULL, '1', 0),
(53, '14.8409', NULL, '1', 0),
(53, '14.8411', NULL, '1', 0),
(53, '14.8412', NULL, '1', 0),
(53, '14.8444', NULL, '1', 0),
(53, '14.8446', NULL, '1', 0),
(53, '14.8450', NULL, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_administrasi`
--

CREATE TABLE `sipadu_administrasi` (
  `id_administrasi` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `waktu_upload` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_administrasi`
--

INSERT INTO `sipadu_administrasi` (`id_administrasi`, `keterangan`, `nama_file`, `waktu_upload`) VALUES
(1, 'Format Proposal Analisis', '011216Proposal.docx', '2016-12-01'),
(2, 'Surat Peminjaman Ruang', '12122016SuratPeminjamanRuang.docx', '2016-12-12'),
(3, 'Format Notulensi ', '27112016FormatNotulensi.docx', '2016-11-27'),
(4, 'Undangan Dosen', '05122016', '2016-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_dosen`
--

CREATE TABLE `sipadu_dosen` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_modul` char(2) DEFAULT NULL,
  `jabatan` varchar(50) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `ruang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_dosen`
--

INSERT INTO `sipadu_dosen` (`nip`, `nama`, `id_modul`, `jabatan`, `no_hp`, `ruang`, `email`) VALUES
('195205151975031003', 'Muchlis Husein, MA', '5', 'Pembimbing Analisis dan Laporan', '085772801465', 'Gedung 3 lantai 1', 'muchlis@stis.ac.id'),
('195311121977031001', 'R Dwi Harwin, MA', '6', 'Ketua/Pembimbing Analisis dan Laporan (Koord)', '081388215859', 'Ruang Dosen, Gedung 1 Lantai 3', 'rdharwin@yahoo.com'),
('195806081986031005', 'Suryanto AL, MM', '7', 'Pembimbing Analisis dan Laporan', '08161439159', 'Gedung 2 Lantai 3', 'suryanto@stis.ac.id'),
('196102191983122001', 'Dr. Budiasih', '7', 'Ketua/Pembimbing Analisis dan Laporan (Koord)', '081510171610', 'Gedung 3 Lantai 1', 'budiasih@stis.ac.id'),
('196207221986012001', 'Ir. Ekaria, M.Si', '6', 'Pembimbing Analisis dan Laporan', '08158176780', 'Ruang Dosen Gedung 2 Lantai 3, Bilik Sebelah Kanan', 'dewip@stis.ac.id'),
('196307301986011001', 'MA Yulianto, M.Sc', '6', 'Pembimbing Kuesioner dan Buku Pedoman', '08159946595', 'Ruang Dosen Gedung 2 Lantai 3, Bilik Sebelah Kiri ', 'yulianto@stis.ac.id'),
('196706121991011001', 'Muhammad Dokhi, Ph.D', '1', 'Ketua/Pembimbing Analisis dan Laporan (Koord)', '081330309440', 'Gedung 3 lantai 1 (samping BAAK)', 'dokhi@stis.ac.id'),
('196805031991011001', 'I Made Arcana, Ph.D', '5', 'Ketua/Pembimbing Analisis dan Laporan (Koord)', '082138235109', 'Gedung 3 lantai 1', 'arcana@stis.ac.id'),
('197608092000032001', 'Neli Agustina, M.Si', '5', 'Pembimbing Analisis dan Laporan', '08129644688', 'Gedung 1 lantai 3', 'neli@stis.ac.id'),
('198004012003122003', 'Fitri Kartiasih, M.Si', '5', 'Pembimbing Analisis dan Laporan', '081519910971', 'Gedung 2 lantai 3', 'fkartiasih@stis.ac.id'),
('198102272004122001', 'Toza Sathia Utiayarsih, M.Stat', '7', 'Pembimbing Analisis dan Laporan', '08158767624', 'BAU', 'toza@stis.ac.id'),
('198106042003121001', 'Robert Kurniawan, M.Si', '5', 'Pembimbing Kuesioner dan Buku Pedoman', '085244174711', 'Gedung 2 lantai 3', 'robertk@stis.ac.id'),
('198111272004122001', 'Dewi Purwanti, M.Si', '6', 'Pembimbing Analisis dan Laporan', '085215955605', 'Ruang Dosen, Gedung 1 Lantai 2', 'E_ria_S@yahoo.co.id'),
('198204212003121004', 'Ricky Yordani, M.Stat', '1', 'Pembimbing Analisis dan Laporan', '08194226731', 'Ruang Pengolahan (samping audit)', 'yordani@stis.ac.id'),
('198302182004122001', 'Efri Diah Utami, M.Stat', '1', 'Pembimbing Kuesioner dan Buku Pedoman (Koord)', '081341618261', 'Gedung 3 lanti 3', 'efridiah@stis.ac.id'),
('198402142007012008', 'Ribut Nurul Triwahyuni, MSE', '6', 'Pembimbing Kuesioner dan Buku Pedoman (Koord)', '085244029288', 'Ruang Dosen Gedung 2 Lantai 3, Bilik Sebelah Kanan', 'rnurult@gmail.com'),
('198410152007012001', 'Siskarossa Oktora, M.Stat', '6', 'Pembimbing Analisis dan Laporan', '081355101520', 'Ruang Jurusan Gedung 1 Lantai 3', 'siskarossa@stis.ac.id'),
('198506012007012003', 'Aisyah Fitri, M.Si', '5', 'Pembimbing Kuesioner dan Buku Pedoman (Koord)', '081379198540', 'Ruang ketua programstudi D3', 'aisyah.fy@stis.ac.id'),
('198512122008011004', 'Farid Ridho, MT', '10', 'Pembimbing', '085282012357', 'Gedung 2 Lantai 3', 'faridr@stis.ac.id'),
('198601202008011002', 'Ibnu Santoso, MT', '10', 'Pembimbing', '081341829968', 'Gedung 2 Lantai 3', 'ibnu@stis.ac.id'),
('198606022009022007', 'Ika Yuni Wulansari, M.Stat', '1', 'Pembimbing Analisis dan Laporan', '089637054034', 'Gedung 1 lantai 3 (jurusan)', 'ikayuni@stis.ac.id'),
('198612182008012002', 'Ray Sastri, M.Si', '1', 'Pembimbing Analisis dan Laporan', '087766762120', 'BAAK', 'raysastri@stis.ac.id'),
('198703052009021003', 'Gama Putra Danu, M.Si', '1', 'Pembimbing Kuesioner dan Buku Pedoman ', '081244532067', 'Gedung 3 lantai 2', 'gamaputra@stis.ac.id'),
('198810242010122001', 'Siti Mariyah, MT', '10', 'Pembimbing', '08568243290', 'Gedung 2 Lantai 3', 'sitimariyah@stis.ac.id'),
('198902072010122001', 'Lya Huliyyatus Suadaa, MT', '10', 'Pembimbing', '08988283607', 'Gedung 2 Lantai 3', 'lya@stis.ac.id'),
('197611021997121001', 'Novia Budi Parwantp, Ph.D', '4', 'Ketua/Pembimbing Analisis dan Laporan (Koord)', '081284824866', 'Gedung 2 Lantai 2 ( Ruang LPMI )', 'noviabudi@stis.ac.id'),
('198507122011012016', 'Risni Julaenii, M.Stat', '4', 'Pembimbing Analisis dan Laporan', '081284050686', 'Gedung 2 Lantai 2 ', 'risnij@stis.ac.id'),
('197605052000032003', 'Lia Yuliana, MT', '4', 'Pembimbing Analisis dan Laporan', '08129691386', 'Gedung 1 Lantai 2', 'lia@stis.ac.id'),
('197807222000121003', 'Sugiarto, MM', '4', 'Pembimbing Kuesioner dan Buku Pedoman (Koord)', '08197654699', 'Gedung 2 Lantai 3', 'soegie@stis.ac.id'),
('197810021999121001', 'Rudi Salam, M.Si', '4', 'Pembimbing Kuesioner dan Buku Pedoman', '08123781143', 'Gedung 1 Lantai 3', 'rudisalam@stis.ac.id'),
('196302081985011001', 'Waris Marsisno, M.Stat', '3', 'Ketua/Pembimbing Analisis dan Laporan (Koord)', '082111734068', 'gd 2 lt 2', 'waris@stis.ac.id'),
('196105101983122001', 'Siti Haiyinah W, M.Si', '3', 'Pembimbing Analisis dan Laporan', '0817888355', 'gd 1 lt 3', 'haiyinah_wijaya@yahoo.com'),
('196607191991011001', 'Yaya Setiadi, MM', '3', 'Pembimbing Analisis dan Laporan', '081210187943', 'gd 2 lt 3', 'setiadi@stis.ac.id'),
('198108022009022007', 'Fitri Catur Lestari, M.Si', '3', 'Pembimbing Analisis dan Laporan', '08157904581', 'gd 1 lt 3', 'fitricaturlestari@stis.ac.id'),
('198006242003121004', 'Budi Yuniarto, M.Si', '3', 'Pembimbing Kuesioner dan Buku Pedoman (Koord)', '081316655315', 'gd 2 lt 3', 'byuniarto@stis.ac.id'),
('198109262004122001', 'Winih Budiarti, M.Stat', '3', 'Pembimbing Kuesioner dan Buku Pedoman', '081314136759', 'gd 2 lt 3', 'winih@stis.ac.id'),
('197001121991122001', 'Dr. Tiodora Hadumaon Siagian', '2', 'Ketua/Pembimbing Analisis dan Laporan (Koord)', '081585464795', 'Gedung 3, sebelah BAAK', 'theo@stis.ac.id'),
('198001182011011001', 'Bony Parulian Y, M.Si', '2', 'Pembimbing Analisis dan Laporan', '085945880721', 'Gedung 2 lantai 3', 'bonyp@stis.ac.id'),
('197701042009022003', 'Liza Kurniasari, M.Si', '2', 'Pembimbing Analisis dan Laporan', '081310734734', 'Gedung 2 lantai 2', 'lizakurnia@stis.ac.id'),
('196503141988021001', 'Jeffry RH Sitorus, M.Si', '2', 'Pembimbing Analisis dan Laporan', '081513121025', 'Gedung 1 lantai 3', 'jeffryrhs@stis.ac.id'),
('198202022003121004', 'Febri Wicaksono, M.Si', '2', 'Pembimbing Kuesioner dan Buku Pedoman (Koord)', '081261117043', 'Gedung 2 lantai 3', 'febri@stis.ac.id'),
('196406161987021002', 'Abdul Ghofar, M.TI', '2', 'Pembimbing Kuesioner dan Buku Pedoman', '081281990385', 'Gedung 1 lantai 3 (jurusan KS)', 'ghofar@stis.ac.id'),
('195410081979031004', 'Odry Syahwil, M.Si', '8', 'Pembimbing Kuesioner dan Buku Pedoman', '081574594320', 'Gedung 1 lantai 3', 'odry_syafwil@stis.ac.id'),
('197502041996122001', 'Anugerah K Monika, S.Si, ME', '8', 'Pembimbing Kuesioner dan Buku Pedoman (Koord)', '0818138751', 'Gedung 1 lantai 2', 'ak.monika@stis.ac.id'),
('198605132008012001', 'Metty Nurul R, M.Stat', '8', 'Pembimbing Analisis dan Laporan', '085251920650', 'BAAK', 'metty@stis.ac.id'),
('197001251998032001', 'Retnaningsih, S.So., ME', '8', 'Pembimbing Analisis dan Laporan', '081317700686', 'Gedung 1 lantai 2', 'retna@stis.ac.id'),
('198110142004122001', 'Krismanti Triwahyuni, M.Si', '8', 'Pembimbing Analisis dan Laporan', '085216465162', '', 'krismanti@stis.ac.id'),
('197305281995121001', 'Agung Priyo Utomo, MT', '8', 'Ketua/Pembimbing Analisis dan Laporan (Koord)', '08161123675', 'Ruang Kepala Program Studi D3', 'agung@stis.ac.id'),
('197204241994031003', 'Sukim, M.Si', '7', 'Pembimbing Kuesioner dan Buku Pedoman', '08128874783', 'BAU', 'sukim@stis.ac.id'),
('197806071999121001', 'Rofiq Nur Rizal, M.Si', '7', 'Pembimbing Kuesioner dan Buku Pedoman (Koord)', '081341250718', 'Gedung 2 Lantai 3', 'rofiq@stis.ac.id'),
('197512071997031003', 'Andi Kurniawan, M.Si', '7', 'Pembimbing Analisis dan Laporan', '081373029050', 'Gedung 2 Lantai 3', 'andikurnia@stis.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_faq`
--

CREATE TABLE `sipadu_faq` (
  `id_faq` int(5) NOT NULL,
  `id_mahasiswa` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `waktu` datetime DEFAULT NULL,
  `pertanyaan` text COLLATE utf8_unicode_ci NOT NULL,
  `jawaban` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_gallery`
--

CREATE TABLE `sipadu_gallery` (
  `id_gallery` int(5) NOT NULL,
  `jenis` enum('foto','video') NOT NULL,
  `url` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `kegiatan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_jenisrapat`
--

CREATE TABLE `sipadu_jenisrapat` (
  `id_jenis_rapat` char(2) NOT NULL,
  `jenis_rapat` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_jenisrapat`
--

INSERT INTO `sipadu_jenisrapat` (`id_jenis_rapat`, `jenis_rapat`) VALUES
('D1', 'BPH dengan Dosen'),
('D2', 'Bidang dengan Dosen'),
('D3', 'SEKSI dengan Dosen'),
('D4', 'Koordinasi dengan Do'),
('D5', 'Gabungan dengan Dose'),
('D6', 'Akbar dengan Dosen'),
('D7', 'Pleno dengan Dosen'),
('M1', 'BPH'),
('M2', 'Bidang'),
('M3', 'SEKSI'),
('M4', 'Koordinasi'),
('M5', 'Gabungan'),
('M6', 'Akbar'),
('M7', 'Pleno');

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_mahasiswa`
--

CREATE TABLE `sipadu_mahasiswa` (
  `nim` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` char(4) NOT NULL,
  `no_telepon` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` char(1) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `id_tim` varchar(4) DEFAULT NULL,
  `id_modul` char(2) NOT NULL,
  `id_seksi` char(1) NOT NULL,
  `id_subseksi` varchar(3) DEFAULT NULL,
  `jabatan` varchar(33) DEFAULT NULL,
  `kodeLupaPass` varchar(32) DEFAULT NULL,
  `denda` double DEFAULT NULL,
  `lng` float NOT NULL DEFAULT '107.441',
  `lat` float NOT NULL DEFAULT '-3.74105'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_mahasiswa`
--

INSERT INTO `sipadu_mahasiswa` (`nim`, `nama`, `kelas`, `no_telepon`, `alamat`, `tgl_lahir`, `foto`, `email`, `password`, `level`, `no_ktp`, `id_tim`, `id_modul`, `id_seksi`, `id_subseksi`, `jabatan`, `kodeLupaPass`, `denda`, `lng`, `lat`) VALUES
('14.8136', 'Fikry Alkatiri', '3SK4', '', '', '1996-03-30', NULL, '14.8136@stis.ac.id', 'a3be343077f6ca58c7c84499d4ba40d3', '3', '', '001B', '4', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8135', 'Feby Aulia', '3SK5', '', '', NULL, NULL, '14.8135@stis.ac.id', '6e4c260a1d864bc516c6a420727b0d38', '0', NULL, '001B', '2', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8134', 'Febry Utami', '3KS1', '', '', NULL, NULL, '14.8134@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, '001B', '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8133', 'Febriana Dwi Jayanti', '3SK4', '085367897575', '', '1997-02-11', NULL, '14.8133@stis.ac.id', 'b79bb40a23c0404e67631bc45115c107', '0', '', '001A', '2', '5', '051', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8132', 'Fazra Handika', '3SE3', '', '', NULL, NULL, '14.8132@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, '001A', '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8131', 'Fauziah Zen', '3SE1', '', '', NULL, NULL, '14.8131@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, '001A', '7', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8130', 'Fauziah Caesar Rani', '3SE7', '', '', NULL, NULL, '14.8130@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '042', 'Bendahara Seksi', NULL, NULL, 107.441, -3.74105),
('14.8129', 'Fauzan Jodie Aldrian', '3SE2', '', '', NULL, NULL, '14.8129@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8128', 'Fatma Nur Aini', '3SK3', '', '', NULL, NULL, '14.8128@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8127', 'Fatimah Azzahro''', '3SK2', '', '', NULL, NULL, '14.8127@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '042', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8126', 'Faris Lahudin', '3KS2', '', '', NULL, NULL, '14.8126@stis.ac.id', '6b7fc3cce93ee1a09fc21ba7ec55f60e', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8125', 'Farid Ridho', '3SE1', '', '', NULL, NULL, '14.8125@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8124', 'Farhan Yahya Hidayat', '3KS1', '085641518635', 'Jalan Sensus II C No. 16', '1996-09-02', NULL, '14.8124@stis.ac.id', '733815c4245f1cc34b807d38d8c24836', '3', '3306040209960002', NULL, '10', '7', '071', 'Koordinator Subseksi', 'cMckaFLU', NULL, 107.441, -3.74105),
('14.8123', 'Fanny Nuzhida Febriana', '3SE6', '', '', NULL, NULL, '14.8123@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8121', 'Fakhitah Lubis', '3SE5', '', '', NULL, NULL, '14.8121@stis.ac.id', '0ff071dfc0605de932797894c97d3755', '0', NULL, NULL, '1', '4', '042', 'Anggota', 'ajZksFZ7', NULL, 107.441, -3.74105),
('14.8120', 'Fajar Khairiah Shafa', '3SE4', '', '', NULL, NULL, '14.8120@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8119', 'Faiq Fajar P.', '3SE7', '', '', NULL, NULL, '14.8119@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8118', 'Fahmi Arif Habibullah', '3SE6', '', '', NULL, NULL, '14.8118@stis.ac.id', '03aae0400b27722d79c1b42b50effba1', '0', NULL, NULL, '6', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8117', 'Fadlilah Rahmawati', '3SK1', '', '', NULL, NULL, '14.8117@stis.ac.id', '90a71693db38a57e497f28bf0ae66c47', '2', NULL, NULL, '4', '0', '000', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8116', 'Fadlilah Nur Hidayah', '3SK5', '085643734312', 'Jl. Otista 2 no. 67A RW 07 RW 09, Bidara cina, Jatinegara', '1996-12-11', NULL, '14.8116@stis.ac.id', 'cbb0b76c7535e31b97ff3d487390f11d', '3', '', NULL, '3', '4', '041', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8115', 'Fadhila Ajeng Damaris', '3SE3', '', '', NULL, NULL, '14.8115@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '0', '0', '000', 'Sekretaris Umum II', NULL, NULL, 107.441, -3.74105),
('14.8114', 'Fadel Muhammad', '3KS1', '', '', NULL, NULL, '14.8114@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8113', 'Fachmi Puspita Saputri', '3SE2', '', '', NULL, NULL, '14.8113@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8112', 'Etik Cahyani', '3SE1', '', '', NULL, NULL, '14.8112@stis.ac.id', 'd25d67c31de7d737a07fba5d6e41afc9', '2', NULL, NULL, '8', '0', '000', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8111', 'Eska Venasari Lubis', '3SE7', '', '', NULL, NULL, '14.8111@stis.ac.id', '736ca8845f535c2ed5c00df951e7f1bb', '0', NULL, NULL, '7', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8110', 'Erwin Saputra', '3SE5', '', '', NULL, NULL, '14.8110@stis.ac.id', '2685ff85362338734fa12ad7bef652ef', '0', NULL, NULL, '7', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8109', 'Erisya Desi D.', '3SK4', '', '', NULL, NULL, '14.8109@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '5', '051', 'Bendahara Seksi', NULL, NULL, 107.441, -3.74105),
('14.8108', 'Erika Asta Dewi', '3SE6', '', '', NULL, NULL, '14.8108@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8107', 'Epsilonia Diana Putri', '3SE5', '', '', NULL, NULL, '14.8107@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8106', 'Emilia Fitri Siregar', '3SK3', '', '', NULL, NULL, '14.8106@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8105', 'Ema Fadlilah', '3SE4', '', '', NULL, NULL, '14.8105@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8104', 'Elvana Riska P', '3SK2', '', '', NULL, NULL, '14.8104@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '042', 'Bendahara Seksi', NULL, NULL, 107.441, -3.74105),
('14.8103', 'Else Huslijah', '3KS2', '', '', NULL, NULL, '14.8103@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '3', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8102', 'Elsa Maudina Avianti', '3KS1', '', '', NULL, NULL, '14.8102@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '1', NULL, NULL, '10', '7', '073', 'Sekretaris dan Bendahara Seksi', NULL, NULL, 107.441, -3.74105),
('14.8101', 'Eldorado Alfu Ilmy', '3SE4', '', '', NULL, NULL, '14.8101@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8100', 'Eka Nanda Trisnawan', '3KS1', '', '', NULL, NULL, '14.8100@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '2', '5', '051', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8099', 'Eka Apriliyana', '3SK1', '', '', NULL, NULL, '14.8099@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8098', 'Eka Amalia', '3SE3', '', '', NULL, NULL, '14.8098@stis.ac.id', '34d2a71dc90d740a9adbd9e1363145fe', '0', NULL, NULL, '7', '5', '052', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8097', 'Egi Renaldi', '3SE3', '', '', NULL, NULL, '14.8097@stis.ac.id', '3c214bd733b11c8afbb1df5d8cf78031', '0', NULL, NULL, '5', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8096', 'Easbi Ikhsan ', '3KS2', '', '', NULL, NULL, '14.8096@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '1', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8095', 'DWINDA ASTUTI PUSPANINGRUM', '3SK5', '', '', NULL, NULL, '14.8095@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '2', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8094', 'Dwiki Raynaldo E.', '3KS2', '', '', NULL, NULL, '14.8094@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8093', 'Dwi Rizky Syaifullah', '3SE2', '', '', NULL, NULL, '14.8093@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '7', '4', '042', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8092', 'Dwi Inayah', '3SE2', '', '', NULL, NULL, '14.8092@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '5', '4', '000', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8091', 'Domingos Antonio Da Costa F', '3SE1', '', '', NULL, NULL, '14.8091@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8090', 'Diyana Indah Sari', '3SE1', '', '', NULL, NULL, '14.8090@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '7', '5', '052', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8089', 'Diva Arum Mustika', '3SK4', '', '', NULL, NULL, '14.8089@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8088', 'Dite Taufiq Musthafa', '3SE7', '085728932601', 'Temanggung', '1995-12-10', NULL, '14.8088@stis.ac.id', 'c91368b3340f653f3ca2976ae8b4c985', '0', '3323121012950002', NULL, '6', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8087', 'Dita Rizky Pratama', '3SE7', '', '', NULL, NULL, '14.8087@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8086', 'Dita Christina Simorangkir', '3SE7', '', '', NULL, NULL, '14.8086@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8085', 'Dini Hanifa', '3SK3', '', '', NULL, NULL, '14.8085@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8083', 'Dina Purnamasari', '3SE5', '', '', NULL, NULL, '14.8083@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8082', 'Dimas Tanzillul Firmansyah', '3SE6', '', '', NULL, NULL, '14.8082@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8081', 'Diar Hazkila', '3SE5', '', '', NULL, NULL, '14.8081@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8080', 'Dian Teguh Prasetyo', '3SE4', '', '', NULL, NULL, '14.8080@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8079', 'Dian P Pakpahan                        ', '3SK2', '', '', NULL, NULL, '14.8079@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8078', 'Diah Mekita Sari', '3SE4', '', '', NULL, NULL, '14.8078@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8077', 'Dhira Fajri A', '3KS2', '', '', NULL, NULL, '14.8077@stis.ac.id', 'a51ad08d6b99b07cb08dbaeaf2ffb2de', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8076', 'Dewi Yarti', '3SE3', '', '', NULL, NULL, '14.8076@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8075', 'Dewi Rizky Rosafiana Putri', '3SE2', '', '', NULL, NULL, '14.8075@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8074', 'Dewi Puspitasari', '3SE1', '', '', NULL, NULL, '14.8074@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8073', 'Dewi Intansari', '3SE7', '', '', NULL, NULL, '14.8073@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8072', 'Devigiesty Thyana', '3SK1', '', '', NULL, NULL, '14.8072@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8071', 'Devi Nadia Limbong', '3SE6', '', '', NULL, NULL, '14.8071@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8070', 'Destiana Fitri', '3SK5', '', '', NULL, NULL, '14.8070@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8069', 'Desta Febriana Indriyantika', '3SE5', '', '', NULL, NULL, '14.8069@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '7', '0', '000', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8068', 'Denny Rizky Firmansyah', '3SE3', '', '', NULL, NULL, '14.8068@stis.ac.id', '24c10e0d752581e1b56be02da3504893', '0', NULL, NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8067', 'Denno Agsola Ananza', '3SK4', '', '', NULL, NULL, '14.8067@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8066', 'Delita Arianti', '3SK4', '082273220112', 'jalan asem no. 40 A, RT 14 RW 02 Kel. Bidara Cina Kec. Jatinegara Jakarta Timur', '1996-12-25', NULL, '14.8066@stis.ac.id', 'bb30423dd4582dab218d875af8c1591d', '0', '1110046512960002', NULL, '3', '5', '053', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8065', 'Defi Putri Utami', '3SE4', '', '', NULL, NULL, '14.8065@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8064', 'Debby Amalia P.', '3SK3', '', '', NULL, NULL, '14.8064@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '4', '4', '043', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8063', 'Deardo Ari Persada Damanik', '3SE2', '081360753919', 'Jalan 45 no 3A Sidikalang, Sunatera Utara ', '1996-05-15', NULL, '14.8063@stis.ac.id', '74a5ab93b8bfe019e92cd9f0eb81b5e6', '0', '1211011505960002', NULL, '5', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8061', 'Dannar Kurniawan', '3SE1', '', '', NULL, NULL, '14.8061@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8060', 'Daniel Julfraldo Butar-Butar', '3SE7', '', '', NULL, NULL, '14.8060@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8059', 'Daniel JBN', '3SE6', '', '', NULL, NULL, '14.8059@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8058', 'Damara Utama', '3KS1', '089696621261', 'Jalan Otista III Blok G-332, Jakarta Timur', '1996-04-18', NULL, '14.8058@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', '3510151804960002', NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8057', 'Claudio Ferreira', '3SE5', '', '', NULL, NULL, '14.8057@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8056', 'Clara Aulia K.', '3SK3', '', '', NULL, NULL, '14.8056@stis.ac.id', '66706c016d8e73c1c3665b6d68a38223', '0', NULL, NULL, '4', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8055', 'Cindy Artha Yunita Hutabarat', '3SE3', '', '', NULL, NULL, '14.8055@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8054', 'Cinantya Dwi Winasis', '3SE2', '', '', NULL, NULL, '14.8054@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '5', '4', '042', 'Sekretaris Seksi', NULL, NULL, 107.441, -3.74105),
('14.8053', 'Choirunisak Mauludiah', '3KS1', '', '', NULL, NULL, '14.8053@stis.ac.id', '1a7bb6ef5eefc0b1d88ce1373a6fee33', '3', NULL, NULL, '2', '5', '052', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8052', 'Chintia Arisandi', '3SE1', '083831659474', 'Jalan Masjid RT 12/RW 9, NO. 28A', '1996-05-02', NULL, '14.8052@stis.ac.id', '9f65ab9a58354d2c6455419add8b9d53', '3', '', NULL, '1', '4', '041', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8051', 'Charles', '3SK3', '', '', NULL, NULL, '14.8051@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8050', 'Chandra Rinaldy Mbura', '3SE4', '', '', NULL, NULL, '14.8050@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8049', 'Chairina Linggarsari', '3SE7', '', '', NULL, NULL, '14.8049@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8048', 'Catur Putra Prakoso Pamungkas', '3KS2', '', '', NULL, NULL, '14.8048@stis.ac.id', '7c6c50391e1c47bdec9839a9c132d4d8', '0', NULL, NULL, '3', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8047', 'Catur Ayu A.', '3SK2', '', '', NULL, NULL, '14.8047@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '041', 'Anggota', 'kaxkGSUr', NULL, 107.441, -3.74105),
('14.8046', 'Carolina Danti', '3SK1', '', '', NULL, NULL, '14.8046@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8045', 'Candra Arif Bomantara', '3SE3', '', '', NULL, NULL, '14.8045@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8043', 'Bontor Ian Fleming Siahaan', '3SK3', '', '', NULL, NULL, '14.8043@stis.ac.id', '132b3c59981310b1bd27a8acf6d74846', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8041', 'Binda Amanti', '3SK5', '', '', NULL, NULL, '14.8041@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8040', 'Billy Krey', '3SK2', '', '', NULL, NULL, '14.8040@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8039', 'Beta Gunarti Brilliana', '3SE6', '', '', NULL, NULL, '14.8039@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8038', 'Berliana Dyah Ambarsari', '3SK4', '', '', NULL, NULL, '14.8038@stis.ac.id', 'e8cfae14e22c76bd611db897763c0cd6', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8037', 'Bayu Kristiawan', '3KS1', '083872424284', 'Jalan Peta Selatan RT.009 RW.03 No.21 Kalideres Jakarta Barat', '1995-06-05', NULL, '14.8037@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', '3173060506950005', NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8036', 'Barry Lamhot Sihite', '3SE2', '', '', NULL, NULL, '14.8036@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8035', 'Banna Izzatul Hasanah', '3SE5', '', '', NULL, NULL, '14.8035@stis.ac.id', 'c48741d43b8506319ce8e7320c21502f', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8034', 'Bahrul Ilmi Nasution', '3KS2', '', '', NULL, NULL, '14.8034@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '4', '4', '041', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8033', 'Bagas Indra Sakti', '3SE1', '', '', NULL, NULL, '14.8033@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8032', 'Bagas Febry Gunawan', '3KS1', '', '', NULL, NULL, '14.8032@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8031', 'Azzahra Luthfi', '3SE4', '', '', NULL, 'add78348cd973d096a403081e4ccbf69.jpg', '14.8031@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8030', 'Ayu Fithri Maharani', '3SE3', '', '', NULL, NULL, '14.8030@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8029', 'Ayu Faridah', '3SK3', '', '', NULL, NULL, '14.8029@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '8', '5', '051', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8028', 'Ayu Dystia Pitaloka Nainggolan', '3SE2', '', '', NULL, NULL, '14.8028@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8027', 'Avi Nugrahaeni', '3SK2', '', '', NULL, NULL, '14.8027@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '8', '5', '052', 'Sekretaris Seksi', NULL, NULL, 107.441, -3.74105),
('14.8026', 'Aurum Nur Anisa', '3SE1', '', '', NULL, NULL, '14.8026@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8025', 'Aulia Niky Pinandhita', '3SE7', '082111559842', 'Jl. Otista 2 No. 67A RT 7 RW 9 Bidara Cina', '1995-09-10', NULL, '14.8025@stis.ac.id', 'f9ffa6a0d0a91e964d9ec1f7c90c6267', '2', '3304065009950005', NULL, '5', '0', '000', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8024', 'Atina Khoirunnisa', '3SK1', '', '', NULL, NULL, '14.8024@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8023', 'Atika Kaustsar Ilafi', '3KS2', '', '', NULL, NULL, '14.8023@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8021', 'Asti Sundariningsih', '3SE6', '', '', NULL, NULL, '14.8021@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8020', 'Asita Sekar Asri', '3KS1', '', '', '1996-01-03', NULL, '14.8020@stis.ac.id', 'a6cf385a8480b9d40548cc5ff1ee9994', '0', '', NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8019', 'Asya Jyoti Alfiyah', '3SE5', '', '', NULL, NULL, '14.8019@stis.ac.id', 'c07eb6ce8cd5be95e3db8197bf6949f2', '0', NULL, NULL, '11', '8', '083', 'Anggota ', 'HVWwuGJ4', NULL, 107.441, -3.74105),
('14.8018', 'Asfika Rizkyana', '3SE4', '', '', NULL, NULL, '14.8018@stis.ac.id', 'b7f5494c250b4e727da95ac66b575ff2', '3', NULL, NULL, '8', '4', '043', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8017', 'Arza Habibul Asdid', '3SK1', '', '', NULL, NULL, '14.8017@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8016', 'Arya Dwi Anjasmara Purbaningrum', '3SE3', '', '', NULL, NULL, '14.8016@stis.ac.id', '1da4a098aa48bced36e232c9c641ad80', '0', NULL, NULL, '5', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8015', 'Arya Aji Kusuma', '3KS2', '', '', NULL, '29941638bc01e4d38bd41d4c82dfd67c.jpg', '14.8015@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8014', 'Armando Gaspar', '3SK5', '081314137262', 'Jl. Otista 3 Dalam', '1994-04-01', 'e92b511f55b76de46758490d498e8ca6.JPG', '14.8014@stis.ac.id', 'b9b0689e867c943cc58ebb6b5233c480', '0', '', NULL, '9', '6', '062', 'Anggota', '5YG8KaiR', NULL, 107.441, -3.74105),
('14.8013', 'Arma Juwita', '3SK5', '', '', NULL, NULL, '14.8013@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8012', 'Arini Faurizah', '3SE2', '', '', NULL, NULL, '14.8012@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '5', '4', '043', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8011', 'Arifin', '3SE7', '', '', NULL, NULL, '14.8011@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8010', 'Arif Rahman', '3SE6', '', '', NULL, NULL, '14.8010@stis.ac.id', '8fc00d02549dbf69c28c5184ed4527bc', '0', NULL, NULL, '6', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8008', 'Ardian Saputra Hasibuan', '3KS1', '', '', NULL, NULL, '14.8008@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8007', 'Ardaneswari Damayanti', '3KS2', '', '', NULL, NULL, '14.8007@stis.ac.id', '3904afe01436d1fab74e0cc34624ecca', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8006', 'Apriliani Gustiana', '3SE1', '082373885699', 'Jalan Saabun Nomor 6 RT 10 RW 2 ', '1997-04-09', NULL, '14.8006@stis.ac.id', '62f5557dd320680c3583853aa78e23b7', '0', '0', NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8005', 'Aprilia Elisabet Resti', '3SK4', '', '', NULL, NULL, '14.8005@stis.ac.id', '7413d1adc2e371675c9b52ed3cf4db89', '0', NULL, NULL, '4', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8004', 'Anugrah Alief Pratama', '3SE5', '082331150808', 'Jl. Ayub No 21', '1996-02-23', '4289856c1cf9ac07f06270c7d0fe628a.jpg', '14.8004@stis.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', '0', '3575032302960001', NULL, '6', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8003', 'Antonius Riadi', '3SE4', '', '', NULL, NULL, '14.8003@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8001', 'Antonio', '3SK1', '', '', NULL, NULL, '14.8001@stis.ac.id', '2dbe21faaf6347d123d1d273a1306634', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8000', 'Antik Tintriani', '3SE7', '', '', NULL, NULL, '14.8000@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '11', '8', '082', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.7999', 'Annisya R Utami', '3SE6', '', '', NULL, NULL, '14.7999@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.7998', 'Annisa Uli', '3SK3', '', '', NULL, NULL, '14.7998@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.7997', 'Annisa Fadlia Hanani', '3SK2', '', '', NULL, NULL, '14.7997@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7996', 'Adilla Zikra', '3SE1', '', '', NULL, NULL, '14.7996@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7994', 'Anne Indiarti B.', '3SK1', '087710630041', 'Jl Kebon Nanas Selatan I Rt 3/8 no.3', '1996-07-22', 'd06dc4780b951637ab5749c0721b712b.JPG', '14.7994@stis.ac.id', '0fa92d0ed73524fb921022c8ab2d8ad2', '0', '3274036606970006', NULL, '4', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7993', 'Anna Kurniasih', '3SK5', '', '', NULL, NULL, '14.7993@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '2', '4', '041', 'Sekretaris Seksi', NULL, NULL, 107.441, -3.74105),
('14.7992', 'Anita Dwi Permathasari', '3SE5', '', '', NULL, NULL, '14.7992@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7991', 'Anisah Rahmaningsih', '3SK4', '', '', NULL, NULL, '14.7991@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7990', 'Anisa Ramadhani', '3SK3', '', '', NULL, NULL, '14.7990@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7989', 'Anis Khoirun Nisaa', '3SE4', '', '', NULL, NULL, '14.7989@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.7988', 'Anis Karimah', '3SK2', '085786753193', 'Bonsay ', '1996-07-03', NULL, '14.7988@stis.ac.id', '432574eb722f0b57f568e4f99eedd4fd', '0', '', NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7987', 'Aniisa Rizqi', '3SE3', '08156665028', 'GTA Jalan Gambir No.14 Pekalongan, Jawa Tengah', '0000-00-00', NULL, '14.7987@stis.ac.id', '095739f74e0d5f1337556e36a41a5723', '0', '3326156804960001', NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7986', 'Anggun Mutiara Isnein', '3SE2', '', '', NULL, NULL, '14.7986@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '5', '4', '041', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.7985', 'Anggoro Widyapuji Putro', '3SE3', '', '', NULL, NULL, '14.7985@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7984', 'Anggita Eka Putri F.', '3SK1', '', '', NULL, NULL, '14.7984@stis.ac.id', '0583e1d3ec7bb02a6c1e2a25da284220', '0', NULL, NULL, '2', '5', '052', 'Anggota', 't3Jsve6G', NULL, 107.441, -3.74105),
('14.7983', 'Anggia Firmanti Hermadita', '3SE1', '', '', NULL, NULL, '14.7983@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7982', 'Andre Zakaria', '3SE2', '', '', NULL, NULL, '14.7982@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '5', '052', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.7981', 'Andre Ridho Perdana Hutapea', '3SE1', '', '', NULL, NULL, '14.7981@stis.ac.id', 'e0a0063bd9629fbb7a68746f5f6105bb', '3', NULL, NULL, '8', '4', '041', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.7980', 'Anditia Pratiwi', '3SE7', '', '', NULL, NULL, '14.7980@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7979', 'Amru Fahru Ridho', '3SE7', '', '', NULL, NULL, '14.7979@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7978', 'Amelia Inamorita Mealanne Raraawi', '3SK2', '', '', NULL, NULL, '14.7978@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7977', 'Alwin Gilang Permana', '3KS2', '', '', NULL, NULL, '14.7977@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, '001B', '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7976', 'Alvin Topan Kristian', '3SE6', '', '', NULL, NULL, '14.7976@stis.ac.id', 'cce241ac6283072816a65870901a66ef', '0', NULL, NULL, '5', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7975', 'Alvin Hidayati Mashita', '3SE6', '085790294504', '', '0000-00-00', NULL, '14.7975@stis.ac.id', '3bb1d7e63e82b94c2df1c6a044d450f6', '2', '', NULL, '8', '4', '042', 'Sekretaris Seksi', 'eFx8Hnww', NULL, 107.441, -3.74105),
('14.7974', 'Alinca Wedear', '3SE5', '', '', NULL, NULL, '14.7974@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.7973', 'Alifa Putri Wijaya', '3KS1', '', '', NULL, NULL, '14.7973@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7972', 'Algar Reza Gibran Akbar', '3SE5', '', '', NULL, NULL, '14.7972@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7971', 'Alfinanda Nindya Kusuma', '3SE4', '', '', NULL, NULL, '14.7971@stis.ac.id', '95a47e7de4bb936f3dfcf6c6c4554aee', '0', NULL, NULL, '5', '5', '051', 'Anggota', 'tcyPzK9z', NULL, 107.441, -3.74105),
('14.7970', 'Alfian Syamsurizal', '3SE3', '', '', NULL, NULL, '14.7970@stis.ac.id', 'fc785cd29baf813dbf3158149c797cee', '0', NULL, NULL, '8', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7969', 'Alfi Lailatur Rohmah', '3SE4', '', '', NULL, NULL, '14.7969@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7968', 'Alfada Maghfiri Firdani', '3SE3', '', '', NULL, NULL, '14.7968@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7967', 'Aldi Firdaus', '3KS1', '', '', NULL, NULL, '14.7967@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '2', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.7966', 'Al Birra Syaiful Abidin', '3SE2', '', '', NULL, NULL, '14.7966@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7965', 'Akram Akramur Rasyid', '3SE1', '081542028745', 'Gg Solihun No 14E RT 13 RW 9 Bidaracina ', '1996-09-05', NULL, '14.7965@stis.ac.id', '5fe4d9e79e6dd73e82a6e5f3b0abe714', '0', '1173040509960001', NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7964', 'Akbar Sergio', '3SE7', '', '', NULL, NULL, '14.7964@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '053', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7963', 'Ajeng Larasati', '3SK5', '', '', NULL, NULL, '14.7963@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '1', '5', '051', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.7962', 'Aisyah P Utama', '3SE2', '', '', NULL, NULL, '14.7962@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.7961', 'Ahmat Amini Efendi', '3SE6', '', '', NULL, NULL, '14.7961@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7960', 'Ahmad Risal', '3SE5', '082344799785', 'Jalan kebon sayur 1', '1996-08-14', '', '14.7960@stis.ac.id', '2f11cd9ced7cfb6922cdca9b6d7c4515', '3', '', NULL, '0', '0', '000', 'Ketua Umum', NULL, NULL, 107.441, -3.74105),
('14.7959', 'Ahmad Naufal Suprayogi', '3SK4', '', '', NULL, NULL, '14.7959@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '1', '5', '052', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.7958', 'Ahmad Kosasih', '3SE4', '', '', NULL, NULL, '14.7958@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.7957', 'Ahmad Fajar Novianto', '3SE3', '', '', NULL, NULL, '14.7957@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7956', 'Ahmad Fadli Octavian', '3KS2', '', '', NULL, '730d37a8cf26b8307e050a30128078c8.jpg', '14.7956@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7955', 'Agustina Puspitasari A.', '3SK4', '085745004867', 'Jln Masjid 11, Bidara Cina', '1996-07-20', NULL, '14.7955@stis.ac.id', '511ff3bf14bc8eb84d140629da64ec2d', '2', '3521116007960001', NULL, '3', '5', '051', 'Sekretaris Seksi', NULL, NULL, 107.441, -3.74105),
('14.7954', 'Agung Yudianto', '3SE2', '', '', NULL, NULL, '14.7954@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7953', 'Afwin Fauzy Akhsan', '3SE1', '085716365435', 'DKI Jakarta', '1996-09-22', 'ad9be53c91da382727a184cd506d9ba0.jpg', '14.7953@stis.ac.id', 'b6c45ed4da56e08a1ccfcf8c822ac0e8', '0', '', NULL, '7', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7951', 'Aditya Wisnu Anggara', '3SE7', '', '', NULL, NULL, '14.7951@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7950', 'Aditya Kuspratomo', '3SE6', '', '', NULL, NULL, '14.7950@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7949', 'Aditya Dwi Yulianto', '3SE5', '', '', NULL, NULL, '14.7949@stis.ac.id', '837da95c91dfc7370c4460c24932cdff', '0', NULL, NULL, '7', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7948', 'Aditya Abdulmunaf Rosnah', '3KS2', '', '', NULL, NULL, '14.7948@stis.ac.id', '0e95aa9db12b12bc1abc41dc13afe237', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7947', 'Adisti Dama Allo Mongan', '3SK3', '', '', NULL, NULL, '14.7947@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7945', 'Adidarma Lamianto', '3SK3', '', '', NULL, NULL, '14.7945@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7944', 'Adhitya Kurnia Fitra', '3KS1', '', '', NULL, NULL, '14.7944@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7943', 'Adenil Zakaria', '3SK2', '', '', NULL, NULL, '14.7943@stis.ac.id', 'a9c5537897b8f45a276dc552ebaa94be', '0', NULL, NULL, '4', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7942', 'Adelia Christine Br Tarigan', '3SK2', '087799196878', 'Jl. Asem no 4', '1996-08-02', NULL, '14.7942@stis.ac.id', '74c44beca368d3c9976b021acbd038cf', '0', '', NULL, '3', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7941', 'Adelia Alifiany Basory', '3SK1', '', '', NULL, NULL, '14.7941@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7940', 'Ade Widiantara', '3SK1', '', '', NULL, NULL, '14.7940@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7939', 'Achmad T Adib', '3SK5', '081511152663', 'Mindahan RT 02/ RW II, Batealit, Jepara, Jawa Tengah', '1996-02-28', NULL, '14.7939@stis.ac.id', '02f9f52fd9c01481be3df4322a9f729d', '0', '3320052802960004', NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.7938', 'Achmad Nur Huda', '3SK4', '', '', NULL, NULL, '14.7938@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '3', '5', '051', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.7937', 'Abthal Umar', '3SE4', '', '', NULL, NULL, '14.7937@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7936', 'Abednego Delta Pradana', '3SE3', '', '', NULL, NULL, '14.7936@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7935', 'Abdurrohman Fachrurrozy', '3SE2', '085640431289', 'Jalan Ayub No 1', '1996-08-17', NULL, '14.7935@stis.ac.id', '62f9a8f2f98f0d144fc25e12519612aa', '0', '3401051708960003', NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.7934', 'Abdul Aziz Makhrus', '3SK3', '', '', NULL, NULL, '14.7934@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('13.7901', 'Vivi Yesica Sidabutar', '3SK5', '', '', NULL, NULL, '13.7901@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7849', 'Rizky Farham Abdillah', '3SK2', '', '', NULL, NULL, '13.7849@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7837', 'Rifqi Anggara', '3KS2', '', '', NULL, NULL, '13.7837@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('13.7827', 'Renya Nofila', '3SK4', '', '', NULL, NULL, '13.7827@stis.ac.id', '48423e995ed16e7b382f3aecd406ad24', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('13.7787', 'Novita Mariani Gleko', '3SK3', '', '', NULL, NULL, '13.7787@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7733', 'Mirza Zakaria', '3SK1', '', '', NULL, NULL, '13.7733@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '11', '8', '083', 'Koordinator Subseksi', 'qXypFSYR', NULL, 107.441, -3.74105),
('13.7730', 'Miftahul Ahyar', '3SK5', '081282401770', '', '1996-04-04', NULL, '13.7730@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', '', NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7685', 'Khairunnisaa Tjakradirana', '3KS1', '', '', NULL, NULL, '13.7685@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7676', 'Jazmi Trirafi Arif', '3SK4', '', '', '0000-00-00', NULL, '13.7676@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', '', NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7666', 'Indria Burhanuddin', '3SE4', '', '', NULL, NULL, '13.7666@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('13.7641', 'Hakiki Sandhika Raja', '3KS2', '', '', '1996-09-04', NULL, '13.7641@stis.ac.id', '946f5c8456d8377d087b5597dcdc0b54', '0', '', NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7633', 'Galih Permana Iriandy Nandar', '3SE1', '', '', NULL, NULL, '13.7633@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '7', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('13.7578', 'Dimas Agung S Prakoso', '3SK3', '0816767611', 'JL. K. PALEMBANG NO. 1, PERUMAHAN BEA CUKAI PONDOK BAMBU, JAKARTA TIMUR', '1994-12-03', NULL, '13.7578@stis.ac.id', '92ea3ef0d1f44cae26eccefdaec215ea', '0', '3373040312940001', NULL, '2', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7561', 'Dessy Iryana', '3SK2', '085344975397', 'Jln kebon sayur 1 no 43 rt 04 rw 03', '1995-12-08', NULL, '13.7561@stis.ac.id', 'c15b400e28e53b768867e3ffb6fd4535', '0', '', NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('13.7555', 'Della Agustin Cintya P', '3SK1', '', '', NULL, NULL, '13.7555@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7538', 'Bryan G. Salenda', '3KS1', '', '', NULL, NULL, '13.7538@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '5', '053', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7519', 'Asgianto Mamoribo', '3SK2', '085344361789', 'Jln. kebon nanas selatan 1 no 31 rt/rw 08/08  cipinang cempedak jakarta timur', '1995-08-16', NULL, '13.7519@stis.ac.id', '38a09163fb84892bef61989851c34ff8', '0', '9106121608950001', NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7504', 'Anugerah Sugittri Putera', '3SK1', '', '', NULL, NULL, '13.7504@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '053', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7480', 'Alvita Yan HR', '3SK3', '', '', NULL, NULL, '13.7480@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7466', 'Ahlul Karom', '3KS1', '', '', NULL, NULL, '13.7466@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('13.7456', 'Absalom Benu', '3SK1', '', '', NULL, NULL, '13.7456@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '4', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8137', 'Finny Maritha', '3SE2', '', '', NULL, NULL, '14.8137@stis.ac.id', 'f43dcca681e52f5fa5e5c7c7ee4eebb7', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8138', 'Firman Ardhiana Putra', '3SE4', '', '', NULL, NULL, '14.8138@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8139', 'Fitri Yulianti', '3KS2', '', 'PT Pecinta Korea Sejati. Menerima layanan make up. Makaci', '0000-00-00', NULL, '14.8139@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', '', NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8140', 'Fitria Ramadhan', '3SE3', '', '', NULL, NULL, '14.8140@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8141', 'Fitria Wulandari', '3SK1', '', '', NULL, NULL, '14.8141@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '1', NULL, NULL, '4', '4', '043', 'Sekretaris Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8142', 'Fizza Anindhita', '3SE4', '', '', NULL, NULL, '14.8142@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8143', 'Fredy Law Purba', '3SE5', '', '', NULL, NULL, '14.8143@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8144', 'Frida Novyana Putri', '3SE5', '', '', NULL, NULL, '14.8144@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8145', 'Friska Adventila Hawine', '3SE6', '', '', NULL, NULL, '14.8145@stis.ac.id', '4703d27dd2e0a7068e880f20aee599e4', '0', NULL, NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8146', 'Galih Pramono', '3SE6', '', '', NULL, NULL, '14.8146@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8147', 'Galuh Permata Sari', '3KS1', '', '', '1996-03-02', NULL, '14.8147@stis.ac.id', 'b3353682bd5bd66dcc238b711fd9bfd5', '0', '', NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8148', 'Georginia Martins', '3SK2', '', '', NULL, NULL, '14.8148@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8149', 'Geovania Maria Da cruz Vieira', '3SE7', '', '', NULL, NULL, '14.8149@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8150', 'Geri Yesa Ermawan', '3KS2', '', '', NULL, NULL, '14.8150@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '10', '7', '072', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8151', 'Giordanio Paulo Barbosa Da Rosa', '3SE7', '', '', NULL, NULL, '14.8151@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8152', 'Githa Nia Br Ginting', '3SE3', '', '', NULL, NULL, '14.8152@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8153', 'Grace Yuliana Silitonga', '3SE2', '', '', NULL, NULL, '14.8153@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8154', 'Gunadi Subagia ', '3SE1', '', '', NULL, NULL, '14.8154@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8155', 'Hairunnisa', '3SE3', '', '', '2017-04-05', '25d03271687f78a5aff4e83f13b95385.jpg', '14.8155@stis.ac.id', 'ad67bd22519c3609ed28afa902be7010', '0', '', NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8156', 'Handika Ramadhan', '3KS1', '', '', NULL, NULL, '14.8156@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8157', 'Hanif Wulandari R. I.', '3SE4', '', '', NULL, NULL, '14.8157@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8158', 'Hanis Maghfirani', '3SE5', '', '', NULL, NULL, '14.8158@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8159', 'Hardianshar', '3SE2', '', '', NULL, NULL, '14.8159@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8160', 'Hari Adityawan', '3SK1', '', '', NULL, NULL, '14.8160@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8161', 'Harista Dwi Kusumawardani', '3SE6', '', '', NULL, NULL, '14.8161@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '041', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8162', 'Hasna Fahria Yasmin', '3SK3', '', '', NULL, NULL, '14.8162@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8163', 'Hidayati Aulia Fitri', '3SE6', '', '', NULL, NULL, '14.8163@stis.ac.id', 'e13c682284481fa6ca2833cca6340a84', '0', NULL, NULL, '6', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8165', 'Hilman Hanivan', '3SE3', '', '', NULL, NULL, '14.8165@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105);
INSERT INTO `sipadu_mahasiswa` (`nim`, `nama`, `kelas`, `no_telepon`, `alamat`, `tgl_lahir`, `foto`, `email`, `password`, `level`, `no_ktp`, `id_tim`, `id_modul`, `id_seksi`, `id_subseksi`, `jabatan`, `kodeLupaPass`, `denda`, `lng`, `lat`) VALUES
('14.8166', 'Hilmi Sifa'' Iftitah', '3SE1', '', '', NULL, NULL, '14.8166@stis.ac.id', '4b4d1cf0465b78faa51dbf70875c92ec', '0', NULL, NULL, '6', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8167', 'Hotmauli Nababan', '3SE2', '', '', NULL, NULL, '14.8167@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8168', 'Hudan Dhardiri', '3SE4', '', '', NULL, NULL, '14.8168@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '1', '4', '043', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8169', 'Hudi Javariawan', '3KS1', '', '', NULL, NULL, '14.8169@stis.ac.id', '9e8f9f92f342d23016909c14a208f59b', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8170', 'I KETUT GEDE ARI UTAMA PUTRA', '3SK2', '', '', NULL, NULL, '14.8170@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8171', 'I Komang Yudi Hardiyanta', '3KS1', '', '', NULL, NULL, '14.8171@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8172', 'I Made Ardi Kusuma Putra', '3SE5', '', '', NULL, NULL, '14.8172@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8173', 'I Putu Surya Natha Redatama', '3SE6', '', '', NULL, NULL, '14.8173@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '8', '5', '052', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8174', 'I Wayan Budi O.K', '3SK3', '', '', NULL, NULL, '14.8174@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '4', '4', '000', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8175', 'Ianah El Sholikhah', '3SE3', '', '', NULL, NULL, '14.8175@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8176', 'Ibnu Abbas', '3SK4', '', '', NULL, NULL, '14.8176@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8178', 'Ikhsan Margo Pangestu', '3SE7', '', '', NULL, NULL, '14.8178@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '5', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8180', 'Ilma Ainun Fitriana', '3SE4', '', '', NULL, NULL, '14.8180@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '7', '4', '041', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8181', 'Imam Nurohman', '3SE1', '', '', NULL, NULL, '14.8181@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8182', 'Imam Satya Wedhatama', '3KS2', '', '', NULL, NULL, '14.8182@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8183', 'Imelda Chintia', '3SE5', '', '', NULL, NULL, '14.8183@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8184', 'Indo Egy Maulina', '3SE6', '', '', NULL, NULL, '14.8184@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8185', 'Indria Hartati', '3SE7', '', '', NULL, NULL, '14.8185@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '5', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8186', 'Indriane Analisa', '3SK4', '', '', NULL, NULL, '14.8186@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8187', 'Intan Yusniasary', '3SK5', '', '', NULL, NULL, '14.8187@stis.ac.id', '988d86405fcffbb0b15a7ce3e91b7479', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8188', 'Irma Risti A.', '3SK1', '', '', NULL, NULL, '14.8188@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8189', 'Isfan Nur Fauzi', '3KS1', '', '', NULL, NULL, '14.8189@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8190', 'Isvan Anggeriraja Jupiono', '3SE2', '', '', NULL, NULL, '14.8190@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8191', 'Izzaturrohmah Syahputri', '3SK2', '', '', '1996-12-30', '2a7fd6fdeada885264065a4a4debcda3.png', '14.8191@stis.ac.id', '811d93113c49297ec57b99eb55fc5599', '0', '', NULL, '3', '5', '052', 'Anggota', 'XgxY7HYq', NULL, 107.441, -3.74105),
('14.8192', 'Janter Simorangkir', '3SE3', '', '', NULL, NULL, '14.8192@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8193', 'Jefrianto', '3SE4', '', '', NULL, NULL, '14.8193@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8194', 'Jezenia Jaqualine R Kareth ', '3SK3', '', '', NULL, NULL, '14.8194@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '2', '4', '043', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8195', 'Jihan Rofidu', '3SK5', '', '', NULL, '2369789a19ad960a640636c976dc5d6c.png', '14.8195@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '3', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8196', 'Jose Armindo', '3SK1', '', '', NULL, NULL, '14.8196@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8197', 'Julianto Silalahi', '3SK4', '', '', NULL, NULL, '14.8197@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8198', 'Juniarita Ratnasari', '3SE1', '', '', NULL, NULL, '14.8198@stis.ac.id', 'e43a0e440853a1a6082594636ee0180a', '0', NULL, NULL, '7', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8199', 'Karisma R. Muthmainnah', '3KS2', '087821161503', 'Gg Abdurraman no 16, Jln. Otista Raya, Jakarta Timur. 13330.', '1996-02-15', 'd2dc7b735fbde00be55860b0dd69bc71.jpg', '14.8199@stis.ac.id', '3a92e4a98fe89c6a06859e2859f4db20', '0', '3277035502960017', NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8200', 'Karya Listyanti Pertiwi', '3SK4', '085742472578', 'Jalan Mulia no. 20 RT 8 RW 8 Bidaracina, Jatinegara, Jakarta Timur', '1995-09-06', NULL, '14.8200@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', '3371024609950002', NULL, '3', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8201', 'Kasifatul Asriyati', '3SK5', '', '', NULL, NULL, '14.8201@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8202', 'KATHERINE PERMATA RUSUNG', '3SK1', '', '', NULL, NULL, '14.8202@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8203', 'Khalilur Rahman', '3KS2', '085278386892', '', '1996-04-18', NULL, '14.8203@stis.ac.id', '4367b15f8cfd4bd780fb230902895343', '0', '', NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8204', 'Khumaidi Subkhi', '3SK2', '', '', NULL, NULL, '14.8204@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '3', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8205', 'Khusnul Khoiriyah Anisa', '3SK2', '', '', NULL, NULL, '14.8205@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '2', '4', '000', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8206', 'Kiky Amci Ilzania', '3SK3', '', '', NULL, NULL, '14.8206@stis.ac.id', 'f90e87f1e08d57ff549740eb76e13494', '2', NULL, NULL, '9', '6', '062', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8207', 'Komang Tri Wulandari', '3SK4', '', '', NULL, NULL, '14.8207@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8208', 'Kurnia Salsabila', '3SE2', '', '', NULL, NULL, '14.8208@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8209', 'KWINTA RAHMIDATUL NANDA', '3SK5', '', '', NULL, NULL, '14.8209@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8210', 'Laelatul Alfi Amelia', '3SK1', '', '', NULL, NULL, '14.8210@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '1', NULL, NULL, '4', '4', '041', 'Sekretaris Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8212', 'Laila Marwinda', '3SE3', '', '', NULL, NULL, '14.8212@stis.ac.id', 'f3723f6495abde01e8b6eaea2eeba506', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8213', 'Laksmi Titis Astryta Dewi', '3SE4', '', '', NULL, NULL, '14.8213@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8214', 'Lely Mariani Rosenta Rajagukguk', '3SK5', '', '', NULL, NULL, '14.8214@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8215', 'Lissa Lara Sapti', '3SE5', '', '', NULL, NULL, '14.8215@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8216', 'Listio Jati Nandhiko', '3SE5', '085643255155', 'Jl. Kebonsayur 1 No. 07 RT: 10 RW: 03 Bidaracina, Jatinegara, Jakarta Timur', '1996-12-30', NULL, '14.8216@stis.ac.id', '54302da2bfcd681528f04021faec9180', '0', '3310023012960002', NULL, '7', '5', '053', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8217', 'Lukmi Hidayat', '3SK3', '', '', NULL, NULL, '14.8217@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8218', 'Luthfi Fajar Arifah', '3SE6', '', '', NULL, NULL, '14.8218@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8219', 'Lydia Putri', '3SK2', '', '', NULL, NULL, '14.8219@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '3', '4', '000', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8220', 'Faiq Syafiqi                        ', '3SK4', '08159582256', 'Jalan Ayub 6a', '1996-06-25', NULL, '14.8220@stis.ac.id', '6894e45cd6c8b887f52ae3b59d8f15dc', '0', '3578242506960001', NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8221', 'Maftukhatul Qomariyah Virati', '3KS1', '', '', NULL, NULL, '14.8221@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8222', 'Malik Faisal Aziz', '3SE6', '', '', NULL, NULL, '14.8222@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '8', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8223', 'Marcopolo Gultom', '3SE7', '082165481239', 'gang mangga no. 25', '1996-08-09', NULL, '14.8223@stis.ac.id', '316e9e396f52686e6e7bd689e47623ed', '0', '', NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8224', 'Maria Dara Metasari', '3SK3', '', '', NULL, NULL, '14.8224@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '4', '5', '052', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8225', 'Maria kewa', '3SK4', '', '', NULL, NULL, '14.8225@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8226', 'Maria Sintauli Hutauruk', '3SE7', '', '', NULL, NULL, '14.8226@stis.ac.id', '15d401381c98065eee36436bed92f111', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8227', 'Martha M Panjaitan ', '3SK5', '', '', NULL, NULL, '14.8227@stis.ac.id', '322d404eaa6c3e6692025d323177055f', '0', NULL, NULL, '2', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8228', 'Maryam Rasyid', '3SE1', '', '', NULL, NULL, '14.8228@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '0', '0', '000', 'Bendahara Umum', NULL, NULL, 107.441, -3.74105),
('14.8229', 'Masito Erlando Situmorang', '3SE1', '', '', NULL, NULL, '14.8229@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8230', 'Maya Novita Sari', '3SE2', '085655142923', 'Jalan Mulia 20, Kos Pondok Sunda', '1995-10-07', NULL, '14.8230@stis.ac.id', '721b991ec688f8ce13433b220248376e', '0', '', NULL, '5', '5', '052', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8231', 'Mazaya Alifah', '3SE3', '082298399821', 'Jalan Mulia No 21A (Salon Mulia) RT 09 RW 08, Kelurahan Bidara Cina, Kecamatan Jatinegara, Jakarta T', '1996-07-13', '21c6243d4b831a4260b91fab14d176a3.JPG', '14.8231@stis.ac.id', 'e07c49ec3637b34ceef2ae800e0d5dc4', '0', '1110045307960001', NULL, '11', '8', '083', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8232', 'Mega Fitria Trisnasari', '3SK1', '', '', NULL, NULL, '14.8232@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8233', 'Megita Ritha', '3KS2', '082299518146', 'Jl. Otto Iskandardinata Gg, Mangga', '1997-01-27', NULL, '14.8233@stis.ac.id', '46c2e762271af504fa9d1d39888d5523', '0', '', NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8234', 'Meiena', '3SE4', '', '', NULL, NULL, '14.8234@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8235', 'Miftah Muthia Kanza', '3SK2', '', '', NULL, NULL, '14.8235@stis.ac.id', '1a8b058ab64e8e46a4c9f5ad34a73cf2', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8236', 'Miftakhul Huda Alamsyah', '3SE2', '', '', NULL, NULL, '14.8236@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8237', 'Miftakhul Jannah', '3SE5', '', '', NULL, NULL, '14.8237@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8238', 'Mira Choirunnisa', '3SE6', '', '', NULL, NULL, '14.8238@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8239', 'Moch Fatkurrozi Fadlullah', '3SE3', '', '', NULL, NULL, '14.8239@stis.ac.id', '30267a6cf4eb81973dec8ae5648109c5', '0', NULL, NULL, '5', '5', '053', 'Anggota', 'ADBhWwWW', NULL, 107.441, -3.74105),
('14.8240', 'Mochammad Alwan', '3SE4', '', '', NULL, NULL, '14.8240@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '7', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8241', 'M Muflich Armunanto', '3SK5', '085743844670', 'Jalan Ayub no 01 05/08', '1995-08-28', 'd09361d7c514ef82a4216170c1a559a3.JPG', '14.8241@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', '3404072808950005', NULL, '11', '8', '081', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8242', 'Rifqi Khikmawan', '3SE5', '085713608040', 'Jalan Otista 2 No 11 Rt 03 Rw 09 Bidaracina Jatinegara Jakarta Timur', '1997-01-01', NULL, '14.8242@stis.ac.id', '9fd71dbdf3f25fcae183efffea436950', '0', '3326080101970081', NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8243', 'Muhammad Cholid Al Farisi', '3KS1', '', '', NULL, NULL, '14.8243@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8244', 'Muh Taufiqurrahman', '3SE6', '', '', NULL, NULL, '14.8244@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '5', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8245', 'M Andriansyah', '3KS2', '', '', NULL, NULL, '14.8245@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8246', 'Muhammad Iqbal Arsa', '3KS1', '', '', NULL, NULL, '14.8246@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8247', 'Muhammad Saka', '3SK1', '', '', NULL, NULL, '14.8247@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8248', 'Muhammad Abdul Majid', '3SE7', '08993297882', 'Jl otista 2 no 18', '1996-09-12', NULL, '14.8248@stis.ac.id', 'aa9ca7fe304d518a2b81b93298921a04', '3', '', NULL, '5', '5', '053', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8249', 'Muhammad Agung Wibowo', '3SE1', '', '', NULL, NULL, '14.8249@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8250', 'Muhammad Agus Mauliza', '3SE2', '', '', NULL, NULL, '14.8250@stis.ac.id', 'daff6b98fead776014c10d32223f70d5', '0', NULL, NULL, '8', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8251', 'Muhammad AlFatih', '3SK2', '', '', NULL, NULL, '14.8251@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '11', '8', '082', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8252', 'Muhammad Andriawan Setiawan', '3SK3', '', '', NULL, NULL, '14.8252@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8253', 'Muhammad Auzian Noor', '3SK4', '', '', NULL, NULL, '14.8253@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8255', 'Muhammad Bahrul Latif', '3SK5', '', '', NULL, NULL, '14.8255@stis.ac.id', 'a02eceb97eb0c833fa14b17c9ed11c60', '0', NULL, NULL, '4', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8256', 'Muhammad Basorudin', '3SE3', '08990088553', 'Jalan Kebon Nanas Utara 2 No 29A', '1995-10-01', NULL, '14.8256@stis.ac.id', 'a0a5076d92bbf6e09c3ad9cb1eed0a8c', '0', '3515100101950002', NULL, '9', '6', '061', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8257', 'Muhammad Fadli', '3SE4', '', '', NULL, NULL, '14.8257@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '7', '4', '043', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8258', 'Muhammad Hasbi', '3SE5', '', '', NULL, NULL, '14.8258@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8259', 'Muhammad Imam Syafi''i', '3KS2', '', '', NULL, NULL, '14.8259@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8260', 'Muhammad Irsad Arief', '3KS1', '', 'Jember', '0000-00-00', '25d55ad283aa400af464c76d713c07ad', '14.8260@stis.ac.id', '4a8a08f09d37b73795649038408b5f33', '0', '', NULL, '10', '7', '071', 'Anggota', 'LD58qzXf', NULL, 107.441, -3.74105),
('14.8261', 'Muhammad Luqman', '3KS2', '085312950813', 'Jakarta Timur', '1996-06-28', 'a0e17b52a8fe2d476d14ed40502f6569.jpg', '14.8261@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', '', NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8262', 'Novansyah Wahyudi', '3SK1', '', '', NULL, NULL, '14.8262@stis.ac.id', 'f7a25fb1be72e34aa087de6b0bbfc772', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8263', 'Muhammad Rifki', '3SE6', '', '', NULL, NULL, '14.8263@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8264', 'Muhammad Rizky Perdana', '3KS1', '085248865731', 'Jl. kebon nanas selatan 1 no.14 rt 01 rw 008', '1996-06-14', NULL, '14.8264@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', '6372061406960001', NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8265', 'Muhammad Shafaryantoro', '3SE7', '', '', NULL, NULL, '14.8265@stis.ac.id', '23e6bf0a8626eba27109bbcf81b5bd0d', '0', NULL, NULL, '5', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8266', 'Muhammad Syadrie', '3SE1', '', '', NULL, NULL, '14.8266@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8267', 'Muhammad Yusuf ', '3SE2', '', '', NULL, NULL, '14.8267@stis.ac.id', '327212d3e8c41dc4081388e1678306bd', '3', NULL, NULL, '1', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8268', 'Muhammad Yusuf', '3SE3', '', '', NULL, NULL, '14.8268@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8269', 'Munayati Salam', '3SK3', '', '', NULL, NULL, '14.8269@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '2', '5', '000', 'Sekretaris dan Bendahara Seksi', NULL, NULL, 107.441, -3.74105),
('14.8270', 'MUTHMAINNAH', '3SK4', '', '', NULL, NULL, '14.8270@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8271', 'Mutia Elyani', '3KS1', '', '', '0000-00-00', NULL, '14.8271@stis.ac.id', '510734976b45fa3fa03fce4254bddfdc', '1', '', NULL, '10', '7', '071', 'Sekretaris dan Bendahara Seksi', '4MfZrB84', NULL, 107.441, -3.74105),
('14.8272', 'Mutia Sayyidah', '3KS2', '', '', NULL, NULL, '14.8272@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8273', 'Nabella Intan Karsa', '3SE7', '085725932001', '', '1996-09-22', NULL, '14.8273@stis.ac.id', 'ce76ee0ebbe1964d308c2b717721b22f', '0', '', NULL, '6', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8274', 'Nabila Daisy Prima', '3SE1', '', '', NULL, NULL, '14.8274@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8275', 'Nabila Masyiana Tisa Putri', '3SK5', '', '', NULL, NULL, '14.8275@stis.ac.id', '788ec628570bcc8e6db3a248873e5c00', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8276', 'Nabilla Hadisty', '3SE2', '', '', NULL, NULL, '14.8276@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '083', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8277', 'Nadia Humairo', '3SE3', '', '', NULL, NULL, '14.8277@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8278', 'Nadra Yudelsa Ratu', '3KS1', '085766435860', 'Gang Dawel No 14', '1996-06-14', NULL, '14.8278@stis.ac.id', '3b88b29e06bc845a0456b7eabdb553f4', '1', '1306075406960001', NULL, '10', '7', '072', 'Sekretaris dan Bendahara Seksi', NULL, NULL, 107.441, -3.74105),
('14.8280', 'Nadyatul Febriana', '3SK1', '', '', NULL, NULL, '14.8280@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8281', 'Nafiah Rafiqah R', '3SE4', '', '', NULL, NULL, '14.8281@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8282', 'Naning Tri Suhesti', '3SK2', '', '', NULL, NULL, '14.8282@stis.ac.id', '094947c5eaef224cd65c659a256c6e3b', '1', NULL, NULL, '8', '4', '041', 'Sekretaris Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8283', 'Naufal Rasyid', '3SE4', '', '', NULL, NULL, '14.8283@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '5', '000', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8284', 'Naura Nadifa', '3SK3', '', '', NULL, NULL, '14.8284@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8285', 'Nauval Tama Pratikto', '3SE5', '', '', NULL, NULL, '14.8285@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8286', 'Ni Lessari Prihadiani', '3SE5', '', '', NULL, NULL, '14.8286@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8287', 'Ni Putu Beliana Puspita Sari', '3KS1', '082237404808', 'Jl. Otista Raya, Gang Sholihun No 31A', '1996-11-29', NULL, '14.8287@stis.ac.id', '1116fd7970f407b46ab98e15a29d4160', '0', '', NULL, '10', '7', '073', 'Anggota', 'eZdK5KeW', NULL, 107.441, -3.74105),
('14.8288', 'Nida Fauziyah', '3SK4', '083876998400', 'Jatibening, bekasi', '1996-08-09', NULL, '14.8288@stis.ac.id', '388c93926b2aaa2274b2a064e90416ea', '0', '3174074908961002', NULL, '3', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8289', 'Nigel Roy Tantan', '3SE6', '', '', NULL, NULL, '14.8289@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8290', 'Nizar Zulmi Abimayu', '3SE7', '081213956397', '', '1997-01-15', NULL, '14.8290@stis.ac.id', '9248cb0b06c48b39be5bf7591accb3a3', '3', '', NULL, '7', '5', '051', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8291', 'Novi Fahdilla', '3SK5', '', '', NULL, NULL, '14.8291@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8292', 'Novi Nur Azizah', '3KS2', '085243360411', 'Jl. Otista 2 No. 23', '1996-11-22', NULL, '14.8292@stis.ac.id', '14ed1a22176d3805f01deeab4c7aae03', '0', '', NULL, '11', '8', '081', 'Anggota ', '16LnfqJZ', NULL, 107.441, -3.74105),
('14.8293', 'Novia Triputri T', '3SE6', '', '', NULL, NULL, '14.8293@stis.ac.id', '8dab15c2ce14692058dd23d2403c5d17', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8294', 'Nur Imron Suyuti', '3KS2', '', '', NULL, NULL, '14.8294@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8295', 'Nur Oktami', '3SE7', '', '', NULL, NULL, '14.8295@stis.ac.id', 'cc8da17fe10609880ec8a6dafffd1c05', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8296', 'Nur Salmanah', '3SE1', '', '', NULL, NULL, '14.8296@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8297', 'Nurhalimah Lubis', '3SK1', '', '', NULL, NULL, '14.8297@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8298', 'Nurul Abidah', '3SE2', '', '', NULL, NULL, '14.8298@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8299', 'Nurul Afifah', '3SE3', '', '', NULL, NULL, '14.8299@stis.ac.id', '8cf83b50b764000d41123ba1dfae00d7', '3', NULL, NULL, '1', '4', '043', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8300', 'Nurul Hidayah', '3SK2', '', '', NULL, NULL, '14.8300@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '4', '5', '052', 'Sekretaris Seksi', NULL, NULL, 107.441, -3.74105),
('14.8301', 'Nurul Husna Khairunnisa', '3KS1', '', '', NULL, NULL, '14.8301@stis.ac.id', '04410b3015ce6e07db62342d79608f35', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8302', 'Nyimas Camara Amalia', '3SK3', '', '', NULL, NULL, '14.8302@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8303', 'Oktarina', '3sk4', '', '', NULL, NULL, '14.8303@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8304', 'Oktavanyta Ariani', '3KS2', '081282404059', 'Jalan Otista Raya, Gang H. Dawel No.12 Bidara Cina', '1996-10-27', NULL, '14.8304@stis.ac.id', '9c6a03d8d7816a37a23a73711870a29c', '0', '', NULL, '7', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8305', 'Oktaviani', '3SK5', '', '', NULL, NULL, '14.8305@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8307', 'Paksi Dewa Bagus', '3SK2', '', '', NULL, NULL, '14.8307@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8308', 'Panca Dwi Prabawa', '3SK3', '085738589489', 'Jl. Kebon Nanas Selatan II No.34B RT17/RW08, Cipinang Cempedak, Jatinegara, Jakarta Timur', '1997-01-12', NULL, '14.8308@stis.ac.id', '237094d3c7ca7f62f03fa25e3fd24340', '0', '', NULL, '9', '6', '061', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8309', 'Pandu Elkana Setyawan', '3SE1', '', '', NULL, NULL, '14.8309@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8310', 'Pradiva Nur Abditya', '3KS1', '', '', NULL, NULL, '14.8310@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8311', 'Prahasta Rizki Waikabakti', '3SK4', '', '', NULL, NULL, '14.8311@stis.ac.id', '564718ab689fdc2fcff1aeac5c2309d8', '3', NULL, NULL, '2', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8312', 'Puji Nisrokhah', '3SK5', '', '', NULL, NULL, '14.8312@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8313', 'Puput Astutik', '3SK1', '', '', NULL, NULL, '14.8313@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8314', 'Putri Anggarini', '3SE4', '', '', NULL, NULL, '14.8314@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8315', 'Putri Lydia Eltheofany S', '3SE5', '', '', NULL, NULL, '14.8315@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8316', 'Putu Yogi W', '3SE2', '', '', NULL, NULL, '14.8316@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8317', 'Qhory Kusuma Satiti', '3SE6', '', '', NULL, NULL, '14.8317@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '5', '051', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8318', 'Qorina Alluayi', '3SK2', '', '', NULL, NULL, '14.8318@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8319', 'Rachel Rumadas', '3SK3', '', '', NULL, NULL, '14.8319@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8320', 'Rachmad Rizky Riyadhi', '3SK5', '', '', NULL, NULL, '14.8320@stis.ac.id', 'ae1605c77e3a0e2a2f36e4e23fa1bb57', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8321', 'Radina Yasinta Karolina', '3SK4', '', '', NULL, NULL, '14.8321@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '4', '5', '000', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8322', 'Radita Nareswari Mumpuni Putri', '3SK5', '', '', NULL, NULL, '14.8322@stis.ac.id', '3379c71d05b3fc11af57f77f01599b1d', '0', NULL, NULL, '3', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8323', 'Rafi Hakim Syah', '3SK1', '', '', NULL, NULL, '14.8323@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8324', 'Rafika Muhdar', '3SK1', '089650699064', '', '1996-06-06', '3fb848c0c7d7a2507f3ce6e58f51f7c1.jpg', '14.8324@stis.ac.id', 'dc46200bdb19c78c2a0ce7d51351c19b', '0', '', NULL, '4', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8325', 'Rahadi Jalu Yoga Utama', '3KS2', '', '', NULL, NULL, '14.8325@stis.ac.id', '62a9240db7e942e6277aeab2c7751abe', '3', NULL, NULL, '10', '7', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8326', 'Rahadita Nur Haida', '3SE7', '', '', NULL, NULL, '14.8326@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '5', '5', '052', 'Sekretaris dan Bendahara Seksi', NULL, NULL, 107.441, -3.74105),
('14.8327', 'Rahayu Lestari', '3SE1', '', '', NULL, NULL, '14.8327@stis.ac.id', 'ab9ffe4bd3b49ebbb0289c73400ad115', '0', NULL, NULL, '5', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8328', 'Rahayu Tri Furwani', '3SE2', '', '', NULL, NULL, '14.8328@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8329', 'Rahma Ardani ', '3SE3', '', '', NULL, NULL, '14.8329@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '041', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8330', 'Rakhma Nurhidayati', '3SE4', '', '', '0000-00-00', NULL, '14.8330@stis.ac.id', '821401f97ded52006e5dbf5b384b0fe6', '0', '', NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8331', 'RAMADHANY H.A MULIAWAN', '3SK2', '', '', NULL, NULL, '14.8331@stis.ac.id', '8f3021ef37b3bd520c4dfb43c8fbdae6', '0', NULL, NULL, '2', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8332', 'Rara Batara Kesuma', '3SE5', '', '', NULL, NULL, '14.8332@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8333', 'Ravisa Noor', '3SK2', '082165789727', 'Jalan Asem No. 26 RT01/RW03 ', '1995-08-24', NULL, '14.8333@stis.ac.id', 'ba0b2727c7ece977d1fc4d37f57e1179', '1', '1213016408950003', NULL, '4', '4', '042', 'Sekretaris Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8334', 'Reiham Sahara', '3SE6', '', '', NULL, NULL, '14.8334@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8335', 'Reka Sri Wigati', '3SK3', '', '', NULL, NULL, '14.8335@stis.ac.id', 'f278cc55d4c2143355724e21d894fb73', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8336', 'Retna Ernasari', '3SK4', '', '', NULL, NULL, '14.8336@stis.ac.id', 'a1bacf2069e2bfb71c2097299aaf66a7', '0', NULL, NULL, '4', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8337', 'Retno Fitriandari', '3KS2', '', '', NULL, NULL, '14.8337@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '2', '0', '000', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8338', 'Rezki Melany Sabil', '3SK5', '', '', NULL, NULL, '14.8338@stis.ac.id', 'dca4bbcb5947aa868d507ea9b663ab6d', '0', NULL, NULL, '3', '4', '042', 'Anggota', 'Ua1p36Tv', NULL, 107.441, -3.74105),
('14.8339', 'Ridea Anggraini', '3SE7', '', '', NULL, '8e2f10b1995df8efd60b89a795783df2.jpg', '14.8339@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8340', 'Ridha Amaliah', '3SK1', '', '', NULL, NULL, '14.8340@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '2', '5', '000', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8341', 'Ridwan Prayogi', '3SE3', '', '', NULL, NULL, '14.8341@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8342', 'Ridwan Setiawan', '3KS1', '', '', NULL, NULL, '14.8342@stis.ac.id', 'b9ee691aba9efcf3848ae9f66dd9d68d', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8343', 'Rifky Afrizal Mukti', '3SE4', '', '', NULL, NULL, '14.8343@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '6', '5', '053', 'Sekretaris Seksi', NULL, NULL, 107.441, -3.74105),
('14.8344', 'Rifky Yudha A', '3SE5', '085711208040', 'Jl. Kebonsayur 1 No. 07 RT 10 RW 03 Bidaracina, Jatinegara, Jakarta Timur', '1996-08-15', NULL, '14.8344@stis.ac.id', 'f714b4fdce8a178b96b6ea02fcac1332', '0', '3310081508960002', NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8345', 'Rifqi Aulan Nisa', '3SE1', '', '', NULL, NULL, '14.8345@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '8', '4', '041', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8346', 'Rihan Yosral', '3KS2', '', '', NULL, NULL, '14.8346@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8347', 'Rila', '3SK2', '', '', NULL, 'c53d5c5a67a97f5f39baa6f798bda148.PNG', '14.8347@stis.ac.id', 'c60440c67e4007c36068b523d21ce5af', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8348', 'Rimassatya Pawestri', '3KS2', '085259960795', 'Jalan Sensus III no 7', '1995-08-10', NULL, '14.8348@stis.ac.id', 'bb7e812e46d72aa5204c4525b97817da', '0', '', NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8349', 'Rio Triwahyu Saputra', '3SE6', '', '', NULL, 'be41aafe082718bd3228e708151bf008.jpg', '14.8349@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '1', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8350', 'Risdan Ripai', '3SK3', '', '', NULL, NULL, '14.8350@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8351', 'Rissa Afrianti Afhan', '3SE2', '082273220114', 'JALAN ASEM NO 40 A, RT 14 RW 02 KELURAHAN BIDARA CINA KECAMATAN JATINEGARA JAKARTA TIMUR', '1997-04-14', NULL, '14.8351@stis.ac.id', 'ea1ee7c0870e9099ed54c8490a456635', '1', '', NULL, '8', '4', '043', 'Sekretaris Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8352', 'Rizka Heryanti', '3SE3', '', '', NULL, NULL, '14.8352@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8353', 'Rizki Nagari', '3KS1', '', '', NULL, NULL, '14.8353@stis.ac.id', 'e408b6d668235dda1d10c3d0286bfec7', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8354', 'Rizki Nur Eka Praptiwi', '3SK3', '', '', NULL, NULL, '14.8354@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8355', 'Rizkita Kusumaningtyas', '3KS3', '', '', '0000-00-00', NULL, '14.8355@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', '', NULL, '3', '0', '000', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8356', 'Rizky Hadifianto', '3SK4', '', '', '0000-00-00', NULL, '14.8356@stis.ac.id', '1af5249316f070592fc4419891435e44', '3', '', NULL, '3', '4', '043', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8357', 'Rizky Wahyuningsih', '3SE4', '', '', NULL, NULL, '14.8357@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8358', 'Rizqi Nafi'' Syari''ati', '3SK5', '', '', NULL, NULL, '14.8358@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8359', 'Rodi Satriawan', '3SK5', '', '', NULL, NULL, '14.8359@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8360', 'Rohmah Afifah', '3SE5', '', '', NULL, '72115a42b2e670b9afad38cb5af3b2ad.jpg', '14.8360@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8361', 'Rohmatul Jannah K.', '3SK1', '', '', NULL, NULL, '14.8361@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '5', '052', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8362', 'Rommel Yonatan Sianipar', '3KS1', '', '', NULL, NULL, '14.8362@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8363', 'Ruth Juniar H. Sihombing', '3SK2', '', '', NULL, NULL, '14.8363@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '4', '5', '051', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8364', 'Ruth Vica Gustina', '3SE6', '', '', '1996-08-15', NULL, '14.8364@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', '', NULL, '5', '5', '052', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8365', 'S. Abdurrahman', '3KS2', '', '', NULL, NULL, '14.8365@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8366', 'Sahda Ratnasari', '3SK3', '085254426750', 'Jalan Masjid no 33 Bidaracina, Jakarta Timur ', '0000-00-00', NULL, '14.8366@stis.ac.id', '50f628881ca09bad1eff57a71b348097', '2', '', NULL, '4', '4', '043', 'Sekretaris Seksi', NULL, NULL, 107.441, -3.74105),
('14.8367', 'Saidan Nurhidayat', '3SK1', '', '', NULL, NULL, '14.8367@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8368', 'Saidinur', '3SK2', '', '', NULL, NULL, '14.8368@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8369', 'Sakinah Ramadhani Sudarso', '3SE7', '', '', NULL, NULL, '14.8369@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8370', 'Sandhi Yoga Wiratama', '3SE7', '', '', NULL, NULL, '14.8370@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8371', 'Sandra Logaritma', '3SE1', '', '', NULL, NULL, '14.8371@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8372', 'Sanjaya Abdillah Karim', '3KS1', '', '', NULL, NULL, '14.8372@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '8', '5', '051', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8373', 'Saputri Kusumaningrum', '3SE2', '', '', NULL, NULL, '14.8373@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8374', 'Sarah Pratiwi', '3SE3', '', '', NULL, NULL, '14.8374@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8375', 'Sari Wahyuni', '3SE4', '', '', NULL, NULL, '14.8375@stis.ac.id', '285c4ab037f5e3caaa69f27661c87250', '0', NULL, NULL, '9', '6', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8376', 'Sayudin', '3SK3', '', '', NULL, NULL, '14.8376@stis.ac.id', 'e722c482f0d0a14b612602288ee8207a', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8377', 'Septian Kambubuy', '3SE1', '', '', NULL, NULL, '14.8377@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8378', 'Setianing Margi Lestari', '3SE5', '', '', NULL, NULL, '14.8378@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '073', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8379', 'Setrya Lutfitasari', '3KS1', '', '', NULL, NULL, '14.8379@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8380', 'Sevrilya Rumance Veronika ', '3SK4', '', '', NULL, NULL, '14.8380@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8381', 'Siratul Firdaus', '3SK4', '', '', NULL, NULL, '14.8381@stis.ac.id', 'c1bbadb8eed629591e5fb38fb4db4ed2', '3', NULL, NULL, '2', '4', '041', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8382', 'Siska Oktarianti', '3SK5', '', '', NULL, NULL, '14.8382@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8383', 'Sithadewi Islami', '3SK5', '', '', NULL, NULL, '14.8383@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8384', 'Siti Badriyah', '3SK1', '', '', NULL, NULL, '14.8384@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8385', 'Siti Maryam', '3SE6', '', '', NULL, NULL, '14.8385@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8386', 'Siti Rafika Fiandasari', '3KS2', '', '', NULL, NULL, '14.8386@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8387', 'Siti Sholikah', '3SE7', '', '', NULL, NULL, '14.8387@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '1', '5', '052', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8388', 'Siti Zuliana Fedi', '3SE1', '', '', NULL, NULL, '14.8388@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '4', '000', 'Koordinator Seksi', NULL, NULL, 107.441, -3.74105),
('14.8389', 'Sofian Kardoso', '3KS2', '081282028458', 'Jl. Otista 2 RT 3 RW 9 Kos Biru', '1996-12-10', NULL, '14.8389@stis.ac.id', '08a075855b0a84c94c9f7bd9111c6587', '0', '9271011012960001', NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8390', 'Sonia Smith Neto Fernandes', '3SE2', '', '', NULL, NULL, '14.8390@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8391', 'Sri Murdaningrum', '3SE2', '', '', NULL, NULL, '14.8391@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '041', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8392', 'Sri Wandari', '3SK2', '085228797440', 'Jalan Sensus 2C No 15 RT 007 RW 04, Bidara Cina Jakarta Timur', '1996-03-11', NULL, '14.8392@stis.ac.id', 'c6e6cee4965058319bdb4377b9df3756', '2', '3306015103960004', NULL, '0', '0', '000', 'Sekretaris Umum I', NULL, NULL, 107.441, -3.74105),
('14.8393', 'Stanislaus Christo Willy S A', '3SK5', '085326240559', 'gang hj. misnen, otista 2', '1996-04-28', NULL, '14.8393@stis.ac.id', '8e6b5693dd8c227636f6e1c305067f0b', '3', '', NULL, '8', '5', '053', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8394', 'Stevan Cahya Adi Kusuma', '3SE2', '', '', NULL, NULL, '14.8394@stis.ac.id', 'c48e40825c858aa326d5514dc2fc4b82', '0', NULL, NULL, '5', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8395', 'Stevanus Ronaldo', '3SE3', '', '', NULL, NULL, '14.8395@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '6', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8396', 'Sunggul Atalia', '3SE4', '', '', NULL, NULL, '14.8396@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8397', 'Sunu Fakhriadi', '3SE5', '085715097856', 'Jl. Manggis IV no.77 RT 05 RW 05, Kota Tangerang, Pinang, Kunciran Mas Permai', '1997-04-24', 'd3c8f546b0df82c519d9220111030e94.jpg', '14.8397@stis.ac.id', 'a0147a5195b51cd4f306d3be324dc6d0', '0', '3671112404970001', NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8398', 'Surya Himawan', '3SE6', '', '', NULL, NULL, '14.8398@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8399', 'Surya Kamala', '3SE4', '', '', NULL, NULL, '14.8399@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '1', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8400', 'Susi Yulianti', '3KS2', '', '', NULL, NULL, '14.8400@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8401', 'Syafina Beta Putranti', '3SE5', '', '', NULL, NULL, '14.8401@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8402', 'Syaiful Hadi', '3SK1', '', '', NULL, NULL, '14.8402@stis.ac.id', 'afdfab8d202649b24b94471d90415e05', '0', NULL, NULL, '2', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8403', 'Syerftaztika-I-Mellati Shofiyatulistiwa', '3SK3', '', '', NULL, NULL, '14.8403@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '3', '5', '052', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8404', 'Syifa Nurhidayah', '3SK4', '08970153992', 'Gang Abdurrahman Jalan Otista No.16', '1996-11-21', NULL, '14.8404@stis.ac.id', '93e37351b262f76bf83f120faabd160c', '0', '', NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8405', 'Tadzkirotul Ilmiyati', '3SE6', '', '', NULL, NULL, '14.8405@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8406', 'Tania Viona Sirait', '3SE7', '', '', NULL, NULL, '14.8406@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8407', 'Tetty Florentina Br Bukit', '3SE1', '', '', NULL, NULL, '14.8407@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8408', 'Thandio Andrew Dewandoko', '3SK2', '', '', NULL, NULL, '14.8408@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '071', 'Anggota', NULL, NULL, 107.441, -3.74105);
INSERT INTO `sipadu_mahasiswa` (`nim`, `nama`, `kelas`, `no_telepon`, `alamat`, `tgl_lahir`, `foto`, `email`, `password`, `level`, `no_ktp`, `id_tim`, `id_modul`, `id_seksi`, `id_subseksi`, `jabatan`, `kodeLupaPass`, `denda`, `lng`, `lat`) VALUES
('14.8409', 'Thomi Hartono', '3SE7', '', '', NULL, NULL, '14.8409@stis.ac.id', '807e7acdabc54af5f48480ce0bb4ef99', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8410', 'Tia Tri Damayanti', '3SE2', '', '', NULL, NULL, '14.8410@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '6', '4', '043', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8411', 'Tiara Maureen', '3SK5', '', '', NULL, NULL, '14.8411@stis.ac.id', 'f559de4bd70859935246f3827fc28f79', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8412', 'Tiffany Rizkika', '3KS2', '', '', NULL, NULL, '14.8412@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8413', 'Tirta Aprilian Taher', '3SE3', '', '', NULL, NULL, '14.8413@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8414', 'Tommy Setiawan', '3KS1', '', '', NULL, NULL, '14.8414@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '5', '053', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8415', 'Tonny Arief Juniarta', '3SE1', '', '', NULL, NULL, '14.8415@stis.ac.id', 'af5ce7cc7639644d3068f8fa6e1eda53', '0', NULL, NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8416', 'Untari Rahmawati', '3SE4', '', '', NULL, NULL, '14.8416@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8417', 'Vanny Septiana Larasanti', '3SK1', '', '', NULL, NULL, '14.8417@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8418', 'Vina Ainun Ni''mah', '3SK2', '', '', NULL, NULL, '14.8418@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '3', '5', '051', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8419', 'Vita Fauzia Rachmawati', '3KS2', '', '', NULL, NULL, '14.8419@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8420', 'Vitalis Talenta Intan Nada Sastra', '3SE5', '', '', NULL, NULL, '14.8420@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8421', 'Wafiqah Ummuzahra', '3SE6', '', '', NULL, NULL, '14.8421@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '8', '4', '042', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8422', 'Wahyu Nuraini ', '3SE7', '', '', NULL, NULL, '14.8422@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '2', NULL, NULL, '1', '0', '000', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8423', 'Wahyu Rahmaditama Putera', '3KS2', '', '', NULL, NULL, '14.8423@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '10', '7', '072', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8424', 'Wahyu Setyo Budi', '3SE2', '', '', NULL, NULL, '14.8424@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8425', 'Wahyudi Syahputra', '3KS1', '', '', NULL, NULL, '14.8425@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '10', '7', '073', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8426', 'Weny Fitrah Anwari', '3SE1', '081335117077', '', '1996-10-15', NULL, '14.8426@stis.ac.id', 'cf43a24147d15189208583e5712a0ba7', '0', '3578265510960002', NULL, '6', '5', '053', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8427', 'Wida Siddhikara Perwitasari', '3KS2', '', '', NULL, NULL, '14.8427@stis.ac.id', '141e927de821695c62188a01fba99840', '2', NULL, NULL, '10', '7', '071', 'Sekretaris dan Bendahara Seksi', 'AGUFVBcP', NULL, 107.441, -3.74105),
('14.8428', 'Widya Ardianti', '3SE2', '085387308668', 'Jalan Asem No.4', '1996-05-06', NULL, '14.8428@stis.ac.id', 'd5e16d368f5435a3da06234da2874613', '0', '6104174605960003', NULL, '1', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8429', 'Wihelmus Wedo', '3SE3', '', '', NULL, NULL, '14.8429@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8430', 'Willy Onesimus Siagian', '3SE4', '081212528157', 'Jl. Sensus 1', '1996-04-29', NULL, '14.8430@stis.ac.id', 'bc7413c8c2d64bf34d18d51a8cea0d16', '0', '', NULL, '8', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8431', 'Windi Maharani', '3SE3', '', '', NULL, NULL, '14.8431@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '5', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8432', 'Wirda Avie Nurizza', '3SE4', '', '', NULL, NULL, '14.8432@stis.ac.id', '507db0d82165ff398577efd9457cb95a', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8433', 'Yekti Nur Anggityasto', '3SE5', '', '', NULL, NULL, '14.8433@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '5', '5', '051', 'Koordinator Subseksi', NULL, NULL, 107.441, -3.74105),
('14.8434', 'Yessie Mathahardy Palupi', '3SK3', '085755603394', 'Jalan Kebon Nanas Selatan 2 No 12 RT 11 RW 08 Cipinang Cempedak, Jatinegara, Jakarta Timur', '1996-06-17', NULL, '14.8434@stis.ac.id', '04757466a06fe5d8ca339228a6fa868b', '2', '3507135706960003', NULL, '3', '4', '043', 'Sekretaris Seksi', NULL, NULL, 107.441, -3.74105),
('14.8435', 'Yohanes BAP Ansanay', '3SE6', '081245998293', 'jalan kebon nanas selatan I no.08 RT:02 RW:08 kelurahan:Cipinang Cempedak, Jakarta Timur', '1996-12-02', NULL, '14.8435@stis.ac.id', '57d8375d623f6551d22304569c178144', '0', '', NULL, '11', '8', '082', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8436', 'Yosephine', '3KS1', '', '', NULL, NULL, '14.8436@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8437', 'Yovita Insan P.U', '3SK4', '', '', NULL, NULL, '14.8437@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '4', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8438', 'Yulintin Riana Dewi', '3SK5', '', '', NULL, NULL, '14.8438@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '8', '5', '052', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8439', 'Yunanda Angelia Sinurat', '3SE5', '', '', NULL, NULL, '14.8439@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '1', '4', '043', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8440', 'Yuni Trina', '3SK1', '', '', NULL, NULL, '14.8440@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '4', '4', '041', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8441', 'Yuniar Selviyana', '3SK2', '', '', NULL, NULL, '14.8441@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '2', '5', '051', 'Bendahara Modul', NULL, NULL, 107.441, -3.74105),
('14.8442', 'Yunita Wulandari', '3SE6', '', '', NULL, NULL, '14.8442@stis.ac.id', '05e03c0d0ca24f44dac3a2ad7d55feba', '2', NULL, NULL, '6', '0', '000', 'Sekretaris Modul', NULL, NULL, 107.441, -3.74105),
('14.8443', 'Yusriza Fahmi ', '3SK3', '', '', NULL, 'd4182d04431d6622060f40233f079bd9.jpg', '14.8443@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '3', NULL, NULL, '11', '0', '000', 'Ketua Modul', NULL, NULL, 107.441, -3.74105),
('14.8444', 'Yusuf Arief Pratama', '3SE7', '', '', NULL, NULL, '14.8444@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8445', 'Zainudin Manur', '3SK4', '', '', NULL, NULL, '14.8445@stis.ac.id', '4d9692c39c7f4ac397da65f2143a1f27', '0', NULL, NULL, '11', '8', '081', 'Anggota ', NULL, NULL, 107.441, -3.74105),
('14.8446', 'Zulfa Mufakkir', '3SE1', '', '', NULL, NULL, '14.8446@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '062', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8447', 'Zulfa Nur Fajri Ramadhani', '3SE7', '085768886108', '', '1997-01-29', NULL, '14.8447@stis.ac.id', '866b5c98caeb149a58cdaa0faa3748f9', '3', '', NULL, '7', '5', '052', 'Koordinator Subseksi', 'h7PjrMvY', NULL, 107.441, -3.74105),
('14.8448', 'Zulfandri Dwi Putra', '3KS2', '081381838687', 'Jl. Ciliwung RT 09/06 No. 9 Cililitan KramatJati', '1996-04-30', NULL, '14.8448@stis.ac.id', 'bd2af80e88eaf29ff9866a03b019eae3', '0', '', '001A', '3', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8449', 'Zulpanida', '3SE1', '', '', NULL, NULL, '14.8449@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '7', '4', '042', 'Anggota', NULL, NULL, 107.441, -3.74105),
('14.8450', 'Zuraida Rizki Rachmah', '3SE2', '', '', NULL, NULL, '14.8450@stis.ac.id', '25d55ad283aa400af464c76d713c07ad', '0', NULL, NULL, '9', '6', '061', 'Anggota', NULL, NULL, 107.441, -3.74105);

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_modul`
--

CREATE TABLE `sipadu_modul` (
  `id_modul` char(2) NOT NULL,
  `nama_modul` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_modul`
--

INSERT INTO `sipadu_modul` (`id_modul`, `nama_modul`) VALUES
('0', 'BPH'),
('1', 'KOR'),
('10', 'Pengolahan'),
('11', 'Umum'),
('2', 'Sosial Kependudukan 1'),
('3', 'Sosial Kependudukan 2'),
('4', 'Sosial Kependudukan 3'),
('5', 'Ekonomi 1'),
('6', 'Ekonomi 2'),
('7', 'Ekonomi 3'),
('8', 'Ekonomi 4'),
('9', 'Metodologi');

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_notulensi_revisi`
--

CREATE TABLE `sipadu_notulensi_revisi` (
  `id_rapat` int(8) DEFAULT NULL,
  `notulensi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_pengawasrapat`
--

CREATE TABLE `sipadu_pengawasrapat` (
  `id_rapat` int(8) NOT NULL,
  `nim_pengawas` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_rapat`
--

CREATE TABLE `sipadu_rapat` (
  `id_rapat` int(8) NOT NULL,
  `id_jenis_rapat` char(2) NOT NULL,
  `nama_rapat` varchar(100) NOT NULL,
  `agenda` text,
  `tempat` varchar(50) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime DEFAULT NULL,
  `notulensi` varchar(50) DEFAULT NULL,
  `prioritas_enum` enum('0','1') NOT NULL,
  `id_ketua` varchar(7) DEFAULT NULL,
  `id_sekretaris` varchar(7) DEFAULT NULL,
  `view` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_rapat`
--

INSERT INTO `sipadu_rapat` (`id_rapat`, `id_jenis_rapat`, `nama_rapat`, `agenda`, `tempat`, `waktu_mulai`, `waktu_selesai`, `notulensi`, `prioritas_enum`, `id_ketua`, `id_sekretaris`, `view`) VALUES
(34, 'M3', 'Kumpul Analisis 4', 'Laporan perkembangan subseksi', 'Indekos Jalan Masjid (Mega)', '2016-12-16 08:30:00', '2016-12-16 11:00:00', 'Rapat_Analisis_4.doc', '0', '14.8434', NULL, '0'),
(35, 'M3', 'Kumpul Analisis 5', 'Penyusunan proposal', 'Indekos Jalan Asem (Amel)', '2016-12-19 18:30:00', '2016-12-19 23:00:00', 'Rapat_Analisis_5.doc', '0', '14.8434', NULL, '0'),
(36, 'M3', 'Kumpul Anferen 1', 'Diskusi Metode Analisis', 'indekos Jalan Asem (Amel)', '2016-12-17 13:00:00', '2016-12-17 17:00:00', 'Rapat_Anferen_1.doc', '0', '14.8434', NULL, '0'),
(37, 'M3', 'Kumpul Anferen 2', 'Diskusi Metode Analisis', 'indekos Jalan Asem (Amel)', '2016-12-18 10:00:00', '2016-12-18 17:00:00', NULL, '0', '14.8434', NULL, '0'),
(38, 'M3', 'Kumpul Analisis 6', 'Diskusi Metode Analisis', 'indekos Jalan Asem (Amel)', '2016-12-20 19:00:00', '2016-12-20 23:00:00', NULL, '0', '14.8434', NULL, '0'),
(39, 'M3', 'Diskusi Backend - Frontend', '', 'Kontran GG (Jl. Sensus II C No. 16)', '2017-01-05 19:00:00', '2017-01-05 22:00:00', NULL, '0', '14.8271', NULL, '0'),
(33, 'M3', 'Kumpul Analisis 3', 'Penentuan metode analisis dan tabulasi', 'Indekos Jalan Masjid (Mega)', '2016-12-10 15:30:00', '2016-12-10 18:00:00', 'Rapat_Analisis_3.doc', '0', '14.8434', NULL, '0'),
(32, 'M3', 'Kumpul Analisis 2', 'Pembahasan Variabel dan Indikator', 'Indekos Sarah', '2016-12-08 19:30:00', '2016-12-08 23:00:00', 'Rapat_Analisis_2.doc', '0', '14.8434', NULL, '0'),
(31, 'M3', 'Kumpul Analisis 1', '', 'Indekos Jalan Masjid (Mega)', '2016-12-08 14:00:00', '2016-12-08 17:00:00', 'Rapat_Analisis_1.doc', '0', '14.8434', NULL, '0'),
(30, 'M3', 'Kumpul AB12 (3)', '', 'Indekos Sarah', '2016-12-09 19:00:00', '2016-12-09 23:00:00', 'Rapat_3_AB12_.doc', '0', '14.8434', NULL, '0'),
(29, 'M3', 'Kumpul AB12 (2)', 'Perancangan Bab 1', 'Indekos Jalan Asem (Amel)', '2016-12-02 13:30:00', '2016-12-02 16:10:00', 'Rapat_2_AB12.doc', '0', '14.8434', NULL, '0'),
(28, 'M3', 'Kumpul AB12 (1)', 'Pembahasan Jurnal', 'Indekos Sarah', '2016-12-01 19:40:00', '2016-12-01 23:00:00', 'Rapat_1_AB12.doc', '0', '14.8434', NULL, '0'),
(27, 'M1', 'Rapat Rutin BPH 15', 'Rapat Rutin', 'BaseCamp PKL', '2017-01-04 16:30:00', '2017-01-04 18:00:00', 'RAPAT_EVALUASI_RUTIN_BPH_15_(4_JANUARI).doc', '1', '14.7960', NULL, '0'),
(26, 'M3', 'Rapat VI Seksi Kuesioner', 'Rapat Pembahasan Buped', '343', '2017-01-04 16:30:00', '2017-01-04 00:00:00', NULL, '1', '14.7955', NULL, '0'),
(25, 'M3', 'Rapat Rutin Seksi Pengolahan', '', 'Ruang 336', '2017-01-04 16:30:00', '2017-01-04 18:00:00', NULL, '1', '14.8427', NULL, '0'),
(40, 'M2', 'Rapat Modul Ekonomi, Sosial, dan Kependudukan', 'Rapat pembahasan progres dan agenda', '335', '2017-01-06 13:40:00', '2017-01-06 16:00:00', NULL, '1', '14.8112', NULL, '0'),
(41, 'M3', 'Rapat Subseksi Listing', 'Penggabungan Kepanitiaan', 'Ruang UKES', '2016-12-08 11:30:00', '2016-12-08 13:00:00', NULL, '0', '14.8206', NULL, '0'),
(42, 'M3', 'Rapat Subseksi Metodologi', 'Penggabungan kepanitiaan', 'Ruang UKES', '2016-12-08 11:30:00', '2016-12-08 13:00:00', NULL, '1', '14.8206', NULL, '0'),
(43, 'M3', 'Rapat 1 FGD Skenario', 'Penjabaran tugas skenario sampling', 'Lobi', '2016-12-09 13:30:00', '2016-12-09 16:00:00', NULL, '1', '14.8206', NULL, '0'),
(44, 'D4', 'Rapat IV Koordinasi metodologi', 'Persentasi progress metodologi', 'Ruang 344', '2016-12-13 13:30:00', '2016-12-13 16:00:00', NULL, '1', '14.8206', NULL, '0'),
(45, 'M4', 'Rapat V Koordinasi Metodologi', 'Pembahasan hasil persentasi progress metodologi', 'Ruang 341', '2016-12-13 16:00:00', '2016-12-13 18:00:00', NULL, '1', '14.8206', NULL, '0'),
(46, 'M3', 'Rapat V FGD Skenario Sampling', 'Progress Skenario', 'Ruang 344', '2016-12-15 16:30:00', '2016-12-15 18:00:00', NULL, '1', '14.8206', NULL, '0'),
(47, 'M3', 'Rapat 1 Subseksi Listing', 'Diskusi Kondef dan buku pedoman', 'Ruang 338', '2016-12-16 16:30:00', '2016-12-16 18:00:00', NULL, '1', '14.8206', NULL, '0'),
(48, 'M3', 'Rapat II Subseksi Listing', 'Progress listing dan buku pedoman', 'Ruang 333', '2016-12-19 16:30:00', '2016-12-19 18:00:00', NULL, '1', '14.8206', NULL, '0'),
(49, 'M3', 'Rapat VI Koordinasi Metodologi', '', 'Ruang 334', '2016-12-19 16:30:00', '2016-12-19 18:00:00', NULL, '1', '14.8206', NULL, '0'),
(50, 'M3', 'Rapat VII Koordinasi Metodologi', 'Progress metodologi', 'Ruang 332', '2016-12-21 16:30:00', '2016-12-21 18:00:00', NULL, '1', '14.8206', NULL, '0'),
(51, 'D5', 'Rapat II koordinasi dengan Dosen', 'Persentasi Progress Metodologi', 'Ruang 257', '2016-12-22 13:30:00', '2016-12-22 16:00:00', NULL, '1', '14.8206', NULL, '0'),
(52, 'M3', 'Rapat VIII Koordinasi Metodologi', 'Pembahasan hasil Persentasi dengan dosen II', 'Ruang 333', '2016-12-22 16:30:00', '2016-12-22 18:00:00', NULL, '1', '14.8206', NULL, '0'),
(53, 'M5', 'Rapat Gabungan 2 Metodologi', 'Progress Metodologi dan SP 1', 'Aditorium STIS', '2017-01-04 16:30:00', '2017-01-04 18:00:00', NULL, '1', '14.8206', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_rapat_seksi`
--

CREATE TABLE `sipadu_rapat_seksi` (
  `id_rapat` varchar(10) NOT NULL,
  `id_modul` char(2) NOT NULL,
  `id_seksi` char(1) NOT NULL,
  `id_subseksi` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_rapat_seksi`
--

INSERT INTO `sipadu_rapat_seksi` (`id_rapat`, `id_modul`, `id_seksi`, `id_subseksi`) VALUES
('25', '10', '7', '071'),
('26', '3', '5', '051'),
('27', '0', '0', '000'),
('28', '3', '4', '043'),
('29', '3', '4', '043'),
('30', '3', '4', '043'),
('31', '3', '4', '043'),
('32', '3', '4', '043'),
('33', '3', '4', '043'),
('34', '3', '4', '043'),
('35', '3', '4', '043'),
('36', '3', '4', '043'),
('37', '3', '4', '043'),
('38', '3', '4', '043'),
('39', '10', '7', '071'),
('40', '8', '0', '000'),
('41', '9', '6', '062'),
('42', '9', '6', '062'),
('43', '9', '6', '062'),
('44', '9', '6', '062'),
('45', '9', '6', '062'),
('46', '9', '6', '062'),
('47', '9', '6', '062'),
('48', '9', '6', '062'),
('49', '9', '6', '062'),
('50', '9', '6', '062'),
('51', '9', '6', '062'),
('52', '9', '6', '062'),
('53', '9', '6', '062');

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_seksi`
--

CREATE TABLE `sipadu_seksi` (
  `id_seksi` char(1) NOT NULL,
  `nama_seksi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_seksi`
--

INSERT INTO `sipadu_seksi` (`id_seksi`, `nama_seksi`) VALUES
('4', 'Analisis'),
('8', 'Umum'),
('5', 'Kuesioner'),
('7', 'Pengolahan'),
('6', 'Methodologi'),
('0', 'BPH');

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_subseksi`
--

CREATE TABLE `sipadu_subseksi` (
  `id_subseksi` varchar(3) NOT NULL,
  `nama_subseksi` varchar(50) NOT NULL,
  `rule_denda` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_subseksi`
--

INSERT INTO `sipadu_subseksi` (`id_subseksi`, `nama_subseksi`, `rule_denda`) VALUES
('071', 'Jaringan dan Komunikasi Lapangan', 0),
('053', 'Survei Pendahuluan dan Pelati', 0),
('052', 'Kuesioner', 0),
('051', 'Buku Pedoman', 0),
('062', 'Listing', 0),
('061', 'Metodologi', 0),
('043', 'Analisis Inferensia', 0),
('042', 'Analisis Deskriptif', 0),
('041', 'Analisis Bab 1 dan 2', 0),
('072', 'Capi', 0),
('073', 'Tabulasi', 0),
('081', 'Logistik', 0),
('082', 'Hubungan Masyarakat', 0),
('083', 'Publikasi dan Dokumentasi', 0),
('000', 'BPH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_timeline`
--

CREATE TABLE `sipadu_timeline` (
  `id_subseksi` varchar(3) NOT NULL,
  `waktu` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_timpencacah`
--

CREATE TABLE `sipadu_timpencacah` (
  `id_tim` varchar(4) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nim_koor` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipadu_timpencacah`
--

INSERT INTO `sipadu_timpencacah` (`id_tim`, `nama_tim`, `nim_koor`) VALUES
('001B', 'Kampret', '14.7977'),
('001A', 'Tamvan', '14.8448');

-- --------------------------------------------------------

--
-- Table structure for table `sipadu_web`
--

CREATE TABLE `sipadu_web` (
  `title` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  `content` text NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sipadu_absensirapat`
--
ALTER TABLE `sipadu_absensirapat`
  ADD PRIMARY KEY (`id_rapat`,`id_peserta`),
  ADD KEY `id_rapat` (`id_rapat`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `sipadu_administrasi`
--
ALTER TABLE `sipadu_administrasi`
  ADD PRIMARY KEY (`id_administrasi`);

--
-- Indexes for table `sipadu_dosen`
--
ALTER TABLE `sipadu_dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_modul` (`id_modul`);

--
-- Indexes for table `sipadu_faq`
--
ALTER TABLE `sipadu_faq`
  ADD PRIMARY KEY (`id_faq`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `sipadu_gallery`
--
ALTER TABLE `sipadu_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `sipadu_jenisrapat`
--
ALTER TABLE `sipadu_jenisrapat`
  ADD PRIMARY KEY (`id_jenis_rapat`),
  ADD KEY `id_jenis_rapat` (`id_jenis_rapat`);

--
-- Indexes for table `sipadu_mahasiswa`
--
ALTER TABLE `sipadu_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_modul` (`id_modul`),
  ADD KEY `id_sub_seksi` (`id_subseksi`),
  ADD KEY `id_seksi_2` (`id_seksi`),
  ADD KEY `id_seksi` (`id_seksi`) USING BTREE;

--
-- Indexes for table `sipadu_modul`
--
ALTER TABLE `sipadu_modul`
  ADD PRIMARY KEY (`id_modul`),
  ADD KEY `id_modul` (`id_modul`);

--
-- Indexes for table `sipadu_notulensi_revisi`
--
ALTER TABLE `sipadu_notulensi_revisi`
  ADD KEY `id_rapat` (`id_rapat`),
  ADD KEY `id_rapat_2` (`id_rapat`),
  ADD KEY `id_rapat_3` (`id_rapat`);

--
-- Indexes for table `sipadu_pengawasrapat`
--
ALTER TABLE `sipadu_pengawasrapat`
  ADD PRIMARY KEY (`nim_pengawas`);

--
-- Indexes for table `sipadu_rapat`
--
ALTER TABLE `sipadu_rapat`
  ADD PRIMARY KEY (`id_rapat`),
  ADD KEY `id_jenis_rapat` (`id_jenis_rapat`),
  ADD KEY `id_rapat` (`id_rapat`),
  ADD KEY `id_rapat_2` (`id_rapat`),
  ADD KEY `id_rapat_3` (`id_rapat`);

--
-- Indexes for table `sipadu_rapat_seksi`
--
ALTER TABLE `sipadu_rapat_seksi`
  ADD PRIMARY KEY (`id_rapat`,`id_modul`,`id_seksi`,`id_subseksi`),
  ADD KEY `id_rapat` (`id_rapat`),
  ADD KEY `id_modul` (`id_modul`),
  ADD KEY `id_seksi` (`id_seksi`,`id_subseksi`),
  ADD KEY `id_subseksi` (`id_subseksi`);

--
-- Indexes for table `sipadu_seksi`
--
ALTER TABLE `sipadu_seksi`
  ADD PRIMARY KEY (`id_seksi`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `sipadu_subseksi`
--
ALTER TABLE `sipadu_subseksi`
  ADD PRIMARY KEY (`id_subseksi`),
  ADD KEY `id_sub_seksi` (`id_subseksi`);

--
-- Indexes for table `sipadu_timeline`
--
ALTER TABLE `sipadu_timeline`
  ADD PRIMARY KEY (`id_subseksi`,`waktu`),
  ADD KEY `id_sub_seksi` (`id_subseksi`);

--
-- Indexes for table `sipadu_timpencacah`
--
ALTER TABLE `sipadu_timpencacah`
  ADD PRIMARY KEY (`id_tim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
