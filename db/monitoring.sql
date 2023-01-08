-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 02:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `clien` varchar(100) NOT NULL,
  `img_leader` varchar(100) NOT NULL,
  `leader_name` varchar(100) NOT NULL,
  `leader_email` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `progres` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `clien`, `img_leader`, `leader_name`, `leader_email`, `start_date`, `end_date`, `progres`) VALUES
(1, 'Pembuatan SI Keuangan', 'Ruang Guru', 'person1.jpg', 'Indra Setiawan', 'indrasetiawan4@gmail.com', '12 Jan 2022', '11 Des 2022', 84),
(2, 'Learning Managmen Sistem', 'Bakuda Prov. Kalsel', 'person2.jpg', 'Hilman Syahputra', 'hilman.syah@gmail.com', '12 Feb 2022', '6 Jun 2022', 43),
(3, 'SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'person3.jpg', 'Febri Gunawan', 'febrigunawan@gmail.com', '9 des 2022', '19 nov 2022', 63),
(4, 'Employee Monitoring', 'PT.Bina Sarana Sukses', 'person4.jpg', 'Handoko Aji', 'handokoaji@gmail.com', '7 jan 2022', '8 mei 2022', 20),
(13, 'SimKuliah', 'Universitas Syiah Kuala', 'haikal.jpg', 'Muhammad Haiqal', '6haikal6@gmail.com', '2023-01-20', '2023-01-31', 68);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
