-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2024 pada 16.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lampuhias`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_info`
--

CREATE TABLE `contact_info` (
  `id_ci` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact_info`
--

INSERT INTO `contact_info` (`id_ci`, `name`, `email`, `message`, `tanggal`) VALUES
(2, 'Muhadist Hasbi Irsyadi', 'aby@gmail.com', 'Barang yang dikirimkan sudah dengan tingkat keamanan yang sangat baik. Tetapi untuk pengiriman membutuhkan waktu yang sangat lama.', '2024-06-14 10:09:38'),
(3, 'Mutiara Sajidah', 'ejid123@gmail.com', 'Admin merespon customer dengan sangat ramah. Pertahankan kedepannya â˜…â˜…â˜…â˜…â˜…', '2024-06-14 10:12:53'),
(4, 'Lucas', 'lucas@gmail.com', 'Barang yang dikirim dengan kualitas yang sangat premium. Tetapi ada sedikit baret. Mungkin dapat meningkat keamanan barang yang akan di kirim \r\nbarang :â˜…â˜…â˜…â˜…â˜…\r\npengiriman : â˜…â˜…â˜…', '2024-06-14 10:16:42'),
(5, 'Lucas', 'lucas@gmail.com', 'Barang yang dikirim dengan kualitas yang sangat premium, tetapi ada sedikit baret. Mungkin dapat meningkat keamanan barang yang akan di kirim \r\nbarang     :â˜…â˜…â˜…â˜…â˜…\r\npengiriman :â˜…â˜…â˜…', '2024-06-14 10:17:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` enum('pending','completed','cancelled') NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `address`, `payment_method`, `total_price`, `status`, `order_date`) VALUES
(1, 'ragilang', 'padang', 'cash_on_delivery', '13500000.00', 'pending', '2024-07-02 15:17:11'),
(2, 'zil', 'padang', 'cash_on_delivery', '23300000.00', 'pending', '2024-07-03 03:39:59'),
(3, 'zil', 'padang', 'credit_card', '199000.00', 'pending', '2024-07-03 05:35:47'),
(4, 'Najwa', 'Bukittinggi', 'bank_transfer', '99000.00', 'pending', '2024-07-07 04:08:54'),
(5, 'Watil', 'Alahan Panjang', 'credit_card', '100000.00', 'pending', '2024-07-07 04:21:35'),
(6, 'Urwatil', 'Alahan Panjang', 'cash_on_delivery', '467000.00', 'pending', '2024-07-07 06:35:54'),
(7, 'Zil ', 'Agam', 'cash_on_delivery', '402000.00', 'pending', '2024-07-09 13:02:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `id_detail` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_items`
--

INSERT INTO `order_items` (`id_detail`, `order_id`, `product_id`, `name`, `quantity`, `price`) VALUES
(0, 4, 2, 'Lampu Tidur Panda', 1, '99000.00'),
(0, 5, 1, 'Lampu Tulip', 1, '100000.00'),
(0, 6, 4, 'lampu tidur', 2, '170000.00'),
(0, 6, 3, 'lampu gantung ', 1, '127000.00'),
(0, 7, 5, 'lampu hias senar light LED', 1, '275000.00'),
(0, 7, 3, 'lampu gantung ', 1, '127000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(60) NOT NULL,
  `price` double NOT NULL,
  `stok_tersedia` int(11) DEFAULT 0,
  `stok_awal` int(11) DEFAULT NULL,
  `stok_terjual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `stok_tersedia`, `stok_awal`, `stok_terjual`) VALUES
(1, '1.jpg', 'Lampu Tulip', 'lampu ini berbentuk seperti bunga tulip', 100000, 98, 200, 50),
(2, 'lampu tidur panda.jpg', 'Lampu Tidur Panda', 'lampu ini sangat cocok untuk anak-anak', 99000, 48, 100, 36),
(3, 'LP Dapur.jpg', 'lampu gantung ', 'lampu gantung ini cocok di pasang di dapur anda', 127000, 8, 55, 44),
(4, '3.jpg', 'lampu tidur', 'lampu ini cocok di pasang di kamar tidur', 170000, 30, 50, 13),
(5, 'lampu hias senar light LED.jpg', 'lampu hias senar light LED', 'Laptop cocok untuk di pasang di dalam kamar tidur', 275000, 19, 110, 90),
(6, 'Lampu Ranting Pohon.jpg', 'Lampu Ranting Pohon', 'cocok di letak kan di kamar tidur atau ruang keluarga', 54000, 92, 193, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_barang`
--

CREATE TABLE `stok_barang` (
  `id_stok` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `stok_awal` int(11) DEFAULT NULL,
  `stok_tersedia` int(11) DEFAULT NULL,
  `stok_terjual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(7, 'Zil ', 'ZIL@gmail.com', '$2y$10$/J7zrsPgspgEji13KD3nJ.xSQnOyR5weIW1KVXLdEdOpemkCNP/li', 'customer', '2024-07-03 06:47:16'),
(8, 'Najwa', 'najwa@gmail.com', '$2y$10$rtoBxeTYOPtMByo05Qm9D.hNSlt9AI1uYFh4J0dFrBlrK0ZcTVDMW', 'customer', '2024-07-07 04:08:01'),
(9, 'Watil', 'Urwatil@gmail.com', '$2y$10$8w9MtpEEpv2J7GifNul4me9jUwx245/8Lj/PCozDEQwvF3tjimD.G', 'customer', '2024-07-07 06:34:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id_ci`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id_ci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
