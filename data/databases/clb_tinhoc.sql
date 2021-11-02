-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 02, 2021 lúc 11:46 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clb_tinhoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updaet_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `email`, `password`, `role`, `created_at`, `updaet_at`) VALUES
(1, 'admin@123.com', '7904c44d0aa75b87ef6ed71d8dae3004', 1, '2021-09-26 18:17:21', '2021-10-29 15:01:40'),
(2, 'hiep@123.com', 'e10adc3949ba59abbe56e057f20f883e', 14, '2021-10-04 15:39:19', '2021-10-25 17:15:34'),
(3, 'hiepnh@student.apsce.net', '7904c44d0aa75b87ef6ed71d8dae3004', 3, '2021-10-29 09:33:53', '2021-10-29 09:46:43'),
(4, 'dai@gmail.com', '7904c44d0aa75b87ef6ed71d8dae3004', 8, '2021-10-29 10:33:38', '2021-10-29 14:47:10'),
(7, 'giangly@gmail.com', '7904c44d0aa75b87ef6ed71d8dae3004', 4, '2021-10-29 13:27:20', '2021-10-29 15:55:30'),
(8, 'duy@gmail.com', '7904c44d0aa75b87ef6ed71d8dae3004', 5, '2021-10-29 13:28:24', '2021-10-29 13:28:24'),
(9, 'quoc@gmail.com', '7904c44d0aa75b87ef6ed71d8dae3004', 9, '2021-10-29 13:29:24', '2021-10-29 13:29:24'),
(10, 'thang@gmail.com', '7904c44d0aa75b87ef6ed71d8dae3004', 7, '2021-10-29 13:30:13', '2021-10-29 13:30:13'),
(11, 'taithieu@gmail.com', '7904c44d0aa75b87ef6ed71d8dae3004', 2, '2021-10-29 13:32:30', '2021-10-29 13:32:30'),
(12, 'thuminh@gmail.com', '7904c44d0aa75b87ef6ed71d8dae3004', 2, '2021-10-29 13:37:36', '2021-10-29 13:37:36'),
(13, 'sfgsgsfg@dfsdg.com', '7904c44d0aa75b87ef6ed71d8dae3004', 12, '2021-10-29 14:49:25', '2021-10-29 14:49:25'),
(14, 'hiep@12366.com', '7904c44d0aa75b87ef6ed71d8dae3004', 14, '2021-10-29 15:28:30', '2021-10-29 15:45:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `method`, `link`, `logo`, `created_at`, `update_at`) VALUES
(1, 'Số điện thoại', '0384191013', 'phone.png', '2021-10-28 17:11:24', '2021-10-28 17:11:24'),
(2, 'Email', 'clbtinhoc@gmail.com', 'email - Copy.png', '2021-10-28 17:15:23', '2021-10-28 17:15:23'),
(3, 'Facebook', 'CLB Tin Học', 'fb_bg.png', '2021-10-28 17:17:10', '2021-11-02 09:44:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evens`
--

CREATE TABLE `evens` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_day` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `evens`
--

INSERT INTO `evens` (`id`, `id_group`, `name`, `description`, `detail`, `file`, `start_day`, `end_date`, `created_at`, `update_at`) VALUES
(7, 1, 'Sự kiện 1', 'Đây là sự kiện 1', 'Nội dung cho sự kiện 1', 'bg_4.jpg', '2021-10-27', '2021-11-27', '2021-10-27 06:59:35', '2021-10-27 06:59:35'),
(8, 2, 'Sự kiện 2', 'Đây là sự kiện 2', 'Nộ dung cho sự kiện 2', 'bg_5.jpg', '2021-10-27', '2021-11-17', '2021-10-27 07:00:38', '2021-10-27 07:00:38'),
(9, 1, 'Sự kiện 3', 'Đây là sự kiện 3', 'Nội dụng của sự kiện 3', 'Câu lạc bộ Tin học.png', '2021-10-21', '2021-11-11', '2021-10-27 08:18:12', '2021-10-27 08:18:12'),
(10, 4, 'Sự kiện 4', 'Đây là sự kiện 4', 'Nội dung của sự kiện 4', 'download.jpg', '2021-10-21', '2021-11-04', '2021-10-27 09:01:40', '2021-10-27 09:01:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `generals`
--

CREATE TABLE `generals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `generals`
--

INSERT INTO `generals` (`id`, `name`, `type`, `note`, `file`, `created_at`, `update_at`) VALUES
(1, 'Video giới thiệu thổng quan về câu lạc bộ tin học  ', 'Giới thiệu', 'Video giới thiệu thổng quan về câu lạc bộ tin học nhưng chưa biết nên viết gf vào đây...', 'about_us.mp4', '2021-10-24 15:15:04', '2021-10-28 16:18:26'),
(10, 'test_2', 'Giới thiệu', 'fdsfsfdsfsfsdf', 'IMG_1214.JPG', '2021-10-28 16:15:38', '2021-10-28 16:15:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_leader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `name`, `leader`, `link_contact`, `image_leader`, `created_at`, `update_at`) VALUES
(1, 'Nhóm lập trình', 'Nguyễn Xuân Đại', 'https://www.facebook.com/xuandai06', '147800956_224574469388266_6179349611177568567_n.jpg', '2021-10-19 13:38:03', '2021-10-23 17:04:15'),
(2, 'Nhóm E-Spost', 'Nguyễn Đức Duy', 'https://www.facebook.com/profile.php?id=100011324174359', '62230387_1055206828200113_610020497177968640_n.jpg', '2021-10-19 13:38:03', '2021-10-23 17:04:15'),
(3, 'Nhóm Office', 'Đing Giang Ly', 'https://www.facebook.com/profile.php?id=100009879750090', '128347562_1344561262549853_6888430941931766507_n.jpg', '2021-10-19 13:38:03', '2021-10-23 17:04:15'),
(4, 'Nhóm đồ họa', 'Trần Văn Quốc', 'https://www.facebook.com/quoc.can.ep.zai77', '243176753_1209297956222455_6637271904759919930_n.jpg', '2021-10-19 13:38:03', '2021-10-23 17:04:15'),
(5, 'Nhóm ƯD công nghệ', 'Nguyễn Mạnh Thắng', 'https://www.facebook.com/profile.php?id=100027236598844', '217844636_913728689545009_7345862196968942198_n.jpg', '2021-10-19 13:38:03', '2021-10-23 17:04:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_port` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `likes`
--

INSERT INTO `likes` (`id`, `id_port`, `id_user`, `created_at`, `update_at`) VALUES
(4, 1, 1, '2021-10-31 10:47:00', '2021-10-31 10:47:00'),
(5, 7, 1, '2021-11-02 04:24:27', '2021-11-02 04:24:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `user_create` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `id_topic`, `user_create`, `question`, `note`, `created_at`, `update_at`) VALUES
(1, 2, 1, 'Câu hỏi 1', 'Chi tiết câu hỏi 1', '2021-10-30 13:43:28', '2021-10-30 13:43:28'),
(2, 1, 2, 'Câu hỏi 1 chủ đề 1', 'Chi tiết câu hỏi 1', '2021-10-30 13:44:40', '2021-10-30 13:44:40'),
(3, 4, 2, 'câu hỏi 1  của CĐ 4', 'Chi tiết câu hỏi 1', '2021-10-30 13:52:23', '2021-10-30 13:52:23'),
(4, 1, 2, 'Câu hỏi 2 chủ đề 1', 'Chi tiết câu hỏi 2', '2021-10-30 14:00:31', '2021-10-30 14:00:31'),
(5, 5, 1, 'câu 1 chủ đề 5', 'Chi tiết câu hỏi 1 chủ đề 5', '2021-10-31 09:22:10', '2021-10-31 09:44:11'),
(6, 7, 1, 'Câu hỏi 1 chủ đề 7', 'Chi tiết câu hỏi 1 chủ đề 7', '2021-11-02 04:22:43', '2021-11-02 04:22:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question_topics`
--

CREATE TABLE `question_topics` (
  `id` int(11) NOT NULL,
  `user_create` int(11) NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `question_topics`
--

INSERT INTO `question_topics` (`id`, `user_create`, `topic`, `note`, `created_at`, `update_at`) VALUES
(1, 2, 'Chủ đề 1', 'Đây là miêu tả cho chủ đề 1', '2021-10-30 11:27:20', '2021-10-30 11:27:20'),
(2, 1, 'Chủ đề 2', 'Đây là miêu tả cho chủ đề 2', '2021-10-30 11:30:25', '2021-10-30 11:30:25'),
(3, 1, 'Chủ đề 3', 'Đây là miêu tả cho chủ đề 3', '2021-10-30 12:38:13', '2021-10-30 12:38:13'),
(4, 1, 'Chủ đề 4', 'Đây là miêu tả cho chủ đề 4', '2021-10-30 12:38:23', '2021-10-30 12:38:23'),
(5, 1, 'Chủ đề 5', 'Đây là miêu tả cho chủ đề 5', '2021-10-30 12:38:33', '2021-10-30 12:38:33'),
(6, 1, 'Chủ đề 6', 'Đây là miêu tả cho chủ đề 6', '2021-10-30 12:38:46', '2021-10-30 12:38:46'),
(7, 1, 'Chủ đề 7', 'Đây là miêu tả cho chủ đề 7', '2021-10-30 12:43:50', '2021-10-30 12:43:50'),
(9, 1, 'Chủ đề 9', 'Đây là miêu tả cho chủ đề 9', '2021-10-31 09:04:09', '2021-10-31 09:13:52'),
(10, 1, '\'abcdfdf', '\'áhddfdfdfdfd', '2021-11-02 09:28:23', '2021-11-02 09:28:23'),
(12, 1, '...dfsdfsdfsdfdf', 'sdfsdfsdf', '2021-11-02 09:40:54', '2021-11-02 09:40:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `replys`
--

CREATE TABLE `replys` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `user_create` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_like` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `replys`
--

INSERT INTO `replys` (`id`, `id_question`, `user_create`, `answer`, `file`, `_like`, `created_at`, `update_at`) VALUES
(1, 1, 2, 'bnbbnbnmbnmbnmbnmbnmm,bnbnbnnbnbnnbnbnbn', NULL, 1, '2021-10-30 14:46:47', '2021-10-31 10:47:00'),
(4, 5, 1, 'câu TL 1 của câu hỏi 1 CĐ 5', NULL, 0, '2021-11-02 03:55:10', '2021-11-02 03:55:10'),
(5, 3, 1, 'Câu trả lời 1 chủ đề 4', NULL, 0, '2021-11-02 03:56:07', '2021-11-02 03:56:07'),
(6, 4, 1, 'TL câu 2 chủ đề 1', NULL, 0, '2021-11-02 04:02:42', '2021-11-02 04:02:42'),
(7, 6, 1, 'TL câu hỏi 1 chủ đề 7', '137bcc54b12879762039.jpg', 1, '2021-11-02 04:24:22', '2021-11-02 04:24:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `update_at`) VALUES
(1, 'Admin', '2021-10-25 17:07:12', '2021-10-25 17:13:25'),
(2, 'Giảng viên cố vấn', '2021-10-25 17:07:12', '2021-10-25 17:13:37'),
(3, 'Chủ nhiệm', '2021-10-25 17:07:12', '2021-10-25 17:13:45'),
(4, 'Phó chủ nhiệm', '2021-10-25 17:07:12', '2021-10-25 17:13:54'),
(5, 'Trưởng nhóm Espost', '2021-10-25 17:07:12', '2021-10-29 16:15:19'),
(6, 'Trưởng nhóm Office', '2021-10-25 17:07:12', '2021-10-25 17:08:04'),
(7, 'Trưởng nhóm Ứng dụng công nghệ trong giáo dục', '2021-10-25 17:07:12', '2021-10-25 17:08:08'),
(8, 'Trưởng nhóm Lập trình', '2021-10-25 17:07:12', '2021-10-25 17:11:04'),
(9, 'Trưởng nhóm Đồ họa', '2021-10-25 17:07:12', '2021-10-25 17:14:01'),
(10, 'Cựu chủ nhiệm', '2021-10-25 17:07:12', '2021-10-25 17:11:22'),
(11, 'Cựu phó chủ nhiệm', '2021-10-25 17:07:12', '2021-10-25 17:14:24'),
(12, 'Thành viên', '2021-10-25 17:07:12', '2021-10-25 17:14:39'),
(13, 'Cựu thành viên', '2021-10-25 17:09:01', '2021-10-25 17:14:50'),
(14, 'Khách', '2021-10-25 17:15:00', '2021-10-25 17:15:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_imgs`
--

CREATE TABLE `slide_imgs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide_imgs`
--

INSERT INTO `slide_imgs` (`id`, `name`, `image`, `note`, `created_at`, `update_at`) VALUES
(1, 'Wellcom Tin Hoc Club', 'img_1.jpg', '', '2021-09-26 18:20:38', '2021-10-23 17:04:42'),
(7, 'đồ họa', 'do hoa.jpg', '', '2021-09-28 16:07:04', '2021-10-23 17:04:42'),
(8, 'lập trình', 'CODE.jpg', '', '2021-09-28 16:09:36', '2021-10-23 17:04:42'),
(9, 'giáo dục', 'gđ.jpg', '', '2021-09-28 16:21:29', '2021-10-23 17:04:42'),
(10, 'office', 'TEAM office.jpg', 'chưa biết viết gì', '2021-10-23 07:54:43', '2021-10-23 17:04:42'),
(11, 'bannner game', 'banner game.jpg', 'ko biết nói gì', '2021-10-23 07:56:04', '2021-10-23 17:04:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `birthday`, `email`, `class`, `sex`, `image`, `created_at`, `update_at`) VALUES
(1, 'Hoàng Hiệp', '2021-09-08 00:00:00', 'admin@123.com', 'Cntt', 'Nam', '', '2021-09-26 18:17:21', '2021-10-23 17:01:24'),
(2, 'Hoàng Hiệp', '2018-07-22 00:00:00', 'hiep@123.com', 'Cntt', 'Nam', '', '2021-10-04 15:39:19', '2021-10-23 17:01:24'),
(3, 'Nguyễn Hoàng Hiệp', '2001-01-06 00:00:00', 'hiepnh@student.apsce.net', 'Công nghệ thông tin', 'Nam', '—Pngtree—hacker coding with a keyboard_5426760.png', '2021-10-29 09:33:53', '2021-10-29 15:54:37'),
(4, 'Nguyễn Xuân Đại', '2021-10-07 00:00:00', 'dai@gmail.com', 'Công nghệ thông tin', 'Nam', '147800956_224574469388266_6179349611177568567_n.jpg', '2021-10-29 10:33:38', '2021-10-29 14:54:14'),
(7, 'Đinh Giang Ly', '2000-02-17 00:00:00', 'giangly@gmail.com', 'Công nghệ thông tin', 'Nữ', '128347562_1344561262549853_6888430941931766507_n.jpg', '2021-10-29 13:27:20', '2021-10-29 13:27:20'),
(8, 'Nguyễn Đức Duy', '2001-02-13 00:00:00', 'duy@gmail.com', 'Cntt', 'Nam', '62230387_1055206828200113_610020497177968640_n.jpg', '2021-10-29 13:28:24', '2021-10-29 14:45:38'),
(9, 'Trần Văn Quốc', '2021-10-07 00:00:00', 'quoc@gmail.com', 'Công nghệ thông tin', 'Nam', '243176753_1209297956222455_6637271904759919930_n.jpg', '2021-10-29 13:29:24', '2021-10-29 13:29:24'),
(10, 'Nguyễn Mạnh Thắng', '2021-10-22 00:00:00', 'thang@gmail.com', 'Công nghệ thông tin', 'Nam', '217844636_913728689545009_7345862196968942198_n.jpg', '2021-10-29 13:30:13', '2021-10-29 13:30:13'),
(11, 'Thiều Thị Tài', '2021-10-07 00:00:00', 'taithieu@gmail.com', 'Công nghệ thông tin', 'Nữ', '242036983_1854809734689915_1347346226621753888_n.jpg', '2021-10-29 13:32:30', '2021-10-29 13:32:30'),
(12, 'Vũ Thị Thu Minh', '2021-10-06 00:00:00', 'thuminh@gmail.com', 'Kỹ thuật - Công nghệ', 'Nữ', '45688895_2185778188101341_4882854654175608832_n.jpg', '2021-10-29 13:37:36', '2021-10-29 13:37:36'),
(13, 'sdgfgsfgs', '2021-10-08 00:00:00', 'sfgsgsfg@dfsdg.com', 'dfsdfdf', 'Nam', NULL, '2021-10-29 14:49:25', '2021-10-29 14:49:25'),
(14, 'Hoàng Hiệp', '2021-10-08 00:00:00', 'hiep@12366.com', 'dfsdfdf', 'Nam', NULL, '2021-10-29 15:28:30', '2021-10-29 15:28:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role` (`role`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `evens`
--
ALTER TABLE `evens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `even_foreign` (`id_group`);

--
-- Chỉ mục cho bảng `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_us` (`id_user`),
  ADD KEY `fk_post` (`id_port`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_topic` (`id_topic`);

--
-- Chỉ mục cho bảng `question_topics`
--
ALTER TABLE `question_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_create`);

--
-- Chỉ mục cho bảng `replys`
--
ALTER TABLE `replys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_question` (`id_question`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide_imgs`
--
ALTER TABLE `slide_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `evens`
--
ALTER TABLE `evens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `generals`
--
ALTER TABLE `generals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `question_topics`
--
ALTER TABLE `question_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `replys`
--
ALTER TABLE `replys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `slide_imgs`
--
ALTER TABLE `slide_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `role` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `evens`
--
ALTER TABLE `evens`
  ADD CONSTRAINT `even_foreign` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `fk_post` FOREIGN KEY (`id_port`) REFERENCES `replys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_us` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_topic` FOREIGN KEY (`id_topic`) REFERENCES `question_topics` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `question_topics`
--
ALTER TABLE `question_topics`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_create`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `replys`
--
ALTER TABLE `replys`
  ADD CONSTRAINT `fk_question` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `khoa_ngoai` FOREIGN KEY (`email`) REFERENCES `account` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
