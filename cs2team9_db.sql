-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2024 at 07:35 PM
-- Server version: 8.0.40-0ubuntu0.20.04.1
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs2team9_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `basketID` int NOT NULL,
  `iduser` int NOT NULL,
  `idproduct` int NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL,
  `addedAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idcategory` int NOT NULL,
  `catagoryName` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `idinventory` int NOT NULL,
  `idproduct` int NOT NULL,
  `stockIn` int NOT NULL,
  `stockOut` int NOT NULL,
  `currentStock` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderDetails`
--

CREATE TABLE `orderDetails` (
  `orderDetailsID` int NOT NULL,
  `orderID` int NOT NULL,
  `idproduct` int NOT NULL,
  `iduser` int NOT NULL,
  `quantity` int NOT NULL,
  `priceOrder` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `orderDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentDetails`
--

CREATE TABLE `paymentDetails` (
  `paymentID` int NOT NULL,
  `iduser` int NOT NULL,
  `userAdressID` int NOT NULL,
  `paymentType` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `accountNumber` int NOT NULL,
  `expiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` int NOT NULL,
  `productname` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` decimal(2,0) NOT NULL,
  `SKU` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `idcategory` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `returningItems`
--

CREATE TABLE `returningItems` (
  `idretun` int NOT NULL,
  `idproduct` int NOT NULL,
  `iduser` int NOT NULL,
  `returnDate` datetime NOT NULL,
  `retunReason` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `orderID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `idreview` int NOT NULL,
  `iduser` int NOT NULL,
  `idproduct` int NOT NULL,
  `rating` int NOT NULL,
  `reviewText` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `reviewDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userAdress`
--

CREATE TABLE `userAdress` (
  `userAdressID` int NOT NULL,
  `iduser` int NOT NULL,
  `country` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `street` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `postalCode` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phoneNumb` varchar(15) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basketID`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idproduct` (`idproduct`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`idinventory`),
  ADD KEY `idproduct` (`idproduct`);

--
-- Indexes for table `orderDetails`
--
ALTER TABLE `orderDetails`
  ADD PRIMARY KEY (`orderDetailsID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `paymentDetails`
--
ALTER TABLE `paymentDetails`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `userAdressID` (`userAdressID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`),
  ADD KEY `idcategory` (`idcategory`);

--
-- Indexes for table `returningItems`
--
ALTER TABLE `returningItems`
  ADD PRIMARY KEY (`idretun`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`idreview`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `userAdress`
--
ALTER TABLE `userAdress`
  ADD PRIMARY KEY (`userAdressID`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`);

--
-- Constraints for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD CONSTRAINT `Inventory_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`);

--
-- Constraints for table `orderDetails`
--
ALTER TABLE `orderDetails`
  ADD CONSTRAINT `orderDetails_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `orderDetails_ibfk_2` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`),
  ADD CONSTRAINT `orderDetails_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Constraints for table `paymentDetails`
--
ALTER TABLE `paymentDetails`
  ADD CONSTRAINT `paymentDetails_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `paymentDetails_ibfk_2` FOREIGN KEY (`userAdressID`) REFERENCES `userAdress` (`userAdressID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`);

--
-- Constraints for table `returningItems`
--
ALTER TABLE `returningItems`
  ADD CONSTRAINT `returningItems_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`),
  ADD CONSTRAINT `returningItems_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`),
  ADD CONSTRAINT `returningItems_ibfk_3` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Constraints for table `userAdress`
--
ALTER TABLE `userAdress`
  ADD CONSTRAINT `userAdress_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
