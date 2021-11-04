-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 02:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `stok` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `judul`, `jenis`, `penulis`, `penerbit`, `tahun`, `stok`) VALUES
(1, 'Belajar PHP', 'Teori', 'Atma', 'UAJY', 2012, 10),
(4, 'Sejarah UAJY', 'Kary Ilmiah', 'UAJY', 'PT.ATMA ', 2010, 10),
(5, 'Laskar Pelangi', 'Novel', 'Andrea Hirata', 'Bentang Pustaka', 2005, 10),
(6, 'Belajar HTML', 'Teori', 'Atma', 'PT.UAJY', 2019, 10),
(7, 'Buku Baru', 'Baru', 'Baru', 'Baru', 2010, 50);

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE `kembali` (
  `id` int(255) NOT NULL,
  `kembali_id` int(255) NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `verif_code` text NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id`, `nama`, `npm`, `prodi`, `username`, `password`, `email`, `verif_code`, `is_verified`) VALUES
(0, 'admin', '', '', 'admin', '$2y$10$RNdiyq1wjn1UkbrzZnFYdeI.8KlMeot9kYIFhBvLl0ebS7ABgdI4.', 'admin', '', 1),
(8, 'Juan Sebastian Veron', '190710051', 'Informatika', 'Peminjam', '$2y$10$CIhn2ZfgW3ELI9Y4T.rjDeLlUYR5yqZOdf8brNcvMP6XxR1sa3IPW', 'juan333@gmail.com', '', 0),
(9, 'CobaLagi', '1', 'Informatika', 'CobaLagi', '$2y$10$T.PVKEwAG9JTcybkTDnA3O.NU6JV44fbHaHjuZ5zGe3jMeQihMrXq', 'CobaLagi2@gmail.com', '', 0),
(12, 'Juan Sebastian Veron', '190710051', 'Informatika', '', '$2y$10$M65pseOh1x5.qXXuoGZZnONqw0p9bfZatjItr0smEK46ZRo3uUyf.', 'juanveron874@gmail.com', '40c4446a3657b340a783637b0eb3c740', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_tempo` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `buku_pinjam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `tgl_pinjam`, `tgl_tempo`, `tgl_kembali`, `nama`, `buku_pinjam`) VALUES
(1, '2021-11-01', '2021-11-15', '2021-11-12', 'Juan Sebastian Veron', 'Laskar Pelangi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`kembali_id`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kembali`
--
ALTER TABLE `kembali`
  MODIFY `kembali_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
