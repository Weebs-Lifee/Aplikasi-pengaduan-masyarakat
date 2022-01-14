-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 10.03
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `isi_laporan` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `user_id`, `isi_laporan`, `photo`, `tanggal`, `status`) VALUES
(7, 12, 'P bang, Mohon Bantuan nya, saat ini saya sedang kehilangan Waifu saya satu-satuya(Gambar Bisa Di lihat di Foto ini), uda 1 minggu saya tidak Tidur, Bila ada yang menemukan Waifu saya Tolong Beritahu saya, Hub : 082241xxxxxxx Reward? Maaf Saya Miskin h3h3h3', 'uploads/29771_af0a28e08c9eaeaef29bd8a53b8dd402.png', '2021-02-15', 'new'),
(9, 12, 'hai', 'uploads/unnamed.jpg', '2021-03-15', 'new'),
(14, 11, 'bang', 'uploads/fakta-armored-titan-320x180.jpg', '2021-03-15', 'new'),
(15, 12, 'Typografi saya bang', 'uploads/anjay.png', '2021-03-15', 'new'),
(16, 12, 'titan!!', 'uploads/29771_af0a28e08c9eaeaef29bd8a53b8dd402-picsay.png', '2021-03-15', 'new'),
(17, 12, 'Kato UwU', 'uploads/29771_af0a28e08c9eaeaef29bd8a53b8dd402.png', '2021-03-15', 'new'),
(20, 15, 'Moshi moshi', 'uploads/unnamed.jpg', '2021-04-04', 'new'),
(21, 14, '1010111000101010101010', 'uploads/photo_2020-11-03_00-50-59.jpg', '2021-04-04', 'new'),
(24, 13, '<p>Lorem ipsum dolor<strong>, sit amet, consectetur adipisicing elit. Possimus per</strong>spiciatis quas obcaecati ea esse rem magnam, labore neque velit similique, amet nemo alias repellendus nihil libero quaerat assumenda eum, voluptates?</p>\r\n', 'uploads/Koala.jpg', '2021-04-06', 'new'),
(25, 13, '<p>aaahhh<strong> <span dir=\"rtl\">pocong</span></strong><span dir=\"rtl\"> </span>wangy wangy uhhwhasash</p>\r\n', 'uploads/toror-pocong-hh-1024x640.png', '2021-04-07', 'new'),
(27, 21, '<p>ngadu bang</p>\r\n', 'uploads/subahannal brader.png', '2021-04-07', 'new');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id` int(11) UNSIGNED NOT NULL,
  `pengaduan_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `tanggapan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id`, `pengaduan_id`, `user_id`, `tanggapan`, `tanggal`) VALUES
(1, 1, 2, 'tenang mikasa sedang dalam perjalanan', '2021-01-19'),
(2, 6, 11, 'bacod banyak cakap', '2021-01-26'),
(3, 7, 11, 'oke kawan', '2021-02-15'),
(4, 22, 11, 'ya', '2021-04-06'),
(5, 25, 11, 'Dih stress\r\n', '2021-04-07'),
(6, 25, 20, 'wih mantep wangy wangy', '2021-04-07'),
(7, 24, 11, 'wih hekel :v\r\n', '2021-04-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `role` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `alamat`, `telp`, `role`, `created_at`) VALUES
(11, 'Admin', 'admin@admin', 'f886ec77e60874df4c61ed0a4d9ddde8', 'Admin Rahasia dong', '010101010', 'admin', '2021-04-06 09:28:42'),
(13, 'Kazuma', 'kazuma@jp', 'f886ec77e60874df4c61ed0a4d9ddde8', 'Isekai', '010101001', 'masyarakat', '2021-04-06 06:14:24'),
(14, 'hekel', 'hekel@brruh', 'f886ec77e60874df4c61ed0a4d9ddde8', 'Unknown Address', '01010100101', 'admin', '2021-04-06 11:58:24'),
(16, 'Adin Shobirin', 'adinshobirin@yahoo.com', 'f886ec77e60874df4c61ed0a4d9ddde8', 'sunggal sei mencirim', '082241433971', 'masyarakat', '2021-04-05 11:04:36'),
(17, 'Dedy .S', 'dedycorporation@gmail.com', 'f886ec77e60874df4c61ed0a4d9ddde8', 'JAKARTA SELATAN NO.42', '082241433971', 'masyarakat', '2021-04-06 12:08:00'),
(18, 'p nya', 'www@yaya', 'fcea920f7412b5da7be0cf42b8c93759', 'Gk ada', '080898523652', 'masyarakat', '2021-04-07 02:50:34'),
(20, 'petugas', 'petugas@gas', 'f886ec77e60874df4c61ed0a4d9ddde8', 'Depang gerbang', '130824971', 'petugas', '2021-04-06 10:04:47'),
(21, 'name', 'name@gmail.com', 'f886ec77e60874df4c61ed0a4d9ddde8', 'test', '1032423', 'masyarakat', '2021-04-07 03:05:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
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
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
