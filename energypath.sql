-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 дек 2020 в 01:36
-- Версия на сървъра: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temphumidnew`
--

-- --------------------------------------------------------

--
-- Структура на таблица `balancemonth`
--

CREATE TABLE `balancemonth` (
  `ID` int(11) NOT NULL,
  `balancemonth` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `balancemonth`
--

INSERT INTO `balancemonth` (`ID`, `balancemonth`) VALUES
(1, '0.03');

-- --------------------------------------------------------

--
-- Структура на таблица `dht11`
--

CREATE TABLE `dht11` (
  `ID` bigint(20) NOT NULL,
  `humidity` text DEFAULT NULL,
  `temperature` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `dht11`
--

INSERT INTO `dht11` (`ID`, `humidity`, `temperature`) VALUES
(1, '37', '25');

-- --------------------------------------------------------

--
-- Структура на таблица `jouleformonth`
--

CREATE TABLE `jouleformonth` (
  `ID` int(11) NOT NULL,
  `jouleformonth` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `jouleformonth`
--

INSERT INTO `jouleformonth` (`ID`, `jouleformonth`) VALUES
(1, '50.81');

-- --------------------------------------------------------

--
-- Структура на таблица `kilowatthoursforday`
--

CREATE TABLE `kilowatthoursforday` (
  `ID` int(11) NOT NULL,
  `kilowatthoursforday` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `kilowatthoursforday`
--

INSERT INTO `kilowatthoursforday` (`ID`, `kilowatthoursforday`) VALUES
(1, '0.0254');

-- --------------------------------------------------------

--
-- Структура на таблица `kilowatthoursformonth`
--

CREATE TABLE `kilowatthoursformonth` (
  `ID` int(11) NOT NULL,
  `kilowatthoursformonth` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `kilowatthoursformonth`
--

INSERT INTO `kilowatthoursformonth` (`ID`, `kilowatthoursformonth`) VALUES
(1, '0.0254');

-- --------------------------------------------------------

--
-- Структура на таблица `powerforday`
--

CREATE TABLE `powerforday` (
  `ID` int(11) NOT NULL,
  `powerforday` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `powerforday`
--

INSERT INTO `powerforday` (`ID`, `powerforday`) VALUES
(1, '25.408');

-- --------------------------------------------------------

--
-- Структура на таблица `powerformonth`
--

CREATE TABLE `powerformonth` (
  `ID` int(11) NOT NULL,
  `powerformonth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `powerformonth`
--

INSERT INTO `powerformonth` (`ID`, `powerformonth`) VALUES
(1, '25.408');

-- --------------------------------------------------------

--
-- Структура на таблица `step`
--

CREATE TABLE `step` (
  `id` int(11) NOT NULL,
  `step` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `step`
--

INSERT INTO `step` (`id`, `step`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Структура на таблица `stepforday`
--

CREATE TABLE `stepforday` (
  `ID` int(11) NOT NULL,
  `stepforday` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `stepforday`
--

INSERT INTO `stepforday` (`ID`, `stepforday`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Структура на таблица `stepformonth`
--

CREATE TABLE `stepformonth` (
  `ID` int(11) NOT NULL,
  `stepformonth` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `stepformonth`
--

INSERT INTO `stepformonth` (`ID`, `stepformonth`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Структура на таблица `voltage`
--

CREATE TABLE `voltage` (
  `id` int(11) NOT NULL,
  `voltage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `voltage`
--

INSERT INTO `voltage` (`id`, `voltage`) VALUES
(1, '2.3');

-- --------------------------------------------------------

--
-- Структура на таблица `voltageforday`
--

CREATE TABLE `voltageforday` (
  `ID` int(11) NOT NULL,
  `voltageforday` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `voltageforday`
--

INSERT INTO `voltageforday` (`ID`, `voltageforday`) VALUES
(10, '317.6');

-- --------------------------------------------------------

--
-- Структура на таблица `voltageformonth`
--

CREATE TABLE `voltageformonth` (
  `ID` int(11) NOT NULL,
  `voltageformonth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `voltageformonth`
--

INSERT INTO `voltageformonth` (`ID`, `voltageformonth`) VALUES
(1, '317.6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balancemonth`
--
ALTER TABLE `balancemonth`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dht11`
--
ALTER TABLE `dht11`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jouleformonth`
--
ALTER TABLE `jouleformonth`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kilowatthoursforday`
--
ALTER TABLE `kilowatthoursforday`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kilowatthoursformonth`
--
ALTER TABLE `kilowatthoursformonth`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `powerforday`
--
ALTER TABLE `powerforday`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `powerformonth`
--
ALTER TABLE `powerformonth`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stepforday`
--
ALTER TABLE `stepforday`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stepformonth`
--
ALTER TABLE `stepformonth`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `voltage`
--
ALTER TABLE `voltage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voltageforday`
--
ALTER TABLE `voltageforday`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `voltageformonth`
--
ALTER TABLE `voltageformonth`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balancemonth`
--
ALTER TABLE `balancemonth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dht11`
--
ALTER TABLE `dht11`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1405;

--
-- AUTO_INCREMENT for table `jouleformonth`
--
ALTER TABLE `jouleformonth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kilowatthoursforday`
--
ALTER TABLE `kilowatthoursforday`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kilowatthoursformonth`
--
ALTER TABLE `kilowatthoursformonth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `powerforday`
--
ALTER TABLE `powerforday`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `powerformonth`
--
ALTER TABLE `powerformonth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `step`
--
ALTER TABLE `step`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stepforday`
--
ALTER TABLE `stepforday`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stepformonth`
--
ALTER TABLE `stepformonth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voltage`
--
ALTER TABLE `voltage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `voltageforday`
--
ALTER TABLE `voltageforday`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `voltageformonth`
--
ALTER TABLE `voltageformonth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
