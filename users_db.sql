-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2020 pada 13.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goldenin_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_db`
--

CREATE TABLE `users_db` (
  `uid` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `expiring` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_db`
--

INSERT INTO `users_db` (`uid`, `username`, `email`, `password`, `tanggal`, `expiring`, `status`, `verified`) VALUES
(166, 'gold', 'gold@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2020-11-03', '2020-12-03', 1, 1),
(167, 'silver', 'silver@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2020-11-03', '2020-12-03', 2, 0),
(168, 'bronze', 'bronze@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2020-11-03', '2020-12-03', 3, 0),
(171, 'dummy', 'dummy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-10-20', '2020-11-03', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users_db`
--
ALTER TABLE `users_db`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
