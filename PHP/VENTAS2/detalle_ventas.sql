-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 23-09-2016 a las 10:57:12
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `losinmortales`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_ventas`
-- 

CREATE TABLE `detalle_ventas` (
  `id` bigint(7) unsigned zerofill NOT NULL auto_increment,
  `importes` double(8,2) default NULL,
  `subtotal` double(8,2) default NULL,
  `total` double(8,2) default NULL,
  `obs` varchar(40) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `detalle_ventas`
-- 

INSERT INTO `detalle_ventas` VALUES (0000001, 5000.00, 5000.00, 5000.00, 'ok');
INSERT INTO `detalle_ventas` VALUES (0000002, 500.00, 500.00, 500.00, 'ok');
INSERT INTO `detalle_ventas` VALUES (0000003, 210.00, 210.00, 210.00, 'ok');
