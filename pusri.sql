-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 02:40 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusri`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapegawai`
--

CREATE TABLE `datapegawai` (
  `No_Badge` int(10) NOT NULL,
  `Nama` text NOT NULL,
  `kode_rumah` varchar(10) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kelompok` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapegawai`
--

INSERT INTO `datapegawai` (`No_Badge`, `Nama`, `kode_rumah`, `unit_kerja`, `jabatan`, `kelompok`, `status`, `Alamat`) VALUES
(1234, 'SURYATI', 'GA001', 'KELOMPOK STAF DIREKTUR SDM & UMUM', 'STAF SDM PENUGASAN', 'KABAG', 'ISI', 'JL. ANGSANA NO. 01'),
(1345, 'ANDI ANDRIAN', 'GA002', 'BAG. PERENCANAAN RUTIN', 'SUPERINTENDENT PERENCANAAN RUTIN', 'KABAG', 'ISI', 'JL. ANGSANA NO. 02'),
(1456, 'AHMAD ZAKY LUTHFI', 'GA003', 'BAG. UREA P-IV', 'SUPERINTENDENT UREA P-IV', 'KABAG', 'ISI', 'JL. ANGSANA NO. 03'),
(1567, 'FATIMAH SITUMORANG', 'GA004', 'DIVISI UMUM', 'STAF GENERAL MANAGER UMUM', 'KABAG', 'ISI', 'JL. ANGSANA NO. 04'),
(1678, 'NOVAN APRIADI', 'GA005', 'DEP. AKUNTANSI', 'MANAGER AKUNTANSI', 'KABAG', 'ISI', 'JL. ANGSANA NO. 05'),
(1789, 'NING SUBIARTI', 'GA006', 'BAG. CORPORATE SOCIAL RESPONSIBILITY', 'SUPERINTENDENT CSR', 'KABAG', 'ISI', 'JL. ANGSANA NO. 06'),
(1890, 'MUHAMMAD ADIJAYA', 'ZI01A', 'SEKSI AMMONIA P-III GR.C', 'SUPERVISOR AMMONIA P-III GR.C', 'KASI', 'PERUNTUKAN LAIN', 'JL. BAKUNG NO. 01A'),
(1901, 'RANI PUTRI', 'ZI01B', 'SEKSI LAB CHEM.CLEANING & BENFIELD', 'SUPERVISOR LAB CHEM.CLEANING & BENFIELD', 'KASI', 'PERUNTUKAN LAIN', 'JL. BAKUNG NO. 01B'),
(2345, 'RENO PUTRA SANJAYA', 'ZI02A', 'DEP.RELIABILITY', 'RELIABILITY ENGINEER SENIOR', 'KASI', 'PERUNTUKAN LAIN', 'JL. BAKUNG NO. 02A'),
(2456, 'SANJAYA', 'ZI02B', 'KEL. BID. LAB. INSPEKSI TEKNIK', 'ENGINEER PERALATAN STATIK', 'KASI', 'PERUNTUKAN LAIN', 'JL. BAKUNG NO. 02B'),
(2678, 'PUTRI HENI', 'ZI03A', 'BAG. HIPERKES', 'SUPERINTENDENT HIPERKES', 'KASI', 'PERUNTUKAN LAIN', 'JL. BAKUNG NO. 03A'),
(2789, 'HANI SARI', 'ZI03B', 'DEPARTEMEN ENGINEERING', 'MECHANICAL(STAT & ROT) ENGINEER', 'KASI', 'PERUNTUKAN LAIN', 'JL. BAKUNG NO. 03B');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('jnn', 'jnn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `No_Badge` int(10) NOT NULL,
  `Nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`No_Badge`, `Nama`) VALUES
(1234, 'jeje');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`No_Badge`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`No_Badge`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
