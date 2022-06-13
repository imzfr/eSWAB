-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 03:45 PM
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
-- Database: `eswab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `department` int(10) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `name`, `phone`, `department`) VALUES
(1, 'lab1', 'f0bb867edecfe5414436f1f1974ce0d8', 'lab1@email.com', 'Iskandar', 123456789, 1),
(2, 'lab2', '8c3e36fcbeb7df6a932d8107698338b0', 'lab2@email.com', 'Nadia', 198765434, 1),
(3, 'management1', '86b54a60d8d9dbc782c30f67da3afc93', 'manage1@email.com', 'Syaza', 135790123, 2),
(4, 'management2', 'f5c3a1fcc0f8b44150b1e35fc5c2e995', 'manage2@email.com', 'Kira', 112346799, 2),
(5, 'medical1', '6c368f1f3144ca66bca069c8b708dd76', 'medical1@email.com', 'Hawa', 129384756, 3),
(6, 'medical2', '71f33706e8757aa8cec8427520b2db9b', 'medical2@email.com', 'Kamal', 156789012, 3);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `swabCentre` varchar(100) DEFAULT NULL,
  `swabTest` varchar(100) DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `time` time DEFAULT current_timestamp(),
  `statusApproval` int(10) NOT NULL DEFAULT 0,
  `patientStatus` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `swabCentre`, `swabTest`, `date`, `time`, `statusApproval`, `patientStatus`) VALUES
(26, 'Aina', 'BP Specialist Centre Cheras', 'RTK-Antigen', '2021-08-11', '23:00:00', 1, 1),
(27, 'Khuzaimah', 'BP Diagnostic Kajang', 'RT-PCR', '2021-07-21', '14:30:00', 1, 1),
(28, 'Atiqah', 'BP Diagnostic Kepong', 'RT-PCR', '2021-07-29', '11:00:00', 2, 2),
(29, 'Irma', 'BP Diagnostic Kajang', 'RT-PCR', '2021-07-10', '15:00:00', 2, 2),
(30, 'Alice', 'BP Diagnostic Kepong', 'RTK-Antigen', '2021-08-30', '10:00:00', 1, 0),
(31, 'Chongwei', 'BP Specialist Centre Cheras', 'RT-PCR (RM240)', '2021-07-17', '15:00:00', 1, 1),
(32, 'Ahmad', 'BP Diagnostic Kepong', 'RTK-Antigen (RM100)', '2021-07-31', '14:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date DEFAULT current_timestamp(),
  `race` varchar(11) DEFAULT NULL,
  `ic` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phoneNo` varchar(100) NOT NULL,
  `regDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fname`, `email`, `username`, `password`, `dob`, `race`, `ic`, `gender`, `address`, `phoneNo`, `regDate`) VALUES
(9, 'Nuraina Najwa', 'aina@gmail.com', 'Aina', '$2y$10$jHiW7b2JTqxU1xWtZB/tIe7N5EeeDI0oQ4v96QRbI/5raU1NZdBkG', '1999-09-02', 'Malay', '990902145184', 'Female', 'Gombak, Selangor', '0122117362', '2021-07-11 09:11:26.079964'),
(10, 'Nur Khuzaimah', 'khuzaimah@gmail.com', 'Khuzaimah', '$2y$10$uua68CEVll2ha/ZJKzl9ierAt2FtjCjdTbAxY3L7j6JeAEFanpaOO', '2000-11-17', 'Malay', '001117050138', 'Female', 'Seremban, Negeri Sembilan', '0193746284', '2021-07-11 09:15:27.440356'),
(11, 'Wan Nur Atiqah', 'atiqah@gmail.com', 'Atiqah', '$2y$10$js7A7Mg8CNPuFSZmc2CLQOG5gkZZQjwQQhOJPK6dtp9iDulsFlvJa', '2000-10-24', 'Malay', '001024100394', 'Female', 'Puchong, Selangor', '0198468394', '2021-07-11 09:17:07.146828'),
(12, 'Irma Zafirah', 'irma@gmail.com', 'Irma', '$2y$10$Yy5Qy0SxL.kUtrgh0mk/ZOV8pbXIlFWo0UfAJonYVpw4UV/3D9ZmW', '2000-02-05', 'Malay', '000205140542', 'Female', 'Kajang, Selangor', '0106625856', '2021-07-11 09:20:29.664518'),
(13, 'Alice Wonderland', 'alice@gmail.com', 'Alice', '$2y$10$29753UOQPpPpcFhxnNXnkO9d7vsek2LpPXHpt2TagQyn0KDWlAwkC', '1997-10-10', 'Others', '', 'Female', 'Kuala Lumpur', '0124734739', '2021-07-11 09:25:56.368341'),
(14, 'Lee Chong Wei', 'chongwei_lee@gmail.com', 'Chongwei', '$2y$10$I147228wiwEU2UlxrTY0qua3ytkUPw8h1KT4kCA9oq7H8PTAJbpUW', '1998-05-04', 'Chinese', '9804729462891', 'Male', 'Ampang, Kuala Lumpur', '0198374829', '2021-07-11 13:11:56.495991'),
(15, 'Ahmad Bin Abu', 'ahmad@gmail.com', 'Ahmad', '$2y$10$I93ca0QIa8MsbHzqbf0srOaUUrrjMq92sbamlvcLTGT.dblZ1WOty', '2000-03-12', 'Malay', '000312140432', 'Male', 'Selangor', '0124332738', '2021-07-11 13:38:02.533029');

-- --------------------------------------------------------

--
-- Table structure for table `tblresults`
--

CREATE TABLE `tblresults` (
  `username` text NOT NULL,
  `IC` varchar(15) NOT NULL,
  `Gender` text NOT NULL,
  `Race` text NOT NULL,
  `Results_ID` varchar(7) NOT NULL,
  `Results_Date` date NOT NULL DEFAULT current_timestamp(),
  `Results_Time` time NOT NULL,
  `Results_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresults`
--

INSERT INTO `tblresults` (`username`, `IC`, `Gender`, `Race`, `Results_ID`, `Results_Date`, `Results_Time`, `Results_Status`) VALUES
('Aina', '990902145184', 'Female', 'Malay', 'SWB0001', '2021-08-18', '05:01:00', 'Positive'),
('Chongwei', '9804729462891', 'Male', 'Chinese', 'SWB0002', '2021-07-24', '03:20:00', 'Negative'),
('Ahmad', '000312140432', 'Male', 'Malay', 'SWB0006', '2021-08-07', '09:44:00', 'Positive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresults`
--
ALTER TABLE `tblresults`
  ADD PRIMARY KEY (`Results_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
