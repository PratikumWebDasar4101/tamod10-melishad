-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 03:14 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta10`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `nim` varchar(10) NOT NULL,
  `namadepan` text NOT NULL,
  `namabelakang` text NOT NULL,
  `email` text NOT NULL,
  `kelas` text NOT NULL,
  `hobi` text NOT NULL,
  `genre` text NOT NULL,
  `wisata` text NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`nim`, `namadepan`, `namabelakang`, `email`, `kelas`, `hobi`, `genre`, `wisata`, `ttl`) VALUES
('6701174009', 'debby', '', 'debbymelisya99@gmail.com', 'd3mi41-01', '', 'Action, Thriller, Sci-Fi, Fantasy', 'Bali, Lombok, Bromo, Raja Ampat, Semeru', '2018-11-04'),
('6701174008', 'dea', 'deppppppppppp', 'debbymelisya99@gmail.com', 'd3mi41-02', 'Menulis, Membaca, Menggambar', 'Horror, Anime, Action, Drama', 'Bali, Tanjung Selor, Jakarta, Lombok', '2018-11-11'),
('6701174007', 'zaaaa', 'iii', 'debbymelisya99@gmail.com', 'd3mi41-02', 'Memancing, Olahraga', 'Array', 'Tanjung Selor', '2018-10-28'),
('6701174077', 'zizi', 'laila', 'debby@gmail.com', 'd3mi41-01', 'Memancing, Olahraga', 'Array', 'Bali', '2018-11-04'),
('6701174078', 'woww', 'riri', 'debby@gmail.com', 'd3mi41-01', 'Memancing, Menggambar', 'Anime', 'Jakarta', '2018-11-04'),
('6701174044', 'deaaa', 'amandaaa', 'debbymelisya99@gmail.com', 'd3mi41-01', 'Olahraga, Menggambar, Belanja', 'Horor, Anime', 'Bali, Tanjung Selor', '2018-12-02'),
('6701174999', 'hari', 'hariana', 'debby@gmail.com', 'd3mi4102', '', 'Thriller, Sci-Fi', 'Lombok, Bromo', '2018-11-05'),
('670117444', 'dit', 'pratama', 'debbycn@gmail.com', 'd3mi4102', '', 'Array', 'Bromo, Raja Ampat', '2018-11-18'),
('1234567890', 'burhan', 'lala', 'debby@gmail.com', 'd3mi4102', 'Menulis, Menggambar', 'Sci-Fi, Fantasy', 'Bromo', '2018-11-19'),
('1234567899', 'ANA xixixiix', 'lalaaaaaaaaaa', 'debby@gmail.com', 'd3mi4102', 'Menulis, Membaca', 'Action, Drama', 'Bali', '2018-11-05'),
('1234567888', 'akunasli', 'lala', 'debby@gmail.com', 'd3mi4102', 'Menulis, Membaca, Menggambar', 'Horror, Anime, Action, Drama', 'Bali, Bali, Bali, Lombok', '2018-11-12'),
('1234567888', 'akunasli', 'lala', 'debby@gmail.com', 'd3mi4102', 'Menulis, Membaca, Menggambar', 'Horror, Anime, Action, Drama', 'Bali, Bali, Bali, Lombok', '2018-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('', ''),
('akunasli', '12345'),
('debby', '12345678'),
('gendut', '124'),
('hari', '1234567'),
('momon', '1234567'),
('sisi', '123'),
('zizi', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
