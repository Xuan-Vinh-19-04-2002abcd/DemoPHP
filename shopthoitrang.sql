-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 16, 2022 lúc 07:15 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopthoitrang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucthoitrang`
--

CREATE TABLE `danhmucthoitrang` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmucthoitrang`
--

INSERT INTO `danhmucthoitrang` (`id`, `tendanhmuc`) VALUES
(1, 'Thời Trang Nam'),
(2, 'Thời trang nữ'),
(3, 'Thời trang Âu Mĩ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(30) NOT NULL,
  `type_product` varchar(30) NOT NULL,
  `image_product` varchar(1000) NOT NULL,
  `price_product` int(11) NOT NULL,
  `quanlity_product` int(11) NOT NULL,
  `discount_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name_product`, `type_product`, `image_product`, `price_product`, `quanlity_product`, `discount_product`) VALUES
(15, 'Music', '15', '81_u1jyFKSL.jpg', 450000, 18, 1),
(16, 'Sách giáo khoa ', '2', 'truong-an-ly-ca-1-mau-do-hoa-dao.jpg', 15000, 5, 20),
(17, 'Sách thiếu nhi ', '3', 'viet-nam-danh-tac-song-mon.jpg', 500000, 50, 25),
(18, 'Sách hay ', '2', 'viet-nam-danh-tac-to-tam.jpg', 500000, 50, 12),
(19, 'Văn hay chữ tốt', '1', '81yj5--FGQL.jpg', 15555, 8, 12),
(20, 'Sách nước ngoài', '1', '91qnd1RegIL.jpg', 500000, 15, 20),
(21, 'Sách Mỹ', '1', 'sach-di-tim-le-song-ebook-206x300.jpg', 15000, 12, 20),
(22, 'Sách hạnh phúc', '1', 'cau-be-mac-vay.jpg', 12000, 1123, 12),
(23, 'Sách Nga', '1', 'viet-nam-danh-tac-tieu-son-trang-si.jpg', 15000, 5, 120000),
(24, 'Sách Ytalia', '2', 'truong-an-ly-ca-1-mau-do-hoa-dao.jpg', 20000, 45, 1220),
(25, 'Sách Ả rập', '3', '81_u1jyFKSL.jpg', 1500000, 10, 20),
(26, 'Sách nô lệ', '3', '81ypIx8HzgL.jpg', 20000, 15, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sildes`
--

CREATE TABLE `sildes` (
  `id` int(11) NOT NULL,
  `img` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sildes`
--

INSERT INTO `sildes` (`id`, `img`) VALUES
(1, './img/slide-2.jpg'),
(2, './img/slide-3.jpg'),
(3, './img/slide-4.jpg'),
(4, './img/slide-5.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucthoitrang`
--
ALTER TABLE `danhmucthoitrang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sildes`
--
ALTER TABLE `sildes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucthoitrang`
--
ALTER TABLE `danhmucthoitrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `sildes`
--
ALTER TABLE `sildes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
