-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2022 lúc 05:40 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `x_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `ngay_bl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `comments` (`id`, `noi_dung`, `id_kh`, `id_hh`, `ngay_bl`) VALUES
(1, 'dong ho dep', 1, 1, '2022-09-29 01:18:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `don_gia` int(50) NOT NULL,
  `giam_gia` int(50) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ngay_nhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_loai` int(11) NOT NULL,
  `dac_biet` varchar(255) NOT NULL,
  `so_luot_xem` int(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `products` (`id`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `id_loai`, `dac_biet`, `so_luot_xem`, `mo_ta`) VALUES
(2, 'Iphone 13', 13000, 0, 'iphone13', '2022-10-06 01:29:39', 2, '', 0, ''),
(3, 'Đồng hồ casino', 10000, 0, 'Đồng hồ Thụy Sĩ', '2022-10-06 01:31:26', 1, '', 1, ''),
(4, 'iPhone XS 64GB', 10000, 0, 'iPhone XS 64GB', '2022-10-06 01:33:00', 2, '', 1, ''),
(5, 'SamSung Z-Flip 3', 20000, 0, 'SamSung Z-Flip 3', '2022-10-06 01:33:00', 2, '', 1, ''),
(6, 'HAMILTON JAZZMASTER SKELETON SPIKY-H H42505510', 150000, 0, 'HAMILTON JAZZMASTER SKELETON SPIKY-H H42505510', '2022-10-06 01:34:07', 1, '', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `kich_hoat` tinyint(3) NOT NULL,
  `vai_tro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `customers` (`id`, `ho_ten`, `mat_khau`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES
(1, 'thuan', '123456', 'thuantnph25425@fpt.edu.vn', 'abc', 1, 'khach hang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `categories` (`id`, `ten_loai`) VALUES
(1, 'Đồng hồ'),
(2, 'Điện thoại');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
