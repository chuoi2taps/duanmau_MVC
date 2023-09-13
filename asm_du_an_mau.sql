-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 03:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm_du_an_mau`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
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
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_product`, `price`, `quantity`, `id_customer`, `created_time`) VALUES
(1, 2, 2700000, 1, 1, '2022-10-18 22:39:50'),
(2, 3, 10000, 2, 1, '2022-10-18 22:39:50'),
(3, 5, 2700000, 2, 2, '2022-10-19 01:18:37'),
(4, 10, 1699000, 1, 1, '2022-10-19 01:19:13'),
(11, 3, 10000, 1, 3, '2022-10-19 11:59:06'),
(12, 3, 10000, 1, 3, '2022-10-19 21:37:18'),
(13, 16, 32990000, 1, 3, '2022-10-19 21:37:32'),
(15, 7, 20000, 1, 3, '2022-10-20 00:57:30'),
(17, 2, 27000000, 3, 3, '2022-10-23 14:42:47'),
(18, 1, 25000000, 1, 18, '2023-09-12 08:36:23'),
(19, 30, 100000, 1, 18, '2023-09-12 08:37:00'),
(20, 16, 32990000, 1, 1, '2023-09-12 08:47:58'),
(21, 11, 2899000, 1, 1, '2023-09-12 08:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_cate`, `ten_loai`) VALUES
(1, 'Đồng hồ'),
(2, 'Điện thoại'),
(4, 'Laptop'),
(5, 'Table'),
(6, 'Phụ kiện'),
(7, 'Smartwatch'),
(9, 'PC'),
(10, 'Máy cũ'),
(22, 'Phụ kiện điện thoại');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `ngay_bl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `noi_dung`, `id_kh`, `ten_kh`, `id_hh`, `ngay_bl`) VALUES
(32, 'ngon', 1, 'Nguyễn Nhật Thiên', 30, '2023-09-12 01:47:45'),
(33, 'ngon này', 18, 'Nguyễn Nhật Thiên', 1, '2023-09-12 02:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `file_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `css`
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
-- Table structure for table `customers`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_name`, `full_name`, `mat_khau`, `sdt`, `diachi`, `hinh`, `kich_hoat`, `vai_tro`, `created_time`) VALUES
(1, 'user', 'Nguyễn Nhật Thiên', 'user', 'thiennnph25438@', 'Nghệ An', '295066568_472990818159398_9192069510153040294_n.jpg', b'1', b'1', '2023-09-26'),
(3, 'thien', 'Thiên', '123', 'thien@gmail.com', 'nghe an', 'IMG_20220329_094611.jpg', b'1', b'1', '2023-09-22'),
(18, 'admin', 'Nguyễn Nhật Thiên', 'admin', 'nnt140903@gmail', 'Hà Nội', 'jj.jpg', b'1', b'0', '2023-09-14'),
(22, 'aduvipvl', 'aduuuuuu', '123123', '123', 'Hà Nội', 'user.png', b'1', b'0', '2023-09-14'),
(24, 'agae', 'gaga', '123', '123', 'gdgag', '299473708_148375661150062_4426877318379004330_n.jpg', b'1', b'1', '2022-10-03'),
(25, 'adu', 'adu', 'adu', '123', 'Hà Nội', 'mayanh3.jpg', b'1', b'1', '2023-09-14'),
(26, 'thiennn', 'thien', '123123', '03333', 'nghe an', 'Untitled-1.jpg', b'1', b'1', '2023-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ten_hh`, `don_gia`, `so_luong`, `giam_gia`, `hinh`, `ngay_nhap`, `id_loai`, `dac_biet`, `so_luot_xem`, `mo_ta`) VALUES
(1, 'Iphone 13', 25000000, 1000, 10, 'ip13thuong.jpg', '2023-09-13 00:23:38', 2, b'1', 462, 'điện thoại này ngon vl'),
(2, 'Iphone 13 pro max', 27000000, 100, 10000, 'ip13_pro_max.jpg', '2023-09-12 01:40:09', 2, b'1', 58, 'Nếu như iPhone 6 là thế hệ đầu tiên Apple giới thiệu dòng Plus của hãng thì iPhone Xs cũng là lần đầu tiên một chiếc iPhone dòng Max xuất hiện.\r\nTheo Apple thì dòng Plus trước đây có kích thước màn hình thường là 5.5 inch và với chiếc iPhone mới thì nó có'),
(3, 'Đồng hồ casino', 10000, 100, 100, 'dongho1.jpg', '2023-09-12 01:40:28', 1, b'1', 456, 'đồng hồ siêu cấp vippro'),
(4, 'iPhone XS 64GB cũ', 5000000, 1111, 1, 'ip-xs-max-64g.jpg', '2022-10-22 17:16:02', 2, b'1', 5343, 'kfanhklghadlg'),
(6, 'SamSung Z-Flip 3', 2000000, 1000, 100, 'samsung-galaxy-z-flip-3-cream-1-600x600.jpg', '2023-09-12 01:41:08', 2, b'1', 55, 'điện thoại gập'),
(7, 'PC Asus PN60-BElead', 20000, 1000, 100, '46622_asus_pn60_06.jpg', '2023-09-12 01:41:25', 9, b'1', 100, 'pc siêu cổ đại '),
(8, 'Máy tính bảng Samsung Galaxy Tab S7+ (T975) - Đen kim cương', 15990000, 10, 10, 'maytinhbang.jpg', '2023-09-12 01:41:46', 5, b'1', 2, 'Máy tính bảng Samsung Galaxy Tab S7+ (T975) - Đen kim cương'),
(9, 'Chuột gaming Razer', 489000, 100, 10, 'chuot_gaming_razer.jpg', '2023-09-12 01:42:03', 6, b'1', 2, 'Chuột gaming Razer'),
(10, 'Tai nghe Over-ear Asus ROG Delta Core', 1699000, 1000, 1000, 'Tai_nghe_Over-ear_Asus_ROG_Delta_Core.jpg', '2023-09-12 01:42:17', 6, b'1', 4504, 'Tai nghe Over-ear Asus ROG Delta Core'),
(11, 'Bàn phím cơ Logitech Gaming G813', 2899000, 100, 10, 'ban_phim_co_Logitech_Gaming_G813.jpg', '2023-09-12 01:48:25', 6, b'1', 575, 'Bàn phím cơ Logitech Gaming G813'),
(12, 'Chuột máy tính DARE-U EM908 Queen', 399000, 100, 10, '40318_dareu_em908_queen_ha3.jpg', '2023-09-12 01:43:19', 6, b'1', 435, 'Chuột máy tính DAREU EM908 Queen'),
(13, 'Apple Watch S6 44mm viền nhôm dây silicone', 10499000, 1000, 100, 'images.jpg', '2023-09-12 01:43:39', 7, b'1', 178, 'Apple Watch S6 44mm viền nhôm dây silicone'),
(14, 'Laptop Acer Swift 3', 17990000, 100, 10, '20670-acer-swift-3-sf313-53-518y-3.jpg', '2023-09-12 01:43:58', 4, b'1', 0, 'Swift 3, chiếc laptop văn phòng mỏng nhẹ, sở hữu vỏ máy làm từ hợp kim Nhôm – Magie bền bỉ hơn 4 lần và nhẹ hơn 35% so với hợp kim nhôm thông thường, trọng lượng máy chỉ 1.19kg, mỏng 15.95mm.'),
(15, 'iPhone 12', 20190000, 1000, 100, 'iphone-12-tim-1-600x600.jpg', '2023-09-12 01:45:00', 2, b'1', 10, 'Với thế hệ iPhone 12 mới được ra mắt thì Apple vẫn quyết định giữ lại phong cách thiết kế vuông vức quen thuộc. Dù đã xuất hiện từ trên thế hệ iPhone x nhưng theo mình đánh giá đây vẫn là một trong những sản phẩm có ngoại hình đẹp mắt và hợp thời cho đến'),
(16, 'iPhone 14 Pro Max 128GB deep purple', 32990000, 10, 10, 'iPhone_14_Pro_Max-Pur1.jpg', '2023-09-12 01:47:51', 2, b'1', 6001, 'Theo nguồn thông tin đáng tin cậy, iPhone 14 Pro Max sở hữu màn hình được chấm điểm lên đến 149. Đây là điểm số cao nhất ở phân khúc sản phẩm cao cấp và là điểm số tốt trên thị trường. Chất lượng hiển thị được đánh giá cao, đặc biệt là khi sử dụng ở ngoài'),
(30, 'San pham Test', 100000, 10, 10000, 'channels4_profile.jpg', '2023-09-12 01:46:06', 9, b'1', 1, 'aduvip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `css`
--
ALTER TABLE `css`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
