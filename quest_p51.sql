-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2018 a las 08:21:32
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
  `rand_fol` varchar(6) NOT NULL,
  `reg_by` varchar(50) NOT NULL,
  `page_stat` varchar(100) NOT NULL,
  `p0` varchar(1) NOT NULL,
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
  `p34` varchar(50) NOT NULL,
  `p34_1` varchar(2) NOT NULL,
  `p35` varchar(1) NOT NULL,
  `p36` varchar(50) NOT NULL,
  `p36_1` varchar(2) NOT NULL,
  `p37` varchar(1) NOT NULL,
  `p38` varchar(50) NOT NULL,
  `p38_1` varchar(2) NOT NULL,
  `p39` varchar(1) NOT NULL,
  `p40` varchar(1) NOT NULL,
  `p41` varchar(1) NOT NULL,
  `p42` varchar(1) NOT NULL,
  `p43` varchar(1) NOT NULL,
  `p44` varchar(1) NOT NULL,
  `p45` varchar(1) NOT NULL,
  `p46` varchar(1) NOT NULL,
  `p47` varchar(1) NOT NULL,
  `p48` varchar(1) NOT NULL,
  `p49` varchar(1) NOT NULL,
  `p50` varchar(1) NOT NULL,
  `p51` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quest`
--

INSERT INTO `quest` (`fol_int`, `rand_fol`, `reg_by`, `page_stat`, `p0`, `p1`, `p2`, `p3`, `p4`, `p5`, `p5_1`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p34_1`, `p35`, `p36`, `p36_1`, `p37`, `p38`, `p38_1`, `p39`, `p40`, `p41`, `p42`, `p43`, `p44`, `p45`, `p46`, `p47`, `p48`, `p49`, `p50`, `p51`) VALUES
(76, 'NT8V2Z', 'Caox', 'p2', 'M', '114', 'Reynoso Rodriguez', 'Calle Falsa 123', '17', 'Ruben Alan Sif Rdz', '454545', 'Ramon Rmz', 'Alfa', '11/05/2018', 'Sociales', '0', '1', '1', '1', '0', '1', '0', '', '', '', '', '', '0', '0', '0', '0', '1', 'aspirina', '0', '1', '1', '0', '', '1', 'Piedras en la vesicula', '1', '1', 'Me cai de las escaleras', '58', '1', 'Piedras en la vesicula', '2', '1', '0', '', '', '0', '1', '1', '1', '0', '2', '2', '1', '2'),
(77, '3OAP6B', 'Caox', 'p2', 'F', '177', 'Casares Vallarta', 'Vallarta 208 nte', '6', 'Casandra Vallarta', '177636', 'RaÃºl RamÃ­rez', 'Beta', '12/01/2018', '406', '1', '1', '1', '0', '0', '0', '', '', '1', '1', '1', '1', '4', '2', '1', '1', '1', 'Xanax', '1', '1', '1', '1', 'Zica', '1', 'Aumento de senos', '2', '1', 'Choque', '3', '1', 'Choque y cirugia', '5', '1', '3', '3', '1', '2', '2', '1', '0', '1', '1', '1', '1', '2'),
(79, '3IFDJ6', 'Caox', 'p3', '', '765', 'Juarez Abolengo', 'Iturbide 951', '11', 'Granciano del Monte', '885447', 'Del bosque', 'Alfa', '11/05/2018', '885', '1', '1', '3', '1', '7', '1', '1', '12 meses', '', '', '', '', '0', '0', '0', '0', '1', 'ibuprofeno', '1', '1', '1', '1', 'das', '1', 'Piedras en la vesicula', '34', '1', '345', '34', '1', '9789789', 'nn', '3', '4', '', '', '2', '2', '2', '2', '2', '2', '2', '2', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`fol_int`),
  ADD UNIQUE KEY `rand_fol` (`rand_fol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `quest`
--
ALTER TABLE `quest`
  MODIFY `fol_int` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
