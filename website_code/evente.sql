-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 06:53 PM
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
-- Database: `evente`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `Categorie_id` int(11) NOT NULL,
  `Nom_cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_ofline`
--

CREATE TABLE `event_ofline` (
  `E_OF_id` int(11) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(30) NOT NULL,
  `Heure_debut` time NOT NULL,
  `Date_debut` date NOT NULL,
  `Heure_fin` time NOT NULL,
  `Date_fin` date NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `Prix_ticket` float NOT NULL,
  `Nombre_tickets` int(11) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Zip_code` varchar(30) NOT NULL,
  `Categorie` varchar(20) NOT NULL,
  `Categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_online`
--

CREATE TABLE `event_online` (
  `E_ON_id` int(11) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(30) NOT NULL,
  `Heure_debut` time NOT NULL,
  `Date_debut` date NOT NULL,
  `Heure_fin` time NOT NULL,
  `Date_fin` date NOT NULL,
  `Lien` varchar(100) NOT NULL,
  `Prix_ticket` float NOT NULL,
  `Nombre_tickets` int(11) NOT NULL,
  `Categorie` varchar(20) NOT NULL,
  `Categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_of`
--

CREATE TABLE `reservation_of` (
  `Reservation_Of_id` int(11) NOT NULL,
  `Ticket_Of_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_on`
--

CREATE TABLE `reservation_on` (
  `Reservation_On_id` int(11) NOT NULL,
  `Ticket_On_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_ofline`
--

CREATE TABLE `ticket_ofline` (
  `Ticket_Of_id` int(11) NOT NULL,
  `Nombre_ticket` int(11) NOT NULL,
  `QR_code` varchar(100) NOT NULL,
  `Statu` tinyint(1) NOT NULL,
  `User_id` int(11) NOT NULL,
  `E_OF_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_online`
--

CREATE TABLE `ticket_online` (
  `Ticket_On_id` int(11) NOT NULL,
  `nombre_ticket` int(11) NOT NULL,
  `E_ON_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL
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
  `U_password` varchar(20) NOT NULL,
  `U_telephone` varchar(30) NOT NULL,
  `U_adresse` varchar(100) NOT NULL,
  `U_dateNaissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Categorie_id`);

--
-- Indexes for table `event_ofline`
--
ALTER TABLE `event_ofline`
  ADD PRIMARY KEY (`E_OF_id`),
  ADD KEY `Categorie_id` (`Categorie_id`);

--
-- Indexes for table `event_online`
--
ALTER TABLE `event_online`
  ADD PRIMARY KEY (`E_ON_id`),
  ADD KEY `Categorie_id` (`Categorie_id`);

--
-- Indexes for table `reservation_of`
--
ALTER TABLE `reservation_of`
  ADD PRIMARY KEY (`Reservation_Of_id`),
  ADD KEY `Ticket_Of_id` (`Ticket_Of_id`);

--
-- Indexes for table `reservation_on`
--
ALTER TABLE `reservation_on`
  ADD PRIMARY KEY (`Reservation_On_id`),
  ADD KEY `Ticket_Of_id` (`Ticket_On_id`);

--
-- Indexes for table `ticket_ofline`
--
ALTER TABLE `ticket_ofline`
  ADD PRIMARY KEY (`Ticket_Of_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `E_OF_id` (`E_OF_id`);

--
-- Indexes for table `ticket_online`
--
ALTER TABLE `ticket_online`
  ADD PRIMARY KEY (`Ticket_On_id`),
  ADD KEY `ticket_online_ibfk_1` (`User_id`),
  ADD KEY `ticket_online_ibfk_2` (`E_ON_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Categorie_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_ofline`
--
ALTER TABLE `event_ofline`
  MODIFY `E_OF_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_online`
--
ALTER TABLE `event_online`
  MODIFY `E_ON_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_of`
--
ALTER TABLE `reservation_of`
  MODIFY `Reservation_Of_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_on`
--
ALTER TABLE `reservation_on`
  MODIFY `Reservation_On_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_ofline`
--
ALTER TABLE `ticket_ofline`
  MODIFY `Ticket_Of_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_online`
--
ALTER TABLE `ticket_online`
  MODIFY `Ticket_On_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_ofline`
--
ALTER TABLE `event_ofline`
  ADD CONSTRAINT `event_ofline_ibfk_1` FOREIGN KEY (`Categorie_id`) REFERENCES `categorie` (`Categorie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_online`
--
ALTER TABLE `event_online`
  ADD CONSTRAINT `event_online_ibfk_1` FOREIGN KEY (`Categorie_id`) REFERENCES `categorie` (`Categorie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation_of`
--
ALTER TABLE `reservation_of`
  ADD CONSTRAINT `reservation_of_ibfk_1` FOREIGN KEY (`Ticket_Of_id`) REFERENCES `ticket_ofline` (`Ticket_Of_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation_on`
--
ALTER TABLE `reservation_on`
  ADD CONSTRAINT `reservation_on_ibfk_1` FOREIGN KEY (`Ticket_On_id`) REFERENCES `ticket_online` (`Ticket_On_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket_ofline`
--
ALTER TABLE `ticket_ofline`
  ADD CONSTRAINT `ticket_ofline_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ofline_ibfk_2` FOREIGN KEY (`E_OF_id`) REFERENCES `event_ofline` (`E_OF_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket_online`
--
ALTER TABLE `ticket_online`
  ADD CONSTRAINT `ticket_online_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_online_ibfk_2` FOREIGN KEY (`E_ON_id`) REFERENCES `event_online` (`E_ON_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
