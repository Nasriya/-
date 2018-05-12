-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 05:57 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE `uploadfile` (
  `fileID` int(11) NOT NULL,
  `fileupload` varchar(1000) CHARACTER SET tis620 NOT NULL,
  `dateup` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Format` varchar(100) CHARACTER SET tis620 NOT NULL,
  `ProductType` varchar(11) CHARACTER SET tis620 NOT NULL,
  `ProductDetail` varchar(20) NOT NULL,
  `Quanitity` varchar(3) NOT NULL,
  `DateReceip` varchar(100) NOT NULL,
  `TimeReceip` varchar(100) CHARACTER SET tis620 NOT NULL,
  `Member_ID` int(20) NOT NULL,
  `Status` varchar(15) CHARACTER SET tis620 NOT NULL DEFAULT 'รอการยืนยัน',
  `Price` varchar(10) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`fileID`, `fileupload`, `dateup`, `Format`, `ProductType`, `ProductDetail`, `Quanitity`, `DateReceip`, `TimeReceip`, `Member_ID`, `Status`, `Price`) VALUES
(37, '2-Database.pdf', '2018-03-27 21:57:04', 'หน้าหลัง', 'ขาวดำ', 'A2', '1', '2018-03-30', '16.01-18.00 น.', 2, 'รอการชำระ', '20'),
(38, '2-proposal-ล่าสุด.pdf', '2018-03-29 18:30:40', 'หน้าหลัง', 'สี', 'A5', '1', '2018-03-30', '16.01-18.00 น.', 2, 'รอการชำระ', '8'),
(39, '19-finish.pdf', '2018-03-30 15:11:36', 'หน้าเดียว', 'สี', 'A5', '1', '2018-03-23', '16.01-18.00 น.', 19, 'รอการชำระ', '15'),
(47, '20-ใบลา.pdf', '2018-05-09 07:15:42', 'หน้าหลัง', 'ขาวดำ', 'A2', '1', '2018-05-17', '10.31-12.00 น.', 20, 'กำลังดำเนินงาน', '5'),
(50, '17-InstallationInstructions.pdf', '2018-05-10 02:32:26', 'หน้าหลัง', 'สี', 'A2', '5', '2018-05-10', '10.31-12.00 น.', 17, 'กำลังดำเนินงาน', '10'),
(51, '17-30208RelatedTransactions25580715.pdf', '2018-05-10 02:33:18', 'หน้าเดียว', 'ขาวดำ', 'A3', '3', '2018-05-11', '16.01-18.00 น.', 17, 'กำลังดำเนินงาน', '6'),
(52, '16-Entity-Relationship-Diagram.pdf', '2018-05-10 02:34:52', 'หน้าเดียว', 'สี', 'A5', '5', '2018-05-13', '14.31-16.00 น.', 16, 'กำลังดำเนินงาน', '-'),
(54, '24-chap4(1).pdf', '2018-05-10 02:38:48', 'หน้าหลัง', 'ขาวดำ', 'A2', '8', '2018-05-17', '14.31-16.00 น.', 24, 'กำลังดำเนินงาน', '12'),
(55, '24-CJ-EXPRESS-ตราเด็กสมบูรณ์-2.pdf', '2018-05-10 02:39:18', 'หน้าเดียว', 'สี', 'A4', '5', '2018-05-17', '16.01-18.00 น.', 24, 'กำลังดำเนินงาน', '8'),
(57, '16-นำเสนอวิจัย(2).pdf', '2018-05-10 05:12:27', 'หน้าหลัง', 'ขาวดำ', 'A2', '5', '2018-05-31', '16.01-18.00 น.', 16, 'กำลังดำเนินงาน', '-'),
(58, '16-นำเสนอวิจัย(2).pdf', '2018-05-10 06:39:18', 'หน้าเดียว', 'สี', 'A2', '2', '2018-05-10', '16.01-18.00 น.', 16, 'กำลังดำเนินงาน', '-'),
(59, '17-นำเสนอวิจัย(2).pdf', '2018-05-10 07:44:06', 'หน้าเดียว', 'สี', 'A2', '5', '2018-05-11', '13.00-14.30 น.', 17, 'กำลังดำเนินงาน', '5'),
(60, '20-ร้านถ่ายเอกสาร.pdf', '2018-05-10 11:46:14', 'หน้าเดียว', 'สี', 'A3', '1', '2018-05-16', '13.00-14.30 น.', 20, 'กำลังดำเนินงาน', '10'),
(61, '20-UI.pdf', '2018-05-10 15:41:48', 'หน้าหลัง', 'ขาวดำ', 'A3', '5', '2018-05-24', '10.31-12.00 น.', 20, 'รอการชำระ', '3'),
(62, '20-รายงานในแบบกราฟรายวัน.pdf', '2018-05-10 15:42:15', 'หน้าเดียว', 'สี', 'A3', '5', '2018-05-23', '14.31-16.00 น.', 20, 'รอการยืนยัน', '30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Member_ID` int(10) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Userlevel` varchar(2) NOT NULL DEFAULT 'M'
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Member_ID`, `Firstname`, `Lastname`, `Username`, `Address`, `Email`, `Telephone`, `Password`, `Userlevel`) VALUES
(2, 'pop', 'pop', 'Husainee', 'thaiwan', 'on2539@gmail.com', '0822547912', 'pop', 'M'),
(6, 'บุสริน', 'ใสยิด', 'bussarin.24', 'กระบี่', 'saiyid2539@hotmail.com', '0823587877', 'beea6e0cb8e527cab0b82ec526cc7021', 'A'),
(7, 'สุทธิดา', 'ยิ่งมโนธรรม', 'mew', 'สงขลา', 'mew.mew@gmail.com', '0987634123', '4b673ef9d9869d2661a128b4d115f5fc', 'M'),
(9, 'นัสริญา', 'หลังยาหน่าย', 'pop.pop', '127/235', 'pop@gmail.com', '0856715554', '365478e7aa3477a1bc4ff5441c99d15f', 'M'),
(11, 'alisa', 'semmad', 'ali', '111', 'alias_ali-liizaa@hotmail.com', '0906691495', '827ccb0eea8a706c4c34a16891f84e7b', 'M'),
(17, 'nuslan', 'nuslan', 'nuslan', '90 ม.3 ต.ฝาละมี อ.', 'nuslan@hotmail.com', '0856715543', '50e8c188c5804de68231f0cc2212cc88', 'M'),
(18, 'ชนันธร', 'คนดีคนเดิม', 'boyza555', 'คอน', '5710513003@psu.ac.th', '081234652', 'e10adc3949ba59abbe56e057f20f883e', 'M'),
(19, 'nasreen', 'yala', 'nasreen', 'khabi', 'nasree@gmail.com', '0897322867', '1d17421a37617d1689376c62a4ecf49b', 'M'),
(20, 'sainee', 'sainee', 'sainee', '5 ม.5 ต.คลองแห อ.หาดใหญ่ จ.สงขลา', 'saiyid2539@gmail.com', '0980158381', '141401765e2a19d6d7781aebefe590f3', 'M'),
(21, '', '', '1600', '', '', '', 'b63e870b6c4819be9efa72eef4e81343', 'A'),
(22, 'asman', 'asmam', 'asman', 'khabi', 'asman@hotmail.com', '0884484680', 'a011a78a0c8d9e4f0038a5032d7668ab', 'M'),
(23, 'nasriya', 'Langyanai', 'nasriya', '127/235 ม.4 ต.คลองแห อ.หาดใหญ่ จ.สงขลา 90110', 'nasriya.pop@gmail.com', '0856715543', '365478e7aa3477a1bc4ff5441c99d15f', 'O'),
(24, 'aminah', 'langyanai', 'aminah15', '34 ม.5 ต.หาดใหญ่ จ.สงขลา', 'aminah_p@gmail.com', '0897322868', 'e027cf3f026af496000b9c335f76c32e', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploadfile`
--
ALTER TABLE `uploadfile`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Member_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploadfile`
--
ALTER TABLE `uploadfile`
  MODIFY `fileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Member_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
