-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 09:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcinema`
--

CREATE TABLE `tblcinema` (
  `C_Id` int(11) NOT NULL,
  `C_Name` varchar(50) NOT NULL,
  `C_Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcinema`
--

INSERT INTO `tblcinema` (`C_Id`, `C_Name`, `C_Location`) VALUES
(1, 'Nuplex', 'The Place, Khayaban-e-Shaheen, DHA Karachi Phase VIII Zone B Zone B Phase 8 Defence Housing Authority, Karachi, Karachi City, Sindh 75500'),
(2, 'MULTIPLEX CINEMA', 'Millenium mall , Main Rashid Minhas road, Karachi, Pakistan'),
(3, 'CINEGOLD PLEX CINEMA', 'Midway Commercial B, Phase 1 Bahria Town Karachi, Karachi, Karachi City, Sindh 75340'),
(4, 'THE ARENA KARACHI', 'Bahria Town Tower, Tariq Rd, Pakistan Employees Co-Operative Housing Society Block 2 PECHS, Karachi, Karachi City, Sindh 75400'),
(5, 'ATRIUM CINEMA', 'Entrance from Raja Ghazanfer Ali Road, Behind Avari Towers, 3rd Floor, Atrium Mall, Karachi, Pakistan'),
(6, 'CAPRII CINEMA', 'V28P+W64، Capri Cinema, M.A Jinnah Rd, Central Jacob Lines Karachi, Karachi City, Sindh 74200');

-- --------------------------------------------------------

--
-- Table structure for table `tblcinemadate`
--

CREATE TABLE `tblcinemadate` (
  `CD_Id` int(11) NOT NULL,
  `CD_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcinemadate`
--

INSERT INTO `tblcinemadate` (`CD_Id`, `CD_Date`) VALUES
(1, '2023-11-12'),
(2, '2023-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `tblcoment`
--

CREATE TABLE `tblcoment` (
  `Con_Id` int(11) NOT NULL,
  `Con_Name` varchar(50) NOT NULL,
  `Con_Coment` text NOT NULL,
  `Con_rat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcoment`
--

INSERT INTO `tblcoment` (`Con_Id`, `Con_Name`, `Con_Coment`, `Con_rat`) VALUES
(1, 'yahoo', 'koperoeiroi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblgenres`
--

CREATE TABLE `tblgenres` (
  `G_Id` int(11) NOT NULL,
  `G_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblgenres`
--

INSERT INTO `tblgenres` (`G_Id`, `G_Name`) VALUES
(1, 'Biography'),
(2, 'Entertainment'),
(3, 'Animation');

-- --------------------------------------------------------

--
-- Table structure for table `tblindustry`
--

CREATE TABLE `tblindustry` (
  `IN_Id` int(11) NOT NULL,
  `IN_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblindustry`
--

INSERT INTO `tblindustry` (`IN_Id`, `IN_Name`) VALUES
(1, 'HollyWood'),
(2, 'LollyWood'),
(3, 'Bollywood'),
(4, 'Chines');

-- --------------------------------------------------------

--
-- Table structure for table `tbllanguage`
--

CREATE TABLE `tbllanguage` (
  `L_Id` int(11) NOT NULL,
  `L_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllanguage`
--

INSERT INTO `tbllanguage` (`L_Id`, `L_Name`) VALUES
(1, 'Urdu');

-- --------------------------------------------------------

--
-- Table structure for table `tblmovie`
--

CREATE TABLE `tblmovie` (
  `M_Id` int(11) NOT NULL,
  `M_Name` varchar(50) NOT NULL,
  `M_Date` date NOT NULL,
  `M_Description` text NOT NULL,
  `Cinema` int(11) NOT NULL,
  `Industry` int(11) NOT NULL,
  `Genre` int(11) NOT NULL,
  `Language` int(11) NOT NULL,
  `Cinema_Date` int(11) NOT NULL,
  `Movie_Timing` varchar(50) NOT NULL,
  `Movie_Trailer` varchar(50) NOT NULL,
  `M_Images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmovie`
--

INSERT INTO `tblmovie` (`M_Id`, `M_Name`, `M_Date`, `M_Description`, `Cinema`, `Industry`, `Genre`, `Language`, `Cinema_Date`, `Movie_Timing`, `Movie_Trailer`, `M_Images`) VALUES
(1, 'Joker', '2024-02-12', 'Joker is a 2019 American psychological thriller film directed by Todd Phillips, who also co-wrote the screenplay with Scott Silver. The film, loosely based on DC Comics characters, stars Joaquin Phoenix as Joker. Set in 1981, it follows Arthur Fleck, a failed clown and aspiring stand-up comic whose descent into mental illness and nihilism inspires a violent countercultural revolution against the wealthy in a decaying Gotham City.', 1, 1, 3, 1, 1, '9:00 AM to 12:10 PM', 'https://www.youtube.com/embed/zAGVQLHvwOY', 'joker.jpg'),
(2, 'Spider-Man', '2024-02-12', 'When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 1, 1, 3, 1, 1, '2:40 AM to 5:30 PM', 'https://www.youtube.com/embed/JfVOs4VSpmA', 'spiderman.jfif'),
(3, '72 Hours', '2024-02-12', '72 Hours: Martyr Who Never Died\", Starring Avinash Dhyani, Yeshi Dema, Mukesh Tiwari, Virendra Saxena, Alka Amin. Directed by Avinash', 1, 3, 1, 1, 1, '5:40 PM to 8:10 PM', 'https://www.youtube.com/embed/7xlZqxU7aM8', '72 hpurs.jpg'),
(4, 'Pathan', '2024-02-14', 'Pathaan is a 2023 Indian Hindi-language action thriller film co-written and directed by Siddharth Anand and produced by Aditya Chopra under Yash Raj Films.', 4, 1, 1, 1, 1, '2:40 AM to 5:30 PM', 'https://www.youtube.com/embed/vqu4z34wENw', '20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblseats`
--

CREATE TABLE `tblseats` (
  `S_Id` int(11) NOT NULL,
  `M_Name` int(11) NOT NULL,
  `Economy` int(11) NOT NULL,
  `Busniess` int(11) NOT NULL,
  `First_Class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblseats`
--

INSERT INTO `tblseats` (`S_Id`, `M_Name`, `Economy`, `Busniess`, `First_Class`) VALUES
(1, 4, 1200, 1300, 1900),
(2, 3, 1200, 1300, 1500),
(3, 1, 1900, 1500, 1200),
(4, 2, 2200, 1900, 1400),
(5, 4, 2300, 2000, 1600),
(6, 3, 1900, 1400, 1100);

-- --------------------------------------------------------

--
-- Table structure for table `tblsignup`
--

CREATE TABLE `tblsignup` (
  `Id` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Images` varchar(50) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsignup`
--

INSERT INTO `tblsignup` (`Id`, `User_Name`, `Email`, `Password`, `Images`, `Date`) VALUES
(21, 'Hammad Ahmed', 'h@gmail.com', '123', '3.jpg', '2023-12-10'),
(22, 'Hassan Aziz', 'hz@gmail.com', '123', '15.jpg', '2023-12-10'),
(23, 'Fasih Haidery', 'fasihhaidery@gmail.com', '123', '2.jpg', '2023-12-10'),
(25, 'Uzair', 'u@gmail.com', '123', '1.jpg', '2023-12-09'),
(26, 'Abdul Ahad', 'aahad@gmail.com', '123', '19.jpg', '2023-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `tblticket`
--

CREATE TABLE `tblticket` (
  `T_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `M_Name` varchar(50) NOT NULL,
  `M_Price` int(11) NOT NULL,
  `T_Date` varchar(50) NOT NULL,
  `Numb_T` int(11) NOT NULL,
  `M_Images` varchar(50) NOT NULL,
  `Card_No` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IP_Address` varchar(50) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcinema`
--
ALTER TABLE `tblcinema`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `tblcinemadate`
--
ALTER TABLE `tblcinemadate`
  ADD PRIMARY KEY (`CD_Id`);

--
-- Indexes for table `tblcoment`
--
ALTER TABLE `tblcoment`
  ADD PRIMARY KEY (`Con_Id`);

--
-- Indexes for table `tblgenres`
--
ALTER TABLE `tblgenres`
  ADD PRIMARY KEY (`G_Id`);

--
-- Indexes for table `tblindustry`
--
ALTER TABLE `tblindustry`
  ADD PRIMARY KEY (`IN_Id`);

--
-- Indexes for table `tbllanguage`
--
ALTER TABLE `tbllanguage`
  ADD PRIMARY KEY (`L_Id`);

--
-- Indexes for table `tblmovie`
--
ALTER TABLE `tblmovie`
  ADD PRIMARY KEY (`M_Id`),
  ADD KEY `Cinema` (`Cinema`),
  ADD KEY `Cinema_Date` (`Cinema_Date`),
  ADD KEY `Genre` (`Genre`),
  ADD KEY `Industry` (`Industry`),
  ADD KEY `Language` (`Language`);

--
-- Indexes for table `tblseats`
--
ALTER TABLE `tblseats`
  ADD PRIMARY KEY (`S_Id`);

--
-- Indexes for table `tblsignup`
--
ALTER TABLE `tblsignup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblticket`
--
ALTER TABLE `tblticket`
  ADD PRIMARY KEY (`T_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcinema`
--
ALTER TABLE `tblcinema`
  MODIFY `C_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcinemadate`
--
ALTER TABLE `tblcinemadate`
  MODIFY `CD_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcoment`
--
ALTER TABLE `tblcoment`
  MODIFY `Con_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblgenres`
--
ALTER TABLE `tblgenres`
  MODIFY `G_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblindustry`
--
ALTER TABLE `tblindustry`
  MODIFY `IN_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbllanguage`
--
ALTER TABLE `tbllanguage`
  MODIFY `L_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblmovie`
--
ALTER TABLE `tblmovie`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblseats`
--
ALTER TABLE `tblseats`
  MODIFY `S_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblsignup`
--
ALTER TABLE `tblsignup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tblticket`
--
ALTER TABLE `tblticket`
  MODIFY `T_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblmovie`
--
ALTER TABLE `tblmovie`
  ADD CONSTRAINT `tblmovie_ibfk_1` FOREIGN KEY (`Cinema`) REFERENCES `tblcinema` (`C_Id`),
  ADD CONSTRAINT `tblmovie_ibfk_2` FOREIGN KEY (`Cinema_Date`) REFERENCES `tblcinemadate` (`CD_Id`),
  ADD CONSTRAINT `tblmovie_ibfk_3` FOREIGN KEY (`Genre`) REFERENCES `tblgenres` (`G_Id`),
  ADD CONSTRAINT `tblmovie_ibfk_4` FOREIGN KEY (`Industry`) REFERENCES `tblindustry` (`IN_Id`),
  ADD CONSTRAINT `tblmovie_ibfk_5` FOREIGN KEY (`Language`) REFERENCES `tbllanguage` (`L_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
