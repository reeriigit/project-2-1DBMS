-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 11:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `milti_img_tb`
--

CREATE TABLE `milti_img_tb` (
  `milti_img_id` int(11) NOT NULL,
  `milti_img` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milti_img_tb`
--

INSERT INTO `milti_img_tb` (`milti_img_id`, `milti_img`, `product_id`) VALUES
(1, '267562827-berry.jpg', 11),
(2, '1385229488-bitter.jpg', 11),
(3, '973670652-canned food.jpg', 11),
(4, '896830415-catfish.jpg', 11),
(5, '1441596075-chocolate.jpg', 11),
(6, '427500372-coffee.jpg', 11),
(7, '1443694210-berry.jpg', 11),
(8, '283311978-bitter.jpg', 11),
(9, '640994391-canned food.jpg', 11),
(10, '1190850318-catfish.jpg', 11),
(11, '1419275783-chocolate.jpg', 11),
(12, '1306238188-coffee.jpg', 11),
(13, '1279931013-berry.jpg', 11),
(14, '638443071-bitter.jpg', 11),
(15, '815995622-canned food.jpg', 11),
(16, '666895524-catfish.jpg', 11),
(41, '912254276-nike-4542-16037-1.jpg', 32),
(42, '1004867467-nike-6012-75436-1.jpg', 32),
(43, '1496221100-th (1).jpg', 32),
(44, '113854474-th (2).jpg', 32),
(45, '1460211404-th.jpg', 32),
(46, '807059186-สกรีนช็อต 2022-10-19 205817.png', 33),
(47, '615211615-สกรีนช็อต 2022-10-19 205843.png', 33),
(48, '785035800-สกรีนช็อต 2022-10-19 205858.png', 33),
(49, '332285794-สกรีนช็อต 2022-10-19 205915.png', 33),
(50, '313114334-สกรีนช็อต 2022-10-19 205930.png', 33),
(51, '688324733-สกรีนช็อต 2022-10-19 205817.png', 34),
(52, '1253551302-สกรีนช็อต 2022-10-19 205843.png', 34),
(53, '789042461-สกรีนช็อต 2022-10-19 205858.png', 34),
(54, '495452286-สกรีนช็อต 2022-10-19 205915.png', 34),
(55, '882018391-สกรีนช็อต 2022-10-19 205930.png', 34),
(56, '1357242808-สกรีนช็อต 2022-10-25 212915.png', 35),
(57, '757697771-สกรีนช็อต 2022-10-25 212944.png', 35),
(58, '1178020272-สกรีนช็อต 2022-10-25 213001.png', 35),
(59, '184706129-สกรีนช็อต 2022-10-25 213024.png', 35),
(60, '1619873864-สกรีนช็อต 2022-10-25 213038.png', 35),
(62, '1462975143-สกรีนช็อต 2022-10-25 221224.png', 36),
(63, '47366548-สกรีนช็อต 2022-10-25 221239.png', 36),
(64, '272156598-สกรีนช็อต 2022-10-25 221254.png', 36),
(65, '421742746-สกรีนช็อต 2022-10-25 232323.png', 37),
(66, '1090046909-สกรีนช็อต 2022-10-25 232351.png', 37),
(67, '153558519-สกรีนช็อต 2022-10-25 232410.png', 37),
(68, '392989818-สกรีนช็อต 2022-10-25 232427.png', 37),
(69, '236907227-สกรีนช็อต 2022-10-25 232446.png', 37),
(70, '1648570685-สกรีนช็อต 2022-10-25 234534.png', 38),
(71, '1480008088-สกรีนช็อต 2022-10-25 234549.png', 38),
(72, '1364321580-สกรีนช็อต 2022-10-25 234607.png', 38),
(73, '833659552-สกรีนช็อต 2022-10-25 234625.png', 38),
(74, '1280753500-สกรีนช็อต 2022-10-25 234642.png', 38),
(75, '737319532-สกรีนช็อต 2022-10-25 235350.png', 39),
(76, '1353085066-สกรีนช็อต 2022-10-25 235410.png', 39),
(77, '1453396167-สกรีนช็อต 2022-10-25 235631.png', 39);

-- --------------------------------------------------------

--
-- Table structure for table `oder_tb`
--

CREATE TABLE `oder_tb` (
  `Oder_id` int(11) NOT NULL,
  `Oder_product_id` int(11) NOT NULL,
  `Oder_user_id` int(11) NOT NULL,
  `oder_cont_product` int(11) NOT NULL,
  `Oder_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oder_tb`
--

INSERT INTO `oder_tb` (`Oder_id`, `Oder_product_id`, `Oder_user_id`, `oder_cont_product`, `Oder_detail`) VALUES
(62, 38, 1, 1, 'ยัวไม่รู้'),
(63, 37, 1, 1, 'ยัวไม่รู้');

-- --------------------------------------------------------

--
-- Table structure for table `oder_yet_tb`
--

CREATE TABLE `oder_yet_tb` (
  `oder_yet_id` int(11) NOT NULL,
  `oder_yet_product` int(11) NOT NULL,
  `oder_yet_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_brand_tb`
--

CREATE TABLE `product_brand_tb` (
  `product_brand_id` int(11) NOT NULL,
  `product_brand_name` varchar(255) NOT NULL,
  `product_brand_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brand_tb`
--

INSERT INTO `product_brand_tb` (`product_brand_id`, `product_brand_name`, `product_brand_img`) VALUES
(2, 'Nike', 'NIKE.png'),
(3, 'Adidas', 'ADIDAS.jpg'),
(4, 'GUCCI', 'GUCCI.jpg'),
(5, 'OFF-WHITE', 'off-white.jpg'),
(7, 'PRADA', 'PRADA.jpg'),
(8, 'VERSACE', 'VERSACE.jpg'),
(10, 'VETEMENTS', 'VETEMENTS.jpg'),
(14, 'H&M', 'H&M.jpg'),
(23, 'Uniqlo x Kaws', 'Uniqlo x Kaws.jpg'),
(24, 'BROWNY', 'BROWNY.jpg'),
(25, 'GREEN​ DAY​ ', 'GREEN​ DAY​.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_nature_tb`
--

CREATE TABLE `product_nature_tb` (
  `product_nature_id` int(11) NOT NULL,
  `product_nature_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_nature_tb`
--

INSERT INTO `product_nature_tb` (`product_nature_id`, `product_nature_name`) VALUES
(1, 'trembling sleeve shirt'),
(2, 'Long sleeve shirt'),
(3, 'trousers'),
(5, 'dress'),
(6, 'Suit');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `product_id` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_type` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `product_file` text NOT NULL,
  `product_size` char(10) NOT NULL,
  `product_contry` varchar(20) NOT NULL,
  `product_nature` int(11) NOT NULL,
  `product_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`product_id`, `product_brand`, `product_type`, `product_price`, `product_file`, `product_size`, `product_contry`, `product_nature`, `product_details`) VALUES
(32, 2, 3, 180, 'nike-4542-16037-1.jpg', 'L', 'USA', 1, 'เสื้อ NIke ยืด สภาพดีไม่มีตำหนิ Size:ป้ายระบุ L วัดจริง อก23 ยาว26 มีหลายสี'),
(34, 2, 3, 4, 'สกรีนช็อต 2022-10-19 205817.png', 'L', 'USA', 1, 'เสื้อ NIke กล้าม สภาพดีไม่มีตำหนิ Size:ป้ายระบุ L วัดจริง อก23 ยาว26'),
(35, 23, 4, 350, 'สกรีนช็อต 2022-10-25 212915.png', 'XL', 'USA', 2, 'เสื้อ Uniqlo x Kaws\r\nลายหน้าหลัง สภาพดีไม่มีตำหนิ\r\nSize:ป้ายระบุ XL วัดจริง อก23 ยาว26\r\n'),
(36, 24, 4, 350, 'สกรีนช็อต 2022-10-25 221204.png', 'L', 'USA', 2, 'เสื้อไหมพรมกระดุมหน้า ‼️ติดจอง‼️\r\n🧁 : สีครีม แขนพองแบบตะโกนสวยมาก ผ้าไม่หนาไม่หนัก งานแรร์มากตัวนี้ ได้ไปไม่ผิดหวังในความสวยเลย\r\n\r\n🌼ราคา : 350\r\n🌸Size : อกได้ถึง 52” ยาว 19”\r\n🍃แบรนด์ : BROWNY'),
(37, 25, 4, 550, 'สกรีนช็อต 2022-10-25 232323.png', 'L', 'USA', 1, 'เสื้อ GREEN DAY Size​: 21.5/29​\r\nDetail​: ตะเข็บ​คู่​บนล่าง​​ไม่​ข้าง​ ผ้า​100​​ สีดำ\r\nCondition​: สภาพ​​เซอร์​สวย มีรูเล็ก​ๆ​ 12​ - 16รู​ ​สกีน​ร้าว​เล็กน้อย​ สีดรอป ลายหน้าเดียว​ ด้ายรันหนึ่งช่วง คอดีไม่ย้วย ป้ายครบ​ 7.5/10\r\n👕 กรีนเดย์​ปี​ 2003​​ ฟีลใส่เล่นได้ใช้งาน​ยาว​​​ ใส่ไปเดินเที่ยว​เท่ๆ​ ถ่ายรูป​ได้​ เป็นวงในกระแสที่มีอนาคต​ ไม่แพงด้วยเด้อ 😄'),
(38, 2, 3, 1020, 'สกรีนช็อต 2022-10-25 234534.png', 'L', 'USA', 1, '#nike ลายปัก หน้า-หลัง ของใหม่ ป้ายห้อย สีเขียวเข้ม ผ้าดีมากครับSize L 44 ยาว281550.- รวมส่งDM เข้ามาได้เลยนะครับ🙇🏻‍♂️Comfortable, beautiful t-shirt.'),
(39, 2, 4, 250, 'สกรีนช็อต 2022-10-25 235350.png', 'L', 'USA', 1, '🙏🏼 ✅เสื้อแบรนด์ ใหม่มาก—————————————————📌 $ 120 ฿📌 Size 👕 Xl ขนาด 26/27📌 สภาพ 9/10📌 ตะเข็บคู่-ข้างเดิม📌 ตำหนิ —1รู—————————————————-📬 ค่าส่ง 50 ฿สนใจสอบถามได้'),
(40, 3, 3, 1000, 'th (4).jpg', 'M', 'USA', 2, 'Comfortable, beautiful t-shirt.'),
(41, 3, 4, 1000, 'th (5).jpg', 'L', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(42, 3, 3, 3400, 'th (6).jpg', 'M', 'USA', 3, 'Comfortable, beautiful t-shirt.'),
(43, 3, 3, 1000, 'th (7).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(44, 3, 3, 1000, 'th.jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(45, 4, 3, 3400, 'th (1).jpg', 'M', 'USA', 2, 'Comfortable, beautiful t-shirt.'),
(46, 4, 4, 12212, 'th (2).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(47, 4, 4, 3400, 'th (3).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(49, 4, 3, 1222, 'th (8).jpg', 'M', 'USA', 2, 'Comfortable, beautiful t-shirt.'),
(52, 4, 3, 1000, 'sasasas (1).jpg', 'M', 'USA', 2, 'Comfortable, beautiful t-shirt.'),
(53, 4, 3, 1000, 'sasasas (2).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(54, 4, 3, 12212, 'sasasas (3).jpg', 'S', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(55, 4, 4, 1000, 'sasasas (4).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(56, 4, 4, 1000, 'sasasas (5).jpg', 'L', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(57, 4, 4, 1000, 'sasasas (6).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(58, 5, 3, 1000, 'wqqwq (1).jpg', 'M', 'USA', 2, 'Comfortable, beautiful t-shirt.'),
(59, 5, 3, 3400, 'wqqwq (2).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(60, 5, 3, 3000, 'wqqwq (3).jpg', 'XL', 'US', 1, 'Comfortable, beautiful t-shirt.'),
(61, 5, 3, 12212, 'wqqwq (4).jpg', 'XL', 'USA', 2, 'Comfortable, beautiful t-shirt.'),
(62, 5, 3, 3400, 'wqqwq (5).jpg', 'M', 'USA', 2, 'Comfortable, beautiful t-shirt.'),
(64, 5, 4, 3400, 'wqqwq (7).jpg', 'M', 'USA', 3, 'Comfortable, beautiful t-shirt.'),
(65, 5, 4, 12212, 'wqqwq (10).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(66, 7, 3, 1000, 'weeennnnnn (1).jpg', 'L', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(67, 7, 4, 12212, 'weeennnnnn (1).webp', 'M', 'US', 2, 'Comfortable, beautiful t-shirt.'),
(68, 7, 4, 12212, 'weeennnnnn (2).jpg', 'M', 'USA', 3, 'Comfortable, beautiful t-shirt.'),
(69, 7, 4, 1000, 'weeennnnnn (3).jpg', 'M', 'USA', 2, 'Comfortable, beautiful t-shirt.'),
(70, 7, 4, 1000, 'weeennnnnn (5).jpg', 'L', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(71, 7, 4, 3400, 'weeennnnnn (6).jpg', 'L', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(72, 7, 3, 12212, 'weeennnnnn (7).jpg', 'M', 'USA', 3, 'Comfortable, beautiful t-shirt.'),
(73, 8, 4, 1000, 'xeeac (1).jpg', 'M', 'US', 2, 'Comfortable, beautiful t-shirt.'),
(74, 8, 3, 12212, 'xeeac (2).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(75, 8, 3, 12212, 'xeeac (3).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(76, 8, 3, 1000, 'xeeac (4).jpg', 'L', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(77, 8, 3, 3400, 'xeeac (5).jpg', 'L', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(78, 10, 4, 1000, 'daffff (1).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(79, 10, 3, 1000, 'daffff (2).jpg', 'L', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(80, 10, 3, 3000, 'daffff (3).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(81, 10, 3, 12212, 'daffff (5).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.'),
(82, 10, 3, 1000, 'daffff (6).jpg', 'M', 'USA', 1, 'Comfortable, beautiful t-shirt.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_type_tb`
--

CREATE TABLE `product_type_tb` (
  `product_type_id` int(11) NOT NULL,
  `product_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type_tb`
--

INSERT INTO `product_type_tb` (`product_type_id`, `product_type_name`) VALUES
(3, 'First hand'),
(4, 'Second hand');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `userlevel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `userlevel`) VALUES
(1, 'samree0653s@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'sam', 'samae', 'm'),
(2, 'samrees@gmail.com', '190f2f35e4edc7eaf06236c1730f921f', 'sam', 'samae', 'm'),
(3, 'samreess@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'sam', 'samae', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `milti_img_tb`
--
ALTER TABLE `milti_img_tb`
  ADD PRIMARY KEY (`milti_img_id`);

--
-- Indexes for table `oder_tb`
--
ALTER TABLE `oder_tb`
  ADD PRIMARY KEY (`Oder_id`),
  ADD KEY `Oder_product_id` (`Oder_product_id`);

--
-- Indexes for table `oder_yet_tb`
--
ALTER TABLE `oder_yet_tb`
  ADD PRIMARY KEY (`oder_yet_id`);

--
-- Indexes for table `product_brand_tb`
--
ALTER TABLE `product_brand_tb`
  ADD PRIMARY KEY (`product_brand_id`);

--
-- Indexes for table `product_nature_tb`
--
ALTER TABLE `product_nature_tb`
  ADD PRIMARY KEY (`product_nature_id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_brand` (`product_brand`),
  ADD KEY `product_nature` (`product_nature`),
  ADD KEY `product_type` (`product_type`);

--
-- Indexes for table `product_type_tb`
--
ALTER TABLE `product_type_tb`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `milti_img_tb`
--
ALTER TABLE `milti_img_tb`
  MODIFY `milti_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `oder_tb`
--
ALTER TABLE `oder_tb`
  MODIFY `Oder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `oder_yet_tb`
--
ALTER TABLE `oder_yet_tb`
  MODIFY `oder_yet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product_brand_tb`
--
ALTER TABLE `product_brand_tb`
  MODIFY `product_brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_nature_tb`
--
ALTER TABLE `product_nature_tb`
  MODIFY `product_nature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `product_type_tb`
--
ALTER TABLE `product_type_tb`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oder_tb`
--
ALTER TABLE `oder_tb`
  ADD CONSTRAINT `oder_tb_ibfk_1` FOREIGN KEY (`Oder_product_id`) REFERENCES `product_tb` (`product_id`);

--
-- Constraints for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD CONSTRAINT `product_tb_ibfk_1` FOREIGN KEY (`product_brand`) REFERENCES `product_brand_tb` (`product_brand_id`),
  ADD CONSTRAINT `product_tb_ibfk_2` FOREIGN KEY (`product_nature`) REFERENCES `product_nature_tb` (`product_nature_id`),
  ADD CONSTRAINT `product_tb_ibfk_3` FOREIGN KEY (`product_type`) REFERENCES `product_type_tb` (`product_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
