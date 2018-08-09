-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 29-08-2016 a las 19:46:22
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `tutorialesnet`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `registro`
-- 

CREATE TABLE `registro` (
  `id` int(11) NOT NULL auto_increment,
  `realname` varchar(100) NOT NULL,
  `nick` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `registro`
-- 

INSERT INTO `registro` VALUES (1, 'dsad', 'asdasdsa', '81dc9bdb52d04dc20036dbd8313ed055');
