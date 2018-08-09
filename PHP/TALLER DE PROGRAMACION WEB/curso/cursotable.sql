-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 27-08-2016 a las 16:57:20
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `cursobd`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cursotable`
-- 

CREATE TABLE `cursotable` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `NOMBRE` varchar(50) collate utf8_spanish_ci NOT NULL,
  `APELLIDO` varchar(50) collate utf8_spanish_ci NOT NULL,
  `PW` varchar(50) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `cursotable`
-- 

INSERT INTO `cursotable` VALUES (1, 'leonardo', 'palomino', '123456');
INSERT INTO `cursotable` VALUES (2, 'jacinto', 'leonard', 'olsalsld');
