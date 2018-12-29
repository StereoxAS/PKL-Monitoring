-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 12:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_bali`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabkot`
--

CREATE TABLE `kabkot` (
  `id_kabkot` int(1) NOT NULL,
  `nama_kabkot` varchar(25) NOT NULL,
  `embed_kabkot` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabkot`
--

INSERT INTO `kabkot` (`id_kabkot`, `nama_kabkot`, `embed_kabkot`) VALUES
(0, 'KabKot', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010292.4352177527!2d114.5110491482803!3d-8.455072623045485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sen!2sid!4v1545913963616\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(1, 'Kabupaten Badung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505027.0979627878!2d114.88733692297224!3d-8.54548476551062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23b965b12b495%3A0x3030bfbca7cbee0!2sBadung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864194571\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(2, 'Kabupaten Bangli', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252651.9069938496!2d115.2049045891624!3d-8.333960489085305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21e398e4623fd%3A0x3030bfbca7cbef0!2sBangli+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864295599\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(3, 'Kabupaten Buleleng', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505447.01735264424!2d114.66444587246237!3d-8.22237356516685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd182f8db579db5%3A0x3030bfbca7cbf00!2sBuleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864349363\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(4, 'Kabupaten Gianyar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252555.49702789477!2d115.1581621446455!3d-8.481907015774944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2181d70bc9b4f%3A0x3030bfbca7cbf20!2sGianyar%2C+Bali!5e0!3m2!1sen!2sid!4v1543864382159\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(5, 'Kabupaten Jembrana', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252665.33056312407!2d114.54276913839895!3d-8.3131539486706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1631a25b65eb5%3A0x3030bfbca7cbf30!2sJembrana+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864424010\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(6, 'Kabupaten Karangasem', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252635.9834415825!2d115.41067024006801!3d-8.358575318610669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd203c4194602dd%3A0x3030bfbca7cbf40!2sKarangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864459753\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(7, 'Kabupaten Klungkung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252452.3577439443!2d115.35187625051111!3d-8.637395071604923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd272b1333f9fb1%3A0x3030bfbca7cbf60!2sKlungkung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864491046\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(8, 'Kabupaten Tabanan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252583.49773361738!2d114.92596214305298!3d-8.439203687891448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22f15b3ed26cd%3A0x3030bfbca7cbf50!2sTabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864530740\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(9, 'Kota Denpasar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126214.5323372456!2d115.15435185865068!3d-8.672127618759404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ed7ff32d21%3A0xbc7803c5ad03b4ee!2sDenpasar+City%2C+Bali!5e0!3m2!1sen!2sid!4v1543864583777\" width=\"470\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(2) NOT NULL,
  `nama_kecamatan` varchar(25) NOT NULL,
  `embed_kecamatan` varchar(500) NOT NULL,
  `id_kabkot` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `embed_kecamatan`, `id_kabkot`) VALUES
(1, 'Kecamatan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010292.4352177527!2d114.5110491482803!3d-8.455072623045485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sen!2sid!4v1545913963616\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 0),
(11, 'Abiansemal', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126261.70642815421!2d115.15288390734776!3d-8.53057706979312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23c589a2ccd79%3A0x4030bfbca7d2bf0!2sAbiansemal%2C+Badung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864840639\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1),
(12, 'Kuta', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63098.13354539181!2d115.13651323141079!3d-8.726322345108354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24699ccf67337%3A0x4030bfbca7d2c00!2sKuta%2C+Badung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864885398\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1),
(13, 'Kuta Selatan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63088.08054918825!2d115.16381133154758!3d-8.785595184549967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244c6d5ad1f8f%3A0x73840119194c50f4!2sKuta+Selatan%2C+South+Kuta%2C+Badung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864922674\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1),
(14, 'Kuta Utara', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63112.166867974556!2d115.11749378121985!3d-8.642906909978946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2388fc2de0a0b%3A0xdac0d412e07ae170!2sNorth+Kuta%2C+Badung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864959629\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1),
(15, 'Mengwi', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126249.9707241975!2d115.0879292576719!3d-8.566008144489208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23bba1d8ccc81%3A0x4030bfbca7d2be0!2sMengwi%2C+Badung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543864988733\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1),
(16, 'Petang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252638.49621286738!2d115.0771601399251!3d-8.3546958297168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd220e8c6a28f89%3A0x4030bfbca7d2bd0!2sPetang%2C+Badung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865016730\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 1),
(21, 'Bangli', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252601.04979027074!2d115.22217014205481!3d-8.412325664781493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd219440cd213f3%3A0x69da79415c5ea19d!2sBangli+Sub-District%2C+Bangli+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865071624\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2),
(22, 'Kintamani', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252705.88364378587!2d115.20490458609258!3d-8.249980179665252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1f46fa4effc21%3A0x4030bfbca7d2c20!2sKintamani%2C+Bangli+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865115428\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2),
(23, 'Susut', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126295.5054863075!2d115.26985025641424!3d-8.42770884331314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2191127599531%3A0x292bfddfdc82ca16!2sSusut%2C+Bangli+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865147733\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2),
(24, 'Tembuku', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126298.74955783597!2d115.31813075632469!3d-8.417769800420826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21baecaaffe31%3A0xd941434ed50fdce2!2sTembuku%2C+Bangli+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865188667\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 2),
(31, 'Banjar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126357.15318367945!2d114.96233485471163!3d-8.23679887996804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1833b851b4c3f%3A0xedaa855c24d6ef02!2sBanjar%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865245231\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(32, 'Buleleng', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63195.47613052046!2d115.04105993008632!3d-8.130241251663795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd190e8522f64c5%3A0xceec399aae0afb92!2sBuleleng%2C+Buleleng+Sub-District%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865307712\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(33, 'Busungbiu', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31587.940310462654!2d114.9475267776244!3d-8.253671569895422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd183dac9d7d459%3A0x5030bfbca830410!2sBusungbiu%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865350372\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(34, 'Gerokgak', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252734.74904855184!2d114.51896218445091!3d-8.20471925941186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd170660c58dc13%3A0x2f8c210d7925ce89!2sGerokgak%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865392101\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(35, 'Kabutambahan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126383.22698352688!2d115.14490025399147!3d-8.154718488805067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd193815c8a11dd%3A0xaf0634d06ce12ed8!2sKubutambahan%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865423598\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(36, 'Sawan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126383.4300422277!2d115.1001907539858!3d-8.15407603926578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1919c6b400ab7%3A0x4d75022383f6c23f!2sSawan%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865459007\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(37, 'Seririt', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126349.95585455539!2d114.84763475491039!3d-8.259313413837809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1821b237bcdcd%3A0x4030bfbca7d2c50!2sSeririt%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865485555\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(38, 'Sukasada', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126362.92576699193!2d115.03431620455218!3d-8.218696942939639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd18f7a203925d5%3A0x4030bfbca7d2cc0!2sSukasada%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865528020\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(39, 'Tejakula', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126388.6804452477!2d115.2844087538408!3d-8.137447001191953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1ed95519ca34b%3A0x53fd599be5f5e6c1!2sTejakula%2C+Buleleng+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865553386\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 3),
(41, 'Blahbatuh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63124.87545843839!2d115.28296373104695!3d-8.566670373581527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd215d9f30dc839%3A0x3bc04a3f834bca91!2sBlahbatuh%2C+Gianyar%2C+Bali!5e0!3m2!1sen!2sid!4v1543865588725\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 4),
(42, 'Gianyar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126267.68871023947!2d115.2664959571826!3d-8.512459732735751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2170670cc0e27%3A0x4030bfbca7d2d50!2sGianyar%2C+Gianyar+Sub-District%2C+Gianyar%2C+Bali!5e0!3m2!1sen!2sid!4v1543865621544\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 4),
(43, 'Payangan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126301.51863232425!2d115.19005630624821!3d-8.409276806495004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd221f2ab255bef%3A0x4030bfbca7d2d10!2sPayangan%2C+Gianyar%2C+Bali!5e0!3m2!1sen!2sid!4v1543865647386\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 4),
(44, 'Sukawati', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126244.20749006684!2d115.20550475783111!3d-8.58335468210428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e18584f2349%3A0x4030bfbca7d2d60!2sSukawati%2C+Gianyar%2C+Bali!5e0!3m2!1sen!2sid!4v1543865676536\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 4),
(45, 'Tampaksiring', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126290.21182743454!2d115.23660320656047!3d-8.443902381734262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd218607b4f7c8d%3A0x4030bfbca7d2d70!2sTampaksiring%2C+Gianyar%2C+Bali!5e0!3m2!1sen!2sid!4v1543865705050\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 4),
(46, 'Tegallalang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126301.17805188707!2d115.21895830625755!3d-8.41032185574757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd218a46438f143%3A0x4030bfbca7d2d40!2sTegallalang%2C+Gianyar%2C+Bali!5e0!3m2!1sen!2sid!4v1543865730696\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 4),
(47, 'Ubud', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63136.53831708413!2d115.23101968088825!3d-8.496109586181356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d739f22c9c3%3A0x54a38afd6b773d1c!2sUbud%2C+Gianyar%2C+Bali!5e0!3m2!1sen!2sid!4v1543865754535\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 4),
(51, 'Jembrana', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31579.407220545876!2d114.6205661276821!3d-8.359695365151198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd163b783ebbb5d%3A0xd668745c2713a1d7!2sJembrana%2C+Jembrana+Sub-District%2C+Jembrana+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865798549\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 5),
(52, 'Melaya', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126353.68633506789!2d114.47202175480734!3d-8.247651422192408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1679c2805aa07%3A0x4030bfbca7d2d80!2sMelaya%2C+Jembrana+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865850283\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 5),
(53, 'Mendoyo', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252669.06554984007!2d114.60386958818656!3d-8.307355515278322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd17cef4d142f5b%3A0x4030bfbca7d2d90!2sMendoyo%2C+Jembrana+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865873017\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 5),
(54, 'Negara', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31579.636217512725!2d114.57362787768055!3d-8.356867515277662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd161ff99e8a4c5%3A0xf68296e1c797e518!2sNegara%2C+Jembrana+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865897221\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 5),
(55, 'Pekutatan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31579.636217512725!2d114.57362787768055!3d-8.356867515277662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3d4ef8cf938c7%3A0x4030bfbca7d2db0!2sPekutatan%2C+Jembrana+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865925459\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 5),
(61, 'Abang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126316.4457992882!2d115.5448817558359!3d-8.363346389353804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd201209ab93ac5%3A0x4030bfbca7d2e00!2sAbang%2C+Karangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865975474\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6),
(62, 'Bebandem', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126302.73812640547!2d115.47796175621448!3d-8.405533809172175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd205d94bf59b07%3A0x4210b3e6840c1fa2!2sBebandem%2C+Karangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866197678\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6),
(63, 'Karangasem', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63144.084614461244!2d115.57183573078555!3d-8.450142544394666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdff54a5a9ceed%3A0x158d2198ae21cbf0!2sAmlapura%2C+Karangasem+Sub-District%2C+Karangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866223971\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6),
(64, 'Kubu', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126350.95888355288!2d115.45346975488268!3d-8.2561794160829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1f907d4fa1b29%3A0x4030bfbca7d2df0!2sKubu%2C+Karangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866255671\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6),
(65, 'Manggis', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15784.296305386466!2d115.51644521685898!3d-8.49217875230878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd20f08e526e0d9%3A0xe8cfc3ff76ecc7c4!2sManggis%2C+Karangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866314189\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6),
(66, 'Rendang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252621.05367012077!2d115.30173924091713!3d-8.381588752737406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21c909badf64b%3A0x4030bfbca7d2dd0!2sRendang%2C+Karangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866339109\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6),
(67, 'Selat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126301.16015888673!2d115.40838085625815!3d-8.4103767557083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd204ca10247cab%3A0x4030bfbca7d2de0!2sSelat%2C+Karangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866408272\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6),
(68, 'Sidemen', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63137.96133892131!2d115.40403123086892!3d-8.487460387726474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2106f48ac1935%3A0x4030bfbca7d2dc0!2sSidemen%2C+Karangasem+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866438421\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 6),
(71, 'Banjarangkan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126266.73050481046!2d115.30826925720902!3d-8.515364230660664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2172ad38bc1c5%3A0x4030bfbca7d2ec0!2sBanjarangkan%2C+Klungkung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866481782\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 7),
(72, 'Dawan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63129.50744777532!2d115.41019828098395!3d-8.538715928572136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21193ea87201d%3A0x4030bfbca7d2ee0!2sDawan%2C+Klungkung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866504937\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 7),
(73, 'Klungkung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31564.58192346388!2d115.38497757778217!3d-8.540792707059893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21119c4d14f17%3A0x4030bfbca7d2ed0!2sSemarapura%2C+Klungkung+Sub-District%2C+Klungkung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866556637\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 7),
(74, 'Nusa Penida', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126189.7540465316!2d115.4675992593351!3d-8.74556656640253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd271194d1319d3%3A0x5c3a3706b2197b7b!2sPenida+Island!5e0!3m2!1sen!2sid!4v1543866582512\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 7),
(80, 'Tabanan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63129.547390038395!2d115.08452693098336!3d-8.538474478615237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a5be9804c43%3A0xb7d0c1d30d7b6159!2sTabanan%2C+Tabanan+Sub-District%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866956675\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(81, 'Baturiti', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252643.83647791288!2d115.03165808962133!3d-8.346445003338658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22746e982c319%3A0x4030bfbca7d2ea0!2sBaturiti%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866672777\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(82, 'Kediri', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126246.80621603387!2d115.04799830775931!3d-8.57553718768546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a1ffda5af47%3A0x4030bfbca7d2e90!2sKediri%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866697708\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(83, 'Kerambitan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126262.95358047565!2d115.00672215731332!3d-8.526803222488866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2306f382e2551%3A0x4030bfbca7d2e80!2sKerambitan%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866724067\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(84, 'Marga', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126287.92273506544!2d115.10819330662376!3d-8.450895276734755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2249a3de154bd%3A0x4030bfbca7d2eb0!2sMarga%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866744341\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(85, 'Penebel', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126308.24811184629!2d115.05460070606237!3d-8.38860132128437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd224347c9cae99%3A0xaaaec6eea1232e62!2sPenebel%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866768876\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(86, 'Pupuan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126314.9005014921!2d114.94395480587856!3d-8.36811283594313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22990c2488077%3A0x4030bfbca7d2e40!2sPupuan%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866794351\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(87, 'Selemadeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252580.69543363128!2d114.88792919321239!3d-8.443487075639958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22eebce1a80a1%3A0x756b4f447321bce8!2sSelemadeg%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866831092\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(88, 'Selemadeg Barat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126286.4794696178!2d114.90316175666356!3d-8.455301323584877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22c486ebbee3f%3A0xbff47ed64157f28a!2sWest+Selemadeg%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866876728\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(89, 'Selemadeg Timur', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126282.14819509334!2d114.98907115678321!3d-8.468510314142655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22fade485bb07%3A0xf0f82dc46d26e563!2sEast+Selemadeg%2C+Tabanan+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543866905953\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 8),
(91, 'Denpasar Barat', '<iframe src=\"https://www.google.com/maps/embed?pb=\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 9),
(92, 'Denpasar Selatan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63113.8334650261!2d115.21162778119721!3d-8.632947361755345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2410dc1a11ecd%3A0x4030bfbca7d2d00!2sSouth+Denpasar%2C+Denpasar+City%2C+Bali!5e0!3m2!1sen!2sid!4v1543867163371\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 9),
(93, 'Denpasar Timur', '<iframe src=\"https://www.google.com/maps/embed?pb=\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 9),
(94, 'Denpasar Utara', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63115.193742483076!2d115.1766117311787!3d-8.624809913206896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f3de3b98cdd%3A0x8f2f5967c61cb8da!2sNorth+Denpasar%2C+Denpasar+City%2C+Bali!5e0!3m2!1sen!2sid!4v1543867117502\" width=\"460\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabkot`
--
ALTER TABLE `kabkot`
  ADD PRIMARY KEY (`id_kabkot`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
