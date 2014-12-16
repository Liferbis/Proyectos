-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-12-2014 a las 12:07:11
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `articulo` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `precio` float NOT NULL,
  `stock` int(11) NOT NULL,
  `ruta` varchar(30) NOT NULL,
  `nomb` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`articulo`, `codigo`, `precio`, `stock`, `ruta`, `nomb`) VALUES
('Cable hdmi', 0, 5.9, 9, 'img/hdmi.JPG', 'hdmi'),
('altavoz', 1, 10.5, 9, 'img/altavoz.JPG', 'altavoz'),
('microfono', 2, 20.4, 20, 'img/micro.JPG', 'micro'),
('apple TV', 3, 100.5, 5, 'img/aple1v.JPG', 'apple'),
('teclado', 4, 9.9, 9, 'img/teclado.JPG', 'teclado'),
('raton', 5, 9.9, 5, 'img/raton.JPG', 'raton');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `dni` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `autonoma` varchar(20) NOT NULL,
  `ctv` varchar(100) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`dni`, `nombre`, `apellido1`, `apellido2`, `direccion`, `cp`, `autonoma`, `ctv`) VALUES
('12345678z', 'Pepito', 'Grillo', 'Perez', 'c/ Pinocho', 2, 'Madrid', 'eb62f6b9306db575c2d596b1279627a4'),
('72150688x', 'Lidia', 'fernandez', 'fernandez', 'Fer De todos', 39300, 'Cantabria', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
