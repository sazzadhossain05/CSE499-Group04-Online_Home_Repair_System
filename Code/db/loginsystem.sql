-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 06:53 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `name`, `email`, `message`) VALUES
(1, 'sazzad hossain', 'sa@gmail.com', 'it is worlking'),
(2, 'sazzad hossain', 'sa@gmail.com', 'it is worlking');

-- --------------------------------------------------------

--
-- Table structure for table `index_product`
--

CREATE TABLE `index_product` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` int(200) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(200) NOT NULL,
  `productname` text NOT NULL,
  `prodectquantity` int(200) NOT NULL,
  `manufacturedate` date NOT NULL,
  `expiredate` date NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `prodectquantity`, `manufacturedate`, `expiredate`, `price`, `image`) VALUES
(1, 'aqq', 100, '2020-03-03', '2021-03-03', '100', ''),
(2, 'bird ', 1000, '2020-03-03', '2021-03-03', '10', ''),
(3, ' d', 100, '2020-03-03', '2021-03-03', '100', ''),
(4, ' f', 100, '2020-03-03', '2021-03-03', '100', ''),
(5, ' ultiva', 200, '2020-03-03', '2021-03-03', '100', '20180316-windows-10-background-01.jpg'),
(6, ' coco', 100, '2020-03-03', '2021-03-03', '100', '72697674_2575199135871095_5089862160763322368_o.jpg'),
(8, 'aaaa ', 123, '2020-04-15', '2020-04-16', '500', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(200) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repeatpassword` varchar(255) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone` int(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` int(255) NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `username`, `email`, `password`, `repeatpassword`, `firstname`, `lastname`, `phone`, `street`, `city`, `state`, `zipcode`, `country`) VALUES
(1, 'sazzad', 'sazzzad@gmail.com', '123', '123', 'sazzad', 'hossain', 11213, 'ddd', 'deqdeqde ', 'daqdqd', 1313, 'sfdwef'),
(2, 'hossain', 'sa@gmail.com', '$2y$10$L0RvFkwopFVSavHaMexg7efLpHU6FR5traCxT6YDVvqk/8odwqZ1a', '123test', 'Sobuj', 'as', 0, 'sqs', 'dd', 'hossain', 12, 'eff'),
(3, 'hossain1', 'sa@gmail.com', '$2y$10$I1f8WSBxBab0INn/H7kbdePskaF/d6azYhS/7xDoFYSpXdc77MBl6', '123', 'Sobuj', 'as', 0, 'sqs', 'dd', 'hossain1', 123, 'eff'),
(4, 'hossain11', 'sa111@gmail.com', '$2y$10$bmxQ4xygEnu8P6IBlpaOzeeMVSRAoybt6vZDHni1Ww1zfb4.4WmuC', '123', 'Sobuj', 'as', 0, 'sqs', 'dd', 'hossain11', 123, 'eff'),
(5, 'sw', 'sa111@gmail.com', '$2y$10$k/Wbt8uQHL/0UwLlaey6s.EDsmPqIKxJeh2CFySlD/lD2Q8wI2zDq', '123', 'Sobuj', 'as', 0, 'sqs', 'dd', 'sw', 123, 'eff'),
(6, 'hossain11111', 'sa@gmail.com', '123', '123', 'Sobuj', 'as', 12334, 'ssw', 'sqs ', 'dd', 345, 'eff'),
(7, '', '', '', '', '', '', 0, '', ' ', '', 0, ''),
(8, 'qwe', 'sa@gmail.com', '123', '123', 'Sobuj', 'as', 123, 'ssw', 'sqs ', 'dd', 3344, 'eff'),
(9, 'ddd', 'sazzadhossain@gmail.com', '123', '123', 'sazzad', 'hossain', 1234, 'ssw', 'sqs ', 'dhaka', 1212, 'bangladesh'),
(10, '', '', '', '', '', '', 0, '', ' ', '', 0, ''),
(11, '', '', '', '', '', '', 0, '', ' ', '', 0, ''),
(12, 'alok', 'sa@gmail.com', '12345', '12345', 'sazzad', 'hossain', 1234567, 'dnwiind', 'sqs ', 'dd', 1234, 'bangladesh'),
(13, 'alok', 'sa@gmail.com', '123', '123', 'sazzad', 'hossain', 1234567, 'dnwiind', 'sqs ', 'dd', 1234, 'bangladesh'),
(14, '', 'saa@mail', '123', '123', 'sazzad', 'hossain', 1234567, 'dnwiind', 'sqs ', 'dd', 1234, 'Bangladesh'),
(15, '', 'saa@gmail.com', '', '', 'sazzad', 'hossain', 1234567, 'dnwiind', 'sqs ', 'dd', 1234, 'Bangladesh'),
(16, 'kunal', '', '', '', '', '', 0, '', ' ', '', 0, ''),
(17, 'k', '', '', '', '', '', 0, '', ' ', '', 0, ''),
(18, 'kinal', 'd@gmail.com', '12345678', '12345678', 'kinal', 'kamra', 2147483647, 'sdhdhbfeu', 'bduebf ', 'efdef', 3455, 'Bangladesh'),
(19, 'asdf', 'hajim@gmail.com', '1234', '1234', 'sazzad', 'hossain', 1234567, 'dnwiind', 'sqs ', 'dd', 1234, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birdfeeders`
--

CREATE TABLE `tbl_birdfeeders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_birdfeeders`
--

INSERT INTO `tbl_birdfeeders` (`id`, `name`, `image`, `price`) VALUES
(1, 'Gardman Mealworm Feeder - Adjustable', '1.jpg', 100.00),
(2, 'Bird Table Seed Tray', '2.jpg', 299.00),
(3, 'Bird Gazebo Bird Table', '3.jpg', 125.00),
(4, 'Block Feeder ', '4.jpg', 100.00),
(5, 'Niger Feeder with Tray', '5.jpg', 100.00),
(6, 'Bempton Hanging Bird Table', '6.jpg', 100.00),
(7, 'Forest Green Cuisine Bird Table', '7.jpg', 100.00),
(8, 'Peckish Secret Garden Dining Station', '8.jpg', 100.00),
(9, 'Peckish Woodland Bird Table', '9.jpg', 100.00),
(10, 'Classic Bird Feeding Station', '10.jpg', 100.00),
(11, 'Peckish Complete Bird Table', '11.jpg', 100.00),
(12, 'Bird Platform', '12.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birdfeedersaccessories`
--

CREATE TABLE `tbl_birdfeedersaccessories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_birdfeedersaccessories`
--

INSERT INTO `tbl_birdfeedersaccessories` (`id`, `name`, `image`, `price`) VALUES
(1, 'Echoes Bird Bath', '1.jpg', 100.00),
(2, 'CJ Wildlife Biological Cleaner - 500ml', '2.jpg', 299.00),
(3, 'Chapelwood Genoa Cascade Fountain', '3.jpg', 125.00),
(4, 'Duck Family Fountain', '4.jpg', 100.00),
(5, 'Chapelwood Fairy Fountain', '5.jpg', 100.00),
(6, 'Chapelwood Pagoda Fountain', '6.jpg', 100.00),
(7, 'Chapelwood Tipping Pail Fountain', '7.jpg', 100.00),
(8, 'Chapelwood Umbrella Fountain', '8.jpg', 100.00),
(9, 'Small Stone Bird Bath', '9.jpg', 100.00),
(10, 'Gardman Long Handled Cleaning Brush', '10.jpg', 100.00),
(11, 'Sprinkle Support', '11.jpg', 100.00),
(12, 'Ice Free For Bird Baths', '12.jpg', 100.00),
(13, 'CitroSan Sanitizer', '13.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Echoes Bird Bath', '1.jpg', 100.00),
(2, 'CJ Wildlife Biological Cleaner - 500ml', '2.jpg', 100.00),
(3, 'Robin & Softbills Mix', '3.jpg', 100.00),
(4, 'Ultiva Everyday Seed Mix', '4.jpg', 100.00),
(5, 'Mealworm Suet Blocks', '5.jpg', 100.00),
(6, 'Suet Blocks', '7.jpg', 190.00),
(7, 'Kibbled Maize', '7.jpg', 100.00),
(8, 'Dried Mealworm Fruit & Honey Cocktail', '8.jpg', 100.00),
(9, 'High Protein Insect Mix', '9.jpg', 100.00),
(10, 'Ultiva No Grow No Mess Seed Mix', '10.jpg', 100.00),
(11, 'Ultiva Gold', '11.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale`
--

CREATE TABLE `tbl_sale` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sale`
--

INSERT INTO `tbl_sale` (`id`, `name`, `image`, `price`) VALUES
(1, 'Block Feeder', '1.jpg', 100.00),
(2, 'Chapelwood Kingsbury ', '2.jpg', 299.00),
(3, 'Kingsbury Fountain', '3.jpg', 125.00),
(4, 'Ice Free For Bird Baths', '4.jpg', 100.00),
(5, 'The Nuttery Roundhaus Squirrel Proof Chinese Red Nut Feeder', '5.jpg', 100.00),
(6, 'The Nuttery Helix Squirrel Proof Nut ', '6.jpg', 100.00),
(7, 'The Nuttery Chinese Lantern Squirrel Proof ', '7.jpg', 100.00),
(8, ' CitroSan Sanitizer', '8.jpg', 100.00),
(9, 'The Nuttery Roundhaus Squirrel Proof Celadon ', '9.jpg', 100.00),
(10, 'Honeyfield\'s Heavy Duty Feeder Tray Ground ', '10.jpg', 100.00),
(11, 'Prefilled Rockin Robin Seed ', '11.jpeg', 100.00),
(12, 'Chapelwood Kingsbury Fountain', '12.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seedmixes`
--

CREATE TABLE `tbl_seedmixes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seedmixes`
--

INSERT INTO `tbl_seedmixes` (`id`, `name`, `image`, `price`) VALUES
(1, 'Autumn and Winter Seed Mix', '1.jpg', 100.00),
(2, 'Robin & Softbills Mix', '2.jpg', 100.00),
(3, 'Ultiva Everyday Seed Mix', '3.jpg', 100.00),
(4, 'Ultiva Perfect 10', '4.jpg', 100.00),
(5, 'Ultiva Wheat Free Seed Mix', '5.jpg', 100.00),
(6, 'Ultiva Finest Blend', '6.jpg', 100.00),
(7, 'Ultiva Gold', '7.jpg', 100.00),
(8, 'High Protein Insect Mix', '8.jpg', 100.00),
(9, 'Ultiva Fledgling Mix', '9.jpg', 100.00),
(10, 'Ultiva No Grow No Mess Seed Mix', '10.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_straights`
--

CREATE TABLE `tbl_straights` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_straights`
--

INSERT INTO `tbl_straights` (`id`, `name`, `image`, `price`) VALUES
(1, 'Premium Sunflower Heart Kernels', '1.jpg', 100.00),
(2, 'Niger Seed', '2.jpg', 100.00),
(3, 'Black Sunflower Seeds', '3.jpg', 100.00),
(4, 'Dried Mealworms', '4.jpg', 100.00),
(5, 'Premium Bird Peanuts', '5.jpg', 100.00),
(6, 'Peanut Splits', '6.jpg', 100.00),
(7, 'Kibbled Maize', '7.jpg', 100.00),
(8, 'Dried Mealworm Fruit & Honey Cocktail', '8.jpg', 100.00),
(9, 'Black Sunflower Seeds', '9.jpg', 100.00),
(10, 'Wild Bird Millet', '10.jpg', 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suets`
--

CREATE TABLE `tbl_suets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_suets`
--

INSERT INTO `tbl_suets` (`id`, `name`, `image`, `price`) VALUES
(1, 'Premium Suet Balls', '1.jpg', 100.00),
(2, 'Classic Suet Balls', '2.jpg', 299.00),
(3, 'Peckaballs', '3.jpg', 125.00),
(4, ' Raisin Suet Blocks', '4.jpg', 100.00),
(5, 'Mealworm Suet Blocks', '5.jpg', 100.00),
(6, 'Suet Blocks', '6.jpg', 100.00),
(7, 'Berry Suet Blocks', '7.jpg', 100.00),
(8, 'BusyBeaks Flavoured Suet Blocks', '8.jpg', 100.00),
(9, 'Peckish Squirrel Proof Suet Cake', '9.jpg', 100.00),
(10, 'Warm Suet Blocks', '10.jpg', 100.00),
(11, 'Resistant Fat Ball & Suet', '11.jpg', 100.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_birdfeeders`
--
ALTER TABLE `tbl_birdfeeders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_birdfeedersaccessories`
--
ALTER TABLE `tbl_birdfeedersaccessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sale`
--
ALTER TABLE `tbl_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seedmixes`
--
ALTER TABLE `tbl_seedmixes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_straights`
--
ALTER TABLE `tbl_straights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_suets`
--
ALTER TABLE `tbl_suets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_birdfeeders`
--
ALTER TABLE `tbl_birdfeeders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_birdfeedersaccessories`
--
ALTER TABLE `tbl_birdfeedersaccessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_sale`
--
ALTER TABLE `tbl_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_seedmixes`
--
ALTER TABLE `tbl_seedmixes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_straights`
--
ALTER TABLE `tbl_straights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_suets`
--
ALTER TABLE `tbl_suets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
