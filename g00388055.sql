-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 05:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g00388055`
--
CREATE DATABASE IF NOT EXISTS `g00388055` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `g00388055`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Id` int(11) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `ProductDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `CompanyName`, `ProductName`, `Image`, `Price`, `ProductDescription`) VALUES
(1, 'Fitbit ', 'Versa 3 Smart Watch', '.\\Images\\fitbit1.jpg', 229.99, 'The Fitbit Versa™ 3 is Fitbit\'s most versatile smartwatch to date. An upgrade on the best selling Versa 2, new features include a built-in GPS and you can measure the intensity of your activity with Active Zone Minutes with the added ability to answer calls from your wrist. '),
(2, 'Garmin ', 'Forerunner 245', '.\\images\\garmin.jpg', 307, 'This GPS smartwatch tracks your stats, crunches the numbers and gets to know all about your performance, your running form, your training and even your goals. The Forerunner 245 is Garmin’s excellent performance running watch and sets a new benchmark against which the competition should be measured. The Forerunner 245 resembles a round digital watch and is just 42.3mm wide, 12.2mm thick and 38.5g in weight, which by sports watch standards is tiny, comparing favourably with the likes of Samsung’s Galaxy Watch Active 2 and the Apple Watch Series 5. It takes standard universal 20mm watch bands and comes with an excellent traditional silicone strap that fits wrists between 127mm and 204mm in circumference: in other words most wrists.'),
(3, 'Optimum Nutrition', 'Gold Standard Whey 4.53kg', '.\\Images\\whey.jpg', 85.99, 'Optimum Nutrition’s GOLD STANDARD 100% WHEY™ is the world’s best-selling whey protein*. It delivers 24 g of whey protein to support muscle growth. After training, your body uses protein to help repair and rebuild muscle fibres.\r\nEach great tasting serving contains 24 g of premium whey protein to support muscle growth and 5.5 g of naturally occurring BCAAs. All with just 1 g of fat, 1.2 g of sugars, and with 1.6 g of carbs (Vanilla ice cream flavour). Not only that, but the world’s #1 just got even better with a new and improved flavor profile on our Top 5 flavours.'),
(4, 'Wilson', 'US OPEN TENNIS RACKET', '.\\Images\\tennis.jpg', 52.95, 'The Wilson US Open Tennis Racket is the perfect transition racket for recreational to beginners and can even be used for your first few competitions. This model provides excellent touch, feel and power.\r\nWILSON RACKET PRODUCT INFORMATION\r\n- Tennis racket\r\n- Pattern: 16 x 19\r\n- Length: 27\"\r\n- Strung Weight: 275g\r\n- Head Size: 103”\r\n- Width 23mm'),
(5, 'Titleist ', 'Pro V1 AIM 12 Ball Pack 2021', '.\\Images\\golf1.jpg', 49.95, 'The 2021 Titleist Pro V1 golf ball is designed to deliver even longer distance, more greenside spin and control and softer feel.\r\nThe Pro V1 Golf Ball Features:\r\nReformulated 2.0 ZG Process Core\r\nFaster Casing Layer\r\nSpherically-Tiled 388 Tetrahedral Dimple Design\r\nSofter Cast Urethane Elastomer Cover (with enhanced alignment)\r\nReformulated 2.0 ZG Process Core\r\nThe newly developed core delivers increased distance performance in the solid core Pro V1 and dual-core Pro V1x, with a softer compression feel.\r\nFaster Casing Layer\r\nThe faster casing layer adds more speed and lowers long game spin, great for adding more distance to your drives. This highly resilient and high-speed ionomer was initially developed for and validated by Pro V1x Left Dash ball which was developed for the PGA Tour.'),
(6, 'Puma', 'King Football Boots', '.\\Images\\King.jpg', 149.99, 'A stealthy football boot made for a pacey game - these Ultra 2.1 FG football boots from Puma are unmissable. In a black colourway, these boots have a redesigned, thinner, lighter and more flexible MATRYXMESH upper to help you stay light on your feet. They feature an ultra-lightweight, reactive outsole with studs that support play on firm natural surfaces and artificial grass. They have a soft yet durable synthetic and textile upper for confident command on the ball, and are finished with Puma\'s Cat Logo.'),
(7, 'Rouge', 'Weight Lifting Belt', '.\\Images\\rouge.jpg', 19.99, 'With 3” of support in the front and 5” in the back, Rogue’s oversized 5” Nylon Weightlifting Belt conforms to your body’s natural shape while providing greater overall coverage than most nylon lifting belts on the market. Thin, light, and highly durable, it\'s a budget-priced alternative to traditional leather weightlifting belts, offering firm support for the abdomen and lower back during even the most intense weight training programs.\r\n\r\nThe Rogue 5” Nylon Weightlifting Belt includes a hook-and-loop fastening system and a steel tensioning buckle, making it easy to adjust the belt quickly when transitioning from light/body movement exercises to heavy lifting exercises.\r\n\r\nImportant: Choosing the right size belt is critical to its effectiveness in your workout. Use our sizing chart below to determine which size Rogue Nylon Belt is right for you.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
