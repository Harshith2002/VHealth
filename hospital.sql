-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 04:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `SNO` int(11) NOT NULL,
  `District` varchar(50) NOT NULL,
  `num_hospitals` int(11) NOT NULL,
  `icu_total` int(11) NOT NULL,
  `icu_occupied` int(11) NOT NULL,
  `icu_available` int(11) NOT NULL,
  `o2_total` int(11) NOT NULL,
  `o2_occupied` int(11) NOT NULL,
  `o2_available` int(11) NOT NULL,
  `gnrl_total` int(11) NOT NULL,
  `gnrl_occupied` int(11) NOT NULL,
  `gnrl_available` int(11) NOT NULL,
  `ventilator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`SNO`, `District`, `num_hospitals`, `icu_total`, `icu_occupied`, `icu_available`, `o2_total`, `o2_occupied`, `o2_available`, `gnrl_total`, `gnrl_occupied`, `gnrl_available`, `ventilator`) VALUES
(1, 'Anantapur', 28, 204, 107, 97, 969, 519, 450, 566, 194, 372, 183),
(2, 'Chittoor', 39, 734, 479, 255, 2186, 1361, 825, 1482, 574, 908, 399),
(3, 'East Godavari', 31, 500, 305, 195, 1653, 763, 890, 1242, 401, 841, 115),
(4, 'Guntur', 55, 819, 524, 295, 2226, 1384, 842, 1202, 484, 718, 227),
(5, 'Krishna', 56, 527, 283, 244, 1567, 1061, 506, 1260, 626, 634, 143),
(6, 'Kurnool', 25, 365, 97, 268, 712, 455, 257, 219, 60, 159, 253),
(7, 'Prakasam', 31, 250, 152, 98, 1240, 837, 403, 794, 430, 364, 333),
(8, 'Spsr Nellore', 14, 205, 197, 8, 680, 653, 27, 519, 179, 340, 155),
(9, 'Srikakulam', 11, 312, 159, 153, 1084, 465, 619, 290, 112, 178, 155),
(10, 'Visakhapatanam', 50, 657, 291, 366, 2328, 861, 1467, 1989, 122, 1867, 500),
(11, 'Vizianagaram', 15, 195, 162, 33, 506, 215, 291, 834, 321, 513, 61),
(12, 'West Godavari', 38, 300, 19, 281, 1417, 612, 805, 882, 110, 772, 267),
(13, 'Y.S.R Kadapa', 5, 128, 61, 67, 715, 548, 167, 155, 120, 35, 203);

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `query` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`query`, `reply`) VALUES
('hello|hii|hi|hai|hyy', 'Yes, what can I do for you?');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user`, `product_name`, `cost`) VALUES
(7, 4, 'Get Slim', 150);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `avatar` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `session` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `avatar`, `email`, `password`, `session`, `user_name`) VALUES
(1, 'BANTWAL SUDHINDRA PAI', '18MIS7113', 'https://lh3.googleusercontent.com/a-/AOh14GjC_BMu_9EABTbipHZjDCnr4TUBJYhS0awsrUTf=s96-c', 'sudhindra.18mis7113@vitap.ac.in', '228zC', 'yz7z8wDxDC', 'BANTWAL SUDHINDRA PAI 18MIS7113'),
(2, 'Bsp', NULL, 'https://lh5.googleusercontent.com/-iQ7ILLIW2mM/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnaX9G2ROKHG2piZ4Al8i6DY2eQrw/s96-c/photo.jpg', 'bspnew26@gmail.com', 'ADwy2', 'v00xwCvvA8', 'Bsp '),
(3, 'Sudheendra', NULL, 'https://lh3.googleusercontent.com/a-/AOh14GgBbHMf6O9YyW1xofoJuZsWUUDApx4Zv_ay99-Eqg=s96-c', 'sudheendrapai.b@gmail.com', 'zAyDD', '0B9z9AwCvA', 'Sudheendra '),
(4, 'KANIGALPULA S S V M HARSHITH', '19BCE7349', 'https://lh3.googleusercontent.com/a/AATXAJy1NUIrfkBDm8UmpAHDYDLedTovPxaDRLuW9Or1=s96-c', 'harshith.19bce7349@vitap.ac.in', 'ADvDx', '89DAyyC28B', 'KANIGALPULA S S V M HARSHITH 19BCE7349');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`SNO`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
