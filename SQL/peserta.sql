-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 02:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `jadwal` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`jadwal`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nohp`, `foto`, `email`) VALUES
('2021-10-12', '3132718945734814', 'Vivi Novika Cahyani', 'Malang', '2001-05-21', 'Sumatera Utara', '081421478621', '3132718945734814.jpg', 'vivicuantik@gmail.com'),
('2021-10-16', '3151623947104241', 'Muhammad Ridwan', 'Medan', '1999-10-21', 'Medan, Sumatera Utara', '087761248245', '3151623947104241.jpg', 'wannn@gmail.com'),
('2021-10-16', '3171729165120001', 'Viorenita Adinda', 'Batam', '1999-02-19', 'Bandung, Jawa Barat', '0876214851215', '3171729165120001.jpg', 'nitavior@gmail.com'),
('2021-10-19', '3515023335218883', 'Eko Julianto', 'Batam', '1997-03-15', 'Balikpapan, East Borneo', '081421471621', '3515023335218883.jpg', 'oura@gmail.com'),
('2021-10-20', '3515081240010002', 'Muhammad Albi', 'Bogor', '2002-02-02', 'Bogor, Jawa Barat', '0861264851851', '3515081240010002.jpg', 'ryzenalbi@gmail.com'),
('2021-10-25', '3515082165218881', 'Maureen Alice G', 'Manado', '2000-01-12', 'Manado 124', '081421478142', '3515082165218881.jpg', 'alice@gmail.com'),
('2021-10-08', '3516278762410912', 'Made Bagus Prabaswara', 'Jakarta', '2002-05-17', 'Jakarta Utara', '081211818181', '3516278762410912.jpg', 'luxxygamingg@gmail.com'),
('2021-10-13', '3712816411711164', 'Muhammad Daffa Java', 'Surabaya', '1998-12-14', 'Mayjend Sungkono 12', '081421478421', '3712816411711164.jpg', 'daffaramones@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
