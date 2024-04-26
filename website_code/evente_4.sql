-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 avr. 2024 à 23:58
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evente_4`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminee`
--

CREATE TABLE `adminee` (
  `admin_id` int(11) NOT NULL,
  `A_email` varchar(100) NOT NULL,
  `A_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adminee`
--

INSERT INTO `adminee` (`admin_id`, `A_email`, `A_password`) VALUES
(5, 'omaima@gmail.com', '$2y$10$uGZdIR1ZhXfSpd2J/LfqP.mGghFaH.oMOCUew0H5KULZzIfDQcZFK'),
(7, 'test@gmail.com', '$2y$10$8b4ngU7KHiwm04ko4YJe1euDszEw0g93ED8NG1z2jn0L7vMMpZsN.'),
(9, 'soufiane@gmail.com', '$2y$10$YOf6GvalMhQHO1iHagXJl.9nBmdrc3SMBCkRGsfJgGiUS8o46xe1S'),
(10, 'aymane@gmail.com', '$2y$10$NZYGFABob3T9Gq719J32POoT4.ulCN8AlgGemeHhMIqG/DBT2sifS');

-- --------------------------------------------------------

--
-- Structure de la table `archive_demande`
--

CREATE TABLE `archive_demande` (
  `event_id` int(11) NOT NULL,
  `n_event` varchar(100) DEFAULT NULL,
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
  `P_tickts` int(11) NOT NULL,
  `N_tickts` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `eventd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `archive_demande`
--

INSERT INTO `archive_demande` (`event_id`, `n_event`, `event_date`, `event_time`, `event_duration`, `adress1`, `adress2`, `country`, `city`, `zip`, `description`, `image`, `gategorie`, `P_tickts`, `N_tickts`, `User_id`, `eventd_id`) VALUES
(99, 'event-24', '2024-06-10', '21:00:00', '21 hours', '999 Maple St', '', 'Chicago', 'Chicago', 60601, 'Description for Event 13', 'image13.jpg', '0', 700, 350, 24, 111),
(101, 'Event 4', '2024-04-25', '12:00:00', '12 hours', '1010 Pine St', '', 'Houston', 'Houston', 77001, 'Description for Event 4', 'image4.jpg', '0', 250, 125, 15, 118);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `Categorie_id` int(11) NOT NULL,
  `Nom_cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
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
-- Structure de la table `contact_us`
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
-- Déchargement des données de la table `contact_us`
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
(19, 'Hernandez', 'Amanda', '7778889999', 'amanda@example.com', 'Question about your pricing plans.', 0),
(20, 'Newton', 'Anika', 'Maiores magna alias ', 'kigapikug@mailinator.com', '+1 (398) 873-1366', 0);

-- --------------------------------------------------------

--
-- Structure de la table `coupon`
--

CREATE TABLE `coupon` (
  `Coupon_id` int(11) NOT NULL,
  `User_id` int(11) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `Discount` int(11) NOT NULL,
  `discount_end` date NOT NULL,
  `time` time NOT NULL,
  `number_used` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
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
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`event_id`, `n_event`, `event_date`, `event_time`, `event_duration`, `adress1`, `adress2`, `country`, `state`, `city`, `zip`, `description`, `image`, `gategorie`, `P_tickts`, `N_tickts`, `User_id`) VALUES
(119, 'Event 4', '2024-04-25', '12:00:00', '12 hours', '1010 Pine St', '', 'Houston', 'Houston', 'Houston', '77001', 'Description for Event 4', 'image4.jpg', 0, 250, 125, 15),
(120, 'Event 4', '2024-04-25', '12:00:00', '12 hours', '1010 Pine St', '', 'Houston', 'Houston', 'Houston', '77001', 'Description for Event 4', 'image4.jpg', 0, 250, 125, 15),
(121, 'Event 4', '2024-04-25', '12:00:00', '12 hours', '1010 Pine St', '', 'Houston', 'Houston', 'Houston', '77001', 'Description for Event 4', 'image4.jpg', 0, 250, 125, 15);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `E_id` int(11) NOT NULL,
  `Titre` varchar(100) DEFAULT NULL,
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
  `adress2` varchar(200) NOT NULL,
  `vue` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`E_id`, `Titre`, `Description`, `Image`, `Heure_debut`, `Date_debut`, `Heure_fin`, `Prix_ticket`, `Nombre_tickets`, `Ville`, `Zip_code`, `Categorie_id`, `User_id`, `adress1`, `adress2`, `vue`) VALUES
(61, 'Event 1', 'Description for Event 1', 'image1.jpg', '09:00:00', '2024-04-06', '17:00:00', 10, 100, 'City 1', '12345', 1, 12, 'Address 1', 'Street 1', 8),
(62, 'Event 2', 'Description for Event 2', 'image2.jpg', '10:30:00', '2024-04-08', '20:00:00', 15, 80, 'City 2', '23456', 2, 13, 'Address 2', 'Street 2', 24),
(63, 'Event 3', 'Description for Event 3', 'image3.jpg', '11:00:00', '2024-04-10', '18:30:00', 20, 120, 'City 3', '34567', 3, 14, 'Address 3', 'Street 3', 6),
(64, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:30:00', '2024-04-12', '22:00:00', 25, 150, 'City 4', '45678', 4, 15, 'Address 4', 'Street 4', 5),
(65, 'Event 5', 'Description for Event 5', 'image5.jpg', '13:00:00', '2024-04-14', '19:30:00', 30, 200, 'City 5', '56789', 5, 16, 'Address 5', 'Street 5', 0),
(66, 'Event 6', 'Description for Event 6', 'image6.jpg', '14:30:00', '2024-04-16', '21:00:00', 35, 180, 'City 6', '67890', 6, 17, 'Address 6', 'Street 6', 2),
(67, 'Event 7', 'Description for Event 7', 'image7.jpg', '15:00:00', '2024-04-18', '18:30:00', 40, 250, 'City 7', '78901', 7, 18, 'Address 7', 'Street 7', 13),
(68, 'Event 8', 'Description for Event 8', 'image8.jpg', '16:30:00', '2024-04-20', '20:00:00', 45, 300, 'City 8', '89012', 8, 19, 'Address 8', 'Street 8', 1),
(69, 'Event 9', 'Description for Event 9', 'image9.jpg', '17:00:00', '2024-04-22', '22:30:00', 50, 180, 'City 9', '90123', 9, 20, 'Address 9', 'Street 9', 0),
(70, 'Event 10', 'Description for Event 10', 'image10.jpg', '18:30:00', '2024-04-24', '21:30:00', 55, 220, 'City 10', '01234', 10, 21, 'Address 10', 'Street 10', 12),
(71, 'Event 5', 'Description for Event 5', 'image5.jpg', '14:30:00', '2024-04-09', '00:00:02', 50, 25, 'Miami', '33101', 0, 16, '222 Maple Street', 'Apt 301', 5),
(72, 'Event 7', 'Description for Event 7', 'image7.jpg', '10:00:00', '2024-04-11', '00:00:03', 70, 35, 'San Francisco', '94101', 0, 18, '444 Walnut Street', '', 0),
(73, 'Event 8', 'Description for Event 8', 'image8.jpg', '13:00:00', '2024-04-12', '00:00:02', 80, 40, 'Boston', '2101', 0, 19, '555 Oak Street', 'Suite 401', 0),
(74, 'event-12', 'Description for Event 1', 'image1.jpg', '09:00:00', '2024-04-10', '00:00:09', 100, 50, 'New York City', '10001', 0, 12, '123 Main St', 'Apt 101', 0),
(75, 'Zachery Wiggins', 'Animi porro adipisi', '6611f767f2636image2.jpg', '01:00:00', '0000-00-00', '00:00:00', 0, 0, 'Cupidatat ex quos cu', '15255', 1, 27, '219 First Road', 'Laborum Qui id unde', 8),
(76, 'Ebony Stein', 'Illum aute ratione ', '66141ff4ed9c5image1.jpg', '05:45:00', '0000-00-00', '00:00:00', 0, 0, 'Nesciunt harum aper', '44005', 5, 27, '441 Cowley Road', 'Eiusmod ad cupidatat', 6),
(77, 'Event 9', 'Description for Event 9', 'image9.jpg', '16:30:00', '2024-04-13', '00:00:01', 90, 45, 'Philadelphia', '19101', 0, 20, '666 Elm Street', '', 0),
(78, 'Event 10', 'Description for Event 10', 'image10.jpg', '19:00:00', '2024-04-14', '00:00:02', 100, 50, 'Washington, D.C.', '20001', 0, 21, '777 Pine Street', '', 2),
(79, 'Event 1', 'Description for Event 1', 'image1.jpg', '09:00:00', '2024-04-10', '00:00:09', 100, 50, 'New York City', '10001', 0, 12, '123 Main St', 'Apt 101', 0),
(80, 'Event 2', 'Description for Event 2', 'image2.jpg', '10:00:00', '2024-04-15', '00:00:10', 150, 75, 'Los Angeles', '90001', 0, 13, '456 Oak St', '', 0),
(81, 'Event 3', 'Description for Event 3', 'image3.jpg', '11:00:00', '2024-04-20', '00:00:11', 200, 100, 'Chicago', '60601', 0, 14, '789 Elm St', '', NULL),
(82, 'Event 6', 'Description for Event 6', 'image6.jpg', '17:30:00', '2024-04-10', '00:00:01', 60, 30, 'Seattle', '98101', 0, 17, '333 Cedar Street', '', NULL),
(83, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', NULL),
(84, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', NULL),
(85, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 0),
(86, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 13),
(87, 'Quail Flores', 'Nostrum ex sed moles', '661690e2bf11466131e0aafe062359.png', '12:30:00', '0000-00-00', '00:00:00', 0, 0, 'Veniam non recusand', '73806', 4, 27, '87 Oak Street', 'Eu id ut duis ad es', 0),
(88, 'Isaac Hampton', 'Quaerat dicta magni ', '661690f040ea766131e0aafe062359.png', '20:00:00', '0000-00-00', '00:02:25', 0, 0, 'Libero dolore itaque', '42411', 6, 27, '432 Hague Lane', 'Magnam aut sapiente ', 0),
(89, 'Finn Herrera', 'Esse in a et vel et ', '661690fa6340b66131e0aafe062359.png', '04:00:00', '0000-00-00', '00:00:30', 0, 0, 'Non reiciendis quasi', '15930', 5, 27, '139 New Boulevard', 'Unde corporis labore', 10),
(90, 'Tate Winters', 'Omnis ipsum eum pers', '6616a96c744646613214a091c411.webp', '10:00:00', '0000-00-00', '00:00:00', 100, 12, 'Provident ex quis p', '49909', 5, 27, '82 White Milton Court', 'Pariatur Dolorem mo', 10),
(91, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 0),
(92, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 0),
(93, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 0),
(94, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 0),
(95, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 1),
(96, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 0),
(97, 'Chava Wright', 'Quo sint sunt inven', '66171ccfe1dbb6616a96c744646613214a091c411.webp', '00:00:00', '0000-00-00', '00:00:15', 140, 100, 'Et harum repudiandae', '83455', 6, 28, '599 Second Road', 'Corrupti ea dolor i', 2),
(98, 'Armando Kemp', 'Nobis cillum perspic', '66171e31a1fe06611f767f2636image2.jpg', '12:45:00', '0000-00-00', '00:02:25', 0, 0, 'Ut excepturi aute do', '36836', 2, 28, '56 White First Lane', 'Soluta elit commodi', 3),
(99, 'Kendall Cox', 'Nam blanditiis eum s', '66171e956482b66171e31a1fe06611f767f2636image2.jpg', '09:15:00', '0000-00-00', '00:00:00', 300, 12, 'Aut enim incididunt ', '15933', 8, 28, '672 East Clarendon Avenue', 'Nobis ut repellendus', 2),
(100, 'Event 4', 'Description for Event 4', 'image4.jpg', '12:00:00', '2024-04-25', '00:00:12', 250, 125, 'Houston', '77001', 0, 15, '1010 Pine St', '', 0),
(103, 'event-21', 'Description for Event 10', 'image10.jpg', '18:00:00', '2024-05-25', '00:00:18', 550, 275, 'Atlanta', '30301', 0, 21, '666 Oak St', '', 0),
(104, 'event-19', 'Description for Event 8', 'image8.jpg', '16:00:00', '2024-05-15', '00:00:16', 450, 225, 'Dallas', '75201', 0, 19, '444 Pine St', '', 0),
(105, 'event-20', 'Description for Event 9', 'image9.jpg', '17:00:00', '2024-05-20', '00:00:17', 500, 250, 'Boston', '2101', 0, 20, '555 Maple St', '', 0),
(106, 'Adele Ayala', 'Commodo omnis aut do', '66172088337856611f767f2636image2.jpg', '06:45:00', '0000-00-00', '00:00:00', 140, 15, 'Provident in non iu', '95424', 1, 28, '10 Rocky Second Drive', 'Aute quo molestiae f', 2);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `img_Pf` varchar(300) NOT NULL,
  `img_Cv` varchar(500) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
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
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`Reclammation_id`, `Contact_Name`, `Email`, `Subject`, `Description`, `User_id`) VALUES
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
(110, 'David Jones', 'david@example.com', 'Billing Query', 'I have a query regarding my billing statement.', 16),
(112, 'Amanda Smith', 'amanda@example.com', 'Website Navigation Issue', 'I am having trouble navigating through your website.', 21);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation_archive`
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
-- Déchargement des données de la table `reclamation_archive`
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
-- Structure de la table `reservation`
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
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Reservation_id`, `R_Fname`, `R_Lname`, `R_email`, `R_adresse`, `R_country`, `R_city`, `R_Zipcode`, `Ticket_id`, `User_id`) VALUES
(11, 'Alice', 'Johnson', 'alice@example.com', '456 Oak St', 'USA', 'Los Angeles', '90001', 2, 13),
(12, 'Michael', 'Brown', 'michael@example.com', '789 Elm St', 'USA', 'Chicago', '60601', 3, 14),
(13, 'Emily', 'Taylor', 'emily@example.com', '1010 Pine St', 'USA', 'Houston', '77001', 4, 15),
(14, 'David', 'Jones', 'david@example.com', '111 Maple St', 'USA', 'San Francisco', '94101', 5, 16),
(15, 'Sarah', 'Martinez', 'sarah@example.com', '222 Oak St', 'USA', 'Miami', '33101', 6, 17),
(16, 'Robert', 'Garcia', 'robert@example.com', '333 Elm St', 'USA', 'Seattle', '98101', 7, 18),
(17, 'Jennifer', 'Rodriguez', 'jennifer@example.com', '444 Pine St', 'USA', 'Dallas', '75201', 8, 19),
(18, 'Daniel', 'Hernandez', 'daniel@example.com', '555 Maple St', 'USA', 'Boston', '02101', 9, 20),
(19, 'Amanda', 'Smith', 'amanda@example.com', '666 Oak St', 'USA', 'Atlanta', '30301', 10, 21),
(20, 'John', 'Doe', 'johndoe@example.com', 'zertyuiopiuytretyuizertyuiopiuytretyuizertyuiopiuytretyuizertyuiopiuytretyui', '', 'ertyu', 'ghjkl:', 0, 0),
(21, 'Madeson Lott', 'Nayda Butler', 'lole@mailinator.com', 'Deserunt eum fugiat', 'Nepal', 'Itaque odit reprehen', '58100', 0, 0),
(22, 'Nicholas Hamilton', 'Jolene Foster', 'sygeq@mailinator.com', 'Earum eius similique', 'France', 'Incidunt id omnis o', '87460', 0, 0),
(23, 'Otto Ray', 'Devin Sykes', 'gocedef@mailinator.com', 'Ut quod dolore vel e', 'Singapore', 'Consequatur blanditi', '67826', 0, 0),
(24, 'Gwendolyn Reid', 'Fulton Pearson', 'hyqejezip@mailinator.com', 'Est quaerat enim inv', 'Costa Rica', 'Aperiam molestiae do', '55473', 0, 0),
(25, 'Brent Holloway', 'Paul Nixon', 'bebyr@mailinator.com', 'Sit deserunt fugit', 'New Zealand', 'Magna illum quos in', '15543', 0, 0),
(26, 'Brittany Monroe', 'Phillip Watts', 'sihumoreni@mailinator.com', 'Distinctio Eos mag', 'Thailand', 'Sit reprehenderit a', '34821', 0, 0),
(27, 'Meredith Osborne', 'Deacon Gill', 'myvebu@mailinator.com', 'Hic debitis harum do', 'Slovenia', 'Numquam sed libero d', '26688', 0, 0),
(28, 'Shelly Dunlap', 'Astra Jordan', 'nylytawe@mailinator.com', 'Laborum Ea ducimus', 'Italy', 'Repudiandae ut modi ', '79800', 0, 0),
(29, 'Francis Tanner', 'Donovan Gallagher', 'cizeca@mailinator.com', 'Sequi id ut dolor de', 'India', 'Irure excepturi quod', '99523', 0, 0),
(30, 'Maile Walker', 'Barbara Santos', 'lawaz@mailinator.com', 'Aut in maiores ut la', 'Malaysia', 'In et et non sed qui', '23704', 0, 0),
(31, 'Nomlanga Green', 'Odessa Simpson', 'maqupixij@mailinator.com', 'Quo odio assumenda t', 'Philippines', 'Earum dolor voluptas', '42627', 0, 0),
(32, 'Felicia Velasquez', 'Willa England', 'lofyjinu@mailinator.com', 'Quos quam nisi repre', 'Philippines', 'Quis reprehenderit ', '67123', 0, 0),
(33, 'Susan Estrada', 'Genevieve Vaughn', 'lofoxepe@mailinator.com', 'Quis delectus rerum', 'Malaysia', 'Beatae eveniet temp', '45600', 0, 0),
(34, 'Ivory Matthews', 'Rajah Herrera', 'hufo@mailinator.com', 'Id consequatur dolo', 'Slovakia', 'Animi voluptas pers', '25063', 0, 0),
(35, 'Charity Bowman', 'Keane Holloway', 'cuxucybac@mailinator.com', 'Excepturi itaque qui', 'Norway', 'Sed assumenda dolore', '71956', 0, 0),
(36, 'Fay Kerr', 'Kyra Mayo', 'funy@mailinator.com', 'Cum dicta sit dolori', 'Argentina', 'Quod qui assumenda a', '78568', 0, 0),
(37, 'Violet Adkins', 'Selma Justice', 'qyvefacen@mailinator.com', 'Soluta tempore moll', 'Portugal', 'Ut sed et molestiae ', '92442', 0, 0),
(38, 'Ryder Rhodes', 'Aurora Cross', 'godosezyq@mailinator.com', 'Aliquam et sint duci', 'Lithuania', 'Occaecat aut quos lo', '14968', 0, 0),
(39, 'Ryder Rhodes', 'Aurora Cross', 'godosezyq@mailinator.com', 'Aliquam et sint duci', 'Lithuania', 'Occaecat aut quos lo', '14968', 0, 0),
(40, 'Silas Merritt', 'Kyla Wise', 'sabekek@mailinator.com', 'Non sunt obcaecati ', 'Costa Rica', 'Asperiores cumque co', '33186', 0, 0),
(41, 'Joelle Parks', 'Chastity Hensley', 'popi@mailinator.com', 'Soluta repellendus ', 'Greece', 'Aut perferendis repr', '12365', 0, 0),
(42, 'soufiane', 'ouenjli', 'soufiane@example.com', 'hay lalmina adarissa narjiss fes morocco', 'Czech Republic', 'fes', '30000', 0, 0),
(43, 'Dawn Slater', 'Hu Gilbert', 'hojogigoda@mailinator.com', 'Molestiae odio offic', 'Slovakia', 'Reprehenderit qui il', '88744', 0, 0),
(44, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(45, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(46, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(47, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(48, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(49, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(50, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(51, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(52, 'John', 'Doe', 'johndoe@example.com', 'hhhhhhhhhhhhhhhhhhh', '', 'hhh', '12', 0, 0),
(53, 'Urielle Walton', 'Harding Salinas', 'pilodyd@mailinator.com', 'Voluptatem velit acc', 'Belgium', 'Et ad sed quis ipsa', '54451', 0, 0),
(54, 'John', 'Doe', 'johndoe@example.com', 'yyyyyyyyy', '', 'fes', '30000', 0, 0),
(55, 'John', 'Doe', 'johndoe@example.com', 'yyyyyyyyy', '', 'fes', '30000', 0, 0),
(56, 'Nicholas Langley', 'Lila William', 'nukeq@mailinator.com', 'Sint unde id quaerat', 'Netherlands', 'Est deleniti except', '94524', 0, 0),
(57, 'Nicholas Langley', 'Lila William', 'nukeq@mailinator.com', 'Sint unde id quaerat', 'Netherlands', 'Est deleniti except', '94524', 0, 0),
(58, 'Mariko Dalton', 'Grant Gallegos', 'hagokegeqy@mailinator.com', 'Accusamus deserunt e', 'Turkey', 'Reiciendis enim enim', '45052', 0, 0),
(59, 'Sean Garner', 'Carter Guzman', 'ryko@mailinator.com', 'Quia quisquam animi', 'India', 'Magni et earum quod ', '37200', 0, 0),
(60, 'Cheyenne Thompson', 'Martin Burt', 'vomejolo@mailinator.com', 'Consectetur incididu', 'Mexico', 'Eu illo anim amet o', '13546', 0, 0),
(61, 'Caryn Bush', 'Yolanda Bullock', 'kifajeqyma@mailinator.com', 'Esse consequuntur q', 'Indonesia', 'Aliquip dolor facili', '80427', 0, 0),
(62, 'Xenos Gutierrez', 'Rosalyn Love', 'qixujipugi@mailinator.com', 'Omnis iure elit ex ', 'Germany', 'Accusamus voluptas d', '64565', 0, 0),
(63, 'Fletcher Morton', 'Igor Lester', 'wopajytuqu@mailinator.com', 'Pariatur Excepteur ', 'Dominican Republic', 'Tempora voluptates a', '21646', 0, 0),
(64, 'Mallory Kaufman', 'Sonya Lara', 'nuwidyfydu@mailinator.com', 'Reprehenderit ut max', 'Dominican Republic', 'Consequatur totam o', '17523', 0, 0),
(65, 'Kennan Gallegos', 'Nigel Gill', 'zoki@mailinator.com', 'Quis quos ut est ius', 'Chile', 'Deserunt sit aut qui', '22895', 0, 0),
(66, 'Karly Howard', 'Rose Higgins', 'cymy@mailinator.com', 'Deserunt nesciunt i', 'South Korea', 'In odit explicabo A', '63846', 0, 0),
(67, 'Hayfa Jennings', 'Miriam Reyes', 'zugyzuha@mailinator.com', 'Sit eos iste duis si', 'Turkey', 'Praesentium repudian', '37408', 0, 0),
(68, 'Aurelia Sullivan', 'Cassidy Ware', 'jugus@mailinator.com', 'Eos mollit natus inv', 'Luxembourg', 'Eu aut temporibus lo', '93794', 0, 0),
(69, 'Merritt Underwood', 'Linus Hawkins', 'waxihacefy@mailinator.com', 'Ut cupidatat quia no', 'Italy', 'Elit sed anim Nam v', '75084', 0, 0),
(70, 'Shaeleigh Thomas', 'Bell Mejia', 'nykivaz@mailinator.com', 'Ipsum accusantium co', 'Japan', 'Eaque aut maxime mag', '55590', 0, 0),
(71, 'Amena Harvey', 'Scott Church', 'jupi@mailinator.com', 'Doloremque et evenie', 'Malaysia', 'Suscipit labore temp', '87112', 0, 0),
(72, 'Amena Harvey', 'Scott Church', 'jupi@mailinator.com', 'Doloremque et evenie', 'Malaysia', 'Suscipit labore temp', '87112', 0, 0),
(73, 'Amena Harvey', 'Scott Church', 'jupi@mailinator.com', 'Doloremque et evenie', 'Malaysia', 'Suscipit labore temp', '87112', 0, 0),
(74, 'Dolan Stanton', 'Brenda Rice', 'lefovum@mailinator.com', 'Cumque et porro volu', 'Singapore', 'Magnam omnis velit ', '24013', 0, 0),
(75, 'Samuel Simmons', 'Christen Reynolds', 'hyby@mailinator.com', 'Natus deserunt exped', 'Tanzania', 'Dolores itaque solut', '74736', 0, 0),
(76, 'Cameron Knowles', 'Jasmine Ortiz', 'tyzujezihu@mailinator.com', 'Commodi pariatur Do', 'Bolivia', 'Laborum In velit au', '17877', 0, 0),
(77, 'Mark Graves', 'Brian Howe', 'dypyni@mailinator.com', 'Odit numquam quidem ', 'Dominican Republic', 'Quibusdam sed sint s', '29324', 0, 0),
(78, 'Lavinia Finley', 'Abbot Hester', 'soxuh@mailinator.com', 'Fuga Eaque numquam ', 'Netherlands', 'Minus quasi fugit q', '10536', 0, 0),
(79, 'Jermaine Rice', 'Dorothy Fields', 'wobaw@mailinator.com', 'Nostrud non laborum', 'Estonia', 'Eaque beatae qui deb', '62231', 0, 0),
(80, 'Jermaine Rice', 'Dorothy Fields', 'wobaw@mailinator.com', 'Nostrud non laborum', 'Estonia', 'Eaque beatae qui deb', '62231', 0, 0),
(81, 'Jermaine Rice', 'Dorothy Fields', 'wobaw@mailinator.com', 'Nostrud non laborum', 'Estonia', 'Eaque beatae qui deb', '62231', 0, 0),
(82, 'Camilla Kelley', 'Jescie Zamora', 'zydimyduze@mailinator.com', 'Exercitation exercit', 'Turkey', 'Vel quo quidem magni', '57014', 0, 0),
(83, 'Jonah Guerrero', 'Ursa Whitney', 'xepyn@mailinator.com', 'Possimus quis qui c', 'Thailand', 'Sunt consequat Dolo', '75823', 0, 0),
(84, 'Connor Hodge', 'Quinn Bryant', 'wywyfyqec@mailinator.com', 'Sint voluptatem non ', 'Spain', 'Ea asperiores conseq', '33926', 0, 0),
(85, 'Alfreda Erickson', 'Maggy Mueller', 'xita@mailinator.com', 'Cupidatat molestiae ', 'Costa Rica', 'Aperiam repudiandae ', '15425', 0, 0),
(86, 'Malachi Higgins', 'Nayda Horn', 'mocimesik@mailinator.com', 'Vero laborum et sunt', 'Norway', 'Eveniet est sunt d', '46868', 0, 0),
(87, 'Amber Lloyd', 'Sopoline Bowers', 'mezilyp@mailinator.com', 'Blanditiis possimus', 'Japan', 'Unde et consequatur', '52704', 0, 0),
(88, 'Zelda Hyde', 'Drake Hernandez', 'jimyzalev@mailinator.com', 'Nam quod excepturi e', 'Colombia', 'Dignissimos tempore', '32181', 0, 0),
(89, 'Kareem Gordon', 'Alana Raymond', 'bifezij@mailinator.com', 'Odio est et sed ips', 'Australia', 'Deserunt est debitis', '59086', 0, 0),
(90, 'Christine Pratt', 'Armand Bradley', 'zype@mailinator.com', 'Ducimus voluptatem', 'Spain', 'Tenetur quisquam est', '64049', 0, 0),
(91, 'Melyssa Patton', 'Autumn Hebert', 'hefoxifez@mailinator.com', 'Fuga Qui rem qui ha', 'Dominican Republic', 'Esse ex consequatur', '51001', 0, 0),
(92, 'Althea Cervantes', 'Shannon Mooney', 'mityh@mailinator.com', 'Laboris proident qu', 'Singapore', 'Placeat maxime eum ', '47053', 0, 0),
(93, 'Chadwick Wynn', 'Vincent Peterson', 'bivyrika@mailinator.com', 'Aut qui molestias de', 'India', 'Enim reprehenderit s', '92462', 0, 0),
(94, 'Chadwick Hewitt', 'Lenore Crawford', 'rurubuzaj@mailinator.com', 'Natus error numquam ', 'Luxembourg', 'Labore in nihil debi', '59287', 0, 0),
(95, 'Harding Garrett', 'Slade Webster', 'xyqycu@mailinator.com', 'Consequuntur proiden', 'Colombia', 'Officia eius dolor p', '26354', 0, 0),
(96, 'Jordan Montoya', 'Wynter Maynard', 'lifememap@mailinator.com', 'Tempora soluta fugia', 'Poland', 'Inventore voluptas n', '44820', 0, 0),
(97, 'Caryn Fitzpatrick', 'Georgia Arnold', 'safurota@mailinator.com', 'Quis nostrum laborio', 'Ireland', 'Provident dicta nos', '24623', 0, 0),
(98, 'Regina Stanley', 'Maite Snider', 'veta@mailinator.com', 'Sed quasi autem eu v', 'Indonesia', 'Sed atque blanditiis', '79374', 0, 0),
(99, 'Ursa Dickerson', 'Edan Jarvis', 'nojacypo@mailinator.com', 'Quis quod ex excepte', 'Philippines', 'Reprehenderit conse', '40954', 0, 0),
(100, 'Sandra Ewing', 'Baxter Mercado', 'jodyt@mailinator.com', 'Nemo sed nulla sit ', 'Hong Kong', 'Ex omnis voluptates ', '67119', 0, 0),
(101, 'Amela Allen', 'Dominic Petty', 'saduneba@mailinator.com', 'Eos dolorem ex enim', 'Italy', 'Facilis id enim quib', '97511', 0, 0),
(102, 'Imelda Rivers', 'Evelyn Lucas', 'ratuvu@mailinator.com', 'Nulla eaque in possi', 'Malaysia', 'Accusantium culpa i', '30535', 0, 0),
(103, 'Melodie Ewing', 'Lionel Taylor', 'povedyd@mailinator.com', 'Optio non nemo irur', 'Luxembourg', 'Cum quia veritatis e', '54808', 0, 0),
(104, 'Kamal Kidd', 'Mariko Alexander', 'xibived@mailinator.com', 'Itaque Nam voluptas ', 'Estonia', 'Ut cumque velit cumq', '86956', 0, 0),
(105, 'Candice Nielsen', 'Sybill Mcdowell', 'bozefelucu@mailinator.com', 'Obcaecati tempora te', 'Bolivia', 'Pariatur Deserunt v', '45015', 0, 0),
(106, 'Jesse Wise', 'Jason Barrett', 'gybi@mailinator.com', 'Alias alias pariatur', 'Thailand', 'Fuga Vel aut sed do', '61336', 0, 0),
(107, 'Aymane el', 'el', 'aymaneel7@gma.com', 'ifmotica', 'Morocco', 'FES', '33000', 0, 0),
(108, 'Aymane', 'el', 'aymaneel724@gmail.com', 'zOZEUFIZEFUIO', 'Morocco', 'FES', '33000', 0, 0),
(109, 'ilyas', 'bouayyad', 'aymaneel7@gma.com', 'ifmotica', 'Morocco', 'FES', '33000', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `saveevent`
--

CREATE TABLE `saveevent` (
  `S_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `E_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `saveevent`
--

INSERT INTO `saveevent` (`S_id`, `User_id`, `E_id`) VALUES
(10, 27, 70),
(11, 27, 62);

-- --------------------------------------------------------

--
-- Structure de la table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `S_id` int(11) NOT NULL,
  `siteweb` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `socialmedia`
--

INSERT INTO `socialmedia` (`S_id`, `siteweb`, `facebook`, `twitter`, `linkedin`, `User_id`) VALUES
(1, 'www.moroccanjoy.com', 'moroccanjoyface', 'moroccanjoytwitt', 'linkmoroccanjoy', 27);

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

CREATE TABLE `suivre` (
  `F_id` int(11) NOT NULL,
  `Followers` int(11) DEFAULT NULL,
  `Following` int(11) DEFAULT NULL,
  `User_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `suivre`
--

INSERT INTO `suivre` (`F_id`, `Followers`, `Following`, `User_id`) VALUES
(1, 32, 2, 18),
(2, 27, 0, 27),
(3, 27, 0, 27),
(4, 27, 0, 27),
(5, 27, 0, 27),
(6, 27, 0, 27),
(7, 27, 0, 27),
(8, 27, 0, 27),
(9, 27, 0, 27),
(10, 27, 0, 27),
(11, 27, 0, 27),
(12, 27, 0, 27),
(13, 27, 0, 27),
(14, 27, 0, 27),
(15, 27, 0, 27),
(16, 27, 0, 27),
(17, 27, 0, 27),
(18, 27, 0, 27),
(19, 27, 0, 27),
(20, 27, 0, 27),
(21, 27, 0, 27),
(22, 27, 0, 27),
(23, 27, 0, 27),
(24, 27, 0, 27),
(25, 27, 0, 27),
(26, 27, 0, 27),
(27, 27, 0, 27),
(28, 27, 0, 27),
(29, 27, 0, 27),
(30, 27, 0, 27),
(31, 27, 0, 27),
(32, 27, 0, 27),
(33, 27, 0, 27),
(34, 27, 0, 27),
(35, 27, 0, 27),
(36, 27, 0, 27),
(37, 27, 0, 27),
(38, 27, 0, 27),
(39, 27, 0, 27);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `Ticket_id` int(11) NOT NULL,
  `Purchase_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `QR_code` varchar(1000) NOT NULL,
  `QR_image` varchar(500) NOT NULL,
  `Statu` varchar(20) NOT NULL,
  `User_id` int(11) NOT NULL,
  `E_id` int(11) NOT NULL,
  `prix_tickt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`Ticket_id`, `Purchase_Date`, `QR_code`, `QR_image`, `Statu`, `User_id`, `E_id`, `prix_tickt`) VALUES
(113, '2024-06-12 03:21:29', '6616b38969286bad59e042a7e1b0a4b5a86bbd30c8cd71977983c4fdcb04db43a1090f9d4aa89', '1977983c4fdcb04db43a1090f9d4aa89qrcode.png', 'Non valide', 27, 90, 100),
(136, '2024-10-17 03:21:29', '66141ebeb12a2fb10ceb7e18489f3a2b1009fa551f53d802c0514baf4cce8ad53f2bac04fed11', '802c0514baf4cce8ad53f2bac04fed11qrcode.png', 'Valide', 27, 75, 0),
(138, '2024-04-24 20:33:27', '66295e87399bef01a2f7dfd673d0e4004a1f406b1b2f7b89c6725932930b29d92e77284564124', 'b89c6725932930b29d92e77284564124qrcode.png', 'Non valide', 27, 67, 40),
(139, '2024-04-24 20:54:01', '6629635950acefc5db1fa26fcb88bf855894546e6ffc6a2e59b99c2216fa2f5f0d30f6ee3e60e', 'a2e59b99c2216fa2f5f0d30f6ee3e60eqrcode.png', 'Non valide', 27, 67, 40),
(140, '2024-04-25 21:09:46', '662ab889e69375d095a522effb7c795db725c45227debc6910ce8b0607249cfc371765ff74fc1', 'c6910ce8b0607249cfc371765ff74fc1qrcode.png', 'Non valide', 27, 61, 10);

-- --------------------------------------------------------

--
-- Structure de la table `user`
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
-- Déchargement des données de la table `user`
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
(24, 'Olivia', 'Garcia', 'olivia.garcia@example.com', 'password10', '+19998887776', '777 Pine Street', '1996-04-28'),
(25, 'Hays', 'Dieter', 'nakixovewy@mailinator.com', '$2y$10$GFlbO.sms5uIXidDv2TLiesMp.PdQIIoGKv/7huzhsHohsJ1R/w4W', '+1 (929) 543-2935', 'Ducimus non impedit', '2017-10-27'),
(26, 'Jacobson', 'Josiah', 'xiso@mailinator.com', '$2y$10$dGY6dsOAj3lYLRRgKwRfLOA1P59fWprWT.OWmuqWaHakDYmDgSxLW', '+1 (286) 512-9676', 'Veritatis assumenda ', '2014-02-15'),
(27, 'test', 'soufiane', 'soufiane@gmail.com', '$2y$10$fKY3DVEwSqtj7WYt6Gz.U.dX1arOHWZpeRIVg7PF5TVftfF6UJ.dq', 'zertyuio', 'zertyuiopiuytretyuizertyuiopiuytretyuizertyuiopiuytretyuizertyuiopiuytretyui', '2024-04-26'),
(28, 'mchachti', 'yassine', 'mchachti@gmail.com', '$2y$10$bl/46ZV8JBnFgqvRpLdIAOq6rfl0DHIV9uZnFAFBdhsufV1hE5Z/i', '0618181818', 'Quia quisquam animi', '2024-04-26'),
(29, 'Cooke', 'Rahim', 'joharevo@mailinator.com', '$2y$10$xakg16xcShg5oOJt6NDImemacNXJaoOhyFSg7SgB0e1JFeBDqi7oq', '+1 (446) 953-3705', 'Atque quo mollit et ', '1980-08-01'),
(30, 'test', 'test', 'test@test.test', '$2y$10$.vbo/Tk/ngqFN.lwjQYMme4g3etLwxrjNIozwxEii6BUyh.CaVsPu', '088768568567', 'test@test.test', '2024-04-11');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('google','facebook','twitter','linkedin') NOT NULL DEFAULT 'google',
  `oauth_uid` varchar(50) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adminee`
--
ALTER TABLE `adminee`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `archive_demande`
--
ALTER TABLE `archive_demande`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `eventd_id` (`eventd_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Categorie_id`);

--
-- Index pour la table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`Coupon_id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `gategorie` (`gategorie`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`E_id`),
  ADD KEY `Categorie_id` (`Categorie_id`),
  ADD KEY `event_ibfk_2` (`User_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`Reclammation_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `reclamation_archive`
--
ALTER TABLE `reclamation_archive`
  ADD PRIMARY KEY (`Reclammation_id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_id`),
  ADD KEY `Ticket_Of_id` (`Ticket_id`);

--
-- Index pour la table `saveevent`
--
ALTER TABLE `saveevent`
  ADD PRIMARY KEY (`S_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `E_id` (`E_id`);

--
-- Index pour la table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`S_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Ticket_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `E_OF_id` (`E_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adminee`
--
ALTER TABLE `adminee`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `archive_demande`
--
ALTER TABLE `archive_demande`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `Coupon_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `Reclammation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `reclamation_archive`
--
ALTER TABLE `reclamation_archive`
  MODIFY `Reclammation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT pour la table `saveevent`
--
ALTER TABLE `saveevent`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `suivre`
--
ALTER TABLE `suivre`
  MODIFY `F_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `archive_demande`
--
ALTER TABLE `archive_demande`
  ADD CONSTRAINT `archive_demande_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `coupon`
--
ALTER TABLE `coupon`
  ADD CONSTRAINT `coupon_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `saveevent`
--
ALTER TABLE `saveevent`
  ADD CONSTRAINT `saveevent_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saveevent_ibfk_2` FOREIGN KEY (`E_id`) REFERENCES `event` (`E_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD CONSTRAINT `socialmedia_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Contraintes pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD CONSTRAINT `suivre_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`E_id`) REFERENCES `event` (`E_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
