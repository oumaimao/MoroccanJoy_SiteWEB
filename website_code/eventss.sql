-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 30, 2024 at 05:15 PM
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
-- Database: `eventss`
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
(1, 'yassineabakhti@gmail.com', '1234'),
(2, 'soufiane@gmail.com', '$2y$10$T/LYr3e4ZBiZTBngIJ.fWuv'),
(3, 'yass@gmail.com', '$2y$10$kQ0Z1vMh8MhiR49vJTHcvul'),
(4, 'user@gmail.com', '$2y$10$L2qlscxHH8zliSxQPFuLle0'),
(5, 'omaima@gmail.com', '$2y$10$uGZdIR1ZhXfSpd2J/LfqP.mGghFaH.oMOCUew0H5KULZzIfDQcZFK');

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
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `event_id` int(11) NOT NULL,
  `n_event` varchar(50) NOT NULL,
  `event_date` varchar(200) NOT NULL,
  `event_time` varchar(50) NOT NULL,
  `event_duration` varchar(50) NOT NULL,
  `venue` varchar(100) NOT NULL,
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
  `$N_tickts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`event_id`, `n_event`, `event_date`, `event_time`, `event_duration`, `venue`, `adress1`, `adress2`, `country`, `state`, `city`, `zip`, `description`, `image`, `gategorie`, `P_tickts`, `$N_tickts`) VALUES
(6, 'soufiane', '03/12/2024', '00:15', '30', 'gggggggggggg', 'kkkkkkkkkk', '3ewinaa', '3ewinaa', 'Argentina', 'Victoria', 'Melbourne', '3000', '660629a63676dBanned books-01.jpg', 1, 0, 0),
(10, 'soufianeeb', '', '10:00', '60', 'bbbbbbbbbbbbbbbbbb', 'narjisss', '3ewinaa', 'llllllllllllllllllllll', 'Australia', 'Victoria', 'Melbourne', '3000', '66062d4f224bbBanned books-01.jpg', 1, 0, 0),
(12, 'soufianeeb', '', '10:00', '60', 'bbbbbbbbbbbbbbbbbb', 'narjisss', '3ewinaa', 'llllllllllllllllllllll', 'Australia', 'Victoria', 'Melbourne', '3000', '66062da051b28Banned books-01.jpg', 1, 0, 0),
(13, 'soufianeeb', '', '10:00', '60', 'bbbbbbbbbbbbbbbbbb', 'narjisss', '3ewinaa', 'llllllllllllllllllllll', 'Australia', 'Victoria', 'Melbourne', '3000', '66062dc4eeb64Banned books-01.jpg', 1, 0, 0),
(14, 'soufianeeb', '', '10:00', '60', 'bbbbbbbbbbbbbbbbbb', 'narjisss', '3ewinaa', 'llllllllllllllllllllll', 'Australia', 'Victoria', 'Melbourne', '3000', '66062e480ba94Banned books-01.jpg', 1, 0, 0),
(15, '', '', '10:00', '60', '', '', '', '', 'Australia', 'Victoria', 'Melbourne', '3000', '66062e52d03a9', 1, 0, 0),
(16, 'bb', '', '10:00', '60', '', '', '', '', 'Australia', 'Victoria', 'Melbourne', '3000', '66062e6d176ba', 1, 0, 0),
(17, 'bb', '', '10:00', '60', '', '', '', '', 'Australia', 'Victoria', 'Melbourne', '3000', '66062ede9ed63', 1, 0, 0),
(18, 'bb', '', '10:00', '60', '', '', '', '', 'Australia', 'Victoria', 'Melbourne', '3000', '66062ef4a2c47', 1, 0, 0),
(19, 'bb', '', '10:00', '60', '', '', '', '', 'Australia', 'Victoria', 'Melbourne', '3000', '66062f3196711', 1, 0, 0),
(20, 'bb', '', '10:00', '60', '', '', '', '', 'Australia', 'Victoria', 'Melbourne', '3000', '66062f65a6f90', 1, 0, 0),
(21, 'yyyyy', '03/12/2024', '10:00', '60', 'narjisss', '3ewinaa', '3ewinaa', 'Australia', 'Victoria', 'Melbourne', '3000', 'bbbbbbbbbbbbbbnnnnnnnnnnnnnnnnnnnnnnnnnnn', '660762f0e6aa1app-store.png', 1, 15, 14),
(22, 'yassine', '02/26/2024', '00:15', '30', 'ddddddddddddd', 'ddddddddddd', 'ddddddddddddd', 'Argentina', 'Victoria', 'Melbourne', '3000', 'bbbbbbbbbbbbbbbbbbbbbbbbb', '660804bf8f800app-store.png', 1, 14, 15),
(23, 'yassine', '02/26/2024', '00:15', '15', 'narjiss', '3ewinaa', 'llllllllllllllllllllll', 'Australia', 'Victoria', 'Melbourne', '3000', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '66080a1852132banner.jpg', 1, 55, 44);

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
  `Date_fin` date NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `Prix_ticket` float NOT NULL,
  `Nombre_tickets` int(11) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Zip_code` varchar(30) NOT NULL,
  `Categorie_id` int(11) DEFAULT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Ticket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_id`, `R_Fname`, `R_Lname`, `R_email`, `R_adresse`, `R_country`, `R_city`, `R_Zipcode`, `Ticket_id`) VALUES
(2, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', 'Argentina', 'hhh', '12', 0),
(3, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0),
(4, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0),
(5, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0),
(6, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0);

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
(1, 'sliman', 'isslam', 'slimane@gmail.com', '$2y$10$CqBOM5wWQiB/4', '', '', '0000-00-00'),
(2, 'mchachti', 'yassine', 'yassineabakhti@gmail.com', '$2y$10$YKM7PbCi..qDU', '1111111111132', 'hhhhhhhhhhhhhhhhhhh', '2024-03-29'),
(3, 'mchachti', 'yassine', 'soufiane@gmail.com', '$2y$10$GIs7G7DQlNcUn', '1111111111132', 'hhhhhhhhhhhhhhhhhhh', '2024-03-12'),
(4, 'mchachti', 'yassine', 'yassineabakhti@gmail.com', '$2y$10$9mshqDIPyeLXA', '1111111111132', 'hhhhhhhhhhhhhhhhhhh', '2024-03-05'),
(5, 'mchachti', 'yassine', 'yassineabakhti11@gmail.com', '$2y$10$NUCsOKnCvuIkn', 'yyyy', 'hhhhhhhhhhhhhhhhhhh', '2024-03-07'),
(6, 'mchachti', 'yassine', 'yassineabakhti11@gmail.com', '$2y$10$MB89F1mhqA0si', '1111111111132', 'hhhhhhhhhhhhhhhhhhh', '2024-03-01'),
(7, 'mchachti', 'yassine', 'yassineabakhti@gmail.com', '$2y$10$necLF9V.gLZL.uLAXc/HceB7LwCpr4CuOuqfowQ3Rx7daHjCFBx8G', '1111111111132', 'hhhhhhhhhhhhhhhhhhh', '2024-03-11'),
(8, 'mchachti', 'yassine', 'yass@gmail.com', '$2y$10$5znCOetxryoLvwAl42I5FOVIFntUPo0iKy6geQlPdMC1A1eRD6QeC', '1111111111132', 'hhhhhhhhhhhhhhhhhhh', '2024-02-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminee`
--
ALTER TABLE `adminee`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Categorie_id`);

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `gategorie` (`gategorie`);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `Reclammation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`gategorie`) REFERENCES `categorie` (`Categorie_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`Categorie_id`) REFERENCES `categorie` (`Categorie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
