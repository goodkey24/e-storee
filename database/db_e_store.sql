-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2022 pada 10.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_hid` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `password_hid`, `gambar`, `level`) VALUES
(11, 'Mqhyri', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'user-5.jpg', 'admin'),
(15, 'Aril Munandar', 'user23', '2f10bdaa9c9ba1e338378a1fa1d7520c', 'aril888', 'avatar-6.jpg', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `kategoriid` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `hargadiskon` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_brg`, `kategoriid`, `gambar`, `stok`, `tgl`, `status`, `harga`, `hargadiskon`, `deskripsi`) VALUES
(35, 'Kulkas LG', 2, '10111227_1.jpg', '1', '2021-09-01', 'readystok', '2000000', '1500000', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n'),
(36, 'Panasonic Led TV DIGITAL HD 32 Inch 32H410G', 9, '1646418906.jpg', '4', '2021-09-01', 'readystok', '4000000', '3999000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n'),
(37, 'Panasonic  32H410G', 3, '1646419290.png', '3', '2022-03-05', 'readystok', '2000000', '1999000', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n'),
(38, 'ECLE Bluetooth Wireless Speaker Mini Portable Super Bass Stereo', 4, '1646419414.jpg', '2', '2022-03-03', 'readystok', '2500000', '2100000', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n'),
(39, 'Samsung Mesin Cuci Top Loading Wa75h4200sg/se', 5, '1646419532.jpg', '2', '2021-09-01', 'readystok', '1890000', '1760000', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n'),
(40, 'Miyako MCM-528 Rice Cooker [1.8 L] – Random Color', 6, '1646419786.jpg', '6', '2021-09-01', 'readystok', '600000', '560000', '<p>Merk:<a href=\"https://www.blibli.com/brand/miyako\">Miyako</a></p>\r\n\r\n<p>Kategori:&nbsp;<a href=\"https://www.blibli.com/c/2/perlengkapan-elektronik-dapur/PE-1000017/54650\">Perlengkapan Elektronik Dapur</a></p>\r\n\r\n<p>Gratis retur 15 hari (semua alasan)Bayar di tempat (COD)Jaminan stok tersedia</p>\r\n\r\n<p>&bull; Rice cooker<br />\r\n&bull; Desain minimalis<br />\r\n&bull; Tiga fungsi : memasak, mengkukus, dan Menghangatkan<br />\r\n&bull; Konsumsi daya : 395 W<br />\r\n&bull; Kapasitas : 1.8 L</p>\r\n'),
(41, 'SHARP SWD-83EHL-SL Dispenser [Bottom Loading]', 7, '1646419939.jpg', '5', '2022-03-09', 'readystok', '2750000', '2600000', '<p>Merk:<a href=\"https://www.blibli.com/brand/sharp\">SHARP</a><img alt=\"blibli image alt\" src=\"https://www.static-src.com/frontend/product-detail/static/img/logo-os.55e31b42.svg\" /></p>\r\n\r\n<p>Kategori:&nbsp;<a href=\"https://www.blibli.com/c/2/perlengkapan-elektronik-dapur/PE-1000017/54650\">Perlengkapan Elektronik Dapur</a></p>\r\n\r\n<p>Gratis retur 15 hari (bersyarat)Garansi resmi 1 tahunBayar di tempat (COD)Jaminan stok tersedia</p>\r\n\r\n<p>&bull; 3 Wattage (ECO, Normal, Fast)<br />\r\n&bull; 3 Faucets (Hot, Normal, Cold)<br />\r\n&bull; Bottom Loading<br />\r\n&bull; 5 LED Indicator<br />\r\n&bull; Self-Cleaning Function<br />\r\n&bull; Night Lamp</p>\r\n'),
(42, 'LG P905R  3', 3, '1647509558.png', '2', '2022-03-17', 'readystok', '2000000', '1850000', '<p>abc</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `barangid` int(11) NOT NULL,
  `kategoriid` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id`, `barangid`, `kategoriid`, `gambar`, `kuantitas`, `harga`) VALUES
(23, 41, 7, '', '1', '2600000'),
(24, 41, 7, '', '2', '2600000'),
(25, 41, 7, '', '1', '2600000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(2, 'Kulkas'),
(3, 'AC'),
(4, 'Speaker'),
(5, 'Mesin Cuci'),
(6, 'Rice Cooker'),
(7, 'Water Dispenser'),
(9, 'TV LED');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `pelangganid` int(11) NOT NULL,
  `barangid` int(11) NOT NULL,
  `kategoriid` int(11) NOT NULL,
  `usernameid` int(11) NOT NULL,
  `jkid` int(11) NOT NULL,
  `alamatid` int(11) NOT NULL,
  `tanggalpesan` date NOT NULL,
  `jmlpesan` varchar(255) NOT NULL,
  `noinvoice` varchar(255) NOT NULL,
  `hargaid` int(11) NOT NULL,
  `gambarid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `pelangganid`, `barangid`, `kategoriid`, `usernameid`, `jkid`, `alamatid`, `tanggalpesan`, `jmlpesan`, `noinvoice`, `hargaid`, `gambarid`, `status`) VALUES
(15, 1, 35, 2, 1, 1, 1, '2022-02-25', '4', 'INV000001', 35, 35, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanandetail`
--

CREATE TABLE `pemesanandetail` (
  `id` int(11) NOT NULL,
  `pelangganid` int(11) NOT NULL,
  `barangid` int(11) NOT NULL,
  `kategoriid` int(11) NOT NULL,
  `tanggalpesan` date NOT NULL,
  `jmlpesan` varchar(255) NOT NULL,
  `noinvoice` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_hid` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `jk`, `alamat`, `email`, `username`, `password`, `password_hid`, `level`) VALUES
(1, 'Djancuk', 'l', 'Lampaseh', 'user1@gmail.com', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1', 'user'),
(29, 'Andi', 'l', 'Kajhu', 'user2@gmail.com', 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user2', 'user'),
(30, 'Founder', 'l', 'alulong egge', 'khairunnasmeukek7@gmail.com', 'user2@', '7e58d63b60197ceb55a1c487989a3720', 'user2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanandetail`
--
ALTER TABLE `pemesanandetail`
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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pemesanandetail`
--
ALTER TABLE `pemesanandetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
