-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 01:43 PM
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
(123, 'john smith', 'Laki-laki', '2018-08-24', 'jl. tes'),
(977, 'Kamu', 'Perempuan', '2018-08-11', 'Dimana'),
(1234, 'john smith', 'Perempuan', '2018-08-01', 'jl'),
(2345, 'john smith', 'Laki-laki', '2018-08-28', 'USA'),
(4123, 'dfsd', 'Perempuan', '2018-08-07', 'asf'),
(5432, 'Dummy', 'Laki-laki', '2018-08-08', 'Jakarta'),
(5678, 'Abdullah M.', 'Laki-laki', '2003-06-20', 'Jawa'),
(12345, 'Angelina', 'Perempuan', '2014-06-18', 'Jogja'),
(34567, 'Saya', 'Perempuan', '2018-07-31', 'Jogja'),
(98765, 'Ade Ridwan', 'Laki-laki', '1996-08-30', 'Surabaya'),
(1237542, 'A', 'Laki-laki', '2018-08-08', 'A');

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
(1, 'Phlebitis'),
(2, 'IADP'),
(3, 'ISK'),
(4, 'VAP'),
(5, 'IDO');

-- --------------------------------------------------------

--
-- Table structure for table `keadaan_pasien`
--

CREATE TABLE `keadaan_pasien` (
  `id_keadaan` int(11) NOT NULL,
  `tanggal_masuk_rs` date NOT NULL,
  `cara_masuk` enum('IGD','IRJ','Langsung','Rujukan') NOT NULL,
  `tanggal_keluar_rs` date DEFAULT NULL,
  `keadaan_keluar` enum('Hidup','Meninggal','Kabur','Pindah RS','PP') DEFAULT NULL,
  `faktor_resiko` varchar(255) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `kode_penyakit` int(11) NOT NULL,
  `jenis_surveilans` enum('PHLEBITIS','ISK','IADP','IDO','ANTIBIOTIK') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keadaan_pasien`
--

INSERT INTO `keadaan_pasien` (`id_keadaan`, `tanggal_masuk_rs`, `cara_masuk`, `tanggal_keluar_rs`, `keadaan_keluar`, `faktor_resiko`, `no_rm`, `kode_penyakit`, `jenis_surveilans`) VALUES
(1, '2018-08-02', 'Langsung', '2018-08-03', 'PP', 'Gangguan Sistem Kekebalan Tubuh, Lanjut Usia', 12345, 1, 'PHLEBITIS'),
(2, '2018-08-04', 'IGD', '2018-08-06', 'Hidup', 'Gangguan Sistem Kekebalan Tubuh', 5678, 2, 'PHLEBITIS'),
(3, '2018-08-28', 'IGD', '2018-08-30', 'Hidup', 'Diabetes Melistus', 5432, 3, 'PHLEBITIS'),
(4, '2018-08-23', 'IGD', '2018-08-31', 'Hidup', 'Gangguan Sistem Kekebalan Tubuh', 98765, 1, 'PHLEBITIS'),
(5, '2018-08-01', 'IGD', '2018-08-02', 'Hidup', 'Diabetes Melistus, Gizi Buruk, Gangguan Sistem Kekebalan Tubuh', 4123, 2, 'PHLEBITIS'),
(6, '2018-08-02', 'IGD', '2018-08-13', 'Hidup', 'Diabetes Melistus', 34567, 1, 'PHLEBITIS'),
(7, '2018-08-13', 'IGD', '2018-08-07', 'Hidup', 'Diabetes Melistus', 977, 2, 'PHLEBITIS'),
(8, '2018-08-16', 'IGD', '2018-08-15', 'Hidup', 'Diabetes Melistus', 2345, 1, 'PHLEBITIS'),
(9, '2018-08-16', 'IGD', '2018-08-30', 'Hidup', 'Diabetes Melistus', 1237542, 1, 'PHLEBITIS');

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
(2, '2018-08-09', '17:44:00', '2018-08-10', '07:00:00', 'R011', 'Medis', 'Siapa', 'Jogja', 'Hayo', 'Tegal', 'Mulut', 'Darah', '', 'HIV - AIDS', '', 'Kaki kiri', 'Cras dapibus libero in massa interdum, sit amet blandit turpis aliquet. Etiam lobortis volutpat velit dignissim efficitur. Mauris a magna varius, euismod metus sit amet, imperdiet nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac leo augue. Mauris malesuada sem vel rhoncus ornare. Pellentesque in tellus dictum, tincidunt mi at, imperdiet ex. Vestibulum faucibus ornare tortor, quis aliquam metus malesuada elementum. Aliquam auctor placerat sem, ut hendrerit odio faucibus sed. ', 'Belum', 'Tidak', '', 'Minum air'),
(4, '2018-08-09', '02:22:00', '2018-08-02', '02:22:00', 'R010', 'A', 'A', 'A', 'A', 'A', 'Kateter IV', 'Lain-Lain', 'A', 'Lain-Lain', 'A', 'A', 'A', 'Sudah', 'Dipakai', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian_antibiotik`
--

CREATE TABLE `pemakaian_antibiotik` (
  `id_pemakaian_antibiotik` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `tanggal_pemakaian` date NOT NULL,
  `dosis` int(11) NOT NULL,
  `jenis` enum('PO','IV','IM') NOT NULL,
  `indikasi` enum('Profilaksis','Pengobatan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 5, 'R020', '2018-08-01', '02:05:00', '2018-08-08', '10:35:00', 'DR004'),
(2, 6, 'R020', '2018-08-09', '12:45:00', '2018-08-10', '10:21:00', 'DR002'),
(3, 1, 'R020', '2018-08-02', '12:54:00', '2018-08-03', '22:45:00', 'DR013'),
(4, 2, 'R020', '2018-08-04', '19:54:00', '2018-08-07', '06:53:00', 'DR016'),
(5, 3, 'R020', '2018-08-28', '14:32:00', '2018-08-29', '15:21:00', 'DR012'),
(6, 4, 'R020', '2018-08-23', '05:06:00', '2018-08-30', '15:12:00', 'DR004'),
(7, 5, 'R020', '2018-08-01', '12:12:00', '2018-08-02', '10:11:00', 'DR003'),
(8, 3, 'R017', '2018-08-23', '12:54:00', '2018-08-24', '14:43:00', 'DR006'),
(9, 1, 'R019', '2018-08-11', '04:53:00', '2018-08-13', '15:21:00', 'DR003'),
(10, 6, 'R020', '2018-08-02', '04:21:00', '2018-08-08', '17:06:00', 'DR004'),
(11, 7, 'R020', '2018-08-13', '02:22:00', '2018-08-11', '03:33:00', 'DR004'),
(12, 8, 'R020', '2018-08-16', '02:22:00', '2018-08-16', '03:33:00', 'DR017'),
(13, 9, 'R020', '2018-08-16', '02:33:00', '2018-08-21', '02:32:00', 'DR014');

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
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`) VALUES
(1, 'DBD'),
(2, 'Demam'),
(3, 'Batuk');

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
-- Table structure for table `surv_gejala_iadp`
--

CREATE TABLE `surv_gejala_iadp` (
  `id_surv_gejala` int(11) NOT NULL,
  `id_surv` int(11) NOT NULL,
  `lokasi_pasang` varchar(255) NOT NULL,
  `tanggal_pasang` date NOT NULL,
  `bundles_handhygiene` enum('Ya','Tidak') NOT NULL,
  `bundles_persiapan` enum('Ya','Tidak') NOT NULL,
  `bundles_penggunaan_apd` enum('Ya','Tidak') NOT NULL,
  `bundles_preparasi` enum('Ya','Tidak') NOT NULL,
  `bundles_dressing` enum('Ya','Tidak') NOT NULL,
  `bundles_dokumentasi` enum('Ya','Tidak') NOT NULL,
  `tanggal_lepas` date NOT NULL,
  `terjadi_infeksi` enum('Ya','Tidak') NOT NULL,
  `tanggal_infeksi` date NOT NULL,
  `tanda_infeksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surv_gejala_ido`
--

CREATE TABLE `surv_gejala_ido` (
  `id_surv_gejala` int(11) NOT NULL,
  `id_surv` int(11) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `tanda_infeksi` text NOT NULL,
  `keterangan_infeksi` text NOT NULL,
  `tanggal_kultur` date NOT NULL,
  `hasil_kultur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surv_gejala_isk`
--

CREATE TABLE `surv_gejala_isk` (
  `id_surv_gejala` int(11) NOT NULL,
  `id_surv` int(11) NOT NULL,
  `tanggal_pasang` date NOT NULL,
  `bundles_pemasangan_dc` enum('Ya','Tidak') NOT NULL,
  `bundles_alat_steril` enum('Ya','Tidak') NOT NULL,
  `bundles_handhygiene` enum('Ya','Tidak') NOT NULL,
  `bundles_lepas_noindikasi` enum('Ya','Tidak') NOT NULL,
  `bundles_fiksasi` enum('Ya','Tidak') NOT NULL,
  `bundles_balon` enum('Ya','Tidak') NOT NULL,
  `bundles_adp` enum('Ya','Tidak') NOT NULL,
  `bundles_urinebag` enum('Ya','Tidak') NOT NULL,
  `tanggal_lepas` date NOT NULL,
  `terjadi_infeksi` enum('Ya','Tidak') NOT NULL,
  `tanggal_infeksi` date NOT NULL,
  `tanda_infeksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surv_gejala_phlebitis`
--

CREATE TABLE `surv_gejala_phlebitis` (
  `id_surv_gejala` int(11) NOT NULL,
  `id_surv` int(11) NOT NULL,
  `lokasi_pasang` varchar(255) NOT NULL,
  `tanggal_pasang` date NOT NULL,
  `bundles_kebersihan` enum('Ya','Tidak') NOT NULL,
  `bundles_lepas_bykeluhan` enum('Ya','Tidak') NOT NULL,
  `bundles_cek_balutan` enum('Ya','Tidak') NOT NULL,
  `bundles_lepas_bywaktu` enum('Ya','Tidak') NOT NULL,
  `bundles_cek_tempat` enum('Ya','Tidak') NOT NULL,
  `tanggal_lepas` date NOT NULL,
  `terjadi_infeksi` enum('Ya','Tidak') NOT NULL,
  `tanggal_infeksi` date NOT NULL,
  `tanda_infeksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surv_iadp`
--

CREATE TABLE `surv_iadp` (
  `id_surv` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `jenis_invasif` varchar(255) NOT NULL DEFAULT '''Kateter V Central''',
  `tujuan_pemasangan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_infeksi` varchar(255) NOT NULL DEFAULT 'IADP'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surv_iadp`
--

INSERT INTO `surv_iadp` (`id_surv`, `id_keadaan`, `jenis_invasif`, `tujuan_pemasangan`, `keterangan`, `jenis_infeksi`) VALUES
(1, 2, '\'Kateter V Central\'', 'Nutrisi Parenteral', 'Pemberian makan', 'IADP');

-- --------------------------------------------------------

--
-- Table structure for table `surv_ido`
--

CREATE TABLE `surv_ido` (
  `id_surv` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `jenis_invasif` varchar(255) NOT NULL DEFAULT 'Luka Operasi',
  `tanggal_operasi` date NOT NULL,
  `tindakan_operasi` varchar(255) NOT NULL,
  `bundles_tidak_mencukur` enum('Ya','Tidak') NOT NULL,
  `bundles_cukur` enum('Ya','Tidak') NOT NULL,
  `bundles_suhu` enum('Ya','Tidak') NOT NULL,
  `bundles_antibiotik` enum('Ya','Tidak') NOT NULL,
  `bundles_kontrol_guladarah` enum('Ya','Tidak') NOT NULL,
  `id_dokter_konsultan` varchar(255) NOT NULL,
  `dokter_operator` varchar(255) NOT NULL,
  `sifat_operasi_emergensi` enum('Ya','Tidak') NOT NULL,
  `jenis_operasi` enum('Bersih','Bersih Tercemar','Tercemar','Kotor') NOT NULL,
  `anestesi_umum` enum('Ya','Tidak') NOT NULL,
  `no_kamar_operasi` int(11) NOT NULL,
  `ronde_operasi` int(11) NOT NULL,
  `jenis_implant` varchar(255) NOT NULL,
  `trauma_implant` enum('Ya','Tidak') NOT NULL,
  `jenis_endoscopi` varchar(255) NOT NULL,
  `trauma_endoscopi` enum('Ya','Tidak') NOT NULL,
  `lama_operasi` time NOT NULL,
  `skor_asa` enum('1','2','3','4') NOT NULL,
  `pj_kamar_operasi` varchar(255) NOT NULL,
  `tanggal_kultur` date NOT NULL,
  `hasil_kultur` varchar(255) NOT NULL,
  `jenis_infeksi` varchar(255) NOT NULL DEFAULT 'IDO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surv_ido`
--

INSERT INTO `surv_ido` (`id_surv`, `id_keadaan`, `jenis_invasif`, `tanggal_operasi`, `tindakan_operasi`, `bundles_tidak_mencukur`, `bundles_cukur`, `bundles_suhu`, `bundles_antibiotik`, `bundles_kontrol_guladarah`, `id_dokter_konsultan`, `dokter_operator`, `sifat_operasi_emergensi`, `jenis_operasi`, `anestesi_umum`, `no_kamar_operasi`, `ronde_operasi`, `jenis_implant`, `trauma_implant`, `jenis_endoscopi`, `trauma_endoscopi`, `lama_operasi`, `skor_asa`, `pj_kamar_operasi`, `tanggal_kultur`, `hasil_kultur`, `jenis_infeksi`) VALUES
(1, 7, 'Luka Operasi', '0000-00-00', 'a', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'DR013', 'A', 'Ya', 'Bersih', 'Ya', 1, 1, 'A', 'Ya', 'A', 'Ya', '00:20:09', '1', 'A', '0000-00-00', 'A', 'IDO'),
(2, 8, 'Luka Operasi', '2018-08-07', 'A', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'DR013', 'a', 'Ya', 'Bersih', 'Ya', 1, 1, 'A', 'Ya', 'A', 'Ya', '02:22:00', '1', 'A', '2018-08-16', 'A', 'IDO');

-- --------------------------------------------------------

--
-- Table structure for table `surv_isk`
--

CREATE TABLE `surv_isk` (
  `id_surv` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `jenis_invasif` enum('SPP','Dauer','Intermiten','Kondom') NOT NULL,
  `jenis_pemeriksaan` enum('Urine','Biakan Urine','','') NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `keterangan_pemeriksaan` text NOT NULL,
  `jenis_infeksi` varchar(255) NOT NULL DEFAULT 'ISK'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surv_isk`
--

INSERT INTO `surv_isk` (`id_surv`, `id_keadaan`, `jenis_invasif`, `jenis_pemeriksaan`, `tanggal_pemeriksaan`, `keterangan_pemeriksaan`, `jenis_infeksi`) VALUES
(1, 3, 'Dauer', 'Urine', '2018-08-29', 'Sehat wal afiat', 'ISK');

-- --------------------------------------------------------

--
-- Table structure for table `surv_phlebitis`
--

CREATE TABLE `surv_phlebitis` (
  `id_surv` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `jenis_invasif` enum('Kateter V Perifer','Umbilikal','Double Lumen') NOT NULL,
  `tujuan_pemasangan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_infeksi` varchar(255) NOT NULL DEFAULT 'Phlebitis'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surv_phlebitis`
--

INSERT INTO `surv_phlebitis` (`id_surv`, `id_keadaan`, `jenis_invasif`, `tujuan_pemasangan`, `keterangan`, `jenis_infeksi`) VALUES
(1, 1, 'Kateter V Perifer', 'Pemberian Obat', 'Pemberian obat DBD', 'Phlebitis'),
(2, 5, 'Double Lumen', 'Terapi Cairan', 'qwe', 'Phlebitis'),
(3, 6, 'Kateter V Perifer', 'Pemberian Obat', 'A', 'Phlebitis'),
(4, 9, 'Kateter V Perifer', 'Pemberian Obat', 'AAA', 'Phlebitis');

-- --------------------------------------------------------

--
-- Table structure for table `surv_vap`
--

CREATE TABLE `surv_vap` (
  `id_surv` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `jenis_invasif` varchar(255) NOT NULL DEFAULT 'Ventilator',
  `no_ventilator` int(11) NOT NULL,
  `tanggal_pasang` date NOT NULL,
  `bundles_posisi` enum('Ya','Tidak') NOT NULL,
  `bundles_kebersihan_tangan` enum('Ya','Tidak') NOT NULL,
  `bundles_kebersihan_mulut` enum('Ya','Tidak') NOT NULL,
  `bundles_manajemen_sekresi` enum('Ya','Tidak') NOT NULL,
  `bundles_pengkajian` enum('Ya','Tidak') NOT NULL,
  `tanggal_lepas` date NOT NULL,
  `terjadi_infeksi` enum('Ya','Tidak') NOT NULL,
  `tanda_infeksi` text NOT NULL,
  `keterangan_infeksi` text NOT NULL,
  `foto_thorax` enum('Infitrat','Merata','Patchy','Terlokalisir') NOT NULL,
  `tanggal_kultur` date NOT NULL,
  `hasil_kultur` text NOT NULL,
  `jenis_infeksi` varchar(255) NOT NULL DEFAULT 'VAP'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surv_vap`
--

INSERT INTO `surv_vap` (`id_surv`, `id_keadaan`, `jenis_invasif`, `no_ventilator`, `tanggal_pasang`, `bundles_posisi`, `bundles_kebersihan_tangan`, `bundles_kebersihan_mulut`, `bundles_manajemen_sekresi`, `bundles_pengkajian`, `tanggal_lepas`, `terjadi_infeksi`, `tanda_infeksi`, `keterangan_infeksi`, `foto_thorax`, `tanggal_kultur`, `hasil_kultur`, `jenis_infeksi`) VALUES
(1, 4, 'Ventilator', 2, '2018-08-30', '', '', '', '', '', '2018-08-09', 'Ya', ', Suhu>38C', 'Hari ke-2', 'Infitrat', '2018-08-29', 'Baik', 'VAP');

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
-- Indexes for table `pemakaian_antibiotik`
--
ALTER TABLE `pemakaian_antibiotik`
  ADD PRIMARY KEY (`id_pemakaian_antibiotik`),
  ADD KEY `id_keadaan` (`id_keadaan`);

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
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

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
-- Indexes for table `surv_gejala_iadp`
--
ALTER TABLE `surv_gejala_iadp`
  ADD PRIMARY KEY (`id_surv_gejala`),
  ADD KEY `id_keadaan` (`id_surv`);

--
-- Indexes for table `surv_gejala_ido`
--
ALTER TABLE `surv_gejala_ido`
  ADD PRIMARY KEY (`id_surv_gejala`),
  ADD KEY `id_surv_ido` (`id_surv`);

--
-- Indexes for table `surv_gejala_isk`
--
ALTER TABLE `surv_gejala_isk`
  ADD PRIMARY KEY (`id_surv_gejala`),
  ADD KEY `id_keadaan` (`id_surv`);

--
-- Indexes for table `surv_gejala_phlebitis`
--
ALTER TABLE `surv_gejala_phlebitis`
  ADD PRIMARY KEY (`id_surv_gejala`),
  ADD KEY `id_keadaan` (`id_surv`);

--
-- Indexes for table `surv_iadp`
--
ALTER TABLE `surv_iadp`
  ADD PRIMARY KEY (`id_surv`),
  ADD KEY `id_keadaan` (`id_keadaan`);

--
-- Indexes for table `surv_ido`
--
ALTER TABLE `surv_ido`
  ADD PRIMARY KEY (`id_surv`),
  ADD KEY `id_keadaan` (`id_keadaan`),
  ADD KEY `id_dokter_konsultan` (`id_dokter_konsultan`);

--
-- Indexes for table `surv_isk`
--
ALTER TABLE `surv_isk`
  ADD PRIMARY KEY (`id_surv`),
  ADD KEY `id_keadaan` (`id_keadaan`);

--
-- Indexes for table `surv_phlebitis`
--
ALTER TABLE `surv_phlebitis`
  ADD PRIMARY KEY (`id_surv`),
  ADD KEY `id_keadaan` (`id_keadaan`);

--
-- Indexes for table `surv_vap`
--
ALTER TABLE `surv_vap`
  ADD PRIMARY KEY (`id_surv`),
  ADD KEY `id_keadaan` (`id_keadaan`);

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
-- AUTO_INCREMENT for table `keadaan_pasien`
--
ALTER TABLE `keadaan_pasien`
  MODIFY `id_keadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kejadian_terpajan`
--
ALTER TABLE `kejadian_terpajan`
  MODIFY `id_kejadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemakaian_antibiotik`
--
ALTER TABLE `pemakaian_antibiotik`
  MODIFY `id_pemakaian_antibiotik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemakaian_ruangan`
--
ALTER TABLE `pemakaian_ruangan`
  MODIFY `id_pemakaian_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `surv_gejala_iadp`
--
ALTER TABLE `surv_gejala_iadp`
  MODIFY `id_surv_gejala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surv_gejala_ido`
--
ALTER TABLE `surv_gejala_ido`
  MODIFY `id_surv_gejala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surv_gejala_isk`
--
ALTER TABLE `surv_gejala_isk`
  MODIFY `id_surv_gejala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surv_gejala_phlebitis`
--
ALTER TABLE `surv_gejala_phlebitis`
  MODIFY `id_surv_gejala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surv_iadp`
--
ALTER TABLE `surv_iadp`
  MODIFY `id_surv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surv_ido`
--
ALTER TABLE `surv_ido`
  MODIFY `id_surv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surv_isk`
--
ALTER TABLE `surv_isk`
  MODIFY `id_surv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surv_phlebitis`
--
ALTER TABLE `surv_phlebitis`
  MODIFY `id_surv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surv_vap`
--
ALTER TABLE `surv_vap`
  MODIFY `id_surv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keadaan_pasien`
--
ALTER TABLE `keadaan_pasien`
  ADD CONSTRAINT `keadaan_pasien_ibfk_2` FOREIGN KEY (`kode_penyakit`) REFERENCES `penyakit` (`kode_penyakit`),
  ADD CONSTRAINT `keadaan_pasien_ibfk_3` FOREIGN KEY (`no_rm`) REFERENCES `identitas_pasien` (`no_rm`);

--
-- Constraints for table `kejadian_terpajan`
--
ALTER TABLE `kejadian_terpajan`
  ADD CONSTRAINT `kejadian_terpajan_ibfk_1` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`);

--
-- Constraints for table `pemakaian_ruangan`
--
ALTER TABLE `pemakaian_ruangan`
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_4` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`),
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_5` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `pemakaian_ruangan_ibfk_6` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`);

--
-- Constraints for table `pemantauan_pemasangan`
--
ALTER TABLE `pemantauan_pemasangan`
  ADD CONSTRAINT `pemantauan_pemasangan_ibfk_1` FOREIGN KEY (`id_pemasangan`) REFERENCES `pemasangan` (`id_pemasangan`);

--
-- Constraints for table `surv_gejala_iadp`
--
ALTER TABLE `surv_gejala_iadp`
  ADD CONSTRAINT `surv_gejala_iadp_ibfk_1` FOREIGN KEY (`id_surv`) REFERENCES `surv_iadp` (`id_surv`);

--
-- Constraints for table `surv_gejala_ido`
--
ALTER TABLE `surv_gejala_ido`
  ADD CONSTRAINT `surv_gejala_ido_ibfk_1` FOREIGN KEY (`id_surv`) REFERENCES `surv_ido` (`id_surv`);

--
-- Constraints for table `surv_gejala_isk`
--
ALTER TABLE `surv_gejala_isk`
  ADD CONSTRAINT `surv_gejala_isk_ibfk_1` FOREIGN KEY (`id_surv`) REFERENCES `surv_isk` (`id_surv`);

--
-- Constraints for table `surv_gejala_phlebitis`
--
ALTER TABLE `surv_gejala_phlebitis`
  ADD CONSTRAINT `surv_gejala_phlebitis_ibfk_1` FOREIGN KEY (`id_surv`) REFERENCES `surv_phlebitis` (`id_surv`);

--
-- Constraints for table `surv_iadp`
--
ALTER TABLE `surv_iadp`
  ADD CONSTRAINT `surv_iadp_ibfk_1` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`);

--
-- Constraints for table `surv_ido`
--
ALTER TABLE `surv_ido`
  ADD CONSTRAINT `surv_ido_ibfk_1` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`);

--
-- Constraints for table `surv_isk`
--
ALTER TABLE `surv_isk`
  ADD CONSTRAINT `surv_isk_ibfk_1` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`);

--
-- Constraints for table `surv_phlebitis`
--
ALTER TABLE `surv_phlebitis`
  ADD CONSTRAINT `surv_phlebitis_ibfk_1` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`);

--
-- Constraints for table `surv_vap`
--
ALTER TABLE `surv_vap`
  ADD CONSTRAINT `surv_vap_ibfk_1` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_pasien` (`id_keadaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
