-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 12:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncp3106finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_date` text DEFAULT NULL,
  `log_time` text DEFAULT NULL,
  `log_timestamp` text DEFAULT NULL,
  `log_event` text DEFAULT NULL,
  `log_transactionID` text DEFAULT NULL,
  `log_encoder` text DEFAULT NULL,
  `log_encoderPosition` text DEFAULT NULL,
  `log_personID` text DEFAULT NULL,
  `log_personName` text DEFAULT NULL,
  `log_purok` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_date`, `log_time`, `log_timestamp`, `log_event`, `log_transactionID`, `log_encoder`, `log_encoderPosition`, `log_personID`, `log_personName`, `log_purok`) VALUES
('2021-12-16', '09:59:12 AM', '2021-12-16 09:59:12 AM', 'Registered official ', 'RO-20211216095912', 'ADMIN NAME', 'ADMIN POSITION', '2021-971812', 'Tio, Rozs Raven Gatchalian', 'ADMIN PUROK'),
('2021-12-16', '10:02:37 AM', '2021-12-16 10:02:37 AM', 'Registered resident ', 'RR-20211216100237', 'Rozs', 'Barangay Captain', '2021-446637', 'Tio, Rozs Raven Gatchalian', 'Talipapa'),
('2021-12-16', '10:03:49 AM', '2021-12-16 10:03:49 AM', 'Updated resident ', 'UR-20211216100349', 'Rozs', 'Barangay Captain', '2021-446637', 'Tio, Rozs Raven Gatchalian', 'Talipapa'),
('2021-12-16', '10:04:45 AM', '2021-12-16 10:04:45 AM', 'Downloaded Certificate of Residency ', 'DLCR-20211216100445', 'Rozs', 'Barangay Captain', '2021-446637', 'Tio, Rozs Raven Gatchalian', 'Talipapa'),
('2021-12-16', '10:06:55 AM', '2021-12-16 10:06:55 AM', 'Downloaded Barangay Clearance ', 'DLBC-20211216100655', 'Rozs', 'Barangay Captain', '2021-446637', 'Tio, Rozs Raven Gatchalian', 'Talipapa'),
('2021-12-16', '10:11:35 AM', '2021-12-16 10:11:35 AM', 'Deleted resident ', 'DR-20211216101135', 'Rozs', 'Barangay Captain', '2021-446637', 'Tio, Rozs Raven Gatchalian', 'Talipapa'),
('2021-12-16', '10:17:41 AM', '2021-12-16 10:17:41 AM', 'Registered resident ', 'RR-20211216101741', 'Rozs', 'Barangay Captain', '2021-507441', 'Tio, Rozs Raven Gatchalian', 'Talipapa'),
('2021-12-16', '11:16:17 AM', '2021-12-16 11:16:17 AM', 'Updated resident ', 'UR-20211216111617', 'Rozs', 'Barangay Captain', '2021-507441', 'Tio, Rozs Raven Gatchalian', 'Talipapa'),
('2021-12-16', '11:17:52 AM', '2021-12-16 11:17:52 AM', 'Registered resident ', 'RR-20211216111752', 'Rozs', 'Barangay Captain', '2021-431152', 'Asdawa, John Doe', 'Talipapa'),
('2021-12-16', '11:19:49 AM', '2021-12-16 11:19:49 AM', 'Registered official ', 'RO-20211216111949', 'Rozs', 'Barangay Captain', '2021-334049', 'Doe, John Wick', 'Talipapa'),
('2021-12-16', '11:20:22 AM', '2021-12-16 11:20:22 AM', 'Downloaded Certificate of Residency ', 'DLCR-20211216112022', 'Rozs', 'Barangay Captain', '2021-431152', 'Asdawa, John Doe', 'Talipapa'),
('2021-12-16', '11:20:26 AM', '2021-12-16 11:20:26 AM', 'Downloaded Certificate of Residency ', 'DLCR-20211216112026', 'Rozs', 'Barangay Captain', '2021-431152', 'Asdawa, John Doe', 'Talipapa');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `dateRegistered` text DEFAULT NULL,
  `timeRegistered` text DEFAULT NULL,
  `idNumber` text DEFAULT NULL,
  `nameLast` text DEFAULT NULL,
  `nameFirst` text DEFAULT NULL,
  `nameMiddle` text DEFAULT NULL,
  `nameAlias` text DEFAULT NULL,
  `birthMonth` varchar(2) DEFAULT NULL,
  `birthDay` varchar(2) DEFAULT NULL,
  `birthYear` varchar(4) DEFAULT NULL,
  `placeOB` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `civilStatus` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `cityAddress` text DEFAULT NULL,
  `provAddress` text DEFAULT NULL,
  `purok` text DEFAULT NULL,
  `mobileNumberA` varchar(11) DEFAULT NULL,
  `mobileNumberB` varchar(11) DEFAULT NULL,
  `homeNumberA` varchar(11) DEFAULT NULL,
  `homeNumberB` varchar(11) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `officialPassword` text DEFAULT NULL,
  `imageLocation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`dateRegistered`, `timeRegistered`, `idNumber`, `nameLast`, `nameFirst`, `nameMiddle`, `nameAlias`, `birthMonth`, `birthDay`, `birthYear`, `placeOB`, `gender`, `civilStatus`, `position`, `cityAddress`, `provAddress`, `purok`, `mobileNumberA`, `mobileNumberB`, `homeNumberA`, `homeNumberB`, `email`, `username`, `officialPassword`, `imageLocation`) VALUES
('2021-12-16', '09:59:12 AM', '2021-971812', 'Tio', 'Rozs Raven', 'Gatchalian', 'Rozs', '05', '23', '2000', 'QC', 'Male', 'Single', 'Barangay Captain', '32C Caloocan', 'None', 'Talipapa', '09001234567', '09001234567', '1234567', '1234567', 'rozs@gmail.com', 'rozs', 'rozs', './assets/images/officials/2021-971812tio.png'),
('2021-12-16', '11:19:49 AM', '2021-334049', 'Doe', 'John', 'Wick', 'John Wick', '07', '07', '1996', 'QC', 'Male', 'Single', 'Kagawad', '32-C ABC Street Earth', 'None', 'Talipapa', '09001234567', '09001234567', '1234567', '1234567', 'asdawa@gmail.com', 'asdawa', 'asdawa', './assets/images/officials/2021-334049doe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `dateRegistered` text DEFAULT NULL,
  `timeRegistered` text DEFAULT NULL,
  `residentID` text DEFAULT NULL,
  `nameFirst` text DEFAULT NULL,
  `nameMiddle` text DEFAULT NULL,
  `nameLast` text DEFAULT NULL,
  `nameAlias` text DEFAULT NULL,
  `birthMonth` varchar(2) DEFAULT NULL,
  `birthDay` varchar(2) DEFAULT NULL,
  `birthYear` varchar(4) DEFAULT NULL,
  `placeOB` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `civilStatus` text DEFAULT NULL,
  `voterStatus` text DEFAULT NULL,
  `ifActive` text DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `nationality` text DEFAULT NULL,
  `occupation` text DEFAULT NULL,
  `sector` text DEFAULT NULL,
  `cityAddress` text DEFAULT NULL,
  `provAddress` text DEFAULT NULL,
  `purok` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobileNumberA` varchar(11) DEFAULT NULL,
  `mobileNumberB` varchar(11) DEFAULT NULL,
  `homeNumberA` varchar(11) DEFAULT NULL,
  `homeNumberB` varchar(11) DEFAULT NULL,
  `residentType` text DEFAULT NULL,
  `residentStatus` text DEFAULT NULL,
  `encoder` text DEFAULT NULL,
  `encoderPosition` text DEFAULT NULL,
  `imageLocation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`dateRegistered`, `timeRegistered`, `residentID`, `nameFirst`, `nameMiddle`, `nameLast`, `nameAlias`, `birthMonth`, `birthDay`, `birthYear`, `placeOB`, `gender`, `civilStatus`, `voterStatus`, `ifActive`, `religion`, `nationality`, `occupation`, `sector`, `cityAddress`, `provAddress`, `purok`, `email`, `mobileNumberA`, `mobileNumberB`, `homeNumberA`, `homeNumberB`, `residentType`, `residentStatus`, `encoder`, `encoderPosition`, `imageLocation`) VALUES
('2021-12-16', '10:17:41 AM', '2021-507441', 'Rozs Raven', 'Gatchalian', 'Tio', 'Rozs', '05', '23', '2000', 'Quezon City', 'Male', 'Single', 'Yes', 'inactive', 'Chrisitian', 'Filipino', 'None', 'Unemployed', '32-C Rivera Street Barangay 164, Caloocan City', 'None', 'Barangay', 'rozsraventio2305@gmail.com', '09001234567', '09001234567', '1234567', '1234567', 'rentee', 'active', 'Rozs', 'Barangay Captain', ''),
('2021-12-16', '11:17:52 AM', '2021-431152', 'John', 'Doe', 'Asdawa', 'John Doe', '05', '10', '2000', 'QC', 'Male', 'Single', 'Yes', 'active', 'Christian', 'Filipino', 'None', 'Unemployed', '123 ABC Street', 'None', 'Ramos', 'johndoe@gmail.com', '09001234567', '09001234567', '1234567', '1234567', 'native', 'active', 'Rozs', 'Barangay Captain', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD UNIQUE KEY `log_transactionID` (`log_transactionID`) USING HASH;

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD UNIQUE KEY `idNumber` (`idNumber`) USING HASH;

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD UNIQUE KEY `residentID` (`residentID`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
