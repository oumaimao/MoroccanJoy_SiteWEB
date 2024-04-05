-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 09:12 AM
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

--
-- Dumping data for table `archive_demande`
--

INSERT INTO `archive_demande` (`event_id`, `n_event`, `event_date`, `event_time`, `event_duration`, `adress1`, `adress2`, `country`, `city`, `zip`, `description`, `image`, `gategorie`, `P_tickts`, `N_tickts`, `User_id`) VALUES
(82, 'event-12', '2024-04-10', '09:00:00', '9 hours', '123 Main St', 'Apt 101', 'USA', 'New York City', 10001, 'Description for Event 1', 'image1.jpg', 'Category A', 100, 50, 12),
(83, 'event-13', '2024-04-15', '10:00:00', '10 hours', '456 Oak St', '', 'USA', 'Los Angeles', 90001, 'Description for Event 2', 'image2.jpg', 'Category B', 150, 75, 13),
(84, 'event-14', '2024-04-20', '11:00:00', '11 hours', '789 Elm St', '', 'USA', 'Chicago', 60601, 'Description for Event 3', 'image3.jpg', 'Category C', 200, 100, 14),
(85, 'event-15', '2024-04-25', '12:00:00', '12 hours', '1010 Pine St', '', 'USA', 'Houston', 77001, 'Description for Event 4', 'image4.jpg', 'Category D', 250, 125, 15),
(86, 'event-16', '2024-05-01', '13:00:00', '13 hours', '111 Maple St', '', 'USA', 'San Francisco', 94101, 'Description for Event 5', 'image5.jpg', 'Category E', 300, 150, 16),
(87, 'event-17', '2024-05-05', '14:00:00', '14 hours', '222 Oak St', '', 'USA', 'Miami', 33101, 'Description for Event 6', 'image6.jpg', 'Category F', 350, 175, 17),
(88, 'event-18', '2024-05-10', '15:00:00', '15 hours', '333 Elm St', '', 'USA', 'Seattle', 98101, 'Description for Event 7', 'image7.jpg', 'Category G', 400, 200, 18),
(89, 'event-19', '2024-05-15', '16:00:00', '16 hours', '444 Pine St', '', 'USA', 'Dallas', 75201, 'Description for Event 8', 'image8.jpg', 'Category H', 450, 225, 19),
(90, 'event-20', '2024-05-20', '17:00:00', '17 hours', '555 Maple St', '', 'USA', 'Boston', 2101, 'Description for Event 9', 'image9.jpg', 'Category I', 500, 250, 20),
(91, 'event-21', '2024-05-25', '18:00:00', '18 hours', '666 Oak St', '', 'USA', 'Atlanta', 30301, 'Description for Event 10', 'image10.jpg', 'Category J', 550, 275, 21),
(92, 'event-22', '2024-06-01', '19:00:00', '19 hours', '777 Elm St', '', 'USA', 'New York City', 10001, 'Description for Event 11', 'image11.jpg', 'Category K', 600, 300, 22),
(93, 'event-23', '2024-06-05', '20:00:00', '20 hours', '888 Pine St', '', 'USA', 'Los Angeles', 90001, 'Description for Event 12', 'image12.jpg', 'Category L', 650, 325, 23),
(94, 'event-24', '2024-06-10', '21:00:00', '21 hours', '999 Maple St', '', 'USA', 'Chicago', 60601, 'Description for Event 13', 'image13.jpg', 'Category M', 700, 350, 24);

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
(1, 'art'),
(2, 'Sports'),
(3, 'Food & Drink'),
(4, 'Arts & Theater'),
(5, 'Business & Professional'),
(6, 'Community & Culture'),
(7, 'Family & Education'),
(8, 'Fashion & Beauty'),
(9, 'Film, Media & Entertainment'),
(10, 'Health & Wellness');

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
(10, 'Smith', 'John', '1234567890', 'john@example.com', 'Hello, I have a question.', 0),
(11, 'Doe', 'Alice', '9876543210', 'alice@example.com', 'I need assistance with my account.', 0),
(12, 'Johnson', 'Michael', '5551234567', 'michael@example.com', 'Please provide more information on your services.', 0),
(13, 'Brown', 'Emily', '8889990001', 'emily@example.com', 'I want to give feedback on your product.', 0),
(14, 'Taylor', 'David', '4445556667', 'david@example.com', 'Having trouble accessing my account.', 0),
(15, 'Jones', 'Sarah', '1239876543', 'sarah@example.com', 'I have a billing inquiry.', 0),
(16, 'Martinez', 'Robert', '3214567890', 'robert@example.com', 'Need technical support for your software.', 0),
(17, 'Garcia', 'Jennifer', '9876541230', 'jennifer@example.com', 'Interested in your upcoming events.', 0),
(18, 'Rodriguez', 'Daniel', '5552223333', 'daniel@example.com', 'Feedback on your customer service.', 0),
(19, 'Hernandez', 'Amanda', '7778889999', 'amanda@example.com', 'Question about your pricing plans.', 0);

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
(74, 'Event 5', '2024-04-09', '14:30:00', '2 hours', '222 Maple Street', 'Apt 301', 'Miami', 'Miami', 'Miami', '33101', 'Description for Event 5', 'image5.jpg', 0, 50, 25, 16),
(75, 'Event 6', '2024-04-10', '17:30:00', '1 hour', '333 Cedar Street', '', 'Seattle', 'Seattle', 'Seattle', '98101', 'Description for Event 6', 'image6.jpg', 0, 60, 30, 17),
(76, 'Event 7', '2024-04-11', '10:00:00', '3 hours', '444 Walnut Street', '', 'San Francisco', 'San Francisco', 'San Francisco', '94101', 'Description for Event 7', 'image7.jpg', 0, 70, 35, 18),
(77, 'Event 8', '2024-04-12', '13:00:00', '2.5 hours', '555 Oak Street', 'Suite 401', 'Boston', 'Boston', 'Boston', '2101', 'Description for Event 8', 'image8.jpg', 0, 80, 40, 19),
(78, 'Event 9', '2024-04-13', '16:30:00', '1.5 hours', '666 Elm Street', '', 'Philadelphia', 'Philadelphia', 'Philadelphia', '19101', 'Description for Event 9', 'image9.jpg', 0, 90, 45, 20),
(79, 'Event 10', '2024-04-14', '19:00:00', '2 hours', '777 Pine Street', '', 'Washington, D.C.', 'Washington, D.C.', 'Washington, D.C.', '20001', 'Description for Event 10', 'image10.jpg', 0, 100, 50, 21),
(80, 'Event 1', '2024-04-10', '09:00:00', '9 hours', '123 Main St', 'Apt 101', 'USA', 'New York', 'New York City', '10001', 'Description for Event 1', 'image1.jpg', 0, 100, 50, 12),
(81, 'Event 2', '2024-04-15', '10:00:00', '10 hours', '456 Oak St', '', 'USA', 'California', 'Los Angeles', '90001', 'Description for Event 2', 'image2.jpg', 0, 150, 75, 13),
(82, 'Event 3', '2024-04-20', '11:00:00', '11 hours', '789 Elm St', '', 'USA', 'Illinois', 'Chicago', '60601', 'Description for Event 3', 'image3.jpg', 0, 200, 100, 14),
(83, 'Event 4', '2024-04-25', '12:00:00', '12 hours', '1010 Pine St', '', 'USA', 'Texas', 'Houston', '77001', 'Description for Event 4', 'image4.jpg', 0, 250, 125, 15);

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
(61, 'Event 1', 'Description for Event 1', 'image1.jpg', '09:00:00', '2024-04-06', '17:00:00', 10, 100, 'City 1', '12345', 1, 12, 'Address 1', 'Street 1'),
(62, 'Event 2', 'Description for Event 2', 'image2.jpg', '10:30:00', '2024-04-08', '20:00:00', 15, 80, 'City 2', '23456', 2, 13, 'Address 2', 'Street 2'),
(63, 'Event 3', 'Description for Event 3', 'image3.jpg', '11:00:00', '2024-04-10', '18:30:00', 20, 120, 'City 3', '34567', 3, 14, 'Address 3', 'Street 3'),
(64, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:30:00', '2024-04-12', '22:00:00', 25, 150, 'City 4', '45678', 4, 15, 'Address 4', 'Street 4'),
(65, 'Event 5', 'Description for Event 5', 'image5.jpg', '13:00:00', '2024-04-14', '19:30:00', 30, 200, 'City 5', '56789', 5, 16, 'Address 5', 'Street 5'),
(66, 'Event 6', 'Description for Event 6', 'image6.jpg', '14:30:00', '2024-04-16', '21:00:00', 35, 180, 'City 6', '67890', 6, 17, 'Address 6', 'Street 6'),
(67, 'Event 7', 'Description for Event 7', 'image7.jpg', '15:00:00', '2024-04-18', '18:30:00', 40, 250, 'City 7', '78901', 7, 18, 'Address 7', 'Street 7'),
(68, 'Event 8', 'Description for Event 8', 'image8.jpg', '16:30:00', '2024-04-20', '20:00:00', 45, 300, 'City 8', '89012', 8, 19, 'Address 8', 'Street 8'),
(69, 'Event 9', 'Description for Event 9', 'image9.jpg', '17:00:00', '2024-04-22', '22:30:00', 50, 180, 'City 9', '90123', 9, 20, 'Address 9', 'Street 9'),
(70, 'Event 10', 'Description for Event 10', 'image10.jpg', '18:30:00', '2024-04-24', '21:30:00', 55, 220, 'City 10', '01234', 10, 21, 'Address 10', 'Street 10');

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
(98, 'Amanda Smith', 'amanda@example.com', 'Website Navigation Issue', 'I am having trouble navigating through your website.', 21),
(99, 'Daniel Hernandez', 'daniel@example.com', 'Feedback on Customer Service', 'I have some feedback about your customer service.', 20),
(100, 'Jennifer Rodriguez', 'jennifer@example.com', 'Event Registration Problem', 'I am unable to register for your upcoming event.', 19),
(101, 'Robert Garcia', 'robert@example.com', 'Issue with Software', 'Your software is not working properly.', 18),
(102, 'Sarah Martinez', 'sarah@example.com', 'Service Inquiry', 'I would like more information about your services.', 17),
(103, 'David Jones', 'david@example.com', 'Billing Query', 'I have a query regarding my billing statement.', 16),
(105, 'Amanda Smith', 'amanda@example.com', 'Website Navigation Issue', 'I am having trouble navigating through your website.', 21),
(106, 'Daniel Hernandez', 'daniel@example.com', 'Feedback on Customer Service', 'I have some feedback about your customer service.', 20),
(107, 'Jennifer Rodriguez', 'jennifer@example.com', 'Event Registration Problem', 'I am unable to register for your upcoming event.', 19),
(108, 'Robert Garcia', 'robert@example.com', 'Issue with Software', 'Your software is not working properly.', 18),
(109, 'Sarah Martinez', 'sarah@example.com', 'Service Inquiry', 'I would like more information about your services.', 17),
(110, 'David Jones', 'david@example.com', 'Billing Query', 'I have a query regarding my billing statement.', 16);

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
(82, 'John Smith', 'john@example.com', 'Issue with Payment', 'I am facing issues with my recent payment.', 12),
(83, 'Alice Johnson', 'alice@example.com', 'Account Access Problem', 'I cannot access my account. Please help.', 13),
(84, 'Michael Brown', 'michael@example.com', 'Technical Support Required', 'I need technical assistance with your service.', 14),
(85, 'Emily Taylor', 'emily@example.com', 'Product Feedback', 'I have some feedback about your product.', 15),
(86, 'David Jones', 'david@example.com', 'Billing Query', 'I have a query regarding my billing statement.', 16),
(87, 'Sarah Martinez', 'sarah@example.com', 'Service Inquiry', 'I would like more information about your services.', 17),
(88, 'Robert Garcia', 'robert@example.com', 'Issue with Software', 'Your software is not working properly.', 18),
(89, 'Jennifer Rodriguez', 'jennifer@example.com', 'Event Registration Problem', 'I am unable to register for your upcoming event.', 19),
(90, 'Daniel Hernandez', 'daniel@example.com', 'Feedback on Customer Service', 'I have some feedback about your customer service.', 20),
(91, 'Amanda Smith', 'amanda@example.com', 'Website Navigation Issue', 'I am having trouble navigating through your website.', 21);

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
(10, 'John', 'Smith', 'john@example.com', '123 Main St', 'USA', 'New York', '10001', 1, 12),
(11, 'Alice', 'Johnson', 'alice@example.com', '456 Oak St', 'USA', 'Los Angeles', '90001', 2, 13),
(12, 'Michael', 'Brown', 'michael@example.com', '789 Elm St', 'USA', 'Chicago', '60601', 3, 14),
(13, 'Emily', 'Taylor', 'emily@example.com', '1010 Pine St', 'USA', 'Houston', '77001', 4, 15),
(14, 'David', 'Jones', 'david@example.com', '111 Maple St', 'USA', 'San Francisco', '94101', 5, 16),
(15, 'Sarah', 'Martinez', 'sarah@example.com', '222 Oak St', 'USA', 'Miami', '33101', 6, 17),
(16, 'Robert', 'Garcia', 'robert@example.com', '333 Elm St', 'USA', 'Seattle', '98101', 7, 18),
(17, 'Jennifer', 'Rodriguez', 'jennifer@example.com', '444 Pine St', 'USA', 'Dallas', '75201', 8, 19),
(18, 'Daniel', 'Hernandez', 'daniel@example.com', '555 Maple St', 'USA', 'Boston', '02101', 9, 20),
(19, 'Amanda', 'Smith', 'amanda@example.com', '666 Oak St', 'USA', 'Atlanta', '30301', 10, 21);

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

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`Ticket_id`, `Nombre_ticket`, `QR_code`, `Statu`, `User_id`, `E_id`) VALUES
(31, 0, 'qr_code_1', 0, 12, 61),
(32, 0, 'qr_code_2', 0, 13, 62),
(33, 0, 'qr_code_3', 0, 14, 63),
(34, 0, 'qr_code_4', 0, 15, 64),
(35, 0, 'qr_code_5', 0, 16, 65),
(36, 0, 'qr_code_6', 0, 17, 66),
(37, 0, 'qr_code_7', 0, 18, 67),
(38, 0, 'qr_code_8', 0, 19, 68),
(39, 0, 'qr_code_9', 0, 20, 69),
(40, 0, 'qr_code_10', 0, 21, 70);

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
(12, 'John', 'Smith', 'john@example.com', 'password123', '1234567890', '123 Main St', '1990-01-01'),
(13, 'Alice', 'Johnson', 'alice@example.com', 'password456', '9876543210', '456 Oak St', '1992-05-15'),
(14, 'Michael', 'Brown', 'michael@example.com', 'password789', '5551234567', '789 Elm St', '1985-08-20'),
(15, 'Emily', 'Taylor', 'emily@example.com', 'passwordabc', '8889990001', '1010 Pine St', '1988-11-30'),
(16, 'Alice', 'Smith', 'alice.smith@example.com', 'password2', '+1987654321', '456 Elm Street', '1992-05-15'),
(17, 'Bob', 'Johnson', 'bob.johnson@example.com', 'password3', '+1122334455', '789 Oak Street', '1985-11-30'),
(18, 'Emily', 'Brown', 'emily.brown@example.com', 'password4', '+14477112233', '101 Pine Street', '1988-03-20'),
(19, 'Michael', 'Wilson', 'michael.wilson@example.com', 'password5', '+17778889999', '222 Maple Street', '1995-07-10'),
(20, 'Sophia', 'Taylor', 'sophia.taylor@example.com', 'password6', '+15556667777', '333 Cedar Street', '1993-09-25'),
(21, 'David', 'Martinez', 'david.martinez@example.com', 'password7', '+16667778888', '444 Walnut Street', '1991-02-18'),
(22, 'Emma', 'Anderson', 'emma.anderson@example.com', 'password8', '+18889990000', '555 Oak Street', '1994-12-05'),
(23, 'Daniel', 'Thomas', 'daniel.thomas@example.com', 'password9', '+12233445566', '666 Elm Street', '1987-08-12'),
(24, 'Olivia', 'Garcia', 'olivia.garcia@example.com', 'password10', '+19998887776', '777 Pine Street', '1996-04-28');

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
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `Reclammation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `reclamation_archive`
--
ALTER TABLE `reclamation_archive`
  MODIFY `Reclammation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
