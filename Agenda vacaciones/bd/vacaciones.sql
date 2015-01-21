-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-01-2015 a las 11:37:15
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vacaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baja`
--

CREATE TABLE IF NOT EXISTS `baja` (
  `codigo` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `comentarios` text NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `localidadDeTrabajo` varchar(30) NOT NULL,
  `becario` int(1) NOT NULL,
  `movil` int(11) NOT NULL,
  `comentarios` text NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `festivos`
--

CREATE TABLE IF NOT EXISTS `festivos` (
  `ambito` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `comentarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `festivos`
--

INSERT INTO `festivos` (`ambito`, `fecha`, `comentarios`) VALUES
('nacional', '2015-01-01', ''),
('nacional', '2015-01-06', ''),
('nacional', '2015-04-03', ''),
('nacional', '2015-05-01', ''),
('nacional', '2015-08-15', ''),
('nacional', '2015-10-12', ''),
('nacional', '2015-12-08', ''),
('nacional', '2015-12-25', ''),
('Torrelavega', '2015-08-17', ''),
('Torrelavega', '2015-09-16', ''),
('regional', '2015-04-02', ''),
('regional', '2015-04-03', ''),
('regional', '2015-04-06', ''),
('regional', '2015-09-15', ''),
('regional', '2015-11-02', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `codigo` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `comentarios` text NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(40) NOT NULL,
  `ctv` varchar(40) NOT NULL,
  `admin` int(1) NOT NULL,
  `dni` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones`
--

CREATE TABLE IF NOT EXISTS `vacaciones` (
  `codigo` int(11) NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `comentarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
