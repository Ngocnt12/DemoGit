-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 13, 2024 lúc 01:51 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tttn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, '1234', 9, 3, '07:03:52pm 19/02/2024'),
(2, '12344', 9, 3, '07:19:23pm 19/02/2024'),
(3, '12', 0, 5, '10:56:42am 27/02/2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(3, 'áo ngắn'),
(4, 'quần ngắn'),
(5, 'quần dài'),
(6, 'áo dài');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` double(10,2) DEFAULT '0.00',
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_general_ci,
  `luotxem` int DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(10, 'áo phông', 100000.00, 'ao2.jpg', 'thoải mái', 0, 3),
(13, 'áo sweater cao cấp', 198000.00, 'aosweater cao cap.jpg', 'ấm, thoải mái', 0, 6),
(14, 'áo dài tay thu đông', 199000.00, 'aodaitaythudong.jpg', 'cá tính, phong cách', 0, 6),
(15, 'áo thun nam', 10000.00, 'ao thun nam.jpg', '', 0, 3),
(16, 'áo thun wash', 20000.00, 'ao thun wash.jpg', 'dễ chịu, thoải mái', 0, 6),
(17, 'hộp quần ngắn', 50000.00, 'hop quan ngan.jpg', 'gọn gàng, thoải mái', 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(9, 'lanh', '1234', 'lanh34224@gmail.com', '', '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
