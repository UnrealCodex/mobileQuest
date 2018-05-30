-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2018 a las 10:22:41
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
  `rand_fol` varchar(7) CHARACTER SET latin1 NOT NULL,
  `reg_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  `page_stat` varchar(100) CHARACTER SET latin1 NOT NULL,
  `p0` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p1` varchar(20) CHARACTER SET latin1 NOT NULL,
  `p2` varchar(20) CHARACTER SET latin1 NOT NULL,
  `p3` text CHARACTER SET latin1 NOT NULL,
  `p4` varchar(20) CHARACTER SET latin1 NOT NULL,
  `p5` varchar(100) CHARACTER SET latin1 NOT NULL,
  `p5_1` varchar(20) CHARACTER SET latin1 NOT NULL,
  `p6` varchar(150) CHARACTER SET latin1 NOT NULL,
  `p7` varchar(100) CHARACTER SET latin1 NOT NULL,
  `p8` varchar(20) CHARACTER SET latin1 NOT NULL,
  `p9` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p10` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p11` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p12` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p13` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p14` varchar(20) CHARACTER SET latin1 NOT NULL,
  `p15` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p16` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p17` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p18` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p19` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p20` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p21` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p22` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p23` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p24` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p25` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p26` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p27` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p28` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p29` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p30` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p31` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p32` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p33` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p34` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p34_1` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p35` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p36` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p36_1` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p37` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p38` varchar(50) CHARACTER SET latin1 NOT NULL,
  `p38_1` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p39` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p40` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p41` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p42` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p43` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p44` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p45` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p46` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p47` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p48` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p49` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p50` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p51` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p86` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p87` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p88` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p89` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p90` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p91` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p92` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p93` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p94` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p95` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p96` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p97` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p98` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p99` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p100` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p101` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p102` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p103` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p104` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p105` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p106` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p107` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p108` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p109` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p110` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p111` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p112` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p113` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p114` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p115` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p116` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p117` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p118` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p118_1` varchar(150) CHARACTER SET latin1 NOT NULL,
  `p119` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p119_1` varchar(150) CHARACTER SET latin1 NOT NULL,
  `p120` text CHARACTER SET latin1 NOT NULL,
  `p121` text CHARACTER SET latin1 NOT NULL,
  `numdefam` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `fam_listo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `p1_52` text CHARACTER SET latin1 NOT NULL,
  `p1_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p1_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p1_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p1_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p1_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p1_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p1_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p1_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p1_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p1_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p1_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p1_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p1_65` text CHARACTER SET latin1 NOT NULL,
  `p2_52` text CHARACTER SET latin1 NOT NULL,
  `p2_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p2_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p2_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p2_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p2_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p2_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p2_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p2_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p2_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p2_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p2_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p2_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p2_65` text CHARACTER SET latin1 NOT NULL,
  `p3_52` text CHARACTER SET latin1 NOT NULL,
  `p3_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p3_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p3_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p3_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p3_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p3_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p3_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p3_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p3_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p3_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p3_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p3_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p3_65` text CHARACTER SET latin1 NOT NULL,
  `p4_52` text CHARACTER SET latin1 NOT NULL,
  `p4_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p4_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p4_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p4_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p4_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p4_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p4_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p4_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p4_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p4_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p4_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p4_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p4_65` text CHARACTER SET latin1 NOT NULL,
  `p5_52` text CHARACTER SET latin1 NOT NULL,
  `p5_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p5_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p5_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p5_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p5_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p5_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p5_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p5_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p5_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p5_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p5_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p5_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p5_65` text CHARACTER SET latin1 NOT NULL,
  `p6_52` text CHARACTER SET latin1 NOT NULL,
  `p6_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p6_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p6_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p6_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p6_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p6_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p6_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p6_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p6_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p6_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p6_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p6_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p6_65` text CHARACTER SET latin1 NOT NULL,
  `p7_52` text CHARACTER SET latin1 NOT NULL,
  `p7_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p7_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p7_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p7_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p7_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p7_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p7_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p7_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p7_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p7_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p7_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p7_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p7_65` text CHARACTER SET latin1 NOT NULL,
  `p8_52` text CHARACTER SET latin1 NOT NULL,
  `p8_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p8_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p8_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p8_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p8_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p8_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p8_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p8_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p8_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p8_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p8_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p8_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p8_65` text CHARACTER SET latin1 NOT NULL,
  `p9_52` text CHARACTER SET latin1 NOT NULL,
  `p9_53` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p9_54` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p9_55` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p9_56` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p9_57` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p9_58` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p9_59` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p9_60` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p9_61` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p9_62` varchar(1) CHARACTER SET latin1 NOT NULL,
  `p9_63` varchar(6) CHARACTER SET latin1 NOT NULL,
  `p9_64` varchar(3) CHARACTER SET latin1 NOT NULL,
  `p9_65` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `quest`
--

INSERT INTO `quest` (`fol_int`, `rand_fol`, `reg_by`, `page_stat`, `p0`, `p1`, `p2`, `p3`, `p4`, `p5`, `p5_1`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p34_1`, `p35`, `p36`, `p36_1`, `p37`, `p38`, `p38_1`, `p39`, `p40`, `p41`, `p42`, `p43`, `p44`, `p45`, `p46`, `p47`, `p48`, `p49`, `p50`, `p51`, `p86`, `p87`, `p88`, `p89`, `p90`, `p91`, `p92`, `p93`, `p94`, `p95`, `p96`, `p97`, `p98`, `p99`, `p100`, `p101`, `p102`, `p103`, `p104`, `p105`, `p106`, `p107`, `p108`, `p109`, `p110`, `p111`, `p112`, `p113`, `p114`, `p115`, `p116`, `p117`, `p118`, `p118_1`, `p119`, `p119_1`, `p120`, `p121`, `numdefam`, `fam_listo`, `p1_52`, `p1_53`, `p1_54`, `p1_55`, `p1_56`, `p1_57`, `p1_58`, `p1_59`, `p1_60`, `p1_61`, `p1_62`, `p1_63`, `p1_64`, `p1_65`, `p2_52`, `p2_53`, `p2_54`, `p2_55`, `p2_56`, `p2_57`, `p2_58`, `p2_59`, `p2_60`, `p2_61`, `p2_62`, `p2_63`, `p2_64`, `p2_65`, `p3_52`, `p3_53`, `p3_54`, `p3_55`, `p3_56`, `p3_57`, `p3_58`, `p3_59`, `p3_60`, `p3_61`, `p3_62`, `p3_63`, `p3_64`, `p3_65`, `p4_52`, `p4_53`, `p4_54`, `p4_55`, `p4_56`, `p4_57`, `p4_58`, `p4_59`, `p4_60`, `p4_61`, `p4_62`, `p4_63`, `p4_64`, `p4_65`, `p5_52`, `p5_53`, `p5_54`, `p5_55`, `p5_56`, `p5_57`, `p5_58`, `p5_59`, `p5_60`, `p5_61`, `p5_62`, `p5_63`, `p5_64`, `p5_65`, `p6_52`, `p6_53`, `p6_54`, `p6_55`, `p6_56`, `p6_57`, `p6_58`, `p6_59`, `p6_60`, `p6_61`, `p6_62`, `p6_63`, `p6_64`, `p6_65`, `p7_52`, `p7_53`, `p7_54`, `p7_55`, `p7_56`, `p7_57`, `p7_58`, `p7_59`, `p7_60`, `p7_61`, `p7_62`, `p7_63`, `p7_64`, `p7_65`, `p8_52`, `p8_53`, `p8_54`, `p8_55`, `p8_56`, `p8_57`, `p8_58`, `p8_59`, `p8_60`, `p8_61`, `p8_62`, `p8_63`, `p8_64`, `p8_65`, `p9_52`, `p9_53`, `p9_54`, `p9_55`, `p9_56`, `p9_57`, `p9_58`, `p9_59`, `p9_60`, `p9_61`, `p9_62`, `p9_63`, `p9_64`, `p9_65`) VALUES
(84, 'VXGU0B4', 'Caox', 'Rdy', '', '114', 'Reynoso Rodriguez', 'Calle Falsa 123', '17', 'Sara Lucia', '454545', 'Ramon Rmz', 'Alfa', '11/05/2018', '406', '1', '1', '1', '1', '5', '1', '', '', '1', '1', '1', '1', '1', '0', '0', '1', '1', 'ibuprofeno', '0', '1', '1', '1', 'Refuerzo Influenza', '1', 'Piedras en la vesicula', '1', '0', '', '', '1', 'Piedras en la vesicula', '1', '1', '3', '0', '0', '0', '1', '0', '0', '0', '1', '1', '1', '2', '1', '3', '1', '2', '0', '2', '2', '2', '1', '1', '1', '2', '1', '2', '0', '1', '1', '2', '0', '1', '1', '2', '1', '2', '2', '3', '6', '7', '', '2', '2', 'r', '2', '', '0', '', ' Esto es un test de la pregunta 120', ' sdfasfasdfasdfa 121', '3', '0', 'Ruben Alan Sifuentes rodriguez', '32', '1', '1', '1', '1', '12', '1', '33', '1', '3', '111.5', '180', '0;6;9;11', 'pppp2222', '', '', '', '', '', '', '', '', '', '', '', '', '', 'asdfasdfasdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 'asdfad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
  MODIFY `fol_int` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
