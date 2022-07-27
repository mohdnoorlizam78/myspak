-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 06:40 AM
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
-- Table structure for table `lapor_rosak_tak_alih`
--

CREATE TABLE `lapor_rosak_tak_alih` (
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
-- Dumping data for table `lapor_rosak_tak_alih`
--

INSERT INTO `lapor_rosak_tak_alih` (`id`, `no_aduan`, `nama_pelapor_id`, `no_tel`, `bahagian_unit_id`, `premis`, `no_dpa`, `skop_perkhidmatan_id`, `lain_skop`, `mod_aduan_id`, `lain_mod`, `lokasi_id`, `lokasi_lain`, `aras_id`, `nama_no_bilik`, `keterangan_rosak`, `keutamaan_id`, `kategori_id`, `pegawai_penerima_id`, `jawatan_id`, `tindakan_id`, `created_at`, `updated_at`, `deleted_at`, `status_id`, `html`, `muatturun`, `gambar_1`, `gambar_2`, `catatan_pengadu`, `catatan_penerima`, `jenis_kerja_id`, `ditugaskan_id`, `tarikh_ditugaskan`, `masa_ditugaskan`, `ulasan_rosak`, `jenis_alat_ganti`, `keterangan_alat_ganti`, `harga_seunit_alat`, `kuantiti_alat`, `jumlah_alat`, `perihal_kerja`, `tarikh_mula`, `tarikh_siap`, `nama_kontraktor`, `tarikh_mula_kon`, `tarikh_siap_kon`, `kos_akhir`, `tempoh_tanggungan`) VALUES
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
(27, 'ATA/3-2021/8', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 14, 'Asrama Blok B (Bilik B21, B40 & B50)', 1, NULL, 'Pintu bilik pecah', 1, 1, 3, 1, 2, '2021-03-11 04:24:45', '2021-04-27 04:06:36', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(28, 'ATA/3-2021/9', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Asrama Blok D (Bilik D34)', 1, NULL, 'Kerosakan tombol pintu', 1, 1, 3, 1, 1, '2021-03-11 04:24:50', '2021-04-27 04:07:40', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(29, 'ATA/3-2021/10', 59, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Asrama A (Bilik A3, A4, Bilik Bacaan Aras 1, Bilik Gosok Aras 2)Asrama B (B52,B70, B71, Bilik Gosok Aras Tanah, Bilik Bacaan Aras 1)', 1, NULL, '12 unit tingkap pecah', 1, 1, 3, 1, 2, '2021-03-11 04:24:55', '2021-04-27 04:10:10', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(30, 'ATA/3-2021/11', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Asrama C (Bilik C16), Asrama D (D18, D47 -Ensel patah)', 6, NULL, '2 unit tingkap pecah & 1 Ensel patah', 1, 1, 3, 1, 2, '2021-03-11 04:25:03', '2021-04-27 04:11:07', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(31, 'ATA/3-2021/12', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Bilik mandi dan tandas, Asrama C & D', 6, NULL, '19 Unit Jenang Pintu (Besi) berkarat', 1, 1, 3, 1, 2, '2021-03-11 04:25:08', '2021-04-27 04:12:24', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(32, 'ATA/3-2021/13', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 18, 'Bilik mandi dan tandas, Asrama A & B', 6, NULL, '36 Unit Jenang Pintu (Besi) berkarat', 1, 1, 3, 1, 2, '2021-03-11 04:25:12', '2021-04-27 04:13:13', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan perolehan', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(33, 'ATA/3-2021/14', 21, 0, 6, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 5, 'Tandas Perempuan Komputer Sistem', 1, NULL, 'Lampu tandas tidak menyala', 1, 1, 3, 1, 1, '2021-03-17 04:25:26', '2021-04-27 04:14:29', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(34, 'ATA/3-2021/15', 35, 0, 2, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 2, 'Bilik TPL, Pusat Sumber', 1, NULL, '1 unit lampu pendaflour berkelip', 1, 1, 3, 1, 1, '2021-03-22 04:25:30', '2021-04-27 04:15:25', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(35, 'ATA/3-2021/16', 54, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 16, 'Aras 1 Asrama D', 2, NULL, 'Pengikat salur air hujan tercabut', 1, 1, 3, 1, 1, '2021-03-24 04:25:41', '2021-04-27 04:16:34', '0000-00-00 00:00:00', 1, '', '', '', '', NULL, NULL, 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0),
(36, 'ATA/3-2021/17', 37, 0, 15, 'Institut Latihan Perindustrian Selandar', '1114111MYS.040214.BE0001', 1, NULL, 1, NULL, 12, 'Ruang Masak Kafeteria', 1, NULL, 'Pindah perangkap lalat', 1, 1, 3, 1, 1, '2021-03-24 04:25:49', '2021-04-27 04:17:27', '0000-00-00 00:00:00', 2, '', '', '', '', NULL, 'Dalam tindakan BPPA', 0, 0, '0000-00-00', '', '', '', '', 0, 0, 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor_rosak_tak_alih`
--
ALTER TABLE `lapor_rosak_tak_alih`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
