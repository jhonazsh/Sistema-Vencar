-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2013 a las 00:31:18
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base_autos`
--
CREATE DATABASE IF NOT EXISTS `base_autos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `base_autos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `marca` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ano_fabricacion` date NOT NULL,
  `color` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `serie` int(11) NOT NULL,
  `pais` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `proveedor` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`marca`),
  UNIQUE KEY `modelo` (`modelo`,`ano_fabricacion`,`color`,`serie`,`pais`,`proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`marca`, `modelo`, `ano_fabricacion`, `color`, `serie`, `pais`, `proveedor`) VALUES
('', '', '0000-00-00', '', 0, '', ''),
('Toyota', 'deli', '1998-09-09', 'Negro', 234500011, 'Japon', 'Toyotaton'),
('kawasaki', 'sandy', '1900-11-12', 'Amarillo', 23400, 'italia', 'general XX');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
