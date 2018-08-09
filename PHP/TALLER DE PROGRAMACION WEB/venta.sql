-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql311.epizy.com
-- Tiempo de generación: 06-09-2016 a las 17:07:21
-- Versión del servidor: 5.6.31-77.0
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `epiz_18641221_losinmortales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id` bigint(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_cliente` bigint(5) NOT NULL,
  `nombres_cli` varchar(35) DEFAULT NULL,
  `vendedor` varchar(25) DEFAULT NULL,
  `articulo` varchar(30) DEFAULT NULL,
  `cantidad` int(8) DEFAULT NULL,
  `pu` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `id_cliente`, `nombres_cli`, `vendedor`, `articulo`, `cantidad`, `pu`) VALUES
(0000001, 785, 'paula', 'jacinto', 'leo', 6, 2.00),
(0000002, 1234, 'miguel', 'angel', 'laser', 1, 5.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
