-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2024 pada 04.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'rayya@gmail.com', 123, '2024-04-30 11:55:35'),
(7, 'ridho@gmail.com', 123, '2024-04-30 14:02:19'),
(15, 'awaaa@gmail.com', 123, '2024-05-14 09:10:09'),
(17, 'aaa@gmail.com', 123, '2024-05-16 13:37:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jurusan`
--

CREATE TABLE `tabel_jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `pembimbing` varchar(150) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_jurusan`
--

INSERT INTO `tabel_jurusan` (`id`, `nama_jurusan`, `pembimbing`, `keterangan`) VALUES
(1, 'Teknik Jaringan Komputer', 'Pak Tedi', ''),
(2, 'Teknik Kendaraan Ringan Otomotif', 'Pak', ''),
(3, 'Akutansi Keuangan Lembaga', 'Bu', ''),
(4, 'Perbangkan Syariah', 'Bu', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_siswas`
--

CREATE TABLE `tabel_siswas` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `umur` int(11) NOT NULL,
  `kelahiran` date NOT NULL,
  `provinsi` text NOT NULL,
  `kota_kabupaten` text NOT NULL,
  `alamat` longtext NOT NULL,
  `nohp` char(16) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_siswas`
--

INSERT INTO `tabel_siswas` (`id`, `nama_lengkap`, `jurusan_id`, `umur`, `kelahiran`, `provinsi`, `kota_kabupaten`, `alamat`, `nohp`, `gender`) VALUES
(54, 'Ridho Dwi Barkah', 1, 17, '2007-02-02', 'Jawa Barat', 'Cirebon', 'Kedung Menjangan', '089765434565', 'Pria'),
(55, 'Rayya', 3, 16, '2008-02-15', 'Jawa Barat', 'Cirebon', 'Tugu Dalem', '08987645667', 'Wanita'),
(62, 'Yaya', 4, 17, '2024-05-21', 'Jawa Tengah', 'Semarang', 'manaaaaaaa', '088966888', 'Wanita'),
(63, 'ggg', 0, 0, '0000-00-00', 'Provinsi', 'Kota/Kabupaten', '', '', 'Pria');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `tabel_jurusan`
--
ALTER TABLE `tabel_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_siswas`
--
ALTER TABLE `tabel_siswas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tabel_jurusan`
--
ALTER TABLE `tabel_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_siswas`
--
ALTER TABLE `tabel_siswas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
