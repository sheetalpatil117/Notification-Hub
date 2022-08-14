-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 11:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notification`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `description`, `link`, `time`) VALUES
(2, 'yhgh h', 'ht hggh', ' fgbnfg hgh');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `ename`, `text`, `link`) VALUES
(4, 'wqwqw', 'wqwqwqsqsqsqsqsq', 'qsqsqsqsqs');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `description`, `date`, `time`) VALUES
(2, 'kv ghjtydjy', 'tghrtgh', 'hththrth');

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`id`, `text`) VALUES
(1, '01/06/21\r\nevents , class');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pass`) VALUES
(1, 'Admin', '$2y$10$MPSYS1x6BEeDXqo2t.gDOeMbvZEMjYgekpyNA.Ksp1xdc2MWYTFKK');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `text`) VALUES
(8, ' hgh rtghrthrthrthrt hfgbnfgbfgh');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `token`) VALUES
(3, 'e4NRR-MdU6eA4ud3C5z4gi:APA91bHPVbfvBLbBKnKuzNQRoO-5J3c5PqRAeZndmzL7X2L0NRNUYz4ihS5bXKkPYqh3F0YZAorJD3MunoaFKzSGw_pRoV_0RgNI2yPmfHzOZ3TQn6V3RfOvDbdQBn4uy9lkVN7XyPyn'),
(5, 'cKegJO-bFE02ILInZNgK9V:APA91bGo8HMrlbHdHVxq_bGYRrsFImNs3kBcTyD_R9U-4W-JL9zFjRN1t_344YGH8w5fqV1RvN9pw-sKMJwlAEYWJ-sTyAA1rV821Y-CS7tkT33SsvY7SrWuvxJK3yJh_yTYtiiRVTeE'),
(6, 'fxjKj-8OWLEPf85ZH5Y1mp:APA91bHRril3wFrX8lvLkG19sm5q9NllcNKEEi5L6UtoM7gGoF4FvHrc280nwxbtmV5-3sP_ZXUMNSSW16wa4TktWOjnhCI7OQ8AJWhMxanJ0En6WSNgzocL4sVCd1-ByO86XYSYyAJy'),
(7, 'fWMlyV6Mj_Gj8uSrygPQSe:APA91bHTeLJf5511TfmTgZ4NBy_8XUmfeUlffQ32zsQY9lgpb7E_xwSI_Wu4ga-mKU3O-bFER4wBL6zeqkUeEdtxtdB6Oh_PGMbGAeD8aoYUAGrRFA-ujX6dCFgyf2mcafCc-mME9TeX'),
(8, 'dwKI_6R0jjGLKGcnnuH7zF:APA91bEEHbWzCOPaQCcGvYhioMs7FysbfYY1dsT2l0ZUuMr5QvWtX1AXb8FAO2IWXTACOu2owsscTcypw-XEJPBjsWbI9zk9bVcnioNjuVmyaPEP840koHSll0QMSsj_jXJxoKGg6bQ2'),
(9, 'cQMbKQwGkIkdG9gaewy_vJ:APA91bHGxjLYA3C73Dz0YP9fQpvW9MscesSoDIw0LElM6o1IuNirOBh_zep2BlnSq8cvLZ3D4o7rpgHxcPztjHjzCo8RWSXeOl2G-rwJn3eEElZNxi1m6B9xZPMRnOTrpu9cnBjyQ0v3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) DEFAULT NULL,
  `phn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flag`
--
ALTER TABLE `flag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
