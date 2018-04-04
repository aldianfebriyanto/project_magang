-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 06:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--
CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id_job` int(11) NOT NULL,
  `nomor` varchar(55) NOT NULL,
  `tanggal` date NOT NULL,
  `store` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kategori` varchar(55) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id_job`, `nomor`, `tanggal`, `store`, `alamat`, `kategori`, `keterangan`) VALUES
(7, '12345 ', '2018-04-10', 'store 2', 'jl.gandaria', 'Standby', 'Sudah'),
(9, '1008', '2018-03-31', 'store 3', 'bulungan1', 'Maintenance', 'Belum'),
(10, '2552', '2018-02-26', 'store 1', 'Jl. Cipete raya', 'Maintenance', 'Sudah'),
(13, '1080ti', '2055-05-05', 'store 4', 'Jl. Bahari', 'Standby', '555'),
(14, '132535', '6662-05-05', 'store 4', 'jl. cinere raya', 'Maintenance', 'off'),
(17, '4555', '2055-05-05', 'store 5', 'jl limo 5', 'Standby', 'ready'),
(18, '1245', '2018-02-01', 'store 2', 'jl.pondok labu', 'Standby', 'System Error'),
(19, '12352', '2017-02-11', 'store 2', 'jl.kamboja', 'Standby', 'System Error'),
(20, '2135', '2017-11-02', 'store 2', 'Jl. Melati', 'Standby', 'System Error'),
(21, '2343', '2109-04-02', 'store 2', 'jl.kemang raya', 'Maintenance', 'Sudah'),
(22, '1354', '2019-04-12', 'store 2', 'Jl. Karang Raya', 'Standby', 'System Error'),
(24, '12342', '2017-12-02', 'store 3', 'Jl.karang raya', 'Maintenance', 'System Error'),
(25, '123231', '2018-03-22', 'Jl.Bunguran No. 35 B', 'Jl.Bunguran No. 35 B', 'Maintenance', 'asd'),
(26, '324432', '2018-03-22', 'Jl.Raya Wonokromo', 'Jl.Raya Wonokromo', 'Maintenance', 'sad'),
(27, '432', '2018-03-23', 'JL.Bubutan No. 1-7', 'JL.Bubutan No. 1-7', 'Maintenance', 'SDdsdsa'),
(28, 'q34q4', '2018-03-15', 'JL. AHMAD YANI', 'JL. AHMAD YANI', 'Maintenance', 'zdzfdas'),
(29, '213321', '2018-03-06', 'JL.Bubutan No. 1-7', 'JL.Bubutan No. 1-7', 'Maintenance', 'dsfdsf'),
(30, '3443221', '2018-03-23', 'JL. Veteran No. 2', 'JL. Veteran No. 2', 'Maintenance', 'gfd'),
(31, '54321', '2018-03-19', 'Jl. Hayam Wuruk G34 - G45', 'Jl. Hayam Wuruk G34 - G45', 'Maintenance', 'fdsdfs'),
(32, '67786', '2018-10-26', 'MULYOSARI SURABAYA', 'MULYOSARI SURABAYA', 'Maintenance', ''),
(33, '242', '2018-03-08', 'JL. AHMAD YANI', 'JL. AHMAD YANI', 'Maintenance', ''),
(34, '121212', '2018-03-14', '1027', 'Jl.Raya Wonokromo', 'Maintenance', ''),
(35, '7778', '2018-03-07', '1032', 'Jl.Ahmad Yani 16-18', 'Maintenance', ''),
(36, '54512', '2018-05-25', '1026', 'Jl. Puncak Indah Lontar No. 2', 'Maintenance', ''),
(37, '2132', '2018-03-29', '1038', 'JL. AHMAD YANI', 'Maintenance', ''),
(38, '21231', '2005-05-05', 'ADITYAWARMAN SURABAYA', 'Jl. Hayam Wuruk G34 - G45', 'Maintenance', '');

-- --------------------------------------------------------

--
-- Table structure for table `plus_key`
--

DROP TABLE IF EXISTS `plus_key`;
CREATE TABLE `plus_key` (
  `username` varchar(50) NOT NULL,
  `pkey` varchar(32) NOT NULL,
  `time` varchar(10) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plus_key`
--

INSERT INTO `plus_key` (`username`, `pkey`, `time`, `status`) VALUES
('1001', '0b5a34676b137197924cdca8507a17cc', '1521443221', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `plus_login`
--

DROP TABLE IF EXISTS `plus_login`;
CREATE TABLE `plus_login` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tm` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` char(3) NOT NULL DEFAULT 'ON'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plus_signup`
--

DROP TABLE IF EXISTS `plus_signup`;
CREATE TABLE `plus_signup` (
  `mem_id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `nama` varchar(160) NOT NULL DEFAULT '',
  `division` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plus_signup`
--

INSERT INTO `plus_signup` (`mem_id`, `username`, `password`, `email`, `nama`, `division`, `phone`) VALUES
(3, 'kuanh', '6531401f9a6807306651b87e44c05751', 'kuanh@gmail.com', 'juahg', 'IT Support', '0'),
(4, 'lugor', 'a75d6a841eafd550b0a27293ee054614', 'juan@gmail.com', 'Juan Tharo', 'IT Support', '085697604336'),
(5, 'aldianfbrn', '202cb962ac59075b964b07152d234b70', 'aldi@gmail.com', 'aldiansyah', 'IT Support', '353231453532'),
(6, 'aldianfbrnt', '4297f44b13955235245b2497399d7a93', 'aldi270201@gmail.com', 'aldian', 'IT Support', '012312'),
(7, 'aldianfbrnasd', 'a8f5f167f44f4964e6c998dee827110c', 'kjads@asd.com', 'asdsad', 'IT Support', '1263'),
(8, 'farizak', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'fariz17k@gantng.com', 'Fariz', 'IT Solution', '0215632589452');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id_job`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `plus_signup`
--
ALTER TABLE `plus_signup`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userid` (`username`),
  ADD UNIQUE KEY `mem_id` (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `plus_signup`
--
ALTER TABLE `plus_signup`
  MODIFY `mem_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
