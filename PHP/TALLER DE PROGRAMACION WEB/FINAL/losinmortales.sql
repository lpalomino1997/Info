-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-09-2016 a las 18:10:03
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Volcar la base de datos para la tabla `venta`
-- 

INSERT INTO `venta` VALUES (0000001, 8574, 'leoda', 'sdadsaf', 'ucv', 9, 6.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `venta` VALUES (0000002, 986, 'jadjs', 'dsad', 'lcd', 9, 5032.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `venta` VALUES (0000003, 0, 'dsad', 'dsads', 'adsadasd', 6, 3.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `venta` VALUES (0000004, 8966, 'miguel', 'jee', 'lcd poras', 9, 6.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `venta` VALUES (0000005, 7894, 'leonardo palomino', 'jacinto reyes', 'celular', 56, 3.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `venta` VALUES (0000006, 9788, 'HUARAZ', 'LOCAL', 'MICROFONO', 3, 3.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `venta` VALUES (0000007, 8787, 'JACINTO', 'OTOYA', 'POIRTATIL', 3, 3.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `venta` VALUES (0000008, 8987, 'leo', 'leo', 'leo', 3, 3.00, NULL, NULL, NULL, NULL);
