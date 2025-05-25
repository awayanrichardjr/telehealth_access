-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 09:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

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
CREATE TABLE
  `admin` (
    `adminID` int (11) UNSIGNED NOT NULL,
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
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--
INSERT INTO
  `admin` (
    `adminID`,
    `adminFname`,
    `adminMname`,
    `adminLname`,
    `adminSuffix`,
    `adminAddress`,
    `adminBdate`,
    `adminUsername`,
    `adminContact`,
    `adminPass`,
    `adminConfirm`,
    `adminCdate`,
    `adminModified`
  )
VALUES
  (
    1,
    'Richard',
    'Dumael',
    'Awayan',
    'Jr',
    'Davao City',
    '1995-09-19',
    'richard_admin',
    '09091012050',
    '1234',
    '1234',
    '2025-05-25',
    ''
  ),
  (
    2,
    'Maria',
    'Lourdes',
    'Santos',
    '',
    'Quezon City',
    '1990-06-15',
    'maria_admin',
    '09171234567',
    '1234',
    '1234',
    '2025-05-25',
    ''
  ),
  (
    3,
    'Jose',
    'Miguel',
    'Reyes',
    '',
    'Makati',
    '1988-11-20',
    'jose_admin',
    '09281234567',
    '1234',
    '1234',
    '2025-05-25',
    ''
  ),
  (
    4,
    'Anna',
    'Grace',
    'Delgado',
    '',
    'Pasig',
    '1992-03-10',
    'anna_admin',
    '09391234567',
    '1234',
    '1234',
    '2025-05-25',
    ''
  );

-- --------------------------------------------------------
--
-- Table structure for table `chat`
--
CREATE TABLE
  `chat` (
    `chat_id` int (11) UNSIGNED NOT NULL,
    `chat_msg` varchar(255) NOT NULL,
    `chat_pic` varchar(255) NOT NULL,
    `chat_vid` varchar(255) NOT NULL,
    `chat_Cdate` varchar(255) NOT NULL,
    `chat_Modified` varchar(255) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `consult`
--
CREATE TABLE
  `consult` (
    `conID` int (11) UNSIGNED NOT NULL,
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
    `conAge` varchar(255) NOT NULL,
    `conADateTime` datetime NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `doctor`
--
CREATE TABLE
  `doctor` (
    `docID` int (11) UNSIGNED NOT NULL,
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
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--
INSERT INTO
  `doctor` (
    `docID`,
    `docFname`,
    `docMname`,
    `docLname`,
    `docSuffix`,
    `docBdate`,
    `docAddress`,
    `docSpecialty`,
    `docUsername`,
    `docEmail`,
    `docContact`,
    `docPass`,
    `docConfirm`,
    `docCdate`,
    `docModified`,
    `docStatus`,
    `docPhoto`,
    `docQualify`,
    `docIDfront`,
    `docIDback`,
    `doc_space`
  )
VALUES
  (
    1,
    'William',
    'F',
    'Smith',
    '',
    '2025-05-08',
    'Davao',
    'Dermatologist',
    'will',
    '',
    '09023128982',
    '1234',
    '1234',
    '2025-05-25',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    2,
    'Maria',
    'L',
    'Garcia',
    '',
    '1980-02-10',
    'Manila',
    'Cardiologist',
    'maria_g',
    'maria.garcia@gmail.com',
    '09171234567',
    '1234',
    '1234',
    '2025-05-20',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    3,
    'John',
    'P',
    'Doe',
    '',
    '1975-07-22',
    'Cebu City',
    'Neurologist',
    'john_d',
    'john.doe@gmail.com',
    '09281234567',
    '1234',
    '1234',
    '2025-05-19',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    4,
    'Ana',
    'R',
    'Lopez',
    '',
    '1983-03-11',
    'Davao',
    'Pediatrician',
    'ana_l',
    'ana.lopez@gmail.com',
    '09391234567',
    '1234',
    '1234',
    '2025-05-18',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    5,
    'Mark',
    'S',
    'Reyes',
    '',
    '1978-11-30',
    'Quezon City',
    'Dermatologist',
    'mark_r',
    'mark.reyes@gmail.com',
    '09401234567',
    '1234',
    '1234',
    '2025-05-17',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    6,
    'Liza',
    'T',
    'Cruz',
    '',
    '1985-01-15',
    'Makati',
    'Psychiatrist',
    'liza_c',
    'liza.cruz@gmail.com',
    '09511234567',
    '1234',
    '1234',
    '2025-05-16',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    7,
    'Paul',
    'D',
    'Santos',
    '',
    '1979-06-07',
    'Pasig',
    'Endocrinologist',
    'paul_s',
    'paul.santos@gmail.com',
    '09621234567',
    '1234',
    '1234',
    '2025-05-15',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    8,
    'Kim',
    'E',
    'Delgado',
    '',
    '1982-09-18',
    'Mandaluyong',
    'Radiologist',
    'kim_d',
    'kim.delgado@gmail.com',
    '09731234567',
    '1234',
    '1234',
    '2025-05-14',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    9,
    'Rico',
    'F',
    'Torres',
    '',
    '1977-12-29',
    'Las Piñas',
    'General Surgeon',
    'rico_t',
    'rico.torres@gmail.com',
    '09841234567',
    '1234',
    '1234',
    '2025-05-13',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    10,
    'Grace',
    'G',
    'Martinez',
    '',
    '1984-08-04',
    'Parañaque',
    'Ophthalmologist',
    'grace_m',
    'grace.martinez@gmail.com',
    '09951234567',
    '1234',
    '1234',
    '2025-05-12',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    11,
    'Leo',
    'H',
    'Gutierrez',
    '',
    '1981-04-25',
    'Valenzuela',
    'Infectious Disease Specialist',
    'leo_g',
    'leo.gutierrez@gmail.com',
    '09161234567',
    '1234',
    '1234',
    '2025-05-11',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    12,
    'Sofia',
    'I',
    'Flores',
    '',
    '1976-10-30',
    'Caloocan',
    'Obstetrician-Gynecologist',
    'sofia_f',
    'sofia.flores@gmail.com',
    '09271234567',
    '1234',
    '1234',
    '2025-05-10',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    13,
    'Ethan',
    'J',
    'Villanueva',
    '',
    '1983-05-16',
    'Muntinlupa',
    'Hematologist',
    'ethan_v',
    'ethan.villanueva@gmail.com',
    '09381234567',
    '1234',
    '1234',
    '2025-05-09',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    14,
    'Maya',
    'K',
    'Navarro',
    '',
    '1979-03-22',
    'Las Piñas',
    'Family Medicine Doctor',
    'maya_n',
    'maya.navarro@gmail.com',
    '09491234567',
    '1234',
    '1234',
    '2025-05-08',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    15,
    'Carlos',
    'L',
    'Luna',
    '',
    '1980-07-10',
    'Pasay',
    'Allergist',
    'carlos_l',
    'carlos.luna@gmail.com',
    '09501234567',
    '1234',
    '1234',
    '2025-05-07',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    16,
    'Isabel',
    'M',
    'Ortega',
    '',
    '1985-01-05',
    'San Juan',
    'Pathologist',
    'isabel_o',
    'isabel.ortega@gmail.com',
    '09611234567',
    '1234',
    '1234',
    '2025-05-06',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    17,
    'Derek',
    'N',
    'Vega',
    '',
    '1977-09-29',
    'Navotas',
    'Surgeon',
    'derek_v',
    'derek.vega@gmail.com',
    '09721234567',
    '1234',
    '1234',
    '2025-05-05',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    18,
    'Nina',
    'O',
    'Alvarez',
    '',
    '1982-12-17',
    'Cainta',
    'Otorhinolaryngologist',
    'nina_a',
    'nina.alvarez@gmail.com',
    '09831234567',
    '1234',
    '1234',
    '2025-05-04',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    19,
    'Jose',
    'P',
    'Castillo',
    '',
    '1979-08-13',
    'San Mateo',
    'Podiatrist',
    'jose_c',
    'jose.castillo@gmail.com',
    '09941234567',
    '1234',
    '1234',
    '2025-05-03',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    20,
    'Clara',
    'Q',
    'Pangilinan',
    '',
    '1981-06-21',
    'Antipolo',
    'Emergency Medicine Physician',
    'clara_p',
    'clara.pangilinan@gmail.com',
    '09151234567',
    '1234',
    '1234',
    '2025-05-02',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    21,
    'Albert',
    'R',
    'Diaz',
    '',
    '1974-05-14',
    'Quezon City',
    'Cardiologist',
    'albert_d',
    'albert.diaz@gmail.com',
    '09170000001',
    '1234',
    '1234',
    '2025-05-01',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    22,
    'Beatrice',
    'S',
    'Torres',
    '',
    '1983-11-22',
    'Manila',
    'Pediatrician',
    'beatrice_t',
    'beatrice.torres@gmail.com',
    '09170000002',
    '1234',
    '1234',
    '2025-05-02',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    23,
    'Carlos',
    'M',
    'Reyes',
    '',
    '1979-07-09',
    'Taguig',
    'Neurologist',
    'carlos_r',
    'carlos.reyes@gmail.com',
    '09170000003',
    '1234',
    '1234',
    '2025-05-03',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    24,
    'Diana',
    'L',
    'Garcia',
    '',
    '1985-04-28',
    'Makati',
    'Dermatologist',
    'diana_g',
    'diana.garcia@gmail.com',
    '09170000004',
    '1234',
    '1234',
    '2025-05-04',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    25,
    'Edward',
    'J',
    'Mendoza',
    '',
    '1978-01-19',
    'Pasig',
    'Endocrinologist',
    'edward_m',
    'edward.mendoza@gmail.com',
    '09170000005',
    '1234',
    '1234',
    '2025-05-05',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    26,
    'Fiona',
    'K',
    'Santos',
    '',
    '1982-12-10',
    'Parañaque',
    'Allergist',
    'fiona_s',
    'fiona.santos@gmail.com',
    '09170000006',
    '1234',
    '1234',
    '2025-05-06',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    27,
    'George',
    'D',
    'Luna',
    '',
    '1977-09-21',
    'Mandaluyong',
    'Surgeon',
    'george_l',
    'george.luna@gmail.com',
    '09170000007',
    '1234',
    '1234',
    '2025-05-07',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    28,
    'Hannah',
    'F',
    'Villanueva',
    '',
    '1984-06-14',
    'Las Piñas',
    'Radiologist',
    'hannah_v',
    'hannah.villanueva@gmail.com',
    '09170000008',
    '1234',
    '1234',
    '2025-05-08',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    29,
    'Isaac',
    'N',
    'Castillo',
    '',
    '1976-02-04',
    'Valenzuela',
    'Hematologist',
    'isaac_c',
    'isaac.castillo@gmail.com',
    '09170000009',
    '1234',
    '1234',
    '2025-05-09',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    30,
    'Janet',
    'O',
    'Alvarez',
    '',
    '1981-10-27',
    'Navotas',
    'Ophthalmologist',
    'janet_a',
    'janet.alvarez@gmail.com',
    '09170000010',
    '1234',
    '1234',
    '2025-05-10',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    31,
    'Kevin',
    'P',
    'Navarro',
    '',
    '1975-08-13',
    'Caloocan',
    'Psychiatrist',
    'kevin_n',
    'kevin.navarro@gmail.com',
    '09170000011',
    '1234',
    '1234',
    '2025-05-11',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    32,
    'Laura',
    'Q',
    'Ortega',
    '',
    '1983-03-22',
    'San Juan',
    'Infectious Disease Specialist',
    'laura_o',
    'laura.ortega@gmail.com',
    '09170000012',
    '1234',
    '1234',
    '2025-05-12',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    33,
    'Michael',
    'R',
    'Torres',
    '',
    '1978-11-03',
    'Antipolo',
    'Family Medicine Doctor',
    'michael_t',
    'michael.torres@gmail.com',
    '09170000013',
    '1234',
    '1234',
    '2025-05-13',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    34,
    'Natalie',
    'S',
    'Delgado',
    '',
    '1985-07-14',
    'Quezon City',
    'Emergency Medicine Physician',
    'natalie_d',
    'natalie.delgado@gmail.com',
    '09170000014',
    '1234',
    '1234',
    '2025-05-14',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    35,
    'Oscar',
    'T',
    'Pangilinan',
    '',
    '1977-01-28',
    'San Mateo',
    'Anesthesiologist',
    'oscar_p',
    'oscar.pangilinan@gmail.com',
    '09170000015',
    '1234',
    '1234',
    '2025-05-15',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    36,
    'Patricia',
    'U',
    'Flores',
    '',
    '1980-05-10',
    'Cainta',
    'Nephrologist',
    'patricia_f',
    'patricia.flores@gmail.com',
    '09170000016',
    '1234',
    '1234',
    '2025-05-16',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    37,
    'Quincy',
    'V',
    'Mendoza',
    '',
    '1976-09-05',
    'Las Piñas',
    'Otorhinolaryngologist',
    'quincy_m',
    'quincy.mendoza@gmail.com',
    '09170000017',
    '1234',
    '1234',
    '2025-05-17',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    38,
    'Rachel',
    'W',
    'Santos',
    '',
    '1982-12-22',
    'Makati',
    'Podiatrist',
    'rachel_s',
    'rachel.santos@gmail.com',
    '09170000018',
    '1234',
    '1234',
    '2025-05-18',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    39,
    'Samuel',
    'X',
    'Gonzales',
    '',
    '1979-03-16',
    'Pasay',
    'General Surgeon',
    'samuel_g',
    'samuel.gonzales@gmail.com',
    '09170000019',
    '1234',
    '1234',
    '2025-05-19',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  ),
  (
    40,
    'Teresa',
    'Y',
    'Valdez',
    '',
    '1984-11-30',
    'Pasig',
    'Pathologist',
    'teresa_v',
    'teresa.valdez@gmail.com',
    '09170000020',
    '1234',
    '1234',
    '2025-05-20',
    '',
    'Unverified',
    '',
    '',
    '',
    '',
    ''
  );

-- --------------------------------------------------------
--
-- Table structure for table `feed`
--
CREATE TABLE
  `feed` (
    `feed_id` int (11) UNSIGNED NOT NULL,
    `feed_name` varchar(255) NOT NULL,
    `feed_post` varchar(255) NOT NULL,
    `feed_DocStatus` varchar(255) NOT NULL,
    `feed_Cdate` varchar(255) NOT NULL,
    `feed_Modified` varchar(255) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `medical`
--
CREATE TABLE
  `medical` (
    `medID` int (11) UNSIGNED NOT NULL,
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
    `medAge` varchar(255) NOT NULL,
    `medTreatment` varchar(255) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `patient`
--
CREATE TABLE
  `patient` (
    `pID` int (11) UNSIGNED NOT NULL,
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
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--
INSERT INTO
  `patient` (
    `pID`,
    `pFname`,
    `pMname`,
    `pLname`,
    `pSuffix`,
    `pAddress`,
    `pBdate`,
    `pContact`,
    `pUsername`,
    `pEmail`,
    `pPass`,
    `pConfirm`,
    `pCdate`,
    `pModified`
  )
VALUES
  (
    1,
    'Gwen',
    'Cha',
    'Na',
    '',
    'Panabo',
    '2025-05-25',
    '091234123213',
    'gwen',
    '',
    '1234',
    '1234',
    '2025-05-25',
    ''
  ),
  (
    2,
    'James',
    'M',
    'Smith',
    '',
    'Cebu City',
    '1990-03-15',
    '09171234567',
    'james_s',
    'james.smith@example.com',
    '1234',
    '1234',
    '2025-05-20',
    ''
  ),
  (
    3,
    'Maria',
    'L',
    'Garcia',
    '',
    'Davao City',
    '1985-07-22',
    '09221234567',
    'maria_g',
    'maria.garcia@example.com',
    '1234',
    '1234',
    '2025-05-21',
    ''
  ),
  (
    4,
    'John',
    'P',
    'Doe',
    'Jr.',
    'Manila',
    '1978-11-02',
    '09331234567',
    'john_d',
    'john.doe@example.com',
    '1234',
    '1234',
    '2025-05-19',
    ''
  ),
  (
    5,
    'Ana',
    'R',
    'Lopez',
    '',
    'Quezon City',
    '1995-01-30',
    '09441234567',
    'ana_l',
    'ana.lopez@example.com',
    '1234',
    '1234',
    '2025-05-18',
    ''
  ),
  (
    6,
    'Mark',
    'S',
    'Reyes',
    '',
    'Taguig',
    '1988-12-11',
    '09551234567',
    'mark_r',
    'mark.reyes@example.com',
    '1234',
    '1234',
    '2025-05-17',
    ''
  ),
  (
    7,
    'Liza',
    'T',
    'Cruz',
    '',
    'Makati',
    '1992-06-25',
    '09661234567',
    'liza_c',
    'liza.cruz@example.com',
    '1234',
    '1234',
    '2025-05-16',
    ''
  ),
  (
    8,
    'Paul',
    'D',
    'Santos',
    '',
    'Pasig',
    '1980-10-10',
    '09771234567',
    'paul_s',
    'paul.santos@example.com',
    '1234',
    '1234',
    '2025-05-15',
    ''
  ),
  (
    9,
    'Kim',
    'E',
    'Delgado',
    '',
    'Mandaluyong',
    '1997-04-05',
    '09881234567',
    'kim_d',
    'kim.delgado@example.com',
    '1234',
    '1234',
    '2025-05-14',
    ''
  ),
  (
    10,
    'Rico',
    'F',
    'Torres',
    '',
    'Las Piñas',
    '1983-09-09',
    '09991234567',
    'rico_t',
    'rico.torres@example.com',
    '1234',
    '1234',
    '2025-05-13',
    ''
  ),
  (
    11,
    'Grace',
    'G',
    'Martinez',
    '',
    'Parañaque',
    '1991-02-20',
    '09187654321',
    'grace_m',
    'grace.martinez@example.com',
    '1234',
    '1234',
    '2025-05-12',
    ''
  ),
  (
    12,
    'Leo',
    'H',
    'Gutierrez',
    '',
    'Valenzuela',
    '1987-08-14',
    '09298765432',
    'leo_g',
    'leo.gutierrez@example.com',
    '1234',
    '1234',
    '2025-05-11',
    ''
  ),
  (
    13,
    'Sofia',
    'I',
    'Flores',
    '',
    'Caloocan',
    '1993-03-29',
    '09309876543',
    'sofia_f',
    'sofia.flores@example.com',
    '1234',
    '1234',
    '2025-05-10',
    ''
  ),
  (
    14,
    'Ethan',
    'J',
    'Villanueva',
    '',
    'Muntinlupa',
    '1984-07-19',
    '09410987654',
    'ethan_v',
    'ethan.villanueva@example.com',
    '1234',
    '1234',
    '2025-05-09',
    ''
  ),
  (
    15,
    'Maya',
    'K',
    'Navarro',
    '',
    'Las Piñas',
    '1996-12-07',
    '09521098765',
    'maya_n',
    'maya.navarro@example.com',
    '1234',
    '1234',
    '2025-05-08',
    ''
  ),
  (
    16,
    'Carlos',
    'L',
    'Luna',
    '',
    'Pasay',
    '1982-05-03',
    '09632109876',
    'carlos_l',
    'carlos.luna@example.com',
    '1234',
    '1234',
    '2025-05-07',
    ''
  ),
  (
    17,
    'Isabel',
    'M',
    'Ortega',
    '',
    'San Juan',
    '1994-09-27',
    '09743210987',
    'isabel_o',
    'isabel.ortega@example.com',
    '1234',
    '1234',
    '2025-05-06',
    ''
  ),
  (
    18,
    'Derek',
    'N',
    'Vega',
    '',
    'Navotas',
    '1989-11-11',
    '09854321098',
    'derek_v',
    'derek.vega@example.com',
    '1234',
    '1234',
    '2025-05-05',
    ''
  ),
  (
    19,
    'Nina',
    'O',
    'Alvarez',
    '',
    'Cainta',
    '1998-01-23',
    '09965432109',
    'nina_a',
    'nina.alvarez@example.com',
    '1234',
    '1234',
    '2025-05-04',
    ''
  ),
  (
    20,
    'Jose',
    'P',
    'Castillo',
    '',
    'San Mateo',
    '1986-04-17',
    '09176543210',
    'jose_c',
    'jose.castillo@example.com',
    '1234',
    '1234',
    '2025-05-03',
    ''
  ),
  (
    21,
    'Clara',
    'Q',
    'Pangilinan',
    '',
    'Antipolo',
    '1990-08-08',
    '09287654321',
    'clara_p',
    'clara.pangilinan@example.com',
    '1234',
    '1234',
    '2025-05-02',
    ''
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `admin`
--
ALTER TABLE `admin` ADD PRIMARY KEY (`adminID`),
ADD UNIQUE KEY `adminUsername` (`adminUsername`),
ADD UNIQUE KEY `adminContact` (`adminContact`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat` ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `consult`
--
ALTER TABLE `consult` ADD PRIMARY KEY (`conID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor` ADD PRIMARY KEY (`docID`),
ADD UNIQUE KEY `docUsername` (`docUsername`),
ADD UNIQUE KEY `docContact` (`docContact`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed` ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical` ADD PRIMARY KEY (`medID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient` ADD PRIMARY KEY (`pID`),
ADD UNIQUE KEY `pContact` (`pContact`),
ADD UNIQUE KEY `pUsername` (`pUsername`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin` MODIFY `adminID` int (11) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat` MODIFY `chat_id` int (11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult` MODIFY `conID` int (11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor` MODIFY `docID` int (11) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed` MODIFY `feed_id` int (11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical` MODIFY `medID` int (11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient` MODIFY `pID` int (11) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;