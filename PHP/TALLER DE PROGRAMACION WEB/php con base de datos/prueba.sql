-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-08-2016 a las 11:03:12
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `prueba`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `agenda`
-- 

CREATE TABLE `agenda` (
  `nombre` varchar(50) default NULL,
  `direccion` varchar(50) default NULL,
  `telefono` varchar(15) default NULL,
  `email` varchar(25) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `agenda`
-- 

INSERT INTO `agenda` VALUES ('Leonardo Palomino ', 'av.losolvidados', '949466464644', 'leo@hotmail.com');
INSERT INTO `agenda` VALUES ('olga', 'av.pepsi', '9646497446', 'lei-t-o97@hot.com');
INSERT INTO `agenda` VALUES ('garriazp', 'av.mexico', '4820633', 'ldsoa@hotmai-.com');
INSERT INTO `agenda` VALUES ('dylan', 'av.rimac', '484964649', 'goku@gmail.com');
