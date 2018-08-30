-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 08:10 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`kode_penyakit`, `nama_penyakit`) VALUES
(1, 'DBD');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(5) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `id_spesialis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `id_spesialis`) VALUES
('DR001', 'Dr. Fachry Uzer, Sp. S', 2),
('DR002', 'DR. Sunarto, Sp.PD', 1),
('DR003', 'Dr. Erdiansyah, Sp. JP', 3),
('DR004', 'Dr. Fullarini, Sp. P', 4),
('DR005', 'Dr. Ayu Amelia, Sp. A, M.Kes', 5),
('DR006', 'Dr. Hj. Juwita Elva, Sp. OG', 6),
('DR007', 'Drg. Rizqi Ardiana', 7),
('DR008', 'Dr. Zulfikar Ali, Sp. U', 8),
('DR009', 'Dr. Soekamto, Sp. BM', 9),
('DR010', 'Dr. Irawan, Sp. B', 10),
('DR011', 'Dr. H. Iswani, Sp. KK', 11),
('DR012', 'Dr. Nuryanto, Sp. M', 12),
('DR013', 'Dr. Sutoro, Sp. THT', 13),
('DR014', 'Dr. Mulqi, Sp. OT', 14),
('DR015', 'Dr. H. Rizal Hakim, Sp. BS', 15),
('DR016', 'Dr. Budi Susilo, Sp. KJ', 16),
('DR017', 'Dr. Wahyudi, MARS', 18);

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

--
-- Dumping data for table `identitas_pasien`
--

INSERT INTO `identitas_pasien` (`no_rm`, `nama_pasien`, `jenis_kelamin`, `tanggal_lahir`, `alamat`) VALUES
(1234, 'Anda', 'Laki-laki', '2018-07-03', 'Jogja');

-- --------------------------------------------------------

--
-- Table structure for table `infeksi`
--

CREATE TABLE `infeksi` (
  `kode_infeksi` int(11) NOT NULL,
  `nama_infeksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infeksi`
--

INSERT INTO `infeksi` (`kode_infeksi`, `nama_infeksi`) VALUES
(1, 'Phlebitis');

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

--
-- Dumping data for table `keadaan_pasien`
--

INSERT INTO `keadaan_pasien` (`id_keadaan`, `tanggal_masuk_rs`, `cara_masuk`, `tanggal_keluar_rs`, `keadaan_keluar`, `faktor_resiko`, `no_rm`, `kode_penyakit`) VALUES
(1, '2018-08-08', 'IGD', '2018-08-15', 'Hidup', 'DM', 1234, 1),
(2, '2018-08-08', 'IGD', '2018-08-09', 'Hidup', 'DM', 1234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kejadian_terpajan`
--

CREATE TABLE `kejadian_terpajan` (
  `id_kejadian` int(11) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `jam_laporan` time NOT NULL,
  `tanggal_pajanan` date NOT NULL,
  `jam_pajanan` time NOT NULL,
  `kode_ruangan` varchar(5) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `nama_terpajan` varchar(255) NOT NULL,
  `alamat_terpajan` text NOT NULL,
  `nama_atasan` varchar(255) NOT NULL,
  `alamat_atasan` text NOT NULL,
  `rute_pajanan` varchar(255) NOT NULL,
  `sumber_pajanan` varchar(255) NOT NULL,
  `sumber_pajanan_lain` varchar(255) DEFAULT NULL,
  `sumber_pasien` varchar(255) NOT NULL,
  `sumber_pasien_lain` varchar(255) DEFAULT NULL,
  `bagian_tubuh_terpajan` varchar(255) NOT NULL,
  `urutan_kejadian` text NOT NULL,
  `imunisasi_hepatitis` enum('Sudah','Belum') NOT NULL,
  `alat_pelindung` varchar(255) NOT NULL,
  `jenis_alat` varchar(255) DEFAULT NULL,
  `pertolongan_pertama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kejadian_terpajan`
--

INSERT INTO `kejadian_terpajan` (`id_kejadian`, `tanggal_laporan`, `jam_laporan`, `tanggal_pajanan`, `jam_pajanan`, `kode_ruangan`, `unit_kerja`, `nama_terpajan`, `alamat_terpajan`, `nama_atasan`, `alamat_atasan`, `rute_pajanan`, `sumber_pajanan`, `sumber_pajanan_lain`, `sumber_pasien`, `sumber_pasien_lain`, `bagian_tubuh_terpajan`, `urutan_kejadian`, `imunisasi_hepatitis`, `alat_pelindung`, `jenis_alat`, `pertolongan_pertama`) VALUES
(2, '2018-08-09', '17:44:00', '2018-08-10', '07:00:00', 'R011', 'Medis', 'Siapa', 'Jogja', 'Hayo', 'Tegal', 'Mulut', 'Darah', '', 'HIV - AIDS', '', 'Kaki kiri', 'Cras dapibus libero in massa interdum, sit amet blandit turpis aliquet. Etiam lobortis volutpat velit dignissim efficitur. Mauris a magna varius, euismod metus sit amet, imperdiet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac leo augue. Mauris malesuada sem vel rhoncus ornare. Pellentesque in tellus dictum, tincidunt mi at, imperdiet ex. Vestibulum faucibus ornare tortor, quis aliquam metus malesuada elementum. Aliquam auctor placerat sem, ut hendrerit odio faucibus sed. ', 'Belum', 'Tidak', '', 'Minum air');

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian_ruangan`
--

CREATE TABLE `pemakaian_ruangan` (
  `id_pemakaian_ruangan` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `kode_ruangan` varchar(5) NOT NULL,
  `tanggal_masuk_ruangan` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `tanggal_keluar_ruangan` date NOT NULL,
  `jam_keluar` time NOT NULL,
  `id_dokter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemakaian_ruangan`
--

INSERT INTO `pemakaian_ruangan` (`id_pemakaian_ruangan`, `id_keadaan`, `kode_ruangan`, `tanggal_masuk_ruangan`, `jam_masuk`, `tanggal_keluar_ruangan`, `jam_keluar`, `id_dokter`) VALUES
(1, 1, 'R020', '2018-08-08', '20:21:13', '2018-08-09', '17:12:12', 'DR001'),
(2, 2, 'R020', '2018-08-08', '17:11:20', '2018-08-09', '14:09:15', 'DR001');

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
  `id_dokter_konsultan` varchar(5) DEFAULT NULL,
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
  `indikasi_antibiotik` enum('Profilaksis','Pengobatan') DEFAULT NULL,
  `terjadi_infeksi` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasangan`
--

INSERT INTO `pemasangan` (`id_pemasangan`, `id_keadaan`, `kode_infeksi`, `jenis_invasif`, `tujuan_pemasangan`, `keterangan_tujuan`, `tanggal_pemeriksaan_urine`, `leukosit_urine`, `tanggal_biakan_urine`, `hasil_biakan_urine`, `no_ventilator`, `tanggal_pasang_ventilator`, `tanda_infeksi_vap`, `keterangan_infeksi_vap`, `foto_thorax`, `tanggal_operasi`, `tindakan_operasi`, `nama_dokter_operator`, `id_dokter_konsultan`, `sifat_opr_emergensi`, `jenis_operasi`, `anestesi_umum`, `no_kamar_opr`, `ronde_kamar_opr`, `implant_opr`, `trauma_implant`, `endoscopi_opr`, `trauma_endoscopi`, `lama_operasi`, `skor_ASA`, `pj_kamar_opr`, `jenis_nifas`, `tanggal_nifas`, `episiotomi`, `laserasi_derajat`, `anestesi_lokal`, `nama_penolong`, `pj_ruang_bersalin`, `nama_antibiotik`, `tanggal_pemakaian_antibiotik`, `dosis_antibiotik`, `jenis_antibiotik`, `indikasi_antibiotik`, `terjadi_infeksi`) VALUES
(1, 1, 1, 'Kateter V Perifer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ya'),
(2, 2, 1, 'Kateter V Perifer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` varchar(5) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kode_ruangan`, `nama_ruangan`) VALUES
('R017', 'ANGGREK'),
('R010', 'BOUGENVILE'),
('R016', 'CASABLANCA'),
('R018', 'CATLEYA'),
('R011', 'FLAMBOYAN'),
('R015', 'ICU'),
('R020', 'IGD'),
('R008', 'KEBIDANAN'),
('R013', 'KEMUNING'),
('R007', 'KES.ANAK'),
('R019', 'NUSA INDAH'),
('R004', 'PAV.ALAMANDA'),
('R005', 'PAV.AMARILIS'),
('R003', 'PAV.ANYELIR'),
('R006', 'PAV.DAHLIA'),
('R002', 'PAV.MAWAR'),
('R001', 'PAV.MELATI'),
('R009', 'PERISTI'),
('R014', 'SAKURA'),
('R012', 'TULIP');

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

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_dokter_spesialis`
-- (See below for the actual view)
--
CREATE TABLE `view_dokter_spesialis` (
`nama_dokter` varchar(255)
,`nama_spesialis` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `view_dokter_spesialis`
--
DROP TABLE IF EXISTS `view_dokter_spesialis`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_dokter_spesialis`  AS  select `d`.`nama_dokter` AS `nama_dokter`,`s`.`nama_spesialis` AS `nama_spesialis` from (`dokter` `d` join `spesialis` `s` on((`d`.`id_spesialis` = `s`.`id_spesialis`))) ;

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
-- Indexes for table `kejadian_terpajan`
--
ALTER TABLE `kejadian_terpajan`
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
-- AUTO_INCREMENT for table `kejadian_terpajan`
--
ALTER TABLE `kejadian_terpajan`
  MODIFY `id_kejadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `kejadian_terpajan`
--
ALTER TABLE `kejadian_terpajan`
  ADD CONSTRAINT `kejadian_terpajan_ibfk_1` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`);

--
-- Constraints for table `pemakaian_ruangan`
--
ALTER TABLE `pemakaian_ruangan`
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_2` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`),
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_4` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`),
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_5` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
