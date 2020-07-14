-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 05:27 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `hukuman`
--

CREATE TABLE `hukuman` (
  `id_hukuman` int(11) NOT NULL,
  `nip` char(8) NOT NULL,
  `nama_hukuman` varchar(20) NOT NULL,
  `tanggal_hukuman` date NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hukuman`
--

INSERT INTO `hukuman` (`id_hukuman`, `nip`, `nama_hukuman`, `tanggal_hukuman`, `deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(3, '16090001', 'Mangkir Seminggu', '2018-05-23', 0, NULL, NULL, 2, '2018-05-31 19:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(32) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `deleted`) VALUES
(1, 'Kepala Divisi', 0),
(2, 'Maintenance', 0),
(3, 'Teknisi', 0),
(4, 'Staff', 0),
(6, 'Security', 0),
(7, 'Office Boy', 0),
(8, 'Office Girl', 0),
(9, 'Operator', 0),
(10, 'Customer Services', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id_jenjang` int(10) NOT NULL,
  `nama_jenjang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id_jenjang`, `nama_jenjang`) VALUES
(1, 'SD'),
(2, 'SDIT'),
(3, 'SMP'),
(4, 'MTs'),
(5, 'SMA'),
(6, 'SMK'),
(7, 'MAN'),
(8, 'D-2'),
(9, 'D-3'),
(10, 'D-4'),
(11, 'S-1'),
(12, 'S-2'),
(13, 'S-3');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `aktifitas` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `id_user`, `aktifitas`, `tanggal`) VALUES
(1, 1, 'Tambah User', '2018-05-23 12:58:03'),
(2, 1, 'Tambah Jabatan', '2018-05-23 12:59:34'),
(3, 1, 'Tambah Jabatan', '2018-05-23 12:59:46'),
(4, 1, 'Tambah Jabatan', '2018-05-23 13:00:13'),
(5, 1, 'Tambah Jabatan', '2018-05-23 13:00:39'),
(6, 1, 'Tambah Jabatan', '2018-05-23 13:01:05'),
(7, 1, 'Tambah Jabatan', '2018-05-23 13:01:36'),
(8, 1, 'Tambah Jabatan', '2018-05-23 13:01:52'),
(9, 1, 'Tambah Jabatan', '2018-05-23 13:02:02'),
(10, 1, 'Tambah Jabatan', '2018-05-23 13:02:15'),
(11, 1, 'Tambah Jabatan', '2018-05-23 13:02:28'),
(12, 1, 'Tambah Unit Kerja', '2018-05-23 13:03:39'),
(13, 1, 'Tambah Unit Kerja', '2018-05-23 13:04:12'),
(14, 1, 'Tambah Unit Kerja', '2018-05-23 13:04:22'),
(15, 1, 'Tambah Unit Kerja', '2018-05-23 13:04:46'),
(16, 1, 'Tambah Pangkat', '2018-05-23 13:05:48'),
(17, 1, 'Tambah Pangkat', '2018-05-23 13:06:06'),
(18, 1, 'Tambah Pangkat', '2018-05-23 13:06:49'),
(19, 1, 'Tambah Pangkat', '2018-05-23 13:07:03'),
(20, 1, 'Tambah Pangkat', '2018-05-23 13:08:37'),
(21, 1, 'Tambah Pangkat', '2018-05-23 13:08:50'),
(22, 1, 'Tambah Pangkat', '2018-05-23 13:09:14'),
(23, 1, 'Tambah Lokasi', '2018-05-23 13:10:22'),
(24, 1, 'Tambah Lokasi', '2018-05-23 13:10:47'),
(25, 1, 'Tambah Lokasi', '2018-05-23 13:12:00'),
(26, 1, 'Tambah Lokasi', '2018-05-23 13:12:22'),
(27, 2, 'Tambah Pegawai', '2018-05-23 13:18:44'),
(28, 2, 'Tambah Pegawai', '2018-05-23 13:20:13'),
(29, 2, 'Tambah Pegawai', '2018-05-23 13:25:20'),
(30, 2, 'Tambah Pegawai', '2018-05-23 13:40:20'),
(31, 2, 'Tambah Prestasi', '2018-05-23 13:43:28'),
(32, 2, 'Tambah Hukuman', '2018-05-23 13:43:52'),
(33, 2, 'Tambah Hukuman', '2018-05-23 13:46:53'),
(34, 2, 'Tambah Hukuman', '2018-05-23 13:50:07'),
(35, 2, 'Hapus Hukuman', '2018-05-23 13:50:38'),
(36, 2, 'Edit Hukuman', '2018-05-23 13:51:12'),
(37, 2, 'Tambah Pegawai', '2018-05-31 18:39:06'),
(38, 2, 'Update Pegawai', '2018-05-31 18:42:09'),
(39, 2, 'Update Pegawai', '2018-05-31 18:48:07'),
(40, 2, '\'Update Pegawai\'', '2018-05-31 00:00:00'),
(41, 2, '\'Update Pegawai\'', '2018-05-31 00:00:00'),
(42, 1, '\'Tambah Jabatan\'', '2018-05-31 00:00:00'),
(43, 1, '\'Tambah Jabatan\'', '2018-05-31 00:00:00'),
(44, 1, 'Tambah Lokasi', '2018-05-31 18:56:02'),
(45, 2, 'Hapus Pegawai', '2018-05-31 19:22:26'),
(46, 2, 'Hapus SK Kerja', '2018-05-31 19:22:26'),
(47, 2, 'Hapus Pegawai', '2018-05-31 19:34:50'),
(48, 2, 'Hapus SK Kerja', '2018-05-31 19:34:50'),
(49, 2, 'Edit Hukuman', '2018-05-31 19:38:51'),
(50, 2, 'Hapus Pegawai', '2018-05-31 19:44:36'),
(51, 2, 'Hapus SK Kerja', '2018-05-31 19:44:36'),
(52, 1, 'Tambah Unit Kerja', '2018-05-31 20:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(32) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `alamat`, `telephone`, `deleted`) VALUES
(1, 'Brebes', 'Kaligangsa', '0283-1111', 0),
(2, 'Tegal', 'Pesurungan Lor', '0283-2222', 0),
(3, 'Pemalang', 'Jln Pemalang', '0283-3333', 0),
(4, 'Pekalongan', 'Jln. Pekalongan', '0283-4444', 0),
(5, 'Purwokerto', 'Jl. Melati', '0283-5555', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `nama_pangkat` varchar(32) NOT NULL,
  `gaji` double NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `nama_pangkat`, `gaji`, `deleted`) VALUES
(1, 'A1', 1000000, 0),
(2, 'A2', 1500000, 0),
(3, 'A3', 2000000, 0),
(4, 'A4', 2500000, 0),
(5, 'A5', 3000000, 0),
(6, 'B1', 3500000, 0),
(7, 'B2', 4000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama_pegawai` varchar(32) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `alamat` varchar(64) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama_pegawai`, `jk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `no_hp`, `email`, `alamat`, `tanggal_masuk`, `deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
('16090001', 'Si A', 'Laki-laki', 'Brebes', '1995-01-01', 'Islam', '+62890909090909', 'damarp2017@gmail.com', 'Kaligangsa Wetan, Brebes', '2018-05-23', 1, NULL, NULL, NULL, NULL),
('16090002', 'Si B', 'Perempuan', 'Tegal', '1996-01-01', 'Kristen', '+62890909090909', 'c@gmail.com', 'Kejambon', '2018-05-23', 0, NULL, NULL, NULL, NULL),
('16090003', 'Si C', 'Laki-laki', 'Brebes', '1997-02-01', 'Islam', '+62890909090909', 'damarp2017@gmail.com', 'Kaligangsa Wetan', '2018-05-23', 0, NULL, NULL, NULL, NULL),
('16090004', 'Si D', 'Laki-laki', 'Brebes', '1995-01-01', 'Kristen', '+62890909090909', 'damarp2017@gmail.com', 'Kejambon', '2018-05-23', 0, NULL, NULL, NULL, NULL),
('16090039', 'Putri Alvina', 'Perempuan', 'Brebes', '1998-11-29', 'Islam', '080000000002', 'putrilutfiani29@gmail.com', 'Kaligangsa Kulon', '2018-05-31', 0, 2, '2018-05-31 18:39:06', 2, '2018-05-31 18:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tahun_pendidikan` varchar(10) DEFAULT NULL,
  `jenjang` varchar(10) DEFAULT NULL,
  `nama_pendidikan` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nip`, `tahun_pendidikan`, `jenjang`, `nama_pendidikan`) VALUES
(1, '16090001', '2001-2005', 'S-2', 'Harvard University'),
(2, '16090002', '2001-2005', 'S-1', 'Harvard University'),
(3, '16090003', '2012-2015', 'SMA', 'SMA 1 Balapulang'),
(4, '16090004', '2001-2005', 'S-1', 'Harvard University');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_kerja`
--

CREATE TABLE `pengalaman_kerja` (
  `id_pengalaman_kerja` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tahun_kerja` varchar(10) NOT NULL,
  `nama_kerja` varchar(32) NOT NULL,
  `nama_perusahaan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id_pengalaman_kerja`, `nip`, `tahun_kerja`, `nama_kerja`, `nama_perusahaan`) VALUES
(1, '16090001', '2010-2018', 'Doctor', 'Nganu Corp'),
(2, '16090002', '2001-2011', 'Operator', 'Nganu Corp'),
(3, '16090003', '2001-2010', 'Nganggur', 'Nganu Corp'),
(4, '16090004', '2001-2010', 'Nganggur', 'Nganu Corp');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nip` char(8) NOT NULL,
  `nama_prestasi` varchar(50) NOT NULL,
  `tanggal_prestasi` date NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nip`, `nama_prestasi`, `tanggal_prestasi`, `deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, '16090001', 'Karyawan Paling Rajin', '2018-05-23', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sk_kerja`
--

CREATE TABLE `sk_kerja` (
  `no_sk` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tanggal_sk` date NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_unit_kerja` int(11) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_kerja`
--

INSERT INTO `sk_kerja` (`no_sk`, `nip`, `tanggal_sk`, `id_jabatan`, `id_lokasi`, `id_pangkat`, `id_unit_kerja`, `deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
('SK/16090039', '16090039', '2018-05-31', 2, 1, 5, 3, 1, 2, '2018-05-31 18:39:06', 2, '2018-05-31 18:48:07'),
('SK00001', '16090001', '2018-05-23', 1, 1, 7, 2, 1, NULL, NULL, NULL, NULL),
('SK00002', '16090002', '2018-05-23', 10, 4, 7, 4, 0, NULL, NULL, NULL, NULL),
('SK00003', '16090003', '2018-05-23', 7, 4, 6, 4, 0, NULL, NULL, NULL, NULL),
('SK00004', '16090004', '2018-05-23', 10, 4, 6, 3, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `nama_unit_kerja` varchar(32) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`, `deleted`) VALUES
(1, 'Logistik', 0),
(2, 'Humas', 0),
(3, 'IT Support', 0),
(4, 'Keamanan', 0),
(5, 'Cleaning service', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `level` enum('admin','personalia','direktur') NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `deleted`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Joker Siahaan', 'admin', 0),
(2, 'personalia', '2d7b9ddba458f0199b69f8bd9607c036', 'Mbak Personalia', 'personalia', 0),
(3, 'direktur', '4fbfd324f5ffcdff5dbf6f019b02eca8', 'Abah Direktur', 'direktur', 0),
(4, 'yola', 'eeb750d17b0e73308cf36acce5ae38e4', 'Yola', 'personalia', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hukuman`
--
ALTER TABLE `hukuman`
  ADD PRIMARY KEY (`id_hukuman`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`),
  ADD KEY `id_pangkat` (`id_pangkat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`);

--
-- Indexes for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman_kerja`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `sk_kerja`
--
ALTER TABLE `sk_kerja`
  ADD PRIMARY KEY (`no_sk`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_pangkat` (`id_pangkat`),
  ADD KEY `id_unit_kerja` (`id_unit_kerja`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`),
  ADD KEY `id_unit_kerja` (`id_unit_kerja`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hukuman`
--
ALTER TABLE `hukuman`
  MODIFY `id_hukuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id_jenjang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  MODIFY `id_pengalaman_kerja` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hukuman`
--
ALTER TABLE `hukuman`
  ADD CONSTRAINT `hukuman_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD CONSTRAINT `pengalaman_kerja_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sk_kerja`
--
ALTER TABLE `sk_kerja`
  ADD CONSTRAINT `sk_kerja_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_kerja_ibfk_2` FOREIGN KEY (`id_pangkat`) REFERENCES `pangkat` (`id_pangkat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_kerja_ibfk_3` FOREIGN KEY (`id_unit_kerja`) REFERENCES `unit_kerja` (`id_unit_kerja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_kerja_ibfk_4` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_kerja_ibfk_5` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
