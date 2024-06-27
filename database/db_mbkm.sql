-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2024 pada 16.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mbkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_akun`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cluster`
--

CREATE TABLE `tbl_cluster` (
  `id_cluster` int(11) NOT NULL,
  `image_cluster` varchar(500) NOT NULL,
  `desc_cluster` varchar(550) NOT NULL,
  `type_cluster` varchar(225) NOT NULL,
  `menu_cluster` varchar(225) NOT NULL,
  `sub_menu_cluster` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_cluster`
--

INSERT INTO `tbl_cluster` (`id_cluster`, `image_cluster`, `desc_cluster`, `type_cluster`, `menu_cluster`, `sub_menu_cluster`) VALUES
(1, 'test.jpg', 'Cluster kakao Type 1', 'Kakao', 'UBT', 'A'),
(2, '4.jpg', 'Cluster Kakao tipe 2', 'Kakao', 'UBT', 'B'),
(3, '12.jpg', 'Cluster Kakao tipe 3', 'Kakao', 'PPG', 'B'),
(4, '9.jpg', 'Cluster Pendidikan tipe 1', 'Pendidikan', 'UBT', 'A'),
(18, '8c0e1305134edb5d3e243d6504080ee1.jpg', 'Cluster Kakao tipe 6', 'Kakao', 'PENS', 'A'),
(19, '15.jpg', 'Cluster Pendidikan tipe 2', 'Pendidikan', 'UBT', 'B'),
(23, '14.jpg', 'Cluster Perikanan tipe 1', 'Perikanan', 'UNPAD', 'A'),
(24, '4.jpg', 'Cluster Peternakan tipe 1', 'Peternakan', 'PENS', 'B'),
(25, '1.jpg', 'Cluster Kesehatan tipe 1', 'Kesehatan', 'PPG', 'A'),
(26, '5.jpg', 'Cluster Stunting tipe 1', 'Stunting', 'PENS', 'B'),
(27, 'banner_5.jpg', 'Cluster Perikanan tipe 2', 'Perikanan', 'UBT', 'B'),
(28, 'banner_10.jpg', 'Cluster Peternakan tipe 2', 'Peternakan', 'PENS', 'A'),
(29, 'banner_1.jpg', 'Cluster Stunting tipe 2', 'Stunting', 'PPG', 'A'),
(31, '1.jpg', 'BUMDESa ke 2', 'BUMDESa', 'PPG', 'B'),
(32, '13.jpg', 'Dokumentasi 1', 'Dokumentasi', '-', 'B'),
(33, '11.jpg', 'BUMDESa ke 3', 'BUMDESa', 'PPG', 'A');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `tbl_cluster`
--
ALTER TABLE `tbl_cluster`
  ADD PRIMARY KEY (`id_cluster`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_cluster`
--
ALTER TABLE `tbl_cluster`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
