-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 06, 2021 lúc 12:21 AM
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin@123.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-09-26 18:17:21'),
(2, 'hiep@123.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-10-04 15:39:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evens`
--

CREATE TABLE `evens` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_day` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Nhóm lập trình'),
(2, 'Nhóm E-Spost'),
(3, 'Nhóm Office'),
(4, 'Nhóm đồ họa'),
(5, 'Nhóm ƯD công nghệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_imgs`
--

CREATE TABLE `slide_imgs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide_imgs`
--

INSERT INTO `slide_imgs` (`id`, `name`, `image`, `note`, `created_at`) VALUES
(1, 'Wellcom Tin Hoc Club', 'img_1.jpg', '', '2021-09-26 18:20:38'),
(2, 'Test Sl ảnh', 'img1.jpg', '', '2021-09-26 18:21:02'),
(3, 'Test Sl ảnh', 'img_1.jpg', '', '2021-09-26 18:23:33'),
(4, 'test_1', 'clb.png', '', '2021-09-28 15:41:46'),
(5, 'test_1', 'clb.png', '', '2021-09-28 15:50:09'),
(6, 'test_3', 'banner game.jpg', '', '2021-09-28 15:53:02'),
(7, 'đồ họa', 'do hoa.jpg', '', '2021-09-28 16:07:04'),
(8, 'lập trình', 'CODE.jpg', '', '2021-09-28 16:09:36'),
(9, 'giáo dục', 'gđ.jpg', '', '2021-09-28 16:21:29');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `birthday`, `email`, `class`, `sex`, `created_at`) VALUES
(1, 'Hoàng Hiệp', '2021-09-08 00:00:00', 'admin@123.com', 'Cntt', 'Nam', '2021-09-26 18:17:21'),
(2, 'Hoàng Hiệp', '2018-07-22 00:00:00', 'hiep@123.com', 'Cntt', 'Nam', '2021-10-04 15:39:19');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `evens`
--
ALTER TABLE `evens`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `evens`
--
ALTER TABLE `evens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `slide_imgs`
--
ALTER TABLE `slide_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `khoa_ngoai` FOREIGN KEY (`email`) REFERENCES `account` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
