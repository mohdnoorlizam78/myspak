-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 08:29 AM
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
('00377577-bc06-4c6f-9f3f-28ad0bbd12f8', 'Wan Aminatul Alia Binti Wan Mohd', 'wanaminatul@jtm.gov.my', NULL, '$2y$10$CWQ7F94aAx0BHzAtG0rWe.ioumXg/i/j24OYcCo3ly2S3u9K2b2ba', NULL, '2021-05-24 04:48:24', '2021-05-24 04:48:24'),
('02a3db2a-3ca5-44d4-998d-e803a3b39f32', 'Administrator', 'admin@gmail.com', NULL, '$2y$10$nRDymo9wtszsQhl.GZEcL.EJHgitQnpIfimc/rWaKwRZg/JHDAhdu', NULL, '2021-05-20 14:58:40', '2021-05-19 04:45:29'),
('03ac9ea4-eaa7-4d97-a9b0-3b94afbab51a', 'Yazmin Bin Yaakob', 'yazmin@jtm.gov.my', NULL, '$2y$10$3gq65FqJnnq2g0ZGBxaa9e4u96ajsmNj.y3YKnKHVKDbIMmlAlHq2', NULL, '2021-05-24 04:50:15', '2021-05-24 04:50:15'),
('0543cb35-38d5-4153-bfbb-1a8ee12d6fb4', 'Soon Pei Ling', 'soon@jtm.gov.my', NULL, '$2y$10$DHkmdFLkq5KJHyOGWe20BOws/5rknfRf90xRvg0MHTatX.hgHtSiS', NULL, '2021-05-24 04:46:49', '2021-05-24 04:46:49'),
('06816ed0-d1f4-4b13-bc95-6d3906076a6b', 'Mohd Khalid Bin Adnan', 'mkhalid@jtm.gov.my', NULL, '$2y$10$iLMmYv9C2vyNHiMGLi7sOOj9qBrSURB8gUnHCgVWfaLC6W9lhHeJK', NULL, '2021-05-24 04:29:40', '2021-05-24 04:29:40'),
('06ffe693-1ec2-4d94-813e-b6895634cd1f', 'Aminah Binti Jaferi', 'aminah.jaferi@jtm.gov.my', NULL, '$2y$10$7mH2QwCzCcmW/6ru9WMkoesoXStx4PM1rwg65XX.r6klvZFiwQ//.', NULL, '2021-05-24 02:45:55', '2021-05-24 02:45:55'),
('08fe2a3d-4d6f-462b-81e8-3f9c81d0ed21', 'Nornizaha Bt. Ismail', 'nornizaha@jtm.gov.my', NULL, '$2y$10$gxN1AA4ibUZp9kR839a..ul6ycSDyMCPn1mTyRljUIkJEvLG6SpUC', NULL, '2021-05-24 04:40:27', '2021-05-24 04:40:27'),
('0ab98694-7ad4-44ab-bd40-490300197f59', 'Nazry Bin Yusof', 'nazry@jtm.gov.my', NULL, '$2y$10$ucbKoZa56hi8yU84YIlqv.fH3LeCjPE9AEMB2UrfADtlqQz3q/0c.', NULL, '2021-05-24 04:36:57', '2021-05-24 04:36:57'),
('0ca6f709-5a79-432a-a341-42c6b804ae8a', 'Meor Safri Bin Zamri', 'meorsafri@jtm.gov.my', NULL, '$2y$10$UH1Ca1AFDoXYQer7L61n/OXM0/G2r.z1zdt889U3bBZqXjhEs0RBe', NULL, '2021-05-24 04:28:17', '2021-05-24 04:28:17'),
('0ebbe935-47ac-4c5e-b551-ff4c839fa8c4', 'Mohamad Firdaus Bin Hamidun', 'mohamadfirdaus@jtm.gov.my', NULL, '$2y$10$UZWtfUU1snpi3kh65rCZ6.nqZ4UU1M7XgR/e9bb8VIiUWKcbosZE.', NULL, '2021-05-24 04:31:17', '2021-05-24 04:31:17'),
('118ce597-9df8-4d1a-930a-cd9632cd8874', 'Nor Syuhadah Binti Zulkiple', 'norsyuhadah@jtm.gov.my', NULL, '$2y$10$z9TZ2QnhQmEFSA5JrClIvOrAUoU99CopaCSD8S5AojHNywxXbwRl6', NULL, '2021-05-24 04:40:51', '2021-05-24 04:40:51'),
('12e4fa55-a7a4-4f26-b9e8-2d16bdb911a2', 'Abdul Hak Bin Mahat', 'abdulhak@jtm.gov.my', NULL, '$2y$10$RFt.SyW/nZDqQcSFl5v3C.yiYWRs/v4w9BKaEFlgDCCAHUiaMLmsa', NULL, '2021-05-24 02:41:38', '2021-05-24 02:41:38'),
('1326d3f5-aef6-4cee-90ab-4962b6469d8a', 'Muhammad Faqrul Razi Bin Hishamudin', 'faqrulrazi@jtm.gov.my', NULL, '$2y$10$MRIyEQ4JmnCeC7MqcafHmOcsD9ibNsNN3i.vL/08k.8A1roBDiZ36', NULL, '2021-05-24 04:21:06', '2021-05-24 04:21:06'),
('141d605c-7f69-42b3-bd64-651836604ed8', 'Siti Noridayu Binti Mustafar', 'sitinoridayu@jtm.gov.my', NULL, '$2y$10$Dp71zQu.bLXkVV3jBNivY.pTtxPmkFbox910T.0siG9IfMKnPx6xa', NULL, '2021-05-24 04:46:21', '2021-05-24 04:46:21'),
('14be58e4-8d68-47c6-aabc-176e580a49aa', 'Muhammad Nur Zulfadhli Bin Abd Rahim', 'mn.zulfadhli@jtm.gov.my', NULL, '$2y$10$XQvHnv5Ex5XsOKis2mTOl.zwL3wSdRCK8RmbHTkC2xk7n7B.95WHK', NULL, '2021-05-24 04:30:32', '2021-05-24 04:30:32'),
('19903b25-1b1a-4dbb-bc44-a059409c4c59', 'Khairul Izwan Bin Mazlan', 'khairulizwan@jtm.gov.my', NULL, '$2y$10$ki9nPvBnPhG9Y3pUKcLX3OQp//VEj9GwGGpzFMqtUUt1ZfSALWhwe', NULL, '2021-05-24 04:25:51', '2021-05-24 04:25:51'),
('2177b4a6-e990-477c-8206-d037acc06140', 'Mohd Saimi Bin Md Yatim', 'mohdsaimi@jtm.gov.my', NULL, '$2y$10$JL/TwAAb0CE4/Marvg2vIubW1Usk5nVAib2XFxJOTq4JWl4qiW.Xy', NULL, '2021-05-24 04:34:47', '2021-05-24 04:34:47'),
('21dfe240-4aef-40ab-9d34-cbd3300e90ea', 'Fazidah Binti Mohamad Sabidin', 'fazidah@jtm.gov.my', NULL, '$2y$10$xKLTf/Cue3n7Rx.Lvv.L4.NCZQawniihvBrQJS/r1pkL5H6q1uNDC', NULL, '2021-05-24 04:21:33', '2021-05-24 04:21:33'),
('256223ee-291e-4152-bc27-660a9822e61b', 'Mohamed Helmi Bin Mohamed Aris', 'mohdhelmi@jtm.gov.my', NULL, '$2y$10$kjP6yN2znlWgGsTm0H280uuUcpXEq5xyc8W8eVd0Ku8ZRl3aHcEvm', NULL, '2021-05-24 04:32:20', '2021-05-24 04:32:20'),
('27ac85bb-a81c-4854-8315-f2903fe22e35', 'Mohd Hairudin Bin Hassan@Ng Kim Fook', 'hairudin@jtm.gov.my', NULL, '$2y$10$qEWhqip5KJ7BFh47aMHpN.hlTTbCsKzUs.ZWDD28Q1BV/S7pV.t9G', NULL, '2021-05-24 04:22:00', '2021-05-24 04:22:00'),
('27eb344d-8b35-4ff7-8fb2-ff3cfe717165', 'Amar Shah Bin Omar', 'amarshah@jtm.gov.my', NULL, '$2y$10$BkgaQL0Q.vChktNLLOrFl.EEr6/E.AwldPkv6ocGNVH/MYnVrol5K', NULL, '2021-05-24 02:44:38', '2021-05-24 02:44:38'),
('2a6eebab-09d8-4476-8671-edb106921a16', 'Muhammad Jefri Bin Ibrahim', 'm.jefri@jtm.gov.my', NULL, '$2y$10$lsm/HPgNMzql0g40iQNidOdLmcAdP2QlRXStyqq5zaKOO/NwGQzKu', NULL, '2021-05-24 04:26:48', '2021-05-24 04:26:48'),
('307bec40-f5ef-4f1d-ad66-98395a840ca1', 'Ainon Binti Abdullah', 'ainon.abdullah@jtm.gov.my', NULL, '$2y$10$eWTAk1BFhKKu4wNw.Ck.vudO4cybp5X98A.GRxYkPM789iNlCVHY.', NULL, '2021-05-24 02:43:28', '2021-05-24 02:43:28'),
('36147f64-50ef-4ad0-a751-32b14139c4e6', 'Mohamad Azli Bin Ibrahim', 'mohamadazli@jtm.gov.my', NULL, '$2y$10$J.Pxov/nEBrw6i4CXsHa2eZMyucVQyr7LiLSBVoQUOEBkJfkw5WGO', NULL, '2021-05-24 04:30:59', '2021-05-24 04:30:59'),
('3a3a0994-1d34-4543-9ba7-ce5bdd903f7b', 'Husna Rawaida Binti Hedzir', 'husnarawaida@jtm.gov.my', NULL, '$2y$10$vfH6DzB4SXXv2BySguat7uciMwHyiR2MF7Hbe86maCVONYd.hEOGe', NULL, '2021-05-24 04:24:09', '2021-05-24 04:24:09'),
('3bab8540-1d8c-4e98-b8aa-57edf9672a9b', 'Mohammad Riduan Bin Hassan', 'mohammadriduan@jtm.gov.my', NULL, '$2y$10$CtHpbVl0sgjgwwx2JXBaSO/Adjrga.0/ChSqb.upHq5XkUcThJaou', NULL, '2021-05-24 04:31:51', '2021-05-24 04:31:51'),
('41f052e7-4d69-4a7b-87e6-726eb94ddb5f', 'Nornilam Binti Ismail', 'nornilam@jtm.gov.my', NULL, '$2y$10$IMJ5hcAoVtaEbSBXDQYJ7ehhcpvUoZgqvP6cb.IbmxTvnur9rZJT2', NULL, '2021-05-24 04:40:08', '2021-05-24 04:40:08'),
('4b0ebf06-df19-42f7-a55c-574521d73464', 'Mohd Yassir Bin Ali', 'yassir@jtm.gov.my', NULL, '$2y$10$TvKw9/ChCAhlOoLyeIk61.AzsrUFGg7Fqrauux9337WjkCeG1wNj6', NULL, '2021-05-24 04:49:47', '2021-05-24 04:49:47'),
('4fbcf8b7-f41f-4feb-b809-44c0616168b9', 'Mohamad Fairuz Bin Ya\'ccob', 'mfairuzy@jtm.gov.my', NULL, '$2y$10$1yft3YcJOPb/bqHQlbQKT.c8A69/8diigedfaWgwoOeNc/1TNWQKK', NULL, '2021-05-24 04:28:38', '2021-05-24 04:28:38'),
('5140838a-cc51-48fb-84a4-107684822e86', 'Mazlan Bin Shaharudin', 'mazlanshaharudin@jtm.gov.my', NULL, '$2y$10$5lKu1zaviwkifqnyr6Fr2.N40Qb81KevDj8Ajkc0NQWSRaMxmIWBe', NULL, '2021-05-24 04:27:14', '2021-05-24 04:27:14'),
('530cd2b0-1ecf-40a3-a2b6-59fa63579c6b', 'Zainizam Bin Yusof', 'zainizam@jtm.gov.my', NULL, '$2y$10$wvg/3bi6UPmyMYbV59UkfuTwxZw6h3EpU8BOkM3LSq9/7HQq/3bWW', NULL, '2021-05-24 04:50:34', '2021-05-24 04:50:34'),
('5ae34a3b-4141-43e0-bb62-c302485f0266', 'Suhaimi Bin Kasran', 'suhaimi.kasran@jtm.gov.my', NULL, '$2y$10$Kw8OVmAMVLR/G10L7/NCheUsyeZOEs7Jc4vfVRKJjrzQi.YUkYMbe', NULL, '2021-05-24 04:47:07', '2021-05-24 04:47:07'),
('5f8ad32f-7ff9-4376-95f5-efbd5e6326c2', 'Zakaria bin Hamzah', 'zakariahamzah@jtm.gov.my', NULL, '$2y$10$ByNEoHpNpwHItUlhDBP8tefBQRc/RoHSMqXZmbnHZXXngoIgRJ41u', NULL, '2021-05-24 04:51:27', '2021-05-24 04:51:27'),
('62979bd6-363b-46b1-8afe-e308b584f1e9', 'Nor Faridah Binti Khamis', 'norfaridah@jtm.gov.my', NULL, '$2y$10$SbCxqHQGpu1zo1ub5x2a2epyJEtaafo0ZGLUR8ybq9b9mOek1DmFi', NULL, '2021-05-24 04:38:51', '2021-05-24 04:38:51'),
('641a4c18-6417-464c-a00d-e67cbeafa9f1', 'Teo Huey Ing', 'teohueying@jtm.gov.my', NULL, '$2y$10$a3rj.Qxa5zYNCYnS5Noi.uScBeiLT0745s16E9O0vb7KGA7UPaIca', NULL, '2021-05-24 04:48:04', '2021-05-24 04:48:04'),
('66772bc2-31cc-4c9e-9d87-3b6a63e540a6', 'Ilyani Amrina Binti Mohamed', 'ilyani.a@jtm.gov.my', NULL, '$2y$10$LKtE.I//sWxFcHUKWNgfVeOZAPOTmsuqhAUfdejLTT48B8dheKsbC', NULL, '2021-05-24 04:24:57', '2021-05-24 04:24:57'),
('675b378e-fb7e-4d1d-80f0-2f1b6fd1c6e1', 'Azilah Bt Harun', 'azilah.h@jtm.gov.my', NULL, '$2y$10$ls.8gU76K6PzUE4TyM6BbOUgDcWTkb7rfObbtBTNTR/EHVf/B9f1u', NULL, '2021-05-24 02:46:50', '2021-05-24 02:46:50'),
('6c647ef2-7d3f-4220-bb49-b136af3a4498', 'Sanjay A/L Vengatravana', 'sanjay@jtm.gov.my', NULL, '$2y$10$UCKqBh/L250F.qu7SKeLuO3P9hHRKsdxQFtGFhJMpth/tVn/W9jBO', NULL, '2021-05-24 04:44:39', '2021-05-24 04:44:39'),
('6e63278a-0485-460f-b482-63cb1b91a25c', 'Hapisah Binti Hanapi', 'hapisah@jtm.gov.my', NULL, '$2y$10$kewI3WrZ0QEBu8JfwZ9Dhe4KywUtjW0VzEJpIIPNchjQDG71P7u6.', NULL, '2021-05-24 04:23:16', '2021-05-24 04:23:16'),
('6eca0c54-7890-4d7a-a4e1-f635f7b266bb', 'Nor Irawati Binti Md. Sol', 'norirawati@jtm.gov.my', NULL, '$2y$10$yCRqtBXlnGLnnOuBUZUsM.ICHf4p5SA4pBl8BtLBFBFRBZw/A7if6', NULL, '2021-05-24 04:39:11', '2021-05-24 04:39:11'),
('76179323-eed3-472f-b77f-241a487b04d6', 'Mohd Shafry bin Salam', 'mohdshafry@jtm.gov.my', NULL, '$2y$10$hI/B6B3hfbY0HvAF0s9xwOPkmltNbAwzvxJj/U8o/pe5qwGXbXPN.', NULL, '2021-05-24 04:36:00', '2021-05-24 04:36:00'),
('77be8577-e964-4f3d-81c7-10977289de59', 'Wan Mazlifah Binti Wan Pin', 'wanmazlifah@jtm.gov.my', NULL, '$2y$10$s/RC3XXPfWww2TNwL1i4bOtJJFEBIGyhu7pakKY6zK8prhS5tUJfC', NULL, '2021-05-24 04:48:41', '2021-05-24 04:48:41'),
('88d4b084-aae1-4cbe-b20f-51d66e142913', 'Haizan Binti Hussein', 'haizan@jtm.gov.my', NULL, '$2y$10$vO9ElMzaiZ5NrQrt7BZPouBJlydrw1IzwxpU1kw.tDNvsYHTn60LO', NULL, '2021-05-24 04:22:27', '2021-05-24 04:22:27'),
('89a18567-3960-4f81-9e51-3d298a26ebcd', 'Hayati Binti Md Aris', 'hayati.aris@jtm.gov.my', NULL, '$2y$10$n5H83hE8gHtoXBBiEw53h.qmmqoj80oVWCwYeqxkHXzITqgt76hJO', NULL, '2021-05-24 04:23:39', '2021-05-24 04:23:39'),
('8a4d2b02-c6a7-439e-8ec4-b4c75c58bb00', 'Azleen Binti Mat Lazih', 'azleen@jtm.gov.my', NULL, '$2y$10$u2YHVXyjEcSf7Tlcp.Yf3uiBVW3n9IfK5GobO1auB5uO8uf9C2XCK', NULL, '2021-05-24 02:55:58', '2021-05-24 02:55:58'),
('8a8c74d6-8ee1-472e-a012-a807d0d928bb', 'Halimatul Saa\'diah Binti Mohd Zainon', 'halimatul@jtm.gov.my', NULL, '$2y$10$jtDw5uykzBJGHdyLkVlOzezKXCN8JnfxR20dKicJTmt50xgPHMGcK', NULL, '2021-05-24 04:22:50', '2021-05-24 04:22:50'),
('8a900d8f-f7c2-4c6d-bd20-c83c93066dd5', 'Rohani Binti Yusof', 'rohani.yusof@jtm.gov.my', NULL, '$2y$10$dnQfPShuE.v0.CFMb1EU3eOaAiG3dsmArPOkWebxRaiAcS9Er7B8i', NULL, '2021-05-24 04:43:29', '2021-05-24 04:43:29'),
('8de333ec-09f1-4b6d-b551-0ccc52496d9e', 'Azlina Binti Amir', 'azlina.amir@jtm.gov.my', NULL, '$2y$10$VWc5F61wg/jrRZVzDl0QuO.BtfdpiYNz.WjZJmTWowdCfRP6QxR8i', NULL, '2021-05-24 02:56:23', '2021-05-24 02:56:23'),
('937d91ea-b393-4323-ad68-9c02fbc79114', 'Zaliha Bt Awal', 'zaliha@jtm.gov.my', NULL, '$2y$10$vI0Vl8gbnCR.g9H1Mk.QRObVkH7NLa16dQr40LW/Stf5U13dS/HEK', NULL, '2021-05-24 04:51:46', '2021-05-24 04:51:46'),
('95eea01f-5e4d-4ce4-8cc7-6280997f390e', 'Mohd Nizam Bin Mohd Ngadian', 'mohdnizam@jtm.gov.my', NULL, '$2y$10$d2WOO4Glp4cN3ORfDL5VYe1.KgNUmMoOQXAETaq.TFCsIYoJt/tTu', NULL, '2021-05-24 04:32:48', '2021-05-24 04:32:48'),
('987159db-a3b1-4614-8470-27aff5ffa3b6', 'Zamri Bin Zainudin', 'zamri@jtm.gov.my', NULL, '$2y$10$YKDog3B2xJVTsmv9Vns1uezmdVvkWo0BXxEU2WvtgpfC9dzLUWP1q', NULL, '2021-05-24 04:52:44', '2021-05-24 04:52:44'),
('a13190ed-de4c-446a-b1aa-a225fe68778c', 'Munir Syafwan Bin Mohamed', 'munirsyafwan@jtm.gov.my', NULL, '$2y$10$EFd.dw5RcdKC6fuecf0gwO7NVCs6JOdWCbcnlppiGfDdyy.fVbNga', NULL, '2021-05-24 04:36:31', '2021-05-24 04:36:31'),
('aa2553ec-d2b7-4baf-a889-cd76d50aa19c', 'Noor Haniwaty Binti Md Jasin', 'noorhaniwaty@jtm.gov.my', NULL, '$2y$10$wzbdBaiwmXjUZAbEOxNlM.OwMXDOtiZtytn1BZz.bueK1niLyw/7W', NULL, '2021-05-24 04:37:57', '2021-05-24 04:37:57'),
('ab31aa4c-e12c-4645-80d6-6bd8165445f0', 'Nur Aisyah Binti Abdul Aziz', 'nuraisyah@jtm.gov.my', NULL, '$2y$10$eXsKruoYOKk5g9JBXXL23uG1LVWClLjEAPx2d4vW2ZP2ptOqcvfyy', NULL, '2021-05-24 04:42:28', '2021-05-24 04:42:28'),
('af0decc6-ee2e-4a5b-b0ec-f0239f4468d9', 'Wan Nusmadi Bin Leman', 'wan_nusmadi@jtm.gov.my', NULL, '$2y$10$Sg3cSZaBe2knOBfQC50H9Ozbn2XA0afTzD9CEpvi1zkIWOHNbYZA6', NULL, '2021-05-24 04:49:17', '2021-05-24 04:49:17'),
('b26794b1-f51b-4a15-a1c5-be895f9b6b44', 'Kalaiselvan A/L Muniyandy', 'kalaiselvan@jtm.gov.my', NULL, '$2y$10$jAurginvqh7tVFHfQq89u.O4UM3YAWuUMLT97SbyRFauCQtaSIlWO', NULL, '2021-05-24 04:25:22', '2021-05-24 04:25:22'),
('b356db7e-c533-4b76-9c75-afc31b9b76ae', 'Azurin Ayu Binti Kamarulzaman', 'azurinayu@jtm.gov.my', NULL, '$2y$10$tqRvqmSdEzYUNs5atGQpnuQ/SIyTCBRXi4WFVDxkYwjZg6eMcU2rK', NULL, '2021-05-24 04:20:17', '2021-05-24 04:20:17'),
('b7c93d63-5495-4805-aec2-783162dccc18', 'Siti Anizah Binti Ibrahim', 'sitianizah@jtm.gov.my', NULL, '$2y$10$1N41Th1oCFMw8XNQPhgM5OC80mOMj9dRfWl4Qt71rVeNwKlVzKgdG', NULL, '2021-05-24 04:45:38', '2021-05-24 04:45:38'),
('ba3c4a93-8127-450a-9b3d-dd3fc66eec4f', 'Sabri Bin Abdul Rahman', 'sabri@jtm.gov.my', NULL, '$2y$10$npF9ep3rPbVyfAbqHfUcsuQAEcgHKfek5H5JZKcI67Pj.HUCqWjiu', NULL, '2021-05-24 04:44:18', '2021-05-24 04:44:18'),
('c2bb088d-1511-42de-b3e7-f8d1762b68f6', 'Zamri Bin Ahmad', 'zamri.ahmad@jtm.gov.my', NULL, '$2y$10$syvomXE9KpPSu7AfoWZOzu5.gcLQGFBGKgzz6Q4V/6O3fXjVOF7Vu', NULL, '2021-05-24 04:52:16', '2021-05-24 04:52:16'),
('c8027eac-3876-49d3-a16d-8c33d7e7428f', 'Azhar Bin Ahmad Zaki', 'azharzaki@jtm.gov.my', NULL, '$2y$10$qE/h1MEeINm89o1ybgoFbuAf2IUkJ2hCVheKoTuI0HhGt8tnZ5MP6', NULL, '2021-05-24 02:46:28', '2021-05-24 02:46:28'),
('c8bef4ce-9d4d-478b-995e-eb755b8377cb', 'Khairul Rijal Bin Wagiman', 'khairul_rijal@jtm.gov.my', NULL, '$2y$10$k2Fnyhf1UMFndWnMS9LHpOkuQvXuuHlWDBlxpL7Tlp5Xq5L/Rosny', NULL, '2021-05-24 04:26:09', '2021-05-24 04:26:09'),
('cb8fc2e0-88c4-4a56-b51d-37763c184a80', 'Mohd Noorlizam Bin Md Ali', 'mohdnoorlizam@jtm.gov.my', NULL, '$2y$10$5TPwTt594IimmQJkkytHyuDAC3xR/Sn4MUe1GV7UwO1cskxHij1aC', NULL, '2021-05-21 07:37:57', '2021-05-19 07:37:57'),
('d347a982-8398-4f68-9b1c-9120e7853858', 'Suhana Binti A Ghani', 'suhana.a@jtm.gov.my', NULL, '$2y$10$ahcwlw7VDqKPgRh8LSrzXumzH8EqJsFc5XAZgSN5XeYCjLDgRJhCW', NULL, '2021-05-24 04:47:42', '2021-05-24 04:47:42'),
('d5af3f36-c7cc-47c5-be33-e1fb5b9a6a52', 'Mohd Faizal Bin Md. Rosli', 'faizalrosli@jtm.gov.my', NULL, '$2y$10$BIqtwfmOErz.Z2lrPxPenuJ5IRTHL9.X3Db4LSIZkrTAodSAozgNy', NULL, '2021-05-24 04:20:45', '2021-05-24 04:20:45'),
('d6aeb1e0-4745-4517-bbe3-28751736c86b', 'Noor Fazidah Binti Husin', 'noorfazidah@jtm.gov.my', NULL, '$2y$10$HQt35XnMjfrnajbdpFY6de1R3/7aT0audhizU0YZU7xgBXDUya3eu', NULL, '2021-05-24 04:37:26', '2021-05-24 04:37:26'),
('d9f07c27-e703-4a79-bd49-de55033c0d7f', 'Huzaifah Bte Hasan', 'huzaifah@jtm.gov.my', NULL, '$2y$10$j0DMc/FFmLVnNmHqDwkdbeFryx0ZJkLJbg2IRwOz/.g7Hp491WP7a', NULL, '2021-05-24 04:24:28', '2021-05-24 04:24:28'),
('da6c64eb-cab8-4182-9c0b-27a5a01ea39d', 'Zulkafli \'Ain Bin Baharum', 'zulkafliain@jtm.gov.my', NULL, '$2y$10$a1BQR4YS4sMYoZBk07NWFeGXNmoZuSTTAYrU.3wMkjmENCyP8BUmm', NULL, '2021-05-24 04:53:07', '2021-05-24 04:53:07'),
('dbcadecd-40c5-4c8d-8408-ab276d9676fd', 'Ts. Hj. Sabri Bin Zainuddin', 'sabri.z@jtm.gov.my', NULL, '$2y$10$Yc6Fn.uhMDE2lPfBLpYK5O0kas2ToSM0SBXiEXO7YdKK2790x/S7a', NULL, '2021-05-24 04:43:54', '2021-05-24 04:43:54'),
('dcff0177-8b89-441e-b3a5-a9d7c87bc6b8', 'Azman Bin Talib', 'azman.talib@jtm.gov.my', NULL, '$2y$10$3uoN6WnAJ6nEXnQTIrLG8e4tW1rKuGP1CDs2gHIfwTTDK1.7qRC4O', NULL, '2021-05-24 02:56:42', '2021-05-24 02:56:42'),
('e6d4cf89-5e64-4f93-90a8-73e888286ee5', 'Mohd Khairul Azmi Bin Shafian', 'mk.azmi@jtm.gov.my', NULL, '$2y$10$C93dQXAbnfCVzN/vHG.RaefTW0aI15tUBg6bOIROOoukWylrFqkpm', NULL, '2021-05-24 04:29:18', '2021-05-24 04:29:18'),
('e87618ee-fc2e-4d71-b037-f83bd1717f20', 'Norlizah Binti Akob', 'norlizah@jtm.gov.my', NULL, '$2y$10$I42t6.1mS5kghT.2gs1/QeV1jXHjdQUURd8JmK/CA5Mj.m9sY/tDi', NULL, '2021-05-24 04:39:40', '2021-05-24 04:39:40'),
('ecdc8317-29a3-4690-9a98-742b20b88502', 'Siti Nazira Binti Ahmad Nizam', 'sitinazira@jtm.gov.my', NULL, '$2y$10$AZM9.sUvy7NkbzQuBj0bgu0apJ.jZxYniaoW.Zfm9OJ3vq0sdpQkO', NULL, '2021-05-24 04:46:04', '2021-05-24 04:46:04'),
('f113d81e-6609-41a6-9137-c5b056784825', 'Shahril Azli Bin Yahya', 'shahril.azli@jtm.gov.my', NULL, '$2y$10$jGmwKTILWHYVe/B9FBPsMeOjEJPiTkEBdWQmjPeNVCR2CUVUsw40G', NULL, '2021-05-24 04:45:18', '2021-05-24 04:45:18'),
('f4cde4c0-132b-4eed-90c1-dfe8cc6a775e', 'Raja Azman Bin Raja Omar', 'rajaazman@jtm.gov.my', NULL, '$2y$10$w3nIbztsdnAXjqTx99dM1eUT3/R1ASix1X5F.f3LFLqAX6/U6qF0.', NULL, '2021-05-24 04:42:54', '2021-05-24 04:42:54'),
('f76f6768-b4bd-4aab-9a59-92e70131abae', 'Mazlinda Binti Saip', 'mazlinda@jtm.gov.my', NULL, '$2y$10$pDBLRTa0Y.rSWhcM3tEWuebH2K3FX9JgI2C.96KkZnadAsH2lE.qK', NULL, '2021-05-24 04:27:37', '2021-05-24 04:27:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
