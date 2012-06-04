-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-06-2012 a las 04:34:22
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cidera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(15) NOT NULL,
  `programa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`nombre`, `usuario`, `clave`, `programa`) VALUES
('hector hernandez', 'uqhector', 'uingesis', 'sistemas'),
('leidy viviana osorio', 'uqleidy', '1234', 'sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bocatoma`
--

CREATE TABLE IF NOT EXISTS `bocatoma` (
  `nombre` varchar(200) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `oferta` varchar(9) NOT NULL,
  `caudal` varchar(9) NOT NULL,
  `empresa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bocatoma`
--

INSERT INTO `bocatoma` (`nombre`, `ubicacion`, `oferta`, `caudal`, `empresa`) VALUES
('bocatoma epa', 'salento', '', '', 'epa'),
('prueba', 'uniquindio', '', '', 'universidad del quindio'),
('palestina baja', 'salento', '', '', 'calarca'),
('calle larga', 'calarca', '', '', 'calarca'),
('centro de la guadua', 'cordoba', '', '', 'cordoba'),
('prueba 2', 'uniquindio', '', '', 'universidad del quindio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumo`
--

CREATE TABLE IF NOT EXISTS `consumo` (
  `municipio` varchar(50) NOT NULL,
  `fecha` int(11) NOT NULL,
  `estrato` varchar(2) NOT NULL,
  `consumo` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consumo`
--

INSERT INTO `consumo` (`municipio`, `fecha`, `estrato`, `consumo`) VALUES
('buena vista', 11, '1', 178),
('buena vista', 12, '1', 155),
('buena vista', 11, '2', 2947),
('buena vista', 11, '3', 688),
('buena vista', 11, '4', 0),
('buena vista', 11, '5', 0),
('buena vista', 11, '6', 0),
('buena vista', 11, '7', 706),
('buena vista', 11, '8', 52),
('buena vista', 12, '2', 2431),
('buena vista', 12, '3', 557),
('buena vista', 12, '4', 0),
('buena vista', 12, '5', 0),
('buena vista', 12, '6', 0),
('buena vista', 12, '7', 532),
('buena vista', 12, '8', 54);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
