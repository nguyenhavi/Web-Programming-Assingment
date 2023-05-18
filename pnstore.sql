-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th4 26, 2023 lúc 02:38 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pnstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `uid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`uid`, `user_id`, `product_id`, `amount`) VALUES
(1, 20, 7, 0),
(2, 20, 9, 0),
(10, 20, 19, 0),
(12, 20, 22, 0),
(13, 20, 20, 0),
(14, 20, 21, 0),
(15, 20, 5, 0),
(16, 20, 18, 5),
(17, 31, 7, 0),
(18, 31, 20, 0),
(19, 31, 21, 0),
(23, 20, 2, 0),
(25, 20, 3, 6),
(26, 33, 2, 4),
(27, 33, 5, 4),
(28, 33, 18, 5),
(29, 33, 15, 4),
(30, 34, 3, 2),
(31, 34, 4, 1),
(37, 34, 9, 1),
(47, 35, 7, 0),
(48, 36, 9, 8),
(49, 36, 13, 0),
(50, 35, 22, 0),
(51, 35, 9, 0),
(52, 38, 13, 0),
(53, 38, 9, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `uid` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `type` text NOT NULL DEFAULT 'service',
  `amount` int(11) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`uid`, `name`, `description`, `price`, `image`, `type`, `amount`) VALUES
(9, 'Bàn phím cơ AKKO 5075B Plus Dragon Ball Super Goku1', 'Nổi tiếng với những chiếc gaming gear chất lượng, Akko là thương hiệu rất nhiều người dùng đặt niềm tin nhờ vào những thành phẩm chất lượng, đặc biệt là bàn phím cơ. Bao phủ gần như mọi phân khúc trong ngành hàng này, những chiếc bàn phím từ Akko sở hữu độ cứng cáp và hoàn thiện ở cấp độ cao. Và hôm nay PNStore sẽ mang tới model AKKO 5075B Plus Dragon Ball Super Goku đặc biệt từ chính thương hiệu Trung Quốc.', 2999000, 'https://product.hstatic.net/1000026716/product/ban-phim-co-akko-5075b-plus-dragon-ball-super-goku-05_2fbcb436a9534bc7b3fcf25e4769f0ad.jpg', 'product', 12),
(13, 'Cài win', '', 20000, 'https://news.microsoft.com/wp-content/uploads/prod/sites/463/2021/06/Hero-Bloom-Logo-1000x563-1.jpg', 'service', 10),
(15, 'Nâng cấp Ram(8GB)', 'Nâng cấp Ram cho PC của bạn(từ 4GB - 8GB)', 999000, 'https://cdn.tgdd.vn/Files/2016/01/05/767567/nang-cap-ram-cho-may-tinh--tuong-de-nhung-khong-phai-de-avata-760x367.jpg', 'service', 10),
(18, 'Thay Pin cho Laptop', '', 3450000, 'https://laptophaidang.com/pic/news/images/thay%20pin%20laptop%20dell(1).png', 'service', 16),
(19, 'Laptop Dell XPS 17 9700 XPS7I7001W1 Silver', 'Dell XPS 17 9700 XPS7I7001W1 Silver thuộc phân khúc laptop cao cấp có hiệu suất hoạt động tuyệt vời trong một thiết kế sang trọng. Mọi nhu cầu từ học tập, làm việc đến chơi game, làm đồ họa chiếc laptop này đều đáp ứng được một cách nhanh chóng. Đây chính xác là sản phẩm máy tính xách tay đáng mong đợi trên thị trường hiện nay.', 69990000, 'https://product.hstatic.net/1000026716/product/ideapad_5_pro_14itl6_ct1_03_c77dc682ffbf43e6bcb84dcb42f2af46.png', 'product', 10),
(20, 'Màn hình Samsung LS25BG400 25\" IPS 240Hz HDR10 Gsync', 'Màn hình Samsung LS25BG400 25“ IPS 240Hz HDR10 Gsync là một trong những màn hình chuyên game mới nhất của nhà Samsung. Tấm nền IPS cho khả  năng hiển thị chất lượng, màu sắc phong phú, đa dạng. Bên cạnh đó, công nghệ đồng bộ hóa thích ứng Gsync cùng với tần số quét 240Hz và thời gian phản hồi 1ms, hỗ trợ trải nghiệm tối đa cho game thủ.', 6090000, 'https://product.hstatic.net/1000026716/product/gearvn-man-hinh-samsung-ls25bg400-25-ips-240hz-hdr10-gsync-1_ada778e547ab48de9271b15e7922085c.jpg', 'product', 10),
(21, 'Chuột Logitech G Pro X Superlight Wireless Red', 'Chuột Logitech G Pro X Superlight Wireless Red là một trong những dòng chuột chơi game nhẹ nhất từ trước tới nay của Logitech, nó cũng chính là bước đột phá về kỹ thuật khi đạt được trọng lượng ít hơn 63 gram – nhẹ hơn gần 25% so với chuột không dây Pro tiêu chuẩn của Logitech.', 2890000, 'https://product.hstatic.net/1000026716/product/gearvn-chuot-logitech-g-pro-x-superlight-wireless-red-1_e9b9c83c5b014121b05142091ca1a7b7.jpg', 'product', 10),
(22, 'MacBook Pro 14\" 2021 M1 Pro 8CPU 14GPU 16GB 512GB', 'Apple, một trong những thương hiệu Big Tech trên toàn thế giới hiện nay. Sản phẩm đến từ nhà táo luôn ở một đẳng cấp vô cùng khác biệt, như iPhone, iPad, Mac Mini, … Và không thể thiếu sản phẩm laptop từ ông lớn này, MacBook. Sự ra đời của chip M1 và nay là phiên bản M1 Pro, đã mang đến luồng sức mạnh mới cho MacBook. Hôm nay hãy cùng GEARVN tìm hiểu về chiếc MacBook Pro 14“ 2021 M1 Pro Space Graysẽ mang lại những tính năng gì cho chúng ta nào !', 46990000, 'https://product.hstatic.net/1000026716/product/mbp14-spacegray-gallery1-202110_7d0fdd58941042b78f5f7b3aa39c00eb.png', 'product', 10),
(24, 'Laptop Dell Inspiron 16 5620 N6I5003W1 Silver', 'Tùy theo nhiều nhu cầu khác nhau mà có nhiều dòng sản phẩm laptop Dell khác nhau. Nếu bạn đang tìm một chiếc laptop phục vụ cho nhu cầu học tập và làm việc hằng ngày thì Dell Inspiron 16 5620 N6I5003W1 Silver sẽ là người bạn đồng hành cực tốt. cấu hình mạnh mẽ trên thiết kế đơn giản mang lại hiệu năng giải quyết mọi công việc mượt mà, nhanh chóng. ', 2659000, 'https://product.hstatic.net/1000026716/product/notebook-inspiron-16-5620-2-in-1-gy-fpr-gallery-2_637e2b4c5ca44b3398602b0bda4b3310.png', 'product', 9),
(25, 'Laptop Dell Vostro 13 5320 V3I7005W Gray', 'Dell Vostro 13 5320 V3I7005W Gray mang đến hiệu suất làm việc cao, xử lý mọi tác vụ nhanh chóng trong thiết kế gọn nhẹ đầy thanh lịch. Đây là một trong những sản phẩm laptop văn phòng phổ thông thu hút được nhiều sự quan tâm của khách hàng nhất tại GEARVN. Nếu bạn đang tìm kiếm một sản phẩm laptop học tập - làm việc mỗi ngày thì đây chính xác là lựa chọn dành cho bạn.', 2549000, 'https://product.hstatic.net/1000026716/product/notebook-vostro-16-5620-nt-bk-gallery-2_d4ecce23ea3e4e73845d14395f190496.png', 'product', 10),
(26, 'Laptop gaming ASUS ROG Zephyrus Duo 16', 'Siêu phẩm laptop gaming ASUS ROG Zephyrus Duo 16 GX650PZ NM031W như một làn gió mới mà mọi game thủ không thể bỏ qua. Nâng tầm trải nghiệm một cách mới mẻ với thiết kế 2 màn hình độc đáo. Hiệu năng mạnh mẽ chấp nhận mọi thách thức từ bạn khi tham chiến game cấu hình cao. Cùng GEARVN tìm hiểu về sản phẩm gaming ASUS ROG Zephyrus ngay nhé!', 119000000, 'https://product.hstatic.net/1000026716/product/gearvn-laptop-gaming-asus-rog-zephyrus-duo-16-gx650pz-nm031w-2_aee6f55b7ed7419689d39cdf759d1720.png', 'product', 5),
(27, 'Laptop gaming ASUS TUF Gaming A15 FA507XI LP420W', 'Acer vừa ra mắt phiên bản mới nhất của dòng game Nitro 5 - Nitro 5 Eagle AN515-57 được trang bị bộ vi xử lý Intel Core thế hệ thứ 11, hai tùy chọn CPU Intel Core i5-11400H, GPU NVIDIA GeForce GTX 1650 4GB và tốc độ làm mới 144Hz cùng với hỗ trợ bàn phím RGB.\r\n\r\n', 18990000, 'https://product.hstatic.net/1000026716/product/nitro_5_eagle__3__d9ce57f8e2154412bcd9cce282ea97dc.png', 'product', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`uid`, `name`, `permissions`) VALUES
(1, 'Standard User', '{\"user\": 1}'),
(2, 'Administrator', '{\"admin\": 1,\r\n\"moderator\" :1, \"user\": 1}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `_key` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`_key`, `value`) VALUES
('address', 'Đường Tạ Quang Bửu, Khu phố 6, Thủ Đức, Bình Dương, Vietnam'),
('email', 'tintra17@gmail.com'),
('phone', '0982582970');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `role` int(11) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `name`, `joined`, `role`, `email`, `address`, `phone`) VALUES
(35, 'tintra17', '$2y$10$KKWtrIqrkOEkc4xxCXrU.ug4giTf8YFM3WToCa/diMW1cofoXPVja', 'Trông Anh Ngược', '2023-04-24 11:05:54', 2, 'tintra17@gmail.com', '266/36/11 Phú Thọ Hòa, quận Tân Phú', '0982582970'),
(36, 'tintra171', '$2y$10$NMmw7qVvyukUHNSLUFCN6.cohO7Q39kJ3SBSSv1Ejw26WHIvdo/7i', 'tintra17', '2023-04-24 17:40:41', 1, 'tintra17@gmail.com', '266/36/13 Phú Thọ Hòa, quận Tân Phú', '0982582970'),
(38, 'tintra18', '$2y$10$dgnbKx.8TPI2QisfQChrA.C9BEXzlLwKOmjD4AlJTM7L4iuiHrPqy', 'Trà Trung Tín', '2023-04-26 04:55:43', 1, 'tintra17@gmail.com', '266/36/13 Phú Thọ Hòa, quận Tân Phú', '0982582970');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`uid`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`uid`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`uid`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`_key`(256));

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Chỉ mục cho bảng `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
