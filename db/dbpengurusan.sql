-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 04:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpengurusan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keterangan`
--

CREATE TABLE `tbl_keterangan` (
  `nama_pemohon` varchar(255) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kesadaran` varchar(100) NOT NULL,
  `keadaan` varchar(100) NOT NULL,
  `tekanan_darah` varchar(100) NOT NULL,
  `nadi` varchar(100) NOT NULL,
  `pernafasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keterangan`
--

INSERT INTO `tbl_keterangan` (`nama_pemohon`, `nik`, `jk`, `umur`, `tempat_lahir`, `alamat`, `pekerjaan`, `no_hp`, `kesadaran`, `keadaan`, `tekanan_darah`, `nadi`, `pernafasan`) VALUES
('Bayu', '20202340098', 'Laki-laki', '18 Tahun', 'Batu Bara, 20 April 2002', 'Batu Bara', 'Pelajar', '0898757876', 'baik', 'baik', '245', '130', '100'),
('Desi', '2020108909876', 'perempuan', '20 Tahun', 'Sei silau, 15 Febuari 1999', 'Sei silau', 'Siswi', '089765465', 'baik', 'baik', '255', '130', '90'),
('putri', '2020009890765', 'Perempuan', '21 tahun', 'kisaran, 18-08-1998', 'kisaran', 'mahasiswi', ' 	0822657987', 'baik', 'baik', '450', '120', '80');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemohon`
--

CREATE TABLE `tbl_pemohon` (
  `id_pemohon` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tujuan` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemohon`
--

INSERT INTO `tbl_pemohon` (`id_pemohon`, `nama`, `nik`, `jk`, `umur`, `tempat_lahir`, `alamat`, `pekerjaan`, `status`, `tujuan`, `no_hp`) VALUES
(10090, 'Putri', '2020009890765', 'Perempuan', '21 tahun', 'Tanjung Balai, 18-08-1998', 'Tanjung Balai', 'Mahasiswi', 'belum kawin', 'Cek', '0822657987'),
(20201, 'Dwi Indah', '2020109091882', 'Perempuan', '22 Tahun', 'Kisaran, 11 Mei 1997', 'Jln Dipo .60 Kisaran', 'Mahasiswi', 'Belum Kawin', 'Pengurursan Berkas', '0898757876'),
(20202, 'Bayu', '20202340098', 'Laki-laki', '18 Tahun', 'Batu Bara, 20 April 2002', 'Batu Bara', 'Pelajar', 'Belum Kawin', 'Tes Tentara', '0898757876');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(23) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `email`, `nama`, `level`, `ket`) VALUES
('putri', '12345678', 'source1@gmail.com', 'putri astary', 1, 'staff pidana'),
('source1', '25d55ad283aa400af464c76d713c07ad', 'source1@gmail.com', 'pegawai BNN', 1, 'staff pidana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_keterangan`
--
ALTER TABLE `tbl_keterangan`
  ADD PRIMARY KEY (`nama_pemohon`);

--
-- Indexes for table `tbl_pemohon`
--
ALTER TABLE `tbl_pemohon`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
