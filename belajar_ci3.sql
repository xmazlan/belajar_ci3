-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2021 pada 08.02
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_ci3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_investasi`
--

CREATE TABLE `tb_investasi` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `no_dan_tgl` varchar(255) NOT NULL,
  `bidang_usaha` varchar(255) NOT NULL,
  `alamat_kantor` varchar(255) NOT NULL,
  `kode_lokasi` int(5) NOT NULL,
  `kode_negara` int(5) NOT NULL DEFAULT 1,
  `investasi_tambahan` decimal(20,0) NOT NULL DEFAULT 0,
  `investasi_total` decimal(20,0) NOT NULL DEFAULT 0,
  `tki` int(11) NOT NULL DEFAULT 0,
  `tka` int(11) NOT NULL DEFAULT 0,
  `mata_uang` enum('usd','rp') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_investasi`
--

INSERT INTO `tb_investasi` (`id`, `nama_perusahaan`, `no_dan_tgl`, `bidang_usaha`, `alamat_kantor`, `kode_lokasi`, `kode_negara`, `investasi_tambahan`, `investasi_total`, `tki`, `tka`, `mata_uang`) VALUES
(3, 'Test Nama Perusahaan', 'test 123 / tgl 2021', 'test bidang', 'test alamat', 1, 1, '1000', '2000', 100, 10, 'rp'),
(6, 'PT Untung Terus Tak Mau Rugi', 'nomor 123 / 7 Agustus 2021', 'Investasi Bodong', 'gak ada alamat, dirahasiakan', 3, 1, '1200', '10000000', 2, 1, 'rp'),
(7, 'fgvh', 'sgfsdf', 'dfgsd', 'gsdfgs', 4, 1, '0', '0', 0, 0, 'rp'),
(8, 'sdf', 'fas', 'fasdfas', 'asdfa', 1, 1, '0', '0', 0, 0, 'rp'),
(9, 'sdf', 'fas', 'fasdfas', 'asdfa', 1, 1, '0', '0', 0, 0, 'rp'),
(10, 'sdf', 'fas', 'fasdfas', 'asdfa', 1, 1, '0', '0', 0, 0, 'rp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id` int(5) NOT NULL,
  `nama_lokasi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id`, `nama_lokasi`) VALUES
(1, 'Provinsi Riau'),
(2, 'Kota Pekanbaru'),
(3, 'Kabupaten Bengkalis'),
(4, 'Kabupaten Kampar'),
(14, 'Kabupaten Pelalawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_negara`
--

CREATE TABLE `tb_negara` (
  `id` int(5) NOT NULL,
  `nama_negara` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_negara`
--

INSERT INTO `tb_negara` (`id`, `nama_negara`) VALUES
(1, 'Indonesia'),
(2, 'Jepang'),
(3, 'Amerika'),
(4, 'Korea'),
(5, 'Singapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `fullname` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `fullname`, `password`, `image`, `is_active`) VALUES
(3, 'mazlan', 'owner@xmazlan.com', 'Ahmad Mazlan', '$2y$10$f2hC6o52jUyENdZJAEL8/ejcI5bXUEFTtttYg3mAa/xJoUP9EHSVC', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_investasi`
--
ALTER TABLE `tb_investasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_lokasi` (`kode_lokasi`),
  ADD KEY `kode_negara` (`kode_negara`);

--
-- Indeks untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_investasi`
--
ALTER TABLE `tb_investasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_investasi`
--
ALTER TABLE `tb_investasi`
  ADD CONSTRAINT `tb_investasi_ibfk_1` FOREIGN KEY (`kode_lokasi`) REFERENCES `tb_lokasi` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_investasi_ibfk_2` FOREIGN KEY (`kode_negara`) REFERENCES `tb_negara` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
