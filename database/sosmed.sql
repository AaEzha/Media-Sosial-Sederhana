-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2019 at 09:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sosmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `pesan` text,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `parent`, `nama`, `pesan`, `waktu`) VALUES
(1, 0, 'Aa Ezha', 'Assalamu\'alaikum warahmatullahi wabarakatuh.', '2019-07-01 20:50:24'),
(2, 0, 'Ibrahim', 'Selamat belajar PHP di channel youtube Aa Ezha.', '2019-07-01 20:51:35'),
(3, 0, 'Mikael', 'Selamat pagi, semuanya! Bagaimana kabar kalian? Saya harap semuanya dalam keadaan sehat wal afiat.', '2019-07-01 21:00:37'),
(4, 1, 'Andi', 'Wa\'alaikumsalam warahmatullahi wabarakatuh.', '2019-07-01 21:13:16'),
(5, 2, 'Andini', 'Semoga saya bisa memahami materi-materi pada channel Aa Ezha.', '2019-07-01 21:15:08'),
(6, 3, 'Lorensius', 'Puji Tuhan, kabar saya hari ini sehat dan gembira sekali.', '2019-07-01 21:19:00'),
(7, 3, 'Firda', 'Selamat pagi juga, Mikael. Saya juga di sini alhamdulilah sehat wal afiat. Semoga kita selalu sehat, yah!', '2019-07-01 21:19:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
