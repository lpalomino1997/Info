-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 23-09-2016 a las 10:57:21
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
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `venta`
-- 

INSERT INTO `venta` VALUES (0000001, 6977, 'larita', 'loro', 'lcd pantalla led', 5, 1000.00);
INSERT INTO `venta` VALUES (0000002, 789, 'josefino', 'patricio', 'play', 5, 100.00);
INSERT INTO `venta` VALUES (0000003, 2565, 'andresñ', 'usb', 'mouse', 3, 70.00);
