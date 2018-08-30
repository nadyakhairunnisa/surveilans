-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 04:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveilans`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `kode_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `gender_dokter` enum('Laki-Laki','Perempuan') NOT NULL,
  `id_spesialis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `gender_dokter`, `id_spesialis`) VALUES
(2, 'Oliver Archer', 'Laki-Laki', 16),
(3, 'Joe Frances', 'Laki-Laki', 17);

-- --------------------------------------------------------

--
-- Table structure for table `identitas_pasien`
--

CREATE TABLE `identitas_pasien` (
  `no_rm` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infeksi`
--

CREATE TABLE `infeksi` (
  `kode_infeksi` int(11) NOT NULL,
  `nama_infeksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keadaan_pasien`
--

CREATE TABLE `keadaan_pasien` (
  `id_keadaan` int(11) NOT NULL,
  `tanggal_masuk_rs` date NOT NULL,
  `cara_masuk` enum('IGD','IRJ','Langsung','Rujukan') NOT NULL,
  `tanggal_keluar_rs` date NOT NULL,
  `keadaan_keluar` enum('Hidup','Meninggal','Kabur','Pindah RS','PP') NOT NULL,
  `faktor_resiko` varchar(255) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `kode_penyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kejadian_perawat_terpajan`
--

CREATE TABLE `kejadian_perawat_terpajan` (
  `id_kejadian` int(11) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `jam_laporan` time NOT NULL,
  `tanggal_pajanan` date NOT NULL,
  `jam_pajanan` time NOT NULL,
  `kode_ruangan` int(11) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `nama_terpajan` varchar(255) NOT NULL,
  `alamat_terpajan` text NOT NULL,
  `nama_atasan` varchar(255) NOT NULL,
  `alamat_atasan` text NOT NULL,
  `rute_pajanan` enum('Kateter IV','Kateter Urine','Tusukan Jarum Suntik','Gigitan','Mulut','Luka Kulit','Mata','Lain-lain') NOT NULL,
  `sumber_pajanan` enum('Darah','Sputum','Air Liur','Feses','Lain-Lain') NOT NULL,
  `sumber_pasien` enum('HIV-AIDS','Hepatitis A/B/C','Lain-lain') NOT NULL,
  `bagian_tubuh_terpajan` varchar(255) NOT NULL,
  `urutan_kejadian` text NOT NULL,
  `imunisasi_hepatitis` enum('Sudah','Belum') NOT NULL,
  `alat_pelindung` varchar(255) NOT NULL,
  `pertolongan_pertama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian_ruangan`
--

CREATE TABLE `pemakaian_ruangan` (
  `id_pemakaian_ruangan` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `kode_ruangan` int(11) NOT NULL,
  `tanggal_masuk_ruangan` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `tanggal_keluar_ruangan` date NOT NULL,
  `jam_keluar` time NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemantauan_pemasangan`
--

CREATE TABLE `pemantauan_pemasangan` (
  `id_pemantauan` int(11) NOT NULL,
  `id_pemasangan` int(11) NOT NULL,
  `lokasi_pasang` enum('Tangan Kanan','Tangan Kiri','Kaki Kiri','Kaki Kanan') NOT NULL,
  `tanggal_pasang` date NOT NULL,
  `tanggal_lepas` date NOT NULL,
  `tanggal_infeksi` date NOT NULL,
  `tanda_infeksi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemasangan`
--

CREATE TABLE `pemasangan` (
  `id_pemasangan` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `kode_infeksi` int(11) NOT NULL,
  `jenis_invasif` enum('Kateter V Perifer','Kateter V Central','Umbilikal','Double Lumen','Kateter Urine','SPP','Dauer','Intermiten','Kondom','Ventilator','Operasi','Episiotomi') NOT NULL,
  `tujuan_pemasangan` varchar(255) DEFAULT NULL,
  `keterangan_tujuan` text,
  `tanggal_pemeriksaan_urine` date DEFAULT NULL,
  `leukosit_urine` int(11) DEFAULT NULL,
  `tanggal_biakan_urine` date DEFAULT NULL,
  `hasil_biakan_urine` varchar(255) DEFAULT NULL,
  `no_ventilator` int(11) DEFAULT NULL,
  `tanggal_pasang_ventilator` date DEFAULT NULL,
  `tanda_infeksi_vap` text,
  `keterangan_infeksi_vap` text,
  `foto_thorax` enum('Infitrat','Merata','Patchy','Terlokalisir') DEFAULT NULL,
  `tanggal_operasi` date DEFAULT NULL,
  `tindakan_operasi` varchar(255) DEFAULT NULL,
  `nama_dokter_operator` varchar(255) DEFAULT NULL,
  `id_dokter_konsultan` int(11) DEFAULT NULL,
  `sifat_opr_emergensi` enum('Ya','Tidak') DEFAULT NULL,
  `jenis_operasi` enum('Bersih','Bersih Tercemar','Tercemar','Kotor') DEFAULT NULL,
  `anestesi_umum` enum('Ya','Tidak') DEFAULT NULL,
  `no_kamar_opr` int(11) DEFAULT NULL,
  `ronde_kamar_opr` int(11) DEFAULT NULL,
  `implant_opr` varchar(255) DEFAULT NULL,
  `trauma_implant` enum('Ya','Tidak') DEFAULT NULL,
  `endoscopi_opr` varchar(255) DEFAULT NULL,
  `trauma_endoscopi` enum('Ya','Tidak') DEFAULT NULL,
  `lama_operasi` time DEFAULT NULL,
  `skor_ASA` enum('1','2','3','4') DEFAULT NULL,
  `pj_kamar_opr` varchar(255) DEFAULT NULL,
  `jenis_nifas` enum('Normal','Tidak') DEFAULT NULL,
  `tanggal_nifas` date DEFAULT NULL,
  `episiotomi` enum('Ya','Tidak') DEFAULT NULL,
  `laserasi_derajat` enum('1','2','3','4') DEFAULT NULL,
  `anestesi_lokal` enum('Ya','Tidak') DEFAULT NULL,
  `nama_penolong` text,
  `pj_ruang_bersalin` varchar(255) DEFAULT NULL,
  `nama_antibiotik` varchar(255) DEFAULT NULL,
  `tanggal_pemakaian_antibiotik` date DEFAULT NULL,
  `dosis_antibiotik` int(11) DEFAULT NULL,
  `jenis_antibiotik` enum('PO','IV','IM') DEFAULT NULL,
  `indikasi_antibiotik` enum('Profilaksis','Pengobatan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `kelas_ruangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `nama_spesialis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `nama_spesialis`) VALUES
(1, 'Penyakit Dalam'),
(2, 'Neurologi'),
(3, 'Jantung'),
(4, 'Paru'),
(5, 'Kesehatan Anak'),
(6, 'Kebidanan'),
(7, 'Gigi'),
(8, 'Urologi'),
(9, 'Bedah Mulut'),
(10, 'Bedah'),
(11, 'Kulit & Kecantikan'),
(12, 'Mata'),
(13, 'THT'),
(14, 'Orthopedi'),
(15, 'Bedah Syaraf'),
(16, 'Kesehatan Jiwa'),
(17, 'Umum'),
(18, 'Akupuntur Medik'),
(19, 'Fisiotherapy'),
(20, 'Lain-Lain');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe_user` enum('IPCN','Direktur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_spesialis` (`id_spesialis`),
  ADD KEY `id_spesialis_2` (`id_spesialis`);

--
-- Indexes for table `identitas_pasien`
--
ALTER TABLE `identitas_pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `infeksi`
--
ALTER TABLE `infeksi`
  ADD PRIMARY KEY (`kode_infeksi`);

--
-- Indexes for table `keadaan_pasien`
--
ALTER TABLE `keadaan_pasien`
  ADD PRIMARY KEY (`id_keadaan`),
  ADD KEY `no_rm` (`no_rm`),
  ADD KEY `kode_penyakit` (`kode_penyakit`);

--
-- Indexes for table `kejadian_perawat_terpajan`
--
ALTER TABLE `kejadian_perawat_terpajan`
  ADD PRIMARY KEY (`id_kejadian`),
  ADD KEY `id_ruangan` (`kode_ruangan`);

--
-- Indexes for table `pemakaian_ruangan`
--
ALTER TABLE `pemakaian_ruangan`
  ADD PRIMARY KEY (`id_pemakaian_ruangan`),
  ADD KEY `id_ruangan` (`kode_ruangan`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_keadaan` (`id_keadaan`);

--
-- Indexes for table `pemantauan_pemasangan`
--
ALTER TABLE `pemantauan_pemasangan`
  ADD PRIMARY KEY (`id_pemantauan`),
  ADD KEY `id_pemasangan` (`id_pemasangan`);

--
-- Indexes for table `pemasangan`
--
ALTER TABLE `pemasangan`
  ADD PRIMARY KEY (`id_pemasangan`),
  ADD KEY `id_kejadian` (`id_keadaan`),
  ADD KEY `kode_infeksi` (`kode_infeksi`),
  ADD KEY `id_dokter_konsultan` (`id_dokter_konsultan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode_ruangan`),
  ADD UNIQUE KEY `nama_ruangan` (`nama_ruangan`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `keadaan_pasien`
--
ALTER TABLE `keadaan_pasien`
  ADD CONSTRAINT `keadaan_pasien_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `identitas_pasien` (`no_rm`),
  ADD CONSTRAINT `keadaan_pasien_ibfk_2` FOREIGN KEY (`kode_penyakit`) REFERENCES `diagnosa` (`kode_penyakit`);

--
-- Constraints for table `kejadian_perawat_terpajan`
--
ALTER TABLE `kejadian_perawat_terpajan`
  ADD CONSTRAINT `kejadian_perawat_terpajan_ibfk_1` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`);

--
-- Constraints for table `pemakaian_ruangan`
--
ALTER TABLE `pemakaian_ruangan`
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_1` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`),
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_2` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`),
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_3` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);

--
-- Constraints for table `pemantauan_pemasangan`
--
ALTER TABLE `pemantauan_pemasangan`
  ADD CONSTRAINT `pemantauan_pemasangan_ibfk_1` FOREIGN KEY (`id_pemasangan`) REFERENCES `pemasangan` (`id_pemasangan`);

--
-- Constraints for table `pemasangan`
--
ALTER TABLE `pemasangan`
  ADD CONSTRAINT `pemasangan_ibfk_1` FOREIGN KEY (`kode_infeksi`) REFERENCES `infeksi` (`kode_infeksi`),
  ADD CONSTRAINT `pemasangan_ibfk_2` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`),
  ADD CONSTRAINT `pemasangan_ibfk_3` FOREIGN KEY (`id_dokter_konsultan`) REFERENCES `dokter` (`id_dokter`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
