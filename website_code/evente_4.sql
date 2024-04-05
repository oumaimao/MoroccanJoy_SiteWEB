-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 04:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evente_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminee`
--

CREATE TABLE `adminee` (
  `admin_id` int(11) NOT NULL,
  `A_email` varchar(100) NOT NULL,
  `A_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminee`
--

INSERT INTO `adminee` (`admin_id`, `A_email`, `A_password`) VALUES
(5, 'omaima@gmail.com', '$2y$10$uGZdIR1ZhXfSpd2J/LfqP.mGghFaH.oMOCUew0H5KULZzIfDQcZFK'),
(7, 'test@gmail.com', '$2y$10$8b4ngU7KHiwm04ko4YJe1euDszEw0g93ED8NG1z2jn0L7vMMpZsN.'),
(9, 'soufiane@gmail.com', '$2y$10$YOf6GvalMhQHO1iHagXJl.9nBmdrc3SMBCkRGsfJgGiUS8o46xe1S'),
(10, 'aymane@gmail.com', '$2y$10$NZYGFABob3T9Gq719J32POoT4.ulCN8AlgGemeHhMIqG/DBT2sifS');

-- --------------------------------------------------------

--
-- Table structure for table `archive_demande`
--

CREATE TABLE `archive_demande` (
  `event_id` int(11) NOT NULL,
  `n_event` varchar(100) NOT NULL,
  `event_date` varchar(200) NOT NULL,
  `event_time` varchar(200) NOT NULL,
  `event_duration` varchar(200) NOT NULL,
  `adress1` varchar(300) NOT NULL,
  `adress2` varchar(300) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `description` varchar(400) NOT NULL,
  `image` varchar(400) NOT NULL,
  `gategorie` varchar(100) NOT NULL,
  `P_tickts` int(255) NOT NULL,
  `N_tickts` int(255) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `Categorie_id` int(11) NOT NULL,
  `Nom_cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`Categorie_id`, `Nom_cat`) VALUES
(1, 'art');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `c_nom` varchar(30) NOT NULL,
  `c_prenom` varchar(30) NOT NULL,
  `c_phone` varchar(30) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_message` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `c_nom`, `c_prenom`, `c_phone`, `c_email`, `c_message`, `user_id`) VALUES
(1, 'yassine', 'yoss', '06123456', 'yass@gmail.com', 'this message is for you please helpe me', 11),
(2, 'yassine', 'yoss', '06123456', 'yass@gmail.com', 'this message is for you please helpe me', 11),
(3, 'yassine', 'yoss', '06123456', 'yass@gmail.com', 'this message is for you please helpe me', 11),
(4, 'yassine', 'yoss', '06123456', 'yass@gmail.com', 'this message is for you please helpe me', 11),
(5, 'yassine', 'yoss', '06123456', 'yass@gmail.com', 'this message is for you please helpe me', 11),
(6, 'amine', 'yoss', '06123456', 'yass@gmail.com', 'this message is for you please helpe me', 11),
(7, 'yassine', 'yoss', '06123456', 'yass@gmail.com', 'this message is for you please helpe me', 11),
(8, 'yassine', 'yoss', '06123456', 'yass@gmail.com', 'this message is for you please helpe me', 11),
(9, 'ahmadi', 'hamid', 'this a message for nothing', 'hamid@gmail.com', '023456789', 0);

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `event_id` int(11) NOT NULL,
  `n_event` varchar(50) NOT NULL,
  `event_date` varchar(200) NOT NULL,
  `event_time` varchar(50) NOT NULL,
  `event_duration` varchar(50) NOT NULL,
  `adress1` varchar(100) NOT NULL,
  `adress2` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(80) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(250) NOT NULL,
  `gategorie` int(11) DEFAULT NULL,
  `P_tickts` int(11) NOT NULL,
  `N_tickts` int(11) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`event_id`, `n_event`, `event_date`, `event_time`, `event_duration`, `adress1`, `adress2`, `country`, `state`, `city`, `zip`, `description`, `image`, `gategorie`, `P_tickts`, `N_tickts`, `User_id`) VALUES
(66, 'moroco event', '05/04/2024', '00:30', '45', 'fes moroco', 'narjis hay lala mina', 'fes', 'fes', 'fes', '30060', 'this a test descritionthis a test descritionthis a test descritionthis a test descritionthis a test descritionthis a test descritionthis a test descrition', '660f256cbc4462359.png', 1, 100, 120, 12);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `E_id` int(11) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Heure_debut` time NOT NULL,
  `Date_debut` date NOT NULL,
  `Heure_fin` time NOT NULL,
  `Prix_ticket` float NOT NULL,
  `Nombre_tickets` int(11) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Zip_code` varchar(30) NOT NULL,
  `Categorie_id` int(11) DEFAULT NULL,
  `User_id` int(11) NOT NULL,
  `adress1` varchar(200) NOT NULL,
  `adress2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`E_id`, `Titre`, `Description`, `Image`, `Heure_debut`, `Date_debut`, `Heure_fin`, `Prix_ticket`, `Nombre_tickets`, `Ville`, `Zip_code`, `Categorie_id`, `User_id`, `adress1`, `adress2`) VALUES
(24, 'soufiane', '3000', '660629a63676dBanned books-01.jpg', '00:15:00', '0000-00-00', '00:00:30', 0, 0, 'Victoria', 'Melbourne', 1, 6, 'kkkkkkkkkk', '3ewinaa'),
(25, 'soufiane', '3000', '660629a63676dBanned books-01.jpg', '00:15:00', '0000-00-00', '00:00:30', 0, 0, 'Victoria', 'Melbourne', 1, 6, 'kkkkkkkkkk', '3ewinaa'),
(26, 'soufianeeb', '3000', '66062d4f224bbBanned books-01.jpg', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Victoria', 'Melbourne', 1, 10, 'narjisss', '3ewinaa'),
(27, 'soufiane', '3000', '660629a63676dBanned books-01.jpg', '00:15:00', '0000-00-00', '00:00:30', 0, 0, 'Victoria', 'Melbourne', 1, 6, 'kkkkkkkkkk', '3ewinaa'),
(28, 'soufiane', '3000', '660629a63676dBanned books-01.jpg', '00:15:00', '0000-00-00', '00:00:30', 0, 0, 'Victoria', 'Melbourne', 1, 6, 'kkkkkkkkkk', '3ewinaa'),
(29, 'yassine', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '66080a1852132banner.jpg', '00:15:00', '0000-00-00', '00:00:15', 55, 44, 'Melbourne', '3000', 1, 23, '3ewinaa', 'llllllllllllllllllllll'),
(30, 'soufianeeb', '3000', '66062d4f224bbBanned books-01.jpg', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Victoria', 'Melbourne', 1, 10, 'narjisss', '3ewinaa'),
(31, 'soufianeeb', '3000', '66062dc4eeb64Banned books-01.jpg', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Victoria', 'Melbourne', 1, 13, 'narjisss', '3ewinaa'),
(32, 'yassine', 'bbbbbbbbbbbbbbbbbbbbbbbbb', '660804bf8f800app-store.png', '00:15:00', '0000-00-00', '00:00:30', 14, 15, 'Melbourne', '3000', 1, 22, 'ddddddddddd', 'ddddddddddddd'),
(33, 'yyyyy', 'bbbbbbbbbbbbbbnnnnnnnnnnnnnnnnnnnnnnnnnnn', '660762f0e6aa1app-store.png', '10:00:00', '0000-00-00', '00:00:00', 15, 14, 'Melbourne', '3000', 1, 21, '3ewinaa', '3ewinaa'),
(34, 'bb', '3000', '66062f65a6f90', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Victoria', 'Melbourne', 1, 20, '', ''),
(35, 'bb', '3000', '66062f3196711', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Victoria', 'Melbourne', 1, 19, '', ''),
(36, 'bb', '3000', '66062ef4a2c47', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Victoria', 'Melbourne', 1, 18, '', ''),
(37, 'soufianeeb', '3000', '66062da051b28Banned books-01.jpg', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Victoria', 'Melbourne', 1, 12, 'narjisss', '3ewinaa'),
(38, 'soufianeeb', '3000', '66062e480ba94Banned books-01.jpg', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Victoria', 'Melbourne', 1, 14, 'narjisss', '3ewinaa'),
(39, '', '', '66097177b8689', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'Melbourne', '3000', 0, 24, '', ''),
(40, 'tata', 'dfghjkldfghjdfghjkldfghjdfghjkldfghjdfghjkldfghjdfghjkldfghjdfghjkldfghjdfghjkldfghjdfghjkldfghj', '66097498143e09665.png', '10:00:00', '0000-00-00', '00:00:00', 0, 0, 'fes', '3000', 1, 29, 'fes', 'narjiss'),
(41, 'ggagagag', 'zertyuioertyu', '66097451e005c6202.png', '00:30:00', '0000-00-00', '00:00:45', 0, 0, 'Melbourne', '3000', 1, 31, 'etryui', 'erty'),
(42, '03/07/2024', '00:30', '45', '00:00:00', '0000-00-00', '00:00:00', 0, 0, '3000', 'zertyuioertyu', 2147483647, 1, '0', '0'),
(43, '03/07/2024', '00:30', '45', '00:00:00', '0000-00-00', '00:00:00', 0, 0, '3000', 'zertyuioertyu', 2147483647, 1, '0', '0'),
(44, '03/07/2024', '00:30', '45', '00:00:00', '0000-00-00', '00:00:00', 0, 0, '3000', 'zertyuioertyu', 2147483647, 1, '0', '0'),
(45, '03/07/2024', '00:30', '45', '00:00:00', '0000-00-00', '00:00:00', 0, 0, '3000', 'zertyuioertyu', 2147483647, 1, '0', '0'),
(46, '03/07/2024', '00:30', '45', '00:00:00', '0000-00-00', '00:00:00', 0, 0, '3000', 'zertyuioertyu', 2147483647, 1, '0', '0'),
(47, '03/07/2024', '00:30', '45', '00:00:00', '0000-00-00', '00:00:00', 0, 0, '3000', 'zertyuioertyu', 2147483647, 1, '0', '0'),
(48, '03/07/2024', '00:30', '45', '00:00:00', '0000-00-00', '00:00:00', 0, 0, '3000', 'zertyuioertyu', 2147483647, 1, '0', '0'),
(49, '03/07/2024', '00:30', '45', '00:00:00', '0000-00-00', '00:00:00', 0, 0, '3000', 'zertyuioertyu', 2147483647, 1, '0', '0'),
(50, 'ggagagag', 'zertyuioertyu', '66097451e005c6202.png', '00:30:00', '0000-00-00', '00:00:45', 0, 0, 'Melbourne', '3000', 1, 43, 'etryui', 'erty'),
(51, 'ggagagag', 'zertyuioertyu', '66097451e005c6202.png', '00:30:00', '0000-00-00', '00:00:45', 0, 0, 'Melbourne', '3000', 1, 47, 'etryui', 'erty'),
(52, 'yassine', 'zertyuioertyu', '66097451e005c6202.png', '00:30:00', '0000-00-00', '00:00:45', 0, 0, 'Melbourne', '3000', 1, 48, 'etryui', 'erty'),
(53, 'amine', 'zertyuioertyu', '66097451e005c6202.png', '00:30:00', '0000-00-00', '00:00:45', 0, 0, 'Melbourne', '3000', 1, 53, 'etryui', 'erty'),
(54, 'ggagagag', 'zertyuioertyu', '66097451e005c6202.png', '00:30:00', '0000-00-00', '00:00:45', 0, 0, 'Melbourne', '3000', 1, 51, 'etryui', 'erty'),
(59, 'test', 'zertzertzertzertzertzertzertzertzertzertzert', '660f4461b6de31.PNG', '00:45:00', '0000-00-00', '00:00:00', 20, 120, 'Melbourne', '3000', 1, 12, 'fes', 'hahahahahah');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `img_Pf` varchar(300) NOT NULL,
  `img_Cv` varchar(500) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

CREATE TABLE `reclamation` (
  `Reclammation_id` int(11) NOT NULL,
  `Contact_Name` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reclamation`
--

INSERT INTO `reclamation` (`Reclammation_id`, `Contact_Name`, `Email`, `Subject`, `Description`, `User_id`) VALUES
(72, 'yassine', 'soufiane@gmail.com', 'this is a test', 'a test description', 12),
(73, 'yassine', 'soufiane@gmail.com', 'this is a test', 'a test description', 12);

-- --------------------------------------------------------

--
-- Table structure for table `reclamation_archive`
--

CREATE TABLE `reclamation_archive` (
  `Reclammation_id` int(11) NOT NULL,
  `Contact_Name` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reclamation_archive`
--

INSERT INTO `reclamation_archive` (`Reclammation_id`, `Contact_Name`, `Email`, `Subject`, `Description`, `User_id`) VALUES
(61, 'yassine', 'yassine@gmail.com', 'WAAAAAAAAAAAAAAAA333333333', 'this a problm about testing database', 11),
(64, 'yassine', 'soufiane@gmail.com', 'this is a test', 'a test description', 12);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_id` int(11) NOT NULL,
  `R_Fname` varchar(30) NOT NULL,
  `R_Lname` varchar(30) NOT NULL,
  `R_email` varchar(100) NOT NULL,
  `R_adresse` varchar(250) NOT NULL,
  `R_country` varchar(30) NOT NULL,
  `R_city` varchar(30) NOT NULL,
  `R_Zipcode` varchar(20) NOT NULL,
  `Ticket_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_id`, `R_Fname`, `R_Lname`, `R_email`, `R_adresse`, `R_country`, `R_city`, `R_Zipcode`, `Ticket_id`, `User_id`) VALUES
(5, 'Johnjk', 'Doe', 'johndoe@example.com', 'zertyuiopiuytretyuizertyuiopiuytretyuizertyuiopiuytretyuizertyuiopiuytretyui', 'Austria', 'melbourn', '12', 0, 11),
(6, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 2),
(7, 'John', 'Doe', 'johndoe@example.com', 'ZERTY', '', 'fhgjh', '13000', 0, 12),
(8, 'John', 'Doe', 'johndoe@example.com', 'deded', 'Algeria', 'dee', 'ded', 0, 3),
(9, 'John', 'Doe', 'johndoe@example.com', 'deded', 'Algeria', 'dee', 'ded', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Ticket_id` int(11) NOT NULL,
  `Nombre_ticket` int(11) NOT NULL,
  `QR_code` varchar(100) NOT NULL,
  `Statu` tinyint(1) NOT NULL,
  `User_id` int(11) NOT NULL,
  `E_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `U_name` varchar(30) NOT NULL,
  `U_Prenom` varchar(30) NOT NULL,
  `U_email` varchar(70) NOT NULL,
  `U_password` varchar(200) NOT NULL,
  `U_telephone` varchar(30) NOT NULL,
  `U_adresse` varchar(100) NOT NULL,
  `U_dateNaissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `U_name`, `U_Prenom`, `U_email`, `U_password`, `U_telephone`, `U_adresse`, `U_dateNaissance`) VALUES
(10, 'tata', 'oumjli', 'soufinaeonjli@gmail.com', '$2y$10$WhhkHM.XzesJO732deO85Odj0l6Oa17iD2bKl8U.TlR.jMdf6VmkG', '1111111111132', 'hhhhhhhhhhhhhhhhhhh', '2024-03-13'),
(12, 'oumaima', 'ouenjli', 'oumaima@gmail.com', '$2y$10$8lq/iqYQiayjsViD/E.kSuMl3P5PsKsrUX0ZQ0UyBV6fhhmtfQL0e', '062345678', 'this is a test adresse ', '1999-04-26'),
(13, 'ertyu', 'soufiane', 'soufiane@gmail.com', '$2y$10$yka8wmqVUzPaw1rfltGG/.d2qqvCSINcs.WM/IWEaHU400t71703W', 'ryu', 'zerty', '2024-04-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminee`
--
ALTER TABLE `adminee`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `archive_demande`
--
ALTER TABLE `archive_demande`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Categorie_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `gategorie` (`gategorie`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`E_id`),
  ADD KEY `Categorie_id` (`Categorie_id`),
  ADD KEY `event_ibfk_2` (`User_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`Reclammation_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `reclamation_archive`
--
ALTER TABLE `reclamation_archive`
  ADD PRIMARY KEY (`Reclammation_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_id`),
  ADD KEY `Ticket_Of_id` (`Ticket_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Ticket_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `E_OF_id` (`E_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminee`
--
ALTER TABLE `adminee`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `archive_demande`
--
ALTER TABLE `archive_demande`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `Reclammation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `reclamation_archive`
--
ALTER TABLE `reclamation_archive`
  MODIFY `Reclammation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archive_demande`
--
ALTER TABLE `archive_demande`
  ADD CONSTRAINT `archive_demande_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`E_id`) REFERENCES `event` (`E_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
