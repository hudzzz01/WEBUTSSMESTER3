-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2020 at 09:30 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL,
  `namaInfo` varchar(255) NOT NULL,
  `isiInfo` text NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `p` tinyint(1) NOT NULL DEFAULT '0',
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `namaInfo`, `isiInfo`, `keterangan`, `p`, `img`) VALUES
(1, 'beasiswa', 'Beasiswa adalah pemberian berupa bantuan keuangan yang diberikan kepada perorangan yang bertujuan untuk digunakan demi keberlangsungan pendidikan yang ditempuh. Beasiswa dapat diberikan oleh lembaga pemerintah, perusahaan ataupun yayasan. Pemberian beasiswa dapat dikategorikan pada pemberian cuma-cuma ataupun pemberian dengan ikatan kerja (biasa disebut ikatan dinas) setelah selesainya pendidikan. Lama ikatan dinas ini berbeda-beda, tergantung pada lembaga yang memberikan beasiswa tersebut.\r\n\r\nMurniasih (2009) membagi beasiswa menjadi beasiswa penghargaan, beasiswa bantuan, beasiswa atletik, serta beasiswa penuh', 'ini beasiswa info', 1, 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,w_480/6dd8842c28e50980f3e85317e34730836239aeaa_hq_zupmud.jpg'),
(8, 'Mahasiswa FST berhasil menemukan vaksin corona', 'Dilansir dari detik dot kom mahasiswa uin jakarta bernama roberto kita dapat sebutsaja X telah menemukan vaksin Y pada suatu percobaan di LAB Z', 'vaksin', 0, 'https://statik.tempo.co/data/2020/04/14/id_930541/930541_720.jpg'),
(10, 'Rektor UIN Menemui Kaisar Hirohito', 'Pada beberappa saat yang lalu rektor uin jakarta pada saat ini menemui kaisar hiro hito di kediamanya dalam rangka menjalin silaturahmi serta menambah keeratan umat antar agama', '1 Desembaer 2020', 0, 'https://1.bp.blogspot.com/-1JelIyMQKfc/XbA3XcQ5oSI/AAAAAAABNQU/7bzZipOwUGsGhc8pFks_-rZ37E64WlkoACLcBGAsYHQ/s1600/Hirohito%252C%2BKaisar.jpg'),
(12, 'Mahasiswa FST Afif Syamsul Huda Meraih Medali Emas Dalam Ajang Pencarian Bakat', 'Pada tanggal 31 November Kemarin Saudara Afif Syamsul Huda Meraih penghargaan Medali Emas Dalam Pencarian Bakat Gamer Terbaik Tingkat Internasional', '31 November 2020', 0, 'https://png.pngtree.com/png-vector/20191018/ourlarge/pngtree-gold-medal-for-first-place-icon-cartoon-style-png-image_1821666.jpg'),
(13, 'UAS', 'Menurut surat keputusan rektor no 1 tahun ini uas akan di selengarakan serempak tangal 20 desember ', '20 Desember 2020', 1, 'https://awsimages.detik.net.id/community/media/visual/2019/12/12/848ff94d-46d3-480c-8cf6-e1c934ab8c61_169.jpeg?w=700&q=90');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `id` int(11) NOT NULL,
  `ip` varchar(29) NOT NULL,
  `os` varchar(29) NOT NULL,
  `browser` varchar(29) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `ip`, `os`, `browser`, `date_create`) VALUES
(1, '::1', 'Mac OS X', 'Google Chrome v.86.0.4240.198', '2020-12-02 06:36:38'),
(2, '::1', 'Mac OS X', 'Google Chrome v.86.0.4240.198', '2020-12-02 06:54:56'),
(3, '::1', 'Mac OS X', 'Google Chrome v.86.0.4240.198', '2020-12-02 07:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL,
  `namadep` varchar(20) NOT NULL,
  `namabel` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `statusAkun` varchar(20) NOT NULL,
  `keaktifan` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `namadep`, `namabel`, `username`, `password`, `alamat`, `email`, `statusAkun`, `keaktifan`) VALUES
(1, 'hud', 'zzz', 'admin', 'admin', 'isekai jl sirotolmustqin no 1234 kec antah berantah', 'adasd', 'admin', 1),
(12, 'misha', 'necron', 'user', 'user', 'isekai', '123456', 'user', 1),
(16, 'anuan', 'anuan', 'anuan', 'anuan', 'anuaan', 'anuan', 'user', 1),
(17, 'hudzzz', 'hudzzz', 'wizard', 'wizard', 'bekasi', 'anuanrpl@gmail.com', 'user', 1),
(18, 'wizard', '001', 'hudzzz', 'hudzzz', 'isekai', 'wizard@hudzzz.com', 'user', 0),
(19, 'Jhon', 'yuzu', 'jhon', 'jhon', 'isekai', 'jhon@hudzzz.com', 'user', 1),
(20, 'Tsukasa', 'Mizuno', 'user1', 'user1', 'isekai', 'Tsukasa@hudzzz.com', 'user', 1),
(23, 'asd', 'asd', 'asdasdasdasdasd', 'asdasdasdasdasda', 'asdasdasdasdasdasdas', 'asdasdasdasdasdasd', 'admin', 0),
(24, 'parjo', 'wibowo', 'admin2', 'admin2', 'ditinggal', 'parjo@hudzzz.com', 'admin', 0),
(25, 'Jhon', '001', 'admin3', 'admin3', 'isekai', 'anuanrpl@gmail.com', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
