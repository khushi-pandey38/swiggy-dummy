-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2022 at 10:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swiggy`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_extra`
--

CREATE TABLE `add_extra` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rupees` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_extra`
--

INSERT INTO `add_extra` (`id`, `name`, `rupees`, `image`) VALUES
(1, 'Pizza', 249, 'pizza30.jpeg'),
(2, 'Burgefry', 239, 'pizza31.jpeg'),
(3, 'Chilli  Pizza', 129, 'pizza32.jpeg'),
(4, 'Red Chilli Pizza', 259, 'pizza33.jpeg'),
(5, 'Extra Chiss Pizza', 369, 'pizza34.jpeg'),
(6, 'Moto Burger', 559, 'pizza35.jpeg'),
(7, 'Extra Chiss', 129, 'pizza37.jpeg'),
(8, 'Non-veg Pizza', 149, 'pizza20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `swiggy_rec`
--

CREATE TABLE `swiggy_rec` (
  `id` int(10) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `country` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `rating` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `price` int(11) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `offer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swiggy_rec`
--

INSERT INTO `swiggy_rec` (`id`, `image`, `name`, `country`, `rating`, `price`, `time`, `offer`) VALUES
(1, 'pizza30.jpeg', 'la, phinos pizza', 'Itelian', '4.5', 199, 45, 36),
(2, 'pizza31.jpeg', 'pocket bits', 'India', '4.3', 249, 34, 34),
(3, 'pizza32.jpeg', 'advance pizza', 'India', '4.1', 549, 54, 30),
(4, 'pizza33.jpeg', 'solo pizza', 'India', '4.1', 149, 52, 30),
(5, 'pizza34.jpeg', 'jaika-e-ghar', 'India', '3.9', 99, 23, 25),
(6, 'pizza35.jpeg', 'burger king', 'India', '4.6', 249, 26, 40),
(7, 'pizza36.jpeg', 'suger & spice', 'American', '2.5', 149, 19, 55),
(8, 'pizza37.jpeg', 'pizza wave', 'India', '4.3', 249, 26, 10),
(9, 'pizza38.jpeg', 'pizza hut', 'India', '4.7', 349, 23, 15),
(10, 'albalk.jpeg', 'al balk pro', 'Punjabi', '4.0', 89, 33, 20),
(11, 'vadapav1.jpeg', 'goli vada pav', 'India', '4.4', 549, 44, 45),
(12, 'pavbhaji.jpeg', 'bombay pav bhaji', 'India', '4.0', 149, 43, 37),
(13, 'pizza15.jpeg', 'chhola bhatora', 'India', '4.3', 299, 46, 60),
(14, 'sweats.jpeg', 'moti mohal sweets', 'India', '2.9', 999, 36, 80),
(15, 'bati-chokha.jpeg', 'bati chokha', 'India', '4.3', 49, 45, 70),
(16, 'golgappa.jpeg', 'gol gappa', 'India', '4.3', 99, 56, 75),
(17, 'vadapav.jpeg', 'goli vadapav', 'Indian', '4.2', 199, 38, 10),
(18, 'McDonald.jpeg', 'mcdonald\'s', 'American', '3.9', 500, 20, 10),
(19, 'Sugar&spice.jpeg', 'sugar & spice', 'Indian', '5.0', 149, 21, 15),
(20, 'Rollarappaa.jpeg', 'rollarappaa', 'Indian', '4.5', 200, 26, 20),
(21, 'CHICAGOPIZZA.jpeg', 'chicago pizza', 'Indian', '3.9', 300, 40, 30),
(22, 'LaPinoPizza.jpeg', 'la pino\'z pizza', 'Japan', '1.9', 239, 49, 25),
(23, 'VITOPIZZERIA.jpeg', 'vivo\'s pizzer', 'Indian', '3.9', 500, 40, 10),
(24, 'FirangiBake.jpeg', 'firangi bake', 'Indian', '4.5', 299, 45, 10),
(25, 'KFC.jpeg', 'kfg', 'American', '4.6', 499, 20, 25),
(26, 'PizzaCafe.jpeg', 'pizza cafe', 'Indian', '4.0', 200, 30, 10),
(27, 'PizzaPlaza.jpeg', 'pizza plaza', 'Japan', '4.3', 399, 35, 25),
(28, 'TheAmericanPizza.jpeg', 'the american pizza', 'American', '3.9', 299, 27, 15),
(29, 'PizzaCutter.jpeg', 'pizza cutter', 'Indian', '2.6', 300, 54, 35),
(30, 'Go69Pizza.jpeg', 'go69 pizza', 'Indian', '4.3', 299, 29, 20),
(31, 'ITALIANPIZZA.jpeg', 'italina pizza', 'ITALIAN', '2.1', 500, 39, 25),
(32, 'BakerBox.jpeg', 'baker box', 'Japan', '4.5', 300, 45, 10),
(33, 'PizzaCafe.jpeg', 'pizza cafe every day', 'Indian', '3.5', 499, 39, 10),
(34, 'OneMorePizza.jpeg', 'one more pizza', 'Indian', '3.4', 299, 39, 15),
(35, 'WOWPIZZA.jpeg', 'wow pizza', 'Indian', '1.4', 499, 48, 20),
(36, 'PizzaPool.jpeg', 'pizza pool', 'Indian', '4.5', 399, 39, 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `number`, `email`, `password`) VALUES
(2, 'shreyansh', '8787767665', 'sheya@gmail.com', '88864c3c6137968735bb0dc2c6d3dd01'),
(3, 'shiv pandey', '6387927467', 'shive@gmail.com', '16b7aa23d5b4f034ebc7b3b0788fea45'),
(4, 'shreyash', '8999999999', 'shreyansh@gmail.com', '4a3232c59ecda21ac71bebe3b329bf36'),
(7, 'chhote', '8808709965', 'chhote@gmail.com', 'afd43f025aac349fe145bf0927608476'),
(8, 'chhote', '8808709965', 'chhote@gmail.com', 'afd43f025aac349fe145bf0927608476'),
(9, 'sunil', '1111111111', 'sk@gmail.com', 'b0b86080c976aa7651bffe0801644d74');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_extra`
--
ALTER TABLE `add_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swiggy_rec`
--
ALTER TABLE `swiggy_rec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_extra`
--
ALTER TABLE `add_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `swiggy_rec`
--
ALTER TABLE `swiggy_rec`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
