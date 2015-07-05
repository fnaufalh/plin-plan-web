-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2015 at 04:17 PM
-- Server version: 10.0.19-MariaDB
-- PHP Version: 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siasm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE IF NOT EXISTS `ekskul` (
  `id` int(2) unsigned NOT NULL,
  `nama_ekskul` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(10) unsigned NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota_sekarang` int(2) unsigned DEFAULT NULL,
  `kota_lahir` int(2) unsigned DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru_has_mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `guru_has_mata_pelajaran` (
  `guru_id` int(10) unsigned NOT NULL,
  `mata_pelajaran_id` int(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(2) unsigned NOT NULL,
  `guru_id` int(10) unsigned NOT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `ruangan` int(2) unsigned DEFAULT NULL,
  `wali_kelas` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
  `id` int(2) unsigned NOT NULL,
  `level` varchar(10) NOT NULL,
  `value` smallint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id`, `level`, `value`) VALUES
(1, 'guest', 0),
(2, 'admin', 1),
(3, 'guru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `master_pembayaran`
--

CREATE TABLE IF NOT EXISTS `master_pembayaran` (
  `id` int(10) unsigned NOT NULL,
  `nama_pembayaran` varchar(100) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `id` int(3) unsigned NOT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_akademik`
--

CREATE TABLE IF NOT EXISTS `nilai_akademik` (
  `id` int(10) unsigned NOT NULL,
  `mata_pelajaran_id` int(3) unsigned NOT NULL,
  `guru_id` int(10) unsigned NOT NULL,
  `siswa_id` int(10) unsigned NOT NULL,
  `semester` smallint(5) unsigned DEFAULT NULL,
  `nlai` double(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ekskul`
--

CREATE TABLE IF NOT EXISTS `nilai_ekskul` (
  `id` int(10) unsigned NOT NULL,
  `ekskul_id` int(2) unsigned NOT NULL,
  `siswa_id` int(10) unsigned NOT NULL,
  `nilai` double(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id` int(10) unsigned NOT NULL,
  `id_siswa` int(10) unsigned DEFAULT NULL,
  `nama_prestasi` varchar(100) DEFAULT NULL,
  `tingkat` smallint(5) unsigned DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `peringkat` smallint(5) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(10) unsigned NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota_sekarang` int(2) unsigned DEFAULT NULL,
  `kota_lahir` int(2) unsigned DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tahun_masuk` year(4) DEFAULT NULL,
  `kelas_id` int(2) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_has_ekskul`
--

CREATE TABLE IF NOT EXISTS `siswa_has_ekskul` (
  `siswa_id` int(10) unsigned NOT NULL,
  `ekskul_id` int(2) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_has_master_pembayaran`
--

CREATE TABLE IF NOT EXISTS `siswa_has_master_pembayaran` (
  `siswa_id` int(10) unsigned NOT NULL,
  `master_pembayaran_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `is_virified` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_has_prestasi`
--

CREATE TABLE IF NOT EXISTS `siswa_has_prestasi` (
  `siswa_id` int(10) unsigned NOT NULL,
  `prestasi_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwrd` varchar(40) NOT NULL,
  `level_user_id` int(2) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwrd`, `level_user_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2),
(2, 'sabli', '8f7dc64b46e664eb763603434f8fb086', 2),
(3, 'rendi', 'd209fc47646bba5e5fdc3d3bbaad4b9c', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guru_unique_nip` (`nip`);

--
-- Indexes for table `guru_has_mata_pelajaran`
--
ALTER TABLE `guru_has_mata_pelajaran`
  ADD PRIMARY KEY (`guru_id`,`mata_pelajaran_id`),
  ADD KEY `guru_has_mata_pelajaran_FKIndex1` (`guru_id`),
  ADD KEY `guru_has_mata_pelajaran_FKIndex2` (`mata_pelajaran_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_FKIndex1` (`guru_id`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_pembayaran`
--
ALTER TABLE `master_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_akademik`
--
ALTER TABLE `nilai_akademik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_akademik_FKIndex1` (`siswa_id`),
  ADD KEY `nilai_akademik_FKIndex2` (`guru_id`),
  ADD KEY `nilai_akademik_FKIndex3` (`mata_pelajaran_id`);

--
-- Indexes for table `nilai_ekskul`
--
ALTER TABLE `nilai_ekskul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_ekskul_FKIndex1` (`siswa_id`),
  ADD KEY `nilai_ekskul_FKIndex2` (`ekskul_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_unique_nis` (`nis`),
  ADD KEY `siswa_FKIndex1` (`kelas_id`);

--
-- Indexes for table `siswa_has_ekskul`
--
ALTER TABLE `siswa_has_ekskul`
  ADD PRIMARY KEY (`siswa_id`,`ekskul_id`),
  ADD KEY `siswa_has_ekskul_FKIndex1` (`siswa_id`),
  ADD KEY `siswa_has_ekskul_FKIndex2` (`ekskul_id`);

--
-- Indexes for table `siswa_has_master_pembayaran`
--
ALTER TABLE `siswa_has_master_pembayaran`
  ADD PRIMARY KEY (`siswa_id`,`master_pembayaran_id`),
  ADD KEY `siswa_has_master_pembayaran_FKIndex1` (`siswa_id`),
  ADD KEY `siswa_has_master_pembayaran_FKIndex2` (`master_pembayaran_id`),
  ADD KEY `siswa_has_master_pembayaran_FKIndex3` (`users_id`);

--
-- Indexes for table `siswa_has_prestasi`
--
ALTER TABLE `siswa_has_prestasi`
  ADD PRIMARY KEY (`siswa_id`,`prestasi_id`),
  ADD KEY `siswa_has_prestasi_FKIndex1` (`siswa_id`),
  ADD KEY `siswa_has_prestasi_FKIndex2` (`prestasi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_unique_username` (`username`),
  ADD KEY `users_FKIndex1` (`level_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `master_pembayaran`
--
ALTER TABLE `master_pembayaran`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai_akademik`
--
ALTER TABLE `nilai_akademik`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai_ekskul`
--
ALTER TABLE `nilai_ekskul`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru_has_mata_pelajaran`
--
ALTER TABLE `guru_has_mata_pelajaran`
  ADD CONSTRAINT `guru_has_mata_pelajaran_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `guru_has_mata_pelajaran_ibfk_2` FOREIGN KEY (`mata_pelajaran_id`) REFERENCES `mata_pelajaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai_akademik`
--
ALTER TABLE `nilai_akademik`
  ADD CONSTRAINT `nilai_akademik_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nilai_akademik_ibfk_2` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nilai_akademik_ibfk_3` FOREIGN KEY (`mata_pelajaran_id`) REFERENCES `mata_pelajaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai_ekskul`
--
ALTER TABLE `nilai_ekskul`
  ADD CONSTRAINT `nilai_ekskul_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nilai_ekskul_ibfk_2` FOREIGN KEY (`ekskul_id`) REFERENCES `ekskul` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `siswa_has_ekskul`
--
ALTER TABLE `siswa_has_ekskul`
  ADD CONSTRAINT `siswa_has_ekskul_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `siswa_has_ekskul_ibfk_2` FOREIGN KEY (`ekskul_id`) REFERENCES `ekskul` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `siswa_has_master_pembayaran`
--
ALTER TABLE `siswa_has_master_pembayaran`
  ADD CONSTRAINT `siswa_has_master_pembayaran_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `siswa_has_master_pembayaran_ibfk_2` FOREIGN KEY (`master_pembayaran_id`) REFERENCES `master_pembayaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `siswa_has_master_pembayaran_ibfk_3` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `siswa_has_prestasi`
--
ALTER TABLE `siswa_has_prestasi`
  ADD CONSTRAINT `siswa_has_prestasi_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `siswa_has_prestasi_ibfk_2` FOREIGN KEY (`prestasi_id`) REFERENCES `prestasi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level_user_id`) REFERENCES `level_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
