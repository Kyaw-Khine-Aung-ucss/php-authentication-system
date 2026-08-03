-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2026 at 02:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(225) DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `address`, `password`, `photo`, `created_at`) VALUES
(1, 'Kyaw Khine Aung', 'kka@gmail.com', '09895517265', 'Yar Gyi Maruk', '$2y$10$NCmu3OpVJ778D8oXyZjds.7YFCPuK/gSxcTs0BHVLhwcc6TU.D9tO', 'default.png', '2026-08-01 10:23:09'),
(2, 'Su Myat', 'susu@gmail.com', NULL, NULL, '$2y$10$YK3s8HSv4n3pTmeY2V3zBuZ7Cka2YAsMSqPB66TAaX/NOEANxsITm', 'default.png', '2026-08-01 10:24:58'),
(3, 'Su Myat', 'suchay8877@gmail.com', NULL, NULL, '$2y$10$e/RHSvaQKtfs4tAyxr8faOQiTRLJaL9yCbm8mhKT/pdOGPCUJTr5y', 'default.png', '2026-08-02 02:54:44'),
(5, 'Htay Htay Soe', 'hhs@gmail.com', NULL, NULL, '$2y$10$yxj6E2WZePT2z/oOEMkBwOLRzAfGTw/YyL4fND7t43wRXxLRIHSPC', 'default.png', '2026-08-02 03:25:07'),
(6, 'Aung Kyaw Htay', 'akh@gmail.com', NULL, NULL, '$2y$10$khSXSWDayb4272kfqcz3NesvQd5NFppTjNiL2T2j7K3gGtrhBY1dO', 'default.png', '2026-08-02 03:42:05'),
(8, 'Mi Mi Kyaw', 'mmk@gmail.com', NULL, NULL, '$2y$10$W1FULpQ8RqxND3sgtyyO1OfGkSFqoixORNsV8NlSZgKSjhLLo5DZu', 'default.png', '2026-08-02 03:45:43'),
(9, 'San Aye Khine', 'sak@gmail.com', '09456789233', 'Sittwe', '$2y$10$3A/HS8DpZE177jfSgySyw.Eyx8fRB4B5PqUqNoP99xXqwLd7Ii4x6', 'default.png', '2026-08-02 03:54:45'),
(10, 'Than Dar Khine', 'tdk@gmail.com', NULL, NULL, '$2y$10$6YuXaqZYzM1//xmYFQKHzu1YFq9Ke0A2wxmuJZbrqB.el61uAc7Im', 'default.png', '2026-08-02 04:00:53'),
(11, 'Su Myat Nwe', 'smn@gmail.com', NULL, NULL, '$2y$10$wpsynYPh3LDX2nAReg.G3eMYdElSNj4Pc9THx32nVJE6C4mU8X6X.', 'default.png', '2026-08-02 06:32:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
