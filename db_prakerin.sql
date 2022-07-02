-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2021 pada 14.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prakerin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `id_siswa` varchar(6) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `ket` enum('Hadir','Sakit','Ijin','Alpa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `id_siswa`, `nama_siswa`, `tgl`, `jam`, `ket`) VALUES
(50, '19-679', 'Fajar Aji Kusuma', '2021-12-17', '11:07:12', 'Hadir'),
(51, '19-670', 'Adam Ryan Pangestu', '2021-12-17', '11:12:29', 'Hadir'),
(52, '19-700', 'Adam Ryan Pangestu', '2021-12-17', '13:23:40', 'Hadir'),
(55, '21-333', 'Fajar Aji Kusuma', '2021-12-17', '18:42:05', 'Hadir'),
(56, '21-334', 'Aji', '2021-12-17', '18:42:38', 'Hadir'),
(57, '19-679', 'Fajar Aji Kusuma', '2021-12-19', '07:16:53', 'Hadir'),
(58, '19-679', 'Fajar Aji Kusuma', '2021-11-30', '11:31:24', 'Hadir'),
(59, '21-933', 'FAJAR AJI KUSUMA', '2021-12-21', '11:43:52', 'Hadir'),
(60, '19-679', 'Adam Ryan Pangestu', '2021-12-21', '14:48:10', 'Hadir'),
(61, '21-990', 'Fajar', '2021-12-22', '16:06:13', 'Hadir'),
(62, '90-000', 'Fajar', '2021-12-22', '16:11:13', 'Hadir'),
(63, '19-679', 'Fajar Aji Kusuma', '2021-12-24', '21:08:09', 'Hadir'),
(64, '1222', 'Adam Ryan Pangestu', '2021-12-24', '21:08:14', 'Sakit'),
(65, 'K10', 'Fajar Aji Kusuma', '2021-12-24', '21:08:24', 'Hadir'),
(66, 'K09', 'DIMAS ADI PANGESTU', '2021-12-24', '21:08:29', 'Hadir'),
(67, '21-333', 'Fajar Aji Kusuma', '2021-12-24', '21:08:34', 'Hadir'),
(68, '19-670', 'Fajar Aji Kusuma', '2021-12-24', '21:08:39', 'Hadir'),
(69, 'K11111', 'Fajar Aji Kusuma', '2021-12-24', '21:08:47', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e62c3787c79d02fa7b8a7f5cfbe25a7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
