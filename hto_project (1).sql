-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mei 2018 pada 17.41
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hto_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id_meja` varchar(5) NOT NULL,
  `no_meja` int(2) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id_meja`, `no_meja`, `status`) VALUES
('m1', 1, NULL),
('m10', 10, NULL),
('m2', 2, NULL),
('m3', 3, NULL),
('m4', 4, NULL),
('m5', 5, NULL),
('m6', 6, NULL),
('m7', 7, NULL),
('m8', 8, NULL),
('m9', 9, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id_menu` varchar(5) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_makanan`
--

INSERT INTO `menu_makanan` (`id_menu`, `nama_menu`, `harga`, `jenis`) VALUES
('mkn01', 'mie tumis', 12000, 'makanan'),
('mkn02', 'nasi goreng', 15000, 'makanan'),
('mkn03', 'martabak', 7000, 'makanan'),
('mkn04', 'pizza', 20000, 'makanan'),
('mkn05', 'nasi uduk', 12000, 'makanan'),
('mkn06', 'kentang goreng', 8000, 'makanan'),
('mkn07', 'sanger', 6000, 'minuman'),
('mkn08', 'es timun', 8000, 'minuman'),
('mkn09', 'teh dingin', 5000, 'minuman'),
('mkn10', 'rainbow shake', 10000, 'minuman'),
('mkn11', 'teh hijau', 8000, 'minuman'),
('mkn12', 'coklat dingin', 10000, 'minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` varchar(5) NOT NULL,
  `id_menu` varchar(5) NOT NULL,
  `harga` int(15) NOT NULL,
  `namamenu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `id_menu`, `harga`, `namamenu`) VALUES
('prm01', 'mkn04', 15000, 'pizza'),
('prm02', 'mkn02', 12000, 'nasi goreng'),
('prm03', 'mkn10', 8000, 'rainbow shake');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pemesanan`
--

CREATE TABLE `transaksi_pemesanan` (
  `id_menu` varchar(5) NOT NULL,
  `nomor_meja` int(3) NOT NULL,
  `total_harga` int(15) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_pemesanan`
--

INSERT INTO `transaksi_pemesanan` (`id_menu`, `nomor_meja`, `total_harga`, `jumlah`) VALUES
('mkn01', 1, 12000, 1),
('mkn06', 1, 8000, 1),
('mkn08', 1, 8000, 1),
('mkn01', 1, 24000, 2),
('mkn12', 1, 20000, 2),
('mkn08', 1, 8000, 1),
('mkn01', 1, 12000, 1),
('mkn12', 1, 20000, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `transaksi_pemesanan`
--
ALTER TABLE `transaksi_pemesanan`
  ADD KEY `id_menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu_makanan` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `transaksi_pemesanan`
--
ALTER TABLE `transaksi_pemesanan`
  ADD CONSTRAINT `transaksi_pemesanan_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu_makanan` (`id_menu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
