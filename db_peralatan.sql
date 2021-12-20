-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2021 pada 10.42
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peralatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nomor_batch`
--

CREATE TABLE `tbl_nomor_batch` (
  `nomor_urut` int(11) NOT NULL,
  `nip` int(100) NOT NULL,
  `nama_lengkap` int(100) NOT NULL,
  `nomor_batch` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nomor_batch`
--

INSERT INTO `tbl_nomor_batch` (`nomor_urut`, `nip`, `nama_lengkap`, `nomor_batch`) VALUES
(0, 0, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peralatan`
--

CREATE TABLE `tbl_peralatan` (
  `id_peralatan` varchar(10) NOT NULL,
  `tahun_pembelian` varchar(4) NOT NULL,
  `jenis_alat` varchar(30) NOT NULL,
  `deskripsi_alat` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_pengguna` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kata_sandi` varchar(30) NOT NULL,
  `hak_akses` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_pengguna`, `nama_lengkap`, `kata_sandi`, `hak_akses`, `status`) VALUES
('admin', 'admin', 'admin', 'Admin', 'aktif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
