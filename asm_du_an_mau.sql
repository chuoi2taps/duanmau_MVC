-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2022 lúc 06:10 AM
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
-- Cơ sở dữ liệu: `asm_du_an_mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_product`, `price`, `quantity`, `id_customer`, `created_time`) VALUES
(1, 2, 2700000, 1, 1, '2022-10-18 22:39:50'),
(2, 3, 10000, 2, 1, '2022-10-18 22:39:50'),
(3, 5, 2700000, 2, 2, '2022-10-19 01:18:37'),
(4, 10, 1699000, 1, 1, '2022-10-19 01:19:13'),
(11, 3, 10000, 1, 3, '2022-10-19 11:59:06'),
(12, 3, 10000, 1, 3, '2022-10-19 21:37:18'),
(13, 16, 32990000, 1, 3, '2022-10-19 21:37:32'),
(14, 3, 10000, 1, 18, '2022-10-19 21:45:12'),
(15, 7, 20000, 1, 3, '2022-10-20 00:57:30'),
(16, 1, 25000000, 3, 18, '2022-10-21 23:36:32'),
(17, 2, 27000000, 3, 3, '2022-10-23 14:42:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_cate`, `ten_loai`) VALUES
(1, 'Đồng hồ'),
(2, 'Điện thoại'),
(4, 'Laptop'),
(5, 'Table'),
(6, 'Phụ kiện'),
(7, 'Smartwatch'),
(9, 'PC'),
(10, 'Máy cũ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `ngay_bl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `noi_dung`, `id_kh`, `ten_kh`, `id_hh`, `ngay_bl`) VALUES
(15, 'nhon', 3, '', 3, '2022-10-17 09:13:45'),
(17, 'xin', 18, '', 6, '2022-10-17 09:31:24'),
(18, 'xin nhé', 18, '', 9, '2022-10-17 09:53:57'),
(19, 'cho mình xin với', 18, '', 9, '2022-10-17 09:55:17'),
(29, 'cho mình đi', 18, '', 10, '2022-10-17 10:41:48'),
(30, 'xin với', 18, '', 10, '2022-10-17 10:42:35'),
(31, 'cho mình đi', 18, 'Nguyễn Tiến Tùng', 6, '2022-10-19 15:17:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `css`
--

CREATE TABLE `css` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `css`
--

INSERT INTO `css` (`id`, `title`, `file_name`) VALUES
(1, 'Thêm danh mục', 'add_product.css'),
(2, 'Admin', 'admin.css'),
(3, 'Giỏ hàng', 'cart.css'),
(4, 'Sản phẩm', 'category.css'),
(5, 'Liên hệ', 'contact.css'),
(6, 'Chi tiết sản phẩm', 'detail.css'),
(7, 'Quản lý danh mục', 'list.css'),
(8, 'Đăng nhập', 'login.css'),
(9, 'Quản lý sản phẩm', 'product.css'),
(10, 'Đăng ký', 'sign_up.css'),
(11, 'Trang chủ', 'style.css'),
(12, 'Danh mục', 'danhmuc.css'),
(13, 'Profile', 'edit.css');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `full_name` text NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL DEFAULT 'user.png',
  `kich_hoat` bit(1) NOT NULL,
  `vai_tro` bit(1) NOT NULL,
  `created_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `user_name`, `full_name`, `mat_khau`, `sdt`, `diachi`, `hinh`, `kich_hoat`, `vai_tro`, `created_time`) VALUES
(1, 'tung', 'Lê Văn Tùng', '123456', 'thuantnph25425@', 'hà nội', '295066568_472990818159398_9192069510153040294_n.jpg', b'1', b'1', '2022-09-22'),
(3, 'tien', 'Nguyễn Tiến Tiến', '12', 'tien@gmail.com', 'Thanh Oai', 'IMG_20220329_094611.jpg', b'1', b'1', '2022-10-22'),
(18, 'tung', 'Nguyễn Tiến Tùng', '123', 'ntt091103@gmail', 'Hà Nội', 'jj.jpg', b'1', b'0', '2022-10-22'),
(22, 'vinhkq', 'Kiều Quang Vinh', '123', '123', 'Hà Nội', 'user.png', b'1', b'0', '2022-10-22'),
(24, 'agae', 'gaga', '123', '123', 'gdgag', '299473708_148375661150062_4426877318379004330_n.jpg', b'1', b'1', '2022-10-23'),
(25, 'tiende', 'Đào văn tiến', '123', '123', 'Hà Nội', 'mayanh3.jpg', b'1', b'1', '2022-10-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `don_gia` int(50) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `giam_gia` int(50) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ngay_nhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_loai` int(11) NOT NULL,
  `dac_biet` bit(1) NOT NULL,
  `so_luot_xem` int(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `ten_hh`, `don_gia`, `so_luong`, `giam_gia`, `hinh`, `ngay_nhap`, `id_loai`, `dac_biet`, `so_luot_xem`, `mo_ta`) VALUES
(1, 'Iphone 13', 25000000, 0, 0, 'ip13thuong.jpg', '2022-10-23 07:43:25', 2, b'1', 461, ''),
(2, 'Iphone 13 pro max', 27000000, 0, 0, 'ip13_pro_max.jpg', '2022-10-23 07:42:42', 2, b'1', 58, 'Nếu như iPhone 6 là thế hệ đầu tiên Apple giới thiệu dòng Plus của hãng thì iPhone Xs cũng là lần đầu tiên một chiếc iPhone dòng Max xuất hiện.\r\nTheo Apple thì dòng Plus trước đây có kích thước màn hình thường là 5.5 inch và với chiếc iPhone mới thì nó có'),
(3, 'Đồng hồ casino', 10000, 0, 0, 'dongho1.jpg', '2022-10-21 11:13:32', 1, b'0', 456, ''),
(4, 'iPhone XS 64GB cũ', 5000000, 1111, 1, 'ip-xs-max-64g.jpg', '2022-10-22 17:16:02', 2, b'1', 5343, 'kfanhklghadlg'),
(6, 'SamSung Z-Flip 3', 2000000, 0, 0, 'samsung-galaxy-z-flip-3-cream-1-600x600.jpg', '2022-10-23 07:41:20', 2, b'1', 55, ''),
(7, 'PC Asus PN60-BElead', 20000, 0, 0, '46622_asus_pn60_06.jpg', '2022-10-19 03:32:42', 9, b'0', 100, ''),
(8, 'Máy tính bảng Samsung Galaxy Tab S7+ (T975) - Đen kim cương', 15990000, 0, 0, 'maytinhbang.jpg', '2022-10-23 07:41:53', 5, b'0', 2, ''),
(9, 'Chuột gaming Razer', 489000, 0, 0, 'chuot_gaming_razer.jpg', '2022-10-23 07:41:41', 6, b'0', 2, ''),
(10, 'Tai nghe Over-ear Asus ROG Delta Core', 1699000, 0, 0, 'Tai_nghe_Over-ear_Asus_ROG_Delta_Core.jpg', '2022-10-19 03:24:14', 6, b'0', 4504, ''),
(11, 'Bàn phím cơ Logitech Gaming G813', 2899000, 0, 0, 'ban_phim_co_Logitech_Gaming_G813.jpg', '2022-10-19 03:24:14', 6, b'0', 574, ''),
(12, 'Chuột máy tính DARE-U EM908 Queen', 399000, 0, 0, '40318_dareu_em908_queen_ha3.jpg', '2022-10-23 07:45:06', 6, b'0', 435, ''),
(13, 'Apple Watch S6 44mm viền nhôm dây silicone', 10499000, 0, 0, 'images.jpg', '2022-10-19 03:24:14', 7, b'0', 178, ''),
(14, 'Laptop Acer Swift 3', 17990000, 0, 0, '20670-acer-swift-3-sf313-53-518y-3.jpg', '2022-10-19 03:34:52', 4, b'0', 0, 'Swift 3, chiếc laptop văn phòng mỏng nhẹ, sở hữu vỏ máy làm từ hợp kim Nhôm – Magie bền bỉ hơn 4 lần và nhẹ hơn 35% so với hợp kim nhôm thông thường, trọng lượng máy chỉ 1.19kg, mỏng 15.95mm.'),
(15, 'iPhone 14', 20190000, 0, 0, 'iphone-xanh.png', '2022-10-19 03:38:06', 2, b'0', 10, 'Với thế hệ iPhone 14 mới được ra mắt thì Apple vẫn quyết định giữ lại phong cách thiết kế vuông vức quen thuộc. Dù đã xuất hiện từ trên thế hệ iPhone 12 nhưng theo mình đánh giá đây vẫn là một trong những sản phẩm có ngoại hình đẹp mắt và hợp thời cho đến'),
(16, 'iPhone 14 Pro Max 128GB deep purple', 32990000, 0, 0, 'iPhone_14_Pro_Max-Pur1.jpg', '2022-10-19 04:59:45', 2, b'0', 6000, 'Theo nguồn thông tin đáng tin cậy, iPhone 14 Pro Max sở hữu màn hình được chấm điểm lên đến 149. Đây là điểm số cao nhất ở phân khúc sản phẩm cao cấp và là điểm số tốt trên thị trường. Chất lượng hiển thị được đánh giá cao, đặc biệt là khi sử dụng ở ngoài'),
(29, 'aglkhadhg', 1000, 1, 1, 'Remini202110191030356290.jpg', '2022-10-23 13:31:03', 10, b'1', 0, 'sản phẩm giới hạn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `css`
--
ALTER TABLE `css`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
