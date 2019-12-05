-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 01:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_admin` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto_laundry`
--

CREATE TABLE `tb_foto_laundry` (
  `id_foto_laundry` int(7) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_foto_laundry`
--

INSERT INTO `tb_foto_laundry` (`id_foto_laundry`, `foto`) VALUES
(0, 'prepare.png'),
(0, 'screen.png'),
(2, 'screen.png'),
(2, 'Stage1.png'),
(2, 'Stage2.png'),
(2, 'Stage3.png'),
(6, '1530202883023_0waonq1x.png'),
(6, '1530202977135_tlvq7bpd.png'),
(6, '1530203015181_nxtw76jo.png'),
(6, 'b1748491aa2325d79f3c2d40a76770222a34de1b_s2_n2.png'),
(10, 'Ksteven.png'),
(11, 'Untitled-5.jpg'),
(12, 'Untitled-5.jpg'),
(13, 'Untitled-5.jpg'),
(14, 'Untitled-5.jpg'),
(15, 'Untitled-5.jpg'),
(16, 'Untitled-5.jpg'),
(17, 'Untitled-5.jpg'),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, '60214398_2471439729556559_4804450567353008128_n.jp'),
(25, '69320542_188399538846737_2647667898545340416_n.jpg'),
(27, '60214398_2471439729556559_4804450567353008128_n.jp'),
(27, '69320542_188399538846737_2647667898545340416_n.jpg'),
(29, '60214398_2471439729556559_4804450567353008128_n.jp'),
(29, '69320542_188399538846737_2647667898545340416_n.jpg'),
(31, '60214398_2471439729556559_4804450567353008128_n.jp'),
(31, '69320542_188399538846737_2647667898545340416_n.jpg'),
(33, '60214398_2471439729556559_4804450567353008128_n.jp'),
(33, '69320542_188399538846737_2647667898545340416_n.jpg'),
(35, '60214398_2471439729556559_4804450567353008128_n.jp'),
(35, '69320542_188399538846737_2647667898545340416_n.jpg'),
(37, '60214398_2471439729556559_4804450567353008128_n.jp'),
(37, '69320542_188399538846737_2647667898545340416_n.jpg'),
(39, '60214398_2471439729556559_4804450567353008128_n.jp'),
(39, '69320542_188399538846737_2647667898545340416_n.jpg'),
(41, '60214398_2471439729556559_4804450567353008128_n.jp'),
(41, '69320542_188399538846737_2647667898545340416_n.jpg'),
(43, '60214398_2471439729556559_4804450567353008128_n.jp'),
(43, '69320542_188399538846737_2647667898545340416_n.jpg'),
(45, '60214398_2471439729556559_4804450567353008128_n.jp'),
(45, '69320542_188399538846737_2647667898545340416_n.jpg'),
(47, '60214398_2471439729556559_4804450567353008128_n.jp'),
(47, '69320542_188399538846737_2647667898545340416_n.jpg'),
(49, '60214398_2471439729556559_4804450567353008128_n.jp'),
(49, '69320542_188399538846737_2647667898545340416_n.jpg'),
(51, '60214398_2471439729556559_4804450567353008128_n.jp'),
(51, '69320542_188399538846737_2647667898545340416_n.jpg'),
(53, '69320542_188399538846737_2647667898545340416_n.jpg'),
(54, '69320542_188399538846737_2647667898545340416_n.jpg'),
(55, 'e79cb1084506e508b3f787ae3dd92f83ebeeab58_s2_n2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_iklan`
--

CREATE TABLE `tb_iklan` (
  `id_iklan` int(11) NOT NULL,
  `durasi_iklan` int(3) NOT NULL,
  `harga_iklan` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_iklan`
--

INSERT INTO `tb_iklan` (`id_iklan`, `durasi_iklan`, `harga_iklan`) VALUES
(1, 30, 300000),
(2, 90, 900000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(7) NOT NULL,
  `jenis_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `jenis_kategori`) VALUES
(1, 'Antar Jemput'),
(2, 'Tidak Antar Jemput');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laundry`
--

CREATE TABLE `tb_laundry` (
  `username` varchar(10) NOT NULL,
  `nama_laundry` varchar(15) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `deskripsi_laundry` text NOT NULL,
  `id_kategori` int(7) NOT NULL,
  `id_foto_laundry` int(7) NOT NULL,
  `expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laundry`
--

INSERT INTO `tb_laundry` (`username`, `nama_laundry`, `alamat`, `password`, `email`, `deskripsi_laundry`, `id_kategori`, `id_foto_laundry`, `expired`) VALUES
('', '', '', '', '', '', 1, 24, '2019-12-06'),
('ayumu', 'Ayy', 'p', '1', 'p', 'p', 1, 55, '2019-12-12'),
('b', 'f', 'f', '1', 'f', 'r', 1, 18, '2019-12-02'),
('ekaru04', 'Eka Laundry', 'p', '1', 'p', 'p', 2, 10, '2019-11-20'),
('fahmi07', 'Fahmi Laundry', 'tegal gede', '123', 'fahmi@gmail.com', 'fiehghdfghdiogjaertertviyt3ittttttttttttttdddddddddddddfgewfgaergv dferhdfvaetr3ertgsdfghag', 2, 2, '2019-10-20'),
('g', 'fg', 'g', 'g', 'gg', 'g', 2, 6, '2019-11-29'),
('mako', 'mako laundry', 'k', '1', 'w', 'w', 1, 11, '2020-08-02'),
('p', 'p', 'p', 'p', 'p', 'p', 2, 0, '2019-11-28'),
('r', 'r', 'r', 'r', 'r', 'r', 1, 20, '2019-12-02'),
('utapmantap', 'Utap Mantap', 'Blitar njir', '1', 'utapmantap@gmail.com', 'Saya peod', 1, 54, '2019-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trx`
--

CREATE TABLE `tb_trx` (
  `id_trx` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `id_iklan` int(11) NOT NULL,
  `foto_bukti` varchar(50) NOT NULL,
  `status` enum('Belum_Terkonfirmasi','Terkonfirmasi','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trx`
--

INSERT INTO `tb_trx` (`id_trx`, `username`, `id_iklan`, `foto_bukti`, `status`) VALUES
(1, 'fahmi07', 1, 'stat.jpg', 'Terkonfirmasi'),
(2, 'ekaru04', 1, 'stat.jpg', 'Terkonfirmasi'),
(3, 'mako', 2, 'Untitled-5.jpg', 'Terkonfirmasi'),
(4, 'mako', 1, 'Stage3.png', 'Terkonfirmasi'),
(5, 'utapmantap', 2, '19989267_935936399879188_392557294447907399_n.jpg', 'Terkonfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_admin`);

--
-- Indexes for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_laundry`
--
ALTER TABLE `tb_laundry`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_trx`
--
ALTER TABLE `tb_trx`
  ADD PRIMARY KEY (`id_trx`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_iklan`
--
ALTER TABLE `tb_iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_trx`
--
ALTER TABLE `tb_trx`
  MODIFY `id_trx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
