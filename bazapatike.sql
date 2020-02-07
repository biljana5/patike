-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 04:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazapatike`
--

-- --------------------------------------------------------

--
-- Table structure for table `brend`
--

CREATE TABLE `brend` (
  `idbrenda` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brend`
--

INSERT INTO `brend` (`idbrenda`, `naziv`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(3, 'Puma'),
(4, 'Fila'),
(5, 'Calvin Klein'),
(6, 'Replay');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `korisnickoime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uloga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `korisnickoime`, `sifra`, `uloga`) VALUES
(1, 'a', 'b', 'ab@mail.com', 'ab', 'ab', 0),
(2, 'pera', 'pera', 'pera@mail.com', 'pera', 'pera', 1),
(3, 'biljana', 'markovicc', 'b@mail.com', 'biljana', 'BILJANA', 1),
(4, 'anita', 'lazic', 'anita@mail.com', 'anita', 'anita', 1),
(5, 's', 's', 's@mail.com', 's', 's', 1),
(6, 'biljana', 'markovicc', 'b@mail.com', 'biljana', 'biljana', 1),
(7, 'maja', 'maja', 'maja@mail.com', 'maja', 'maja', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kupovina`
--

CREATE TABLE `kupovina` (
  `idkupovina` int(11) NOT NULL,
  `idkorisnik` int(11) NOT NULL,
  `idproizvod` int(11) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `idproizvoda` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idbrend` int(11) NOT NULL,
  `cena` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `boja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`idproizvoda`, `naziv`, `idbrend`, `cena`, `tip`, `boja`, `slika`) VALUES
(1, 'proizvod 1', 1, '2550', 'tip 1', 'boja 1', 'slike/adidas3.jpg'),
(2, 'proiyvod 2', 2, '55555', 'tip 1', 'boja2', 'slike/slika4.jpg'),
(3, 'proizvod 2', 2, '6666', 'tip3', 'boja3', 'slike/adidas3.jpg'),
(5, 'proizvod 4', 2, '5000', 'tip 4', 'boja 4', 'slike/adidas3.jpg'),
(6, 'proizvod 4', 2, '5000', 'tip 4', 'boja 4', 'slike/adidas3.jpg'),
(7, 'proizvod 5', 2, '5000', 'tip 4', 'boja 4', 'slike/adidas3.jpg'),
(8, 'proizvod 6', 3, '6000', 'tip 4', 'boja 6', 'slike/adidas3.jpg'),
(9, 'proizvod 7', 1, '33333', 'tip 7', 'boja 7', 'slike/adidas3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brend`
--
ALTER TABLE `brend`
  ADD PRIMARY KEY (`idbrenda`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kupovina`
--
ALTER TABLE `kupovina`
  ADD PRIMARY KEY (`idkupovina`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`idproizvoda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brend`
--
ALTER TABLE `brend`
  MODIFY `idbrenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kupovina`
--
ALTER TABLE `kupovina`
  MODIFY `idkupovina` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `idproizvoda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
