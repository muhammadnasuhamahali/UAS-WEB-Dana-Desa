-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 11:03 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `agenda` varchar(100) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `image`, `lokasi`, `agenda`, `anggaran`, `keterangan`) VALUES
(1, '2017-10-23', 'Capture-1.PNG', 'Jalan Raya Kedung', 'khoul masal', 10000000, 'dimeriahkan oleh K H Anwar Zahid'),
(4, '2017-11-22', 'FB_IMG_14876744093005870.jpg', 'Balai Desa', 'Ulang Tahun Desa', 20000000, 'Ulang tahun desa yang diselenggarakan setiap tahunnya'),
(5, '2017-12-14', 'Capture.PNG', 'Balai Desa', 'Ulang tahun desa', 1000000, 'Khajatan Desa'),
(6, '2017-03-28', 'noimage.jpg', 'Balai Desa', 'Ulang Tahun Desa', 10000000, 'Perayaan tahunan Ulang Tahun Desa yang ke sekian');

-- --------------------------------------------------------

--
-- Table structure for table `coment_agenda`
--

CREATE TABLE IF NOT EXISTS `coment_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_agenda` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coment_agenda`
--

INSERT INTO `coment_agenda` (`id`, `id_agenda`, `waktu`, `nama`, `email`, `komentar`) VALUES
(1, 6, '2017-12-30 14:38:02', 'Muhammad Afifi', 'afifi@gmail.com', 'acara yang hebat');

-- --------------------------------------------------------

--
-- Table structure for table `coment_pembangunan`
--

CREATE TABLE IF NOT EXISTS `coment_pembangunan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembangunan` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `coment_pembangunan`
--

INSERT INTO `coment_pembangunan` (`id`, `id_pembangunan`, `waktu`, `nama`, `email`, `komentar`) VALUES
(1, 7, '2017-12-29 15:26:48', 'siapa', 'siapa@gmail.com', 'pembangunan yang baik\r\n'),
(2, 7, '2018-01-16 02:49:42', 'testing', 'test@gmail.com', 'finish'),
(3, 6, '2018-01-16 07:55:11', 'saya', 'saya@gmail.com', 'Sudah selesai');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `waktu`, `nama`, `email`, `pesan`) VALUES
(3, '2017-10-23 07:37:25', 'gombal', 'gombal@gmail.com', 'belum jadi ya.., Kasihan....!'),
(4, '2017-12-13 09:19:09', 'ahmad nooar arif', 'arif0482@gmail.com', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE IF NOT EXISTS `keuangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `aksi` varchar(20) NOT NULL,
  `nominal` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `tanggal`, `aksi`, `nominal`, `saldo`, `keterangan`) VALUES
(1, '2017-10-23 00:00:00', 'Pemasukkan', 0, 0, 'Masih Kosong'),
(11, '2017-10-23 00:00:00', 'Pemasukan', 500000, 500000, 'Pemasukkan Dari President'),
(12, '2017-10-23 00:00:00', 'Pengeluaran', 100000, 400000, 'Santunan anak yatim'),
(13, '2017-10-23 00:00:00', 'Pemasukan', 1000000, 1400000, 'Sumbangan Desa Sebelah'),
(14, '2017-12-13 09:21:09', 'Pemasukan', 1000000000, 1001400000, 'Dana Pembangunan Dari Pemerintah Pusat'),
(15, '2017-12-13 09:21:59', 'Pengeluaran', 500000000, 501400000, 'Perbaikan Jalan Desa ke Kota'),
(18, '2017-12-30 13:27:28', 'Pengeluaran', 10000000, 491400000, 'Pembangunan Musholah Baitul Muttaqin'),
(19, '2017-12-30 13:32:02', 'Pengeluaran', 10000000, 481400000, 'Mencoba membangun kembali'),
(20, '2017-12-30 14:21:26', 'Pengeluaran', 10000000, 471400000, 'Perayaan tahunan Ulang Tahun Desa yang ke sekian');

-- --------------------------------------------------------

--
-- Table structure for table `pembangunan`
--

CREATE TABLE IF NOT EXISTS `pembangunan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `bangun` varchar(100) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pembangunan`
--

INSERT INTO `pembangunan` (`id`, `tanggal`, `image`, `lokasi`, `bangun`, `anggaran`, `keterangan`) VALUES
(5, '2017-10-24 00:00:00', '15088546498811699019673.jpg', 'Masjid besar baitul muqorrabin', 'Pembangunan masjid bugel', 20000000, 'Pembangunan ulang masjid besar'),
(6, '2017-12-13 00:00:00', 'Capture1.PNG', 'RT 01', 'Pembangunan akses jembatan utama desa', 500000000, 'Pembangunan ulang jembatan yang telah rusak'),
(7, '2017-01-28 00:00:00', 'jadwal_uas_gasal.PNG', 'Disini', 'Mencoba', 10000000, 'Mencoba membangun kembali');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_daftar` date NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `tgl_daftar`, `nama`, `email`, `username`, `password`) VALUES
(1, '2016-11-05', 'Saya sendiri', 'admin@unisnu.ac.id', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, '2017-10-23', 'Muhammad Afifi', 'muh.avifi@gmail.com', 'afifi', '20f29ca2790482f685224482ead91763'),
(3, '2017-12-13', 'test', 'test@test.com', 'test', '098f6bcd4621d373cade4e832627b4f6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
