-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2018 a las 09:03:05
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_encuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quest`
--

CREATE TABLE `quest` (
  `fol_int` int(100) NOT NULL,
  `reg_by` varchar(50) NOT NULL,
  `page_stat` varchar(100) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `p2` varchar(20) NOT NULL,
  `p3` text NOT NULL,
  `p4` varchar(20) NOT NULL,
  `p5` varchar(100) NOT NULL,
  `p5_1` varchar(20) NOT NULL,
  `p6` varchar(150) NOT NULL,
  `p7` varchar(100) NOT NULL,
  `p8` varchar(20) NOT NULL,
  `p9` varchar(50) NOT NULL,
  `p10` varchar(1) NOT NULL,
  `p11` varchar(1) NOT NULL,
  `p12` varchar(1) NOT NULL,
  `p13` varchar(1) NOT NULL,
  `p14` varchar(20) NOT NULL,
  `p15` varchar(1) NOT NULL,
  `p16` varchar(1) NOT NULL,
  `p17` varchar(50) NOT NULL,
  `p18` varchar(1) NOT NULL,
  `p19` varchar(1) NOT NULL,
  `p20` varchar(1) NOT NULL,
  `p21` varchar(1) NOT NULL,
  `p22` varchar(50) NOT NULL,
  `p23` varchar(50) NOT NULL,
  `p24` varchar(50) NOT NULL,
  `p25` varchar(50) NOT NULL,
  `p26` varchar(1) NOT NULL,
  `p27` varchar(50) NOT NULL,
  `p28` varchar(1) NOT NULL,
  `p29` varchar(1) NOT NULL,
  `p30` varchar(1) NOT NULL,
  `p31` varchar(1) NOT NULL,
  `p32` varchar(50) NOT NULL,
  `p33` varchar(1) NOT NULL,
  `p34` varchar(2) NOT NULL,
  `p34_1` varchar(50) NOT NULL,
  `p35` varchar(1) NOT NULL,
  `p36` varchar(2) NOT NULL,
  `p36_1` varchar(50) NOT NULL,
  `p37` varchar(1) NOT NULL,
  `p38` varchar(2) NOT NULL,
  `p38_1` varchar(50) NOT NULL,
  `p39` varchar(1) NOT NULL,
  `p40` varchar(1) NOT NULL,
  `p41` varchar(1) NOT NULL,
  `p42` varchar(1) NOT NULL,
  `p43` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quest`
--

INSERT INTO `quest` (`fol_int`, `reg_by`, `page_stat`, `p1`, `p2`, `p3`, `p4`, `p5`, `p5_1`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p34_1`, `p35`, `p36`, `p36_1`, `p37`, `p38`, `p38_1`, `p39`, `p40`, `p41`, `p42`, `p43`) VALUES
(28, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '1', '1', '1', '1', '5', '1', '1', '2 mes', '1', '1', '1', '1', 'das', 'das', 'das', 'das', '1', 'das', '1', '1', '1', '1', 'das', '1', '22', 'das', '1', '22', 'das', '1', '33', 'das', '1', '1', '1', '1', ''),
(29, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '1', '1', '1', '1', '5', '1', '1', '2 mes', '1', '1', '1', '1', 'das', 'das', 'das', 'das', '1', 'das', '1', '1', '1', '1', 'das', '1', '22', 'das', '1', '22', 'das', '1', '33', 'das', '1', '1', '1', '1', ''),
(30, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '1', '1', '1', '1', '5', '1', '1', '2 mes', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '1', '1', '1', '1', '5', '1', '1', '2 mes', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '1', '1', '1', '1', '5', '1', '1', '2 mes', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '1', '1', '1', '1', '5', '1', '1', '2 mes', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '1', '1', '1', '1', '5', '1', '1', '2 mes', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '1', '1', '1', '1', '5', '1', '1', '2 mes', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '0', '0', '0', '0', '5', '0', '0', '2 mes', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'Caox', '1_5', '001', 'Torres Nilo', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '1141391', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '0', '0', '0', '0', '5', '0', '0', '2 mes', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`fol_int`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `quest`
--
ALTER TABLE `quest`
  MODIFY `fol_int` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
