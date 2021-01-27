-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 01:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sr_no` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(20) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sr_no`, `name`, `age`, `height`, `weight`, `mobile`, `date`, `status`) VALUES
(1, 'piyush wanjari', 25, '156', '50', '2147483647', '0000-00-00', 0),
(2, 'sunita', 50, '156', '55', '2147483647', '0000-00-00', 0),
(3, '', 0, '', '', '0', '0000-00-00', 1),
(4, 'neha', 27, '156cm', '60kg', '2147483647', '2021-01-28', 0),
(5, 'piyush wanjari', 28, '156cm', '60kg', '2147483647', '2021-01-27', 0),
(6, 'piyush wanjari', 28, '156cm', '50', '2147483647', '2021-01-29', 0),
(7, 'neha', 28, '156cm', '60kg', '2147483647', '2021-01-28', 0),
(8, 'shubham', 26, '55', '55', '95959595', '2021-01-13', 0),
(9, 'piush', 25, '60', '100', '2147483647', '2021-01-13', 0),
(10, 'piush', 25, '60', '100', '2147483647', '2021-01-13', 0),
(11, 'Shubhamk', 55, '55', '52', '2147483647', '2021-01-19', 0),
(12, 'Shubhamk', 55, '55', '52', '11111222255', '2021-01-19', 0),
(13, 'Shubhamk', 55, '55', '52', '11111222255', '2021-01-19', 0),
(14, 'Shubhamk', 55, '55', '52', '11111222255', '2021-01-19', 0),
(15, 'Shubhamk', 55, '55', '52', '11111222255', '2021-01-19', 0),
(16, 'shu', 25, '120cm', '50kg', '123456789', '2021-01-29', 1),
(17, '', 0, '', '', '', '0000-00-00', 1),
(18, 'Shubham', 55, '51', '151', '959595', '2021-01-21', 1),
(19, 'Piyush', 25, '500', '100', '9175277193', '2021-01-05', 1),
(20, 'neha', 27, '169cm', '63kg', '8623015821', '2021-01-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `id` int(11) NOT NULL,
  `drname` varchar(150) NOT NULL,
  `drpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`id`, `drname`, `drpass`) VALUES
(1, 'doctor@gmail.com', 'doctor123');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `medicineone` varchar(300) NOT NULL,
  `medonetime` int(11) NOT NULL,
  `medicinetwo` varchar(300) NOT NULL,
  `medtwotime` int(11) NOT NULL,
  `medicinethree` varchar(300) NOT NULL,
  `medthreetime` int(11) NOT NULL,
  `medicinefour` varchar(300) NOT NULL,
  `medfourtime` int(11) NOT NULL,
  `medicinefive` varchar(300) NOT NULL,
  `medfivetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `mobile`, `medicineone`, `medonetime`, `medicinetwo`, `medtwotime`, `medicinethree`, `medthreetime`, `medicinefour`, `medfourtime`, `medicinefive`, `medfivetime`) VALUES
(1, '9175277193', 'Crocine', 3, 'Paracitamol', 3, 'Dynafide', 2, 'Vicks', 6, 'Fola acid', 1),
(6, '959595', 'Crosine', 6, 'Paracytamol', 3, 'Syrup', 5, 'dynafar', 2, 'folic acid', 2),
(7, '9175277193', '', 0, '', 0, '', 0, '', 0, '', 0),
(8, '9175277193', '', 0, '', 0, '', 0, '', 0, '', 0),
(9, '9175277193', '', 0, '', 0, '', 0, '', 0, '', 0),
(10, '8623015821', '', 0, '', 0, '', 0, '', 0, '', 0),
(11, '8623015821', '', 0, '', 0, '', 0, '', 0, '', 0),
(12, '8623015821', '', 0, '', 0, '', 0, '', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `sr_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
