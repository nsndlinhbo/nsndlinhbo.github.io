-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 02:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momo`
--

-- --------------------------------------------------------

--
-- Table structure for table `caidat`
--

CREATE TABLE `caidat` (
  `id` int(11) NOT NULL,
  `tieude` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tukhoa` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(225) NOT NULL,
  `chietkhau` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caidat`
--

INSERT INTO `caidat` (`id`, `tieude`, `mota`, `tukhoa`, `image`, `email`, `sdt`, `chietkhau`) VALUES
(1, 'CHẲN LẺ MOMO', 'Hệ thống chơi chẵn lẻ momo tự động, trả thưởng tự động về ví MOMO trong vài giây', 'chan le momo, choi chan le momo, chẵn lẻ momo tự động, choi game chan le', 'ảnh hiển thị khi đăng link lên fb', 'vaiu', '0926214712', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `caidat_momo`
--

CREATE TABLE `caidat_momo` (
  `id` int(11) NOT NULL,
  `toithieu` varchar(225) NOT NULL,
  `toida` varchar(225) NOT NULL,
  `noidung` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caidat_momo`
--

INSERT INTO `caidat_momo` (`id`, `toithieu`, `toida`, `noidung`) VALUES
(1, '1000', '500000', 'Trả thưởng momo');

-- --------------------------------------------------------

--
-- Table structure for table `history_send`
--

CREATE TABLE `history_send` (
  `id` int(11) NOT NULL,
  `sdt_gui` varchar(225) NOT NULL,
  `loinhan` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `sdt_nhan` varchar(225) NOT NULL,
  `thoigian` varchar(225) NOT NULL,
  `guitien` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `momo`
--

CREATE TABLE `momo` (
  `id` int(11) NOT NULL,
  `nguoigui` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nguoigui` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nguoinhan` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nguoinhan` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loinhan` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tranid` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `socuoi` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` varchar(225) NOT NULL,
  `guitien` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `sdt` varchar(225) NOT NULL,
  `tiencuoc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caidat`
--
ALTER TABLE `caidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caidat_momo`
--
ALTER TABLE `caidat_momo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_send`
--
ALTER TABLE `history_send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caidat`
--
ALTER TABLE `caidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caidat_momo`
--
ALTER TABLE `caidat_momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_send`
--
ALTER TABLE `history_send`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
