-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 16-09-2016 a las 17:00:22
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `losinmortales`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `venta`
-- 

CREATE TABLE `venta` (
  `id` bigint(7) unsigned zerofill NOT NULL auto_increment,
  `id_cliente` bigint(5) NOT NULL,
  `ruc` bigint(7) NOT NULL,
  `numerofac` int(12) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fechaemision` date NOT NULL,
  `nombres_cli` varchar(35) default NULL,
  `vendedor` varchar(25) default NULL,
  `articulo` varchar(30) default NULL,
  `cantidad` int(8) default NULL,
  `pu` double(8,2) default NULL,
  `importe` double(8,2) default NULL,
  `subtotal` double(8,2) default NULL,
  `igv` double(8,2) default NULL,
  `total` double(8,2) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `venta`
-- 

INSERT INTO `venta` VALUES (0000001, 8966, 1564788, 1236, 'av alcazar', '2016-06-12', 'miguel', 'jee', 'lcd poras', 9, 6.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `venta` VALUES (0000002, 4569, 45687987, 1254, 'av rimac', '2016-04-05', 'leonardo', 'palomino', 'lcd', 3, 3.00, NULL, NULL, NULL, NULL);
