-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 03:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myspak`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar1` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `nama_gambar`, `gambar1`, `created_at`, `update_at`) VALUES
(1, 'mohd noorlizam bin md ali', '', '2021-05-21 05:43:39', '2021-05-21 05:43:39'),
(2, 'Ahmad', 0x433a5c78616d70705c746d705c706870453631422e746d70, '2021-05-21 11:17:08', '2021-05-21 11:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `aras`
--

CREATE TABLE `aras` (
  `id` int(11) NOT NULL,
  `nama_aras` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aras`
--

INSERT INTO `aras` (`id`, `nama_aras`) VALUES
(1, 'Aras tanah'),
(2, 'Aras 1'),
(3, 'Aras 2'),
(4, 'Aras 3'),
(5, 'Bumbung'),
(6, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `bahagian_unit`
--

CREATE TABLE `bahagian_unit` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_bahagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahagian_unit`
--

INSERT INTO `bahagian_unit` (`id`, `nama_bahagian`, `created_at`, `updated_at`) VALUES
(1, 'Pengarah', '2019-10-16 08:30:36', '2019-10-16 08:30:36'),
(2, 'Timbalan Pengarah Pengurusan Latihan', '2019-10-16 08:31:48', '2019-10-16 08:31:48'),
(3, 'Jabatan Teknologi Maklumat', '2019-10-16 08:32:26', '2020-03-11 16:30:30'),
(4, 'Jabatan Pengurusan Sumber', '2019-10-16 08:32:40', '2019-10-16 08:32:40'),
(5, 'Bahagian Komunikasi Korporat dan Multimedia', '2019-10-16 08:33:05', '2019-10-16 08:33:05'),
(6, 'Bahagian Sistem Komputer', '2019-10-16 08:33:26', '2019-10-16 08:33:26'),
(7, 'Bahagian Perisian Pengaturcaraan', '2019-10-16 08:33:49', '2019-10-16 08:33:49'),
(8, 'Bahagian Rangkaian Komputer', '2019-10-16 08:34:08', '2019-10-16 08:34:08'),
(9, 'Bahagian CADD Mekanikal', '2019-10-16 08:34:29', '2019-10-16 08:34:29'),
(10, 'Bahagian Pengajian Akademik', '2019-10-16 08:35:00', '2019-10-16 08:35:00'),
(11, 'Bahagian CESS', '2019-10-16 08:35:10', '2019-10-16 08:35:10'),
(12, 'Bahagian Kawalan Kualiti Latihan(BKKL)', '2019-10-16 08:35:46', '2019-10-16 08:35:46'),
(13, 'Bahagian Pengurusan Pelajar dan Latihan(BPPL)', '2019-10-16 08:36:02', '2019-10-16 08:36:02'),
(14, 'Bahagian Pengurusan dan Penyelenggaraan Aset(BPPA)', '2019-10-16 08:36:39', '2019-10-16 08:36:39'),
(15, 'Bahagian Pentadbiran', '2019-10-16 08:37:05', '2019-10-16 08:37:05'),
(16, 'Bahagian Kewangan', '2019-12-18 23:47:06', '2019-12-18 23:47:06'),
(20, 'Jabatan Pusat Sumber dan Multimedia', '2020-03-10 17:11:10', '2020-11-30 17:28:50'),
(21, 'Timbalan Pengarah Pengurusan Operasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawatan`
--

CREATE TABLE `jawatan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_jawatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jawatan`
--

INSERT INTO `jawatan` (`id`, `nama_jawatan`, `created_at`, `updated_at`) VALUES
(1, 'Pegawai Latihan Vokasional', NULL, NULL),
(2, 'Penolong Pegawai Latihan Vokasional', NULL, NULL),
(3, 'Pemb. Pen. Pegawai Latihan Vokasional', NULL, NULL),
(4, 'Penolong Pegawai Tadbir', '2020-11-22 00:39:18', '2020-11-22 00:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kerja`
--

CREATE TABLE `jenis_kerja` (
  `id` int(11) NOT NULL,
  `nama_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_kerja`
--

INSERT INTO `jenis_kerja` (`id`, `nama_kerja`) VALUES
(1, 'Aduan'),
(2, 'Penyelenggaraan Pembaikan'),
(3, 'Penyelenggaraan Am'),
(4, 'Penyelenggaraan Pencegahan');

-- --------------------------------------------------------

--
-- Table structure for table `keutamaan`
--

CREATE TABLE `keutamaan` (
  `id` int(1) NOT NULL,
  `nama_keutamaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keutamaan`
--

INSERT INTO `keutamaan` (`id`, `nama_keutamaan`, `color`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Umum', '#628e59', '2020-07-11 22:12:04', '2020-07-11 22:12:04', NULL),
(2, 'Segera(Breakdown)', '#28bb50', '2020-07-11 22:12:04', '2020-07-11 22:12:04', NULL),
(3, 'Kecemasan', '#b7b901', '2020-07-11 22:12:04', '2020-07-11 22:12:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapor_rosak_tak_alih`
--

CREATE TABLE `lapor_rosak_tak_alih` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_aduan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pelapor_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_tel` int(11) NOT NULL,
  `bahagian_unit_id` int(11) UNSIGNED DEFAULT NULL,
  `premis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dpa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skop_perkhidmatan_id` int(11) UNSIGNED DEFAULT NULL,
  `lain_skop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mod_aduan_id` int(11) NOT NULL,
  `lain_mod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_id` int(11) UNSIGNED DEFAULT NULL,
  `lokasi_lain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aras_id` int(11) NOT NULL,
  `nama_no_bilik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_rosak` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keutamaan_id` int(11) UNSIGNED DEFAULT NULL,
  `kategori_id` int(11) UNSIGNED DEFAULT NULL,
  `pegawai_penerima_id` bigint(20) DEFAULT NULL,
  `jawatan_id` int(11) UNSIGNED DEFAULT NULL,
  `tindakan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `html` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muatturun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_pengadu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_penerima` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kerja_id` int(11) DEFAULT NULL,
  `ditugaskan_id` int(11) DEFAULT NULL,
  `tarikh_ditugaskan` date DEFAULT NULL,
  `masa_ditugaskan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ulasan_rosak` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_alat_ganti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_alat_ganti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_seunit_alat` int(11) DEFAULT NULL,
  `kuantiti_alat` int(11) DEFAULT NULL,
  `jumlah_alat` int(11) DEFAULT NULL,
  `perihal_kerja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_mula` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_siap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kontraktor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_mula_kon` date DEFAULT NULL,
  `tarikh_siap_kon` date DEFAULT NULL,
  `kos_akhir` int(11) DEFAULT NULL,
  `tempoh_tanggungan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapor_rosak_tak_alih`
--

INSERT INTO `lapor_rosak_tak_alih` (`id`, `no_aduan`, `nama_pelapor_id`, `no_tel`, `bahagian_unit_id`, `premis`, `no_dpa`, `skop_perkhidmatan_id`, `lain_skop`, `mod_aduan_id`, `lain_mod`, `lokasi_id`, `lokasi_lain`, `aras_id`, `nama_no_bilik`, `keterangan_rosak`, `keutamaan_id`, `kategori_id`, `pegawai_penerima_id`, `jawatan_id`, `tindakan_id`, `created_at`, `updated_at`, `deleted_at`, `status_id`, `html`, `muatturun`, `gambar_1`, `gambar_2`, `catatan_pengadu`, `catatan_penerima`, `jenis_kerja_id`, `ditugaskan_id`, `tarikh_ditugaskan`, `masa_ditugaskan`, `ulasan_rosak`, `jenis_alat_ganti`, `keterangan_alat_ganti`, `harga_seunit_alat`, `kuantiti_alat`, `jumlah_alat`, `perihal_kerja`, `tarikh_mula`, `tarikh_siap`, `nama_kontraktor`, `tarikh_mula_kon`, `tarikh_siap_kon`, `kos_akhir`, `tempoh_tanggungan`) VALUES
('532761d8-8fdf-4536-bbc9-6c73d3c084c5', NULL, '02a3db2a-3ca5-44d4-998d-e803a3b39f32', 172699960, 6, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 6, 'tiada', 1, 'tiada', 5, 'Ruang koridor', 1, 'tiada', 'Bumbung bocor', 2, NULL, NULL, NULL, NULL, '2021-05-22 08:54:45', '2021-05-22 08:54:45', NULL, 2, NULL, NULL, '9.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6369f1c5-45d6-4990-93f5-9fb9dec879e0', NULL, '02a3db2a-3ca5-44d4-998d-e803a3b39f32', 1234, 9, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 5, 'tiada', 3, 'tiada', 6, 'tiada', 1, 'Ruang pengajar', 'Tiada elektrik', 2, NULL, NULL, NULL, NULL, '2021-05-24 01:06:35', '2021-05-24 01:06:35', NULL, 2, NULL, NULL, '7.jpg', '8.png', 'Tidak boleh buat kerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapor_rosak_tak_alih1`
--

CREATE TABLE `lapor_rosak_tak_alih1` (
  `id` int(40) NOT NULL,
  `no_aduan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pelapor_id` bigint(20) DEFAULT NULL,
  `no_tel` int(11) NOT NULL,
  `bahagian_unit_id` int(11) UNSIGNED DEFAULT NULL,
  `premis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dpa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skop_perkhidmatan_id` int(11) UNSIGNED DEFAULT NULL,
  `lain_skop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mod_aduan_id` int(11) NOT NULL,
  `lain_mod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_id` int(11) UNSIGNED DEFAULT NULL,
  `lokasi_lain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aras_id` int(11) NOT NULL,
  `nama_no_bilik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_rosak` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keutamaan_id` int(11) UNSIGNED DEFAULT NULL,
  `kategori_id` int(11) UNSIGNED DEFAULT NULL,
  `pegawai_penerima_id` bigint(20) DEFAULT NULL,
  `jawatan_id` int(11) UNSIGNED DEFAULT NULL,
  `tindakan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `html` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muatturun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_pengadu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_penerima` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kerja_id` int(11) DEFAULT NULL,
  `ditugaskan_id` int(11) DEFAULT NULL,
  `tarikh_ditugaskan` date DEFAULT NULL,
  `masa_ditugaskan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ulasan_rosak` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_alat_ganti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_alat_ganti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_seunit_alat` int(11) DEFAULT NULL,
  `kuantiti_alat` int(11) DEFAULT NULL,
  `jumlah_alat` int(11) DEFAULT NULL,
  `perihal_kerja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_mula` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_siap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kontraktor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarikh_mula_kon` date DEFAULT NULL,
  `tarikh_siap_kon` date DEFAULT NULL,
  `kos_akhir` int(11) DEFAULT NULL,
  `tempoh_tanggungan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapor_rosak_tak_alih1`
--

INSERT INTO `lapor_rosak_tak_alih1` (`id`, `no_aduan`, `nama_pelapor_id`, `no_tel`, `bahagian_unit_id`, `premis`, `no_dpa`, `skop_perkhidmatan_id`, `lain_skop`, `mod_aduan_id`, `lain_mod`, `lokasi_id`, `lokasi_lain`, `aras_id`, `nama_no_bilik`, `keterangan_rosak`, `keutamaan_id`, `kategori_id`, `pegawai_penerima_id`, `jawatan_id`, `tindakan_id`, `created_at`, `updated_at`, `deleted_at`, `status_id`, `html`, `muatturun`, `gambar_1`, `gambar_2`, `catatan_pengadu`, `catatan_penerima`, `jenis_kerja_id`, `ditugaskan_id`, `tarikh_ditugaskan`, `masa_ditugaskan`, `ulasan_rosak`, `jenis_alat_ganti`, `keterangan_alat_ganti`, `harga_seunit_alat`, `kuantiti_alat`, `jumlah_alat`, `perihal_kerja`, `tarikh_mula`, `tarikh_siap`, `nama_kontraktor`, `tarikh_mula_kon`, `tarikh_siap_kon`, `kos_akhir`, `tempoh_tanggungan`) VALUES
(1, 'ATA/1-2021/1', 36, 0, 7, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 1, 'Tandas Lelaki Perisian (BLOK B)', 1, NULL, 'Sesalur air tercabut', 1, 1, 3, 1, 2, '2021-01-04 04:18:35', '2021-04-27 03:33:45', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(2, 'ATA/1-2021/2', 36, 0, 7, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 3, 'Tandas Lelaki Perisian (BLOK B)', 2, NULL, 'siling bocor', 1, 1, 3, 1, 2, '2021-01-04 04:19:00', '2021-04-27 03:34:15', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(3, 'ATA/1-2021/3', 5, 0, 13, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Kuarters D4', 5, NULL, 'Tangki berbunyi', 1, 1, 3, 1, 2, '2021-01-04 04:19:09', '2021-04-27 03:34:27', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(4, 'ATA/1-2021/4', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Aras 1 Asrama D', 2, NULL, 'Air meresap ke dinding', 1, 1, 3, 1, 2, '2021-01-04 04:19:35', '2021-04-27 03:44:10', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(5, 'ATA/1-2021/5', 54, 0, 1, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 14, 'Bilik Pelawat 4, Asrama B (Aras tanah)', 1, NULL, 'Skrew Pintu grill tercabut', 1, 1, 3, 1, 1, '2021-01-04 04:19:47', '2021-04-27 03:45:17', '0000-00-00 00:00:00', 3, '', '', '', '', NULL, 'Dalam tindakan BPPA', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(6, 'ATA/1-2021/6', 33, 0, 1, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 4, 'Tandas lelaki aras 1 rangkaian', 2, NULL, 'Kawasan lantai tandas tersumbat.', 1, 1, 3, 1, 2, '2021-01-04 04:19:57', '2021-04-27 03:38:53', '0000-00-00 00:00:00', 3, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(7, 'ATA/1-2021/7', 37, 0, 1, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 1, 'Kaunter Pusat Sumber', 1, NULL, 'Talian telefon utama (pindah ke lokasi baru)', 1, 1, 4, 1, 1, '2021-01-05 04:20:15', '2021-04-27 03:43:41', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(8, 'ATA/1-2021/8', 36, 0, 1, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 4, 'Makmal Maintenance, Aras 1, Bengkel Rangkaian.', 2, NULL, 'Internet tiada di makmal.', 1, 1, 3, 1, 1, '2021-01-12 04:20:25', '2021-04-27 03:46:08', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(9, 'ATA/1-2021/9', 54, 0, 1, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Bilik D54, Asrama Blok D (Bilik ada pelajar)', 1, NULL, 'Kipas rosak', 1, 1, 3, 1, 1, '2021-01-18 04:20:46', '2021-04-27 03:47:20', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(10, 'ATA/1-2021/10', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Bilik Basuh Asrama D, Aras 2', 3, NULL, 'Lampu tidak menyala', 1, 1, 3, 1, 1, '2021-01-18 04:20:58', '2021-04-27 03:48:28', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(11, 'ATA/1-2021/11', 74, 0, 14, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Persimpangan ke Bengkel Blok A', 1, NULL, 'Paip air utama bocor ', 1, 1, 3, 1, 2, '2021-01-25 04:21:16', '2021-04-27 03:49:59', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(12, 'ATA/1-2021/12', 74, 0, 14, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Rumah Pam', 1, NULL, 'Pam penyedut air rosak', 1, 1, 3, 1, 2, '2021-01-25 04:21:23', '2021-04-27 03:50:52', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, 'Dalam tempoh jaminan kerja.', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(13, 'ATA/1-2021/13', 36, 0, 7, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 3, 'Bilik KB Perisian', 2, NULL, 'Lampu tidak menyala dan DB berbunyi', 1, 1, 3, 1, 1, '2021-01-25 04:21:34', '2021-04-27 03:51:58', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(14, 'ATA/1-2021/14', 36, 0, 7, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 3, 'Makmal Rangkaian Aras 1 Blok A', 2, NULL, 'Tombol pintu rosak', 1, 1, 3, 1, 1, '2021-01-25 04:21:39', '2021-04-27 03:52:45', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(15, 'ATA/1-2021/15', 37, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Pondok Pengawal Utama', 1, NULL, 'Pintu kayu cermin telah pecah.', 1, 1, 3, 1, 1, '2021-01-26 04:22:03', '2021-04-27 03:53:55', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(16, 'ATA/2-2021/1', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Bilik D58 & D61 Aras 2 Asrama D', 3, NULL, 'Lampu rosak', 1, 1, 3, 1, 1, '2021-02-22 04:22:27', '2021-04-27 03:55:01', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(17, 'ATA/2-2021/2', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Tangga & Koridor  Aras 1 Blok D', 2, NULL, 'Lampu rosak', 1, 1, 3, 1, 1, '2021-02-22 04:22:32', '2021-04-27 03:56:22', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(18, 'ATA/2-2021/3', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Bilik Air Aras 2 Asrama D', 3, NULL, 'Pintu bilik air tertanggal', 1, 1, 3, 1, 1, '2021-02-22 04:22:38', '2021-04-27 03:57:38', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(19, 'ATA/2-2021/4', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Bilik D31 & D56 Aras 2 Asrama D', 3, NULL, 'Tombol pintu rosak', 1, 1, 4, 1, 1, '2021-02-22 04:22:44', '2021-04-27 03:58:22', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(20, 'ATA/3-2021/1', 5, 0, 13, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Kuarters D4', 1, NULL, 'Salur air ke tangki bocor', 1, 1, 3, 1, 1, '2021-03-01 04:23:08', '2021-04-27 03:59:27', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(21, 'ATA/3-2021/2', 59, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 13, 'Koridor Asrama A', 1, NULL, 'Lampu tidak menyala', 1, 1, 4, 1, 1, '2021-03-03 04:23:23', '2021-04-27 04:00:33', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(22, 'ATA/3-2021/3', 31, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 1, 'Bilik CESS', 1, NULL, 'Lampu tidak menyala', 1, 1, 3, 1, 1, '2021-03-03 04:23:27', '2021-04-27 04:02:21', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(23, 'ATA/3-2021/4', 31, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 1, 'Bilik CESS', 1, NULL, 'Telefon rosak ', 1, 1, 3, 1, 1, '2021-03-04 04:23:32', '2021-04-27 04:03:06', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(24, 'ATA/3-2021/5', 35, 0, 2, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 2, 'Bilik TPL', 1, NULL, '2 unit lampu tidak menyala ', 1, 1, 3, 1, 1, '2021-03-04 04:23:38', '2021-04-27 04:03:56', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(25, 'ATA/3-2021/6', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Asrama Blok D (Bilik D50, D51, D52, D53, D54, D58, D59, D60, D61 dan D62)', 1, NULL, '10 unit kipas siling tidak berfungsi', 1, 1, 3, 1, 1, '2021-03-11 04:23:44', '2021-04-27 04:05:02', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(26, 'ATA/3-2021/7', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 13, 'Asrama Blok A (Bilik A5, A18, A21, A29, A34, A35, A70)', 1, NULL, 'Kerosakan tombol dan pintu pecah', 1, 1, 3, 1, 2, '2021-03-11 04:24:39', '2021-04-27 04:05:53', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(27, 'ATA/3-2021/8', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 8, 'Kekemasan', 6, 'Hantar borang hardcopy', 14, 'Asrama Blok B (Bilik B21, B40 & B50)', 1, 'tiada', 'Pintu bilik pecah', 1, 1, 3, 1, 2, '2021-03-11 04:24:45', '2021-04-30 04:06:28', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(28, 'ATA/3-2021/9', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Asrama Blok D (Bilik D34)', 1, NULL, 'Kerosakan tombol pintu', 1, 1, 3, 1, 1, '2021-03-11 04:24:50', '2021-04-27 04:07:40', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(29, 'ATA/3-2021/10', 59, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Asrama A (Bilik A3, A4, Bilik Bacaan Aras 1, Bilik Gosok Aras 2)Asrama B (B52,B70, B71, Bilik Gosok Aras Tanah, Bilik Bacaan Aras 1)', 1, NULL, '12 unit tingkap pecah', 1, 1, 3, 1, 2, '2021-03-11 04:24:55', '2021-04-27 04:10:10', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(30, 'ATA/3-2021/11', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Asrama C (Bilik C16), Asrama D (D18, D47 -Ensel patah)', 6, NULL, '2 unit tingkap pecah & 1 Ensel patah', 1, 1, 3, 1, 2, '2021-03-11 04:25:03', '2021-04-27 04:11:07', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(31, 'ATA/3-2021/12', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Bilik mandi dan tandas, Asrama C & D', 6, NULL, '19 Unit Jenang Pintu (Besi) berkarat', 1, 1, 3, 1, 2, '2021-03-11 04:25:08', '2021-04-27 04:12:24', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(32, 'ATA/3-2021/13', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Bilik mandi dan tandas, Asrama A & B', 6, NULL, '36 Unit Jenang Pintu (Besi) berkarat', 1, 1, 3, 1, 2, '2021-03-11 04:25:12', '2021-04-27 04:13:13', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(33, 'ATA/3-2021/14', 21, 0, 6, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 5, 'Tandas Perempuan Komputer Sistem', 1, NULL, 'Lampu tandas tidak menyala', 1, 1, 3, 1, 1, '2021-03-17 04:25:26', '2021-04-27 04:14:29', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(34, 'ATA/3-2021/15', 35, 0, 2, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 2, 'Bilik TPL, Pusat Sumber', 1, NULL, '1 unit lampu pendaflour berkelip', 1, 1, 3, 1, 1, '2021-03-22 04:25:30', '2021-04-27 04:15:25', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(35, 'ATA/3-2021/16', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Aras 1 Asrama D', 2, NULL, 'Pengikat salur air hujan tercabut', 1, 1, 3, 1, 1, '2021-03-24 04:25:41', '2021-04-27 04:16:34', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(36, 'ATA/3-2021/17', 37, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 2, NULL, 1, NULL, 12, 'Ruang Masak Kafeteria', 1, NULL, 'Pindah perangkap lalat', 1, 1, 3, 1, 1, '2021-03-24 04:25:49', '2021-04-27 04:17:27', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan BPPA', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`, `created_at`, `updated_at`) VALUES
(1, 'PENTADBIRAN', NULL, NULL),
(2, 'PUSAT SUMBER', NULL, NULL),
(3, 'BENGKEL PERISIAN', NULL, NULL),
(4, 'BENGKEL RANGKAIAN', NULL, NULL),
(5, 'BENGKEL SISTEM', NULL, NULL),
(6, 'BENGKEL CADD', NULL, NULL),
(7, 'BENGKEL IPD', NULL, NULL),
(8, 'ASTAKA', NULL, NULL),
(9, 'DEWAN ILTIZAM', NULL, NULL),
(10, 'DEWAN TEKNOKRAT', NULL, NULL),
(11, 'DEWAN MAKAN', NULL, NULL),
(12, 'KAFETARIA', NULL, NULL),
(13, 'ASRAMA A', NULL, NULL),
(14, 'ASRAMA B', NULL, NULL),
(15, 'ASRAMA C', NULL, NULL),
(16, 'ASRAMA D', NULL, NULL),
(17, 'RUMAH PENGARAH', NULL, NULL),
(18, 'LAIN-LAIN', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_07_050833_create_permission_tables', 1),
(5, '2021_04_07_050928_create_products_table', 2),
(6, '2014_10_12_000000_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', '02a3db2a-3ca5-44d4-998d-e803a3b39f32'),
(2, 'App\\Models\\User', '12'),
(2, 'App\\Models\\User', '3'),
(2, 'App\\Models\\User', '74'),
(2, 'App\\Models\\User', '78'),
(2, 'App\\Models\\User', '8'),
(3, 'App\\Models\\User', '02a3db2a-3ca5-44d4-998d-e803a3b39f32'),
(3, 'App\\Models\\User', '1'),
(3, 'App\\Models\\User', '10'),
(3, 'App\\Models\\User', '11'),
(3, 'App\\Models\\User', '13'),
(3, 'App\\Models\\User', '15'),
(3, 'App\\Models\\User', '16'),
(3, 'App\\Models\\User', '17'),
(3, 'App\\Models\\User', '18'),
(3, 'App\\Models\\User', '19'),
(3, 'App\\Models\\User', '20'),
(3, 'App\\Models\\User', '21'),
(3, 'App\\Models\\User', '22'),
(3, 'App\\Models\\User', '23'),
(3, 'App\\Models\\User', '24'),
(3, 'App\\Models\\User', '25'),
(3, 'App\\Models\\User', '26'),
(3, 'App\\Models\\User', '27'),
(3, 'App\\Models\\User', '28'),
(3, 'App\\Models\\User', '29'),
(3, 'App\\Models\\User', '30'),
(3, 'App\\Models\\User', '31'),
(3, 'App\\Models\\User', '32'),
(3, 'App\\Models\\User', '33'),
(3, 'App\\Models\\User', '34'),
(3, 'App\\Models\\User', '35'),
(3, 'App\\Models\\User', '36'),
(3, 'App\\Models\\User', '37'),
(3, 'App\\Models\\User', '38'),
(3, 'App\\Models\\User', '39'),
(3, 'App\\Models\\User', '4'),
(3, 'App\\Models\\User', '40'),
(3, 'App\\Models\\User', '41'),
(3, 'App\\Models\\User', '43'),
(3, 'App\\Models\\User', '44'),
(3, 'App\\Models\\User', '45'),
(3, 'App\\Models\\User', '46'),
(3, 'App\\Models\\User', '47'),
(3, 'App\\Models\\User', '48'),
(3, 'App\\Models\\User', '49'),
(3, 'App\\Models\\User', '5'),
(3, 'App\\Models\\User', '50'),
(3, 'App\\Models\\User', '51'),
(3, 'App\\Models\\User', '52'),
(3, 'App\\Models\\User', '53'),
(3, 'App\\Models\\User', '54'),
(3, 'App\\Models\\User', '55'),
(3, 'App\\Models\\User', '56'),
(3, 'App\\Models\\User', '57'),
(3, 'App\\Models\\User', '58'),
(3, 'App\\Models\\User', '59'),
(3, 'App\\Models\\User', '6'),
(3, 'App\\Models\\User', '60'),
(3, 'App\\Models\\User', '61'),
(3, 'App\\Models\\User', '62'),
(3, 'App\\Models\\User', '63'),
(3, 'App\\Models\\User', '64'),
(3, 'App\\Models\\User', '65'),
(3, 'App\\Models\\User', '66'),
(3, 'App\\Models\\User', '67'),
(3, 'App\\Models\\User', '68'),
(3, 'App\\Models\\User', '69'),
(3, 'App\\Models\\User', '7'),
(3, 'App\\Models\\User', '70'),
(3, 'App\\Models\\User', '71'),
(3, 'App\\Models\\User', '72'),
(3, 'App\\Models\\User', '73'),
(3, 'App\\Models\\User', '75'),
(3, 'App\\Models\\User', '76'),
(3, 'App\\Models\\User', '77'),
(3, 'App\\Models\\User', '79'),
(3, 'App\\Models\\User', '9'),
(3, 'App\\Models\\User', 'cb8fc2e0-88c4-4a56-b51d-37763c184a80');

-- --------------------------------------------------------

--
-- Table structure for table `mod_aduan`
--

CREATE TABLE `mod_aduan` (
  `id` int(11) NOT NULL,
  `nama_mod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mod_aduan`
--

INSERT INTO `mod_aduan` (`id`, `nama_mod`) VALUES
(1, 'Telefon'),
(2, ' Faksimili\r\n'),
(3, 'E‐Mel'),
(4, 'Surat'),
(5, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(17, 'kebenaran_index', 'web', '2021-04-26 02:37:01', '2021-04-26 02:37:01'),
(18, 'kebenaran_add', 'web', '2021-04-26 02:37:11', '2021-04-26 02:37:11'),
(19, 'kebenaran_store', 'web', '2021-04-26 02:37:24', '2021-04-26 02:37:24'),
(20, 'kebenaran_show', 'web', '2021-04-26 02:37:34', '2021-04-26 02:37:34'),
(21, 'kebenaran_edit', 'web', '2021-04-26 02:37:43', '2021-04-26 02:37:43'),
(22, 'kebenaran_update', 'web', '2021-04-26 02:37:53', '2021-04-26 02:37:53'),
(23, 'kebenaran_delete', 'web', '2021-04-26 02:38:05', '2021-04-26 02:38:05'),
(24, 'roles_index', 'web', '2021-04-26 02:39:14', '2021-04-26 02:39:14'),
(25, 'roles_create', 'web', '2021-04-26 02:39:23', '2021-04-26 02:39:23'),
(26, 'roles_store', 'web', '2021-04-26 02:39:33', '2021-04-26 02:39:33'),
(27, 'roles_show', 'web', '2021-04-26 02:39:43', '2021-04-26 02:39:43'),
(28, 'roles_edit', 'web', '2021-04-26 02:39:53', '2021-04-26 02:39:53'),
(29, 'roles_update', 'web', '2021-04-26 02:40:03', '2021-04-26 02:40:03'),
(30, 'roles_destroy', 'web', '2021-04-26 02:40:12', '2021-04-26 02:40:12'),
(31, 'roles_delete', 'web', '2021-04-26 02:40:30', '2021-04-26 02:40:30'),
(32, 'pengguna_index', 'web', '2021-04-26 02:46:48', '2021-04-26 02:46:48'),
(33, 'pengguna_create', 'web', '2021-04-26 02:46:56', '2021-04-26 02:46:56'),
(34, 'pengguna_store', 'web', '2021-04-26 02:47:03', '2021-04-26 02:47:03'),
(35, 'pengguna_papar', 'web', '2021-04-26 02:47:16', '2021-04-26 02:47:16'),
(36, 'pengguna_edit', 'web', '2021-04-26 02:49:44', '2021-04-26 02:49:44'),
(37, 'pengguna_update', 'web', '2021-04-26 02:49:53', '2021-04-26 02:49:53'),
(38, 'pengguna_buang', 'web', '2021-04-26 02:50:04', '2021-04-26 02:50:04'),
(39, 'pengguna_delete', 'web', '2021-04-26 02:50:14', '2021-04-26 02:50:14'),
(40, 'pengguna_editprofile', 'web', '2021-04-26 02:50:22', '2021-04-26 02:50:22'),
(41, 'pengguna_updatePassword', 'web', '2021-04-26 02:50:31', '2021-04-26 02:50:31'),
(42, 'dashboard_index', 'web', '2021-04-26 02:53:44', '2021-04-26 02:53:44'),
(43, 'asettakalih_index', 'web', '2021-04-26 03:00:29', '2021-04-26 03:00:29'),
(44, 'asettakalih_add', 'web', '2021-04-26 03:00:47', '2021-04-26 03:00:47'),
(45, 'asettakalih_store', 'web', '2021-04-26 03:00:58', '2021-04-26 03:00:58'),
(46, 'asettakalih_show', 'web', '2021-04-26 03:01:14', '2021-04-26 03:01:14'),
(47, 'asettakalih_paparan', 'web', '2021-04-26 03:01:23', '2021-04-26 03:01:23'),
(48, 'asettakalih_pdf', 'web', '2021-04-26 03:01:34', '2021-04-26 03:01:34'),
(49, 'asettakalih_edit', 'web', '2021-04-26 03:01:43', '2021-04-26 03:01:43'),
(50, 'asettakalih_update', 'web', '2021-04-26 03:01:54', '2021-04-26 03:01:54'),
(51, 'asettakalih_delete', 'web', '2021-04-26 03:02:08', '2021-04-26 03:02:08'),
(52, 'asettakalih_tindakanindex', 'web', '2021-04-26 03:02:16', '2021-04-26 03:02:16'),
(53, 'asettakalih_edittindakan', 'web', '2021-04-26 03:02:31', '2021-04-26 03:02:31'),
(54, 'asettakalih_updatetindakan', 'web', '2021-04-26 03:02:41', '2021-04-26 03:02:41'),
(55, 'asettakalih_tindakanpdf', 'web', '2021-04-26 03:02:53', '2021-04-26 03:02:53'),
(56, 'asettakalih_tindakan', 'web', '2021-04-26 03:03:17', '2021-04-26 03:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-04-06 21:39:53', '2021-04-06 21:39:53'),
(2, 'bppa', 'web', '2021-04-20 03:11:21', '2021-04-20 03:11:21'),
(3, 'pengadu_rosak', 'web', '2021-04-20 03:13:05', '2021-04-20 03:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(32, 2),
(32, 3),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(34, 3),
(35, 1),
(35, 2),
(35, 3),
(36, 1),
(36, 2),
(36, 3),
(37, 1),
(37, 2),
(37, 3),
(38, 1),
(39, 1),
(40, 1),
(40, 2),
(40, 3),
(41, 1),
(41, 2),
(41, 3),
(42, 1),
(42, 2),
(42, 3),
(43, 1),
(43, 2),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 2),
(46, 3),
(47, 1),
(47, 2),
(47, 3),
(48, 1),
(48, 2),
(48, 3),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2);

-- --------------------------------------------------------

--
-- Table structure for table `siasatan_penyelenggaraan`
--

CREATE TABLE `siasatan_penyelenggaraan` (
  `id` int(11) NOT NULL,
  `id_lapor_rosak` int(11) DEFAULT NULL,
  `id_no_aduan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_nama_pengadu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_status_aduan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siasatan_penyelenggaraan`
--

INSERT INTO `siasatan_penyelenggaraan` (`id`, `id_lapor_rosak`, `id_no_aduan`, `id_nama_pengadu`, `id_status_aduan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, 'Mohd Noorlizam', NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'Ahmad', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skop_perkhidmatan`
--

CREATE TABLE `skop_perkhidmatan` (
  `id` int(11) NOT NULL,
  `nama_skop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skop_perkhidmatan`
--

INSERT INTO `skop_perkhidmatan` (`id`, `nama_skop`) VALUES
(1, 'Keselamatan'),
(2, 'Housekeeping'),
(3, 'Landskap'),
(4, 'Mekanikal'),
(5, 'Elektrik'),
(6, 'Sivil dan Struktur'),
(7, 'Parkir'),
(8, 'Lain‐lain');

-- --------------------------------------------------------

--
-- Table structure for table `status_aduan`
--

CREATE TABLE `status_aduan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_aduan`
--

INSERT INTO `status_aduan` (`id`, `nama_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Selesai', '2020-07-11 22:12:04', '2020-07-11 22:12:04', NULL),
(2, 'Belum selesai', '2020-07-11 22:12:04', '2020-07-11 22:12:04', NULL),
(3, 'Dalam tindakan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id` int(11) NOT NULL,
  `nama_tindakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id`, `nama_tindakan`) VALUES
(1, 'BPPA'),
(2, 'Kontraktor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('02a3db2a-3ca5-44d4-998d-e803a3b39f32', 'Administrator', 'admin@gmail.com', NULL, '$2y$10$nRDymo9wtszsQhl.GZEcL.EJHgitQnpIfimc/rWaKwRZg/JHDAhdu', NULL, '2021-05-13 14:58:40', '2021-05-19 04:45:29'),
('cb8fc2e0-88c4-4a56-b51d-37763c184a80', 'Mohd Noorlizam Bin Md Ali', 'mohdnoorlizam@jtm.gov.my', NULL, '$2y$10$5TPwTt594IimmQJkkytHyuDAC3xR/Sn4MUe1GV7UwO1cskxHij1aC', NULL, '2021-05-19 07:37:57', '2021-05-19 07:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohd noorlizam bin md ali', 'mohdnoorlizam@jtm.gov.my', NULL, '$2y$10$qBBQ2DHOy8XbEcKmqH0eZ.fPIcGdtPg4uJPyUcM0jIRvVebdFx9HS', NULL, '2021-04-27 02:18:33', '2021-05-06 08:06:30'),
(2, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$BOS2ByVbdAjmk1MZLFxWNest813tsbuVfN3Y12fh/UTaTsOfLxRZO', 'nTXYvnqIDCmMQlpJwCoXkwI4JF88lljjqT4tGk0nnGv42MjokNglI8xyJy6s', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Abdul Hak Bin Mahat', 'abdulhak@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', 'Df8l5E82Eg47m9TYulF1HgEoHbQCG7vbkOq2W5Uw3dJpIn2bigj3AC0HYjYJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Ainon Binti Abdullah', 'ainon.abdullah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Amar Shah Bin Omar', 'amarshah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Aminah Binti Jaferi', 'aminah.jaferi@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Azhar Bin Ahmad Zaki', 'azharzaki@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Azilah Bt Harun', 'azilah.h@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Azleen Binti Mat Lazih', 'azleen@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Azlina Binti Amir', 'azlina.amir@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Azman Bin Talib', 'azman.talib@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Azurin Ayu Binti Kamarulzaman', 'azurinayu@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Eniwati Binti Sarjo', 'eniwati@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Muhammad Faqrul Razi Bin Hishamudin', 'faqrulrazi@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Fazidah Binti Mohamad Sabidin', 'fazidah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Mohd Hairudin Bin Hassan@Ng Kim Fook', 'hairudin@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Haizan Binti Hussein', 'haizan@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Halimatul Saa\'diah Binti Mohd Zainon', 'halimatul@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Hapisah Binti Hanapi', 'hapisah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Hayati Binti Md Aris', 'hayati.aris@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Husna Rawaida Binti Hedzir', 'husnarawaida@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Huzaifah Bte Hasan', 'huzaifah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Ilyani Amrina Binti Mohamed', 'ilyani.a@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Kalaiselvan A/L Muniyandy', 'kalaiselvan@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Kausar Binti Mohd Hanapi@Abd.Rahim', 'kausar@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Khairul Izwan Bin Mazlan', 'khairulizwan@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Khairul Rijal Bin Wagiman', 'khairul_rijal@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Muhammad Jefri Bin Ibrahim', 'm.jefri@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Mazlan Bin Shaharudin', 'mazlanshaharudin@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Mazlinda Binti Saip', 'mazlinda@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Meor Safri Bin Zamri', 'meorsafri@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Mohamad Fairuz Bin Ya\'ccob', 'mfairuzy@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Mohd Khairul Azmi Bin Shafian', 'mk.azmi@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Mohd Khalid Bin Adnan', 'mkhalid@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Muhammad Nur Zulfadhli Bin Abd Rahim', 'mn.zulfadhli@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Mohamad Azli Bin Ibrahim', 'mohamadazli@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Mohamad Firdaus Bin Hamidun', 'mohamadfirdaus@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Mohammad Riduan Bin Hassan', 'mohammadriduan@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Mohamed Helmi Bin Mohamed Aris', 'mohdhelmi@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Mohd Nizam Bin Mohd Ngadian', 'mohdnizam@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Mohd Saimi Bin Md Yatim', 'mohdsaimi@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Mohd Shafry bin Salam', 'mohdshafry@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Munir Syafwan Bin Mohamed', 'munirsyafwan@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Nazry Bin Yusof', 'nazry@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Noor Fazidah Binti Husin', 'noorfazidah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Noor Haniwaty Binti Md Jasin', 'noorhaniwaty@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Nor Faridah Binti Khamis', 'norfaridah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Nor Irawati Binti Md. Sol', 'norirawati@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Norlizah Binti Akob', 'norlizah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Nornilam Binti Ismail', 'nornilam@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Nornizaha Bt. Ismail', 'nornizaha@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Nor Syuhadah Binti Zulkiple', 'norsyuhadah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Nur Aisyah Binti Abdul Aziz', 'nuraisyah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Raja Azman Bin Raja Omar', 'rajaazman@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Rohani Binti Yusof', 'rohani.yusof@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Ts. Hj. Sabri Bin Zainuddin', 'sabri.z@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Sabri Bin Abdul Rahman', 'sabri@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Sanjay A/L Vengatravana', 'sanjay@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Shahril Azli Bin Yahya', 'shahril.azli@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Siti Anizah Binti Ibrahim', 'sitianizah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Siti Nazira Binti Ahmad Nizam', 'sitinazira@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Siti Noridayu Binti Mustafar', 'sitinoridayu@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Soon Pei Ling', 'soon@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Suhaimi Bin Kasran', 'suhaimi.kasran@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Suhana Binti A Ghani', 'suhana.a@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Teo Huey Ing', 'teohueying@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Wan Aminatul Alia Binti Wan Mohd', 'wanaminatul@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Wan Mazlifah Binti Wan Pin', 'wanmazlifah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Wan Nusmadi Bin Leman', 'wan_nusmadi@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Mohd Yassir Bin Ali', 'yassir@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Yazmin Bin Yaakob', 'yazmin@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Zainizam Bin Yusof', 'zainizam@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Zakaria bin Hamzah', 'zakariahamzah@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Zaliha Bt Awal', 'zaliha@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Zamri Bin Ahmad', 'zamri.ahmad@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Zamri Bin Zainudin', 'zamri@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Zulkafli \'Ain Bin Baharum', 'zulkafliain@jtm.gov.my', NULL, '$2y$10$ddJxGyx3l2nRL.uZ.HdS4eHUHLMGdecg7s1jygT0rcqvz9UkaW3ty', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aras`
--
ALTER TABLE `aras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahagian_unit`
--
ALTER TABLE `bahagian_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawatan`
--
ALTER TABLE `jawatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kerja`
--
ALTER TABLE `jenis_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keutamaan`
--
ALTER TABLE `keutamaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapor_rosak_tak_alih`
--
ALTER TABLE `lapor_rosak_tak_alih`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `pegawai_penerima_id` (`pegawai_penerima_id`),
  ADD KEY `jawatan_id` (`jawatan_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `lokasi_id` (`lokasi_id`),
  ADD KEY `nama_pelapor_id` (`nama_pelapor_id`);

--
-- Indexes for table `lapor_rosak_tak_alih1`
--
ALTER TABLE `lapor_rosak_tak_alih1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `pegawai_penerima_id` (`pegawai_penerima_id`),
  ADD KEY `jawatan_id` (`jawatan_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `lokasi_id` (`lokasi_id`),
  ADD KEY `nama_pelapor_id` (`nama_pelapor_id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `mod_aduan`
--
ALTER TABLE `mod_aduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `siasatan_penyelenggaraan`
--
ALTER TABLE `siasatan_penyelenggaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skop_perkhidmatan`
--
ALTER TABLE `skop_perkhidmatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_aduan`
--
ALTER TABLE `status_aduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aras`
--
ALTER TABLE `aras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bahagian_unit`
--
ALTER TABLE `bahagian_unit`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawatan`
--
ALTER TABLE `jawatan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_kerja`
--
ALTER TABLE `jenis_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keutamaan`
--
ALTER TABLE `keutamaan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lapor_rosak_tak_alih1`
--
ALTER TABLE `lapor_rosak_tak_alih1`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mod_aduan`
--
ALTER TABLE `mod_aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siasatan_penyelenggaraan`
--
ALTER TABLE `siasatan_penyelenggaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_aduan`
--
ALTER TABLE `status_aduan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
