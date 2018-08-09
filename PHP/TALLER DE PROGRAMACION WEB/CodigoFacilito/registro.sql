-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 01-09-2016 a las 16:14:33
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `reg_users`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `registro`
-- 

CREATE TABLE `registro` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `NOMBRE` varchar(30) collate utf8_spanish_ci NOT NULL,
  `USER` varchar(30) collate utf8_spanish_ci NOT NULL,
  `PW` varchar(30) collate utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(30) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `registro`
-- 

INSERT INTO `registro` VALUES (3, 'Enmanuel', 'Enmanuel12', '123456', 'enmanuel102@hotmail.com');
