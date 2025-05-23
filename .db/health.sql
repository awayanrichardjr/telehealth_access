-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2025 at 03:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) UNSIGNED NOT NULL,
  `adminFname` varchar(255) NOT NULL,
  `adminMname` varchar(255) NOT NULL,
  `adminLname` varchar(255) NOT NULL,
  `adminSuffix` varchar(255) NOT NULL,
  `adminAddress` varchar(255) NOT NULL,
  `adminBdate` date NOT NULL,
  `adminUsername` varchar(255) NOT NULL,
  `adminContact` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `adminConfirm` varchar(255) NOT NULL,
  `adminCdate` date NOT NULL DEFAULT current_timestamp(),
  `adminModified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminFname`, `adminMname`, `adminLname`, `adminSuffix`, `adminAddress`, `adminBdate`, `adminUsername`, `adminContact`, `adminPass`, `adminConfirm`, `adminCdate`, `adminModified`) VALUES
(1, 'Richard', 'D', 'Awayan', 'Jr', 'Davao City', '2025-05-28', 'admin', '09091012050', '1234', '1234', '2025-05-23', ''),
(2, 'Ailyn', 'A', 'Mentos', '', 'Panabo', '2025-05-23', 'admin_ailyn', '09091012052', '1234', '1234', '2025-05-23', ''),
(3, 'Airis', 'A', 'Mentos', '', 'Panabo', '2025-05-01', 'admin_airis', '09091012053', '1234', '1234', '2025-05-23', ''),
(4, 'Angel Grace', 'C', 'Concha', '', 'Panabo', '2025-05-23', 'admin_angel', '09091012054', '1234', '1234', '2025-05-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) UNSIGNED NOT NULL,
  `chat_msg` varchar(255) NOT NULL,
  `chat_pic` varchar(255) NOT NULL,
  `chat_vid` varchar(255) NOT NULL,
  `chat_Cdate` varchar(255) NOT NULL,
  `chat_Modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `conID` int(11) UNSIGNED NOT NULL,
  `conName` varchar(255) NOT NULL,
  `conAddress` varchar(255) NOT NULL,
  `conBdate` date NOT NULL,
  `conSelectedDoc` varchar(255) NOT NULL,
  `conDocSpecialty` varchar(255) NOT NULL,
  `conDiagnose` varchar(255) NOT NULL,
  `conConcern` varchar(255) NOT NULL,
  `conUsername` varchar(255) NOT NULL,
  `conEmail` varchar(255) NOT NULL,
  `conContact` varchar(255) NOT NULL,
  `conCdate` varchar(255) NOT NULL,
  `conADateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`conID`, `conName`, `conAddress`, `conBdate`, `conSelectedDoc`, `conDocSpecialty`, `conDiagnose`, `conConcern`, `conUsername`, `conEmail`, `conContact`, `conCdate`, `conADateTime`) VALUES
(1, 'Gwen Cha  Na ', 'Panabo', '2025-05-09', 'Dr. William F Smith ', 'Dermatologist', 'qwe', 'asd asd', 'gwen', 'richarddumaelawayanjr@gmail.com', '09091012054', 'May-23-2025 05:16am', '2025-05-23 11:16:00'),
(2, 'Lisa M Manoban ', 'Thialand', '2025-05-23', 'Dr. William F Smith ', 'Dermatologist', 'ert', 'asd asd as', 'lisa', 'jayrawayan@gmail.com', '0912412311211', 'May-23-2025 05:17am', '2025-05-23 11:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docID` int(11) UNSIGNED NOT NULL,
  `docFname` varchar(255) NOT NULL,
  `docMname` varchar(255) NOT NULL,
  `docLname` varchar(255) NOT NULL,
  `docSuffix` varchar(255) NOT NULL,
  `docBdate` date NOT NULL,
  `docAddress` varchar(255) NOT NULL,
  `docSpecialty` varchar(255) NOT NULL,
  `docUsername` varchar(255) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `docContact` varchar(255) NOT NULL,
  `docPass` varchar(255) NOT NULL,
  `docConfirm` varchar(255) NOT NULL,
  `docCdate` date NOT NULL DEFAULT current_timestamp(),
  `docModified` varchar(255) NOT NULL,
  `docStatus` varchar(10) NOT NULL,
  `docPhoto` varchar(255) NOT NULL,
  `docQualify` varchar(255) NOT NULL,
  `docIDfront` varchar(255) NOT NULL,
  `docIDback` varchar(255) NOT NULL,
  `doc_space` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docID`, `docFname`, `docMname`, `docLname`, `docSuffix`, `docBdate`, `docAddress`, `docSpecialty`, `docUsername`, `docEmail`, `docContact`, `docPass`, `docConfirm`, `docCdate`, `docModified`, `docStatus`, `docPhoto`, `docQualify`, `docIDfront`, `docIDback`, `doc_space`) VALUES
(1, 'William', 'F', 'Smith', '', '2025-05-23', 'Davao', 'Dermatologist', 'william', '', '091234', '1234', '1234', '2025-05-23', 'May-23-2025 05:07am', 'Verified', '', 'Array', '', '', 'https://chat.google.com/room/AAQAXVjeDx4?cls=7'),
(2, 'John', 'M', 'Doe', '', '2025-05-09', 'Davao City', 'Obstetrician-Gynecologist', 'johndoe', '', '0912345', '1234', '1234', '2025-05-23', '', 'Unverified', '', '', '', '', ''),
(3, 'Joe', 'D', 'Leon', '', '2025-05-23', 'Panabo', 'Dermatologist', 'joe', '', '0912341236', '1234', '1234', '2025-05-23', '', 'Unverified', '', '', '', '', ''),
(4, 'Chopper', 'C', 'Tony Tony', '', '2025-05-23', 'Davao', 'Geriatrician', 'chopper', '', '098751234', '1234', '1234', '2025-05-23', '', 'Unverified', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `feed_id` int(11) UNSIGNED NOT NULL,
  `feed_name` varchar(255) NOT NULL,
  `feed_post` varchar(255) NOT NULL,
  `feed_DocStatus` varchar(255) NOT NULL,
  `feed_Cdate` varchar(255) NOT NULL,
  `feed_Modified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`feed_id`, `feed_name`, `feed_post`, `feed_DocStatus`, `feed_Cdate`, `feed_Modified`) VALUES
(1, 'Lisa M Manoban ', 'how you like that!\r\n', '', 'May-23-2025 05:04am', ''),
(2, 'Dr. William F Smith ', 'oh 👀👌😒😍❤', 'Verified', 'May-23-2025 05:08am', '');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `medID` int(11) UNSIGNED NOT NULL,
  `medName` varchar(255) NOT NULL,
  `medAddress` varchar(255) NOT NULL,
  `medBdate` date NOT NULL,
  `medSelectedDoc` varchar(255) NOT NULL,
  `medDocSpecialty` varchar(255) NOT NULL,
  `medDiagnose` varchar(255) NOT NULL,
  `medConcern` varchar(255) NOT NULL,
  `medUsername` varchar(255) NOT NULL,
  `medEmail` varchar(255) NOT NULL,
  `medContact` varchar(255) NOT NULL,
  `medCdate` varchar(255) NOT NULL,
  `medADateTime` varchar(255) NOT NULL,
  `medTreatment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`medID`, `medName`, `medAddress`, `medBdate`, `medSelectedDoc`, `medDocSpecialty`, `medDiagnose`, `medConcern`, `medUsername`, `medEmail`, `medContact`, `medCdate`, `medADateTime`, `medTreatment`) VALUES
(1, 'Lisa M Manoban ', 'Thialand', '2025-05-23', 'Dr. William F Smith ', 'Dermatologist', 'ert', 'asd asd as', 'lisa', 'jayrawayan@gmail.com', '0912412311211', 'May-23-2025 05:17am', 'May 23, 2025 05:19am', 'ok'),
(2, 'Gwen Cha  Na ', 'Panabo', '2025-05-09', 'Dr. William F Smith ', 'Dermatologist', 'qwe', 'asd asd', 'gwen', 'richarddumaelawayanjr@gmail.com', '09091012054', 'May-23-2025 05:16am', 'May 23, 2025 05:20am', 'ok na');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pID` int(11) UNSIGNED NOT NULL,
  `pFname` varchar(255) NOT NULL,
  `pMname` varchar(255) NOT NULL,
  `pLname` varchar(255) NOT NULL,
  `pSuffix` varchar(255) NOT NULL,
  `pAddress` varchar(255) NOT NULL,
  `pBdate` date NOT NULL,
  `pContact` varchar(255) NOT NULL,
  `pUsername` varchar(255) NOT NULL,
  `pEmail` varchar(255) NOT NULL,
  `pPass` varchar(255) NOT NULL,
  `pConfirm` varchar(255) NOT NULL,
  `pCdate` date NOT NULL DEFAULT current_timestamp(),
  `pModified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pID`, `pFname`, `pMname`, `pLname`, `pSuffix`, `pAddress`, `pBdate`, `pContact`, `pUsername`, `pEmail`, `pPass`, `pConfirm`, `pCdate`, `pModified`) VALUES
(1, 'Gwen', 'Cha ', 'Na', '', 'Panabo', '2025-05-09', '09091012054', 'gwen', '', '1234', '1234', '2025-05-23', ''),
(2, 'Lisa', 'M', 'Manoban', '', 'Thialand', '2025-05-23', '0912412311211', 'lisa', '', '1234', '1234', '2025-05-23', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `adminUsername` (`adminUsername`),
  ADD UNIQUE KEY `adminContact` (`adminContact`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`conID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docID`),
  ADD UNIQUE KEY `docUsername` (`docUsername`),
  ADD UNIQUE KEY `docContact` (`docContact`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`medID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pID`),
  ADD UNIQUE KEY `pContact` (`pContact`),
  ADD UNIQUE KEY `pUsername` (`pUsername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `conID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `feed_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `medID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
