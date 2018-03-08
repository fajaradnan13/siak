-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 04:06 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(15) NOT NULL,
  `nama_guru` varchar(60) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_kecamatan_fk` int(11) NOT NULL,
  `reputasi` float NOT NULL,
  `thn_aktif` date NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `id_provinsi`, `id_kota`, `id_kecamatan_fk`, `reputasi`, `thn_aktif`, `no_telp`, `email`, `notes`) VALUES
(11, 'Gunanjar S.kom', 4, 7, 30, 4, '2017-07-19', '085454245124', 'gunanjar@gmail.com', 'Universitas Indonesia'),
(12, 'Donita S.Si', 4, 8, 30, 4, '2017-07-10', '05474874', 'donita@gmail.com', 'Universitas Trisakti Indonesia'),
(13, 'Widodo Cahyo S.pd', 4, 7, 30, 3.9, '2017-07-21', '085454245124', 'widodo@gmail.com', 'Universitas IAIN'),
(15, 'Harris Fajri S.pd', 4, 7, 26, 3.9, '2016-12-12', '08126578945', 'haris_fajri@yahoo.com', 'Universitas Cendekia Tangerang'),
(16, 'Harris Fajri S.pd', 4, 7, 27, 3.9, '2016-12-12', '08126578945', 'haris_fajri@yahoo.com', 'Universitas Cendekia Tangerang'),
(18, 'Donita S.Si', 4, 9, 32, 4, '2017-07-10', '05474874', 'donita@gmail.com', 'Universitas Trisakti Indonesia'),
(19, 'Malika S.Kom', 4, 9, 32, 3.8, '2016-07-04', '0854542444', 'Malika@gmail.com', 'Universitas Gunadarma'),
(20, 'Widodo Cahyo S.pd', 4, 7, 19, 3.9, '2017-07-21', '085454245124', 'widodo@gmail.com', 'Universitas IAIN'),
(21, 'Malika S.Kom', 4, 7, 19, 3.8, '2016-07-04', '0854542444', 'Malika@gmail.com', 'Universitas Gunadarma'),
(23, 'Harris Fajri S.pd', 4, 7, 19, 3.9, '2016-12-12', '08126578945', 'haris_fajri@yahoo.com', 'Universitas Cendekia Tangerang'),
(24, 'Malika S.Kom', 4, 7, 27, 3.8, '2016-07-04', '0854542444', 'Malika@gmail.com', 'Universitas Gunadarma'),
(25, 'Malika S.Kom', 4, 7, 26, 3.8, '2016-07-04', '0854542444', 'Malika@gmail.com', 'Universitas Gunadarma'),
(26, 'Donita S.Si', 4, 8, 26, 4, '2017-07-10', '05474874', 'donita@gmail.com', 'Universitas Trisakti Indonesia'),
(27, 'Donita S.Si', 4, 7, 19, 4, '2017-07-10', '081235997415', 'Donita@gmail.com', 'Universitas Trisakti Indonesia'),
(28, 'Mohammad Deni S.Si', 4, 7, 27, 3.9, '2016-12-12', '08126578945', 'haris_fajri@yahoo.com', 'Universitas Indonusa Esa Unggul');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kota_fk` int(11) DEFAULT NULL,
  `nama_kecamatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kota_fk`, `nama_kecamatan`) VALUES
(19, 7, 'Karawaci'),
(20, 5, 'Cakung'),
(21, 5, 'Jatinegara'),
(22, 6, 'Kapuk'),
(23, 6, 'Rawa Bokor'),
(24, 6, 'Cengkareng'),
(26, 7, 'Jati Uwung'),
(27, 7, 'Sangiang'),
(30, 7, 'Cipondoh'),
(32, 9, 'Bumi Serpong Damai');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(15) NOT NULL,
  `kelas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi_fk` int(11) DEFAULT NULL,
  `nama_kota` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi_fk`, `nama_kota`) VALUES
(1, 1, 'Surabaya'),
(2, 3, 'Jakarta Pusat'),
(3, 3, 'Jakarta Utara'),
(4, 3, 'Jakarta Selatan'),
(5, 3, 'Jakarta Timur'),
(6, 3, 'Jakarta Barat'),
(7, 4, 'Kota Tangerang'),
(8, 4, 'Cilegon'),
(9, 4, 'Tangerang Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `passworx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `id_matpel` int(15) NOT NULL,
  `matpel` varchar(60) NOT NULL,
  `id_guru` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`id_matpel`, `matpel`, `id_guru`) VALUES
(15, 'Bahasa Inggris', 13),
(16, 'Ilmu Komputer', 11),
(18, 'Matematika', 12),
(19, 'Bahasa Indonesia ', 15),
(21, 'Bahasa Indonesia', 16),
(23, 'Bahasa Indonesia', 13),
(26, 'Ilmu Pengetahuan Sosial', 18),
(27, 'Matematika', 11),
(28, 'Ilmu Komputer', 21),
(29, 'Matematika', 21),
(30, 'Ilmu Pengetahuan Sosial', 23),
(31, 'Bahasa Indonesia', 20),
(32, 'Ilmu Komputer', 24),
(33, 'Bahasa Inggris', 16),
(34, 'Ilmu Komputer', 25),
(35, 'Matematika', 25),
(36, 'Matematika', 26),
(37, 'Matematika', 27),
(38, 'Matematika', 28),
(39, 'Matematika', 24),
(40, 'Bahasa Inggris', 20),
(41, 'Bahasa Inggris', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `tanggal` date NOT NULL,
  `desa` varchar(200) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_matpel` int(15) NOT NULL,
  `id_guru` int(15) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `handphone` varchar(12) NOT NULL,
  `kelas` int(15) NOT NULL,
  `pembayaran` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `username`, `nama`, `tanggal`, `desa`, `id_provinsi`, `id_kota`, `id_kecamatan`, `id_matpel`, `id_guru`, `jam`, `handphone`, `kelas`, `pembayaran`) VALUES
(12, ' danu', ' danu', '2017-07-22', 'Jl Rara', 2, 3, 9, 16, 11, '14:00', '084545575', 10, 'Via Transfer MANDIRI Cabang Kisamaun : 08125974'),
(13, ' reza', ' Reza Arsyan', '2017-08-08', 'jln nuri', 4, 7, 26, 27, 11, '515', '51515151', 1, 'Cash'),
(14, ' reza', ' Reza Arsyan', '2017-08-14', 'Jln Nuri IV. no 06. RT06/09. Griya Sangiang Mas, Tangerang', 4, 7, 26, 19, 15, '15:00', '081212897454', 8, 'Via Transfer MANDIRI Cabang Kisamaun : 08125974');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(3, 'DKI Jakarta'),
(4, 'Banten');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'reza', '827ccb0eea8a706c4c34a16891f84e7b', 'Reza Arsyan', 'reza.arsyan@gmail.com'),
(2, 'fredy', '827ccb0eea8a706c4c34a16891f84e7b', 'Fredy Priatna', 'fredy@gmail.com'),
(3, 'fajar', '24bc50d85ad8fa9cda686145cf1f8aca', 'fajar adnan', 'fajar@admin.com'),
(8, 'danu', 'a29e5a0efaa2b1521ebea7cf10cd0eab', 'danu', 'danu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_provinsi` (`id_provinsi`,`id_kota`,`id_kecamatan_fk`),
  ADD KEY `id_provinsi_2` (`id_provinsi`,`id_kota`,`id_kecamatan_fk`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`id_matpel`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_provinsi` (`id_provinsi`,`id_kota`,`id_kecamatan`,`id_matpel`,`id_guru`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `uemail` (`uemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `matpel`
--
ALTER TABLE `matpel`
  MODIFY `id_matpel` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `matpel`
--
ALTER TABLE `matpel`
  ADD CONSTRAINT `matpel_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
