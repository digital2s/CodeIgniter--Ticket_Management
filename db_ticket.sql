-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 02:53 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `num_department` int(11) NOT NULL,
  `label_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`num_department`, `label_department`) VALUES
(10, '  Informatique'),
(20, '\r\n\r\nHuman Ressources'),
(30, 'Finances'),
(40, 'Stewardship       '),
(50, 'Booking'),
(60, 'Commerce'),
(80, ' Receiving'),
(100, 'Technical'),
(120, 'General Management');

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE `incident` (
  `num_incident` int(11) NOT NULL,
  `title_incident` varchar(10000) NOT NULL,
  `desc_incident` varchar(10000) NOT NULL,
  `priority` varchar(20) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `date_incident` date DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `read_incident` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`num_incident`, `title_incident`, `desc_incident`, `priority`, `statut`, `date_incident`, `id_user`, `id_department`, `read_incident`) VALUES
(19, 'WIFI', 'HI, we have an internet problem ', 'urgent', 'in progress', '2018-07-05', 'abdo', 20, 1),
(20, 'Imprimante', 'Hi, we have an empty toner', 'high', 'new', '2018-07-13', 'sara', 50, 1),
(21, 'Internet', 'no internet access', 'urgent', 'in progress', '2018-07-05', 'web', 80, 0);

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `priority` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`priority`) VALUES
(' urgent'),
('high'),
('law'),
('pass mark');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id_response` int(11) NOT NULL,
  `text_response` varchar(10000) DEFAULT NULL,
  `id_incident` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id_response`, `text_response`, `id_incident`) VALUES
(14, 'ticket solution', 19),
(15, 'test', 20);

-- --------------------------------------------------------

--
-- Table structure for table `statut`
--

CREATE TABLE `statut` (
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statut`
--

INSERT INTO `statut` (`state`) VALUES
('in progress'),
('new'),
('resolved');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `label_type` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `label_type`) VALUES
(1, 'admin'),
(2, 'employee'),
(3, 'technician');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `login_user` varchar(255) NOT NULL,
  `pw_user` varchar(255) NOT NULL,
  `fname_user` varchar(255) NOT NULL,
  `lname_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `id_department` int(11) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`login_user`, `pw_user`, `fname_user`, `lname_user`, `email_user`, `id_department`, `id_type`) VALUES
('abdel', '2018', 'abdel', 'abdel', 'abdel@gmail.com', 120, 1),
('abdo', 'abdo', 'abdelwahab', 'developer', 'abdo@gmail.com', 20, 2),
('sara', 'sara', 'sara', 'sara', 'sara@gmail.com', 50, 2),
('web', 'web', 'developer', 'developer', 'dev@gmail.com', 80, 2),
('webdev', 'webdev', 'tech', 'tech', 'tech@gmail.com', 10, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`num_department`);

--
-- Indexes for table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`num_incident`),
  ADD KEY `fk_Incident_Dept` (`id_department`),
  ADD KEY `Priority` (`priority`),
  ADD KEY `Statut` (`statut`),
  ADD KEY `Login` (`id_user`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`priority`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id_response`),
  ADD KEY `fk_Reponse_Incident` (`id_incident`);

--
-- Indexes for table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`state`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`login_user`),
  ADD KEY `fk_Ultilisateur_Dept` (`id_department`),
  ADD KEY `fk_Utilisateur_Cat` (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incident`
--
ALTER TABLE `incident`
  MODIFY `num_incident` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id_response` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `fk_Incident_Dept` FOREIGN KEY (`id_department`) REFERENCES `department` (`num_department`) ON DELETE CASCADE,
  ADD CONSTRAINT `incident_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`login_user`);

--
-- Constraints for table `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `fk_Reponse_Incident` FOREIGN KEY (`id_incident`) REFERENCES `incident` (`num_incident`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `department` (`num_department`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
