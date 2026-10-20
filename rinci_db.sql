-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2026 at 04:03 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rinci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `batas_anggaran` decimal(12,2) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `tahun` smallint(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`id`, `user_id`, `category_id`, `batas_anggaran`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '800000.00', 10, 2026, '2026-10-20 12:02:57', '2026-10-20 12:02:57'),
(2, 1, 2, '500000.00', 10, 2026, '2026-10-20 12:02:57', '2026-10-20 12:02:57'),
(3, 1, 3, '200000.00', 10, 2026, '2026-10-20 12:02:57', '2026-10-20 12:02:57'),
(4, 1, 4, '300000.00', 10, 2026, '2026-10-20 12:02:57', '2026-10-20 12:02:57'),
(5, 1, 5, '250000.00', 10, 2026, '2026-10-20 12:02:57', '2026-10-20 12:02:57'),
(6, 1, 6, '200000.00', 10, 2026, '2026-10-20 12:02:57', '2026-10-20 12:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` enum('pemasukan','pengeluaran') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `nama`, `tipe`, `created_at`) VALUES
(1, NULL, 'Makanan & Minuman', 'pengeluaran', '2026-10-20 11:59:40'),
(2, NULL, 'Sewa Kost', 'pengeluaran', '2026-10-20 11:59:40'),
(3, NULL, 'Transportasi', 'pengeluaran', '2026-10-20 11:59:40'),
(4, NULL, 'Kuliah & Buku', 'pengeluaran', '2026-10-20 11:59:40'),
(5, NULL, 'Hiburan', 'pengeluaran', '2026-10-20 11:59:40'),
(6, NULL, 'Belanja', 'pengeluaran', '2026-10-20 11:59:40'),
(7, NULL, 'Kiriman Orang Tua', 'pemasukan', '2026-10-20 11:59:40'),
(8, NULL, 'Beasiswa', 'pemasukan', '2026-10-20 11:59:40'),
(9, NULL, 'Gaji Part-time', 'pemasukan', '2026-10-20 11:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tipe` enum('pemasukan','pengeluaran') NOT NULL,
  `nominal` decimal(12,2) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `category_id`, `tipe`, `nominal`, `tanggal`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 'pemasukan', '2500000.00', '2026-10-01', 'Uang saku bulanan dari orang tua', '2026-10-20 12:03:41', '2026-10-20 12:03:41'),
(2, 1, 2, 'pengeluaran', '500000.00', '2026-10-02', 'Bayar kos bulanan', '2026-10-20 12:03:41', '2026-10-20 12:03:41'),
(3, 1, 1, 'pengeluaran', '45000.00', '2026-10-05', 'Makan siang warteg minggu 1', '2026-10-20 12:03:41', '2026-10-20 12:03:41'),
(4, 1, 4, 'pengeluaran', '150000.00', '2026-10-08', 'Cetak modul dan buku referensi', '2026-10-20 12:03:41', '2026-10-20 12:03:41'),
(5, 1, 3, 'pengeluaran', '50000.00', '2026-10-10', 'Isi bensin motor', '2026-10-20 12:03:41', '2026-10-20 12:03:41'),
(6, 1, 5, 'pengeluaran', '280000.00', '2026-10-12', 'Nonton bioskop & kopi bareng teman', '2026-10-20 12:03:41', '2026-10-20 12:03:41'),
(7, 1, 1, 'pengeluaran', '320000.00', '2026-10-15', 'Belanja bulanan bahan makanan', '2026-10-20 12:03:41', '2026-10-20 12:03:41'),
(8, 1, 9, 'pemasukan', '750000.00', '2026-10-18', 'Honor asisten laboratorium', '2026-10-20 12:03:41', '2026-10-20 12:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `nim`, `prodi`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Fauzi', 'ahmad.fauzi@mahasiswa.ac.id', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHe1234567890abcdefghijklmnopqrstuv', '21081010100', 'Informatika', '2026-10-20 11:59:04', '2026-10-20 11:59:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_budget_period` (`user_id`,`category_id`,`bulan`,`tahun`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

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
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `budgets`
--
ALTER TABLE `budgets`
  ADD CONSTRAINT `budgets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `budgets_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
